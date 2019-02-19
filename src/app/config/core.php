<?php

	return [

		'site_title' => 'Karel Zavadil - Software Engineer',
		'site_description' => 'Karel Zavadil, Software Engineer',
		'site_keywords' => 'Karel Zavadil, Software Engineer, HTML5, CSS3, PHP 7, Java, Node.js',
		'site_author' => 'Karel Zavadil',

		// will be used to create all link urls, no trailing slash
		'base_url' => 'http://localhost/zavadil.eu/src/public',

		// if turned on, display message of unrecoverable error
		// turn this off in production!
		'debug_mode' => true,

		// this is application version
		// should be identical with GIT branch name
		'app_version' => 1,

		// required zEngine major version (integer value)
		'require_z_version' => 4,

		// this is minimum required zEngine version
		'minimum_z_version' => 4.1,

		// modules that are enabled by default
		'modules' => ['resources', 'db', 'i18n', 'auth', 'admin'],

		// redirect here in case of unrecoverable error
		// only applies when debug_mode is off
		'error_page' => 'error.html',

		'includes' => [
			['style.css?v=1', false, 'link_css', 'head']
		]

	];
