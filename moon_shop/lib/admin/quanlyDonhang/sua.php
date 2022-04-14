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
<div class="">
            <div class=" row bg-secondary rounded">
                <H1>SỬA TRẠNG THÁI</H1>
            </div>
<<<<<<< HEAD
            <div class="box ">
=======
            <div class="row frmcontent">
>>>>>>> parent of 4938e77 (1)
                <form action="index.php?act=capnhattrangthai" method="post">
                    <div class="row mb10 w-100">
                    Trạng thái hiện tại<br>
                    <input class="text-black" type="text" name="trangthai" disabled="disabled" value="<?=$strangthai?>">                  
                    </div>
                    <div class="row mb10">
                    Trạng thái<br>
<<<<<<< HEAD
                    <select class="mrbt10" name="tt" id="" required>
=======
                    <select name="tt" id="" required>
>>>>>>> parent of 4938e77 (1)
                        <option value=""selected>SỬA TRẠNG THÁI</option>
                        <option value="1">CHƯA XÁC NHẬN</option>
                        <option value="2">ĐÃ XÁC NHẬN</option>
                        <option value="3">HOÀN THÀNH MÓN</option>
                        <option value="4">XÁC NHẬN MÓN</option>
                        <option value="5">GIAO HÀNG THÀNH CÔNG</option>
<<<<<<< HEAD
                    </select>     
                       
                    </div>           
                    <div class="mrbt10">
                        <input type="hidden" name="id_tt" value="<?=$id_don_hang?>">
                        <input class="bg-success text-white" type="submit" name="capnhattrangthai" value="ĐỒNG Ý TRẠNG THÁI">
                        <a href="index.php?act=listorder"><input class="text-white bg-primary" type="button" value="Danh sách Đơn hàng"></a>
=======
                    </select>         
                    </div>
                    
                    <div class="row mb10">
                        <input type="hidden" name="id_tt" value="<?=$id_don_hang?>">
                        <input type="submit" name="capnhattrangthai" value="ĐỒNG Ý TRẠNG THÁI">
                        <input type="reset" value="NHẬP LẠI">
                        <a href="index.php?act=listorder"><input type="button" value="Danh sách Đơn hàng"></a>
>>>>>>> parent of 4938e77 (1)
                    </div>
                    <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>

                </form>
            </div>
        </div>
    </div>
