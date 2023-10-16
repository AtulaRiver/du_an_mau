<?php
if (is_array($taikhoan)) {
    extract($taikhoan);
}
?>

<div class="container mb-5">
    <div class="card">
        <h5 class="card-header" style="text-transform: uppercase;">Cập Nhật Tài Khoản</h5>
        <div class="card-body">
            <form action="index.php?act=updatetk" method="post">
                <div>
                    <label class="" for=""><b>Role:</b></label>
                    <input type="text" name="role" class="form-control" id="" value="<?= $role ?>">
                </div>
               
                <div class="my-3">
                    <label class="" for=""><b>Tên đăng nhập:</b></label>
                    <input type="text" name="user" class="form-control" id="" value="<?= $user ?>">
                </div>
                <div class="my-3">
                    <label class="" for=""><b>Mật khẩu:</b></label>
                    <input type="text" name="pass" class="form-control" id="" value="<?= $pass ?>">
                </div>
                <div class="my-3">
                    <label class="" for=""><b>Email:</b></label>
                    <input type="text" name="email" class="form-control" id="" value="<?= $email ?>">
                </div>
                <div class="my-3">
                    <label class="" for=""><b>Địa chỉ:</b></label>
                    <input type="text" name="address" class="form-control" id="" value="<?= $address ?>">
                </div>
                <div class="my-3">
                    <label class="" for=""><b>Điện thoại:</b></label>
                    <input type="text" name="tel" class="form-control" id="" value="<?= $tel ?>">
                </div>
                <div>
                    <input type="hidden" name="id" value="<?= $id ?>">
                    <input type="submit" value="Cập nhật" name="capnhat" class="btn btn-success">
                    <input type="reset" value="Nhập lại" class="btn btn-primary">
                    <a href="index.php?act=dstk"><input type="button" value="Danh sách" class="btn btn-info text-light"></a>
                </div>

                <?php
                if (isset($thongbao) && $thongbao != "") {
                    echo $thongbao;
                }
                ?>
            </form>
        </div>
    </div>
</div>