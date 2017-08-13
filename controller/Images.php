<?
namespace App\Controllers;
use App;
use Framework\Addons\Validator as Validator;
class Images extends BaseController
{
    protected $model="App\Models\Media\Images";
    protected $authRequired=true;

    function upload($request){
        return $this->view();
    }
    function postUpload($request){
        try
        {
            $validator =new Validator;
            $validator->Validate($request->post,['modelname'=>'Required|Strings',
                                                 'modelid'=>'Required|Integer',
                                                 'tag'=>'Required|Strings',
                                                 ]);
            if($request->files['image']['filename']){
                if($request->isAjax()){
                    return json_error("!Error: 'image' is required !");
                }
                echo "!Error: 'image' is required !";
                return;
            }

            $img=new App\Models\Media\Images($request->post['modelname'],$request->post['modelid'],$request->post['tag'],$request->files['image']);

           if(!$img->upload()){
               if($request->isAjax()){
                   return json_error($img->error);
               }
               echo $img->error;
               return;
           }

           if($request->isAjax()){
               return json_success("Upload Success !");
           }
           echo "Upload Success !";
           return;

         }
        catch (\Exception $ex)
        {
            if($request->isAjax()){
                return json_error($ex->getMessage());
            }
            echo $ex->getMessage();
            return;
        }

    }
    function bodyUpload($request){
        try
        {
            $validator =new Validator;
            $validator->Validate($request->body,['modelname'=>'Required|Strings',
                                                 'modelid'=>'Required|Integer',
                                                 'tag'=>'Required|Strings',
                                                 ]);
            if($request->files['image']['filename']){
                if($request->isAjax()){
                    return json_error("!Error: 'image' is required !");
                }
                echo "!Error: 'image' is required !";
                return;
            }

            $img=new App\Models\Media\Images($request->body['modelname'],$request->body['modelid'],$request->body['tag'],$request->files['image']);

            if(!$img->upload()){
                if($request->isAjax()){
                    return json_error($img->error);
                }
                echo $img->error;
                return;
            }

            if($request->isAjax()){
                return json_success("Upload Success !");
            }
            echo "Upload Success !";
            return;

        }
        catch (\Exception $ex)
        {
            if($request->isAjax()){
                return json_error($ex->getMessage());
            }
            echo $ex->getMessage();
            return;
        }

    }

}

?>
