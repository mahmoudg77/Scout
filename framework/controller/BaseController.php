<?
namespace App\Controllers;
use \Exception as Exception;
use Framework\Addons\Validator as Validator;


class BaseController{
    protected $model;
    protected $authRequired=false;
    protected $class;
    function __construct(){
	global $context;
        $this->class= get_called_class();
		if($this->authRequired && !$context->user){
			return redirectTo('Login');
		}
    }
    function getModel(){
        return $this->model;
    }
    function getClass(){
        return $this->class;
    }
    function index($request){
          return $this->view();
    }
    function add($request){
         return $this->view();
    }

    function find($request){
         return $this->item($request);
    }


    function item($request){
        try{
            $data= new $this->model;


            $validate=new Validator();
            $validate->validate($request->get,['id'=>'Requierd|Integer']);



            $data= $data::find($request->get['id']);
            if(!$data){
              header("HTTP/1.0 404 Not Found");
          		return $this->view("Error/index",['ErrorNumber'=>404]);
            }
            $data->mode='view';

           //if($request->isAjax() ){
           //     return json_success("Success",$data);
           // }else{
                return $this->view(compact('data'));
            //}
        }catch(Exception $ex){
            // if($request->isAjax() ){
            //    return json_error($ex->getMessage());
            // }else{
                echo $ex->getMessage();
            // }
        }
    }

    function edit($request){
        //get edit
        $data= new $this->model;
        $validate=new Validator();
        $validate->validate($request->get,['id'=>'Requierd|Integer']);



        $data= $data::find($request->get['id']);
        if(!$data){
          header("HTTP/1.0 404 Not Found");
          return $this->view("Error/index",['ErrorNumber'=>404]);
        }
        $data->mode='edit';

         return $this->view(compact('data'));
    }
    function postAdd($request){
         global $context;
         $data= new $this->model;
          foreach($data->fields as $key=>$field){
              if($field['type']!='One2many' && $field['type']!='Many2many' ){
                    $data->data[$key]=$request->post[$key];
              }
          }

          if(!$data->insert()){
                    if($request->isAjax()) return json_error($data->error);
                    throw new \Exception($data->error);
                }
                if($request->isAjax()) return json_success("Save Success !!");


            redirectTo($context->controller_path."/all");
    }
    function postEdit($request){
        global $context;
        $data=new $this->model;

          foreach($data->fields as $key=>$field){
            if($field['type']!='One2many' && $field['type']!='Many2many')
                $data->data[$key]=$request->post[$key];
          }
          if(!$data->update()){
                    if($request->isAjax()) return json_error($data->error);
                    throw new \Exception($data->error);
                }
                if($request->isAjax()) return json_success("Save Success !!");


            redirectTo($context->controller_path."/all");

    }
     function search($request){

     }

     function postSearch($request){
        global $context;

      if(count($request->post)>0){
          $data=new $this->model;
          $fields=$data->fields;


              for($x=0;$x<count($request->post['filter']);$x++){
                //   echo "relation", $request->post['relation'][$x];
                  if($request->post['relation'][$x]==''){
                      if($data->field_exists($request->post['filter'][$x])){
                          $data->where($request->post['filter'][$x],$request->post['value'][$x]);
                      }
                  }else{
                      $table=explode(".",$request->post['relation'][$x])[0];
                      $interClass=new $table;
                      $thisid=explode(".",$request->post['relation'][$x])[1];
                      $classid=$request->post['filter'][$x];
                      $value=$request->post['value'][$x];

                      $data->where($data->col_pk,"in_query","(select {$classid} from ".$interClass->tablename." where {$thisid}='{$value}' )");
                  }
              }


          $data=$data->supperUser()->get();

          return $this->view('all',compact('data'));
      }

    }


