<?php

  session_start();
  if(isset($_SESSION['useridx'])){
    $useridx = $_SESSION['useridx'];
  } else {
    $useridx = "";
  }

  $post_id = $_POST['postId'];
  $type = $_POST['type'];

  //echo $post_id, $type, $useridx;

  include $_SERVER['DOCUMENT_ROOT']."/board/connect/db_connect.php";
  $sql = "SELECT COUNT(*) AS cntpost FROM bor_like_unlike WHERE like_unlike_postidx=".$post_id." AND like_unlike_useridx=".$useridx;

  $result = mysqli_query($dbConn, $sql);
  $fetch_data = mysqli_fetch_array($result);
  $count = $fetch_data['cntpost'];

  //echo $count;

  if($count == 0){
    $insert_query = "INSERT INTO bor_like_unlike(
      like_unlike_useridx,
      like_unlike_postidx,
      like_unlike_type
    ) VALUES (
      '$useridx',
      '$post_id',
      '$type'
    )";
    mysqli_query($dbConn, $insert_query);
  } else {
    $update_query = "UPDATE bor_like_unlike SET like_unlike_type=".$type." WHERE like_unlike_useridx=".$useridx." AND like_unlike_postidx=".$post_id;

    mysqli_query($dbConn, $update_query);
  }

  $sql1 = "SELECT COUNT(*) AS cntLike FROM bor_like_unlike WHERE like_unlike_type=1 AND like_unlike_postidx=".$post_id;
  $result1 = mysqli_query($dbConn, $sql1);
  $fetch_likes = mysqli_fetch_array($result1);
  $total_likes = $fetch_likes['cntLike'];

  $sql2 = "SELECT COUNT(*) AS cntUnlike FROM bor_like_unlike WHERE like_unlike_type=0 AND like_unlike_postidx=".$post_id;
  $result2 = mysqli_query($dbConn, $sql2);
  $fetch_unlikes = mysqli_fetch_array($result2);
  $total_unlikes = $fetch_unlikes['cntUnlike'];

  //echo $total_unlikes;

  $return_arr = array("likes" => $total_likes, "unlikes" => $total_unlikes);

  echo json_encode($return_arr);

  // echo '[{"like" : 20, "unlike" : 25}]';

?>