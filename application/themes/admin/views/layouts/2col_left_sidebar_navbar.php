<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $template['title']; ?></title>
		
		<?php echo $template['metadata']; ?>
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