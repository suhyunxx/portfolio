<%@CodePage = 65001%>
<%
Response.CharSet="utf-8"
Session.codepage="65001"
Response.codepage="65001"
Response.ContentType="text/html;charset=utf-8"
%>
<!--#include virtual="/site/setting.asp"-->
<!--#include virtual="/site/manage/inc/auth-chk.asp"-->
<%
mode = Request("mode")
idx = Request("idx")

Set UploadForm = Server.Createobject("DEXT.FileUpload")
UploadForm.CodePage = 65001
UploadForm.AutoMakeFolder = True
UploadPath = Server.MapPath("/upload/")
UploadForm.DefaultPath = UploadPath

ReDim c_file(k_upload), new_c_file(k_upload)

Set Rs = Server.Createobject("ADODB.Recordset")
Sql = "SELECT * FROM tbl_board_data WHERE idx='" & idx & "' "
Rs.Open Sql, Dbcon, 1
If Rs.EOF=False Then
	board_idx = Rs("board_idx")
	cate = Rs("cate")
	e1_idx = Rs("e1_idx")
	e2_idx = Rs("e2_idx")
	num = Rs("num")
	p_num = Rs("p_num")
	r_num = Rs("r_num")
	d_num = Rs("d_num")
	mem_name = Rs("mem_name")
	mem_id = Rs("mem_id")
	mem_pw = Rs("mem_pw")
	mem_tel = Rs("mem_tel")
	mem_fax = Rs("mem_fax")
	mem_url = Rs("mem_url")
	mem_email = Rs("mem_email")
	addtext1 = Rs("addtext1")
	addtext2 = Rs("addtext2")
	addtext3 = Rs("addtext3")
	addtext4 = Rs("addtext4")
	addtext5 = Rs("addtext5")
	addtext6 = Rs("addtext6")
	addtext7 = Rs("addtext7")
	addtext8 = Rs("addtext8")
	addtext9 = Rs("addtext9")
	addtext10 = Rs("addtext10")
	addtext11 = Rs("addtext11")
	addtext12 = Rs("addtext12")
	addtext13 = Rs("addtext13")
	addtext14 = Rs("addtext14")
	addtext15 = Rs("addtext15")
	addtext16 = Rs("addtext16")
	addtext17 = Rs("addtext17")
	addtext18 = Rs("addtext18")
	addtext19 = Rs("addtext19")
	addtext20 = Rs("addtext20")
	title = Rs("title")
	content = Rs("content")
	seo_title = Rs("seo_title")
	seo_keyword = Rs("seo_keyword")
	seo_description = Rs("seo_description")
	comment_count = Rs("comment_count")
	read_count = Rs("read_count")
	ip = Rs("ip")
	For fc=0 To k_upload-1
		c_file(fc) = Rs("file" & fc+1)
	Next
	html = Rs("html")
	notice = Rs("notice")
	repmail = Rs("repmail")
	lock = Rs("lock")
	popup = Rs("popup")
	regdate = Rs("regdate")
End If
Rs.Close
Set Rs = Nothing

