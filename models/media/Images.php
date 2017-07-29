<?
namespace App\Models\Media;

use Framework\Database;
use Framework\BLL;

class Images extends BLL{
	var $tablename="images";
	var $col_pk="id";


	var $fields=[
		
	    ];


	function __set($key,$value){
        parent::__set($key,$value);
		if($key!="model_name") return;

        if($this->model_name=="") return;

        $c=new $this->model_name;
		$this->fields['model_id']=['name'=>'Releted Record',
			'type'=>'Many2one','visible'=>true,
			'serialize'=>true,
			'relation'=>['class'=>$this->model_name,'classid'=>$c->getPKname(),'controller'=>'Comp']];
	}

}
?>
