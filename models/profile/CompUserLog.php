<?
namespace App\Models\Profile;

use Framework\Database;
use Framework\BLL;

class CompUserLog extends BLL{
	var $tablename="compuser";
	var $col_pk="id";

	var $fields=[
        'campId'=>['name'=>'Group',
            'type'=>'Many2one',
            'serialize'=>true,
            'relation'=>['class'=>"App\Models\Auth\UserGroup",'classid'=>'id','controller'=>'Comp']],
        'userId'=>['name'=>'User',
            'type'=>'Many2one',
            'serialize'=>true,
            'relation'=>['class'=>"App\Models\Profile\Profile",'classid'=>'Profile_ID','controller'=>'Profile']],
  	    ];
}
?>
