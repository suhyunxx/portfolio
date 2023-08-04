<?php include "../inc/common.php" ?>
<body>
    <?php include "../inc/header.php" ?>
    <div class="svis">
        <div class="w1420">
            <div class="loc-wrap">
                <ul class="loc">
                    <li class="home"><i data-feather="home"></i></li>
                    <li>아이디 찾기</li>
                </ul>
            </div>
            <h5 class="sub-title">아이디 찾기</h5>
        </div>
    </div>
    <div class="container">
        <div class="w1420">
            <form action="">
                <p class="login-txt">특허법인 이룸리온에 오신 것을 환영합니다.</p>
                <div class="login_box">
                    <p>이름</p>
                    <input type="text">
                    <p>이메일 주소</p>
                    <input type="text">
                    <span class="small_txt">※ 가입시 작성하신 이름과 이메일 주소를 입력하시면
                      <br>  이메일로 아이디를 알려드립니다.</span>
                    <div class="login"><a href="">아이디 찾기</a></div>
                    <ul class="find">
                        <li><a href="<?=dir?>user/join_1.php">회원가입</a></li>
                        <li><a href="<?=dir?>user/login.php">로그인</a></li>
                        <li><a href="<?=dir?>user/findpw.php">비밀번호 찾기</a></li>
                    </ul>
                </div>
            </form>
        </div>

    </div>
    <?php include "../inc/footer.php" ?>
</body>

</html>