<%
If W_ID="" Then
	Response.Write "<script>alert('회원 로그인 후 이용가능합니다.');location.href='/sub/etc/login.asp';</script>"
	Response.End
End If

idx = Request("idx")

Set Rs = Server.Createobject("ADODB.Recordset")
Sql = "SELECT * FROM tbl_poll_adv WHERE idx='" & idx & "' "
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
Set Rs = Nothing

If Date()>CDate(pa_edate) Then
	Response.Write "<script>alert('종료된 설문 입니다.'); history.back();</script>"
	Response.End
End If
%>

<form name="regform" method="post" action="survey_ok.asp?idx=<%=idx%>">
	<!-- survey_viewCont -->
	<div class="survey_viewCont">

		<ul class="survey_viewList">
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
				paq_a1=Rs("paq_a1")
				paq_a2=Rs("paq_a2")
				paq_a3=Rs("paq_a3")
				paq_a4=Rs("paq_a4")
				paq_a5=Rs("paq_a5")
				paq_a6=Rs("paq_a6")
				paq_a7=Rs("paq_a7")
				paq_a8=Rs("paq_a8")
				paq_a9=Rs("paq_a9")
				paq_a10=Rs("paq_a10")
				paq_etc=Rs("paq_etc")
				paq_text1=Rs("paq_text1")
				paq_text2=Rs("paq_text2")
				paq_req=Rs("paq_req")
				If paq_type="단일선택형" Or paq_type="복수선택형" Then
					If paq_type="단일선택형" Then
						seltype="type=""radio"" "
						If paq_req=True Then seltype=seltype & " required "
					ElseIf paq_type="복수선택형" Then
						seltype="type=""checkbox"""
					End If
					%>
					<li>
						<div style="margin-left:53px"><%=paq_text1%></div>
						<span class="questionNum1"><%=num%>.</span><p><%=paq_title%></p>
						<div style="margin-left:53px"><%=paq_text2%></div>
						<div class="distractor dist">
							<%If paq_a1<>"" Then%><label><input <%=seltype%> name="a<%=num%>" value="1" /> <%=paq_a1%></label><%End If%>
							<%If paq_a2<>"" Then%><label><input <%=seltype%> name="a<%=num%>" value="2" /> <%=paq_a2%></label><%End If%>
							<%If paq_a3<>"" Then%><label><input <%=seltype%> name="a<%=num%>" value="3" /> <%=paq_a3%></label><%End If%>
							<%If paq_a4<>"" Then%><label><input <%=seltype%> name="a<%=num%>" value="4" /> <%=paq_a4%></label><%End If%>
							<%If paq_a5<>"" Then%><label><input <%=seltype%> name="a<%=num%>" value="5" /> <%=paq_a5%></label><%End If%>
							<%If paq_a6<>"" Then%><label><input <%=seltype%> name="a<%=num%>" value="6" /> <%=paq_a6%></label><%End If%>
							<%If paq_a7<>"" Then%><label><input <%=seltype%> name="a<%=num%>" value="7" /> <%=paq_a7%></label><%End If%>
							<%If paq_a8<>"" Then%><label><input <%=seltype%> name="a<%=num%>" value="8" /> <%=paq_a8%></label><%End If%>
							<%If paq_a9<>"" Then%><label><input <%=seltype%> name="a<%=num%>" value="9" /> 기타<input type="text" name="a_etc<%=num%>"></label><%End If%>
						</div>
					</li>
				<%
				ElseIf paq_type="단답형" Then
				%>
					<li>
						<div style="margin-left:53px"><%=paq_text1%></div>
						<span class="questionNum1"><%=num%>.</span><p><%=paq_title%></p>
						<div style="margin-left:53px"><%=paq_text2%></div>
						<div class="distractor3 dist"><input type="text" name="a<%=num%>" <%If paq_req=True Then Response.Write "required"%> /></div>
					</li>
				<%
				ElseIf paq_type="서술형" Then
				%>
					<li>
						<div style="margin-left:53px"><%=paq_text1%></div>
						<span class="questionNum1"><%=num%>.</span><p><%=paq_title%></p>
						<div style="margin-left:53px"><%=paq_text2%></div>
						<div class="distractor3 dist"><textarea name="a<%=num%>" <%If paq_req=True Then Response.Write "required"%>></textarea></div>
					</li>
				<%
				End If
				num=num+1
				Rs.MoveNext
			Loop
		End If
		Rs.Close
		Set Rs = Nothing%>
		</ul>
	</div>
	<!-- //survey_viewCont -->
	<input type="hidden" name="last_num" value="<%=num-1%>" />

	<!-- lastBtn -->
	<div class="lastBtn btn">
		<input type="reset" value="취소">
		<input type="submit" class="b3" value="완료">
	</div>
	<!-- //lastBtn -->
</form>
