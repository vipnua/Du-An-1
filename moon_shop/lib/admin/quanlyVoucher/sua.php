<?php
if (is_array($vc)) {
    extract($vc);
}
$hinhpath = "../../lib/admin/quanlyvoucher/photo/" . $anh;
if (is_file($hinhpath)) {
    $anh = "<img src='" . $hinhpath . "' height='80'>";
} else {
    $anh = "no photo";
}
?>
<div class="row">
    <div class="row frmtitle">
        <H1>SỬA voucher</H1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=capnhatvoucher" method="post" enctype="multipart/form-data">
            <div class="row mb10">
                ID SẢN PHẨM<br>
                <input type="text" name="idsanpham" value="<?= $ma_voucher ?>" required>
            </div>
            <div class="row mb10">
                Mã VOUCHER<br>
                <input type="text" name="mavoucher" value="<?= $ma_voucher ?>" required>
            </div>
            <div class="row mb10">
                GIẢM GIÁ<br>
                <input type="number" name="giamgia" value="<?= $giam_gia ?>" required>
            </div>
            <div class="row mb10">
                CREATED AT<br>
                <input type="datetime-local" name="createdat" value="<?= $created_at ?>">
            </div>
            <div class="row mb10">
                UPDATED AT<br>
                <input type="datetime-local" name="updatedat" value="<?= $updated_at ?>" >
            </div>
            <div class="row mb10">
                SỬA HÌNH ẢNH<br>
                <input type="file" name="hinh" style="margin-bottom:5px" ;value="<?= $anh ?>">
                <br>
                <?= $anh ?>
            </div>
            <div class="row mb10">
                Mô Tả<br>
                <textarea name="mota" cols="30" rows="10"><?= $mota ?></textarea>
            </div>
            <div class="row mb10">
                <input type="hidden" name="id_voucher" value="<?= $id_voucher ?>">
                <input type="submit" name="capnhatvoucher" value="ĐỒNG Ý SỬA">
                <input type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listvoucher"><input type="button" value="Danh sách voucher"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
            ?>

        </form>
    </div>
</div>
</div>