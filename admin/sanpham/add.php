<div class="container mb-5">
    <div class="card">
        <h5 class="card-header" style="text-transform: uppercase;">Thêm Mới Sản phẩm</h5>
        <div class="card-body">
            <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                <div>
                    <label for=""><b>Danh mục:</b></label>
                    <select name="iddm" id="" class="form-control">
                        <?php foreach ($listdanhmuc as $danhmuc): ?>
                            <?php extract($danhmuc); ?>
                            <option value="<?= $id ?>"><?= $name ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="my-3">
                    <label class="" for=""><b>Tên sản phẩm:</b></label>
                    <input type="text" name="tensp" class="form-control" id="">
                </div>
                <div class="my-3">
                    <label class="" for=""><b>Giá:</b></label>
                    <input type="text" name="giasp" class="form-control" id="">
                </div>
                <div class="my-3">
                    <label class="" for=""><b>Hình ảnh:</b></label>
                    <input type="file" name="hinh" class="form-control" id="">
                </div>
                <div class="my-3">
                    <label class="" for=""><b>Mô tả:</b></label>
                    <textarea name="mota" class="form-control" id="" cols="30" rows="10"></textarea>
                </div>
                <div>
                    <input type="submit" value="Thêm mới" name="themmoi" class="btn btn-success">
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