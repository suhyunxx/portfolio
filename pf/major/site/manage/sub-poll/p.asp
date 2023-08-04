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
Sql = "SELECT A.m_id"
For n=1 To q_count
	Sql = Sql & ", (SELECT paa_a FROM tbl_poll_adv_a A" & n & " WHERE pa_idx='" & p_idx & "' AND pa_no='" & n & "' AND A.m_id=A" & n & ".m_id) AS AA" & n & " "
	Sql = Sql & ", (SELECT paa_etc FROM tbl_poll_adv_a A" & n & " WHERE pa_idx='" & p_idx & "' AND pa_no='" & n & "' AND A.m_id=A" & n & ".m_id) AS AAE" & n & " "
Next
Sql = Sql & " FROM tbl_poll_adv_a A "
Sql = Sql & " WHERE A.pa_idx='" & p_idx & "' "
Sql = Sql & " GROUP BY A.m_id "
'Response.Write Sql
Rs.Open Sql, Dbcon, 1
Do Until Rs.EOF
	m_id = Rs("m_id")
	%>
	<tr>
		<td class="xl2225652"><%=m_id%></td>
		<%
		For n=1 To q_count
		%>
		<td class="xl2225652"><%=Rs("AA" & n)%></td>
		<td class="xl2225652"><%=Rs("AAE" & n)%></td>
		<%
		Next
		%>
	</tr>
	<%
	Rs.MoveNext
Loop
Rs.Close
Set Rs = Nothing%>
</table>