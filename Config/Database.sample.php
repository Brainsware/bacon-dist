<?php

namespace Config;

class Database
{
	# This is the main database configuration
	public static $main = array (
		'server'   => '', # Enter your server host here
		'name'     => '', # The name of your database
		'type'     => '', # Anything your PDO Installation supports. (http://www.php.net/manual/en/pdo.drivers.php)
		'username' => '', # The username you want to connect to your database with
		'password' => '', # The password.
		'prefix'   => '',
		'persist'  => false
		);
}

?>