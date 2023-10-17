<div id="content">
    <div class="page-heading">
        <div class="text-heading">
            <p style="margin-top: 400px;">Đơn hàng của tôi</p>
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
        <div style="height: 2000px;" class="left">
            <div class="card my-5" style="width: 70%;">
                <h5 class="card-header" style="background-color:  rgb(12, 113, 61); color: #fff">Thông tin giỏ hàng</h5>

                <table class="my-3 table table-bordered text-center align-middle" style="width: 96%; margin: auto;">
                    <tr>
                        <th>Mã đơn hàng</th>
                        <th>Ngày đặt</th>
                        <th>Số lượng mặt hàng</th>
                        <th>Tổng giá trị đơn hàng</th>
                        <th>Tình trạng đơn hàng</th>
                    </tr>

                    <?php
                    if (is_array($listbill)) {
                        foreach ($listbill as $bill) {
                            extract($bill);
                            $ttdh = get_ttdh($bill['bill_status']);
                            $countsp = loadall_cart_count($bill['id']);
                            echo '
                                <tr>
                                    <td>DAM - ' . $bill['id'] . '</td>
                                    <td>' . $bill['ngaydathang'] . '<td>
                                    ' . $countsp . '
                                    <td>' . $bill['total'] . '<td>
                                    ' . $ttdh . '
                                </tr>
                            ';
                        }
                    }
                    ?>

                </table>

            </div>
        </div>
    </div>

    <?php include "view/boxright.php"; ?>