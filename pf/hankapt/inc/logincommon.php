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
                <form name="login_form" method="post">
                <input type="hidden" name="_referer_" value="<?=$_SERVER['PHP_SELF']?>">
                <input type="hidden" name="return_url" value="<?=$return_url?>">
                    <h5 class="boldfont">Member Login</h5>
                    <div><input type="text" name="loginid" placeholder="아이디"></div>
                    <div><input type="password" name="passwd" placeholder="비밀번호"></div>
                    <button type="button" onclick="javascript:loginSubmit();">로그인</button>
                    <div class="loginBot">
                        <div style="margin-bottom:16px;">
                            <p>아이디가 없으신 분은 회원가입을 해주세요.</p>
                            <p class="bluep"><a href="../userjoin/sub1.php">회원가입</a></p>
                        </div>
                        <div style="margin-bottom:16px;">
                            <p>아이디 또는 패스워드가 생각나지 않으세요?</p>
                            <p class="bluep"><a href="../searchid/searchid.php">아이디/패스워드 찾기</a></p>
                        </div>
                    </div>
                </form>
        
            </div>
        </div>
    </div>
    <script type="text/javascript" src="../js/snb.js"></script>
    <script type="text/javascript" src="../js/snb2.js"></script>
    <?php include "../inc/footer.php"; ?>
    <script>
        function loginSubmit() {
            frm = document.login_form;
            if (!frm.loginid.value) {
                alert ("아이디를 입력해주세요.");
                frm.loginid.focus();
                return;
            }
            if (!frm.passwd.value) {
                alert ("비밀번호를 입력해주세요.");
                frm.passwd.focus();
                return;
            }
            frm.action = "../_core/act/?at=login";
            frm.submit();
        }
    </script>
</body>
</html>
