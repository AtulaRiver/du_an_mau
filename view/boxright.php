<div style="width: 280px;" class="right mt-5">
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button loginCropDown" type="button" data-bs-toggle="collapse" data-bs-target="#list-1" aria-expanded="true" aria-controls="list-1">
                    Tài Khoản
                </button>
            </h2>
            <div id="list-1" class="accordion-collapse collapse show" data-bs-parent="#list-1">
                <div class="accordion-body">
                    <?php
                    if (isset($_SESSION['user'])) {
                        extract($_SESSION['user']);
                    ?>
                        <div>
                            <label for="" class="form-label" name="user">Xin chào, </label>
                            <?= $user ?>
                        </div>
                        <li>
                            <a href="index.php?act=mybill">Đơn hàng của tôi</a>
                        </li>
                        <li>
                            <a href="index.php?act=quenmk">Quên mật khẩu</a>
                        </li>
                        <li>
                            <a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a>
                        </li>
                        <li>
                            <a href="index.php?act=doimk">Đổi mật khẩu</a>
                        </li>
                        <?php if ($role == 1) : ?>
                            <li>
                                <a href="admin/index.php">Đăng nhập Admin</a>
                            </li>
                        <?php endif; ?>
                        <li>
                            <a href="index.php?act=thoat">Thoát</a>
                        </li>

                    <?php

                    } else {

                    ?>
                        <form class="box-right" action="index.php?act=dangnhap" method="post">
                            <div>
                                <label for="" class="form-label">Tên đăng nhập:</label>
                                <input type="text" class="form-control" name="user" id="user">
                            </div>
                            <div>
                                <label for="" class="form-label">Mật khẩu:</label>
                                <input type="password" class="form-control" name="pass" id="exampleInputPassword1">
                            </div> <br>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label" for="">Ghi nhớ tài khoản ?</label>
                            </div>
                            <input style="display: block; margin: auto;" name="dangnhap" type="submit" class="btn my-3 sign-in" value="Đăng nhập"></input>

                            <li>
                                <a href="index.php?act=quenmk">Quên mật khẩu</a>
                            </li>

                            <li>
                                <a href="index.php?act=dangky">Đăng ký thành viên</a>
                            </li>
                        </form>
                    <?php } ?>
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
                            <form action="index.php?act=sanpham" method="post">
                                <div class="col-lg-9" style="display: inline-block;">
                                    <input type="text" name="kyw" class="form-control" placeholder="Nhập từ khoá">
                                </div>
                                <div class="col-lg-3" style="float: right; display: inline-block; ">
                                    <input style="width: 56px; padding-left: 7px; font-size: 14px; height: 37px; margin-left: 8px;" class="btn btn-primary" type="submit" name="timkiem" value="Search">
                                </div>
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
                                    <img style="max-height: 50px;" src="<?= $img ?>" class="img-fluid rounded-start mt-3 ms-3" alt="">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h6 class="card-title"><a href="<?= $linksp ?>"><?= $name ?></a></h6>
                                        <p class="card-text"><?= number_format($price, 0, ',', '.') ?>đ</p>
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