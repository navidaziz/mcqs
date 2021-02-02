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
<section id="page"> 
  <!-- HEADER -->
  <header> 
    
    <!-- NAV-BAR -->
    <div class="container" >
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <div id="logo">
            <?php
                                    if($this->session->flashdata('msg')){
                                        
                                        echo '<div class="alert alert-block alert-danger fade in">
    											<a class="close" data-dismiss="alert" href="#" aria-hidden="true"><i class="fa fa-times"></i></a>
    											<h4><i class="fa fa-times"></i> Oh snap! You got an error!</h4>
    												<p>'.$this->session->flashdata('msg').'</p>
    										</div>';
                                    }
                                ?>
            <?php echo validation_errors(); ?> </div>
        </div>
      </div>
    </div>
    <!--/NAV-BAR --> 
  </header>
  <!--/HEADER --> 
  <!-- LOGIN -->
  <section id="login" class="visible" >
    <div class="container">
      <div class="row" style="margin:5%;">
       <div class="col-md-5">
       <div style="width:100%; margin:0px auto; color:#FFF; text-shadow: 2px 4px 3px rgba(0,0,0,0.3); text-align:center">
       <img src="<?php echo site_url("assets/uploads/".$system_global_settings[0]->sytem_admin_logo); ?>" alt="<?php echo $system_global_settings[0]->system_title ?>" title="<?php echo $system_global_settings[0]->system_title ?>" style="width:200px !important" />
        <h3 class="bigintro" style="color:white !important; text-shadow:#999;"><?php echo $system_global_settings[0]->system_title ?></h2>
        <h4 style="color:white" ><?php echo $system_global_settings[0]->system_sub_title ?></h4>
        <hr />
       </div>
        
       </div>
        <div class="col-md-7">
        <script>
        function get_employee_basi_data(){
			var personal_no = $('#personal_no').val();
			var date_of_birth = $('#date_of_birth').val();
			$.ajax({
				type: "POST",
				url: "<?php echo site_url(ADMIN_DIR."complete_profile/get_user_varified_form"); ?>",
				data: {personal_no:personal_no,date_of_birth:date_of_birth }
			}).done(function(data) {
				$('#complete_profile_form').html(data);
			});
			}
        </script>
        
        <div class="login-box" style="background-color:#2C2C2C; opacity:.9; margin: 5px auto; padding-top:10px !important;">
            <h2 class="bigintro">Complete your profile manually</h2>
            <h5 style="text-align:center; color:#FFF" >it take a movement thanks.</h5>
            <div class="divide-40"></div>
            <div id="complete_profile_form">
            <form action="<?php echo site_url(ADMIN_DIR.'complete_profile/manually_complete'); ?>" method="post">
            <div class="form-group col-md-6">
                <label for="personal_no">Name:</label>
                <i class="fa fa-user"></i>
                <input required="required" type="text" name="name" class="form-control" id="name" value="" placeholder="Your Name" >
              </div>
              <div class="form-group col-md-6">
                <label for="father_name">Father Name</label>
                <i class="fa fa-user"></i>
                <input required="required" type="text" name="father_name" class="form-control" id="father_name" placeholder="Father Name"  >
              </div>
              <div class="form-group col-md-6">
              
                <label for="personal_no">Personal No:</label>
                
                <input required="required" type="text" name="personal_no" class="form-control" id="personal_no" value="" placeholder="653254" >
              </div>
              <div class="form-group col-md-6">
                <label for="date_of_birth">Date of Birth:</label>
                <i class="fa fa-calendar"></i>
                <input required="required" type="date" name="date_of_birth" class="form-control" id="date_of_birth" placeholder="Date of Birth" >
              </div>
              
               <div class="form-group col-md-6">
                <label for="date_of_birth">CNIC</label>
                <i class="fa fa-credit-card"></i>
                <input required="required" type="text" name="cnic" class="form-control" id="cnic" placeholder="1520104170990"  >
              </div>
              
               <div class="form-group col-md-6">
                <label for="date_of_birth">Mobile No</label>
                <i class="fa fa-mobile"></i>
                <input required="required" type="text" name="mobile_no" class="form-control" id="mobile_no" placeholder="30300022322"  >
              </div>
              
              
              
              <div class="form-group col-md-6">
              <label for="gender" class="control-label">Gender</label>
              
              <?php 
					$options = get_genders();
                        foreach($options as $option_value => $options_name){
                            
                            $data = array(
                                "name"        => "gender",
                                "id"          => "gender",
                                "value"       => $option_value,
                                "style"       => "width: 17px !important;",
								"required"	  => "required",
                                "class"       => "unif orm"
                                );
								if($option_value ==@$employee_detail->gender){
                                    $data["checked"] = TRUE;
                                }
                            echo form_radio($data)." $options_name";
                            
                        }
                    ?>
              
              
              </div>
              
              <div class="form-group col-md-6">
                <label for="marital_status" class="control-label">Disabled</label>
                 <?php 
					$options = array("Yes" => "Yes", "No" => "No");
                        foreach($options as $option_value => $options_name){
                            
                            $data = array(
                                "name"        => "disability",
                                "id"          => "disability",
                                "value"       => $option_value,
                               "style"       => "width: 17px !important;",
								"required"	  => "required",
                                "class"       => "uni form"
                                );if($option_value == @$employee->disability){
                                    $data["checked"] = TRUE;
                                }
                            echo form_radio($data)."<label for=\"disability\" style=\"margin-left:10px;\">$options_name</label>";
                            
                        }
                    ?>
              </div>
              
              
              <div class="form-group">
                <label for="marital_status" class="control-label">Marital Status</label>

           
            <?php 
					$options = get_marital_status();
                        foreach($options as $option_value => $options_name){
                            
                            $data = array(
                                "name"        => "marital_status",
                                "id"          => "marital_status",
                                "value"       => $option_value,
                               "style"       => "width: 17px !important;",
								"required"	  => "required",
                                "class"       => "uni form"
                                );if($option_value == @$employee->marital_status){
                                    $data["checked"] = TRUE;
                                }
                            echo form_radio($data)."<label for=\"marital_status\" style=\"margin-left:10px;\">$options_name</label>";
                            
                        }
                    ?>
           
              </div>
              
              
              
              
              <div>
                <button  type="submit" class="btn btn-warning">Update and Complete</button>
              </div>
           </form>
            </div>
            <!-- SOCIAL LOGIN -->
            <div class="divide-20"></div>
            
                           
            <?php if(validation_errors()){ ?>
            <div class="alert alert-block alert-danger fade in">
			<?php echo validation_errors(); ?>
            </div>
			<?php } ?> 
            <!-- /SOCIAL LOGIN -->
            <div class="login-helpers" style="color:#999">Note: <br>
              This application required a varified profile to fill transfer application through this system. So kindly varified youself provide some basic information. Thanks.<br />
              Incase of any inconvenience kindly contact IT Sectioni Health Department Khybarpakhtunkhawa.
               </div>
          </div>
        
          
        </div>
        <div class="col-md-1"></div>
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