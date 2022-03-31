<?php 
if(is_array($us)){
    extract($us);
}
?>
<div class="row">
    <div class="row frmtitle">
        <H1>CẬP NHẬT USER</H1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=updateuser" method="post">
            <div class="row mb10">
                Tên đăng nhập
                <input type="text" name="tendangnhap" value="<?php echo $Ten_dang_nhap;?>" disabled>
            </div>
            <div class="row mb10">
                Họ Tên
                <input type="text" name="hoten" value="<?php echo $Ho_ten?>"disabled>
            </div>
            <div class="row mb10">
                Email
                <input type="text" name="email" value="<?php echo $Email?>"disabled>
            </div>
            <div class="row mb10">
                Mật Khẩu
                <input type="text" name="matkhau" value="<?php echo $Mat_khau?>"disabled>
            </div>
            <div class="row mb10">
               Hình ảnh 
                <input type="file" name="hinhanh" value="<?php echo $Hinh_anh?>"disabled>
            </div>
            <div class="row mb10">
                Số điện thoại
                <input type="text" name="sdt" value="<?php echo $So_dien_thoai?>"disabled>
            </div>
            <div class="row mb10">
                Địa chỉ
                <input type="text" name="diachi" value="<?php echo $Dia_chi?>"disabled>
            </div>
            <div class="row mb10">
                Vai trò           
                <br>
                <input type="radio" id="1" <?php $a?> name="vaitro" value="Khách Hàng" checked <?php ?>>
                <label for="1">Khách hàng</label><br>
                <input type="radio" id="0" <?php $b?> name="vaitro" value="Quản Lý"<?php ?>>
                <label for="0">Quản Lý</label><br>
            </div>
            </div>
        </div>
        <div class="row mb10">       
            <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0))echo $id;?>">
            <input type="button" value="Xóa User">
            <input type="submit" name="suavaitro" value="Đồng ý">
            <?php if(isset($thongbao)&&($thongbao="")) echo $thongbao?>
            <?php var_dump($_POST); ?>
        </div>
        </form>
    </div>
</div>
        </form>
    </div>

    