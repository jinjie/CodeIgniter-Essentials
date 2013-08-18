<form class="form-horizontal" method="post" action="<?php echo current_url(); ?>">
	<div class="control-group">
		<label class="control-label">First Name</label>
		<div class="controls">
			<input type="text" name="first_name" value="<?php echo set_value('first_name', (!empty($user) ? $user->first_name : '')); ?>" />
		</div>
	</div>
	
	<div class="control-group">
		<label class="control-label">Last Name</label>
		<div class="controls">
			<input type="text" name="last_name" value="<?php echo set_value('last_name', (!empty($user) ? $user->last_name : '')); ?>" />
		</div>
	</div>
	
	<div class="control-group">
		<label class="control-label">Username</label>
		<div class="controls">
			<input type="text" name="username" value="<?php echo set_value('username', (!empty($user) ? $user->username : '')); ?>" />
		</div>
	</div>
	
	<div class="control-group">
		<label class="control-label">Email Address</label>
		<div class="controls">
			<input type="text" name="email" value="<?php echo set_value('email', (!empty($user) ? $user->email : '')); ?>" />
		</div>
	</div>
	
	<div class="control-group">
		<label class="control-label">Password</label>
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
			<input type="submit" name="submit" value="Save" class="btn btn-primary" />
			<a href="<?php echo site_url("admin/account/users"); ?>" class="btn">Cancel</a>
		</div>
	</div>
</form>