<?
namespace App\Controllers;
use App\Addons\Validator as Validator;

class Users extends BaseController
{
    protected  $model="App\Models\Auth\User";
    protected  $authRequired=true;

    function add($request){
        if(isset($request->post['password'])) {
            $request->post['password']=md5($request->post['password']);
            $request->post['token']=guid();
        }
        parent::add($request);
    }
}

?>
