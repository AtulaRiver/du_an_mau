<div id="content">
    <div class="page-heading">
        <div class="text-heading">
            <p style="margin-top: 440px;">Trang chủ</p>
        </div>
        <div class="img-heading">
            <img src="https://phuclong.com.vn/images/icon_tealeaves.png" alt="">
        
        </div>
    </div>
</div>

<div id="big-container" style="height: 2550px;">
    <div class="container">
        <div class="left">
            <?php
            $i = 0;
            echo '<div class="item mt-5">';
            foreach ($spnew as $sp) {
                extract($sp);
                $linksp = "index.php?act=sanphamct&idsp=" . $id;
                $hinh = $img_path . $img;

                if ($i == 0) {
                    echo '<div class="big-item">
                <span class="new">Món Mới</span>
                <a href="' . $linksp . '"><img src="' . $hinh . '" alt=""></a>
                <div class="item-infor">
                    <div class="name">
                    <a style="text-decoration:none;" href="' . $linksp . '"><p>' . $name . '</p></a>
                    </div>
                    <div class="price">
                        <p>' . number_format($price, 0, ',', '.') . 'đ</p>
                    </div>
                    <div class="btn">
                        <form action="index.php?act=addtocart" method="post">
                            <input type="hidden" name="id" value="' . $id . '">
                            <input type="hidden" name="name" value="' . $name . '">
                            <input type="hidden" name="img" value="' . $img . '">
                            <input type="hidden" name="price" value="' . $price . '">
                            <input style="margin-left: -10px; font-size: 14px" class="btn btn-success" type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                        </form>
                    </div>
                </div>
              </div>';
                } else {
                    echo '<div class="small-item">
                    <a href="' . $linksp . '"><img src="' . $hinh . '" alt=""></a>
                <div style="text-align: center;" class="item-infor">
                    <div class="name">
                    <a style="text-decoration:none;" href="' . $linksp . '"><p style="color: #000; font-size: 16px;">' . $name . '</p></a>
                    </div>
                    <div class="price">
                        <p>' . number_format($price, 0, ',', '.') . 'đ</p>
                    </div>
                    <div class="btn">
                        <form action="index.php?act=addtocart" method="post">
                            <input type="hidden" name="id" value="' . $id . '">
                            <input type="hidden" name="name" value="' . $name . '">
                            <input type="hidden" name="img" value="' . $img . '">
                            <input type="hidden" name="price" value="' . $price . '">
                            <input style=" font-size: 12px" class="btn btn-success" type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                        </form>
                    </div>
                </div>
              </div>';
                }

                $i += 1;

                if ($i == 2 || $i == 5 || $i == 8 || $i == 11 || $i == 14) {
                    echo '</div><div class="item mt-5">';
                }
            }
            echo '</div>';
            ?>



        </div>

        <?php include "boxright.php"; ?>
    </div>
</div>