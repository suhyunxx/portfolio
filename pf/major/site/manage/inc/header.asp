<body>
<%
If Len(W_LEVEL)<>1 Then
	Response.Write "<script>alert('접속 권한이 없습니다.'); location.href='/site/manage'</script>"
	Response.End
End If
%>

<div id="wrap">

	<header>
		<div class="logo"><a href="/site/manage/main.asp"><img src="/site/manage/images/layout/img_logo.png" alt=""></a></div>
		<div class="menu">
			<ul>
				<li><a href="http://wims.webmoa.co.kr/" target="_blank"><img src="/site/manage/images/layout/btn_wims.png" alt="wims"></a></li>
				<li><a href="/" target="_blank"><span><i class="xi-home"></i></span></a></li>
				<li>
					<a href="#;"><span><i class="xi-power-off"></i></span></a>
					<div class="depth2">
						<div class="box">
							<p><strong><%=W_NAME%></strong><%=W_ID%></p>
							<ul>
								<li><a href="/site/manage/sub-basic/admin-info.asp"><span><i><img src="/site/manage/images/layout/icon_account.svg" alt=""></i>계정정보</span></a></li>
								<li><a href="/site/manage/login_ok.asp?mode=out"><span><i class="xi-power-off"></i>로그아웃</span></a></li>
							</ul>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</header>

	<article id="container">
		<nav id="leftMenu">
			<div class="scrollbox scrollbar-inner">
				<ul>
				<%If W_LEVEL="1" Or InStr(admin_a_auth, "0-basic")>0 Then%>
					<li <%If InStr(urlPath, "sub-basic")>0 Then Response.Write "class='on'"%>>
						<a href="#;"><i><img src="/site/manage/images/layout/icon_base.svg" class="svg" alt=""></i> 기본 설정</a>
						<ul class="subDepth">
							<li <%If InStr(urlPath, "admin-info") Then Response.Write "class='on'"%>><a href="/site/manage/sub-basic/admin-info.asp">관리자 정보</a></li>
							<%If W_LEVEL="1" Or InStr(admin_a_auth, "1-site-info")>0 Then%>
								<li <%If InStr(urlPath, "site-info.asp") Then Response.Write "class='on'"%>><a href="/site/manage/sub-basic/site-info.asp">사이트 설정</a></li>
							<%End If%>
							<%If W_LEVEL="1" Or InStr(admin_a_auth, "1-mall-info")>0 Then%>
								<li <%If InStr(urlPath, "mall-info.asp") Then Response.Write "class='on'"%>><a href="/site/manage/sub-basic/mall-info.asp">쇼핑몰 설정</a></li>
							<%End If%>
							<%If W_LEVEL="1" Or InStr(admin_a_auth, "1-account-admin")>0 Then%>
								<li <%If InStr(urlPath, "account-admin.asp") Then Response.Write "class='on'"%>><a href="/site/manage/sub-basic/account-admin.asp">관리자 계정 설정</a></li>
							<%End If%>
						</ul>
					</li>
				<%End If%>

				<%If W_LEVEL="1" Or InStr(admin_a_auth, "0-member")>0 Then%>
					<li <%If InStr(urlPath, "sub-member")>0 Then Response.Write "class='on'"%>>
						<a href="#;"><i><img src="/site/manage/images/layout/icon_member.svg" class="svg" alt=""></i> 회원 관리</a>
						<ul class="subDepth">
							<%
							Set RsMem = Server.CreateObject("ADODB.Recordset")
							Sql = "SELECT COUNT(*) FROM tbl_member WHERE m_lev NOT IN ('1', '2', '3')"
							RsMem.Open Sql, Dbcon, 1
								member_count = RsMem(0)
							RsMem.Close
							Set RsMem = Nothing
							%>
							<%If W_LEVEL="1" Or InStr(admin_a_auth, "1-member-list")>0 Then%>
								<li <%If InStr(urlPath, "member.asp") Then Response.Write "class='on'"%>><a href="/site/manage/sub-member/member.asp">회원 관리
							<span><%=member_count%></span>
							</a></li>
							<%End If%>
							<%If W_LEVEL="1" Or InStr(admin_a_auth, "1-withdraw")>0 Then%>
								<li <%If InStr(urlPath, "withdraw.asp") Then Response.Write "class='on'"%>><a href="/site/manage/sub-member/withdraw.asp">탈퇴 회원</a></li>
							<%End If%>
							<%If W_LEVEL="1" Or InStr(admin_a_auth, "1-member-level")>0 Then%>
								<li <%If InStr(urlPath, "member-level.asp") Then Response.Write "class='on'"%>><a href="/site/manage/sub-member/member-level.asp">회원 등급 관리</a></li>
							<%End If%>
							<%If W_LEVEL="1" Or InStr(admin_a_auth, "1-member-mail")>0 Then%>
								<li <%If InStr(urlPath, "group-mail-send.asp") Then Response.Write "class='on'"%>><a href="/site/manage/sub-member/group-mail-send.asp">단체 메일 발송</a></li>
							<%End If%>
						</ul>
					</li>
				<%End If%>
				<%	If W_LEVEL="1" Or InStr(admin_a_auth, "0-recruit")>0 Then%>
					<li <%If InStr(urlPath, "sub-recruit")>0 Then Response.Write "class='on'"%>>
						<a href="#;"><i><img src="/site/manage/images/layout/icon_recruit.svg" class="svg" alt=""></i> 채용 관리</a>
						<ul class="subDepth">
						<%
							Set Rsrecruit = Server.CreateObject("ADODB.Recordset")
							Sql = "SELECT COUNT(*) FROM tbl_recruit "
							Rsrecruit.Open Sql, Dbcon, 1
								recruit_count = Rsrecruit(0)
							Rsrecruit.Close
							Set Rsrecruit = Nothing
						%>
							<%If W_LEVEL="1" Or InStr(admin_a_auth, "1-recruit-list")>0 Then%>
								<li <%If InStr(urlPath, "recruit.asp") Then Response.Write "class='on'"%>><a href="/site/manage/sub-recruit/recruit.asp">채용 관리
								<span class="count"><%=recruit_count%></span></a></li>
							<%End If%>
							<%If W_LEVEL="1" Or InStr(admin_a_auth, "1-recruit-list")>0 Then%>
								<li <%If InStr(urlPath, "recruit_e.asp") Then Response.Write "class='on'"%>><a href="/site/manage/sub-recruit/recruit_e.asp">마감된 채용리스트</a></li>
							<%End If%>
							<%If W_LEVEL="1" Or InStr(admin_a_auth, "1-recruit-reg")>0 Then%>
								<li <%If InStr(urlPath, "recruit-reg.asp") Then Response.Write "class='on'"%>><a href="/site/manage/sub-recruit/recruit-reg.asp?mode=reg">채용 등록</a></li>
							<%End If%>
							<%If W_LEVEL="1" Or InStr(admin_a_auth, "1-application-list")>0 Then%>
								<li <%If InStr(urlPath, "application-list.asp") Then Response.Write "class='on'"%>><a href="/site/manage/sub-recruit/application-list.asp">지원자 관리</a></li>
							<%End If%>
						</ul>
					</li>
				<%End If%>
				<%If W_LEVEL="1" Or InStr(admin_a_auth, "0-product")>0 Then%>
					<li <%If InStr(urlPath, "sub-product")>0 Then Response.Write "class='on'"%>>
						<a href="#;"><i><img src="/site/manage/images/layout/icon_product.svg" class="svg" alt=""></i> 제품 관리</a>
						<ul>
							<%
							Set RsProd = Server.CreateObject("ADODB.Recordset")
							Sql = "SELECT COUNT(*) FROM tbl_prod "
							RsProd.Open Sql, Dbcon, 1
								product_count = RsProd(0)
							RsProd.Close
							Set RsProd = Nothing
							%>
							<%If W_LEVEL="1" Or InStr(admin_a_auth, "1-prod-list")>0 Then%>
								<li <%If InStr(urlPath, "prod.asp") Then Response.Write "class='on'"%>><a href="/site/manage/sub-product/prod.asp">제품 관리
								<span class="count"><%=product_count%></span></a></li>
							<%End If%>
							<%If W_LEVEL="1" Or InStr(admin_a_auth, "1-prod-reg")>0 Then%>
								<li <%If InStr(urlPath, "prod-reg.asp") Then Response.Write "class='on'"%>><a href="/site/manage/sub-product/prod-reg.asp?mode=reg">제품 등록</a></li>
							<%End If%>
							<%If W_LEVEL="1" Or InStr(admin_a_auth, "1-xlsreg")>0 Then%>
								<li <%If InStr(urlPath, "prod-excel-upload.asp") Then Response.Write "class='on'"%>><a href="/site/manage/sub-product/prod-excel-upload.asp">엑셀 일괄등록</a></li>
							<%End If%>
							<%If W_LEVEL="1" Or InStr(admin_a_auth, "1-prod-cate")>0 Then%>
								<li <%If InStr(urlPath, "cate.asp") Then Response.Write "class='on'"%>><a href="/site/manage/sub-product/cate.asp">제품 카테고리 관리</a></li>
							<%End If%>
						</ul>
					</li>
				<%End If%>
				<%If W_LEVEL="1" Or InStr(admin_a_auth, "0-order")>0 Then%>
					<li <%If InStr(urlPath, "sub-order")>0 Then Response.Write "class='on'"%>>
						<a href="#;"><i><img src="/site/manage/images/layout/icon_order.svg" class="svg" alt=""></i> 주문 관리</a>
						<ul>
							<%
							Set RsOrd = Server.CreateObject("ADODB.Recordset")
							Sql = "SELECT COUNT(*), ISNULL(SUM(o_amount), 0) FROM tbl_mall_order WHERE o_state='결제대기'"
							RsOrd.Open Sql, Dbcon, 1
								order_count1 = RsOrd(0)
								order_amount1 = RsOrd(1)
							RsOrd.Close
							Sql = "SELECT COUNT(*), ISNULL(SUM(o_amount), 0) FROM tbl_mall_order WHERE o_state='결제완료'"
							RsOrd.Open Sql, Dbcon, 1
								order_count2 = RsOrd(0)
								order_amount2 = RsOrd(1)
							RsOrd.Close
							Sql = "SELECT COUNT(*), ISNULL(SUM(o_amount), 0) FROM tbl_mall_order WHERE o_state='발송준비'"
							RsOrd.Open Sql, Dbcon, 1
								order_count3 = RsOrd(0)
								order_amount3 = RsOrd(1)
							RsOrd.Close
							Sql = "SELECT COUNT(*), ISNULL(SUM(o_amount), 0) FROM tbl_mall_order WHERE o_state='발송완료'"
							RsOrd.Open Sql, Dbcon, 1
								order_count4 = RsOrd(0)
								order_amount4 = RsOrd(1)
							RsOrd.Close
							Set RsOrd = Nothing
							%>
							<%If W_LEVEL="1" Or InStr(admin_a_auth, "1-order-list")>0 Then%>
								<li <%If InStr(urlPath, "order.asp") Then Response.Write "class='on'"%>><a href="/site/manage/sub-order/order.asp">주문 관리</a>
									<ul>
										<li><a href="/site/manage/sub-order/order.asp?s_state=결제대기">결제대기
										<%If order_count1>0 Then%><span class="count"><%=order_count1%></span><%End If%></a></li>
										<li><a href="/site/manage/sub-order/order.asp?s_state=결제완료">결제완료
										<%If order_count2>0 Then%><span class="count"><%=order_count2%></span><%End If%></a></li>
										<li><a href="/site/manage/sub-order/order.asp?s_state=발송준비">발송준비
										<%If order_count3>0 Then%><span class="count"><%=order_count3%></span><%End If%></a></li>
										<li><a href="/site/manage/sub-order/order.asp?s_state=발송완료">발송완료
										<%If order_count4>0 Then%><span class="count"><%=order_count4%></span><%End If%></a></li>
										<li><a href="/site/manage/sub-order/order.asp?s_state=주문취소">주문취소</a></li>
										<li><a href="/site/manage/sub-order/order.asp?s_state=교환">교환</a></li>
										<li><a href="/site/manage/sub-order/order.asp?s_state=반품">반품</a></li>
									<!--<li class="<%If InStr(urlPath, "sub-order")>0 Then Response.Write "on"%>"><a href="/site/manage/sub-order/order.asp?s_state=-1">(미주문)</a></li> -->
									</ul>
								</li>
							<%End If%>
							<%If W_LEVEL="1" Or InStr(admin_a_auth, "1-order-stat")>0 Then%>
							<li <%If InStr(urlPath, "order-stat")>0 Then Response.Write "class='on'"%>><a href="/site/manage/sub-order/order-stat-day.asp">주문 통계</a>
								<ul>
									<li><a href="/site/manage/sub-order/order-stat-day.asp">일별 주문현황</a></li>
									<li><a href="/site/manage/sub-order/order-stat-month.asp">월별 주문현황</a></li>
									<li><a href="/site/manage/sub-order/order-stat-prod.asp">제품별 주문현황</a></li>
								</ul>
							</li>
							<%End If%>
							<%If W_LEVEL="1" Or InStr(admin_a_auth, "1-order-coupon")>0 Then%>
							<li <%If InStr(urlPath, "coupon")>0 Then Response.Write "class='on'"%>><a href="/site/manage/sub-order/coupon.asp">쿠폰 관리</a>
								<ul>
									<li><a href="/site/manage/sub-order/coupon.asp">쿠폰 관리</a></li>
									<li><a href="/site/manage/sub-order/coupon-dl.asp">발급된 쿠폰 관리</a></li>
								</ul></li>
							<%End If%>
						</ul>
					</li>
				<%End If%>
				<%If W_LEVEL="1" Or InStr(admin_a_auth, "0-page")>0 Then%>
					<li <%If InStr(urlPath, "sub-page")>0 Then Response.Write "class='on'"%>>
						<a href="#;"><i><img src="/site/manage/images/layout/icon_page.svg" class="svg" alt=""></i> 컨텐츠 관리</a>
						<ul>
							<%
							Set RsPg = Server.CreateObject("ADODB.Recordset")
							Sql = "SELECT idx, p_page1, p_page2, p_page3 FROM tbl_page ORDER BY p_lev ASC "
							RsPg.Open Sql, Dbcon, 1
							page_count = RsPg.RecordCount
							%>
							<%If W_LEVEL="1" Or InStr(admin_a_auth, "1-page-setting")>0 Then%>
								<li <%If InStr(urlPath, "sub-page/index.asp") Then Response.Write "class='on'"%>><a href="/site/manage/sub-page/">컨텐츠 페이지 관리
								<span class="count"><%=page_count%></span></a></li>
							<%End If%>
							<%If W_LEVEL="1" Or InStr(admin_a_auth, "1-page-list")>0 Then%>
								<li <%If InStr(urlPath, "sub-page/page.asp") Then Response.Write "class='on'"%>><a href="#">컨텐츠 페이지 목록</a>
								<ul>
									<%
									Do Until RsPg.EOF
										pg_idx = RsPg("idx")
										pg_page1 = RsPg("p_page1")
										pg_page2 = RsPg("p_page2")
										pg_page3 = RsPg("p_page3")
										%>
										<li class="<%If InStr(urlPath, "sub-page")>0 And CStr(Request("idx"))=CStr(pg_idx) Then Response.Write "on"%>"><a href="/site/manage/sub-page/page.asp?mode=mod&idx=<%=pg_idx%>">
										<%=pg_page1%>
										<%If pg_page2<>"" Then Response.Write " > " & pg_page2%>
										<%If pg_page3<>"" Then Response.Write " > " & pg_page3%></a></li>
										<%
										RsPg.Movenext
									Loop
									RsPg.Close
									Set RsPg = Nothing
									%>
								</ul>
							</li>
							<%End If%>
							<%If W_LEVEL="1" Or InStr(admin_a_auth, "1-page-cate")>0 Then%>
								<li <%If InStr(urlPath, "sub-page/cate.asp") Then Response.Write "class='on'"%>><a href="/site/manage/sub-page/cate.asp">페이지 카테고리 관리</a></li>
							<%End If%>
							<%If W_LEVEL="1" Or InStr(admin_a_auth, "1-popup")>0 Then%>
								<li <%If InStr(urlPath, "sub-page/popup.asp") Then Response.Write "class='on'"%>><a href="/site/manage/sub-page/popup.asp">팝업 관리</a></li>
							<%End If%>
							<%If W_LEVEL="1" Or InStr(admin_a_auth, "1-banner")>0 Then%>
								<li <%If InStr(urlPath, "sub-page/banner.asp") Then Response.Write "class='on'"%>><a href="/site/manage/sub-page/banner.asp">배너 관리</a>
								<ul>
									<%
									Set RsBn = Server.CreateObject("ADODB.Recordset")
									Sql = "SELECT bc_name FROM tbl_banner_config ORDER BY bc_lev DESC, bc_name ASC "
									RsBn.Open Sql, Dbcon, 1
									Do Until RsBn.EOF
										bn_bc_name = RsBn("bc_name")
										%>
										<li class="<%If InStr(urlPath, "sub-page")>0 And CStr(Request("s_bc_name"))=CStr(bn_bc_name) Then Response.Write "on"%>"><a href="/site/manage/sub-page/banner.asp?s_bc_name=<%=Server.URLEncode(bn_bc_name)%>"><%=bn_bc_name%></a></li>
										<%
										RsBn.Movenext
									Loop
									RsBn.Close
									Set RsBn = Nothing
									%>
								</ul></li>
							<%End If%>
							<%If W_LEVEL="1" Or InStr(admin_a_auth, "1-text-contents")>0 Then%>
								<li <%If InStr(urlPath, "text-contents.asp") Then Response.Write "class='on'"%>><a href="/site/manage/sub-page/text-contents.asp">텍스트 컨텐츠 관리</a></li>
							<%End If%>
						</ul>
					</li>
				<%End If%>
				<%If W_LEVEL="1" Or InStr(admin_a_auth, "0-bbs")>0 Then%>
					<li <%If InStr(urlPath, "sub-bbs")>0 Then Response.Write "class='on'"%>>
						<a href="#;"><i><img src="/site/manage/images/layout/icon_board.svg" class="svg" alt=""></i> 게시판 관리</a>
						<ul>
							<%
							Set RsB = Server.CreateObject("ADODB.Recordset")
							Sql = "SELECT A.idx, A.k_group, A.k_id, COUNT(B.idx) b_count FROM tbl_board_id A "
							Sql = Sql & " LEFT JOIN tbl_board_data B ON A.idx=B.board_idx AND Dateadd(day, -1, getdate())<B.regdate "
							Sql = Sql & " GROUP BY A.idx, A.k_group, A.k_id, A.p_lev "
							Sql = Sql & " ORDER BY A.p_lev, A.idx"
							RsB.Open Sql, Dbcon, 1
							bbs_count = RsB.RecordCount
							%>
							<%If W_LEVEL="1" Or InStr(admin_a_auth, "1-bbs-setting")>0 Then%>
							<li <%If InStr(urlPath, "bbs-setting.asp")>0 Then Response.Write "class='on'"%>><a href="/site/manage/sub-bbs/bbs-setting.asp">게시판 관리
							<span class="count"><%=bbs_count%></span></a></li>
							<%End If%>
							<%If W_LEVEL="1" Or InStr(admin_a_auth, "1-bbs-list")>0 Then%>
							<li <%If InStr(urlPath, "sub-bbs/index.asp")>0 Then Response.Write "class='on'"%>><a href="#;">게시판 목록</a>
								<ul>
									<%
									Do Until RsB.EOF
										bi_idx = RsB("idx")
										bi_k_group = RsB("k_group")
										bi_k_id = RsB("k_id")
										bi_b_count = RsB("b_count")
										%>
										<li class="<%If InStr(urlPath, "sub-bbs")>0 Then Response.Write "on"%> sublist <%If InStr(urlPath, "sub-bbs")>0 And CStr(Request("bid"))=CStr(bi_idx) Then Response.Write "on"%>">
											<a href="/site/manage/sub-bbs/?bid=<%=bi_idx%>&mode=list">
											<%If bi_k_group<>"" Then Response.Write bi_k_group & " > "%>
											<%=bi_k_id%>
											<%If bi_b_count>0 Then%><span class="count2">N</span><%End If%>
											</a>
										</li>
										<%
										RsB.Movenext
									Loop
									RsB.Close
									Set RsB = Nothing
									%>
								</ul>
							</li>
							<%End If%>
						</ul>
					</li>
				<%End If%>
				<%If W_LEVEL="1" Or InStr(admin_a_auth, "0-ebook")>0 Then%>
					<li <%If InStr(urlPath, "sub-ebook")>0 Then Response.Write "class='on'"%>>
						<a href="#;"><i><img src="/site/manage/images/layout/icon_ebook.svg" class="svg" alt=""></i> E-Book 관리</a>
						<ul>
							<%If W_LEVEL="1" Or InStr(admin_a_auth, "1-ebook")>0 Then%>
								<li <%If InStr(urlPath, "ebook.asp") Then Response.Write "class='on'"%>><a href="/site/manage/sub-ebook/ebook.asp">E-Book 관리</a></li>
							<%End If%>
						</ul>
					</li>
				<%End If%>
				<%If W_LEVEL="1" Or InStr(admin_a_auth, "0-stats")>0 Then%>
					<li <%If InStr(urlPath, "sub-stats")>0 Then Response.Write "class='on'"%>>
						<a href="#;"><i><img src="/site/manage/images/layout/icon_statistics.svg" class="svg" alt=""></i> 통계</a>
						<ul>
							<%If W_LEVEL="1" Or InStr(admin_a_auth, "1-visit-stats")>0 Then%>
							<li <%If InStr(urlPath, "visit-stats")>0 Then Response.Write "class='on'"%>><a href="/site/manage/sub-stats/visit-stats.asp">접속자 통계</a></li>
							<%End If%>
							<%If W_LEVEL="1" Or InStr(admin_a_auth, "1-stats-detail")>0 Then%>
							<li <%If InStr(urlPath, "visit-detail.asp")>0 Then Response.Write "class='on'"%>><a href="/site/manage/sub-stats/visit-detail.asp">세부 접속 로그</a></li>
							<%End If%>
							<%If W_LEVEL="1" Or InStr(admin_a_auth, "1-member-stats")>0 Then%>
							<li <%If InStr(urlPath, "member-stats")>0 Then Response.Write "class='on'"%>><a href="/site/manage/sub-stats/member-stats.asp">회원 통계</a></li>
							<%End If%>
							<%If W_LEVEL="1" Or InStr(admin_a_auth, "1-bbs-stats")>0 Then%>
							<li <%If InStr(urlPath, "bbs-stats")>0 Then Response.Write "class='on'"%>><a href="/site/manage/sub-stats/bbs-stats-month.asp">게시물 통계</a></li>
							<%End If%>
							<%If W_LEVEL="1" Or InStr(admin_a_auth, "1-traffic")>0 Then%>
								<li <%If InStr(urlPath, "traffic.asp") Then Response.Write "class='on'"%>><a href="/site/manage/sub-stats/traffic.asp">일일트래픽 통계</a></li>
							<%End If%>
						</ul>
					</li>
				<%End If%>
				<%If W_LEVEL="1" Or InStr(admin_a_auth, "0-other")>0 Then%>
					<li <%If InStr(urlPath, "sub-other")>0 Then Response.Write "class='on'"%>>
						<a href="#;"><i><img src="/site/manage/images/layout/icon_etc.svg" class="svg" alt=""></i> 기타 설정</a>
						<ul>
							<%If W_LEVEL="1" Or InStr(admin_a_auth, "1-seo")>0 Then%>
								<li <%If InStr(urlPath, "seo.asp") Then Response.Write "class='on'"%>><a href="/site/manage/sub-other/seo.asp">검색엔진 최적화 설정</a></li>
							<%End If%>
							<%If W_LEVEL="1" Or InStr(admin_a_auth, "1-smtp")>0 Then%>
								<li <%If InStr(urlPath, "smtp.asp") Then Response.Write "class='on'"%>><a href="/site/manage/sub-other/smtp.asp">메일 발송 서버 설정</a></li>
							<%End If%>
							<%If W_LEVEL="1" Or InStr(admin_a_auth, "1-favicon")>0 Then%>
								<li <%If InStr(urlPath, "favicon.asp") Then Response.Write "class='on'"%>><a href="/site/manage/sub-other/favicon.asp">파비콘 설정</a></li>
							<%End If%>
							<%If W_LEVEL="1" Then%>
								<li <%If InStr(urlPath, "sv.asp") Then Response.Write "class='on'"%>><a href="/site/manage/sub-other/sv.asp">ServerVariables</a></li>
							<%End If%>
						</ul>
					</li>
				<%End If%>
				</ul>
			</div>
			<div class="version">version.2.1.0</div>
		</nav>
