<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Start Session
session_start();


// Include Config
require('config.php');

require('classes/Messages.php');
require('classes/Bootstrap.php');
require('classes/Controller.php');
require('classes/Model.php');

require('controllers/home.php');
require('controllers/meals.php');
require('controllers/admin.php');
require('controllers/pages.php');
require('controllers/feature.php');

require('models/home.php');
require('models/meals.php');
require('models/admin.php');
require('models/feature.php');


$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();
if($controller){
	$controller->executeAction();
}
?>