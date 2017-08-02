<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>AdminLTE 2 | Starter</title>
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link rel="stylesheet" href="<?=assets('css/bootstrap.min.css')?>">
<!-- Font Awesome -->
<link rel="stylesheet" href="<?=assets('css/skin/font-awesome.min.css')?>">
<!-- Ionicons -->
<link rel="stylesheet" href="<?=assets('css/skin/ionicons.min.css')?>">
<!-- Theme style -->
<link rel="stylesheet" href="<?=assets('css/skin/AdminLTE.min.css')?>">
<link rel="stylesheet" href="<?=assets('css/skin/skin-green.css')?>">
<link rel="stylesheet" href="<?=assets('css/Site.css')?>">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<!-----------------------------registration form style and javascript-------------------------->
<link href="https://fonts.googleapis.com/css?family=Metal Mania" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="register.component.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
<script type="text/javascript" src="<?=assets('js/registrationformAdmin.js')?>"></script>
<!-----------------------------team registration form style and javascript---------------------------------------->

<script type="text/javascript">
	var counter =13;
	function asd(){
		if(counter<=24){
			document.getElementById('table').innerHTML+=
			`<tr>
			  <th scope="row" id='`+counter+`'>`+counter+`</th>
			  <td><input type="text" class="form-control tdinput" id="r`+counter+`td1"  name="r1td1"></td>
			  <td><input type="text" class="form-control tdinput" id="r`+counter+`td2"  name="r1td2"></td>
			  <td><input type="text" class="form-control tdinput" id="r`+counter+`td3"  name="r1td3"></td>
			  <td><input type="text" class="form-control tdinput" id="r`+counter+`td4"  name="r3td4"></td>
			</tr>`
		}else{
			alert("FUCK OFF");
		}
		counter++;
	}
	var elementToD;
	function Removemember(){
		if(counter>13){
			document.getElementById("table").deleteRow(counter-2);
			counter--;
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
<style>
#part1 {
	border: 1px solid #d9d9d9;
	border-radius: 10px;
	background: #e6e6e6;
	padding: 5px 0;
	width: 45%;
	float: left;
	margin: 0 18px;
	padding-bottom: 30px
}
#part2 {
	border: 1px solid #d9d9d9;
	border-radius: 10px;
	background: #e6e6e6;
	padding: 5px 0;
	width: 45%;
	float: left;
}
.tdinput {
	width: 80%;
}
#approveFom {
	background: #f2f2f2;
	border: 1px solid #e6e6e6;
	width: 45%;
	padding: 15px 12px;
	border-radius: 20px;
	text-align: center;
}
</style>
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-green sidebar-mini" onLoad="Ajxify()">
<div class="wrapper">

