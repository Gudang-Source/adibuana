<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Universitas Adi Buana Surabaya - Admin</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/admin/assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/admin/assets/css/minified/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/admin/assets/css/minified/core.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/admin/assets/css/minified/components.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/admin/assets/css/minified/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/assets/js/plugins/visualization/d3/d3.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/assets/js/plugins/ui/moment/moment.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/assets/js/plugins/pickers/daterangepicker.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/assets/js/plugins/forms/selects/select2.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/assets/js/plugins/forms/styling/uniform.min.js"></script>

  	<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/assets/js/core/app.js"></script>
  <?php 
    if($this->uri->segment(3) != ''){
    ?>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/assets/js/pages/form_layouts.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/assets/js/pages/picker_date.js"></script>
	<?php
    } 
  ?>

  <?php 
	if($this->uri->segment(3) != ""){
	?>
	<!-- Theme JS files -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/assets/js/core/libraries/jquery_ui/datepicker.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/assets/js/core/libraries/jquery_ui/effects.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/assets/js/plugins/notifications/jgrowl.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/assets/js/plugins/ui/moment/moment.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/assets/js/plugins/pickers/daterangepicker.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/assets/js/plugins/pickers/anytime.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/assets/js/plugins/pickers/pickadate/picker.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/assets/js/plugins/pickers/pickadate/picker.date.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/assets/js/plugins/pickers/pickadate/picker.time.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/assets/js/plugins/pickers/pickadate/legacy.js"></script>
	<?php
	}
	?>


  <script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/assets/js/pages/datatables_basic.js"></script>

  	<style type="text/css">
  		.uploader{
  			margin-top: 10px;
  		}
  	</style>

	<!-- /theme JS files -->
	<script>
		var base_url = '<?php echo base_url(); ?>';
	</script>

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.html"><img src="assets/images/logo_light.png" alt=""></a>

			<ul class="nav navbar-nav visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>

			<p class="navbar-text"><span class="label bg-success-400">Online</span></p>

			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown dropdown-user">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<img src="assets/images/placeholder.jpg" alt="">
						<span>Victoria</span>
						<i class="caret"></i>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
						<li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
						<li><a href="#"><i class="icon-coins"></i> My balance</a></li>
						<li><a href="#"><span class="badge bg-teal-400 pull-right">58</span> <i class="icon-comment-discussion"></i> Messages</a></li>
						<li class="divider"></li>
						<li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
						<li><a href="<?php echo base_url(); ?>admin/logout"><i class="icon-switch2"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page header -->
	<div class="page-header">
		<div class="breadcrumb-line breadcrumb-line-wide">
			<ul class="breadcrumb">
				<li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
				<li class="active">Dashboard</li>
			</ul>

			<ul class="breadcrumb-elements">
				<li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-gear position-left"></i>
						Settings
						<span class="caret"></span>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
						<li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
						<li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
						<li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
						<li class="divider"></li>
						<li><a href="#"><i class="icon-gear"></i> All settings</a></li>
					</ul>
				</li>
			</ul>
		</div>

		<div class="page-header-content">
			<div class="page-title">
				<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Home</span> - Dashboard <small>Hello, <?php echo $this->session->userdata('username') ?></small></h4>
			</div>
		</div>
	</div>
	<!-- /page header -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

		<?php echo $_sidebar; ?>

		<?php echo $_content; ?>
		</div>
		<!-- /page content -->


		<!-- Footer -->
		<div class="footer text-muted">
			&copy; <?php echo date('Y') ?>. <a href="#">Univesitas Adibuana Surabaya</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
		</div>
		<!-- /footer -->

	</div>
	<!-- /page container -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/ckfinder/ckfinder.js"></script> 
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/admin/assets/js/pages/editor_ckeditor.js"></script>
</body>
</html>
