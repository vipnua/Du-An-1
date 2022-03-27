<!DOCTYPE html>
<html lang="en">
<?php
require_once("../../../publics/link.php")
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../publics/css/search.css">
    <title>Tìm Kiếm</title>
</head>

<body>
    <?php
        include("../layout/header.php");
        include("../layout/banner.php");
        ?>
        <div class="container">
         <div class="hd">   
        <div class="tx">
            <a href="#">SẢN PHẨM /</a> Kết quả tìm kiếm cho "#"
        </div>
        </div>
        <div class="box row">
            <div class="box danhmuc col">
                <div class="t h5 fw-bold">DANH MỤC SẢN PHẨM</div>
                <ul>
                    <li><a href="#">1</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">1</a></li>
                </ul>
            </div>
            <div class="box san-pham col">
                <div class="loai">
                    <div class="img-sp">
                        <img src="#" alt="">
                    </div>
                    <a>1</a>
                    <p class="gia">Gia</p>
                    <div class="ctn-button">
                        <button class="mua-ngay">Mua ngay</button>
                        <button class="them-vao-gio-hang">Thêm vào giỏ hàng</button>
                    </div>
                </div>
            </div>
        </div>
    

</div>
        <?php 
        include("../layout/footer.php")
        ?>
</body>

</html>