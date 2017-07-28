<?
namespace App\Models\Notify;

use Framework\Database;
use Framework\BLL;

class Waitinglist extends BLL{
	var $tablename="waitinglist";
	var $col_pk="id";

	var $fields=[
	    ];

			function __construct(){

				$this->fields['model_id']=['name'=>'Releted Record',
						'type'=>'Many2one',
						'serialize'=>true,
						'relation'=>['class'=>$this->model,'classid'=>'id','controller'=>'Comp']];
						parent::__construct();
			}

}
?>
