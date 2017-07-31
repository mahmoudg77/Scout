<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="Arab Scout">
        <meta name="author" content="IntoEgy Programming Departement">
        <title>Arab Scout</title>

		<!-- Mobile Specific Meta
		================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="<?=assets('css/bootstrap.min.css')?>img/favicon.png" />

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
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
		  ga('create', 'UA-33223163-1', 'auto');// UA-33223163-1 this Analytics tracking on ahmedshams mail
		  ga('send', 'pageview');
		</script>
    </head>

    <body id="body">
	    <!--
	    Start Preloader
	    ==================================== -->
		 <div id="loading-mask">
			<div class="loading-img">
				<img alt="Arab Scout" src="<?=assets('img/loader 2.gif')?>"  />
			</div>
		</div> 
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
								<h2 data-wow-duration="500ms"  data-wow-delay="500ms" class="heading animated fadeInRight">Welcome To Arab Scout</h2>
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

				</div><!-- /sl-slider -->

				<nav id="nav-arrows" class="nav-arrows">
					<span class="nav-arrow-prev">Previous</span>
					<span class="nav-arrow-next">Next</span>
				</nav>

				<nav id="nav-dots" class="nav-dots">
					<span class="nav-dot-current"></span>
					<span></span>
					<span></span>
				</nav>

			</div><!-- /slider-wrapper -->
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
                        <li class="current"><a href="#body">Home</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#showcase">Portfolio</a></li>
                        <li><a href="#our-team">Team</a></li>
                        <li><a href="#pricing">Pricing</a></li>
                        <li><a href="#blog">Blog</a></li>
                        <li><a href="#contact-us">Contact</a></li>
                    </ul>
                </nav>
				<!-- /main nav -->

            </div>
        </header>
<div class="page-content">
  <div class="row">
