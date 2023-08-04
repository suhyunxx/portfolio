<li class="home"><a href="<%=dir%>index.asp"><i class="xi-home copy"></i></a></li>
<!-- <li <%If urlPath="kr/sub/company/greeting.asp" Then Response.Write "class='on'"%>><a href="/sub/company/greeting.asp">인사말</a></li> -->
<!-- 여러개일경우 -->
<!-- <%If urlPath="/sub/about/fundInfo.asp" Or urlPath="/sub/about/fundNews.asp" Then Response.Write "class='on'"%> -->

<!-- 변수안에 문자열 검사-특정문자 있는지 확인-->
<% 
	Dim lnb1 , lnb2 , lnb3
	lnb1 = "/sub/company/"
	lnb2 = "/sub/part/"
	lnb3 = "/sub/result/"
%>
<% IF instr(urlPath,"/sub/company/") Then %>
	<li class="_location">
		<a href="<%=dir%>/kr/sub/company/greeting.asp">회사소개<img src="<%=dir%>/img/sub/arrow_down.png" alt=""></a>
		<ul class="lnb_depth2">
			<li><a href="<%=dir%>/kr/sub/part/quality/01.asp">컨설팅 분야</a></li>
			<li><a href="<%=dir%>/kr/sub/result/result.asp">컨설팅실적&후기</a></li>
			<li><a href="<%=dir%>/kr/sub/part/client/notice.asp">고객지원</a></li>
		</ul>
	</li>
<% ElseIf  instr(urlPath,"/sub/part/") Then %>
	<li class="_location">
		<a href="<%=dir%>/kr/sub/company/quality.asp">컨설팅 분야<img src="<%=dir%>/img/sub/arrow_down.png" alt=""></a>
		<ul class="lnb_depth2">
			<li><a href="<%=dir%>/kr/sub/company/greeting.asp">회사소개</a></li>
			<li><a href="<%=dir%>/kr/sub/result/result.asp">컨설팅실적&후기</a></li>
			<li><a href="<%=dir%>/kr/sub/part/client/notice.asp">고객지원</a></li>
		</ul>
	</li>
<% ElseIf  instr(urlPath,"/sub/result/") Then %>
	<li class="_location">
		<a href="<%=dir%>/kr/sub/result/result.asp">컨설팅 실적&후기<img src="<%=dir%>/img/sub/arrow_down.png" alt=""></a>
		<ul class="lnb_depth2">
			<li><a href="<%=dir%>/kr/sub/company/greeting.asp">회사소개</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/01.asp">컨설팅 분야</a></li>
			<li><a href="<%=dir%>/kr/sub/part/client/notice.asp">고객지원</a></li>
		</ul>
	</li>
<% ElseIf  instr(urlPath,"/sub/client/") Then %>
	<li class="_location">
		<a href="<%=dir%>kr/sub/client/notice.asp">고객지원<img src="<%=dir%>/img/sub/arrow_down.png" alt=""></a>
		<ul class="lnb_depth2">
			<li><a href="<%=dir%>/kr/sub/company/greeting.asp">회사소개</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/01.asp">컨설팅 분야</a></li>
			<li><a href="<%=dir%>/kr/sub/result/result.asp">컨설팅 실적&후기</a></li>
		</ul>
	</li>
<% End If %>

<!-------------------------------------------------------------------------------------------------------------------------------------->

<!-- 회사소개 -->

 <!-- <%If instr(urlPath,"/sub/company/") Then Response.Write "class='on'"%> -->

<% IF instr(urlPath,"/sub/company/greeting") Then %>
	<li class="_location">
		<a href="<%=dir%>/kr/sub/company/greeting.asp">메이저위드 소개<img src="<%=dir%>/img/sub/arrow_down.png" alt=""></a>
		<ul class="lnb_depth2">
			<li><a href="<%=dir%>/kr/sub/company/greeting.asp">메이저위드 소개</a></li>
            <li><a href="<%=dir%>/kr/sub/company/profile.asp">컨설턴트 프로필</a></li>
            <li><a href="<%=dir%>/kr/sub/company/recruit.asp">채용안내</a></li>
            <li><a href="<%=dir%>/kr/sub/company/location.asp">오시는 길</a></li>
        </ul>
	</li>
<% ElseIf  instr(urlPath,"/sub/company/profile") Then %>
	<li class="_location">
		<a href="<%=dir%>/kr/sub/company/profile.asp">컨설턴트 프로필<img src="<%=dir%>/img/sub/arrow_down.png" alt=""></a>
		<ul class="lnb_depth2">
            <li><a href="<%=dir%>/kr/sub/company/greeting.asp">메이저위드 소개</a></li>
			<li><a href="<%=dir%>/kr/sub/company/profile.asp">컨설턴트 프로필</a></li>
            <li><a href="<%=dir%>/kr/sub/company/recruit.asp">채용안내</a></li>
            <li><a href="<%=dir%>/kr/sub/company/location.asp">오시는 길</a></li>
        </ul>
	</li>
<% ElseIf  instr(urlPath,"/sub/company/recruit") Then %>
	<li class="_location">
		<a href="<%=dir%>/kr/sub/company/recruit.asp">채용안내<img src="<%=dir%>/img/sub/arrow_down.png" alt=""></a>
		<ul class="lnb_depth2">
            <li><a href="<%=dir%>/kr/sub/company/greeting.asp">메이저위드 소개</a></li>
			<li><a href="<%=dir%>/kr/sub/company/profile.asp">컨설턴트 프로필</a></li>
            <li><a href="<%=dir%>/kr/sub/company/recruit.asp">채용안내</a></li>
            <li><a href="<%=dir%>/kr/sub/company/location.asp">오시는 길</a></li>
        </ul>
	</li>   
