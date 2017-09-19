<?if(!$request->isAjax())include(PATH.'templates/cpheader.php');?>

    <!-- Main content -->
    <section class="container-fluid" name="sec1">
        <div>
		<div class="teamReg">
                <h1 style="text-align: center;">Team registration</h1>
			<form class="form-horizontal ajax-form" action="<?=actionLink("add","TeamsReg")?>" method="post">
				
				<div class="FF">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-address-card" aria-hidden="true"></i></span>
                        <input type="hidden" id="leader_profileid" name="leader_profileid"/>
						<input id="leaderNId" type="text" class="form-control" name="leaderNId" placeholder="Leader NationalID" required>
                        <span class="input-group-addon btn-getin"><a href=""><i class="fa fa-address-card " aria-hidden="true"></i></a></span>
                    </div>
					<div class="input-group ">
						<span class="input-group-addon"><i class="fa fa-address-card-o" aria-hidden="true"></i></span>
                        <input type="hidden" id="assist_profileid" name="assist_profileid" />
						<input id="leaderAssistNId" type="text" class="form-control" name="leaderAssistNId" placeholder="Leader Assist National ID" >
                        <span class="input-group-addon btn-getin"><a href=""><i class="fa fa-address-card" aria-hidden="true"></i></a></span>
                    </div>
                </div>
                <div class="FF">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user-circle" aria-hidden="true"></i></span>
                        <input id="leader" type="text" class="form-control" name="leader" placeholder="Leader name" disabled>
                    </div>
                    <div class="input-group ">
                        <span class="input-group-addon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
                        <input id="leaderAssist" type="text" class="form-control" name="leaderAssist" placeholder="Leader Assist name" disabled>
                    </div>
                </div>

            <div class="row">
				<div class="col col-md-6">
					<div class="input-group  ">
						<span class="input-group-addon"><i class="fa fa-id-card" aria-hidden="true"></i></span>
						<input id="teamName" type="text" class="form-control" name="teamName" placeholder="Team name">
						<span class="input-group-addon" >
							<select name="category" id="category" required>
                                <?$levels=new App\Models\Lookup\Levels;
                                  foreach($levels->supperUser()->get() as $item){?>
                                <option value="<?=$item->id?>"><?=$item->name?></option>
                                <?}?>
 							</select>
						</span>
           </div>
					<div class="input-group ">
						<span class="input-group-addon"><i aria-hidden="true">Country</i></span>
						<select id="country"  type="text" class="form-control teams-tree" name="country" data-childs="#organization" required>
							<option value="" selected>أختر البلد</option>
							<?
                            $country= new App\Models\Admin\Teams;
                            foreach($country->where('parentId',0)->supperUser()->get() as $item){
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
						<select id="organization" type="text" class="form-control teams-tree" name="organization"  data-childs="#branch" required>
							<option value="">يجب اختيار البلد اولا</option>
						</select>
            </div>
					<div class="input-group">
						<span class="input-group-addon"><i aria-hidden="true">Branch</i></span>
						<select id="branch" type="text" class="form-control teams-tree" name="branch"   data-childs="#office" required>
							<option value="">يجب اختيار الجمعية اولا</option>
						</select>
                        </div>
					<div class="input-group">
						<span class="input-group-addon"><i aria-hidden="true">Al-Hay2a</i></span>
						<select id="office" type="text" class="form-control" name="office"  required >
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
                                    <td><input type="hidden" name="profileid[]" />
                                    <input type="number" class="form-control tdinput" name="NationalID[]"  required></td>
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



          function getProfile(obj) {

              if ('beforeSubmit' in obj) {
                  if (!obj.beforeSubmit()) {
                      return false;
                  }
              }

              $.ajax({
                    type: "get",
                    url: "<?=actionLink("getDataFromDb","TeamsReg")?>",
                  data: "NationalID=" + obj.element.val(),
                    dataType:"json",
                    success: function (data) {
                        if ('success' in obj) {
                            obj.success(data);
                        }
                    },
                    error: function (data, status, xhr) {
                        // var obj = JSON.parse(data.responseText);
                        if ('error' in obj) {
                            obj.error(data, status, xhr);
                        }
                    }
              });




          }

          $("body").on("change", '#leaderNId', function () {
              var select = $(this);

              if (select.val() == "") {
                      $('#leader').val("");
                      $('#leader_profileid').val(0);
                       select.closest(".input-group").find('.btn-getin').addClass("btn-getin");
                       select.closest(".input-group").find('.btn-getin').removeClass('btn-viewin');
                      return false;
               }

              if (!isExistsNID(select)) return false;

              getProfile({
                  element: select,
                  success: function (data) {
                      if (data.type == "success") {
                          if (data.result) {
                              $('#leader_profileid').val(data.result.Profile_ID);
                              $('#leader').val(data.result.First_Name + " " + data.result.Second_Name + " " + data.result.Third_Name + " " + data.result.Forth_Name);
                              select.closest(".input-group").find('.btn-getin').data("id", data.result.Profile_ID);
                              select.closest(".input-group").find('.btn-getin').addClass("btn-viewin").removeClass('btn-getin');
                          } else {
                              ////$("#BoyScout .modal-body").html("<center><h2>L o a d i n g . . .</h2><img style='width:200px' src='<?=assets("img/loader 2.gif")?>' /></center>");
                              ////$("#BoyScout .modal-body").load("<?=actionLink("form","Profile")?>?NationalID=" + select.val(), function () {
                              //    $("#BoyScout").modal();

                              //});
                              addNewProfile({
                                  DOBValidate:0,
                                  nid: select.val(),
                                  success: function (data) {
                                      if (data.type == "success") {
                                          select.val(data.result.National_Number);
                                          select.change();
                                      }
                                  },
                                  error: function (data) {
                                      select.val("");
                                      select.change();
                                  }
                              });
                          }
                    }
                  },
                  error: function (data, status, xhr) {

                  }
              });
          });

          $("body").on("change", '#leaderAssistNId', function () {
              var select = $(this);
              if (select.val() == "") {
                  $('#leaderAssist').val("");
                  $('#assist_profileid').val(0);
                  select.closest(".input-group").find('.btn-getin').addClass("btn-getin");
                  select.closest(".input-group").find('.btn-getin').removeClass('btn-viewin');
                  return false;
              }

              if (!isExistsNID(select)) return false;

              getProfile({
                  element: select,
                  success: function (data) {
                      if (data.type == "success") {
                          if (data.result) {
                              
                              $('#assist_profileid').val(data.result.Profile_ID);
                              $('#leaderAssist').val(data.result.First_Name + " " + data.result.Second_Name + " " + data.result.Third_Name + " " + data.result.Forth_Name);
                              select.closest(".input-group").find('.btn-getin').data("id", data.result.Profile_ID);
                              select.closest(".input-group").find('.btn-getin').addClass("btn-viewin");
                              select.closest(".input-group").find('.btn-getin').removeClass('btn-getin');
                          } else {

                              addNewProfile({
                                  DOBValidate:0,
                                  nid: select.val(),
                                  success: function (data) {
                                      if(data.type=="success"){
                                          select.val(data.result.National_Number);
                                          select.change();
                                        }
                                  }
                              });
                              ////$("#BoyScout .modal-body").html("<center><h2>L o a d i n g . . .</h2><img style='width:200px' src='<?=assets("img/loader 2.gif")?>' /></center>");
                              ////$("#BoyScout .modal-body").load("<?=actionLink("form","Profile")?>?NationalID=" + select.val(), function () {
                              //    $("#BoyScout").modal();
                              //});
                          }
                    }
                  },
                  error: function (data, status, xhr) {

                  }
              });
          });

          function isExistsNID(element) {

                  //console.log(select.val());


                  var found = 0;
                  //$.each([ 52, 97 ], function( index, value ) {
                  $('input[name ^= "NationalID"]').each(function (index, value) {
                      if ($(this).val() == element.val()) found++;
                  });

                  if ($("#leaderNId").val() == element.val()) found++;
                  if ($("#leaderAssistNId").val() == element.val()) found++;

                  if (found > 1) {
                      iziToast.show({
                          title: 'Error',
                          message: "This person alrady exists in your team.",
                          color: 'red', // blue, red, green, yellow
                          position: 'topCenter',
                      });
                      element.val("");
                      return false;
                  }
                  return true;

          }
          $("body").on("change", 'input[name^="NationalID"]', function () {
              var select = $(this);

              getProfile({
                 
                  element: select,
                  beforeSubmit: function () {
                      //console.log(select.val());
                      if (select.val() == "") {
                          select.closest("tr").find('input[name^="profileid"]').val(0);
                          select.closest("tr").find('.birthdate').html("");
                          select.closest("tr").find('.name').html("");
                          select.closest("tr").find('.btn-getin').data("id", 0);
                          select.closest("tr").find('.btn-getin').addClass("btn-viewin");
                          select.closest("tr").find('.btn-getin').removeClass('btn-getin');
                          return false;
                      }

                      return isExistsNID(select);

                  },
                  success: function (data) {
                      if (data.type == "success") {
                          if (data.result) {
                              if (!checkDate(data.result.Birth_Date)) return false;
                              select.closest("tr").find('input[name^="profileid"]').val(data.result.Profile_ID);
                              select.closest("tr").find('.birthdate').html(data.result.Birth_Date);
                              select.closest("tr").find('.name').html(data.result.First_Name + " " + data.result.Second_Name + " " + data.result.Third_Name + " " + data.result.Forth_Name);
                              select.closest("tr").find('.btn-getin').data("id", data.result.Profile_ID);
                              select.closest("tr").find('.btn-getin').addClass("btn-viewin");
                              select.closest("tr").find('.btn-getin').removeClass('btn-getin');
                          } else {
                              ////$("#BoyScout .modal-body").html("<center><h2>L o a d i n g . . .</h2><img style='width:200px' src='<?=assets("img/loader 2.gif")?>' /></center>");
                              ////$("#BoyScout .modal-body").load("<?=actionLink("form","Profile")?>?NationalID=" + select.val(), function () {
                              //    $("#BoyScout").modal();
                              //});
                              addNewProfile({
                                  DOBValidate:1,
                                  nid: select.val(),
                                  success: function (data) {
                                      if (data.type == "success") {
                                          select.val(data.result.National_Number);
                                          select.change();
                                      }
                                  },
                                  error: function (data) {
                                      select.val("");
                                      select.change();
                                  }
                              });
                          }
                    }
                  },
                  error: function (data, status, xhr) {

                    }
              });
          });

          $(".tdinput").keypress(function (e) {
              if (e.which == 13) {
                  return false;
              }
          });

          function addNewProfile(obj) {
                $("#BoyScout .modal-body").html("<center><h2>L o a d i n g . . .</h2><img style='width:200px' src='<?=assets("img/loader 2.gif")?>' /></center>");
                
                
                $("#BoyScout .modal-body").load("<?=actionLink("form","Profile")?>?NationalID=" + obj.nid + (('DOBValidate' in obj)?"&vDate="+obj.DOBValidate:""), function () {
                $("#BoyScout").modal();

                $('#BoyScout input[type="date"]').datepicker({
                    format: "yyyy-mm-dd",
                    language: "ar"
                });
                console.log($("#BoyScout .modal-body .ajax-form"));
                $("#BoyScout .modal-body .ajax-form").ajaxForm({
                    dataType: 'json',
                    success: function (data) {
                        if ('success' in obj) obj.success(data);
                        if (data.type == "success") {
                            iziToast.show({
                                title: 'Success',
                                message: data.message,
                                color: 'green', // blue, red, green, yellow
                                position: 'topCenter',
                            });
                            $("#BoyScout").modal("toggle");
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
                        if ('error' in obj)
                            obj.error(data, status, xhr);

                            iziToast.show({
                                title: 'Error',
                                message: data.status + " " + xhr,
                                color: 'red', // blue, red, green, yellow
                                position: 'topCenter',
                            });


                    }
                });

              });
          }

          function viewProfile(id) {
              $("#BoyScout .modal-body").html("<center><h2>L o a d i n g . . .</h2><img style='width:200px' src='<?=assets("img/loader 2.gif")?>' /></center>");
              $("#BoyScout .modal-body").load("<?=actionLink("form","Profile")?>/" + id, function () {
                  $("#BoyScout").modal();
                 
              });
          }
          $("body").on("click", ".btn-viewin", function (e) {
              e.preventDefault();
              var btn = $(this);
              var id = btn.data("id");
              viewProfile(id);
          });
          $("body").on("click", ".btn-getin", function (e) {
              e.preventDefault();
              var btn = $(this);

              addNewProfile({
                  nid: btn.data("id"),
                  success: function(data) {
                      if (data.type == "success") {
                          $("#BoyScout").modal("toggle");
                          btn.closest("tr").find('input[name^="NationalID"]').val(data.result.National_Number);
                          btn.closest("tr").find('input[name^="NationalID"]').change();

                      }

                  }
              });
        });

      });
</script>

<?if(!$request->isAjax())include(PATH.'templates/cpfooter.php');?>
