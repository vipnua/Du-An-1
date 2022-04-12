<?php 
if(is_array($get)){
    extract($get);
}
if ($trang_thai == 1) {
    $trangthai = "CHƯA XÁC NHẬN";
    $strangthai = "XÁC NHẬN";
} else if ($trang_thai == 2) {
    $trangthai = "ĐÃ XÁC NHẬN";
    $strangthai = "HOÀN THÀNH MÓN";
}
else if ($trang_thai == 3) {
    $trangthai = "HOÀN THÀNH MÓN";
    $strangthai = "XÁC NHẬN MÓN";
} 
else if ($trang_thai == 4) {
    $trangthai = "XÁC NHẬN MÓN";
    $strangthai = "ĐÃ GIAO";
}else {
    $trangthai = "ĐÃ GIAO";
    $strangthai = "ĐÃ GIAO";
}
?>
<div class="row">
            <div class="row frmtitle">
                <H1>SỬA TRẠNG THÁI</H1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=capnhattrangthai" method="post">
                    <div class="row mb10">
                    Trạng thái hiện tại<br>
                    <input type="text" name="trangthai" disabled="disabled" value="<?=$strangthai?>">                  
                    </div>
                    <div class="row mb10">
                    Trạng thái<br>
                    <select name="tt" id="" required>
                        <option value=""selected>SỬA TRẠNG THÁI</option>
                        <option value="1">CHƯA XÁC NHẬN</option>
                        <option value="2">ĐÃ XÁC NHẬN</option>
                        <option value="3">HOÀN THÀNH MÓN</option>
                        <option value="4">XÁC NHẬN MÓN</option>
                        <option value="5">GIAO HÀNG THÀNH CÔNG</option>
                    </select>         
                    </div>
                    
                    <div class="row mb10">
                        <input type="hidden" name="id_tt" value="<?=$id_don_hang?>">
                        <input type="submit" name="capnhattrangthai" value="ĐỒNG Ý TRẠNG THÁI">
                        <input type="reset" value="NHẬP LẠI">
                        <a href="index.php?act=listorder"><input type="button" value="Danh sách theo dõi"></a>
                    </div>
                    <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>

                </form>
            </div>
        </div>
    </div>