<% ElseIf  instr(urlPath,"/sub/company/location") Then %>
	<li class="_location">
		<a href="<%=dir%>/kr/sub/company/location.asp">오시는 길<img src="<%=dir%>/img/sub/arrow_down.png" alt=""></a>
		<ul class="lnb_depth2">
            <li><a href="<%=dir%>/kr/sub/company/greeting.asp">메이저위드 소개</a></li>
			<li><a href="<%=dir%>/kr/sub/company/profile.asp">컨설턴트 프로필</a></li>
            <li><a href="<%=dir%>/kr/sub/company/recruit.asp">채용안내</a></li>
            <li><a href="<%=dir%>/kr/sub/company/location.asp">오시는 길</a></li>
        </ul>
	</li>   
<% End If %>

<% IF instr(urlPath,"/sub/company/greeting") Then %>
	<li class="_location">
		<a href="<%=dir%>/kr/sub/company/greeting.asp">인사말<img src="<%=dir%>/img/sub/arrow_down.png" alt=""></a>
		<ul class="lnb_depth2">
			<li class="_location_move"><a href="<%=dir%>/kr/sub/company/greeting.asp">연혁</a></li>
			<li class="_location_move"><a href="<%=dir%>/kr/sub/company/greeting.asp">차별성</a></li>
			<li class="_location_move"><a href="<%=dir%>/kr/sub/company/greeting.asp">조직도</a></li>
		</ul>
	</li>
<% End If %>

<!-- 컨설팅 분야 -->
<% IF instr(urlPath,"/sub/part/quality") Then %>
	<li class="_location">
		<a href="<%=dir%>/kr/sub/part/quality.asp">품질인증<img src="<%=dir%>/img/sub/arrow_down.png" alt=""></a>
		<ul class="lnb_depth2">
			<li><a href="<%=dir%>/kr/sub/part/tech/01.asp">조달/기술인증</a></li>
            <li><a href="<%=dir%>/kr/sub/part/env/01.asp">환경인증</a></li>
            <li><a href="<%=dir%>/kr/sub/part/cor/01.asp">기업인증</a></li>
        </ul>
	</li>
<% ElseIf  instr(urlPath,"/sub/part/tech") Then %>
	<li class="_location">
		<a href="<%=dir%>/kr/sub/part/tech/01.asp">조달/기술인증<img src="<%=dir%>/img/sub/arrow_down.png" alt=""></a>
		<ul class="lnb_depth2">
            <li><a href="<%=dir%>/kr/sub/part/quality.asp">품질인증</a></li>
			<li><a href="<%=dir%>/kr/sub/part/env/01.asp">환경인증</a></li>
            <li><a href="<%=dir%>/kr/sub/part/cor/01.asp">기업인증</a></li>
        </ul>
	</li>
<% ElseIf  instr(urlPath,"/sub/part/env") Then %>
	<li class="_location">
		<a href="<%=dir%>/kr/sub/part/env/01.asp">환경인증<img src="<%=dir%>/img/sub/arrow_down.png" alt=""></a>
		<ul class="lnb_depth2">
            <li><a href="<%=dir%>/kr/sub/part/quality.asp">품질인증</a></li>
			<li><a href="<%=dir%>/kr/sub/part/tech/01.asp">조달/기술인증</a></li>
            <li><a href="<%=dir%>/kr/sub/part/cor/01.asp">기업인증</a></li>
        </ul>
	</li>   
<% ElseIf  instr(urlPath,"/sub/part/cor") Then %>
	<li class="_location">
		<a href="<%=dir%>/kr/sub/part/cor/01.asp">기업인증<img src="<%=dir%>/img/sub/arrow_down.png" alt=""></a>
		<ul class="lnb_depth2">
            <li><a href="<%=dir%>/kr/sub/part/quality.asp">품질인증</a></li>
			<li><a href="<%=dir%>/kr/sub/part/tech/01.asp">조달/기술인증</a></li>
            <li><a href="<%=dir%>/kr/sub/part/env/01.asp">환경인증</a></li>
        </ul>
	</li>   
<% End If %>

<!-- 컨설팅 분야 -->
<% IF instr(urlPath,"/sub/result/result") Then %>
	<li class="_location">
		<a href="<%=dir%>/kr/sub/result/result.asp">컨설팅 실적<img src="<%=dir%>/img/sub/arrow_down.png" alt=""></a>
		<ul class="lnb_depth2">
			<li><a href="<%=dir%>/kr/sub/result/review.asp">고객후기</a></li>
        </ul>
	</li>
<% ElseIf  instr(urlPath,"/sub/result/review") Then %>
	<li class="_location">
		<a href="<%=dir%>/kr/sub/result/review.asp">고객후기<img src="<%=dir%>/img/sub/arrow_down.png" alt=""></a>
		<ul class="lnb_depth2">
            <li><a href="<%=dir%>/kr/sub/result/result.asp">컨설팅 실적</a></li>
        </ul>
	</li>

<% End If %>


