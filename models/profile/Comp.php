<?
namespace App\Models\Profile;

use Framework\Database;
use Framework\BLL;

class Comp extends BLL{
	var $tablename="comp";
	var $col_pk="id";

	var $fields=[
			'Profiles'=>['name'=>'Profiles',
					'type'=>'One2many',
					'serialize'=>true,
					'relation'=>['class'=>"App\Models\Profile\CompUserLog",'classid'=>'userId','controller'=>'Profile','where'=>['approval_request','=','1']]],
	    ];



}
?>
