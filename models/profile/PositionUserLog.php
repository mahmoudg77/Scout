<?
namespace App\Models\Profile;

use Framework\Database;
use Framework\BLL;

class PositionUserLog extends BLL{
	var $tablename="positionuser";
	var $col_pk="id";

    use \Framework\NotifyModel;
    use \Framework\ApprovelModel;

	var $fields=[
            'postionId'=>['name'=>'Postion',
                'type'=>'Many2one',
                'serialize'=>true,
                'relation'=>['class'=>"App\Models\Lookup\Position",'classid'=>'id','controller'=>'Position']],
            'userId'=>['name'=>'User',
                'type'=>'Many2one',
                'serialize'=>true,
                'relation'=>['class'=>"App\Models\Profile\Profile",'classid'=>'Profile_ID','controller'=>'Profile']],
  	    ];

    function name(){
        return $this->userId->name . "(" .$this->postionId->name .")";
    }

}
?>
