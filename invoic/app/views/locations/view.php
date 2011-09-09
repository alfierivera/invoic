<p>
	<strong>Name:</strong>
	<?php echo $location->name; ?></p>
<p>
	<strong>Uri:</strong>
	<?php echo $location->uri; ?></p>

<?php echo Html::anchor('locations/edit/'.$location->id, 'Edit'); ?> | 
<?php echo Html::anchor('locations', 'Back'); ?>