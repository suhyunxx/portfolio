<?php include "../inc/common.php"; ?>
<body>
    <?php include "../inc/header.php"; ?>
    <div id="svis" style="background-image:url(../img/main/introsub1svisbg.png); background-repeat:no-repeat;">
        <div class="center" >
            <div class="svis_title">
                <h3 class="boldfont">회원가입</h3>
            </div>
        </div>
    </div>
    <!-- ㅇㄹㅇ -->
    <div class="container">
        <div class="inner">
            <h4 class="innerTitle">온라인 회원가입</h4>
            <div class="content">
                <form method="post" name="joinfrm" id="joinfrm" onsubmit="return formSubmit();">
                <input type="hidden" name="id_check" id="id_check" value="">
                <input type="hidden" name="captcha_check" id="captcha_check" value="0">
                    <div class="onlineWrap">
                        <div>
                            <p>신청회원 구분</p>
                            <div>
                                <input type="radio" name="mem" id="mem1" class="radiodesign" checked>
                                <label for="mem1" style="margin-right:10px;">일반회원</label>
                            </div>
                        </div>
                        <div>
                            <div style="display:flex; align-items:center; margin-bottom:10px;">
                                <p style="margin-bottom:0;">아이디</p>
                                <button class="checkid" onclick="fn_dbCheckId()" name="dbCheckId" >중복확인</button>
                            </div>
                            <input type="text" id="m_id" name="m_id" style="width:100%;">
                            <p style="color:#868686; font-size:14px; margin-top:10px;">※ 영문자, 숫자, _ 만 입력 가능. 최소 3자이상 입력하세요.</p>
                        </div>
                        <div style="display:flex;">
                            <div style="width:45%; margin-right:5%;">
                                <p>비밀번호</p>
                                <input type="password" id="m_passwd1" name="m_passwd1" autocomplete="new-password" style="width:100%;">
                            </div>
                            <div style="width:45%; margin-left:5%;">
                                <p>비밀번호 확인</p>
                                <input type='password' id="m_passwd2" name="m_passwd2" autocomplete="new-password" style="width:100%;">
                            </div>
                        </div>
                        <div>
                            <div>
                                <p>이름</p>
                                <input type="text" name="m_name" id="m_name" style="width:100%;">
                            </div>
                        </div>
                        <div>
                            <div>
                                <p>E-Mail</p>
                                <input type="text" id="m_email1" name="m_email1" style="width:30%;">
                                <span>@</span>
                                <input type="text" id="m_email2" name="m_email2" style="width:30%;" readonly>
                                <select name="" id="emailselect">
                                    <option value="">선택하세요</option>
                                    <?
                                    foreach (EmailList() as $value) {
                                        echo "<option value='$value'>$value</option>";
                                    }
                                    ?>
                                    <option value="직접입력">직접입력</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <div><p>휴대폰번호</p></div>
                            <div>
                                <input type="text" name="m_hp1" id="m_hp1" value="010" readonly>
                                <span>-</span>
                                <input type="text" name="m_hp2" id="m_hp2" style="width:30%;">
                                <span>-</span>
                                <input type="text" name="m_hp3" id="m_hp3" style="width:30%;">
                            </div>
                        </div>
                        <div style="display:flex;">
                            <div style="width:30%;">
                                <p>소속지역</p>
                                <select name="m_major" id="m_major" style="width:100%;">
                                    <option>서울</option>
                                    <option>부산</option>
                                    <option>대구</option>
                                    <option>인천</option>
                                    <option>광주</option>
                                    <option>대전</option>
                                    <option>울산</option>
                                    <option>세종</option>
                                    <option>경기</option>
                                    <option>강원</option>
                                    <option>충북</option>
                                    <option>충남</option>
                                    <option>전북</option>
                                    <option>전남</option>
                                    <option>경북</option>
                                    <option>경남</option>
                                    <option>제주</option>
                                </select>
                            </div>
                            <div style="width:65%; margin-left:5%;">
                                <p>소속유치원</p>
                                <input type="text" id="m_company" name="m_company" style="width:100%;">
                            </div>
                        </div>
                        <div>
                            <p>근무지 전화번호</p>
                            <div class="inputWrap">
                                <input type="text" id="m_tel1" name="m_tel1" value="">
                                <span>-</span>
                                <input type="text" id="m_tel2" name="m_tel2" style="width:30%;">
                                <span>-</span>
                                <input type="text" id="m_tel3" name="m_tel3" style="width:30%;">
                            </div>
                        </div>
                        <div>
                            <div class="pbox"><p>직장(근무지) 주소</p></div>
                            <div class="inputWrap">
                                <div style="margin-bottom:5px;"><input type="text" id="m_zip" name="m_zip" readonly><button class="postcode" type="button" name="postcode" value="우편번호 찾기" onclick="openDaumPostcodePopup()">우편번호찾기</button></div>
                                <div style="margin-bottom:5px;"><input type="text" id="m_addr1" name="m_addr1" style="width:100%;" readonly></div>
                                <div><input type="text" id="m_addr2" name="m_addr2" style="width:100%;"></div>
                            </div>
                        </div>
                        <div>
                            <p>정보수신동의여부</p>
                            <div>
                                <input type="checkbox" id="m_emailYN" name="m_emailYN" value="Y" class="checkboxdesign">
                                <label for="m_emailYN" style="margin-right:10px;">메일로 정보를 받겠습니다.</label>
                                <input type="checkbox" id="m_smsYN" name="m_smsYN" value="Y" class="checkboxdesign">
                                <label for="m_smsYN">문자메시지로 정보를 받겠습니다.</label>
                            </div>
                        </div>
                        <div>
                            <p>메모</p>
                            <textarea id="m_comment1" name="m_comment1" rows="10"></textarea>
                        </div>
                        <div>
                            <div style="display:flex; align-items:center; position:relative; width:100%;">
                                <input type="hidden" name="numberRealHash" id="numberRealHash" value="">
                                <input type="hidden" name="RealHash" id="RealHash" value="">
                                <input type="text" id="numberReal" name="numberReal" style="text-transform: uppercase; width:25%; margin-right:2%; height:35px;">
                                <span style="position:absolute; top:0; left:295px;">* 왼쪽의 자동등록방지 코드를 입력하세요</span>
                                <button type="button" class="btn-blue" onclick="javascript:captchaCheck();">확인</button>
                            </div>
                        </div>
                    </div>
                    <div class="onlinejoinbtnset" style="margin-top:24px;">
                        <button type="submit" class="onlinejoin">회원가입</button>
                        <button type="button" class="onlinecancel" onclick="location.href='../main/index.php';">취소</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include "../inc/footer.php"; ?>
    <script type="text/javascript" src="../js/snb.js"></script>
    <script type="text/javascript" src="../js/snb2.js"></script>
    <script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
    <link rel="stylesheet" type="text/css" href="../plugin/captcha/jquery.realperson.css"> 
    <script type="text/javascript" src="../plugin/captcha/jquery.plugin.js"></script> 
    <script type="text/javascript" src="../plugin/captcha/jquery.realperson.js"></script>
    <script>
        $(function(){
            $('#numberReal').realperson( {length: 4 , chars: $.realperson.alphanumeric , dot: '*' , regenerate: '클릭하면 변경됩니다.'});
        });
    </script>
    <script>
    //이메일 select
    var emailselect = document.querySelector("#emailselect");
    emailselect.addEventListener("change",function(){
        var selectvalue = emailselect.options[emailselect.selectedIndex].value;
        document.querySelector("#m_email2").value = selectvalue;
        if(selectvalue == "직접입력")
        {
            document.querySelector("#m_email2").readOnly = false;
            document.querySelector("#m_email2").value = "";
            document.querySelector("#m_email2").focus();
        }
        else
        {
            document.querySelector("#m_email2").readOnly = true;
        }
    });

    //우편번호 찾기
    const postcode = new daum.Postcode({
        oncomplete: function(data) {
            // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

            // 각 주소의 노출 규칙에 따라 주소를 조합한다.
            // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
            var addr = ''; // 주소 변수
            var extraAddr = ''; // 참고항목 변수

            //사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
            if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
                addr = data.roadAddress;
            } else { // 사용자가 지번 주소를 선택했을 경우(J)
                addr = data.jibunAddress;
            }

            // 사용자가 선택한 주소가 도로명 타입일때 참고항목을 조합한다.
            if(data.userSelectedType === 'R'){
                // 법정동명이 있을 경우 추가한다. (법정리는 제외)
                // 법정동의 경우 마지막 문자가 "동/로/가"로 끝난다.
                if(data.bname !== '' && /[동|로|가]$/g.test(data.bname)){
                    extraAddr += data.bname;
                }
                // 건물명이 있고, 공동주택일 경우 추가한다.
                if(data.buildingName !== '' && data.apartment === 'Y'){
                    extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                }
                // 표시할 참고항목이 있을 경우, 괄호까지 추가한 최종 문자열을 만든다.
                if(extraAddr !== ''){
                    extraAddr = ' (' + extraAddr + ')';
                }
                // 조합된 참고항목을 해당 필드에 넣는다.
                // document.getElementById("extraAddr").value = extraAddr;

            } else {
                // document.getElementById("extraAddr").value = '';
            }

            // 우편번호와 주소 정보를 해당 필드에 넣는다.
            document.getElementById('m_zip').value = data.zonecode;
            document.getElementById("m_addr1").value = addr;
            // 커서를 상세주소 필드로 이동한다.
            document.getElementById("m_addr2").focus();
        }
    });

    // 버튼이 클릭되었을 때 오픈 팝업은 이와 같이 적용하면 됩니다.
    const openDaumPostcodePopup = function() {
        postcode.open();
    }

    function formSubmit() {
        var f = document.joinfrm;

        if (!f.m_id.value) {
            alert("아이디를 입력해주세요.");
            f.m_id.focus();
            return false;
        }

        if (!f.id_check.value) {
            alert("아이디 중복확인해주세요.");
            f.id_check.focus();
            return false;
        }

        if (!f.m_passwd1.value) {
            alert("비밀번호를 입력해주세요.");
            f.m_passwd1.focus();
            return false;
        }
        if (!f.m_passwd2.value) {
            alert("비밀번호 확인을 입력해주세요.");
            f.m_passwd2.focus();
            return false;
        }
        if (f.m_passwd1.value != f.m_passwd2.value) {
            alert("비밀번호가 다릅니다.");
            f.m_passwd2.focus();
            return false;
        }

        if ($("input[name=id_check]").val() == "") {
            alert("아이디 중복확인해주세요.");
            $("input[name=m_id]").focus();
            return false;
        }

        if (!f.m_name.value) {
            alert("회원성명을 입력해주세요.");
            f.m_name.focus();
            return false;
        }

        if (!f.m_email1.value) {
            alert("E-mail을 입력해주세요.");
            f.m_email1.focus();
            return false;
        }
        if (!f.m_email2.value) {
            alert("E-mail을 입력해주세요.");
            f.m_email2.focus();
            return false;
        }

        if (!f.m_hp2.value) {
            alert("휴대폰번호를 입력해주세요.");
            f.m_hp3.focus();
            return false;
        }
        if (!f.m_hp2.value) {
            alert("휴대폰번호를 입력해주세요.");
            f.m_hp2.focus();
            return false;
        }

        if (!f.m_major.value) {
            alert("소속지역을 입력해주세요.");
            f.m_major.focus();
            return false;
        }
        if (!f.m_company.value) {
            alert("소속유치원을 입력해주세요.");
            f.m_company.focus();
            return false;
        }

        if (!f.numberReal.value) {
            alert("자동등록방지 코드를 입력해주세요.");
            f.numberReal.focus();
            return false;
        }

        if (f.captcha_check.value==0) {
            alert("자동등록방지 코드 입력후 확인 눌러주세요.");
            f.numberReal.focus();
            return false;
        }

        if (confirm("회원 가입하시겠습니까?")) {
            f.action = "../_core/act/?at=join";
        } else {
            return false;
        }
    }

    function fn_dbCheckId() {
        var url = "../_core/act/?at=checkid";
        var m_id = $("#m_id").val();
        if (m_id == "") {
            alert ("아이디를 입력해주세요.");
            $("#m_id").focus();
            return;
        }

        $.ajax({url:url, type:"POST", cache:false, async:false, crossDomain:true, data:{m_id:m_id},
            success:function(data) {
                data = JSON.parse(data);
                if (data == true) {
                    alert ("사용 가능한 아이디입니다.");
                    $("input[name=id_check]").val(1);
                    $("input[name=m_id]").attr("readonly",true);
                    $("input[name=m_id]").css("background-color","#EFEFEF");
                } else {
                    alert ("이미 존재하는 아이디입니다.");
                }
            },
            error:function(xhr, status, exception) {}
       });
    }    

    function captchaCheck(){
        var url = "../_core/act/?at=captcha";

        var numberReal = $("#numberReal").val();
        if (numberReal == "") {
            alert ("자동등록방지 코드를 입력해주세요.");
            $("#numberReal").focus();
            return;
        }

        hash_val = jQuery("#numberReal").realperson('getHash');
        $("#numberRealHash").val(hash_val);
        $("#RealHash").val(hash_val);

        var formData = new FormData($("#joinfrm")[0]);
        $.ajax({url:url, type:"POST", cache:false, contentType : false, processData : false, data:formData,
            success:function(data) {
                if (data == "성공") {
                    $("#captcha_check").val(1);
                    alert ("자동등록방지 코드 확인 되었습니다.");
                } else {
                    $("#captcha_check").val(0);
                    alert ("자동등록방지 코드가 잘못 되었습니다.");
                }
            },
            error:function(xhr, status, exception) {}
       });
    }
    </script>
</body>
</html>