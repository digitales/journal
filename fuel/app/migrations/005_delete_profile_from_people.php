<?php

namespace Fuel\Migrations;

class Delete_profile_from_people
{
	public function up()
	{
		\DBUtil::drop_fields('people', array(
			'profile'

		));
	}

	public function down()
	{
		\DBUtil::add_fields('people', array(
			'profile' => array('type' => 'text'),

		));
	}
}