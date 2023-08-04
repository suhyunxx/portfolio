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
                        <a href="">운용철학</a>
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
            <h2 class="top_title">운용철학</h2>
            <div class="phi_wrap">
                <h3><span class="notobold">우수한 운용성과</span>를 <span class="notobold">지속적으로 창출</span>하는 고객의 성공투자 파트너</h3>
                <div class="content">
                    <div class="main_circle notobold">운용철학</div>
                    <div class="detail">
                        <div>
                            <div class="icon"><img src="<?=dir?>/img/sub/hard.png" alt="Hard Thinking 아이콘 이미지"></div>
                            <p class="mont">Hard Thinking</p>
                            <p class="notomedi">면밀하고 합리적인 사고</p>
                            <ul class="notoregu">
                                <li>&#183; 리서치에 근거한 합리적 판단</li>
                                <li>&#183; 차별적인 경쟁력을 가진 성장기업투자</li>
                            </ul>
                        </div>
                        <div>
                            <div class="icon"><img src="<?=dir?>/img/sub/smart.png" alt="Smart Action 아이콘 이미지"></div>
                            <p class="mont">Smart Action</p>
                            <p class="notomedi">유연하고 현명한 투자</p>
                            <ul class="notoregu">
                                <li>&#183; 시기적절하고 유연한 투자 </li>
                                <li>&#183; 전략적인 분산투자</li>
                            </ul>
                        </div>
                        <div>
                            <div class="icon"><img src="<?=dir?>/img/sub/clean.png" alt="Clean Wealth 아이콘 이미지"></div>
                            <p class="mont">Clean Wealth</p>
                            <p class="notomedi">투명한 부의 창출</p>
                            <ul class="notoregu">
                                <li>&#183; 철저한 리스크 관리</li>
                                <li>&#183; 고객 중심의 사고</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <? include "../inc/footer.php"; ?>

</body>
</html>