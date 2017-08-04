<?if(!$request->isAjax())include(PATH.'templates/AdminHeader.php');?>
<table class="table"><thead><tr>
   <th>Image File</th>
   <th>Tag</th>
   
   <th>View</th>
   <th>Delete</th>

   </tr></thead>


  
<?foreach($data as $key=>$row){
    ?><tr>
        <td><img style="width:200px;" src="<?=$row->orignal?>"/>
        <img style="width:100px;" src="<?=$row->medium?>"/>
        <img style="width:50px;" src="<?=$row->thumb?>"/></td>
        <td><?=$row->tag?></td>
        
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
             
        </td>
 
    
    </tr>
    
    <?

}

?>
</table>
<a href="add" class="btn btn-primary" >Add New</a>
<?if(!$request->isAjax())include(PATH.'templates/AdminFooter.php');?>
