<?php

namespace Fuel\Migrations;

class Create_alerts {

	public function up()
	{
		\DBUtil::create_table('alerts', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
			'name' => array('constraint' => 255, 'type' => 'varchar'),
			'identifier' => array('constraint' => 255, 'type' => 'varchar'),
			'event_id' => array('constraint' => 11, 'type' => 'int'),
			'init' => array('constraint' => 11, 'type' => 'int'),
			'enabled' => array('constraint' => 11, 'type' => 'int'),
			'type' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int'),
			'updated_at' => array('constraint' => 11, 'type' => 'int'),
		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('alerts');
	}
}