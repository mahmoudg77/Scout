<?if(!$request->isAjax())include(PATH.'templates/AdminHeader.php');?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <?=str_replace("App\Controllers\\","",CONTROLLER_PATH)?>
    <small>Add</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Add</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-body no-padding">

<center>
    <h1>Controller : <?=$context->controller_name?></h1>
    <h1>Method: <?=$context->method?></h1>
    <h1>Paramter: <?=$context->request->get['id']?></h1>
    <a href="/<?=LANG.'/'.$context->controller_path."/all"?>">View List</a>
    <a href="<?=actionLink('item','Profile',['id'=>2])?>" id="btntest">test</a>

</center>

<script>
$(function(){
  $("#btntest").click(function(e){
    e.preventDefault();
    $.ajax({
        url:"/en/Profile/item/2",
        type:"get",
        dataType:"json",
        success:function(resp){
          alert(resp.result.First_Name);
        },
        error:function(err){
          alert(err.responseText);
        }
    });
  });
});
</script>
</div>
</div>
 			 </div>
 			 <!-- /.col -->
 		 </div>
 		 <!-- /.row -->
 	 </section>
 	 <!-- /.content -->


<?if(!$request->isAjax())include(PATH.'templates/AdminFooter.php');?>
