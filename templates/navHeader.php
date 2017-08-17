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

	<link rel="stylesheet" href="<?=assets('css/Events.css')?>">
	<link rel="stylesheet" href="<?=assets('css/flostingpoint.css')?>">
	<link rel="stylesheet" href="<?=assets('css/Card.css')?>">

	<link rel="stylesheet" type="text/css" href="<?=assets('css/register.component.css')?>">

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
	<script>
		( function ( i, s, o, g, r, a, m ) {
			i[ 'GoogleAnalyticsObject' ] = r;
			i[ r ] = i[ r ] || function () {
				( i[ r ].q = i[ r ].q || [] ).push( arguments )
			}, i[ r ].l = 1 * new Date();
			a = s.createElement( o ),
				m = s.getElementsByTagName( o )[ 0 ];
			a.async = 1;
			a.src = g;
			m.parentNode.insertBefore( a, m )
		} )( window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga' );
		ga( 'create', 'UA-33223163-1', 'auto' ); // UA-33223163-1 this Analytics tracking on ahmedshams mail
		ga( 'send', 'pageview' );
	</script>
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
                    <li><a href="#our-team">Events</a>
                    </li>
					<li><a href="#contact-us">Contact</a>
					</li>
					<li><a href="<?=actionLink("","ProfileReg")?>">Register</a>
					</li>
					<li><a data-toggle="modal" href="#myModal">Login</a>
					</li>
				</ul>
			</nav>
			<!-- /main nav -->

		</div>
	</header>
<!--
	<a id="fixedA"><i class="fa fa-plus-circle fa-4x" aria-hidden="true"></i></a>
		<a id="AE"><i class="fa fa-plus-circle fa-3x demo" aria-hidden="true"></i></a>
		<a id="AP"><i class="fa fa-plus-circle fa-3x demo" aria-hidden="true"></i></a>
-->


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
									<input style="background-color:#636466;border-radius: 20px;" type="text" class="form-control" id="email" name="email" placeholder="Enter your username">
								</div>
								<div class="form-group">
									<label for="pwd">Password:</label>
									<input style="background-color:#636466; border-radius: 20px;" type="password" class="form-control" name="password" id="password" placeholder="Enter your password">
								</div>
								<button style="border-radius: 20px;" type="submit" class="btn btn-success btn-block">Submit</button>
								<div class="checkbox">
									<label><input type="checkbox"> Remember me</label>
								</div>
								<label>forgot<a href="#"> Password</a></label>
								<label style="float:right">Create<a href="<?=actionLink("","ProfileReg")?>"> Account</a></label>
							</form>
						</div>
						<div class="modal-footer">
							<button style="border-radius: 20px;" type="submit" name="submit" class="btn btn-danger" data-dismiss="modal">Close</button>
						</div>
					</div>

				</div>
			</div>