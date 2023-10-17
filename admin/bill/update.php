<?php
if (is_array($bill)) {
    extract($bill);
}
?>

<div class="container mb-5">
    <div class="card">
        <h5 class="card-header" style="text-transform: uppercase;">Cập nhật đơn hàng</h5>
        <div class="card-body">
            <form action="index.php?act=updatebill" method="post">
                <div>
                    <label for=""><b>Mã loại:</b></label>
                    <input type="text" name="id" class="form-control" id="" value="<?= $id ?>" readonly>
                </div>
                <div class="my-3">
                    <label class="" for=""><b>Tình trạng:</b></label>
                    <input type="text" name="tinhtrang" class="form-control" id="" value="<?= $bill_status ?>">
                </div>
                <div>
                    <input type="hidden" name="id" value="<?= (isset($id) && $id > 0) ? $id : "" ?>">
                    <input type="submit" value="Cập nhật" name="capnhat" class="btn btn-success">
                    <input type="reset" value="Nhập lại" class="btn btn-primary">
                    <a href="index.php?act=listbill"><input type="button" value="Danh sách" class="btn btn-info text-light"></a>
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