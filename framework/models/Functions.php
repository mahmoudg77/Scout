<?php

 function arr_obj_group($arrayfield='data',$array,$group){
		foreach( $array as $elem){
			$values_arr=[];
			for( $x=count($group)-1;$x>=0;$x--)
			{
				foreach($elem->$arrayfield as $k=>$v){
					if($k==$group[$x]){
						$values_arr[]=$v;
						//echo $v;
					}
				}

				//$values_arr[$group[$x]]=$elem->$arrayfield[$group[$x]];

			}

			switch(count($group)){

			case 1:
				$arr[$values_arr[0]]=$elem;
				break;
			case 2:
				$arr[$values_arr[1]][$values_arr[0]]=$elem;
				break;
			case 3:
				$arr[$values_arr[2]][$values_arr[1]][$values_arr[0]]=$elem;
				break;
			case 3:
				$arr[$values_arr[3]][$values_arr[2]][$values_arr[1]][$values_arr[0]]=$elem;
				break;

			default:
				$arr=$elem;
				break;
			}


		}
		return $arr;


}

function view($view,$arr=[]){
        global $context,$request;

        //echo json_encode($context->user);
        foreach($arr as $key=>$value){
            $$key=$value;
        }
        ob_start();
        include (PATH.'views/'.$view.'.php');
        $content = ob_get_contents();
        ob_end_clean();

        echo $content;

    }

    function redirectTo($url,$lang=""){
        if($lang=="") $lang=LANG;
       header('Location:/'.$lang."/".$url);
    }
    function json($type,$message,$result){
       header('Content-Type: application/json');

       //foreach($result as $r)$r->fields=null;

       echo json_encode(compact('type','message','result'));
    }
     function json_success($message,$result=null){
         json("success",$message,$result);
     }
     function json_error($message,$result=null){
         json("error",$message,$result);
     }


    /*function array_getcolumn($array,$column_name)
    {

        return array_map(function($element) use($column_name){echo $column_name; return $element->$column_name;}, $array);

    }
	*/
	function array_getcolumn($array,$column_name,$alldata=true)
    {
		$arr=[];
		foreach($array as $item){
			if(!$alldata){
				if($item->$column_name!='') $arr[]=$item->$column_name;
			}else{
							$arr[]=$item->$column_name;
			}
		}
         return $arr;
		//return array_map(function($element) use($column_name){echo $column_name; return $element->$column_name;}, $array);

    }


 function GV(){
     global $context;

	    $data=json_encode($context);
	    $data=json_decode($data);

	         foreach($data as $key=>$value){
	             $c_name=$key;

	             if(is_array($value)){
	                 defineArray($c_name,$value);
	             }elseif(is_object($value)){
	                 defineObject($c_name,$value);
	             }else{
	                 define(strtoupper($c_name),$value);
	                   // echo strtoupper($c_name).'='.$value.'</br>';
	             }
	         }


	 return true;
	}

  function defineArray($base_name,$arr){
	    foreach($arr as $key=>$value){
	        $c_name=$base_name."_".$key;

	         if(is_array($value)){
                  defineArray($c_name,$value);
             }elseif(is_object($value)){
                 defineObject($c_name,$value);
             }else{
                  define(strtoupper($c_name),$value);
                //   echo strtoupper($c_name).'='.$value.'</br>';
             }
	    }

	}
	 function defineObject($base_name,$obj){
	    foreach($obj as $key=>$value){
	        $c_name=$base_name."_".$key;
	         //$value=$obj->$key;
	         if(is_array($value)){
                  defineArray($c_name,$value);
             }elseif(is_object($value)){
                  defineObject($c_name,$value);
             }else{
                  define(strtoupper($c_name),$value);
                //   echo strtoupper($c_name).'='.$value.'</br>';
             }
	    }

	}
function guid(){
    if (function_exists('com_create_guid')){
        return com_create_guid();
    }else{
        mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
        $charid = strtoupper(md5(uniqid(rand(), true)));
        $hyphen = chr(45);// "-"
        $uuid = //chr(123)// "{"
                substr($charid, 0, 8).$hyphen
                .substr($charid, 8, 4).$hyphen
                .substr($charid,12, 4).$hyphen
                .substr($charid,16, 4).$hyphen
                .substr($charid,20,12);
                //.chr(125);// "}"
        return $uuid;
    }
}
function env($key,$default=''){
  $ini = parse_ini_file(PATH.'.env');
  if($ini[$key]!='') return $ini[$key];
  return $default;
}

function assets($path){
  return "/templates/assets/".$path;
}
?>