<!-- 컨설팅 분야 -->
<% IF instr(urlPath,"/sub/client/notice") Then %>
	<li class="_location">
		<a href="<%=dir%>/kr/sub/client/notice.asp">공지사항<img src="<%=dir%>/img/sub/arrow_down.png" alt=""></a>
		<ul class="lnb_depth2">
			<li><a href="<%=dir%>/kr/sub/client/celebrate.asp">인증축하</a></li>
			<li><a href="<%=dir%>/kr/sub/client/qna.asp">Q&A</a></li>
			<li><a href="<%=dir%>/kr/sub/client/counsel.asp">상담문의</a></li>
			<li><a href="<%=dir%>/kr/sub/client/majornews.asp">메이저인증뉴스</a></li>
			<li><a href="<%=dir%>/kr/sub/client/complain.asp">신문고</a></li>
        </ul>
	</li>
<% ElseIf  instr(urlPath,"/sub/client/celebrate") Then %>
	<li class="_location">
		<a href="<%=dir%>/kr/sub/client/celebrate.asp">인증축하<img src="<%=dir%>/img/sub/arrow_down.png" alt=""></a>
		<ul class="lnb_depth2">
            <li><a href="<%=dir%>/kr/sub/client/notice.asp">공지사항</a></li>
			<li><a href="<%=dir%>/kr/sub/client/qna.asp">Q&A</a></li>
			<li><a href="<%=dir%>/kr/sub/client/counsel.asp">상담문의</a></li>
			<li><a href="<%=dir%>/kr/sub/client/majornews.asp">메이저인증뉴스</a></li>
			<li><a href="<%=dir%>/kr/sub/client/complain.asp">신문고</a></li>
        </ul>
	</li>
<% ElseIf  instr(urlPath,"/sub/client/qna") Then %>
	<li class="_location">
		<a href="<%=dir%>/kr/sub/client/qna.asp">Q&A<img src="<%=dir%>/img/sub/arrow_down.png" alt=""></a>
		<ul class="lnb_depth2">
            <li><a href="<%=dir%>/kr/sub/client/notice.asp">공지사항</a></li>
			<li><a href="<%=dir%>/kr/sub/client/celebrate.asp">인증축하</a></li>
			<li><a href="<%=dir%>/kr/sub/client/counsel.asp">상담문의</a></li>
			<li><a href="<%=dir%>/kr/sub/client/majornews.asp">메이저인증뉴스</a></li>
			<li><a href="<%=dir%>/kr/sub/client/complain.asp">신문고</a></li>
        </ul>
	</li>
<% ElseIf  instr(urlPath,"/sub/client/counsel") Then %>
	<li class="_location">
		<a href="<%=dir%>/kr/sub/client/counsel.asp">상담문의<img src="<%=dir%>/img/sub/arrow_down.png" alt=""></a>
		<ul class="lnb_depth2">
            <li><a href="<%=dir%>/kr/sub/client/notice.asp">공지사항</a></li>
			<li><a href="<%=dir%>/kr/sub/client/celebrate.asp">인증축하</a></li>
			<li><a href="<%=dir%>/kr/sub/client/qna.asp">Q&A</a></li>
			<li><a href="<%=dir%>/kr/sub/client/majornews.asp">메이저인증뉴스</a></li>
			<li><a href="<%=dir%>/kr/sub/client/complain.asp">신문고</a></li>
        </ul>
	</li>
<% ElseIf  instr(urlPath,"/sub/client/majornews") Then %>
	<li class="_location">
		<a href="<%=dir%>/kr/sub/client/majornews.asp">메이저인증뉴스<img src="<%=dir%>/img/sub/arrow_down.png" alt=""></a>
		<ul class="lnb_depth2">
            <li><a href="<%=dir%>/kr/sub/client/notice.asp">공지사항</a></li>
			<li><a href="<%=dir%>/kr/sub/client/celebrate.asp">인증축하</a></li>
			<li><a href="<%=dir%>/kr/sub/client/qna.asp">Q&A</a></li>
			<li><a href="<%=dir%>/kr/sub/client/counsel.asp">상담문의</a></li>
			<li><a href="<%=dir%>/kr/sub/client/complain.asp">신문고</a></li>
        </ul>
	</li>
<% ElseIf  instr(urlPath,"/sub/client/complain") Then %>
	<li class="_location">
		<a href="<%=dir%>/kr/sub/client/complain.asp">신문고<img src="<%=dir%>/img/sub/arrow_down.png" alt=""></a>
		<ul class="lnb_depth2">
            <li><a href="<%=dir%>/kr/sub/client/notice.asp">공지사항</a></li>
			<li><a href="<%=dir%>/kr/sub/client/celebrate.asp">인증축하</a></li>
			<li><a href="<%=dir%>/kr/sub/client/qna.asp">Q&A</a></li>
			<li><a href="<%=dir%>/kr/sub/client/counsel.asp">상담문의</a></li>
			<li><a href="<%=dir%>/kr/sub/client/majornews.asp">메이저인증뉴스</a></li>
        </ul>
	</li>
<% End If %>



<% IF instr(urlPath,"/sub/part/quality/01") Then %>
	<li class="_location">
		<a href="<%=dir%>/kr/sub/part/quality/01.asp">KS(제품)<img src="<%=dir%>/img/sub/arrow_down.png" alt=""></a>
		<ul class="lnb_depth2">
			<li><a href="<%=dir%>/kr/sub/part/quality/02.asp">KS(서비스)</a></li>
            <li><a href="<%=dir%>/kr/sub/part/quality/03.asp">KS(신재생에너지)</a></li>
            <li><a href="<%=dir%>/kr/sub/part/quality/04.asp">단체표준</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/05.asp">건축자재등 품질인정</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/06.asp">위생안전(KC)</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/07.asp">KCS, S마크</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/08.asp">Q마크</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/09.asp">K마크</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/10.asp">적합인증(CP)</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/11.asp">품질보증조달물품지정제도</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/12.asp">JIS</a></li>
        </ul>
	</li>
