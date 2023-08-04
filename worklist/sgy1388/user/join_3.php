<?php include "../inc/common.php" ?>
<body>
    <?php include "../inc/sub_quick.php" ?>
    <?php include "../inc/header.php" ?>
    <div class="svis svis05">
        <h5 class="svis_title">회원가입</h5>
    </div>
<!--    snb 주석처리-->
    <div id="join3" class="content">
        <div class="center">
            <h5 class="sub_title">회원가입</h5>
            <div class="sub_inner">
                <form action="">
                   <ul class="join_tab">
                        <li><a href="#">01.약관동의</a></li>
                        <li><a href="#">02.정보입력</a></li>
                        <li class="on"><a href="#">03.가입완료</a></li>
                    </ul>
                    <div class="join3_txt">
                        <h5 class="complete_ment">회원가입이 완료되었습니다.</h5>
                        <p class="name_ment"><span>김수현</span>님의 회원가입을 진심으로 축하합니다.</p>
                        <p class="context">
                            회원님의 비밀번호는 아무도 알 수 없는 암호화 코드로 저장되므로 안심하셔도 좋습니다. <br>
                            아이디, 비밀번호 분실시에는 회원가입시 입력하신 이메일 주소를 이용하여 찾을 수 있습니다.<br>
                            회원탈퇴는 언제든지 가능하며 일정기간이 지난 후, 회원님의 정보는 삭제하고 있습니다.<br>

                        </p>
                        <p>감사합니다.</p>
                                                    
                    </div>
                    
                    <div class="black_btn next_step"><a href="<?=dir?>user/login.php">로그인</a></div>

                </form>
            </div>
        </div>
    </div>
    <?php include "../inc/footer.php" ?>
</body>
</html>