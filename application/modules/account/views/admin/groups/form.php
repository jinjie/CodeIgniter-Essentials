<form class="form-horizontal" method="post" action="<?php echo current_url(); ?>">
	<div class="control-group">
		<label class="control-label">Name</label>
		<div class="controls">
			<input type="text" name="name" value="<?php echo set_value('name', !empty($group) ? $group->name : ''); ?>" />
		</div>
	</div>
	
	<div class="control-group">
		<label class="control-label">Description</label>
		<div class="controls">
			<input type="text" name="description" value="<?php echo set_value('description', !empty($group) ? $group->description : ''); ?>" />
		</div>
	</div>
	
	<div class="control-group">
		<div class="controls">
			<input type="submit" name="submit" value="Save" class="btn btn-primary" />
			<a href="<?php echo site_url("admin/account/groups"); ?>" class="btn">Cancel</a>
		</div>
	</div>
</form>