<div class="row">
            <div class="row frmtitle">
                <H1>THÊM MỚI VOCHER</H1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=adddm" method="post">
                    <div class="row mb10">
                        Giảm giá<br>
                        <input type="text" name="giamgia">
                    </div>
                    <div class="row mb10">
                        Sản phẩm áp dụng<br>
                        <input type="text" name="sp">
                    </div>
                    <div class="row mb10">
                        Mô Tả<br>
                        <textarea name="mota" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="row mb10">
                        <input type="submit" name="themmoi" value="THÊM MỚI">
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