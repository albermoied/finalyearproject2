<div class="footer-v1">
			<div class="footer">
				<div class="container">
					<div class="row">
						<!-- About -->
						<div class="col-md-3 md-margin-bottom-40">
							<a href="<?php echo site_url('home/dashboard')?>"><img id="logo-footer" class="footer-logo" src="<?php echo base_url(); ?>public/img/logo2-default.png" alt=""></a>
							<p>Text'em All is a Free Bulk SMS System.</p>
						</div><!--/col-md-3-->
						<!-- End About -->

                                                <!-- Address -->
						<div class="col-md-4 map-img md-margin-bottom-40">
							<div class="headline"><h2>Project by</h2></div>
							<address class="md-margin-bottom-40">
								Adnan Khalid<br />
								Alber Moied<br />
								Hamad Rakshani<br />
								Ramsha Ateeq<br />
							</address>
						</div><!--/col-md-3-->
						<!-- End Address -->
                                                <div class="col-md-5 map-img md-margin-bottom-40">
							<div class="headline"><h2>Contact Us</h2></div>
							<address class="md-margin-bottom-40">
								Have good phone number<br />
								+923404000488<br />
								Email address is just as awesome<br />
								hambaloch77@gmail.com
							</address>
						</div>
					</div>
				</div>
			</div><!--/footer-->

			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<p>
								Text'em All, 2016 &copy; All Rights Reserved.
								
							</p>
						</div>

						<!-- Social Links -->


						<!-- End Social Links -->
					</div>
				</div>
			</div><!--/copyright-->
		</div>
		<!--=== End Footer Version 1 ===-->
	</div><!--/wrapper-->

	<!--=== Style Switcher ===-->
<!--/style-switcher-->
	<!--=== End Style Switcher ===-->

	<!-- JS Global Compulsory -->
	<script type="text/javascript" src="<?php echo base_url(); ?>public/plugins/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>public/plugins/jquery/jquery-migrate.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>public/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- JS Implementing Plugins -->
	<script type="text/javascript" src="<?php echo base_url(); ?>public/plugins/back-to-top.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>public/plugins/smoothScroll.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>public/plugins/parallax-slider/js/modernizr.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>public/plugins/parallax-slider/js/jquery.cslider.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>public/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>public/plugins/sky-forms-pro/skyforms/js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>public/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>public/plugins/sky-forms-pro/skyforms/js/jquery.maskedinput.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>public/plugins/scrollbar/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<!-- JS Customization -->
	<script type="text/javascript" src="<?php echo base_url(); ?>public/js/custom.js"></script>
	<!-- JS Page Level -->
	<script type="text/javascript" src="<?php echo base_url(); ?>public/js/app.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/owl-carousel.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/style-switcher.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/parallax-slider.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>public/js/forms/reg.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>public/js/forms/checkout.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>public/js/plugins/datepicker.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function() {
			App.init();
			OwlCarousel.initOwlCarousel();
			StyleSwitcher.initStyleSwitcher();
			ParallaxSlider.initParallaxSlider();
                        App.initScrollBar();
			RegForm.initRegForm();
			Datepicker.initDatepicker();
			CheckoutForm.initCheckoutForm();
			StyleSwitcher.initStyleSwitcher();
		});
	</script>
        <!--[if lt IE 9]>
	<script src="public/plugins/respond.js"></script>
	<script src="public/plugins/html5shiv.js"></script>
	<script src="public/plugins/placeholder-IE-fixes.js"></script>
	<![endif]-->