<%
	cacheDate = Replace(FormatDateTime(Now(),4),":","") & Second(Now())
%>
<!DOCTYPE HTML>
<html lang="ko">
	<head>
		<!-- <title>타이틀</title> -->
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="format-detection" content="telephone=no">
		<!-- <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width" /> -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.5, minimum-scale=1.0, user-scalable=yes,target-densitydpi=medium-dpi"> 
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta http-equiv="Content-Script-Type" content="text/javascript"/>
    	<meta http-equiv="Content-Style-Type" content="text/css"/> 
    	<meta property="og:image" content="/ogImg.jpg" />
		<meta name="google" value="notranslate" />
    <!--#include virtual="/site/setting.asp" -->
    	<link rel=" shortcut icon" href="/favicon.ico">
 		<link rel="icon" href="/favicon.ico">
		<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
		<link rel="stylesheet" type="text/css" href="/css/base.css?v=<%=cacheDate%>" />
		<link rel="stylesheet" type="text/css" href="/css/common.css?v=<%=cacheDate%>" />


		<% If Instr(Request.ServerVariables("URL"),"index.asp")=0 Then %>
		<link rel="stylesheet" href="/css/sub.css?v=<%=cacheDate%>">
		<!-- <script defer src="/js/sub.js?v=<%=cacheDate%>"></script> -->
		<% Else %>
		<link rel="stylesheet" href="/css/main.css?v=<%=cacheDate%>">
		<% End if %>
		
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<!-- <link rel="stylesheet" type="text/css" href="/css/media.css?v=<%=cacheDate%>" /> -->
		<!-- <link rel="stylesheet" type="text/css" href="/css/animation.css?v=<%=cacheDate%>" /> -->
		<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>


		<script src="//code.jquery.com/jquery-latest.js"></script>
		<script src="/js/common.js?v=<%=cacheDate%>"></script>
		<!-- <script src="/js/animation.js?v=<%=cacheDate%>"></script> -->
		<script>
			(function(d) {
			  var config = {
				kitId: 'cff0cnk',
				scriptTimeout: 3000,
				async: true
			  },
			  h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
			})(document);
		  </script>

		<script type="text/javascript">
			if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) {
				window.location = 'microsoft-edge:' + window.location;
				setTimeout(function () {
					window.location = 'https://go.microsoft.com/fwlink/%linkid=2135547';
				}, 1);
			}

			function updateOrientation() {
				var orientationValue = window.orientation
				if (orientationValue == 90 || orientationValue == -90) {
					$("meta[name=viewport]").attr("content", "width=device-width, initial-scale=1.0, maximum-scale=2.0, minimum-scale=1.0, user-scalable=yes,target-densitydpi=medium-dpi");
				}
			}

			window.onload = function () {
				document.body.onorientationchange = updateOrientation;
			}


			var windowWidth = window.screen.width
			setViewPort(windowWidth);
			function setViewPort(w_width) {
				if (w_width <= 400) {
					$("meta[name=viewport]").attr("content", "width=400, maximum-scale=2.0, user-scalable=yes, target-densitydpi=medium-dpi");
				} else {
					$("meta[name=viewport]").attr("content", "width=device-width, initial-scale=1.0, maximum-scale=2.0, minimum-scale=1.0, user-scalable=yes,target-densitydpi=medium-dpi");
				}
			}

			window.addEventListener('resize', function (event) {
				windowWidth = window.screen.width
				setViewPort(windowWidth);
			}, true);
		</script>
	</head>
