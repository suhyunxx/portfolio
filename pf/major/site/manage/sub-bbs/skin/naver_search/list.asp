<%
'네이버 검색 API 연동키
clientId = "OejKNaB3byzxacqFo3ej"
clientSecret = "WnN5d91Aof"
s_keyword = "웹모아"

page = Request("page")
If page="" Then page=1
s_start = ((page-1)*10)+1

If page>100 Then
	Response.Write "<script>alert('1,000건까지 열람 가능합니다.'); history.back();</script>"
	Response.End
End If

QueryString = "?query=" & Server.URLEncode(s_keyword)
QueryString = QueryString & "&display=10"
QueryString = QueryString & "&sort=date"
QueryString = QueryString & "&start=" & s_start

Set Xh = server.CreateObject("Msxml2.ServerXMLHTTP.3.0")
Xhurl = "https://openapi.naver.com/v1/search/news.xml" & QueryString
Xh.open "GET", Xhurl, False
Xh.setRequestHeader "Content-Type", "application/x-www-form-urlencoded"
Xh.setRequestHeader "X-Naver-Client-Id", clientId
Xh.setRequestHeader "X-Naver-Client-Secret", clientSecret
Xh.send
strResponseText = Xh.responseText
Set Xh = Nothing

'Response.write strResponseText

Set Xhd = Server.CreateObject("Microsoft.XMLDOM")
Xhd.async = false
Xhd.loadXML(strResponseText)

total = Xhd.getElementsByTagName("total").Item(0).Text
'Response.write total
%>

<!-- tb_list -->
<div class="tb_list">
	<h4>[<%=s_keyword%>] 키워드 검색</h4>
	<table>
		<colgroup>
			<col width="60px" />
			<col width="" />
			<col width="250px" />
			<col width="160px" />
		</colgroup>
		<tr>
			<th class="bdr">번호</th>
			<th class="bdr">제목</th>
			<th class="bdr">등록일</th>
			<th>현재 상태</th>
		</tr>
		<%
		Set Itms = Xhd.getElementsByTagName("item")
		cnt=0
		num = total-((page-1)*10)-cnt
		For i=0 To Itms.Length-1
			title = Itms(i).childnodes(0).text
			url = Itms(i).childnodes(2).text
			description = Itms(i).childnodes(3).text
			ar_pubdate = Split(Itms(i).childnodes(4).Text, " ")
			pubdate = ar_pubdate(3) & "-" & MonthEn2Nu(ar_pubdate(2)) & "-" & ar_pubdate(1) & " " & ar_pubdate(4)
			%>
			<tr>
				<td class="bdr bdt"><%=num%></td>
				<td class="bdr bdt tit">
					<a href="<%=url%>" target="_blank">
						<%=title%><br />
						<span class="txt_small"><%=description%></span><br />
						<span class="txt_small" style="color:#0084da"><%=url%></span>
					</a>
				</td>
				<td class="bdr bdt"><%=pubdate%></td>
				<td class="bdt">
				<%
				Set Rs = Server.Createobject("ADODB.Recordset")
				Sql = "SELECT TOP 1 num FROM tbl_board_data WHERE board_idx='" & bid & "' AND mem_url=N'" & url & "'"
				Rs.Open Sql, DbCon, 1
				If Rs.EOF=True Then
				%>
					<input type="button" value=" 노출 " class="AXButtonSmall" onclick="RunReg('<%=Escape(title)%>', '<%=Escape(url)%>', '<%=Escape(description)%>', '<%=pubdate%>')">
					<input type="button" value="미노출" class="AXButtonSmall" style="background:#cb7b9b; color:#fff; border:0" >
				<%Else%>
					<input type="button" value=" 노출 " class="AXButtonSmall" style="background:#cb7b9b; color:#fff; border:0" >
					<input type="button" value="미노출" class="AXButtonSmall" onclick="RunDel('<%=url%>')">
				<%
				End If
				Rs.Close
				Set Rs = Nothing
				%>
				</td>
			</tr>
			<%
			num=num-1
			cnt=cnt+1
		Next
		Set Itms = Nothing
		%>
	</table>
</div>

<form name="regform" method="post" action="skin/naver_search/reg_ok.asp" >
	<input type="hidden" name="mode" value="" />
	<input type="hidden" name="bid" value="<%=bid%>" />
	<input type="hidden" name="page" value="<%=page%>" />
	<input type="hidden" name="mem_id" value="<%=W_ID%>" />
	<input type="hidden" name="mem_name" value="<%=W_NAME%>" />
	<input type="hidden" name="mem_pw" value="<%=W_PW%>" />
	<input type="hidden" name="mem_email" value="<%=W_EMAIL%>" />
	<input type="hidden" name="title" value="" />
	<input type="hidden" name="mem_url" value="" />
	<input type="hidden" name="content" value="" />
	<input type="hidden" name="regdate" value="" />
</form>

<script type="text/javascript">
function RunReg(title, mem_url, content, regdate){
	$("input[name=mode]").val("reg");
	$("input[name=title]").val(title);
	$("input[name=mem_url]").val(mem_url);
	$("input[name=content]").val(content);
	$("input[name=regdate]").val(regdate);
	document.regform.submit();
}
function RunDel(mem_url){
	$("input[name=mode]").val("del");
	$("input[name=mem_url]").val(mem_url);
	document.regform.submit();
}
</script>

<!--페이징-->
<%Call Pagelist("?bid=" & bid & "&mode=list", CInt(page), 10, 5, total)%>

<%
Set Xhd = Nothing

Function MonthEn2Nu(str)
	Select Case str
		Case "Jan"
			str_ = 1
		Case "Feb"
			str_ = 2
		Case "Mar"
			str_ = 3
		Case "Apr"
			str_ = 4
		Case "May"
			str_ = 5
		Case "Jun"
			str_ = 6
		Case "Jul"
			str_ = 7
		Case "Aug"
			str_ = 8
		Case "Sep"
			str_ = 9
		Case "Oct"
			str_ = 10
		Case "Nov"
			str_ = 11
		Case "Dec"
			str_ = 12
	End Select
	MonthEn2Nu = str_
End Function
%>
