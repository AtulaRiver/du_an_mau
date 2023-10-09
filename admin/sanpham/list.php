<div class="container mb-5">
    <table class="table table-bordered text-center align-middle">
        <tr style="background-color: #ccc">
            <th></th>
            <th>Mã Loại</th>
            <th>Tên Loại</th>
            <th>Action</th>
        </tr>
        <?php foreach ($listdanhmuc as $danhmuc) : ?>
            <?php
                extract($danhmuc);
                $suadm = "index.php?act=suadm&id=" .$id;
                $xoadm = "index.php?act=xoadm&id=" .$id;
            ?>
            <tr>
                <td><input type="checkbox" name="" id=""></td>
                <td><?= $id ?></td>
                <td><?= $name ?> </td>
                <td>
                    <a href="<?= $suadm ?>"><input type="button" value="Sửa" class="btn btn-primary"></a>
                    <a href="<?= $xoadm ?>"><input type="button" value="Xoá" class="btn btn-danger"></a>
                </td>
            </tr>
        <?php endforeach ?>
        <!-- <tr>
            <td><input type="checkbox" name="" id=""></td>
            <td>0001</td>
            <td>Cà Phê</td>
            <td>
                <input type="button" value="Sửa" class="btn btn-primary">
                <input type="button" value="Xoá" class="btn btn-danger">
            </td>
        </tr>
        <tr>
            <td><input type="checkbox" name="" id=""></td>
            <td>0001</td>
            <td>Cà Phê</td>
            <td>
                <input type="button" value="Sửa" class="btn btn-primary">
                <input type="button" value="Xoá" class="btn btn-danger">
            </td>
        </tr> -->

    </table>
</div>
<div class="container">
    <div>
        <input type="submit" value="Chọn tất cả" class="btn btn-success">
        <input type="reset" value="Bỏ chọn tất cả" class="btn btn-secondary">
        <input type="reset" value="Xoá các mục đã chọn" class="btn btn-danger">
        <a href="index.php?act=adddm"><input type="submit" value="Nhập thêm" class="btn btn-primary"></a>
    </div>
</div>