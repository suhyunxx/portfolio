<?include_once $_SERVER['DOCUMENT_ROOT'].'/worklist/pume/inc/pubconfig.php';?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>품에자산운용</title>
<!--    폰트 noto sans, montserrat-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&family=Noto+Sans+KR:wght@300;400;500;700&display=swap" rel="stylesheet">
<!--    xeicon-->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
        
        <link rel="stylesheet" href="<?=dir?>/css/reset.css">
        <link rel="stylesheet" href="<?=dir?>/css/common.css">
        <link rel="stylesheet" href="<?=dir?>/css/main.css">
        <link rel="stylesheet" href="<?=dir?>/css/sub.css">
        
<!--    부트스트랩 아이콘-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        
<!--    gsap-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
        
<!--    스와이퍼-->       
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
        
        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
        
<!--    제이쿼리-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script defer src="<?=dir?>/js/common.js"></script>
        
        
        <?php
    
        //메인페이지 스크립트
        if($_SERVER['REQUEST_URI'] == "/worklist/pume/")
        {
            ?>
            <script defer type="text/javascript" src="<?=dir?>/js/main.js"></script>
            <?php      

        }

        //서브페이지 스크립트
        else

        {
            ?>
        <script defer type="text/javascript" src="<?=dir?>/js/sub.js"></script>
            <?php

        }

            ?>
    </head>