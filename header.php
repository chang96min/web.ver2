<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="Generator" content="EditPlus">
    <meta name="Author" content="">
    <meta name="Keywords" content="">
    <meta name="Description" content="">
    <!-- 반응형 (기기 해상도별)-->
    <meta name="viewport"
        content="width=device-width,initial-scale=1.0, minimum-scale=1.0,maximum-scale=1.0, user-scalable=yes">

    <title>기타의 시작은 C코드에서부터</title>

    <script src="../js/jquery-1.12.4.min.js"></script>
    <script src="../js/jquery-ui.min.js"></script>
    <script src="../js/swiper.min.js"></script>
    <link rel="stylesheet" href="../js/swiper.min.css">
    <!--AOS-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!--아이콘-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--스크롤시 fixed-->
    <script src="../js/autofix.js"></script>
    <!--fullpage-->
    <script src="../js/fullpage.min.js"></script>
    <link rel="stylesheet" href="../js/fullpage.min.css">

    <link rel="stylesheet" href="../css/style.css">

    <!-- 모바일 -->
    <link rel="stylesheet" media="screen and (max-width: 480px)" href="../css/480.css">

    <!-- 태블릿 세로-->
    <link rel="stylesheet" media="screen and (min-width: 481px) and (max-width: 720px)" href="../css/720.css">

    <!-- 태블릿 가로-->
    <link rel="stylesheet" media="screen and (min-width: 721px) and (max-width: 1024px)" href="../css/1024.css">
    <!-- PC -->
    <link rel="stylesheet" media="screen and (min-width: 1025px)" href="../css/pc.css">

</head>

<body>
    <!--로고,메뉴-->
    <div class="header">
        <div class="header-box">
            <h1><a href="../index.html"><img src="../img/logo.png" alt=""></a></h1>
            <div class="tnb">
                <ul>
                    <li><a href="#none">로그인</a></li>
                    <li><a href="#none">회원가입</a></li>
                    <!--
                <li><a href="#none">로그아웃</a></li>
                <li><a href="#none">정보수정</a></li>-->
                </ul>
            </div>
            <div class="gnb">
                <ul>
                    <li><a href="#none">사이트소개</a></li>
                    <li><a href="#none">작업물 게시판</a></li>
                    <li><a href="#none">Basic Code</a></li>
                    <li><a href="#none">Code for Song</a></li>
                </ul>
            </div>
        </div>

    </div>
    <style>
    .header.autofix_sb {
        position: fixed;
        width: 100%;
        z-index: 9999;
    }
    </style>
    <script>
    $(document).ready(function() {
        $(".header").autofix_anything();
    });
    </script>