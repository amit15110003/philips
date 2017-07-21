<!-- SUBSCRIBE FORM -->

	<section class="subscribe">
		<div class="container ">
			<div class="row">
				<div class="col-md-12">
					<div class="inner">
						<div class="row">
							<div class="col-lg-4 col-md-6">
								<div class="top-title">Want to know about new types of coffee?</div>
								<div class="bottom-title">Get our weekly email</div>
							</div>
							<div class="col-lg-5 col-md-6">
							<?php $attributes = array("name" => "subscribe");
                echo form_open("home/subscribe", $attributes);?>
								<div class="subs-form">
									<input type="text" placeholder="Enter Your Email" name="email">
									<input type="submit" value="SUBMIT">
								</div>
								<?php echo form_close(); ?>
							</div>	
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>

	<!-- SUBSCRIBE FORM END -->

<!-- FOOTER -->
	<footer class="footer">
		<div class="top-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-2 col-sm-6">
						<a href="#" class="footer-logo"><img src="images/footer-logo.png" alt=""></a>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="footer-about">
							<div class="title">About Mr.Coffee</div>
							<p>Sed sagittis sodales lobortis. Curabitur in eleifend<br> turpis, id vehicula odio. Donec pulvinar tellus<br> eget magna aliquet ultricies. </p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<ul class="footer-contacts">
							<li><i class="fa fa-phone" aria-hidden="true"></i>+80 (041) 2824 504 43</li>
							<li><i class="fa fa-envelope-o" aria-hidden="true"></i>orders@mistercoffee.us</li>
							<li><i class="fa fa-skype" aria-hidden="true"></i>mrcoffee</li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="footer-social">
							<div class="title">Follow Us</div>
							<ul class="social">
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							</ul>	
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bottom-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="copyrights"><a href="#">Just-themes</a> 2017 &copy; All Rights reserved <a href="#">Terms of Use</a></div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- FOOTER END -->
<!-- JAVASCRIPT FILES -->
<script type="text/javascript" src="<?php echo base_url('media/js/jquery.js'); ?>"></script>
<script src="../../ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTRSHf8sjMCfK9PHPJxjJkwrCIo5asIzE"></script>	
<script type="text/javascript" src="<?php echo base_url('media/js/map-style.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('media/js/bootstrap.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('media/js/modernizr-2.6.2.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('media/js/jquery.zoomslider.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('media/js/jquery.parallax-1.1.3.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('media/js/waypoint.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('media/js/jquery.counterup.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('media/js/owl.carousel.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('media/js/custom-number.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('media/js/jquery.select2.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('media/js/jquery.swipebox.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('media/js/main.js'); ?>"></script>

</body>


<!-- Mirrored from just-themes.com/mrcoffee/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Jul 2017 11:02:23 GMT -->
</html>