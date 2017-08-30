
<footer id="footer" class="bg-one">
	<div class="container">
		<div class="row wow fadeInUp" data-wow-duration="500ms">
			<div class="col-lg-12">

				<!-- Footer Social Links -->
				<div class="social-icon">
					<ul>
						<li><a href="#"><i class="fa fa-facebook"></i></a>
						</li>
						<li><a href="#"><i class="fa fa-twitter"></i></a>
						</li>
						<!--<li><a href="#"><i class="fa fa-google-plus"></i></a></li>-->
						<li><a href="#"><i class="fa fa-youtube"></i></a>
						</li>
						<!--<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>-->
					</ul>
				</div>
				<!--/. End Footer Social Links -->

			</div>
			<!-- end col lg 12 -->
		</div>
		<!-- end row -->
	</div>
	<!-- end container -->
</footer> <!-- end footer -->
<div id="container-floating">

	<a class="nd3 nds" href="#editFormP" data-toggle="modal" data-placement="left" data-original-title="contract@gmail.com"><img class="reminder">
    <p class="letter">P</p>
  </a>
	<a class="nd1 nds" href="#editFormE" data-toggle="modal" data-placement="left" data-original-title="Edoardo@live.it"><img class="reminder">
    <p class="letter">E</p>
  </a>
	<div id="floating-button" data-toggle="tooltip" data-placement="left" data-original-title="Create" onclick="newmail()">
		<p class="plus">+</p>
		<img class="edit" src="https://ssl.gstatic.com/bt/C3341AA7A1A076756462EE2E5CD71C11/1x/bt_compose2_1x.png">
	</div>

</div>
<div id="modals">

	<div id="editFormE" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Create Event!</h4>
				</div>
				<div class="modal-body">
					<div id="eventedit">
						<form action="">
							<div class="form-group">
								<label for="eventName">Event Name :</label>
								<input type="text" class="form-control" id="eventName" required>
							</div>
							<div class="form-group">
								<label for="eventName">Event tag :</label>
								<input type="text" class="form-control" id="eventName">
							</div>
							<div class="form-group">
								<label for="Description">Dexcription :</label>
								<textarea id="description" name="Text1" cols="70" rows="2"></textarea>
							</div>
							<div class="form-group">
								<label for="eventName">Event Image :</label>
								<input id="eventmage" type="file" accept="image/jpeg" style="width:200px;" name="eventImg" required>
							</div>
							<div class="form-group">
								<div id="sub">
									<input style="border-radius: 20px; width: 56%;" type="submit" class="btn btn-success"/>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" style="border-radius: 20px;" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<div id="editFormP" class="modal fade" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Create Post!</h4>
				</div>
				<div class="modal-body">
					<div id="eventedit">
						<form action="">
							<div class="form-group">
								<label for="eventName">Post Name :</label>
								<input type="text" class="form-control" id="eventName" required>
							</div>
							<div class="form-group">
								<label for="Description">Description :</label>
								<textarea id="description" name="Text1" cols="70" rows="2"></textarea>
							</div>
							<div class="form-group">
								<label for="postName">Post Image :</label>
								<input id="postmage" type="file" accept="image/jpeg" style="width:200px;" name="حخسفImg" required>
							</div>
							<div class="form-group">
								<div id="sub">
									<input style="border-radius: 20px; width: 56%;" type="submit" class="btn btn-success"/>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" style="border-radius: 20px;" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Back to Top
===
=== === === === === === === === === -->
<!--
<
a href = "javascript:;"
id = "scrollUp" >
	<
	i class = "fa fa-angle-up fa-2x" > < /i> <
	/a>
	-->

<!-- end Footer Area
===
=== === === === === === === === === === === === === -->

<!--
Essential Scripts
	===
	=== === === === === === === === === === === = -->

	<!-- Main jQuery -->
	<script src="<?=assets('js/jquery-1.11.0.min.js')?>"></script>
	<!-- Bootstrap 3.1 -->
	<script src="<?=assets('js/bootstrap.min.js')?>"></script>
<script src="<?=assets('js/modernizr-2.6.2.min.js')?>"></script>
<script src="<?=assets('js/classie.js')?>"></script>
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

<script src="<?=assets('js/Event.js')?>"></script>
<!-- For video responsive -->
<script src="<?=assets('js/jquery.fitvids.js')?>"></script>
<!-- Grid js -->
<script src="<?=assets('js/grid.js')?>"></script>
<!-- Custom js -->
<script src="<?=assets('js/custom.js')?>"></script>
<script src="<?=assets('js/idangerous.swiper-2.1.min.js')?>"></script>
<script src="<?=assets('js/bootstrap-datepicker.min.js')?>"></script>

<!-- Ajax Form-->
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
		$( "#btnLogin" ).click( function ( event ) {
			event.preventDefault();
			$( "#myModal" ).modal();
		} );
		$( 'input[type="date"]' ).datepicker( {
			format: "yyyy-mm-dd",
			language: "ar"
		} );
	} )
</script>

</body> 
</html>