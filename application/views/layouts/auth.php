<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $template['title']; ?></title>
		
		<script src="<?php echo base_url('assets/jquery/jquery.min.js'); ?>"></script>
		<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" media="screen" />
		<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
		
		<link href="<?php echo base_url('assets/css/auth.css'); ?>" rel="stylesheet" media="screen" />
		<link href="<?php echo base_url('assets/css/global.css'); ?>" rel="stylesheet" media="screen" />
	</head>
	<body>
		<?php echo $this->flash->display(); ?>
		
		<?php echo $template['body']; ?>
	</body>
</html>