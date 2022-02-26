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
    <link rel='stylesheet' href='/younge/css/font-awesome.min.css'>
    <!-- 폰트-->
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900|Noto+Serif+KR:200,300,400,500,600,700,900&display=swap&subset=korean" rel="stylesheet">

    <!-- 글자효과-->
    <link rel="stylesheet" type="text/css" href="/younge/css/animate.css">
    <script>
        $(function() {
            const htmlHeight = $(document).height();
            const layoutHeight = $('#layout').height();
            $('#layout').height(htmlHeight);
            $('main').height(htmlHeight);

            const go_join = document.querySelector("#go_join");
            const login_submit = document.querySelector("#login_submit");

            go_join.addEventListener('click', function() {
                location.href = "/younge/form/join_form.php";
            });

            login_submit.addEventListener('click', function() {
                logingogo();
            });

            document.addEventListener('keydown', function(event) {
                if (event.keyCode === 13) {
                    event.preventDefault();
                    logingogo();
                };
            }, true);
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

        })

    </script>
</head>

<body>
    
    <div>
        <div id="layout">
            <main>
                <div class="black"></div>
                <div class="center">
                    <h2 class="title">Login</h2>

                    <form action="/younge/php/login.php" method="post" name="login_form">
                        <p>
                            <label for="id">아이디</label>
                            <input type="text" id="id" placeholder="아이디를 입력해 주세요." name="login_mem_id" onKeyPress="if (event.keyCode==13){logingogo()}">
                        </p>
                        <p>
                            <label for="">비밀번호</label>
                            <input type="password" placeholder="비밀번호 입력해 주세요." name="login_mem_pass" onKeyPress="if (event.keyCode==13){logingogo()}">
                        </p>
                        <div class="login_btns">
                            <button type="button" id="login_submit" type="button" onclick="logingogo()">로그인</button>
                            <button type="button" id="go_join">회원가입</button>
                        </div>
                    </form>
                    <script>
                        function logingogo() {
                            if (!document.login_form.login_mem_id.value) {
                                alert("아이디를 입력해 주세요.");
                                document.login_form.login_mem_id.focus();
                                return;
                            } else if (!document.login_form.login_mem_pass.value) {
                                alert("비밀번호를 입력해 주세요.");
                                document.login_form.logiscn_mem_pass.focus();
                                return;
                            }
                            document.login_form.submit();
                        }

                    </script>
                </div>
            </main>
        </div>
    </div>
</body>

</html>
