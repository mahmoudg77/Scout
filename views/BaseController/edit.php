<?if(!$request->isAjax())include(PATH.'templates/header.php');?>

 <?if(!is_array($data)){$data=[$data];}?>
 <?foreach($data as $item){?>
     <form action="" method="post">
       <?=Framework\Request::CSRF()?>
        <table class="table" >
            <?foreach($item->fields as $key=>$field){if($field['visible']){?>
                <?if($field==$item->col_pk){?>
                `
                <?}else{?>

                <tr><td><?=ucwords(str_replace("_"," ",$field['name']))?> :</td><td>
                    <?
                    $item->DrawField($key)?>
                    </td></tr>
                <?}?>
            <?}}?>
            <tr><td></td><td><input class="btn btn-success" type="submit" value="Save"/></td></tr>
        </table>
     </form>
 <?}?>

 <?if(!$request->isAjax())include(PATH.'templates/footer.php');?>
