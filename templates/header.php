<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="description" content="Arab Scout">
	<meta name="author" content="IntoEgy Programming Departement">
	<title>Arab Scout</title>

	<!-- Mobile Specific Meta
		================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="<?=assets('css/bootstrap.min.css')?>img/favicon.png"/>

	<!-- CSS
		================================================== -->
	<!-- Fontawesome Icon font -->
	<link rel="stylesheet" href="<?=assets('css/font-awesome.min.css')?>">
	<!-- bootstrap.min css -->
	<link rel="stylesheet" href="<?=assets('css/bootstrap.min.css')?>">
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?=assets('css/animate.css')?>">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="<?=assets('css/owl.carousel.css')?>">
	<!-- Grid Component css -->
	<link rel="stylesheet" href="<?=assets('css/component.css')?>">
	<!-- Slit Slider css -->
	<link rel="stylesheet" href="<?=assets('css/slit-slider.css')?>">
	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="<?=assets('css/main.css')?>">
	<!-- Media Queries -->
	<link rel="stylesheet" href="<?=assets('css/media-queries.css')?>">

	<link rel="stylesheet" type="text/css" href="<?=assets('css/register.component.css')?>">
    <link href="<?=assets('css/bootstrap-datepicker.min.css')?>" rel="stylesheet" />

	<script type="text/javascript" src="<?=assets('js/registrationform.js')?>"></script>
	<link href='https://fonts.googleapis.com/css?family=Metal Mania' rel='stylesheet'>
	<!--
		Google Font
		=========================== -->

	<!-- Oswald / Title Font -->
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
	<!-- Ubuntu / Body Font -->
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300' rel='stylesheet' type='text/css'>
	<!-- Modernizer Script for old Browsers -->
	<script src="<?=assets('js/modernizr-2.6.2.min.js')?>"></script>
	
</head>

<body id="body">
	<!--
	    Start Preloader
	    ==================================== -->
	<!--<div id="loading-mask">-->
		<!--<div class="loading-img">-->
<!--			<img alt="Arab Scout" src="<?=assets('img/loader 2.gif')?>"/>-->
		<!--</div>
	</div>-->
	<!--
        End Preloader
        ==================================== -->

	<!--
        Welcome Slider
        ==================================== -->
	<section id="home">

		<div id="slitSlider" class="sl-slider-wrapper">
			<div class="sl-slider">

				<!-- single slide item -->
				<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
					<div class="sl-slide-inner">
						<div class="bg-img bg-img-1"></div>
						<div class="carousel-caption">
							<div>
								<img class="wow fadeInUp" src="<?=assets('img/ArabScout.png')?>" alt="ArabScout">
								<h2 data-wow-duration="500ms" data-wow-delay="500ms" class="heading animated fadeInRight">Welcome To Arab Scout</h2>
							</div>
						</div>
					</div>
				</div>
				<!-- /single slide item -->

				<!-- single slide item -->
				<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
					<div class="sl-slide-inner">
						<div class="bg-img bg-img-2"></div>
						<div class="carousel-caption">
							<div>
								<h2 class="heading animated fadeInDown">Arab Scout Registeration SOON</h2>
								<h3 class="animated fadeInUp">With Most Arab Scouting members</h3>
								<a class="btn btn-green animated fadeInUp" href="#">Get Started</a>
							</div>
						</div>
					</div>
				</div>
				<!-- /single slide item -->

				<!-- single slide item -->
				<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
					<div class="sl-slide-inner">
						<div class="bg-img bg-img-3"></div>
						<div class="carousel-caption">
							<div>
								<h2 class="heading animated fadeInRight">Linked With Eventat SOON</h2>
								<h3 class="animated fadeInLeft">The Biggest Event Web</h3>
								<a class="btn btn-green animated fadeInUp" href="#">Learn More</a>
							</div>
						</div>
					</div>
				</div>
				<!-- /single slide item -->

			</div>
			<!-- /sl-slider -->

			<nav id="nav-arrows" class="nav-arrows">
				<span class="nav-arrow-prev">Previous</span>
				<span class="nav-arrow-next">Next</span>
			</nav>

			<nav id="nav-dots" class="nav-dots">
				<span class="nav-dot-current"></span>
				<span></span>
				<span></span>
			</nav>

		</div>
		<!-- /slider-wrapper -->
	</section>
	<!--/#home section-->

	<!--
        Fixed Navigation
        ==================================== -->
	<header id="navigation" class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<!-- responsive nav button -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                              <span class="sr-only">Toggle navigation</span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                          </button>







				<!-- /responsive nav button -->

				<!-- logo -->
				<a class="navbar-brand" href="#body">
        						<h1 id="logo">
        							<img src="<?=assets('img/ArabScoutHeaderLogo.png')?>" alt="ArabScout" />
        						</h1>
        					</a>







				<!-- /logo -->
			</div>

			<!-- main nav -->
			<nav class="collapse navbar-collapse navbar-right" role="Navigation">
				<ul id="nav" class="nav navbar-nav">
					<li class="current"><a href="#body">Home</a>
					</li>
					<li><a href="#about">About Us</a>
					</li>
					<li><a href="#services">Services</a>
					</li>
					<li><a href="#showcase">Portfolio</a>
					</li>
					<li><a href="#our-team">Team</a>
					</li>
                    <li>
                        <a href="#our-team">Events</a>
                    </li>
					<li><a href="#contact-us">Contact</a>
					</li>
					<li><a data-toggle="modal" href="#myModal">Login</a>
					</li>
				</ul>
			</nav>
			<!-- /main nav -->

		</div>
	</header>
	<div class="page-content">
		<div class="row">
			<div id="myModal" class="modal fade" role="dialog">
				<div class="modal-dialog ">

					<!-- Modal content-->
					<div class="w3-modal-content w3-animate-opacity" style="border-radius: 20px; background-color:#333439;">
						<div class="modal-header">
							<!--							<button type="button" class="close" data-dismiss="modal">&times;</button>-->
							<img src="/templates/assets/img/ArabScoutHeaderLogo.png" style="display: block; margin-left: auto;
    							margin-right: auto; width:45%; " alt="ArabScout" data-pin-nopin="true">
						</div>
						<div class="modal-body">
							<form action="<?=actionLink('login','Login')?>" method="post">
								<?=Framework\Request::CSRF()?>
								<div class="form-group">
									<label for="pwd">E-mail:</label>
									<input required style="background-color:#636466;border-radius: 20px;" type="text" class="form-control" id="email" name="email" placeholder="Enter your username">
								</div>
								<div class="form-group">
									<label for="pwd">Password:</label>
									<input required style="background-color:#636466; border-radius: 20px;" type="password" class="form-control" name="password" id="password" placeholder="Enter your password">
								</div>
								<button style="border-radius: 20px;" type="submit" class="btn btn-success btn-block">Login</button>
								<!--<div class="checkbox">
									<label><input type="checkbox"> Remember me</label>
								</div>-->
								<!--<label>forgot<a href="#"> Password</a></label>-->
							</form>
                            <center>
                                <label>------------------------------ <strong>Or</strong> ----------------------------------</label>
                                </br>
                                <label><a class="btn btn-default" href="<?=actionLink("","ProfileReg")?>">Create Account</a></label>
                            </center>
						</div>
						<div class="modal-footer">
							<button style="border-radius: 20px;" type="submit" name="submit" class="btn btn-danger" data-dismiss="modal">Close</button>
						</div>
					</div>

				</div>
			</div>
