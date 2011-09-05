<h2 class="first">Editing Event</h2>

<?php echo render('events/_form'); ?>
<br />
<p>
<?php echo Html::anchor('events/view/'.$event->id, 'View'); ?> |
<?php echo Html::anchor('events', 'Back'); ?></p>
