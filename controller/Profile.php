<?
namespace App\Controllers;
use App;
use Framework\Request;
use Framework\Addons\Validator as Validator;

class Profile extends BaseController
{
    protected  $model="App\Models\Profile\Profile";
    protected $authRequired=true;



    function form($request){
        $id=$request->get['id'];
        $NathionalID=$request->get['NationalID'];
        $v_date=1;
        if(isset($request->get['vDate'])){
         $v_date=intval($request->get['vDate']);
        }
        //print_r($request);

        if(isset($id) && intval($id)>0){
            $Profile=App\Models\Profile\Profile::find($id);
        }
        elseif(isset($NathionalID)  && intval($NathionalID)>0){
            $Profile=new App\Models\Profile\Profile;
            $Profile= $Profile->where('National_Number',$NathionalID)->supperUser()->get();
            $Profile=$Profile[0];
        }
        if(intval($Profile->Profile_ID)==0){
            $Profile=new App\Models\Profile\Profile;
            $Profile->National_Number=$NathionalID;
        }
      //print_r($Profile);
        return $this->view(compact('Profile','v_date'));
    }

    function postForm($request){
        try
        {
            $validator=new Validator();
            $validator->Validate($request->post,['firstName'=>'Required|Strings',
                                                    'SecondName'=>'Required|Strings',
                                                    'birthdate'=>'Required|Date',
                                                    'nationalId'=>'Required|Integer',
                                                    'phone'=>'Required|Strings',
                                                    'email'=>'Email'
                                                    ]);
            $Profile=new App\Models\Profile\Profile;
            $Profile->National_Number=$request->post['nationalId'];
            $Profile->First_Name=$request->post['firstName'];
            $Profile->Second_Name=$request->post['SecondName'];
            $Profile->Third_Name=$request->post['thirdName'];
            $Profile->Forth_Name=$request->post['fourthName'];
            $Profile->Birth_Date=$request->post['birthdate'];
            $Profile->Gender=$request->post['gender'];
            $Profile->Profile_ID=intval($request->post['id']);

            if($Profile->Profile_ID>0){
                $result=$Profile->update();
            }else{
                $result=$Profile->insert();
            }
            if(!$result) {
               if($request->isAjax()){
                   return json_error($Profile->error);
               }else{
                   echo $Profile->error;
                   exit();
               }
           }

                    $contact=new App\Models\Profile\ContactUser;
                    if(isset($request->post['address'])  && $request->post['address']!=''){
                        $contact->contactTypeId=1;
                        $contact->userId=$Profile->Profile_ID;
                        $contact->contactValue=$request->post['address'];
                        if(!$contact->insert()) {
                            if($request->isAjax()){
                                return json_error($contact->error);
                            }else{
                                echo $contact->error;
                                exit();
                            }
                        }
                    }
                    if(isset($request->post['email']) && $request->post['email']!=''){
                        $contact->contactTypeId=2;
                        $contact->userId=$Profile->Profile_ID;
                        $contact->contactValue=$request->post['email'];
                        if(!$contact->insert()) {
                            if($request->isAjax()){
                                return json_error($contact->error);
                            }else{
                                echo $contact->error;
                                exit();
                            }
                        }
                    }
                    if(isset($request->post['phone']) && $request->post['phone']!=''){
                        $contact->contactTypeId=3;
                        $contact->userId=$Profile->Profile_ID;
                        $contact->contactValue=$request->post['phone'];
                        if(!$contact->insert()) {
                            if($request->isAjax()){
                                return json_error($contact->error);
                            }else{
                                echo $contact->error;
                                exit();
                            }
                        }
                    }

                    if(isset($request->post['secondphone']) && $request->post['secondphone']!=''){
                        $contact->contactTypeId=3;
                        $contact->userId=$Profile->Profile_ID;
                        $contact->contactValue=$request->post['secondphone'];

                        if(!$contact->insert()) {
                            if($request->isAjax()){
                                return json_error($contact->error);
                            }else{
                                echo $contact->error;
                                exit();
                            }
                        }
                    }


                     if(isset($request->files['proImg']['filename'])){
                        $image=new App\Models\Media\Images($Profile,"Personal",$request->files['proImg']);
                        $image->upload();

                    }
                     if(isset($request->files['coverImg']['filename'])){
                        $image=new App\Models\Media\Images($Profile,"Cover",$request->files['coverImg']);
                        $image->upload();

                    }

                    if($request->isAjax()){
                        return json_success("Save Success !!",$Profile);
                    }else{
                        echo("Save Success !!");
                    }

        }
        catch (\Exception $ex)
        {
            if($request->isAjax()){
                return json_error($ex->getMessage());
            }else{
                echo $ex->getMessage();
            }
        }

    }
}

?>
