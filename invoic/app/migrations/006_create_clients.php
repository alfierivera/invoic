<?php

namespace Fuel\Migrations;

class Create_clients {

	public function up()
	{
		\DBUtil::create_table('clients', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
			'name' => array('type' => 'text'),
			'identifier' => array('constraint' => 255, 'type' => 'varchar'),
			'phone' => array('constraint' => 255, 'type' => 'varchar'),
			'fax' => array('constraint' => 255, 'type' => 'varchar'),
			'website' => array('constraint' => 255, 'type' => 'varchar'),
			'email' => array('constraint' => 255, 'type' => 'varchar'),
			'street_1' => array('constraint' => 255, 'type' => 'varchar'),
			'street_2' => array('constraint' => 255, 'type' => 'varchar'),
			'city' => array('constraint' => 255, 'type' => 'varchar'),
			'province' => array('constraint' => 255, 'type' => 'varchar'),
			'country' => array('constraint' => 255, 'type' => 'varchar'),
			'notes' => array('type' => 'text'),
			'priority' => array('constraint' => 11, 'type' => 'int'),
			'language' => array('constraint' => 255, 'type' => 'varchar'),
			'type' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int'),
			'updated_at' => array('constraint' => 11, 'type' => 'int'),
		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('clients');
	}
}