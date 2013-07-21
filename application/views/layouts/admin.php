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
		<?php echo $template['partials']['navbar']; ?>

		<div class="container">
			<?php echo $this->flash->display(); ?>
			
			<div class="row-fluid">
				<?php echo $template['partials']['left_sidebar']; ?>	

				<div class="main-content">
					<div class="well">
						<?php if (! empty($template['partials']['actions'])) : ?>
						<div class="btn-group">
							<?php echo $template['partials']['actions']; ?>
						</div>
						<?php endif; ?>
						
						<?php echo $template['body']; ?>
					</div>
				</div>		
			</div>
			
			<div class="footer">
				<?php echo $template['partials']['footer']; ?>
			</div>
		</div>
	</body>
</html>