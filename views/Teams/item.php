<?if(!$request->isAjax())include(PATH.'templates/header.php');?>

 <?if(!is_array($data)){$data=[$data];}?>
 <?foreach($data as $item){?>
    <table class="table">
        <?foreach($item->data as $key=>$value){if($item->fields[$key]['visible']){?>
          <tr><td><?=ucwords(str_replace("_"," ",$key))?> :</td><td><?=$item->DrawField($key,'','',['style'=>'color:red','data-id'=>$key])?></td></tr>
        <?}}?>
        <tr><td>Full Name</td><td><?=$item->fullName?></td></tr>

    </table>
    <a class="btn btn-primary" href="../edit/<?=$item->{$item->col_pk}?>">Edit</a>
 <?}

 ?>
 <?if(!$request->isAjax())include(PATH.'templates/footer.php');?>
