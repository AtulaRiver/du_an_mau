<div class="container mb-5">
    <form action="index.php?act=listbill" method="post" class="row g-3">
        <div class="col-lg-2">
            <input type="text" name="kyw" id="" class="form-control" placeholder="Nhập mã đơn hàng...">
        </div>
        <div class="col-lg-1">
            <input type="submit" name="listok" value="Go" class="btn btn-primary">
        </div>
    </form>
    <table class="table table-bordered text-center align-middle mt-4">
        <tr style="background-color: #ccc">
            <th></th>
            <th>Mã đơn hàng</th>
            <th>Khách hàng</th>
            <th>Số lượng mặt hàng</th>
            <th>Tổng giá trị đơn hàng</th>
            <th>Tình trạng đơn hàng</th>
            <th>Ngày đặt hàng</th>
            <th>Action</th>
        </tr>
        <?php foreach ($listbill as $bill) : ?>
            <?php
            extract($bill);
            $suabill = "index.php?act=suabill&id=" . $id;
            $xoabill = "index.php?act=xoabill&id=" . $id;
            $ttdh = get_ttdh($bill['bill_status']);
            $countsp = loadall_cart_count($bill['id']);
            ?>
            <tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>DAM - <?= $bill['id'] ?></td>
                <td>
                    <p class="float-start">Họ tên: <?= $bill['bill_name']; ?></p> <br>
                    <p class="float-start">Địa chỉ: <?= $bill['bill_address']; ?></p> <br>
                    <p class="float-start">SĐT: <?= $bill['bill_tel']; ?></p>
                </td>
                <td><?= $countsp ?></td>
                <td><b class="text-danger"><?= $bill['total'] ?></b></td>
                <td><?= $ttdh ?></td>
                <td><?= $bill['ngaydathang'] ?></td>
                <td>
                    <a href="<?= $suabill ?>"><input type="button" value="Sửa" class="btn btn-primary"></a>
                    <a href="<?= $xoabill ?>"><input type="button" value="Xoá" class="btn btn-danger"></a>
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
    </div>
</div>