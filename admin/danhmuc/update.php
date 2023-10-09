<?php 
    if(is_array($dm)) {
        extract($dm);
    }
?>

<div class="container mb-5">
    <div class="card">
        <h5 class="card-header" style="text-transform: uppercase;">Cập Nhật Loại hàng</h5>
        <div class="card-body">
            <form action="index.php?act=updatedm" method="post">
                <div>
                    <label for=""><b>Mã loại:</b></label>
                    <input type="text" name="maloai" class="form-control" id="" disabled>
                </div>
                <div class="my-3">
                    <label class="" for=""><b>Tên loại:</b></label>
                    <input type="text" name="tenloai" class="form-control" id="" value="<?=(isset($name) && $name != "") ? $name : " " ?>">
                </div>
                <div>
                    <input type="hidden" name="id" value="<?=(isset($id) && $id > 0) ? $id : "" ?>">
                    <input type="submit" value="Cập nhật" name="capnhat" class="btn btn-success">
                    <input type="reset" value="Nhập lại" class="btn btn-primary">
                    <a href="index.php?act=listdm"><input type="button" value="Danh sách" class="btn btn-info text-light"></a>
                </div>
                <?php 
                    if(isset($thongbao) && $thongbao != "") {
                        echo $thongbao;
                    }
                ?>
            </form>
        </div>
    </div>
</div>