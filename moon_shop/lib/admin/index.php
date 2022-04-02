
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
        case 'suavaitro':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $us= loadone_user($_GET['id']);
            }
            if(isset($_POST['dongy'])&&($_POST['dongy'])){
                $id = $_POST['id'];
                $Vai_tro = $_POST['vaitro'];
                update_user_vaitro($Vai_tro,$id);
                $thongbao="sua thanh cong";
            }
            $listuser=getAllUser();
            include "quanlyKH/list.php";
            break;  
        case 'updateuser':
            
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
                    $Giam_gia=$_POST['giamgia'];
                    $San_pham_ap_dung=$_POST['sanphamapdung'];
                    $Mo_ta=$_POST['mota'];
                    insertvocher($Giam_gia, $San_pham_ap_dung, $Mo_ta);
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
                    $Giam_gia=$_POST['giamgia'];
                    $San_pham_ap_dung=$_POST['sanphamapdung'];
                    $Mo_ta=$_POST['mota'];
                
                    updatevocher($id_vocher,$Giam_gia,$San_pham_ap_dung,$Mo_ta);
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

    }
}