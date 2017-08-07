<?include(PATH.'templates/navHeader.php');?>
<div class=" text-center">
	<h1 class="Ename">Event Name</h1>
</div>
<div class="container">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner">

			<div class="item active">
				<img src="<?=assets('img/portfolio/wide-port1.jpg')?>" alt="Los Angeles" style="width:100%;">
				<div class="carousel-caption">
					<h3>Los Angeles</h3>
					<span>LA is always so much fun!</span>
				
				</div>
			</div>

			<div class="item">
				<img src="<?=assets('img/portfolio/wide-port2.jpg')?>" alt="Chicago" style="width:100%;">
				<div class="carousel-caption">
					<h3>Chicago</h3>
					<span>Thank you, Chicago!</span>
				</div>
			</div>

			<div class="item">
				<img src="<?=assets('img/portfolio/wide-port3.jpg')?>" alt="New York" style="width:100%;">
				<div class="carousel-caption">
					<h3>New York</h3>
					<span>We love the Big Apple!</span>
				</div>
			</div>

		</div>

		<!-- Left and right controls -->
		<a class="left carousel-control" style="padding-top: 180px;" href="#myCarousel" data-slide="prev">
      <span class="fa fa-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
	



		<a class="right carousel-control" style="padding-top: 180px;" href="#myCarousel" data-slide="next">
      <span class="fa fa-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
	



	</div>
</div>
<div class="entry wow fadeInDown " data-wow-duration="1000ms" data-wow-delay="300ms">

	<div class="post-excerpt">
		<h2>Description</h2>
		<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae modi quisquam laboriosam, expedita ea natus tempora unde sed sequi velit, quia veniam libero quos sunt praesentium nisi odit architecto fugiat? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae modi quisquam laboriosam, expedita ea natus tempora unde sed sequi velit, quia veniam libero quos sunt praesentium nisi odit architecto fugiat?</span>
	</div>
</div>
<br><br>
<div id="blog-posts" class="col-md-8 col-sm-8">
	<div class="post-item">

		<article class="entry wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">

			<div class="post-thumb">
				<a href="single-post.html">
			<img src="img/blog/3D-beach-art.jpg" alt="3D Beach Art | Meghna" class="img-responsive">
		</a>
			


			</div>
			<div class="post-excerpt">
				<h3><a href="#">Siple Post</a></h3>
				<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae modi quisquam laboriosam, expedita ea natus tempora unde sed sequi velit, quia veniam libero quos sunt praesentium nisi odit architecto fugiat? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae modi quisquam laboriosam, expedita ea natus tempora unde sed sequi velit, quia veniam libero quos sunt praesentium nisi odit architecto fugiat?</span>
			</div>
			<div class="post-meta">
				<span class="post-date">
			<i class="fa fa-calendar"></i>30 jun 2014 <!--Variables-->
		</span>
			


				<span class="comments">
			<i class="fa fa-comments"></i>18 Comments
		</span>
			


				<span class="post-view">
			<i class="fa fa-eye"></i>265 Views
		</span>
			


				<span class="author">
			<i class="fa fa-user"></i><a href="#">Admin/User</a><!--If the admin who post this post-->
		</span>
			


			</div>
		</article>
	</div>
</div>
<div id="right-sidebar" class="col-md-4 col-sm-4">
	<!-- Single Widget -->
	<aside class="widget wow fadeInDown">
		<div class="widget-title">
			<h3>Text FeedBack</h3>
		</div>
		<div class="widget-content">
			<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus ducimus in dolorum accusantium voluptate nostrum, excepturi dolores voluptatem vel rerum at, recusandae inventore nobis ex eveniet sunt eligendi, qui provident.</span>
		</div>
	</aside>


</div>
<?include(PATH.'templates/footer.php');?>