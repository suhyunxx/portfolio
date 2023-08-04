<%@CodePage = 65001%>
<!--#include virtual="/site/setting.asp"-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--#include virtual="/site/manage/inc/auth-chk.asp"-->
<%
mode = Request("mode")
idx = Request("idx")

pLink = "s_keyword=" & s_keyword

'등록
If mode="reg" Then

	hide=Request("hide")
	pa_title=InsertText(Request("pa_title"))
	pa_bigo=InsertText(Request("pa_bigo"))
	pa_sdate=InsertText(Request("pa_sdate"))
	pa_edate=InsertText(Request("pa_edate"))
	pa_stat_view=Request("pa_stat_view")

	'db쿼리
	Sql = "INSERT INTO tbl_poll_adv("
	Sql = Sql & "hide, "
	Sql = Sql & "pa_title, "
	Sql = Sql & "pa_bigo, "
	Sql = Sql & "pa_sdate, "
	Sql = Sql & "pa_edate, "
	Sql = Sql & "pa_stat_view) VALUES("
	Sql = Sql & "N'" & hide & "', "
	Sql = Sql & "N'" & pa_title & "', "
	Sql = Sql & "N'" & pa_bigo & "', "
	Sql = Sql & "N'" & pa_sdate & "', "
	Sql = Sql & "N'" & pa_edate & "', "
	Sql = Sql & "N'" & pa_stat_view & "')"
	'response.write Sql
	Dbcon.Execute Sql

	Set Rs = Server.Createobject("ADODB.Recordset")
	Sql = "SELECT TOP 1 idx FROM tbl_poll_adv ORDER BY idx DESC "
	Rs.Open Sql, Dbcon, 1
		idx=Rs(0)
	Rs.Close
	Set Rs = Nothing

	Response.Write "<script>alert('등록 되었습니다.'); location.href='poll-adv-reg.asp?mode=mod&idx=" & idx & "';</script>"


'수정
ElseIf mode="mod" Then

	hide=Request("hide")
	pa_title=InsertText(Request("pa_title"))
	pa_bigo=InsertText(Request("pa_bigo"))
	pa_sdate=InsertText(Request("pa_sdate"))
	pa_edate=InsertText(Request("pa_edate"))
	pa_stat_view=Request("pa_stat_view")

	'db쿼리
	Sql = "UPDATE tbl_poll_adv SET "
	Sql = Sql & "hide=N'" & hide & "', "
	Sql = Sql & "pa_title=N'" & pa_title & "', "
	Sql = Sql & "pa_bigo=N'" & pa_bigo & "', "
	Sql = Sql & "pa_sdate=N'" & pa_sdate & "', "
	Sql = Sql & "pa_edate=N'" & pa_edate & "', "
	Sql = Sql & "pa_stat_view=N'" & pa_stat_view & "' "
	Sql = Sql & " WHERE idx='" & idx & "' "
	'response.write Sql
	Dbcon.Execute Sql

	Response.Write "<script>alert('수정 되었습니다.'); location.href='poll-adv.asp?" & pLink & "&page=" & page & "';</script>"


'삭제
ElseIf mode="del" Then

	'db쿼리
	Sql = "DELETE FROM tbl_poll_adv WHERE idx='" & idx & "';" & Chr(10) & Chr(10)
	Sql = Sql & "DELETE FROM tbl_poll_adv_app WHERE p_idx='" & idx & "';"
	Dbcon.Execute Sql
	Response.Write "<script>alert('삭제 되었습니다.'); location.href='poll-adv.asp?" & pLink & "&page=" & page & "';</script>"


End If
%>