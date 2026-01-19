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
            <div class="product">
            <div class="pro-img">
              <img src="./[웹디자인 및 개발] 2025 지방기능경기대회 선수제공파일/A-Module/images/팬시/4.PNG" alt="팬시-4" title="팬시-4">
            </div>
            <div class="pro-content">
              <div class="pro-name">게이밍 이어폰 VJJB NI</div>
              <div class="pro-des"> 세계 1위 가성비 유선 이어폰. 듀얼 드라이버 기술로 완벽한 고품질 사운드와 교체가 가능한 분리형 커스텀 케이블</div>
              <div class="pro-price">가격 : <span class="nowPrice">38,900</span> <span class="disPrice">28,900</span></div>
            <input type="number" min="1" value="1">
              <div>총 가격 : <span class="disPrice">28,900</span>원</div>
            </div>
          </div>
             <div class="product">
            <div class="pro-img">
              <img src="./[웹디자인 및 개발] 2025 지방기능경기대회 선수제공파일/A-Module/images/건강식품/2.PNG" alt="건강식품-2" title="건강식품-2">
            </div>
            <div class="pro-content">
              <div class="pro-name">센트룸</div>
              <div class="pro-des"> 생기 넘치는 일상을 위한 센트룸 우먼 더블업. 비타민 B군 8종 함량 2배, 23가지 비타민과 미네랄, 한국인 여성 맞춤 영양 설계</div>
              <div class="pro-price">가격 : <span class="pro-realPrice">27,000</span></div>
              <input type="number" min="1" value="1">
              <div>총 가격 : <span class="disPrice">27,000</span>원</div>
            </div>
          </div>
          </div>
        </div>
        <div class="calcCart">
          <h1>전체 결제금액 : <span class="disPrice">55,900</span>원</h1>
          <button>구매하기</button>
        </div>
      </div>
    </main>
    <!-- 푸터 -->
  <?php require_once "footer.php" ?>

</body>
</html>