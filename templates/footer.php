
		<!-- #Registeration Modal   -->
								
				<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-body">
					
						
					<div class="block divcenter" style="background-color: rgba(255, 255, 255, 0.8); max-width: 700px;">
						
						<div class="row nomargin clearfix">
							<div class="col-sm-6" data-height-lg="456" data-height-md="456" data-height-sm="456"
							     data-height-xs="0" data-height-xxs="0"
							     style="background-image: url('<?=assets('front_assets/images/slider/swiper/10.jpg')?>'); background-size: cover;"></div>
							<div class="col-sm-6 col-padding" data-height-lg="456" data-height-md="456" data-height-sm="456" data-height-xs="456" data-height-xxs="456">
								<div>
								<h4 class="uppercase ls1">Sign Up for Offers</h4>
								<form action="<?=actionLink('login','Login')?>" method="post" class="clearfix" style="max-width: 300px;">
									<?=Framework\Request::CSRF()?>
									<div class="col_full">
										<label for="" class="capitalize t600">Username or Email:</label>
										<input type="email" id="template-op-form-email" name="email" placeholder="Enter your email" value="" class="sm-form-control" />
									</div>
									<div class="col_full">
										<label for="" class="capitalize t600">Choose Password:</label>
										<input type="password" id="template-op-form-password" name="password" id="password" placeholder="Enter your password" value="" class="sm-form-control" />
									</div>
									<div class="col_full nobottommargin">
										<button type="submit" class="button button-rounded button-small button-dark nomargin" value="submit">Login</button>
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
									<hr />
									
									Or <a  class="button button-rounded pull-right button button-dark nomargin" href="<?=actionLink("","ProfileReg")?>" value="submit"> Register now </a>
										
								</form>
								
								</div>
								
								
							</div>
						</div>
					</div>
					
						
					
				</div>
			</div>
		</div>
				
			<!-- #Registeration Modal End -->
	<!-- Closure of the Header wrapper -->
				</div>
	<!-- Closure of the Header wrapper -->
		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">
			
			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						Copyrights &copy; 2017 All Rights Reserved by Cairo sea scouts Org.<br>
						<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
					</div>

					<div class="col_half col_last tright">
						<div class="fright clearfix">
							<a href="https://www.facebook.com/cairoseascouts/" class="social-icon si-small si-borderless si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-gplus">
								<i class="icon-gplus"></i>
								<i class="icon-gplus"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-pinterest">
								<i class="icon-pinterest"></i>
								<i class="icon-pinterest"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-vimeo">
								<i class="icon-vimeo"></i>
								<i class="icon-vimeo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-github">
								<i class="icon-github"></i>
								<i class="icon-github"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-yahoo">
								<i class="icon-yahoo"></i>
								<i class="icon-yahoo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-linkedin">
								<i class="icon-linkedin"></i>
								<i class="icon-linkedin"></i>
							</a>
						</div>

						<div class="clear"></div>

						<i class="icon-envelope2"></i> info@cairoseascouts.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> +20235729582 <span class="middot">&middot;</span>
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="<?=assets('front_assets/js/jquery.js')?>"></script>
	<script type="text/javascript" src="<?=assets('front_assets/js/plugins.js')?>"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="<?=assets('front_assets/js/functions.js')?>"></script>
    
    <!-- Ajax Form-->
	<script src="http://malsup.github.com/jquery.form.js"></script>
	<!-- Custom js -->
<!--	<script src="<?=assets('js/custom.js')?>"></script>
-->	<!-- Ajax Form-->
		<script src="http://malsup.github.com/jquery.form.js"></script>
		<script>
			$( function () {
				$( ".ajax-form" ).ajaxForm( {
					dataType: "json",
					success: function ( res ) {
						if ( res.type == "success" ) {
							alert( "Save Success" );
							window.location = "/";
						} else {
							alert( res.message );
						}
		
					},
					error: function ( res ) {
						alert( res.responseText );
					}
				} );
			
				//$( 'input[type="date"]' ).datepicker( {
				//	format: "yyyy-mm-dd",
				//	language: "ar"
				//} );
			} )
		</script>



</body>
</html>