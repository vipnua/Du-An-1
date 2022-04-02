<?php

function getConnect(){
    $connect = new PDO("mysql:host=localhost;dbname=moon_shop;charset=utf8","root","");
    return $connect;
}

function getExecute($sql){
    $connect = getConnect();
    $stmt = $connect -> prepare($sql);
    $stmt -> execute();
    return $stmt -> fetchAll();
}

// Bảng loại

// Lấy all loại
function getAll_loai(){
    $sql = "SELECT * FROM loai";
    return getExecute($sql);
}

//Lấy loại theo id loại
function getLoai_by_id($id){
    $sql = "SELECT * FROM `loai` WHERE id_loai = $id";
    return getExecute($sql);
}

// Bảng tùy chọn

// Lấy tất cả dữ liệu
function getAll_tuychon(){
    $sql = "SELECT * FROM tuy_chon";
    return getExecute($sql);
}

// Lấy tùy chọn theo mã tùy chọn
function getTuychon_by_id($id){
    $sql = "SELECT * FROM tuy_chon WHERE id_tuy_chon = $id";
    return getExecute($sql);
}


// Bảng sản phẩm

// Lấy tất cả dữ liệu của bảng
function getAll_sanpham(){
    $sql = "SELECT * FROM san_pham";
    return getExecute($sql);
}

// Lấy sản phẩm theo mã sản phẩm
function getSanpham_by_id($id){
    $sql = "SELECT * FROM san_pham WHERE id_san_pham = $id";
    return getExecute($sql);
}

function getSanpham_by_loai($id_loai){
    $sql = "SELECT * FROM san_pham WHERE id_loai = $id_loai";
    return getExecute($sql);
}

function addSanpham($id,$gia_sp){
    $sql = "INSERT INTO `gio_hang`(`id_san_pham`, `gia_san_pham`) 
        VALUES ('$id','$gia_sp')";
    return getExecute($sql);
}
/*giang*/
//tim kiem san pham theo ten
function getSanpham_by_name($search) {
    $sql = "SELECT * FROM san_pham WHERE ten_san_pham like '%$search%'";
    return getExecute($sql);
}
//lay tat ca user
function getAllUser(){
    $sql = ("SELECT * FROM User");
    return getExecute($sql);
}
//update vai tro
function update_user_vaitro($id,$Vai_tro){
    $sql="Update user SET Vai_tro='$Vai_tro' WHERE id = $id";
    return getExecute($sql);
}
function updatevocher($id_vocher,$Giam_gia,$San_pham_ap_dung,$Mo_ta){
    $sql="Update vocher SET Giam_gia='$Giam_gia',San_pham_ap_dung='$San_pham_ap_dung', Mo_ta ='$Mo_ta' WHERE id_vocher = $id_vocher";
    return getExecute($sql);
}
//loat 1 user
function pdo_query_one($sql){
    $sql_args = array_slice(func_get_args(),1);
    try{$conn = getConnect();
        $stmt = $conn -> prepare($sql);
        $stmt -> execute($sql_args);
        $row=$stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    }catch(PDOException $e){
        throw $e;
    }finally{
        unset($conn);
    }
}
function loadone_user($id){
    $sql="select * from user where id=".$id;
    $us= pdo_query_one($sql);
    return $us;
}
function loadone_vocher($id_vocher) {
    $sql="select * from vocher where id_vocher=".$id_vocher;
    $vc= pdo_query_one($sql);
    return $vc;
}
function delete_user($id){
    $sql="delete from user where id=".$id;
    getExecute($sql);
}
function delete_vocher($id_vocher){
    $sql="delete from vocher where id_vocher=".$id_vocher;
    getExecute($sql);
}
function getAllvocher(){
    $sql = "SELECT * FROM vocher";
    return getExecute($sql);
}
function insertvocher($Giam_gia,$San_pham_ap_dung,$Mo_ta){
    $sql = "insert into vocher(Giam_gia,San_pham_ap_dung,Mo_ta) 
        VALUES ('$Giam_gia','$San_pham_ap_dung','$Mo_ta')";
    return getExecute($sql);
}

/*Endgiang*/
// var_dump(getSanpham_by_loai(2));
 

// Bảng giỏ hàng


?>