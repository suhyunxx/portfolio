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
		<h3 class="title">게시물 통계</h3>
		<div class="location">
			<i class="xi-home"></i> <span>통계</span> <strong>게시물 통계</strong>
		</dl>
	</div>
	
	<div id="sub-cont">
		<div class="box-type ani-box0 ani">
			<div class="box">
				<div class="sub-cont">
				<%
				s_id = Request("s_id")
				s_type = Request("s_type")
				If s_type="" Then s_type="d"
				s_year = Request("s_year")
				If s_year="" Then s_year=Year(Date)

				ReDim objun(12)
				For i=0 To 11
					objun(i)=0
				Next
				%>
				
				<div class="AXTabs" style="margin-bottom:30px">
					<div class="AXTabsTray">
						<a href="bbs-stats-month.asp" class="AXTab on">월별</a>
						<a href="bbs-stats-day.asp" class="AXTab">일별</a>
						<div class="clear"></div>
					</div>
				</div>

				<!-- Resources -->
				<script src="https://cdn.amcharts.com/lib/4/core.js"></script>
				<script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
				<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>

				<%
				Set Rs = Server.Createobject("ADODB.Recordset")

					c_title = s_year & "년 게시물 통계"
					%>

					<script>
					am4core.ready(function() {
						am4core.useTheme(am4themes_animated);
						var chart = am4core.create("chartdiv", am4charts.XYChart);
						chart.data = [
						<%
						Redim objun(12)
						Sql = "SELECT DATEPART(mm, regdate) c_month, COUNT(*) c_count "
						Sql = Sql & " FROM tbl_board_data "
						Sql = Sql & " WHERE DATEPART(yy, regdate)='" & s_year & "' "
						If s_id<>"" Then
							Sql = Sql & " AND board_idx='" & s_id & "' "
						End If
						Sql = Sql & " GROUP BY DATEPART(mm, regdate)"
						Sql = Sql & " ORDER BY DATEPART(mm, regdate) ASC"
						Rs.Open Sql, Dbcon, 1
						Do Until Rs.EOF
							objun(Rs(0)-1)=Rs(1)
						Rs.Movenext
						Loop

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
						series.columns.template.column.cornerRadiusTopLeft = 20;
						series.columns.template.column.cornerRadiusTopRight = 20;
						series.columns.template.column.fillOpacity = 0.7;

						var labelBullet = series.bullets.push(new am4charts.LabelBullet())
						labelBullet.label.text = "{valueY.value}";
						labelBullet.label.verticalCenter = "bottom";

					}); // end am4core.ready()
					</script>

					<style>
					#chartdiv {
						width		: 100%;
						height		: 500px;
						font-size	: 11px;
					}
					</style>
				<%
				Rs.Close
				%>

				<!-- tb_list -->
				<div class="tb_list" style="position:relative;">
					<h4><%=c_title%></h4>

					<!-- 차트 삽입 -->
					<p style="margin:0 auto;">
					<!-- HTML -->
					<div id="chartdiv"></div></p>

					<form name="searchform" action="?" method="post">
						<p style="position:absolute;top:0;right:0;">
							<select name="s_id" class="AXSelect">
								<option value="" <%If s_id="" Then Response.Write "selected"%>>----게시판 전체----</option>
								<%
								Set RsB = Server.CreateObject("ADODB.Recordset")
								Sql = "SELECT idx, k_group, k_id FROM tbl_board_id "
								Sql = Sql & " ORDER BY p_lev, idx"
								RsB.Open Sql, Dbcon, 1
								Do Until RsB.EOF
									bi_idx = RsB("idx")
									bi_k_group = RsB("k_group")
									bi_k_id = RsB("k_id")
									%>
									<option value="<%=bi_idx%>" <%If CStr(s_id)=CStr(bi_idx) Then Response.Write "selected"%>><%If bi_k_group<>"" Then Response.Write bi_k_group & " > "%><%=bi_k_id%></option>
									<%
									RsB.Movenext
								Loop
								RsB.Close
								Set RsB = Nothing
								%>
							</select>
							<select name="s_year" class="AXSelect">
							<%For yyyy=2020 To Year(Date)%>
								<option value="<%=yyyy%>" <%If Trim(yyyy)=Trim(s_year) Then Response.Write "selected"%>><%=yyyy%>년</option>
							<%Next%>
							</select>
							<input type="submit" value="검색" class="AXButton">
						</p>
					</form>
				</div>
				<!-- tb_list -->

				<br />
				<br />

				
				</div>
			</div>
		</div>
	</div>
</section>
<!-- #include virtual="/site/manage/inc/footer.asp" -->