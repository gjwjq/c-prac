<?php
    require_once 'db.php';
    require_once 'lib.php';
    if(!isset($_SESSION)) session_start();
    if(!isset($_SESSION['user']) || $_SESSION['user']['id'] !== 'admin') {
        back('관리자만 접근 가능');
        exit;
    }

    $idx = isset($_GET['idx']) ? $_GET['idx'] : null;
    $item = null;

    if($idx) {
        $item = DB::fetch("select * from item where idx = $idx");
        if(!$item){
            back('상품이 존재하지 않음');
            exit;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/main.css" />
    <link
      rel="stylesheet"
      href="./[웹디자인 및 개발] 2025 지방기능경기대회 선수제공파일/공통/fontawesome/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="./css/product.css" />
</head>
<body>
    <?php require_once 'header.php' ?>
    <main>
        <div class="main-title">dd</div>
    </main>
    <?php require_once 'footer.php' ?>
</body>
</html>