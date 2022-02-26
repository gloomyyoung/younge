<?php

  $reply_update_idx = $_GET['update_key'];
  $reply_update_con = $_POST['update_con'];

  //echo $reply_update_idx, $reply_update_con;

  include $_SERVER['DOCUMENT_ROOT']."/board/connect/db_connect.php";
  $sql = "UPDATE bor_ans SET BOR_ans_con = '$reply_update_con' WHERE BOR_ans_idx = $reply_update_idx";

  mysqli_query($dbConn, $sql);

  echo "
    <script>
      alert('수정이 완료되었습니다.');
      history.go(-1);
    </script>
  ";


?>