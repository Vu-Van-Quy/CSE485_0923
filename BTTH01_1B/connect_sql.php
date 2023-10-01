<?php
// Thông tin kết nối cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$database = "ql_nhac";

// $conn = mysqli_connect($servername,$username,$password,$database);
// if(!$conn){
//     echo "Không thành công";
// }else{
//     echo "kết nối thành công";
// }

// Kết nối tới cơ sở dữ liệu
$conn = new mysqli($servername, $username, $password, $database);

// Kiểm tra kết nối
// if ($conn->connect_error) {
//     die("Kết nối thất bại: " . $conn->connect_error);
// }else{
//     die("Thành công");
// }

// Thực hiện truy vấn SQL đơn giản
// $sql = "SELECT * FROM baiviet";
// $result = $conn->query($sql);

// // Kiểm tra và xử lý kết quả
// if ($result->num_rows > 0) {
//     while ($row = $result->fetch_assoc()) {
//         echo "mã bài viết: " . $row["ma_bviet"] . ", Tiêu đề " . $row["tieude"] . "<br>";
//     }
// } else {
//     echo "Không có dữ liệu.";
// }

// Đóng kết nối
$conn->close();
?>