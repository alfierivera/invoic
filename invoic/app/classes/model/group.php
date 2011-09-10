<?php

class Model_Group extends Orm\Model {
	protected static $_has_one = array('role');
	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array('before_insert'),
		'Orm\Observer_UpdatedAt' => array('before_save'),
	);
}

/* End of file group.php */
