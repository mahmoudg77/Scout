<?
namespace App\Controllers;
class Dashboard extends BaseController
{
    protected  $model="";

    function index($request){
        $Website="arabscout.net";
        $Date=Date("Y-m-d");
        return $this->view("Dashboard",compact('Website','Date'));
    }

    protected $authRequired=true;
}

?>
