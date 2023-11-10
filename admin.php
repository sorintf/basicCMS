<?php
require_once 'config/config.php';
require_once 'classes/BaseFunctions.php';
require_once 'classes/AdminFunctions.php';

$adminFunctions = new AdminFunctions();

// var_dump($adminFunctions);

if ( $adminFunctions->admin_status<69 ) {
	header("location: /");
	exit();
}

if ( !empty($adminFunctions->view) ) {
	$view = $adminFunctions->view;
}

if ( !empty($adminFunctions->redirect) ) {
	header("location: ".$adminFunctions->redirect);
	exit();
}

$view_file = 'views/'.$view.'.php';

if (file_exists($view_file)) {
	include_once "$view_file";
}else {
	include_once 'views/a_index.php';
}