<link rel="stylesheet" type="text/css" href="/site/bbs/skin/inquiry/style.css" />
<!--쓰기 테이블-->
<form name="regform" action="?<%=pLink%>&amp;mode=<%=mode%>_p&amp;idx=<%=idx%>&amp;page=<%=page%>&amp;p_num=<%=p_num%>" method="post" enctype="multipart/form-data">
<input type="hidden" name="ssid" value="<%=Left(Session.SessionID,2)%>" />
<input type="hidden" name="html" value="<%=k_html%>" />
<!-- 추가필드 -->
<!--
<input type="hidden"  name="addtext2" value="<%=c_addtext2%>" />
<input type="hidden"  name="addtext3" value="<%=c_addtext3%>" />
<input type="hidden"  name="addtext4" value="<%=c_addtext4%>" />
<input type="hidden"  name="addtext5" value="<%=c_addtext5%>" />
<input type="hidden"  name="addtext6" value="<%=c_addtext6%>" />
<input type="hidden"  name="addtext7" value="<%=c_addtext7%>" />
<input type="hidden"  name="addtext8" value="<%=c_addtext8%>" />
<input type="hidden"  name="addtext9" value="<%=c_addtext9%>" />
<input type="hidden"  name="addtext10" value="<%=c_addtext10%>" />
<input type="hidden"  name="addtext11" value="<%=c_addtext11%>" />
<input type="hidden"  name="addtext12" value="<%=c_addtext12%>" />
<input type="hidden"  name="addtext13" value="<%=c_addtext13%>" />
<input type="hidden"  name="addtext14" value="<%=c_addtext14%>" />
<input type="hidden"  name="addtext15" value="<%=c_addtext15%>" />
-->

<%
'제품 문의
If mode="reg" And Request("p_name")<>"" Then c_title=Request("p_name") & " 문의드립니다"
%>

<table class="ntb-tb-view" style="width:100%" cellpadding="0" cellspacing="0">
	<caption>게시판 내용</caption>
	<colgroup>
		<col width="18%" />
		<col width="82%" />
	</colgroup>
	<thead>
	</thead>
	<tbody>
	<%If k_category<>"" Then%>
	<tr>
		<th align="center">카테고리</th>
		<td class="left">
			<select name="cate" class="AXSelect">
				<%
				a_category = Split(k_category, "|")
				For Each cate_item In a_category
				%>
					<option value="<%=cate_item%>" <%If Trim(c_cate)=Trim(cate_item) Then Response.Write "selected"%>><%=cate_item%></option>
				<%
				Next
				%>
			</select>
		</td>
	</tr>
	<%End If%>

	<tr>
		<th>회사명 *</th>
		<td class="left"><input type="text"  name="addtext1" size="20" value="<%=c_addtext1%>" class="AXInput" /></td>
	</tr>
	<tr>
		<th>이름 *</th>
		<td class="left"><input type="text"  name="name" size="20" value="<%=c_mem_name%>" class="AXInput" /></td>
	</tr>

	<%If k_counsel=True Then%>
		<input type="hidden"  name="pw" value="1111" />
	<%Else%>
		<%If (W_ID="" And mode="reg") Or (W_ID="" And mode="rep") Then%>
		<tr>
			<th>비밀번호</th>
			<td class="left"><input type="password"  name="pw" size="15" maxlength="8" value="<%If mode="rep" Then Response.Write c_mem_pw%>" class="AXInput" /></td>
		</tr>
		<%Else%>
		<input type="hidden"  name="pw" value="<%=c_mem_pw%>">
		<%End If%>
	<%End If%>

	<tr>
		<th>연락처 *</th>
		<td class="left">
		<input type="hidden"  name="mem_tel" value="<%=c_mem_tel%>" />
		<input type="text"  name="mem_tel1" size="4" maxlength="4" value="" class="AXInput" /> -
		<input type="text"  name="mem_tel2" size="4" maxlength="4" value="" class="AXInput" /> -
		<input type="text"  name="mem_tel3" size="4" maxlength="4" value="" class="AXInput" /></td>
	</tr>

	<%If u_fax=True Then%>
	<tr>
		<th>FAX</th>
		<td class="left"><input type="text"  name="mem_fax" size="15" maxlength="15" value="<%=c_mem_fax%>" class="AXInput" /> 예) 02-123-4568</td>
	</tr>
	<%End If%>

	<%If u_url=True Then%>
	<tr>
		<th>링크URL</th>
		<td class="left"><input type="text"  name="mem_url" size="35" maxlength="50" value="<%=c_mem_url%>" class="AXInput" /> 예) http://www.webmoa.co.kr</td>
	</tr>
	<%End If%>

	<tr>
		<th>이메일 *</th>
		<td class="left">		
		<input type="hidden"  name="email" value="<%=c_mem_email%>" />
		<input type="text" name="o_email1" class="AXInput W100 NumberOnly" value=""> @
		<input type="text" name="o_email2" id="o_email2" class="AXInput W100" readonly value="naver.com">
		<select name="select_email" id="select_email" class="AXSelect">
			<option value="naver.com" selected>naver.com</option>
			<option value="hanmail.net">hanmail.net</option>
			<option value="hotmail.com">hotmail.com</option>
			<option value="nate.com">nate.com</option>
			<option value="yahoo.co.kr">yahoo.co.kr</option>
			<option value="empas.com">empas.com</option>
			<option value="dreamwiz.com">dreamwiz.com</option>
			<option value="freechal.com">freechal.com</option>
			<option value="lycos.co.kr">lycos.co.kr</option>
			<option value="korea.com">korea.com</option>
			<option value="gmail.com">gmail.com</option>
			<option value="hanmir.com">hanmir.com</option>
			<option value="paran.com">paran.com</option>
			<option value="1">직접입력</option>
		</select>
		<script type="text/javascript">
		//이메일 입력방식 선택
		$('#select_email').change(function(){
		   $("#select_email option:selected").each(function () {
				if($(this).val()== '1'){ //직접입력일 경우
					 $("#o_email2").val('');                        //값 초기화
					 $("#o_email2").attr("readonly",false); //활성화
				}else{ //직접입력이 아닐경우
					 $("#o_email2").val($(this).text());      //선택값 입력
					 $("#o_email2").attr("readonly",true); //비활성화
				}
		   });
		});
		</script>
		</td>
	</tr>

	<tr>
		<th>제목 *</th>
		<td class="left"><input type="text"  name="title" style="width:98%" maxlength="200" value="<%=TagText(c_title)%>" class="AXInput" /></td>
	</tr>

	<%If k_counsel=False Then%>
	<tr>
		<th>옵션</th>
		<td class="left">
		<label><input type="checkbox" name="lock" value="1" <%If c_lock=True Then Response.Write "checked"%> class="vmiddle" />비공개글</label>
		<%If W_LEVEL="1" Or W_LEVEL="2" Then%>
		<label><input type="checkbox" name="notice" value="1" <%If c_notice=True Then Response.Write "checked"%> class="vmiddle" />최상단</label>
		<%End If
		If k_repmail=True Then
			If (mode="reg" Or (mode="mod" And d_num="0")) And a_reply<>"0" Then%>
				<label><input type="checkbox" name="repmail" value="1" <%If c_repmail=True Then Response.Write "checked"%> class="vmiddle" />답변메일받기</label>
			<%End If
		End If%>
		</td>
	</tr>
	<%End If%>

	<%If u_privacy=True Then%>
	<tr>
		<th>개인정보취급방침 *</th>
		<td class="left" style="padding-top:8px; padding-bottom:8px; "><textarea cols="" rows="" name="content2" style="width:98%; height:130px" class="AXInput" readonly="readonly"><%=u_privacy_txt%></textarea><br />
		<label><input name="iprotect" type="radio" class="vmiddle" />동의함</label>&nbsp;&nbsp;
		<label><input name="iprotect" type="radio" checked="checked" class="vmiddle"/>동의안함</label>
		</td>
	</tr>
	<%End If%>

	<tr>
		<th>내용 *</th>
		<td class="left"><textarea cols="" rows="" name="content" id="content" style="width:98%; height:250px"><%=c_content%></textarea></td>
	</tr>

	<!-- 파일첨부 -->
	<%For fc=0 To k_upload-1%>
	<tr>
		<th>파일첨부<%=fc+1%></th>
		<td class="left">
		<%If mode="mod" Then
			if c_file(fc)="" Then%>
				현재 등록된 파일이 없습니다.<br />
			<%Else%>
				현재 <span class="font_comcnt"><%=c_file(fc)%></span> 파일이 등록되어 있습니다.(<input type="checkbox" name="file<%=fc+1%>_del" value="1" class="vmiddle" />삭제)<br />
			<%End If
		End If%>
		<input type="file"  name="file<%=fc+1%>" size="33" /></td>
	</tr>
	<%Next%>
	<!-- //파일첨부 -->

	<%If k_spamcode=True Then%>
	<tr>
		<th>자동등록방지 *</th>
		<td class="left">
		<img src="/site/api/captcha/captcha.asp" id="imgCaptcha" class="vmiddle" /> <i class="xi-refresh" onclick="RefreshImage('imgCaptcha');"></i>
		<input type="text" name="txtCaptcha" id="txtCaptcha" value="" class="AXInput vmiddle" style="width:118px" maxlength="5" placeholder="코드를 입력하세요" /><br /></td>
	</tr>
	<%End If%>

	</tbody>
