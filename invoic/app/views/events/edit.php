<h2 class="first">Editing Event</h2>

<?php echo render('events/_form'); ?>
<br />
<p>
<?php echo Html::anchor('events/view/'.$event->id, 'View', array('class'=>'btn')); ?>&nbsp;<?php echo Html::anchor('events', 'Back', array('class'=>'btn')); ?></p>
