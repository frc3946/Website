<?php
	$links = array
	(
		'Home' => 'home',
		'Site Home' => './..' //move up one directory
	);
	
	if(!isset($_SESSION['uid'])) //if not logged in
	{
		$links['Login'] = 'login';
	}
	else //logged in
	{
		$links['Logout'] = 'logout';
	}
?>
