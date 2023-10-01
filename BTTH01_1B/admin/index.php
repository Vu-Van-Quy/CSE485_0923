
<?php 
    include "../connect_sql.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/index.css">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <nav class="navbar navbar-expand-lg bg-body-tertiary ">
            <div class="collapse navbar-collapse " id="navbarNavDropdown">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link "  href="#">Administration</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active"href="#">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Trang ngoài</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">Thể loại</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tắc giả</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Bài viết</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container">
                  <button type="button" class="btn btn-success">Success</button>
        </div>
  
    
        <div class="container overflow-hidden text-center">
            <div class="row gy-3 m-0">
                <div class="col-3">
                    <div class="p-3">Người dùng
                        <div class="row justify-content-center">
                            110
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="p-3">Thể loại
                        <div class="row justify-content-center">
                            10
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="p-3">Tác giả
                        <div class="row justify-content-center">
                           20
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="p-3">Bài viết
                        <div class="row justify-content-center">
                           110
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row p-5">
            <hr>
            <div class="footer h3 text-center">
                TLU'S MUSIC GARDEN
            </div>
        </div>
    </div>
</div>
        
</body>
</html>