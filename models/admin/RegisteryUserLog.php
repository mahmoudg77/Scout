<?
namespace App\Models\Admin;

use Framework\Database;
use Framework\BLL;

class RegisteryUserLog extends BLL{
	var $tablename="registeryuser";
	var $col_pk="id";

	var $fields=[
		'regId'=>['name'=>'Register',
				'type'=>'Many2one',
				'serialize'=>true,
				'relation'=>['class'=>"App\Models\admin\Register",'classid'=>'id','controller'=>'Register']],


		'userId'=>['name'=>'User',
				'type'=>'Many2one',
				'serialize'=>true,
				'relation'=>['class'=>"App\Models\Profile\Profile",'classid'=>'Profile_ID','controller'=>'Profile']],
		];
// 		$reguser=new App\Models\Admin\RegisteryUserLog;
//
// 		$reguser->regId=1;
// 		$reguser->userId=55;
// 		$reguser->insert();
// //50
// 		$reguser=new App\Models\Admin\RegisteryUserLog;
// 		$data=$reguser->find(50);
//
// 		echo $data->userId->First_Name;
// 		echo $reguser->regId->Year;


}
?>
