<?php include "../inc/common.php" ?>
<body>
    <?php include "../inc/header.php" ?>
    <div class="svis">
        <div class="w1420">
            <div class="loc-wrap">
                <ul class="loc">
                    <li class="home"><i data-feather="home"></i></li>
                    <li>로그인</li>
                </ul>
            </div>
            <h5 class="sub-title">로그인</h5>
        </div>
    </div>
    <div class="container">
        <div class="w1420">
            <form action="">
                <p class="login-txt">특허법인 이룸리온에 오신 것을 환영합니다.</p>
                <div class="login_box">
                    <p>아이디</p>
                    <input type="text">
                    <p>비밀번호</p>
                    <input type="password">
                    <div class="login"><a href="">로그인</a></div>
                    <ul class="find">
                        <li><a href="<?=dir?>user/join_1.php">회원가입</a></li>
                        <li><a href="<?=dir?>user/findid.php">아이디 찾기</a></li>
                        <li><a href="<?=dir?>user/findpw.php">비밀번호 찾기</a></li>
                    </ul>
                </div>
            </form>
        </div>

    </div>
    <?php include "../inc/footer.php" ?>
</body>

</html>