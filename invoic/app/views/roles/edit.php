<h2 class="first">Editing Role</h2>

<?php echo render('roles/_form'); ?>
<br />
<p>
<?php echo Html::anchor('roles/view/'.$role->id, 'View', array('class'=>'btn primary')); ?>&nbsp;<?php echo Html::anchor('roles', 'Back', array('class'=>'btn')); ?></p>
