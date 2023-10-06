e3we<?php
require_once('../config/config.php');
require_once KHAMBENH.'/service/process_edit.php';
class EditController{
    public function editBN() {
        // Kiểm tra xem đã gửi biểu mẫu sửa bệnh nhân chưa
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Lấy thông tin từ biểu mẫu
            $id = $_POST['id'];
            $tenBenhNhan = $_POST['tenBenhNhan'];
            $ngayKham = $_POST['ngayKham'];
            $trieuChung = $_POST['trieuChung'];
            $idBacSi = $_POST['idBacSi'];
            $trieuChung = date('Y-m-d H:i:s', strtotime($trieuChung));
    
            // Gọi dịch vụ để sửa bệnh nhân     
            $bnServices = new edit();
            $result = $bnServices->editBN($id, $tenBenhNhan, $ngayKham, $trieuChung, $idBacSi);
    
            // Kiểm tra kết quả và thực hiện hành động tương ứng (chẳng hạn, hiển thị thông báo thành công hoặc lỗi)
            if ($result) {
                // Sửa bệnh nhân thành công
                header('Location:' . DOMAIN . '/index.php?success=edit');
                //echo "Sửa thành công";
            } else {
                // Xử lý lỗi hoặc hiển thị thông báo lỗi
                echo 'Sửa thất bại';
            }
        }
    }
}

$bnController = new EditController();
$bnController->index();