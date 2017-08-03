<?
namespace App\Controllers;

class TeamsReg extends BaseController
{
    protected  $model="App\Models\Admin\Teams";
    protected $authRequired=false;

    function postAdd($request){
      $profile=new App\Models\Profile\Profile;
      $validate=new Validator();//for valid only
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
        if($request->isAjax()){
          return json_error($ex->getMessage());
        }else{
           echo $ex->getMessage();
        }

    }
    }
}

?>
