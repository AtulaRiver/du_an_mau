<div class="container mb-5">
    <div class="card">
        <h5 class="card-header" style="text-transform: uppercase;">Thêm Mới Loại hàng</h5>
        <div class="card-body">
            <form action="index.php?act=adddm" method="post">
                <div>
                    <label for=""><b>Mã loại:</b></label>
                    <input type="text" name="maloai" class="form-control" id="" disabled>
                </div>
                <div class="my-3">
                    <label class="" for=""><b>Tên loại:</b></label>
                    <input type="text" name="tenloai" class="form-control" id="">
                </div>
                <div>
                    <input type="submit" value="Thêm mới" name="themmoi" class="btn btn-success">
                    <input type="reset" value="Nhập lại" class="btn btn-primary">
                    <a href="index.php?act=listdm"><input type="button" value="Danh sách" class="btn btn-info text-light"></a>
                </div>
                <h4 class="text-danger mt-3">
                <?php 
                    if(isset($thongbao) && $thongbao != "") {
                        echo $thongbao;
                    }
                ?>
                </h4>
            </form>
        </div>
    </div>
</div>