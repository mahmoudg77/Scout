<?if(!$request->isAjax())include(PATH.'templates/AdminHeader.php');?>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-body no-padding">

      <form action="" method="post">
       <?=Framework\Request::CSRF()?>
        <table class="table" >
            <?foreach($data->fields as $key=>$field){if($field['visible']){?>
                <?if($field==$data->col_pk){?>
                `
                <?}else{?>

                <tr><td><?=ucwords(str_replace("_"," ",$field['name']))?> :</td><td>
                    <?
                    $data->DrawField($key)?>
                    </td></tr>
                <?}?>
            <?}}?>
            <tr><td></td><td><input class="btn btn-success" type="submit" value="Save"/></td></tr>
        </table>
     </form>



 </div>
 </div>
  			 </div>
  			 <!-- /.col -->
  		 </div>
  		 <!-- /.row -->
  	 </section>
  	 <!-- /.content -->


<?if(!$request->isAjax())include(PATH.'templates/AdminFooter.php');?>
