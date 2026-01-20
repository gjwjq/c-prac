<?php
    require_once 'db.php';
    if(!isset($_SESSION)) {session_start();}
    $userId = $_SESSION['user']['id'] ?? false;
    if (!$userId) {exit;}

    $itemId = $_GET['itemId'];
    $count = $_GET['count'];

    DB::exec("update cart set count = ? where itemId = ? and userId = ?", [$count,$itemId,$userId]);