<?php
    include $_SERVER['DOCUMENT_ROOT'].'/younge/include/nav.php';
?>
<!DOCTYPE html>
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
    <script src="/younge/script/main.js"></script>
    <link rel="stylesheet" type="text/css" href="/younge/css/form.css">
    <link rel="stylesheet" type="text/css" href="/younge/css/navfoot.css">
    <link rel="stylesheet" type="text/css" href="/younge/css/margin.css">
    <link rel="shortcut icon" href="/younge/images/logo20_1.ico" alt="img">
    <!-- 원-->
    <!-- 폰트-->
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900|Noto+Serif+KR:200,300,400,500,600,700,900&display=swap&subset=korean" rel="stylesheet">

    <!-- 글자효과-->
    <link rel="stylesheet" type="text/css" href="/younge/css/animate.css">
    <script>
        window.onload = function() {
            const htmlHeight = $(document).height();
            const layoutHeight = $('#layout').height();
            $('#layout').height(htmlHeight);
            $('main').height(htmlHeight);

            $('#submitee').click(function() {
                joingogo();
            });
            const inputs = document.querySelectorAll('input');
            $('#reset').click(function() {

                for (ii = 0; ii < inputs.length; ii++) {
                    inputs[ii].value = "";
                }
                document.querySelector('.file_directory').innerHTML = "업로드";
                document.querySelector('.file_directory').style.font = "bold 1.1rem/260% 'Noto Sans KR'";

            });
            const submitBtn = document.querySelector('#submitee');


            document.addEventListener('keydown', function(event) {
                if (event.keyCode === 13) {
                    event.preventDefault();
                    joingogo();
                };
            }, true);


            document.join_form.mem_profile.onchange = function(e) {
                const profileVal = document.join_form.mem_profile.value;
                console.log(profileVal);
                
                const fldr = document.querySelector('.file_directory')
                
                const words = profileVal.split("\\")[0] + "\\" + profileVal.split("\\")[1] + "\\" + '\n' + profileVal.split("\\")[2];
                fldr.innerHTML = words;
                fldr.style.font = "12px/130% ''";
                console.log(words)
            };

            document.querySelector('.black').addEventListener('click', function() {
                var ref = document.referrer.split('/')[4];
                if (ref == 'form')
                    window.location.replace('/younge/index.php');
                else if (ref == 'form')
                    window.location.replace('/younge/index.php');
                else {
                     history.go(-1);
                }
            });

        }

    </script>
</head>

<body>
    <div>
        <div id="layout">
            <main>
                <div class="black"></div>
                <div class="center join">
                    <h2 class="title">Join Me</h2>
                    <form action="/younge/php/mem_insert.php" method="post" name="join_form" encType="multipart/form-data">
                        <p>
                            <label for="id">아이디</label>
                            <input type="text" id="id" placeholder="아이디를 입력해 주세요." name="mem_id">
                        </p>
                        <p>
                            <label for="name">이름</label>
                            <input type="text" id="name" placeholder="이름을 입력해 주세요." name="mem_name">
                        </p>
                        <p>
                            <label for="mail">이메일</label>
                            <input type="text" id="mail" placeholder="이메일을 입력해 주세요." name="mem_email">
                        </p>
                        <p>
                            <label for="password">비밀번호</label>
                            <input type="password" id="password" placeholder="비밀번호를 입력해 주세요." name="mem_pass">
                        </p>
                        <p>
                            <label for="password_check" class="password_check">비밀번호 확인</label>
                            <input type="password" id="password_check" placeholder="비밀번호 확인을 입력해 주세요." name="mem_pass_check">
                        </p>
                        <p>
                            <label for="profile">프로필</label>
                            <input type="file" id="profile" name="mem_profile">
                            <label for="profile" class="file_directory" name="mem_profile_directory">업로드</label>
                        </p>
                        <div class="join_btns">
                            <button id="submitee" name="submitBtn" type="button">제출</button>
                            <button id="reset" type="button">리셋</button>
                        </div>
                    </form>


                </div>
            </main>
        </div>
    </div>
</body>
<script>
    function joingogo() {
        if (!document.join_form.mem_id.value) {
            alert("아이디를 입력해 주세요.");
            document.join_form.mem_id.focus();
            return;
        }

        if (!document.join_form.mem_name.value) {
            alert("이름을 입력해 주세요.");
            document.join_form.mem_name.focus();
            return;
        }

        if (!document.join_form.mem_pass.value) {
            alert("비밀번호를 입력해 주세요.");
            document.join_form.mem_pass.focus();
            return;
        }

        if (!document.join_form.mem_pass_check.value) {
            alert("비밀번호 확인을 입력해 주세요.");
            document.join_form.mem_pass_check.focus();
            return;
        }

        if (document.join_form.mem_pass.value != document.join_form.mem_pass_check.value) {
            alert("비밀번호와 비밀번호 확인이 다릅니다.");
            document.join_form.mem_pass_check.focus();
            return;
        }

        const extensions = ['jpg', 'png', 'jpeg'];
        const imgValue = document.join_form.mem_profile.value;
        const imgExt = imgValue.split('.');
        console.log(imgExt[1]);
		
        //includes 참조 : https://developer.mozilla.org/ko/docs/Web/JavaScript/Reference/Global_Objects/Array/includes

        if (!extensions.includes(imgExt[1])) {
            alert('jpg, png, jpeg 형식의 이미지를 올려주세요.');
            return;
        }
        document.join_form.submit();
    }

</script>

</html>
