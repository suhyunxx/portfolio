<%@CodePage = 65001%>
<!DOCTYPE HTML>
<html lang="ko">
<head>
<!-- #include virtual="/site/manage/inc/head.asp" -->
</head>

<%
pa_idx = Request("pa_idx")

Set Rs = Server.Createobject("ADODB.Recordset")
Sql = "SELECT * FROM tbl_poll_adv WHERE idx='" & pa_idx & "' "
Rs.Open Sql, Dbcon, 1
If Rs.EOF=False Then
	pa_title=Rs("pa_title")
	pa_sdate=Rs("pa_sdate")
	pa_edate=Rs("pa_edate")
	pa_bigo=Rs("pa_bigo")
	pa_prize=Rs("pa_prize")
	hide=Rs("hide")
Else
	Response.End
End If
Rs.Close

Sql = "SELECT COUNT(DISTINCT m_id) m_id_count FROM tbl_poll_adv_a WHERE pa_idx='" & pa_idx & "' "
Rs.Open Sql, Dbcon, 1
If Rs.EOF=False Then
	m_id_count=Rs("m_id_count")
End If
Rs.Close
Set Rs = Nothing
%>

<body style="background-color:#fff">
<!-- location -->
<div class="location">
	<p>설문지 통계</p>
	<ul>
		<li>Home <span>&gt;</span></li>
		<li>설문지 통계</li>
	</ul>
</div>
<!-- //location -->

