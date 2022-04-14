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
            <div class="bg-secondary rounded">
                <H1>SỬA TRẠNG THÁI</H1>
            </div>
            <div class="text-center">
                <form action="index.php?act=capnhattrangthai" method="post">
                    <div class="mb10 w-100">
                    Trạng thái hiện tại<br>
                    <input type="text" name="trangthai" disabled="disabled" value="<?=$strangthai?>">                  
                    </div>
                    <div >
                    Trạng thái<br>
                    <select class="pd10" name="tt" id="" required>
                        <option value=""selected>SỬA TRẠNG THÁI</option>
                        <option value="1">CHƯA XÁC NHẬN</option>
                        <option value="2">ĐÃ XÁC NHẬN</option>
                        <option value="3">HOÀN THÀNH MÓN</option>
                        <option value="4">XÁC NHẬN MÓN</option>
                        <option value="5">GIAO HÀNG THÀNH CÔNG</option>
                    </select>     
                    <input class="" type="submit" name="capnhattrangthai" value="ĐỒNG Ý TRẠNG THÁI">    
                    </div>
                    
                    <div class="mb10">
                        <input type="hidden" name="id_tt" value="<?=$id_don_hang?>">
                    
                        <a href="index.php?act=listorder"><input type="button" value="Danh sách Đơn hàng"></a>
                    </div>
                    <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>

                </form>
            </div>
        </div>
    </div>
