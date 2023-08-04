<%
'덧글
If k_comment=True Then

Set Rs = Server.CreateObject("ADODB.RecordSet")
Sql = "SELECT * FROM tbl_board_comment WHERE board_idx='" & bid & "' AND dat_idx='" & idx & "'"
Rs.Open Sql, Dbcon, 1

If Rs.EOF=False Then
	Rs_RecordCount = Rs.RecordCount
Else
	Rs_RecordCount = 0
End If
%>

<form name="regform" action="?mode=comment_reg_p&amp;<%=pLink%>&amp;idx=<%=idx%>&amp;page=<%=page%>" method="post" enctype="multipart/form-data">

<div class="ntb-tb-view-comment quick_start">
	<table width="<%=T_WIDTH%>" cellpadding="0" cellspacing="0" class="ntb-tb-view">
		<caption>게시판 덧글</caption>
		<colgroup>
			<col width="" />
			<col width="12%" />
		</colgroup>
		<thead>
			<tr>
				<th colspan="2" class="left r_none">관련 덧글 <span class="font_comcnt"><%=Rs_RecordCount%></span>개</th>
			</tr>
		</thead>
		<tbody>
		<%
		Do Until Rs.EOF
			bc_idx = Rs("idx")
			bc_mem_id = Rs("mem_id")
			bc_mem_name = Rs("mem_name")
			bc_content = Rs("content")
			bc_regdate = Rs("regdate")
			bc_ip = Rs("ip")%>
			<tr>
				<td class="left b_none">
				<%'이름
				If bc_mem_id<>"" Then%>
					<span class="bold"><%=TagText(bc_mem_name)%></span> (<%=bc_mem_id%>)
				<%Else%>
					<%=TagText(bc_mem_name)%>
				<%End If%>
				&nbsp;
				<span class="font_ip"><%=bc_regdate%>
				<%'IP주소 표시
				If W_LEVEL="1" Or W_LEVEL="2" Then Response.Write "("  & bc_ip & ") "%>
				</span>
				&nbsp;
				<%'일정 이내에 작성한 글에는 new 표시
				if DateDiff("h", bc_regdate, now())<k_newicon Then%>
				<img src="/site/images/board/icon_new.gif" class="vmiddle" alt="new" />
				<%End If%>
				</td>
				<td class="right b_none"><a href="?mode=comment_del_l&amp;<%=pLink%>&amp;idx=<%=idx%>&amp;com_idx=<%=bc_idx%>"><img src="/site/images/board/x.gif" class="vmiddle" alt="delete" /></a></td>
			</tr>
			<tr>
				<td class="content-area" colspan="2"><%=TagText(bc_content)%></td>
			</tr>
		<%Rs.MoveNext
		Loop
		Rs.Close
		Set Rs = Nothing

		'덧글 달기 권한 설정
		If CInt(a_comment)>=CInt(W_LEVEL) Then%>
			<tr>
				<td colspan="2" class="left b_none">
					<%If W_ID="" Then%>
						<span class="bold">이름</span> : <input type="text" name="name" size="15" maxlength="15" class="inp" />
					<%Else%>
						<span class="bold"><%=W_NAME%></span> (<%=W_ID%>)
						<input type="hidden" name="name" value="<%=W_NAME%>" />
					<%End If%>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<%If W_ID="" Then%>
						<span class="bold">비밀번호</span> : <input type="password" name="pw" size="15" maxlength="15" class="inp" />
					<%Else%>
						<input type="hidden" name="pw" value="<%=W_PW%>" />
					<%End If%>
				</td>
			</tr>
			<tr>
				<td colspan="2" class="left b_none"><textarea style="width:99%; height:75px; margin:0" cols="" rows="" name="content" class="AXInput"></textarea></td>
			</tr>
			<tr>
				<td class="left">
				<%If k_spamcode=True Then%>
					<img src="/site/api/captcha/captcha.asp" id="imgCaptcha" class="vmiddle" /> <i class="xi-refresh" onclick="RefreshImage('imgCaptcha');"></i>
					<input type="text" name="txtCaptcha" id="txtCaptcha" value="" class="AXInput vmiddle" style="width:118px" maxlength="5" placeholder="코드를 입력하세요" />
				<%End If%>
				</td>
				<td class="right"><input type="button" value="   덧글 쓰기   " class="AXButton" onclick="BoardCommentRegChk()"></td>
			</tr>
		<%End If%>
		</tbody>
	</table>
</div>

</form>
<%End If%>

<script type="text/javascript">
//덧글 쓰기 체크
function BoardCommentRegChk(){
	var obj = document.regform
	if(obj.name.value==""){ alert('이름을 입력하세요'); obj.name.focus(); return; }
	if(obj.pw.value==""){ alert('비밀번호를 입력하세요'); obj.pw.focus(); return;	}
	if(obj.content.value==""){ alert('내용을 입력하세요'); obj.content.focus(); return; }
	<%If k_spamcode=True Then%>
	if(obj.txtCaptcha.value==""){ alert('자동등록방지 코드를 입력하세요'); obj.txtCaptcha.focus(); return; }
	<%End If%>
	obj.submit();		
}
</script>