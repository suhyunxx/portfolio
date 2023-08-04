<%@CodePage = 65001%>
<!DOCTYPE HTML>
<html lang="ko">
<head>
<!-- #include virtual="/site/manage/inc/head.asp" -->
</head>

<%
'메인 페이지 사용 권한
If W_LEVEL<>"1" And InStr(admin_a_auth, "0-main")=0 Then Response.Redirect "sub-basic/admin-info.asp"
%>

<!-- header -->
<!-- #include virtual="/site/manage/inc/header.asp" -->

<%
Set Rs = Server.Createobject("ADODB.Recordset")
%>

<!-- Resources -->
<script src="https://cdn.amcharts.com/lib/4/core.js"></script>
<script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>

<section id="contents">

	<div class="title_box">
		<h3 class="title">대시보드</h3>
		<div class="location">
			<i class="xi-home"></i> <strong>대시보드</strong>
		</dl>
	</div>

	<div id="dashboard">

		<div class="box-type type-g4 ani-box1 ani">
			<div class="box">
				<div class="cont1">
					<a href="/site/manage/sub-page/popup.asp">
						<dl>
							<dt>팝업 관리</dt>
							<dd>팝업 등록 및 수정 관리</dd>
						</dl>
						<span class="icon"><img src="/site/manage/images/layout/icon_board_i1.png" alt=""></span>
					</a>
				</div>
			</div>
			<div class="box">
				<div class="cont1">
					<a href="/site/manage/sub-product/prod.asp">
						<dl>
							<dt>제품 관리</dt>
							<dd>제품 등록 및 수정 관리</dd>
						</dl>
						<span class="icon"><img src="/site/manage/images/layout/icon_board_i4.png" alt=""></span>
					</a>
				</div>
			</div>
			<div class="box">
				<div class="cont1">
					<a href="/site/manage/sub-bbs/?bid=1&mode=list">
						<dl>
							<dt>문의글 관리</dt>
							<dd>접수된 문의사항 관리</dd>
						</dl>
						<span class="icon"><img src="/site/manage/images/layout/icon_board_i2.png" alt=""></span>
					</a>
				</div>
			</div>
			<div class="box">
				<div class="cont1">
					<a href="/site/manage/sub-bbs/?bid=1&mode=list">
						<dl>
							<dt>게시판 관리</dt>
							<dd>게시글 등록 및 수정 관리</dd>
						</dl>
						<span class="icon"><img src="/site/manage/images/layout/icon_board_i3.png" alt=""></span>
					</a>
				</div>
			</div>
		</div>

		<%
		'쇼핑몰 기능을 사용하는 경우에만 최근 주문정보/회원가입정보 활성화
		If mc_use=True Then%>
			<div class="box-type ani-box2 ani">
				<div class="box">
					<div class="member-list">
						<p class="s-title">최근 주문 내역</p>
						<div class="dataTable">
							<table cellpadding="0" cellspacing="0" border="1" summary="">
								<colgroup><col width="20%"><col width="20%"><col width="20%"><col width="20%"><col width=""></colgroup>
								<thead>
									<tr>
										<td>주문코드</td>
										<td>이름</td>
										<td>진행상태</td>
										<td>총 결제 금액(원)</td>
										<td>주문일</td>
									</tr>
								</thead>
								<tbody>
								<%
								Sql = "SELECT TOP 5 * FROM tbl_mall_order "
								Sql = Sql & " WHERE idx!='' AND o_state!='' "
								Sql = Sql & " ORDER BY regdate DESC"
								Rs.Open Sql, Dbcon, 1
								Do Until Rs.EOF
									o_code = Rs("o_code")
									o_name = Rs("o_name")
									o_total_amount = FormatNumber(Rs("o_amount")+Rs("o_deli_amount")+Rs("o_vat")-Rs("o_pay_point")-Rs("o_coupon_amount"), 0)
									o_pay_method = Rs("o_pay_method")
									o_state = Rs("o_state")
									o_regdate = Rs("regdate")
									%>
									<tr>
										<td><a href="/site/manage/sub-order/order-reg.asp?mode=mod&o_code=<%=o_code%>"><%=o_code%></a></td>
										<td><a href="/site/manage/sub-order/order-reg.asp?mode=mod&o_code=<%=o_code%>"><%=o_name%></a></td>
										<td><%=o_state%></td>
										<td><%=o_total_amount%></td>
										<td><%=o_regdate%></td>
									</tr>
									<%
									Rs.MoveNext
								Loop
								Rs.Close%>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>

			<div class="box-type type-g4 ani-box0 ani">
				<div class="box bg-b">
					<div class="cont4">
						<span class="txt-l"><span class="icon"><img src="/site/manage/images/layout/icon_payment1.svg" alt=""></span>결제 대기</span>
						<span class="txt-r">
							<strong><span class="counter"><%=FormatNumber(order_count1, 0)%></span>건<br /> <span class="counter"><%=FormatNumber(order_amount1, 0)%></span>원</strong>
						</span>
					</div>
				</div>
				<div class="box bg-o">
					<div class="cont4">
						<span class="txt-l"><span class="icon"><img src="/site/manage/images/layout/icon_payment2.svg" alt=""></span>결제 완료</span>
						<span class="txt-r">
							<strong><span class="counter"><%=FormatNumber(order_count2, 0)%></span>건<br /> <span class="counter"><%=FormatNumber(order_amount2, 0)%></span>원</strong>
						</span>
					</div>
				</div>
				<div class="box bg-p">
					<div class="cont4">
						<span class="txt-l"><span class="icon"><img src="/site/manage/images/layout/icon_payment3.svg" alt=""></span>발송준비</span>
						<span class="txt-r">
							<strong><span class="counter"><%=FormatNumber(order_count3, 0)%></span>건<br /> <span class="counter"><%=FormatNumber(order_amount3, 0)%></span>원</strong>
						</span>
					</div>
				</div>
				<div class="box bg-m">
					<div class="cont4">
						<span class="txt-l"><span class="icon"><img src="/site/manage/images/layout/icon_payment4.svg" alt=""></span>발송완료</span>
						<span class="txt-r">
							<strong><span class="counter"><%=FormatNumber(order_count4, 0)%></span>건<br /> <span class="counter"><%=FormatNumber(order_amount4, 0)%></span>원</strong>
						</span>
					</div>
				</div>
			</div>

			<div class="box-type type-g2 ani-box2 ani">
				<div class="box">
					<div class="statistics">
						<p class="s-title">최근 월별 주문 현황</p>
						<div class="cont-box">
						<!-- Chart code -->
						<script>
						am4core.ready(function() {
							am4core.useTheme(am4themes_animated);
							var chart = am4core.create("chartdiv5", am4charts.XYChart);
							chart.data = [
								<%
								Sql = "SELECT TOP 10 Year(regdate), Month(regdate), SUM(o_amount) FROM tbl_mall_order WHERE o_state IN ('결제대기', '결제완료', '발송준비', '발송완료') "
								Sql = Sql & " GROUP BY Year(regdate), Month(regdate) "
								Sql = Sql & " ORDER BY Year(regdate) DESC, Month(regdate) DESC"
								'Response.Write Sql
								Rs.Open Sql, Dbcon, 1
								If Rs.EOF=False Then
									Do Until Rs.EOF
										m_year = Rs(0)
										m_month = Rs(1)
										m_o_amount = Rs(2)
										Response.Write "{""Month"": """ & m_year & "년 " & m_month & "월"", ""Visits"": " & m_o_amount & "},"
										num=num+1
										Rs.MoveNext
									Loop
								End If
								Rs.Close
								%>
							];
							var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
							categoryAxis.dataFields.category = "Month";
							categoryAxis.renderer.grid.template.location = 0;
							categoryAxis.renderer.minGridDistance = 30;

							var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());

							// Create series
							var series = chart.series.push(new am4charts.ColumnSeries());
							series.dataFields.valueY = "Visits";
							series.dataFields.categoryX = "Month";
							series.name = "Visits";
							series.columns.template.tooltipText = "{categoryX}: [bold]{valueY}[/]";

							series.columns.template.strokeWidth = 0;
							series.columns.template.column.cornerRadiusTopLeft = 5;
							series.columns.template.column.cornerRadiusTopRight = 5;
							series.columns.template.column.fillOpacity = 1;
							series.columns.template.adapter.add("fill", function(fill, target) {
								return chart.colors.getIndex(5);
							});
						}); // end am4core.ready()
						</script>
						<style>
						#chartdiv5 {width:100%;height:280px;font-size:11px;}
						</style>
						<p><div id="chartdiv5"></div></p>
						</div>
					</div>
				</div>
				<div class="box">
					<div class="statistics">
						<p class="s-title">최근 일별 주문 현황</p>
						<div class="cont-box">
						<!-- Chart code -->
						<script>
						am4core.ready(function() {
							am4core.useTheme(am4themes_animated);
							var chart = am4core.create("chartdiv6", am4charts.XYChart);
							chart.data = [
								<%
								Sql = "SELECT TOP 10 Year(regdate), Month(regdate), Day(regdate), SUM(o_amount) FROM tbl_mall_order WHERE o_state IN ('결제대기', '결제완료', '발송준비', '발송완료') "
								Sql = Sql & " GROUP BY Year(regdate), Month(regdate), Day(regdate) "
								Sql = Sql & " ORDER BY Year(regdate) DESC, Month(regdate) DESC, Day(regdate) DESC"
								'Response.Write Sql
								Rs.Open Sql, Dbcon, 1
								If Rs.EOF=False Then
									Do Until Rs.EOF
										m_year = Rs(0)
										m_month = Rs(1)
										m_day = Rs(2)
										m_o_amount = Rs(3)
										Response.Write "{""Month"": """ & m_month & "월 " & m_day & "일"", ""Visits"": " & m_o_amount & "},"
										num=num+1
										Rs.MoveNext
									Loop
								End If
								Rs.Close
								%>
							];
							var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
							categoryAxis.dataFields.category = "Month";
							categoryAxis.renderer.grid.template.location = 0;
							categoryAxis.renderer.minGridDistance = 30;

							var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());

							// Create series
							var series = chart.series.push(new am4charts.ColumnSeries());
							series.dataFields.valueY = "Visits";
							series.dataFields.categoryX = "Month";
							series.name = "Visits";
							series.columns.template.tooltipText = "{categoryX}: [bold]{valueY}[/]";

							series.columns.template.strokeWidth = 0;
							series.columns.template.column.cornerRadiusTopLeft = 5;
							series.columns.template.column.cornerRadiusTopRight = 5;
							series.columns.template.column.fillOpacity = 1;
							series.columns.template.adapter.add("fill", function(fill, target) {
								return chart.colors.getIndex(5);
							});
						}); // end am4core.ready()
						</script>
						<style>
						#chartdiv6 {width:100%;height:280px;font-size:11px;}
						</style>
						<p><div id="chartdiv6"></div></p>

						</div>
					</div>
				</div>
			</div>
		<%End If%>

