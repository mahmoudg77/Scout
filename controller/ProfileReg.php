<?
namespace App\Controllers;
use App;
use Framework\Addons\Validator as Validator;
use \Exception  as Exception ;

class ProfileReg extends BaseController
{
    protected  $model="App\Models\Profile\Profile";
    protected $authRequired=false;

	function getModel(){
		$ModelName=$this->model;
		return $ModelName;
	}
    function index($request){
      return $this->view();
    }
    function postIndex($request){
   
      $profile=new App\Models\Profile\Profile;
      $validate=new Validator();//for valid only

      try{
              $validate->validate($request->post,['firstname'=>'Requierd|Strings',
                                          	  'secondname'=>'Requierd|strings',
                                                  'thirdname'=>'Requierd|Strings',
                                                  'fourthname'=>'Requierd|Strings',
                                                  'birthdate'=>'Requierd',
                                                  'nationalId'=>'Requierd|Integer',
                                        		 ]);
         }catch(Exception $ex){
		      if($request->isAjax()){
		        return json_error($ex->getMessage());
		      }else{
		         echo $ex->getMessage();
		      }

	}
	
    $con=new App\Models\Profile\Profile;
    
    $found=  $con->where('National_Number','=',$request->post['nationalId'])->supperUser()->get();

     if(count($found)>0){
      if($request->isAjax()){
        return json_error("This National ID exists !!");
      }else{
         echo "This National ID exists !!";
      }
    }

      $profile->First_Name=$request->post['firstname'];
      $profile->Second_Name=$request->post['secondname'];
      $profile->Third_Name=$request->post['thirdname'];
      $profile->Forth_Name=$request->post['fourthname'];
      $profile->Birth_Date=$request->post['birthdate'];
      $profile->National_Number=$request->post['nationalId'];
      $profile->Gender=$request->post['gender'];
      //echo json_encode($profile);
      try{
          $profile->supperUser()->insert();
          if($profile->error!=''){
            if($request->isAjax()){
              return json_error($profile->error);
            }else{
               echo $profile->error;
            }

          }
      }
      catch(Exception $ex){

        if($request->isAjax()){
          return json_error("profile:".$ex->getMessage());
        }else{
           echo $ex->getMessage();
        }

      }

	 //hoppies
      foreach($request->post['hobbs'] as $h){//hobbs in js called registrationform.js hidden input
          $hopp=new App\Models\Profile\HobbyUserLog;
          $hopp->userId=$profile->Profile_ID;
          $hopp->hobbiesId=$h;
          $hopp->supperUser()->insert();
          if($hopp->error!=''){
            if($request->isAjax()){
              return json_error($hopp->error);
            }else{
               echo $hopp->error;
            }
          }
      }
		$Contacts=new App\Models\Profile\ContactUser;
		// Email

		$Contacts->userId=$profile->Profile_ID;
		$Contacts->contactTypeId=2;//ID Of email
		$Contacts->contactValue=$request->post['email'];

    if(!$Contacts->supperUser()->insert()){

      if($request->isAjax()){
        return json_error($Contacts->error);
      }else{
         echo $Contacts->error;
      }

    }
		//Address
		$Contacts->userId=$profile->Profile_ID;
		$Contacts->contactTypeId=1;//ID Of Address
		$Contacts->contactValue=$request->post['address'];
		$Contacts->supperUser()->insert();
		//Phone
		$Contacts->userId=$profile->Profile_ID;
		$Contacts->contactTypeId=3;//ID Of Phone
		$Contacts->contactValue=$request->post['phone'];
		$Contacts->supperUser()->insert();


        ////images
        //$Images=new App\Models\Media\Images;
        //// profile image
        //$Images->userId=$profile->Profile_ID;
        //$Images->orignal=$request->post['proImg'];//Name Of imag
        //$Images->model_name=$this->getModel();
        //$Images->model_id=2;
        //$Images->supperUser()->insert();
        ////Cover Image
        //$Images->userId=$profile->Profile_ID;
        //$Images->orignal=$request->post['cvrImg'];//Name Of imag
        //$Images->model_name=$this->getModel();
        //$Images->model_id=2;
        //$Images->supperUser()->insert();

		// profile Camps Request
		$Camp=new App\Models\Profile\CompUserLog;
      	foreach($request->post['camps'] as $campReq){
			$Camp->userId=$profile->Profile_ID;
			$Camp->campId=$campReq;
			$Camp->approval_by=7;
			$Camp->approval_at="2017-08-15 00:00:00";
			$Camp->approval_request=0;//not approved
			$Camp->supperUser()->insert();
			if($Camp->error!=''){
            	echo $Camp->error;
        	}
      }
		// profile Study Request
		$Trains=new App\Models\Profile\StudyUserLog;
      	foreach($request->post['trains'] as $TrainReq){
			$Trains->userId=$profile->Profile_ID;
			$Trains->studyId=$TrainReq;
			$Trains->approval_by=7;
			$Trains->approval_at="2017-08-15 00:00:00";
			$Trains->approval_request=0;//not approved
			$Trains->supperUser()->insert();
			if($Trains->error!=''){
            	echo $Trains->error;
        	}
      }
		// profile ExperienceUser Request
		$Trains=new App\Models\Profile\ExperienceUserLog;
      	foreach($request->post['exp'] as $ExpReq){
			$Trains->userId=$profile->Profile_ID;
			$Trains->experienceId=$ExpReq;
			$Trains->approval_by=7;
			$Trains->approval_at="2017-08-15 00:00:00";
			$Trains->approval_request=0;//not approved
			$Trains->supperUser()->insert();
			if($Trains->error!=''){
            	echo $Trains->error;
        	}
      }
		// profile Position Request
		$Position=new App\Models\Profile\PositionUserLog;
		$Position->userId=$profile->Profile_ID;
		$Position->postionId=$request->post['Position'];;
		$Position->approval_by=7;
		$Position->approval_at="2017-08-15 00:00:00";
		$Position->approval_request=0;//not approved
		$Position->supperUser()->insert();
			if($Position->error!=''){
            	echo $Position->error;
        	}
            
            try
            {
            	$image=new App\Models\Media\Images($profile,"Personal",$request->files['proImg']);
                $image->supperUser()->upload();
            
                $image=new App\Models\Media\Images($profile,"Cover",$request->files['cvrImg']);
                $image->supperUser()->upload();
            }
            catch (\Exception $ex)
            {
            
                 return json_error($ex->getMessage());
            }
            
           


      if($request->isAjax()){
        return json_success("Save success !!");
      }
       return redirectTo("ProfileReg/Success");

    }


    function Success($request){
      return $this->view();
    }
}
?>
