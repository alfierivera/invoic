<h2 class="first">Listing Locations</h2>

<table class="zebra-striped">
	<tr>
		<th>Name</th>
		<th>Uri</th>
		<th class="{sorter:false}">Actions</th>
	</tr>

	<?php foreach ($locations as $location): ?>	<tr>

		<td><?php echo $location->name; ?></td>
		<td><?php echo $location->uri; ?></td>
		<td>
			<?php echo Html::anchor('locations/view/'.$location->id, 'View', array('class' => 'btn primary')); ?>&nbsp;<?php echo Html::anchor('locations/edit/'.$location->id, 'Edit', array('class' => 'btn info')); ?>&nbsp;<?php echo Html::anchor('locations/delete/'.$location->id, 'Delete', array('onclick' => "return confirm('Are you sure?')", 'class' => 'btn danger')); ?>		</td>
	</tr>
	<?php endforeach; ?></table>

<br />

<?php echo Html::anchor('locations/create', 'Add new Location', array('class' => 'btn primary large')); ?>
