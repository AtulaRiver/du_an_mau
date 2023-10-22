<div class="container mb-5">
    <table class="table table-bordered text-center align-middle">
        <tr style="background-color: #ccc">
            <th>Mã Loại</th>
            <th>Tên Loại</th>
            <th>Số Lượng</th>
            <th>Giá Nhỏ Nhất</th>
            <th>Giá Lớn Nhất</th>
            <th>Giá Trung Bình</th>
        </tr>
        <?php foreach ($dsthongke as $thongke) : ?>
            <?php
            extract($thongke);
            ?>
            <tr>
                <td><?= $id ?></td>
                <td><?= $name ?> </td>
                <td><?= $soluong ?> </td>
                <td><?= number_format($gia_min, 0, ',', '.') ?>đ</td>
                <td><?= number_format($gia_max, 0, ',', '.') ?>đ</td>
                <td><?= number_format($gia_avg, 0, ',', '.') ?>đ</td>
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
    <br>
    <table class="table table-bordered text-center align-middle">
        <tr style="background-color: #ccc">
            <th>Mã Loại</th>
            <th>Tên Sản Phẩm</th>
            <th>Hình Ảnh</th>
            <th>Giá</th>
            <th>Lượt Xem</th>
            <th>Số bình luận</th>

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
                <td><?= $id ?></td>
                <td><?= $name ?> </td>
                <td><?= $hinh ?> </td>
                <td><?= number_format($price, 0, ',', '.') ?>đ</td>
                <td><?= $luotxem ?> </td>
                <td><?= $soBinhLuan ?> </td>
                
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
        <a href="index.php?act=bieudo"><input type="submit" value="Biểu đồ danh mục" class="btn btn-success"></a>
        <a href="index.php?act=bieudosp"><input type="submit" value="Biểu đồ bình luận" class="btn btn-primary"></a>
    </div>
</div>