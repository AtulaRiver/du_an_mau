<?php
function viewcart($del)
{
    global $img_path;
    $tong = 0;
    $i = 0;
    if ($del == 1) {
        $xoasp_th = '<th>Thao tác</th>';
        $xoasp_td2 = '<td></td>';
    } else {
        $xoasp_th = '';
        $xoasp_td2 = '';
    }
    echo '
            <tr>
                <th>Hình</th>
                <th>Sản phẩm</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
                ' . $xoasp_th . '
            </tr>
    ';
    foreach ($_SESSION['mycart'] as $cart) {
        $hinh = $img_path . $cart[2];
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;
        if ($del == 1) {
            $xoasp_td = '<td><button class="btn btn-danger" onclick="if(confirm(\'Ban chac chua?\')) window.location.href=\'index.php?act=delcart&idcart=' . $i . '\'">Xóa</button></td>';
        } else {
            $xoasp_td = '';
        }
        echo '
                        <tr>
                            <td><img src="' . $hinh . '" height="80px" alt=""></td>
                            <td>' . $cart[1] . '</td>
                            <td>' . $cart[3] . '</td>
                            <td>' . $cart[4] . '</td>
                            <td>' . number_format($ttien, 0, ',', '.') . 'đ</td>
                            ' . $xoasp_td . '
                        </tr>
                    ';
        $i += 1;
    }
    echo '
                    <tr>
                        <td colspan="4">Tổng đơn hàng</td>
                        <td class="text-danger"><b>' . number_format($tong, 0, ',', '.') . 'đ</b></td>
                        ' . $xoasp_td2 . '
                    </tr>
                ';
}
function bill_chi_tiet($listbill)
{
    global $img_path;
    $tong = 0;
    $i = 0;
    echo '
            <tr>
                <th>Hình</th>
                <th>Sản phẩm</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
            </tr>
    ';
    foreach ($listbill as $cart) {
        $hinh = $img_path . $cart['img'];
        $tong += $cart['thanhtien'];

        echo '
                        <tr>
                            <td><img src="' . $hinh . '" height="80px" alt=""></td>
                            <td>' . $cart['name'] . '</td>
                            <td>' . $cart['price'] . '</td>
                            <td>' . $cart['soluong'] . '</td>
                            <td>' . number_format($cart['thanhtien'], 0, ',', '.') . 'đ</td>
                        </tr>
                    ';
        $i += 1;
    }
    echo '
                    <tr>
                        <td colspan="4">Tổng đơn hàng</td>
                        <td class="text-danger"><b>' . number_format($tong, 0, ',', '.') . 'đ</b></td>
                    </tr>
                ';
}
function tongdonhang()
{
    $tong = 0;
    foreach ($_SESSION['mycart'] as $cart) {
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;
    }
    return $tong;
}

function insert_bill($iduser, $name, $email, $address, $tel, $pttt, $ngaydathang, $tongdonhang)
{
    $sql = "insert into bill(iduser, bill_name, bill_email, bill_address, bill_tel, bill_pttt, ngaydathang, total) values('$iduser', '$name', '$email', '$address', '$tel', '$pttt', '$ngaydathang', '$tongdonhang')";
    return pdo_execute_return_lastInsertID($sql);
}
function insert_cart($iduser, $idpro, $img, $name, $price, $soluong, $thanhtien, $idbill)
{
    $sql = "insert into cart(iduser, idpro, img, name, price, soluong, thanhtien, idbill) values('$iduser', '$idpro', '$img', '$name', '$price', '$soluong', '$thanhtien', '$idbill')";
    return pdo_execute($sql);
}


function loadone_bill($id)
{
    $sql = "select * from bill where id = " . $id;
    return $bill = pdo_query_one($sql);
}
function loadall_cart($idbill)
{
    $sql = "select * from cart where idbill = " . $idbill;
    return $cart = pdo_query($sql);
}
function loadall_bill($kyw = "", $iduser = 0)
{
    $sql = "select * from bill where 1";
    if ($iduser > 0) {
        $sql .= " and iduser = " . $iduser;
    }
    if ($kyw != "") {
        $sql .= " and id like '%" . $iduser . "%'";
    }
    $sql .= " order by id desc";
    return $listbill = pdo_query($sql);
}
function loadall_cart_count($idbill)
{
    $sql = "select * from cart where idbill = " . $idbill;
    $bill = pdo_query($sql);
    return sizeof($bill);
}
function get_ttdh($n)
{
    switch ($n) {
        case '0':
            $tt = "Đơn hàng mới";
            break;
        case '1':
            $tt = "Đang xử lí";
            break;
        case '2':
            $tt = "Đang giao hàng";
            break;
        case '3':
            $tt = "Hoàn tất";
            break;
        default:
            $tt = "Đơn hàng mới";
            break;
    }
    return $tt;
}

function update_bill($id, $tinhtrang)
{
    $sql = "update bill set bill_status = '" . $tinhtrang . "' where id =" . $id;
    pdo_execute($sql);
}

function delete_bill($id)
{
    $sql = "delete from bill where id = " . $id;
    pdo_query($sql);
}
