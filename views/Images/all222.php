<?if(!$request->isAjax())include(PATH.'templates/header.php');?>
<table class="table"><tr>
    <?foreach($data[0]->fields as $key=>$value){
		if($value['visible']){
    ?>
    <td><?=ucwords(str_replace("_"," ",$key))?></td>
		<?}
}?>
<td>View</td><td>Delete</td></tr>
<?
foreach($data as $key=>$row){
    ?><tr>
        <?foreach($row->fields as $key=>$field){

          if($field['visible']){
          //  if($key=="model_id" && $row->model_name!=""){
          //                $c=new $row->model_name;

          //      $row->fields['model_id']=['name'=>'Releted Record',
          //                      'type'=>'Many2one',
          //                      'serialize'=>true,
          //                      'relation'=>['class'=>$row->model_name,'classid'=>$c->getPKname(),'controller'=>'Profile']];
          //  }
				?>

    <td><?$row->DrawField($key)?></td>
			<?}
			}?>
        <td>
            <a class="btn btn-primary"  href="item/<?=$row->{$row->col_pk}?>">view</a>

        </td>
         <td>
        <?if(!$row->is_deleted){?>
           <form action="delete" method="post">
             <?=Framework\Request::CSRF()?>
               <input type="hidden" name="<?=$row->col_pk?>" value="<?=$row->{$row->col_pk}?>" />
               <input type="submit" class="btn btn-danger" value="Delete"/>
           </form>
          <?}?>
           <?if($row->is_deleted){?>
            <form action="restore" method="post">
              <?=Framework\Request::CSRF()?>
               <input type="hidden" name="<?=$row->col_pk?>" value="<?=$row->{$row->col_pk}?>" />
               <input type="submit" class="btn btn-info"  value="Restore"/>
           </form>
           <form action="destroy" method="post">
             <?=Framework\Request::CSRF()?>
               <input type="hidden" name="<?=$row->col_pk?>" value="<?=$row->{$row->col_pk}?>" />
               <input type="submit" class="btn btn-danger" value="Delete forever"/>
           </form>
           <?}?>
        </td></tr>

    <?
}

?>
</table>
<a href="add" class="btn btn-primary" >Add New</a>
<?if(!$request->isAjax())include(PATH.'templates/footer.php');?>
