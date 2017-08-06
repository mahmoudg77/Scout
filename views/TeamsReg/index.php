<?if(!$request->isAjax())include(PATH.'templates/AdminHeader.php');?>

    <!-- Main content -->
    <section class="container-fluid" name="sec1">
        <div>
		<div class="teamReg">
                <h1 style="text-align: center;">Team registration</h1>
			<form class="form-horizontal ajax-form" action="<?=actionLink("add","TeamsReg")?>" method="post">
				<div class="FF">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user-circle" aria-hidden="true"></i></span>
						<input id="leader" type="text" class="form-control" name="leader" placeholder="Leader name">
                            </div>
					<div class="input-group ">
						<span class="input-group-addon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
						<input id="leaderAssist" type="text" class="form-control" name="leaderAssist" placeholder="Leader Assist name">
                        </div>
                            </div>
				<div class="FF">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-address-card" aria-hidden="true"></i></span>
						<input id="leaderNId" type="text" class="form-control" name="leaderNId" placeholder="Leader NationalID">
                        </div>
					<div class="input-group ">
						<span class="input-group-addon"><i class="fa fa-address-card-o" aria-hidden="true"></i></span>
						<input id="leaderAssistNId" type="text" class="form-control" name="leaderAssistNId" placeholder="Leader Assist National ID">
                            </div>
                        </div>

<div class="row">
				<div class="col col-md-6">
					<div class="input-group  ">
						<span class="input-group-addon"><i class="fa fa-id-card" aria-hidden="true"></i></span>
						<input id="teamName" type="text" class="form-control" name="teamName" placeholder="Team name">
						<span class="input-group-addon">
							<select name="category" id="category">
                                <?$levels=new App\Models\Lookup\Levels;
                                  foreach($levels->supperUser()->get() as $item){?>
                                <option value="<?=$item->id?>"><?=$item->name?></option>
                                <?}?>
 							</select>
						</span>
           </div>
					<div class="input-group ">
						<span class="input-group-addon"><i aria-hidden="true">Country</i></span>
						<select id="country"  type="text" class="form-control teams-tree" name="country" data-childs="#organization">
							<option value="" selected>أختر البلد</option>
							<?
                            $country= new App\Models\Lookup\Teams;
                            foreach($country->supperUser()->get() as $item){

                               	if($item->parentId==0){
                              ?>
                                	<option value="<?=$item->id?>"><?=$item->name?></option>
                              <?
								}
                            }?>
						</select>
	</div>

					<div class="input-group">
						<span class="input-group-addon"><i aria-hidden="true">Organization</i></span>
						<select id="organization" type="text" class="form-control teams-tree" name="organization"  data-childs="#branch">
							<option value="">يجب اختيار البلد اولا</option>
						</select>
    </div>
					<div class="input-group">
						<span class="input-group-addon"><i aria-hidden="true">Branch</i></span>
						<select id="branch" type="text" class="form-control teams-tree" name="branch"   data-childs="#office">
							<option value="">يجب اختيار الجمعية اولا</option>
						</select>
                        </div>
					<div class="input-group">
						<span class="input-group-addon"><i aria-hidden="true">Office</i></span>
						<select id="office" type="text" class="form-control" name="office"  >
							<option value="">يجب اختيار الفرع اولا</option>
						</select>
                    </div>
  </div>

  <div class="col col-md-6">
        <div class="fees">
					<pre>Fees</pre>
					<pre name="Money" id="Money">120 Egy</pre>

        </div>
      </div>
    </div>

                    <div id="tableT">
                        <table class="table">
                            <thead class="thead-inverse">
                                <tr>
                                    <th style="width: 50px;">#</th>
                                    <th style="width: 200px;">National ID</th>
                                    <th>Name</th>
                                    <th>Birthdate</th>
								<th>Register</th>
                                </tr>
                            </thead>
                            <tbody id="table">
                                <?for($i=1;$i<=12;$i++){?>
                                <tr>
                                    <th scope="row"><?=$i?></th>
                                    <td><input type="number" class="form-control tdinput" name="NationalID[]"  required></td>
								    <td class="name">
								    </td>
								    <td class="birthdate">
								    </td>
								<td>
									<div class="input-group">
										<!--<span class="input-group-addon "><i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i><i class="fa fa-square-o fa-lg" aria-hidden="true"></i></span>-->
										<button type="button" class="btn btn-success btn-getin">Get IN</button>
									</div>
								</td>
                                </tr>
                               <?}?>
                            </tbody>
                        </table>
                        <div class="row" style="float:right">
						<button type="button" class="btn btn-success" onClick="Removemember()"><span class="fa fa-minus"></span></button>
						<button type="button" class="btn btn-danger" onClick="asd()"><span class="fa fa-plus"></span></button>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <?=Framework\Request::CSRF()?>
						<button class="btn btn-success" type="submit" id="btnSubmit" style="width:80%">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </section>
