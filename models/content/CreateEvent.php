<?
namespace App\Models\Content;

use Framework\Database;
use Framework\BLL;
use \Framework\NotifyModel;
use \Framework\ApprovelModel;

class CreateEvent extends BLL{
	var $tablename="events";
	var $col_pk="id";

	var $fields=[
			 'Images'=>[
                    'name'=>"Image",
                    'serialize'=>true,
                    'type'=>'One2many',
                    'relation'=>['class'=>'App\Models\Media\Images','classid'=>'model_id','where'=>		['model_name','App\Models\Content\CreateEvent'],'controller'=>'Images'],
                ],
	    ];
}
?>
