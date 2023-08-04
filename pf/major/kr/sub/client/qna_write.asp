<!-- #include virtual="/kr/inc/pub_config.asp" -->
<!-- #include virtual="/kr/inc/header.asp" -->
<div class="svis">
    <div class="center bg04">
        <div class="sub_title"><h5>Q&A</h5></div>
        <div class="lnb">
            <ul class="lnb_wrap">
                <!-- #include virtual="/kr/inc/lnb1.asp" -->
            </ul>
        </div>
    </div>
</div>
<div id="qna" class="sub_content">
    <div class="center">
        <h5 class="section_title">Q&A</h5>
        <form action="">
            <table class="qna_table">
                <tr>
                    <th>카테고리<span class="require">*</span></th>
                    <td>
                        <div>
                            <select name="" id="">
                                <option value="">NeP/NeT</option>
                                <option value="">NeP/NeT</option>
                            </select>
                        </div>
                    </td>
                    <th>이름<span class="require">*</span></th>
                    <td>
                        <div>
                            <input type="text">
                            <label id="label">
                                <input id="hiddenCheckbox" type="checkbox"/>
                                <div id="showCheckbox"></div>
                                <span>비공개글</span>
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>비밀번호<span class="require">*</span></th>
                    <td>
                        <input type="password">
                    </td>
                    <th>비밀번호 확인<span class="require">*</span></th>
                    <td>
                        <input type="password">
                    </td>
                </tr>
                <tr>
                    <th>연락처<span class="require">*</span></th>
                    <td>
                        <input type="tel">
                    </td>
                    <th>이메일<span class="require">*</span></th>
                    <td>
                        <input type="text">
                    </td>
                </tr>
                <tr class="full con">
                    <th>내용<span class="require">*</span></th>
                    <td colspan="3">
                        <textarea name="" id=""></textarea>
                    </td>
                </tr>
                <tr class="full pri">
                    <th>개인정보취급방침<span class="require">*</span></th>
                    <td colspan="3">
                        <textarea name="" id="" width="100%">개인정보 수집 및 처리에 관한 동의


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
                                <input id="hiddenCheckbox" type="radio" name="agree" />
                                <div id="showCheckbox"></div>
                                <span>동의안함</span>
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
        <div class="go_list"><a href="qna.asp">확인</a></div>
    </div>
</div>
<!-- #include virtual="/kr/inc/footer.asp" -->

