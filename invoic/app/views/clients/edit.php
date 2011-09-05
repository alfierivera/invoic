<h2 class="first">Editing Client</h2>

<?php echo render('clients/_form'); ?>
<br />
<p>
<?php echo Html::anchor('clients/view/'.$client->id, 'View'); ?> |
<?php echo Html::anchor('clients', 'Back'); ?></p>
