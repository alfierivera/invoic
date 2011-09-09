<h2 class="first">Listing Events</h2>

<table class="zebra-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th>Starts</th>
			<th>Ends</th>
			<th>Repeat</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($events as $event): ?>	<tr>

		<td><?php echo $event->name; ?></td>
		<td><?php echo Date::factory($event->starts)->format("datepicker"); ?></td>
		<td><?php echo Date::factory($event->ends)->format("datepicker"); ?></td>
		<td><?php echo $event->repeat; ?></td>
		<td>
			<?php echo Html::anchor('events/view/'.$event->id, 'View', array('class' => 'btn primary')); ?>&nbsp;<?php echo Html::anchor('events/edit/'.$event->id, 'Edit', array('class' => 'btn')); ?>&nbsp;<?php echo Html::anchor('events/delete/'.$event->id, 'Delete', array('onclick' => "return confirm('Are you sure?')", 'class' => 'btn danger')); ?>		</td>
	</tr>
	<?php endforeach; ?></tbody></table>

<br />

<?php echo Html::anchor('events/create', 'Add new Event', array('class' => 'btn large primary')); ?>
