
<div class="row">

    <div class="row frmtitle">
        <H1>THÊM MỚI VOCHER</H1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=addvocher" method="post" enctype="multipart/form-data" name="addvocher">
            <div class="row mb10">
                TÊN VOCHER<br>
                <input type="TEXT" name="tenvocher" required>
            </div>
            <div class="row mb10">
                GIẢM GIÁ<br>
                <input type="text" name="giamgia" required>
            </div>
            <div class="row mb10">
                NGÀY TẠO<br>
                <input type="datetime-local" name="ngaytao" required>
            </div>
            <div class="row mb10">
                NGÀY BẮT ĐẦU<br>
                <input type="datetime-local" name="ngaybatdau" required>
            </div>
            <div class="row mb10">
                NGÀY KẾT THÚC<br>
                <input type="datetime-local" name="ngayketthuc" required>
            </div>
            <div class="row mb10">
                MÔ TẢ<br>
                <textarea name="mota" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="row mb10">
                HÌNH ẢNH<br>
                <input type="file" name="hinh">
            </div>
            <div class="row mb10">
                <input type="submit" name="addvocher" value="ĐỒNG Ý">
                <input type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listvocher"><input type="button" value="Danh sách vocher"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
            ?>

        </form>
    </div>
</div>
</div>
