<?if(!$request->isAjax())include(PATH.'templates/cpheader.php');?>

<div class="col-ld-6 pull-left">
    <h2> </h2>
</div>
<div class="col-ld-6 pull-right" style="padding: 10 0px;">
    <?if($context->user->allow("App\\Models\\Profile\\Profile","add")){?>
    <a class="btn btn-primary btn-md open-modal" href="<?=actionLink("form","Profile")?>">Create New</a>
    <?}?>
</div>


<table class="table data-table"><thead><tr>
   <th>Personal Photo</th>

   <th>Name</th>
    <th>Hobbies</th>
   <th>Date Of Birth</th>

    
   <th>View</th>
    <?if($context->user->allow("App\\Models\\Profile\\Profile","edit")){?>
   <th>Edit</th>
    <?}?>
    <?if($context->user->allow("App\\Models\\Profile\\Profile","delete")){?>
    <th>Delete</th>
    <?}?>
   </tr></thead>



<?foreach($data as $key=>$row){
    ?><tr>
        <td><img style="width:100px;" src="<?=$row->PersonalImage->thumb?>"/></td>
         <td><?=$row->name?></td>
        <td><?=$row->DrawField('Hobbies')?></td>
        <td><?=$row->Birth_Date?></td>
          <td>
              <a class="btn btn-primary open-modal" href="<?=actionLink('item','Profile',['id'=>$row->{$row->col_pk}])?>">View</a>

          </td>
          <?if($context->user->allow("App\\Models\\Profile\\Profile","edit")){?>
        <td>
            <a class="btn btn-default open-modal" href="<?=actionLink('edit','Profile',['id'=>$row->{$row->col_pk}])?>">Edit</a>

        </td>
    <?}?>
    <?if($context->user->allow("App\\Models\\Profile\\Profile","delete")){?>
         <td>
        <?if(!$row->is_deleted){?>
           <form action="<?=actionLink('delete')?>" method="post" class="ajax-form">
             <?=Framework\Request::CSRF()?>
               <input type="hidden" name="<?=$row->col_pk?>" value="<?=$row->{$row->col_pk}?>" />
               <input type="submit" class="btn btn-danger" value="Delete"/>
           </form>
          <?}?>
           <?if($row->is_deleted){?>
             <form action="<?=actionLink('restore','Profile')?>" method="post">
              <?=Framework\Request::CSRF()?>
               <input type="hidden" name="<?=$row->col_pk?>" value="<?=$row->{$row->col_pk}?>" />
               <input type="submit" class="btn btn-info"  value="Restore"/>
           </form>
           <form action="<?=actionLink('destroy','Profile')?>"
                 method="post">
                 <?=Framework\Request::CSRF()?>
                 <input type="hidden" name="<?=$row->col_pk?>" value="<?=$row->{$row->col_pk}?>" />
                 <input type="submit" class="btn btn-danger" value="Delete forever" />
             </form>
           <?}?>

        </td>
    <?}?>

    </tr>

    <?

}

?>
</table>
<?if(!$request->isAjax())include(PATH.'templates/cpfooter.php');?>
