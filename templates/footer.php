

</div>
</div>
		<footer id="footer" class="bg-one">
			<div class="container">
			    <div class="row wow fadeInUp" data-wow-duration="500ms">
					<div class="col-lg-12">

						<!-- Footer Social Links -->
						<div class="social-icon">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-youtube"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
						<!--/. End Footer Social Links -->

						<!-- copyright -->
						<div class="copyright text-center">
							<a href="index.html">
								<img src="<?=assets('img/logo-meghna.png')?>" alt="Meghna" />
							</a>
							<br />

							<p>Design And Developed by <a href="http://www.themefisher.com"> Themefisher Team</a>. Copyright &copy; 2015. All Rights Reserved.</p>
						</div>
						<!-- /copyright -->

					</div> <!-- end col lg 12 -->
				</div> <!-- end row -->
			</div> <!-- end container -->
		</footer> <!-- end footer -->

		<!-- Back to Top
		============================== -->
		<a href="javascript:;" id="scrollUp">
			<i class="fa fa-angle-up fa-2x"></i>
		</a>

		<!-- end Footer Area
		========================================== -->

		<!--
		Essential Scripts
		=====================================-->

		<!-- Main jQuery -->
		<script src="<?=assets('js/jquery-1.11.0.min.js')?>"></script>
		<!-- Bootstrap 3.1 -->
		<script src="<?=assets('js/bootstrap.min.js')?>"></script>
		<!-- Slitslider -->
		<script src="<?=assets('js/jquery.slitslider.js')?>"></script>
		<script src="<?=assets('js/jquery.ba-cond.min.js')?>"></script>
		<!-- Parallax -->
		<script src="<?=assets('js/jquery.parallax-1.1.3.js')?>"></script>
		<!-- Owl Carousel -->
		<script src="<?=assets('js/owl.carousel.min.js')?>"></script>
		<!-- Portfolio Filtering -->
		<script src="<?=assets('js/jquery.mixitup.min.js')?>"></script>
		<!-- Custom Scrollbar -->
		<script src="<?=assets('js/jquery.nicescroll.min.js')?>"></script>
		<!-- Jappear js -->
		<script src="<?=assets('js/jquery.appear.js')?>"></script>
		<!-- Pie Chart -->
		<!--<script src="<?=assets('js/easyPieChart.js')?>"></script>-->
		<!-- jQuery Easing -->
		<!--<script src="<?=assets('js/jquery.easing-1.3.pack.js')?>"></script>-->
		<!-- tweetie.min -->
		<!--<script src="<?=assets('js/tweetie.min.js')?>"></script>-->
		<!-- Google Map API -->
		<!--<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>-->
		<!-- Highlight menu item -->
		<script src="<?=assets('js/jquery.nav.js')?>"></script>
		<!-- Sticky Nav -->
		<script src="<?=assets('js/jquery.sticky.js')?>"></script>
		<!-- Number Counter Script -->
		<script src="<?=assets('js/jquery.countTo.js')?>"></script>
		<!-- wow.min Script -->
		<script src="<?=assets('js/wow.min.js')?>"></script>
		<!-- For video responsive -->
		<script src="<?=assets('js/jquery.fitvids.js')?>"></script>
		<!-- Grid js -->
		<!--<script src="<?=assets('js/grid.js')?>"></script>-->
		<!-- Custom js -->
		<script src="<?=assets('js/custom.js')?>"></script>
		<!-- Ajax Form-->
		<script src="http://malsup.github.com/jquery.form.js"></script>
<script>
$(function(){
	$(".ajax-form").ajaxForm({
			dataType:"json",
			success:function(res){
				if(res.type=="success"){
				alert("Save Success");
				window.location="/";
			}else{
				alert(res.message);
			}

			},
			error:function(res){
				alert(res.responseText);
			}
	});
	$("#btnLogin").click(function(event){
		event.preventDefault();
 		$("#myModal").modal();
	});
})
</script>
    </body>
</html>
