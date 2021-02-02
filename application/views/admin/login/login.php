<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
<meta name="description" content="">
<meta name="author" content="">
<!-- STYLESHEETS --><!--[if lt IE 9]><script src="js/flot/excanvas.min.js"></script><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]-->
<link rel="stylesheet" type="text/css" href="<?php echo site_url("assets/".ADMIN_DIR); ?>/css/cloud-admin.css" >
<link href="<?php echo site_url("assets/".ADMIN_DIR); ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<!-- DATE RANGE PICKER -->
<link rel="stylesheet" type="text/css" href="<?php echo site_url("assets/".ADMIN_DIR); ?>/js/bootstrap-daterangepicker/daterangepicker-bs3.css" />
<!-- UNIFORM -->
<link rel="stylesheet" type="text/css" href="<?php echo site_url("assets/".ADMIN_DIR); ?>/js/uniform/css/uniform.default.min.css" />
<!-- ANIMATE -->
<link rel="stylesheet" type="text/css" href="<?php echo site_url("assets/".ADMIN_DIR); ?>/css/animatecss/animate.min.css" />
<!-- FONTS -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
</head>
<body class="log in" style="position: relative;
    height: 100%;
    background-image: url(<?php echo site_url("assets/".ADMIN_DIR."/img/background.jpg"); ?>);
    background-size: cover;
    ">
<!-- PAGE -->
<section id="page"> 
  <!-- HEADER -->
  <header> 
    <!-- NAV-BAR --> 
    <div class="container">
					<div class="row" >
						<div class="col-md-4 col-md-offset-4">
							<div id="logo" style=" margin-top:60px;">
							
                            <?php
                                    if($this->session->flashdata('msg')){
                                        
                                        echo '<div class="alert alert-block alert-danger fade in">
    											<a class="close" data-dismiss="alert" href="#" aria-hidden="true"><i class="fa fa-times"></i></a>
    											<h4><i class="fa fa-times"></i> Oh snap! You got an error!</h4>
    												<p>'.$this->session->flashdata('msg').'</p>
    										</div>';
                                    }
                                ?>
              <?php
                                    if($this->session->flashdata('msg_success')){
                                        
                                        echo '<div class="alert alert-block alert-success fade in">
    											<a class="close" data-dismiss="alert" href="#" aria-hidden="true"><i class="fa fa-times"></i></a>
    											<h4>Account Created Successfully.</h4>
    												<p>'.$this->session->flashdata('msg').'</p>
    										</div>';
                                    }
                                ?>  
						</div>
					</div>
				</div> 
    <!--/NAV-BAR --> 
  </header>
  <!--/HEADER --> 
  <!-- LOGIN -->
  <section id="login_bg" <?php if($this->input->get('register')!=1){ ?>class="visible" <?php } ?>>
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <div class="login-box" style="background-color:#2C2C2C; opacity:.9; margin: 5px auto; padding-top:10px !important;">
            <h2 class="bigintro">Sign In</h2>
            <div class="divide-40"></div>
            <form role="form" method="post" action="<?php echo site_url(ADMIN_DIR."login/"); ?>">
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <i class="fa fa-envelope"></i>
                <input type="text" name="user_email" class="form-control" id="user_email" value="<?php echo set_value("user_email"); ?>" >
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <i class="fa fa-lock"></i>
                <input type="password" name="user_password" class="form-control" id="password" >
              </div>
              <div>
                <button type="submit" class="btn btn-danger">Submit</button>
              </div>
            </form>
            <!-- SOCIAL LOGIN -->
            <div class="divide-20"></div>
            
                           
            <?php if(validation_errors()){ ?>
            <div class="alert alert-block alert-danger fade in">
			<?php echo validation_errors(); ?>
            </div>
			<?php } ?> 
            <!-- /SOCIAL LOGIN -->
            <div class="login-helpers"> <a href="<?php echo site_url(ADMIN_DIR); ?>/recover_password" >Forgot Password?</a> <br>
              Don't have an account with us? <a href="<?php echo site_url(ADMIN_DIR); ?>/register/signup" >Register
              now!</a> </div>
          </div>
          
        </div>
      </div>
    </div>
  </section>
 
  <section id="forgot_bg">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <div class="login-box" style="background-color:#2C2C2C; opacity:.9; margin: 5px auto; padding-top:10px !important;">
            <h2 class="bigintro">Reset Password</h2>
            <div class="divide-40"></div>
            <form role="form">
              <div class="form-group">
                <label for="exampleInputEmail1">Enter your Email address</label>
                <i class="fa fa-envelope"></i>
                <input type="email" class="form-control" id="exampleInputEmail1" >
              </div>
              <div>
                <button type="submit" class="btn btn-info">Send Me Reset Instructions</button>
              </div>
            </form>
            <div class="login-helpers"> <a href="<?php echo site_url("assets/".ADMIN_DIR); ?>/#" onclick="swapScreen('login_bg');return false;">Back to Login</a> <br>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- FORGOT PASSWORD --> 
</section>
<!--/PAGE --> 
<!-- JAVASCRIPTS --> 
<!-- Placed at the end of the document so the pages load faster --> 
<!-- JQUERY --> 
<script src="<?php echo site_url("assets/".ADMIN_DIR); ?>/js/jquery/jquery-2.0.3.min.js"></script> 
<!-- JQUERY UI--> 
<script src="<?php echo site_url("assets/".ADMIN_DIR); ?>/js/jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.min.js"></script> 
<!-- BOOTSTRAP --> 
<script src="<?php echo site_url("assets/".ADMIN_DIR); ?>/bootstrap-dist/js/bootstrap.min.js"></script> 

<!-- UNIFORM --> 
<script type="text/javascript" src="<?php echo site_url("assets/".ADMIN_DIR); ?>/js/uniform/jquery.uniform.min.js"></script> 
<!-- BACKSTRETCH --> 
<script type="text/javascript" src="<?php echo site_url("assets/".ADMIN_DIR); ?>/js/backstretch/jquery.backstretch.min.js"></script> 
<!-- CUSTOM SCRIPT --> 
<script src="<?php echo site_url("assets/".ADMIN_DIR); ?>/js/script.js"></script> 
<script>
		jQuery(document).ready(function() {		
			App.setPage("login_bg");  //Set current page
			App.init(); //Initialise plugins and elements
		});
	</script> 
<script type="text/javascript">
		function swapScreen(id) {
			jQuery('.visible').removeClass('visible animated fadeInUp');
			jQuery('#'+id).addClass('visible animated fadeInUp');
		}
	</script> 
<!-- /JAVASCRIPTS -->
</body>
</html>