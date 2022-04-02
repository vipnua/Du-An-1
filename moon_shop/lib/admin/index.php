
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
                $Vai_tro = $_POST['vaitro'];
                update_user_vaitro($Vai_tro,$id);
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
                $listvocher = getAllvocher();  
                    include "quanlyVocher/add.php";
                break;

    }
}