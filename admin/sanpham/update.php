<?php
if (is_array($sanpham)) {
    extract($sanpham);
}

$hinhpath = "../img/" . $img;
if (is_file($hinhpath)) {
    $hinh = "<img class='my-3' src='" . $hinhpath . "' height='80'>";
} else {
    $hinh = "no photo";
}
?>

<div class="container mb-5">
    <div class="card">
        <h5 class="card-header" style="text-transform: uppercase;">Cập Nhật Loại hàng</h5>
        <div class="card-body">
            <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                    <div>
                        <select name="iddm" id="" class="form-control">
                            <option value="0" selected>Tất Cả</option>
                            <?php foreach ($listdanhmuc as $danhmuc) : ?>
                                <?php if ($iddm == $danhmuc['id']) $s = "selected";
                                else $s = ""; ?>
                                <option value="<?= $danhmuc['id'] ?>" <?= $s ?>><?= $danhmuc['name'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="my-3">
                        <label class="" for=""><b>Tên sản phẩm:</b></label>
                        <input type="text" name="tensp" class="form-control" id="" value="<?= $name ?>">
                    </div>
                    <div class="my-3">
                        <label class="" for=""><b>Giá:</b></label>
                        <input type="text" name="giasp" class="form-control" id="" value="<?= $price ?>">
                    </div>
                    <div class="my-3">
                        <label class="" for=""><b>Hình ảnh:</b></label>
                    <input type="file" name="hinh" class="form-control" id="">
                    <?= $hinh ?>
                    </div>
                    <div class="my-3">
                        <label class="" for=""><b>Mô tả:</b></label>
                        <textarea name="mota" class="form-control" id="" cols="30" rows="10"><?= $mota ?></textarea>
                    </div>
                <div>
                    <input type="hidden" name="id" value="<?= $id ?>">  
                    <input type="submit" value="Cập nhật" name="capnhat" class="btn btn-success">
                    <input type="reset" value="Nhập lại" class="btn btn-primary">
                    <a href="index.php?act=listsp"><input type="button" value="Danh sách" class="btn btn-info text-light"></a>
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