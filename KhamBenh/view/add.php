
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THÊM DỮ LIỆU</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body> 

        <?php
            if(isset($_GET['error'])){
                echo "<p style='color:orange'>Vui lòng kiểm tra lại</p>";
            }
            if(isset($_GET['success'])){
                echo "<p style='color:green'>Thêm thành công</p>";
                // header("Location:/index.php");
            }
        
        ?>

        <h3 class="text-uppercase text-center text-success mt-5">Thêm Bệnh Nhân</h3>
        <div class="container-fluid d-flex justify-content-center align-items-center height-100vh mt-5">
        <form action="../controller/addController.php" method="post" style="width:700px;">
                <!-- <div class="mb-3">
                    <label  class="form-label text-success">ID</label>
                    <input type="text" class="form-control" name="id" placeholder="Nhập id sinh viên cần thêm">
                </div> -->
                <div class="mb-3">
                    <label  class="form-label">Tên Bệnh Nhân </label>
                    <input type="text" class="form-control"name="tenBenhNhan"  placeholder="Họ và tên">
                </div>
                <div class="mb-3">
                    <label  class="form-label">Ngày Khám </label>
                    <input type="text" class="form-control"name="ngayKham">
                </div>
                <div class="mb-3">
                    <label  class="form-label">Triệu Chứng</label>
                    <input type="text" class="form-control" name="trieuChung" placeholder="Triệu Chứng">
                </div>
                <div class="mb-3">
                    <label  class="form-label">ID Bác Sĩ</label>
                    <input type="text" class="form-control" name ="idBacSi"                          >
                </div>
                <button type="submit" class="btn btn-success" name="sbmSave">Save</button>
            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>