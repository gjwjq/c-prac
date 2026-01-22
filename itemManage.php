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
    <style>
        .write-wrap { width: 800px; margin: 50px auto; padding: 20px; border: 1px solid #ccc; }
        .row { margin-bottom: 15px; }
        .row label { display: block; font-weight: bold; margin-bottom: 5px; }
        .row input[type="text"], .row input[type="number"], .row textarea, .row select {
            width: 100%; padding: 8px; box-sizing: border-box;
        }
        .preview-img { width: 100px; height: 100px; object-fit: cover; border: 1px solid #ddd; margin-bottom: 5px; }
        .pop-option { background: #f9f9f9; padding: 10px; border-radius: 5px; margin-top: 5px; }
        .btn-submit { background: #333; color: white; padding: 10px 20px; border: none; cursor: pointer; width: 100%; font-size: 16px; font-weight: bold; }
    </style>
</head>
<body>
    <?php require_once 'header.php' ?>
    <main>
        <div class="main-title">PRODUCT MANAGEMENT  </div>
        <div class="write-wrap">
        <h2>상품 <?= $idx ? '수정' : '등록' ?></h2>

        <form action="additemaction.php" method="post" enctype="multipart/form-data">
            
            <input type="hidden" name="mode" value="<?= $idx ? 'update' : 'insert' ?>">
            <?php if ($idx): ?>
                <input type="hidden" name="idx" value="<?= $item['idx'] ?>">
            <?php endif; ?>

            <div class="row">
                <label>카테고리</label>
                <select name="cate" required>
                    <?php 
                    $cateArr = ['건강식품', '디지털', '팬시', '향수', '헤어케어'];
                    foreach($cateArr as $c) {
                        // 수정 시 기존 카테고리 선택됨
                        $selected = ($item && $item['cate'] == $c) ? 'selected' : '';
                        echo "<option value='$c' $selected>$c</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="row">
                <label>상품명</label>
                <input type="text" name="title" value="<?= $item['title'] ?? '' ?>" required>
            </div>

            <div class="row">
                <label>상품설명</label>
                <textarea name="des" rows="3" required><?= $item['des'] ?? '' ?></textarea>
            </div>

            <div class="row">
                <label>가격 (원)</label>
                <input type="number" name="price" value="<?= isset($item['price']) ? str_replace(',', '', $item['price']) : '' ?>" required placeholder="숫자 입력">
            </div>

            <div class="row">
                <label>상품 이미지</label>
                <?php if ($idx && $item['img']): ?>
                    <p>현재 이미지:</p>
                    <img src="<?= $item['img'] ?>" class="preview-img" alt="기존이미지">
                <?php endif; ?>
                <input type="file" name="img" <?= $idx ? '' : 'required' ?>>
            </div>

            <div class="row pop-option">
                <label>
                    <input type="checkbox" name="is_popular" value="1" <?= (isset($item['dis']) && $item['dis'] > 0) ? 'checked' : '' ?>>
                    <b>인기상품으로 지정</b> (카테고리별 1개만 가능)
                </label>
                
                <div style="margin-left: 20px; margin-top: 5px;">
                    <span>할인 옵션 (필수 선택): </span>
                    <?php 
                        // 기존 할인율 역추적 (수정 시 라디오버튼 체크용)
                        $opt = '';
                        if (isset($item['dis']) && $item['dis'] > 0) {
                            $p = str_replace(',', '', $item['price']);
                            $d = str_replace(',', '', $item['dis']);
                            if ($p - $d == 10000) $opt = '10000';
                            else if ($d / $p == 0.9) $opt = '10';
                            else if ($d / $p == 0.7) $opt = '30';
                        }
                    ?>
                    <label><input type="radio" name="discount_opt" value="10000" <?= $opt=='10000'?'checked':'' ?>> 1만원 할인</label>
                    <label><input type="radio" name="discount_opt" value="10" <?= $opt=='10'?'checked':'' ?>> 10% 할인</label>
                    <label><input type="radio" name="discount_opt" value="30" <?= $opt=='30'?'checked':'' ?>> 30% 할인</label>
                </div>
            </div>

            <button type="submit" class="btn-submit"><?= $idx ? '수정 완료' : '상품 등록' ?></button>
        </form>
    </div>
    </main>
    <?php require_once 'footer.php' ?>
</body>
</html>