<?
namespace App\Models\Profile;

use Framework\Database;
use Framework\BLL;

class HobbyUserLog extends BLL{
	var $tablename="hobbiesusers";
	var $col_pk="id";

	var $fields=[
        'hobbiesId'=>['name'=>'Hobbies',
            'type'=>'Many2one',
            'serialize'=>true,
            'relation'=>['class'=>"App\Models\Lookup\Hobbies",'classid'=>'id','controller'=>'Hobbies']],
        'userId'=>['name'=>'User',
            'type'=>'Many2one',
            'serialize'=>true,
            'relation'=>['class'=>"App\Models\Profile\Profile",'classid'=>'Profile_ID','controller'=>'Profile']],
  	    ];
}
?>
