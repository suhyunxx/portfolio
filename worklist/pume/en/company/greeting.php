<?php include "../inc/common.php";?>
<body>
    <? include "../inc/header.php"; ?>
    <div class="svis vis1">
        <div class="sub_center">
            <h1 class="sub_title">
                <span style="animation-delay: 0s;">회</span>
                <span style="animation-delay: 0.1s;">사</span>
                <span style="animation-delay: 0.2s;">소</span>
                <span style="animation-delay: 0.3s;">개</span>
            </h1>
            <div class="snb">
                <ul>
                    <li class="homebtn"><a href="<?=dir?>"><i class="xi-home"></i></a></li>
                    <li class="snb_select snb1">
                        <a href="">회사소개</a>
                        <ul class="snbbox snbbox1">
                            <li><a href="<?=dir?>/company/intro.php">회사소개</a></li>
                            <li><a href="">운용정보</a></li>
                            <li><a href="<?=dir?>/board/notice.php">공시정보</a></li>
                            <li><a href="<?=dir?>/contact/map.php">CONTACT US</a></li>
                        </ul>
                    </li>
                    <li class="snb_select snb2"> 
                        <a href="">인사말</a>
                        <ul class="snbbox snbbox2">
                            <li><a href="">기업개요</a></li>
                            <li><a href="<?=dir?>/company/greeting.php">인사말</a></li>
                            <li><a href="<?=dir?>/company/org.php">조직도</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <div class="sub_con">
        <div class="sub_center wrap">
            <h2 class="top_title">인사말</h2>
            <div class="greeting_wrap">
                <div class="msgImg"><img src="<?=dir?>/img/sub/msgimg.png" alt="품에자산운용 인사말 이미지"></div>
                <div class="msg">
                    <h3 class="notomedi">“우수한 운용성과를 지속적으로 창출하는 <br>
                        <span class="notobold">고객의 성공투자 파트너</span>가 되겠습니다.”</h3>
                    <p class="notolight">
                        고객 여러분께, <br>
                        품에자산운용을 찾아주셔서 감사합니다.<br>
                        <br>
                        저희 품에자산운용은 고객 신뢰를 바탕으로 <br>
                        고객 자산 보호 및 이익 극대화를 위해 최선을 다하고 있습니다.<br>
                        또한, 시장 변화와 동향 예측 및 지속적인 관리를 토대로 <br>
                        고객 여러분들이 안심할 수 있는 재테크 기반을 만들도록 노력하겠습니다. <br>
                        <br>
                        고객 여러분들에게 더 나은 서비스를 제공하도록 언제나 최선을 다하겠습니다.<br>
                        감사합니다.<br>
                        <span class="notoregu">
                            주식회사 품에자산운용 <br>
                            임직원 일동
                        </span>
                    </p>
                    
                </div>
            </div>
        </div>
    </div>
    <? include "../inc/footer.php"; ?>

</body>
</html>