<div id="content">
    <div class="page-heading">
        <div class="text-heading">
            <p style="margin-top: 400px;">Giỏ hàng</p>
        </div>
        <div class="img-heading">
 <img src="https://phuclong.com.vn/images/icon_tealeaves.png" alt="">
        </div>
        <div class="nav-content">

        </div>
    </div>
</div>
<div id="big-container">
    <div class="container">
        <div style="height: 1800px;" class="left mt-5">
            <table class="table table-bordered text-center align-middle" style="width: 70%;">
                <?php
                    viewcart(1);
                ?>

            </table>
            <a href="index.php?act=bill"><input type="button" value="Tiếp tục đặt hàng" class="btn btn-success"></a>
            <a href="index.php?act=index"><input type="button" value="Trở về trang chủ" class="btn btn-primary"></a>
        </div>
    </div>

    <?php include "view/boxright.php"; ?>