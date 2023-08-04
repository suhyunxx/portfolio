<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/_core/_lib.php";
unset($db);
$db = new MySQL;

// if(!isset($_SERVER["HTTPS"])) { 
// header('Location: https://'.$_SERVER["HTTP_HOST"].$_SERVER['REQUEST_URI']);
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1280">
    <meta name="naver-site-verification" content="6b9a972030a69af67cd7fa4525d0519027f647c7" />
    <meta name="description" content="한국국공립유치원교원연합회 홈페이지입니다.">
    <meta property="og:title" content="한국국공립유치원교원연합회 홈페이지">
    <meta property="og:description" content="한국국공립유치원교원연합회 홈페이지입니다.">
    <title>한국국공립유치원교원연합회</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../img/main/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/main/favicon-16x16.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/main.css?v220517">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" type="text/css" href="../plugin/captcha/jquery.realperson.css"> 
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script defer type="text/javascript" src="../js/main.js"></script>
    <script defer src="https://kit.fontawesome.com/54daf213d3.js" crossorigin="anonymous"></script>
    <link rel="canonical" href="https://www.kapkt.info/main/index.php">
<!--    <script type="text/javascript">var _HANNET_LOG_ID = "www.kapkt.info"</script>-->
    <script type="text/javascript" src="/log.js"></script> 
</head>
