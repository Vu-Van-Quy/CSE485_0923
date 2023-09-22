

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./fontawesome-free-6.4.0-web/fontawesome-free-6.4.0-web/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./a.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Phần menu  -->
            <div class="col-md-2 menu">
                <div class="logo d-flex justify-content-center">
                    <img src="./W3.png" alt="">
                    <img src="./cms.png" alt="">
                </div>
                
    
                <div class="navigation">
                    <div class="navbar align-items-center ">
                        <div class="nav-item">
                            <ul class="nav-item-text hover">
                                <li><a href=""><i class="fa-solid fa-user"></i></a>Usser<span class="modules">Modules</span></li>
                                <li><a href=""><i class="fa-solid fa-box"></i></a>CMS
                                    <span class="modules">Modules</span></li>
                                <li><a href=""><i class="fa-solid fa-gear"></i></a>Config
                                    <span class="modules">Modules</span></li>
                                <li><a href=""><i class="fa-solid fa-table-cells-large"></i></a>Dashbroad</li>
                                <li><a href=""><i class="fa-solid fa-book-open"></i></a>Courses</li>
                                <li><a href=""><i class="fa-solid fa-users"></i></a>Intructor</li>
                                <li><a href=""><i class="fa-solid fa-circle-info"></i></a>Apps</li>
                                <li><a href=""><i class="fa-solid fa-chart-pie"></i></a>Charts</li>
                                <li><a href=""><i class="fa-solid fa-star"></i></a>Bootstrap</li>
                                <li><a href=""><i class="fa-solid fa-heart"></i></a>Plugins</li>
                                <li><a href=""><i class="fa-solid fa-gears"></i></a>Widget</li>
                                <li><a href=""><i class="fa-solid fa-file"></i></a>Forms</li>
                                <li><a href=""><i class="fa-solid fa-file"></i></a>Table</li>
                                <li><a href=""><i class="fa-solid fa-file-export"></i></a>Pages</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            
            <!-- Phần header -->
            <div class="col-md-8 main">
                <div class="row header_users">
                    <div class="header justify-content-between d-flex">        
                        <div class="left d-flex">
                            <i class="h3 fa-regular fa-bars"></i>
                            <p>User</p>
                        </div>
                        <div class="right">
                            <div class="input-group search-form">
                                <span class="input-group-text box-search"><i class="bi bi-search"></i></span>
                                <input type="text" class="form-control" placeholder="Search here...">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- phan filter -->
                <!-- <div class="row pb-3">
                    <div class=" content-filter bg-light">
                        <div class="main-filter">
                            <h3 class=" p-3">Filter <span class="drop-up"><i class="fa-solid fa-circle-up text-danger"></i></span></h3>
                        </div>

                        <form class="row g-5 px-4">
                            <div class="col-md-9 ">
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" id="validationDefault01" placeholder="Email" required>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" id="validationDefault02" placeholder="Mobile" required>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="validationDefaultUsername" placeholder=" Select Group" required>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <button type="button" class="btn btn-danger btn-md"><i class="fa fa-search"></i> Filter</button>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="button" class="btn btn-danger btn-md btn-clear">Clear</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> -->
                    
                <!-- Phan bang du lieu -->
                <div class="row bg-light">
                    <div class="user d-flex justify-content-between">
                        <div class="text">
                            <p>User</p>
                        </div>
                        <div class="add_dele_user d-flex">
                            <a href=""><input type="button" class="delete" value="DELETE"></a>
                            <a class="add" href=""><p>ADD USER</p><i class="fa-solid fa-plus"></i></a> 
                        </div>
                    </div>

                    <table class="table pe-4">
                        <thead>
                            <tr>
                                <th><input class="c" type="checkbox" id="checkboxNoLabel" ></th>
                                <th scope="col">Full Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Groups</th>
                                <th scope="col">Mobile</th>
                                <th scope="col">Date Of Birth</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                            <?php 
                                for($i=0 ; $i<7; $i++){
                                    echo'
                                    <tr>
                                        <th>
                                        <input class="c" type="checkbox" id="checkboxNoLabel">
                                        </th>
                                        <td>Quý</td>
                                        <td>quyvu@gmail.com</d>
                                        <td>Male</d>
                                        <td>Manage</td>
                                        <td>12345</td>
                                        <td>09/10/2003</td>
                                        <td>
                                            <div class="circle">
                                                <i class="bi bi-circle-fill" style="color: green;"></i>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="sweetalert">
                                                <div class="d-flex">
                                                    <a href="" class="btn btn-secondary"><i class="bi bi-shield-shaded"></i></a>
                                                    <a href="" class="btn btn-primary"><i class="bi bi-pencil"></i></a>
                                                    <a href="" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>';
                                }
                            ?>     
                        </thead>
                    </table>
                </div>
                <!-- phan chuyen trang -->
                <nav aria-label="Page navigation example">
                    <ul class="pagination pt-2 float-right">
                        <li class="page-item"><a class="page-link" href="#"><</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">></a></li>
                    </ul>
                </nav>
            
            <!-- phan cai dat -->
            <div class="col-md-2 setting">   
                <div><i class="bi bi-gear-fill icon-right"></i></div>
                <div><i class="bi bi-envelope-fill icon-right"></i></div>
                <div><i class="bi bi-bell-fill icon-right"></i></div>
                <div class="nation"><img src="./img/eng.png" class="nation-eng"><br><span class="text-eng">eng</span></div>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-xVjVeu7gF75w1lgE+Bc2wK7qio4D4jqru/YBNtgFakxxJFxF0bhxyzyJw05j0fne" crossorigin="anonymous"></script>
            </div>
        </div>
    </div> 
</body>
</html>


