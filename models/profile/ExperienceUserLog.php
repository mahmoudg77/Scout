<?
namespace App\Models\Profile;

use Framework\Database;
use Framework\BLL;

class ExperienceUserLog extends BLL{
	var $tablename="experienesuser";
	var $col_pk="id";

	var $fields=[
        'experienceId'=>['name'=>'Group',
            'type'=>'Many2one',
            'serialize'=>true,
            'relation'=>['class'=>"App\Models\Lookup\Experiences",'classid'=>'id','controller'=>'Experiences']],
        'userId'=>['name'=>'User',
            'type'=>'Many2one',
            'serialize'=>true,
            'relation'=>['class'=>"App\Models\Profile\Profile",'classid'=>'Profile_ID','controller'=>'Profile']],
  	    ];
}
?>
