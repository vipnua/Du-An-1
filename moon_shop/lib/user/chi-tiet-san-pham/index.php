<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include("../../../publics/link.php");
    include("../../lib.php");
    include("../../common.php");

    $id_san_pham = $_GET['id'];
    // var_dump($id_san_pham);

    $san_pham = getSanpham_by_id($id_san_pham);
    // var_dump($san_pham);
    ?>

    <?php foreach ($san_pham as $value) : ?>
        <title>
            <?= $value['ten_san_pham'] ?>
        </title>
    <?php endforeach ?>

</head>

<body>
    <?php

    include('../layout/header.php');
    include('../layout/banner.php');

    include('ctn-chi-tiet-san-pham.php');

    include('../layout/footer.php');

    ?>
</body>

</html>