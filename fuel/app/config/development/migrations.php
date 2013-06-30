<?php
return array(
	'version' => 
	array(
		'app' => 
		array(
			'default' => 
			array(
				0 => '001_create_entries',
				1 => '002_create_users',
				2 => '003_rename_table_users_to_people',
				3 => '004_add_profile_to_people',
				4 => '005_delete_profile_from_people',
				5 => '006_drop_people',
				6 => '007_drop_entries',
				7 => '008_create_entries_2',
				8 => '009_create_categories',
				9 => '010_create_category_entries',
			),
		),
		'module' => 
		array(
		),
		'package' => 
		array(
			'auth' => 
			array(
				0 => '001_auth_create_usertables',
				1 => '002_auth_create_grouptables',
				2 => '003_auth_create_roletables',
				3 => '004_auth_create_permissiontables',
				4 => '005_auth_create_authdefaults',
				5 => '006_auth_add_authactions',
				6 => '007_auth_add_permissionsfilter',
				7 => '008_auth_create_providers',
				8 => '009_auth_create_oauth2tables',
			),
		),
	),
	'folder' => 'migrations/',
	'table' => 'migration',
);
