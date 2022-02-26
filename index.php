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
	<script src="/younge/script/liker_ajax.js"></script>
	<script src="/younge/script/nav.js"></script>
	<script src="/younge/script/main.js"></script>

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
	<link rel="stylesheet" type="text/css" href="css/animate.css">
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
	<div id="section7popup" style="">
		<div class="popupContent" style="">
		<div class="like_big_img"><a href="javascript:void(0)"><img src="#" alt="img" onerror="this.src='/younge/images/members/default-user.png'" onload="popupOnResizer(event);"></a></div>
		<div class="xButton"><p>×</p></div>
			<h4 style="">좋아하신 분: <span id="spanLikerName"></span></h4>
			<p style="">좋아요 날짜: <span id="spanLikerDate"></span></p>
		</div>

	</div>
	<div>
		<div id="layout">
			<!----헤더1 ---->
			<div id="header1">
				<div class="main_txt_box">
					<img src="images/header2_3.jpg" alt="img" id="headimg1">
					<img src="images/header2_4.jpg" alt="img" id="headimg2">

					<h4 id="movetxt">I make this for the <br /> <span id="movetxt2"> <br id="brmob">DESIGNS</span><span id="movetxt22"> all you need</span>
						<br />
					</h4>
					<h6 id="movetxt3"> and you can take me now <br />
						<a href="#!" id="contact" onclick="contact()">
							<img src="images/contactbutton.jpg" alt="img">
						</a>
					</h6>
					<div id="trig"><img src="images/star.gif" alt="star"> </div>
				</div>
			</div>
			<!----헤더1 끝 ---->

			<main>
				<div>
					<section id="section1">
						<div id="sec1wrap">
							<div id="sec1_1">
								<div id="sec1photo">
									<div><img src="/younge/images/joong.png" alt="11" class="imakesub"></div>
								</div>
								<div class="sec1golden" class="desc">
									<div class="sec1sub">
										<p> Dae Young, Lee</p>
									</div>
									<div id="sec1script">
										<p style="font-weight: 100" class="imake"> 199X.11.24</p>
										<p style="font-weight: 100" class="imake"> 010-4343-1354</p>
										<p style="font-weight: 100" class="imake"> serenity90s@naver.com</p>
									</div>
								</div>
							</div>
							<div id="sec1_2">
								<div class="sec1_2_1">
									<h6 id="trig">시맨틱 태그
										<br />웹표준, 웹접근성
										<br />크로스 브라우징까지
									</h6>
								</div>
								<div class="sec1golden2" class="desc">
									<div class="sec1sub">
										<p> Carrer</p>
									</div>
								</div>
								<div>
									<div id="sec1script2" class="desc carrier">
										<p style="font-weight: 100; color: darkgray" class="imake"> 한국임업진흥원(kofpi) 연구보조 인턴 근무 2017.06~2017.08</p>
										<p style="font-weight: 100; color: darkgray" class="imake"> 한국 미쓰도요 기술영업 2019.01~2019.07</p>
										<p style="font-weight: 100" class="imake"> Contguard Korea 프리랜서 디자이너＆퍼블리셔 2019.09~2020.04</p>
										<p style="font-weight: 100" class="imake"> (웹사이트 제작 / 판촉물 제작) <span style="color: transparent;">2019.09~2020.04</span></p>
										<p style="font-weight: 100" class="imake"> 풀무원 상남점 홈페이지 Design / Publish 2020.01~2020.02</p>
										<p style="font-weight: 100" class="imake"> 한국수입협회(KOIMA) 배너 / 상세페이지 2020.02~2020.02</p>
										<p style="font-weight: 100" class="imake"> 트랜스코스모스코리아 UI디자이너＆퍼블리셔 2020.04~2021.04</p>
										<p style="font-weight: 100" class="imake"> (웹에이전시 웹개발팀) <span style="color: transparent;">2019.09~2020.04</span></p>
										<p style="font-weight: 100" class="imake"> 신한금융투자 프리랜서 웹퍼플리셔 2020.04~<span style="color: ;">재직중&nbsp;&nbsp;</span></p>
									</div>
								</div>
								<div class="sec1golden2" class="desc">
									<div class="sec1sub">
										<p> specialty </p>
									</div>
								</div>
								<div>
									<div id="sec1script2" class="desc">
										<p style="font-weight: 100" class="imake"> 웹사이트 구축</p>
										<p style="font-weight: 100" class="imake"> 개발자와 커뮤니케이션</p>
										<p style="font-weight: 100" class="imake"> 일본어 자유 의사소통</p>
										<p style="font-weight: 100" class="imake"> 영어 메일 의사소통</p>
									</div>
								</div>
							</div>

							<div id="sec1_3" class="desc">
								<div class="sec1golden2">
									<div class="sec1sub">
										<p> Education</p>
									</div>
								</div>
								<div>
									<div id="sec1script2">
										<p style="font-weight: 100" class="imake">국민대학교 임산생명공학과 졸업 2018.08</p>
										<p style="font-weight: 100" class="imake">이젠컴퓨터아카데미 UI/UX 과정 2020.02</p>
										<p style="font-weight: 100" class="imake">더조은컴퓨터아카데미 PHP/MySQL 프로그래밍 2021.07</p>
										<p style="font-weight: 100" class="imake">이젠컴퓨터아카데미 React.js 자바스크립트 2021.11</p>
										<p style="font-weight: 100" class="imake">이젠컴퓨터아카데미 React Native 앱개발 2022.04</p>
									</div>
								</div>


								<div class="sec1golden2">
									<div class="sec1sub">
										<p> Certifications</p>
									</div>
								</div>
								<div>
									<div id="sec1script2">
										<p style="font-weight: 100" class="imake"> 웹디자인 기능사</p>
										<p style="font-weight: 100" class="imake"> GTQ Photoshop 1급</p>
										<p style="font-weight: 100" class="imake"> JLPT N1</p>
										<p style="font-weight: 100" class="imake"> TOEIC 825</p>
										<p style="font-weight: 100" class="imake"> TOEIC Speaking Lv6 (140)</p>
										<p style="font-weight: 100" class="imake"> ITQ Internet A급</p>
									</div>
								</div>


								<div class="sec1golden2">
									<div class="sec1sub">
										<p> Skills</p>
									</div>
								</div>
								<div>
									<div id="sec1script2">
										<p style="font-weight: 100" class="imake"> Photoshop / Illustrator</p>
										<p style="font-weight: 100" class="imake"> HTML5 / CSS3 / Jquery</p>
										<p style="font-weight: 100" class="imake"> Premiere Pro</p>
										<p style="font-weight: 100" class="imake"> Photographs - Portrait / Food / Nature</p>
									</div>
								</div>
								<div class="sec1golden2">
									<div class="sec1sub">
										<p> Character</p>
									</div>
								</div>
								<div>
									<div id="sec1script2">
										<p style="font-weight: 100" class="imake"> 다정다감하고 누구와도 잘 어울립니다.<br />
											내가 맡은 임무는 극한의 책임감을 가지고<br />
											끝까지 완수하여 팀원으로서 모범이 됩니다.</p>

									</div>
								</div>
							</div>

						</div>
					</section>

					<section id="circleBar">
						<div>
							<div class="webskillcon">
								<div>
									<h5>WEB SKILLs</h5>
									<h6>I'm a Web Designer</h6>
									<div><img src="/younge/images/logo20_3.png" alt="img" class="logo2"></div>
									<div>
										<p>Making the Design people want to make, Get you Desird Results Since 2019</p>
									</div>
									<div class="cttBtnWrapper js-fadeIn"><a href="#!" onclick="contact()"><img src="/younge/images/contactbutton.jpg" alt="cttBtn" class="cttBtn"></a></div>
								</div>
							</div>
							<div class="container">

								<h6 class="mb20">Design</h6>
								<div class="row">
									<div class="skillIcon js-fadeIn">
										<p><span><img src="/younge/images/photoshop2.png" alt="ps"></span>Photoshop</p>
									</div>
									<div class="skillIcon js-fadeIn">
										<p><span><img src="/younge/images/Illustrator2.png" alt="ill"></span>Illustrator</p>
									</div>
									<div class="skillIcon js-fadeIn">
										<p><span><img src="/younge/images/xd2.png" alt="xd"></span>Xd</p>
									</div>
									<div class="skillIcon js-fadeIn">
										<p><span><img src="/younge/images/figma.png" alt="xd"></span>Figma</p>
									</div>
								</div>
								<h6 class="mb15">Publishing</h6>
								<div class="row">
									<div class="skillIcon js-fadeIn">
										<p><span><img src="/younge/images/html.png" alt="html"></span>HTML5</p>
									</div>
									<div class="skillIcon js-fadeIn">
										<p><span><img src="/younge/images/css.png" alt="css"></span>CSS3</p>
									</div>
									<div class="skillIcon js-fadeIn">
										<p><span><img src="/younge/images/javascript.png" alt="js"></span>Javascript(ES6)</p>
									</div>
									<div class="skillIcon js-fadeIn">
										<p><span><img src="/younge/images/jquery2.png" alt="jq"></span>Jquery</p>
									</div>
									<div class="skillIcon js-fadeIn">
										<p><span><img src="/younge/images/php.png" alt="jq"></span>PHP</p>
									</div>
									<div class="skillIcon js-fadeIn">
										<p><span><img src="/younge/images/React_logo_wordmark2.png" alt="jq"></span>React.js</p>
									</div>
									<div class="skillIcon js-fadeIn">
										<p><span><img src="/younge/images/RN.png" alt="jq" style="width:38px;height:38px;padding:6px;box-sizing:content-box;"></span>React Native</p>
									</div>
									<div class="skillIcon js-fadeIn">
										<p><span></span></p>
									</div>
								</div>
								<h6 class="mb15" id="skillIconWrapper">Collaboration</h6>
								<div class="row">
									<div class="skillIcon" id="skillIcon1">
										<p><span><img src="/younge/images/git3.png" alt="ps"></span>Github</p>
									</div>
									<div class="skillIcon" id="skillIcon2">
										<p><span><img src="/younge/images/svn2.png" alt="ill"></span>Tortoise SVN</p>
									</div>
								</div>
							</div>
							<script>
								// section fadeIn
								(function() {
									'use strict'
									// section fadeIn
									var fadeInSection = function() {
										var targetElm = document.getElementsByClassName('js-fadeIn'),
											windowH = window.innerHeight
										if (targetElm.length == 0) return
										var pxY = -100
										for (var i = 0; i < targetElm.length; i++) {
											var elm = targetElm[i]
											if (elm.classList.contains('js-fadeIn')) {
												var elmRect = elm.getBoundingClientRect()
												var scrollTop = window.pageYOffset || document.documentElement.scrollTop
												var elmY = elmRect.top + scrollTop
												scrollTop > elmY - windowH + pxY && elm.classList.add('appeared');
											}
										}
									};
									// scroll
									window.addEventListener('scroll', function(e) {
										e.preventDefault();
										fadeInSection();
									})
								})();

							</script>

							<!--<div class="container">
								<div class="row">
									<div class="col-md-3">
										<div class="round" data-value="0.85" data-size="100" data-thickness="4">
											<strong></strong>
											<span><i class="fa fa-html5" aria-hidden="true"></i> HTML Skill</span>
										</div>
									</div>
									<div class="col-md-3">
										<div class="round" data-value="0.75" data-size="100" data-thickness="4">
											<strong></strong>
											<span><i class="fa fa-css3" aria-hidden="true"></i> CSS Skill</span>
										</div>
									</div>
									<div class="col-md-3">
										<div class="round" data-value="0.65" data-size="100" data-thickness="4">
											<strong></strong>
											<span><i class="fa fa-jsfiddle" aria-hidden="true"></i> JavaScript Skill</span>
										</div>
									</div>
									<div class="col-md-3">
										<div class="round" data-value="0.95" data-size="100" data-thickness="4">
											<strong></strong>
											<span><i class="fa fa-laptop" aria-hidden="true"></i> Photoshop Skill</span>
										</div>
									</div>
								</div>
							</div>-->
							<button class="btn" onClick="Circlle('.round');">Refresh</button>
						</div>
					</section>
					<!--                    <script src='/younge/script/circle-progress.min.js'></script>-->

					<section class="sectionweb2" id="icando">
						
						<div id="icando_content" class="icando_content">
							<h4> I Can Do This </h4>
							<h5 class="ani2">Web Development</h5>
							<p style="text-align:center;margin-top: 20px;opacity: 0.3; padding: 0 15px;">혼자서 풀스택 웹개발 진행 가능합니다.</p>
							<div class="cans">
								<div class="can"><span></span><p>기획 - 디자인 - 프론트엔드 - 백엔드 <br class="onlySP" />- 서버 도메인 - 서비스</p></div>
								<div class="can right"><span></span><p>PPT - Ps(Xd) - React - PHP,mySQL - NAS</p></div>
							</div>
						</div>
						<div class="motion_back">
							<!-- 작은 꽃 -->
							<svg version="1.1" id="flower1_1" class="flower_small" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="80px" height="80px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
								<path fill="#ffffff" d="M16.758,49.942c-6.39,0-11.587-5.011-11.587-11.17c0-1.83,0.473-3.635,1.375-5.256c-4.059-1.84-6.65-5.746-6.65-10.103
								c0-6.159,5.198-11.169,11.586-11.169c0.645,0,1.304,0.057,1.969,0.171c-0.05-0.411-0.074-0.804-0.074-1.189
								c0-6.159,5.199-11.169,11.587-11.169c6.389,0,11.586,5.01,11.586,11.169c0,0.391-0.024,0.788-0.074,1.202
								c0.689-0.123,1.376-0.184,2.041-0.184c6.39,0,11.586,5.011,11.586,11.169c0,4.137-2.417,7.956-6.202,9.879
								c0.853,1.585,1.3,3.345,1.3,5.123c0,6.158-5.196,11.17-11.585,11.17c-3.101,0-6.074-1.213-8.25-3.345
								C23.167,48.6,20.063,49.942,16.758,49.942z M11.482,13.247c-5.815,0-10.547,4.561-10.547,10.167c0,4.14,2.569,7.83,6.545,9.404
								c0.14,0.056,0.249,0.168,0.296,0.307c0.048,0.139,0.03,0.29-0.048,0.416c-0.993,1.588-1.518,3.396-1.518,5.231
								c0,5.606,4.732,10.168,10.548,10.168c3.188,0,6.172-1.372,8.188-3.766c0.096-0.114,0.239-0.183,0.392-0.186
								c0.142,0,0.298,0.059,0.4,0.168c2.006,2.178,4.878,3.427,7.878,3.427c5.815,0,10.546-4.563,10.546-10.168
								c0-1.778-0.492-3.538-1.425-5.088c-0.074-0.121-0.092-0.267-0.048-0.401c0.045-0.134,0.145-0.244,0.276-0.304
								c3.706-1.666,6.1-5.282,6.1-9.209c0-5.607-4.732-10.167-10.548-10.167c-0.822,0-1.678,0.104-2.538,0.31
								c-0.173,0.041-0.35-0.004-0.479-0.12c-0.13-0.115-0.188-0.285-0.158-0.452c0.114-0.628,0.168-1.203,0.168-1.757
								c0-5.607-4.731-10.167-10.546-10.167c-5.815,0-10.547,4.56-10.547,10.167c0,0.548,0.054,1.117,0.166,1.74
								c0.03,0.166-0.029,0.335-0.156,0.45c-0.129,0.115-0.307,0.162-0.477,0.122C13.114,13.345,12.283,13.247,11.482,13.247z"></path>
							</svg>
							<svg version="1.1" id="flower2_2" class="flower_small" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="80px" height="80px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
								<path fill="#ffffff" d="M16.758,49.942c-6.39,0-11.587-5.011-11.587-11.17c0-1.83,0.473-3.635,1.375-5.256c-4.059-1.84-6.65-5.746-6.65-10.103
								c0-6.159,5.198-11.169,11.586-11.169c0.645,0,1.304,0.057,1.969,0.171c-0.05-0.411-0.074-0.804-0.074-1.189
								c0-6.159,5.199-11.169,11.587-11.169c6.389,0,11.586,5.01,11.586,11.169c0,0.391-0.024,0.788-0.074,1.202
								c0.689-0.123,1.376-0.184,2.041-0.184c6.39,0,11.586,5.011,11.586,11.169c0,4.137-2.417,7.956-6.202,9.879
								c0.853,1.585,1.3,3.345,1.3,5.123c0,6.158-5.196,11.17-11.585,11.17c-3.101,0-6.074-1.213-8.25-3.345
								C23.167,48.6,20.063,49.942,16.758,49.942z M11.482,13.247c-5.815,0-10.547,4.561-10.547,10.167c0,4.14,2.569,7.83,6.545,9.404
								c0.14,0.056,0.249,0.168,0.296,0.307c0.048,0.139,0.03,0.29-0.048,0.416c-0.993,1.588-1.518,3.396-1.518,5.231
								c0,5.606,4.732,10.168,10.548,10.168c3.188,0,6.172-1.372,8.188-3.766c0.096-0.114,0.239-0.183,0.392-0.186
								c0.142,0,0.298,0.059,0.4,0.168c2.006,2.178,4.878,3.427,7.878,3.427c5.815,0,10.546-4.563,10.546-10.168
								c0-1.778-0.492-3.538-1.425-5.088c-0.074-0.121-0.092-0.267-0.048-0.401c0.045-0.134,0.145-0.244,0.276-0.304
								c3.706-1.666,6.1-5.282,6.1-9.209c0-5.607-4.732-10.167-10.548-10.167c-0.822,0-1.678,0.104-2.538,0.31
								c-0.173,0.041-0.35-0.004-0.479-0.12c-0.13-0.115-0.188-0.285-0.158-0.452c0.114-0.628,0.168-1.203,0.168-1.757
								c0-5.607-4.731-10.167-10.546-10.167c-5.815,0-10.547,4.56-10.547,10.167c0,0.548,0.054,1.117,0.166,1.74
								c0.03,0.166-0.029,0.335-0.156,0.45c-0.129,0.115-0.307,0.162-0.477,0.122C13.114,13.345,12.283,13.247,11.482,13.247z"></path>
							</svg>
							<svg version="1.1" id="flower3" class="flower_small" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="80px" height="80px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
								<path fill="#ffffff" d="M16.758,49.942c-6.39,0-11.587-5.011-11.587-11.17c0-1.83,0.473-3.635,1.375-5.256c-4.059-1.84-6.65-5.746-6.65-10.103
								c0-6.159,5.198-11.169,11.586-11.169c0.645,0,1.304,0.057,1.969,0.171c-0.05-0.411-0.074-0.804-0.074-1.189
								c0-6.159,5.199-11.169,11.587-11.169c6.389,0,11.586,5.01,11.586,11.169c0,0.391-0.024,0.788-0.074,1.202
								c0.689-0.123,1.376-0.184,2.041-0.184c6.39,0,11.586,5.011,11.586,11.169c0,4.137-2.417,7.956-6.202,9.879
								c0.853,1.585,1.3,3.345,1.3,5.123c0,6.158-5.196,11.17-11.585,11.17c-3.101,0-6.074-1.213-8.25-3.345
								C23.167,48.6,20.063,49.942,16.758,49.942z M11.482,13.247c-5.815,0-10.547,4.561-10.547,10.167c0,4.14,2.569,7.83,6.545,9.404
								c0.14,0.056,0.249,0.168,0.296,0.307c0.048,0.139,0.03,0.29-0.048,0.416c-0.993,1.588-1.518,3.396-1.518,5.231
								c0,5.606,4.732,10.168,10.548,10.168c3.188,0,6.172-1.372,8.188-3.766c0.096-0.114,0.239-0.183,0.392-0.186
								c0.142,0,0.298,0.059,0.4,0.168c2.006,2.178,4.878,3.427,7.878,3.427c5.815,0,10.546-4.563,10.546-10.168
								c0-1.778-0.492-3.538-1.425-5.088c-0.074-0.121-0.092-0.267-0.048-0.401c0.045-0.134,0.145-0.244,0.276-0.304
								c3.706-1.666,6.1-5.282,6.1-9.209c0-5.607-4.732-10.167-10.548-10.167c-0.822,0-1.678,0.104-2.538,0.31
								c-0.173,0.041-0.35-0.004-0.479-0.12c-0.13-0.115-0.188-0.285-0.158-0.452c0.114-0.628,0.168-1.203,0.168-1.757
								c0-5.607-4.731-10.167-10.546-10.167c-5.815,0-10.547,4.56-10.547,10.167c0,0.548,0.054,1.117,0.166,1.74
								c0.03,0.166-0.029,0.335-0.156,0.45c-0.129,0.115-0.307,0.162-0.477,0.122C13.114,13.345,12.283,13.247,11.482,13.247z"></path>
							</svg>
							
							
							<svg version="1.1" id="flower1_2" class="flower_small onlyPC" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="80px" height="80px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
								<path fill="#ffffff" d="M16.758,49.942c-6.39,0-11.587-5.011-11.587-11.17c0-1.83,0.473-3.635,1.375-5.256c-4.059-1.84-6.65-5.746-6.65-10.103
								c0-6.159,5.198-11.169,11.586-11.169c0.645,0,1.304,0.057,1.969,0.171c-0.05-0.411-0.074-0.804-0.074-1.189
								c0-6.159,5.199-11.169,11.587-11.169c6.389,0,11.586,5.01,11.586,11.169c0,0.391-0.024,0.788-0.074,1.202
								c0.689-0.123,1.376-0.184,2.041-0.184c6.39,0,11.586,5.011,11.586,11.169c0,4.137-2.417,7.956-6.202,9.879
								c0.853,1.585,1.3,3.345,1.3,5.123c0,6.158-5.196,11.17-11.585,11.17c-3.101,0-6.074-1.213-8.25-3.345
								C23.167,48.6,20.063,49.942,16.758,49.942z M11.482,13.247c-5.815,0-10.547,4.561-10.547,10.167c0,4.14,2.569,7.83,6.545,9.404
								c0.14,0.056,0.249,0.168,0.296,0.307c0.048,0.139,0.03,0.29-0.048,0.416c-0.993,1.588-1.518,3.396-1.518,5.231
								c0,5.606,4.732,10.168,10.548,10.168c3.188,0,6.172-1.372,8.188-3.766c0.096-0.114,0.239-0.183,0.392-0.186
								c0.142,0,0.298,0.059,0.4,0.168c2.006,2.178,4.878,3.427,7.878,3.427c5.815,0,10.546-4.563,10.546-10.168
								c0-1.778-0.492-3.538-1.425-5.088c-0.074-0.121-0.092-0.267-0.048-0.401c0.045-0.134,0.145-0.244,0.276-0.304
								c3.706-1.666,6.1-5.282,6.1-9.209c0-5.607-4.732-10.167-10.548-10.167c-0.822,0-1.678,0.104-2.538,0.31
								c-0.173,0.041-0.35-0.004-0.479-0.12c-0.13-0.115-0.188-0.285-0.158-0.452c0.114-0.628,0.168-1.203,0.168-1.757
								c0-5.607-4.731-10.167-10.546-10.167c-5.815,0-10.547,4.56-10.547,10.167c0,0.548,0.054,1.117,0.166,1.74
								c0.03,0.166-0.029,0.335-0.156,0.45c-0.129,0.115-0.307,0.162-0.477,0.122C13.114,13.345,12.283,13.247,11.482,13.247z"></path>
							</svg>
							
							<svg version="1.1" id="flower1_3" class="flower_small onlyPC" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="80px" height="80px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
								<path fill="#ffffff" d="M16.758,49.942c-6.39,0-11.587-5.011-11.587-11.17c0-1.83,0.473-3.635,1.375-5.256c-4.059-1.84-6.65-5.746-6.65-10.103
								c0-6.159,5.198-11.169,11.586-11.169c0.645,0,1.304,0.057,1.969,0.171c-0.05-0.411-0.074-0.804-0.074-1.189
								c0-6.159,5.199-11.169,11.587-11.169c6.389,0,11.586,5.01,11.586,11.169c0,0.391-0.024,0.788-0.074,1.202
								c0.689-0.123,1.376-0.184,2.041-0.184c6.39,0,11.586,5.011,11.586,11.169c0,4.137-2.417,7.956-6.202,9.879
								c0.853,1.585,1.3,3.345,1.3,5.123c0,6.158-5.196,11.17-11.585,11.17c-3.101,0-6.074-1.213-8.25-3.345
								C23.167,48.6,20.063,49.942,16.758,49.942z M11.482,13.247c-5.815,0-10.547,4.561-10.547,10.167c0,4.14,2.569,7.83,6.545,9.404
								c0.14,0.056,0.249,0.168,0.296,0.307c0.048,0.139,0.03,0.29-0.048,0.416c-0.993,1.588-1.518,3.396-1.518,5.231
								c0,5.606,4.732,10.168,10.548,10.168c3.188,0,6.172-1.372,8.188-3.766c0.096-0.114,0.239-0.183,0.392-0.186
								c0.142,0,0.298,0.059,0.4,0.168c2.006,2.178,4.878,3.427,7.878,3.427c5.815,0,10.546-4.563,10.546-10.168
								c0-1.778-0.492-3.538-1.425-5.088c-0.074-0.121-0.092-0.267-0.048-0.401c0.045-0.134,0.145-0.244,0.276-0.304
								c3.706-1.666,6.1-5.282,6.1-9.209c0-5.607-4.732-10.167-10.548-10.167c-0.822,0-1.678,0.104-2.538,0.31
								c-0.173,0.041-0.35-0.004-0.479-0.12c-0.13-0.115-0.188-0.285-0.158-0.452c0.114-0.628,0.168-1.203,0.168-1.757
								c0-5.607-4.731-10.167-10.546-10.167c-5.815,0-10.547,4.56-10.547,10.167c0,0.548,0.054,1.117,0.166,1.74
								c0.03,0.166-0.029,0.335-0.156,0.45c-0.129,0.115-0.307,0.162-0.477,0.122C13.114,13.345,12.283,13.247,11.482,13.247z"></path>
							</svg>
							<!-- //작은 꽃 -->
							
							<!-- 큰 꽃 -->
							<svg version="1.1" id="flower4" class="flower_mid" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="120px" height="120px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
								<path fill="#ffffff" d="M16.758,49.942c-6.39,0-11.587-5.011-11.587-11.17c0-1.83,0.473-3.635,1.375-5.256c-4.059-1.84-6.65-5.746-6.65-10.103
								c0-6.159,5.198-11.169,11.586-11.169c0.645,0,1.304,0.057,1.969,0.171c-0.05-0.411-0.074-0.804-0.074-1.189
								c0-6.159,5.199-11.169,11.587-11.169c6.389,0,11.586,5.01,11.586,11.169c0,0.391-0.024,0.788-0.074,1.202
								c0.689-0.123,1.376-0.184,2.041-0.184c6.39,0,11.586,5.011,11.586,11.169c0,4.137-2.417,7.956-6.202,9.879
								c0.853,1.585,1.3,3.345,1.3,5.123c0,6.158-5.196,11.17-11.585,11.17c-3.101,0-6.074-1.213-8.25-3.345
								C23.167,48.6,20.063,49.942,16.758,49.942z M11.482,13.247c-5.815,0-10.547,4.561-10.547,10.167c0,4.14,2.569,7.83,6.545,9.404
								c0.14,0.056,0.249,0.168,0.296,0.307c0.048,0.139,0.03,0.29-0.048,0.416c-0.993,1.588-1.518,3.396-1.518,5.231
								c0,5.606,4.732,10.168,10.548,10.168c3.188,0,6.172-1.372,8.188-3.766c0.096-0.114,0.239-0.183,0.392-0.186
								c0.142,0,0.298,0.059,0.4,0.168c2.006,2.178,4.878,3.427,7.878,3.427c5.815,0,10.546-4.563,10.546-10.168
								c0-1.778-0.492-3.538-1.425-5.088c-0.074-0.121-0.092-0.267-0.048-0.401c0.045-0.134,0.145-0.244,0.276-0.304
								c3.706-1.666,6.1-5.282,6.1-9.209c0-5.607-4.732-10.167-10.548-10.167c-0.822,0-1.678,0.104-2.538,0.31
								c-0.173,0.041-0.35-0.004-0.479-0.12c-0.13-0.115-0.188-0.285-0.158-0.452c0.114-0.628,0.168-1.203,0.168-1.757
								c0-5.607-4.731-10.167-10.546-10.167c-5.815,0-10.547,4.56-10.547,10.167c0,0.548,0.054,1.117,0.166,1.74
								c0.03,0.166-0.029,0.335-0.156,0.45c-0.129,0.115-0.307,0.162-0.477,0.122C13.114,13.345,12.283,13.247,11.482,13.247z"></path>
							</svg>
							<svg version="1.1" id="flower5" class="flower_mid" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="120px" height="120px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
								<path fill="#ffffff" d="M16.758,49.942c-6.39,0-11.587-5.011-11.587-11.17c0-1.83,0.473-3.635,1.375-5.256c-4.059-1.84-6.65-5.746-6.65-10.103
								c0-6.159,5.198-11.169,11.586-11.169c0.645,0,1.304,0.057,1.969,0.171c-0.05-0.411-0.074-0.804-0.074-1.189
								c0-6.159,5.199-11.169,11.587-11.169c6.389,0,11.586,5.01,11.586,11.169c0,0.391-0.024,0.788-0.074,1.202
								c0.689-0.123,1.376-0.184,2.041-0.184c6.39,0,11.586,5.011,11.586,11.169c0,4.137-2.417,7.956-6.202,9.879
								c0.853,1.585,1.3,3.345,1.3,5.123c0,6.158-5.196,11.17-11.585,11.17c-3.101,0-6.074-1.213-8.25-3.345
								C23.167,48.6,20.063,49.942,16.758,49.942z M11.482,13.247c-5.815,0-10.547,4.561-10.547,10.167c0,4.14,2.569,7.83,6.545,9.404
								c0.14,0.056,0.249,0.168,0.296,0.307c0.048,0.139,0.03,0.29-0.048,0.416c-0.993,1.588-1.518,3.396-1.518,5.231
								c0,5.606,4.732,10.168,10.548,10.168c3.188,0,6.172-1.372,8.188-3.766c0.096-0.114,0.239-0.183,0.392-0.186
								c0.142,0,0.298,0.059,0.4,0.168c2.006,2.178,4.878,3.427,7.878,3.427c5.815,0,10.546-4.563,10.546-10.168
								c0-1.778-0.492-3.538-1.425-5.088c-0.074-0.121-0.092-0.267-0.048-0.401c0.045-0.134,0.145-0.244,0.276-0.304
								c3.706-1.666,6.1-5.282,6.1-9.209c0-5.607-4.732-10.167-10.548-10.167c-0.822,0-1.678,0.104-2.538,0.31
								c-0.173,0.041-0.35-0.004-0.479-0.12c-0.13-0.115-0.188-0.285-0.158-0.452c0.114-0.628,0.168-1.203,0.168-1.757
								c0-5.607-4.731-10.167-10.546-10.167c-5.815,0-10.547,4.56-10.547,10.167c0,0.548,0.054,1.117,0.166,1.74
								c0.03,0.166-0.029,0.335-0.156,0.45c-0.129,0.115-0.307,0.162-0.477,0.122C13.114,13.345,12.283,13.247,11.482,13.247z"></path>
							</svg>
							<!-- //큰 꽃 -->
							
							<!-- 존나 큰 꽃 -->
							<svg version="1.1" id="flower6" class="flower_mid" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="590px" height="590px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
								<path fill="#ffffff" d="M16.758,49.942c-6.39,0-11.587-5.011-11.587-11.17c0-1.83,0.473-3.635,1.375-5.256c-4.059-1.84-6.65-5.746-6.65-10.103
								c0-6.159,5.198-11.169,11.586-11.169c0.645,0,1.304,0.057,1.969,0.171c-0.05-0.411-0.074-0.804-0.074-1.189
								c0-6.159,5.199-11.169,11.587-11.169c6.389,0,11.586,5.01,11.586,11.169c0,0.391-0.024,0.788-0.074,1.202
								c0.689-0.123,1.376-0.184,2.041-0.184c6.39,0,11.586,5.011,11.586,11.169c0,4.137-2.417,7.956-6.202,9.879
								c0.853,1.585,1.3,3.345,1.3,5.123c0,6.158-5.196,11.17-11.585,11.17c-3.101,0-6.074-1.213-8.25-3.345
								C23.167,48.6,20.063,49.942,16.758,49.942z M11.482,13.247c-5.815,0-10.547,4.561-10.547,10.167c0,4.14,2.569,7.83,6.545,9.404
								c0.14,0.056,0.249,0.168,0.296,0.307c0.048,0.139,0.03,0.29-0.048,0.416c-0.993,1.588-1.518,3.396-1.518,5.231
								c0,5.606,4.732,10.168,10.548,10.168c3.188,0,6.172-1.372,8.188-3.766c0.096-0.114,0.239-0.183,0.392-0.186
								c0.142,0,0.298,0.059,0.4,0.168c2.006,2.178,4.878,3.427,7.878,3.427c5.815,0,10.546-4.563,10.546-10.168
								c0-1.778-0.492-3.538-1.425-5.088c-0.074-0.121-0.092-0.267-0.048-0.401c0.045-0.134,0.145-0.244,0.276-0.304
								c3.706-1.666,6.1-5.282,6.1-9.209c0-5.607-4.732-10.167-10.548-10.167c-0.822,0-1.678,0.104-2.538,0.31
								c-0.173,0.041-0.35-0.004-0.479-0.12c-0.13-0.115-0.188-0.285-0.158-0.452c0.114-0.628,0.168-1.203,0.168-1.757
								c0-5.607-4.731-10.167-10.546-10.167c-5.815,0-10.547,4.56-10.547,10.167c0,0.548,0.054,1.117,0.166,1.74
								c0.03,0.166-0.029,0.335-0.156,0.45c-0.129,0.115-0.307,0.162-0.477,0.122C13.114,13.345,12.283,13.247,11.482,13.247z"></path>
							</svg>
							<svg version="1.1" id="flower7" class="flower_mid" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="300px" height="300px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve" onload="javascript:svgLoad()">
								<path fill="#ffffff" d="M16.758,49.942c-6.39,0-11.587-5.011-11.587-11.17c0-1.83,0.473-3.635,1.375-5.256c-4.059-1.84-6.65-5.746-6.65-10.103
								c0-6.159,5.198-11.169,11.586-11.169c0.645,0,1.304,0.057,1.969,0.171c-0.05-0.411-0.074-0.804-0.074-1.189
								c0-6.159,5.199-11.169,11.587-11.169c6.389,0,11.586,5.01,11.586,11.169c0,0.391-0.024,0.788-0.074,1.202
								c0.689-0.123,1.376-0.184,2.041-0.184c6.39,0,11.586,5.011,11.586,11.169c0,4.137-2.417,7.956-6.202,9.879
								c0.853,1.585,1.3,3.345,1.3,5.123c0,6.158-5.196,11.17-11.585,11.17c-3.101,0-6.074-1.213-8.25-3.345
								C23.167,48.6,20.063,49.942,16.758,49.942z M11.482,13.247c-5.815,0-10.547,4.561-10.547,10.167c0,4.14,2.569,7.83,6.545,9.404
								c0.14,0.056,0.249,0.168,0.296,0.307c0.048,0.139,0.03,0.29-0.048,0.416c-0.993,1.588-1.518,3.396-1.518,5.231
								c0,5.606,4.732,10.168,10.548,10.168c3.188,0,6.172-1.372,8.188-3.766c0.096-0.114,0.239-0.183,0.392-0.186
								c0.142,0,0.298,0.059,0.4,0.168c2.006,2.178,4.878,3.427,7.878,3.427c5.815,0,10.546-4.563,10.546-10.168
								c0-1.778-0.492-3.538-1.425-5.088c-0.074-0.121-0.092-0.267-0.048-0.401c0.045-0.134,0.145-0.244,0.276-0.304
								c3.706-1.666,6.1-5.282,6.1-9.209c0-5.607-4.732-10.167-10.548-10.167c-0.822,0-1.678,0.104-2.538,0.31
								c-0.173,0.041-0.35-0.004-0.479-0.12c-0.13-0.115-0.188-0.285-0.158-0.452c0.114-0.628,0.168-1.203,0.168-1.757
								c0-5.607-4.731-10.167-10.546-10.167c-5.815,0-10.547,4.56-10.547,10.167c0,0.548,0.054,1.117,0.166,1.74
								c0.03,0.166-0.029,0.335-0.156,0.45c-0.129,0.115-0.307,0.162-0.477,0.122C13.114,13.345,12.283,13.247,11.482,13.247z"></path>
							</svg>
							<!-- //존나 큰꽃 -->
						</div>
						<div id="icando_content2" class="icando_content">
						</div>
					</section>
					<style>
						
					</style>

					<section class="sectionweb2" id="sectionweb2">
						<div>
							<h4> Web design </h4>
							<h5 class="ani2">Portfolios</h5>
							<p style="text-align:center;margin-top: 20px;opacity: 0.3; padding: 0 15px;">하기 프로젝트는 대부분 실제 진행 안건입니다. </p>
						</div>
						<div>
							
							<div class="portfolios" id="portfolio-8">
								<div class="img-area3">
									<img src="/younge/images/apple9.png" alt="img">
									<img src="/younge/images/category2.png" alt="img">
								</div>
								<div class="text-Area">
									<h3>신한금융투자<span class="small">(운영)</span><br class="onlySmallSP" /><span class="renewal">Renewal</span></h3>
									<div class="webtext">
										<div class="webtext-bold">
											<p>프로젝트</p>
											<p>참여기간</p>
											<p>참여도</p>
											<p>컨셉</p>
											<p>컨셉설명</p>
										</div>
										<div class="webtext-normal">
											<p>신한금융투자 알파App 재구축 및 웹사이트 운영</p>
											<p>210503 ~ 재직중</p>
											<p>웹사이트 및 App 운영(33%)</p>
											<p>현대식 재구축</p>
											<p class="text-concept">
												신한금융투자의 PC웹사이트, 모바일 웹사이트 운영 업무와 알파 2.0 어플 재구축 업무를 진행했습니다.<br />
												기본 퍼블리싱 업무부터, script로 특정 동작을 작성하는 업무도 자주 있었습니다.
											</p>
										</div>
									</div>
									<button type="button" onclick="">상세 설명</button>
								</div>
							</div>
							
							<div class="portfolios" id="portfolio-1">
								<div class="img-area2">
									<img src="/younge/images/apple6.png" alt="img">
									<img src="/younge/images/category3.png" alt="img">
								</div>
								<div class="text-Area">
									<h3>Mitsubishi Card<span class="renewal">Renewal</span></h3>
									<div class="webtext">
										<div class="webtext-bold">
											<p>프로젝트</p>
											<p>참여기간</p>
											<p>참여도</p>
											<p>컨셉</p>
											<p>컨셉설명</p>
										</div>
										<div class="webtext-normal">
											<p>일본 미쓰미시 은행 웹사이트 리뉴얼</p>
											<p>4개월: 201215 ~ 210401</p>
											<p>
												html 페이지 양산(30%), 컴포넌트 제작(10%), 스크립트 분석 및 수정(20%)
											</p>
											<p>깔끔한, 직관적인</p>
											<p class="text-concept">
												일본 전체 2위의 재벌그룹 , 미쓰비시 그룹의 카드사 웹사이트 리뉴얼 안건입니다. 에이전시 일본 본사에서 디자인을 제작하여, 한국 지부에서 HTML마크업 코딩을 진행했습니다. 혼자서 약 750페이지를 제작했습니다.
											</p>
										</div>
									</div>
									<button type="button" onclick="">상세 설명 및 웹사이트</button>
								</div>
								<div class="img-area">
									<img src="/younge/images/apple6.png" alt="img">
									<img src="/younge/images/category3.png" alt="img">
								</div>
							</div>

							<div class="portfolios" id="portfolio-2">
								<div class="img-area3">
									<img src="/younge/images/apple5.png" alt="img">
									<img src="/younge/images/category3.png" alt="img">
								</div>
								<div class="text-Area">
									<h3>Sony bank<span class="renewal">Renewal</span></h3>
									<div class="webtext">
										<div class="webtext-bold">
											<p>프로젝트</p>
											<p>참여기간</p>
											<p>참여도</p>
											<p>컨셉</p>
											<p>컨셉설명</p>
										</div>
										<div class="webtext-normal">
											<p>일본 소니은행 웹사이트 리뉴얼</p>
											<p>4개월: 200510 ~ 200901 </p>
											<p>
												XD디자인 제작(40%), 컴포넌트 제작(10%)
											</p>
											<p>심플함, 간결함</p>
											<p class="text-concept">
												일본의 대기업, 소니에서 운영하는 은행입니다. 2001년 6월 11일부터 작은 리뉴얼을 거치며 '20년간' 운영된 인터넷 뱅킹 웹사이트에 대해, 2020년 드디어 현대시대의 흐름에 맞는 디자인과 구성으로 리뉴얼 프로젝트를 시작했습니다. 디자이너로서 약 300페이지에 달하는 XD페이지를 양산했습니다.
											</p>
										</div>
									</div>
									<button type="button" onclick="">&nbsp;상세 설명&nbsp;</button>
									<script>

									</script>
									<!--<button type="button" onclick="window.open('http://pikachu33333.cafe24.com/younge/webpages/hoeiso.html')">상세 설명 및 웹사이트</button> -->
								</div>
							</div>


							<div class="portfolios" id="portfolio-3">
								<div class="img-area2">
									<img src="/younge/images/apple7.png" alt="img">
									<img src="/younge/images/category1.png" alt="img">
								</div>
								<div class="text-Area">
									<h3>Club Tourism</h3>
									<div class="webtext">
										<div class="webtext-bold">
											<p>프로젝트</p>
											<p>참여기간</p>
											<p>참여도</p>
											<p>컨셉</p>
											<p>컨셉설명</p>
										</div>
										<div class="webtext-normal">
											<p>일본 클럽 투어리즘 메일 매거진 제작</p>
											<p>7개월: 200901 ~ 210401 </p>
											<p>
												배너 제작(50%), html 메일 제작(50%)
											</p>
											<p>컬러풀, 강한 전달성</p>
											<p class="text-concept">
												일본의 여행사, 클럽투어리즘(CT)은 종업원 2,000명 규모의 중견기업입니다.
												메일 매거진으로 매주 3~5통씩 이메일 광고를 일본 전국 회원에게 배포합니다.
												이 메일 매거진의 전체 제작을 약 5개월간 제작하여 배포했습니다.<br /> 상세설명에서 메일 매거진 샘플을 볼 수 있습니다.
											</p>
										</div>
									</div>
									<button type="button" onclick="">&nbsp;상세 설명 및 샘플&nbsp;</button>
									<script>

									</script>
									<!--<button type="button" onclick="window.open('http://pikachu33333.cafe24.com/younge/webpages/hoeiso.html')">상세 설명 및 웹사이트</button> -->
								</div>
								<div class="img-area">
									<img src="/younge/images/apple7.png" alt="img">
									<img src="/younge/images/category3.png" alt="img">
								</div>
							</div>


							<div class="portfolios" id="portfolio-4">
								<div class="img-area3">
									<img src="/younge/images/apple1.png" alt="img">
									<img src="/younge/images/category3.png" alt="img">
								</div>
								<div class="text-Area">
									<h3>HOEISO<span class="light"></span><span class="renewal">Renewal</span></h3>
									<div class="webtext">
										<div class="webtext-bold">
											<p>프로젝트</p>
											<p>제작기간</p>
											<p>참여도</p>
											<p>컨셉</p>
											<p>컨셉설명</p>
										</div>
										<div class="webtext-normal">
											<p>일본 료칸 호에이소 리뉴얼</p>
											<p>1개월: 191215 ~ 200108 </p>
											<p>
												기획(100%), 디자인(100%), 프론트엔드(100%), 백엔드(100%)
											</p>
											<p>고급, 정숙함</p>
											<p class="text-concept">
												기존 웹사이트는 정보의 구분이 불분명하고
												사용자의 시선이 분산되는 문제점이 있었으나, 리뉴얼로 전부 해결했습니다. <br />
												기획 => 디자인 => 퍼블리싱 => 웹개발 => DB구축 => 서버구축까지<br /> 프론트 엔드와 백엔드를 모두 혼자서 구축했습니다.
											</p>
										</div>
									</div>
									<button type="button" onclick="">상세 설명 및 웹사이트</button>
									<script>

									</script>
									<!--<button type="button" onclick="window.open('http://pikachu33333.cafe24.com/younge/webpages/hoeiso.html')">상세 설명 및 웹사이트</button> -->
								</div>
							</div>

							<div class="portfolios" id="portfolio-5">
								<div class="img-area2">
									<img src="/younge/images/apple2.png" alt="img">
									<img src="/younge/images/category3.png" alt="img">
								</div>
								<div class="text-Area">
									<h3>Pulmuone</h3>
									<div class="webtext">
										<div class="webtext-bold">
											<p>프로젝트</p>
											<p>제작기간</p>
											<p>참여도</p>
											<p>컨셉</p>
											<p>컨셉설명</p>
										</div>
										<div class="webtext-normal">
											<p>풀무원 로하스 상남점 - 상품소개 웹사이트 제작</p>
											<p>1개월: 190112 ~ 200201</p>
											<p>
												기획(100%), 퍼블리싱(100%), 호스팅(100%), 도메인(100%)
											</p>
											<p>깔끔한, 직관적인</p>
											<p class="text-concept">
												쇼핑몰과 비슷한 형식이지만, 통신판매업이 아닌 방문 판매업이기 때문에 구매버튼이 없는 소개페이지 입니다. 이를 위해 구매하기 대신 연락하기 버튼을 postion:fixed로 삽입했습니다.
											</p>
										</div>
									</div>
									<button type="button" onclick="">상세 설명 및 웹사이트</button>
								</div>
								<div class="img-area">
									<img src="/younge/images/apple2.png" alt="img">
									<img src="/younge/images/category3.png" alt="img">
								</div>
							</div>

							<div class="portfolios" id="portfolio-6">
								<div class="img-area3">
									<img src="/younge/images/apple4.png" alt="img">
									<img src="/younge/images/category3.png" alt="img">
								</div>
								<div class="text-Area">
									<h3>Badagil</h3>
									<div class="webtext">
										<div class="webtext-bold">
											<p>프로젝트</p>
											<p>제작기간</p>
											<p>제작물</p>
											<p>컨셉</p>
											<p>컨셉설명</p>
										</div>
										<div class="webtext-normal">
											<p>바다길 회사 소개 웹사이트 제작</p>
											<p>1개월: 191101 ~ 191210</p>
											<p>
												로고제작(100%), 웹사이트 기획 및 디자인(100%), 퍼블리싱(100%)
											</p>
											<p>깔끔한</p>
											<p class="text-concept">
												바다길은 국내에 몇 안되는 해삼 양식 전문 업체입니다. 2016년 설립됐으며, 회사 소개 홈페이지 제작을 의뢰받아 A to Z까지 디자인과 HTML 코딩까지 어우르는 모든 작업을 혼자 하게 되었습니다.
											</p>
										</div>
									</div>
									<button type="button" onclick="">상세 설명 및 웹사이트</button>
								</div>
							</div>

							<div class="portfolios" id="portfolio-7">
								<div class="img-area2">
									<img src="/younge/images/apple3.png" alt="img">
									<img src="/younge/images/category3.png" alt="img">
								</div>
								<div class="text-Area">
									<h3>Contguard</h3>
									<div class="webtext">
										<div class="webtext-bold">
											<p>프로젝트</p>
											<p>제작기간</p>
											<p>참여도</p>
											<p>컨셉</p>
											<p>컨셉설명</p>
										</div>
										<div class="webtext-normal">
											<p>Contguard Korea 웹사이트 제작</p>
											<p>2개월: 191022 ~ 191220 </p>
											<p>
												기획(60%), psd디자인제작(100%), 퍼블리싱(30%)
											</p>
											<p>깔끔한</p>
											<p class="text-concept">
												한국에 처음으로 진출하는 컨테이너용 장비 대여 및 분석리포트 서비스를 제공하는 이스라엘 기업입니다. 생소한 서비스를 간결하게 소개하기 위해 원색 사용을 최대한 배제했습니다.
											</p>
										</div>
									</div>
									<button type="button" onclick="">상세 설명 및 웹사이트</button>
								</div>
								<div class="img-area">
									<img src="/younge/images/apple3.png" alt="img">
									<img src="/younge/images/category3.png" alt="img">
								</div>
							</div>

							<div class="portfolios" id="portfolio-0">
								<div class="img-area3">
									<img src="/younge/images/apple8.png" alt="img">
									<img src="/younge/images/category1.png" alt="img">
								</div>
								<div class="text-Area">
									<h3>Banner, LP</h3>
									<div class="webtext">
										<div class="webtext-bold">
											<p>프로젝트</p>
											<p>참여기간</p>
											<p>참여도</p>
											<p>컨셉</p>
											<p>컨셉설명</p>
										</div>
										<div class="webtext-normal">
											<p>배너, 상세페이지 모음집</p>
											<p>18개월: 191001 ~ 210301</p>
											<p>
												psd,XD 제작(100%)
											</p>
											<p>variation</p>
											<p class="text-concept">
												상세페이지와 배너 모음집 입니다. <br />
												웹에이전시 작업물과 프리랜서 작업물이 포함됩니다.
											</p>
										</div>
									</div>
									<button type="button" onclick="">상세 설명</button>
								</div>
							</div>

						</div>
					</section>
					<section class="section7" id="likers">
						<div style="padding:0;">
						</div>
						<div style="padding:0;">
							<div class="whoiam">
								<div class="whoo" style="padding-top: 1%;padding-left:15px; max-width:770px;">
									<h2>
										<span class="yell2" style="font-size:35px; font-weight:bold;padding-bottom:35px;display:inline-block">이 포트폴리오를 </span>
										<br class="onlySP" /><span id="yell1" style="font-size:35px; font-weight:bold;">좋아하는</span>
										<span class="yell2" style="font-size:35px; font-weight:bold;">사람들</span>
									</h2>
								</div>
								<div class="likers">
									<div class="likers_inner" id="likers_inner">
										<!-- Ajax Contents Load Area -->
									</div>
									
									<div class="paging">
										<button type="button" class="arrow_btn double first"><i class="fa fa-angle-double-left"></i></button>
										<button type="button" class="arrow_btn single prev"><i class="fa fa-angle-left"></i></button>
										<?php
                                        $liker_id = $userid;
                                        $sql_liker = "SELECT * FROM youngetable WHERE liker_like = 1";
										
                                        $like_result = mysqli_query($dbConn, $sql_liker);
                                        
                                    	$like_total_record = mysqli_num_rows($like_result);
										$like_page_num = 44;
                                        $detail_row = mysqli_fetch_array($like_result);
										
