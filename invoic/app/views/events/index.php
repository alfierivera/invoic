<h2 class="first">Listing Events</h2>

<table cellspacing="0">
	<tr>
		<th>Name</th>
		<th>Identifier</th>
		<th>Starts</th>
		<th>Ends</th>
		<th>Repeat</th>
		<th>Reference</th>
		<th>Reference ID</th>
		<th></th>
	</tr>

	<?php foreach ($events as $event): ?>	<tr>

		<td><?php echo $event->name; ?></td>
		<td><?php echo $event->identifier; ?></td>
		<td><?php echo $event->starts; ?></td>
		<td><?php echo $event->ends; ?></td>
		<td><?php echo $event->repeat; ?></td>
		<td><?php echo $event->reference; ?></td>
		<td><?php echo $event->ref_id; ?></td>
		<td>
			<?php echo Html::anchor('events/view/'.$event->id, 'View'); ?> |
			<?php echo Html::anchor('events/edit/'.$event->id, 'Edit'); ?> |
			<?php echo Html::anchor('events/delete/'.$event->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>		</td>
	</tr>
	<?php endforeach; ?></table>

<br />

<?php echo Html::anchor('events/create', 'Add new Event'); ?>
