<div class="row">
    <div>
        <h1>Danh sách voucher</h1>
    </div>
    <div>
        <div class="pd10">
            <table class="w-100">
                <tr class="border">
                    <th class="border">ID VOUCHER</th>
                    <th class="border">ID SẢN PHẨM</th>
                    <th class="border">MÃ VOUCHER</th>
                    <th class="border">GIẢM GIÁ</th>
                    <th class="border">CREATED AT</th>
                    <th class="border">UPDATED AT</th>
                    <th class="border">HÌNH ẢNH</th>
                    <th class="border">MÔ TẢ</th>
                    <th class="border"><a href="index.php?act=addvoucher"><input class="bg-primary text-white" type="button" value="ADD voucher"></a></th>
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
                         <tr class="border">
                            <td class="border">' . $id_voucher . '</td>   
                            <td class="border">' . $id_san_pham. '</td>    
                            <td class="border">' . $ma_voucher . '</td>    
                            <td class="border">' . $giam_gia . '%</td>
                            <td class="border">' . $created_at . '</td>
                            <td class="border">' . $updated_at . '</td>
                            <td class="border">' . $anh . '</td>
                            <td class="border">' . $mota . '</td>
                            <td class="border"> <a href="'.$suavoucher.'"><input class="bg-primary text-white" type="button" value="Sửa"></a> <a href="'.$xoavoucher.'"><input class="bg-danger text-white" type="button" value="Xóa"></a></td>   
                             </tr>
                        ';
                                        }
                ?>

            </table>
        </div>
        <div class="row mb10">       
            
            <?php if(isset($thongbao)&&($thongbao="")) echo $thongbao?>
        </div>
        </form>
    </div>
    
</div>