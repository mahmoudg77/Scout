<?
namespace App\Models\Profile;
use App;
use Framework\Database;
use Framework\BLL;

class PositionUserLog extends BLL{
	var $tablename="positionuser";
	var $col_pk="id";

    use \Framework\NotifyModel;
    use \Framework\ApprovelModel;

	var $fields=[
            'postionId'=>['name'=>'Postion',
                'type'=>'Many2one',
                'serialize'=>true,
                'relation'=>['class'=>"App\Models\Lookup\Position",'classid'=>'id','controller'=>'Position']],
            'userId'=>['name'=>'User',
                'type'=>'Many2one',
                'serialize'=>true,
                'relation'=>['class'=>"App\Models\Profile\Profile",'classid'=>'Profile_ID','controller'=>'Profile']],
  	    ];

    function name(){
        return $this->userId->name . "(" .$this->postionId->name .")";
    }
    function onApproved(){
        global $context;
        $userlist=new App\Models\Auth\User;
        $userlist=$userlist->supperUser()->where('accid',$this->userId->id)->limit(1)->get();
        if(count($userlist)>0){
            $usergroups=new App\Models\Auth\UserGroupRel;
            $usergroups->userid=$userlist[0]->id;
            $grouplist=new App\Models\Auth\UserGroup;
            $grouplist=$grouplist->supperUser()->where('groupkey','in',explode(",",$this->postionId->sec_groups))->get();
            foreach($grouplist as $g){
                 $usergroups->groupid=$g->id;
                 if(!$usergroups->supperUser()->insert()){
                     $message.=$usergroups->error;
                 }
                
            }
           
        }
        if(isset($message)) return ['type'=>'error','message'=>$message];
        return true;
        
    }
}
?>
