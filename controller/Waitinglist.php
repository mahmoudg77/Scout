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


}

?>
