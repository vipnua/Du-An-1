<?php 
if(is_array($cb)){
    extract($cb);
}


?>
<div class="row">
            <div class="row frmtitle">
                <H1>SỬA COMBO</H1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=capnhatcombo" method="post">
                    <div class="row mb10">
                    Sản phẩm<br>
                    <input type="text" name="sanpham" value="<?=$san_pham?>">
                    </div>
                    <div class="row mb10">
                     Giá <br>
                    <input type="number" name="gia"value="<?=$gia_combo?>">
                    </div>
                    <div class="row mb10">
                        Mô Tả<br>
                        <textarea name="mota" cols="30" rows="10"><?=$mo_ta?></textarea>
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name="id_combo" value="<?=$id_combo?>">
                        <input type="submit" name="capnhatcombo" value="ĐỒNG Ý SỬA">
                        <input type="reset" value="NHẬP LẠI">
                        <a href="index.php?act=listcombo"><input type="button" value="Danh sách combo"></a>
                    </div>
                    <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>

                </form>
            </div>
        </div>
    </div>
