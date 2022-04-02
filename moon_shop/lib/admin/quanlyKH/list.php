<div class="row">
    <div class="row frmtitle">
        <h1>Danh sách User</h1>
    </div>

    <div class="row frmcontent">
        <div class="row mb10 frmdsuser">
            <table>
                <tr>
                    <th></th>
                    <th>ID</th>
                    <th>Tên Đăng nhập</th>
                    <th>Họ Tên</th>
                    <th>Email</th>
                    <th>Mật Khẩu</th>
                    <th>Hình ảnh</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Vai Trò<br>(1=KH;0=QL)</th>
                    <th>Sửa</th>
                </tr>
                <?php
                
                foreach ($listuser as $user) {
                    extract($user);
                    var_dump($user);     
                    $suauser = "index.php?act=suauser&id=" . $id;
                    $xoauser = "index.php?act=xoauser&id=" . $id;                        
                    echo '
                         <tr>
                            <td><input type="checkbox" name="" id="' . $id . '"></td>
                            <td>' . $id . '</td>              
                            <td>' . $Ten_dang_nhap . '</td>
                            <td>' . $Ho_ten . '</td>
                            <td>' . $Email . '</td>
                            <td>' . $Mat_khau . '</td>
                            <td>' . $Hinh_anh . '</td>
                            <td>' . $So_dien_thoai . '</td>
                            <td>' . $Dia_chi . '</td>
                            <td>
                                <select id="vai_tro" name="vaitro">
                                <option value="'.$Vai_tro.'">'.$Vai_tro.'</option>
                                <option value="0">Quản Lý</option>
                                <option value="1">Khách Hàng</option>      
                                 </select>
                            </td>
                            <td><a href="'.$xoauser.'"><input type="button" value="Xóa"></a></td>
                            
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
