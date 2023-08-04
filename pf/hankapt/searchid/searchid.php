<?php include "../inc/common.php"; ?>
<body>
    <?php include "../inc/header.php"; ?>
    <div id="svis" style="background-image:url(../img/main/introsub1svisbg.png); background-repeat:no-repeat;">
        <div class="center" >
            <div class="svis_title">
                <h3 class="boldfont">아이디/비밀번호 찾기</h3>
            </div>
        </div>
        <div class="snbWrap">
            <div class="center">
                <a class="gohome" href="../main/index.php"><i class="fa-solid fa-house"></i></a>
                <!-- <div class="snb">
                    <span class="allpage snblist"><a style="font-size:14px;" href="../introduce/sub1.php">아이디/비밀번호 찾기<span class="angleicon"><i class="fa-solid fa-angle-down"></i></span></a></span>
                    <?php include "../inc/snb.php"; ?>
                </div> -->
                <div class="searchtitle">
                    <span><a href="searchid.php">아이디/비밀번호 찾기</a></span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="inner">
            <div class="content searchidWrap">
                <div class="idsearch">
                <form name="idpw_form1" method="post">
                <input type="hidden" name="_referer_" value="<?=$_SERVER['PHP_SELF']?>">
                    <h5 class="title">아이디 찾기</h5>
                    <p>이름</p>
                    <div><input type="text" id="m_name" name="m_name"></div>
                    <p>이메일</p>
                    <div><input type="text" id="m_email" name="m_email" ></div>
                    <div class="btnWrap"><a href="javascript:void(0);" onclick="javascript:idSubmit();">확인</a></div>
                </form>
                </div>

                <div class="pwsearch">
                <form name="idpw_form2" method="post">
                <input type="hidden" name="_referer_" value="<?=$_SERVER['PHP_SELF']?>">
                    <h5 class="title">비밀번호 찾기</h5>
                    <p>아이디</p>
                    <div><input type="text" id="m_id" name="m_id"></div>
                    <p>이름</p>
                    <div><input type="text" id="m_name" name="m_name"></div>
                    <p>이메일</p>
                    <div><input type="text" id="m_email" name="m_email"></div>
                    <div class="btnWrap"><a href="javascript:void(0);" onclick="javascript:idpwSubmit();">확인</a></div>
                </form>
                </div>
            </div>
        </div>
    </div>
    <?php include "../inc/footer.php"; ?>

    <script>
        function idSubmit() {
            frm = document.idpw_form1;
            if (!frm.m_name.value) {
                alert ("이름을 입력해주세요.");
                frm.m_name.focus();
                return;
            }
            if (!frm.m_email.value) {
                alert ("이메일을 입력해주세요.");
                frm.m_email.focus();
                return;
            }
            frm.action = "../_core/act/?at=findid";
            frm.submit();
        }

        function idpwSubmit() {
            frm = document.idpw_form2;
            if (!frm.m_id.value) {
                alert ("아이디를 입력해주세요.");
                frm.m_id.focus();
                return;
            }
            if (!frm.m_name.value) {
                alert ("이름을 입력해주세요.");
                frm.m_name.focus();
                return;
            }
            if (!frm.m_email.value) {
                alert ("이메일을 입력해주세요.");
                frm.m_email.focus();
                return;
            }
            frm.action = "../_core/act/?at=findpw";
            frm.submit();
        }
    </script>
</body>
</html>