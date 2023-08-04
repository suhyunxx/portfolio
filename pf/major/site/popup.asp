<script language="javascript">
function GetCookie(name){
	var nameOfCookie = name + "=";
	var x = 0;
	while(x<=document.cookie.length){
		var y = (x+nameOfCookie.length);
		if(document.cookie.substring(x, y) == nameOfCookie){
		if((endOfCookie=document.cookie.indexOf(";", y))==-1)
			endOfCookie = document.cookie.length;
			return unescape( document.cookie.substring( y, endOfCookie ) );
		}
		x = document.cookie.indexOf( " ", x ) + 1;
		if ( x == 0 ) break;
	}
	return "";
}

function SetCookie(name, value, expiredays){
	var todayDate = new Date();
	todayDate.setDate(todayDate.getDate() + expiredays);
	document.cookie = name + "=" + escape(value) + "; path=/; expires=" + todayDate.toGMTString() + ";"
}

function PopClose(idx, mode){
	if (mode=="1"){
		SetCookie("NT-POPUP-"+idx, "done", 1);
	}
	$('#element_to_pop_up'+idx).bPopup().close();
	//document.getElementById("pop"+idx).style.display="none";
}
</script>

<%
Set RsP = Server.Createobject("ADODB.Recordset")
Sql = "SELECT * FROM tbl_popup WHERE p_hide='0' AND p_lang='" & pop_lang & "' "
Sql = Sql & " AND p_sdate<='" & Date() & "' AND p_edate>='" & Date() & "' "
'Response.write sql
RsP.Open Sql, Dbcon, 1
p_delay=0
Do Until RsP.EOF	
	p_idx = RsP("idx")
	p_title = RsP("p_title")
	p_left = RsP("p_left")
	p_top = RsP("p_top")
	p_width = RsP("p_width")
	p_height = RsP("p_height")
	p_content = RsP("p_content")
	p_site = RsP("p_site")
	p_hide = RsP("p_hide")
	p_sdate = RsP("p_sdate")
	p_edate = RsP("p_edate")
	p_link = RsP("p_link")
	%>
	<div id="element_to_pop_up<%=p_idx%>" style="background-color:#fff; border-radius:20px; display:none; padding:20px; min-width:<%=p_width%>px; min-height:<%=p_height%>px; box-shadow:rgba(0,0,0,0.4) 0 0 8px -2px;">
		<a class="b-close"><!-- <img src="/site/images/common/pop_close.png" style="width:40px"> --></a>
		<div style="overflow:hidden;"><%=p_content%></div>
		<div class="pop-today">
			<input type="checkbox" onclick="PopClose(<%=p_idx%>, 1)" />
			<%If pop_lang="한국어" Then%>오늘 하루 표시하지 않습니다.<%Else%>Do not show this again today.<%End If%>
		</div>
	</div>
	<script type="text/javascript">
	setTimeout(function() { 
		if(GetCookie("NT-POPUP-<%=p_idx%>")!="done" ){
			$('#element_to_pop_up<%=p_idx%>').bPopup({
				modalClose: true,
				opacity: 0,
				position: [<%=p_left%>, <%=p_top%>],
				followSpeed: 1500,
				speed: 250,
				transition: 'slideDown'
			});
		} 
	}, <%=p_delay%>);
	</script>
	<%
	p_delay=p_delay+70
RsP.Movenext
Loop
Set RsP = Nothing
%>