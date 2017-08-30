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

            'mobile'        =>['name'=>'Mobile'     ,'type'=>'calculated','compute'=>'phones'       ,'serialize'=>true],

            'team_id'=>['name'=>'Team',
			 		'type'=>'Many2one',
			 		'serialize'=>true,
			 		'relation'=>['class'=>"App\Models\Admin\Teams",'classid'=>'id','where'=>['level_type','5'],'controller'=>'Teams']],
            'office_id'=>['name'=>'Office',
			 		'type'=>'Many2one',
			 		'serialize'=>true,
			 		'relation'=>['class'=>"App\Models\Admin\Teams",'classid'=>'id','where'=>['level_type','4'],'controller'=>'Teams']],
            'branch_id'=>['name'=>'Branch',
			 		'type'=>'Many2one',
			 		'serialize'=>true,
			 		'relation'=>['class'=>"App\Models\Admin\Teams",'classid'=>'id','where'=>['level_type','3'],'controller'=>'Teams']],
            'org_id'=>['name'=>'Orgnize',
			 		'type'=>'Many2one',
			 		'serialize'=>true,
			 		'relation'=>['class'=>"App\Models\Admin\Teams",'classid'=>'id','where'=>['level_type','2'],'controller'=>'Teams']],
            'country_id'=>['name'=>'Country',
			 		'type'=>'Many2one',
			 		'serialize'=>true,
			 		'relation'=>['class'=>"App\Models\Admin\Teams",'classid'=>'id','where'=>['level_type','1'],'controller'=>'Teams']],


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
			    $p=array_filtercolumn($this->Contacts,[["contactTypeId",'2']]);
			    return $p[0]->contactValue;
            }
            function phones(){
			    $p=array_filtercolumn($this->Contacts,[["contactTypeId",'3']]);
						//print_r($this->Contacts);
						 //print_r($p);
			    return $p[0]->contactValue;
            }
            function addresss(){
			    $p=array_filtercolumn($this->Contacts,[["contactTypeId",'1']]);
			    return $p[0]->contactValue;
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
                    //echo $this->phones();
                    if( $this->mobile!=''){

                        try
                        {

                            $smsurl=$SET->getSetting('sms_api_link','SMS');

                            $smsurl=str_replace("{mobiles}",$this->mobile, $smsurl);
                            $message="Hello, ".$this->First_Name."\r\n";
                            $message="Your profile hase been approved.\r\n";
                            $message.="Username: ".$user->email."\r\n";
                            $message.="Password: ".'pwd_'.substr($this->National_Number,-4)."\r\n";


                            $smsurl=str_replace("{msg}",urlencode($message) , $smsurl);
                            $smsurl=str_replace("{mobiles}",$this->mobile, $smsurl);

                            // echo $smsurl;
                            $jsoncode = file_get_contents($smsurl);
                            //echo $jsoncode;
                        }
                        catch (\Exception $ex)
                        {
                            echo $ex->getMessage();
                        }



                    }
                }

                $reg=new App\Models\Admin\RegisteryUserLog;
                $lst=$reg->supperUser()->where('userId',$this->id)->where('approval_request','1')->orderBy('id')->limit(1)->get();

                $this->team_id      =$lst[0]->teamId->id;
                $this->office_id    =$lst[0]->teamId->parentId->id;
                $this->branch_id    =$lst[0]->teamId->parentId->parentId->id;
                $this->org_id       =$lst[0]->teamId->parentId->parentId->parentId->id;
                $this->country_id   =$lst[0]->teamId->parentId->parentId->parentId->parentId->id;

                if($this->serial==''){
                    //$message.= count($lst).",";
                    if(count($lst)>0){
                       // echo $lst[0]->teamId->getNewProfileSerial()."-";
                        $this->serial=$lst[0]->teamId->getNewProfileSerial();
                        if(!$this->update()){
                            $message.=$this->error;
                        }
                    }
                }

                //$message.= count($lst).",";
                if(count($lst)>0){
                    // echo $lst[0]->teamId->getNewProfileSerial()."-";
                    $this->pcode=$lst[0]->teamId->getNewProfileCode();
                    if(!$this->update()){
                        $message.=$this->error;
                    }
                }




                if(isset($message)) return ['type'=>'error','message'=>$message];

                return true;
                //return ['DoActionRequired'=>true,'form'=>view("Users/add",['data'=>$user])];
            }


}
?>
