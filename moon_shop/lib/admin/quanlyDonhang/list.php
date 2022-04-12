<div class="row frmcontent">
        <div class="row mb10 frmdsuser">
            <table>
                <tr>
                    <th></th>
                    <th>ID CHI TIẾT</th>
                    <th>HỌ TÊN</th>
                    <th>ĐỊA CHỈ</th>
                    <th>SỐ ĐIỆN THOẠI</th>
                    <th>THÀNH TIỀN(VND)</th>
                    <th>LƯU Ý</th>
                    <th>NGÀY ĐẶT</th>
                    <th>GIỜ GIAO DỰ KIẾN</th>
                    <th>CHỈNH SỬA</th>
                    <th>TRẠNG THÁI</th>
                </tr>
                <?php               
                foreach ($listtddh as $donhang) {
                    extract($donhang);     
                    $suathedoi = "index.php?act=suathedoi&id=" . $id_chi_tiet;
                    $xoadonhang = "index.php?act=xoadonhang&id=" . $id_chi_tiet;
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
                            <td><?=$id_chi_tiet ?></td>
                            <td><?= $ho_ten ?></td>
                            <td><?= $dia_chi ?></td>
                            <td><?= $so_dien_thoai ?></td>
                            <td><?= $thanh_tien ?></td>
                            <td><?= $luu_y ?></td>
                            <td><?= $ngay_dat_hang ?></td>
                            <td><?= $gio_giao_du_kien ?></td>
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
    