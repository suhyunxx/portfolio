<script src="/site/api/lightbox/js/lightbox-2.6.min.js"></script>
<link rel="stylesheet" href="/site/api/lightbox/css/lightbox.min.css" media="screen"/>

<!--검색폼-->
<div class="ntb-search">
	<form name="searchform" action="?bid=<%=bid%>&amp;mode=list&amp;category=<%=category%>" method="post">
		<select name="s_type" id="" class="sel_box">
			<option value="title" <%If s_type="title" Then Response.Write "selected"%>>Title</option>
		</select>
		<input type="text" name="s_keyword" value="<%=s_keyword%>" required="" placeholder="Please enter keywords">
		<input type="submit" name="Search" value="">
	</form>
</div>

<!--카테고리-->
<div class="ntb-top-area">
<%
'카테고리 셀렉트
If k_category<>"" Then
	%>
	<select name="s_cate" class="AXSelect" onchange="location.href='?mode=list&amp;bid=<%=bid%>&amp;s_cate='+this.value">
		<option value="">------ All ------</option>
		<%
		a_category = Split(k_category, "|")
		For Each cate_item In a_category
		%>
			<option value="<%=cate_item%>" <%If Trim(s_cate)=Trim(cate_item) Then Response.Write "selected"%>><%=cate_item%></option>
		<%
		Next
		%>
	</select>
	<%
End If

'RSS사용
If k_rss=True Then%>
<a href="/site/bbs/bbs_rss.asp?bid=<%=bid%>" target="_blank"><img src="/site/images/board/icon_rss.gif" border="0" alt="rss" class="vmiddle" /></a>
<%End If%>
</div>

<!-- gallery -->
<div class="gallery">

	<ul id="newList">
	<%If Rs.EOF Then%>
	There are no posts.
	<%Else
		cnt=0
		num = Rs.RecordCount-((page-1)*Rs.pagesize)-cnt
		Do Until Rs.EOF Or cnt>=Rs.pagesize
			b_idx = Rs("idx")
			b_board_idx = Rs("board_idx")
			b_cate = Rs("cate")
			b_e1_idx = Rs("e1_idx")
			b_e2_idx = Rs("e2_idx")
			b_num = Rs("num")
			b_p_num = Rs("p_num")
			b_r_num = Rs("r_num")
			b_d_num = Rs("d_num")
			b_mem_name = Rs("mem_name")
			b_mem_id = Rs("mem_id")
			b_mem_pw = Rs("mem_pw")
			b_mem_tel = Rs("mem_tel")
			b_mem_url = Rs("mem_url")
			b_mem_email = Rs("mem_email")
			b_addtext1 = Rs("addtext1")
			b_addtext2 = Rs("addtext2")
			b_addtext3 = Rs("addtext3")
			b_addtext4 = Rs("addtext4")
			b_addtext5 = Rs("addtext5")
			b_addtext6 = Rs("addtext6")
			b_addtext7 = Rs("addtext7")
			b_addtext8 = Rs("addtext8")
			b_addtext9 = Rs("addtext9")
			b_addtext10 = Rs("addtext10")
			b_addtext11 = Rs("addtext11")
			b_addtext12 = Rs("addtext12")
			b_addtext13 = Rs("addtext13")
			b_addtext14 = Rs("addtext14")
			b_addtext15 = Rs("addtext15")
			b_title = Rs("title")
			b_content = Rs("content")
			b_comment_count = Rs("comment_count")
			b_read_count = Rs("read_count")
			b_ip = Rs("ip")
			b_file1 = Rs("file1")
			b_file2 = Rs("file2")
			b_file3 = Rs("file3")
			b_file4 = Rs("file4")
			b_file5 = Rs("file5")
			b_html = Rs("html")
			b_notice = Rs("notice")
			b_repmail = Rs("repmail")
			b_lock = Rs("lock")
			b_popup = Rs("popup")
			b_regdate = Rs("regdate")
			%>
			<li>
				<a href="<%=k_uploadfolder%>/<%=b_file1%>" data-lightbox="ntb-lb-set<%=b_idx%>">
					<div class="over" style="opacity: 0;"></div>
					<img src="<%=k_uploadfolder%>/thumb/<%=b_file1%>" alt="<%=b_idx%>" class="gallery-image" data-lightbox="ntb-lb-set<%=b_idx%>" />
				</a>
				<div class="txt">
					<h4><%=TagText(b_title)%></h4>
				</div>
			</li>
			<%
			num=num-1
			cnt=cnt+1
			Rs.MoveNext
			Loop
		End If
		%>
	</ul>

</div>
<!-- //gallery -->

<!--페이징-->
<%Call Pagelist("?mode=list&" & pLink, CInt(page), k_pagelist, 5, Rs_RecordCount)%>