<!-- Main Header -->
<header class="main-header"> 
  
  <!-- Logo --> 
  <a href="index2.html" class="logo"> 
  <!-- mini logo for sidebar mini 50x50 pixels --> 
	  <span class="logo-mini" style="font-family: Magneto">A<b>Sc</b></span> 
  <!-- logo for regular state and mobile devices --> 
  <span class="logo-lg" style="font-family: Magneto"><b>Arab </b>Scout</span> </a> 
  
  <!-- Header Navbar -->
  <nav class="navbar navbar-static-top" role="navigation"> 
    <!-- Sidebar toggle button--> 
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button"> <span class="sr-only">Toggle navigation</span> </a> 
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- Messages: style can be found in dropdown.less-->
        <li class="dropdown messages-menu"> 
          <!-- Menu toggle button --> 
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-envelope-o"></i> <span class="label label-success">4</span> </a>
          <ul class="dropdown-menu">
            <li class="header">You have 4 messages</li>
            <li> 
              <!-- inner menu: contains the messages -->
              <ul class="menu">
                <li><!-- start message --> 
                  <a href="#">
                  <div class="pull-left"> 
                    <!-- User Image --> 
                    <img src="http://i0.kym-cdn.com/entries/icons/original/000/003/193/teddy-bear-poker-face.jpg" class="img-circle" alt="User Image"> </div>
                  <!-- Message title and timestamp -->
                  <h4> Support Team <small><i class="fa fa-clock-o"></i> 5 mins</small> </h4>
                  <!-- The message -->
                  <p>Why not buy a new awesome theme?</p>
                  </a> </li>
                <!-- end message -->
              </ul>
              <!-- /.menu --> 
            </li>
            <li class="footer"><a href="#">See All Messages</a></li>
          </ul>
        </li>
        <!-- /.messages-menu --> 
        
        <!-- Notifications Menu -->
        <li class="dropdown notifications-menu"> 
          <!-- Menu toggle button --> 
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-bell-o"></i> <span class="label label-warning">10</span> </a>
          <ul class="dropdown-menu">
            <li class="header">You have 10 notifications</li>
            <li> 
              <!-- Inner Menu: contains the notifications -->
              <ul class="menu">
                <li><!-- start notification --> 
                  <a href="#"> <i class="fa fa-users text-aqua"></i> 5 new members joined today </a> </li>
                <!-- end notification -->
              </ul>
            </li>
            <li class="footer"><a href="#">View all</a></li>
          </ul>
        </li>
        <!-- Tasks Menu -->
        <li class="dropdown tasks-menu"> 
          <!-- Menu Toggle Button --> 
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-flag-o"></i> <span class="label label-danger">9</span> </a>
          <ul class="dropdown-menu">
            <li class="header">You have 9 tasks</li>
            <li> 
              <!-- Inner menu: contains the tasks -->
              <ul class="menu">
                <li><!-- Task item --> 
                  <a href="#"> 
                  <!-- Task title and progress text -->
                  <h3> Design some buttons <small class="pull-right">20%</small> </h3>
                  <!-- The progress bar -->
                  <div class="progress xs"> 
                    <!-- Change the css width attribute to simulate progress -->
                    <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"> <span class="sr-only">20% Complete</span> </div>
                  </div>
                  </a> </li>
                <!-- end task item -->
              </ul>
            </li>
            <li class="footer"> <a href="#">View all tasks</a> </li>
          </ul>
        </li>
        <!-- User Account Menu -->
        <li class="dropdown user user-menu"> 
          <!-- Menu Toggle Button --> 
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
          <!-- The user image in the navbar--> 
          <img src="http://i0.kym-cdn.com/entries/icons/original/000/003/193/teddy-bear-poker-face.jpg" class="user-image" alt="User Image"> 
          <!-- hidden-xs hides the username on small devices so only the image appears. --> 
          <span class="hidden-xs">Alexander Pierce</span> </a>
          <ul class="dropdown-menu">
            <!-- The user image in the menu -->
            <li class="user-header"> <img src="http://i0.kym-cdn.com/entries/icons/original/000/003/193/teddy-bear-poker-face.jpg" class="img-circle" alt="User Image">
              <p> Alexander Pierce - Web Developer <small>Member since Nov. 2012</small> </p>
            </li>
            <!-- Menu Body -->
            <li class="user-body">
              <div class="row">
                <div class="col-xs-4 text-center"> <a href="#">Followers</a> </div>
                <div class="col-xs-4 text-center"> <a href="#">Sales</a> </div>
                <div class="col-xs-4 text-center"> <a href="#">Friends</a> </div>
              </div>
              <!-- /.row --> 
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left"> <a href="#" class="btn btn-default btn-flat">Profile</a> </div>
              <div class="pull-right"> <a href="#" class="btn btn-default btn-flat">Sign out</a> </div>
            </li>
          </ul>
        </li>
        <!-- Control Sidebar Toggle Button -->
        <li> <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a> </li>
      </ul>
    </div>
  </nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar"> 
  
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar"> 
    
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image"> <img src="http://i0.kym-cdn.com/entries/icons/original/000/003/193/teddy-bear-poker-face.jpg" class="img-circle" alt="User Image"> </div>
      <div class="pull-left info">
        <p>Alexander Pierce</p>
        <!-- Status --> 
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a> </div>
        <br><br>
    </div>
    <!-- search form (Optional) -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
        <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i> </button>
        </span> </div>
    </form>
    <!-- /.search form --> 
    <!--#222D32-->
    <ul class="treeview-menu">
    </ul>
    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
      <li><a class="menu-item" href="<?=actionLink("","TeamsReg")?>"><i class="fa fa-link"></i> <span>Forms</span></a></li>
      <li><a class="menu-item" href="<?=actionLink("","ApprovalRequests")?>"><i class="fa fa-link"></i> <span>Approvels</span></a></li>
    </ul>
    <!-- /.sidebar-menu --> 
  </section>
  <!-- /.sidebar --> 
</aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1><?=str_replace("App\Controllers\\","",CONTROLLER_PATH)?>
                <small><?=METHOD?></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="<?=actionLink('','')?>"><?=str_replace("App\Controllers\\","",CONTROLLER_NAME)?></a></li>
                <li class="active"><?=METHOD?></li>
            </ol>
        </section>
     <hr/>
        <section class="content">
            <div id="pageContent">
            </div>
