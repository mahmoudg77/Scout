<?
namespace App\Models\Profile;
use App;
use Framework\Database;
use Framework\BLL;

class Profile extends BLL{

	var $tablename="profile";
	var $col_pk="Profile_ID";
	use \Framework\NotifyModel;
    use \Framework\ApprovelModel;


	var $fields=[
			'Comps'=>['name'=>'Comps',
					'type'=>'Many2many',
					'serialize'=>true,
					'relation'=>['class'=>"App\Models\Profile\Comp",'classid'=>'campId','table'=>'App\Models\Profile\CompUserLog','thisid'=>'userId','controller'=>'Comp']],

			 'Contacts'=>['name'=>'Contacts',
			 		'type'=>'One2many',
			 		'serialize'=>true,
			 		'relation'=>['class'=>"App\Models\Profile\ContactUser",'classid'=>'userId','controller'=>'ContactUser']],

			 'Hobbies'=>['name'=>'Hobbies',
			 		'type'=>'Many2many',
			 		'serialize'=>true,
			 		'relation'=>['class'=>"App\Models\Lookup\Hobbies",'classid'=>'hobbiesId','table'=>'App\Models\Profile\HobbyUserLog','thisid'=>'userId','controller'=>'Hobbies']],
             'Images'=>[
                    'name'=>"Image",
                    'serialize'=>true,
                    'type'=>'One2many',
                    'relation'=>['class'=>'App\Models\Media\Images','classid'=>'model_id','where'=>['model_name','App\Models\Profile\Profile'],'controller'=>'Images'],
                        ],
             'mobile'=>[
                    'name'=>"Mobile",
                    'serialize'=>true,
                    'type'=>'calculated',
                    'compute'=>'phones',
                        ],
             ];

			function name()
		 	{
		 		return $this->First_Name." ".$this->Second_Name." ".$this->Third_Name;
		 	}

			function PersonalImage(){
			   $p=array_filtercolumn($this->Images,[["tag","Personal"]]);
			   return $p[0];
			}
			function CoverImage(){
			    $p=array_filtercolumn($this->Images,[["tag","Cover"]]);
			    return $p[0];
			}

            function emails(){
			    $p=array_filtercolumn($this->Contacts,[["contactTypeId",2]]);
			    return $p[0];
            }
            function phones(){
			    $p=array_filtercolumn($this->Contacts,[["contactTypeId",3]]);
			    return $p[0];
            }
            function addresss(){
			    $p=array_filtercolumn($this->Contacts,[["contactTypeId",1]]);
			    return $p[0];
            }



            function onApproved(){

                global $context,$SET;
                $user=new App\Models\Auth\User;
                if(count($user->supperUser()->where('accid',$this->id)->limit(1)->get())==0){
                    $user=new App\Models\Auth\User;
                    $user->email=$this->National_Number;
                    $user->password=md5('pwd_'.substr($this->National_Number,-4));
                    $user->name=$this->name;
                    $user->token=guid();
                    $user->accid=$this->id;
                    if(!$user->supperUser()->insert()){
                       echo $user->error;
                    }
                      if( $this->phones->contactValue!=''){

                        try
                        {

                            $smsurl=$SET->getSetting('sms_api_link','SMS');
                            $smsurl=str_replace("{mobiles}",$this->mobile, $smsurl);
                            $message="Hello, ".$this->First_Name."\n";
                            $message="Your profile hase been approved.\n";
                            $message.="Username: ".$user->email."\n";
                            $message.="Password: ".'pwd_'.substr($this->National_Number,-4)."\n";


                            $smsurl=str_replace("{msg}",urldecode($message) , $smsurl);
                            $smsurl=str_replace("{mobiles}",$this->mobile, $smsurl);


                            $jsoncode = file_get_contents($smsurl);

                        }
                        catch (\Exception $ex)
                        {
                            echo $ex->getMessage();
                        }



                    }
                }

                if($this->serial==''){
                    $reg=new App\Models\Admin\RegisteryUserLog;
                    $lst=$reg->supperUser()->where('userId',$this->id)->orderBy('id')->limit(1)->get();
                    //$message.= count($lst).",";
                    if(count($lst)>0){
                       // echo $lst[0]->teamId->getNewProfileSerial()."-";
                        $this->serial=$lst[0]->teamId->getNewProfileSerial();
                        if(!$this->update()){
                            $message.=$this->error;
                        }
                    }
                }
                if(isset($message)) return ['type'=>'error','message'=>$message];

                return true;
                //return ['DoActionRequired'=>true,'form'=>view("Users/add",['data'=>$user])];
            }


}
?>
