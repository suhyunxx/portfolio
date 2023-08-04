<%@CodePage = 65001%>
<!--#include virtual="/site/setting.asp"-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--#include virtual="/site/manage/inc/auth-chk.asp"-->
<%
mode = Request("mode")
pa_idx = Request("pa_idx")
idx = Request("idx")

'등록
If mode="reg" Then

	paq_title=InsertText(Request("paq_title"))
	paq_type=InsertText(Request("paq_type"))
	paq_a1=InsertText(Request("paq_a1"))
	paq_a2=InsertText(Request("paq_a2"))
	paq_a3=InsertText(Request("paq_a3"))
	paq_a4=InsertText(Request("paq_a4"))
	paq_a5=InsertText(Request("paq_a5"))
	paq_a6=InsertText(Request("paq_a6"))
	paq_a7=InsertText(Request("paq_a7"))
	paq_a8=InsertText(Request("paq_a8"))
	paq_a9=InsertText(Request("paq_a9"))
	paq_a10=InsertText(Request("paq_a10"))
	paq_etc=InsertText(Request("paq_etc"))
	paq_text1=InsertText(Request("paq_text1"))
	paq_text2=InsertText(Request("paq_text2"))
	paq_req=InsertText(Request("paq_req"))

	'db쿼리
	Sql = "INSERT INTO tbl_poll_adv_q("
	Sql = Sql & "pa_idx, "
	Sql = Sql & "paq_title, "
	Sql = Sql & "paq_type, "
	Sql = Sql & "paq_a1, "
	Sql = Sql & "paq_a2, "
	Sql = Sql & "paq_a3, "
	Sql = Sql & "paq_a4, "
	Sql = Sql & "paq_a5, "
	Sql = Sql & "paq_a6, "
	Sql = Sql & "paq_a7, "
	Sql = Sql & "paq_a8, "
	Sql = Sql & "paq_a9, "
	Sql = Sql & "paq_a10, "
	Sql = Sql & "paq_etc, "
	Sql = Sql & "paq_text1, "
	Sql = Sql & "paq_text2, "
	Sql = Sql & "paq_req) VALUES("
	Sql = Sql & "N'" & pa_idx & "', "
	Sql = Sql & "N'" & paq_title & "', "
	Sql = Sql & "N'" & paq_type & "', "
	Sql = Sql & "N'" & paq_a1 & "', "
	Sql = Sql & "N'" & paq_a2 & "', "
	Sql = Sql & "N'" & paq_a3 & "', "
	Sql = Sql & "N'" & paq_a4 & "', "
	Sql = Sql & "N'" & paq_a5 & "', "
	Sql = Sql & "N'" & paq_a6 & "', "
	Sql = Sql & "N'" & paq_a7 & "', "
	Sql = Sql & "N'" & paq_a8 & "', "
	Sql = Sql & "N'" & paq_a9 & "', "
	Sql = Sql & "N'" & paq_a10 & "', "
	Sql = Sql & "N'" & paq_etc & "', "
	Sql = Sql & "N'" & paq_text1 & "', "
	Sql = Sql & "N'" & paq_text2 & "', "
	Sql = Sql & "N'" & paq_req & "')"
	'response.write Sql
	Dbcon.Execute Sql

	Response.Write "<script>alert('등록 되었습니다.'); opener.location.reload(); window.close();</script>"


'수정
ElseIf mode="mod" Then

	paq_title=InsertText(Request("paq_title"))
	paq_type=InsertText(Request("paq_type"))
	paq_a1=InsertText(Request("paq_a1"))
	paq_a2=InsertText(Request("paq_a2"))
	paq_a3=InsertText(Request("paq_a3"))
	paq_a4=InsertText(Request("paq_a4"))
	paq_a5=InsertText(Request("paq_a5"))
	paq_a6=InsertText(Request("paq_a6"))
	paq_a7=InsertText(Request("paq_a7"))
	paq_a8=InsertText(Request("paq_a8"))
	paq_a9=InsertText(Request("paq_a9"))
	paq_a10=InsertText(Request("paq_a10"))
	paq_etc=InsertText(Request("paq_etc"))
	paq_text1=InsertText(Request("paq_text1"))
	paq_text2=InsertText(Request("paq_text2"))
	paq_req=InsertText(Request("paq_req"))

	'db쿼리
	Sql = "UPDATE tbl_poll_adv_q SET "
	Sql = Sql & "paq_title=N'" & paq_title & "', "
	Sql = Sql & "paq_type=N'" & paq_type & "', "
	Sql = Sql & "paq_a1=N'" & paq_a1 & "', "
	Sql = Sql & "paq_a2=N'" & paq_a2 & "', "
	Sql = Sql & "paq_a3=N'" & paq_a3 & "', "
	Sql = Sql & "paq_a4=N'" & paq_a4 & "', "
	Sql = Sql & "paq_a5=N'" & paq_a5 & "', "
	Sql = Sql & "paq_a6=N'" & paq_a6 & "', "
	Sql = Sql & "paq_a7=N'" & paq_a7 & "', "
	Sql = Sql & "paq_a8=N'" & paq_a8 & "', "
	Sql = Sql & "paq_a9=N'" & paq_a9 & "', "
	Sql = Sql & "paq_a10=N'" & paq_a10 & "', "
	Sql = Sql & "paq_etc=N'" & paq_etc & "', " 
	Sql = Sql & "paq_text1=N'" & paq_text1 & "', " 
	Sql = Sql & "paq_text2=N'" & paq_text2 & "', " 
	Sql = Sql & "paq_req=N'" & paq_req & "' " 
	Sql = Sql & " WHERE idx='" & idx & "' "

	'response.write Sql
	Dbcon.Execute Sql

	Response.Write "<script>alert('수정 되었습니다.'); opener.location.reload(); window.close();</script>"


'삭제
ElseIf mode="del" Then

	'db쿼리
	Sql = "DELETE FROM tbl_poll_adv WHERE idx='" & idx & "';" & Chr(10) & Chr(10)
	Sql = Sql & "DELETE FROM tbl_poll_adv_app WHERE p_idx='" & idx & "';"
	Dbcon.Execute Sql
	Response.Write "<script>alert('삭제 되었습니다.'); location.href='poll-adv.asp?" & pLink & "&page=" & page & "';</script>"


End If
%>