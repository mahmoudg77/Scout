<?
namespace App\Controllers;

class Setting extends BaseController
{
    protected  $model="App\Models\Admin\Setting";
    protected $authRequired=true;

    function index($request){

        if(isset($request->get['group'])){

            $group=addslashes(htmlspecialchars($request->get['group']));
            $groups=new \App\Models\Admin\Setting;
            $groups=$groups->where('group',$group)->get();
            
            echo count($groups);
            $Languages=new \App\Models\Lookup\Languages;
            $Languages=$Languages->get() ;
            return $this->view(compact('groups','Languages'));

        }
    }
}

?>
