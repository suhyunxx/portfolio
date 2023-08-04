<!-- #include virtual="/kr/inc/pub_config.asp" -->
<!-- #include virtual="/kr/inc/header.asp" -->
<div class="svis">
    <div class="center bg04">
        <div class="sub_title"><h5>상담문의</h5></div>
        <div class="lnb">
            <ul class="lnb_wrap">
                <!-- #include virtual="/kr/inc/lnb1.asp" -->
            </ul>
        </div>
    </div>
</div>
<div id="qna" class="sub_content">
    <div class="center">
        <h5 class="section_title">상담문의</h5>
        <div class="top_notice">
            <div class="icon">
                <img src="<%=dir%>/img/sub/counsel/counsel_icon.png" alt="">
            </div>
            <p>신청 내용은 홈페이지 및 외부에 공개되지 않으며, 작성 후 영업일 기준으로 2일 이내에 상담원 또는 컨설턴트가 연락드립니다.</p>
        </div>
        <form action="">
            <table class="qna_table">
                <tr>
                    <th>회사/단체명<span class="require">*</span></th>
                    <td>
                        <input type="text">
                    </td>
                    <th>이름<span class="require">*</span></th>
                    <td>
                        <div>
                            <input type="text">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>연락처<span class="require">*</span></th>
                    <td>
                        <input type="text">
                    </td>
                    <th>직책</th>
                    <td>
                        <input type="text">
                    </td>
                </tr>
                <tr>
                    <th>이메일<span class="require">*</span></th>
                    <td>
                        <input type="text">
                    </td>
                    <th>종업원수<span class="require">*</span></th>
                    <td>
                        <input type="text">
                    </td>
                </tr>
                <tr class="full">
                    <th>인증<span class="require">*</span></th>
                    <td colspan="3">
                        <input type="text">
                    </td>
                </tr>
                <tr class="full con">
                    <th>상담내용<span class="require">*</span></th>
                    <td colspan="3">
                        <textarea name="" id=""></textarea>
                    </td>
                </tr>
                <tr class="full pri">
                    <th>개인정보취급방침<span class="require">*</span></th>
                    <td colspan="3">
                        <textarea readonly name="" id="" width="100%">개인정보 수집 및 처리에 관한 동의


1.수집하는 개인정보 항목
제보/상담 처리 위해 다음의 개인정보를 수집하고 있습니다.
수집항목: 이름, 전화번호, 이메일, 휴대폰번호
개인정보 수집 방법: 홈페이지(제보하기)</textarea>
                        <div>
                            <label id="label">
                                <input id="hiddenCheckbox" checked type="radio" name="agree" />
                                <div id="showCheckbox"></div>
                                <span>동의함</span>
                            </label>
                            <label id="label">
                                <input id="hiddenCheckbox2" type="radio" name="agree" />
                                <div id="showCheckbox2"></div>
                                <span style="color:#999;">동의안함</span>
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>파일첨부<span class="require">*</span></th>
                    <td>
                        <div class="file_upload">
                            <input class="upload-name" value="첨부파일" placeholder="첨부파일">
                            <label for="file">파일선택 <span>+</span></label> 
                            <input type="file" id="file">
                        </div>
                    </td>
                    <script>
                        $("#file").on('change',function(){
                            var fileName = $("#file").val();
                            $(".upload-name").val(fileName);
                        });
                    </script>
                    <th>자동등록방지<span class="require">*</span></th>
                    <td class="captcha_">
                        <div>
                            <img src="" alt="">
                            <button>새로고침</button>
                            <input type="text" placeholder="코드를 입력하세요">
                        </div>
                    </td>
                </tr>
            </table>
        </form>
        <div class="go_list"><a href="#">확인</a></div>
    </div>
</div>
<!-- #include virtual="/kr/inc/footer.asp" -->

