
<div class="row">

    <div class="row frmtitle">
        <H1>THÊM MỚI voucher</H1>
    </div>
    <div class="row frmcontent ct">
        <form action="index.php?act=addvoucher" method="post" enctype="multipart/form-data" name="addvoucher">
            <div class="row mb10">
                <div class="txt" >ID SẢN PHẨM<br> </div>
                <input type="TEXT" name="idsanpham" required>
            </div>
            <div class="row mb10">
                MÃ VOUCHER<br>
                <input type="TEXT" name="mavoucher" required>
            </div>
            <div class="row mb10">
                GIẢM GIÁ<br>
                <input type="number" name="giamgia" required>
            </div>
            <div class="row mb10">
                CREATED AT<br>
                <input type="datetime-local" name="createat" required>
            </div>
            <div class="row mb10">
                UPDATED AT<br>
                <input type="datetime-local" name="updateat" required>
            </div>
            <div class="row mb10">
                HÌNH ẢNH<br>
                <input type="file" name="hinh">
            </div>
            <div class="row mb10">
                MÔ TẢ<br>
                <textarea name="mota" cols="30" rows="10"></textarea>
            </div>
            <div class="row mb10">
                <input type="submit" name="addvoucher" value="ĐỒNG Ý">
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
