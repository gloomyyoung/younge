<?php 


if(empty($_POST['name'])  		|| 
   empty($_POST['position']) 		|| 
   empty($_POST['company']) 		|| 
   empty($_POST['message']) ||
   empty($_POST['phone'])	|| 
   empty($_POST['checker1'])	|| 
   empty($_POST['checker2'])	|| 
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) 
   {

    
$str="빈칸을 채워주시거나 체크박스에 동의를 해주셔야 원활한 진행이 가능합니다!
backspace키를 눌러주세요!"; 
echo "<p>$str</p>"."<br /><a href='javascript:backback()'>뒤로가기<a><script>function backback(){
history.go(-1);
}</script>"; 
    //echo "빈칸을 채워주시거나 체크박스에 동의를 해주셔야 원활한 진행이 가능합니다!";
    
	return false;
    
   }

else {
    
    $str="Young에게 전송되었습니다. 감사합니다."; 
echo "<font size=7>".$str; 
    // echo  "담당 인원에게 전송되었습니다. 감사합니다.";
    
}

	$name = strip_tags(htmlspecialchars($_POST['name']));
	$email_address = strip_tags(htmlspecialchars($_POST['email']));
	$phone = strip_tags(htmlspecialchars($_POST['phone']));
	$message = strip_tags(htmlspecialchars($_POST['message']));
	$position = strip_tags(htmlspecialchars($_POST['position']));

    //change this to your email. 
    $to = "serenity90s@naver.com";
    $from = "http@GameBoyAdvance.gloomy-store.com";
    $subject = "FROM:  $name";

    //begin of HTML message 
    $message ="
<html>
	<body>
	<center>
			<table style='cellSpacing: 0; cellPadding: 0' cellspacing='0' cellpadding='0' border='0'>
				<tbody>
					<tr>
						<td style='FONT-SIZE: 0px'><img border='0' alt='포트폴리오 문의 안내' src='https://gloomy-store.com/younge/images/email/em_privacy_title.jpg' loading='lazy'> </td>
					</tr>
					<tr>
						<td style='PADDING-BOTTOM: 0px; PADDING-TOP: 0px; PADDING-LEFT: 8px; PADDING-RIGHT: 8px'>
							<div style='BOX-SIZING: border-box; FONT-SIZE: 14px; BORDER-RIGHT: #ccc 4px solid; WIDTH: 784px; VERTICAL-ALIGN: top; WORD-BREAK: keep-all; COLOR: #000; TEXT-ALIGN: center; BORDER-LEFT: #ccc 4px solid; LINE-HEIGHT: 18px'>
								<div style='BOX-SIZING: border-box; PADDING-BOTTOM: 0px; TEXT-ALIGN: left; PADDING-TOP: 0px; PADDING-LEFT: 10px; MARGIN: 0px 28px; PADDING-RIGHT: 10px'>
									<h2 style='FONT-SIZE: 20px; MARGIN: 0px; LINE-HEIGHT: 30px'>영에게 도착한 문의사항입니다.</h2>
									<p style='FONT-SIZE: 18px; WORD-BREAK: break-all; PADDING-TOP: 18px; LINE-HEIGHT: 24px'>세부정보는 다음과 같습니다. </p>
									<p style='FONT-SIZE: 18px; WORD-BREAK: break-all; PADDING-TOP: 18px; LINE-HEIGHT: 24px'><br />이름:".$name."</p>
									<p style='FONT-SIZE: 18px; WORD-BREAK: break-all; PADDING-TOP: 18px; LINE-HEIGHT: 24px'>직책:".$position."</p>
									<p style='FONT-SIZE: 18px; WORD-BREAK: break-all; PADDING-TOP: 18px; LINE-HEIGHT: 24px'>이메일:".$email_address."</p>
									<p style='FONT-SIZE: 18px; WORD-BREAK: break-all; PADDING-TOP: 18px; LINE-HEIGHT: 24px'>전화번호:".$phone."</p>
									<p style='FONT-SIZE: 18px; WORD-BREAK: break-all; PADDING-TOP: 18px; LINE-HEIGHT: 24px'>문의내용:".$message."</p>
									<p style='FONT-SIZE: 18px; COLOR: #c52d2d; PADDING-TOP: 18px; MARGIN: 0px; LINE-HEIGHT: 28px'><span style='BORDER-BOTTOM: #c52d2d 2px solid'>발신시 개인정보 동의사항에 동의했기 때문에 발송된 메일입니다.</span></p>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td style='PADDING-BOTTOM: 0px; PADDING-TOP: 0px; PADDING-LEFT: 8px; PADDING-RIGHT: 8px'>
							<div style='BOX-SIZING: border-box; FONT-SIZE: 14px; HEIGHT: 38px; BORDER-RIGHT: #ccc 4px solid; WIDTH: 784px; VERTICAL-ALIGN: top; WORD-BREAK: keep-all; COLOR: #000; TEXT-ALIGN: center; BORDER-LEFT: #ccc 4px solid; LINE-HEIGHT: 18px'>
							</div>
						</td>
					</tr>
					<tr>
					<td><img border='0' src='https://gloomy-store.com/younge/images/email/daily_bgbtm2.jpg' usemap='#map_bt' loading='lazy'> <map name='map_bt'><area href='javascript:alert(`아직 구현 전입니다`);return false' shape='rect' coords='423,65,522,88'><area href='javascript:alert(`아직 구현 전입니다`);return false' shape='rect' coords='440,198,607,213'></map></td>
				</tr>
				</tbody>
		</table>
	</center>
	</body>
</html>
	";
   //end of message 
    $headers  = "From: $from\r\n"; 
    $headers .= "Content-type: text/html\r\n";
	$headers .= "Cc:$email_address";
    //options to send to cc+bcc 
    //$headers .= "Cc: [email]maa@p-i-s.cXom[/email]"; 
    //$headers .= "Bcc: [email]email@maaking.cXom[/email]"; 

    // now lets send the email. 
    mail($to, $subject, $message, $headers); 

?>