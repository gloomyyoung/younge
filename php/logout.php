<?php

  session_start();

  //세션 삭제
  unset($_SESSION['useridx']);
  unset($_SESSION['userid']);
  unset($_SESSION['userprofile']);

  //메인 페이지로 이동
  echo "
    <script>
      history.go(-1);
    </script>
  ";

?>