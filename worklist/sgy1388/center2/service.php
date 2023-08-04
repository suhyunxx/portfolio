<?php include "../inc/common.php" ?>
<body>
    <?php include "../inc/sub_quick.php" ?>
    <?php include "../inc/header.php" ?>
    <div class="svis svis03">
        <h5 class="svis_title">대전서구학교밖청소년지원센터</h5>
    </div>
    <?php include "../inc/snb1.php" ?>
    <div id="counseling" class="content">
        <div class="center">
            <h5 class="sub_title">서비스 신청</h5>
            <div class="sub_inner">
               <div class="content">
                   <p class="top_ment">학교 밖 청소년의 건강한 성장을 지원합니다.</p>
                   
                       <div class="guide_table">
                       <p><i class="xi-info"></i>&nbsp;&nbsp;이용안내</p>
                       <table>
                           <tr>
                               <th>주요대상</th>
                               <td>9 ~ 24세의 청소년</td>
                               <th>상담비용</th>
                               <td>무료</td>
                           </tr>
                           <tr>
                              <th>문의전화</th>
                               <td>042-527-1388</td>
                           </tr>
                       </table>
                   
                   </div>
                   <p class="proced_title">상담절차</p>
                   <div class="proced2">
                        <div>
                            <div class="icon_wrap">
                                <img src="<?=dir?>img/sub/proced1-1.png" alt="상담신청">
                            </div>
                            <p><span class="num">01</span>상담신청</p>
                        </div>
                        <div>
                            <div class="icon_wrap">
                                <img src="<?=dir?>img/sub/proced1-2.png" alt="상담신청">
                            </div>
                            <p><span class="num">02</span>신청서 접수</p>
                        </div>
                        <div>
                            <div class="icon_wrap">
                                <img src="<?=dir?>img/sub/proced1-3.png" alt="상담신청">
                            </div>
                            <p><span class="num">03</span>청소년에게 개별 연락</p>
                        </div>
                        <div>
                            <div class="icon_wrap">
                                <img src="<?=dir?>img/sub/proced1-4.png" alt="상담신청">
                            </div>
                            <p><span class="num">04</span>센터 방문</p>
                        </div>
                    </div>
               </div>
               <form action="">
                   <div class="information">
                       <div class="table_1">
                           <p class="table_name">상담받는 이 정보</p>
                           <table>
                               <tr>
                                   <th>성명</th>
                                   <td>
                                       <input type="text" placeholder="성명">
                                       <input type="radio" id="gender1" name="gender"><label for="gender1" >남</label>
                                       <input type="radio" id="gender2" name="gender"><label for="gender2" >여</label>
                                    </td>
                                    <th>생년월일</th>
                                   <td>
                                       <input type="text" placeholder="연도">
                                       <input type="text" placeholder="월">
                                       <input type="text" placeholder="일">
                                   </td>
                               </tr>
                               <tr>
                                   <th>집전화</th>
                                   <td>
                                       <select name="" id="">
                                           <option value="042" selected="">042</option>
                                            <option value="02">02</option>
                                            <option value="031">031</option>
                                            <option value="032">032</option>
                                            <option value="033">033</option>
                                            <option value="041">041</option>
                                            <option value="043">043</option>
                                            <option value="044">044</option>
                                            <option value="051">051</option>
                                            <option value="053">053</option>
                                            <option value="054">054</option>
                                            <option value="055">055</option>
                                            <option value="061">061</option>
                                            <option value="062">062</option>
                                            <option value="063">063</option>
                                            <option value="064">064</option>
                                            <option value="070">070</option>
                                       </select>
                                       <input class="width_long" type="text" placeholder="숫자만 입력해주세요.">
                                   </td>
                                   <th>휴대전화</th>
                                   <td>
                                       <select name="" id="">
                                           <option value="010" selected="">010</option>
                                           <option value="011">011</option>
                                           <option value="016">016</option>
                                           <option value="017">017</option>
                                           <option value="019">019</option>
                                       </select>
                                       <input class="width_long" type="text" placeholder="숫자만 입력해주세요.">
                                   </td>
                               </tr>
                               <tr>
                                   <th>주소</th>
                                   <td colspan="3">
                                       <input type="text" id="sample4_postcode" placeholder="우편번호">
                                        <input class="find_postcode" type="button" onclick="sample4_execDaumPostcode()" value="우편번호 찾기"><br>
                                        <input class="width_long" type="text" id="sample4_roadAddress" placeholder="도로명주소"><br>
                                        <span id="guide" style="color:#999;display:none"></span>
