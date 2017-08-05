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
						'relation'=>['class'=>"App\Models\admin\Teams",'classid'=>'id','controller'=>'Teams']],
				'childs'=>['name'=>'Childs',
						'type'=>'One2many',
						'serialize'=>true,
						'relation'=>['class'=>"App\Models\admin\Teams",'classid'=>'parentId','controller'=>'Teams']],
	    ];

		function fullName($splitter='\\',$links=true){
			$fullName="";
			$parent=$this;
			while($parent){
				$fullName=($links?'<a href="/Teams/item/'.$parent->id.'">'.$parent->name.'</a>':$parent->name) .($fullName==''?'':$splitter). $fullName;
				$parent=$parent->parentId;
			}
			return $fullName;
		}
}
?>
