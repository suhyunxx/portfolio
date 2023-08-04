<%@CodePage = 65001%>
<!DOCTYPE HTML>
<html lang="ko">
<head>
<!-- #include virtual="/site/manage/inc/head.asp" -->
</head>

<!-- header -->
<!-- #include virtual="/site/manage/inc/header.asp" -->

<section id="contents">
	
	<div class="title_box">
		<h3 class="title">탈퇴 회원</h3>
		<div class="location">
			<i class="xi-home"></i> <span>회원 관리</span> <strong>탈퇴 회원</strong>
		</dl>
	</div>
	
	<div id="sub-cont">
	
		<div class="box-type ani-box0 ani">
			<div class="box">
				<div class="sub-cont">

				<script>
				$( function() {
					$("#s_srdate").datepicker({dateFormat: 'yy-mm-dd'});
					$("#s_erdate").datepicker({dateFormat: 'yy-mm-dd'});
				});
				</script>
				<%
				s_keyword = Request("s_keyword")
				s_srdate = Request("s_srdate")
				s_erdate = Request("s_erdate")

				page = Request("page")
				If page="" Then page=1

				If InStr(s_keyword,"'")<>0 Or InStr(s_keyword,"%")<>0 Or InStr(s_keyword,",")<>0 Then
					Response.Write "<script>alert('사용할 수 없는 문자가 포함되어 있습니다.'); history.back();</script>"
					Response.End
				End If

				pLink = "s_keyword=" & s_keyword & "&s_srdate=" & s_srdate & "&s_erdate=" & s_erdate & "&s_mailing=" & s_mailing & "&s_sort=" & s_sort & "&s_align=" & s_align
				%>

				<form name="listform" method="post" action="?">

				<!-- tb_list -->
				<div class="tb_list">
					<h4>탈퇴 회원 리스트</h4>
					<table>
						<colgroup>
							<col width="10%" />
							<col width="" />
							<col width="" />
							<col width="" />
							<col width="" />
							<col width="10%" />
						</colgroup>
						<tr>
							<th class="bdr">번호</th>
							<th class="bdr">아이디</th>
							<th class="bdr">이름</th>
							<th class="bdr">가입일</th>
							<th class="bdr">탈퇴일</th>
							<th>관리</th>
						</tr>
						<%
						Set Rs = Server.Createobject("ADODB.Recordset")
						Sql = "SELECT * FROM tbl_member "
						Sql = Sql & " WHERE idx!='' AND m_out='1' "
						If s_keyword<>"" Then
							Sql = Sql & " AND (m_name LIKE '%" & s_keyword & "%' "
							Sql = Sql & " OR m_id LIKE '%" & s_keyword & "%') "
						End If

						If s_srdate<>"" And s_erdate<>"" Then
							Sql = Sql & "AND regdate BETWEEN '" & s_srdate & "' AND '" & DateAdd("d", 1, s_erdate) & "' "
						ElseIf s_srdate<>"" Then
							Sql = Sql & "AND regdate>'" & s_srdate & "' "
						ElseIf s_erdate<>"" Then
							Sql = Sql & "AND regdate<'" & DateAdd("d", 1, s_erdate) & "' "
						End If

						Sql = Sql & " ORDER BY wddate DESC"
						'Response.Write Sql
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
								m_id = Rs("m_id")
								m_lang = Rs("m_lang")
								m_lev = Rs("m_lev")
								m_sort = Rs("m_sort")
								m_name = Rs("m_name")
								m_email = Rs("m_email")
								m_mailing = Rs("m_mailing")
								m_cell1 = Rs("m_cell1")
								m_cell2 = Rs("m_cell2")
								m_cell3 = Rs("m_cell3")
								wddate = Rs("wddate")
								regdate = Rs("regdate")
								%>
								<tr>
									<td class="bdr bdt"><%=num%></td>
									<td class="bdr bdt"><%=m_id%></td>
									<td class="bdr bdt"><%=Left(m_name, 1)%>**</td>
									<td class="bdr bdt"><%=Left(regdate, 10)%></td>
									<td class="bdr bdt"><%=wddate%></td>
									<td class="bdt">
									<input type="button" value=" 삭제 " class="AXButtonSmall" style="background:#cbac7b; color:#fff; border:1px solid #cbac7b" onclick="if(confirm('삭제 하시겠습니까?')){ location.href='member-reg-ok.asp?mode=del_p&m_id=<%=m_id%>' }">
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
								<td colspan="6" class="bdr bdt">탈퇴 회원이 존재하지 않습니다.</td>
							</tr>
						<%
						End If
						Rs.Close
						Set Rs = Nothing%>
					</table>
				</div>
				<!-- tb_list -->

				</form>

				<!-- page -->
				<%Call pagelist("?" & pLink, CInt(page), 20, 10, Rs_RecordCount)%>
				<!-- //page -->


				</div>
			</div>
		</div>
	</div>
</section><!-- #include virtual="/site/manage/inc/footer.asp" -->