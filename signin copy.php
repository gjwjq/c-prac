<?php
require_once 'db.php';
require_once 'lib.php';
session_start();

$id = $_POST['id'];
$pw = $_POST['pw'];

$sql = "SELECT * FROM user WHERE id = '$id'";
$user = DB::fetch($sql);

if(!$user) {
  back('id가 존재하지 않아요');
  exit;
}