<?if(!$request->isAjax())include(PATH.'templates/navHeader.php');?>

	<section id="blog" class="bg-one">
		<div class="container">
			<div class="row">

				<!-- section title -->
				<div class="title text-center wow fadeInDown">
					<h2> Latest <span class="color">Posts</span></h2>
					<div class="border"></div>
				</div>
				<!-- /section title -->

				<div class="clearfix">

					<!-- single blog post -->
					<article class="col-md-3 col-sm-6 col-xs-12 clearfix wow fadeInUp" data-wow-duration="500ms">
						<div >
							<div class="media-wrapper">
								<img src="<?=assets('img/portfolio/wide-port1.jpg')?>" alt="amazing caves coverimage" class="img-responsive">
							</div>

							<div class="excerpt">
								<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non skateboard dolor brunch.</p>
								<a class="btn btn-transparent" href="single-post.html">Read more</a>
							</div>
						</div>
					</article>
					<!-- /single blog post -->
					<!-- end single blog post -->
				</div>

				<div class="all-post text-center">
					<a class="btn btn-transparent" href="blog.html">View All Post</a>
				</div>

			</div>
			<!-- end row -->
		</div>
		<!-- end container -->
	</section> <!-- end section -->

<?if ( !$request->isAjax() ) include( PATH . 'templates/footer.php' );?>