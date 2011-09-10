<h2 class="first">Editing Right</h2>

<?php echo render('rights/_form'); ?>
<br />
<p>
<?php echo Html::anchor('rights/view/'.$right->id, 'View', array('class' => 'btn primary')); ?>&nbsp;<?php echo Html::anchor('rights', 'Back', array('class' => 'btn')); ?></p>
