<div class="row">
    <div class="row frmtitle">
        <h1>Danh sách Đơn hàng</h1>
    </div>
<div class="row frmcontent">
        <div class="row mb10 frmdsuser">
            <table>
                <tr>
                    <th></th>
                    <th>ID ĐƠN HÀNG</th>
                    <th>HỌ TÊN</th>
                    <th>ĐỊA CHỈ</th>
                    <th>THÀNH TIỀN(VND)</th>
                    <th>LƯU Ý</th>
                    <th>NGÀY ĐẶT</th>
                    <th>CHỈNH SỬA</th>
                    <th>TRẠNG THÁI</th>
                </tr>
                <?php               
                foreach ($listtddh as $donhang) {
                    extract($donhang);     
                    $suathedoi = "index.php?act=xoathedoi&id=" . $id_don_hang;
                    $xoadonhang = "index.php?act=xoadonhang&id=" . $id_don_hang;
                    if ($trang_thai == 1) {
                        $trangthai = "CHƯA XÁC NHẬN";
                        //$strangthai = "XÁC NHẬN";
                    } else if ($trang_thai == 2) {
                        $trangthai = "ĐÃ XÁC NHẬN";
                        //$strangthai = "HOÀN THÀNH MÓN";
                    }
                    else if ($trang_thai == 3) {
                        $trangthai = "HOÀN THÀNH MÓN";
                       // $strangthai = "XÁC NHẬN MÓN";
                    } 
                    else if ($trang_thai == 4) {
                        $trangthai = "XÁC NHẬN MÓN";
                        //$strangthai = "ĐÃ GIAO";
                    }else {
                        $trangthai = "ĐÃ GIAO";
                       // $strangthai = "ĐÃ GIAO";
                    }
                   ?> <form action="" method="post">
                         <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td><?=$id_don_hang ?></td>
                            <td><?= $ten_khach_hang ?></td>
                            <td><?= $dia_chi_giao_hang ?></td>
                            <td><?= $thanh_tien ?> đ</td>
                            <td><?= $luu_y ?></td>
                            <td><?= $ngay_dat_hang ?></td>
                            <td><a href="<?=$xoadonhang?>"><input type="button" value="Xóa"></a>
                            </td>
                            <td><a href="<?=$suathedoi?>"><input type="button" value="<?=$trangthai?>"></a></td>
                             </tr>                            
                             </form>
              <?php  }?>                      
            </table>
        </div>
        <div class="row mb10">       
                                    <input type="button" value="Chọn tất cả" id="checkbox_all">
                                    <input type="button" value="Bỏ chọn tất cả">
                                    <input type="button" value="Xóa các mục đã chọn">
                                    <input type="submit" name="dongy" value="Đồng ý">
                                    <?php if(isset($thongbao)&&($thongbao="")) echo $thongbao?>
                              </div> 
    </div>
    