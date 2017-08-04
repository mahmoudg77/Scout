<?
namespace App\Models\Profile;

use Framework\Database;
use Framework\BLL;

class ContactUser extends BLL{
	var $tablename="contactuser";
	var $col_pk="id";

	var $fields=[
				'userId'=>['name'=>"Profile",
							'type'=>'Many2one',
							'serialize'=>true,
							'relation'=>['class'=>'App\Models\Profile\Profile','classid'=>'Profile_ID','controller'=>'Profile']
						],
				'contactTypeId'=>['name'=>"Contact Type",
							'type'=>'Many2one',
							'serialize'=>true,
							'relation'=>['class'=>'App\Models\Lookup\ContactType','classid'=>'id','controller'=>'ContactType']
						]
	    ];

	function name(){
	return $this->contactTypeId->name . ": ".$this->contactValue;
	}
}
?>