//										var_dump($like_total_record);
//										echo $like_total_record;
									
										if($like_total_record % $like_page_num == 0){
										  $like_total_page = floor($like_total_record/$like_page_num);
										} else {
										  $like_total_page = floor($like_total_record/$like_page_num) + 1;
										}
                        				?>
										<?php
											 for ($iii=1;$iii<=$like_total_page;$iii++){
                                           ?>
										<button type="button" class="paging_btn" onClick="getPage(<?=$iii?>)"><?=$iii?></button>

										<?php } ?>

										<button type="button" class="arrow_btn single next"><i class="fa fa-angle-right"></i></button>
										<button type="button" class="arrow_btn double last"><i class="fa fa-angle-double-right"></i></button>
									</div>

									<form class="like_btns" name="likeForm" method="get" action='/younge/php/main_like.php'>
										<input class="session userid" name='liker_id' value="<?=$userid?>">
										<input class="session username" name='liker_name' value="<?=$username?>">
										<button class="like_btn" id="like_btn" type="button" onclick="javascript:likeSubmit()"><img src="/younge/images/figma.png" alt=""></button>
										<p><label for="like_btn" class="like_btn_label">나도 좋아요 누르기</label><img src="/younge/images/info.png" alt="회원가입을 하고 좋아요를 누를 수 있습니다" title="회원가입을 하고 좋아요를 누를 수 있습니다" style="display:inline-block;width:30px;position:absolute; left:215px; bottom:60px;cursor:pointer" onclick="javascript:alert('회원가입을 하고 좋아요를 누를 수 있습니다')"></p>
									</form>
									<script>
										function likeSubmit() {
											console.log(window.scrollY);
											window.localStorage.setItem("likeButton", window.scrollY)
											document.likeForm.submit();
										}
									</script>
								</div>

							</div>
						</div>
					</section>




					<!--
					<section id="section8">
						<div>
							<div id="sec8sub">
								<h5>Meet my Landing Page design</h5>
								<p class="smallp">to learn more about my design&amp;Publish products </p>
							</div>

							<div id="phowrapper">
								<div>

									<div id="pho">
										<h6>financial</h6>
										<div class="subject">
											<p class="smallp2"> designs </p>
										</div>
										<div class="pp">

											--남자 19년 --
											<div>
												<a href="#!">
													<img src="/younge/editorial/images/edit/businesscard22_3.jpg" alt="img"></a>
											</div>
											<div>
												<a href="#!">
													<img src="/younge/editorial/images/edit/businesscard3.jpg" alt="img"></a>
											</div>
											<div>
												<a href="#!">
													<img src="/younge/editorial/images/edit/businesscard1.jpg" alt="img"></a>
											</div>
											<div>
												<a href="#!">
													<img src="/younge/editorial/images/edit/businesscard22.jpg" alt="img"></a>
											</div>
											<div>
												<a href="#!">
													<img src="/younge/editorial/images/edit/leaf1.jpg" alt="img"></a>
											</div>
											<div>
												<a href="#!">
													<img src="/younge/editorial/images/edit/contleaf1.jpg" alt="img"></a>
											</div>
											<div>
												<a href="#!">
													<img src="/younge/editorial/images/edit/contleaf2.jpg" alt="img"></a>
											</div>
											<div>
												<a href="#!">
													<img src="/younge/editorial/images/edit/leaf.jpg" alt="img"></a>
											</div>
											<div>
												<a href="#!">
													<img src="/younge/editorial/images/edit/shopbag1.jpg" alt="img"></a>
											</div>
											<div>
												<a href="#!">
													<img src="/younge/editorial/images/edit/shopbag2.jpg" alt="img"></a>
											</div>
											<div>
												<a href="#!">
													<img src="/younge/swiper/images/edit/DSC03155%20(2).jpg" alt="img"></a>
											</div>
											<div>
											</div>
										</div>
									</div>
									<div id="pho2">
										<h6> Event</h6>
										<div class="subject">
											<p class="smallp2"> designs </p>
										</div>
										<div class="pp">
											<div>
												<a href="#!">
													<img src="/younge/swiper/images/edit/contbanner2.jpg" alt="img"></a>
											</div>
											<div>
												<a href="#!">
													<img src="/younge/swiper/images/edit/contbanner3.jpg" alt="img"></a>
											</div>
											<div>
												<a href="#!">
													<img src="/younge/swiper/images/detail/bexco.jpg" alt="img"></a>
											</div>
											<div>
												<a href="#!">
													<img src="/younge/swiper/images/detail/barrel300.jpg" alt="img"></a>
											</div>
											<div>
												<a href="#!">
													<img src="/younge/swiper/images/detail/barrel655.jpg" alt="img"></a>
											</div>
											<div>
												<a href="#!">
													<img src="/younge/swiper/images/detail/samsungpc.jpg" alt="img"></a>
											</div>
											<div>
												<a href="#!">
													<img src="/younge/swiper/images/detail/chris.jpg" alt="img"></a>
											</div>
											<div>
												<a href="#!">
													<img src="/younge/swiper/images/detail/bacant.jpg" alt="img"></a>
											</div>
											<div>
												<a href="#!">
													<img src="/younge/swiper/images/edit/contbanner4.png" alt="img"></a>
											</div>

											<div>
											</div>
										</div>
									</div>

									<div id="pho3">
										<h6> Detail Pages</h6>
										<div class="subject">
											<p class="smallp2"> Banners </p>
										</div>
										<div class="pp">
											<div>
												<a href="#!">
													<img src="/younge/swiper/images/edit/contsang.jpg" alt="img"></a>
											</div>
											<div>
												<a href="#!">
													<img src="/younge/swiper/images/edit/contsang2.jpg" alt="img"></a>
											</div>
											<div>
												<a href="#!">
													<img src="/younge/swiper/images/detail/barreldetail1.jpg" alt="img"></a>
											</div>
											<div>
												<a href="#!">
													<img src="/younge/swiper/images/detail/barreldetail2.jpg" alt="img"></a>
											</div>
											<div>
												<a href="#!">
													<img src="/younge/swiper/images/detail/trip.jpg" alt="img"></a>
											</div>

											<div>
											</div>
										</div>
									</div>
								</div>

							</div>

						</div>
						<div>
							<a href="#!"> <img src="/younge/images/lightgray.png" alt="img"></a>
							<a href="#!" id="thebo1">More</a>
							<a href="#!" id="thebo2">More</a>
							<a href="#!" id="thebo3">More</a>

						</div>
					</section>
