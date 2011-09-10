<h2 class="first">Listing Groups</h2>

<table class="zebra-striped">
	<thead>
	<tr>
		<th>Parent id</th>
		<th>Name</th>
		<th>Role</th>
		<th class="{sorter: false}">Actions</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($groups as $group): ?>	<tr>

		<td><?php echo $group->parent_id; ?></td>
		<td><?php echo $group->name; ?></td>
		<td><?php echo $group->role->name; ?></td>
		<td>
			<?php echo Html::anchor('groups/view/'.$group->id, 'View', array('class'=>'btn primary')); ?>&nbsp;<?php echo Html::anchor('groups/edit/'.$group->id, 'Edit', array('class'=>'btn info')); ?>&nbsp;<?php echo Html::anchor('groups/delete/'.$group->id, 'Delete', array('onclick' => "return confirm('Are you sure?')", 'class'=>'btn danger')); ?>		</td>
	</tr>
	<?php endforeach; ?></tbody></table>

<br />

<?php echo Html::anchor('groups/create', 'Add new Group', array('class'=>'btn primary large')); ?>
