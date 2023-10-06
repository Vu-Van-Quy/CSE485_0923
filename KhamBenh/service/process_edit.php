<?php
class edit{
    public function editBN($id, $tenBenhNhan, $ngayKham, $trieuChung, $idBacSi) {
        try {
            // Buoc 1: Ket noi DBServer
            $conn = new PDO("mysql:host=localhost;dbname=phongmach", "root", "");
            // Buoc 2: Thuc hien truy van
           
            if($conn) {
                $sql_update = "UPDATE benhnhan SET tenBenhNhan = :tenBenhNhan, ngayKham = :ngayKham, trieuChung = :trieuChung, idBacSi = :idBacSi WHERE id = :id";
                $stmt = $conn->prepare($sql_update);
                $stmt->bindParam(':id', $id);
                $stmt->bindParam(':fullname', $tenBenhNhan);
                $stmt->bindParam(':gender', $ngayKham);
                $stmt->bindParam(':dateOfBirth', $trieuChung);
                $stmt->bindParam(':address', $idBacSi);
                $stmt->execute();
                return true;
            }else{
                return false;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
}     



