<?
namespace App\Controllers;

class TeamsReg extends BaseController
{
    protected  $model="App\Models\Admin\Teams";
    protected $authRequired=false;

    function postAdd($request){
        
        echo json_success("Save Success !!",['id'=>'1','name'=>'Gomaa']);
    }
}

?>
