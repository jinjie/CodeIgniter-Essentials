<div class="well">
	<form class="form-horizontal" method="post" action="<?php echo site_url("auth/forgotten_password"); ?>">
		<div class="control-group">
			<label class="control-label"><?php echo humanize($this->config->item('identity', 'ion_auth')); ?></label>
			<div class="controls">
				<input type="text" name="identity" value="<?php echo set_value('identity'); ?>" />
			</div>
		</div>
		
		<div class="control-group">
			<div class="controls">
				<input type="submit" name="submit" value="Reset my password" class="btn btn-primary" />
				<a href="<?php echo site_url("auth/login"); ?>" class="btn">Login</a>
			</div>
		</div>
	</form>
</div>