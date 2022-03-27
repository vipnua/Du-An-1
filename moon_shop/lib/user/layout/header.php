<?php
require_once("../../../publics/link.php")
?>

<link rel="stylesheet" href="../../../publics/css/header.css">


<div class="container">
    <header class="header row">
        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
        <ul class="menu col">
            <li>
                <a href="#">Trang chủ</a>
                <hr>
            </li>
            <li>
                <a href="#about">Cửa hàng</a>
                <hr>
            </li>
            <li>
                <a href="#careers">Ưu đãi</a>
                <hr>
            </li>
            <li>
                <a href="#contact">Liên hệ</a>
                <hr>
            </li>
        </ul>
        <ul class="menu col">
            <div class="container-fluid">
                <form class="d-flex" method="post">
                    <input class="form-control me-2" type="search" name="search" placeholder="Tìm kiếm món ăn" aria-label="Search">
                    <input type="submit" name="submit" class="input-group-text border-0" id="search-addon">
                        <i class="fas fa-search"></i>
                    >
                    <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
                </form>
            </div>
        </ul>

    </header>
</div>
<?php

if(isset($_POST["submit"])){
    $search=$_POST["search"];
    getSanpham_by_name($search);
}


?>