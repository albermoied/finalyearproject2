<head>
    <?php 
    
        if($this->session->userdata['username'] == NULL)
        {
            redirect(base_url());
        }
    
    ?>
        <title>Text'em All</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
        

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo base_url(); ?>public/favicon.ico">

	<!-- Web Fonts -->
	<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

	<!-- CSS Global Compulsory -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/style.css">

	<!-- CSS Header and Footer -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/headers/header-default.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/footers/footer-v1.css">

	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/plugins/animate.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/plugins/line-icons/line-icons.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/plugins/parallax-slider/css/parallax-slider.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/plugins/owl-carousel/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>public/plugins/scrollbar/css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">

        <!-- CSS Page Style -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/pages/profile.css">

	<!-- CSS Theme -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/theme-colors/default.css" id="style_color">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/theme-skins/dark.css">

	<!-- CSS Customization -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/custom.css">
	<script src="https://htmlstream.com/stat/htmlstream-stat.js" type="text/javascript"></script>
	<script type="text/javascript" async="" src="https://mc.yandex.ru/metrika/watch.js"></script>
	<script async="" src="https://www.google-analytics.com/analytics.js"></script>
	<script src="https://htmlstream.com/stat/htmlstream-stat.js" type="text/javascript"></script>
        
</head>

<body>
	<div class="wrapper">
		<!--=== Header ===-->
		<div class="header">
			<div class="container">
				<!-- Logo -->
				<a class="logo" href="<?php echo site_url('home/dashboard')?>">
					<img src="<?php echo base_url(); ?>public/img/logo1-default.png" alt="Logo">
				</a>
			</div>	
			<!--/end container-->

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse mega-menu navbar-responsive-collapse">
				<div class="container">
					<ul class="nav navbar-nav">
						<!-- Home -->
						<li>
							<a href="<?php echo site_url('home/dashboard')?>">
								Home
							</a>
							
						</li>
						<!-- End Home -->

						<!-- Pages -->
						<li >
							<a href="<?php echo site_url('MessageController')?>">
								Messages
							</a>

						</li>
						<!-- End Pages -->

						<!-- Blog -->
						<li>
							<a href="<?php echo site_url('GroupController')?>">
								Groups
							</a>

						</li>

						<!-- End Blog -->
						<li>
							<a href="<?php echo site_url('ContactController')?>">
								Contacts
							</a>

						</li>
						<!-- Portfolio -->
						<li >
							<a href="<?php echo site_url('SettingsController')?>">
								Settings
							</a>

						</li>
						<li>
							<a href="<?php echo site_url('LoginController/signout')?>">
								Sign Out
							</a>

						</li>
						<!-- End Portfolio -->
					</ul>
				</div><!--/end container-->
			</div><!--/navbar-collapse-->

		</div>
    </div>
	

