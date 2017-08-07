<?
namespace App\Controllers;

class Events extends BaseController
{
    protected  $model="App\Models\lookup\Events";
    protected $authRequired=true;

    function index1($request){

        return $this->view();
    }
	
}
?>
