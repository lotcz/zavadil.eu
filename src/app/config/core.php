<?php

	return [

		'site_title' => 'zEngine sample app',

		'site_description' => 'Basic web app made with zEngine.',

		'site_author' => 'Karel Zavadil',

		// will be used to create all link urls, no trailing slash
		'base_url' => 'http://localhost/zavadil.eu/src/public',

		// if turned on, display message of unrecoverable error
		// turn this off in production!
		'debug_mode' => true,

		// this is application version
		// should be identical with GIT branch name
		'app_version' => 0.1,

		// required zEngine major version (integer value)
		'require_z_version' => 4,

		// this is minimum required zEngine version
		'minimum_z_version' => 4.1,

		// modules that are enabled by default
		'modules' => ['resources', 'db', 'i18n', 'auth', 'admin'],

		// redirect here in case of unrecoverable error
		// only applies when debug_mode is off
		'error_page' => 'error.html'

	];