-->
					<script>
						//						var sec8heighter = sec8height *= 1.3;
						//						var sec8heightere = sec8height *= 1.6;
						//						var sec8heighterer = sec8height *= 1.7;
						//						$(document).ready(function() {
						//
						//							$("#section8>div:nth-of-type(2)>a:nth-of-type(2)").click(function(e) {
						//								e.preventDefault();
						//								$("#section8").height(window.localStorage.getItem('sec8height2'));
						//								$("#section8>div:nth-of-type(2)>a:nth-of-type(2)").fadeOut();
						//							});

						//							$("#section8>div:nth-of-type(2)>a:nth-of-type(3)").click(function() {
						//								$("#section8").height(sec8heightere);
						//								$("#section8>div:nth-of-type(2)>a:nth-of-type(3)").fadeOut();
						//							});
						//
						//							$("#section8>div:nth-of-type(2)>a:nth-of-type(4)").click(function() {
						//								$("#section8").height(sec8heighter);
						//								$("#section8>div:nth-of-type(2)>a:nth-of-type(4)").fadeOut();
						//
						//							});

						//						});

					</script>

					
<!--
					<section id="section3">
						<div>
							<h2> Photographs </h2>
							<h6>I'm a Portrait Photographer</h6>
						</div>
						<div id="photos">
							<div id="photo1">
								<div>
									<img src="images/frame_1.png" id="photo11">
									<a href="#!"><img src="images/frame1.jpg" alt="img"> </a>
								</div>
								<div>
									<img src="images/frame_1.png" alt="img">
									<a href="#!"><img src="images/frame2.jpg" alt="img"> </a>
								</div>
								<div>
									<img src="images/frame_1.png" alt="img">
									<a href="#!"><img src="images/frame3.jpg" alt="img"> </a>
								</div>
								<div>
									<img src="images/frame_1.png" alt="img">
									<a href="#!"><img src="images/frame4.jpg" alt="img"> </a>
								</div>
								<div>
									<img src="images/frame_1.png" alt="img">
									<a href="#!"><img src="images/frame5.jpg" alt="img"> </a>
								</div>
								<div>
									<img src="images/frame_1.png" alt="img">
									<a href="#!"><img src="images/frame6.jpg" alt="img"> </a>
								</div>
							</div>
							<div>
								<p style="opacity: 0">ㅡ </p>
							</div>
						</div>

						<div id="pop">
							<a href="#!"><img src="images/frame1.jpg" alt="팝업" class="big"></a>
						</div>
					</section>
