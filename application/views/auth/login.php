<form class="form-horizontal" method="post" action="<?php echo current_url(); ?>">
	<div class="control-group">
		<label class="control-label">Identity</label>
		<div class="controls">
			<input type="text" name="identity" value="" />
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
		<div class="controls">
			<input type="submit" name="login" value="Login" class="btn btn-primary" />
		</div>
	</div>
</form>