<?
namespace App\Controllers;

class Events extends BaseController
{
    protected  $model="App\Models\Content\Events";
    protected $authRequired=true;

    function index($request){
		$events=new \App\Models\Content\Events;
		$Data = $events->supperUser()->get();
		return $this->view(compact('Data'));
    }
	
}
?>
