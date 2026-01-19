<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GIFTS:Mall 상품목록</title>
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/main.css" />
    <link rel="stylesheet" href="./[웹디자인 및 개발] 2025 지방기능경기대회 선수제공파일/공통/fontawesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="./css/product.css">
</head>
<body>
    <?php require_once 'header.php'; ?>
    <?php require_once 'db.php'; ?>

    <main>
        <div class="main-title">POPULAR PRODUCT</div>
        <div class="pro-wrap" style="display: flex; flex-wrap: wrap; gap: 20px;">
            <?php
            $popular_items = DB::fetchAll("SELECT * FROM item WHERE dis > 0 ORDER BY idx ASC");

            foreach ($popular_items as $item) {
                $price = number_format($item['price']);
                $dis_price = number_format($item['dis']);
            ?>
                <div class="product">
                    <div class="pro-img">
                        <img src="<?= $item['img'] ?>" alt="<?= $item['title'] ?>" title="<?= $item['title'] ?>">
                    </div>
                    <div class="pro-content">
                        <div class="pro-name"><?= $item['title'] ?></div>
                        <div class="pro-des"><?= $item['des'] ?></div>
                        <div class="pro-price">
                            가격 : <span class="nowPrice" style="text-decoration: line-through; color: #999;"><?= $price ?></span> 
                            <span class="disPrice" style="color: red; font-weight: bold;"><?= $dis_price ?></span>
                        </div>
                        <div class="btn-wrap">
                            <button>장바구니담기</button>
                            <button>구매하기</button>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

    </main>

    <?php require_once 'footer.php'; ?>
</body>
</html>