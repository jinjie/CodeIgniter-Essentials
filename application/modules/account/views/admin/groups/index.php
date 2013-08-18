<table class="table table-stripped">
	<thead>
		<tr>
			<th>#</th>
			<th>Name</th>
			<th>Description</th>
			<th>Users</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($groups as $group) : ?>
		<tr>
			<td><?php echo $group->id; ?></td>
			<td><?php echo $group->name; ?></td>
			<td><?php echo $group->description; ?></td>
			<td><?php echo $group->user_count; ?></td>
			<td>
				<div class="btn-group">
					<a href="<?php echo site_url("admin/account/groups/delete/{$group->id}"); ?>" class="btn btn-mini" onclick="javascript:return confirm('Are you sure to delete this group?');"><i class="icon-trash"></i></a>
					<a href="<?php echo site_url("admin/account/groups/edit/{$group->id}"); ?>" class="btn btn-mini"><i class="icon-edit"></i></a>
				</div>
			</td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>