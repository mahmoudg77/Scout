<?
namespace App\Controllers;
class TeamRegView extends BaseController
{
    protected  $model="App\Models\admin\TeamRegView";
	protected $authRequired=true;
    function index($request){
        return $this->view();
    }


}

?>
