<?
namespace App\Controllers;
use Framework\Addons\Validator as Validator;

class Login extends BaseController
{
    protected  $model="App\Models\Auth\User";
    protected  $authRequired=false;

    function index($request){
        return view('auth/login');
    }
     function all($request){
        return view('home');
    }
   function login($request=null){


    }
    function postLogin($request){
         try{
                $validate=new Validator();
                $validate->validate($request->post,['email'=>'Requierd|Strings','password'=>'Requierd|Strings']);

                $user=new $this->model;
                $data=$user->where("email",$request->post['email'])->where("password",md5($request->post['password']))->supperUser()->get();

                if(!$data){
                    $message= "Invalid login data !!";
					$email=$request->post['email'];
					$password=$request->post['password'];
					return $this->view('auth/login',compact('message','email','password'));                     
                }

                $user=$data[0];
                //$user->account();
                //$user->account->users;
                $_SESSION['USER_TOKEN']=$user->token;

                //$group=App\Auth\UserGroup::find(1);
                //$group->members;
                if(isset($request->get['api'])){
                      json_success("",$user);
                }else{
                    return redirectTo("Dashboard");
                }
            }catch(\Exception $ex){
                if(isset($request->get['api'])){
                      json_success($ex);
                }else{
                    $message= $ex->getMessage();
					$email=$request->post['email'];
					$password=$request->post['password'];
					return $this->view('auth/login',compact('message','email','password'));
                }
            }

    }
   function logout($request=null){
       session_destroy();
       if($request->get['next']){
           return redirectTo($request->get['next']);
       }else{
            return redirectTo("");
       }
   }

}

?>
