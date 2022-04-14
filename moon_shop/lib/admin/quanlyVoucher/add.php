
<div class="box">

    <div class="row">
        <H1>THÊM MỚI VOUCHER</H1>
    </div>
    <div class="row frmcontent ct">
        <form action="index.php?act=addvoucher" method="post" enctype="multipart/form-data" name="addvoucher">
            <div class="row ">
                <div class="txt" >ID SẢN PHẨM<br> </div>
                <input type="TEXT" name="idsanpham" required>
            </div>
            <div class="row ">
                MÃ VOUCHER<br>
                <input type="TEXT" name="mavoucher" required>
            </div>
            <div class="row ">
                GIẢM GIÁ<br>
                <input type="number" name="giamgia" required>
            </div>
            <div class="row ">
                CREATED AT<br>
                <input type="datetime-local" name="createat" required>
            </div>
            <div class="row ">
                UPDATED AT<br>
                <input type="datetime-local" name="updateat" required>
            </div>
            <div class="row ">
                HÌNH ẢNH<br>
                <input type="file" name="hinh">
            </div>
            <div class="row ">
                MÔ TẢ<br>
                <textarea name="mota" cols="30" rows="10"></textarea>
            </div>
            <div class="talct">
                <input  class="bg-success mrbt10 mrbt10 rounded" type="submit" name="addvoucher" value="ĐỒNG Ý">
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
