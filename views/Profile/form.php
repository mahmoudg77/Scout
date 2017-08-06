

<form class="form-horizontal ajax-form" action="<?=actionLink("form","Profile")?>" method="post" enctype="multipart/form-data">
    <div class="col col-sm-12 col-md-6">
        <div class="input-group">
            <span class="input-group-addon">First Name</span>
            <input id="firstName" type="text" class="form-control" name="firstName" value="<?=$Profile->First_Name?>" required />
        </div>
        <div class="input-group ">
            <span class="input-group-addon">Second Name</span>
            <input id="secondName" type="text" class="form-control" name="SecondName" value="<?=$Profile->Second_Name?>" required />
        </div>

    </div>

    <div class=" col-sm-12  col-md-6">
        <div class="input-group">
            <span class="input-group-addon">Third Name</span>
            <input id="thirdName" type="text" class="form-control" name="thirdName" value="<?=$Profile->Third_Name?>"  />
        </div>
        <div class="input-group ">
            <span class="input-group-addon">Fourth Name</span>
            <input id="fourthName" type="text" class="form-control" name="fourthName" value="<?=$Profile->Forth_Name?>"  />
        </div>

    </div>
    <div class=" col-sm-12">
        <div class="input-group">
            <span class="input-group-addon">
                <i aria-hidden="true">National ID</i>
            </span>
            <input id="nationalId" type="number" class="form-control" name="nationalId" value="<?=$Profile->National_Number?>" required />
        </div>
        <div class="input-group">
            <span class="input-group-addon">
                <i aria-hidden="true">BirthDate</i>
            </span>
            <input id="birthdate" type="date" class="form-control" onblur="checkDate(this.value,this.id)" name="birthdate" value="<?=$Profile->Birth_Date?>" required />
        </div>
    </div>
    <div class="col-xs-12">
        <div class="input-group ">
            <span class="input-group-addon">
                <i aria-hidden="true">E-Mail</i>
            </span>
            <input id="email" type="email" class="form-control" name="email" value="<?=$Profile->Emails[0]?>"  />
        </div>
        <div class="input-group ">
            <span class="input-group-addon">
                <i aria-hidden="true">Address</i>
            </span>
            <input id="address" type="text" class="form-control" name="address" value="<?=$Profile->Address[0]?>"  />
        </div>
        <div class="input-group ">
            <span class="input-group-addon">
                <i aria-hidden="true">Phone</i>
            </span>
            <input id="phone" type="tel" class="form-control" name="phone" value="<?=$Profile->Phones[0]?>" required />
        </div>
        <div class="input-group">
            <span class="input-group-addon">
                <i aria-hidden="true">Phone</i>
            </span>
            <input id="phone" type="tel" class="form-control" name="secondphone" value="<?=$Profile->Phones[1]?>"  />
        </div>
        <div class="input-group">
            <span class="input-group-addon">
                <i aria-hidden="true">Gender</i>
            </span>
            <div class="" >
                    <label class="radio col col-md-6">
                        <input type="radio" id="female" name="gender" <?if($Profile->Gender==0){?> checked<?}?> value="0"/>
                        <strong>Female</strong>
                    </label>

                    <label class="radio col col-md-6">
                        <input type="radio" id="male" name="gender" <?if($Profile->Gender==1){?> checked<?}?> value="1"/>
                        <strong>Male</strong>
                    </label>
            </div>
        </div>
    </div>
    <div class="col-xs-12">
        <div class="input-group  col-xs-12 col-md-6">
            <span class="input-group-addon">Prof Img</span>
            <input id="proimage" type="file" name="proImg"  />
        </div>
        <div class="input-group  col-xs-12 col-md-6">
            <span class="input-group-addon">Cover Img</span>
            <input id="coverImg" type="file" name="coverImg"  />
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <?=Framework\Request::CSRF()?>
            <input type="hidden" name="id" value="<?=$Profile->Profile_ID?>"/>
            <button class="btn btn-success" type="submit" style="width:80%">Submit</button>
        </div>
    </div>
</form>