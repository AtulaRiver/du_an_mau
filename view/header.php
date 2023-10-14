<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dự án mẫu</title>
    <link rel="stylesheet" href="assets/css/tra.css">
    <link rel="stylesheet" href="assets/css/box.css">
    <link rel="stylesheet" href="assets/font/themify-icons/themify-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="https://phuclong.com.vn/images/logo.png">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>
    <div id="main">
        <!-- img header -->
        <div id="header-img">
            <a href="home.html"><img src="https://phuclong.com.vn/images/logo_2.png" alt=""></a>
        </div>

        <div id="header">
            <!-- Begin: Nav -->
            <ul id="nav">
                <li><a style="color: rgb(12, 113, 61);" href="index.php">Trang chủ</a></li>
                <li>
                    <a href="index.php">Thức uống</a>
                    <ul class="subnav" style="min-width: 200px;">
                        <li><a href="./snack.html">Snacks</a></li>
                        <li><a href="./bakery.html">Bakery</a></li>
                    </ul>
                </li>
                <li>
                    <a href="index.php?act=gioithieu">Giới thiệu</a>

                </li>
                <li>
                    <a href="index.php?act=lienhe">Liên hệ</a>

                </li>

                <li><a href="index.php?act=gopy">Góp ý</a></li>
                <li><a href="index.php?act=hoidap">Hỏi đáp</a></li>
                <li class="search-btn">
                    <i class="search-icon ti-search"></i>
                </li>
            </ul>
            <!-- End: Nav -->
        </div>

        <div class="container" style="margin-top: 100px;">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="4000">
                        <img src="https://phuclong.com.vn/uploads/banner/693431e1a25871-banner_1920576.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="4000">
                        <img src="https://phuclong.com.vn/uploads/banner/7d93093c2ac9d6-dr_strawberryinlove_1920576old.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="4000">
                        <img src="https://phuclong.com.vn/uploads/category/abd26ff8f6eff7-gdn125kosmanthus_1920576old.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>