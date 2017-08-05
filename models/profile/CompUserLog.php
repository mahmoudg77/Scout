<?
namespace App\Models\Profile;

use Framework\Database;
use Framework\BLL;

class CompUserLog extends BLL{
	var $tablename="compuser";
	var $col_pk="id";
    use \Framework\NotifyModel;
    use \Framework\ApprovelModel;

	var $fields=[
        'campId'=>['name'=>'Camp',
            'type'=>'Many2one',
            'serialize'=>true,
            'relation'=>['class'=>"App\Models\Profile\Comp",'classid'=>'id','controller'=>'Comp']],
        'userId'=>['name'=>'User',
            'type'=>'Many2one',
            'serialize'=>true,
            'relation'=>['class'=>"App\Models\Profile\Profile",'classid'=>'Profile_ID','controller'=>'Profile']],
  	    ];

    function name(){
        return $this->userId->name . "(" .$this->campId->name .")";
    }

}
?>
