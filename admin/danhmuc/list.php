<div class="container mb-5">
    <table class="table table-bordered text-center align-middle" id="myTable">
        <tr style="background-color: #ccc">
            <th></th>
            <th>Mã Loại</th>
            <th>Tên Loại</th>
            <th>Action</th>
        </tr>
        <?php foreach ($listdanhmuc as $danhmuc) : ?>
            <?php
            extract($danhmuc);
            $suadm = "index.php?act=suadm&id=" . $id;
            $xoadm = "index.php?act=xoadm&id=" . $id;
            ?>
            <tr>
                <td><input type="checkbox" name="" id=""></td>
                <td><?= $id ?></td>
                <td><?= $name ?> </td>
                <td>
                    <a href="<?= $suadm ?>"><input type="button" value="Sửa" class="btn btn-primary"></a>
                    <a href="<?= $xoadm ?>"><input type="button" value="Xoá" class="btn btn-danger"></a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</div>

<div class="container">
    <div>
        <button onclick="selectAll()" class="btn btn-success">Chọn tất cả</button>
        <button onclick="deselectAll()" class="btn btn-secondary">Bỏ chọn tất cả</button>
        <input type="reset" value="Xoá các mục đã chọn" class="btn btn-danger">
        <a href="index.php?act=adddm"><input type="submit" value="Nhập thêm" class="btn btn-primary"></a>
    </div>
</div>

<script>
    function selectAll() {
        var checkboxes = document.querySelectorAll('#myTable input[type="checkbox"]');
        for (var i = 0; i < checkboxes.length; i++) {
            checkboxes[i].checked = true;
        }
    }

    function deselectAll() {
        var checkboxes = document.querySelectorAll('#myTable input[type="checkbox"]');
        for (var i = 0; i < checkboxes.length; i++) {
            checkboxes[i].checked = false;
        }
    }
</script>