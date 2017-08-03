<?if(!$request->isAjax())include(PATH.'templates/AdminHeader.php');?>
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-body no-padding">

     <table class="table">
        <?foreach($data->data as $key=>$value){if($data->fields[$key]['visible']){?>
            <tr><td><?=ucwords(str_replace("_"," ",$key))?> :</td><td><?=$data->DrawField($key,'','',['style'=>'color:red','data-id'=>$key])?></td></tr>
        <?}}?>
        <tr><td></td><td>    <a class="btn btn-primary" href="../edit/<?=$data->{$data->col_pk}?>">Edit</a>
</td></tr>
    </table>



 </div>
 </div>
  			 </div>
  			 <!-- /.col -->
  		 </div>
  		 <!-- /.row -->
  	 </section>
  	 <!-- /.content -->


<?if(!$request->isAjax())include(PATH.'templates/AdminFooter.php');?>
