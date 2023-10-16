<div class="container mb-5">
    <table class="table table-bordered text-center align-middle">
        <tr style="background-color: #ccc">
            <th></th>
            <th>ID</th>
            <th>Nội dung bình luận</th>
            <th>ID User</th>
            <th>ID Product</th>
            <th>Ngày bình luận</th>
            <th>Action</th>
        </tr>
        <?php foreach ($listbinhluan as $binhluan) : ?>
            <?php
            extract($binhluan);
            $suabl = "index.php?act=suabl&id=" . $id;
            $xoabl = "index.php?act=xoabl&id=" . $id;
            ?>
            <tr>
                <td><input type="checkbox" name="" id=""></td>
                <td><?= $id ?></td>
                <td><?= $noidung ?> </td>
                <td><?= $iduser ?> </td>
                <td><?= $idpro ?> </td>
                <td><?= $ngaybinhluan ?> </td>
                <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Xoá
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Xoá bình luận</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Bạn có muốn xoá bình luận?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Quay lại</button>
                                    <a href="<?= $xoabl ?>"><button type="button" class="btn btn-primary">Xoá</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
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