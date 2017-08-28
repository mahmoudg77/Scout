<?

namespace App\ Controllers;

class CreateEvent extends BaseController {
	protected $model = "App\Models\Content\CreateEvent";
	protected $authRequired = true;

	function index1( $request ) {

		return $this->view();
	}

	function postIndex( $request ) {
		$event = new App\Models\Content\CreateEvent;
		$event->tittle = $request->post[ 'eventName' ];
		$event->tag = $request->post[ 'eventTag' ];
		$event->Description = $request->post[ 'Text1' ];
		try {
			$event->supperUser()->insert();
			if ( $event->error != '' ) {
				if ( $request->isAjax() ) {
					return json_error( $event->error );
				} else {
					echo $event->error;
				}

			}
		} catch ( Exception $ex ) {

			if ( $request->isAjax() ) {
				return json_error( "profile:" . $ex->getMessage() );
			} else {
				echo $ex->getMessage();
			}

		}

		try {
			$image = new App\ Models\ Media\ Images( $event, "EventImg", $request->files[ 'eventImg' ] );
			$image->supperUser()->upload();
		} catch ( \Exception $ex ) {

			return json_error( $ex->getMessage() );
		}

	}
}
?>

