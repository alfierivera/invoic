<?php

namespace Fuel\Migrations;

class Create_rights {

	public function up()
	{
		\DBUtil::create_table('rights', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
			'role_location_id' => array('constraint' => 11, 'type' => 'int'),
			'create' => array('constraint' => 11, 'type' => 'int'),
			'update' => array('constraint' => 11, 'type' => 'int'),
			'delete' => array('constraint' => 11, 'type' => 'int'),
			'read' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int'),
			'updated_at' => array('constraint' => 11, 'type' => 'int'),
		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('rights');
	}
}