     function postDelete($request){
          global $context;
            $data= new $this->model;
            $validate=new Validator();
            $validate->validate($request->post,[$data->col_pk=>'Requierd|Integer']);

          if(count($request->post)==0){
             echo "Invalid Request !!";
          }else{

              $data->data[$data->col_pk]=$request->post[$data->col_pk];
              if(!$data->delete()){
                    if($request->isAjax()) return json_error($data->error);
                    throw new \Exception($data->error);
                }
                if($request->isAjax()) return json_success("Delete Success !!");
               redirectTo($context->controller_path."/all");
          }

    }
    function postDestroy($request){
        global $context;

      if(count($request->post)==0){
         echo "Invalid Request !!";
      }else{
          $data=new $this->model;
          $data->data[$data->col_pk]=$request->post[$data->col_pk];

        if(!$data->destroy()){
                    if($request->isAjax()) return json_error($data->error);
                    throw new \Exception($data->error);
                }
                if($request->isAjax()) return json_success("Deleted forever Success !!");
               redirectTo($context->controller_path."/all");      }

    }
    function postRestore($request){
        global $context;

      if(count($request->post)==0){
         echo "Invalid Request !!";
      }else{
          $data=new $this->model;
          $data->data[$data->col_pk]=$request->post[$data->col_pk];

        if(!$data->restore()){
                    if($request->isAjax()) return json_error($data->error);
                    throw new \Exception($data->error);
                }
                if($request->isAjax()) return json_success("Restore Success !!");
               redirectTo($context->controller_path."/all");

         }
      }


    // function find1($request){
    //     try{
    //         $validate=new Validator();
    //         $validate->validate($request->get,['id'=>'Requierd|Integer']);
    //
    //         $id=$request->get['id'];
    //           $i= $this->model;
    //           $data=$i::find($id);
    //           $data->mode='view';
    //           $prop=$request->get['prop'];
    //
    //            if(isset($prop)){
    //                 $data->$prop;
    //
    //               if($data->$prop){
    //
    //                  $d=$data->$prop;
    //
    //                 if($request->UseApi() ){
    //                     return json_success("Success",$d);
    //                 }else{
    //                     $type=get_class($d[0]);
    //                     $s=new $type;
    //                     return view('BaseController/list',['data'=>$d]);
    //                 }
    //               }else{
    //                   throw new Exception("Invalid Request !");
    //                   exit();
    //               }
    //
    //           }
    //        if($request->UseApi() ){
    //             return json_success("Success",$data);
    //         }else{
    //             return $this->view(compact('data'));
    //         }
    //     }catch(Exception $ex){
    //         if($request->UseApi() ){
    //             return json_error($ex->getMessage());
    //         }else{
    //             echo $ex->getMessage();
    //         }
    //     }
    // }
     function kanban($request){
          $i= new $this->model;
          $data=$i->get();

       if($request->UseApi() ){
              json_success("Success",$data);
        }else{
            return $this->view(compact('data'));
        }
    }

     function all($request){
       global $context;
        $i= new $this->model;

       if(!$this->authRequired){
            $i->supperUser();
       }

       $data=$i->get();

       if($request->UseApi() ){
              json_success("Success",$data);//where(['id','<','50'])->orderBy('id','desc')->limit(2,1)->
        }else{
            return $this->view(compact('data'));
        }

    }

   function view(){
       global $request;
        $args=func_get_args();
        if(count($args)==0){
          $view='';
          $arr=[];
        }elseif(count($args)==1){
            if(is_array($args[0])){
                $view='';
                $arr=$args[0];
            }else{
                $view=$args[0];
                $arr=[];
            }

        }elseif(count($args)==2){
            $view=$args[0];
            $arr=$args[1];
        }else{
            $view=$args[0];
            $arr=$args[1];
        }

        if($view==''){
            $trace = debug_backtrace();
            $method = $trace[1]['function'];
            if(!array_key_exists('data',$arr) && $this->model!=''){

                $data= new $this->model;

               $data->mode=$method;
               $arr['data']=$data;
            }
            $view=str_replace("App\\Controllers\\","",$this->class)."/$method";
         }
        elseif(strpos("/",$view)===false){

            $cntrl=get_called_class();
            $view=$cntrl."/".$view;
            $view=str_replace("App\\Controllers\\","",$view);
        }
		 //echo PATH.'views/'.str_replace("App\\Controllers\\","",$view).'.php';
         if(!file_exists(PATH.'views/'.str_replace("App\\Controllers\\","",$view).'.php')){

          $view="BaseController/$method";
        }

        return view($view,$arr);




    }



}

?>
