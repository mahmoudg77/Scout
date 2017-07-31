<?
namespace App\Controllers;
class Dashboard extends BaseController
{
    protected  $model="";
    protected $authRequired=true;

    function index($request){
        return $this->view();
    }
}

?>
