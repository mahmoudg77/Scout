<?
namespace App\Controllers;
use App;
use Framework\Addons\Validator as Validator;


class TeamsReg extends BaseController
{
    protected  $model="App\Models\Lookup\TeamsReg";
    protected $authRequired=true;

  function postAdd($request)
	{
      $teams=new App\Models\Admin\Teams;
      $validate=new Validator();//for valid only
      try{
              $validate->validate($request->post,['name[]'=>'Requierd|Strings',
                                                  'Birthdate[]'=>'Requierd|Time',
                                                  'NationalID[]'=>'Requierd|Integer',
                                             ]);
         }
		catch(Exception $ex)
		{
			if($request->isAjax())
			{
			  return json_error($ex->getMessage());
			}
			else
			{
			   echo $ex->getMessage();
			}

		}

		//$con=new App\Models\Admin\Teams;

/*    $found=  $con->where('National_Number','=',$request->post['nationalId'])->supperUser()->get();

     if(count($found)>0){
      if($request->isAjax()){
        return json_error("This National ID exists !!");
      }else{
         echo $profile->error;
      }
    }*/
		// will creat team id only in parent and child
		$TeamId=new App\Models\Lookup\Teams;
		$TeamId->name=$request->post['teamName'];
		$TeamId->parentId=$request->post['branch'];
        $TeamId->serial="ddddd";
		$TeamId->created_by=7;
		$TeamId->created_at="2017-08-15 00:00:00";

		$profile=new App\Models\Profile\Profile;
		$LeaderId=$profile->where('National_Number','=',$request->post['leaderNId'])->supperUser()->get();

		$Teams=new App\Models\Lookup\TeamsReg;
		$Teams->TeamId=$TeamId->id;
		$Teams->LeaderId=$LeaderId;
		if($request->post['AFLeaderId']){
			$Teams->AFLeaderId=post['leaderAssist'];
		}/*
		if($request->post['ASLeaderId']){
			$Teams->ASLeaderId=post['AFLeaderId'];
		}*/
		$Teams->TeamCatId=post['category'];
		foreach($request->post['NationalID'] as $NatIDReq){
			$FoundTeamMem=new App\Models\Profile\Profile;
			$found=$FoundTeamMem->where('National_Number','=',$NatIDReq)->supperUser()->get();
			 if(count($found)>0){
			  if($request->isAjax())
			  {
				return json_error("This National ID exists !!");//hat byanato
			  }
				 else
				 {
					  $profileMemb=new App\Models\Profile\Profile;
					  $profileMemb->First_Name=$request->post['firstName'];
					  $profileMemb->Second_Name=$request->post['SecondName'];
					  $profileMemb->Third_Name=$request->post['thirdName'];
					  $profileMemb->Forth_Name=$request->post['fourthName'];
					  $profileMemb->Birth_Date=$request->post['birthdate'];
					  $profileMemb->National_Number=$request->post['nationalId'];
					  $profileMemb->Gender=$request->post['gender'];
					 	$Contacts=new App\Models\Profile\ContactUser;
						// Email

						$Contacts->userId=$profileMemb->Profile_ID;
						$Contacts->contactTypeId=2;//ID Of email
						$Contacts->contactValue=$request->post['email'];
					 	$Contacts->supperUser()->insert();
						//Address
						$Contacts->userId=$profileMemb->Profile_ID;
						$Contacts->contactTypeId=1;//ID Of Address
						$Contacts->contactValue=$request->post['address'];
						$Contacts->supperUser()->insert();
						//Phone
						$Contacts->userId=$profileMemb->Profile_ID;
						$Contacts->contactTypeId=3;//ID Of Phone
						$Contacts->contactValue=$request->post['phone'];
						$Contacts->supperUser()->insert();
					 //image not found
				 }
			}
			if($Teams->error!=''){
            	echo $Teams->error;
        	}
      }

			$Teams->created_by=7;
			$Teams->created_at="2017-08-15 00:00:00";
			$Teams->approval_by=7;
			$Teams->approval_at="2017-08-15 00:00:00";
			$Teams->approval_request=0;//not approved
			$Teams->supperUser()->insert();



	}


  function getChilds($request){

    try{
      $validate=new Validator();//for valid only
      $validate->validate($request->get,['parentid'=>'Required|Integer']);


            $obj =new App\Models\Admin\Teams;
            $obj=  App\Models\Admin\Teams::find(intval($request->get['parentid']));

            foreach ($obj->childs as $item) {
              $response.="<option value='".$item->id."'>" .$item->name."</option>";
            }


            echo $response;
       }
      catch(\Exception $ex)
      {
        if($request->isAjax())
        {
          return json_error($ex->getMessage());
        }
        else
        {
           echo $ex->getMessage();
        }

      }
  }

  function getDataFromDb($request){
      if(!$request->isAjax()) return redirectTo("");
   try{
         $validate=new Validator();//for valid only
         $validate->validate($request->get,['NationalID'=>'Required|Integer']);
           $Profile =new App\Models\Profile\Profile;
           //$found=$request->get['NationalID'];
          $Profile=$Profile->where('National_Number',$request->get['NationalID'])->supperUser()->get();


           //$Profile= App\Models\Profile\Profile::find(1);/*after 3 hour i know that find take only id of col-pk in model*/
           if(count($Profile)>0)
           {
             return json_success("Account already exists !",$Profile[0]) ;
           }else{
               return json_success("This is new account") ;

           }
      }
     catch(\Exception $ex)
     {
       if($request->isAjax())
       {
         return json_error($ex->getMessage());
       }
      //  else
      //  {
      //     echo $ex->getMessage();
      //  }

     }
 }
}

?>
