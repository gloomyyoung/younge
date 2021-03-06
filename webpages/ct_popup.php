<!DOCTYPE html>
<html lang="ko">

<head>
	<!-- charset 설정 -->
	<meta charset="UTF-8">
	<!-- ie 호환성보기 무시 -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- 모바일을 위한 viewport설정 -->
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
	<title>CT메일</title>
	<script>
		function ct_Popup() {
			var UserAgent = navigator.userAgent;



			if (UserAgent.match(
					/iPhone|iPod|Android|Windows CE|BlackBerry|Symbian|Windows Phone|webOS|Opera Mini|Opera Mobi|POLARIS|IEMobile|lgtelecom|nokia|SonyEricsson/i
				) != null || UserAgent.match(/LG|SAMSUNG|Samsung/) != null)

			{

				location.href = "/younge/webpages/ct_popup.php"

			} else {
				window.open("/younge/webpages/ct_popup.php", "a", "width=800, height=1000, scrollbars=1");

			}
		}

	</script>
	<style>
		body {
			overflow-x: hidden;
			background: #222;
		}

		.calling a {
			text-decoration: none;
			color: aliceblue;
		}

		h3 {
			color: aliceblue;
		}

		p {
			color: aliceblue;
		}

		.contact_form input[type=text],
		.contact_form select,
		.contact_form textarea,
		.contact_form input[type=email],
		.contact_form input[type=tel] {
			width: 100%;
			padding: 12px;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			margin-top: 6px;
			margin-bottom: 6px;
			resize: vertical;
		}

		.contact_form>h3 {
			text-align: center;
		}

		.contact_form textarea {
			height: 200px;
			resize: none;
		}

		.contact_form input[type=submit] {
			background-color: #737373;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			transition: 0.3s;
		}

		.contact_form input[type=submit]:hover {
			background-color: #aaa;
		}

		.contact_form {
			width: 90%;
			margin: 0 auto;
			margin-top: 10px;
			border-radius: 5px;
			padding: 10px;
		}

		.contact_form>h3 {
			font-size: 30px;
			padding-bottom: 50px;
			color: aliceblue;
		}

		.content {
			width: 100%;
			display: grid;
			grid-template-columns: 50% 50%;
		}

		.content img {
			width: 100%;
		}

		.content h1 {
			padding-left: 40px;
			font-weight: 300;
			font-size: 2em;
			color: aliceblue;
		}

		.content p {
			padding-left: 40px;
		}

		table {
			width: 100%;
			margin-top: 20px;
		}

		td:nth-child(odd) {
			width: 15%;
			text-align: center;
			color: aliceblue;
		}

		form img {
			width: 200px;
			height: 84px;
			display: block;
			margin: 0 auto;
		}

		@media (max-width: 800px) {
			.content {
				grid-template-columns: 100%;
			}

			.content h1 {
				padding-left: 0;
			}

			.content p {
				padding-left: 0;
			}
		}

	</style>
</head>

<body scroll="auto">
	<!-- 폼태그 -->
	<section class="contact_form" id="contact_form" style="padding-bottom:500px">
		<h3>연락처</h3>
		<div class="content">
			<div class="image">
				<img src="http://serenity90sp.cafe24.com/younge/webpages/images/ct/ct7.png" alt="img">
			</div>
			<div class="calling">
				<h1>Club Tourism의 이메일을 받아볼 수 있습니다.</h1>
				<p><a href="#none">이메일을 기재하고 필수 동의사항에 체크 하시면<br />
					샘플 메일을 받아보실 수 있습니다.</a></p>
			</div>
		</div>
		<form id="ctcontact" action="ct_sys.php" method="post">
			<table>

				<tr>
					<td>
						<label for="email">이메일</label>
					</td>
					<td colspan="3">
						<input type="email" id="email" name="email" required>
					</td>
				</tr>

				<tr>
					<td>
						<label for="message">필수<br /> 동의사항</label>
					</td>
					<td colspan="3">
						<h3><input type="checkbox" name="checker1" required style="width: 16px; height: 16px;"><label for="checker1">소비자 권익보호에 관한 사항</label></h3>
						<p>방문자님께서는 아래의 동의를 거부할 수 있으며, 이에 동의하지 않으실 경우 본 메일 송신 서비스 사용이 제한될 수 있습니다.</p>
						<h3><input type="checkbox" name="checker2" required style="width: 16px; height: 16px;"><label for="checker2">개인(신용)정보의 수집·이용에 관한 사항 </label></h3>
						<p>개인(신용)정보의 수집·이용 목적 : 본인확인 및 문의 사항에 대한 답변<br />
							수집하는 개인정보 : 이름, 전화번호, 이메일, 회사, 직책
						</p>

					</td>
				</tr>
			</table>
			<a href="javascript:{}" onclick="document.getElementById('ctcontact').submit();"><img src="/younge/images/contact.png" alt="img"></a>
		</form>
	</section>
</body>

</html>
