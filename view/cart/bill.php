<div id="content">
    <div class="page-heading">
        <div class="text-heading">
            <p style="margin-top: 400px;">Thông tin đặt hàng</p>
        </div>
        <div class="img-heading">
            <img src="/assets/img/Opera Snapshot_2023-02-11_163927_phuclong.com.vn.png" alt="">
        </div>
        <div class="nav-content">

        </div>
    </div>
</div>
<div id="big-container">
    <div class="container">
        <form action="index.php?act=billconfirm" method="post">
            <div style="height: 2000px;" class="left">
                <div class="card my-5" style="width: 70%;">
                    <h5 class="card-header" style="background-color:  rgb(12, 113, 61); color: #fff">Thông tin đặt hàng</h5>
                    <div class="card-body box-content">
                        <?php
                        if (isset($_SESSION['user'])) {
                            $name = $_SESSION['user']['name'];
                            $address = $_SESSION['user']['address'];
                            $email = $_SESSION['user']['email'];
                            $tel = $_SESSION['user']['tel'];
                        } else {
                            $name = "";
                            $address = "";
                            $email = "";
                            $tel = "";
                        }
                        ?>
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-lg-3 ms-4 col-form-label">Người đặt hàng:</label>
                            <div class="col-lg-8">
                                <input type="text" name="name" class="form-control" value="<?= $name ?>" id="">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-lg-3 ms-4 col-form-label">Địa chỉ:</label>
                            <div class="col-lg-8">
                                <input type="text" name="address" class="form-control" value="<?= $address ?>" id="">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-lg-3 ms-4 col-form-label">Email:</label>
                            <div class="col-lg-8">
                                <input type="text" name="email" class="form-control" value="<?= $email ?>" id="">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-lg-3 ms-4 col-form-label">Điện thoại:</label>
                            <div class="col-lg-8">
                                <input type="text" name="tel" class="form-control" value="<?= $tel ?>" id="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card my-5" style="width: 70%;">
                    <h5 class="card-header" style="background-color:  rgb(12, 113, 61); color: #fff">Phương thức thanh toán</h5>
                    <div class="card-body box-content">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="pttt" id="inlineRadio1" value="option1" checked>
                            <label class="form-check-label" for="inlineRadio1">Trả tiền khi nhận hàng</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="pttt" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Chuyển khoản ngân hàng</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="pttt" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Thanh toán online</label>
                        </div>
                    </div>
                </div>
                <div class="card my-5" style="width: 70%;">
                    <h5 class="card-header" style="background-color:  rgb(12, 113, 61); color: #fff">Thông tin giỏ hàng</h5>

                    <table class="my-3 table table-bordered text-center align-middle" style="width: 96%; margin: auto;">

                        <?php
                        viewcart(0);
                        ?>

                    </table>

                </div>
                <input type="submit" name="dongydathang" value="Đồng ý đặt hàng" class="btn btn-success">

            </div>
        </form>
    </div>

    <?php include "view/boxright.php"; ?>