<?
namespace App\Controllers;

class SinglePost extends BaseController
{
    protected  $model="App\Models\lookup\SinglePost";
    protected $authRequired=true;

    function index1($request){

        return $this->view();
    }
	
}
?>