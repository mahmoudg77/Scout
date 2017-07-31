<?
namespace App\Controllers;
class Dashboard extends BaseController
{
    protected  $model="";
<<<<<<< HEAD

    function index($request){
        $Website="arabscout.net";
        $Date=Date("Y-m-d");
        return $this->view("Dashboard",compact('Website','Date'));
    }


=======
    protected $authRequired=true;

    function index($request){
        return $this->view();
    }
>>>>>>> origin/El-Menshawy
}

?>
