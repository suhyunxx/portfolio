<?php include "../inc/common.php";?>
<body>
    <? include "../inc/header.php"; ?>
    <div class="svis vis4">
        <div class="sub_center">
            <h1 class="sub_title">
                <span style="animation-delay: 0s;">운</span>
                <span style="animation-delay: 0.1s;">용</span>
                <span style="animation-delay: 0.2s;">정</span>
                <span style="animation-delay: 0.3s;">보</span>
            </h1>
            <div class="snb">
                <ul>
                    <li class="homebtn"><a href="<?=dir?>"><i class="xi-home"></i></a></li>
                    <li class="snb_select snb1">
                        <a href="">운용정보</a>
                        <ul class="snbbox snbbox1">
                            <li><a href="">회사소개</a></li>
                            <li><a href="">운용정보</a></li>
                            <li><a href="<?=dir?>/operation/fund.php">공시정보</a></li>
                            <li><a href="<?=dir?>/contact/map.php">CONTACT US</a></li>
                        </ul>
                    </li>
                    <li class="snb_select snb2"> 
                        <a href="">펀드구조도</a>
                        <ul class="snbbox snbbox2">
                            <li><a href="<?=dir?>/operation/philosophy.php">운용철학</a></li>
                            <li><a href="<?=dir?>/operation/strategy.php">운용전략</a></li>
                            <li><a href="<?=dir?>/operation/fund.php">펀드구조도</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="sub_con">
        <div class="sub_center wrap">
            <h2 class="top_title">펀드구조도</h2>
            <div class="fund_wrap">
                <div class="fund">
                    <img src="<?=dir?>/img/sub/fund.svg" alt="품에자산운용 펀드구조도">
                </div>
            </div>
        </div>
    </div>
    <? include "../inc/footer.php"; ?>

</body>
</html>