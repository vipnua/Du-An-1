
<?php 
include "header.php";
include "../../lib/lib.php";

if(isset($_GET['act'])){
    $act=$_GET['act'];
    switch($act){
        case 'listuser':
          $listuser = getAllUser();     
          include "quanlyKH/list.php";  
            break;
        case 'suauser':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $us= loadone_user($_GET['id']);
            }
            include "quanlyKH/sua.php";   
            break;  
        case 'updateuser':
            if(isset($_POST['suavaitro'])&&($_POST['suavaitro'])){
                $id = $_POST['id'];
                $vai_tro = $_POST['vaitro'];
                update_user_vaitro($id,$vai_tro);
                $thongbao="sua thanh cong";
            }
            $listuser=getAllUser();
            include "quanlyKH/list.php";
            break;
            case 'xoauser':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_user($_GET['id']);
                }
                $listuser = getAllUser();
                include "quanlyKH/list.php";
                $thongbao="xoa thanh cong";
                break;
            //vocher
            case 'listvocher':
                $listvocher = getAllvocher();     
                include "quanlyVocher/list.php";  
                break;

            case'addvocher':
                if(isset($_POST['addvocher'])&&($_POST['addvocher'])){
                    $giam_gia=$_POST['giamgia'];
                    $san_pham_ap_dung=$_POST['sanphamapdung'];
                    $mo_ta=$_POST['mota'];
                    insertvocher($giam_gia, $san_pham_ap_dung, $mo_ta);
                    $thongbao="Thêm thành công";
                }
                $listvocher = getAllvocher();  
                include "quanlyVocher/add.php";
                break;
                case 'suavocher':
                    if(isset($_GET['id_vocher'])&&($_GET['id_vocher']>0)){
                        $vc= loadone_vocher($_GET['id_vocher']);
                    }
                    include "quanlyVocher/sua.php";   
                    break;
            case 'capnhatvocher':
                if(isset($_POST['capnhatvocher'])&&($_POST['capnhatvocher'])){
                    $id_vocher = $_POST['id_vocher'];
                    $giam_gia=$_POST['giamgia'];
                    $san_pham_ap_dung=$_POST['sanphamapdung'];
                    $mo_ta=$_POST['mota'];
                
                    updatevocher($id_vocher,$giam_gia,$san_pham_ap_dung,$mo_ta);
                    $thongbao="Cập nhật thành công";
                }
                //$listsanpham=loadall_sanpham();
                $listvocher = getAllvocher();     
                include "quanlyVocher/list.php";  
                break;
                case 'xoavocher':
                    if(isset($_GET['id_vocher'])&&($_GET['id_vocher']>0)){
                        delete_vocher($_GET['id_vocher']);
                    }
                    $listvocher = getAllvocher();
                    include "quanlyVocher/list.php";
                    $thongbao="xoa thanh cong";
                    break;
                //combo
                case 'listcombo':
                    $listcombo = getAllcombo();     
                    include "quanlyCombo/list.php";  
                    break;
                case'addcombo':
                    if(isset($_POST['addcombo'])&&($_POST['addcombo'])){
                        $san_pham=$_POST['sanpham'];
                        $gia_combo=$_POST['giacombo'];
                        $mo_ta=$_POST['mota'];
                        insertcombo($san_pham, $gia_combo, $mo_ta);
                        $thongbao="Thêm thành công";
                    }
                    $listcombo = getAllcombo();  
                    include "quanlyCombo/them.php";
                    break;
                case 'suacombo':
                    if(isset($_GET['id_combo'])&&($_GET['id_combo']>0)){
                        $cb= loadone_combo($_GET['id_combo']);
                    }
                        include "quanlyCombo/sua.php";   
                    break;
                case 'capnhatcombo':
                    if(isset($_POST['capnhatcombo'])&&($_POST['capnhatcombo'])){
                        $id_combo = $_POST['id_combo'];
                        $san_pham=$_POST['sanpham'];
                        $gia_combo=$_POST['combo'];
                        $mo_ta=$_POST['mota'];
                    
                        updatecombo($id_combo,$san_pham,$gia_combo,$mo_ta);
                        $thongbao="Cập nhật thành công";
                    }
                    //$listsanpham=loadall_sanpham();
                    $listcombo = getAllcombo();     
                    include "quanlyCombo/list.php";  
                    break;
                    case 'xoacombo':
                        if(isset($_GET['id_combo'])&&($_GET['id_combo']>0)){
                            delete_combo($_GET['id_combo']);
                        }
                        $listcombo = getAllcombo();
                        include "quanlyCombo/list.php";
                        $thongbao="xoa thanh cong";
                        break;
                

    }
}