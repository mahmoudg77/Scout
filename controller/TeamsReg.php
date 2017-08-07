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
    $TeamId->serial=$TeamId->getNewSerial($TeamId->parentId);


    if(!$TeamId->insert()) {
        if($TeamId->isAjax()){
            return json_error($TeamId->error);
        }else{
            echo $TeamId->error;
            exit();
        }
    }

		$profile=new App\Models\Profile\Profile;
		$LeaderId=$profile->where('National_Number','=',$request->post['leaderNId'])->supperUser()->get();

		$Teams=new App\Models\Lookup\TeamsReg;
		$Teams->TeamId=$TeamId->id;
		$Teams->LeaderId=$LeaderId[0]->id;

    $Teams->insert();

		if($request->post['AFLeaderId']){
      $leaderAssist=$profile->where('National_Number','=',$request->post['leaderAssistNId'])->supperUser()->get();
			$Teams->AFLeaderId=$leaderAssist[0]->id;
		}/*
		if($request->post['ASLeaderId']){
			$Teams->ASLeaderId=post['AFLeaderId'];
		}*/
		$Teams->TeamCatId=post['category'];
		foreach($request->post['profileid'] as $NatIDReq){
			//$FoundTeamMem=new;
			$found= App\Models\Profile\Profile::find(intval($request->post['profileid']));
			 if(!$found->id>0){
         $Register= new App\Models\Admin\RegisteryUserLog;
         $Register->userId= $found->id;
         $Reg_rec=new App\Models\Admin\Register;
         $Reg_rec=$Reg_rec->where('regFrom','<=',Date("Y-m-d"))->where('regTo','>=',Date("Y-m-d"))->limit(1)->get();
         $Register->regId=$Reg_rec[0]->id;
         $Register->teamId=$Reg_rec[0]->id;
       }
			}
			if($Teams->error!=''){
            	echo $Teams->error;
        	}
      }






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
