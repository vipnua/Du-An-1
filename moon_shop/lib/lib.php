<?php

function getConnect()
{
    $connect = new PDO("mysql:host=localhost;dbname=moon_shop;charset=utf8", "root", "");
    return $connect;
}

function getExecute($sql)
{
    $connect = getConnect();
    $stmt = $connect->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
}

// Bảng loại

// Lấy all loại
function getAll_loai()
{
    $sql = "SELECT * FROM loai";
    return getExecute($sql);
}

//Lấy loại theo id loại
function getLoai_by_id($id)
{
    $sql = "SELECT * FROM `loai` WHERE id_loai = $id";
    return getExecute($sql);
}

// Bảng tùy chọn

// Lấy tất cả dữ liệu
function getAll_tuychon()
{
    $sql = "SELECT * FROM tuy_chon";
    return getExecute($sql);
}

// Lấy tùy chọn theo mã tùy chọn
function getTuychon_by_id($id)
{
    $sql = "SELECT * FROM tuy_chon WHERE id_tuy_chon = $id";
    return getExecute($sql);
}


// Bảng sản phẩm

// Lấy tất cả dữ liệu của bảng
function getAll_sanpham()
{
    $sql = "SELECT * FROM san_pham";
    return getExecute($sql);
}

// Lấy sản phẩm theo mã sản phẩm
function getSanpham_by_id($id)
{
    $sql = "SELECT * FROM san_pham WHERE id_san_pham = $id";
    return getExecute($sql);
}

function getSanpham_by_loai($id_loai)
{
    $sql = "SELECT * FROM san_pham WHERE id_loai = $id_loai";
    return getExecute($sql);
}

function addSanpham($id, $gia_sp)
{
    $sql = "INSERT INTO `gio_hang`(`id_san_pham`, `gia_san_pham`) 
        VALUES ('$id','$gia_sp')";
    return getExecute($sql);
}
/*giang*/
//tim kiem san pham theo ten
function getSanpham_by_name($search)
{
    $sql = "SELECT * FROM san_pham WHERE ten_san_pham like '%$search%'";
    return getExecute($sql);
}
//lay tat ca user
function getAllUser()
{
    $sql = ("SELECT * FROM User");
    return getExecute($sql);
}
//update vai tro
function update_user_vaitro($id, $vai_tro)
{
    $sql = "Update user SET vai_tro='$vai_tro' WHERE id = $id";
    return getExecute($sql);
}
function updatevoucher($id_san_pham, $ma_voucher,$giam_gia, $created_at, $updated_at, $anh, $mota, $id_voucher)
{
    if ($anh != "") {
        $sql = "Update voucher SET id_san_pham='$id_san_pham',ma_voucher='$ma_voucher',giam_gia='$giam_gia',created_at='$created_at',updated_at='$updated_at',anh='$anh', mota ='$mota' WHERE id_voucher = $id_voucher";
    } else {
        $sql = "Update voucher SET id_san_pham='$id_san_pham',ma_voucher='$ma_voucher',giam_gia='$giam_gia',created_at='$created_at',updated_at='$updated_at', mota ='$mota' WHERE id_voucher = $id_voucher";
    }
    return getExecute($sql);
}
function updatecombo($id_combo, $san_pham, $gia_combo, $mo_ta)
{
    $sql = "Update combo SET san_pham='$san_pham',gia_combo='$gia_combo', mo_ta ='$mo_ta' WHERE id_combo = $id_combo";
    return getExecute($sql);
}