-->
        
       

					<section id="section4">
						<div>
							<img src="images/DSC07122.png" id="flower1">
							<img src="images/DSC07122.png" id="flower2">
							<div>
								<h2 id="imake4"> I take <span> ALL </span> the IMAGES</h2>
								<div>
									<h2 id="imakesub4"> I take <span>ALL </span>the IMAGES<div>
											<p> <span>·</span> Portrait</p>
											<p><span>·</span> Nature</p>
											<p><span>·</span> Food</p>
										</div>
									</h2>
								</div>
							</div>
							<div><img src="images/pika2.gif" alt="pika"> </div>
						</div>
					</section>

					<section class="section7">
						<div>
							<h2> Movies </h2>
							<h4 class="ani2">I'm Video editer</h4>
						</div>
						<div>
							<div id="whoiam">
								<div class="whoo">
									<h2><span class="yell2">my</span> <span id="yell1">SPEC</span><span class="yell2">s</span></h2>
								</div>
								<div id="whowrapper">
									<div id="who">
										<h4>information</h4>
										<div>
											<div id="subject3">
												<p> name</p>
												<p class="smallp"> the final degree<br /></p>
												<p> <br /></p>
											</div>
											<div class="pp">
												<p> 이대영</p>
												<p> 국민대학교<br />임산생명공학과</p>
												<p> </p>
											</div>
										</div>
									</div>
									<div id="who3">
										<h4>Certificate</h4>
										<div>
											<div id="subject1">
												<p> JLPT <span> (일본어)</span></p>
												<p> TOEIC</p>
												<p class="smallp"> TOEIC speaking<br /></p>
												<p> GTQ</p>
												<p>ITQ</p>
												<p>운전면허</p>
												<p>태권도</p>
											</div>

											<div class="pp">
												<p> N1</p>
												<p> 825</p>
												<p> Lv6 (140)</p>
												<p>포토샵 1급</p>
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
												<p> 신한금융투자 </p>
												<p> 트랜스코스모스코리아(웹에이전시) </p>
												<p> 한국수입협회(KOIMA) 배너 / 상세페이지 </p>
												<p> 풀무원 상남점 홈페이지 Design / Publish </p>
												<p>Contguard 홈페이지 Design / 보수 </p>
												<p> Contguard BEXCO 전시회 동영상 제작</p>
												<p>한국 미쓰도요 기술영업</p>
												<p>한국임업진흥원(kofpi) 연구보조 인턴 근무</p>
											</div>
											<div class="pp2">
												<p>2021.05 ~ 재직중&nbsp;&nbsp;</p>
												<p>2020.04 ~ 2021.04</p>
												<p>2020.02 ~ 2020.02</p>
												<p>2020.01 ~ 2020.02</p>
												<p>2019.10 ~ 2020.02</p>
												<p>2019.09 ~ 2019.10</p>
												<p>2019.01 ~ 2019.07</p>
												<p>2017.06 ~ 2017.08</p>
											</div>
										</div>
									</div>


								</div>
							</div>

						</div>
					</section>

					<section id="section9">
						<div>
							<h5>and keep in mind,</h5>

							<h2>YOU CAN <span>TAKE</span> ME NOW</h2>
						</div>
					</section>
				</div>
			</main>

			<!--팝업 모음-->
			<div class="mainPopups mainPopup1">
				<a href="#!" class="btnClose"><img src="/younge/images/icon_close.png"> </a>
				<div>
					<iframe src="/younge/webpages/hoeiso.html">

					</iframe>
				</div>

			</div>
			<div class="mainPopups mainPopup2">
				<a href="#!" class="btnClose"><img src="/younge/images/icon_close.png"> </a>
				<div>
					<iframe src="/younge/webpages/pulmu.html">

					</iframe>
				</div>

			</div>
			<div class="mainPopups mainPopup3">
				<a href="#!" class="btnClose"><img src="/younge/images/icon_close.png"> </a>
				<div>
					<iframe src="/younge/webpages/contguard.html">

					</iframe>
				</div>

			</div>
			<div class="mainPopups mainPopup4">
				<a href="#!" class="btnClose"><img src="/younge/images/icon_close.png"> </a>
				<div>
					<iframe src="/younge/webpages/badagil.html">

					</iframe>
				</div>

			</div>
			<div class="mainPopups mainPopup5">
				<a href="#!" class="btnClose"><img src="/younge/images/icon_close.png"> </a>
				<div>
					<iframe src="/younge/webpages/sony.html">

					</iframe>
				</div>

			</div>
			<div class="mainPopups mainPopup6">
				<a href="#!" class="btnClose"><img src="/younge/images/icon_close.png"> </a>
				<div>
					<iframe src="/younge/webpages/mufg.html">

					</iframe>
				</div>

			</div>
			<div class="mainPopups mainPopup7">
				<a href="#!" class="btnClose"><img src="/younge/images/icon_close.png"> </a>
				<div>
					<iframe src="/younge/webpages/ct.html">

					</iframe>
				</div>

			</div>
			<div class="mainPopups mainPopup8">
				<a href="#!" class="btnClose"><img src="/younge/images/icon_close.png"> </a>
				<div>
					<iframe src="/younge/webpages/lp.html">
					</iframe>
				</div>
			</div>
			<div class="mainPopups mainPopup9">
				<a href="#!" class="btnClose"><img src="/younge/images/icon_close.png"> </a>
				<div>
					<iframe src="/younge/webpages/shinhan.html">
					</iframe>
				</div>
			</div>
			<script>
				var devideHeight = $(".devide").outerWidth();
				$(function(openPopup) {
					$(".text-Area").children("button").click(function() {
						var readH3 = $(this).siblings("h3").text();
						if (readH3 == "HOEISORenewal") {
							$("#black").fadeIn();
							$("body").addClass("hidden");
							$(".mainPopup1").fadeIn();
						} else if (readH3 == "Pulmuone") {
							$("#black").fadeIn();
							$(".mainPopup2").fadeIn();
						} else if (readH3 == "Contguard") {
							$("#black").fadeIn();
							$(".mainPopup3").fadeIn();
						} else if (readH3 == "Badagil") {
							$("#black").fadeIn();
							$(".mainPopup4").fadeIn();
						} else if (readH3 == "Sony bankRenewal") {
							$("#black").fadeIn();
							$(".mainPopup5").fadeIn();
						} else if (readH3 == "Mitsubishi CardRenewal") {
							$("#black").fadeIn();
							$(".mainPopup6").fadeIn();
						} else if (readH3 == "Club Tourism") {
							$("#black").fadeIn();
							$(".mainPopup7").fadeIn();
						} else if (readH3 == "Banner, LP") {
							$("#black").fadeIn();
							$("#black").fadeIn();
							$(".mainPopup8").fadeIn();
						} 
						else if (readH3 == "신한금융투자(운영)Renewal") {
							$("#black").fadeIn();
							$(".mainPopup9").fadeIn();
						}
					});
				});

				$(function(closePopup) {
					$(".btnClose").click(function(e) {
						e.preventDefault();
						console.log(e.target.parentElement.parentElement.classList[1])
						console.log()
						if($(e.target).parent().parent().children('div').children('iframe').contents().find('body').attr('id') === 'ctmail2') history.back();
						$(this).parent().fadeOut();
						$("#black").fadeOut();
						$("body").removeClass("hidden");
						$("#scrollDown").fadeIn(1000);
					});
				});

			</script>
			<div id="black">
				<iframe src="/younge/black.html" id="iframe"></iframe>
			</div>
			<!--footer stage-->
			<div id="foot-placeholder">

			</div>

			<script>
				$(function() {
					$('#foot-placeholder').load("/younge/footer.html")
				});

			</script>
			<!--end of footer stage-->
		</div>
	</div>
	<!--Navigation bar-->
	<div id="nav-placeholder">

	</div>
	<script>
		$(function() {
			$('#nav-placeholder').load("/younge/include/nav.php")
		});

	</script>
	<!--end of Navigation bar-->

	<div id="bigphoto">
		<div>
			<a href="#!"><img src="images/photos/DSC00538.png" alt="bigphoto"></a>
		</div>
	</div>

</body>
<script>
	document.addEventListener("click", function() {
		imageResizer2()
	})
	document.addEventListener("scroll", function() {
		if(window.scrollY < 2700) imageResizer2()
	})

</script>

</html>
