<?php
ob_start();
session_start();
include 'model/pdo.php';
include 'model/danhmuc.php';
include 'model/sanpham.php';
include "model/taikhoan.php";
include "model/cart.php";
include "view/header.php";
include "global.php";

if (!isset($_SESSION['mycart'])) {
    $_SESSION['mycart'] = [];
}

$spnew = loadall_sanpham_home();
$dsdm = loadall_danhmuc();
$dstop10 = loadall_sanpham_top10();

if (isset($_GET['act']) && $_GET['act'] != "") {
    $act = $_GET['act'];
    switch ($act) {
        case 'gioithieu':
            include "view/gioithieu.php";
            break;

        case 'sanpham':
            if (isset($_POST['kyw']) && $_POST['kyw'] != "") {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }

            if (isset($_GET['iddm']) && $_GET['iddm'] > 0) {
                $iddm = $_GET['iddm'];
                $onesp = loadone_sanpham($iddm);
            } else {
                $iddm = 0;
            }
            $dssp = loadall_sanpham($kyw, $iddm);
            $tendm = load_ten_dm($iddm);
            include "view/sanpham.php";
            break;

        case 'sanphamct':
            if (isset($_GET['idsp']) && $_GET['idsp'] > 0) {
                $onesp = loadone_sanpham($_GET['idsp']);
                extract($onesp);
                $sp_cungloai = load_sanpham_cungloai($_GET['idsp'], $iddm);

                include "view/sanphamct.php";
            } else {
                include "view/home.php";
            }
            break;

        case 'lienhe':
            include "view/lienhe.php";
            break;

        case 'dangky':
            if (isset($_POST['dangky']) && $_POST['dangky']) {
                $email = $_POST['email'];
                $name = $_POST['name'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                insert_taikhoan($email, $user, $name, $pass);
                $thongbao = "Đăng kí thành công! Vui lòng đăng nhập để thao tác!";
            }
            include "view/taikhoan/dangky.php";
            break;

        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = checkuser($user, $pass);

                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    header('Location: index.php');
                } else {
                    $thongbao = "Tài khoản không tồn tại. Vui lòng kiểm tra lại!";
                }
            }
            include "view/taikhoan/dangky.php";
            break;

        case 'edit_taikhoan':
            if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                $id = $_POST['id'];
                $user = $_POST['user'];
                $name = $_POST['name'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                update_taikhoan($id, $user, $name, $email, $pass, $address, $tel);
                $_SESSION['user'] = checkuser($user, $pass);
                $thongbao = "Cập nhật thành công!";
            }
            include "view/taikhoan/edit_taikhoan.php";
            break;

        case 'quenmk':
            if (isset($_POST['guiemail']) && $_POST['guiemail']) {
                $email = $_POST['email'];
                $checkemail = checkemail($email);

                if (is_array($checkemail)) {
                    $thongbao = "Mật khẩu của bạn là: " . $checkemail['pass'];
                } else {
                    $thongbao = "Email này không tồn tại!";
                }
            }
            include "view/taikhoan/quenmk.php";
            break;

        case 'addtocart':
            if (isset($_POST['addtocart']) && $_POST['addtocart']) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $img = $_POST['img'];
                $price = $_POST['price'];
                $soluong = 1;
                $ttien = $soluong * $price;
                $spadd = [$id, $name, $img, $price, $soluong, $ttien];
                array_push($_SESSION['mycart'], $spadd);
            }
            include 'view/cart/viewcart.php';
            break;

        case 'delcart':
            if(isset($_GET['idcart'])) {
                array_splice($_SESSION['mycart'],$_GET['idcart'],1);
            } else {
                $_SESSION['mycart'] = [];
            }
            header('Location: index.php?act=addtocart');
            break;

        case 'bill':
            include 'view/cart/bill.php';
            break;

        case 'billconfirm':
            if (isset($_POST['dongydathang']) && $_POST['dongydathang']) {
                if(isset($_SESSION['user'])) $iduser = $_SESSION['user']['id'];
                else $id = 0;
                $name = $_POST['name'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $pttt = $_POST['pttt'];
                $tel = $_POST['tel'];
                $ngaydathang= date('h:i:sa d/m/Y');
                $tongdonhang = tongdonhang();

                $idbill = insert_bill($iduser, $name, $email, $address, $tel, $pttt, $ngaydathang, $tongdonhang);

                //* insert into cart: $session['mycart'] & idbill
                foreach ($_SESSION['mycart'] as $cart) {
                    insert_cart($_SESSION['user']['id'], $cart[0], $cart[2], $cart[1], $cart[3], $cart[4], $cart[5], $idbill);
                }
                //* Xoá session cart
                $_SESSION['cart'] = [];
            }
            $bill = loadone_bill($idbill);
            $billct = loadall_cart($idbill);
            include 'view/cart/billconfirm.php';
            break;

        case 'mybill':
            $listbill = loadall_bill("", $_SESSION['user']['id']);
            include 'view/cart/mybill.php';
            break;

        case 'thoat':
            session_unset();
            header('Location: index.php');
            break;

        case 'gioithieu':
            include "view/gioithieu.php";
            break;

        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}
include "view/footer.php";


