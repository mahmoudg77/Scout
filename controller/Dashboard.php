<?
namespace App\Controllers;
class Dashboard extends BaseController
{
    protected  $model="";


     function index($request){
         $Website="arabscout.net";
         $Date=Date("Y-m-d");
         return $this->view(compact('Website','Date'));
     }


<<<<<<< HEAD
<<<<<<< HEAD
    protected $authRequired=true;
}
=======

    protected $authRequired=true;

    function index1($request){
      
        return $this->view();
    }
 }
>>>>>>> refs/remotes/origin/master

=======
>>>>>>> refs/remotes/origin/master
?>
