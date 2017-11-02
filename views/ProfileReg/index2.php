 <div id="RegForm" class=" col-md-6  col-sm-5 col-md-offset-3">
      
        <form name="form" class="ajax-form" action="" method="post" role="form" enctype="multipart/form-data">
          <?=Framework\Request::CSRF()?>
            <span>User Info</span>
            <div class="container-fluid " id="userInfo">
              		<div>
                    <label class="col-sm-2 control-label  profReg" for="firstname">First name</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="firstName" name="firstname" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label  profReg" for="secondname">Second name</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="secondname" name="secondname" required/>
                    </div>
                </div>
                <div class="form-group  ">
                    <label class="col-sm-2 control-label  profReg" for="thirdname">Third name</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="thirdname" name="thirdname" required/>
                    </div>
                </div>

                <div class="form-group ">
                    <label class="col-sm-3 control-label  profReg" for="fourthname">Fourth name</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="fourthname" name="fourthname" />
                    </div>
                </div>
                <div class="form-group   ">
                    <label class="col-sm-2 control-label  profReg" for="nationalId">National ID</label>
                    <div class="col-sm-3">
                        <input type="number" class="form-control no-spin" id="nationalId" name="nationalId" required/>
                    </div>

                    <label class="col-sm-3 control-label  profReg" for="birthdate">Birthdate</label>
                    <div class="col-sm-3">
                        <input type="date" class="form-control date" id="birthdate" name="birthdate" required/>
                    </div>
                </div>

                <div class="row"></div>

                <div class="form-group ">
                    <label class="col-sm-2 control-label  profReg" for="email">Email</label>
                    <div class="col-sm-9 ">
                        <input type="email" class="form-control" id="email" name="email" required/>
                    </div>
                </div>

                <div class="row"></div>
                <div class="form-group " id="phNos">
                         <label class="col-sm-2 control-label  profReg" for="phone">Phone</label>
                        <div class="form-group ">
                            <div class="col-sm-5 col-md-offset-0">
                                <div class="input-group">
                                   <input type="text" class="form-control" id="phone" name="phone" required/>
                                   <a class="input-group-addon" onClick="addfield()"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>

                        </div>

                        <div class="row"></div>

                </div>

                <div class="row"></div>
                <div class="form-group   col-md-offset-0">
                    <label class="col-sm-2 control-label  profReg" for="address">Address</label>
                    <!--t3diiiiiiiiiiiiiiiiilll-->
                    <div class="col-sm-9">
                       <input type="text" class="form-control" id="address" name="address" required/>

                    </div>
                </div>

      
                <div class="row"></div>
                <div class="container-fluid list" >
                    <div id="hob">

                    </div>
                </div>

                <div class="row"></div>
                <div class="form-group ">
                    <!-- <form name="form" role="form"> -->
                        <label class="col-sm-2 control-label  profReg">Hobbies</label>
                        <div class="col-sm-5">

                        <div class="input-group">
  							<select class="form-control" id="hobbies" name="hobbiesList">
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

                </div>

                <div class="row"></div>
                <div class="form-group ">
                    <label class="col-sm-2 control-label  profReg">Gender </label>
                    <div>

                        <div class="col-sm-9">
                            <label></label><input type="radio" id="female" name="gender" value="0"><strong>Female</strong><br>
                            <label></label><input type="radio" id="male" name="gender" value="1"><strong>Male</strong>
                        </div>
                    </div>

                    <label class="col-sm-2 control-label  profReg">Profile Img</label>
                    <div class="col-sm-4">
                        <input id="proimage" type="file" style="width:200px;" name="proImg" required>
                    </div>

                    <label class="col-sm-2 control-label  profReg" for="covimage">Cover img</label>
                    <div class="col-sm-3">
                        <input id="covimage" type="file" style="width:200px;" name="cvrImg" required>
                    </div>
                </div>

            </div>
            <!--=========================================================================================-->
            <span>Scout Info</span>
            <div class="container-fluid" id="Scoutinfo">
                <div class="form-group ">
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
                <div class="form-group ">
                    <!-- <form name="form" role="form"> -->
                        <label class="col-sm-2 control-label  profReg" for="campains">Campains</label>
                        <div class="col-sm-5">

                            <div class="input-group">
  								<select class="form-control" id="campaines" name="campainList">
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

                </div>


                <div class="row"></div>
                <div class="container-fluid list">
                    <div id="traines">

                    </div>
                </div>

                <div class="row"></div>
                <div class="form-group ">
                    <!-- <form name="form" role="form"> -->
                        <label class="col-sm-2 control-label  profReg">Trains</label>
                        <div class="col-sm-5">

                            <div class="input-group">
  							<select class="form-control" id="trains" name="trainList">
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
                <div class="form-group ">
                    <!-- <form name="form" role="form"> -->
                        <label class="col-sm-2 control-label  profReg">Experience</label>
                        <div class="col-sm-5">

                             <div class="input-group">
  			  <select class="form-control" id="experiences" name="experienceList">
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

                </div>

            </div>

            <!--=========================================================================================-->
            <div class="form-group ">
                <div class="col-sm-9 col-sm-offset-3">
                    <input type="submit" class="btn btn-info" value="Register"/>
                    <a href="<?=actionLink("","Home")?>" class="btn btn-link">Cancel</a>
                </div>
            </div>
        </form>
    </div>