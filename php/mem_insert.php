<?php

  //echo "회원 입력 페이지 입니다.";

  $mem_id = $_POST['mem_id'];
  $mem_name = $_POST['mem_name'];
  $mem_email = $_POST['mem_email'];
  $mem_pass = $_POST['mem_pass'];

  //시간 date() 참조 : https://offbyone.tistory.com/38

  $mem_profile_name = $_FILES['mem_profile']['name'];
  $mem_profile_tmp = $_FILES['mem_profile']['tmp_name'];
  $mem_profile_err = $_FILES['mem_profile']['error'];
  $mem_profile_size = $_FILES['mem_profile']['size'];

  //이미지 정보 불러들이기: 실제 jpg인지 바이러스 등인지
  date_default_timezone_set('Asia/Seoul');
  $mem_regi_day = date('Y-m-d h:i:sa');
  $extInfo = explode(".",$mem_profile_name);
  $ret = getimagesize($mem_profile_tmp, $extinfo);

  // echo $mem_id.'<br />';
  // echo $mem_name.'<br />';
  // echo $mem_email.'<br />';
  // echo $mem_pass.'<br />';
  // echo $mem_job.'<br />';
  // echo $mem_profile_name.'<br />';
  // echo $mem_profile_tmp.'<br />';
  // echo $mem_profile_err.'<br />';
  // echo $mem_regi_day.'<br />';

  //논리곱과 논리합
  //특정 연산자 기준으로 양쪽 모두 true일 때 true인 경우 논리곱
  //특정 연산자 기준으로 양쪽 중 하나만 true여도 true인 경우 논리합
  //연산자 : 논리곱(&&), 논리합(||)

  //사진 업로드 파일 경로
  $profile_upload_dir = $_SERVER['DOCUMENT_ROOT'].'/younge/images/members/';


 include $_SERVER['DOCUMENT_ROOT']."/younge/connect/db_connect.php";
  //테이블에 있는 BOR_mem_id와 로그인 페이지에서 넘어온 $login_mem_id 문자열이 일치하는 데이터 조회
  $sql = "SELECT * FROM bor_mem WHERE BOR_mem_id = '$mem_id'";

  $login_result = mysqli_query($dbConn, $sql);
  //아이디 존재 여부 숫자 파악
  $id_match = mysqli_num_rows($login_result);

  //var_dump($id_match);

  if($id_match){
    echo "
      <script>
        alert('이미 등록되어 있는 아이디 입니다.');
        history.go(-1);
      </script>
    ";
      die();
  } 
  if(!$ret[1]){
	  echo "
      <script>
        alert('이미지 파일이 좀 이상합니다.');
        history.go(-1);
      </script>
    ";
	  die();
  }
  if($ret[2] == 1 || $ret[2] > 3){
	  echo "
      <script>
        alert('jpg,png 파일의 형식만 올려주세요!');
        history.go(-1);
      </script>
    ";
	  die();
  }

  if($mem_profile_size > 700500)  {
	  echo "
      <script>
        alert('파일 사이즈를 700KB 이하로 줄여주세요');
        history.go(-1);
      </script>
    ";
	  die();
  }

$mem_photo_name =  $mem_id."@".$mem_profile_name;

  if($mem_profile_name && !$mem_profile_err){
    $uploaded_url = $profile_upload_dir.$mem_profile_name;
    if(!move_uploaded_file($mem_profile_tmp, $uploaded_url)){
      die("파일을 지정한 디렉토리에 업로드하는데 실패했습니다.");
    }
  } else {
    $mem_profile_name = "";
  }
rename(  $profile_upload_dir.$mem_profile_name,  $profile_upload_dir.$mem_photo_name);

  //접속정보
  include $_SERVER['DOCUMENT_ROOT']."/younge/connect/db_connect.php";
  //sql 명령문
  $sql = "INSERT INTO bor_mem (
    BOR_mem_id,
    BOR_mem_name,
    BOR_mem_email,
    BOR_mem_pf,
    BOR_mem_pass,
    BOR_mem_regi_day
  ) VALUES(
    '{$mem_id}',
    '{$mem_name}',
    '{$mem_email}',
    '{$mem_photo_name}',
    '{$mem_pass}',
    '{$mem_regi_day}'
  )";
	mysqli_query($dbConn, $sql);
	echo "
	<form action='/younge/php/login_when_join.php' method='post' name='login_form' style='display:none;'>
			<input type='text' id='id' placeholder='아이디를 입력해 주세요.' name='login_mem_id' value='$mem_id'>
			<input type='password' placeholder='비밀번호 입력해 주세요.' name='login_mem_pass' value='$mem_pass'>
	</form>
    <script>
      alert('회원가입이 완료되었습니다.');
    </script>
	
	<script>
      document.login_form.submit();
    </script>
    ";

	
//
//	echo "
//	<script>
//      location.href='/younge/index.php';
//    </script>
//	";







?>
