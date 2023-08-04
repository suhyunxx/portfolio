<?php include "../inc/common.php" ?>
<body>
    <?php include "../inc/header.php" ?>
    <div class="sub_center">
        <div class="sub_top">
            <h3 class="sub_title">
                <span style="animation-delay: 0s;">서</span>
                <span style="animation-delay: 0.1s;">비</span>
                <span style="animation-delay: 0.2s;">스&nbsp;</span>
                <span style="animation-delay: 0.2s;">신</span>
                <span style="animation-delay: 0.3s;">청</span>
            </h3>
            <ul class="snb">
                <li class="on"><a href="<?=dir?>plaza/plaza_news.php">서비스 신청</a></li>
                <li><a href="<?=dir?>plaza/plaza_member.php">회원게시판</a></li>
                <li><a href="<?=dir?>plaza/plaza_qna.php">설문조사</a></li>
            </ul>
        </div>
    </div>
    <div class="svis">
        <img class="clip" src="<?=dir?>img/sub/svis5.jpg" alt="연합회 소개 서브비주얼 이미지">
    </div>
    <div class="sub_center">
        <div class="plaza_news">
            <form action="">
                <h5 class="apply_title">신청인 정보 입력</h5>
                <div class="apply_form">
                    <ul class="li_wrap">
                        <li class="w-100">
                            <p>서비스 종류</p>
                            <div class="write_con">
                                <select name="" id="">
                                    <option value="신문">신문</option>
                                    <option value="캘린더">캘린더</option>
                                </select>
                            </div>
                        </li>
                        <li>
                            <p>성명</p>
                            <div class="write_con">
                                <input type="text" placeholder="이름을 입력해주세요.">
                            </div>
                        </li>
                        <li>
                            <p>유치원명</p>
                            <div class="write_con">
                                <input type="text" placeholder="유치원명을 입력해주세요.">
                            </div>
                        </li>
                        <li class="kin_post">
                            <p>유치원 주소</p>
                            <div class="write_con">
                                <input type="text" id="sample4_postcode" placeholder="우편번호">
                                <button class="postbtn" type="button" onclick="sample4_execDaumPostcode()" value="우편번호 찾기">우편번호 찾기</button><br>
                                <input type="text" id="sample4_roadAddress" placeholder="도로명주소"><br>
                                <input type="text" id="sample4_jibunAddress" placeholder="지번주소"><br>
                                <span id="guide" style="color:#999;display:none"></span>
                                <input type="text" id="sample4_detailAddress" placeholder="상세주소">
                            </div>
                            
                            <script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
                            <script>
                                //본 예제에서는 도로명 주소 표기 방식에 대한 법령에 따라, 내려오는 데이터를 조합하여 올바른 주소를 구성하는 방법을 설명합니다.
                                function sample4_execDaumPostcode() {
                                    new daum.Postcode({
                                        oncomplete: function(data) {
                                            // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

                                            // 도로명 주소의 노출 규칙에 따라 주소를 표시한다.
                                            // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
                                            var roadAddr = data.roadAddress; // 도로명 주소 변수
                                            var extraRoadAddr = ''; // 참고 항목 변수

                                            // 법정동명이 있을 경우 추가한다. (법정리는 제외)
                                            // 법정동의 경우 마지막 문자가 "동/로/가"로 끝난다.
                                            if(data.bname !== '' && /[동|로|가]$/g.test(data.bname)){
                                                extraRoadAddr += data.bname;
                                            }
                                            // 건물명이 있고, 공동주택일 경우 추가한다.
                                            if(data.buildingName !== '' && data.apartment === 'Y'){
                                                extraRoadAddr += (extraRoadAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                                            }
                                           

                                            // 우편번호와 주소 정보를 해당 필드에 넣는다.
                                            document.getElementById('sample4_postcode').value = data.zonecode;
                                            document.getElementById("sample4_roadAddress").value = roadAddr;
                                            document.getElementById("sample4_jibunAddress").value = data.jibunAddress;

                                            

                                            var guideTextBox = document.getElementById("guide");
                                            // 사용자가 '선택 안함'을 클릭한 경우, 예상 주소라는 표시를 해준다.
                                            if(data.autoRoadAddress) {
                                                var expRoadAddr = data.autoRoadAddress + extraRoadAddr;
                                                guideTextBox.innerHTML = '(예상 도로명 주소 : ' + expRoadAddr + ')';
                                                guideTextBox.style.display = 'block';

                                            } else if(data.autoJibunAddress) {
                                                var expJibunAddr = data.autoJibunAddress;
                                                guideTextBox.innerHTML = '(예상 지번 주소 : ' + expJibunAddr + ')';
                                                guideTextBox.style.display = 'block';
                                            } else {
                                                guideTextBox.innerHTML = '';
                                                guideTextBox.style.display = 'none';
                                            }
                                        }
                                    }).open();
                                }
                            </script>
                        </li>
                        <li>
                            <p>유치원 전화번호</p>
                            <div class="write_con">
                                <input type="tel" placeholder="유치원 전화번호를 입력해주세요.">
                            </div>
                        </li>
                        <li>
                            <p>핸드폰</p>
                            <div class="write_con">
                                <input type="tel" placeholder="핸드폰 번호를 입력해주세요.">
                            </div>
                        </li>
                        <li class="email"> 
                            <p>이메일</p>
                            <div class="write_con">
                                <input type="text"> @
                                <input type="text">
                                <select name="" id="">
                                    <option value="">직접입력</option>
                                    <option value="">naver.com</option>
                                    <option value="">daum.net</option>
                                    <option value="">nate.com</option>
                                    <option value="">gmail.com</option>
                                </select>
                            </div>
                        </li>
                        <li class="w-100">
                            <p>내용</p>
                            <div class="write_con">
                                <textarea name="" id="" ></textarea>
                            </div>
                        </li>
                        <li>
                            <p>비밀번호</p>
                            <div class="write_con">
                                <input type="password">
                            </div>
                        </li>
                        <li>
                            <p>비밀번호 확인</p>
                            <div class="write_con">
                                <input type="password">
                            </div>
                        </li>
                    </ul>
                    <div class="btn_set">
                        <button class="apply_submit" type="submit">신청하기</button>
                    </div>
                    
                </div>
            </form>
            
        </div>
    </div>

    <?php include "../inc/footer.php" ?>
</body>

</html>