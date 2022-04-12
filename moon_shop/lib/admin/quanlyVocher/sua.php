<?php 
if(is_array($vc)){
    extract($vc);
}
$hinhpath="../../lib/admin/quanlyVocher/photo/".$hinh_anh;
if(is_file($hinhpath)){
    $hinh_anh="<img src='".$hinhpath."' height='80'>";
}else{
    $hinh_anh="no photo";
}
var_dump($ngay_bat_dau);
echo "2018-06-12T19:30"
?>
<div class="row">
            <div class="row frmtitle">
                <H1>SỬA VOCHER</H1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=capnhatvocher" method="post" enctype="multipart/form-data">
                    <div class="row mb10">
                       TÊN VOCHER<br>
                        <input type="text" name="tenvocher" value="<?=$ten_vocher ?>"required>
                    </div>
                    <div class="row mb10">
                       GIẢM GIÁ<br>
                        <input type="text" name="giamgia" value="<?=$giam_gia ?>"required>
                    </div><div class="row mb10">
                       NGÀY TẠO<br>
                        <input type="datetime-local" name="ngaytao" value="<?=$ngay_tao_vocher ?>"required>
                    </div><div class="row mb10">
                       NGÀY BẮT ĐẦU<br>
                        <input type="datetime-local" name="ngaybatdau" value="<?=$ngay_bat_dau ?>"required>
                       
                    </div>
                    <div class="row mb10">
                       NGÀY KẾT THÚC<br>
                        <input type="datetime-local" name="ngayketthuc" value="<?=$ngay_ket_thuc ?>"required>
                    </div>
                    <div class="row mb10">
                        Mô Tả<br>
                        <textarea name="mota" cols="30" rows="10"><?=$mo_ta?></textarea>
                    </div>
                    <div class="row mb10">  
                     SỬA HÌNH ẢNH<br>
                        <input type="file" name="hinh"  style="margin-bottom:5px";value="<?=$hinh_anh ?>">
                        <br>
                        <?=$hinh_anh ?>
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name="id_vocher" value="<?=$id_vocher?>">
                        <input type="submit" name="capnhatvocher" value="ĐỒNG Ý SỬA">
                        <input type="reset" value="NHẬP LẠI">
                        <a href="index.php?act=listvocher"><input type="button" value="Danh sách vocher"></a>
                    </div>
                    <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>

                </form>
            </div>
        </div>
    </div>
