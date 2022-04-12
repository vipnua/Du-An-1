<?php 
if(is_array($get)){
    extract($get);
}

$hinhpath="../../publics/images/".$hinh_anh;
if(is_file($hinhpath)){
    $hinh_anh="<img src='".$hinhpath."' height='80'>";
}else{
    $hinh_anh="no photo";
}


?>

<div class="row">
            <div class="row frmtitle">
                <H1>SỬA TÙY CHỌN</H1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=capnhattuychon" name="suatuychon" method="post" enctype="multipart/form-data">
                    <div class="row mb10">
                    TÊN MÓN<br>
                    <input type="text" name="tenmon" value="<?=$ten_mon?>"required>
                    </div>
                    <div class="row mb10">
                     GIÁ MÓN <br>
                    <input type="number" name="giamon"value="<?=$gia_mon?>"required>
                    </div>
                    <div class="row mb10">
                        Mô Tả<br>
                        <textarea name="mota" cols="30" rows="10"><?=$mo_ta?></textarea>
                    </div>
                    <div class="row mb10">
                     SỐ LƯỢNG <br>
                    <input type="number" name="soluong" value="<?=$so_luong?>"required>
                    </div>
                    <div class="row mb10">
                    HÌNH ẢNH <br>
                    <input type="file" name="hinh">
                        <?=$hinh_anh?>
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?=$id_tuy_chon?>" />
                        <input type="submit" name="capnhattuychon" value="ĐỒNG Ý SỬA">
                        <input type="reset" value="NHẬP LẠI">
                        <a href="index.php?act=listtuychon"><input type="button" value="Danh sách Tùy chọn"></a>
                    </div>
                    <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>

                </form>
            </div>
        </div>
    </div>
