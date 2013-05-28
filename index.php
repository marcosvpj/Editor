<?php
/*
	OneFileFramework v1.06 - http://www.pmedia.no/off/
	Håvard Pedersen ( havard {at} flashmail.com ) 2007
	License:  Use at own risk, use at own wims, use however you'd like.
						No rights reserved, implied or given. :)
*/

// Configuration starts here
$cfg_defaultwireframe = 'index';              	// Default wireframe to use for pages
$cfg_defaultpage = 'index';                   	// Default page to load if none specified, this is your frontpage
$cfg_error404 = 'index';                      	// View to serve on missing views or illegal pagenames
$t = $cfg_defaulttitle = 'Editor';      		 		// Site title

// --- Do NOT edit below this line unless you know what you are doing! ---

	// Get selected pagename
	$p = $cfg_defaultpage;
	if (isset($_GET['p']))
		if (preg_match('|^[0-9a-zA-Z\/]*\z|',$_GET['p']))
			$p = $_GET['p'];
		else
			$p = $cfg_error404;

	$w = $cfg_defaultwireframe; // Set default wireframe

	// Import global.php if it exists
	if (is_file('global.php'))
		include 'global.php';

	// Run controller if it exists
	if (is_file("controllers/$p.php"))
		include "controllers/$p.php";

	// Run wireframe
	if (!is_file("views/$p.php"))
		$p = $cfg_error404;
	if (!is_file("wireframes/$w.php"))
		die("Missing wireframe");
	include "wireframes/$w.php";
