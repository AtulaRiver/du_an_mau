<div id="content">
    <div class="page-heading">
        <div class="text-heading">
            <p style="margin-top: 400px;">Giỏ hàng</p>
        </div>
        <div class="img-heading">
            <img src="/assets/img/Opera Snapshot_2023-02-11_163927_phuclong.com.vn.png" alt="">
        </div>
        <div class="nav-content">

        </div>
    </div>
</div>
<div id="big-container">
    <div class="container">
        <div style="height: 5000px;" class="left">
            <table class="table table-bordered text-center align-middle" style="width: 70%;">
                <tr>
                    <th>Hình</th>
                    <th>Sản phẩm</th>
                    <th>Đơn giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    <th>Thao tác</th>
                </tr>

                <?php
                $tong = 0;
                $i = 0;
                foreach ($_SESSION['mycart'] as $cart) {
                    $hinh = $img_path . $cart[2];
                    $ttien = $cart[3] * $cart[4];
                    $tong += $ttien;
                    $xoasp = '<a href="index.php?act=delcart&idcart='.$i.'"><input type="button" value="Xoá" class="btn btn-danger"></a>';
                    echo '
                        <tr>
                            <td><img src="' . $hinh . '" height="80px" alt=""></td>
                            <td>' . $cart[1] . '</td>
                            <td>' . $cart[3] . '</td>
                            <td>' . $cart[4] . '</td>
                            <td>' . $ttien . '</td>
                            <td>' . $xoasp . '</td>
                        </tr>
                    ';
                    $i += 1;
                }
                echo '
                    <tr>
                        <td colspan="4">Tổng đơn hàng</td>
                        <td>' . $tong . '</td>
                        <td></td>
                    </tr>
                '
                ?>

            </table>
        </div>
    </div>

    <?php include "view/boxright.php"; ?>