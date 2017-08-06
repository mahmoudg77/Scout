<?
namespace App\Models\Profile;

use Framework\Database;
use Framework\BLL;

class StudyUserLog extends BLL{
	var $tablename="studiesusers";
	var $col_pk="id";

    use \Framework\NotifyModel;
    use \Framework\ApprovelModel;

	var $fields=[
        'studyId'=>['name'=>'Study',
            'type'=>'Many2one',
            'serialize'=>true,
            'relation'=>['class'=>"App\Models\Lookup\Studies",'classid'=>'id','controller'=>'Studies']],
        'userId'=>['name'=>'User',
            'type'=>'Many2one',
            'serialize'=>true,
            'relation'=>['class'=>"App\Models\Profile\Profile",'classid'=>'Profile_ID','controller'=>'Profile']],
  	    ];

    function name(){
        return $this->userId->name . "(" .$this->studyId->name .")";
    }

}
?>
