<div class="row">
    <div class="row frmtitle">
        <h1>Danh sách User</h1>
    </div>

    <div class="row frmcontent">
        <div class="row mb10 frmdsuser">
             <table>
                <tr>
                    <th></th>
                    <th>Tên Đăng nhập</th>
                    <th>Họ Tên</th>
                    <th>email</th>
                    <th>Hình ảnh</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>vai Trò<br>(1=KH;2=QL)</th>
                    <th>Sửa</th>
                </tr>
                <?php               
                foreach ($listuser as $user) 
                   {
                    extract($user);     
<<<<<<< Updated upstream
                    $hinhpath="../../lib/admin/quanlyKH/photo/".$avatar;
                    if(is_file($hinhpath)){
                        $avatar="<img src='".$hinhpath."' height='80'>";
                    }else{
                        $avatar="no photo";
                    }
                    if($vai_tro==1)$vai_tro1="Khách hàng";else $vai_tro1="Quản lý";
                    $suauser = "index.php?act=suauser&id=" . $ten_dang_nhap;
                    $xoauser = "index.php?act=xoauser&id=" . $ten_dang_nhap;                    
=======
                    $suauser = "quanlyKH/sua.php?id=" . $id;
                    $xoauser = "index.php?act=xoauser&id=" . $id;                        
>>>>>>> Stashed changes
                    echo '
                         <tr>
                            <td><input type="checkbox" name="" id=""></td>           
                            <td>' . $ten_dang_nhap . '</td>
                            <td>' . $ho_ten . '</td>
                            <td>' . $email . '</td>
                            <td>' . $avatar . '</td>
                            <td>' . $so_dien_thoai . '</td>
                            <td>' . $dia_chi . '</td>      
                            <td>
                                '.$vai_tro1.'
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
<<<<<<< Updated upstream
=======

>>>>>>> Stashed changes
        </div>
    </div>
    
</div>
