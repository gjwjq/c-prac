<?php
  function alert($msg) {
    echo "<script>alert('$msg')</script>";
  }

  function move($loca) {
    echo "<script>location.href='$loca'</script>";
  }

  function back($msg) {
    echo"
      <script>
        alert('$msg');
        history.back()
      </script>
    ";
  }