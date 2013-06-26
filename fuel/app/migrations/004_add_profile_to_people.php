<?php

namespace Fuel\Migrations;

class Add_profile_to_people
{
	public function up()
	{
		\DBUtil::add_fields('people', array(
			'profile' => array('type' => 'text'),

		));
	}

	public function down()
	{
		\DBUtil::drop_fields('people', array(
			'profile'

		));
	}
}