<div class="row">
    <div>
        <h1>Danh sách User</h1>
    </div>

    <div class="mw-100 ">
        <div>
             <table class="w-100">
                <tr class="border ml-1">
                    <th class="border">TÊN ĐĂNG NHẬP</th>
                    <th class="border">HỌ TÊN</th>
                    <th class="border">EMAIL</th>
                    <th class="border">HÌNH ẢNH</th>
                    <th class="border">SỐ ĐIỆN THOẠI</th>
                    <th class="border">ĐỊA CHỈ</th>
                    <th class="border">VAI TRÒ</th>
                    <th class="border">SỬA</th>
                </tr>
                <?php               
                foreach ($listuser as $user) 
                   {
                    extract($user);     
                    $hinhpath="../../lib/admin/quanlyKH/photo/".$avatar;
                    if(is_file($hinhpath)){
                        $avatar="<img src='".$hinhpath."' height='80'>";
                    }else{
                        $avatar="no photo";
                    }
                    if($vai_tro==1)$vai_tro1="Khách hàng";else $vai_tro1="Quản lý";
                    $suauser = "index.php?act=suauser&id=" . $ten_dang_nhap;
                    $xoauser = "index.php?act=xoauser&id=" . $ten_dang_nhap;                    
                    echo '
                         <tr class="border pl-100">         
                            <td class="border">' . $ten_dang_nhap . '</td>
                            <td class="border">' . $ho_ten . '</td>
                            <td class="border">' . $email . '</td>
                            <td class="border">' . $avatar . '</td>
                            <td class="border">' . $so_dien_thoai . '</td>
                            <td class="border">' . $dia_chi . '</td>      
                            <td class="border">
                                '.$vai_tro1.'
                            </td>                      
                            <td class="border">
                            <a href="'.$xoauser.'"><input type="button" value="Xóa" class="bg-danger text-white"></a>
                            <a href="'.$suauser.'"><input type="button" value="Sửa" class="bg-success text-white"></a>
                            </td>
                            
                             </tr>
                        ';
                    }
                        
                ?>
            </table>
        </div>
        <div class="row">       

            <?php if(isset($thongbao)&&($thongbao="")) echo $thongbao?>
        </div>
    </div>
    
</div>
