<!DOCTYPE html>
<html lang="en">
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
<link rel="stylesheet" href="../../publics/css/trang-chu.css">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../publics/css/search.css">
    <link rel="stylesheet" href="../../publics/css/chi-tiet-san-pham.css">
    
    
    <title>Tìm Kiếm</title>
</head>

<body>
    <?php
        include("../layout/header.php");
        include("../layout/banner.php");
        ?>
<div class="container row">
    <div class="tx">
        <a href="#">SẢN PHẨM /</a> Kết quả tìm kiếm cho "<?php echo ($search);?>"
    </div>
    <div class="danhmuc col">
        <h6 class="title">DANH MỤC SẢN PHẨM</h6>
        <ul>
            <li><a href="#">Danh muc 1</a></li>
            <li><a href="#">Danh muc 2</a></li>
            <li><a href="#">Danh muc 3</a></li>
            <li><a href="#">Danh muc 4</a></li>
            <li><a href="#">Danh muc 5</a></li>
        </ul>
    </div>
        
        <?php 
        if(/*$num>0 && */$search !=""){
            // Dùng $num để đếm số dòng trả về.
            //echo "$num Kết quả trả về với từ khóa <b>$search</b>";
            // Vòng lặp while & mysql_fetch_assoc dùng để lấy toàn bộ dữ liệu có trong table và trả về dữ liệu ở dạng array.
            foreach($lishdanhsach as $danhsach){
                extract($danhsach);
                /*link sản phẩm ở đây
                $linksp = "../user/chi-tiet-san-pham/ctn-chi-tiet-san-pham&idsp=".$id;
                */
        ?>
        
             <div class="san-pham col">

                <div class="col-md-12 col-12 san-pham">
                    <div class=" img-sp">
                        <img src="<?php echo "../../../publics/images/".($hinh_anh)?>" width="100%" alt="">
                    </div>
                    <a href="<?php echo BASE_CTN ?>chi-tiet-san-pham/index.php?id=<?= $danhsach['id_san_pham'] ?>" class="name-sp">
                    <h5><?= $danhsach['ten_san_pham'] ?></h5>
                </a>
                <div class="box1">
                    <div class="gia ">
                    <?php echo ($don_gia)." đ"; ?>
                    </div>
                    <div class="sao ">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                </div>
            </div>
                    <div class="ctn-button">
                        <button class="mua-ngay">Mua ngay</button>
                        <button class="them-vao-gio-hang">Thêm vào giỏ hàng</button>
                    </div>
                </div>
                <hr style="opacity: 100%; width: 65%; margin: 10px auto;">
            </div>


           <?php 
            }
        }else{
                ?>
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
              <?php  } ?>

</div>
        <?php 
        include("../layout/footer.php")
        ?>
</body>

</html>