<% ElseIf  instr(urlPath,"/sub/part/quality/02") Then %>
	<li class="_location">
		<a href="<%=dir%>/kr/sub/part/quality/02.asp">KS(서비스)<img src="<%=dir%>/img/sub/arrow_down.png" alt=""></a>
		<ul class="lnb_depth2">
			<li><a href="<%=dir%>/kr/sub/part/quality/01.asp">KS(제품)</a></li>
            <li><a href="<%=dir%>/kr/sub/part/quality/03.asp">KS(신재생에너지)</a></li>
            <li><a href="<%=dir%>/kr/sub/part/quality/04.asp">단체표준</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/05.asp">건축자재등 품질인정</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/06.asp">위생안전(KC)</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/07.asp">KCS, S마크</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/08.asp">Q마크</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/09.asp">K마크</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/10.asp">적합인증(CP)</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/11.asp">품질보증조달물품지정제도</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/12.asp">JIS</a></li>
        </ul>
	</li>
<% ElseIf  instr(urlPath,"/sub/part/quality/03") Then %>
	<li class="_location">
		<a href="<%=dir%>/kr/sub/part/quality/03.asp">KS(신재생에너지)<img src="<%=dir%>/img/sub/arrow_down.png" alt=""></a>
		<ul class="lnb_depth2">
			<li><a href="<%=dir%>/kr/sub/part/quality/01.asp">KS(제품)</a></li>
            <li><a href="<%=dir%>/kr/sub/part/quality/02.asp">KS(서비스)</a></li>
            <li><a href="<%=dir%>/kr/sub/part/quality/04.asp">단체표준</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/05.asp">건축자재등 품질인정</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/06.asp">위생안전(KC)</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/07.asp">KCS, S마크</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/08.asp">Q마크</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/09.asp">K마크</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/10.asp">적합인증(CP)</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/11.asp">품질보증조달물품지정제도</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/12.asp">JIS</a></li>
        </ul>
	</li>
	<% ElseIf  instr(urlPath,"/sub/part/quality/04") Then %>
	<li class="_location">
		<a href="<%=dir%>/kr/sub/part/quality/04.asp">단체표준<img src="<%=dir%>/img/sub/arrow_down.png" alt=""></a>
		<ul class="lnb_depth2">
			<li><a href="<%=dir%>/kr/sub/part/quality/01.asp">KS(제품)</a></li>
            <li><a href="<%=dir%>/kr/sub/part/quality/02.asp">KS(서비스)</a></li>
            <li><a href="<%=dir%>/kr/sub/part/quality/03.asp">KS(신재생에너지)</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/05.asp">건축자재등 품질인정</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/06.asp">위생안전(KC)</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/07.asp">KCS, S마크</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/08.asp">Q마크</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/09.asp">K마크</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/10.asp">적합인증(CP)</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/11.asp">품질보증조달물품지정제도</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/12.asp">JIS</a></li>
        </ul>
	</li>     
