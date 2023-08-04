<%@CodePage = 65001%>
<!--#include virtual="/site/setting.asp"-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<%
idx = Request("idx")
last_num = Request("last_num")

'로그인 체크
If W_ID="" Then 
	Response.Write "<script>alert('로그인이 필요합니다.'); history.back();</script>"
	Response.End
End If

'투표기간 체크
Set Rs = Server.Createobject("ADODB.Recordset")
Sql = "SELECT * FROM tbl_poll_adv WHERE idx='" & idx & "' "
Rs.Open Sql, Dbcon, 1
If Rs.EOF=False Then
	pa_edate=Rs("pa_edate")
	If Date()>CDate(pa_edate) Then
		Response.Write "<script>alert('종료된 설문 입니다.'); history.back();</script>"
		Response.End
	End If
Else
	Response.End
End If
Rs.Close
Set Rs = Nothing


'u_key = Right(Year(Now()) & Month(Now()) & Day(Now()) & Hour(Now()) & Minute(Now()) & Second(Now()) & Session.SessionID(), 30)
u_key = W_ID

'중복 투표 체크
Set Rs = Server.Createobject("ADODB.Recordset")
Sql = "SELECT * FROM tbl_poll_adv_a WHERE pa_idx='" & idx & "' AND m_id='" & u_key & "' "
Rs.Open Sql, Dbcon, 1
If Rs.EOF=False Then
	Response.Write "<script>alert('이미 참여 하셨습니다.'); history.back();</script>"
	Response.End
End If
Rs.Close
Set Rs = Nothing

ReDim a(100), a_etc(100)
For i=0 To last_num-1	
	a(i) = Request("a" & i+1)
	a_etc(i) = Request("a_etc" & i+1)
	'If a(i)="" Then Exit For
Next

'db쿼리
Sql = ""
For j=0 To i-1
	Sql = Sql & "INSERT INTO tbl_poll_adv_a("
	Sql = Sql & "pa_idx, "
	Sql = Sql & "pa_no, "
	Sql = Sql & "m_id, "
	Sql = Sql & "m_ip, "
	If a(j)="9" Then Sql = Sql & "paa_etc, "
	Sql = Sql & "paa_a) VALUES("
	Sql = Sql & "N'" & idx & "', "
	Sql = Sql & "N'" & j+1 & "', "
	Sql = Sql & "N'" & u_key & "', "
	Sql = Sql & "N'" & Request.ServerVariables("REMOTE_ADDR") & "', "
	If a(j)="9" Then Sql = Sql & "N'" & a_etc(j) & "', "
	Sql = Sql & "N'" & a(j) & "');" & Chr(13) & Chr(10)
Next
'response.write Sql
Dbcon.Execute Sql

Response.Write "<script>alert('설문에 참여해 주셔서 감사합니다.'); location.href='survey.asp';</script>"

%>