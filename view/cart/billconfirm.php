<div id="content">
    <div class="page-heading">
        <div class="text-heading">
            <p style="margin-top: 400px;">Cảm ơn</p>
        </div>
        <div class="img-heading">
            <img src="/assets/img/Opera Snapshot_2023-02-11_163927_phuclong.com.vn.png" alt="">
        </div>
        <div class="nav-content">

        </div>
    </div>
</div>
<?php
if (isset($bill) && is_array($bill)) {
    extract($bill);
}
?>
<div id="big-container">
    <div class="container">
        <div style="height: 2000px;" class="left">
            <div class="card my-5" style="width: 70%;">
                <h5 class="card-header" style="background-color:  rgb(12, 113, 61); color: #fff">Thông tin đơn hàng</h5>
                <div class="card-body box-content">
                    <li>Mã đơn hàng: DAM - <?= $bill['id'] ?></li>
                    <li>Ngày đặt hàng: <?= $bill['ngaydathang'] ?></li>
                    <li>Tổng đơn hàng: <?= $bill['total'] ?></li>
                    <li>Phương thức thanh toán: <?= $bill['bill_pttt'] ?></li>
                    <div class="mb-3 row">
                        <label for="" class="ms-4 mt-3">Người đặt hàng: <?= $bill['bill_name'] ?></label>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="ms-4">Địa chỉ: <?= $bill['bill_address'] ?></label>

                    </div>
                    <div class="mb-3 row">
                        <label for="" class="ms-4">Email: <?= $bill['bill_email'] ?></label>

                    </div>
                    <div class="mb-3 row">
                        <label for="" class="ms-4">Điện thoại: <?= $bill['bill_tel'] ?></label>

                    </div>
                </div>
            </div>

            <div class="card my-5" style="width: 70%;">
                <h5 class="card-header" style="background-color:  rgb(12, 113, 61); color: #fff">Chi tiết giỏ hàng</h5>

                <table class="my-3 table table-bordered text-center align-middle" style="width: 96%; margin: auto;">
                    <?php
                    bill_chi_tiet($billct);
                    ?>

                </table>

            </div>

        </div>
    </div>

    <?php include "view/boxright.php"; ?>