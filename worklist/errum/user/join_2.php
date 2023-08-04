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
                    <li class="on"><span>SETP 02</span>개인정보 입력</li>
                    <li><span>SETP 03</span>회원가입 완료</li>
                </ul>
                <div class="agree">
                    <div class="information">
                        <p class="agree-title impor_guide">회원정보 입력</p>
                        <table class="info-table">
                            <colgroup>
                                <col width="15%;">
                                <col>
                            </colgroup>
                            <tr>
                                <th class="impor">기업명</th>
                                <td colspan="3"><input type="text"></td>
                            </tr>
                            <tr>
                                <th class="impor">사업자등록번호</th>
                                <td><input type="text"></td>
                                <th class="impor">기업구분</th>
                                <td>
                                    <span>
                                        <input type="radio" name="company" id="company_ch1">
                                        <label for="company_ch1">중소기업</label>
                                    </span>
                                    <span>
                                        <input type="radio" name="company" id="company_ch2">
                                        <label for="company_ch2">중견기업</label>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <th class="impor">본사지역</th>
                                <td><input type="text"></td>
                                <th class="impor">주요기술분야</th>
                                <td><input type="text"></td>
                            </tr>
                            <tr>
                                <th class="impor">대표제품/서비스</th>
                                <td><input type="text"></td>
                                <th>담당자명</th>
                                <td><input type="text"></td>
                            </tr>
                            <tr>
                                <th class="impor">이메일</th>
                                <td>
                                    <input type="text"><button class="btn_blue">인증번호 받기</button>
                                    <p class="small_txt">* 아이디/패스워드찾기 등에 필요한 정보이니 정확하게 기입해 주세요.</p>
                                </td>
                                <th class="impor">이메일 인증</th>
                                <td><input type="text"><button class="btn_blue">인증확인</button></td>
                            </tr>
                            <tr>
                                <th class="impor">대표아이디</th>
                                <td colspan="3">
                                    <input type="text">
                                    <p class="small_txt">* 6~12자의 영문 소문자, 숫자와 특수기호(_) 만 사용할 수 있습니다.</p>
                                </td>
                            </tr>
                            <tr>
                                <th class="impor">새비밀번호</th>
                                <td>
                                    <input type="password">
                                    <p class="small_txt">* 영문과 숫자가 최소 하나 이상 포함되어야 하며 8자 이상</p>
                                </td>
                                <th class="impor">새비밀번호 확인</th>
                                <td>
                                    <input type="password">
                                    <p class="small_txt">* 입력 오류 방지를 위하여 한 번 더 입력해 주세요.</p>
                                </td>
                            </tr>
                            <tr>
                                <th class="impor">휴대전화번호</th>
                                <td><input type="tel"></td>
                                <th>전화번호</th>
                                <td><input type="tel"></td>
                            </tr>
                        </table>
                        <div class="next_btn btn-main"><a href="<?=dir?>user/join_3.php">회원가입</a></div>
                    </div>
                </div>
            </form>
        </div>

    </div>
    <?php include "../inc/footer.php" ?>
</body>

</html>