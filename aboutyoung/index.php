<?php
session_start();
include $_SERVER['DOCUMENT_ROOT']."/younge/connect/db_connect.php";
  if(isset($_SESSION['useridx'])){
    $useridx = $_SESSION['useridx'];
  } else {
    $useridx = "";
  }

  if(isset($_SESSION['userid'])){
    $userid = $_SESSION['userid'];
  } else {
    $userid = "";
  }

  if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
  } else {
    $username = "";
  }

  if(isset($_SESSION['userprofile'])){
    $userprofile = $_SESSION['userprofile'];
  } else { 
    $userprofile = "";
  }

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no">
	<title> 이대영 포트폴리오 </title>
	<meta name="description" content="영이의 포트폴리오입니다. HTML5, CSS3, ES6, Jquery, PHP에 대응합니다.">
	<meta name="keywords" content="HTML5, CSS3, ES6, Jquery, PHP, Photoshop, XD, Zeplin, 퍼블리셔, 웹퍼블리셔">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="robots" content="INDEX,FOLLOW">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, minimum-scale=0.25, maximum-scale=4">
	<!-- cdn-->
	<script src="/younge/script/jquery.js"></script>
	<!-- 일반-->
	<script src="/younge/script/nav.js"></script>
	<script src="/younge/script/circle-progress.min.js"></script>
	<script src="/younge/script/aboutyoung.js"></script>
	

	<link rel="stylesheet" type="text/css" href="/younge/css/main.css">
	<link rel="stylesheet" type="text/css" href="/younge/css/navfoot.css">
	<link rel="stylesheet" type="text/css" href="/younge/css/margin.css">
	<link rel="stylesheet" type="text/css" href="/younge/css/button.css">
	<link rel="shortcut icon" href="/younge/images/logo20_1.ico" alt="img">
	<!-- 원-->
	<link rel='stylesheet' href='/younge/css/font-awesome.min.css'>
	<!-- 폰트-->
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900|Noto+Serif+KR:200,300,400,500,600,700,900&display=swap&subset=korean" rel="stylesheet">

	<!-- 글자효과-->
	<link rel="stylesheet" type="text/css" href="/younge/css/animate.css">
	<script>
		function contact() {
			var UserAgent = navigator.userAgent;
			if (UserAgent.match(
					/iPhone|iPod|Android|Windows CE|BlackBerry|Symbian|Windows Phone|webOS|Opera Mini|Opera Mobi|POLARIS|IEMobile|lgtelecom|nokia|SonyEricsson/i
				) != null || UserAgent.match(/LG|SAMSUNG|Samsung/) != null) {
				location.href = "tel:010-4343-1354"

			} else {
				window.open("/younge/contact_popup.php", "a", "width=631, height=780, scrollbars=1");
			}
		}

	</script>
</head>

