<div id="content">
    <div class="page-heading">
        <div class="text-heading">
            <p style="margin-top: 400px;">Chi tiết sản phẩm</p>
        </div>
        <div class="img-heading">
 <img src="https://phuclong.com.vn/images/icon_tealeaves.png" alt="">
        </div>
        <div class="nav-content">
            <ul class="subnav-content">
            </ul>
        </div>
    </div>
</div>
<div id="big-container" >
    <div class="container">
        <div>
        <div class="left mt-5">
            <div class="card mb-5" style="width: 70%;">
                <?php extract($onesp); ?>
                <h5 class="card-header" style="background-color:  rgb(12, 113, 61); color: #fff"><?= $name ?></h5>
                <div class="card-body box-content">
                    <?php
                    $img = $img_path . $img;
                    echo '<img src="' . $img . ' "><br>';
                    echo '<b class="text-danger">Giá: ' . number_format($price, 0, ',', '.') . 'đ</b> <br><br>';
                    echo 'Mô tả: ' . $mota . '<br><br>';
                    echo '
                    <form action="index.php?act=addtocart" method="post">
                        <input type="hidden" name="id" value="' . $id . '">
                        <input type="hidden" name="name" value="' . $name . '">
                        <input type="hidden" name="img" value="' . $img . '">
                        <input type="hidden" name="price" value="' . $price . '">
                        <input style=" font-size: 16px" class="btn btn-success" type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                    </form>
                    ';
                    ?>
                </div>
            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
            <script>
                $(document).ready(function() {
                    $("#binhluan").load("view/binhluan/binhluanform.php", {
                        idpro: <?= $id ?>
                    });
                });
            </script>
            <div id="binhluan">

            </div>
            <div class="card" style="width: 70%; margin-bottom: 880px;">
                <h5 class="card-header" style="background-color:  rgb(12, 113, 61); color: #fff">Sản phẩm cùng loại</h5>
                <div class="card-body box-content">
                    <?php foreach ($sp_cungloai as $sp_cungloai) : ?>
                        <?php
                        extract($sp_cungloai);
                        $linksp = "index.php?act=sanphamct&idsp=" . $id;
                        ?>
                        <li><a href="<?= $linksp ?>"><?= $name ?></a></li>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        
    </div>

    <?php include "boxright.php"; ?>