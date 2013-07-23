<table class="table table-stripped">
	<thead>
		<tr>
			<th>#</th>
			<th>Name</th>
			<th>Username</th>
			<th>Email</th>
			<th>Groups</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($users as $user) : ?>
		<tr>
			<td><?php echo $user->id; ?></td>
			<td><?php echo $user->first_name; ?>, <?php echo $user->last_name; ?></td>
			<td><?php echo $user->username; ?></td>
			<td><?php echo mailto($user->email); ?></td>
			<td><?php echo implode(', ', $user->group->get()->all_to_single_array('name')); ?></td>
			<td>
				<div class="btn-group">
					<a href="<?php echo site_url("admin/users/edit/{$user->id}"); ?>" class="btn btn-mini"><i class="icon-edit"></i></a>
					<a href="<?php echo site_url("admin/users/delete/{$user->id}"); ?>" class="btn btn-mini" onclick="javascript:return confirm('Are you sure to delete this user?');"><i class="icon-trash"></i></a>
				</div>
			</td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>