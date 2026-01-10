<?php
  require_once 'db.php';
  require_once 'lib.php';
  session_start();

  $id = $_POST['id'];
  $pw = $_POST['pw'];
  $name = $_POST['name'];
  $email = $_POST['email'];

  $check = DB::fetch("SELECT * FROM user WHERE id = '$id'");
  if($check) {
    back('아이디가 이미 존재해요');
    exit;
  }

  $salt = uniqid();
  $enc_pw = hash('sha256', $pw . $salt);

  $sql = "INSERT INTO `user`(`id`, `pw`, `name`, `email`, `salt`, `regist_day`) 
  VALUES ('$id','$enc_pw','$name','$email','$salt',NOW())";

  DB::exec($sql);
  
  alert('회원가입 완료');
  move('index.php');