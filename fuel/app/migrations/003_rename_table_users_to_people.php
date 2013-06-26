<?php

namespace Fuel\Migrations;

class Rename_table_users_to_people
{
	public function up()
	{
		\DBUtil::rename_table('users', 'people');
	}

	public function down()
	{
		\DBUtil::rename_table('people', 'users');
	}
}