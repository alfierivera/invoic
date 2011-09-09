<h2 class="first">Editing Alert</h2>

<?php echo render('alerts/_form'); ?>
<p>
<?php echo Html::anchor('alerts/view/'.$alert->id, 'View', array('class'=>'btn')); ?>&nbsp;<?php echo Html::anchor('alerts', 'Back', array('class'=>'btn')); ?></p>
