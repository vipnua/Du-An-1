<?php 
include "header.php";
include "../../lib/lib.php";

if(isset($_GET['act'])){
    $act=$_GET['act'];
    switch($act){
        case 'xem':
            if(isset($_POST['danhmuc']&&($_POST)))
            $xem = getAllUser();
            include "quanlyKH/list.php";
            break;
        case 'suauser':
            break;
        case 'xoa':
            break;

    }
}