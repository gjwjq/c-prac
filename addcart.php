<?php 
    require_once 'db.php';
    require_once 'lib.php';
    session_start();

    $userId = $_SESSION['user']['id'] ?? false;
    $itemId = $_GET['idx'];

    if ($userId) {
        if(DB::fetch("select * from cart where itemId = $itemId and userId = '$userId'")){
            DB::exec("update cart set count = count +1 where itemId = $itemId and userId = '$userId'");
        } else {
            DB::exec("insert into cart(userId, itemId) values ('$userId', '$itemId')");
        }
        alert('장바구니에 추가됨');
        move('newsub2.php');
    } else {
        back('로그인 해주세요.');
    }



// 테이블제작
//CREATE TABLE cart (
//    idx INT AUTO_INCREMENT PRIMARY KEY, -- 장바구니 고유 번호
//    userId VARCHAR(255) NOT NULL,       -- 로그인한 회원의 ID
//    itemId INT NOT NULL,                -- 상품의 고유 번호(item 테이블의 idx)
//    count INT DEFAULT 1,                -- 담은 수량
//    date DATETIME NOT NULL              -- 상품을 담은 시간
//);