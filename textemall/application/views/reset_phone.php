<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../textemall/public/favicon.ico">

    <title>Text'em All</title>

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
				<h2>Reset Password</h2>
				<p>or Click <a class="color-green" href="<?php echo base_url() ?>">Sign In</a> to login your account.</p>
                                <h4 class="margin-top-20">Please enter your contact number</h4>
                    </div>
                    
                    <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
                    
                        <form action="<?php echo site_url('LoginController/resetPhone')?>" method="post">
                            
                            <?php echo isset($error)? "<div class='alert alert-danger'>" . $error . "</div>" : ''; ?>
			
                            <div class="input-group margin-bottom-40">
				<span class="input-group-addon"><i class="fa fa-phone"></i></span>
				<input type="text" name="contactNo" value="<?php echo set_value('contactNo'); ?>" class="form-control" placeholder="Contact No" required>
                            </div>
                            
                            <div class="row">
				<div class="col-md-10 col-md-offset-1">
                                    
                                   <button type="submit" class="btn-u btn-block">Next</button>
				
                                </div>
                            </div>
                            
                        </form>
                </div>
        </div>
    
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
</body>

</html>