<% ElseIf  instr(urlPath,"/sub/part/quality/05") Then %>
	<li class="_location">
		<a href="<%=dir%>/kr/sub/part/quality/05.asp">건축자재등 품질인정<img src="<%=dir%>/img/sub/arrow_down.png" alt=""></a>
		<ul class="lnb_depth2">
			<li><a href="<%=dir%>/kr/sub/part/quality/01.asp">KS(제품)</a></li>
            <li><a href="<%=dir%>/kr/sub/part/quality/02.asp">KS(서비스)</a></li>
            <li><a href="<%=dir%>/kr/sub/part/quality/03.asp">KS(신재생에너지)</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/04.asp">단체표준</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/06.asp">위생안전(KC)</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/07.asp">KCS, S마크</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/08.asp">Q마크</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/09.asp">K마크</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/10.asp">적합인증(CP)</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/11.asp">품질보증조달물품지정제도</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/12.asp">JIS</a></li>
        </ul>
	</li>
	<% ElseIf  instr(urlPath,"/sub/part/quality/06") Then %>
	<li class="_location">
		<a href="<%=dir%>/kr/sub/part/quality/06.asp">위생안전(KC)<img src="<%=dir%>/img/sub/arrow_down.png" alt=""></a>
		<ul class="lnb_depth2">
			<li><a href="<%=dir%>/kr/sub/part/quality/01.asp">KS(제품)</a></li>
            <li><a href="<%=dir%>/kr/sub/part/quality/02.asp">KS(서비스)</a></li>
            <li><a href="<%=dir%>/kr/sub/part/quality/03.asp">KS(신재생에너지)</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/04.asp">단체표준</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/05.asp">건축자재등 품질인정</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/07.asp">KCS, S마크</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/08.asp">Q마크</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/09.asp">K마크</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/10.asp">적합인증(CP)</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/11.asp">품질보증조달물품지정제도</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/12.asp">JIS</a></li>
        </ul>
	</li> 
	<% ElseIf  instr(urlPath,"/sub/part/quality/07") Then %>
	<li class="_location">
		<a href="<%=dir%>/kr/sub/part/quality/07.asp">KCS, S마크<img src="<%=dir%>/img/sub/arrow_down.png" alt=""></a>
		<ul class="lnb_depth2">
			<li><a href="<%=dir%>/kr/sub/part/quality/01.asp">KS(제품)</a></li>
            <li><a href="<%=dir%>/kr/sub/part/quality/02.asp">KS(서비스)</a></li>
            <li><a href="<%=dir%>/kr/sub/part/quality/03.asp">KS(신재생에너지)</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/04.asp">단체표준</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/05.asp">건축자재등 품질인정</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/06.asp">위생안전(KC)</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/08.asp">Q마크</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/09.asp">K마크</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/10.asp">적합인증(CP)</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/11.asp">품질보증조달물품지정제도</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/12.asp">JIS</a></li>
        </ul>
	</li> 
	<% ElseIf  instr(urlPath,"/sub/part/quality/08") Then %>
	<li class="_location">
		<a href="<%=dir%>/kr/sub/part/quality/08.asp">Q마크<img src="<%=dir%>/img/sub/arrow_down.png" alt=""></a>
		<ul class="lnb_depth2">
			<li><a href="<%=dir%>/kr/sub/part/quality/01.asp">KS(제품)</a></li>
            <li><a href="<%=dir%>/kr/sub/part/quality/02.asp">KS(서비스)</a></li>
            <li><a href="<%=dir%>/kr/sub/part/quality/03.asp">KS(신재생에너지)</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/04.asp">단체표준</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/05.asp">건축자재등 품질인정</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/06.asp">위생안전(KC)</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/07.asp">KCS, S마크</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/09.asp">K마크</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/10.asp">적합인증(CP)</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/11.asp">품질보증조달물품지정제도</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/12.asp">JIS</a></li>
        </ul>
	</li> 
	<% ElseIf  instr(urlPath,"/sub/part/quality/09") Then %>
	<li class="_location">
		<a href="<%=dir%>/kr/sub/part/quality/09.asp">K마크<img src="<%=dir%>/img/sub/arrow_down.png" alt=""></a>
		<ul class="lnb_depth2">
			<li><a href="<%=dir%>/kr/sub/part/quality/01.asp">KS(제품)</a></li>
            <li><a href="<%=dir%>/kr/sub/part/quality/02.asp">KS(서비스)</a></li>
            <li><a href="<%=dir%>/kr/sub/part/quality/03.asp">KS(신재생에너지)</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/04.asp">단체표준</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/05.asp">건축자재등 품질인정</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/06.asp">위생안전(KC)</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/07.asp">KCS, S마크</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/08.asp">Q마크</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/10.asp">적합인증(CP)</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/11.asp">품질보증조달물품지정제도</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/12.asp">JIS</a></li>
        </ul>
	</li> 
	<% ElseIf  instr(urlPath,"/sub/part/quality/10") Then %>
	<li class="_location">
		<a href="<%=dir%>/kr/sub/part/quality/10.asp">적합인증(CP)<img src="<%=dir%>/img/sub/arrow_down.png" alt=""></a>
		<ul class="lnb_depth2">
			<li><a href="<%=dir%>/kr/sub/part/quality/01.asp">KS(제품)</a></li>
            <li><a href="<%=dir%>/kr/sub/part/quality/02.asp">KS(서비스)</a></li>
            <li><a href="<%=dir%>/kr/sub/part/quality/03.asp">KS(신재생에너지)</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/04.asp">단체표준</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/05.asp">건축자재등 품질인정</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/06.asp">위생안전(KC)</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/07.asp">KCS, S마크</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/08.asp">Q마크</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/09.asp">K마크</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/11.asp">품질보증조달물품지정제도</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/12.asp">JIS</a></li>
        </ul>
	</li> 
	<% ElseIf  instr(urlPath,"/sub/part/quality/11") Then %>
	<li class="_location">
		<a href="<%=dir%>/kr/sub/part/quality/11.asp">품질보증조달물품지정제도<img src="<%=dir%>/img/sub/arrow_down.png" alt=""></a>
		<ul class="lnb_depth2">
			<li><a href="<%=dir%>/kr/sub/part/quality/01.asp">KS(제품)</a></li>
            <li><a href="<%=dir%>/kr/sub/part/quality/02.asp">KS(서비스)</a></li>
            <li><a href="<%=dir%>/kr/sub/part/quality/03.asp">KS(신재생에너지)</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/04.asp">단체표준</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/05.asp">건축자재등 품질인정</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/06.asp">위생안전(KC)</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/07.asp">KCS, S마크</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/08.asp">Q마크</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/09.asp">K마크</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/10.asp">적합인증(CP)</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/12.asp">JIS</a></li>
        </ul>
	</li> 
	<% ElseIf  instr(urlPath,"/sub/part/quality/12") Then %>
	<li class="_location">
		<a href="<%=dir%>/kr/sub/part/quality/12.asp">JIS<img src="<%=dir%>/img/sub/arrow_down.png" alt=""></a>
		<ul class="lnb_depth2">
			<li><a href="<%=dir%>/kr/sub/part/quality/01.asp">KS(제품)</a></li>
            <li><a href="<%=dir%>/kr/sub/part/quality/02.asp">KS(서비스)</a></li>
            <li><a href="<%=dir%>/kr/sub/part/quality/03.asp">KS(신재생에너지)</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/04.asp">단체표준</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/05.asp">건축자재등 품질인정</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/06.asp">위생안전(KC)</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/07.asp">KCS, S마크</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/08.asp">Q마크</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/09.asp">K마크</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/10.asp">적합인증(CP)</a></li>
			<li><a href="<%=dir%>/kr/sub/part/quality/11.asp">품질보증조달물품지정제도</a></li>
        </ul>
	</li> 
<% End If %>

