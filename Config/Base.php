<?php

namespace Config;

class Base
{
	public static $app = [
		'timezone'        => 'UTC',
		'base_uri'        => 'https://your_base_domain.org',
		'root_controller' => 'Intro'
	];

	public static $session = [
		'timeout'           => 86400,
		'regeneration_time' => 3600,
		'key'               => 'bacon!',
		'session_handler'   => 'files'
	];

	public static $logging = [
		'level'  => 'info',
		'debug'  => 'screen',
		'driver' => 'syslog'
	];

	public static $caching = [
		'twig' => true
	];

	public static $auth = [
		'key'               => 'INSERT_GENERATED_KEY_HERE',
		'cookie_domain'     => 'https://your_base_domain.org',
		'timeout'           => 864000,
		'regeneration_time' => 3600
	];
}

?>