<body>
   <!--Navigation bar-->
        <div id="nav-placeholder">

        </div>
    <div id="about_young">

        

        <script>
            $(function() {
                $('#nav-placeholder').load("/younge/include/nav.php")
            });
        </script>
        <!--end of Navigation bar-->
        <div id="layout">
            <!----헤더1 ---->
            <section id="header1" onclick="javascript:fadeout()">
                <div>
                    <a href="#none"><img src="/younge/images/frame_2.png" alt="img"></a>
                    <img src="/younge/images/profil2.jpg">
                </div>
                <div id="blackfade">
                    <p> My specs <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;are down Here! </p><img src="/younge/images/click.gif" alt="click">
                </div>
            </section>
            <!----헤더1 끝 ---->
            <main>
                <div>
                    <section id="section1">

                        <div id="whoiam">
                            <div id="whoo">
                                <h2> <span id="yell1">Who</span> <span id="yell2">i am</span></h2>
                            </div>
                            <div id="whowrapper">
                                <div id="who">
                                    <h4>information</h4>
                                    <div>
                                        <div id="subject">
                                            <p> name</p>
                                            <p class="smallp"> the final degree<br></p>
                                            <p> <br>hometown</p>
                                        </div>
                                        <div class="pp">
                                            <p> 이대영</p>
                                            <p> 국민대학교<br>임산생명공학과</p>
                                            <p> 경남 창원시</p>
                                        </div>
                                    </div>
                                </div>
                                <div id="who3">
                                    <h4>Certificate</h4>
                                    <div>
                                        <div id="subject3">
                                            <p> JLPT <span> (일본어)</span></p>
                                            <p> TOEIC</p>
                                            <p class="smallp"> TOEIC speaking<br></p>
                                            <p> <br>GTQ</p>
                                            <p>ITQ</p>
                                            <p>운전면허</p>
                                            <p>태권도</p>
                                        </div>

                                        <div class="pp">
                                            <p> N1</p>
                                            <p> 825</p>
                                            <p> Lv6 (140)</p>
                                            <p><br>포토샵 1급</p>
                                            <p>일러스트 2급</p>
                                            <p>1종보통</p>
                                            <p>1단</p>
                                        </div>
                                    </div>
                                </div>




                                <div id="who2">
                                    <h4>Career</h4>
                                    <div>
                                        <div id="subject2">
                                            <p> 한국수입협회(KOIMA) 배너 / 상세페이지 </p>
                                            <p> 풀무원 상남점 홈페이지 Design / Publish </p>
                                            <p>Contguard 홈페이지 Design / 보수 </p>
                                            <p> Contguard BEXCO 전시회 동영상 제작</p>
                                            <p>한국 미쓰도요 기술영업</p>
                                            <p>한국임업진흥원(kofpi) 연구보조 인턴 근무</p>
                                        </div>
                                        <div class="pp2">
                                            <p> 2020.02 ~ 2020.02</p>
                                            <p>2020.01 ~ 2020.02</p>
                                            <p>2019.10 ~ 2020.02</p>
                                            <p>2019.09 ~ 2019.10</p>
                                            <p> 2019.01 ~ 2019.07</p>
                                            <p> 2017.06 ~ 2017.08</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <section id="circleBar">
                            <h2>WEB SKILLs</h2>
                            <h4>I'm a Web Designer</h4>

                            <div class="container">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="round" data-value="0.95" data-size="120" data-thickness="4">
                                            <strong></strong>
                                            <span><i class="fa fa-html5" aria-hidden="true"></i> HTML&amp;CSS</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="round" data-value="0.85" data-size="120" data-thickness="4">
                                            <strong></strong>
                                            <span><i class="fa fa-css3" aria-hidden="true"></i>JavaScript</span>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="round" data-value="0.75" data-size="120" data-thickness="4">
                                            <strong></strong>
                                            <span><i class="fa fa-laptop" aria-hidden="true"></i>React</span>
                                        </div>
                                    </div>
									<div class="col-md-3">
                                        <div class="round" data-value="0.65" data-size="120" data-thickness="4">
                                            <strong></strong>
                                            <span><i class="fa fa-laptop" aria-hidden="true"></i>React Native</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="round" data-value="0.75" data-size="120" data-thickness="4">
                                            <strong></strong>
                                            <span><i class="fa fa-laptop" aria-hidden="true"></i>PHP</span>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="round" data-value="0.50" data-size="120" data-thickness="4">
                                            <strong></strong>
                                            <span><i class="fa fa-jsfiddle" aria-hidden="true"></i>mySQL</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="lastcol"> </div>
                            <button class="btn" onClick="Circlle('.round');">Refresh</button>
                        </section>
<!--                        <script src="function.js"></script>-->
                    </section>
                </div>
            </main>

            <aside>
                <div id="etc">
                    <img src="/younge/images/under.png" alt="under">

                </div>
            </aside>


        </div>

        <!--Navigation bar-->
        <div id="foot-placeholder">

        </div>

        <script>
            $(function() {
                $('#foot-placeholder').load("/younge/footer.html")
            });

        </script>
        <!--end of Navigation bar-->

    </div>

    <div id="black">
    </div>

</body>

</html>
