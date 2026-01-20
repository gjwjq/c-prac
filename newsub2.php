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
    href="./[웹디자인 및 개발] 2025 지방기능경기대회 선수제공파일/공통/fontawesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="./css/product.css">
</head>

<body>
  <!-- 헤더 -->
  <?php include './header.php'; ?>

  <?php require_once 'db.php'; ?>
  <main>
    <div class="video-container">
      <video src="./[웹디자인 및 개발] 2025 지방기능경기대회 선수제공파일/B-Module/AD.mp4"></video>

      <div class="control-container">
        <div class="controls">
          <div class="ctrl01">재생</div>
          <div class="ctrl02">일시정지</div>
          <div class="ctrl03">정지</div>
          <div class="ctrl04">되감기(10초씩)</div>
          <div class="ctrl05">빨리감기(10초씩)</div>
          <div class="ctrl06">감속하기(0.1배씩)</div>
          <div class="ctrl07">배속하기(0.1배씩)</div>
          <div class="ctrl08">배속 원래대로 돌리기</div>
          <div class="ctrl09">자동재생 켜기/끄기</div>
          <div class="ctrl10">반복 켜기/끄기</div>
        </div>
        <div class="ctrl11">컨트롤러 보이기/숨기기</div>
      </div>
    </div>
  </main>



  <main>
    <div class="main-title">ALL PRODUCT</div>
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
          ?>
            <div class="product">
              <div class="pro-img">
                <img src="<?= $item['img'] ?>" alt="<?= $item['title'] ?>">
              </div>
              <div class="pro-content">
                <div class="pro-name"><?= $item['title'] ?></div>
                <?php if (number_format($item['dis']) != 0) { ?>
                  <div>가격 : <span class="pro-price" style="font-weight: bold;color:red;"><span style="text-decoration: line-through; color:#ccc;"><?= number_format($item['price']) ?>원</span> <?= number_format($item['dis']) ?>원</span>
                  </div>
                <?php } else { ?>
                  <div class="pro-price">가격 : <?= number_format($item['price']) ?>원</div>
                <?php } ?>
                <div class="btn-wrap">
                  <a href="addcart.php?idx=<?= $item['idx'] ?>" class="get">장바구니 담기</a>
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






  <main>
    <div class="orderBtn">비회원주문</div>

    <dialog>
      <div class="popWrap">
        <div class="popHeader">
          <p>ID : <span class="userId"></span></p>
          <p style="font-size: 32px; font-weight: bold;">비회원주문</p>
          <div class="popClose">닫기 X</div>
        </div>
        <div class="popMain">
          <div class="popCategory">
            <div data-cate="건강식품" class="active">건강식품</div>
            <div data-cate="디지털">디지털</div>
            <div data-cate="팬시">팬시</div>
            <div data-cate="향수">향수</div>
            <div data-cate="헤어케어">헤어케어</div>
          </div>
          <div class="cartCon"></div>
          <div class="dragCart"></div>
        </div>

        <div class="popFooter">
          <div>총 가격 : <span class="cost" style="color: red; font-weight: bold;"></span></div>
          <div class="popBuyBtn">구매하기</div>
        </div>
      </div>
    </dialog>
    <div class="buyAlert">
      방금<span class="user" style="color: red; font-weight: bold;"></span>님께서
      <span class="userCost" style="color: red; font-weight: bold;"></span>원을 결제하셨습니다!
    </div>
  </main>

  <!-- 푸터 -->
  <?php require_once "footer.php" ?>

</body>
<script src="./js/sub2.js"></script>

</html>