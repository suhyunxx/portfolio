<%@CodePage = 65001%>
<!--#include virtual="/site/setting.asp"-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--#include virtual="/site/manage/inc/auth-chk.asp"-->
<%
pa_idx = Request("pa_idx")
idx = Split(Request("idx"), ", ")
paq_stat = Split(Request("paq_stat"), ", ")

Sql=""
For i=0 To UBound(idx)
	Sql = Sql & "UPDATE tbl_poll_adv_q SET "
	Sql = Sql & "paq_stat=N'" & InsertText(paq_stat(i)) & "' "
	Sql = Sql & " WHERE idx='" & idx(i) & "' "
Next

'response.write Sql
Dbcon.Execute Sql

Response.Write "<script>alert('수정 되었습니다.'); opener.location.reload(); window.close();</script>"

%>