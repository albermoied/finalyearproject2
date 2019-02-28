<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- Mirrored from htmlstream.com/preview/unify-v1.9.4/page_registration1.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Apr 2016 17:26:08 GMT -->
<head>
	<title>Text'em All | Registration</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Favicon -->
	<link rel="shortcut icon" href="../../textemall/public/favicon.ico">

	<!-- Web Fonts -->
	<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

	<!-- CSS Global Compulsory -->
	<link rel="stylesheet" href="../../textemall/public/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../textemall/public/css/style.css">

	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="../../textemall/public/plugins/animate.css">
	<link rel="stylesheet" href="../../textemall/public/plugins/line-icons/line-icons.css">
	<link rel="stylesheet" href="../../textemall/public/plugins/font-awesome/css/font-awesome.min.css">

	<!-- CSS Page Style -->
	<link rel="stylesheet" href="../../textemall/public/css/pages/page_log_reg_v2.css">

	<!-- CSS Theme -->
	<link rel="stylesheet" href="../../textemall/public/css/theme-colors/default.css" id="style_color">
	<link rel="stylesheet" href="../../textemall/public/css/theme-skins/dark.css">

	<!-- CSS Customization -->
	<link rel="stylesheet" href="../../textemall/public/css/custom.css">
</head>

<body>
	<!--=== Content Part ===-->
	<div class="container">
		<!--Reg Block-->
		<div class="reg-block">
			<div class="reg-block-header">
				<h2>Sign Up</h2>
				<p>Already Signed Up? Click <a class="color-green" href="<?php echo base_url() ?>">Sign In</a> to login your account.</p>
                        </div>
                    
                        <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
                    
                        <form action="<?php echo site_url('SignupController/registration')?>" method="post">
			
                        <div class="input-group margin-bottom-20">
				<span class="input-group-addon"><i class="fa fa-user"></i></span>
				<input type="text" name="name" value="<?php echo set_value('name'); ?>" class="form-control" placeholder="Full Name" required>
			</div>
                            
			<div class="input-group margin-bottom-20">
				<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
				<input type="email" name="email" value="<?php echo set_value('email'); ?>" class="form-control" placeholder="Email" required>
			</div>
                            
                        <div class="input-group margin-bottom-20">
				<span class="input-group-addon"><i class="fa fa-university"></i></span>
				<input type="text" name="organization" value="<?php echo set_value('organization'); ?>" class="form-control" placeholder="Organization" required>
			</div>
                            
			<div class="input-group margin-bottom-20">
				<span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                <input type="text" name="contactNo" value="<?php echo set_value('contactNo'); ?>" class="form-control" placeholder="Contact No" required>
			</div>
                            
                        <div class="input-group margin-bottom-20">
				<span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" name="username" value="<?php echo set_value('username'); ?>" class="form-control" placeholder="Username" required>
			</div>
                            
			<div class="input-group margin-bottom-20">
				<span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" name="password" value="<?php echo set_value('password'); ?>" class="form-control" placeholder="Password" required>
			</div>
                            
			<div class="input-group margin-bottom-30">
				<span class="input-group-addon"><i class="fa fa-lock"></i></span>
				<input type="password" name="passconf" value="<?php echo set_value('passconf'); ?>" class="form-control" placeholder="Confirm Password" required>
			</div>
                            
			

			<div class="checkbox">
				<label>
					<input type="checkbox" required>
					I have read Terms and Conditions
				</label>
			</div>

			<div class="row">
				<div class="col-md-10 col-md-offset-1">
				
					<button type="submit" class="btn-u btn-block">Register</button>
				
				</div>
			</div>
                        </form>
		</div>
		<!--End Reg Block-->
	</div><!--/container-->
	<!--=== End Content Part ===-->

	<!-- JS Global Compulsory -->
	<script type="text/javascript" src="../../textemall/public/plugins/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="../../textemall/public/plugins/jquery/jquery-migrate.min.js"></script>
	<script type="text/javascript" src="../../textemall/public/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- JS Implementing Plugins -->
	<script type="text/javascript" src="../../textemall/public/plugins/back-to-top.js"></script>
	<script type="text/javascript" src="../../textemall/public/plugins/backstretch/jquery.backstretch.min.js"></script>
	<!-- JS Customization -->
	<script type="text/javascript" src="../../textemall/public/js/custom.js"></script>
	<!-- JS Page Level -->
	<script type="text/javascript" src="../../textemall/public/js/app.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function() {
			App.init();
		});
	</script>
	<script type="text/javascript">
		$.backstretch([
			"http://i.imgur.com/GHr12sH.jpg",
			
			], {
				fade: 1000,
				duration: 7000
			});
	</script>
	<!--[if lt IE 9]>
	<script src="public/plugins/respond.js"></script>
	<script src="public/plugins/html5shiv.js"></script>
	<script src="public/plugins/placeholder-IE-fixes.js"></script>
	<![endif]-->
</body>

<!-- Mirrored from htmlstream.com/preview/unify-v1.9.4/page_registration1.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Apr 2016 17:26:10 GMT -->
</html>
