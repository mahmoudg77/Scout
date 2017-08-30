<?if(!$request->isAjax())include(PATH.'templates/navHeader.php');?>
		
		<section id="showcase">
			<div class="container">
				<div class="row wow fadeInDown" data-wow-duration="500ms">
					<div class="col-lg-12">
					
						<!-- section title -->
						<div class="title text-center">
							<h2>Our <span class="color">Works</span></h2>
							<div class="border"></div>
						</div>
						<!-- /section title -->
					
						<!-- portfolio item filtering -->
						<div class="portfolio-filter clearfix">
							<ul class="text-center">
							    <li><a href="javascript:void(0)" class="filter" data-filter="all">All</a></li>
								<li><a href="javascript:void(0)" class="filter" data-filter=".app">Mobile App</a></li>
								<li><a href="javascript:void(0)" class="filter" data-filter=".web">Web Design</a></li>
								<li><a href="javascript:void(0)" class="filter" data-filter=".photoshop">Photoshop</a></li>
								<li><a href="javascript:void(0)" class="filter" data-filter=".illustrator">Illustrator</a></li>
							</ul>
						</div>
						<!-- /portfolio item filtering -->
						
					</div> <!-- /end col-lg-12 -->
				</div> <!-- end row -->
			</div>	<!-- end container -->
	
			<!-- portfolio items -->
			<div class="portfolio-item-wrapper wow fadeInUp" data-wow-duration="500ms">
                <ul id="og-grid" class="og-grid">
					<?
						foreach($Data as $SingleEvent){
					?>
						
					<li class="mix app">
						<a href="/en/Events/item/<?=$SingleEvent->id?>" data-largesrc="<?=$SingleEvent->Images[0]->orignal?>" 
						data-title="<?=$SingleEvent->tittle?>" data-description="<?=$SingleEvent->Description?>">
							<img src="<?=$SingleEvent->Images[0]->orignal?>" alt="">
							<div class="hover-mask">
								<h3><?=$SingleEvent->tag?></h3>
								<span>
									<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>
						</a>
					</li>
					<?
						}
					?>
					
					<!--
					
					<li class="mix web">
						<a href="javascript:void(0)" data-largesrc="<?=assets('img/portfolio/wide-port1.jpg')?>" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
							<img src="<?=assets('img/portfolio/wide-port1.jpg')?>" alt="Meghna">
							<div class="hover-mask">
								<h3>Veggies sunt bona vobis</h3>
								<span>
									<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>
						</a>
					</li>
					
					
					
					<li class="mix photoshop">
						<a href="javascript:void(0)" data-largesrc="<?=assets('img/portfolio/wide-port1.jpg')?>" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
							<img src="<?=assets('img/portfolio/wide-port1.jpg')?>" alt="Meghna">
							<div class="hover-mask">
								<h3>Dandelion horseradish</h3>
								<span>
									<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>
						</a>
					</li>
					
					
					
					<li class="mix illustrator">
						<a href="javascript:void(0)" data-largesrc="<?=assets('img/portfolio/wide-port1.jpg')?>" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
							<img src="<?=assets('img/portfolio/wide-port1.jpg')?>" alt="Meghna">
							<div class="hover-mask">
								<h3>Dandelion horseradish</h3>
								<span>
									<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>
						</a>
					</li>
					
					
					
					<li class="mix app">
						<a href="javascript:void(0)" data-largesrc="<?=assets('img/portfolio/wide-port1.jpg')?>" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
							<img src="<?=assets('img/portfolio/wide-port1.jpg')?>" alt="Meghna">
							<div class="hover-mask">
								<h3>Azuki bean</h3>
								<span>
									<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>
						</a>
					</li>
					
					
					
					<li class="mix app">
						<a href="javascript:void(0)" data-largesrc="<?=assets('img/portfolio/wide-port1.jpg')?>" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
							<img src="<?=assets('img/portfolio/wide-port1.jpg')?>" alt="Meghna">
							<div class="hover-mask">
								<h3>Veggies sunt bona vobis</h3>
								<span>
									<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>	
						</a>
					</li>
					
					
					
					<li class="mix web">
						<a href="javascript:void(0)" data-largesrc="<?=assets('img/portfolio/wide-port1.jpg')?>" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
							<img src="<?=assets('img/portfolio/wide-port1.jpg')?>" alt="Meghna">
							<div class="hover-mask">
								<h3>Dandelion horseradish</h3>
								<span>
									<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>	
						</a>

					</li>
					
					
					
					<li class="mix photoshop">
						<a href="javascript:void(0)" data-largesrc="<?=assets('img/portfolio/wide-port1.jpg')?>" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
							<img src="<?=assets('img/portfolio/wide-port1.jpg')?>" alt="Meghna">
							<div class="hover-mask">
								<h3>Azuki bean</h3>
								<span>
									<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>
						</a>
					</li>
					
					
					
					<li class="mix photoshop">
						<a href="javascript:void(0)" data-largesrc="<?=assets('img/portfolio/wide-port1.jpg')?>" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
							<img src="<?=assets('img/portfolio/wide-port1.jpg')?>" alt="Meghna">
							<div class="hover-mask">
								<h3>Veggies sunt bona vobis</h3>
								<span>
									<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>
						</a>
					</li>
					
					
					
					<li class="mix illustrator">
						<a href="javascript:void(0)" data-largesrc="<?=assets('img/portfolio/wide-port1.jpg')?>" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
							<img src="<?=assets('img/portfolio/wide-port1.jpg')?>" alt="Meghna">
							<div class="hover-mask">
								<h3>Veggies sunt bona vobis</h3>
								<span>
									<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>	
						</a>
					</li>
					
					
					
					<li class="mix web">
						<a href="javascript:void(0)" data-largesrc="<?=assets('img/portfolio/wide-port1.jpg')?>" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
							<img src="<?=assets('img/portfolio/wide-port1.jpg')?>" alt="Meghna">
							<div class="hover-mask">
								<h3>Dandelion horseradish</h3>
								<span>
									<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>
						</a>
					</li>
					
					
					
					<li class="mix app">
						<a href="javascript:void(0)" data-largesrc="<?=assets('img/portfolio/wide-port1.jpg')?>" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
							<img src="<?=assets('img/portfolio/wide-port1.jpg')?>" alt="Meghna">
							<div class="hover-mask">
								<h3>Azuki bean</h3>
								<span>
									<i class="fa fa-plus fa-2x"></i>
								</span>
							</div>
						</a>
					</li>
					-->
					
				</ul> <!-- end og grid -->
			</div>  <!-- portfolio items wrapper -->
			
		</section>   <!-- End section -->
<?if(!$request->isAjax())include(PATH.'templates/footer.php');?>