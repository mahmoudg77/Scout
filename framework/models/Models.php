<?php
namespace Framework;
class Models
{
	//var $list=[];
	var $fields=[
	        'name'=>[
	                'name'=>'Name',
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
				    $list[]=$obj;
				}
			}


		return $list;
	}

	function Many2one($class,$foraginkey='',$classid=''){
	    $obj=new Models;
	    $obj->name=$this->$foraginkey;
		return $obj;
	}


}