<!--                                        <input class="width_long" type="text" id="sample4_detailAddress" placeholder="상세주소"><br>-->
                                        <input type="text" id="sample4_extraAddress" placeholder="참고항목">
                                   </td>
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
                                                    // 표시할 참고항목이 있을 경우, 괄호까지 추가한 최종 문자열을 만든다.
                                                    if(extraRoadAddr !== ''){
                                                        extraRoadAddr = ' (' + extraRoadAddr + ')';
                                                    }

                                                    // 우편번호와 주소 정보를 해당 필드에 넣는다.
                                                    document.getElementById('sample4_postcode').value = data.zonecode;
                                                    document.getElementById("sample4_roadAddress").value = roadAddr;

                                                    // 참고항목 문자열이 있을 경우 해당 필드에 넣는다.
                                                    if(roadAddr !== ''){
                                                        document.getElementById("sample4_extraAddress").value = extraRoadAddr;
                                                    } else {
                                                        document.getElementById("sample4_extraAddress").value = '';
                                                    }

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
                           </table>
                       </div>
                       <div class="table_1">
                           <p class="table_name">학업중단 유무</p>
                           <table>
                               <tr>
                                   <th>학업상태</th>
                                   <td colspan="3">
                                       <ul class="grade_condition">
                                           <li class="mr">
                                               <input class="mb" type="radio" id="school1" name="school"><label for="school1">학교를 그만둘까 고민중이에요.</label><br>
                                               <select name="" id="">
                                                   <option value="">학력선택</option>
                                                   <option value="">초등학교</option>
                                                   <option value="">중학교</option>
                                                   <option value="">고등학교</option>
                                                   <option value="">고졸 후 무직</option>
                                               </select>
                                               <select name="" id="">
                                                   <option value="">학년 선택</option>
                                                   <option value="">1학년</option>
                                                   <option value="">2학년</option>
                                                   <option value="">3학년</option>
                                                   <option value="">4학년</option>
                                                   <option value="">5학년</option>
                                                   <option value="">6학년</option>
                                               </select>
                                           </li>
                                           <li>
                                               <input class="mb" type="radio" id="school2" name="school"><label for="school2">학교를 그만뒀어요.</label><br>
                                               <select name="" id="">
                                                   <option value="">학력선택</option>
                                                   <option value="">초등학교</option>
                                                   <option value="">중학교</option>
                                                   <option value="">고등학교</option>
                                                   <option value="">고졸 후 무직</option>
                                               </select>
                                               <select name="" id="">
                                                   <option value="">졸업여부선택</option>
                                                   <option value="">중퇴</option>
                                                   <option value="">졸업</option>
                                               </select>
                                               <select name="" id="">
                                                   <option value="">학년 선택</option>
                                                   <option value="">1학년</option>
                                                   <option value="">2학년</option>
                                                   <option value="">3학년</option>
                                                   <option value="">4학년</option>
                                                   <option value="">5학년</option>
                                                   <option value="">6학년</option>
                                               </select>
                                           </li>
                                       </ul>
                                   </td>
                               </tr>
                           </table>
                       </div>
                       
                       <div class="table_1">
                           <p class="table_name">희망 프로그램</p>
                           <table>
                               <tr>
                                   <th>호소문제</th>
                                   <td>
                                       <span class="point_color">※ 중복 체크 가능</span><br>
                                       <input type="checkbox"><label for="">복학준비</label>
                                       <input type="checkbox"><label for="">검정고시 준비</label>
                                       <input type="checkbox"><label for="">대안학교 진학 준비</label>
                                       <input type="checkbox"><label for="">취업준비</label>
                                       <input type="checkbox"><label for="">학습상담</label>
                                       <input type="checkbox"><label for="">심리상담</label>
                                       <input type="checkbox"><label for="">진로상담</label>
                                       <input type="checkbox"><label for="">경제적 지원</label>
                                       <input type="checkbox"><label for="">기타</label><input type="text">
                                   </td>
                               </tr>
                               <tr>
                                  <th>상담 희망일</th>
                                  <td >
                                      <p>1. 희망일</p>
                                      <select name="" id="">
                                          <option value="">요일</option>
                                          <option value="">월</option>
                                          <option value="">화</option>
                                          <option value="">수</option>
                                          <option value="">목</option>
                                          <option value="">금</option>
                                      </select>
                                      <select name="" id="">
                                          <option value="">선택</option>
                                          <option value="">9</option>
                                          <option value="">10</option>
                                          <option value="">11</option>
                                          <option value="">13</option>
                                          <option value="">14</option>
                                          <option value="">15</option>
                                          <option value="">16</option>
                                          <option value="">17</option>
                                      </select>
                                      <span>시</span>
                                      <select name="" id="">
                                          <option value="">선택</option>
                                          <option value="">00</option>
                                          <option value="">10</option>
                                          <option value="">15</option>
                                          <option value="">20</option>
                                          <option value="">25</option>
                                          <option value="">30</option>
                                          <option value="">35</option>
                                          <option value="">40</option>
                                          <option value="">45</option>
                                          <option value="">50</option>
                                          <option value="">55</option>
                                      </select>
                                      <span>분</span><br>
                                      <p>2. 희망일</p>
                                      <select name="" id="">
                                          <option value="">요일</option>
                                          <option value="">월</option>
                                          <option value="">화</option>
                                          <option value="">수</option>
                                          <option value="">목</option>
                                          <option value="">금</option>
                                      </select>
                                      <select name="" id="">
                                          <option value="">선택</option>
                                          <option value="">9</option>
                                          <option value="">10</option>
                                          <option value="">11</option>
                                          <option value="">13</option>
                                          <option value="">14</option>
                                          <option value="">15</option>
                                          <option value="">16</option>
                                          <option value="">17</option>
                                      </select>
                                      <span>시</span>
                                      <select name="" id="">
                                          <option value="">선택</option>
                                          <option value="">00</option>
                                          <option value="">10</option>
                                          <option value="">15</option>
                                          <option value="">20</option>
                                          <option value="">25</option>
                                          <option value="">30</option>
                                          <option value="">35</option>
                                          <option value="">40</option>
                                          <option value="">45</option>
                                          <option value="">50</option>
                                          <option value="">55</option>
                                      </select>
                                      <span>분</span><br>
                                  </td>
                                   
                               </tr>
                           </table>
                       </div>
                       <div class="table_1">
                           <p class="table_name">비밀번호 설정</p>
                           <table>
                               <tr>
                                   <th>비밀번호</th>
                                   <td><input type="password" placeholder="비밀번호"></td>
                               </tr>
                               <tr>
                                   <th>비밀번호 확인</th>
                                   <td><input type="password" placeholder="비밀번호 확인"></td>
                               </tr>
                           </table>
                       </div>
                       <div class="table_1">
                           <p class="table_name">개인정보 수집·활용 동의서</p>
                           <table>
                               <tr>
                                   <td>
                                       <p class="privacy_ment">대전광역시서구청소년상담복지센터는 대전광역시 서구에서 설치(위탁) · 운영하는 기관으로서<br>
                                           내담자의 심층상담과 프로그램의 원활한 연계를 위해 아래와 같이 개인정보 제공 동의를 받고자 합니다.</p>

                                       <p class="privacy_bot">
                                           1. 개인정보의 수집·이용 목적<br>
                                             &nbsp;&nbsp;&nbsp;- 청소년상담복지센터 · 학교밖청소년지원센터에서 운영하는 프로그램 제공 및 연계<br>
                                            2. 수집항목 : 성명, 생년월일, 주소, 소속, 연락처, 가족사항 등<br>
                                                &nbsp;&nbsp;&nbsp;- 성명, 생년월일, 주소, 소속, 연락처, 가족사항 등<br>
                                            3. 개인정보 보유 및 이용기간 : 취득한 정보는 상담완료일로부터 5년간 보관 및 보존기관 경과 시 즉시 폐기<br>
                                              &nbsp;&nbsp;&nbsp; - 취득한 정보는 제공 프로그램 종료일로부터 5년간 보관 및 보존기간 경과 시 즉시 폐기<br>
                                            4. 개인정보의 제3자 제공에 관한 사항 : 필요시 귀하로부터 제공받은 정보를 청소년상담복지지원법 시행령 제4조 4항의 필수연계 기관(공공보건의료기관, 보건소, 지방고용관서, 경찰서 등)에 제공할 수 있음<br>
                                             &nbsp;&nbsp;&nbsp;- 필요시 귀하로부터 제공받은 정보를 청소년상담복지지원법 시행령 제4조 4항의 필수연계 기관(공공보건의료기관, 보건소, 지방고용관서, 경찰서 등)에 제공할 수 있음<br>
                                            5. 개인정보 동의를 거부할 권리가 있으며, 동의 거부에 따른 서비스 제공에 관련 불이익이 있을 수 있음
                                       </p>
                                   </td>
                               </tr>
                           </table>
                           <ul class="agree_set">
                               <li>
                                   <input type="checkbox">
                                   <label for="">동의합니다.</label>
<!--
                                   <input type="checkbox">
                                   <label for="">동의하지 않습니다.</label>
-->
                               </li>
                           </ul>
                           <div class="btn_set">
                               <div class="confirm"><a href="">신청하기</a></div>
<!--                               <div class="go_list"><a href="service_list.php">신청 목록</a></div>-->
                           </div>
                       </div>
                   </div>
               </form>
            </div>
        </div>
    </div>
   
    <?php include "../inc/footer.php" ?>
</body>
</html>