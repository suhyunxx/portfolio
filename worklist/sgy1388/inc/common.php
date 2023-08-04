<!DOCTYPE html>
<html lang="ko">
<?php define('dir','https://hansgy1388.cafe24.com/');?>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta property="og:url" content="https://hansgy1388.cafe24.com">
    <meta property="og:title" content="대전서구청소년상담복지센터&서구꿈드림">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?=dir?>thumb.png">
    <meta property="og:description" content="청소년의 더 밝은 미래와 내일을 함께하는 대전서구청소년상담복지센터">
    
    <title>대전서구청소년상담복지센터&서구꿈드림</title>
    <link rel="icon" type="image/png" sizes="32x32" href="<?=dir?>img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=dir?>img/favicon-16x16.png">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=dir?>css/reset.css">
    <link rel="stylesheet" href="<?=dir?>css/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <?php
            
       if($_SERVER['REQUEST_URI'] == "/main/index.php")
       {
    ?>
            <script defer type="text/javascript" src="<?=dir?>js/main.js"></script>
    <?php        
    
       }
    
        else
            
        {
    ?>
            <script defer type="text/javascript" src="<?=dir?>js/main.js"></script>
            <script defer type="text/javascript" src="<?=dir?>js/sub.js"></script>
    <?php
            
        }
    
    ?>
    
    <script defer src="<?=dir?>js/common.js"></script>
</head>