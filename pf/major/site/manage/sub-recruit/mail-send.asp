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
		<h3 class="title">메일 발송</h3>
		<div class="location">
			<i class="xi-home"></i> <span>채용 관리</span> <strong>메일 발송</strong>
		</dl>
	</div>
	
	<div id="sub-cont">
	
		<div class="box-type ani-box0 ani">
			<div class="box">
				<div class="sub-cont">

<!-- 스마트에디터2 -->
<script type="text/javascript" src="/site/api/smarteditor2/js/HuskyEZCreator.js" charset="utf-8"></script>


<%
	m_id = Request("sel_idx")
	If m_id="" Then
		Response.Write "<script>alert('선택된 아이디가 없습니다.'); history.back();</script>"
		Response.End
	End If

	ArrId			= Split(m_id, ", ")

	m_id_txt = "('"
	For Each b In ArrId
		m_id_txt = m_id_txt & b & "', '"
	Next
	m_id_txt = m_id_txt & "')"

	Set Rs = Server.Createobject("ADODB.Recordset")
	SQL = "SELECT r_name, r_email FROM tbl_resume WHERE idx IN " & m_id_txt & " "
	Rs.Open SQL, Dbcon, 1
	num = 1
	m_name= ""
	Do Until Rs.EOF
		m_name = Rs("r_name")
		m_name = m_name & "," & m_name
	num = num + 1
	Rs.MoveNext
	Loop
%>

	<form name="regform" method="post" action="mail-send-ok.asp?mode=sel_send" enctype="multipart/form-data">
	<input type="hidden" name="ms_to" value="<%=m_id%>">
	<div class="tb_info">
		<h4>메일 발송</h4>
		<table>
			<colgroup>
				<col width="120px" />
				<col width="" />
			</colgroup>
			<tr>
				<th class="title bdr bdt">보내는사람</th>
				<td class="bdt bdr"><input type="text" name="ms_from" class="AXInput W400" value="<%=W_EMAIL%>" /></td>
			</tr>
			<tr>
				<th class="title bdr bdt">받는사람(ID)</th>
				<td class="bdt bdr"><textarea name="ms_name" id="ms_name" class="AXInput" style="width:98%; height:60px" readonly><%=m_name%></textarea></td>
			</tr>
			<tr>
				<th class="title bdr bdt">제목</th>
				<td class="bdt bdr"><input type="text" name="ms_subject" class="AXInput" value="" style="width:98%" / ></td>
			</tr>
			<tr>
				<td class="bdt bdr" colspan="2"><textarea name="ms_content" id="ms_content" class="AXInput" style="width:98%; height:200px"><%=MailSkin("메일 내용을 입력하세요")%></textarea></td>
			</tr>
			<tr>
				<th class="title bdr bdt">첨부파일</th>
				<td class="bdt bdr"><input type="file" name="p_file" /></td>
			</tr>
		</table>
	</div>
	<!-- tb_info -->

	<!-- btn_left_right -->
	<div class="btn_left_right">
		<p class="right">
			<span><input type="button" value="   전송하기   " class="AXButton" style="color:#fff;background:#1e73e7;border:1px solid #1e73e7" onclick="RegChk()"></span>
			<span><input type="button" value="   취소   " class="AXButton" onclick="history.back()"></span>
		</p>
	</div>
	<!-- //btn_left_right -->

	</form>

	<!-- tip_box -->
	<div class="tip_box" style="width:100%">
		<p>
		<b>제목과 내용에 아래의 대체문자를 사용 할 수 있습니다.</b><br />
		{MEM_ID} 받는회원아이디&nbsp;&nbsp;&nbsp;{MEM_NAME} 받는회원이름&nbsp;&nbsp;&nbsp;{MEM_EMAIL} 받는회원이메일<br />
		{SITE_NAME} 사이트명&nbsp;&nbsp;&nbsp;{SITE_URL} 사이트 주소<br /><br />
		+ 1회 발송량이 많을경우 서버 설정에 따라 발송중 중단될 수 있습니다.
		</p>
	</div>
	<!-- //tip_box -->

<script type="text/javascript">
//메일전송 유효성 체크
function RegChk() {
	var obj = document.regform;
	if(obj.ms_from.value==""){ alert('보내는 사람 메일주소를 입력하세요'); obj.ms_from.focus(); return; }
	if(obj.ms_subject.value==""){ alert(' 제목을 입력하세요'); obj.ms_subject.focus(); return; }
	oEditors.getById["ms_content"].exec("UPDATE_CONTENTS_FIELD", []);
	obj.submit();
}

var oEditors = [];
nhn.husky.EZCreator.createInIFrame({
    oAppRef: oEditors,
    elPlaceHolder: "ms_content",
    sSkinURI: "/site/api/smarteditor2/SmartEditor2Skin.html",
    fCreator: "createSEditor2"
});
</script>


				</div>
			</div>
		</div>
	</div>
</section><!-- #include virtual="/site/manage/inc/footer.asp" -->