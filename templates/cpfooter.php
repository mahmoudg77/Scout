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


 <footer class="main-footer">
	 <div class="pull-right hidden-xs">
		 <b>Version</b> 2.4.0
	 </div>
	 <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io/">Almsaeed Studio</a>.</strong> All rights
	 reserved.
 </footer>


</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?=assets('bower_components/jquery/dist/jquery.min.js')?>"></script>
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
<!-- fullCalendar -->
<script src="<?=assets('bower_components/moment/moment.js')?>"></script>
<script src="<?=assets('bower_components/fullcalendar/dist/fullcalendar.min.js')?>"></script>
<!-- Page specific script -->

<script>
    $(function () {
        $(".menu-item").click(function (event) {
            event.preventDefault();
            var btn = $(this);
            $("#pageContent").load(btn.attr("href"), function () {
                            $(".ajax-form").ajaxForm({
                                dataType: 'json',
                                success: function (response) {

                                    //-----
                                    alert(response.message);
                                    alert("ID:" + response.result.id + "\n\r" + "Name:" + response.result.name);
                                    //-----

                                },
                                error: function (response, status, xhr) {
                                    alert(response.responseText);
                                }
                            })
                        }
                );
        });
    })
</script>
</body>

</html>
