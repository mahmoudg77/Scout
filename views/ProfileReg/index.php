<?if(!$request->isAjax())include(PATH.'templates/header.php');?>

 <div id="RegForm" class=" col-md-6  col-sm-5 col-md-offset-3">
        <h2 id="header">Scouting registration</h2>
        <form name="form" class="ajax-form" action="" method="post" role="form" enctype="multipart/form-data">
          <?=Framework\Request::CSRF()?>
            <span>User Info</span>
            <div class="container-fluid " id="userInfo">
                <div class="labelCSS">
                    <label class="col-sm-2 control-label"  for="firstname">First name</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="firstName" name="firstname" required />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label" for="secondname">Second name</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="secondname" name="secondname" required/>
                    </div>
                </div>
                <div class="form-group ">
                    <label class="col-sm-2 control-label" for="thirdname">Third name</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="thirdname" name="thirdname" required/>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label" for="fourthname">Fourth name</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="fourthname" name="fourthname" required />
                    </div>
                </div>
                <div class="form-group  ">
                    <label class="col-sm-2 control-label" for="nationalId">National ID</label>
                    <div class="col-sm-3">
                        <input type="number" class="form-control" id="nationalId" name="nationalId" required/>
                    </div>

                    <label class="col-sm-3 control-label" for="birthdate">Birthdate</label>
                    <div class="col-sm-3">
                        <input type="date" class="form-control" id="birthdate" name="birthdate" required/>
                    </div>
                </div>

                <div class="row"></div>

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="email">Email</label>
                    <div class="col-sm-9 ">
                        <input type="email" class="form-control" id="email" name="email" required/>
                    </div>
                </div>

                <div class="row"></div>
                <div class="form-group" id="phNos">
                         <label class="col-sm-2 control-label" for="phone">Phone</label>
                        <div class="form-group">
                            <div class="col-sm-5 col-md-offset-0">
                                <div class="input-group">
  									<input type="text" class="form-control" id="phone" name="phone" required/>
  									<a class="input-group-addon" onClick="addfield()"><i class="fa fa-plus"></i></a>
								</div>
                            </div>

                        </div>
<!--
                        <div class="col-sm-5">
                            <button class="btn btn-info  btn-lr" title="add phone numbers" onclick="addPhone()">Add</button>
                        </div>
-->
                        <div class="row"></div>
                        <!-- <div id="phoneField1" style="display:none;">
                            <div class="col-sm-5 col-md-offset-2 ">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="phone2" name="phone2" required/>
                                    <span class="input-group-btn">
                                         <a href="" class="btn btn-info " onclick="removefield('phoneField1')" >
                                         <i class="glyphicon glyphicon-remove"></i>
                                       </a>
                                    </span>
                                </div>
                            </div>
                        </div> -->
                     <!-- <div id="phoneField2" style="display:none;">
                        <div class="col-sm-5 col-md-offset-2 ">
                            <div class="input-group">
                                <input type="text" class="form-control" id="phone3" name="phone3" required/>
                                <span class="input-group-btn">
                                         <button class="btn btn-info " onclick="removefield('phoneField2')" type="submit">
                                         <i class="glyphicon glyphicon-remove"></i>
                                         </button>
                                    </span>
                            </div>
                        </div>
                    </div> -->
                </div>

                <div class="row"></div>
                <div class="form-group  col-md-offset-0">
                    <label class="col-sm-2 control-label" for="address">Address</label>
                    <!--t3diiiiiiiiiiiiiiiiilll-->
                    <div class="col-sm-9">
                       <input type="text" class="form-control" id="address" name="address" required/>
<!--
                        <div class="input-group">
                            <input type="text" class="form-control" id="address" name="address" required/>
                            <span class="input-group-btn">
                                         <a class="btn btn-info " href="javascript:void(0)"  onclick="document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'" type="submit">
                                         <i class=" glyphicon glyphicon-map-marker" ></i>
                                         </a>
                                    </span>
                        </div>
-->
                    </div>
                </div>

                <!--Map------------------------------------------------>
                <!--<div id="light" class="white_content">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d55252.7572822845!2d31.294877950000004!3d30.057010650000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2seg!4v1500370138501"
                        width="350" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                    <a class="glyphicon glyphicon-remove" style="float:right" href="javascript:void(0)" onclick="document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'"></a></div>

                <div id="fade" class="black_overlay"></div>-->
                <!--Map------------------------------------------------>

                <div class="row"></div>
                <div class="container-fluid list" >
                    <div id="hob">

                    </div>
                </div>

                <div class="row"></div>
                <div class="form-group">
                    <!-- <form name="form" role="form"> -->
                        <label class="col-sm-2 control-label">Hobbies</label>
                        <div class="col-sm-5">

                        <div class="input-group">
  							<select class="form-control" id="hobbies" name="hobbiesList" required>
                            <?
                            $hobbs= new App\Models\Lookup\Hobbies;
                            foreach($hobbs->supperUser()->get() as $item){
                              ?>
                                <option value="<?=$item->id?>"><?=$item->name?></option>
                              <?
                            }?>
                        	</select>
  							<a class="input-group-addon" onclick="Add('hobby','hobbies')"><i class="fa fa-plus" ></i></a>
						</div>
                        </div>
