<?php
    require_once 'db.php';
    if(!isset($_SESSION)) {session_start();}
    $userId = $_SESSION['user']['id'] ?? false;
    if (!$userId) {exit;}

    $itemId = $_GET['itemId'];
    $count = $_GET['count'];

    $sql = "UPDATE cart SET count = '$count' WHERE itemId = '$itemId' AND userId = '$userId'";
    
    DB::exec($sql);