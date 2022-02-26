<?php

  $page = $_GET['page'];
  //echo $page;

  $view_per_page = 44;
  $from = ($page - 1) * $view_per_page;

  include $_SERVER['DOCUMENT_ROOT']."/younge/connect/db_connect.php";
  $sql = "SELECT * FROM youngetable WHERE liker_like='1' ORDER BY liker_reg DESC LIMIT $from, $view_per_page";

  $liker_result = mysqli_query($dbConn, $sql);
  while($liker_row = mysqli_fetch_array($liker_result)){
    $liker_idx = $liker_row['liker_idx'];
    $liker_id = $liker_row['liker_id'];
    $liker_name = $liker_row['liker_name'];
    $liker_like = $liker_row['liker_like'];
    $liker_reg = $liker_row['liker_reg'];
	  
	$sql1 = "SELECT BOR_mem_pf FROM bor_mem WHERE BOR_mem_id='$liker_id'";
    $profile_result = mysqli_query($dbConn, $sql1);
	$profile_row = mysqli_fetch_array($profile_result);
	?>
	<a href="#!" onclick="javascript:popupOn(event);return false" title="<?=$liker_name.'&middot;&#13;'.$liker_reg?>" alt="<?=$liker_name.'&#13;&middot;'.$liker_reg?>" class="mini_profile_wrapper">
		<img src="/younge/images/members/<?=$profile_row[0]?>" alt="profile" onerror="this.src='/younge/images/members/default-user.png'" class="mini_profile" onload="javascript:imageResizer2(event);">
	</a>
<?php
  }
?>
