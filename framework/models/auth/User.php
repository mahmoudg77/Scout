<?
namespace App\Models\Auth;

use Framework\Database;
use Framework\BLL;

class User extends BLL{
	var $tablename="users";
	public $col_pk="id";

	var $fields=[
	    'accid'=>['name'=>'Profile',
	            'default'=>'2',
	            'compute'=>'',
	            'type'=>'Many2one',
	            'serialize'=>true,
	            'relation'=>['class'=>"App\Models\Profile\Profile",'classid'=>'id','controller'=>'Profile']],
	     'groups'=>['name'=>'Groups',
	            'default'=>'2',
	            'compute'=>'',
	            'type'=>'Many2many',
	            'serialize'=>true,
	            'relation'=>['class'=>"App\Models\Auth\UserGroup",'table'=>"App\Models\Auth\UserGroupRel",'classid'=>'groupid','thisid'=>'userid','controller'=>'auth.UserGroup']],
	    ];

    function joined($g){

    	foreach($this->groups as $group) if($group->groupkey==$g) return true;
    	return false;
    }

    function allow($model,$access){
        $class=new AccessRight;
        $class->supperUser();
		$models=explode("\\",$model);
		$itm="";
		$new_models=[];
		foreach($models as $m){
			$itm.=(($itm=="")?"":"\\").$m;
			$new_models[]=$itm."\*";
		}

    	$arr=$class->where("model","in",$new_models)
				   ->where("accesstype",$access)
				   ->where("groupid","in",array_getcolumn($this->groups,"id"))
				   ->get();
    	return count($arr)>0 ? true:false;
    }

    function allowfilter($model,$access,$groupkey=''){
    	$class=new AccessRight;
    	$class->supperUser();

		$models=explode("\\",$model);
		$itm="";
		$new_models=[$model];
		foreach($models as $m){
			$itm.=(($itm=="")?"":"\\").$m;
			$new_models[]=$itm."\*";
		}
      $class->where("model","in",$new_models) ;
    	$class->where("accesstype",$access);
     	$class->where("groupid","in",array_getcolumn($this->groups,"id"));
		// 	if($groupkey!='') $list->where("groupid",array_column($this->groups,"id"));

		//  				(($groupkey=='')?'':" and (select name from user_group where groupid=user_group.id)='".$groupname."'"));

		// print_r(array_getcolumn($this->groups,"id"));
    	$data=$class->get();
       	return array_getcolumn($data,"filter",false);
    }

}
?>
