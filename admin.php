<?php
  require_once 'db.php';
  require_once 'lib.php';
  if(!isset($_SESSION)) {
    session_start();
  }

  if(!isset($_SESSION['user']) || $_SESSION['user']['id'] != 'admin') {
    back('관리자 전용 페이지입니다.');
    exit;
  }

  $sql = "SELECT * FROM user";
  $list = DB::fetchAll($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/main.css" />
    <link rel="stylesheet" href="./css/sub1.css" />
    <link
      rel="stylesheet"
      href="./[웹디자인 및 개발] 2025 지방기능경기대회 선수제공파일/공통/fontawesome/css/font-awesome.min.css"
    />
  <title>Document</title>
</head>
<body>
  <?php require_once "header.php" ?>
  <main>
    <table>
      <thead>
        <tr>
        <th>가입 인덱스</th>
        <th>아이디</th>
        <th>암호화된 비밀번호</th>
      </tr>
      </thead>
      <tbody>
        <?php foreach($list as $member): ?>
        <tr>
          <td> <?php echo $member['idx'] ?> </td>
          <td> <?php echo $member['id'] ?> </td>
          <td> <?php echo $member['pw'] ?> </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </main>  
  <?php require_once "footer.php" ?>
</body>
</html>