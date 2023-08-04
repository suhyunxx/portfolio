<?php include "../inc/common.php"; ?>
<body>
    <?php include "../inc/header.php"; ?>
    <div class="container">
        <div class="inner">
            <div class="topnavi">
                <ul>
                    <li><a href="../main/index.php"></a></li>
                    <li><span class="lnr lnr-chevron-right"></span></li>
                    <li><a href="sub1.php">회원가입</a></li>
                    <li><span class="lnr lnr-chevron-right"></span></li>
                    <li><a href="#">연합회 회원가입</a></li>
                </ul>
            </div>
            <ul class="leftnavi">
                <li><a href="#">회원가입</a></li>
                <li class="active"><a href="sub1.php">연합회 회원가입</a></li>
                <li><a href="sub3.php">회원탈퇴안내</a></li>
            </ul>
            <div class="content contentLeft">
                <form method="post" name="joinfrm" id="joinfrm" onsubmit="return formSubmit();">
                <input type="hidden" name="id_check" id="id_check" value="">
                <input type="hidden" name="m_level" id="m_level" value="5">
                    <div class="membershipWrap">
                        <div class="jointop">
                            <div class="jointitle"><h4>한국국공립유치원교원연합회 입회원서</h4></div>
                            <div class="qrcode">
                                <p style="margin-right:5px;font-size:15px;line-height:20px;">※ 입회원서는 QR코드로 검색하여<br> 바로 작성하셔도 좋습니다.</p>
                                <div class="qrimg"><img src="../img/main/kindergarten_qr.png" alt="입회원서 QR코드"></div>
                            </div>
                        </div>
                        <div class="membership1 membercommon">
                            <div class="detail leftDetail">
                                <div>
                                    <div class="pbox"><p>회원성명</p></div>
                                    <div class="inputWrap"><input name="m_name" id="m_name" type="text" style="width:50%;"></div>
                                </div>
                                <div>
                                    <div class="pbox"><p>생년월일</p></div>
                                    <div class="inputWrap">
                                        <select id="m_birth_y" name="m_birth_y">
                                        <?
                                        echo "<option value=''>년</option>";
                                        for ($i=date("Y"); $i >=date("Y")-90; $i--) {
                                            $i = str_pad($i,2,"0",STR_PAD_LEFT);
                                            echo "<option value='$i'>$i</option>";
                                        }
                                        ?>
                                        </select>
                                        <select id="m_birth_m" name="m_birth_m">
                                        <?
                                        echo "<option value=''>월</option>";
                                        for ($i=1; $i <=12; $i++) {
                                            $i = str_pad($i,2,"0",STR_PAD_LEFT);
                                            echo "<option value='$i'>$i</option>";
                                        }
                                        ?>
                                        </select>
                                        <select id="m_birth_d" name="m_birth_d">
                                        <?
                                        echo "<option value=''>일</option>";
                                        for ($i=1; $i <=31; $i++) {
                                            $i = str_pad($i,2,"0",STR_PAD_LEFT);
                                            echo "<option value='$i'>$i</option>";
                                        }
                                        ?>
                                        </select>
                                        <p style="font-size:13px; margin-top:10px;">※ 동명이인 구별 및 퇴직축하금 지급 등에 필요</p>
                                    </div>
                                    
                                </div>
                                <div>
                                    <div class="pbox"><p>아이디</p></div>
                                    <div class="inputWrap">
                                        <input type="text" id="m_id" name="m_id" style="width:50%;"/>
                                        <button class="checkid" onclick="fn_dbCheckId()" name="dbCheckId" >중복확인</button>
                                    </div>
                                </div>
                                <div>
                                    <div class="pbox"><p>비밀번호</p></div>
                                    <div class="inputWrap">
                                        <input type="password" id="m_passwd1" name="m_passwd1" autocomplete="new-password" style="width:50%;">
                                    </div>
                                </div>
                                <div>
                                    <div class="pbox"><p>비밀번호 확인</p></div>
                                    <div class="inputWrap">
                                        <input type='password' id="m_passwd2" name="m_passwd2" autocomplete="new-password" style="width:50%;">
                                    </div>
                                </div>
                                <!-- 아이디, 비밀번호, 비밀번호 확인 추가 -->
                                <!-- <div>
                                    <div class="pbox"><p>아이디</p></div>
                                    <div class="inputWrap">
                                        <input type="text" style="width:100%; margin-top:10px;">
                                        <p style="font-size:14px; margin-top:5px;">※ 영문자, 숫자, _ 만 입력 가능. 최소 3자이상 입력하세요.</p>
                                    </div>
                                </div>
                                <div>
                                    <div class="pbox"><p>비밀번호</p></div>
                                    <div class="inputWrap">
                                        <input type="password" style="width:100%;">
                                    </div>
                                </div>
                                <div>
                                    <div class="pbox"><p>비밀번호 확인</p></div>
                                    <div class="inputWrap">
                                        <input type="password" style="width:100%;">
                                    </div>
                                </div> -->
                                
                            </div>
                            <div class="detail rightDetail">
                                <div>
                                    <div class="pbox"><p>휴대폰번호</p></div>
                                    <div class="inputWrap">
                                        <input type="text" name="m_hp1" id="m_hp1" value="010" readonly>
                                        <input type="text" name="m_hp2" id="m_hp2">
                                        <input type="text" name="m_hp3" id="m_hp3">
                                    </div>
                                </div>
                                <div>
                                    <div class="pbox"><p>E-mail</p></div>
                                    <div class="inputWrap">
                                        <input type="text" id="m_email1" name="m_email1"><span style="color:#666;font-size:14px;">&nbsp;@</span>
                                        <input type="text" id="m_email2" name="m_email2" value="" readonly>
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
                                    <div class="pbox"><p>소속지역</p></div>
                                    <div class="inputWrap">
                                        <input type="text" id="m_local1" name="m_local1" placeholder="시ㆍ도">
                                        <input type="text" id="m_local2" name="m_local2" placeholder="시ㆍ군ㆍ구">
                                    </div>
                                </div>
                                <div>
                                    <div class="pbox"><p>직위</p></div>
                                    <div class="inputWrap">
                                        <input type="text" id="m_position" name="m_position" style="width:50%;">
                                    </div>
                                    
                                </div>

                                <div>
                                    <div class="pbox"><p>유치원명</p></div>
                                    <div class="inputWrap">
                                        <input type="text" id="m_kindergarten_name" name="m_kindergarten_name" style="width:100%;">
                                    </div>
                                </div>
                                <div>
                                    <div class="pbox"><p>유치원<br>전화번호</p></div>
                                    <div class="inputWrap">
                                        <div><span style="font-size:14px;">TEL:&nbsp;&nbsp;</span><input type="text" id="m_kindergarten_tel" name="m_kindergarten_tel" style="width:80%;"></div>
                                        <div style="margin-top:4px;"><span style="font-size:14px;">FAX:&nbsp;&nbsp;</span><input type="text" id="m_kindergarten_fax" name="m_kindergarten_fax" style="width:80%;"></div>
                                    </div>
                                    
                                </div>
                            </div> 
                        </div>
                        <p style="font-size:23px; margin:38px 0 16px;">회비 납부 동의서</p>
                        <div class="membership2 membercommon">
                            <div class="detail leftDetail">
                                <div class="detailbox">
                                    <div class="pbox"><p style="font-size:15px;">회비자동이체<br>계좌번호</p></div>
                                    <div class="inputWrap">
                                        <span>농협&nbsp;</span><input id="m_bank_no" name="m_bank_no" type="text" style="width:80%;">
                                        <div>
                                            <p style="font-size:14px; margin:10px 0;">※ 회비 자동이체는 본인명의의 농협계좌만 가능합니다.</p>
                                            <p style="font-size:14px; line-height:18px;">※ 농협통장이 없을 시 공란으로 남겨두십시오. 추후에 이체 가능한 계좌번호를 알려드립니다.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="detail rightDetail">
                                <div class="detailbox">
                                    <div class="pbox"><p>비고</p></div>
                                    <div class="inputWrap">
                                        <textarea id="m_bank_etc" name="m_bank_etc" style="resize:none; width:100%; height:90px; border:1px solid #c5c5c5; border-radius:5px;" name="" id=""></textarea>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="membership2ment">
                            <input type="checkbox" value="" id="auto" class="checkboxdesign"><label class="auto" for="auto">&nbsp;&nbsp;본인은 한국국공립유치원교원연합회 회원으로서 월회비 5,000원을 매월 위 계좌에서 자동이체함에 동의합니다.</label>
                        </div>
                        

                        <p style="font-size:23px; margin:38px 0 16px;">추천인<span class="lightfont" style="font-size:16px;">&nbsp;&nbsp;(회원가입을 실제 권유하신 분)</span></p>
                        <div class="membership2 membercommon">
                            <div class="detail leftDetail">
                                <div>
                                    <div class="pbox"><p>성명</p></div>
                                    <div class="inputWrap">
                                        <input type="text"  id="m_recomm_name" name="m_recomm_name" style="width:50%;">
                                    </div>
                                </div>
                                <div>
                                    <div class="pbox"><p>소속지역</p></div>
                                    <div class="inputWrap">
                                        <input type="text"  id="m_recomm_local1" name="m_recomm_local1" placeholder="시ㆍ도">
                                        <input type="text"  id="m_recomm_local2" name="m_recomm_local2" placeholder="시ㆍ군ㆍ구">
                                    </div>
                                </div>
                            </div>
                            <div class="detail rightDetail">
                                <div>
                                    <div class="pbox"><p>근무유치원명<br>(직위)</p></div>
                                    <div class="inputWrap">
                                        <input type="text"  id="m_recomm_position" name="m_recomm_position" style="width:50%;">
                                    </div>
                                </div>
                                <div>
                                    <div class="pbox"><p>휴대폰번호</p></div>
                                    <div class="inputWrap">
                                        <input type="text"  id="m_recomm_hp1" name="m_recomm_hp1"value="010" readonly>
                                        <input type="text"  id="m_recomm_hp2" name="m_recomm_hp2">
                                        <input type="text"  id="m_recomm_hp3" name="m_recomm_hp3">
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="membership2ment">
                            <p class="boldfont" style="font-size:22px;">본인은 위와 같이 한국국공립유치원교원연합회 회원으로 가입하고자 합니다. </p>
                            <input type="checkbox" value="" id="per" class="checkboxdesign"><label for="per">&nbsp;&nbsp;개인정보 수집 및 이용에 동의합니다.</label>
                        </div>
                        <div class="joinbtnset">
                            <button class="join" type="submit">가입</button>
                            <button type="button" class="joincancel" onclick="location.href='../main/index.php';">취소</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include "../inc/footer.php"; ?>
    <script type="text/javascript" src="../js/snb.js"></script>
    <script type="text/javascript" src="../js/snb2.js"></script>
    <link rel="stylesheet" type="text/css" href="../plugin/captcha/jquery.realperson.css"> 
    <script type="text/javascript" src="../plugin/captcha/jquery.plugin.js"></script> 
    <script type="text/javascript" src="../plugin/captcha/jquery.realperson.js"></script>
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

        //체크박스
        var auto = document.querySelector("#auto");
        var per = document.querySelector("#per");

        function formSubmit() {
            var f = document.joinfrm;

            if (!f.m_name.value) {
                alert("회원성명을 입력해주세요.");
                f.m_name.focus();
                return false;
            }

            if (!f.m_birth_y.value) {
                alert("생년월일을 입력해주세요.");
                f.m_birth_y.focus();
                return false;
            }
            if (!f.m_birth_m.value) {
                alert("생년월일을 입력해주세요.");
                f.m_birth_m.focus();
                return false;
            }
            if (!f.m_birth_d.value) {
                alert("생년월일을 입력해주세요.");
                f.m_birth_d.focus();
                return false;
            }
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

            if (!f.m_hp1.value) {
                alert("휴대폰번호를 입력해주세요.");
                f.m_hp3.focus();
                return false;
            }
            if (!f.m_hp2.value) {
                alert("휴대폰번호를 입력해주세요.");
                f.m_hp2.focus();
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

            if (!f.m_local1.value) {
                alert("소속지역을 입력해주세요.");
                f.m_local1.focus();
                return false;
            }
            if (!f.m_local2.value) {
                alert("소속지역을 입력해주세요.");
                f.m_local2.focus();
                return false;
            }

            if (!f.m_kindergarten_name.value) {
                alert("유치원명을 입력해주세요.");
                f.m_kindergarten_name.focus();
                return false;
            }

            // if (auto.checked === false) {
            //     alert("계좌 자동이체에 동의해주세요");
            //     return false;
            // }

            if(per.checked === false) {
                alert("개인정보 수집 및 이용에 동의해주세요");
                return false;
            }

            if (confirm("회원 가입하시겠습니까?")) {
                f.action = "../_core/act/?at=aliance";
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
    </script>
</body>
</html>