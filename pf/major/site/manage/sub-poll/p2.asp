<%@CodePage = 65001%>
<!--#include virtual="/site/common/dbconn.asp"-->
<!--#include virtual="/site/common/function.asp"-->
<!DOCTYPE HTML>
<html lang="ko">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
.xl2225652{
	mso-ignore:padding;
	mso-generic-font-family:auto;
	mso-font-charset:129;
	mso-number-format:"\@";
	mso-background-source:auto;
	mso-pattern:auto;
}
.tblhead1{
	background-color:#F3EEF3
}
.tblhead2{
	background-color:#F3EEF3
}
</style>
</head>
<%
'Response.CacheControl = "public" 
'Response.ContentType = "application/vnd.ms-excel"
'Response.AddHeader "Content-disposition","attachment;filename=POLL_" & Date() & ".xls"

p_idx = Request("p_idx")

Set Rs = Server.Createobject("ADODB.Recordset")
Sql = "SELECT COUNT(*) FROM tbl_poll_adv_q "
Sql = Sql & " WHERE pa_idx='" & p_idx & "' "
Rs.Open Sql, Dbcon, 1
	q_count = Rs(0)
Rs.Close
%>

<table>
<tr>
	<th class="tblhead1">PK</th>
	<%
	For n=1 To q_count
	%>
	<th class="tblhead1">문항<%=n%></th>
	<th class="tblhead1">기타</th>
	<%
	Next
	%>
</tr>
<%
'Sql = "SELECT  A.m_id"
Sql = "SELECT paa_a FROM tbl_poll_adv_a A WHERE pa_idx='" & p_idx & "' "
Response.Write Sql
Rs.Open Sql, Dbcon, 1
Do Until Rs.EOF
	%>
	<tr>
		<td class="xl2225652"><%=Rs("paa_a")%></td>
	</tr>
	<%
	Rs.MoveNext
Loop
Rs.Close
Set Rs = Nothing%>
</table>