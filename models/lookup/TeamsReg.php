<?
namespace App\Models\Lookup;
use App;
use Framework\Database;
use Framework\BLL;

class TeamsReg extends BLL{
	var $tablename="teaminfo";
	var $col_pk="id";

    use \Framework\NotifyModel;
    use \Framework\ApprovelModel;

    var $fields=[
            'TeamCatId'=>['name'=>'Category',
                    'serialize'=>true,
                    'type'=>'Many2one',
                    'relation'=>['class'=>'App\Models\Lookup\Levels','classid'=>'id','controller'=>'Levels']
                    ],
            'TeamId'=>['name'=>'Team Path',
                    'serialize'=>true,
                    'type'=>'Many2one',
                    'relation'=>['class'=>'App\Models\Admin\Teams','classid'=>'id','controller'=>'Levels'],
                    ],
            'LeaderId'=>['name'=>'Leader',
                    'serialize'=>true,
                    'type'=>'Many2one',
                    'relation'=>['class'=>'App\Models\Profile\Profile','classid'=>'Profile_ID','controller'=>'Profile'],
                    ],
            'AFLeaderId'=>['name'=>'Assist Leader (1)',
                    'serialize'=>true,
                    'type'=>'Many2one',
                    'relation'=>['class'=>'App\Models\Profile\Profile','classid'=>'Profile_ID','controller'=>'Profile'],
                    ],
            'ASLeaderId'=>['name'=>'Assist Leader (2)',
                    'serialize'=>true,
                    'type'=>'Many2one',
                    'relation'=>['class'=>'App\Models\Profile\Profile','classid'=>'Profile_ID','controller'=>'Profile'],
                    ],
            'members'=>['name'=>'Members',
                    'serialize'=>true,
                    'type'=>'One2many',
                    'relation'=>['class'=>'App\Models\Profile\Profile','classid'=>'TempTeamID','controller'=>'Profile'],
                    ],
	    ];
    function name(){
        return  $this->TeamId->fullName("\\",false) . "(" . $this->TeamCatId->name . ")";
    }
    function onApproved(){
         global $context;
        $registerlog=new App\Models\Admin\RegisteryUserLog;
        $data=$registerlog->supperUser()->where('teamId',$this->TeamId->id)->get();
        
        foreach($data as $itm){
            //$profile=$registerlog->;
            
            $r= $itm->approve();
            
            if($r!=true){
               $message.=$r['message'];
            }
                
                
        }
        if(isset($message)){
            return ['type'=>'error','message'=>$message];
        }
        return true;
    }
}
?>
