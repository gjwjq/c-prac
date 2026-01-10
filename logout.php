<?php
  require_once "lib.php";
  session_start();
  session_destroy();

  alert('로그아웃 됨');
  move('index.php');