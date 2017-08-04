<?if(!$request->isAjax())include(PATH.'templates/cpheader.php');?>

 <?if(!is_array($data)){$data=[$data];}?>
 <?foreach($data as $group){?>
     <form action="<?=actionLink('edit')?>" method="post" class="ajax-form">
         <?=App\Request::CSRF()?>
        <table class="table" > 
        	 <tr><td>Group :</td><td><?$group->DrawField("groupid")?></td></tr>
         <tr><td>Model :</td><td>
             <select name="model" class="form-control">
                 <?foreach(App\Models::all() as $model){?>
                    <option value="<?=$model->name?>" <?if($model->name==$group->model){?>selected<?}?>><?=$model->name?></option>
                 <?}?>
             </select>
            
             </td></tr>
        	 <tr><td>Type :</td><td><?$group->DrawField("accesstype")?></td></tr>
         <tr><td>Filter :</td><td> 
        	<?=$group->DrawField("filter")?>
	 </td></tr>
            
            <tr><td></td><td>
                <input type="hidden" name="id" value="<?=$group->id?>"/>
                
            <input class="btn btn-success" type="submit" value="Save"/></td></tr>
        </table>
     </form>
 <?}?>

<?if(!$request->isAjax())include(PATH.'templates/cpfooter.php');?>
