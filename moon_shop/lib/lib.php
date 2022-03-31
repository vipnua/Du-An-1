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
function getSanpham_by_name($search) {
    $sql = "SELECT * FROM san_pham WHERE ten_san_pham like '%$search%'";
    return getExecute($sql);
}
function getAllUser(){
    $sql = ("SELECT * FROM User");
    return getExecute($sql);
}
/*Endgiang*/
// var_dump(getSanpham_by_loai(2));
 

// Bảng giỏ hàng


?>