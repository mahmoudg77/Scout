<?if(!$request->isAjax())include(PATH.'templates/cpheader.php');?>
      <table class="table">
        <?foreach($data->data as $key=>$value){if($data->fields[$key]['visible']){?>
            <tr><td><?=ucwords(str_replace("_"," ",$key))?> :</td><td><?=$data->DrawField($key,'','',['style'=>'color:blue','data-id'=>$key])?></td></tr>
        <?}}?>
        <tr><td></td><td> <a class="btn btn-default open-modal" href="<?=actionLink('edit','',['id'=>$data->{$data->col_pk}])?>">Edit</a>

</td></tr>
    </table>

 


<?if(!$request->isAjax())include(PATH.'templates/cpfooter.php');?>
