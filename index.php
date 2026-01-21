<?php 
require_once 'db.php';
$notice = DB::fetchAll("select * from notice");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>main</title>
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/main.css" />
    <link
      rel="stylesheet"
      href="./[웹디자인 및 개발] 2025 지방기능경기대회 선수제공파일/공통/fontawesome/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="./css/product.css" />
  </head>
  <body>
    <!-- 로딩 -->
    <!-- <div class="loadingCon">
    <div class="loading"></div>
  </div> -->
    <!-- 헤더 -->
    <?php include './header.php'; ?>
    <!-- 슬라이드 -->
    <div class="slider">
      <div class="slide">
        <h1>1. <span>B</span>etter <span>G</span>ive & <span>T</span>ake</h1>
        <p>옴니채널 플랫폼 GIFTS로 전 세계 고객에게 선물의 가치를 높입니다.</p>
      </div>
      <div class="slide">
        <h1>3. <span>O</span>nline <span>PLAYGROUND</span></h1>
        <p>
          업계 최초 당일 배송 서비스인 '오늘드림'으로 고객 니즈 충족과 고객
          경험을 혁신합니다.
        </p>
      </div>
      <div class="slide">
        <h1>2. <span>L</span>ife <span>S</span>tyle <span>P</span>latforms</h1>
        <p>고객과 가장 가까운 곳에서 고객에게 다양한 즐거움을 선물합니다.</p>
      </div>
    </div>
    <!-- 메인 -->
    <main>
      <div class="main-title">SELL PRODUCT</div>
      <div class="main-product">
        <div class="mp-wrap">
          <div class="mp-title">건강식품</div>
          <div class="product">
            <div class="pro-img">
              <img class="big"
                src="./[웹디자인 및 개발] 2025 지방기능경기대회 선수제공파일/A-Module/images/건강식품/1.PNG"
                alt="건강식품-1"
                title="건강식품-1"
              />
            </div>
            <div class="pro-content">
              <div class="pro-name">이뮨 멀티비타민&amp;미네랄</div>
              <div class="pro-des">
                국내 판매 1위 멀티비타민 이뮨 14일분에 이중제형 + 남/녀 맞춤설계
                포뮬러를 적용한 신제품
              </div>
              <div class="pro-price">
                가격 : <span class="nowPrice">75,000</span>
                <span class="disPrice">65,000</span>
              </div>
            </div>
          </div>

          <div class="product">
            <div class="pro-img">
              <img class="big"
                src="./[웹디자인 및 개발] 2025 지방기능경기대회 선수제공파일/A-Module/images/건강식품/2.PNG"
                alt="건강식품-2"
                title="건강식품-2"
              />
            </div>
            <div class="pro-content">
              <div class="pro-name">센트룸</div>
              <div class="pro-des">
                생기 넘치는 일상을 위한 센트룸 우먼 더블업. 비타민 B군 8종 함량
                2배, 23가지 비타민과 미네랄, 한국인 여성 맞춤 영양 설계
              </div>
              <div class="pro-price">
                가격 : <span class="pro-realPrice">27,000</span>
              </div>
            </div>
          </div>

          <div class="product">
            <div class="pro-img">
              <img class="big"
                src="./[웹디자인 및 개발] 2025 지방기능경기대회 선수제공파일/A-Module/images/건강식품/3.PNG"
                alt="건강식품-3"
                title="건강식품-3"
              />
            </div>
            <div class="pro-content">
              <div class="pro-name">닥터브라이언</div>
              <div class="pro-des">
                달콤한 청포도맛 구미로 맛있게 비타민 C와 D를 충전하세요. 활기찬
                하루와 튼튼한 뼈 건강을 맛있게 충전하는 부드러운 젤리 타입
              </div>
              <div class="pro-price">
                가격 : <span class="pro-realPrice">2,000</span>
              </div>
            </div>
          </div>
        </div>
        <div class="mp-wrap">
          <div class="mp-title">디지털</div>
          <div class="product">
            <div class="pro-img">
              <img class="big"
                src="./[웹디자인 및 개발] 2025 지방기능경기대회 선수제공파일/A-Module/images/디지털/4.PNG"
                alt="디지털-4"
                title="디지털-4"
              />
            </div>
            <div class="pro-content">
              <div class="pro-name">
                파이널마우스 스타라이트12 페가수스 미디엄
              </div>
              <div class="pro-des">
                최첨단 펌웨어를 갖춘 업계 최고의 노르딕 RF 플랫폼 기반의 무선
                기술 채용, 최대 20,000CPI 해상도를 갖춘 e스포츠 센서 채용
              </div>
              <div class="pro-price">
                가격 : <span class="nowPrice">1,254,000</span>
                <span class="disPrice">1,128,600</span>
              </div>
            </div>
          </div>
          <div class="product">
            <div class="pro-img">
              <img class="big"
                src="./[웹디자인 및 개발] 2025 지방기능경기대회 선수제공파일/A-Module/images/디지털/1.PNG"
                alt="디지털-1"
                title="디지털-1"
              />
            </div>
            <div class="pro-content">
              <div class="pro-name">PANTONE PD충전 보조배터리</div>
              <div class="pro-des">
                230g의 가벼운 무게로 휴대성 극대화, 3way 빌트인 케이블 채용,
                10,000mAh의 대용량 배터리팩 내장
              </div>
              <div class="pro-price">
                가격 : <span class="pro-realPrice">24,400</span>
              </div>
            </div>
          </div>

          <div class="product">
            <div class="pro-img">
              <img class="big"
                src="./[웹디자인 및 개발] 2025 지방기능경기대회 선수제공파일/A-Module/images/디지털/2.PNG"
                alt="디지털-2"
                title="디지털-2"
              />
            </div>
            <div class="pro-content">
              <div class="pro-name">Bowie D05 무선 블루투스 5.3 헤드셋</div>
              <div class="pro-des">
                현실같은 3D사운드 스테이지 제공, 70시간의 오디오 재생시간,
                2시간으로 완전 충전
              </div>
              <div class="pro-price">
                가격 : <span class="pro-realPrice">36,900</span>
              </div>
            </div>
          </div>
        </div>
        <div class="mp-wrap">
          <div class="mp-title">팬시</div>
          <div class="product">
            <div class="pro-img">
              <img class="big"
                src="./[웹디자인 및 개발] 2025 지방기능경기대회 선수제공파일/A-Module/images/팬시/4.PNG"
                alt="팬시-4"
                title="팬시-4"
              />
            </div>
            <div class="pro-content">
              <div class="pro-name">게이밍 이어폰 VJJB NI</div>
              <div class="pro-des">
                세계 1위 가성비 유선 이어폰. 듀얼 드라이버 기술로 완벽한 고품질
                사운드와 교체가 가능한 분리형 커스텀 케이블
              </div>
              <div class="pro-price">
                가격 : <span class="nowPrice">38,900</span>
                <span class="disPrice">28,900</span>
              </div>
            </div>
          </div>
          <div class="product">
            <div class="pro-img">
              <img class="big"
                src="./[웹디자인 및 개발] 2025 지방기능경기대회 선수제공파일/A-Module/images/팬시/1.PNG"
                alt="팬시-1"
                title="팬시-1"
              />
            </div>
            <div class="pro-content">
              <div class="pro-name">명품 자동 장우산</div>
              <div class="pro-des">
                태풍에도 견디는 프리미엄 우드 장우산. 50개 이상 구매 시 손잡이
                무료 각인 서비스 제공
              </div>
              <div class="pro-price">
                가격 : <span class="pro-realPrice">31,600</span>
              </div>
            </div>
          </div>

          <div class="product">
            <div class="pro-img">
              <img class="big"
                src="./[웹디자인 및 개발] 2025 지방기능경기대회 선수제공파일/A-Module/images/팬시/2.PNG"
                alt="팬시-2"
                title="팬시-2"
              />
            </div>
            <div class="pro-content">
              <div class="pro-name">14K 윙블링 원터치 링 귀걸이(주문제작)</div>
              <div class="pro-des">
                언제나 당신의 일상에 '편안한 멋' 평범한 순간마저 매력을 돋보이게
                만들어 줄 14K Daily Collection. 본 상품은 주문 제작으로 배송은
                약 7~10일 정도 소요됩니다(주말 및 공휴일 제외).
              </div>
              <div class="pro-price">
                가격 : <span class="pro-realPrice">250,000</span>
              </div>
            </div>
          </div>
        </div>
        <div class="mp-wrap">
          <div class="mp-title">향수</div>

          <div class="product">
            <div class="pro-img">
              <img class="big"
                src="./[웹디자인 및 개발] 2025 지방기능경기대회 선수제공파일/A-Module/images/향수/4.PNG"
                alt="향수-4"
                title="향수-4"
              />
            </div>
            <div class="pro-content">
              <div class="pro-name">몽블랑 익스플로러 EDP 60ml</div>
              <div class="pro-des">
                전 세계를 여행하는 탐험가의 향기. 에너제틱 베르가못에서
                자연스러운 패출리로 이어지는 향의 여정(우디 레더리 아로마틱)
              </div>
              <div class="pro-price">
                가격 : <span class="nowPrice">103,000</span>
                <span class="disPrice">93,000</span>
              </div>
            </div>
          </div>
          <div class="product">
            <div class="pro-img">
              <img class="big"
                src="./[웹디자인 및 개발] 2025 지방기능경기대회 선수제공파일/A-Module/images/향수/1.PNG"
                alt="향수-1"
                title="향수-1"
              />
            </div>
            <div class="pro-content">
              <div class="pro-name">에스쁘아 솔리드 퍼퓸 4.2g</div>
              <div class="pro-des">
                새벽 달빛 아래 달큰한 체리가 어지럽게 흩어진 자리, 새하얀
                자스민이 코끝을 스치고 자유롭게 남는 풍부한 머스크 향의 고체
                향수
              </div>
              <div class="pro-price">
                가격 : <span class="pro-realPrice">26,000</span>
              </div>
            </div>
          </div>

          <div class="product">
            <div class="pro-img">
              <img class="big"
                src="./[웹디자인 및 개발] 2025 지방기능경기대회 선수제공파일/A-Module/images/향수/2.PNG"
                alt="향수-2"
                title="향수-2"
              />
            </div>
            <div class="pro-content">
              <div class="pro-name">호텔도슨 향수 오드퍼퓸 75ml</div>
              <div class="pro-des">
                향긋하고 보드라운 마른 꽃과 나무 향 뒤로 낙엽이 타는 듯한 베티버
                향이 퍼지는 스파이시 플로럴 향
              </div>
              <div class="pro-price">
                가격 : <span class="pro-realPrice">153,000</span>
              </div>
            </div>
          </div>
        </div>
        <div class="mp-wrap">
          <div class="mp-title">헤어케어</div>
          <div class="product">
            <div class="pro-img">
              <img class="big"
                src="./[웹디자인 및 개발] 2025 지방기능경기대회 선수제공파일/A-Module/images/헤어케어/5.PNG"
                alt="헤어케어-5"
                title="헤어케어-5"
              />
            </div>
            <div class="pro-content">
              <div class="pro-name">
                닥터포헤어 피토프레시 헤어쿨링 스프레이 150ml
              </div>
              <div class="pro-des">
                열받아 예민해진 두피를 위한 즉각적인 두피 쿨링 솔루션. 온종일
                느껴지는 상쾌함, 피토프레이 쿨링 스프레이
              </div>
              <div class="pro-price">
                가격 : <span class="nowPrice">16,000</span>
                <span class="disPrice">14,400</span>
              </div>
            </div>
          </div>

          <div class="product">
            <div class="pro-img">
              <img class="big"
                src="./[웹디자인 및 개발] 2025 지방기능경기대회 선수제공파일/A-Module/images/헤어케어/1.PNG"
                alt="헤어케어-1"
                title="헤어케어-1"
              />
            </div>
            <div class="pro-content">
              <div class="pro-name">어노브 딥 데미지 트리트먼트 EX 더블</div>
              <div class="pro-des">
                부드러움에 집착하다! 어노브 집착 헤어팩! 단백질 3,000% UP으로
                완성하는 극손상모 솔루션
              </div>
              <div class="pro-price">
                가격 : <span class="pro-realPrice">29,800</span>
              </div>
            </div>
          </div>

          <div class="product">
            <div class="pro-img">
              <img class="big"
                src="./[웹디자인 및 개발] 2025 지방기능경기대회 선수제공파일/A-Module/images/헤어케어/2.PNG"
                alt="헤어케어-2"
                title="헤어케어-2"
              />
            </div>
            <div class="pro-content">
              <div class="pro-name">
                려 루트젠 여성맞춤 볼륨 탈모증상케어 샴퓨 353ml
              </div>
              <div class="pro-des">
                근거있는 여성탈모 전문가 려 루트젠이 만든 촘촘탄탄 밀도탄력을
                채우는 3D볼륨 탈모 샴푸. 부드럽고 향 좋은 약산성 비건 샴푸
              </div>
              <div class="pro-price">
                가격 : <span class="pro-realPrice">21,900</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- 공지사항 -->
    <main>
      <div class="main-title">NOTICE</div>
      <div class="tableBtnWrap">
      <select onchange="nowFilter = this.value; draw();">
    <option value="all">전체</option>
    <option value="일반">일반</option>
    <option value="이벤트">이벤트</option>
