<link rel="stylesheet" href="../../../publics/css/gio-hang.css">

<?php

include("../../../publics/link.php");
include("../../common.php");
include("../../lib.php");


$id = $_GET["id"];
// var_dump($id);

$san_pham = getSanpham_by_id($id);

foreach ($san_pham as $value) {
    addSanpham($value["id_san_pham"], $value["don_gia"]);
}



?>
<div class="container ctn-gio-hang">
    <!-- Giỏ hàng desktop -->
    <table class="col-12 ctn-desktop" style="margin: 20px 0px;">
        <tr class="title">
            <th class="check col-1"></th>
            <th class="sp col-5">Sản phẩm</th>
            <th class="so-luong col-2">Số lượng</th>
            <th class="don-gia col-2">Đơn giá</th>
            <th class="sua col-2">Sửa</th>
        </tr>
        <?php foreach ($san_pham as $value) ?>
        <tr>
            <td class="border">
                <input type="checkbox">
            </td>
            <td class="border">
                <div class="img-sp col-3">
                    <img src="<?= PUBLIC_PATH . "images/" . $value['hinh_anh'] ?>" width="100%" alt="">
                </div>
                <div class="name-sp col-8">
                    <i><?= $value["ten_san_pham"] ?></i>
                </div>
            </td>
            <td class="border">
                <div class="btn-so-luong">
                    <button>-</button>
                    <button>1</button>
                    <button>+</button>
                </div>
            </td>
            <td class="border"><?= $value["don_gia"] ?></td>
            <td class="border">
                <button style="border: 1px solid black; border-radius: 5px;">Xóa</button>
            </td>
        </tr>
    </table>


    <!-- Giỏ hàng mobile -->
    <div class="ctn-mobile">
        <div class="col-1">
            <input type="checkbox">
        </div>
        <div class="img-sp col-2 ">
            <img width="100%" src="./public/images/com-tam.jpg" alt="">
        </div>
        <div class="name-sp col-9">
            <i>Cơm tấm mẹ làm</i>
            <p class="gia-sp">25.000 đ</p>
            <div class="btn-so-luong">
                <button>-</button>
                <button>1</button>
                <button>+</button>
            </div>
        </div>
    </div>


    <hr style="opacity: 45%; width: 90%; margin-top: 35px;">
    <div class="voucher col-12">
        <div class="text-voucher col-md-4 col-12">
            <p>Chọn voucher:</p>
            <a href="#">Chọn voucher</a>
        </div>
    </div>
    <hr style="opacity: 45%; width: 90%;">
    <div class="voucher col-12">
        <div class="text-thanh-toan col-md-7 col-12">
            <p>Tổng tiền cần thanh toán:</p>
            <button>Thanh toán</button>
        </div>
    </div>

</div>