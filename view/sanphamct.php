<div id="content">
    <div class="page-heading">
        <div class="text-heading">
            <p style="margin-top: 400px;">Chi tiết sản phẩm</p>
        </div>
        <div class="img-heading">
            <img src="/assets/img/Opera Snapshot_2023-02-11_163927_phuclong.com.vn.png" alt="">
        </div>
        <div class="nav-content">
            <ul class="subnav-content">
            </ul>
        </div>
    </div>
</div>
<div id="big-container">
    <div class="container">
        <div class="left mt-5">
            <div class="card mb-5" style="width: 70%;">
                <?php extract($onesp); ?>
                <h5 class="card-header" style="background-color:  rgb(12, 113, 61); color: #fff"><?= $name ?></h5>
                <div class="card-body box-content">
                    <?php
                    $img = $img_path . $img;
                    echo '<img src="' . $img . ' "><br>';
                    echo $mota;
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
            <div class="card my-5" style="width: 70%;">
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