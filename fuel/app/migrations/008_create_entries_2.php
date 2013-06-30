<?php

namespace Fuel\Migrations;

class Create_entries_2
{
	public function up()
	{
		\DBUtil::create_table('entries', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'name' => array('constraint' => 255, 'type' => 'varchar'),
			'slug' => array('constraint' => 255, 'type' => 'varchar'),
			'excerpt' => array('type' => 'text', 'null' => true),
			'content' => array('type' => 'text', 'null' => true),
			'published_at' => array('type' => 'text'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('entries');
	}
}