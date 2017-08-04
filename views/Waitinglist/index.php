<?if(!$request->isAjax())include(PATH.'templates/AdminHeader.php');?>

<!-- Main content -->



    <div class="col-ld-6 pull-left">
        <h2>Indexggggg</h2>
    </div>
    <div class="col-ld-6 pull-right">
        <a class="btn btn-primary btn-md" href="<?=actionLink('add')?>">Create New</a>
    </div>




<div class="row">


    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-body no-padding">



                <table class="table">
                    <tr><?foreach($data[0]->fields as $key=>$value){
		if($value['visible']){
                          ?>
                        <td><?=ucwords(str_replace("_"," ",$key))?>
                        </td><?}
      }?>
                        <td>Edit</td>
                        <td>View</td>
                        <td>Delete</td>
                    </tr><?
foreach($data as $key=>$row){
                      ?>
                    <tr><?foreach($row->fields as $key=>$field){
			if($field['visible']){
                          ?>

                        <td><?$row->DrawField($key)?>
                        </td><?}
          }?>
                        <td>
                          <form action="approve" method="post"><?=Framework\Request::CSRF()?>
                              <input type="hidden" name="id" value="<?=$row->id?>" />
                              <input type="hidden" name="model" value="<?=$row->model_name?>" />
                              <input type="submit" class="btn btn-worning" value="Approved" />
                          </form>
                          <form action="reject" method="post"><?=Framework\Request::CSRF()?>
                              <input type="hidden" name="id" value="<?=$row->id?>" />
                              <input type="hidden" name="model" value="<?=$row->model_name?>" />
                              <input type="submit" class="btn btn-danger" value="Rejected" />
                          </form>
                            <a class="btn btn-primary" href="<?=actionLink('item','',['id'=>$row->{$row->col_pk}])?>">view</a>

                        </td>
                        <td>
                            <a class="btn btn-default" href="<?=actionLink('edit','',['id'=>$row->{$row->col_pk}])?>">Edit</a>

                        </td>
                        <td>


                          <?if(!$row->is_deleted){?>
                            <form action="delete" method="post"><?=Framework\Request::CSRF()?>
                                <input type="hidden" name="<?=$row->col_pk?>" value="<?=$row->{$row->col_pk}?>" />
                                <input type="submit" class="btn btn-danger" value="Delete" />
                            </form><?}?><?if($row->is_deleted){?>
                            <form action="restore" method="post"><?=Framework\Request::CSRF()?>
                                <input type="hidden" name="<?=$row->col_pk?>" value="<?=$row->{$row->col_pk}?>" />
                                <input type="submit" class="btn btn-info" value="Restore" />
                            </form>
                            <form action="destroy" method="post"><?=Framework\Request::CSRF()?>
                                <input type="hidden" name="<?=$row->col_pk?>" value="<?=$row->{$row->col_pk}?>" />
                                <input type="submit" class="btn btn-danger" value="Delete forever" />
                            </form>

                            <?}?>
                        </td>
                    </tr><?
}
                      ?>
                </table>

            </div>
        </div>
    </div>
</div>
 			 <!-- /.col -->

 		 <!-- /.row -->



<?if(!$request->isAjax())include(PATH.'templates/AdminFooter.php');?>
