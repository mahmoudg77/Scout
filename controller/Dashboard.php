<?
namespace App\Controllers;

class Dashboard extends BaseController
{
    protected  $model="";
    protected $authRequired=true;

     function index($request){
      //  $data=new \App\Models\Profile\Profile;
      //  $data= $data->find(2);
      global $context;
if(!$context->user) return redirectTo('');
         $Website="arabscout.net";
         $Date=Date("Y-m-d");
         return $this->view(compact('Website','Date'));
     }

    function index1($request){

        return $this->view();
    }
}
?>
