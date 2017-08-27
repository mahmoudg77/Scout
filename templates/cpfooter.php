</div>


        </div>
     </div>
   </div>
      <!-- /.col -->
</div>
 <!-- /.row -->
</section>
 	 <!-- /.content -->


</div>
<!-- /.content-wrapper -->
<div id="formModel" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

 <footer class="main-footer">
	 <div class="pull-right hidden-xs">
		 <b>Version</b> 2.4.0
	 </div>
	 <strong>Copyright &copy; 2017 <a href="#" >Intoegy</a>.</strong> All rights
	 reserved.
 </footer>


</div>
<!-- ./wrapper -->

<!-- Bootstrap 3.3.7 -->
<script src="<?=assets('bower_components/bootstrap/dist/js/bootstrap.min.js')?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?=assets('bower_components/jquery-ui/jquery-ui.min.js')?>"></script>
<!-- Slimscroll -->
<script src="<?=assets('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')?>"></script>
<!-- FastClick -->
<script src="<?=assets('bower_components/fastclick/lib/fastclick.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?=assets('dist/js/adminlte.min.js')?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=assets('dist/js/demo.js')?>"></script>

<script src="<?=assets('js/bootstrap-datepicker.min.js')?>"></script>

<script src="<?=assets('js/jquery.dataTables.min.js')?>"></script>
<script src="<?=assets('js/iziToast.min.js')?>"></script>
  <script src="<?=assets('js/jquery.form.js')?>"></script>
<!-- Page specific script -->

<script>
    $(function () {

        $('input[type="date"]').datepicker({
            format: "yyyy-mm-dd",
            language: "ar"
        });


        $(".menu-item").click(function (event) {
            event.preventDefault();
            $("#pageContent").html("<center><h2>L o a d i n g . . .</h2><img style='width:200px' src='<?=assets("img/loader 2.gif")?>' /></center>");
            var btn = $(this);
            $("#pageContent").load(btn.attr("href"), function (data, status, xhr) {
                if (status == "error") {
                        $("#pageContent").html("<div class='alert alert-danger'><strong>Sorry; </strong>" + xhr.status + " " + xhr.statusText + "</div>");
                        return;
                    }

                $('#pageContent input[type="date"]').datepicker({
                    format: "yyyy-mm-dd",
                    language: "ar"
                });
                $('#pageContent .data-table').DataTable();
                            $("#pageContent .ajax-form").ajaxForm({
                                dataType: 'json',
                                success: function (data) {

                                  if(data.type=="success"){
                                    iziToast.show({
                                       title: 'Success',
                                       message: data.message,
                                       color: 'green', // blue, red, green, yellow
                                       position: 'topCenter',
                                   });
                                    
                                    btn.click();
                                    $("#formModel").modal("close");
                                  }else{
                                    iziToast.show({
                                       title: 'Error',
                                       message: data.message,
                                       color: 'red', // blue, red, green, yellow
                                       position: 'topCenter',
                                   });

                                  }

                                },
                                error: function (data, status, xhr) {
                                   // var obj = JSON.parse(data.responseText);

                                    iziToast.show({
                                        title: 'Error',
                                        message: data.status + " " + xhr ,
                                        color: 'red', // blue, red, green, yellow
                                        position: 'topCenter',
                                    });
                                }
                            });
                        }
                );
        });

    $("body").on("click",".open-modal",function(e){
        e.preventDefault();
        $("#formModel .modal-body").html("<center><h2>L o a d i n g . . .</h2><img style='width:200px' src='<?=assets("img/loader 2.gif")?>' /></center>");
        var btn=$(this);
        $("#formModel .modal-body").load(btn.attr("href"),function(data, status, xhr){
            $("#formModel").modal();
            if (status == "error") {
                        $("#myModal .modal-body").html("<div class='alert alert-danger'><strong>Sorry; </strong>" + xhr.status + " " + xhr.statusText + "</div>");
                    return;
            }
            $('#formModel input[type="date"]').datepicker({
                format: "yyyy-mm-dd",
                language: "ar"
            });
            $("#formModel .ajax-form").ajaxForm({
                                dataType: 'json',
                                success: function (data) {
                                    if(data.type=="success"){
                                      iziToast.show({
                                         title: 'Success',
                                         message: data.message,
                                         color: 'green', // blue, red, green, yellow
                                         position: 'topCenter',
                                     });
                                      $("#formModel").modal("toggle");

                                    }else{
                                      iziToast.show({
                                         title: 'Error',
                                         message: data.message,
                                         color: 'red', // blue, red, green, yellow
                                         position: 'topCenter',
                                     });

                                    }

                                },
                                error: function (data, status, xhr) {
                                   // var obj = JSON.parse(data.responseText);

                                    iziToast.show({
                                        title: 'Error',
                                        message: data.status + " " + xhr ,
                                        color: 'red', // blue, red, green, yellow
                                        position: 'topCenter',
                                    });
                                }
                            });
            });

    
    });
       
});
</script>
</body>

</html>