'이미지 복사
For i=1 To k_upload
	If c_file(i-1)<>"" Then
		new_filename = "cimg_" & Hour(Now()) & Minute(Now()) & Second(Now()) & Left(Timer(), 5) & "_" & i & "." & Right(c_file(i-1), Len(c_file(i-1))-InStrRev(c_file(i-1), "."))
		
		Call CopyFile(UploadForm.DefaultPath & "\" & c_file(i-1), UploadForm.DefaultPath & "\" & new_filename)

		'썸네일 생성
		Set ObjImage = Server.CreateObject("DEXT.ImageProc")
		If ObjImage.SetSourceFile(UploadForm.DefaultPath & "\" & new_filename) Then
			thumb_s = ObjImage.SaveasThumbnail(UploadForm.DefaultPath & "\thumb\" & new_filename, 440, CInt((ObjImage.ImageHeight/ObjImage.ImageWidth)*440), False)
		End If
		Set ObjImage = Nothing

		new_c_file(i-1) = new_filename
	End If
Next

Set Rs = Server.Createobject("ADODB.Recordset")
Sql = "SELECT TOP 1 num FROM tbl_board_data WHERE board_idx='" & board_idx & "' ORDER BY num DESC"
Rs.Open Sql, DbCon, 1
If Rs.EOF=True Then
	num=1
Else
	num=CInt(Rs(0))+1
End If
Rs.Close
Set Rs = Nothing

'db쿼리
Sql = "INSERT INTO tbl_board_data("
Sql = Sql & "board_idx, "
Sql = Sql & "cate, "
Sql = Sql & "num, "
Sql = Sql & "p_num, "
Sql = Sql & "r_num, "
Sql = Sql & "d_num, "
Sql = Sql & "mem_name, "
Sql = Sql & "mem_id, "
Sql = Sql & "mem_pw, "
Sql = Sql & "mem_tel, "
Sql = Sql & "mem_fax, "
Sql = Sql & "mem_url, "
Sql = Sql & "mem_email, "
Sql = Sql & "addtext1, "
Sql = Sql & "addtext2, "
Sql = Sql & "addtext3, "
Sql = Sql & "addtext4, "
Sql = Sql & "addtext5, "
Sql = Sql & "addtext6, "
Sql = Sql & "addtext7, "
Sql = Sql & "addtext8, "
Sql = Sql & "addtext9, "
Sql = Sql & "addtext10, "
Sql = Sql & "addtext11, "
Sql = Sql & "addtext12, "
Sql = Sql & "addtext13, "
Sql = Sql & "addtext14, "
Sql = Sql & "addtext15, "
Sql = Sql & "addtext16, "
Sql = Sql & "addtext17, "
Sql = Sql & "addtext18, "
Sql = Sql & "addtext19, "
Sql = Sql & "addtext20, "
Sql = Sql & "title, "
Sql = Sql & "content, "
Sql = Sql & "seo_title, "
Sql = Sql & "seo_keyword, "
Sql = Sql & "seo_description, "
Sql = Sql & "ip, "
For fc=0 To k_upload-1
	Sql = Sql & "file" & fc+1 & ", "
Next
Sql = Sql & "html, "
Sql = Sql & "notice, "
Sql = Sql & "repmail, "
Sql = Sql & "lock) VALUES("
Sql = Sql & "'" & board_idx & "',"
Sql = Sql & "N'" & cate & "',"
Sql = Sql & "'" & num & "',"
Sql = Sql & "'" & num & "',"
Sql = Sql & "'" & "0',"
Sql = Sql & "'" & "0',"
Sql = Sql & "N'" & mem_name & "',"
Sql = Sql & "N'" & mem_id & "',"
Sql = Sql & "N'" & mem_pw & "',"
Sql = Sql & "N'" & mem_tel & "',"
Sql = Sql & "N'" & mem_fax & "',"
Sql = Sql & "N'" & mem_url & "',"
Sql = Sql & "N'" & mem_email & "',"
Sql = Sql & "N'" & addtext1 & "',"
Sql = Sql & "N'" & addtext2 & "',"
Sql = Sql & "N'" & addtext3 & "',"
Sql = Sql & "N'" & addtext4 & "',"
Sql = Sql & "N'" & addtext5 & "',"
Sql = Sql & "N'" & addtext6 & "',"
Sql = Sql & "N'" & addtext7 & "',"
Sql = Sql & "N'" & addtext8 & "',"
Sql = Sql & "N'" & addtext9 & "',"
Sql = Sql & "N'" & addtext10 & "',"
Sql = Sql & "N'" & addtext11 & "',"
Sql = Sql & "N'" & addtext12 & "',"
Sql = Sql & "N'" & addtext13 & "',"
Sql = Sql & "N'" & addtext14 & "',"
Sql = Sql & "N'" & addtext15 & "',"
Sql = Sql & "N'" & addtext16 & "',"
Sql = Sql & "N'" & addtext17 & "',"
Sql = Sql & "N'" & addtext18 & "',"
Sql = Sql & "N'" & addtext19 & "',"
Sql = Sql & "N'" & addtext20 & "',"
Sql = Sql & "N'" & title & "',"
Sql = Sql & "N'" & content & "',"
Sql = Sql & "N'" & seo_title & "',"
Sql = Sql & "N'" & seo_keyword & "',"
Sql = Sql & "N'" & seo_description & "',"
Sql = Sql & "'" & Request.ServerVariables("REMOTE_HOST") & "',"
For fc=0 To k_upload-1
	Sql = Sql & "N'" & new_c_file(fc) & "',"
Next
Sql = Sql & "'" & html & "',"
Sql = Sql & "'" & notice & "',"
Sql = Sql & "'" & repmail & "',"
Sql = Sql & "'" & lock & "')"
'Response.write sql
Dbcon.Execute Sql

Response.Write "<script>alert('복사 되었습니다.'); location.href='" & Request.Servervariables("HTTP_REFERER") & "';</script>"

%>