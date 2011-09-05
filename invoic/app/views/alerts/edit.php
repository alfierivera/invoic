<h2 class="first">Editing Alert</h2>

<?php echo render('alerts/_form'); ?>
<br />
<p>
<?php echo Html::anchor('alerts/view/'.$alert->id, 'View'); ?> |
<?php echo Html::anchor('alerts', 'Back'); ?></p>
