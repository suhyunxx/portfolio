<?php include "../inc/common.php" ?>
<body>
    <?php include "../inc/sub_quick.php" ?>
    <?php include "../inc/header.php" ?>
    <div class="svis svis02">
        <h5 class="svis_title">대전서구청소년상담복지센터</h5>
    </div>
    <?php include "../inc/snb1.php" ?>
    <div id="counseling" class="content">
        <div class="center">
            <h5 class="sub_title">상담신청</h5>
            <div class="sub_inner">
               <div class="counseling_tab">
                   <ul>
                       <li class="on"><a href="counseling.php">대면상담</a></li>
                       <li><a href="meta.php">메타버스 상담</a></li>
                   </ul>
               </div>
               <div class="content">
                   <p class="top_ment">전문상담사와의 1:1 대면상담을 통해 청소년의 건강한 성장을 지원합니다.</p>
                   <div class="need_read">
                       <p>상담신청 전에 꼭 읽어주세요.</p>
                       <p>
                           * 본 기관은 청소년상담 전문기관으로 신청대상(주 호소자)은 9세 이상 24세 이하 청소년이며, 상담은 주 1회 50분 내외, 10회기로 진행됩니다. <br>
                               (단 회기 상담을 원할 경우, ‘상담 받고 싶은 내용’란에 단 회기 상담 입력) <br>
                            * 상담 과정에서 필요에 따라 보호자 상담이 진행될 수 있으며,호소문제의 해결정도에 따라 회기 진행은 축소 또는 재개입으로 조정될 수 있습니다.<br>
                            * 상담의 긍정적인 효과 및 원활한 상담 진행 위한 내담자 동의가 필요합니다.<br>
                            * 상담과정 중에 알게 된 내용이나 개인정보는 철저히 비밀보장을 약속합니다.
                       </p>
                   </div>
                   <p class="proced_title">상담절차</p>
                   <div class="proced">
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
                            <p><span class="num">02</span>상담사 배정</p>
                        </div>
                        <div>
                            <div class="icon_wrap">
                                <img src="<?=dir?>img/sub/proced1-3.png" alt="상담신청">
                            </div>
                            <p><span class="num">03</span>상담절차협의</p>
                        </div>
                        <div>
                            <div class="icon_wrap">
                                <img src="<?=dir?>img/sub/proced1-4.png" alt="상담신청">
                            </div>
                            <p><span class="num">04</span>개인상담 진행</p>
                        </div>
                        <div>
                            <div class="icon_wrap">
                                <img src="<?=dir?>img/sub/proced1-5.png" alt="상담신청">
                            </div>
                            <p><span class="num">05</span>상담 종결</p>
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
                                   <td >
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
                                    
                                    <th>학업상태</th>
                                   <td >
                                       <ul class="grade_condition">
                                           <li class="mr">
                                               <input class="mb" type="radio" id="condition1" name="condition"><label for="condition1">재학생</label><br>
                                               <input type="text" placeholder="학교"><br>
                                               <input type="text" placeholder="학년">
                                           </li>
                                           <li>
                                               <input class="mb" type="radio" id="condition2" name="condition"><label for="condition2">학업중단</label><br>
                                               <select name="" id="" class="mb">
                                                   <option value="">초등학교</option>
                                                   <option value="">중학교</option>
                                                   <option value="">고등학교</option>
                                                   <option value="">고졸 후 무직</option>
                                               </select>
                                               <p class="mb">중단시기</p>
                                               <input type="text" placeholder="연도">
                                               <input type="text" placeholder="월">
                                               <input type="text" placeholder="일" class="mb">
                                               <p class="mb">중단사유</p>
                                               <input class="width_long" type="text">
                                           </li>
                                       </ul>
                                   </td>
                               </tr>

                               <tr>
                                   <th>상담경험</th>
                                   <td colspan="3">
                                       <input type="radio" id="yes" name="yesno">
                                       <label class="mr" for="yes">없다</label>
                                       <input type="radio" id="no" name="yesno">
                                       <label for="no">있다</label>
                                       <input class="width_long" type="text" placeholder="언제, 어디서, 누구에게">
                                   </td>
                               </tr>
                               <tr>
                                   <th>가족관계</th>
                                   <td colspan="3">
                                      <p class="plus_family">
                                          <input type="text" placeholder="성명">
                                           <input type="text" placeholder="관계">
                                           <input type="text" placeholder="연령">
                                           <input type="text" placeholder="학력">
                                           <input type="text" placeholder="직업">
                                           <select name="" id="">
                                               <option value="">동거여부</option>
                                               <option value="">동거</option>
                                               <option value="">이혼</option>
                                               <option value="">별거</option>
                                               <option value="">사별</option>
                                           </select>
                                           <span class="plus_line"><a href="">추가</a></span>
                                      </p>
                                      <p class="plus_family">
                                          <input type="text" placeholder="성명">
                                           <input type="text" placeholder="관계">
                                           <input type="text" placeholder="연령">
                                           <input type="text" placeholder="학력">
                                           <input type="text" placeholder="직업">
                                           <select name="" id="">
                                               <option value="">동거여부</option>
                                               <option value="">동거</option>
                                               <option value="">이혼</option>
                                               <option value="">별거</option>
                                               <option value="">사별</option>
                                           </select>
                                           <span class="plus_line"><a href="">추가</a></span>
                                      </p>
                                      <p class="plus_family">
                                          <input type="text" placeholder="성명">
                                           <input type="text" placeholder="관계">
                                           <input type="text" placeholder="연령">
                                           <input type="text" placeholder="학력">
                                           <input type="text" placeholder="직업">
                                           <select name="" id="">
                                               <option value="">동거여부</option>
                                               <option value="">동거</option>
                                               <option value="">이혼</option>
                                               <option value="">별거</option>
                                               <option value="">사별</option>
                                           </select>
                                           <span class="plus_line"><a href="">추가</a></span>
                                      </p>
                                      <p class="plus_family">
                                          <input type="text" placeholder="성명">
                                           <input type="text" placeholder="관계">
                                           <input type="text" placeholder="연령">
                                           <input type="text" placeholder="학력">
                                           <input type="text" placeholder="직업">
                                           <select name="" id="">
                                               <option value="">동거여부</option>
                                               <option value="">동거</option>
                                               <option value="">이혼</option>
                                               <option value="">별거</option>
                                               <option value="">사별</option>
                                           </select>
                                           <span class="plus_line"><a href="">추가</a></span>
                                      </p>
                                      <p class="plus_family">
                                          <input type="text" placeholder="성명">
                                           <input type="text" placeholder="관계">
                                           <input type="text" placeholder="연령">
                                           <input type="text" placeholder="학력">
                                           <input type="text" placeholder="직업">
                                           <select name="" id="">
                                               <option value="">동거여부</option>
                                               <option value="">동거</option>
                                               <option value="">이혼</option>
                                               <option value="">별거</option>
                                               <option value="">사별</option>
                                           </select>
                                           <span class="plus_line"><a href="">추가</a></span>
                                      </p>
                                   </td>
                               </tr>
                           </table>
                           <script>
                                const plus_family = document.querySelectorAll(".plus_family");
                                const plus_line = document.querySelectorAll(".plus_line > a");
                               
                               for(let i=0; i<plus_line.length; i++)
                                {
                                    plus_family[i].style.display = "none";
                                    plus_family[0].style.display = "block"; //첫번째 줄만 보이게
                                    
                                    plus_line[i].addEventListener("click",function(e){ //추가버튼 클릭
                                        e.preventDefault();
                                        plus_family[i+1].style.display = "block"; //클릭한 버튼의 다음 줄 보이게 (i+1)
                                        plus_line[i].style.display = "none"; //클릭했던 버튼 안 보이게 (i)
                                    });
                                    
                                    if(i >= 4) //마지막 클릭했을 때 추가 버튼 안 보이게
                                    {
                                        plus_line[4].style.display = "none";
                                    }
                                }
                                
                           </script>
                       </div>
                       <div class="table_1">
                           <p class="table_name">신청인 정보 <span><input type="checkbox"><label for="">상담받는 이 정보와 동일</label></span></p>
                           <table>
                               <tr>
                                   <th>성명</th>
                                   <td>
                                       <input type="text" placeholder="성명">
                                       <input type="radio" id="gender3" name="gender2"><label for="gender3" >남</label>
                                       <input type="radio" id="gender4" name="gender2"><label for="gender4" >여</label>
                                    </td>
                                    <th>연락처</th>
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
                                   <th>관계</th>
                                   <td colspan="3"><input type="text"></td>
                               </tr>
                           </table>
                       </div>
                       <div class="table_1">
                           <p class="table_name">상담받고 싶은 내용</p>
                           <table>
                               <tr>
                                   <th>호소문제</th>
                                   <td>
                                       <span class="point_color">※ 중복 체크 가능</span><br>
                                       <input type="checkbox"><label for="">가족</label>
                                       <input type="checkbox"><label for="">일탈 및 비행</label>
                                       <input type="checkbox"><label for="">학업/진로</label>
                                       <input type="checkbox"><label for="">성</label>
                                       <input type="checkbox"><label for="">성격</label>
                                       <input type="checkbox"><label for="">대인관계</label>
                                       <input type="checkbox"><label for="">정신건강</label>
                                       <input type="checkbox"><label for="">생활습관/외모</label>
                                       <input type="checkbox"><label for="">컴퓨터/인터넷 사용</label>
                                       <input type="checkbox"><label for="">기타</label><input type="text">
                                   </td>
                               </tr>
                               <tr>
                                   <th>상담 받고 싶은 내용</th>
                                   <td>
                                       <textarea class="textarea" name="" id="" maxlength="500" placeholder="구체적으로 작성해주세요.(500자 이내)"></textarea>
                                   </td>
                               </tr>
                               <tr>
                                  <th>상담 희망일</th>
                                  <td>
                                      <span class="point_red">※ 토요상담 신청 시 10시 - 14시만 가능</span>
                                      <p>1. 희망일</p>
                                      <select name="" id="">
                                          <option value="">요일</option>
                                          <option value="">월</option>
                                          <option value="">화</option>
                                          <option value="">수</option>
                                          <option value="">목</option>
                                          <option value="">금</option>
                                          <option value="">토</option>
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
                                           1. 개인정보의 수집·이용 목적 <br>
                                           &nbsp;&nbsp;&nbsp;① 위기 상황에 대한 개입 및 내담자의 심층상담<br>
                                           &nbsp;&nbsp;&nbsp;② 청소년상담복지센터에서 운영하는 프로그램 연계<br>
                                           &nbsp;&nbsp;&nbsp;③ 재상담 요청에 따른 참고자료<br>
                                           2. 수집항목 : 성명, 생년월일, 주소, 소속, 연락처, 가족사항 등<br>
                                           3. 개인정보 보유 및 이용기간 : 취득한 정보는 상담완료일로부터 5년간 보관 및 보존기관 경과 시 즉시 폐기<br>
                                           4. 개인정보의 제3자 제공에 관한 사항 : 필요시 귀하로부터 제공받은 정보를 청소년상담복지지원법 시행령 제4조 4항의 필수연계 기관(공공보건의료기관, 보건소, 지방고용관서, 경찰서 등)에 제공할 수 있음<br>
                                           5. 개인정보 동의를 거부할 권리가 있으며, 동의 거부에 따른 서비스 제공에 관련 불이익 없음<br>
                                           6. 만 14세 미만 청소년의 정보제공은 보호자의 동의가 필요함
                                       </p>
                                   </td>
                               </tr>
                           </table>
                           <ul class="agree_set">
                               <li>
                                   <input type="checkbox">
                                   <label for="">동의합니다.</label>
                               </li>
                           </ul>
                           <div class="btn_set">
                               <div class="confirm"><a href="">신청하기</a></div>
<!--                               <div class="go_list"><a href="counseling_list.php">신청 목록</a></div>-->
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