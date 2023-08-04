<%@CodePage = 65001%>
<!DOCTYPE HTML>
<html lang="ko">
<head>
<!-- #include virtual="/site/manage/inc/head.asp" -->
<script type="text/javascript">
$( function() {
	$("#pa_sdate").datepicker({dateFormat: 'yy-mm-dd'});
	$("#pa_edate").datepicker({dateFormat: 'yy-mm-dd'});
});
</script>
<!-- 스마트에디터2 -->
<script type="text/javascript" src="/site/api/smarteditor2/js/HuskyEZCreator.js" charset="utf-8"></script>
</head>

<%
idx = Request("idx")
mode = Request("mode")
If mode="" Then mode="reg"

page = Request("page")

pLink = "s_keyword=" & s_keyword

If mode="mod" Then
	Set Rs = Server.Createobject("ADODB.Recordset")
	Sql = "SELECT * FROM tbl_poll_adv WHERE idx='" & idx & "' "
	Rs.Open Sql, Dbcon, 1
	If Rs.EOF=False Then
		pa_title=Rs("pa_title")
		pa_sdate=Rs("pa_sdate")
		pa_edate=Rs("pa_edate")
		pa_bigo=Rs("pa_bigo")
		pa_prize=Rs("pa_prize")
		pa_stat_view=Rs("pa_stat_view")
		hide=Rs("hide")
	End If
	Rs.Close
	Set Rs = Nothing
End If
%>

<!-- header -->
<!-- #include virtual="/site/manage/inc/header.asp" -->

<!-- location -->
<div class="location">
	<p>설문지 관리</p>
	<ul>
		<li>Home <span>&gt;</span></li>
		<li>설문지 관리</li>
	</ul>
</div>
<!-- //location -->