function updatetrangthai($id, $trang_thai)
{
    $sql = "Update don_hang SET trang_thai ='$trang_thai' WHERE id_don_hang = $id";
    return getExecute($sql);
}
function updatetuychon($id_tuy_chon, $ten_mon, $gia_mon, $mo_ta, $so_luong, $hinh_anh)
{
    if ($hinh_anh != "") {
        $sql = "Update tuy_chon SET ten_mon='$ten_mon',gia_mon='$gia_mon', mo_ta ='$mo_ta',so_luong='$so_luong',hinh_anh='$hinh_anh' WHERE id_tuy_chon = $id_tuy_chon";
    } else {
        $sql = "Update tuy_chon SET ten_mon='$ten_mon',gia_mon='$gia_mon', mo_ta ='$mo_ta',so_luong='$so_luong' WHERE id_tuy_chon = $id_tuy_chon";
    }

    return getExecute($sql);
}

//loat 1 user
function pdo_query_one($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $conn = getConnect();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}
function loadone_user($id)
{
    $sql = "SELECT * FROM user WHERE ten_dang_nhap = '$id'";
    $us = pdo_query_one($sql);
    return $us;
}
<<<<<<< Updated upstream
function loadone_voucher($id)
{
    $sql = "select * from voucher where id_voucher =" . $id;
    $vc = pdo_query_one($sql);
    return $vc;
}
function loadone_combo($id_combo)
{
    $sql = "select * from combo where id_combo=" . $id_combo;
    $cb = pdo_query_one($sql);
    return $cb;
}
function loadone_table($table, $where, $id)
{
    $sql = "select * from  $table where $where=" . $id;
    $get = pdo_query_one($sql);
    return $get;
}
function delete_user($id)
{
    $sql = "delete from user where ten_dang_nhap = '$id'";
    getExecute($sql);
}
function delete_voucher($id)
{
    $sql = "delete from voucher where id_voucher=" . $id;
    getExecute($sql);
}
function delete_combo($id_combo)
{
    $sql = "delete from combo where id_combo=" . $id_combo;
    getExecute($sql);
}
function delete_tuychon($id)
{
    $sql = "delete from tuy_chon where id_tuy_chon=" . $id;
    getExecute($sql);
}
function delete_table($table, $where, $id)
{
    $sql = "delete from $table where $where=" . $id;
    getExecute($sql);
}
function getAllvoucher()
{
    $sql = "SELECT * FROM voucher";
=======
function loadone_vocher($id){
    $sql="select * from vocher where id=".$id;
    $us= pdo_query_one($sql);
    return $us;
}
function delete_user($id){
    $sql="delete from user where id=".$id;
    getExecute($sql);
}
function delete_vocher($id){
    $sql="delete from vocher where id=".$id;
    getExecute($sql);
}
function getAllvocher(){
    $sql = "SELECT * FROM vocher";
>>>>>>> Stashed changes
    return getExecute($sql);
}
function insertvoucher($id_san_pham, $ma_voucher,$giam_gia, $created_at, $updated_at, $mota, $anh)
{
    $sql = "insert into voucher(id_san_pham,ma_voucher,giam_gia,created_at,updated_at,mota,anh)
     values('$id_san_pham','$ma_voucher','$giam_gia','$created_at','$updated_at','$mota','$anh') ";
    return getExecute($sql);
}
function insertcombo($san_pham, $gia_combo, $mo_ta)
{
    $sql = "insert into combo(san_pham,gia_combo,mo_ta) 
        VALUES ('$san_pham','$gia_combo','$mo_ta')";
    return getExecute($sql);
}
function inserttuychon($ten_mon, $gia_mon, $mo_ta, $so_luong, $hinh_anh)
{
    $sql = "insert into tuy_chon(ten_mon,gia_mon,mo_ta,so_luong,hinh_anh) values('$ten_mon','$gia_mon','$mo_ta','$so_luong','$hinh_anh')";
    return getExecute($sql);
}
function getAllcombo()
{
    $sql = "SELECT * FROM combo";
    return getExecute($sql);
}
function getAll($table)
{
    $sql = "SELECT * FROM $table";
    return getExecute($sql);
}

/*Endgiang*/
// var_dump(getSanpham_by_loai(2));
 

// Bảng giỏ hàng
