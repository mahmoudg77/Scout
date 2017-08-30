<?
namespace App\Models\Content;
use App;
use Framework\Database;
use Framework\BLL;

class Posts extends BLL{
	var $tablename="posts";
	var $col_pk="id";

	var $fields=[
			 'Images'=>[
                    'name'=>"PostImage",
                    'serialize'=>true,
                    'type'=>'One2many',
                    'relation'=>['class'=>'App\Models\Media\Images','classid'=>'model_id','where'=>		['model_name','App\Models\Content\Posts'],'controller'=>'Images'],
                ]
	    ];
}
?>
