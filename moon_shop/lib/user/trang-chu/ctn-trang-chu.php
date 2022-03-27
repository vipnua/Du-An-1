<?php

include("../../../publics/link.php");

include("../../lib.php");
include("../../common.php");

// Lấy bảng loại

$loai = getAll_loai();

// var_dump($loai);

// Lay san pham theo loai
$com_tam = getSanpham_by_loai(1);

$pho = getSanpham_by_loai(2);

$do_uong = getSanpham_by_loai(3);




?>

<link rel="stylesheet" href="../../../publics/css/trang-chu.css">



<div class="container ctn-trang-chu">
    <div class="loai">
        <?php foreach ($loai as $value_loai) : ?>
            <div class="col-md-2 col-4 loai-sp">
                <div class=" c">
                    <img src="<?= PUBLIC_PATH . "images/" . $value_loai['hinh_anh'] ?>" width="100%" alt="">
                </div>
                <p>
                    <?= $value_loai['ten_loai'] ?>
                </p>
            </div>
        <?php endforeach ?>
    </div>




    <!-- Cơm tấm -->
    <h4>Cơm tấm</h4>
    <div class="san-pham">
        <?php foreach ($com_tam as $value_com) : ?>
            <div class="col-md-3 col-6 san-pham">
                <div class=" img-sp">
                    <img src="<?= PUBLIC_PATH . "images/" . $value_com['hinh_anh'] ?>" width="100%" alt="">
                </div>
                <a href="<?php echo BASE_CTN ?>chi-tiet-san-pham/index.php?id=<?= $value_com['id_san_pham'] ?>" class="name-sp">
                    <h5><?= $value_com['ten_san_pham'] ?></h5>
                </a>
                <p class="gia">
                    <?= $value_com['don_gia'] ?> đ
                </p>
                <p class="sao">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </p>
                <div class="ctn-button">
                    <button class="mua-ngay">Mua ngay</button>
                    <button class="them-vao-gio-hang">Thêm vào giỏ hàng</button>
                </div>
            </div>
        <?php endforeach ?>
        <hr style="opacity: 100%; width: 65%; margin: 10px auto;">
    </div>



    <!-- Phở -->
    <h4>Phở</h4>
    <div class="san-pham">
        <?php foreach ($pho as $value_pho) : ?>
            <div class="col-md-3 col-6 san-pham">
                <div class=" img-sp">
                    <img src="<?= PUBLIC_PATH . "images/" . $value_pho['hinh_anh'] ?>" width="100%" alt="">
                </div>
                <a href="<?php echo BASE_CTN ?>chi-tiet-san-pham/index.php?id=<?= $value_pho['id_san_pham'] ?>" class="name-sp">
                    <h5><?= $value_pho['ten_san_pham'] ?></h5>
                </a>
                <p class="gia">
                    <?= $value_pho['don_gia'] ?> đ
                </p>
                <p class="sao">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </p>
                <div class="ctn-button">
                    <button class="mua-ngay">Mua ngay</button>
                    <button class="them-vao-gio-hang">Thêm vào giỏ hàng</button>
                </div>
            </div>
        <?php endforeach ?>
        <hr style="opacity: 100%; width: 65%; margin: 10px auto;">
    </div>

    <!-- Đồ uống -->
    <h4>Đồ uống</h4>
    <div class="san-pham">
        <?php foreach ($do_uong as $value_uong) : ?>
            <div class="col-md-3 col-6 san-pham">
                <div class=" img-sp">
                    <img src="<?= PUBLIC_PATH . "images/" . $value_uong['hinh_anh'] ?>" width="100%" alt="">
                </div>
                <a href="<?php echo BASE_CTN ?>chi-tiet-san-pham/index.php?id=<?= $value_uong['id_san_pham'] ?>" class="name-sp">
                    <h5><?= $value_uong['ten_san_pham'] ?></h5>
                </a>
                <p class="gia">
                    <?= $value_uong['don_gia'] ?> đ
                </p>
                <p class="sao">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </p>
                <div class="ctn-button">
                    <button class="mua-ngay">Mua ngay</button>
                    <button class="them-vao-gio-hang">Thêm vào giỏ hàng</button>
                </div>
            </div>
        <?php endforeach ?>
        <hr style="display: none; opacity: 100%; width: 65%; margin: 10px auto;">
    </div>
</div>