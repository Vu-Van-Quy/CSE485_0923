<?php
require_once ('./config/config.php');
require_once KHAMBENH.'/service/benhnhanService.php';
class HomeController{
    public function index(){
        //Gói dữ liệu GuestService
        $bnService = new BenhNhanService();
        $bns = $bnService->getAllBenhNhan();
        //Render ra Hompage
        include KHAMBENH.'/view/index.php';
    } 
}