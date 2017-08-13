<?
namespace App\Controllers;

class SingleEvent extends BaseController
{
    protected  $model="App\Models\Content\SingleEvent";
    protected $authRequired=true;

    function index1($request){

        return $this->view();
    }
	
}
?>
