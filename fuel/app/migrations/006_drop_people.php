<?php

namespace Fuel\Migrations;

class Drop_people
{
	public function up()
	{
		\DBUtil::drop_table('people');
	}

	public function down()
	{
		\DBUtil::create_table('people', array(
			'id' => array('type' => 'int unsigned', 'null' => true, 'auto_increment' => true),
			'name' => array('type' => 'text', 'null' => true),

		), array('id'));

	}
}