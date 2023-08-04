<?php include "../inc/common.php" ?>
<body>
    <?php include "../inc/sub_quick.php" ?>
    <?php include "../inc/header.php" ?>
    <div class="svis svis05">
        <h5 class="svis_title">로그인</h5>
    </div>
<!--    snb 주석처리-->
    <div id="login" class="content">
        <div class="center">
            <h5 class="sub_title">로그인</h5>
            <div class="sub_inner">
                <form action="">
                    <p class="id"><input type="text" placeholder="아이디"></p>
                    <p class="pw"><input type="password" placeholder="비밀번호"></p>
                    <div class="login_btn"><button>로그인</button></div>
                    <ul class="user_util">
                        <li><a href="<?=dir?>user/join_1.php">회원가입</a></li>
                        <li><a href="<?=dir?>user/find_id.php">아이디 찾기</a></li>
                        <li><a href="<?=dir?>user/find_pw.php">비밀번호 찾기</a></li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
    <?php include "../inc/footer.php" ?>
</body>
</html>