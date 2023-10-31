<div id="content">
    <div class="page-heading">
        <div class="text-heading">
            <p style="margin-top: 400px;">Đăng Ký</p>
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
        <div style="height: 2000px;" class="left">
            <form class="col-lg-8" action="index.php?act=dangky" method="post">
                <label for="">Email:</label> <br>
                <input name="email" type="email" class="form-control"> <br>
                <label for="">Họ tên:</label> <br>
                <input name="name" type="text" class="form-control"> <br>
                <label for="">Tên đăng nhập</label> <br>
                <input name="user" type="text" class="form-control"> <br>
                <label for="">Mật khẩu:</label>
                <input name="pass" type="password" class="form-control"> <br>
                <input type="submit" class="btn btn-primary" name="dangky" value="Đăng ký">
                <input type="reset" class="btn btn-secondary" value="Nhập lại">
            </form>
            <br>
            <h4 class="text-danger">
                <?php
                if (isset($thongbao) && $thongbao != "") {
                    echo $thongbao;
                }
                ?>
            </h4>
        </div>
    </div>

    <?php include "view/boxright.php"; ?>