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
					<?
						foreach($Data as $SinglePost){
					?>
					<article class="col-md-3 col-sm-6 col-xs-12 clearfix wow fadeInUp" data-wow-duration="500ms">
						<div>
							<div class="media-wrapper">
								<img src="<?=$SinglePost->Images[0]->thumb?>" alt="amazing caves coverimage" class="img-responsive">
							</div>
							<div class="excerpt">
								<h3><?=$SinglePost->tittle?></h3>
								<p><?=$SinglePost->description?></p>
								<a class="btn btn-transparent" href="/en/Posts/item/<?=$SinglePost->id?>">Read more</a>
							</div>
						</div>
					</article>
					<?
						}
					?>
					<!-- /single blog post -->
					<!-- end single blog post -->
				</div>

				<div class="all-post text-center">
					<a class="btn btn-transparent" href="/en/Posts/index1">View All Post</a>
				</div>

			</div>
			<!-- end row -->
		</div>
		<!-- end container -->
	</section> <!-- end section -->

<?if ( !$request->isAjax() ) include( PATH . 'templates/footer.php' );?>