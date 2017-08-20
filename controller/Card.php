<?
namespace App\Controllers;

class Card extends BaseController
{
    protected  $model="App\Models\Content\card";
    protected $authRequired=true;

    function index1($request){

        return $this->view();
    }
	
}
?>
