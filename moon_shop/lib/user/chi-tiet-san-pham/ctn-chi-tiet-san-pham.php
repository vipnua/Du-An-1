<?php

include("../../../publics/link.php");
// include("../../lib.php");
// include("../../common.php");

$id_san_pham = $_GET['id'];
// var_dump($id_san_pham);

$san_pham = getSanpham_by_id($id_san_pham);
// var_dump($san_pham);

$tuy_chon = getAll_tuychon();


foreach ($san_pham as $value_loai) {
    $loai = getLoai_by_id($value_loai["id_loai"]);
    $san_pham_tuong_tu = getSanpham_by_loai($value_loai["id_loai"]);
    // var_dump($san_pham_tuong_tu);
}

?>

<link rel="stylesheet" href="../../../publics/css/chi-tiet-san-pham.css">


<div class="container ctn-chi-tiet">
    <?php foreach ($san_pham as $value) : ?>
        <?php foreach ($loai as $ten_loai) : ?>
            <p><a href="<?php echo BASE_URL ?>/lib/user/trang-chu/">Trang chủ</a> / <a href=""> <?= $ten_loai["ten_loai"] ?></a> / <a href="<?php echo BASE_CTN ?>chi-tiet-san-pham/index.php?id=<?= $id_san_pham ?>"><?= $value["ten_san_pham"] ?></a></p>
        <?php endforeach ?>
        <div class="img-sp col-md-4 col-12">
            <div class="img-big col-12">
                <img src="<?= PUBLIC_PATH . "images/" . $value['hinh_anh'] ?>" width="100%" alt="">
            </div>
            <div class="img-small col-12">
                <div class="img col-4">
                    <!-- <img width="100%" src="./public/images/com-tam-bo-lam.jpg" alt=""> -->
                </div>
                <div class="img col-4">
                    <!-- <img width="100%" src="./public/images/com-ga.jpg" alt=""> -->
                </div>
                <div class="img col-4">
                    <!-- <img width="100%" src="./public/images/com-rang.jpg" alt=""> -->
                </div>
            </div>
        </div>

        <div class="thong-tin-sp col-md-7 col-12">
            <h4><?= $value["ten_san_pham"] ?></h4>
            <div>
                <p class="gia"><?= $value["don_gia"] ?></p>
                <p class="sao">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </p>
            </div>
            <div class="mo-ta-sp">
                <p><?= $value["mo_ta"] ?></p>
            </div>
        <?php endforeach ?>



        <!-- Món tùy chọn -->
        <p>Tùy chọn thêm món:</p>
        <div class="tuy-chon">
            <!-- <?php foreach ($tuy_chon as $value_tc) : ?> -->
            <div class="mon-tuy-chon  col-2">
                <div class="img-tuy-chon">
                    <img src="<?= PUBLIC_PATH . "images/" . $value_tc['hinh_anh'] ?>" width="100%" alt="">
                </div>
                <p class="name-tuy-chon"><?= $value_tc["ten_mon"] ?></p>
                <p class="gia-tuy-chon"><?= $value_tc["gia_mon"] ?></p>
                <p style="font-size: 13px; float: left;">SL:</p>
            </div>
            <!-- <?php endforeach ?> -->
        </div>
        <div class="so-luong">
            <button>-</button>
            <button>1</button>
            <button>+</button>
        </div>
        <div class="mua">
            <button class="mua-ngay">
                <a href="<?php echo BASE_CTN ?>thanh-toan/index.php?id=<?= $id_san_pham ?>">Mua ngay</a>
            </button>
            <button class="them-vao-gio-hang">
                <a href="<?php echo BASE_CTN ?>gio-hang/index.php?id=<?= $id_san_pham ?>">Thêm vào giỏ hàng</a>
            </button>
        </div>
        </div>

        <!-- Mua combo -->


        <!-- Món tương tự -->
        <h5>Sản phẩm tương tự</h5>
        <div class="san-pham-tuong-tu">
            <?php foreach ($san_pham_tuong_tu as $value_loai) : ?>
                <div class="col-md-3 col-6 san-pham">
                    <div class=" img-sp">
                        <img src="<?= PUBLIC_PATH . "images/" . $value_loai['hinh_anh'] ?>" width="100%" alt="">
                    </div>
                    <h5 class="name-sp"><?= $value_loai["ten_san_pham"] ?></h5>
                    <p class="gia"><?= $value_loai["don_gia"] ?> đ</p>
                    <p class="sao">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </p>
                    <div class="ctn-button">
                        <button class="mua-ngay">
                            <a href="">Mua ngay</a>
                        </button>
                        <button class="them-vao-gio-hang">Thêm vào giỏ hàng</button>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
</div>