<% IF instr(urlPath,"/sub/part/tech/01") Then %>
	<li class="_location">
		<a href="<%=dir%>/kr/sub/part/tech/01.asp">신제품인증(NEP)<img src="<%=dir%>/img/sub/arrow_down.png" alt=""></a>
		<ul class="lnb_depth2">
			<li><a href="<%=dir%>/kr/sub/part/tech/02.asp">신기술인증(NET)</a></li>
            <li><a href="<%=dir%>/kr/sub/part/tech/03.asp">방재신기술(NET)</a></li>
			<li><a href="<%=dir%>/kr/sub/part/tech/04.asp">조달우수제품</a></li>
			<li><a href="<%=dir%>/kr/sub/part/tech/05.asp">성능인증</a></li>
			<li><a href="<%=dir%>/kr/sub/part/tech/06.asp">혁신(시)제품</a></li>
        </ul>
	</li>
<% ElseIf  instr(urlPath,"/sub/part/tech/02") Then %>
	<li class="_location">
		<a href="<%=dir%>/kr/sub/part/tech/02.asp">신기술인증(NET)<img src="<%=dir%>/img/sub/arrow_down.png" alt=""></a>
		<ul class="lnb_depth2">
			<li><a href="<%=dir%>/kr/sub/part/tech/01.asp">신제품인증(NEP)</a></li>
            <li><a href="<%=dir%>/kr/sub/part/tech/03.asp">방재신기술(NET)</a></li>
			<li><a href="<%=dir%>/kr/sub/part/tech/04.asp">조달우수제품</a></li>
			<li><a href="<%=dir%>/kr/sub/part/tech/05.asp">성능인증</a></li>
			<li><a href="<%=dir%>/kr/sub/part/tech/06.asp">혁신(시)제품</a></li>
        </ul>
	</li>
<% ElseIf  instr(urlPath,"/sub/part/tech/03") Then %>
<li class="_location">
	<a href="<%=dir%>/kr/sub/part/tech/03.asp">방재신기술(NET)<img src="<%=dir%>/img/sub/arrow_down.png" alt=""></a>
	<ul class="lnb_depth2">
		<li><a href="<%=dir%>/kr/sub/part/tech/01.asp">신제품인증(NEP)</a></li>
		<li><a href="<%=dir%>/kr/sub/part/tech/02.asp">신기술인증(NET)</a></li>
		<li><a href="<%=dir%>/kr/sub/part/tech/04.asp">조달우수제품</a></li>
		<li><a href="<%=dir%>/kr/sub/part/tech/05.asp">성능인증</a></li>
		<li><a href="<%=dir%>/kr/sub/part/tech/06.asp">혁신(시)제품</a></li>
	</ul>
</li>	

<% ElseIf  instr(urlPath,"/sub/part/tech/04") Then %>
<li class="_location">
	<a href="<%=dir%>/kr/sub/part/tech/04.asp">조달우수제품<img src="<%=dir%>/img/sub/arrow_down.png" alt=""></a>
	<ul class="lnb_depth2">
		<li><a href="<%=dir%>/kr/sub/part/tech/01.asp">신제품인증(NEP)</a></li>
		<li><a href="<%=dir%>/kr/sub/part/tech/02.asp">신기술인증(NET)</a></li>
		<li><a href="<%=dir%>/kr/sub/part/tech/03.asp">방재신기술(NET)</a></li>
		<li><a href="<%=dir%>/kr/sub/part/tech/05.asp">성능인증</a></li>
		<li><a href="<%=dir%>/kr/sub/part/tech/06.asp">혁신(시)제품</a></li>
	</ul>
</li>
<% ElseIf  instr(urlPath,"/sub/part/tech/05") Then %>
<li class="_location">
	<a href="<%=dir%>/kr/sub/part/tech/05.asp">성능인증<img src="<%=dir%>/img/sub/arrow_down.png" alt=""></a>
	<ul class="lnb_depth2">
		<li><a href="<%=dir%>/kr/sub/part/tech/01.asp">신제품인증(NEP)</a></li>
		<li><a href="<%=dir%>/kr/sub/part/tech/02.asp">신기술인증(NET)</a></li>
		<li><a href="<%=dir%>/kr/sub/part/tech/03.asp">방재신기술(NET)</a></li>
		<li><a href="<%=dir%>/kr/sub/part/tech/04.asp">조달우수제품</a></li>
		<li><a href="<%=dir%>/kr/sub/part/tech/06.asp">혁신(시)제품</a></li>
	</ul>
</li>
<% ElseIf  instr(urlPath,"/sub/part/tech/06") Then %>
<li class="_location">
	<a href="<%=dir%>/kr/sub/part/tech/06.asp">혁신(시)제품<img src="<%=dir%>/img/sub/arrow_down.png" alt=""></a>
	<ul class="lnb_depth2">
		<li><a href="<%=dir%>/kr/sub/part/tech/01.asp">신제품인증(NEP)</a></li>
		<li><a href="<%=dir%>/kr/sub/part/tech/02.asp">신기술인증(NET)</a></li>
		<li><a href="<%=dir%>/kr/sub/part/tech/03.asp">방재신기술(NET)</a></li>
		<li><a href="<%=dir%>/kr/sub/part/tech/04.asp">조달우수제품</a></li>
		<li><a href="<%=dir%>/kr/sub/part/tech/05.asp">성능인증</a></li>
	</ul>
</li>
<% End If %>

