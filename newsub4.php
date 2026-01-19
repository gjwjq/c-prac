<?php 
require_once 'db.php';
if(!isset($_SESSION)) {
  session_start();
}

$userId = $_SESSION['user']->id ?? false;

if(!$userId) {
  back('로그인 해주세요');
  exit;
}

$sql = "select c.idx as cart"
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/main.css" />
    <link rel="stylesheet" href="./css/sub4.css">
    <link
      rel="stylesheet"
      href="./[웹디자인 및 개발] 2025 지방기능경기대회 선수제공파일/공통/fontawesome/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="./css/product.css">
</head>
<body>
  <!-- 헤더 -->
     <?php include './header.php'; ?>

    <main>
      <!-- 장바구니 -->
      <div class="main-title">CART</div>
      <div class="main-cart">
        <div class="dropCart">
          <h1>장바구니</h1>
          <div class="drop-items">
           
          </div>
        </div>
        <div class="calcCart">
          <h1>전체 결제금액 : <span class="disPrice"></span>원</h1>
          <button>구매하기</button>
        </div>
      </div>
    </main>
    <!-- 푸터 -->
  <?php require_once "footer.php" ?>

</body>
</html>