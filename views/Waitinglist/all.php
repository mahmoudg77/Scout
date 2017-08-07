
<?if(!$request->isAjax())include(PATH.'templates/cpheader.php');?>


    <div class="col-ld-6 pull-left">
        <h2></h2>
    </div>


                <table class="table data-table">
                    <thead>
                    <tr>
                      <th>User</th>
                      <th>Approval Type</th>
                      <th>Related Documnet</th>
                      <th>Time</th>

                        <th></th>
                        <th></th>
                       
                    </tr></thead>
                    <?foreach($data as $key=>$row){
                      ?>
                    <tr>
                        <td><?$row->DrawField('userId')?></td>
                        <?$d=explode("\\",$row->model_name);?>
                        <td><?=array_pop($d)?></td>
                        <td><?$row->DrawField('model_id')?></td>
                        <td><?=time_string(strtotime($row->created_at))?></td>

                        <td>
                            
                                <form action="<?=actionLink('approve')?>" method="post" class="ajax-form pull-left">
                                    <?=Framework\Request::CSRF()?>
                                    <input type="hidden" name="id" value="<?=$row->id?>" />
                                    <button type="submit" class="btn text-success fa fa-lg fa-thumbs<?=($row->model_id->approval_request==1?"":"-o")?>-up"></button>
                                </form>
                                <form action="<?=actionLink('reject')?>" method="post" class="ajax-form pull-left">
                                    <?=Framework\Request::CSRF()?>
                                    <input type="hidden" name="id" value="<?=$row->id?>" />
                                    <button type="submit" class="btn text-danger fa fa-lg  fa-thumbs<?=($row->model_id->approval_request==0?"":"-o")?>-down"></button>
                                </form>
                            
                             
                        </td>

                        <td>

                            <a class="btn fa fa-eye  fa-lg open-modal pull-left btn-default" href="<?=actionLink('item','',['id'=>$row->{$row->col_pk}])?>"></a>
                          <?if(!$row->is_deleted){?>
                            <form action="<?=actionLink('delete')?>" method="post" class="ajax-form"><?=Framework\Request::CSRF()?>
                                <input type="hidden" name="<?=$row->col_pk?>" value="<?=$row->{$row->col_pk}?>" />
                                <button type="submit" class="btn text-danger fa fa-trash fa-lg"></button>
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




<?if(!$request->isAjax())include(PATH.'templates/cpfooter.php');?>
