<div class="row">
    <div class="row frmtitle">
        <h1>Danh sách voucher</h1>
    </div>
    <div class="row frmcontent">
        <div class="row mb10 frmdsuser">
            <table>
                <tr>
                    <th></th>
                    <th>ID VOUCHER</th>
                    <th>ID SẢN PHẨM</th>
                    <th>MÃ VOUCHER</th>
                    <th>GIẢM GIÁ</th>
                    <th>CREATED AT</th>
                    <th>UPDATED AT</th>
                    <th>HÌNH ẢNH</th>
                    <th>MÔ TẢ</th>
                    <th>CHỈNH SỬA</th>
                </tr>
                <?php
                
                foreach ($listvoucher as $voucher) {
                    extract($voucher);  
                    $suavoucher = "index.php?act=suavoucher&id=" . $id_voucher;
                    $xoavoucher = "index.php?act=xoavoucher&id=" . $id_voucher;     
                    $hinhpath="../../lib/admin/quanlyvoucher/photo/".$anh;
                    if(is_file($hinhpath)){
                        $anh="<img src='".$hinhpath."' height='35'>";
                    }else{
                        $anh="no photo";
                    }                   
                    echo '
                         <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>' . $id_voucher . '</td>   
                            <td>' . $id_san_pham. '</td>    
                            <td>' . $ma_voucher . '</td>    
                            <td>' . $giam_gia . '%</td>
                            <td>' . $created_at . '</td>
                            <td>' . $updated_at . '</td>
                            <td>' . $anh . '</td>
                            <td>' . $mota . '</td>
                            <td> <a href="'.$suavoucher.'"><input type="button" value="Sửa"></a> <a href="'.$xoavoucher.'"><input type="button" value="Xóa"></a></td>   
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
            <a href="index.php?act=addvoucher"><input type="button" value="ADD voucher"></a>
            <?php if(isset($thongbao)&&($thongbao="")) echo $thongbao?>
        </div>
        </form>
    </div>
    
</div>
<script>
        var checkboxall = $('#checkbox_all');
        //checkbox all clicked
        console.log(checkboxall);
        checkboxall.change(function(){
        console.log(math.random())
        });
    </script>