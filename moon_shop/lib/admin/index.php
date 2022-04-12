
<?php
include "header.php";
include "../../lib/lib.php";

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'listuser':
            $listuser = getAllUser();
            include "quanlyKH/list.php";
            break;
        case 'suauser':
            if (isset($_GET['id']) && ($_GET['id']!='')) {
                $us = loadone_user($_GET['id']);
            }
            include "quanlyKH/sua.php";
            break;
        case 'updateuser':
            if (isset($_POST['suavaitro']) && ($_POST['suavaitro'])) {
                $id = $_POST['ten_dang_nhap'];
                $vai_tro = $_POST['vaitro'];
                update_user_vaitro($id, $vai_tro);
                $thongbao = "sua thanh cong";
            }
            $listuser = getAllUser();
            include "quanlyKH/list.php";
            break;
        case 'xoauser':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_user($_GET['id']);
            }
            $listuser = getAllUser();
            include "quanlyKH/list.php";
            $thongbao = "xoa thanh cong";
            break;
            //voucherrrrrrrrrrrrrrrrr
        case 'listvoucher':
            $listvoucher = getAllvoucher();
            include "quanlyvoucher/list.php";
            break;

        case 'addvoucher':
            if (isset($_POST['addvoucher']) && ($_POST['addvoucher'])) {
                $id_san_pham= $_POST['idsanpham'];
                $ma_voucher= $_POST['mavoucher'];
                $created_at = $_POST['createat'];
                $updated_at = $_POST['updateat'];
                $mota = $_POST['mota'];
                $anh = $_FILES['hinh']['name'];
                $target_dir = "../../lib/admin/quanlyvoucher/photo/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                insertvoucher($id_san_pham, $ma_voucher, $created_at, $updated_at, $mota, $anh);
                $thongbao = "Thêm thành công";
            }
            $listvoucher = getAllvoucher();
            include "quanlyvoucher/add.php";
            break;
        case 'suavoucher':
            if (isset($_GET['id']) && ($_GET['id'] >0)) {
                $vc = loadone_voucher($_GET['id']);
            }
            include "quanlyvoucher/sua.php";
            break;
        case 'capnhatvoucher':
            if (isset($_POST['capnhatvoucher']) && ($_POST['capnhatvoucher'])) {
                $id_voucher = $_POST['id_voucher'];
                $id_san_pham= $_POST['idsanpham'];
                $ma_voucher = $_POST['mavoucher'];
                $created_at = $_POST['createdat'];
                $updated_at = $_POST['updatedat'];
                $mota = $_POST['mota'];           
                $anh = $_FILES['hinh']['name'];
                $target_dir = "../../lib/admin/quanlyvoucher/photo/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);

                updatevoucher($id_san_pham, $ma_voucher, $created_at, $updated_at, $mota, $anh, $id_voucher);
                $thongbao = "Cập nhật thành công";
            }
            //$listsanpham=loadall_sanpham();
            $listvoucher = getAllvoucher();
            include "quanlyvoucher/list.php";
            break;
        case 'xoavoucher':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_voucher($_GET['id']);
            }
            $listvoucher = getAllvoucher();
            include "quanlyvoucher/list.php";
            $thongbao = "xoa thanh cong";
            break;
            //combo
        case 'listcombo':
            $listcombo = getAllcombo();
            include "quanlyCombo/list.php";
            break;
        case 'addcombo':
            if (isset($_POST['addcombo']) && ($_POST['addcombo'])) {
                $san_pham = $_POST['sanpham'];
                $gia_combo = $_POST['giacombo'];
                $mo_ta = $_POST['mota'];
                insertcombo($san_pham, $gia_combo, $mo_ta);
                $thongbao = "Thêm thành công";
            }
            $listcombo = getAllcombo();
            include "quanlyCombo/them.php";
            break;
        case 'suacombo':
            if (isset($_GET['id_combo']) && ($_GET['id_combo'] > 0)) {
                $cb = loadone_combo($_GET['id_combo']);
            }
            include "quanlyCombo/sua.php";
            break;
        case 'capnhatcombo':
            if (isset($_POST['capnhatcombo']) && ($_POST['capnhatcombo'])) {
                $id_combo = $_POST['id_combo'];
                $san_pham = $_POST['sanpham'];
                $gia_combo = $_POST['combo'];
                $mo_ta = $_POST['mota'];

                updatecombo($id_combo, $san_pham, $gia_combo, $mo_ta);
                $thongbao = "Cập nhật thành công";
            }
            //$listsanpham=loadall_sanpham();
            $listcombo = getAllcombo();
            include "quanlyCombo/list.php";
            break;
        case 'xoacombo':
            if (isset($_GET['id_combo']) && ($_GET['id_combo'] > 0)) {
                delete_combo($_GET['id_combo']);
            }
            $listcombo = getAllcombo();
            include "quanlyCombo/list.php";
            $thongbao = "xoa thanh cong";
            break;
            //tuy chon
        case 'listtuychon':
            $listtuychon = getAll('tuy_chon');
            include "quanlyTuychon/list.php";
            break;
        case 'addtuychon':
            if (isset($_POST['addtuychon']) && ($_POST['addtuychon'])) {
                $ten_mon = $_POST['tenmon'];
                $gia_mon = $_POST['giamon'];
                $mo_ta = $_POST['mota'];
                $so_luong = $_POST['soluong'];
                $hinh_anh = $_FILES['hinh']['name'];
                $target_dir = "../../publics/images/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                inserttuychon($ten_mon, $gia_mon, $mo_ta, $so_luong, $hinh_anh);
                $thongbao = "Thêm thành công";
            }
            $listtuychon = getAll('tuy_chon');
            include "quanlyTuychon/them.php";
            break;
        case 'suatuychon':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $get = loadone_table('tuy_chon', 'id_tuy_chon', $_GET['id']);
            }
            include "quanlyTuychon/sua.php";
            break;
         case 'capnhattuychon':
            if (isset($_POST['capnhattuychon']) && ($_POST['capnhattuychon'])) {
                $id_tuy_chon = $_POST['id'];
                $ten_mon = $_POST['tenmon'];
                $gia_mon = $_POST['giamon'];
                $mo_ta = $_POST['mota'];
                $so_luong = $_POST['soluong'];
                $hinh_anh = $_FILES['hinh']['name'];
                $target_dir = "../../publics/images/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // caseecho "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    //  echo "Sorry, there was an error uploading your file.";
                }
                updatetuychon($id_tuy_chon, $ten_mon, $gia_mon, $mo_ta, $so_luong, $hinh_anh);
                $thongbao = "Cập nhật thành công";
            }
            //$listsanpham=loadall_sanpham();
            $listtuychon = getAll('tuy_chon');
            include "quanlyTuychon/list.php";
            break;
        case 'xoatuychon':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_tuychon($_GET['id']);
            }
            $listtuychon = getAll('tuy_chon');
            include "quanlyTuychon/list.php";
            $thongbao = "xoa thanh cong";
            break;
            //theo doi don hang
        case 'listorder':
            $listtddh = getALL('don_hang');
            include "quanlyDonhang/list.php";
            break;
        case 'capnhattrangthai':
                if (isset($_POST['tt']) && ($_POST['tt'])) {
                    $id_don_hang= $_POST['id_tt'];
                    $trang_thai= $_POST['tt'];
                    updatetrangthai($id_don_hang,$trang_thai);
                    $thongbao = "Cập nhật thành công";
                }
                //$listsanpham=loadall_sanpham();
                $listtddh = getAll('don_hang');
                include "quanlyDonhang/list.php";
                break;
        case 'suathedoi':           
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $get = loadone_table('don_hang', 'id_don_hang', $_GET['id']);     
                    include "quanlyDonhang/sua.php";
                    updatetrangthai($id_don_hang,$trang_thai);                   
                }             

            break;
        case 'xoadonhang':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_table('don_hang','id_don_hang',$_GET['id']);
            }
            $listtddh = getALL('don_hang');
            include "quanlyDonhang/list.php";
            $thongbao = "xoa thanh cong";
    }
}
