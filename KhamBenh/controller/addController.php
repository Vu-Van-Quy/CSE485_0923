<?php
require_once('../config/config.php');
require_once KHAMBENH.'/service/process_add.php';
class AddController{
    public function index(){
        $bnService = new add();
        $bns = $bnService->addBN();
        include KHAMBENH.'/index.php';
    } 
}

$bnController = new AddController();
$bnController->index();