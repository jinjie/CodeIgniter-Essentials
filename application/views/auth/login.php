<div class="well">
	<form class="form-horizontal form-login" method="post" action="<?php echo current_url(); ?>">
		<div class="control-group">
			<label class="control-label"><?php echo humanize($this->config->item('identity', 'ion_auth')); ?></label>
			<div class="controls">
				<input type="text" name="identity" value="<?php echo set_value('identity'); ?>" />
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label">Password</label>
			<div class="controls">
				<input type="password" name="password" value="" />
			</div>
		</div>
		
		<div class="control-group">
			<div class="controls">
				<label class="checkbox">
					<input type="checkbox" name="remember" value="1" />
					Remember Me
				</label>
			</div>
		</div>
		
		<div class="control-group">
			<div class="controls inline">
				<input type="submit" name="login" value="Login" class="btn btn-primary" />
				<a href="<?php echo site_url("auth/forgotten_password"); ?>" class="forgotten-password">Forgot your password?</a>
			</div>
		</div>
	</form>
</div>