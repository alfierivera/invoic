<h2 class="first">Editing Group</h2>

<?php echo render('groups/_form'); ?>
<br />
<p>
<?php echo Html::anchor('groups/view/'.$group->id, 'View', array('class' => 'btn primary')); ?>&nbsp;<?php echo Html::anchor('groups', 'Back', array('class' => 'btn')); ?></p>