<!-- contents --><!-- ---------------------------------------------------------------------------------------------- -->
<div class="contents">

	<form name="regform" method="post" action="poll-adv-stat-ok.asp?pa_idx=<%=pa_idx%>">

		<div class="tb_list">
			<h4>설문지 통계<span style="float:right">참여 : <%=m_id_count%>명</span></h4>

			<table>
				<colgroup>
					<col width="50px" />
					<col width="" />
					<col width="190px" />
				</colgroup>
				<tr>
					<th class="bdr">번호</th>
					<th class="bdr">문항 제목</th>
					<th class="bdr">문항 유형</th>
				</tr>
				<%
				ReDim paq_a(10), p_item(10), p_count(10)

				Set Rs = Server.Createobject("ADODB.Recordset")
				Sql = "SELECT * FROM tbl_poll_adv_q "
				Sql = Sql & " WHERE pa_idx='" & pa_idx & "' "
				Sql = Sql & " ORDER BY idx ASC"
				Rs.Open Sql, Dbcon, 1
				num=1
				If Rs.EOF=False Then
					Do Until Rs.EOF
						paq_idx = Rs("idx")
						paq_title = Rs("paq_title")
						paq_type = Rs("paq_type")
						For item_no=1 To 9
							paq_a(item_no-1)=Rs("paq_a" & item_no)
						Next
						paq_etc=Rs("paq_etc")
						paq_stat=Rs("paq_stat")
						%>
							<tr style="background:#f3f3f3">
								<td class="bdr bdt"><%=num%></td>
								<td class="bdr bdt tit"><%=paq_title%></td>
								<td class="bdr bdt"><%=paq_type%></td>
							</tr>
						<%
						If paq_type="단일선택형" Then
							max_count=0
							t_count=0
							Set Rs1 = Server.Createobject("ADODB.Recordset")
							For item_no=1 To 9
								If paq_a(item_no-1)<>"" Then
									Sql1 = "SELECT COUNT(*) p_count FROM tbl_poll_adv_a "
									Sql1 = Sql1 & " WHERE pa_idx='" & pa_idx & "' AND pa_no='" & num & "' AND paa_a='" & item_no & "' "
									Rs1.Open Sql1, Dbcon, 1
									If Rs1.EOF=False Then
										Do Until Rs1.EOF			
											p_count(item_no-1)=Rs1("p_count")
											t_count = t_count+Rs1("p_count")
											If max_count<p_count(item_no-1) Then max_count=p_count(item_no-1)
											'Response.write item_no & ". " & paq_a(item_no-1) & " : " & Rs1("p_count") & "<br />"
											Rs1.Movenext
										Loop
									End If
									Rs1.Close
								End If
							Next
							Set Rs1 = Nothing
							
							For item_no=1 To 9
								If paq_a(item_no-1)<>"" Then
									If p_count(item_no-1)="" Then p_count(item_no-1)=0
									If max_count>0 Then
										width_perc = Fix((p_count(item_no-1)/max_count)*100)
									Else
										width_perc = 0
									End If
									If t_count>0 Then
										t_perc = Fix((p_count(item_no-1)/t_count)*100)
									End If
									%>
									<tr>
										<td rowspan="2" class="bdr bdt"></td>
										<td colspan="2" class="bdt tit"><%=item_no & ". " & paq_a(item_no-1)%></td>
									</tr>
									<tr>
										<td class="bdt"><div style="width:<%=width_perc%>%; height:16px; background-color:#d33"></div></td>
										<td class="bdt"><%=p_count(item_no-1)%>표 (<%=t_perc%>%)</td>
									</tr>
								<%
								End If
							Next


						ElseIf paq_type="복수선택형" Then
							max_count=0
							t_count=0
							Set Rs1 = Server.Createobject("ADODB.Recordset")
							For item_no=1 To 9
								If paq_a(item_no-1)<>"" Then
									Sql1 = "SELECT COUNT(*) p_count FROM tbl_poll_adv_a "
									Sql1 = Sql1 & " WHERE pa_idx='" & pa_idx & "' AND pa_no='" & num & "' AND paa_a LIKE ('%" & item_no & "%') "
									Rs1.Open Sql1, Dbcon, 1
									If Rs1.EOF=False Then
										Do Until Rs1.EOF			
											p_count(item_no-1)=Rs1("p_count")
											t_count = t_count+Rs1("p_count")
											If max_count<p_count(item_no-1) Then max_count=p_count(item_no-1)
											Rs1.Movenext
										Loop
									End If
									Rs1.Close
								End If
							Next
							Set Rs1 = Nothing

							For item_no=1 To 9
								If paq_a(item_no-1)<>"" Then
									If p_count(item_no-1)="" Then p_count(item_no-1)=0
									If max_count>0 Then
										width_perc = Fix((p_count(item_no-1)/max_count)*100)
									Else
										width_perc = 0
									End If
									If t_count>0 Then
										t_perc = Fix((p_count(item_no-1)/t_count)*100)
									End If
									%>
									<tr>
										<td rowspan="2" class="bdr bdt"></td>
										<td colspan="2" class="bdt tit"><%=item_no & ". " & paq_a(item_no-1)%></td>
									</tr>
									<tr>
										<td class="bdt"><div style="width:<%=width_perc%>%; height:16px; background-color:#35a"></div></td>
										<td class="bdt"><%=p_count(item_no-1)%>표 (<%=t_perc%>%)</td>
									</tr>
								<%
								End If
							Next


						Else
						%>
							<tr>
								<td class="bdr bdt"></td>
								<td colspan="2" class="bdr bdt">
								<input type="hidden" name="idx" value="<%=paq_idx%>" />
								<textarea name="paq_stat" style="width:95%; height:100px"><%=paq_stat%></textarea></td>
							</tr>
						<%
						End If
						num=num+1
						Rs.MoveNext
					Loop
				Else
				%>
					<tr>
						<td colspan="4" class="bdr bdt">설문문항이 존재하지 않습니다.</td>
					</tr>
				<%
				End If
				Rs.Close
				Set Rs = Nothing%>
			</table>
		</div>

		<!-- btn_left_right -->
		<div class="btn_left_right">
			<p class="right">
				<span><input type="submit" value="   확인   " class="AXButton" style="color:#fff;background:#1e73e7;border:1px solid #1e73e7"></span>
				<span><input type="button" value="   닫기   " class="AXButton" onclick="window.close()"></span>
			</p>
		</div>
		<!-- //btn_left_right -->


	</form>

</div>
<!-- //contents --><!-- ---------------------------------------------------------------------------------------------- -->
</body>

</html>