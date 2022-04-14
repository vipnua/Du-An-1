<?php 
if(is_array($us)){
    extract($us);
}
?>
<div class="row">
    <div class="row frmtitle">
        <H1>CẬP NHẬT Vocher</H1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=updateuser" method="post">
            <div class="row mb10">
                ID
                <input type="number" name="idvocher" value="<?php echo $id_vocher;?>">
            </div>
            <div class="row mb10">
                Giảm giá
                <input type="number" name="giamgiavocher" value="<?php echo $Giam_gia; ?>">
            </div>
            <div class="row mb10">
                Sản phẩm áp dụng
                <input type="number" name="spad" value="<?php echo $San_pham_ap_dung?>">
            </div>
            <div class="row mb10">
                Mô tả
                <textarea id="" name="mota" rows="4" cols="50"><?php echo $Mo_ta; ?></textarea>

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

    