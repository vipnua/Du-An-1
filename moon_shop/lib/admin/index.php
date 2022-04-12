
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
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $us = loadone_user($_GET['id']);
            }
            include "quanlyKH/sua.php";
            break;
        case 'updateuser':
            if (isset($_POST['suavaitro']) && ($_POST['suavaitro'])) {
                $id = $_POST['id'];
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
            //vocher
        case 'listvocher':
            $listvocher = getAllvocher();
            include "quanlyVocher/list.php";
            break;

        case 'addvocher':
            if (isset($_POST['addvocher']) && ($_POST['addvocher'])) {
                $ten_vocher = $_POST['tenvocher'];
                $giam_gia = $_POST['giamgia'];
                $ngay_tao_vocher = $_POST['ngaytao'];
                $ngay_bat_dau = $_POST['ngaybatdau'];
                $ngay_ket_thuc = $_POST['ngayketthuc'];
                $mo_ta = $_POST['mota'];
                $hinh_anh = $_FILES['hinh']['name'];
                $target_dir = "../../lib/admin/quanlyVocher/photo/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                insertvocher($ten_vocher, $giam_gia, $ngay_tao_vocher, $ngay_ket_thuc, $mo_ta, $hinh_anh);
                $thongbao = "Thêm thành công";
            }
            $listvocher = getAllvocher();
            include "quanlyVocher/add.php";
            break;
        case 'suavocher':
            if (isset($_GET['id_vocher']) && ($_GET['id_vocher'] != "")) {
                $vc = loadone_vocher($_GET['id_vocher']);
            }
            include "quanlyVocher/sua.php";
            break;
        case 'capnhatvocher':
            if (isset($_POST['capnhatvocher']) && ($_POST['capnhatvocher'])) {
                $id_vocher = $_POST['id_vocher'];
                $ten_vocher = $_POST['tenvocher'];
                $giam_gia = $_POST['giamgia'];
                $ngay_tao_vocher = $_POST['ngaytao'];
                $ngay_bat_dau = $_POST['ngaybatdau'];
                $ngay_ket_thuc = $_POST['ngayketthuc'];
                $mo_ta = $_POST['mota'];
                $hinh_anh = $_FILES['hinh']['name'];
                $target_dir = "../../lib/admin/quanlyVocher/photo/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);

                updatevocher($ten_vocher, $giam_gia, $ngay_tao_vocher, $ngay_bat_dau, $ngay_ket_thuc, $mo_ta, $hinh_anh, $id_vocher);
                $thongbao = "Cập nhật thành công";
            }
            //$listsanpham=loadall_sanpham();
            $listvocher = getAllvocher();
            include "quanlyVocher/list.php";
            break;
        case 'xoavocher':
            if (isset($_GET['id_vocher']) && ($_GET['id_vocher'] > 0)) {
                delete_vocher($_GET['id_vocher']);
            }
            $listvocher = getAllvocher();
            include "quanlyVocher/list.php";
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
                    $id_chi_tiet= $_POST['id_tt'];
                    $trang_thai= $_POST['tt'];
                    updatetrangthai($id_chi_tiet,$trang_thai);
                    $thongbao = "Cập nhật thành công";
                }
                //$listsanpham=loadall_sanpham();
                $listtddh = getAll('don_hang');
                include "quanlyDonhang/list.php";
                break;
        case 'suathedoi':           
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $get = loadone_table('don_hang', 'id_chi_tiet', $_GET['id']);     
                    include "quanlyDonhang/sua.php";

                    updatetrangthai($id_san_pham,$trang_thai);                   
                }             

            break;
        case 'xoathedoi':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_table('don_hang','id_chi_tiet',$_GET['id']);
            }
            $listtddh = getALL('don_hang');
            include "quanlyDonhang/list.php";
            $thongbao = "xoa thanh cong";
    }
}
