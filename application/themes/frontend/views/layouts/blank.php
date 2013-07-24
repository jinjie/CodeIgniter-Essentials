<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $template['title']; ?></title>
		
		<?php echo $template['metadata']; ?>
	</head>
	<body>
		<?php echo $this->flash->display(); ?>
		
		<?php echo $template['body']; ?>
	</body>
</html>