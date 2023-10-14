<div class="container mb-5">
    <form action="index.php?act=listsp" method="post" class="row g-3">
        <div class="col-lg-2">
            <input type="text" name="kyw" id="" class="form-control">
        </div>
        <div class="col-lg-1">
            <select name="iddm" id="" class="form-control">
                <option value="0" selected>Tất Cả</option>
                <?php foreach ($listdanhmuc as $danhmuc) : ?>
                    <?php extract($danhmuc); ?>
                    <option value="<?= $id ?>"><?= $name ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="col-lg-1">
            <input type="submit" name="listok" value="Go" class="btn btn-primary">
        </div>
    </form>
    <br>
    <table class="table table-bordered text-center align-middle">
        <tr style="background-color: #ccc">
            <th></th>
            <th>Mã Loại</th>
            <th>Tên Sản Phẩm</th>
            <th>Hình Ảnh</th>
            <th>Giá</th>
            <th>Lượt Xem</th>
            <th>Action</th>
        </tr>
        <?php foreach ($listsanpham as $sanpham) : ?>
            <?php
            extract($sanpham);
            $suasp = "index.php?act=suasp&id=" . $id;
            $xoasp = "index.php?act=xoasp&id=" . $id;
            $hinhpath = "../img/" . $img;
            if (is_file($hinhpath)) {
                $hinh = "<img src='" . $hinhpath . "' height='80'>";
            } else {
                $hinh = "no photo";
            }
            ?>
            <tr>
                <td><input type="checkbox" name="" id=""></td>
                <td><?= $id ?></td>
                <td><?= $name ?> </td>
                <td><?= $hinh ?> </td>
                <td><?= $price ?> </td>
                <td><?= $luotxem ?> </td>
                <td>
                    <a href="<?= $suasp ?>"><input type="button" value="Sửa" class="btn btn-primary"></a>
                    <a href="<?= $xoasp ?>"><input type="button" value="Xoá" class="btn btn-danger"></a>
                </td>
            </tr>
        <?php endforeach; ?>
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
        <a href="index.php?act=addsp"><input type="submit" value="Nhập thêm" class="btn btn-primary"></a>
    </div>
</div>