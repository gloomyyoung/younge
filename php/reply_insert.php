<?php

  $reply_key = $_GET['reply_idx'];
  $reply_id = $_GET['reply_id'];
  $reply_cont = addslashes($_POST['reply_cont']);
  $reply_reg = date("m-d h:i:s");

  // echo $reply_key.'<br />';
  // echo $reply_id.'<br />';
  // echo $reply_cont.'<br />';
  // echo $reply_reg.'<br />';

  include $_SERVER['DOCUMENT_ROOT']."/board/connect/db_connect.php";
  $sql = "INSERT INTO bor_ans(
    BOR_ans_comm_num,
    BOR_ans_id,
    BOR_ans_con,
    BOR_ans_reg
  ) VALUES(
    '$reply_key',
    '$reply_id',
    '$reply_cont',
    '$reply_reg'
  )";

  mysqli_query($dbConn, $sql);

  // echo "
  //   <script>
  //     alert('등록 완료');
  //     history.go(-1);
  //   </script>
  // ";

  header("Location:/board/pages/detail_form.php?idx=$reply_key");

?>