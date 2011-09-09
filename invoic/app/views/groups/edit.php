<h2 class="first">Editing Group</h2>

<?php echo render('groups/_form'); ?>
<br />
<p>
<?php echo Html::anchor('groups/view/'.$group->id, 'View'); ?> |
<?php echo Html::anchor('groups', 'Back'); ?></p>
