<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./css/sub2.css">
  <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/main.css" />
    <link
      rel="stylesheet"
      href="./[웹디자인 및 개발] 2025 지방기능경기대회 선수제공파일/공통/fontawesome/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="./css/product.css">
</head>
<body>
  <!-- 헤더 -->
      <?php include './header.php'; ?>

  <?php require_once 'db.php'; ?>
<main>
<div class="main-product">
    <?php
    // 출력할 카테고리 순서 정의
    $category_list = ["건강식품", "디지털", "팬시", "향수", "헤어케어"];

    foreach ($category_list as $cate) {
    ?>
        <div class="mp-wrap">
            <div class="mp-title"><?= $cate ?></div>
            
            <?php
            // DB에서 해당 카테고리의 상품만 딱 5개 가져오기
            $items = DB::fetchAll("SELECT * FROM item WHERE cate = '$cate' ORDER BY idx ASC LIMIT 5");

            foreach ($items as $item) {
                // 가격에 쉼표 찍기
                $price_fmt = number_format($item['price']); 
            ?>
                <div class="product">
                    <div class="pro-img">
                        <img src="<?= $item['img'] ?>" alt="<?= $item['title'] ?>">
                    </div>
                    <div class="pro-content">
                        <div class="pro-name"><?= $item['title'] ?></div>
                        <div class="pro-price">가격: <?= $price_fmt ?>원</div>
                        <div class="btn-wrap">
                            <button class="cart-btn">장바구니담기</button>
                            <button class="buy-btn">구매하기</button>
                        </div>
                    </div>
                </div>
            <?php 
            } 
            ?>
        </div> 
    <?php 
    } 
    ?>
</div>
   </main>
    
    <!-- 푸터 -->
  <?php require_once "footer.php" ?>

</body>
</html>