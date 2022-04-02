<?php 
if(is_array($vc)){
    extract($vc);
}

?>
<div class="row">
            <div class="row frmtitle">
                <H1>SỬA VOCHER</H1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=capnhatvocher" method="post">
                    <div class="row mb10">
                        Giảm giá %<br>
                        <input type="number" min="1" max="100" name="giamgia" value="<?=$id_vocher ?>">
                    </div>
                    <div class="row mb10">
                    Sản phẩm áp dụng <br>
                        <select name="sanphamapdung" id="idsanpham">
                            <option value="<?php echo $id_pham ?>"><?=$san_pham_ap_dung ?></option>
                        </select>
                    </div>
                    <div class="row mb10">
                        Mô Tả<br>
                        <textarea name="mota" cols="30" rows="10"><?=$mo_ta?></textarea>
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
