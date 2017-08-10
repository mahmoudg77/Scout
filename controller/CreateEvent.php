<?
namespace App\Controllers;

class CreateEvent extends BaseController
{
    protected  $model="App\Models\lookup\CreateEvent";
    protected $authRequired=true;

    function index1($request){

        return $this->view();
    }
	
}
?>
