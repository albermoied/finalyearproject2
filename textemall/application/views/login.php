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
	
	
    <!-- Bootstrap core CSS -->
    <link href="../../textemall/public/css/bootstrap.min.css" rel="stylesheet">
	
	<link href="../../textemall/public/css/custom.css" rel="stylesheet">
	
	<script type="text/javascript" src="../../textemall/public/js/login.js"></script>
	<script src="../../textemall/public/js/jquery.min.js"></script>
	<script src="../../textemall/public/js/bootstrap.min.js"></script>
	
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../textemall/public/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../textemall/public/css/login-page.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../textemall/public/js/ie-emulation-modes-warning.js"></script>

    
    
</head>
    

  <body>
  <div class="container">
  
    <div class="row" id="pwd-container">
    <div class="col-md-4"></div>
    
    <div class="col-md-4">
      <section class="login-form">
        <form method="post" action="<?php echo site_url('LoginController/signin')?>" role="login">
          
          <img src="../../textemall/public/images/logo.png" class="img-responsive" width="250" height="250" alt="" />
          
          <?php echo isset($error)? "<div class='alert alert-danger'>" . $error . "</div>" : ''; ?>
          
          <input type="text" name="username" placeholder="Username" required="" class="form-control input-lg"  />
          <input type="password" name="password" placeholder="Password" required="" class="form-control input-lg" />
          
          
          <div class="pwstrength_viewport_progress"></div>
          
          
          <button type="submit" name="go" class="btn btn-lg btn-primary btn-block">Sign in</button>
          <div>
			<a href="<?php echo site_url('SignupController/registration')?>">Create account</a>
			or <a href="<?php echo site_url('LoginController/reset')?>">reset password</a>
          </div>
          
        </form>
        
        <div class="form-links">
          
        </div>
      </section>  
      </div>
      
      <div class="col-md-4"></div>
      
  </div>
  
</div>

<!--Verification Modal-->
<div class="modal fade" id="verification" role="dialog">
    <div class="modal-dialog">
    
	<div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title">Reset Password</h3>
        </div>
        <div class="modal-body">
          <h4>Please enter your mobile number.</h4>
			<input type="text" class="form-control-1 input-lg" placeholder="Mobile Number" maxlength="5" required="">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          
          <button type="submit" data-toggle="modal" data-target="#myModal" class="btn btn-scheme" data-dismiss="modal">Next</button>
          
        </div>
      </div>
      
    </div>
</div>
  
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
	<div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title">Reset Password</h3>
        </div>
        <div class="modal-body">
          <h4>Please enter the verification code sent to your mobile number.</h4>
			<input type="password" class="form-control-1 input-lg" placeholder="Verification Code" required="">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  <button type="button" data-toggle="modal" data-target="#pass" class="btn btn-scheme" data-dismiss="modal">Next</button>
		</div>
    </div>
      
    </div>
</div>

<div class="modal fade" id="pass" role="dialog">
    <div class="modal-dialog">
    
	<div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title">Reset Password</h3>
        </div>
        <div class="modal-body">
          <h4>Please enter the password.</h4>
			<input type="password" class="form-control-1 input-lg" placeholder="Enter Password" required="">
			<input type="password" class="form-control-1 input-lg" placeholder="Re-enter Password" required="">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  <button type="button" class="btn btn-scheme" data-dismiss="modal">Save Changes</button>
		</div>
    </div>
      
    </div>
</div>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- <script src="../../textemall/public/js/ie10-viewport-bug-workaround.js"></script> -->
  </body>
</html>