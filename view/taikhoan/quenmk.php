<div id="content">
    <div class="page-heading">
        <div class="text-heading">
            <p style="margin-top: 400px;">Quên mật khẩu</p>
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
        <div style="height: 2000px;" class="left">
            <form class="col-lg-8" action="index.php?act=quenmk" method="post">
                <label for="">Email:</label> <br>
                <input name="email" type="email" class="form-control"> <br>
                <input type="submit" class="btn btn-primary" name="guiemail" value="Gửi">
                <input type="reset" class="btn btn-secondary" value="Nhập lại">
            </form>
            <br>
            <h5 class="text-danger">
                <?php
                if (isset($thongbao) && $thongbao != "") {
                    echo $thongbao;
                }
                ?>
            </h5>
        </div>
    </div>

    <?php include "view/boxright.php"; ?>