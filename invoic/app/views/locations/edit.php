<h2 class="first">Editing Location</h2>

<?php echo render('locations/_form'); ?>
<br />
<p>
<?php echo Html::anchor('locations/view/'.$location->id, 'View', array('class' => 'btn primary')); ?>&nbsp;<?php echo Html::anchor('locations', 'Back', array('class' => 'btn')); ?></p>
