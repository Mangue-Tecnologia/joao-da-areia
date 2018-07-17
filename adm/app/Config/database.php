<?php

class DATABASE_CONFIG {

	public $default = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'root',
		'password' => '',
		'database' => 'joao-da-areia',
		'prefix' => '',
		'encoding' => 'utf8'
	);

	public $test = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'teste',
		'login' => 'user',
		'password' => '',
		'database' => 'test_database_name',
		'prefix' => '',
		//'encoding' => 'utf8',
	);
}
