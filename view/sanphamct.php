<div id="content">
    <div class="page-heading">
        <div class="text-heading">
            <p style="margin-top: 400px;">Trang chủ</p>
        </div>
        <div class="img-heading">
            <img src="/assets/img/Opera Snapshot_2023-02-11_163927_phuclong.com.vn.png" alt="">
        </div>
        <div class="nav-content">
            <ul class="subnav-content">
                <li class="li-one"><a href="./tra.html">Thức uống</a></li>
                <li><a href="./snack.html">Snacks</a></li>
                <li><a href="./bakery.html">BAKERY</a></li>
            </ul>
        </div>
    </div>
</div>
<div id="big-container">
    <div class="container">
        <div class="left">
            <div class="box">
                <?php extract($onesp); ?>
                <div class="box-title"><?= $name ?></div>
                <div class="box-content">
                    <?php

                    $img = $img_path . $img;
                    echo '<img src="' . $img . ' "><br>';
                    echo $mota;
                    ?>
                </div>
            </div>
            <div class="box">
                <div class="box-title">Bình luận</div>
                <div class="box-content"></div>
            </div>
            <div class="box">
                <div class="box-title">Sản phẩm cùng loại</div>
                <div class="box-content"></div>
            </div>
        </div>


    </div>

    <?php include "boxright.php"; ?>