<?
namespace App\Controllers;

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
      return $this->view(compact('data'));
    }

    function postApprove($request){
        try {
          $obj=new $request->post['model'];
          $obj->approve();
        } catch (Exception $e) {
          echo $e->getMessage();
        }


    }
    function postReject($request){
      try {
        $obj=new $request->post['model'];
        $obj->reject();
      } catch (Exception $e) {
        echo $e->getMessage();
      }


    }

 }

?>
