<div class="row">
    <div class="row frmtitle">
        <h1>Danh sách COMBO</h1>
    </div>

    <div class="row frmcontent">
        <div class="row mb10 frmdsuser">
            <table>
                <tr>
                    <th class="border"></th>
                    <th class="border">ID COMBO</th>
                    <th class="border">Sản phẩm</th>
                    <th class="border">Giá combo</th>
                    <th class="border">Mô tả</th>
                    <th class="border">Sửa</th>
                </tr>
                <?php
                
                foreach ($listcombo as $combo) {
                    extract($combo);     
                    $suacombo = "index.php?act=suacombo&id_combo=" . $id_combo;
                    $xoacombo = "index.php?act=xoacombo&id_combo=" . $id_combo;                        
                    echo '
                         <tr>
                            <td class="border"><input type="checkbox" name="" id="' . $id_combo . '"></td>
                            <td class="border">' . $id_combo . '</td>              
                            <td class="border">' . $san_pham . '</td>
                            <td class="border">' . $gia_combo . '</td>
                            <td class="border">' . $mo_ta . '</td>
                    
                            <td class="border"><a href="'.$xoacombo.'"><input type="button" value="Xóa"></a>
                            <a href="'.$suacombo.'"><input type="button" value="Sửa"></a></td>
                            
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
            <a href="index.php?act=addcombo"><input type="button" value="ADD Combo"></a>
            <?php if(isset($thongbao)&&($thongbao="")) echo $thongbao?>
        </div>
        </form>
    </div>
    
</div>
