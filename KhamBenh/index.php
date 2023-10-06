<?php
require_once ('./config/config.php');
require_once KHAMBENH.'/controller/HomeController.php';

$homeController = new HomeController();
$homeController->index();

?>