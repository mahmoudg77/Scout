<?if(!$request->isAjax())include(PATH.'templates/AdminHeader.php');?>

    <!-- Main content -->
    <section class="container-fluid">
        <div>
            <div  class="">
                <h1 style="text-align: center;">Team registration</h1>
                <form class="form-horizontal ajax-form" action="<?=actionLink("add","TeamsReg")?>" method="post">
                    <div id="part1">
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="teamName">Team name:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="teamName" placeholder="Enter team name" name="teamName">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="tha">Team office:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="tha" placeholder="Enter office address" name="tha">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="Supervisory">Supervisory Authority:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="Supervisory" placeholder="Enter Supervisory Authority" name="Supervisory">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="leader">Leader:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="leader" placeholder="Enter leader name" name="leader">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="leaderA">Leader assist:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="leaderA" placeholder="Enter leader assist name" name="leaderA">
                            </div>
                        </div>
                    </div>
                    <div id="part2">
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="branch">Branch:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="branch" placeholder="Enter branch" name="branch">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="TotalM">Registration fees:</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="TotalM" placeholder="Enter Total money" name="TotalM">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="receiptN">receipt no.:</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="receiptN" placeholder="Enter receipt no." name="receiptN">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="payDate">Pay date:</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="payDate" placeholder="Enter pay date" name="payDate">
                            </div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="recordN">record no.:</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="recordN" placeholder="Enter record no." name="recordN">
                            </div>
                        </div>
                    </div>
                    <div id="tableT">
                        <table class="table">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Birthdate</th>
                                    <th>Address</th>
                                    <th>Notes</th>
                                </tr>
                            </thead>
                            <tbody id="table">
                                <tr>
                                    <th scope="row">1</th>
                                    <td><input type="text" class="form-control tdinput" id="r1td1" required></td>
                                    <td><input type="text" class="form-control tdinput" id="r1td2" required></td>
                                    <td><input type="text" class="form-control tdinput" id="r1td3" required></td>
                                    <td><input type="text" class="form-control tdinput" id="r1td4"></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td><input type="text" class="form-control tdinput" id="r2td1" required></td>
                                    <td><input type="text" class="form-control tdinput" id="r2td2" required></td>
                                    <td><input type="text" class="form-control tdinput" id="r2td3" required></td>
                                    <td><input type="text" class="form-control tdinput" id="r2td4"></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td><input type="text" class="form-control tdinput" id="r3td1" required></td>
                                    <td><input type="text" class="form-control tdinput" id="r3td2" required></td>
                                    <td><input type="text" class="form-control tdinput" id="r3td3" required></td>
                                    <td><input type="text" class="form-control tdinput" id="r3td4"></td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td><input type="text" class="form-control tdinput" id="r4td1" required></td>
                                    <td><input type="text" class="form-control tdinput" id="r4td2" required></td>
                                    <td><input type="text" class="form-control tdinput" id="r4td3" required></td>
                                    <td><input type="text" class="form-control tdinput" id="r4td4"></td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td><input type="text" class="form-control tdinput" id="r5td1" required></td>
                                    <td><input type="text" class="form-control tdinput" id="r5td2" required></td>
                                    <td><input type="text" class="form-control tdinput" id="r5td3" required></td>
                                    <td><input type="text" class="form-control tdinput" id="r5td4"></td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td><input type="text" class="form-control tdinput" id="r6td1" required></td>
                                    <td><input type="text" class="form-control tdinput" id="r6td2" required></td>
                                    <td><input type="text" class="form-control tdinput" id="r6td3" required></td>
                                    <td><input type="text" class="form-control tdinput" id="r6td4"></td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td><input type="text" class="form-control tdinput" id="r7td1" required></td>
                                    <td><input type="text" class="form-control tdinput" id="r7td2" required></td>
                                    <td><input type="text" class="form-control tdinput" id="r7td3" required></td>
                                    <td><input type="text" class="form-control tdinput" id="r7td4"></td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td><input type="text" class="form-control tdinput" id="r8td1" required></td>
                                    <td><input type="text" class="form-control tdinput" id="r8td2" required></td>
                                    <td><input type="text" class="form-control tdinput" id="r8td3" required></td>
                                    <td><input type="text" class="form-control tdinput" id="r8td4"></td>
                                </tr>
                                <tr>
                                    <th scope="row">9</th>
                                    <td><input type="text" class="form-control tdinput" id="r9td1" required></td>
                                    <td><input type="text" class="form-control tdinput" id="r9td2" required></td>
                                    <td><input type="text" class="form-control tdinput" id="r9td3" required></td>
                                    <td><input type="text" class="form-control tdinput" id="r9td4"></td>
                                </tr>
                                <tr>
                                    <th scope="row">10</th>
                                    <td><input type="text" class="form-control tdinput" id="r10td1" required></td>
                                    <td><input type="text" class="form-control tdinput" id="r10td2" required></td>
                                    <td><input type="text" class="form-control tdinput" id="r10td3" required></td>
                                    <td><input type="text" class="form-control tdinput" id="r10td4"></td>
                                </tr>
                                <tr>
                                    <th scope="row">11</th>
                                    <td><input type="text" class="form-control tdinput" id="r11td1" required></td>
                                    <td><input type="text" class="form-control tdinput" id="r11td2" required></td>
                                    <td><input type="text" class="form-control tdinput" id="r11td3" required></td>
                                    <td><input type="text" class="form-control tdinput" id="r11td4"></td>
                                </tr>
                                <tr>
                                    <th scope="row">12</th>
                                    <td><input type="text" class="form-control tdinput" id="r12td1" required></td>
                                    <td><input type="text" class="form-control tdinput" id="r12td2" required></td>
                                    <td><input type="text" class="form-control tdinput" id="r12td3" required></td>
                                    <td><input type="text" class="form-control tdinput" id="r12td4"></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="row" style="float:right">
                            <button type="button" class="btn btn-info" onClick="Removemember()"><span class="glyphicon glyphicon-minus"></span></button>
                            <button type="button" class="btn btn-info" onClick="asd()"><span class="glyphicon glyphicon-plus"></span></button>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <?=Framework\Request::CSRF()?>
                            <button class="btn btn-primary" type="submit" style="width:80%">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
<?if(!$request->isAjax())include(PATH.'templates/AdminFooter.php');?>