<body>
<div id="wrap">
	<header id="header">
        <div class="center">
            <h1 class="logo"><a href="<%=dir%>/kr/index.asp"><img src="<%=dir%>/img/common/logo.png" alt=""></a></h1>
            <nav>
                <ul class="gnb">
                    <li>
                       <a href="<%=dir%>/kr/sub/company/greeting.asp">회사소개</a>
                       <ul class="depth2">
                            <li><a href="<%=dir%>/kr/sub/company/greeting.asp">메이저위드 소개</a></li>
                            <li><a href="<%=dir%>/kr/sub/company/profile.asp"">컨설턴트 프로필</a></li>
                            <li><a href="<%=dir%>/kr/sub/company/recruit.asp"">채용안내</a></li>
                            <li><a href="<%=dir%>/kr/sub/company/location.asp"">오시는 길</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">컨설팅 분야</a>
                        <ul class="depth2">
                            <li><a href="<%=dir%>/kr/sub/part/quality/01.asp">품질인증</a></li>
                            <li><a href="<%=dir%>/kr/sub/part/tech/01.asp">조달/기술인증</a></li>
                            <li><a href="<%=dir%>/kr/sub/part/env/01.asp">환경인증</a></li>
                            <li><a href="<%=dir%>/kr/sub/part/cor/01.asp">기업인증</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">컨설팅 실적 &amp; 후기</a>
                        <ul class="depth2">
                            <li><a href="<%=dir%>/kr/sub/result/result.asp">컨설팅 실적</a></li>
                            <li><a href="<%=dir%>/kr/sub/result/review.asp">고객 후기</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">고객지원</a>
                        <ul class="depth2">
							<li><a href="<%=dir%>/kr/sub/client/notice.asp">공지사항</a></li>
							<li><a href="<%=dir%>/kr/sub/client/celebrate.asp">인증축하</a></li>
							<li><a href="<%=dir%>/kr/sub/client/qna.asp">Q&A</a></li>
							<li><a href="<%=dir%>/kr/sub/client/counsel.asp">상담문의</a></li>
							<li><a href="<%=dir%>/kr/sub/client/majornews.asp">메이저인증뉴스</a></li>
							<li><a href="<%=dir%>/kr/sub/client/complain.asp">신문고</a></li>
						</ul>
                    </li>
                </ul>
				<!--<div class="side_bar"><a href="#"><img src="<%=dir%>/img/common/hbg.png" alt=""></a></div>-->
            </nav>
			
           
        </div>
		<ul class="side_btn">
			<li><a href="#"><img src="<%=dir%>/img/common/hbg.png" alt=""></a></li>
		</ul>
		<div id="total_menu">
			<div class="inner">
				<div class="inner_center">
					<div class="line">
						<h5><a href="#">회사소개</a></h5>
						<div>
							<ul>
								<li><a href="<%=dir%>/kr/sub/company/greeting.asp">메이저위드 소개</a></li>
								<li><a href="<%=dir%>/kr/sub/company/recruit.asp"">채용안내</a></li>
							</ul>
							<ul>
								<li><a href="<%=dir%>/kr/sub/company/profile.asp"">컨설턴트 프로필</a></li>
								<li><a href="<%=dir%>/kr/sub/company/location.asp"">오시는 길</a></li>
							</ul>
						</div>
					</div>
					<div class="line">
						<h5><a href="#">컨설팅 분야</a></h5>
						<div>
							<ul>
								<li><a href="<%=dir%>/kr/sub/part/quality/01.asp">품질인증</a></li>
								<li><a href="<%=dir%>/kr/sub/part/env/01.asp">환경인증</a></li>
							</ul>
							<ul>
								<li><a href="<%=dir%>/kr/sub/part/tech/01.asp">조달/기술인증</a></li>
								<li><a href="<%=dir%>/kr/sub/part/cor/01.asp">기업인증</a></li>
							</ul>
						</div>
					</div>
					<div class="line">
						<h5><a href="#">컨설팅 실적&후기</a></h5>
						<div>
							<ul>
								<li><a href="<%=dir%>/kr/sub/result/result.asp">컨설팅 실적</a></li>
								<li><a href="<%=dir%>/kr/sub/result/review.asp">고객 후기</a></li>
							</ul>
						</div>
					</div>
					<div class="line">
						<h5><a href="#">고객지원</a></h5>
						<div>
							<ul>
								<li><a href="<%=dir%>/kr/sub/client/notice.asp">공지사항</a></li>
								<li><a href="<%=dir%>/kr/sub/client/celebrate.asp">인증축하</a></li>
								
							</ul>
							<ul>
								<li><a href="<%=dir%>/kr/sub/client/qna.asp">Q&A</a></li>
								<li><a href="<%=dir%>/kr/sub/client/counsel.asp">상담문의</a></li>
								
							</ul>
							<ul>
								<li><a href="<%=dir%>/kr/sub/client/majornews.asp">메이저인증뉴스</a></li>
								<li><a href="<%=dir%>/kr/sub/client/complain.asp">신문고</a></li>
							</ul>
						</div>
					</div>
					<div class="add_wrap">
						<div><span class="add_title">본사</span><span>서울시 송파구 송파대로 201 B동 601~603 (문정동, 송파테라타워2)
						</span></div>
						<div><span class="add_title">중국법인</span><span>산동성 청도시 시북구 무양로 7호 7동 #501
						</span></div>
					</div>
				</div>
				
			</div>
			
		</div>
    
	</header>

<%
	If Instr(Request.ServerVariables("URL"),"index.asp") = 0  Then
	foldname = Split(Request.ServerVariables("URL"), "/")
		Select Case foldname(2)
			Case "company" num = "1"
			Case "education" num = "2"
			Case "plaza" num = "3"
			Case "reference" num = "4"
		End Select
%>
<!--index 페이지 아닐때-->
	<div id="subWrap">
		<section id="sv" class="sv0<%=num%>"></section>
		<section id="subContents" class="inner clearfix">

<% End If %>