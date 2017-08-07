<?
namespace App\Controllers;

class SingleEvent extends BaseController
{
    protected  $model="App\Models\lookup\SingleEvent";
    protected $authRequired=true;

    function index1($request){

        return $this->view();
    }
	
}
?>
