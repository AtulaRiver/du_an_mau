<div id="content">
    <div class="page-heading">
        <div class="text-heading">
            <p style="margin-top: 400px;">Đổi mật khẩu</p>
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
        <?php 
        if(isset($_SESSION['user']) && is_array($_SESSION['user'])) {
            extract($_SESSION['user']);
        }
        ?>
            <form class="col-lg-8" action="index.php?act=doimk" method="post">
                <label for="">Email:</label> <br>
                <input name="email" type="email" class="form-control" readonly value="<?= $email ?>"> <br>
                <label for="">Tên đăng nhập</label> <br>
                <input name="user" type="text" class="form-control" readonly value="<?= $user ?>"> <br>
                <label for="">Mật khẩu mới:</label>
                <input name="pass" type="password" class="form-control"> <br>
                <input type="hidden" name="id" value="<?= $id ?>">
                <input type="submit" class="btn btn-primary" name="capnhat" value="Cập nhật">
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