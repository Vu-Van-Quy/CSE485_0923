<?php
class add{
    public function addBN(){
        if(isset($_POST['sbmSave'])){
            // $id = $_POST['id'];
            $tenBenhNhan = $_POST['tenBenhNhan'];
            $ngayKham = $_POST['ngayKham'];
            $trieuChung = $_POST['trieuChung'];
            $idBacSi = $_POST['idBacSi'];
            try{
                //Buoc 1: Ket noi DBServer
                $conn = new PDO("mysql:host=localhost;dbname=phongmach", "root", "");

                if(empty($tenBenhNhan) || empty($ngayKham ) || empty($trieuChung)  || empty($idBacSi)){
                    echo "nhap du thong tin";
                }else{
                    $sql_insert = "INSERT INTO benhnhan (tenBenhNhan,ngayKham,trieuChung,idBacSi) VALUES('$tenBenhNhan','$ngayKham','$trieuChung','$idBacSi')";
                    $stmt = $conn->prepare($sql_insert);
                    $stmt->execute();
                    if($stmt->rowCount() > 0){
                        header("Location:".DOMAIN." /index.php");
                    }
                    // }
                }
            }catch(PDOException $e){
                    echo $e->getMessage();
            }
        }
    }
}     



