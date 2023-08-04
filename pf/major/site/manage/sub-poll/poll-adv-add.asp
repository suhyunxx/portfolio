<%@CodePage = 65001%>
<!DOCTYPE HTML>
<html lang="ko">
<head>
<!-- #include virtual="/site/manage/inc/head.asp" -->
</head>

<%
idx = Request("idx")
pa_idx = Request("pa_idx")
mode = Request("mode")
If mode="" Then mode="reg"

Set Rs = Server.Createobject("ADODB.Recordset")
Sql = "SELECT * FROM tbl_poll_adv_q WHERE idx='" & idx & "' "
Rs.Open Sql, Dbcon, 1
If Rs.EOF=False Then
	paq_title=Rs("paq_title")
	paq_type=Rs("paq_type")
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

End If
Rs.Close
Set Rs = Nothing

%>

<body style="background-color:#fff">
<!-- location -->
<div class="location">
	<p>문항 관리</p>
	<ul>
		<li>Home <span>&gt;</span></li>
		<li>문항 관리</li>
	</ul>
</div>
<!-- //location -->

<!-- contents --><!-- ---------------------------------------------------------------------------------------------- -->
<div class="contents">

	<form name="regform" method="post" action="poll-adv-add-ok.asp?mode=<%=mode%>&pa_idx=<%=pa_idx%>&idx=<%=idx%>" onsubmit="return RegChk(this)">

		<div class="tb_info">
			<h4>설문 문항 관리</h4>
			<table>
				<caption>설문 문항 관리</caption>
				<colgroup>
					<col width="20%" />
					<col width="" />
				</colgroup>
				<tr>
					<th class="title bdr bdt"><span class="icon">삽입 문구1</span></th>
					<td class="bdr bdt"><input type="text" name="paq_text1" class="AXInput" value="<%=paq_text1%>" style="width:90%" /></td>
				</tr>
				<tr>
					<th class="title bdr bdt"><span class="icon">문항 제목 *</span></th>
					<td class="bdr bdt"><input type="text" name="paq_title" class="AXInput" value="<%=paq_title%>" style="width:90%" /></td>
				</tr>
				<tr>
					<th class="title bdr bdt"><span class="icon">삽입 문구2</span></th>
					<td class="bdr bdt"><input type="text" name="paq_text2" class="AXInput" value="<%=paq_text2%>" style="width:90%" /></td>
				</tr>
				<tr>
					<th class="title bdr bdt"><span class="icon">문항 유형 *</span></th>
					<td class="bdt">
					<select name="paq_type" id="paq_type" class="AXSelect" onchange="SetViewItem()">
						<option value="단일선택형" <%If paq_type="단일선택형" Then Response.Write "selected"%> /> 단일선택형</option>
						<option value="복수선택형" <%If paq_type="복수선택형" Then Response.Write "selected"%> /> 복수선택형</option>
						<option value="단답형" <%If paq_type="단답형" Then Response.Write "selected"%> /> 단답형</option>
						<option value="서술형" <%If paq_type="서술형" Then Response.Write "selected"%> /> 서술형</option>				
					</select>
					</td>
				</tr>
				<tr id="tritem" style="display:">
					<th class="title bdr bdt"><span class="icon">선택 항목</span></th>
					<td class="bdt">
					<table style="border:0">
						<tr>
							<td>01. <input type="text" name="paq_a1" value="<%=paq_a1%>" class="AXInput" style="width:70%" /></td>
							<td>02. <input type="text" name="paq_a2" value="<%=paq_a2%>" class="AXInput" style="width:70%" /></td>
						</tr>
						<tr>
							<td>03. <input type="text" name="paq_a3" value="<%=paq_a3%>" class="AXInput" style="width:70%" /></td>
							<td>04. <input type="text" name="paq_a4" value="<%=paq_a4%>" class="AXInput" style="width:70%" /></td>
						</tr>
						<tr>
							<td>05. <input type="text" name="paq_a5" value="<%=paq_a5%>" class="AXInput" style="width:70%" /></td>
							<td>06. <input type="text" name="paq_a6" value="<%=paq_a6%>" class="AXInput" style="width:70%" /></td>
						</tr>
						<tr>
							<td>07. <input type="text" name="paq_a7" value="<%=paq_a7%>" class="AXInput" style="width:70%" /></td>
							<td>08. <input type="text" name="paq_a8" value="<%=paq_a8%>" class="AXInput" style="width:70%" /></td>
						</tr>
						<tr>
							<td><label><input type="checkbox" name="paq_a9" value="기타" <%If paq_a9="기타" Then Response.Write "checked"%>/> 기타 입력 사용</label></td>
							<td></td>
						</tr>
					</table>
					</td>
				</tr>
				<tr>
					<th class="title bdr bdt"><span class="icon">필수체크</span></th>
					<td class="bdr bdt">
					<label>
					<input type="checkbox" name="paq_req" value="1" <%If paq_req=True Then Response.Write "checked"%> /> 필수항목 체크
					</label>
					</td>
				</tr>
			</table>
		</div>

		<!-- btn_left_right -->
		<div class="btn_left_right">
			<p class="right">
				<span><input type="submit" value="   확인   " class="AXButton" style="color:#fff;background:#1e73e7;border:1px solid #1e73e7"></span>
				<span><input type="button" value="   닫기   " class="AXButton" onclick="window.close()"></span>
			</p>
		</div>
		<!-- //btn_left_right -->

	</form>

</div>
<!-- //contents --><!-- ---------------------------------------------------------------------------------------------- -->
</body>


<script type="text/javascript">
//유효성 체크
function RegChk(obj){
	if(obj.paq_title.value==""){ alert('제목을 입력하세요'); obj.paq_title.focus(); return false; }
	if((obj.paq_type.value=="단일선택형" || obj.paq_type.value=="복수선택형") && (obj.paq_a1.value=="" || obj.paq_a2.value=="")){ alert('최소 2개 이상 항목을 입력하세요'); return false; }
}

function SetViewItem(){
	var obj = document.regform;
	if(obj.paq_type.value=="단일선택형" || obj.paq_type.value=="복수선택형"){
		document.getElementById("tritem").style.display="";
	}else{
		document.getElementById("tritem").style.display="none";
	}
}
SetViewItem();
</script>

</html>