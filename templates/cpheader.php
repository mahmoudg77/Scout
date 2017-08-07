<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Arabscout|  <?=str_replace("App\Controllers\\","",CONTROLLER_PATH)?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?=assets('css/bootstrap.min.css')?>">
  <link rel="stylesheet" href="<?=assets('css/jquery.dataTables.min.css')?>">

  <!-- Font Awesome -->
<link rel="stylesheet" href="<?=assets('css/skin/font-awesome.min.css')?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?=assets('css/skin/ionicons.min.css')?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=assets('css/skin/AdminLTE.min.css')?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=assets('dist/css/skins/_all-skins.min.css')?>">
  <link rel="stylesheet" href="<?=assets('css/iziToast.min.css')?>">
  <link rel="stylesheet" href="<?=assets('css/TeamsReg.css')?>">

   

</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- jQuery 3 -->
<script src="<?=assets('bower_components/jquery/dist/jquery.min.js')?>"></script>
<script src="<?=assets('js/jquery-1.12.4.js')?>"></script>

    <script>
	var counter =13;
	var counterFee=120;
	function checkDate(value,name){
		var date1 = new Date(value);
        var date2 = new Date(String((x.getMonth()+1)+"/"+x.getDate()+"/"+x.getFullYear()));
        var timeDiff = Math.abs(date2.getTime() - date1.getTime());
        var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24))/365;
		if(document.getElementById("category").value==1 && diffDays>7 ){
			alert("هذا الشخص لم يعد فى مرحلة البراعم ");
			document.getElementById(name).value="yyyy-mm-dd";
		}
		else if(document.getElementById("category").value==2 && (diffDays<7 || diffDays>11) ){
			alert("هذا الشخص لم يعد/ يصل فى مرحلة الأشبال ");
			document.getElementById(name).value="yyyy-mm-dd";
		}
		else if(document.getElementById("category").value==3 &&  (diffDays<11 || diffDays>14) ){
			alert("هذا الشخص لم يعد/ يصل فى مرحلة الكشافة ");
			document.getElementById(name).value="yyyy-mm-dd";
		}
		else if(document.getElementById("category").value==4 &&  (diffDays<14 || diffDays>17) ){
			alert("هذا الشخص لم يعد/ يصل فى مرحلة الكشاف المتقدم ");
			document.getElementById(name).value="yyyy-mm-dd";
		}
		else if(document.getElementById("category").value==5 && diffDays<17 ){
			alert("هذا الشخص لم يصل فى مرحلة الجوالة ");
			document.getElementById(name).value="yyyy-mm-dd";
		}

	}
	function asd(){
		if(counter<=24){
			document.getElementById('table').innerHTML+=
			`<tr>
                <th scope="row">`+counter+`</th>
                <td><input type="hidden" name="profileid[]" /> <input type="number" class ="form-control tdinput" name="NationalID[]"  required></td>
			    <td class="name">
			    </td>
			    <td class="birthdate">
			    </td>
		    <td>
			    <div class="input-group">
				    <button type="button" class="btn btn-success btn-getin">Get IN</button>
			    </div>
		    </td>
         </tr>`
		counter++;

		document.getElementById('Money').innerHTML=((counter-1)*10);
		}else{
			alert("هذا هو اقصى عدد مسموح للفريق");
		}
	}
	var elementToD;
	function Removemember(){
		if(counter>13){
			document.getElementById("table").deleteRow(counter-2);
			--counter;
			document.getElementById('Money').innerHTML=((counter-1)*10);
		}

	  }
	function Ajxify(){
		xmlhttp= new XMLHttpRequest();
		xmlhttp.onreadystatechange= function(){
			if(xmlhttp.readyState == 4 &&xmlhttp.status == 200){
				document.getElementById('RUsers').innerHTML=xmlhttp.responseText;
			}
		}
		xmlhttp.open('GET','starter.php',true);
		xmlhttp.send();
	}


    </script>


