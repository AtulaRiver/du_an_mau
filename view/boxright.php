<div class="right">
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button loginCropDown" type="button" data-bs-toggle="collapse" data-bs-target="#list-1" aria-expanded="true" aria-controls="list-1">
                    Tài Khoản
                </button>
            </h2>
            <div id="list-1" class="accordion-collapse collapse show" data-bs-parent="#list-1">
                <div class="accordion-body">
                    <form class="box-right" action="#" method="post">
                        <div>
                            <label for="" class="form-label" name="user">Tên đăng nhập:</label>
                            <input type="text" class="form-control" id="user">
                        </div>
                        <div>
                            <label for="" class="form-label" name="pass">Mật khẩu:</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div> <br>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input">
                            <label class="form-check-label" for="">Ghi nhớ tài khoản ?</label>
                        </div>
                        <button style="display: block; margin: auto;" type="submit" class="btn my-3 sign-in">Đăng Nhập</button>
                        <li>
                            <a href="">Quên mật khẩu</a>
                        </li>
                        <li>
                            <a href="">Đăng ký thành viên</a>
                        </li>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="nav-divider"></div>
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button loginCropDown" type="button" data-bs-toggle="collapse" data-bs-target="#list-2" aria-expanded="true" aria-controls="list-2">
                    Danh Mục
                </button>
            </h2>
            <div id="list-2" class="accordion-collapse collapse show" data-bs-parent="#list-2">
                <div class="accordion-body" style="padding: 0;">
                    <ul class="list-group">
                        <?php foreach ($dsdm as $dm) : ?>
                            <?php
                            extract($dm);
                            $linkdm = "index.php?act=sanpham&iddm=" . $id;
                            ?>
                            <li class="list-group-item">
                                <a href="<?= $linkdm ?>"><?= $name ?></a>
                            </li>
                            <!-- <li class="list-group-item">
                                    <a href="">Trà</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="">Cà Phê</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="">Snacks</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="">Bakery</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="">Kem</a>
                                </li> -->
                        <?php endforeach; ?>
                        <li class="list-group-item">
                            <form action="" method="post">
                                <input type="text" class="form-control" placeholder="Nhập từ khoá tìm kiếm">
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="nav-divider"></div>
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button loginCropDown" type="button" data-bs-toggle="collapse" data-bs-target="#list-3" aria-expanded="true" aria-controls="list-3">
                    Top 10 Yêu Thích
                </button>
            </h2>
            <div id="list-3" class="accordion-collapse collapse show" data-bs-parent="#list-3">
                <div class="accordion-body">

                    <?php foreach ($dstop10 as $sp) : ?>
                        <?php
                        extract($sp);
                        $linksp = "index.php?act=sanphamct&idsp=" . $id;
                        $img = $img_path . $img;
                        ?>
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4 top10img">
                                    <img src="<?= $img ?>" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h6 class="card-title"><a href="<?= $linksp ?>"><?= $name ?></a></h6>
                                        <p class="card-text">70.000đ</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                    <!-- <div class="card mb-3" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-md-4 top10img">
                                        <img src="https://phuclong.com.vn/uploads/dish/65a7d028c2229d-sachuaxoicthmphclong.png" class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h6 class="card-title"><a href="">Sữa Chua Xoài Đác Thơm</a></h6>
                                            <p class="card-text">70.000đ</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-md-4 top10img">
                                        <img src="https://phuclong.com.vn/uploads/dish/65a7d028c2229d-sachuaxoicthmphclong.png" class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h6 class="card-title"><a href="">Sữa Chua Xoài Đác Thơm</a></h6>
                                            <p class="card-text">70.000đ</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-md-4 top10img">
                                        <img src="https://phuclong.com.vn/uploads/dish/65a7d028c2229d-sachuaxoicthmphclong.png" class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h6 class="card-title"><a href="">Sữa Chua Xoài Đác Thơm</a></h6>
                                            <p class="card-text">70.000đ</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-md-4 top10img">
                                        <img src="https://phuclong.com.vn/uploads/dish/65a7d028c2229d-sachuaxoicthmphclong.png" class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h6 class="card-title"><a href="">Sữa Chua Xoài Đác Thơm</a></h6>
                                            <p class="card-text">70.000đ</p>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                </div>
            </div>
        </div>
    </div>
</div>