<?
namespace App\Controllers;

class Events extends BaseController
{
    protected  $model="App\Models\Content\Events";
    protected $authRequired=true;

    function index1($request){

        return $this->view();
    }
	
}
?>