<% IF instr(urlPath,"/sub/part/env/01") Then %>
	<li class="_location">
		<a href="<%=dir%>/kr/sub/part/env/01.asp">환경표지<img src="<%=dir%>/img/sub/arrow_down.png" alt=""></a>
		<ul class="lnb_depth2">
            <li><a href="<%=dir%>/kr/sub/part/env/02.asp">녹색인증</a></li>
			<li><a href="<%=dir%>/kr/sub/part/env/03.asp">GR인증</a></li>
			<li><a href="<%=dir%>/kr/sub/part/env/04.asp">환경성적표지(저탄소)</a></li>
			<li><a href="<%=dir%>/kr/sub/part/env/05.asp">저탄소인증</a></li>
        </ul>
	</li>
	<% ElseIf  instr(urlPath,"/sub/part/env/02") Then %>
<li class="_location">
	<a href="<%=dir%>/kr/sub/part/env/02.asp">녹색인증<img src="<%=dir%>/img/sub/arrow_down.png" alt=""></a>
	<ul class="lnb_depth2">
		<li><a href="<%=dir%>/kr/sub/part/env/01.asp">환경표지</a></li>
		<li><a href="<%=dir%>/kr/sub/part/env/03.asp">GR인증</a></li>
		<li><a href="<%=dir%>/kr/sub/part/env/04.asp">환경성적표지(저탄소)</a></li>
		<li><a href="<%=dir%>/kr/sub/part/env/05.asp">저탄소인증</a></li>
	</ul>
</li>
<% ElseIf  instr(urlPath,"/sub/part/env/03") Then %>
<li class="_location">
	<a href="<%=dir%>/kr/sub/part/env/03.asp">GR인증<img src="<%=dir%>/img/sub/arrow_down.png" alt=""></a>
	<ul class="lnb_depth2">
		<li><a href="<%=dir%>/kr/sub/part/env/01.asp">환경표지</a></li>
		<li><a href="<%=dir%>/kr/sub/part/env/02.asp">녹색인증</a></li>
		<li><a href="<%=dir%>/kr/sub/part/env/04.asp">환경성적표지(저탄소)</a></li>
		<li><a href="<%=dir%>/kr/sub/part/env/05.asp">저탄소인증</a></li>
	</ul>
</li>
<% ElseIf  instr(urlPath,"/sub/part/env/04") Then %>
	<li class="_location">
		<a href="<%=dir%>/kr/sub/part/env/04.asp">환경성적표지(저탄소)<img src="<%=dir%>/img/sub/arrow_down.png" alt=""></a>
		<ul class="lnb_depth2">
			<li><a href="<%=dir%>/kr/sub/part/env/01.asp">환경표지</a></li>
            <li><a href="<%=dir%>/kr/sub/part/env/02.asp">녹색인증</a></li>
			<li><a href="<%=dir%>/kr/sub/part/env/03.asp">GR인증</a></li>
			<li><a href="<%=dir%>/kr/sub/part/env/05.asp">저탄소인증</a></li>
        </ul>
	</li>
<% ElseIf  instr(urlPath,"/sub/part/env/05") Then %>
<li class="_location">
	<a href="<%=dir%>/kr/sub/part/env/05.asp">저탄소인증<img src="<%=dir%>/img/sub/arrow_down.png" alt=""></a>
	<ul class="lnb_depth2">
		<li><a href="<%=dir%>/kr/sub/part/env/01.asp">환경표지</a></li>
		<li><a href="<%=dir%>/kr/sub/part/env/02.asp">녹색인증</a></li>
		<li><a href="<%=dir%>/kr/sub/part/env/03.asp">GR인증</a></li>
		<li><a href="<%=dir%>/kr/sub/part/env/04.asp">환경성적표지(저탄소)</a></li>
	</ul>
</li>
<% End If %>

<% IF instr(urlPath,"/sub/part/cor/01") Then %>
	<li class="_location">
		<a href="<%=dir%>/kr/sub/part/cor/01.asp">이노비즈<img src="<%=dir%>/img/sub/arrow_down.png" alt=""></a>
		<ul class="lnb_depth2">
            <li><a href="<%=dir%>/kr/sub/part/cor/02.asp">메인비즈</a></li>
			<li><a href="<%=dir%>/kr/sub/part/cor/03.asp">벤처기업확인</a></li>
			<li><a href="<%=dir%>/kr/sub/part/cor/04.asp">기업부설연구소</a></li>
			<li><a href="<%=dir%>/kr/sub/part/cor/05.asp">ISO9001인증</a></li>
			<li><a href="<%=dir%>/kr/sub/part/cor/06.asp">ISO14001인증</a></li>
			<li><a href="<%=dir%>/kr/sub/part/cor/07.asp">ISO45001인증</a></li>
        </ul>
	</li>
<% ElseIf  instr(urlPath,"/sub/part/cor/02") Then %>
<li class="_location">
	<a href="<%=dir%>/kr/sub/part/cor/02.asp">메인비즈<img src="<%=dir%>/img/sub/arrow_down.png" alt=""></a>
	<ul class="lnb_depth2">
		<li><a href="<%=dir%>/kr/sub/part/cor/01.asp">이노비즈</a></li>
		<li><a href="<%=dir%>/kr/sub/part/cor/03.asp">벤처기업확인</a></li>
		<li><a href="<%=dir%>/kr/sub/part/cor/04.asp">기업부설연구소</a></li>
		<li><a href="<%=dir%>/kr/sub/part/cor/05.asp">ISO9001인증</a></li>
		<li><a href="<%=dir%>/kr/sub/part/cor/06.asp">ISO14001인증</a></li>
		<li><a href="<%=dir%>/kr/sub/part/cor/07.asp">ISO45001인증</a></li>
	</ul>
