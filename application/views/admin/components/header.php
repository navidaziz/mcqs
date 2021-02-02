<!DOCTYPE html>
<html lang="en" dir="<?php echo $this->lang->line('direction'); ?>" />
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title><?php echo $system_global_settings[0]->system_title ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="stylesheet" type="text/css" href="<?php echo site_url("assets/".ADMIN_DIR."js/magic-suggest/magicsuggest-1.3.1-min.css"); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo site_url("assets/".ADMIN_DIR."css/cloud-admin.css"); ?>" />
<link rel="stylesheet" type="text/css"  href="<?php echo site_url("assets/".ADMIN_DIR."css/themes/default.css"); ?>" id="skin-switcher" />
<link rel="stylesheet" type="text/css"  href="<?php echo site_url("assets/".ADMIN_DIR."css/responsive.css"); ?>" />
<script> var site_url='<?php echo base_url(ADMIN_DIR); ?>';</script>
<!--<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>-->
<script src="<?php echo site_url("assets/".ADMIN_DIR."js/jquery/jquery-2.0.3.min.js"); ?>"></script>
<script  src="<?php echo site_url("assets/".ADMIN_DIR."bootstrap-dist/js/bootstrap.min.js"); ?>"></script>
<link rel="stylesheet" type="text/css"  href="<?php echo site_url("assets/".ADMIN_DIR."css/custom.css"); ?>" />

<!-- jstree resources -->
<script src="<?php echo site_url("assets/".ADMIN_DIR."jstree-dist/jstree.min.js"); ?>"></script>
<link rel="stylesheet" type="text/css" href="<?php echo site_url("assets/".ADMIN_DIR."jstree-dist/themes/default/style.min.css"); ?>" />

</head>
<body>

<div class="container-fluid">
<div class="row">
    <div class="col-sm-12">
<div class="row"> <div class="col-sm-12" style="text-align: center; background-color: white; padding:10px;"> <?php echo $this->session->userdata("user_email"); ?> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo site_url(ADMIN_DIR."users/logout"); ?>"><i class="fa fa-power-off"></i> Log Out</a></div>

        </div>
        <div style="clear:both"></div>