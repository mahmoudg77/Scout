<?if(!$request->isAjax())include(PATH.'templates/cpheader.php');?>

<div class="col-ld-6 pull-left">
    <h2> </h2>
</div>
<div class="col-ld-6 pull-right" style="padding: 10 0px;">
    <a class="btn btn-primary btn-md open-modal" href="<?=actionLink('add')?>">Create New</a>
</div>


<table class="table data-table"><thead><tr>
   <th>Personal Photo</th>

   <th>Name</th>
    <th>Hobbies</th>
   <th>Date Of Birth</th>

   <th>View</th>
   <th>Delete</th>
   </tr></thead>



<?foreach($data as $key=>$row){
    ?><tr>
        <td><img style="width:100px;" src="<?=$row->CoverImage->thumb?>"/></td>
         <td><?=$row->name?></td>
        <td><?=$row->DrawField('Hobbies')?></td>
        <td><?=$row->Birth_Date?></td>
        <td>
            <a class="btn btn-primary open-modal"  href="<?=actionLink('item','',['id'=>$row->{$row->col_pk}])?>">view</a>

        </td>
         <td>
        <?if(!$row->is_deleted){?>
           <form action="<?=actionLink('delete')?>" method="post" class="ajax-form">
             <?=Framework\Request::CSRF()?>
               <input type="hidden" name="<?=$row->col_pk?>" value="<?=$row->{$row->col_pk}?>" />
               <input type="submit" class="btn btn-danger" value="Delete"/>
           </form>
          <?}?>
           <?if($row->is_deleted){?>
            <form action="<?=actionLink('restore')?>" method="post">
              <?=Framework\Request::CSRF()?>
               <input type="hidden" name="<?=$row->col_pk?>" value="<?=$row->{$row->col_pk}?>" />
               <input type="submit" class="btn btn-info"  value="Restore"/>
           </form>
           <form action="<?=actionLink('destroy')?>" method="post">
             <?=Framework\Request::CSRF()?>
               <input type="hidden" name="<?=$row->col_pk?>" value="<?=$row->{$row->col_pk}?>" />
               <input type="submit" class="btn btn-danger" value="Delete forever"/>
           </form>
           <?}?>

        </td>


    </tr>

    <?

}

?>
</table>
<a href="add" class="btn btn-primary open-model" >Add New</a>
<?if(!$request->isAjax())include(PATH.'templates/cpfooter.php');?>
