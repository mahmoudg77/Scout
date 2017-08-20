<?
namespace App\Models\Admin;

use Framework\Database;
use Framework\BLL;

class Teams extends BLL{
	var $tablename="teams";
	var $col_pk="id";

	var $fields=[
				'parentId'=>['name'=>'Parent',
						'type'=>'Many2one',
						'serialize'=>true,
						'relation'=>['class'=>"App\Models\admin\Teams",'classid'=>'id','controller'=>'Teams']],
				'childs'=>['name'=>'Childs',
						'type'=>'One2many',
						'serialize'=>true,
						'relation'=>['class'=>"App\Models\admin\Teams",'classid'=>'parentId','controller'=>'Teams']],
	    ];

		function fullName($splitter='\\',$links=true){
			$fullName="";
			$parent=$this;
			while($parent){
				$fullName=($links?'<a href="/Teams/item/'.$parent->id.'">'.$parent->name.'</a>':$parent->name) .($fullName==''?'':$splitter). $fullName;
				$parent=$parent->parentId;
			}
			return $fullName;
		}

        function insert(){
            if($this->serial=="(New)" || $this->serial==""){
                $this->serial=$this->getNewSerial($this->parentId);
            }
           return parent::insert();

        }
        
        function getNewProfileSerial(){
            $obj=new \App\Models\Profile\Profile;
            //echo $this->serial."-";
            $last=$obj->supperUser()->where('serial','llike',$this->serial)->withDeleted()->orderBy("serial","desc")->limit(1)->get();
             
            if(count($last)>0){
                   // $fmt = new \NumberFormatter( 'de_DE', \NumberFormatter::TYPE_INT64);
                    $newsn=intval($last[0]->serial);//$fmt->parse($last[0]->serial, \NumberFormatter::TYPE_INT64);
                    
                   // echo $last[0]->serial,"-",$newsn;
                   // exit();
 			        return str_pad($newsn+1, strlen($last[0]->serial), "0", STR_PAD_LEFT);
            }else{
                return $this->serial.str_pad(1, 2, "0", STR_PAD_LEFT);
            }
        }
        
		function getNewSerial($parentid){
			$obj=new \App\Models\Admin\Teams;
            if($parentid->id>0){
              $last=$obj->where('parentId',$parentid->id)->withDeleted()->orderBy("serial","desc")->limit(1)->get();

              //if($parent->level_type<3)
              //      $length=2;
              //else
              //      $length=3;

              $level_array[1]=2;
              $level_array[2]=2;
              $level_array[3]=2;
              $level_array[4]=3;
              $level_array[5]=2;

              $length=0;
              for ($i = 1; $i <= $parentid->level_type+1; $i++)
              {
                  $length+=$level_array[$i];
              }

              if(count($last)>0){
                    //$fmt = new \NumberFormatter( 'de_DE', \NumberFormatter::DECIMAL );
                    //$newsn=$fmt->parse($last[0]->serial, \NumberFormatter::TYPE_INT32);
                    $newsn=intval($last[0]->serial);
                    
			        return str_pad($newsn+1, $length, "0", STR_PAD_LEFT);
            }else{
                return $parentid->serial.str_pad(1, $level_array[$parentid->level_type+1], "0", STR_PAD_LEFT);
            }
          }

		}


}
?>
