<?
namespace App\Controllers;
use App;
class CreatePosts extends BaseController
{
    protected  $model="App\Models\Content\CreatePosts";
    protected $authRequired=true;

    function index1($request){

        return $this->view();
    }
	function postIndex($request) {
		global $context;
		$Post = new App\Models\Content\CreatePosts;
		$Post->tittle = $request->post[ 'postName' ];;
		$Post->description = $request->post[ 'Text1' ];
		$Post->user_id=$context->user->accid->id;
		$Post->date=date('Y-m-d');
		//$Post->path=$_SERVER['REQUEST_URI'];
		try {
			$Post->supperUser()->insert();
			if ( $Post->error != '' ) {
				if ( $request->isAjax() ) {
					return json_error( $Post->error );
				} else {
					echo $Post->error;
				}
			}
		} catch ( Exception $ex ) {

			if ( $request->isAjax() ) {
				return json_error( "Post:" . $ex->getMessage() );
			} else {
				echo $ex->getMessage();
			}

		}

		try {
			//echo "Filename:".$request->files['PostImg']['filename'];
			$image = new App\Models\Media\Images( $Post, "PostImg", $request->files['PostImg'] );
			$image->supperUser()->upload();
		} catch ( \Exception $ex ) {

			return json_error( $ex->getMessage() );
		}
		return json_success("Save sucess");

	}
}
?>
