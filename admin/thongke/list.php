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
</div>
<div class="container">
    <div>
        <a href="index.php?act=bieudo"><input type="submit" value="Biểu đồ" class="btn btn-success"></a>
    </div>
</div>