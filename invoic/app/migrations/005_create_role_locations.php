<?php

namespace Fuel\Migrations;

class Create_role_locations {

	public function up()
	{
		\DBUtil::create_table('role_locations', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
			'role_id' => array('constraint' => 11, 'type' => 'int'),
			'location_id' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int'),
			'updated_at' => array('constraint' => 11, 'type' => 'int'),
		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('role_locations');
	}
}
