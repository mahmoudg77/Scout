<?
namespace App\Controllers;

class Posts extends BaseController {
	protected $model = "App\Models\Content\Posts";
	protected $authRequired = true;

	function index( $request ) {
		
		$Post=new \App\Models\Content\Posts;
		$Data = $Post->supperUser()->get();
		return $this->view(compact('Data'));
	}
	function index1( $request ) {
		
		$Post=new \App\Models\Content\Posts;
		$data = $Post->supperUser()->get();
		return $this->view(compact('data'));
	}

}
?>