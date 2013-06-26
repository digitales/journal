<?php

namespace Fuel\Migrations;

class Drop_entries
{
	public function up()
	{
		\DBUtil::drop_table('entries');
	}

	public function down()
	{
		\DBUtil::create_table('entries', array(
			'id' => array('type' => 'int unsigned', 'null' => true, 'auto_increment' => true),
			'name' => array('type' => 'varchar', 'null' => true, 'constraint' => 255),
			'slug' => array('type' => 'varchar', 'null' => true, 'constraint' => 255),
			'excerpt' => array('type' => 'text', 'null' => true),
			'content' => array('type' => 'text', 'null' => true),
			'published_at' => array('type' => 'int', 'null' => true, 'constraint' => 11),

		), array('id'));

	}
}