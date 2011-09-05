<h2 class="first">Listing Alerts</h2>

<table cellspacing="0">
	<tr>
		<th>Name</th>
		<th>Identifier</th>
		<th>Event id</th>
		<th>Init</th>
		<th>Enabled</th>
		<th>Type</th>
		<th></th>
	</tr>

	<?php foreach ($alerts as $alert): ?>	<tr>

		<td><?php echo $alert->name; ?></td>
		<td><?php echo $alert->identifier; ?></td>
		<td><?php echo $alert->event_id; ?></td>
		<td><?php echo $alert->init; ?></td>
		<td><?php echo $alert->enabled; ?></td>
		<td><?php echo $alert->type; ?></td>
		<td>
			<?php echo Html::anchor('alerts/view/'.$alert->id, 'View'); ?> |
			<?php echo Html::anchor('alerts/edit/'.$alert->id, 'Edit'); ?> |
			<?php echo Html::anchor('alerts/delete/'.$alert->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>		</td>
	</tr>
	<?php endforeach; ?></table>

<br />

<?php echo Html::anchor('alerts/create', 'Add new Alert'); ?>