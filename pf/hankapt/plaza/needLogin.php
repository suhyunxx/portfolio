<?php include "../inc/common.php"; ?>
<body>
    <?php include "../inc/header.php"; ?>
    <div class="container">
        <div class="inner">
            <h4 class="innerTitle">서비스 이용 안내</h4>
        </div>
        <div class="content needlogin">
            <div class="loginTop"><span>로그인이 필요한 서비스입니다.</span></div>
            <div class="loginWrap">
                <form>
                    <h5 class="boldfont">Member Login</h5>
                    <div><input type="text" name="loginid" placeholder="아이디"></div>
                    <div><input type="text" name="loginpw" placeholder="비밀번호"></div>
                    <button type="button">로그인</button>
                    <div class="loginBot">
                        <div style="margin-bottom:16px;">
                            <p>아이디가 없으신 분은 회원가입을 해주세요.</p>
                            <p class="bluep"><a href="#">회원가입</a></p>
                        </div>
                        <div>
                            <p>아이디 또는 패스워드가 생각나지 않으세요?</p>
                            <p class="bluep"><a href="#">아이디/패스워드 찾기</a></p>
                        </div>
                    </div>
                </form>
        
            </div>
        </div>
    </div>
    <script type="text/javascript" src="../js/snb.js"></script>
    <script type="text/javascript" src="../js/snb2.js"></script>
    <?php include "../inc/footer.php"; ?>
</body>
</html>