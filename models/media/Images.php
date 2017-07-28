<?
namespace App\Models\Media;

use Framework\Database;
use Framework\BLL;

class Images extends BLL{
	var $tablename="images";
	var $col_pk="id";


	var $fields=[
				// 'model_id'=>['name'=>'Releted Record',
				// 	'type'=>'Many2one',
				// 	'serialize'=>true,
				// 	'relation'=>['class'=>'App\Models\Profile\Profile','classid'=>'Profile_ID','controller'=>'Profile']]
	    ];


			function relatedModel(){
				if($this->model_name=="") return;

					$c=new $this->model_name;
					//print_r($c);
					// $this->fields['model_id']=['name'=>'Releted Record',
					// 		'type'=>'Many2one',
					// 		'serialize'=>true,
					// 		'relation'=>['class'=>$this->model_name,'classid'=>$c->getPKname(),'controller'=>'Comp']];
					//

				return $this->Many2one($this->model_name,$c->getPKname());
			}

}
?>
