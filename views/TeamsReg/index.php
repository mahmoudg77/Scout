<?if(!$request->isAjax())include(PATH.'templates/AdminHeader.php');?>

    <!-- Main content -->
    <section class="container-fluid" name="sec1">
        <div>
		<div class="teamReg">
                <h1 style="text-align: center;">Team registration</h1>
			<form class="form-horizontal ajax-form" action="<?=actionLink(" add ","TeamsReg ")?>" method="post">
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
				<div class="f">
					<div class="input-group col-xs-6 ">
						<span class="input-group-addon"><i class="fa fa-id-card" aria-hidden="true"></i></span>
						<input id="teamName" type="text" class="form-control" name="teamName" placeholder="Team name">
						<span class="input-group-addon">
							<select name="category" id="category">
								<option value="1">براعم</option>
								<option value="2">أشبال</option>
								<option value="3">كشافة</option>
								<option value="4">كشاف متقدم</option>
								<option value="5">جوالة</option>
							</select>
						</span>

                            </div>
					<div class="input-group col-xs-6 ">
						<span class="input-group-addon"><i aria-hidden="true">Country</i></span>
						<select id="country" type="text" class="form-control" name="country" onChange="getState(this.val);">
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
						<script>
						function getState(val) {alert(val);
							$.ajax({
							type: "POST",
							url: "Success",
							data:'country_id='+val,
							success: function(data){
								$("#organization").html(data);
							}
							});
						}
						</script>
                        </div>
					<div class="input-group col-xs-6 ">
						<span class="input-group-addon"><i aria-hidden="true">Organization</i></span>
						<select id="organization" type="text" class="form-control" name="organization">
							<option value="">Select Organization</option>
						<?
                            $organization= new App\Models\Lookup\Teams;
                            foreach($organization->supperUser()->get() as $item){
                               	if($item->parentId==post['country_id']){
                              ?>
                                	<option value="<?=$item->id?>"><?=$item->name?></option>
                              <?
								}
                            }?>
						</select>
                            </div>
					<div class="input-group col-xs-6 ">
						<span class="input-group-addon"><i aria-hidden="true">Branch</i></span>
						<select id="branch" type="text" class="form-control" name="branch">
							<?
                            $Branch= new App\Models\Lookup\Teams;
                            foreach($Branch->supperUser()->get() as $item){
                               	if($item->parentId==post['Org_id']){
                              ?>
                                	<option value="<?=$item->id?>"><?=$item->name?></option>
                              <?
								}
                            }?>
						</select>
                        </div>
					<div class="input-group col-xs-6 ">
						<span class="input-group-addon"><i aria-hidden="true">Office</i></span>
						<select id="office" type="text" class="form-control" name="office">
							<?
                            $Office= new App\Models\Lookup\Teams;
                            foreach($Office->supperUser()->get() as $item){
                               	if($item->parentId==post['brnch']){
                              ?>
                                	<option value="<?=$item->id?>"><?=$item->name?></option>
                              <?
								}
                            }?>
						</select>
                    </div>
                            </div>
				<div class="fees">
					<pre>Fees</pre>
					<pre name="Money" id="Money">120 Egy</pre>

                        </div>
                    <div id="tableT">
                        <table class="table">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Birthdate</th>
								<th>National ID</th>
								<th>Register</th>
                                </tr>
                            </thead>
                            <tbody id="table">
                                <tr>
                                    <th scope="row">1</th>
								<td><input type="text" class="form-control tdinput" id="r1td1" name="name[]"    required>
								</td>
								<td><input type="text" class="form-control tdinput" id="r1td2" name="Birthdate[]"  required>
								</td>
								<td><input type="number" class="form-control tdinput" id="r1td3" name="NationalID[]"  required>
								</td>
								<td>
									<div class="input-group">
										<span class="input-group-addon "><i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i><i class="fa fa-square-o fa-lg" aria-hidden="true"></i></span>
										<button type="button" class="btn btn-success " data-toggle="modal" data-target="#BoyScout">Get IN</button>
									</div>
								</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
								<td><input type="text" class="form-control tdinput" id="r2td1" name="name[]"  required>
								</td>
								<td><input type="text" class="form-control tdinput" id="r2td2" name="Birthdate[]"  required>
								</td>
								<td><input type="number" class="form-control tdinput" id="r2td3" name="NationalID[]"  required>
								</td>
								<td>
									<div class="input-group">
										<span class="input-group-addon "><i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i><i class="fa fa-square-o fa-lg" aria-hidden="true"></i></span>
										<button type="button" class="btn btn-success " data-toggle="modal" data-target="#BoyScout" disabled>Get IN</button>
									</div>
								</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
								<td><input type="text" class="form-control tdinput" id="r3td1" name="name[]"  required>
								</td>
								<td><input type="text" class="form-control tdinput" id="r3td2" name="Birthdate[]"  required>
								</td>
								<td><input type="number" class="form-control tdinput" id="r3td3" name="NationalID[]"  required>
								</td>
								<td>
									<div class="input-group">
										<span class="input-group-addon "><i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i><i class="fa fa-square-o fa-lg" aria-hidden="true"></i></span>
										<button type="button" class="btn btn-success " data-toggle="modal" data-target="#BoyScout" disabled>Get IN</button>
									</div>
								</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
								<td><input type="text" class="form-control tdinput" id="r4td1" name="name[]"  required>
								</td>
								<td><input type="text" class="form-control tdinput" id="r4td2" name="Birthdate[]"  required>
								</td>
								<td><input type="number" class="form-control tdinput" id="r4td3" name="NationalID[]"  required>
								</td>
								<td>
									<div class="input-group">
										<span class="input-group-addon "><i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i><i class="fa fa-square-o fa-lg" aria-hidden="true"></i></span>
										<button type="button" class="btn btn-success " data-toggle="modal" data-target="#BoyScout" disabled>Get IN</button>
									</div>
								</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
								<td><input type="text" class="form-control tdinput" id="r5td1" name="name[]"  required>
								</td>
								<td><input type="text" class="form-control tdinput" id="r5td2" name="Birthdate[]"  required>
								</td>
								<td><input type="number" class="form-control tdinput" id="r5td3" name="NationalID[]"  required>
								</td>
								<td>
									<div class="input-group">
										<span class="input-group-addon "><i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i><i class="fa fa-square-o fa-lg" aria-hidden="true"></i></span>
										<button type="button" class="btn btn-success " data-toggle="modal" data-target="#BoyScout" disabled>Get IN</button>
									</div>
								</td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
								<td><input type="text" class="form-control tdinput" id="r6td1" name="name[]"  required>
								</td>
								<td><input type="text" class="form-control tdinput" id="r6td2" name="Birthdate[]"  required>
								</td>
								<td><input type="number" class="form-control tdinput" id="r6td3" name="NationalID[]"  required>
								</td>
								<td>
									<div class="input-group">
										<span class="input-group-addon "><i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i><i class="fa fa-square-o fa-lg" aria-hidden="true"></i></span>
										<button type="button" class="btn btn-success " data-toggle="modal" data-target="#BoyScout" disabled>Get IN</button>
									</div>
								</td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
								<td><input type="text" class="form-control tdinput" id="r7td1" name="name[]"  required>
								</td>
								<td><input type="text" class="form-control tdinput" id="r7td2" name="Birthdate[]"  required>
								</td>
								<td><input type="number" class="form-control tdinput" id="r7td3" name="NationalID[]"  required>
								</td>
								<td>
									<div class="input-group">
										<span class="input-group-addon "><i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i><i class="fa fa-square-o fa-lg" aria-hidden="true"></i></span>
										<button type="button" class="btn btn-success " data-toggle="modal" data-target="#BoyScout" disabled>Get IN</button>
									</div>
								</td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
								<td><input type="text" class="form-control tdinput" id="r8td1" name="name[]"  required>
								</td>
								<td><input type="text" class="form-control tdinput" id="r8td2" name="Birthdate[]"  required>
								</td>
								<td><input type="number" class="form-control tdinput" id="r8td3" name="NationalID[]"  required>
								</td>
								<td>
									<div class="input-group">
										<span class="input-group-addon "><i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i><i class="fa fa-square-o fa-lg" aria-hidden="true"></i></span>
										<button type="button" class="btn btn-success " data-toggle="modal" data-target="#BoyScout" disabled>Get IN</button>
									</div>
								</td>
                                </tr>
                                <tr>
                                    <th scope="row">9</th>
								<td><input type="text" class="form-control tdinput" id="r9td1" name="name[]"  required>
								</td>
								<td><input type="text" class="form-control tdinput" id="r9td2" name="Birthdate[]"  required>
								</td>
								<td><input type="number" class="form-control tdinput" id="r9td3" name="NationalID[]"  required>
								</td>
								<td>
									<div class="input-group">
										<span class="input-group-addon "><i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i><i class="fa fa-square-o fa-lg" aria-hidden="true"></i></span>
										<button type="button" class="btn btn-success " data-toggle="modal" data-target="#BoyScout" disabled>Get IN</button>
									</div>
								</td>
                                </tr>
                                <tr>
                                    <th scope="row">10</th>
								<td><input type="text" class="form-control tdinput" id="r10td1" name="name[]"  required>
								</td>
								<td><input type="text" class="form-control tdinput" id="r10td2" name="Birthdate[]"  required>
								</td>
								<td><input type="number" class="form-control tdinput" id="r10td3" name="NationalID[]"  required>
								</td>
								<td>
									<div class="input-group">
										<span class="input-group-addon "><i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i><i class="fa fa-square-o fa-lg" aria-hidden="true"></i></span>
										<button type="button" class="btn btn-success " data-toggle="modal" data-target="#BoyScout" disabled>Get IN</button>
									</div>
								</td>
                                </tr>
                                <tr>
                                    <th scope="row">11</th>
								<td><input type="text" class="form-control tdinput" id="r11td1" name="name[]"  required>
								</td>
								<td><input type="text" class="form-control tdinput" id="r11td2" name="Birthdate[]"  required>
								</td>
								<td><input type="number" class="form-control tdinput" id="r11td3" name="NationalID[]"  required>
								</td>
								<td>
									<div class="input-group">
										<span class="input-group-addon "><i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i><i class="fa fa-square-o fa-lg" aria-hidden="true"></i></span>
										<button type="button" class="btn btn-success " data-toggle="modal" data-target="#BoyScout" disabled>Get IN</button>
									</div>
								</td>
                                </tr>
                                <tr>
                                    <th scope="row">12</th>
								<td><input type="text" class="form-control tdinput" id="r12td1" name="name[]"  required>
								</td>
								<td><input type="text" class="form-control tdinput" id="r12td2" name="Birthdate[]"  required>
								</td>
								<td><input type="number" class="form-control tdinput" id="r12td3" name="NationalID[]"  required>
								</td>
								<td>
									<div class="input-group">
										<span class="input-group-addon "><i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i><i class="fa fa-square-o fa-lg" aria-hidden="true"></i></span>
										<button type="button" class="btn btn-success " data-toggle="modal" data-target="#BoyScout" disabled>Get IN</button>
									</div>
								</td>
                                </tr>
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
						<button class="btn btn-defualt" type="submit" style="width:80%">Submit</button>
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
				<form class="form-horizontal ajax-form" action="<?=actionLink(" add ","TeamsReg ")?>" method="post">
					<div class="FF">
						<div class="input-group">
							<span class="input-group-addon">First Name</span>
							<input id="firstName" type="text" class="form-control" name="firstName" required>
						</div>
						<div class="input-group ">
							<span class="input-group-addon">Second Name</span>
							<input id="secondName" type="text" class="form-control" name="SecondName" required>
						</div>
						<div class="input-group">
							<span class="input-group-addon"><i aria-hidden="true">National ID</i></span>
							<input id="nationalId" type="text" class="form-control" name="nationalId" required>
						</div>
					</div>
					<div class="FF">
						<div class="input-group">
							<span class="input-group-addon">Third Name</span>
							<input id="thirdName" type="text" class="form-control" name="thirdName" required>
						</div>
						<div class="input-group ">
							<span class="input-group-addon">Fourth Name</span>
							<input id="fourthName" type="text" class="form-control" name="fourthName" required>
						</div>
						<div class="input-group">
						<span class="input-group-addon"><i aria-hidden="true">BirthDate</i></span>
						<input id="birthdate" type="date" class="form-control" name="birthdate" required>
					</div>
					</div>
					<div class="input-group col-xs-8 ">
						<span class="input-group-addon"><i aria-hidden="true">E-Mail</i></span>
						<input id="email" type="text" class="form-control" name="email" required>
					</div>
					<div class="input-group col-xs-8 ">
						<span class="input-group-addon"><i aria-hidden="true">Address</i></span>
						<input id="address" type="text" class="form-control" name="address" required>
					</div>
					<div class="input-group col-xs-8 ">
						<span class="input-group-addon"><i aria-hidden="true">Phone</i></span>
						<input id="phone" type="text" class="form-control" name="phone" required>
					</div>
					<div class="input-group col-xs-8 ">
						<span class="input-group-addon"><i aria-hidden="true">Phone</i></span>
						<input id="phone" type="text" class="form-control" name="phone" required>
					</div>
					<div class="input-group col-xs-8 ">
						<span class="input-group-addon"><i aria-hidden="true">Gender</i></span>
						<label></label><input type="radio" id="female" name="gender" value="0"><strong>Female</strong><br>
                        <label></label><input type="radio" id="male" name="gender" value="1"><strong>Male</strong>
					</div>
					<div class="FF">
						<div class="input-group">
							<span class="input-group-addon">Prof Img</span>
							<input id="proimage" type="file" name="proImg" required>
						</div>
						<div class="input-group">
							<span class="input-group-addon">Cover Img</span>
							<input id="proimage" type="file"  name="proImg" required>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<?=Framework\Request::CSRF()?>
							<button class="btn btn-defualt" type="submit" style="width:80%">Submit</button>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>
		</div>

	</div>
</div>
<?if(!$request->isAjax())include(PATH.'templates/AdminFooter.php');?>
