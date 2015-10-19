<?php

/**
*	Config info class
*
*	@version 2.0
*	@author  Nick Sheffield
*
*/

class Config{

	# Database connection credentials.
	# Hostname should almost always be set to 'localhost'.
	public static $database = [
		'hostname' => 'localhost',
		'username' => 'tomcaige_admin',
		'password' => 'admin1234',
		'database' => 'tomcaige_hike'
	];
	
	
	# This variable allows Auth to autoload the current user.
	# Put the name of the table that your users are stored in
	# or leave it blank to disable that feature.
	public static $auth_table = 'users';

	// public static $cart_table = 'products';
	
	
	# This variable is used to separate your Authentication 
	# and Cart data in the session, per site.
	public static $sitename = 'hike';

}

