<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $template['title']; ?></title>
		<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" media="screen">
		<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
	</head>
	<body>
		<?php echo $this->flash->display(); ?>
		
		<?php echo $template['body']; ?>
	</body>
</html>