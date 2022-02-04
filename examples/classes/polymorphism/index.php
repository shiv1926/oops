<?php
include_once('userprofile.php');
include_once('db-logger.php');
include_once('email-logger.php');
include_once('file-logger.php');
include_once('logger-interface.php');

$db_logger = new db_logger();

$userprofile = new userprofile($db_logger);
$userprofile->create_user();
?>