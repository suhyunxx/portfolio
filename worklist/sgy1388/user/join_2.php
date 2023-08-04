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
                        <li class="on"><a href="#">02.정보입력</a></li>
                        <li><a href="#">03.가입완료</a></li>
                    </ul>
                    <div class="info_1 table_layout1">
                        <h5>사이트 이용정보 입력</h5>
                        <table>
                            <tr>
                                <th>아이디<span>*</span></th>
                                <td class="id"><input type="text" placeholder="3자 이상 입력하세요."><span>※ 영문자, 숫자, _만 입력 가능</span></td>
                            </tr>
                            <tr>
                                <th>비밀번호<span>*</span></th>
                                <td><input type="password"></td>
                            </tr>
                            <tr>
                                <th>비밀번호 확인<span>*</span></th>
                                <td><input type="password"></td>
                            </tr>
                        </table>
                    </div>
                     <div class="info_2 table_layout1">
                        <h5>사이트 이용정보 입력</h5>
                        <table>
                            <tr>
                                <th>이름<span>*</span></th>
                                <td><input type="text"></td>
                            </tr>
                            <tr>
                                <th>닉네임<span>*</span></th>
                                <td class="nick">
                                    <p style="margin-top:0; font-size:15px;">※ 공백없이 한글,영문,숫자만 입력 가능 (한글2자, 영문4자 이상), 닉네임을 바꾸시면 앞으로 60일 이내에는 변경 할 수 없습니다.</p>
                                    <input type="text"></td>
                            </tr>
                            <tr>
                                <th>E-mail<span>*</span></th>
                                <td>
                                    <input type="text" placeholder="메일주소">
                                    <select name="" id="">
                                        <option value="">직접입력</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="info_3 table_layout1">
                        <h5>기타 개인설정</h5>
                        <table>
                            <tr>
                                <th>메일링 서비스</th>
                                <td><input type="checkbox"><label for="">정보 메일을 받겠습니다.</label></td>
                            </tr>
                            <tr>
                                <th>정보공개</th>
                                <td class="open_information">
                                    <p style="margin-top:0; font-size:15px;">※ 정보공개를 바꾸시면 앞으로 0일 이내에는 변경이 되지 않습니다.</p>
                                    <input type="checkbox">
                                    <label for="">다른 분들이 나의 정보를 볼 수 없도록 합니다.</label>
                                </td>
                            </tr>
                            <tr>
                                <th>자동등록방지<span>*</span></th>
                                <td>
                                    <span id="captcha" class="g-recaptcha" data-sitekey="6LcGWNYjAAAAAIE0SYsZQxliZNWFEEYQwmauHC2q"></span>
                                    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                                    <script>
                                        function writeChk() {
                                            var v = grecaptcha.getResponse();
                                            if (v.length ==0) {
                                                alert ("자동입력방지 기능 - '로봇이 아닙니다.'를 체크해주세요.");
                                                return;
                                            }
                                        }
                                    </script>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="join_btn_set">
                        <div class="join"><a href="<?=dir?>user/join_3.php">회원가입</a></div>
                        <div class="cancel"><a href="<?=dir?>./">취소</a></div>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include "../inc/footer.php" ?>
</body>
</html>