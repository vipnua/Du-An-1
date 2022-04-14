<?php 
if(is_array($get)){
    extract($get);
}
if ($trang_thai == 1) {
    $trangthai = "CHƯA XÁC NHẬN";

} else if ($trang_thai == 2) {
    $trangthai = "ĐÃ XÁC NHẬN";

}
else if ($trang_thai == 3) {
    $trangthai = "HOÀN THÀNH MÓN";

} 
else if ($trang_thai == 4) {
    $trangthai = "XÁC NHẬN MÓN";

}else {
    $trangthai = "ĐÃ GIAO";

}
?>
<div class="">
            <div class=" row bg-secondary rounded">
                <H1>SỬA TRẠNG THÁI</H1>
            </div>
            <div class="box ">
                <form action="index.php?act=capnhattrangthai" method="post">
                    <div class="row mb10 w-100">
                    Trạng thái hiện tại<br>
                    <input class="text-black" type="text" name="trangthai" disabled="disabled" value="<?=$trangthai?>">                  
                    </div>
                    <div class="row mb10">
                    Trạng thái<br>
                    <div class="row mrt10"> 
                        <select class="mrbt10" name="tt" id="" required>
                        <option value=""selected>SỬA TRẠNG THÁI</option>
                        <option value="1">CHƯA XÁC NHẬN</option>
                        <option value="2">ĐÃ XÁC NHẬN</option>
                        <option value="3">HOÀN THÀNH MÓN</option>
                        <option value="4">XÁC NHẬN MÓN</option>
                        <option value="5">GIAO HÀNG THÀNH CÔNG</option>
                    </select>    
                </div>
                     
                       
                    </div>           
                    <div class="mrbt10">
                        <input type="hidden" name="id_tt" value="<?=$id_don_hang?>">
                        <input class="bg-success text-white" type="submit" name="capnhattrangthai" value="ĐỒNG Ý TRẠNG THÁI">
                        <a href="index.php?act=listorder"><input class="text-white bg-primary" type="button" value="Danh sách Đơn hàng"></a>
                    </div>
                    <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>

                </form>
            </div>
        </div>
    </div>
