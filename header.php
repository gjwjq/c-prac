<?php 
  include_once "./db.php";
  session_start();
?>
<header>
      <a href="./index.php"
        ><img src="./images/logo.png" alt="logo" title="logo"
      /></a>
      <div class="dropdown">
        <ul>
          <a href="./sub1.php">소개</a>
          <ul class="drop">
            <li><a href="#">-</a></li>
            <li><a href="#">-</a></li>
          </ul>
        </ul>
        <ul>
          <a href="./sub2.php">전체상품</a>
          <ul class="drop">
            <li><a href="./sub2.php">판매상품</a></li>
            <li><a href="./sub3.php">인기상품</a></li>
          </ul>
        </ul>
        <ul>
          <a href="#">가맹점</a>
          <ul class="drop">
            <li><a href="#">-</a></li>
            <li><a href="#">-</a></li>
          </ul>
        </ul>
        <ul>
          <a href="./sub4.php">장바구니</a>
          <ul class="drop">
            <li><a href="#">-</a></li>
            <li><a href="#">-</a></li>
          </ul>
        </ul>
      </div>
      <div class="hdabox">
        <a href="#">장바구니</a>
        <a href="#">관리자</a>
        <a href="#" class="sin">로그인</a>
        <a href="#" class="sup">회원가입</a>
      </div>
    </header>
     <div class="upPop">
      <form action="./signup.php" method="post">
        <input required type="text" name="id" placeholder="아이디를 입력해주세요.">
        <input required type="password" name="pw" placeholder="비밀번호를 입력해주세요.">
        <input required type="text" name="name" placeholder="이름을 입력해주세요.">
        <input required type="email" name="email" placeholder="이메일을 입력해주세요.">
        <div class="popBtn">
        <button type="post">회원가입</button><div class="signClose">닫기</div>
        </div>
      </form> 
      <div class="textLogin">SIGN UP</div>
    </div>
    <div class="inPop">
      <form action="./signin.php" method="post">
        <input required type="text" name="id" placeholder="아이디를 입력해주세요.">
        <input required type="password" name="pw" placeholder="비밀번호를 입력해주세요.">
        <div class="popBtn">
        <button type="post">로그인</button><div class="signClose">닫기</div>
        </div>
      </form> 
      <div class="textLogin">SIGN IN</div>
    </div>
    <script src="./js/sub2.js"></script>
    <script>
      $('.sin').onclick = () => $('.inPop').style.display = 'flex'
      $('.sup').onclick = () => $('.upPop').style.display = 'flex'

      $$('.signClose').forEach((e) => {
        e.onclick = () => {
          $('.upPop').style.display = 'none'
          $('.inPop').style.display = 'none'
        }
      })
    </script>
