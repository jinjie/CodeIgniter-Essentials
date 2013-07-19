<div class="well">
	<form class="form-horizontal" method="post" action="<?php echo current_url(); ?>">
		<div class="control-group">
			<label class="control-label">New Password</label>
			<div class="controls">
				<input type="password" name="password" value="" />
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label">Confirm Password</label>
			<div class="controls">
				<input type="password" name="password2" value="" />
			</div>
		</div>
		
		<div class="control-group">
			<div class="controls">
				<input type="submit" name="submit" value="Reset Password" class="btn btn-primary" />
			</div>
		</div>
	</form>
</div>