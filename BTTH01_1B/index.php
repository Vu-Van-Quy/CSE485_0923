

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body>
      <?php
        include "connect_sql.php";
      ?>
    <div class="container-fluid ">
        <div class="row border border-info">
          <?php
            include 'layout/Trangchu.php'
          ?>

            <div class="row">
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="./img/main.PNG" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="./img/logo.PNG" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="./img/main.PNG" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>


            <!-- <div class="row"> -->
              <div class="footer mt-3">
                      <div class="row">
                          <div class="col-md-12">
                              <div class="footer_wrap">
                                  <h3 class="footer_title text-center" style = "color: blue">TOP BÀI HÁT YÊU THÍCH</h3>
                                  <div class="footer_body d-flex text-center mt-2">
                                      <div class="footer_main me-2" style = "border: 1px solid #ccc; border-radius: 8px">
                                          <img src="./img/chuyen-tinh-la-gio.PNG" alt="" class = "footer_img" style = "width:100%">
                                          <span class="footer_text mt-5">Cây, lá và gió</span>
                                      </div>
                                      <div class="footer_main me-2" style = "border: 1px solid #ccc; border-radius: 8px">
                                          <img src="./img/chuyen-tinh-la-gio.PNG" alt="" class = "footer_img" style = "width:100%">
                                          <span class="footer_text mt-5">Cuộc sống mến thương</span>
                                      </div>
                                      <div class="footer_main me-2" style = "border: 1px solid #ccc; border-radius: 8px">
                                          <img src="./img/chuyen-tinh-la-gio.PNG" alt="" class = "footer_img" style = "width:100%">
                                          <span class="footer_text mt-5">Lòng mẹ</span>
                                      </div>
                                      <div class="footer_main me-2" style = "border: 1px solid #ccc; border-radius: 8px">
                                          <img src="./img/chuyen-tinh-la-gio.PNG" alt="" class = "footer_img" style = "width:100%">
                                          <span class="footer_text mt-5">Phôi pha</span>
                                      </div>
                                      <div class="footer_main me-2" style = "border: 1px solid #ccc; border-radius: 8px">
                                          <img src="./img/chuyen-tinh-la-gio.PNG" alt="" class = "footer_img" style = "width:100%">
                                          <span class="footer_text mt-5">Nơi tình yêu bắt đầu</span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- <hr>
                      <h4 class="text-center">TLU'S MUSIC GARDEN</h4> -->
              </div>
            </div>
            
           

            <div class="row"> 
                <div class="footer h3 text-center pt-5"><hr>
                    TLU'S MUSIC GARDEN
                </div>
            </div>
            
        </div>
    </div>
</body>
</html>