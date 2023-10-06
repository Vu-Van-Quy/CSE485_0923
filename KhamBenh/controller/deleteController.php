
<?php
require_once('../config/config.php');
require_once KHAMBENH.'/service/process_delete.php';
class DeleteController{
    public function index(){
        $deleteService = new delete();
        $deletes = $deleteService->deleteBN();
        include KHAMBENH.'/index.php';
    } 

    public function remotePatient() {
        // Kiểm tra xem đã gửi biểu mẫu thêm bệnh nhân chưa
        if (isset($_GET['id'])) {
            // Lấy thông tin từ biểu mẫu
            $id = $_GET['id'];
            // Gọi dịch vụ để thêm bệnh nhân    
            $deleteServices = new delete();
            $result = $deleteServices->remoteNewPatient($id);

            // Kiểm tra kết quả và thực hiện hành động tương ứng (chẳng hạn, hiển thị thông báo thành công hoặc lỗi)
            if ($result) {
                // Xoá bệnh nhân thành công
                header('Location:' . DOMAIN . '/index.php?success=delete');
            } else {
                // Xử lý lỗi hoặc hiển thị thông báo lỗi
                echo 'Xoá thất bại';
            }
        } else {
            echo 'Không có thông tin';
        }
    }
}

$deleteController = new DeleteController();
$deleteController->index();