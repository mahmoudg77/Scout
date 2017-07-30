<?
namespace App\Controllers;
use App;
use Framework\Addons\Validator as Validator;


class ProfileReg extends BaseController
{
    protected  $model="App\Models\Profile\Profile";
    protected $authRequired=false;

    function index($request){
      return $this->view();
    }
    function postIndex($request){
      $profile=new App\Models\Profile\Profile;

      $validate=new Validator();
      try{
              $validate->validate($request->post,['firstname'=>'Requierd|Strings',
                                          'secondname'=>'Requierd|Strings',
                                          'thirdname'=>'Requierd|Strings',
                                          'fourthname'=>'Requierd|Strings',
                                          'birthdate'=>'Requierd',
                                          'nationalId'=>'Requierd|Integer',
                                        ]);
                                      }
catch(Exception $ex){
  echo $ex->getMessage();
}

      $profile->First_Name=$request->post['firstname'];
      $profile->Second_Name=$request->post['secondname'];
      $profile->Third_Name=$request->post['thirdname'];
      $profile->Forth_Name=$request->post['fourthname'];
      $profile->Birth_Date=$request->post['birthdate'];
      $profile->National_Number=$request->post['nationalId'];

      $profile->Forth_Name=$request->post['fourthname'];
      //echo json_encode($profile);
      try{

          $profile->supperUser()->insert();
          if($profile->error!=''){
            echo $profile->error;
          }
      }
      catch(Exception $ex){
        echo $ex->getMessage();
        echo $profile->error;
      }
      foreach($request->post['hobbs'] as $h){
          $hopp=new App\Models\Profile\HobbyUserLog;
          $hopp->userId=$profile->Profile_ID;
          $hopp->hobbiesId=$h;

          $hopp->supperUser()->insert();
          if($hopp->error!=''){
            echo $hopp->error;
          }
      }
      return redirectTo("/");

    }

}

?>
