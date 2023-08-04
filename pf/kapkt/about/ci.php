<?php include "../inc/common.php" ?>
<body>
    <?php include "../inc/header.php" ?>
    <div class="sub_center">
        <div class="sub_top">
            <h3 class="sub_title">
                <span style="animation-delay: 0s;">연</span>
                <span style="animation-delay: 0.1s;">합</span>
                <span style="animation-delay: 0.2s;">회&nbsp;</span>
                <span style="animation-delay: 0.3s;">로</span>
                <span style="animation-delay: 0.4s;">고,&nbsp;</span>
                <span style="animation-delay: 0.5s;">정</span>
                <span style="animation-delay: 0.6s;">관</span>
            </h3>
            
            <ul class="snb">
                <li><a href="<?=dir?>about/ceo.php">회장 인사말</a></li>
                <li><a href="<?=dir?>about/history.php">연혁</a></li>
                <li><a href="<?=dir?>about/org.php">임원단 구성</a></li>
                <li><a href="<?=dir?>about/act.php">활동보고</a></li>
                <li class="on"><a href="<?=dir?>about/ci.php">연합회 로고, 정관</a></li>
                <li><a href="<?=dir?>about/map.php">찾아오시는 길</a></li>
            </ul>
        </div>
    </div>
    <div class="svis">
        <img class="clip" src="<?=dir?>img/sub/svis1.jpg" alt="연합회 소개 서브비주얼 이미지">
    </div>
    <div class="sub_center">
        <div class="about_ci">
            <h5 class="subtxt">CI 소개</h5>
            <div class="flex-box">
                <div class="left">
                    <p>
                        푸른 타원은 세계와 우주를, 그 색인 블루는 평화를 뜻합니다. <br>
                        연합회 명칭인 KAPKT의 글자 가운데<br>
                        A의 색은 사랑, P의 색은 평화, T의 색은 새싹의 희망을 의미하고 전체 글자 구성의 조화는 단결을 나타냅니다.
                    </p>
                    <a class="ci_down" href=""><span>다운로드</span><i class="xi-download"></i></a>
                </div>
                <div class="right_img">
                    <img src="<?=dir?>img/sub/ci_1.png" alt="">
                </div>
            </div>
            <div class="flex-box ci_sig">
                <div class="left_img">
                    <h5 class="small_title">시그니처 조합형</h5>
                    <img src="<?=dir?>img/sub/ci_2.png" alt="">
                </div>
                <div class="right_img">
                    <h5 class="small_title">국문 좌우조합형</h5>
                    <img src="<?=dir?>img/sub/ci_3.png" alt="">
                </div>
            </div>
        </div>
        <div class="about_ci">
            <h5 class="subtxt">정관</h5>
            <p>2022.04.16 개정된 연합회 정관입니다.</p>
            <a class="ci_down" href=""><span>다운로드</span><i class="xi-download"></i></a>
        </div>
    </div>

    <?php include "../inc/footer.php" ?>
</body>

</html>