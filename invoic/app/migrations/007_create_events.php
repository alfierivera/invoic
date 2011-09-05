<?php

namespace Fuel\Migrations;

class Create_events {

	public function up()
	{
		\DBUtil::create_table('events', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
			'name' => array('type' => 'text'),
			'identifier' => array('constraint' => 255, 'type' => 'varchar'),
			'starts' => array('constraint' => 11, 'type' => 'int'),
			'ends' => array('constraint' => 11, 'type' => 'int'),
			'repeat' => array('constraint' => 11, 'type' => 'int'),
			'reference' => array('constraint' => 255, 'type' => 'varchar'),
			'ref_id' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int'),
			'updated_at' => array('constraint' => 11, 'type' => 'int'),
		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('events');
	}
}
