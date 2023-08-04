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
		<h3 class="title"><%=k_id%></h3>
		<div class="location">
			<i class="xi-home"></i> <span>게시판 관리</span> <strong><%=k_id%></strong>
		</dl>
	</div>
	
	<div id="sub-cont">
	
		<div class="box-type ani-box0 ani">
			<div class="box">
				<div class="sub-cont">
				<!--#include virtual="/site/bbs/bbs.asp" -->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- #include virtual="/site/manage/inc/footer.asp" -->