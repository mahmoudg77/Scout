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
				if(strpos($class,'App\\Models\\',0)!==false){
				    $obj= new Models;
				    $obj->name=$class;
					$obj->id=$class;
				    $list[]=$obj;
				}
			}


		return $list;
	}
function get(){
    $arr=Models::all();

    if($this->where_arr){
        $arr=array_filtercolumn($arr,$this->where_arr);
    }

    return $arr;
}
function Many2one($class,$foraginkey='',$classid='',$where = NULL){
	    $obj=new Models;
			$this->where_arr[]=$where;
			$obj=$this->supperUser()->get();
		return $obj[0];
}


}
