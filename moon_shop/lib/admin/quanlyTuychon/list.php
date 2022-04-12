<div class="row">
    <div class="row frmtitle">
        <h1>Danh sách COMBO</h1>
    </div>

    <div class="row frmcontent">
        <div class="row mb10 frmdsuser">
            <table>
                <tr>
                    <th></th>
                    <th>ID TÙY CHỌN</th>
                    <th>TÊN MÓN</th>
                    <th>Giá MÓN</th>
                    <th>Mô tả</th>
                    <th>SỐ LƯỢNG</th>
                    <th>HÌNH ẢNH</th>
                    <th>SỬA / XÓA</th>
                </tr>
                <?php
                
                foreach ($listtuychon as $tuychon) {
                    extract($tuychon);     
                    $suatuychon = "index.php?act=suatuychon&id=" . $id_tuy_chon;
                    $xoatuychon = "index.php?act=xoatuychon&id=" . $id_tuy_chon;  
                    $hinhpath="../../publics/images/".$hinh_anh;
                                if(is_file($hinhpath)){
                                    $hinh_anh="<img src='".$hinhpath."' height='80'>";
                                }else{
                                    $hinh_anh="no photo";
                                }
                      
                    echo '
                         <tr>
                            <td><input type="checkbox" name="" id="' .$id_tuy_chon . '"></td>
                            <td>' . $id_tuy_chon . '</td>
                            <td>' . $ten_mon . '</td>              
                            <td>' . $gia_mon . '</td>
                            <td>' . $mo_ta . '</td>
                            <td>' . $so_luong . '</td>
                            <td>' . $hinh_anh . '</td>
                            <td><a href="'.$xoatuychon.'"><input type="button" value="Xóa"></a>
                            <a href="'.$suatuychon.'"><input type="button" value="Sửa"></a></td>
                            
                             </tr>
                        ';
                                        }
                        
                ?>

            </table>
        </div>
        <div class="row mb10">       
            <input type="button" value="Chọn tất cả" id="checkbox_all">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
            <input type="submit" name="dongy" value="Đồng ý">
            <a href="index.php?act=addtuychon"><input type="button" value="ADD TÙY CHỌN"></a>
            <?php if(isset($thongbao)&&($thongbao="")) echo $thongbao?>
        </div>
        </form>
    </div>
    
</div>
