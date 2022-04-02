<div class="row">
    <div class="row frmtitle">
        <h1>Danh sách Vocher</h1>
    </div>

    <div class="row frmcontent">
        <div class="row mb10 frmdsuser">
            <table>
                <tr>
                    <th></th>
                    <th>ID</th>
                    <th>Giảm giá</th>
                    <th>Sản phẩm áp dụng</th>
                    <th>Mô Tả</th>
                    <th>Sửa</th>
                </tr>
                <?php
                foreach ($listvocher as $vocher) {
                    extract($vocher);  
                    $suavocher = "index.php?act=suavocher&id=" . $id_vocher;
                    $xoavocher = "index.php?act=xoavocher&id=" . $id_vocher;                        
                    echo '
                         <tr>
                            <td><input type="checkbox" name="" id="' . $id_vocher . '"></td>
                            <td>' . $id_vocher . '</td>              
                            <td>' . $Giam_gia . '</td>
                            <td>' . $San_pham_ap_dung . '</td>
                            <td>' . $Mo_ta . '</td>
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
            <a href="index.php?act=addvocher"><input type="button" value="Thêm mới vocher"></a>
            <input type="submit" name="" value="Đồng ý">
            <?php if(isset($thongbao)&&($thongbao="")) echo $thongbao?>
            <?php var_dump($_POST); ?>
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