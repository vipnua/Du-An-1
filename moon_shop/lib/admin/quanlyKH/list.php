<div class="row">
    <div class="row frmtitle">
        <h1>Danh sách User</h1>
    </div>

    <div class="row frmcontent">
        <div class="row mb10 frmdsuser">
            <table>
                <tr>
                    <th></th>
                    <th>id</th>
                    <th>Tên Đăng nhập</th>
                    <th>Họ Tên</th>
                    <th>email</th>
                    <th>Mật Khẩu</th>
                    <th>Hình ảnh</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>vai Trò<br>(1=KH;2=QL)</th>
                    <th>Sửa</th>
                </tr>
                <?php
                
                foreach ($listuser as $user) {
                    extract($user);     
                    $suauser = "index.php?act=suauser&id=" . $id;
                    $xoauser = "index.php?act=xoauser&id=" . $id;                        
                    echo '
                         <tr>
                            <td><input type="checkbox" name="" id="' . $id . '"></td>
                            <td>' . $id . '</td>              
                            <td>' . $ten_dang_nhap . '</td>
                            <td>' . $ho_ten . '</td>
                            <td>' . $email . '</td>
                            <td>' . $mat_khau . '</td>
                            <td>' . $hinh_anh . '</td>
                            <td>' . $so_dien_thoai . '</td>
                            <td>' . $dia_chi . '</td>
                            <td>
                                '.$vai_tro.'
                            </td>
                            <td><a href="'.$xoauser.'"><input type="button" value="Xóa"></a>
                            <a href="'.$suauser.'"><input type="button" value="Sửa"></a></td>
                            
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
            <?php if(isset($thongbao)&&($thongbao="")) echo $thongbao?>
        </div>
        </form>
    </div>
    
</div>
