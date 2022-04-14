<div class="row">
    <div>
        <h1>Danh sách Đơn hàng</h1>
    </div>
<div >
        <div>
            <table class="w-100">
                <tr class="border">
                    <th >ID ĐƠN HÀNG</th>
                    <th class="border">HỌ TÊN</th>
                    <th class="border">ĐỊA CHỈ</th>
                    <th class="border">THÀNH TIỀN(VND)</th>
                    <th class="border">LƯU Ý</th>
                    <th class="border">NGÀY ĐẶT</th>
                    <th class="border">CHỈNH SỬA</th>
                    <th class="border">TRẠNG THÁI</th>
                </tr>
                <?php               
                foreach ($listtddh as $donhang) {
                    extract($donhang);     
                    $suathedoi = "index.php?act=suathedoi&id=" . $id_don_hang;
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
                         <tr class="border">
                            <td class="border"><?=$id_don_hang ?></td>
                            <td class="border"><?= $ten_khach_hang ?></td>
                            <td class="border"><?= $dia_chi_giao_hang ?></td>
                            <td class="border"><?= $thanh_tien ?> đ</td>
                            <td class="border"><?= $luu_y ?></td>
                            <td class="border"><?= $ngay_dat_hang ?></td>
                            <td class="border"><a href="<?=$xoadonhang?>"><input type="button" value="Xóa"></a>
                            </td>
                            <td class="border"><a href="<?=$suathedoi?>"><input type="button" value="<?=$trangthai?>"></a></td>
                             </tr>                            
                             </form>
              <?php  }?>                      
            </table>
        </div>
        <div class="row mb10">       
                                    <?php if(isset($thongbao)&&($thongbao="")) echo $thongbao?>
                              </div> 
    </div>
    