<?php
if (is_array($vc)) {
    extract($vc);
}
$hinhpath = "../../lib/admin/quanlyvoucher/photo/" . $anh;
if (is_file($hinhpath)) {
    $anh = "<img src='" . $hinhpath . "' height='200' width='300'>";
} else {
    $anh = "no photo";
}
?>
<div class="box">
    <div class="row frmtitle">
        <H1>SỬA VOUCHER</H1>
    </div>
    <div class="">
        <form action="index.php?act=capnhatvoucher" method="post" enctype="multipart/form-data">
            <div class="row mrbt10">
                ID SẢN PHẨM<br>
                <input type="text" name="idsanpham" value="<?= $ma_voucher ?>" required>
            </div>
            <div class="row mrbt10">
                Mã VOUCHER<br>
                <input type="text" name="mavoucher" value="<?= $ma_voucher ?>" required>
            </div>
            <div class="row mrbt10">
                GIẢM GIÁ<br>
                <input type="number" name="giamgia" value="<?= $giam_gia ?>" required>
            </div>
            <div class="row mrbt10">
                CREATED AT<br>
                <input type="datetime-local" name="createdat" value="<?= $created_at ?>"required>
            </div>
            <div class="row mrbt10">
                UPDATED AT<br>
                <input type="datetime-local" name="updatedat" value="<?= $updated_at ?>" required>
            </div>
            <div class="row mrbt10">
                SỬA HÌNH ẢNH<br>
                <input type="file" name="hinh" value="<?= $anh ?>">
                <br>
                
                <div class="col text-center"><?= $anh ?></div>
            </div>

            <div class="row mrbt10">
                Mô Tả<br>
                <textarea name="mota" cols="30" rows="10"><?= $mota ?></textarea>
            </div>
            <div class="talct">
                <input type="hidden" name="id_voucher" value="<?= $id_voucher ?>">
                <input class="bg-success mrbt10 mrbt10 rounded" type="submit" name="capnhatvoucher" value="ĐỒNG Ý SỬA">
                <input class="bg-danger rounded" type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listvoucher"><input class="text-white bg-primary rounded" type="button" value="Danh sách voucher"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
            ?>

        </form>
    </div>
</div>
</div>