<%
s_year=Year(Date)
s_month=Month(Date)
s_day=Day(Date)

Sql = "SELECT ISNULL(SUM(CONVERT(int, c_count)), 0) FROM tbl_counter "
Rs.Open Sql, Dbcon, 1
	total_count = Rs(0)
Rs.Close
Sql = "SELECT ISNULL(SUM(CONVERT(int, c_count)), 0) FROM tbl_counter WHERE c_year='" & s_year & "' AND c_month='" & s_month & "' "
Rs.Open Sql, Dbcon, 1
	month_count = Rs(0)
Rs.Close
Sql = "SELECT ISNULL(SUM(CONVERT(int, c_count)), 0) FROM tbl_counter WHERE c_year='" & s_year & "' AND c_month='" & s_month & "' AND c_day='" & s_day & "' "
Rs.Open Sql, Dbcon, 1
	today_count = Rs(0)
Rs.Close
Sql = "SELECT ISNULL(AVG(CONVERT(int, c_count)), 0) FROM tbl_counter "
Rs.Open Sql, Dbcon, 1
	avg_count = Rs(0)
Rs.Close
%>

		<div class="box-type type-g2l ani-box5 ani">
			<div class="box">
				<div class="statistics">
					<p class="s-title">요일별 접속자 통계</p>
					<div class="cont-box">
					<!-- Chart code -->
					<script>
					am4core.ready(function() {
						am4core.useTheme(am4themes_animated);
						var chart = am4core.create("chartdiv", am4charts.PieChart3D);
						chart.hiddenState.properties.opacity = 0;
						chart.data = [
						<%
						Sql = "SELECT DATEPART(weekday, CONVERT(datetime, c_year+'-'+c_month+'-'+c_day)) AS c_weekday, SUM(CONVERT(int, c_count)) "
						Sql = Sql & " FROM tbl_counter "
						Sql = Sql & " WHERE c_year='" & s_year & "' "
						Sql = Sql & " GROUP BY DATEPART(weekday, CONVERT(datetime, c_year+'-'+c_month+'-'+c_day)) "
						Sql = Sql & " ORDER BY c_weekday ASC "
						Rs.Open Sql, Dbcon, 1
						Do Until Rs.EOF
							c_weekday = Rs(0)
							Response.Write "{""Weekday"": """ & strWeekday(c_weekday) & "요일"", ""Visits"": " & Rs(1) & "},"
						Rs.Movenext
						Loop
						Rs.Close
						%>
						];

						// Add and configure Series
						var pieSeries = chart.series.push(new am4charts.PieSeries());
						pieSeries.dataFields.value = "Visits";
						pieSeries.dataFields.category = "Weekday";

						// Let's cut a hole in our Pie chart the size of 40% the radius
						chart.innerRadius = am4core.percent(50);

						// Set up fills
						pieSeries.slices.template.strokeWidth = 0;
						pieSeries.slices.template.fillOpacity = 1;
						//pieSeries.slices.template.cornerRadius = 5;
						pieSeries.colors.step = 2;

						var hs = pieSeries.slices.template.states.getKey("hover");
						hs.properties.scale = 1;
						hs.properties.fillOpacity = 1;

					}); // end am4core.ready()
					</script>
					<style>
					#chartdiv {width:100%; height:250px;}
					</style>
					<p><div id="chartdiv"></div>
						<!--div id="chart_graph1"></div-->
					</div>
				</div>
			</div>
			<div class="box">
				<div class="statistics">
					<p class="s-title">월별 접속자 통계</p>
					<div class="cont-box">
					<!-- Chart code -->
					<script>
					am4core.ready(function() {
						am4core.useTheme(am4themes_animated);
						var chart = am4core.create("chartdiv2", am4charts.XYChart);
						chart.data = [
							<%
							Redim objun(12)
							Sql = "SELECT c_month, SUM(CONVERT(int, c_count)) "
							Sql = Sql & " FROM tbl_counter "
							Sql = Sql & " WHERE c_year='" & s_year & "' "
							Sql = Sql & " GROUP BY c_month "
							Sql = Sql & " ORDER BY CONVERT(int, c_month) ASC "
							Rs.Open Sql, Dbcon, 1
							Do Until Rs.EOF
								objun(Rs(0)-1)=Rs(1)
							Rs.Movenext
							Loop
							Rs.Close

							max_count = 0
							For i=0 To 11
								i_cnt = objun(i)
								If Trim(i_cnt)="" Then i_cnt=0
								Response.Write "{""Month"": """ & i+1 & "월"", ""Visits"": " & i_cnt & "},"
							Next
							%>
						];
						var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
						categoryAxis.dataFields.category = "Month";
						categoryAxis.renderer.grid.template.location = 0;
						categoryAxis.renderer.minGridDistance = 30;

						var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());

						// Create series
						var series = chart.series.push(new am4charts.ColumnSeries());
						series.dataFields.valueY = "Visits";
						series.dataFields.categoryX = "Month";
						series.name = "Visits";
						series.columns.template.tooltipText = "{categoryX}: [bold]{valueY}[/]";

						series.columns.template.strokeWidth = 0;
						series.columns.template.column.cornerRadiusTopLeft = 5;
						series.columns.template.column.cornerRadiusTopRight = 5;
						series.columns.template.column.fillOpacity = 1;
						series.columns.template.adapter.add("fill", function(fill, target) {
							return chart.colors.getIndex(target.dataItem.index);
						});
					}); // end am4core.ready()
					</script>
					<style>
					#chartdiv2 {width:100%;height:280px;font-size:11px;}
					</style>
					<p><div id="chartdiv2"></div></p>
						<!--div id="chart_graph2"></div-->
					</div>
				</div>
			</div>
		</div>

		<div class="box-type type-g4 ani-box3 ani">
			<div class="box bg-b">
				<div class="cont3">
					<span class="txt-l">오늘 접속자 수</span>
					<span class="txt-r"><strong class="counter"><%=FormatNumber(today_count, 0)%></strong>명</span>
				</div>
			</div>
			<div class="box bg-o">
				<div class="cont3">
					<span class="txt-l">이달의 접속자 수</span>
					<span class="txt-r"><strong class="counter"><%=FormatNumber(month_count, 0)%></strong>명</span>
				</div>
			</div>
			<div class="box bg-p">
				<div class="cont3">
					<span class="txt-l">총 접속자 수</span>
					<span class="txt-r"><strong class="counter"><%=FormatNumber(total_count, 0)%></strong>명</span>
				</div>
			</div>
			<div class="box bg-m">
				<div class="cont3">
					<span class="txt-l">일일 평균 접속자 수</span>
					<span class="txt-r"><strong class="counter"><%=FormatNumber(avg_count, 0)%></strong>명</span>
				</div>
			</div>
		</div>

		<%
		Sql = "SELECT * FROM tbl_board_id "
		Sql = Sql & " WHERE k_admin_main='1' "
		Sql = Sql & " ORDER BY p_lev  "
		'Response.Write Sql
		Rs.Open Sql, Dbcon, 1
		If Rs.EOF=False Then
		%>
			<!-- 최근 게시물 -->
			<div class="box-type type-g3 ani-box4 ani">
			<%
			Do Until Rs.EOF
				k_bid = Rs("idx")
				k_id = Rs("k_id")
				%>
				<div class="box">
					<div class="board-cont">
						<p class="s-title"><%=k_id%></p>
						<ul>
						<%
						Set Rs2 = Server.Createobject("ADODB.Recordset")
						Sql = "SELECT TOP 5 * FROM tbl_board_data WHERE board_idx='" & k_bid & "' ORDER BY num DESC  "
						Rs2.Open Sql, Dbcon, 1
						Do Until Rs2.EOF
							sch_idx = Rs2("idx")
							sch_bid = Rs2("board_idx")
							sch_cate = Rs2("cate")
							sch_title = Rs2("title")
							sch_writer = Rs2("mem_name")
							sch_regdate = Left(Rs2("regdate"), 10)
							%>
							<li><a href="sub-bbs/?bid=<%=sch_bid%>&mode=view&idx=<%=sch_idx%>"><span class="txt"><!--strong class="chk"><%=sch_cate%></strong--><%=sch_title%></span> <span class="date"><%=sch_regdate%></span></a></li>
							<%
							num=num+1
							Rs2.MoveNext
						Loop
						Set Rs2 = Nothing
						%>
						</ul>
						<span class="btn_more"><a href="/site/manage/sub-bbs/?bid=<%=k_bid%>&mode=list">더보기</a></span>
					</div>
				</div>
				<%
				num=num+1
				Rs.MoveNext
			Loop
			%>
			</div>
		<%
		End If
		Rs.Close
		%>

		<!-- 회원 통계 영역 -->
		<div class="box-type type-g2 ani-box2 ani">
			<div class="box">
				<div class="statistics">
					<p class="s-title">최근 월별 회원 가입 통계</p>
					<div class="cont-box">
					<!-- Chart code -->
					<script>
					am4core.ready(function() {
						am4core.useTheme(am4themes_animated);
						var chart = am4core.create("chartdiv3", am4charts.XYChart);
						chart.data = [
							<%
							Sql = "SELECT TOP 10 Year(regdate), Month(regdate), COUNT(idx) FROM tbl_member WHERE m_lev>10 "
							Sql = Sql & " GROUP BY Year(regdate), Month(regdate) "
							Sql = Sql & " ORDER BY Year(regdate) DESC, Month(regdate) DESC"
							'Response.Write Sql
							Rs.Open Sql, Dbcon, 1
							If Rs.EOF=False Then
								Do Until Rs.EOF
									m_year = Rs(0)
									m_month = Rs(1)
									m_count = Rs(2)
									Response.Write "{""Month"": """ & m_year & "년 " & m_month & "월"", ""Visits"": " & m_count & "},"
									num=num+1
									Rs.MoveNext
								Loop
							End If
							Rs.Close
							%>
						];
						var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
						categoryAxis.dataFields.category = "Month";
						categoryAxis.renderer.grid.template.location = 0;
						categoryAxis.renderer.minGridDistance = 30;

						var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());

						// Create series
						var series = chart.series.push(new am4charts.ColumnSeries());
						series.dataFields.valueY = "Visits";
						series.dataFields.categoryX = "Month";
						series.name = "Visits";
						series.columns.template.tooltipText = "{categoryX}: [bold]{valueY}[/]";

						series.columns.template.strokeWidth = 0;
						series.columns.template.column.cornerRadiusTopLeft = 5;
						series.columns.template.column.cornerRadiusTopRight = 5;
						series.columns.template.column.fillOpacity = 1;
						series.columns.template.adapter.add("fill", function(fill, target) {
							return chart.colors.getIndex(1);
						});
					}); // end am4core.ready()
					</script>
					<style>
					#chartdiv3 {width:100%;height:280px;font-size:11px;}
					</style>
					<p><div id="chartdiv3"></div></p>
					</div>
				</div>
			</div>
			<div class="box">
				<div class="statistics">
					<p class="s-title">최근 일별 회원 가입 통계</p>
					<div class="cont-box">
					<!-- Chart code -->
					<script>
					am4core.ready(function() {
						am4core.useTheme(am4themes_animated);
						var chart = am4core.create("chartdiv4", am4charts.XYChart);
						chart.data = [
							<%
							Sql = "SELECT TOP 10 Year(regdate), Month(regdate), Day(regdate), COUNT(idx) FROM tbl_member WHERE m_lev>10 "
							Sql = Sql & " GROUP BY Year(regdate), Month(regdate), Day(regdate) "
							Sql = Sql & " ORDER BY Year(regdate) DESC, Month(regdate), Day(regdate) DESC"
							'Response.Write Sql
							Rs.Open Sql, Dbcon, 1
							If Rs.EOF=False Then
								Do Until Rs.EOF
									m_year = Rs(0)
									m_month = Rs(1)
									m_day = Rs(2)
									m_count = Rs(3)
									Response.Write "{""Month"": """ & m_month & "월 " & m_day & "일"", ""Visits"": " & m_count & "},"
									num=num+1
									Rs.MoveNext
								Loop
							End If
							Rs.Close
							%>
						];
						var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
						categoryAxis.dataFields.category = "Month";
						categoryAxis.renderer.grid.template.location = 0;
						categoryAxis.renderer.minGridDistance = 30;

						var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());

						// Create series
						var series = chart.series.push(new am4charts.ColumnSeries());
						series.dataFields.valueY = "Visits";
						series.dataFields.categoryX = "Month";
						series.name = "Visits";
						series.columns.template.tooltipText = "{categoryX}: [bold]{valueY}[/]";

						series.columns.template.strokeWidth = 0;
						series.columns.template.column.cornerRadiusTopLeft = 5;
						series.columns.template.column.cornerRadiusTopRight = 5;
						series.columns.template.column.fillOpacity = 1;
						series.columns.template.adapter.add("fill", function(fill, target) {
							return chart.colors.getIndex(1);
						});
					}); // end am4core.ready()
					</script>
					<style>
					#chartdiv4 {width:100%;height:280px;font-size:11px;}
					</style>
					<p><div id="chartdiv4"></div></p>
					</div>
				</div>
			</div>
		</div>

		<div class="box-type ani-box5 ani">
			<div class="box">
				<div class="member-list">
					<p class="s-title">최근 가입 회원</p>
					<div class="dataTable">
						<table cellpadding="0" cellspacing="0" border="1" summary="">
							<colgroup><col width="20%"><col width="20%"><col width="20%"><col width="20%"><col width=""></colgroup>
							<thead>
								<tr>
									<td>아이디</td>
									<td>이름</td>
									<td>휴대전화</td>
									<td>이메일</td>
									<td>가입일</td>
								</tr>
							</thead>
							<tbody>
							<%
							Sql = "SELECT TOP 5 * FROM tbl_member "
							Sql = Sql & " WHERE idx!='' "
							Sql = Sql & " AND m_lev>=10 "	'관리자를 제외한 회원만 검색
							Sql = Sql & " ORDER BY regdate DESC"
							Rs.Open Sql, Dbcon, 1
							Do Until Rs.EOF
								m_idx = Rs("idx")
								m_id = Rs("m_id")
								m_name = Rs("m_name")
								m_cell1 = Rs("m_cell1")
								m_cell2 = Rs("m_cell2")
								m_cell3 = Rs("m_cell3")
								m_email = Rs("m_email")
								m_regdate = Left(Rs("regdate"), 10)
								%>
								<tr>
									<td>
									<%=SnsMemberIcon(m_id)%>
									<%=m_id%></td>
									<td><%=m_name%></td>
									<td><%=m_cell1 & "-" & m_cell2 & "-" & m_cell3%></td>
									<td><%=m_email%></td>
									<td><%=m_regdate%></td>
								</tr>
								<%
								Rs.MoveNext
							Loop
							Rs.Close%>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

	</div>

</section>

<script src="js/svg.js"></script>

<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.countup.min.js"></script>
<script>
	$(document).ready(function($) {
		$('.counter').counterUp({
			//delay: 10,
			//time: 1000
		});
	});
</script>
<!-- footer -->
<!-- #include virtual="/site/manage/inc/footer.asp" -->