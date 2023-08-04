<!--쓰기 테이블-->
<form name="regform" action="?<%=pLink%>&amp;mode=<%=mode%>_p&amp;idx=<%=idx%>&amp;page=<%=page%>&amp;p_num=<%=p_num%>" method="post" enctype="multipart/form-data">
<input type="hidden" name="ssid" value="<%=Left(Session.SessionID,2)%>" />
<input type="hidden" name="html" value="<%=k_html%>" />
<!-- 추가필드 -->
<!--
<input type="hidden"  name="addtext1" value="<%=c_addtext1%>" />
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

<table class="ntb-tb-view" cellpadding="0" cellspacing="0">
	<caption>게시판 내용</caption>
	<tbody>
	<%If k_category<>"" Then%>
	<tr>
		<th>카테고리</th>
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

	<tr style="display:none">
		<th>이름</th>
		<td class="left"><input type="text"  name="name" size="15" maxlength="8" value="<%=c_mem_name%>" class="AXInput" /></td>
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

	<tr style="display:none">
		<th>이메일</th>
		<td class="left"><input type="text"  name="email" maxlength="50" value="<%=c_mem_email%>" class="AXInput" style="width:80%; max-width:300px" /></td>
	</tr>

	<tr>
		<th>ARTICLE TITLE</th>
		<td class="left"><input type="text"  name="title" style="width:95%" maxlength="200" value="<%=TagText(c_title)%>" class="AXInput" /></td>
	</tr>
	<tr>
		<th>AUTHORS</th>
		<td class="left"><input type="text"  name="addtext1" value="<%=TagText(c_addtext1)%>" class="AXInput W300" /></td>
	</tr>
	<tr>
		<th>YEAR</th>
		<td class="left"><input type="text"  name="addtext2" value="<%=TagText(c_addtext2)%>" class="AXInput" /></td>
	</tr>
	<tr>
		<th>JOURNAL</th>
		<td class="left"><input type="text"  name="addtext3" value="<%=TagText(c_addtext3)%>" class="AXInput W300" /></td>
	</tr>

	<%If k_counsel=False Then%>
	<tr style="display:none">
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

	<%If k_seo=True Then%>
	<!-- SEO 적용시 -->
	<tr>
		<th>Head Title</th>
		<td class="left"><input type="text"  name="seo_title" style="width:98%" value="<%=c_seo_title%>" class="AXInput" /></td>
	</tr>
	<tr>
		<th>Meta Tag Keyword</th>
		<td class="left"><input type="text"  name="seo_keyword" style="width:98%" value="<%=c_seo_keyword%>" class="AXInput" /></td>
	</tr>
	<tr>
		<th>Meta Tag Description</th>
		<td class="left"><input type="text"  name="seo_description" style="width:98%" value="<%=c_seo_description%>" class="AXInput" /></td>
	</tr>
	<!-- //SEO 적용시 -->
	<%End If%>

	<%If k_spamcode=True Then%>
	<tr>
		<th>자동등록방지</th>
		<td class="left">
		<img src="/site/api/captcha/captcha.asp" id="imgCaptcha" class="vmiddle" /> <i class="xi-refresh" onclick="RefreshImage('imgCaptcha');"></i>
		<input type="text" name="txtCaptcha" id="txtCaptcha" value="" class="AXInput vmiddle" style="width:118px" maxlength="5" autocomplete="off" placeholder="코드를 입력하세요" /><br /></td>
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
	if(obj.name.value==""){ alert('이름을 입력하세요'); obj.name.focus(); return; }
	if(obj.pw.value==""){ alert('비밀번호를 입력하세요'); obj.pw.focus(); return; }
	if(obj.title.value==""){ alert('제목을 입력하세요'); obj.title.focus(); return; }

	var regex=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/;	  
	if(regex.test(obj.email.value) === false) {  
	    alert("잘못된 이메일 형식입니다.");  
	    return;
	}
	obj.submit();
}
</script>