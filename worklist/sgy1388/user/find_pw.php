<?php include "../inc/common.php" ?>
<body>
    <?php include "../inc/sub_quick.php" ?>
    <?php include "../inc/header.php" ?>
    <div class="svis svis05">
        <h5 class="svis_title">계정찾기</h5>
    </div>
<!--    snb 주석처리-->
    <div id="findIdPW" class="content">
        <div class="center">
            <h5 class="sub_title">계정찾기</h5>
            <div class="sub_inner">
                <form action="">
                    <ul class="find_tab">
                        <li><a href="<?=dir?>user/find_id.php">아이디 찾기</a></li>
                        <li class="on"><a href="<?=dir?>user/find_pw.php">비밀번호 찾기</a></li>
                    </ul>
                    <p class="find_ment">회원가입 시 등록하신 이메일 주소를 입력해 주세요.<br>
                        해당 이메일로 임시 비밀번호를 보내드립니다.
                    </p>
                    <p class="input_line name">
                        <label for="">이름</label>
                        <input type="text">
                    </p>
                    <p class="input_line name">
                        <label for="">아이디</label>
                        <input type="text">
                    </p>
                    <p class="input_line email">
                        <label for="">이메일</label>
                        <input type="text" placeholder="메일주소">
                        <select name="" id="">
                            <option value="">직접입력</option>
                        </select>
                    </p>
                    <div class="findPW_btn"><button>비밀번호 찾기</button></div>
                </form>
            </div>
        </div>
    </div>
    <?php include "../inc/footer.php" ?>
</body>
</html>