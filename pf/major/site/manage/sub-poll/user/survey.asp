<%
s_cate=Request("s_cate")
s_keyword = Request("s_keyword")

page = Request("page")
If page="" Then page=1

pLink = "s_keyword=" & s_keyword & "&s_cate=" & s_cate
%>

<table>
	<colgroup>
		<col width="12%">
		<col width="*">
		<col width="24%">
		<col width="15%">
	</colgroup>
	<tbody>
		<tr>
			<th>번호</th>	
			<th>제목</th>
			<th>설문기간</th>	
			<th>상태</th>
		</tr>
		<%
		Set Rs = Server.Createobject("ADODB.Recordset")
		Sql = "SELECT * FROM tbl_poll_adv "
		Sql = Sql & " WHERE idx!='' AND hide='표시' "
		Sql = Sql & " ORDER BY regdate DESC"
		Rs.Open Sql, Dbcon, 1

		'페이지 설정
		If Rs.EOF=False Then
			Rs.PageSize = 20
			Rs.AbsolutePage = page
			Rs_RecordCount = Rs.RecordCount
			If Rs_RecordCount Mod Rs.PageSize>0 Then
				maxpage = CInt(Rs_RecordCount/Rs.PageSize)+1
			Else
				maxpage = CInt(Rs_RecordCount/Rs.PageSize)
			End If
		End If

		If Rs.EOF=False Then
			cnt=0
			num = Rs.RecordCount-((page-1)*Rs.pagesize)-cnt
			Do Until Rs.EOF Or cnt>=Rs.pagesize
				idx = Rs("idx")
				pa_title = Rs("pa_title")
				pa_sdate = Rs("pa_sdate")
				pa_edate = Rs("pa_edate")
				pa_stat_view = Rs("pa_stat_view")
				hide = Rs("hide")
				regdate = Rs("regdate")
				%>
				<tr>
					<td><%=num%></td>
					<td class="tal">
					<%If Date()>=CDate(pa_sdate) And Date()<=CDate(pa_edate) Then%>
						<a href="survey_view.asp?idx=<%=idx%>">
					<%ElseIf Date()>CDate(pa_edate) Then%>
						<a href="javascript:alert('종료된 설문 입니다.');">
					<%End If%>
					<%=pa_title%></a></td>
					<td><%=pa_sdate & " ~ " & pa_edate%></td>
					<td>
					<%If Date()>=CDate(pa_sdate) And Date()<=CDate(pa_edate) Then%>
						<span class="progress">진행중</span>
					<%ElseIf Date()>=CDate(pa_edate) Then
						If pa_stat_view=True Then
						%>
						<span class="end" onclick="open('survey_result.asp?pa_idx=<%=idx%>', 'pop2', 'width=700px, height=700px, scrollbars=yes')" style="cursor:pointer">결과확인</span>
						<%
						Else
						%>
						<span class="end">종료</span>
						<%
						End If
					End If%>
					</td>
				</tr>
				<%
				num=num-1
				cnt=cnt+1
				Rs.MoveNext
			Loop
		Else
		%>
			<tr>
				<td colspan="4" class="bdr bdt">데이터가 존재하지 않습니다.</td>
			</tr>
		<%
		End If
		Rs.Close
		Set Rs = Nothing%>
	</tbody>
</table>

<%Call Pagelist("?mode=list&" & pLink, CInt(page), 20, 5, Rs_RecordCount)%>