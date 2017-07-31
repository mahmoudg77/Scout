<?
namespace App\Models\Profile;

use Framework\Database;
use Framework\BLL;

class Profile extends BLL{
	var $tablename="profile";
	var $col_pk="Profile_ID";

	var $fields=[
			'Comps'=>['name'=>'Comps',
					'type'=>'Many2many',
					'serialize'=>true,
					'relation'=>['class'=>"App\Models\Profile\Comp",'classid'=>'mokhymId','table'=>'App\Models\Profile\CompUserLog','thisid'=>'userId','controller'=>'Comp']],
			'Contacts'=>['name'=>'Contacts',
					'type'=>'One2many',
					'serialize'=>true,
					'relation'=>['class'=>"App\Models\Profile\ContactUser",'classid'=>'userId','controller'=>'Contacts']],
			'Hobbies'=>['name'=>'Hobbies',
					'type'=>'Many2many',
					'serialize'=>true,
					'relation'=>['class'=>"App\Models\Lookup\Hobbies",'classid'=>'hobbiesId','table'=>'App\Models\Profile\HobbyUserLog','thisid'=>'userId','controller'=>'Hobbies']],
	    ];

			function name()
		 	{
		 		return $this->First_Name." ".$this->Second_Name." ".$this->Third_Name;
		 	}

}
?>
