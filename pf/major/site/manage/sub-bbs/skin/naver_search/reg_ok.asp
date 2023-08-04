<%@CodePage = 65001%>
<%
Response.CharSet="utf-8"
Session.codepage="65001"
Response.codepage="65001"
Response.ContentType="text/html;charset=utf-8"
%>
<!--#include virtual="/site/setting.asp"-->
<!--#include virtual="/site/manage/inc/auth-chk.asp"-->
<%
mode = Request("mode")
bid = Request("bid")
page = Request("page")
mem_id = Request("mem_id")
mem_name = Request("mem_name")
mem_pw = Request("mem_pw")
mem_email = Request("mem_email")
title = InsertText(Unescape(Request("title")))
mem_url = InsertText(Unescape(Request("mem_url")))
content = InsertText(Unescape(Request("content")))
regdate = Request("regdate")

If mode="reg" Then

	Set Rs = Server.Createobject("ADODB.Recordset")
	Sql = "SELECT TOP 1 num FROM tbl_board_data WHERE board_idx='" & bid & "' ORDER BY num DESC"
	Rs.Open Sql, DbCon, 1
	If Rs.EOF=True Then
		num=1
	Else
		num=CInt(Rs(0))+1
	End If
	Rs.Close
	Set Rs = Nothing

	Sql = "INSERT INTO tbl_board_data("
	Sql = Sql & "board_idx, "
	Sql = Sql & "num, "
	Sql = Sql & "p_num, "
	Sql = Sql & "r_num, "
	Sql = Sql & "d_num, "
	Sql = Sql & "mem_id, "
	Sql = Sql & "mem_name, "
	Sql = Sql & "mem_pw, "
	Sql = Sql & "mem_email, "
	Sql = Sql & "title, "
	Sql = Sql & "mem_url, "
	Sql = Sql & "content, "
	Sql = Sql & "regdate, "
	Sql = Sql & "ip) VALUES("
	Sql = Sql & "N'" & bid & "', "
	Sql = Sql & "'" & num & "',"
	Sql = Sql & "'" & num & "',"
	Sql = Sql & "'" & "0',"
	Sql = Sql & "'" & "0',"
	Sql = Sql & "N'" & mem_id & "', "
	Sql = Sql & "N'" & mem_name & "', "
	Sql = Sql & "N'" & AESEncrypt(mem_pw, "webmoa") & "', "
	Sql = Sql & "N'" & mem_email & "', "
	Sql = Sql & "N'" & title & "', "
	Sql = Sql & "N'" & mem_url & "', "
	Sql = Sql & "N'" & content & "', "
	Sql = Sql & "N'" & regdate & "', "
	Sql = Sql & "N'" & Request.ServerVariables("REMOTE_HOST") & "')"
	'Response.write Sql
	Dbcon.Execute Sql
	Response.Write "<script>alert('노출 처리되었습니다.'); location.href='" & Request.Servervariables("HTTP_REFERER") & "';</script>"


ElseIf mode="del" Then
	Sql = "DELETE FROM tbl_board_data WHERE board_idx='" & bid & "' AND mem_url='" & mem_url & "'"
	Dbcon.Execute Sql
	Response.Write "<script>alert('미노출 처리되었습니다.'); location.href='" & Request.Servervariables("HTTP_REFERER") & "';</script>"

End If

%>