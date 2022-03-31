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
                    <th>Vai Trò</th>
                </tr>
                <?php 
                foreach ($xem as $xemall){
                    extract($xemall);
                    $suauser="index.php?act=suauser&id=".$id;
                    $xoauser="index.php?act=xoauser&id=".$id;
                        echo '
                            <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>'.$id.'</td>
                            <td>'.$Ten_dang_nhap.'</td>
                            <td>'.$Ho_ten.'</td>
                            <td>'.$Email.'</td>
                            <td>'.$Mat_khau.'</td>
                            <td>'.$Hinh_anh.'</td>
                            <td>'.$So_dien_thoai.'</td>
                            <td>'.$Dia_chi.'</td>
                            <td>'.$Vai_tro.'</td>
                            </tr>
                        ';
                }
               
                ?>
            </table>
        </div>
        <div class="row mb10">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
        </div>
    </div>
</div>