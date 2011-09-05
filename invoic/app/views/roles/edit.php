<h2 class="first">Editing Role</h2>

<?php echo render('roles/_form'); ?>
<br />
<p>
<?php echo Html::anchor('roles/view/'.$role->id, 'View'); ?> |
<?php echo Html::anchor('roles', 'Back'); ?></p>
