<div class="row">
    <div class="row frmtitle">
        <h1>Danh sách Vocher</h1>
    </div>

    <div class="row frmcontent">
        <div class="row mb10 frmdsuser">
            <table>
                <tr>
                    <th></th>
                    <th>ID VOCHER</th>
                    <th>TÊN VOCHER</th>
                    <th>GIẢM GIÁ</th>
                    <th>NGÀY TẠO</th>
                    <th>NGÀY BẮT ĐẦU</th>
                    <th>NGÀY KẾT THÚC</th>
                    <th>MÔ TẢ</th>
                    <th>HÌNH ẢNH</th>
                    <th></th>
                </tr>
                <?php
                
                foreach ($listvocher as $vocher) {
                    extract($vocher);  
                    $suavocher = "index.php?act=suavocher&id_vocher=" . $id_vocher;
                    $xoavocher = "index.php?act=xoavocher&id_vocher=" . $id_vocher;     
                    $hinhpath="../../lib/admin/quanlyVocher/photo/".$hinh_anh;
                    if(is_file($hinhpath)){
                        $hinh_anh="<img src='".$hinhpath."' height='80'>";
                    }else{
                        $hinh_anh="no photo";
                    }                   
                    echo '
                         <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>' . $id_vocher . '</td>   
                            <td>' . $ten_vocher . '</td>              
                            <td>' . $giam_gia . '%</td>
                            <td>' . $ngay_tao_vocher . '</td>
                            <td>' . $ngay_bat_dau . '</td>
                            <td>' . $ngay_ket_thuc . '</td>
                            <td>' . $mo_ta . '</td>
                            <td>' . $hinh_anh . '</td>
                            <td> <a href="'.$suavocher.'"><input type="button" value="Sửa"></a> <a href="'.$xoavocher.'"><input type="button" value="Xóa"></a></td>   
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
            <a href="index.php?act=addvocher"><input type="button" value="ADD VOCHER"></a>
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