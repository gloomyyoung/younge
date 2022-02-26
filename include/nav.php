<?php
	session_start();
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

<head>
	<script src="/younge/script/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="/younge/css/navfoot.css">
	<!-- 폰트-->
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900|Noto+Serif+KR:200,300,400,500,600,700,900&display=swap&subset=korean" rel="stylesheet">
</head>

<body>
	<header id="navheader">
		<div class="wrapper">
			<div>
				<a href="/younge/#"><img src="/younge/images/logo20_3.png" class="logo" id="toHome" /></a>
				<a href="#none" class="hamburger" id="hamburger" onclick="ham()"><img src="/younge/images/button.png" class="hamburger_icon" alt="" title="" /></a>
			</div>
			<nav class="nav_pc">
				<ul>
					<li class="nav_stories"><a href="/younge/#trig">About young</a></li>
					<li class="nav_contguard"><a href="/younge/#circleBar">Web Skills</a></li>
					<li class="nav_mission"><a href="/younge/#sectionweb2">Web designs</a></li>
					<li class="nav_cooperation"><a href="/younge/#likers">I Like It</a></li>

					<?php 
                            if($userid) { ?>
					<li class="nav_session">
						<a href="#!" class="profile_frame"><img src="/younge/images/members/<?=$userprofile?>" alt="profile" onerror="this.src='/younge/images/members/default-user.png'" id="profile_frame"></a>
					</li>
					<?php } else{ ?>
					<li class="nav_session">
						<div>
							<a href="/younge/form/login_form.php">로그인</a>
							<a href="/younge/form/join_form.php">회원가입</a>
						</div>
					</li>
					<?php } ?>
				</ul>
				<!--<div class="sns_btn">
                <a href="javascript:;" onclick="contactPopup();"><img src="/younge/img/nav/tel.png" alt="img"></a>
                <a href="#none"><img src="/younge/img/nav/facebook.png" alt="img"></a>
            </div> -->
			</nav>
			<nav class="nav_m">
				<div class="two-column-nav">
					<div>
						<ul>
							<li class="nav_stories"><a href="/younge/#">Home</a></li>
							<li class="nav_contguard"><a href="/younge/#circleBar">Web Skills</a></li>
							<li class="nav_cooperation"><a href="/younge/#likers">I Like It</a></li>
						</ul>
					</div>
					<div>
						<ul>
							<li class="nav_cooperation"><a href="/younge/aboutyoung/#">About Young</a></li>
							<li class="nav_mission"><a href="/younge/#sectionweb2">Web designs</a>
								<ul>
									<?php 
                            		if($userid) { ?>
									<li class="nav_session">
										<a href="#!" class="profile_frame"><img src="/younge/images/members/<?=$userprofile?>" alt="profile" onerror="this.src='/younge/images/members/default-user.png'" id="prof_img"></a>
										<a class="sub_menu_m" href="javascript:void(0)">
											<div class="wrapper">
												<ul>
													<li>
														<p style="font-size:13px;"><?=$username?></p>
													</li>
												</ul>
											</div>
										</a>
										<a class="sub_menu_m" href="/younge/php/logout.php" style="top:100px;">
											<div class="wrapper">
												<ul>
													<li>
														<p style="font-size:13px;">로그아웃</p>
													</li>
												</ul>
											</div>
										</a>
									</li>
									<?php } else{ ?>
									<li class="nav_session">
										<div>
											<a href="/younge/form/login_form.php" style="padding-top:10px; padding-bottom:15px;font-size:13px;">로그인</a>
											<a href="/younge/form/join_form.php" style="font-size:13px;">회원가입</a>
										</div>
									</li>
									<?php } ?>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<!-- <div class="sns_btn">
                <a href="tel:055-263-8963"><img src="/younge/img/nav/tel.png" alt="img"></a>
                <a href="#none"><img src="/younge/img/nav/facebook.png" alt="img"></a>
            </div>-->
			</nav>
		</div>
		<div class="sub_menu">
			<div class="wrapper">
				<ul>
					<li><a href="#!"><?=$username?></a>
						<a href="/younge/php/logout.php">로그아웃</a>
					</li>
				</ul>
			</div>
		</div>
	</header>

	<script>

		$(document).ready(function() {

			$(".profile_frame").click(function(e) {
				e.preventDefault();
				if ($(window).width() > 800) {

					if ($(".sub_menu").css("display") == "block") {
						$(".sub_menu").css("display", "none");
					} else {
						$(".sub_menu").css("display", "block");
					}

				} else if ($(window).width() < 800) {
					if ($(".sub_menu_m").css("display") == "block") {
						$(".sub_menu_m").css("display", "none");
					} else {
						$(".sub_menu_m").css("display", "block");
					}

				}
			});
			$("a").hover(function() {
				$("header").addClass("active");
			});

			$("a").click(function() {
				$("header").addClass("active");
			});

			$("#headimg>img").mouseenter(function() {
				$("header").addClass("active");
			});


			$(".hamburger").click(function(e) {
				e.preventDefault();
				$("header").addClass("active");
			});
			$(".hamburger").hover(function() {
				$("header").addClass("active");
			});
		});

		function ham() {
			$(this).toggleClass('opned');
			$('header nav').slideToggle();
		}

	</script>
</body>
