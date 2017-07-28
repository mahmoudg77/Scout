<?
namespace App\Models\Admin;

use Framework\Database;
use Framework\BLL;

class Teams extends BLL{
	var $tablename="teams";
	var $col_pk="id";

	var $fields=[
				'parentId'=>['name'=>'Parent',
						'type'=>'Many2one',
						'serialize'=>true,
						'relation'=>['class'=>"App\Models\admin\Register",'classid'=>'id','controller'=>'Register']],
			
	    ];
}
?>
