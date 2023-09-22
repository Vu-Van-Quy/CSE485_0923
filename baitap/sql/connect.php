<!-- <?php
if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = 1;
}

//Buocws1: Truy cập SB server

$conn = mysql_connect(hostname 'localhost', username 'root', password 'abc', database 'cse');

if(!$conn){
    die("Không thể kết nối");
}

//Bước 2: Truy vấn
$sql = SELECT * FROM users ORDER BY  created_at DESC LIMT 10, 10*($page-1);
$result = mysql_query($conn,$sql);

//Bước 3:Lấy và xử lý dữ liệu

$users = mysql_fetch_all($result);
?> -->