<%@CodePage = 65001%>
<%
If Request.Cookies("W_LEVEL")<>"" Then
	If Request.Cookies("W_LEVEL")<10 Then
		Response.Redirect "/site/manage/main.asp"
	End If
End If 
%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="imagetoolbar" content="no" />
<meta http-equiv="Expires" content="-1" />
<meta http-equiv="Cache-Control" content="No-Cache" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<!--#include virtual="/site/setting.asp" -->
<link rel="stylesheet" href="css/style.css">

<link rel="stylesheet" href="//cdn.jsdelivr.net/gh/xpressengine/xeicon@2.3.1/xeicon.min.css">
<script src="js/common.js"></script>

<%
Set Rs = Server.CreateObject("ADODB.Recordset")
Sql = "SELECT TOP 1 m_email FROM tbl_member WHERE m_lev='2' ORDER BY idx DESC"
Rs.Open Sql, Dbcon, 1
If Rs.EOF=False Then
	m_email = Rs(0)
End If
Rs.Close
Set Rs = Nothing
%>

<script type="text/javascript">
function setCookie (name, value, expires) {
	document.cookie = name + "=" + escape (value) +
	"; path=/; expires=" + expires.toGMTString();
} 

function getCookie(Name) {
	var search = Name + "="
	if (document.cookie.length > 0) { 
		offset = document.cookie.indexOf(search)
		if (offset != -1) { 
			offset += search.length
			end = document.cookie.indexOf(";", offset)
		if (end == -1)
			end = document.cookie.length
			return unescape(document.cookie.substring(offset, end))
		}
	}
	return "";
}

function SaveId(form) {  
	if (document.loginform.checksaveid.checked==true) {
	var check;
	check = confirm("아이디 및 패스워드 저장 기능을 사용하시겠습니까?");
	if(check==false) {document.loginform.checksaveid.checked=false;} 	 
	var expdate = new Date();
	if (form.checksaveid.checked)
		expdate.setTime(expdate.getTime() + 1000 * 3600 * 24 * 30);
	else
		expdate.setTime(expdate.getTime() - 1);
	setCookie("saveid", form.m_id.value, expdate);
	setCookie("savepw", form.m_pw.value, expdate);
	}  
}

function getid(form) {
	form.checksaveid.checked = ((form.m_id.value = getCookie("saveid")) != "");
	form.checksaveid.checked = ((form.m_pw.value = getCookie("savepw")) != "");
}

function LoginChk(){
	if(!document.loginform.m_id.value){
		alert('아이디를 입력해주세요');
		document.loginform.m_id.focus();
		return false;
	}
	if(!document.loginform.m_pw.value){
		alert('패스워드를 입력해주세요');
		document.loginform.m_pw.focus();
		return false;
	}
	return true;
}
</script>
</head>

<body onload="getid(document.loginform)">

	<div id="wrap">
		
		<article id="login">
			
			<div class="login-box-manage">
				<div class="top">
					<div class="logo"><%=sc_name%></div>
					<p>Administrator</p>
				</div>
				
				<form name="loginform" method="post" action="login_ok.asp?mode=in" onsubmit="return LoginChk();">
					<div class="ipbox">
						<ul>
							<li>
								<span>ID</span>
								<label><i class="xi-user"></i><input type="text" name="m_id" value="" id="" title="" placeholder="아이디를 입력하세요." required style="ime-mode:disabled;" autocomplete="off" maxlength="15"/></label>
							</li>
							<li>
								<span>Password</span>
								<label><i class="xi-key"></i><input type="password" name="m_pw" value="" id="" title="" placeholder="패스워드를 입력하세요." required /></label>
							</li>
						</ul>
						<div class="chbox">
							<label><input type="checkbox" name="checksaveid" onClick="SaveId(this.form)"> <span>아이디/패스워드 기억하기</span></label>
						</div>
						<div class="btn"><button type="submit">Login <span><i class="xi-long-arrow-right"></i></span></button></div>
					</div>
				</form>
				
			</div>
			
		</article>
		
	</div>
</body>
</html>