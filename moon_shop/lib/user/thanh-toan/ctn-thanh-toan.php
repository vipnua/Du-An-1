<link rel="stylesheet" href="../../../publics/css/thanh-toan.css">

<?php

include("../../../publics/link.php");
include("../../lib.php");
include("../../common.php");

$id_sp = $_GET['id'];

// var_dump($id_sp);

$san_pham = getSanpham_by_id($id_sp);

?>
<div class="container ctn-gio-hang">
    <div class="dia-chi col-12">
        <h5>Địa chỉ nhận hàng</h5>
        <p>Họ và tên:</p>
        <p>Địa chỉ:</p>
        <p>Số điện thoại:</p>
    </div>
    <hr style="opacity: 45%; width: 90%; margin-top: 35px;">


    <!-- Giỏ hàng desktop -->
    <table class="col-12 ctn-desktop" style="margin: 20px 0px;">
        <tr class="title">
            <th class="check col-1"></th>
            <th class="sp col-5">Sản phẩm</th>
            <th class="so-luong col-2">Số lượng</th>
            <th class="don-gia col-2">Thành tiền</th>
        </tr>
        <tr>
            <?php foreach ($san_pham as $value) : ?>
                <td>
                    <input type="checkbox">
                </td>
                <td>
                    <div class="img-sp col-3">
                        <img src="<?= PUBLIC_PATH . "images/" . $value['hinh_anh'] ?>" width="100%" alt="">
                    </div>
                    <div class="name-sp col-8">
                        <i><?= $value["ten_san_pham"] ?></i>
                    </div>
                </td>
                <td>
                    <div class="btn-so-luong">
                        <p>1</p>
                    </div>
                </td>
                <td><?= $value["don_gia"] ?></td>
            <?php endforeach ?>
        </tr>
    </table>


    <!-- Giỏ hàng mobile -->
    <div class="ctn-mobile">
        <div class="col-1">
            <input type="checkbox">
        </div>
        <div class="img-sp col-2 ">
            <img src="<?= PUBLIC_PATH . "images/" . $value['hinh_anh'] ?>" width="100%" alt="">
        </div>
        <div class="name-sp col-9">
            <i>Cơm tấm mẹ làm</i>
            <p class="gia-sp">25.000 đ</p>
            <div class="btn-so-luong">
                <p>x1</p>
            </div>
        </div>
    </div>
    <hr style="opacity: 45%; width: 90%; margin-top: 35px;">

    <div class="pvc col-12">
        <p>Phí vận chuyển (a):</p>
        <p>Tổng tiền đơn hàng (b):</p>
        <p>voucher (c):</p>
        <p>Thời gian giao hàng dự kiến:</p>
        <p>
            Tin nhắn:
            <input style="border:0.5px solid black ;" type="text">
        </p>
    </div>
    <hr style="opacity: 45%; width: 90%;">
    <div class="voucher col-12">
        <div class="text-thanh-toan col-md-7 col-12">
            <p>Thành tiền (a + b -c):</p>
            <button>Thanh toán</button>
        </div>
    </div>

</div>