
<div class="row">
            <div class="row frmtitle">
                <H1>THÊM MỚI TÙY CHỌN</H1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=addtuychon" method="post"  enctype="multipart/form-data">
                    <div class="row mb10">
                      Tên Món<br>
                        <input type="text" name="tenmon" required>
                    </div>
                    <div class="row mb10">
                         Giá Món <br>
                    <input type="number" name="giamon"required>
                    </div>
                    <div class="row mb10">
                        Mô Tả<br>
                        <textarea name="mota" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="row mb10">
                      Số lượng<br>
                        <input type="number" name="soluong" min="0"required>
                    </div>
                    <div class="row mb10">
                      Hình ảnh<br>
                      <input type="file" name="hinh">
                    </div>
                    <div class="row mb10">
                        <input type="submit" name="addtuychon" value="ĐỒNG Ý">
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
