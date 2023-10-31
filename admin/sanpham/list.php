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
                <td><?= number_format($price, 0, ',', '.') ?>đ</td>
                <td><?= $luotxem ?> </td>
                <td>
                    <a href="<?= $suasp ?>"><input type="button" value="Sửa" class="btn btn-primary"></a>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Xoá
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Xoá sản phẩm</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Bạn có muốn xoá sản phẩm?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Quay lại</button>
                                    <a href="<?= $xoasp ?>"><button type="button" class="btn btn-primary">Xoá</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
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
        <a href="index.php?act=bieudosp"><input type="submit" value="Biểu đồ BL theo SP" class="btn btn-info text-white"></a>
    </div>
</div>