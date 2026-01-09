<?php
  session_start();
  require_once "db.php";
  require_once "lib.php";

  $id = $_POST['id'];
  $pw = $_POST['pw'];

  $sql = "SELECT * FROM user WHERE id = '$id'";
  $user = DB::fetch($sql);

  if(!$user) {
    alert('id가없음');
    exit;
  } 

  $salt = $user['salt'];
  $enc_pw = hash('sha256', $salt . $pw);

  if($enc_pw === $user['pw']) {
    $_SESSION['user'] = $user;
    alert('로그인 성공');
    move('index.php');
  } else {
    alert('비밀번호가 틀림');
    move('index.php');
    exit;
  }