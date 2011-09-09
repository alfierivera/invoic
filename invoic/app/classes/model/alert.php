<?php

class Model_Alert extends Orm\Model {
	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array('before_insert'),
		'Orm\Observer_UpdatedAt' => array('before_save'),
	);
	
	protected static $_belongs_to = array(
		'event' => array(
			'key_from' => 'event_id',
			'key_to' => 'id',
			'cascade_save' => true,
			'cascade_delete' => false,
		),
	);
}

/* End of file alert.php */
