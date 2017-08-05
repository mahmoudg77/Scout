<?if(!$request->isAjax())include(PATH.'templates/AdminHeader.php');?>

<!-- Main content -->



    <div class="col-ld-6 pull-left">
        <h2></h2>
    </div>
    <div class="col-ld-6 pull-right"  style="padding: 10 0px;">
        <a class="btn btn-primary btn-md open-modal" href="<?=actionLink('add')?>">Create New</a>
    </div>







                <table class="table data-table"><thead>
                    <tr><?foreach($data[0]->fields as $key=>$value){
		if($value['visible']){
                          ?>
                        <th><?=ucwords(str_replace("_"," ",$key))?>
                        </th><?}
      }?>
                        <th>Edit</th>
                        <th>View</th>
                        <th>Delete</th>
                    </tr></thead><?
foreach($data as $key=>$row){
                      ?>
                    <tr><?foreach($row->fields as $key=>$field){
                			if($field['visible']){
                          ?>

                        <td><?$row->DrawField($key)?>
                        </td><?}
          }?>
                        <td>
                          <form action="<?=actionLink('approve')?>" method="post" class="ajax-form"><?=Framework\Request::CSRF()?>
                              <input type="hidden" name="id" value="<?=$row->id?>" />
                              <input type="submit" class="btn btn-worning" value="Approved" />
                          </form>
                          <form action="<?=actionLink('reject')?>" method="post" class="ajax-form"><?=Framework\Request::CSRF()?>
                              <input type="hidden" name="id" value="<?=$row->id?>" />
                              <input type="submit" class="btn btn-danger" value="Rejected" />
                          </form>
                            <a class="btn btn-primary" href="<?=actionLink('item','',['id'=>$row->{$row->col_pk}])?>">view</a>

                        </td>
                        <td>
                            <a class="btn btn-default" href="<?=actionLink('edit','',['id'=>$row->{$row->col_pk}])?>">Edit</a>

                        </td>
                        <td>


                          <?if(!$row->is_deleted){?>
                            <form action="<?=actionLink('delete')?>" method="post" class="ajax-form"><?=Framework\Request::CSRF()?>
                                <input type="hidden" name="<?=$row->col_pk?>" value="<?=$row->{$row->col_pk}?>" />
                                <input type="submit" class="btn btn-danger" value="Delete" />
                            </form><?}?><?if($row->is_deleted){?>
                            <form action="<?=actionLink('restore')?>" method="post" class="ajax-form"><?=Framework\Request::CSRF()?>
                                <input type="hidden" name="<?=$row->col_pk?>" value="<?=$row->{$row->col_pk}?>" />
                                <input type="submit" class="btn btn-info" value="Restore" />
                            </form>
                            <form action="<?=actionLink('destroy')?>" method="post" class="ajax-form"><?=Framework\Request::CSRF()?>
                                <input type="hidden" name="<?=$row->col_pk?>" value="<?=$row->{$row->col_pk}?>" />
                                <input type="submit" class="btn btn-danger" value="Delete forever" />
                            </form>

                            <?}?>
                        </td>
                    </tr><?
}
                      ?>
                </table>


 			 <!-- /.col -->

 		 <!-- /.row -->



<?if(!$request->isAjax())include(PATH.'templates/AdminFooter.php');?>