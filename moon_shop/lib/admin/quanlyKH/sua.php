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
                <input type="text" name="tendangnhap" value="<?php echo $ten_dang_nhap;?>" disabled>
            </div>
            <div class="row mb10">
                Họ Tên
                <input type="text" name="hoten" value="<?php echo $ho_ten?>"disabled>
            </div>
            <div class="row mb10">
                email
                <input type="text" name="email" value="<?php echo $email?>"disabled>
            </div>
            <div class="row mb10">
                Mật Khẩu
                <input type="text" name="matkhau" value="<?php echo $mat_khau?>"disabled>
            </div>
            <div class="row mb10">
               Hình ảnh 
                <input type="file" name="hinhanh" value="<?php echo $hinh_anh?>"disabled>
            </div>
            <div class="row mb10">
                Số điện thoại
                <input type="text" name="sdt" value="<?php echo $so_dien_thoai?>"disabled>
            </div>
            <div class="row mb10">
                Địa chỉ
                <input type="text" name="diachi" value="<?php echo $dia_chi?>"disabled>
            </div>
            <div class="row mb10">
                vai trò           
                <br>
                <input type="number" name="vaitro" min="1" max="2" value="<?=$vai_tro?>" >
            </div>
            </div>
        </div>
        <div class="row mb10">       
        <input type="hidden" name="id" value="<?=$id?>">
        <td>
            <input type="submit" name="suavaitro" value="Đồng ý">
            <?php if(isset($thongbao)&&($thongbao="")) echo $thongbao?>
        </div>
        </form>
    </div>
</div>
    </div>

    