<?include(PATH.'templates/navHeader.php');?>
<div class=" text-center">
	<h1 class="Ename">Event Name</h1>
	<a href="#" title="Attend"><i class="fa fa-star-o fa-4x" aria-hidden="true"></i></a>
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
<div class="body">
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
		<!-- Single post -->
		<section id="blog-page">
			<div class="container">
				<div class="row">
					<!--Single Event-->
					<!-- Widget Section -->
					<div id="right-sidebar" class="col-md-4 col-sm-4">
						<!--=====================Control aside====================================-->
						<!-- Single Widget -->
						<aside class="widget wow fadeInUp">
							<div class="widget-title">
								<h3>Tab	 Widget</h3>
							</div>

							<div class="widget-content">
								<!-- tab nav -->
								<ul class="tab-post-nav clearfix">
									<li class="active"><a href="#popular" data-toggle="tab">Popular Post</a>
									</li>
									<li><a href="#recent" data-toggle="tab">Recent Post</a>
									</li>
									<li><a href="#most-viewed" data-toggle="tab">Most Viewed</a>
									</li>
								</ul>
								<!-- /tab nav -->

								<!-- tab content -->
								<div class="tab-content">
									<article class="tab-pane active tab-post" id="popular">
										<div class="clearfix">
											<div class="tab-thumb">
												<img src="img/blog/3D-beach-art.jpg" class="img-responsive" alt="3D Beach Art | Meghna">
											</div>
											<div class="tab-excerpt">
												<h4><a href="single.html">Post Title Demo</a></h4>
												<span>November 15 2014</span>
												<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, laboriosam molestiae aliquam rem enim earum eos suscipit! Dolore, molestiae, quidem quo quam deleniti ullam dicta. Incidunt, quaerat est deserunt voluptatum.</span>
											</div>
										</div>
										<div class="clearfix">
											<div class="tab-thumb">
												<img src="img/blog/amazing-caves-coverimage.jpg" class="img-responsive" alt="amazing-caves-coverimage | Meghna">
											</div>
											<div class="tab-excerpt">
												<h4><a href="single.html">Post Title Demo</a></h4>
												<span>November 15 2014</span>
												<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, laboriosam molestiae aliquam rem enim earum eos suscipit! Dolore, molestiae, quidem quo quam deleniti ullam dicta. Incidunt, quaerat est deserunt voluptatum.</span>
											</div>
										</div>
									</article>

									<article class="tab-pane tab-post" id="recent">
										<div class="clearfix">
											<div class="tab-thumb">
												<img src="img/blog/amazing-caves-coverimage.jpg" class="img-responsive" alt="amazing-caves-coverimage | Meghna">
											</div>
											<div class="tab-excerpt">
												<h4><a href="single.html">Post Title Demo</a></h4>
												<span>November 15 2014</span>
												<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, laboriosam molestiae aliquam rem enim earum eos suscipit! Dolore, molestiae, quidem quo quam deleniti ullam dicta. Incidunt, quaerat est deserunt voluptatum.</span>
											</div>
										</div>
										<div class="clearfix">
											<div class="tab-thumb">
												<img src="img/blog/3D-beach-art.jpg" class="img-responsive" alt="3D Beach Art | Meghna">
											</div>
											<div class="tab-excerpt">
												<h4><a href="single.html">Post Title Demo</a></h4>
												<span>November 15 2014</span>
												<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, laboriosam molestiae aliquam rem enim earum eos suscipit! Dolore, molestiae, quidem quo quam deleniti ullam dicta. Incidunt, quaerat est deserunt voluptatum.</span>
											</div>
										</div>
									</article>

									<article class="tab-pane tab-post" id="most-viewed">
										<div class="clearfix">
											<div class="tab-thumb">
												<img src="img/blog/bicycle.jpg" class="img-responsive" alt="bicycle | Meghna">
											</div>
											<div class="tab-excerpt">
												<h4><a href="single.html">Post Title Demo</a></h4>
												<span>November 15 2014</span>
												<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, laboriosam molestiae aliquam rem enim earum eos suscipit! Dolore, molestiae, quidem quo quam deleniti ullam dicta. Incidunt, quaerat est deserunt voluptatum.</span>
											</div>
										</div>
										<div class="clearfix">
											<div class="tab-thumb">
												<img src="img/blog/3D-beach-art.jpg" class="img-responsive" alt="3D Beach Art | Meghna">
											</div>
											<div class="tab-excerpt">
												<h4><a href="single.html">Post Title Demo</a></h4>
												<span>November 15 2014</span>
												<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, laboriosam molestiae aliquam rem enim earum eos suscipit! Dolore, molestiae, quidem quo quam deleniti ullam dicta. Incidunt, quaerat est deserunt voluptatum.</span>
											</div>
										</div>
									</article>

								</div>
								<!-- /tab content -->
							</div>
						</aside>
						<!-- End Single Widget -->
						<!-- Single Widget -->
						<aside class="widget wow fadeInDown">
							<div class="widget-title">
								<h3>Newsletter</h3>
								<span>Signup to receive email updates and to hear what's going on with my blog!</span>
							</div>
							<div class="widget-content">
								<form action="">
									<input type="email" name="email" class="form-control" placeholder="Enter your email" required="">
									<input type="submit" value="Subscribe" class="btn btn-transparent">
								</form>
							</div>
						</aside>
						<!-- End Single Widget -->
					</div>
					<!-- End Widget Section -->

				</div>
				<!-- End row -->
			</div>
			<!-- End container -->
		</section>
		<!-- End Section -->
	</div>
</div>
<?include(PATH.'templates/footer.php');?>