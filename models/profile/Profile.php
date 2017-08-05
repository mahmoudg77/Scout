<?
namespace App\Models\Profile;

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

			//  function approve(){
			// 	 $this->approved_by=USER_ID;
			// 	 $this->approval_request=1;
			// 	 $this->approved_at=Date("Y-m-d H:i:s");
			// 	 return $this->update();
			 //
			//  }
			//  function reject(){
			// 	 $this->approved_by=USER_ID;
			// 	 $this->approval_request=0;
			// 	 $this->approved_at=Date("Y-m-d H:i:s");
			// 	 return $this->update();
			//  }

}
?>
