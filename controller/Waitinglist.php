<?
namespace App\Controllers;
use App;
use Framework\Addons\Validator as Validator;


class Waitinglist extends BaseController
{
    protected  $model="App\Models\Notify\Waitinglist";
    protected $authRequired=true;

    function postNotify($request){
        $m=new $this->model;
        $this->model_name=$request->post['model_name'];
        $this->model_id=$request->post['model_id'];

        $m->Notify();
    }

    function index($request){
      $obj=new $this->model;
      $data=$obj->where('is_done','0')->get();
      return $this->view('all',compact('data'));
    }

    function wait($request){
        
    }
    function postApprove($request){
        try {
          $validate=new  Validator();
          $validate->validate($request->post,['id'=>'Required|Integer']);

          //$req=new App\Models\Notify\Waitinglist;
          $req=App\Models\Notify\Waitinglist::find($request->post['id']);

           $approve_model= $req->model_id;

          if($approve_model->approve()){

            $req->is_done=1;
            $req->update();

            if($request->isAjax()) return json_success("Approved success");


            //$data=new App\Models\Notify\Waitinglist;
            return redirectTo("Waitinglist");
          }else{
            throw new \Exception($req->error . " " .$approve_model->error );
          }


        } catch (\Exception $e) {
            if($request->isAjax()) return json_error($e->getMessage());
            throw $e;
        }

    }
    function postReject($request){
      try {
        $validate=new Validator();
        $validate->validate($request->post,['id'=>'Required|Integer']);

        $req=new App\Models\Notify\Waitinglist;
        $req=$req->find($request->post['id']);
        $approve_model=new $req->model_name;
        $approve_model=$req->model_id;

        if($approve_model->reject()){

          $req->is_done=0;
          $req->update();

          if($request->isAjax()) return json_success("Rejected success");

          $data=new App\Models\Notify\Waitinglist;
          return $this->view('all',['data'=>$data->get()]);
        }else{
          throw new \Exception($req->error . " " .$approve_model->error );

        }


      } catch (\Exception $e) {
          if($request->isAjax()) return json_error($e->getMessage());
          throw $e;
      }

    }

 }

?>
