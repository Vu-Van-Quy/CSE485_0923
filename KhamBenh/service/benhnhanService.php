<?php

require_once('./config/config.php');
require_once KHAMBENH.'/model/BenhNhan.php';
class BenhNhanService{
    public function getAllBenhNhan(){
        //Kết nối database

        try{
            $conn = new PDO('mysql:host=localhost;dbname=phongmach', 'root', '');
            $sql = "SELECT * FROM benhnhan";
            $stmt= $conn->query($sql);

            $bns = [];
            while($row = $stmt->fetch()){
                $bn = new SinhVien ($row['id'],$row['tenBenhNhan'],$row['ngayKham'], $row['trieuChung'], $row['idBacSi']);
                $bns[] = $bn;
            }
            return $bns;

        }catch(PDOException $e){
            // echo $e->getMessage();
            return $bns = [];
        }
    }

    // public function remoteNewPatient($id) {
    //     try {
    //         // Buoc 1: Ket noi DBServer
    //         $conn = new PDO("mysql:host=localhost;dbname=hms", "root", "");
    //         // Buoc 2: Thuc hien truy van
           
    //         if($conn) {
    //             $sql_delete = "DELETE FROM sinhvien WHERE id = :id";
    //             $stmt = $conn->prepare($sql_delete);
    //             $stmt->bindParam(':id', $id);
    //             $stmt->execute();
    //             return true;
    //         }else{
    //             return false;
    //         }
    //     } catch (PDOException $e) {
    //         echo $e->getMessage();
    //         return false;
    //     }
    // }
}
