<?php include "../inc/common.php" ?>
<body>
    <?php include "../inc/header.php" ?>
    <div class="svis">
        <div class="w1420">
            <div class="loc-wrap">
                <ul class="loc">
                    <li class="home"><i data-feather="home"></i></li>
                    <li>마이페이지</li>
                </ul>
            </div>
            <h5 class="sub-title">마이페이지</h5>
        </div>
    </div>
    <div class="container">
        <div class="user_modify">
            <ul class="user-tab w1420">
                <li class="on"><a href="<?=dir?>user/user_modify.php">회원 정보 수정</a></li>
                <li><a href="<?=dir?>user/subid.php">서브 아이디 신청</a></li>
                <li><a href="<?=dir?>user/subid_modify1.php">서브 아이디 생성 현황 및 정보 수정</a></li>
            </ul>
            <div class="w1420 agree">
                <p class="agree-title impor_guide">회원정보 수정</p>
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
                                <input type="radio" name="company" id="modify_com1">
                                <label for="modify_com1">중소기업</label>
                            </span>
                            <span>
                                <input type="radio" name="company" id="modify_com2">
                                <label for="modify_com2">중견기업</label>
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
                        <td>
                            <input type="text">
                            <p class="small_txt">* 6~12자의 영문 소문자, 숫자와 특수기호(_) 만 사용할 수 있습니다.</p>
                        </td>
                        <th>서브아이디 생성 현황</th>
                        <td><a href="<?=dir?>user/subid_modify1.php">1/5</a></td>
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
                <div class="modify_btn btn-main"><a href="<?=dir?>service/vod.php">수정</a></div>
            </div>
        </div>
    </div>
    <?php include "../inc/footer.php" ?>
</body>

</html>