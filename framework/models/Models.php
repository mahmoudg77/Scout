<?php
namespace Framework;
class Models extends BLL
{
	//var $list=[];
	var $fields=[
	        'name'=>[
	                'name'=>'Name',
	                'type'=>'nvarchar',
	                'size'=>255,
	            ],
					'id'=>[
	                'name'=>'id',
	                'type'=>'nvarchar',
	                'size'=>255,
	            ],
	    ];
	function __construct(){

	}
	static function all(){

		$list=[];
			foreach(get_declared_classes() as $class){
				if(strpos($class,'App\\',0)!==false){
				    $obj= new Models;
				    $obj->name=$class;
						$obj->id=$class;
				    $list[]=$obj;
				}
			}


		return $list;
	}
function get(){
return $this->all();
}
	function Many2one($class,$foraginkey='',$classid='',$where = NULL){
	    $obj=new Models;
	    $obj->name=$this->$foraginkey;
		return $obj;
	}


}
