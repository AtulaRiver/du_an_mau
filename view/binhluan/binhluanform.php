<?php
session_start();
include "../../model/pdo.php";
include "../../model/binhluan.php";
$idpro = $_REQUEST['idpro'];
$dsbl = loadall_binhluan($idpro);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/css/tra.css">
</head>

<body>

    <div class="card my-5" style="width: 70%;">
        <h5 class="card-header" style="background-color:  rgb(12, 113, 61); color: #fff">Bình luận</h5>
        <div class="card-body box-content">
            <table class="table">
                <?php foreach ($dsbl as $bl) : ?>
                    <?php extract($bl); ?>
                    <tr>
                        <td><?= $noidung ?></td>
                        <td><?= $iduser ?></td>
                        <td><?= $ngaybinhluan ?></td>
                    </tr>
                    
                <?php endforeach; ?>
            </table>
            <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                <input type="hidden" name="idpro" value="<?= $idpro ?>">
                <div class="col-lg-10" style="display: inline-block;">
                    <input type="text" name="noidung" class="form-control">
                </div>
                <div class="col-lg-2" style="float: right; display: inline-block; ">
                    <input style="width: 140px; padding-left: 7px; font-size: 14px; height: 37px; margin-left: 8px;" class="btn btn-primary" type="submit" name="guibinhluan" value="Gửi bình luận">
                </div>
            </form>
            <?php
            if (isset($_POST['guibinhluan']) && $_POST['guibinhluan']) {
                $noidung = $_POST['noidung'];
                $idpro = $_POST['idpro'];
                $iduser = $_SESSION['user']['id'];
                $ngaybinhluan = date('h:i:sa d/m/Y');
                insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);
                header("Location: " . $_SERVER['HTTP_REFERER']);
            }

            ?>
        </div>

    </div>

</body>

</html>