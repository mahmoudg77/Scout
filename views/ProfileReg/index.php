<?if(!$request->isAjax())include(PATH.'templates/header.php');?>
   <br /><br />
   <h4 class="text-center">  Registeration </h4>
   <div class="col-md-6  col-sm-5 col-md-offset-3">
     	<div class="tabs tabs-alt clearfix" id="tab-7">

          <ul class="tab-nav clearfix">
           
           <li><a href="#tabs-personal">Personal informations</a></li>
           <li><a href="#tabs-scout">Scout Informations</a></li>
          
          </ul>

          <div class="tab-container">
   
           <form id="register-form" name="register-form" class="nobottommargin" action="" method="post" role="form" enctype="multipart/form-data">
           <?=Framework\Request::CSRF()?>
           <div class="tab-content clearfix" id="tabs-personal">
                     
                   
                    <div class="col_half">
                    <label for="register-form-name">First Name:</label>
                    <input type="text" id="firstname" name="firstname" value="" class="form-control" required />
                   </div>
                    
                     <div class="col_half col_last">
                    <label for="register-form-name">Second Name:</label>
                    <input type="text" id="secondname" name="secondname" value="" class="form-control" required />
                   </div>
                     
                    <div class="clear"></div>
                    
                 
                    
                      <div class="col_half">
                    <label for="register-form-name">Third Name:</label>
                    <input type="text" id="thirdname" name="thirdname" value="" class="form-control" required />
                   </div>
                    
                     <div class="col_half col_last">
                    <label for="register-form-name">last Name:</label>
                    <input type="text" id="fourthname" name="fourthname" value="" class="form-control" required />
                   </div>
                     
                    <div class="clear"></div>
                    
                    
                    <div class="col_half">
                    <label for="register-form-name">Birthdate:</label>
                    <input type="text" id="birthdate" name="birthdate" value="" class="form-control" required />
                   </div>
                    
                     <div class="col_half col_last">
                    <label for="register-form-name">Phone:</label>
                    <input type="text" id="phone" name="phone" value="" class="form-control" />
                   </div>
                     
                    <div class="clear"></div>
                    
                   <div class="col_half">
                    <label for="register-form-name">National id:</label>
                    <input type="text" id="nationalId" name="nationalId" value="" class="form-control" required />
                   </div>
            
                   <div class="col_half col_last">
                    <label for="register-form-email">Email Address:</label>
                    <input type="email" id="email" name="email" value="" class="form-control" required/>
                   </div>
            
                   <div class="clear"></div>
            
                   <div class="col_half">
                    <label for="register-form-username">Address</label>
                    <input type="text" id="address" name="address" value="" class="form-control" required />
                   </div>
            
                
            
                   <div class="clear"></div>
                   
                    <div class="col_half">
                    <label for="register-form-username">gender :</label>

                    <label class="radio-inline"><input type="radio" name="gender" id="male" value="0">Male</label>
                    <label class="radio-inline"><input type="radio" name="gender" id="female" value="1">Female</label>
                   </div>
            
               
            
                   <div class="clear"></div>
            
                   <div class="col_full nobottommargin">
                    <a id="btnNext" class="button button-3d button-blue pull-right nomargin">Next</a>
                   </div>
            
                  
              </div>
              <div class="tab-content clearfix" id="tabs-scout">
                  
                   <div class="col_half">
                          <div class="form-group">
                            <label for="sel1">Position</label>
                            <select class="form-control">
                              <option value="">Select from list</option>
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
            
                   <div class="col_half col_last">
                          <div class="form-group">
                            <label for="sel1">Camps</label>
                            <select class="form-control" >
                              <option value="">Select from list</option>
                             		<?
                            	$Comp= new App\Models\Profile\Comp;
                            	foreach($Comp->supperUser()->get() as $item){
                            ?>
                                <option value="<?=$item->id?>"><?=$item->name?></option>
                            <?
                            }?>
                            </select>
                          </div>
                   </div>
            
                   <div class="clear"></div>
                   
                   
                      <div class="col_half">
                          <div class="form-group">
                            <label for="sel1">Trainnings</label>
                            <select class="form-control">
                              <option value="">Select from list</option>
                             		<?
                            	$Studies= new App\Models\Lookup\Studies;
                            	foreach($Studies->supperUser()->get() as $item){
                            ?>
                                <option value="<?=$item->id?>"><?=$item->name?></option>
                            <?
                            }?>
                            </select>
                          </div>
                     </div>
            
                   <div class="col_half col_last">
                          <div class="form-group">
                            <label for="sel1">Experiences</label>
                            <select class="form-control">
                              <option value="">Select from list</option>
                             				<?
                            	$Experiences= new App\Models\Lookup\Experiences;
                            	foreach($Experiences->supperUser()->get() as $item){
                            ?>
                                <option value="<?=$item->id?>"><?=$item->name?></option>
                            <?
                            }?>
                            </select>
                          </div>
                   </div>
                  
                      <div class="col_half">
                    <label for="register-form-phone">Profile image:</label>
                    <input type="file" id="register-form-phone" id="proimage" name="proImg" value="" class="form-control" />
                   </div>
            
                     <div class="col_half col_last">
                          <div class="form-group">
                            <label for="sel1">Skills</label>
                            <select class="form-control">
                              <option value="">Select from list</option>
                                     <?
                            $hobbs= new App\Models\Lookup\Hobbies;
                            foreach($hobbs->supperUser()->get() as $item){
                              ?>
                                <option value="<?=$item->id?>"><?=$item->name?></option>
                              <?
                            }?>
                            </select>
                          </div>
                   </div>
                     
                     
                     
                
                     
                   <div class="clear"></div>
                   <div class="col_full nobottommargin">
                    <a id="btnPrevious" class="button button-3d button-blue pull-left nomargin">Back</a>
                    <button type="submit"class="button button-3d button-black nomargin" id="register-form-submit" name="register-form-submit" value="register">Register Now</button>
                   </div>
              </div>
              </form>
     		</div>

    </div>
   </div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
  $('#btnNext').click(function(){
  $('.tab-nav > .ui-tabs-active').next('li').find('a').trigger('click');
});

  $('#btnPrevious').click(function(){
  $('.tab-nav > .ui-tabs-active').prev('li').find('a').trigger('click');
});
</script>
    <?if(!$request->isAjax())include(PATH.'templates/footer.php');?>
<script>
    $(function () {
        $("#phoneField").click(function (e) {
            e.preventDefault();
            addfield($(this).attr("id"));
        });

    });
</script>