<div class="modal fade" id="BoyScout" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h2 class="modal-title BS">Boy Scout</h2>
			</div>
			<div class="modal-body">

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>
		</div>

	</div>
</div>




<script>
      $(function(){
            $(".teams-tree").change(function(){
              var select=$(this);
              $.ajax({
              type: "get",
              url: "<?=actionLink("getChilds","TeamsReg")?>",
              data: "parentid=" + select.val(),
              success: function(data){
                  $(select.data("childs")).html(data);
                  $(select.data("childs")).change();
              }
              });
            });

          $("body").on("change", 'input[name^="NationalID"]',function(){
              //keypress in new version will generate list of the remain number
              var select=$(this);

              if (select.val() == "") {
                  select.closest("tr").find('.birthdate').html("");
                  select.closest("tr").find('.name').html("");
                  select.closest("tr").find('.btn-getin').data("id", 0);
                  return false;
              }

              var found = 0;
              //$.each([ 52, 97 ], function( index, value ) {
              $('input[name ^= "NationalID"]').each(function (index, value) {
                  if ($(this).val() == select.val()) found++;
              });

              if (found>1) {
                  iziToast.show({
                      title: 'Error',
                      message: "This person alrady exists in your team.",
                      color: 'red', // blue, red, green, yellow
                      position: 'topCenter',
                  });
                  select.val("");
                  return false;
              }


              $.ajax({
              type: "get",
              url: "<?=actionLink("getDataFromDb","TeamsReg")?>",
              data: "NationalID=" + select.val(),
                          dataType:"json",
              success: function(data){
                   if (data.type == "success") {
                          if (data.result){
                              select.closest("tr").find('.birthdate').html(data.result.Birth_Date);
                              select.closest("tr").find('.name').html(data.result.First_Name + " " + data.result.Second_Name + " " + data.result.Third_Name + " " + data.result.Forth_Name);
                              select.closest("tr").find('.btn-getin').data("id", data.result.Profile_ID);
                          } else {
                                           $("#BoyScout .modal-body").html("<center><h2>L o a d i n g . . .</h2><img style='width:200px' src='<?=assets("img/loader 2.gif")?>' /></center>");
                              $("#BoyScout .modal-body").load("<?=actionLink("form","Profile")?>?NationalID=" + select.val(), function () {
                                  $("#BoyScout").modal();
                              });

                          }
                  }
              }
              });
          });
          $(".tdinput").keypress(function (e) {
              if (e.which == 13) {
                  return false;
              }
          });

          $("body").on("click", ".btn-getin", function (){
              var btn = $(this);
              var id = btn.data("id");
              $("#BoyScout .modal-body").html("<center><h2>L o a d i n g . . .</h2><img style='width:200px' src='<?=assets("img/loader 2.gif")?>' /></center>");

              $("#BoyScout .modal-body").load("<?=actionLink("form","Profile")?>/" + id, function () {
                  $("#BoyScout").modal();
                  $("#BoyScout .modal-body .ajax-form").ajaxForm({
                      dataType: 'json',
                      success: function (data) {
                          if (data.type == "success") {

                              $("#BoyScout").modal("toggle");
                              iziToast.show({
                                  title: 'Success',
                                  message: data.message,
                                  color: 'green', // blue, red, green, yellow
                                  position: 'topCenter',
                              });
                              btn.closest("tr").find('input[name^="NationalID"]').val(data.result.National_Number);
                              btn.closest("tr").find('input[name^="NationalID"]').change();

                          } else {
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
                              message: data.status + " " + xhr,
                              color: 'red', // blue, red, green, yellow
                              position: 'topCenter',
                          });
                      }

                  });

             });

          });
      });
</script>

<?if(!$request->isAjax())include(PATH.'templates/cpfooter.php');?>