<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?=actionLink("","Dashboard")?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Scout</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?=assets('dist/img/user2-160x160.jpg')?>" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->

                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>

                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->

                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?=$context->user->accid->PersonalImage->thumb?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?=USER_NAME?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?=$context->user->accid->PersonalImage->thumb?>" class="img-circle" alt="User Image">
                <p>
                  <?=USER_NAME?> - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?=actionLink('logout','Login')?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=$context->user->accid->PersonalImage->thumb?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?=USER_NAME?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
  			<a href="#">
  				<i class="fa fa-files-o"></i>
  				<span>Profile</span>
  				 <span class="pull-right-container">
                    <i class="fa fa-angle-right pull-right"></i>
                  </span>
  			</a>
			   <ul class="treeview-menu">
      			<li><a class="menu-item"  href="<?=actionLink("all","Profile")?>"><i class="fa fa-circle-o"></i> Profiles</a></li>
      			<li><a class="menu-item"  href="<?=actionLink("all","Comp")?>"><i class="fa fa-circle-o"></i> Camps</a></li>
      			<li><a class="menu-item"  href="<?=actionLink("all","CompUserLog")?>"><i class="fa fa-circle-o"></i> Comps Log</a></li>
      			<li><a class="menu-item"  href="<?=actionLink("all","ExperienceUserLog")?>"><i class="fa fa-circle-o"></i> Experience Log</a></li>
      			<li><a class="menu-item"  href="<?=actionLink("all","HobbyUserLog")?>"><i class="fa fa-circle-o"></i> Hobbies Log</a></li>
      			<li><a class="menu-item"  href="<?=actionLink("all","StudyUserLog")?>"><i class="fa fa-circle-o"></i> Studies Log</a></li>
		    </ul>
	    </li>

      <li class="treeview">
      <a href="#">
        <i class="fa fa-files-o"></i>
        <span>Register</span>
         <span class="pull-right-container">
                  <i class="fa fa-angle-right pull-right"></i>
                </span>
      </a>
       <ul class="treeview-menu">
         <li><a class="menu-item" href="<?=actionLink("","TeamsReg")?>"><i class="fa fa-circle-o"></i> Forms</a></li>
         <li><a class="menu-item" href="<?=actionLink("all","Waitinglist")?>"><i class="fa fa-circle-o"></i> Approvels</a></li>
      </ul>
    </li>

    <li class="treeview">
    <a href="#">
      <i class="fa fa-files-o"></i>
      <span>Administrator</span>
       <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
    </a>
     <ul class="treeview-menu">
       <li><a class="menu-item" href="<?=actionLink("all","Register")?>"><i class="fa fa-circle-o"></i> Register Years</a></li>
       <li><a class="menu-item" href="<?=actionLink("all","Teams")?>"><i class="fa fa-circle-o"></i> Organization Tree</a></li>
       <li><a class="menu-item" href="<?=actionLink("all","RegisteryUser")?>"><i class="fa fa-circle-o"></i> Register User</a></li>
    </ul>
  </li>
  <li class="treeview">
    <a href="#">
      <i class="fa fa-files-o"></i>
      <span>Setting</span>
       <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
    </a>
     <ul class="treeview-menu">
       <li><a class="menu-item" href="<?=actionLink("all","ContactType")?>"><i class="fa fa-circle-o"></i> Contact Types</a></li>
       <li><a class="menu-item" href="<?=actionLink("all","Experiences")?>"><i class="fa fa-circle-o"></i> Experiences</a></li>
       <li><a class="menu-item" href="<?=actionLink("all","Hobbies")?>"><i class="fa fa-circle-o"></i> Hobbies</a></li>
       <li><a class="menu-item" href="<?=actionLink("all","Position")?>"><i class="fa fa-circle-o"></i> Positions</a></li>
       <li><a class="menu-item" href="<?=actionLink("all","Studies")?>"><i class="fa fa-circle-o"></i> Studies</a></li>
    </ul>
  </li>
  <li class="treeview">
    <a href="#">
      <i class="fa fa-files-o"></i>
      <span>Media</span>
       <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
    </a>
     <ul class="treeview-menu">
       <li><a class="menu-item" href="<?=actionLink("all","Images")?>"><i class="fa fa-circle-o"></i> Images</a></li>
    </ul>
  </li>

        <!-- <li><a href=""><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Register Form</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li> -->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?=str_replace("App\Controllers\\","",CONTROLLER_PATH)?>
        <small><?=METHOD?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?=actionLink('','')?>"><?=str_replace("App\Controllers\\","",CONTROLLER_NAME)?></a></li>
        <li class="active"><?=METHOD?></li>
      </ol>
    </section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-body">
            <div id="pageContent">
