<div class="container">
    <div class="left">
        <form class="col-lg-8" action="index.php?act=dangky" method="post">
            <label for="">Email:</label> <br>
            <input name="email" type="email" class="form-control"> <br>
            <label for="">Tên đăng nhập</label> <br>
            <input name="user" type="text" class="form-control"> <br>
            <label for="">Mật khẩu:</label>
            <input name="pass" type="password" class="form-control"> <br>
            <input type="submit" class="btn btn-primary" name="dangky" value="Đăng ký">
            <input type="reset" class="btn btn-secondary" value="Nhập lại">
            <a href="index.php?act=dskh"><input class="btn btn-info text-light" type="button" value="Danh sách tài khoản"></a>
        </form>
        <br>
        <h4 class="text-danger mb-4">
            <?php
            if (isset($thongbao) && $thongbao != "") {
                echo $thongbao;
            }
            ?>
        </h4>
    </div>
</div>