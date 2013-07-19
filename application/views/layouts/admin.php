<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $template['title']; ?></title>
		
		<script src="<?php echo base_url('assets/jquery/jquery.min.js'); ?>"></script>
		<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" media="screen" />
		<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
		
		<link href="<?php echo base_url('assets/css/global.css'); ?>" rel="stylesheet" media="screen" />
		<link href="<?php echo base_url('assets/css/admin.css'); ?>" rel="stylesheet" media="screen" />
	</head>
	<body>
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="brand" href="<?php echo site_url(); ?>">Application Name</a>
					
					<ul class="nav pull-right">
						<li><a href="<?php echo site_url("auth/logout"); ?>">Logout</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="container">
			<?php echo $this->flash->display(); ?>
			
			<div class="row-fluid">
				<div class="left-sidebar">
					<div class="well">
						<ul class="nav nav-list">
							<li><a href="<?php echo site_url("admin/dashboard"); ?>">Dashboard</a></li>
							
							<li class="nav-header">User Management</li>
							<li><a href="<?php echo site_url("admin/dashboard"); ?>">Add New User</a></li>
							<li><a href="<?php echo site_url("admin/dashboard"); ?>">View Users</a></li>
						</ul>
					</div>
				</div>
				
				<div class="main-content">
					<div class="well">
					<?php echo $template['body']; ?>
					</div>
				</div>			
			</div>
			
			<div class="footer">
				<p>Developed by <a href="http://www.aspiredesigns.com.sg/">Aspire Designs Pte Ltd</a></p>
			</div>
		</div>
	</body>
</html>