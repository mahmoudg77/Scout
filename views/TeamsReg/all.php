<?if(!$request->isAjax())include(PATH.'templates/cpheader.php');?>
 <div class="col-ld-6 pull-left">
        <h2> </h2>
    </div>
    <div class="col-ld-6 pull-right" style="padding: 10 0px;">
        <?if($context->user->allow($data[0]->model,"add")){?>
        <a class="btn btn-primary btn-md open-modal" href="<?=actionLink('index','TeamsReg')?>">Create New</a>
        <?}?>
    </div>
                <table class="table data-table"><thead>
                    <tr> 
                        <th>Team Name</th> 
                        <th>Team Level</th>
                        <th>Leader</th>
                        <th>Assesst1</th>
                        <th>Assesst2</th>
                        <th>Members</th>
                        <th>Status</th>
                     <th>View</th>
                        <?if($context->user->allow($data[0]->model,"edit")){?>
                        <th>Edit</th>
                       <?}?>
                        <?if($context->user->allow($data[0]->model,"delete")){?>
                        <th>Delete</th>
                        <?}?>
                    </tr>
                </thead>

                    <?foreach($data as $row){?>
                    <tr>
                        <td><?$row->DrawField('TeamId')?></td> 
                        <td><?$row->DrawField('TeamCatId')?></td> 
                        <td><?$row->DrawField('LeaderId')?></td> 
                        <td><?$row->DrawField('AFLeaderId')?></td> 
                        <td><?$row->DrawField('ASLeaderId')?></td> 
                        <td><?$row->DrawField('NoOfTeam')?></td> 
                        <td><?=($row->approval_request==0)?'<label class="label-danger">Rejected</label>':($row->approvel_request==0?'<label class="label label-success">Approved</label>':'<label class="label label-default">Waiting</label>')?></td> 
                      
                      <td>
                            <a class="btn btn-primary open-modal" href="<?=actionLink('item','',['id'=>$row->{$row->col_pk}])?>">view</a>
                        </td>
                        <?if($context->user->allow($row->model,"edit")){?>
                        <td>
                            <a class="btn btn-default open-modal" href="<?=actionLink('edit','',['id'=>$row->{$row->col_pk}])?>">Edit</a>
                        </td>
                     <?}?>
                        <?if($context->user->allow($row->model,"delete")){?>
                        <td><?if(!$row->is_deleted){?>
                            <form action="<?=actionLink('delete')?>" method="post" class="ajax-form"><?=Framework\Request::CSRF()?>
                                <input type="hidden" name="<?=$row->col_pk?>" value="<?=$row->{$row->col_pk}?>" />
                                <input type="submit" class="btn btn-danger" value="Delete" />
                            </form>
                            <?}?>
                            
                            <?if($row->is_deleted){?>
                            <form action="<?=actionLink('restore')?>" method="post"  class="ajax-form"><?=Framework\Request::CSRF()?>
                                <input type="hidden" name="<?=$row->col_pk?>" value="<?=$row->{$row->col_pk}?>" />
                                <input type="submit" class="btn btn-info" value="Restore" />
                            </form>
                            <form action="<?=actionLink('destroy')?>" method="post"  class="ajax-form"><?=Framework\Request::CSRF()?>
                                <input type="hidden" name="<?=$row->col_pk?>" value="<?=$row->{$row->col_pk}?>" />
                                <input type="submit" class="btn btn-danger" value="Delete forever" />
                            </form>
                            <?}?>
                        </td>
                    <?}?>
                    </tr><?
                     }
                      ?>
                </table>

 			 <!-- /.col -->

 		 <!-- /.row -->
<?if(!$request->isAjax())include(PATH.'templates/cpfooter.php');?>