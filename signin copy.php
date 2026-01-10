<?php
  require_once "db.php";
  require_once "lib.php";
  session_start();

  $id = $_POST['id'];
  $pw = $_POST['pw'];

  $sql = "SELECT * FROM user WHERE id = '$id'";
  $user = DB::fetch($sql);

  if(!$user) {
    back('id가 없어요');
    exit;
  }

  $salt = $user['salt'];
  $enc_pw = hash('sha256', $pw . $salt);

  if($enc_pw === $user['pw']) {
    $_SESSION['user'] = $user;
    alert('로그인 성공');
    move('index.php');
  } else {
    back('비밀번호 틀림');
    exit;
  }