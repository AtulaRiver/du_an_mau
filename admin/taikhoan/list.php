<div class="container mb-5">
    <table class="table table-bordered text-center align-middle">
        <tr>
            <th></th>
            <th>Mã Tài Khoản</th>
            <th>Họ Tên</th>
            <th>Tên Đăng Nhập</th>
            <th>Mật Khẩu</th>
            <th>Email</th>
            <th>Địa chỉ</th>
            <th>Điện Thoại</th>
            <th>Vai Trò</th>
            <th>Action</th>
        </tr>
        <?php foreach ($listtaikhoan as $taikhoan) : ?>
            <?php
            extract($taikhoan);
            $suatk = "index.php?act=suatk&id=" . $id;
            $xoatk = "index.php?act=xoatk&id=" . $id;
            ?>
            <tr>
                <td><input type="checkbox" name="" id=""></td>
                <td><?= $id ?></td>
                <td><?= $name ?></td>
                <td><?= $user ?> </td>
                <td><?= $pass ?> </td>
                <td><?= $email ?> </td>
                <td><?= $address ?> </td>
                <td><?= $tel ?> </td>
                <td><?= $role ?> </td>
                <td>
                    <a href="<?= $suatk ?>"><input type="button" value="Sửa" class="btn btn-primary"></a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Xoá
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Xoá tài khoản</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Bạn có muốn xoá tài khoản?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Quay lại</button>
                                    <a href="<?= $xoatk ?>"><button type="button" class="btn btn-primary">Xoá</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        <?php endforeach ?>

    </table>
</div>
<div class="container">
    <div>
        <input type="submit" value="Chọn tất cả" class="btn btn-success">
        <input type="reset" value="Bỏ chọn tất cả" class="btn btn-secondary">
        <input type="reset" value="Xoá các mục đã chọn" class="btn btn-danger">
        <a href="index.php?act=dangky"><input type="submit" value="Nhập thêm" class="btn btn-primary"></a>
    </div>
</div>