<?php echo Form::open(); ?>
	<p>
		<?php echo Form::label('Name', 'name'); ?>
		<div class="input">
<?php echo Form::input('name', Input::post('name', isset($location) ? $location->name : '')); ?>
</div>
	</p>
	<p>
		<?php echo Form::label('Uri', 'uri'); ?>
		<div class="input">
<?php echo Form::input('uri', Input::post('uri', isset($location) ? $location->uri : '')); ?>
</div>
	</p>

	<div class="actions">
		<?php echo Form::submit(array('class' => 'btn primary large')); ?>	</div>

<?php echo Form::close(); ?>
