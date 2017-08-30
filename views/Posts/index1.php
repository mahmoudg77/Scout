<?if(!$request->isAjax())include(PATH.'templates/navHeader.php');?>

<section id="blog-page">
	<div class="container">
		<div class="row">

			<div id="blog-posts" class="col-md-8 col-sm-8">
				<div class="post-item">
					<!-- Single Post -->
					<?
						foreach($data as $SinglePost){
					?>
					<article class="entry wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
						<div class="post-thumb">
							<a href="/en/Posts/item/<?=$SinglePost->id?>">
								<img  src="<?=$SinglePost->Images[0]->orignal?>" alt="<?=$SinglePost->tittle?>" class="img-responsive">
							</a>
						</div>
						<div class="post-excerpt">
							<h3><a href="/en/Posts/item/<?=$SinglePost->id?>"><?=$SinglePost->tittle?></a></h3>
							<p><?=$SinglePost->description?></p>
						</div>
						<div class="post-meta">
							<span class="post-date">
								<i class="fa fa-calendar"></i><?=$SinglePost->history?>
							</span>
							<span class="comments">
								<i class="fa fa-comments"></i>18 Comments
							</span>
							<span class="author">
								<i class="fa fa-user"></i><a href="#">Admin/User</a>
							</span>	
						</div>
					</article>
					<?
						}
					?>
					<!-- End Single Post -->
					<!-- End Single Post -->

				</div>
			</div>
			<!--Single post end-->


			<!--Single Event-->
			<!-- Widget Section -->
			<div id="right-sidebar" class="col-md-4 col-sm-4">

				<!-- Single Widget -->
				<aside class="widget wow fadeInUp" data-wow-duration="1000ms">
					<div class="widget-title">
						<h3>Search</h3>
					</div>
					<div class="widget-content">
						<form action="#" id="search-form" method="get" role="search">
							<input type="text" class="form-control" placeholder="Search..." autocomplete="on" name="seach">
							<button type="submit" title="Search" id="search-submit">
										<i class="fa fa-search"></i>
									</button>
						</form>
					</div>
				</aside>
				<!-- End Single Widget -->
				<!--=====================Control aside====================================-->
				<!-- Single Widget -->
				<aside class="widget wow fadeInDown">
					<div class="widget-title">
						<h3>Text Widget</h3>
					</div>
					<div class="widget-content">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus ducimus in dolorum accusantium voluptate nostrum, excepturi dolores voluptatem vel rerum at, recusandae inventore nobis ex eveniet sunt eligendi, qui provident.</p>
					</div>
				</aside>
				<!-- End Single Widget -->

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
										<p>November 15 2014</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, laboriosam molestiae aliquam rem enim earum eos suscipit! Dolore, molestiae, quidem quo quam deleniti ullam dicta. Incidunt, quaerat est deserunt voluptatum.</p>
									</div>
								</div>
								<div class="clearfix">
									<div class="tab-thumb">
										<img src="img/blog/amazing-caves-coverimage.jpg" class="img-responsive" alt="amazing-caves-coverimage | Meghna">
									</div>
									<div class="tab-excerpt">
										<h4><a href="single.html">Post Title Demo</a></h4>
										<p>November 15 2014</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, laboriosam molestiae aliquam rem enim earum eos suscipit! Dolore, molestiae, quidem quo quam deleniti ullam dicta. Incidunt, quaerat est deserunt voluptatum.</p>
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
										<p>November 15 2014</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, laboriosam molestiae aliquam rem enim earum eos suscipit! Dolore, molestiae, quidem quo quam deleniti ullam dicta. Incidunt, quaerat est deserunt voluptatum.</p>
									</div>
								</div>
								<div class="clearfix">
									<div class="tab-thumb">
										<img src="img/blog/3D-beach-art.jpg" class="img-responsive" alt="3D Beach Art | Meghna">
									</div>
									<div class="tab-excerpt">
										<h4><a href="single.html">Post Title Demo</a></h4>
										<p>November 15 2014</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, laboriosam molestiae aliquam rem enim earum eos suscipit! Dolore, molestiae, quidem quo quam deleniti ullam dicta. Incidunt, quaerat est deserunt voluptatum.</p>
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
										<p>November 15 2014</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, laboriosam molestiae aliquam rem enim earum eos suscipit! Dolore, molestiae, quidem quo quam deleniti ullam dicta. Incidunt, quaerat est deserunt voluptatum.</p>
									</div>
								</div>
								<div class="clearfix">
									<div class="tab-thumb">
										<img src="img/blog/3D-beach-art.jpg" class="img-responsive" alt="3D Beach Art | Meghna">
									</div>
									<div class="tab-excerpt">
										<h4><a href="single.html">Post Title Demo</a></h4>
										<p>November 15 2014</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, laboriosam molestiae aliquam rem enim earum eos suscipit! Dolore, molestiae, quidem quo quam deleniti ullam dicta. Incidunt, quaerat est deserunt voluptatum.</p>
									</div>
								</div>
							</article>
						</div>
						<!-- /tab content -->
					</div>
				</aside>
				<!-- End Single Widget -->
			</div>
			<!-- End Widget Section -->
<?if(!$request->isAjax())include(PATH.'templates/footer.php');?>