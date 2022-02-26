<?php

$liker_id = $_GET['liker_id'];
$liker_name = $_GET['liker_name'];
date_default_timezone_set('Asia/Seoul');
$liker_reg = date('Y-m-d h:i:sa');

// echo $insert_id.'<br />';
// echo $insert_tit.'<br />';
// echo $insert_con.'<br />';
// echo $insert_reg.'<br />';
// echo $insert_hit.'<br />';

if ( !$liker_id || $liker_id == '') {
     echo '<script>
     alert("로그인을 해주세요");
    history.go(-1);</script>';
    die();

}


include $_SERVER['DOCUMENT_ROOT']."/younge/connect/db_connect.php";
$sql_id_match = "SELECT * FROM youngetable WHERE liker_id='$liker_id'";
$id_result = mysqli_query( $dbConn, $sql_id_match );
//아이디 존재 여부 숫자 파악
$id_match = mysqli_num_rows( $id_result );


$sql_like_match = "SELECT liker_like FROM youngetable WHERE liker_id='$liker_id'";
$like_match_result = mysqli_query($dbConn, $sql_like_match);
$like_match = mysqli_num_rows( $like_match_result );



if($id_match){
	$like_or_not = mysqli_fetch_assoc($like_match_result)["liker_like"];
if ( $id_match && $like_or_not == '1' ) {

	$sql_like_cancel = "UPDATE youngetable SET liker_like='0' WHERE liker_id='$liker_id'";
	mysqli_query( $dbConn, $sql_like_cancel );

	echo "
    <script>
	alert('좋아요를 취소했습니다 T_T');
	//localStorage.setItem('likeButtonOn',true);
	location.href = '/younge/'
	  //history.go(-1)
    </script>
	";

  

} else if($id_match && $like_or_not == '0'){
	
    $sql_like_update = "UPDATE youngetable SET liker_like='1',liker_reg='$liker_reg' WHERE liker_id='$liker_id'";
        mysqli_query( $dbConn, $sql_like_update );
        echo "
      <script>
        alert('다시 좋아요 성공 ><');
		//localStorage.setItem('likeButtonOn',true);
        location.href = '/younge/'
	  //history.go(-1)
      </script>
       ";
	}
	}
else {

    include $_SERVER['DOCUMENT_ROOT']."/younge/connect/db_connect.php";
    $sql_insert = "INSERT INTO youngetable(
    liker_id,
    liker_name,
    liker_like,
    liker_reg
  ) VALUES (
    '{$liker_id}',
    '{$liker_name}',
    '1',
    '{$liker_reg}'
  )";

    mysqli_query( $dbConn, $sql_insert );

    echo "
    <script>  
      alert('좋아요 성공 ><');
	  //localStorage.setItem('likeButtonOn',true);
      location.href = '/younge/'
	  //history.go(-1)
    </script>
  ";

}

?>