</li>
<% ElseIf  instr(urlPath,"/sub/part/cor/03") Then %>
<li class="_location">
	<a href="<%=dir%>/kr/sub/part/cor/03.asp">벤처기업확인<img src="<%=dir%>/img/sub/arrow_down.png" alt=""></a>
	<ul class="lnb_depth2">
		<li><a href="<%=dir%>/kr/sub/part/cor/01.asp">이노비즈</a></li>
		<li><a href="<%=dir%>/kr/sub/part/cor/02.asp">메인비즈</a></li>
		<li><a href="<%=dir%>/kr/sub/part/cor/04.asp">기업부설연구소</a></li>
		<li><a href="<%=dir%>/kr/sub/part/cor/05.asp">ISO9001인증</a></li>
		<li><a href="<%=dir%>/kr/sub/part/cor/06.asp">ISO14001인증</a></li>
		<li><a href="<%=dir%>/kr/sub/part/cor/07.asp">ISO45001인증</a></li>
	</ul>
</li>
<% ElseIf  instr(urlPath,"/sub/part/cor/04") Then %>
<li class="_location">
	<a href="<%=dir%>/kr/sub/part/cor/04.asp">기업부설연구소<img src="<%=dir%>/img/sub/arrow_down.png" alt=""></a>
	<ul class="lnb_depth2">
		<li><a href="<%=dir%>/kr/sub/part/cor/01.asp">이노비즈</a></li>
		<li><a href="<%=dir%>/kr/sub/part/cor/02.asp">메인비즈</a></li>
		<li><a href="<%=dir%>/kr/sub/part/cor/03.asp">벤처기업확인</a></li>
		<li><a href="<%=dir%>/kr/sub/part/cor/05.asp">ISO9001인증</a></li>
		<li><a href="<%=dir%>/kr/sub/part/cor/06.asp">ISO14001인증</a></li>
		<li><a href="<%=dir%>/kr/sub/part/cor/07.asp">ISO45001인증</a></li>
	</ul>
</li>
<% ElseIf  instr(urlPath,"/sub/part/cor/05") Then %>
<li class="_location">
	<a href="<%=dir%>/kr/sub/part/cor/05.asp">기업부설연구소<img src="<%=dir%>/img/sub/arrow_down.png" alt=""></a>
	<ul class="lnb_depth2">
		<li><a href="<%=dir%>/kr/sub/part/cor/01.asp">이노비즈</a></li>
		<li><a href="<%=dir%>/kr/sub/part/cor/02.asp">메인비즈</a></li>
		<li><a href="<%=dir%>/kr/sub/part/cor/03.asp">벤처기업확인</a></li>
		<li><a href="<%=dir%>/kr/sub/part/cor/04.asp">기업부설연구소</a></li>
		<li><a href="<%=dir%>/kr/sub/part/cor/06.asp">ISO14001인증</a></li>
		<li><a href="<%=dir%>/kr/sub/part/cor/07.asp">ISO45001인증</a></li>
	</ul>
</li>
<% ElseIf  instr(urlPath,"/sub/part/cor/06") Then %>
<li class="_location">
	<a href="<%=dir%>/kr/sub/part/cor/06.asp">기업부설연구소<img src="<%=dir%>/img/sub/arrow_down.png" alt=""></a>
	<ul class="lnb_depth2">
		<li><a href="<%=dir%>/kr/sub/part/cor/01.asp">이노비즈</a></li>
		<li><a href="<%=dir%>/kr/sub/part/cor/02.asp">메인비즈</a></li>
		<li><a href="<%=dir%>/kr/sub/part/cor/03.asp">벤처기업확인</a></li>
		<li><a href="<%=dir%>/kr/sub/part/cor/04.asp">기업부설연구소</a></li>
		<li><a href="<%=dir%>/kr/sub/part/cor/05.asp">ISO9001인증</a></li>
		<li><a href="<%=dir%>/kr/sub/part/cor/07.asp">ISO45001인증</a></li>
	</ul>
</li>
<% ElseIf  instr(urlPath,"/sub/part/cor/07") Then %>
<li class="_location">
	<a href="<%=dir%>/kr/sub/part/cor/07.asp">ISO45001인증<img src="<%=dir%>/img/sub/arrow_down.png" alt=""></a>
	<ul class="lnb_depth2">
		<li><a href="<%=dir%>/kr/sub/part/cor/01.asp">이노비즈</a></li>
		<li><a href="<%=dir%>/kr/sub/part/cor/02.asp">메인비즈</a></li>
		<li><a href="<%=dir%>/kr/sub/part/cor/03.asp">벤처기업확인</a></li>
		<li><a href="<%=dir%>/kr/sub/part/cor/04.asp">기업부설연구소</a></li>
		<li><a href="<%=dir%>/kr/sub/part/cor/05.asp">ISO9001인증</a></li>
		<li><a href="<%=dir%>/kr/sub/part/cor/06.asp">ISO14001인증</a></li>
	</ul>
</li>
<% End If %>
<script>
    const _location = document.querySelectorAll("._location > a");
    const arrowimg = document.querySelectorAll("._location > a > img");
    const lnb_depth2 = document.querySelectorAll(".lnb_depth2");

    let num = 0;

    for(let i=0; i<_location.length; i++)
    {
        _location[i].addEventListener("click",function(e){
			
            e.preventDefault();
            _location[i].classList.toggle("on");
            lnb_depth2[i].classList.toggle("on");

            num+=1;

            console.log(arrowimg);

            if(num%2 == 1) //클릭했을 때
            {
                arrowimg[i].src = "/img/sub/arrow_up.png";
            }
            else
            {
                arrowimg[i].src = "/img/sub/arrow_down.png";
            }

        });
    }
</script>