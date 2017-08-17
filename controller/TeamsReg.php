<?
namespace App\Controllers;

use App;
use Framework\Addons\Validator as Validator;


class TeamsReg extends BaseController
{
    protected  $model="App\Models\Lookup\TeamsReg";
    protected $authRequired=true;

    function index($request){
        global $context;
       
		if(!$context->user->allow($this->model,"add")){
			header("HTTP/1.0 404 Not Found");
            return $this->view("Error/index",['ErrorNumber'=>401]);
		}
        parent::index($request);
    }
  function postAdd($request)
	{
      $teams=new App\Models\Admin\Teams;
      $validate=new Validator();//for valid only


      try{
              $validate->validate($request->post,['teamName'=>'Requierd|Strings',
                                                  'branch'=>'Requierd|Integer',
                                                  'leader_profileid'=>'Requierd|Integer',
                                                  'assist_profileid'=>'Integer',
                                                  'category'=>'Requierd|Integer',
                                                  'profileid'=>'Requierd|Integer',
                                                  'office'=>'Requierd|Integer',
                                                    ]);
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


    // will creat team id only in parent and child
    $TeamId=new App\Models\Admin\Teams;
    if(count($TeamId->where('name',$TeamId->name=$request->post['teamName'])->get())>0){
         if($request->isAjax()){
            return json_error("This team is alrady exists !!");
        }else{
            echo "This team is alrady exists !!";
            exit();
        }
    }


    $TeamId->name=$request->post['teamName'];
    $TeamId->parentId=$request->post['office'];
    $TeamId->level_type=$TeamId->parentId->level_type+1;
    $TeamId->serial="(New)";


    if(!$TeamId->insert()) {
        if($request->isAjax()){
            return json_error($TeamId->error);
        }else{
            echo $TeamId->error;
            exit();
        }
    }

	$profile=new App\Models\Profile\Profile;
	$LeaderId=$profile->where('Profile_ID',$request->post['leader_profileid'])->supperUser()->get();

    $Teams=new App\Models\Lookup\TeamsReg;
	$Teams->TeamId=$TeamId->id;
	$Teams->LeaderId=$LeaderId[0]->id;
	$Teams->TeamCatId=$request->post['category'];




	if($request->post['assist_profileid']){
        $leaderAssist=$profile->where('Profile_ID',$request->post['assist_profileid'])->supperUser()->get();
			$Teams->AFLeaderId=$leaderAssist[0]->id;
	}else{
        $Teams->AFLeaderId=0;
    }

    if($request->post['assist_profileid1']){
        $leaderAssist=$profile->where('Profile_ID',$request->post['assist_profileid1'])->supperUser()->get();
			$Teams->ASLeaderId=$leaderAssist[0]->id;
	}else{
        $Teams->ASLeaderId=0;
    }


    $Teams->NoOfTeam=count($request->post['profileid']);

    if(!$Teams->insert()) {
        if($request->isAjax()){
            return json_error($Teams->error);
        }else{
            echo $Teams->error;
            exit();
        }
    }
	foreach($request->post['profileid'] as $profileid){
		//$FoundTeamMem=new;
		$user= App\Models\Profile\Profile::find(intval($profileid));

        $Register= new App\Models\Admin\RegisteryUserLog;
        $Register->userId= $user->id;

        $Reg_rec=new App\Models\Admin\Register;
        $Reg_rec=$Reg_rec->where('regFrom','<=',Date("Y-m-d"))->where('regTo','>=',Date("Y-m-d"))->limit(1)->get();

        $Register->regId=$Reg_rec[0]->id;
        $Register->teamId=$TeamId->id;

        if(!$Register->insert()) {
            if($request->isAjax()){
                return json_error($Register->error);
            }else{
                echo $Register->error;
                exit();
            }
        }

	}


        if($request->isAjax()){
            return json_success("Save team success !!");
        }else{
            echo "Save team success !!";

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
     }
 }
}

?>