</select>

<button onclick="isAsc = true; draw();">오름차순</button>
<button onclick="isAsc = false; draw();">내림차순</button>
      </div>
      <div class="table">
          <ul class="notiHeader">
            <li style="width: 200px;">유형</li>
            <li style="width: 1000px;">제목</li>
            <li style="width: 200px;">공지일자</li>
          </ul>
        <ul class="notiSlide">
        <li>
          <div class="slideWrap">
          <?php foreach ($notice as $value) { ?> 
         <ul idx="<?= $value['idx'] ?>" type="<?= $value['type'] ?>" date="<?= $value['date'] ?>">
            <span style="width: 200px;"><?= $value['type'] ?></span>
            <span style="width: 1000px;"><?= $value['des'] ?></span>
            <span style="width: 200px;"><?= $value['date'] ?></span>
         </ul>
         <?php } ?>
         </div>
        </li>
        </ul>
        </div>
      <div
        class="table-move"
        style="
          align-self: center;
          display: flex;
          gap: 50px;
          align-items: center;
        ">
        <i class="fa fa-3x fa-arrow-left leftNum" style="cursor: pointer"></i>
        <span style="text-align: center"><span class="tableNum">1</span>/<span class="allTableNum">5</span> </span>
        <i class="fa fa-3x fa-arrow-right rightNum" style="cursor: pointer"></i>
      </div>
    </main>
    <!-- 상품입점/제휴문의 -->
    <main>
      <div class="main-title">WITH US</div>
      <p class="koreano1 up">
        대한민국 No.1 <br />
        GIFTS:Mall과 함께 할 WIN-WIN 파트너를 찾습니다. <br />
        제휴사의 많은 지원을 기다립니다.
      </p>
    </main>
    <main>
      <div class="main-title">BANNER</div>
      <div class="banner">
        <div class="banner-item up">
          <i class="fa fa-3x fa-shopping-cart"></i>
          <p>상품입점/제휴문의</p>
        </div>
        <div class="banner-item up">
          <i class="fa fa-3x fa-search"></i>
          <p>문의결과조회</p>
        </div>
        <div class="banner-item up">
          <i class="fa fa-3x fa-compress"></i>
          <p>전자계약시스템</p>
        </div>
        <div class="banner-item up">
          <i class="fa fa-3x fa-unlink"></i>
          <p>파트너시스템</p>
        </div>
      </div>
    </main>
    <main>
      <div class="main-title">INFORMATION</div>
      <div class="info">
        <div class="info-1">
        <div class="infocon up">
          <p>1단계 <span class="faSpan"><i class="fa fa-user"></i></span></p>
          <p> 임시회원가입 </p>
          <p>미거래 업체는 임시회원 가입/로그인 후 상담신청을 하실 수 있습니다.</p>
        </div>
        <div class="infocon up">
          <p>2단계 <span class="faSpan"><i class="fa fa-tty"></i></span></p>
          <p> 온라인상담 </p>
          <p>GIFTS:Mall 입점/제휴를 위해서는 온라인 상담이 선행되어야 합니다. 상담 문의 후 사이트를 통해 결과를 안내해 드립니다.</p>
        </div>
        </div>
        <div class="info-2">
      <div class="infocon up">
          <p>6단계 <span class="faSpan"><i class="fa fa-level-up"></i></span></p>
          <p> 계약체결  </p>
          <p>전자계약서(또는 수기계약서)를 통해 거래계약서와 관련서류를 작성하시면 입점절차가 완료됩니다.</p>
        </div>
       <i class="fa fa-5x fa-search infofa"></i>
          <div class="infocon up">
          <p>3단계 <span class="faSpan"><i class="fa fa-share"></i></span></p>
          <p> 방문상담  </p>
          <p>온라인 상담이 긍정적일 경우, 담당MD/제휴담당자와 구체적인 상담을 진행하게 됩니다.</p>
        </div>
        </div>
        <div class="info-3">
        <div class="infocon up">
          <p>5단계 <span class="faSpan"><i class="fa fa-money"></i></span></p>
          <p> 신용평가  </p>
          <p>입점확정 협력사의 경우 신뢰있는 거래를 위해 신용평가를 받고 있습니다.</p>
        </div>
        
         <div class="infocon up">
          <p>4단계 <span class="faSpan"><i class="fa fa-meh-o"></i></span></p>
          <p> 품평회  </p>
          <p>공정한 평가를 위해 상품력, 기획력, 영업력, 판촉력 등의 항목을 기준으로 내부 품평회를 진행합니다.</p>
        </div>
        </div>
      </div>
    </main>
    <!-- 푸터 -->
  <?php require_once "footer.php" ?>
  </body>
  <script src="./js/index.js"></script>
</html>