</table>

<div class="ntb-listbtn-area" style="width:<%=T_WIDTH%>">
		<input type="button" value="   확인   " class="AXButton Classic" onclick="RegChk('<%=u_privacy%>', '<%=k_spamcode%>')">
		<input type="button" value="   취소   " class="AXButton" onclick="history.back();">
</div>

</form>


<script type="text/javascript">
//게시물 쓰기 유효성 체크
function RegChk(privacy, spamcode) {
	var obj = document.regform;
	if(obj.addtext1.value==""){ alert('회사명을 입력하세요'); obj.addtext1.focus(); return; }
	if(obj.name.value==""){ alert('이름을 입력하세요'); obj.name.focus(); return; }
	if(obj.pw.value==""){ alert('비밀번호를 입력하세요'); obj.pw.focus(); return; }
	if(obj.mem_tel1.value==""){ alert('연락처를 입력하세요'); obj.mem_tel1.focus(); return; }
	if(obj.mem_tel2.value==""){ alert('연락처를 입력하세요'); obj.mem_tel2.focus(); return; }
	if(obj.mem_tel3.value==""){ alert('연락처를 입력하세요'); obj.mem_tel3.focus(); return; }
	obj.mem_tel.value = obj.mem_tel1.value + "-" + obj.mem_tel2.value + "-" + obj.mem_tel3.value;
	obj.email.value = obj.o_email1.value + "@" + obj.o_email2.value;

	if(obj.title.value==""){ alert('제목을 입력하세요'); obj.title.focus(); return; }
	if(privacy=="True"){
		if(obj.iprotect[0].checked==false){ alert('개인정보취급방침에 동의해주세요'); return; }
	}
	if(spamcode=="True"){
		if(obj.txtCaptcha.value==""){ alert('자동등록방지 코드를 입력하세요'); obj.txtCaptcha.focus(); return; }
	}
	obj.submit();
}
</script>