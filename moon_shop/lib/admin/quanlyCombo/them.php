
<div class="row">
            <div class="row frmtitle">
                <H1>THÊM MỚI Combo</H1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=addcombo" method="post">
                    <div class="row mb10">
                        Sản phẩm<br>
                        <input type="text" name="sanpham">
                    </div>
                    <div class="row mb10">
                         Giá combo <br>
                    <input type="number" name="giacombo">
                    </div>
                    <div class="row mb10">
                        Mô Tả<br>
                        <textarea name="mota" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="row mb10">
                        <input type="submit" name="addcombo" value="ĐỒNG Ý">
                        <input type="reset" value="NHẬP LẠI">
                        <a href="index.php?act=listcombo"><input type="button" value="Danh sách Combo"></a>
                    </div>
                    <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>

                </form>
            </div>
        </div>
    </div>
