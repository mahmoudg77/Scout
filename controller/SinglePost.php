<?
namespace App\Controllers;

class SinglePost extends BaseController
{
    protected  $model="App\Models\content\SinglePost";
    protected $authRequired=true;

    function index1($request){

        return $this->view();
    }
	
}
?>