<?php
include "../../../lib/lib.php";


$user = getAllUser();

$vt = $_POST['vai_tro'];
echo $vt;


?>
<<<<<<< Updated upstream
=======
<<<<<<< HEAD
<div>
    <div class="row">
        <H1>CẬP NHẬT USER</H1>
    </div>
    <div class="box">
        <form action="index.php?act=updateuser" method="post">        
            <div class="row">
=======
>>>>>>> Stashed changes

<div class="row">
    <div class="row frmtitle">
        <H1>CẬP NHẬT USER</H1>
    </div>
    <div class="row frmcontent">
<<<<<<< Updated upstream
        <form action="index.php?act=updateuser" method="post">
            
            <div class="row mb10">
>>>>>>> d25fa0e725cb7e04ffae2f0c439fb6d3acef2e37
                VAI TRÒ        
                <br>
                <? if($vai_tro==1)$vai_tro1="Khách hàng";else $vai_tro1="Quản lý"; ?>
                <select class="mrbt10" name="vaitro" id="" required>
                        <option value="">--CHỌN LẠI--</option>
                        <option value="1">Khách hàng</option>
                        <option value="2">Quản lý</option>
                </select>
                <input class="text-black bg-warning" type="submit" name="suavaitro" value="Đồng ý">
            </div>
            </div>
        </div>
        <div class="text-black">       
        <input type="hidden" name="id" value="<?=$id?>">
        <td class="border">
            <?php if(isset($thongbao)&&($thongbao="")) echo $thongbao?>
        </div>
        </form>
    </div>
</div>
=======

        <form action="" method="POST">
            <?php foreach ($user as $value) : ?>
                <div class="row mb10">
                    Tên đăng nhập
                    <input type="text" name="tendangnhap" value="<?= $value['Ten_dang_nhap'] ?>" disabled>
                </div>
                <!-- <div class="row mb10">
                    Họ Tên
                    <input type="text" name="hoten" value="<?= $value['Ho_ten'] ?>" disabled>
                </div>
                <div class="row mb10">
                    Email
                    <input type="text" name="email" value="<?php echo $Email ?>" disabled>
                </div>
                <div class="row mb10">
                    Mật Khẩu
                    <input type="text" name="matkhau" value="<?php echo $Mat_khau ?>" disabled>
                </div>
                <div class="row mb10">
                    Hình ảnh
                    <input type="file" name="hinhanh" value="<?php echo $Hinh_anh ?>" disabled>
                </div>
                <div class="row mb10">
                    Số điện thoại
                    <input type="text" name="sdt" value="<?php echo $So_dien_thoai ?>" disabled>
                </div>
                <div class="row mb10">
                    Địa chỉ
                    <input type="text" name="diachi" value="<?php echo $Dia_chi ?>" disabled>
                </div> -->
                <div class="row mb10">
                    Vai trò
                    <select name='vai_tro_ad'>
                        <option value="1" name="vai_tro">dmin</option>
                    </select>
                </div>
            <?php endforeach ?>
        </form>
    </div>
    <div class="row mb10">
        <input type="hidden" name="id" value="<?php if (isset($id) && ($id > 0)) echo $id; ?>">
        <input type="button" value="Xóa User">
        <input type="submit" name="suavaitro" value="Đồng ý">
        <?php if (isset($thongbao) && ($thongbao = "")) echo $thongbao ?>
        <?php var_dump($_POST); ?>
>>>>>>> Stashed changes
    </div>
</div>
</div>
</form>
</div>