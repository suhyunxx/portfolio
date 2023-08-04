<?php include "../inc/common.php" ?>
<body>
    <?php include "../inc/header.php" ?>
    <div class="svis">
        <div class="w1420">
            <div class="loc-wrap">
                <ul class="loc">
                    <li class="home"><i data-feather="home"></i></li>
                    <li>회원가입</li>
                </ul>
            </div>
            <h5 class="sub-title">회원가입</h5>
        </div>
    </div>
    <div class="container">
        <div class="w1420">
            <form action="">
                <ul class="join-tab">
                    <li><span>SETP 01</span>약관동의</li>
                    <li><span>SETP 02</span>개인정보 입력</li>
                    <li class="on"><span>SETP 03</span>회원가입 완료</li>
                </ul>
                <div class="agree_end">
                    <h1 class="join-logo"><img src="<?=dir?>img/logo.png" alt="회원가입 완료 페이지 기업 로고"></h1>
                    <h3>특허법인 이룸리온<br>회원가입이 완료되었습니다.</h3>
                    <div class="btn_set">
<!--                        <div class="btn_black"><a href="<?=dir?>user/login.php">로그인 하기</a></div>-->
                        <div class="btn_border"><a href="<?=dir?>">홈으로 이동</a></div>
                    </div>
                </div>
            </form>
        </div>

    </div>
    <?php include "../inc/footer.php" ?>
</body>

</html>