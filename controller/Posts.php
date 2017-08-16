<?
namespace App\Controllers;

class Posts extends BaseController
{
    protected  $model="App\Models\Content\Posts";
    protected $authRequired=true;

    function index1($request){

        return $this->view();
    }
	
}
?>