<!--
                        <div class="col-sm-5">
                            <button type="button" class="btn btn-info glyphicon glyphicon-plus btn-lr" onclick="Add('hobby','hobbies')"></button>
                        </div>
-->
                    <!-- </form> -->
                </div>

                <div class="row"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Gender </label>
                    <div>

                        <div class="col-sm-9">
                            <label></label><input type="radio" id="female" name="gender" value="0"><strong>Female</strong><br>
                            <label></label><input type="radio" id="male" name="gender" value="1"><strong>Male</strong>
                        </div>
                    </div>

                    <label class="col-sm-2 control-label">Profile Img</label>
                    <div class="col-sm-4">
                        <input id="proimage" type="file" style="width:200px;" name="proImg" required>
                    </div>

                    <label class="col-sm-2 control-label" for="covimage">Cover img</label>
                    <div class="col-sm-3">
                        <input id="covimage" type="file" style="width:200px;" name="cvrImg" required>
                    </div>
                </div>

            </div>
            <!--=========================================================================================-->
            <span>Scout Info</span>
            <div class="container-fluid" id="Scoutinfo">
                <div class="form-group">
                    <label class="col-sm-2" for="position">Position</label>
                    <div class="col-sm-5">
                        <div class="styled-select blue semi-square">
                            <select class="form-control" name="Position">
 							<?
                            	$Position= new App\Models\Lookup\Position;
                            	foreach($Position->supperUser()->get() as $item){
                            ?>
                                <option value="<?=$item->id?>"><?=$item->name?></option>
                            <?
                            }?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row"></div>
                <div class="container-fluid list">
                    <div id="campainees">

                    </div>
                </div>

                <div class="row"></div>
                <div class="form-group">
                    <!-- <form name="form" role="form"> -->
                        <label class="col-sm-2 control-label" for="campains">Campains</label>
                        <div class="col-sm-5">

                            <div class="input-group">
  								<select class="form-control" id="campaines" name="campainList" required>
 							<?
                            	$Comp= new App\Models\Profile\Comp;
                            	foreach($Comp->supperUser()->get() as $item){
                            ?>
                                <option value="<?=$item->id?>"><?=$item->name?></option>
                            <?
                            }?>
                            </select>
  							<a class="input-group-addon" onclick="Add('campain','campaines')"><i class="fa fa-plus"></i></a>
						</div>

                        </div>
<!--
                        <div class="col-sm-5">
                            <button type="button" class="btn btn-info glyphicon glyphicon-plus btn-lr" onclick="Add('campain','campaines')"></button>
                        </div>
-->
                    <!-- </form> -->
                </div>


                <div class="row"></div>
                <div class="container-fluid list">
                    <div id="traines">

                    </div>
                </div>

                <div class="row"></div>
                <div class="form-group">
                    <!-- <form name="form" role="form"> -->
                        <label class="col-sm-2 control-label">Trains</label>
                        <div class="col-sm-5">

                            <div class="input-group">
  								 <select class="form-control" id="trains" name="trainList" required>
							<?
                            	$Studies= new App\Models\Lookup\Studies;
                            	foreach($Studies->supperUser()->get() as $item){
                            ?>
                                <option value="<?=$item->id?>"><?=$item->name?></option>
                            <?
                            }?>
                            </select>
  							<a class="input-group-addon" onclick="Add('train','trains')"><i class="fa fa-plus"></i></a>
						</div>

                        </div>
<!--
                        <div class="col-sm-5">
                            <button type="button" class="btn btn-info glyphicon glyphicon-plus btn-lr" onclick="Add('train','trains')"></button>
                        </div>
-->
                    <!-- </form> -->
                </div>


                <div class="row"></div>
                <div class="container-fluid list">
                    <div id="experiencees">
                    </div>
                </div>

                <div class="row"></div>
                <div class="form-group">
                    <!-- <form name="form" role="form"> -->
                        <label class="col-sm-2 control-label">Experience</label>
                        <div class="col-sm-5">

                             <div class="input-group">
  								<select class="form-control" id="experiences" name="experienceList" required>
              				<?
                            	$Experiences= new App\Models\Lookup\Experiences;
                            	foreach($Experiences->supperUser()->get() as $item){
                            ?>
                                <option value="<?=$item->id?>"><?=$item->name?></option>
                            <?
                            }?>
                             </select>
  							<a class="input-group-addon" onclick="Add('experience','experiences')"><i class="fa fa-plus"></i></a>
						</div>

                        </div>
<!--
                        <div class="col-sm-5">
                            <button type="button" class="btn btn-info glyphicon glyphicon-plus btn-lr" onclick="Add('experience','experiences')"></button>
                        </div>
-->
                    <!-- </form> -->
                </div>

            </div>

            <!--=========================================================================================-->
            <div class="form-group">
                <div class="col-sm-9 col-sm-offset-3">
                    <input type="submit" class="btn btn-info" value="Register"/>
                    <a href="#" class="btn btn-link">Cancel</a>
                </div>
            </div>
        </form>
    </div>


    <?if(!$request->isAjax())include(PATH.'templates/footer.php');?>
<script>
$(function(){
  $("#phoneField").click(function(e){
    alert("OK");
      e.preventDefault();
      addfield($(this).attr("id"));
  });

})
</script>