<!-- contents --><!-- ---------------------------------------------------------------------------------------------- -->
<div class="contents">

	<form name="regform" method="post" action="poll-adv-reg-ok.asp?mode=<%=mode%>&idx=<%=idx%>&<%=pLink%>" onsubmit="return RegChk(this)">

		<div class="tb_info">
			<h4>설문지 기본 정보</h4>
			<table>
				<caption>설문지 기본 정보</caption>
				<colgroup>
					<col width="15%" />
					<col width="" />
				</colgroup>
				<tr>
					<th class="title bdr bdt"><span class="icon">표시여부</span></th>
					<td class="bdt">
					<select name="hide" id="hide" class="AXSelect" onchange="SetViewItem()">
						<option value="숨김" <%If hide="숨김" Then Response.Write "selected"%> /> 숨김</option>
						<option value="표시" <%If hide="표시" Then Response.Write "selected"%> /> 표시</option>
					</select></td>
				</tr>
				<tr>
					<th class="title bdr bdt"><span class="icon">설문지 제목</span></th>
					<td class="bdt"><input type="text" name="pa_title" class="AXInput" value="<%=pa_title%>" style="width:70%" /></td>
				</tr>
				<tr>
					<th class="title bdr bdt"><span class="icon">투표기간</span></th>
					<td class="bdt">
					<div class="inlineBlock"><input type="text" name="pa_sdate" id="pa_sdate" value="<%=pa_sdate%>" class="AXInput W90" /></div> ~
					<div class="inlineBlock"><input type="text" name="pa_edate" id="pa_edate" value="<%=pa_edate%>" class="AXInput W90" /></div></td>
				</tr>
				<tr>
					<th class="title bdr bdt"><span class="icon">결과 노출</span></th>
					<td class="bdt">
					<label><input type="checkbox" name="pa_stat_view" value="1" <%If pa_stat_view=True Then Response.Write "checked"%>> 결과에 대한 통계를 노출합니다. (단, 투표기간 마감 이후 적용)</label></td>
				</tr>
				<tr>
					<th class="title bdr bdt"><span class="icon">비고</span></th>
					<td class="bdt"><textarea name="pa_bigo" class="AXInput" style="width:70%; height:80px" ><%=pa_bigo%></textarea></td>
				</tr>
				<tr>
					<th class="title bdr bdt"><span class="icon">응모자 엑셀 다운로드</span></th>
					<td class="bdt">
					<%
						Set Rs1 = Server.Createobject("ADODB.Recordset")
						Sql = "SELECT COUNT(DISTINCT m_id) m_id_count FROM tbl_poll_adv_a WHERE pa_idx='" & idx & "' "
						Rs1.Open Sql, Dbcon, 1
							m_count = Rs1(0)
						Rs1.Close
						Set Rs1 = Nothing

						For n=1 To m_count Step 100
							%>
							<span><input type="button" value="<%=n & "~" & n+99%>" class="AXButtonSmall" onclick="location.href='poll-adv-excel1.asp?p_idx=<%=idx%>&topnum=<%=n-1%>'"></span>
							<%
						Next
					%>
					</td>
				</tr>
			</table>
		</div>

		<!-- btn_left_right -->
		<div class="btn_left_right">
			<p class="left">
				<span><input type="button" value="   목록   " class="AXButton" style="color:#fff;background:#1e73e7;border:1px solid #1e73e7" onclick="location.href='poll-adv.asp'"></span>
			</p>
			<p class="right">
				<span><input type="submit" value="   확인   " class="AXButton" style="color:#fff;background:#1e73e7;border:1px solid #1e73e7"></span>
				<span><input type="button" value="   취소   " class="AXButton" onclick="history.back()"></span>
			</p>
		</div>
		<!-- //btn_left_right -->

	</form>

	<br />
	<br />

	<%If mode="mod" Then%>

	<div class="tb_list">
		<h4>설문 문항 관리</h4>

		<table>
			<colgroup>
				<col width="50px" />
				<col width="50px" />
				<col width="" />
				<col width="190px" />
				<col width="190px" />
			</colgroup>
			<tr>
				<th class="bdr">번호</th>
				<th class="bdr">필수</th>
				<th class="bdr">문항 제목</th>
				<th class="bdr">문항 유형</th>
				<th>관리</th>
			</tr>
			<%
			Set Rs = Server.Createobject("ADODB.Recordset")
			Sql = "SELECT * FROM tbl_poll_adv_q "
			Sql = Sql & " WHERE pa_idx='" & idx & "' "
			Sql = Sql & " ORDER BY idx ASC"
			Rs.Open Sql, Dbcon, 1
			num=1
			If Rs.EOF=False Then
				Do Until Rs.EOF
					paq_idx = Rs("idx")
					paq_title = Rs("paq_title")
					paq_type = Rs("paq_type")
					paq_req = Rs("paq_req")
					%>
					<tr>
						<td class="bdr bdt"><%=num%></td>
						<td class="bdr bdt"><%If paq_req=True Then Response.Write "*"%></td>
						<td class="bdr bdt tit"><%=paq_title%></td>
						<td class="bdr bdt"><%=paq_type%></td>
						<td class="bdt">
						<input type="button" value=" 수정 " class="AXButtonSmall" style="background:#7b88cb; color:#fff; border:1px solid #7b88cb" onclick="open('poll-adv-add.asp?mode=mod&pa_idx=<%=idx%>&idx=<%=paq_idx%>', 'pop2', 'width=700px, height=700px')">
						<input type="button" value=" 삭제 " class="AXButtonSmall" style="background:#cbac7b; color:#fff; border:1px solid #cbac7b" onclick="if(confirm('문항을 삭제 하시겠습니까?')){ location.href='poll-adv-reg-ok.asp?mode=del&idx=<%=idx%>&<%=pLink%>' }">
						</td>
					</tr>
					<%
					num=num+1
					cnt=cnt+1
					Rs.MoveNext
				Loop
			Else
			%>
				<tr>
					<td colspan="5" class="bdr bdt">설문문항이 존재하지 않습니다.</td>
				</tr>
			<%
			End If
			Rs.Close
			Set Rs = Nothing%>
		</table>


		<div class="btn_left_right">
			<p class="right">
				<span><input type="button" value="문항추가" class="AXButton" style="color:#fff;background:#1e73e7;border:1px solid #1e73e7" onclick="open('poll-adv-add.asp?pa_idx=<%=idx%>', 'pop2', 'width=700px, height=700px')"></span>
				<span><input type="button" value="   통계   " class="AXButton Green" onclick="open('poll-adv-stat.asp?pa_idx=<%=idx%>', 'pop2', 'width=700px, height=700px, scrollbars=yes')"></span>
			</p>
		</div>

		<%End If%>

	</div>

</div>
<!-- //contents --><!-- ---------------------------------------------------------------------------------------------- -->

<script type="text/javascript">
//게시물 쓰기 유효성 체크
function RegChk(obj){
	if(obj.pa_title.value==""){ alert('제목을 입력하세요'); obj.pa_title.focus(); return false; }
	if(obj.pa_srdate.value==""){ alert('투표기간을 입력하세요'); obj.pa_srdate.focus(); return false; }
	if(obj.pa_erdate.value==""){ alert('투표기간을 입력하세요'); obj.pa_erdate.focus(); return false; }
}
</script>

<!-- #include virtual="/site/manage/inc/footer.asp" -->