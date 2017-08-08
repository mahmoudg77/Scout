<?if(!$request->isAjax())include(PATH.'templates/cpheader.php');?>

      <form action="<?=actionLink('edit')?>" method="post" class="ajax-form">
       <?=Framework\Request::CSRF()?>
        <table class="table" >
            <?foreach($data->fields as $key=>$field){
                if($field['visible']){?>
            <?if($key==$data->col_pk || in_array($field['type'],['Many2many','One2many'])){?>

                <?}else{?>

                <tr><td><?=ucwords(str_replace("_"," ",$field['name']))?> :</td><td>
                    <?
                    $data->DrawField($key)?>
                    </td></tr>
                <?}?>
            <? }
              }?>
            <tr><td></td><td><input class="btn btn-success" type="submit" value="Save"/></td></tr>
        </table>
     </form>


 


<?if(!$request->isAjax())include(PATH.'templates/cpfooter.php');?>
