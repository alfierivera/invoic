<h2 class="first">Listing Locations</h2>

<table cellspacing="0">
	<tr>
		<th>Name</th>
		<th>Uri</th>
		<th></th>
	</tr>

	<?php foreach ($locations as $location): ?>	<tr>

		<td><?php echo $location->name; ?></td>
		<td><?php echo $location->uri; ?></td>
		<td>
			<?php echo Html::anchor('locations/view/'.$location->id, 'View'); ?> |
			<?php echo Html::anchor('locations/edit/'.$location->id, 'Edit'); ?> |
			<?php echo Html::anchor('locations/delete/'.$location->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>		</td>
	</tr>
	<?php endforeach; ?></table>

<br />

<?php echo Html::anchor('locations/create', 'Add new Location'); ?>