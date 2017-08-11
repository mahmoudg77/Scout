<?
namespace App\Controllers;
use Framework\Addons\Validator as Validator;

class Login extends BaseController
{
    protected  $model="App\Models\Auth\User";
    protected  $authRequired=false;

    function index($request){
         return $this->view();

    }
     function all($request){
        return $this->view('home');
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

                    if($request->UseApi()) return json_error($message);
					$email=$request->post['email'];
					$password=$request->post['password'];
					return $this->view("index",compact('message','email','password'));
                }

                $user=$data[0];
                
                $user->api_token=guid();
                $user->supperUser()->update();
                if(!$request->UseApi()){
                   $_SESSION['USER_TOKEN']=$user->token;
               }


               if($request->isAjax()){
                    return  json_success("Login Success",$user);
                }else{
                    return redirectTo("Dashboard");
                }
            }catch(\Exception $ex){
                if($request->isAjax()){
                      return json_error($ex);
                }else{
                    $message= $ex->getMessage();
					$email=$request->post['email'];
					$password=$request->post['password'];
					return $this->view("index",compact('message','email','password'));
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
