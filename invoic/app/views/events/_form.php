<?php echo Form::open(); ?>
	<p>
		<?php echo Form::label('Name', 'name'); ?>
<?php echo Form::textarea('name', Input::post('name', isset($event) ? $event->name : ''), array('cols' => 60, 'rows' => 8)); ?>
	</p>
	<p>
		<?php echo Form::label('Identifier', 'identifier'); ?>
<?php echo Form::input('identifier', Input::post('identifier', isset($event) ? $event->identifier : '')); ?>
	</p>
	<p>
		<?php echo Form::label('Starts', 'starts'); ?>
<?php echo Form::input('starts', Input::post('starts', isset($event) ? $event->starts : '')); ?>
	</p>
	<p>
		<?php echo Form::label('Ends', 'ends'); ?>
<?php echo Form::input('ends', Input::post('ends', isset($event) ? $event->ends : '')); ?>
	</p>
	<p>
		<?php echo Form::label('Repeat', 'repeat'); ?>
<?php echo Form::input('repeat', Input::post('repeat', isset($event) ? $event->repeat : '')); ?>
	</p>
	
	<p>
		<?php echo Form::label('Reference', 'reference'); ?>
<?php echo Form::input('repeat', Input::post('reference', isset($event) ? $event->reference : '')); ?>
	</p>
	
	<p>
		<?php echo Form::label('Reference ID', 'ref_id'); ?>
<?php echo Form::input('repeat', Input::post('ref_id', isset($event) ? $event->ref_id : '')); ?>
	</p>

	<div class="actions">
		<?php echo Form::submit(); ?>	</div>

<?php echo Form::close(); ?>
