<%@CodePage = 65001%>
<!DOCTYPE HTML>
<html lang="ko">
<head>
<!-- #include virtual="/site/manage/inc/head.asp" -->
</head>

<!-- header -->
<!-- #include virtual="/site/manage/inc/header.asp" -->

<%
If Left(Request.ServerVariables("LOCAL_ADDR"), 10)<>"58.230.162" Then
	Response.Write "<script>alert('호스팅 정보가 없습니다.'); history.back();</script>"
	Response.End
End If
%>

<section id="contents">
	
	<div class="title_box">
		<h3 class="title">일일트래픽 통계</h3>
		<div class="location">
			<i class="xi-home"></i> <span>통계</span> <strong>일일트래픽 통계</strong>
		</dl>
	</div>
	
	<div id="sub-cont">
		<div class="box-type ani-box0 ani">
			<div class="box">
				<div class="sub-cont">

<%
If Request("s_year") = "" then
	intyear = Year(Date())
	intmonth = Month(Date())
Else 
	intyear = Request("s_year")
	intmonth = Request("s_month")
End If

If intmonth = 1 then
	intprevyear = intyear - 1
	intprevmonth = 12
Else
	intprevmonth = intmonth - 1
	intprevyear = intyear
End If

If intmonth = 12 then
	intnextyear = intyear + 1
	intnextmonth = 1
Else
	intnextmonth = intmonth + 1
	intnextyear = intyear
End If

If Len(intmonth)=1 Then
	z_month = "0" & intmonth
Else
	z_month = intmonth
End If


s_ip = Request.ServerVariables("LOCAL_ADDR")
's_id = "W3SVC19"
s_id = "W3SVC" & Request.ServerVariables("INSTANCE_ID")

DB_SERVER = "58.230.162.206"
DB_NAME = "traffic"
DB_ID = "traffic"
DB_PW = "traffic!@#$"
Set DbScon = Server.CreateObject("ADODB.Connection")
DbScon.Open "Provider=SQLOLEDB.1;Password=" & DB_PW & ";Persist Security Info=True;User ID=" & DB_ID & ";Initial Catalog=" & DB_NAME & ";Data Source=" & DB_SERVER

'기본 회사 정보 취득
Set Rs = Server.Createobject("ADODB.Recordset")
Sql = "SELECT * FROM tbl_agent WHERE t_ip='" & s_ip & "' AND t_wid='" & s_id & "' "
Rs.Open Sql, DbScon, 1
If Rs.EOF=False Then
	t_comp = Rs("t_comp")
	t_url = Rs("t_url")
	t_content = Rs("t_content")
	t_traf_limit = Rs("t_traf_limit")
End If
Rs.Close
Set Rs = Nothing

If t_traf_limit<>"" Then
	s_limit = t_traf_limit
Else
	s_limit = 2000
End If
%>

<!-- tb_list -->
<div class="tb_list" style="position:relative;">
	<h4><%=intyear & "년 " & intmonth & "월 일일트래픽 통계"%></h4>
	<form name="searchform" action="?" method="post">
		<p style="position:absolute;top:0;right:0;">
			<select name="s_year" class="AXSelect">
			<%For yyyy=2013 To Year(Date)%>
				<option value="<%=yyyy%>" <%If Cstr(yyyy)=Cstr(intyear) Then Response.Write "selected"%>><%=yyyy%>년</option>
			<%Next%>
			</select>
			<%If s_type<>"m" Then%>
			<select name="s_month" class="AXSelect">
			<%For mm=1 To 12%>
				<option value="<%=mm%>" <%If Cstr(mm)=Cstr(intmonth) Then Response.Write "selected"%>><%=mm%>월</option>
			<%Next%>
			</select>
			<%End If%>
			<input type="submit" value="검색" class="AXButton">
		</p>
	</form>
</div>
<!-- tb_list -->

<div style="width:100%; height:auto; margin: 0 auto;">
	<div style="position:relative; width:450px; float:left;" class="tb_list">
		<table cellpadding="0" cellspacing="0" >
			<colgroup>
				<col width="130px" />
				<col width="" />
				<col width="130px" />
			</colgroup>
			<tr>
				<th class='bdr bdt'>날짜</th>
				<th class='bdr bdt'>사용 트래픽</th>
				<th class='bdr bdt'>초과 트래픽</th>
			</tr>
	<%
	ReDim c_traffic(31)
	s_date = Right(intyear, 2) & z_month

	Set Rs = Server.Createobject("ADODB.Recordset")
	Sql = "SELECT DISTINCT t_date, t_traf FROM tbl_traffic WHERE t_ip='" & s_ip & "' AND t_wid='" & s_id & "' AND t_date LIKE '" & s_date & "%' ORDER BY t_date ASC"
	'Response.write Sql
	Rs.Open Sql, DbScon, 1
	dl_size_total = 0
	Do Until Rs.EOF
		c_day = CInt(Right(Rs("t_date"), 2))
		c_traffic(c_day-1) = Rs("t_traf")
		Rs.Movenext
	Loop
	Rs.Close
	Set Rs = Nothing

	dl_size_total = 0
	dl_over_traf_total = 0
	dl_add_total = 0
	For n=1 To Day(DateAdd("d", -1, intnextyear & "-" & intnextmonth & "-01"))
		If CInt(n)<10 Then
			z_i = "0" & n
		Else
			z_i = n
		End If

		ndate = Right(intyear, 2) & z_month & z_i

		Response.Write "<tr>" & Chr(13) & Chr(10)
		Response.Write "<td class='bdr bdt'>" & z_month & "/" & z_i & "(" & strWeekday(intyear & "-" & z_month & "-" & z_i) & ")</td>" & Chr(13) & Chr(10)
		Response.Write "<td class='bdr bdt'>" & Chr(13) & Chr(10)

		dl_size_mb = c_traffic(n-1)
		Response.write "<span "
		If CDbl(dl_size_mb)>CDbl(s_limit) Then Response.write "style='color:#f00'"
		Response.write ">" & FormatNumber(dl_size_mb, 0) & " MB"
		Response.write " (" & FormatNumber((dl_size_mb/s_limit)*100, 0) & "%)</span>"
		dl_size_total = dl_size_total+dl_size_mb

		Response.Write "</td>" & Chr(13) & Chr(10)

		'오버 트래픽
		Response.Write "<td class='bdr bdt'>"
		If dl_size_mb-s_limit>0 Then
			dl_over_traf = dl_size_mb-s_limit
			Response.Write FormatNumber(dl_over_traf, 0) & " MB"
			dl_over_traf_total = dl_over_traf_total+dl_over_traf
		End If
		Response.Write "</td>" & Chr(13) & Chr(10)
		Response.Write "</tr>" & Chr(13) & Chr(10)
		
		Response.flush
	Next

	Set FolderList = Nothing
	Set FSO = Nothing
	%>
			<tr>
				<th class='bdr bdt'>Total</th>
				<th class='bdr bdt'><%=FormatNumber(dl_size_total, 0)%> MB</th>
				<th class='bdr bdt'><%=FormatNumber(dl_over_traf_total, 0)%> MB</th>
			</tr>
		</table>
		<br />
	</div>

	<!-- Resources -->
	<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
	<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

	<!-- Chart code -->
	<script>
	am5.ready(function() {

	// Create root element
	// https://www.amcharts.com/docs/v5/getting-started/#Root_element
	var root = am5.Root.new("chartdiv");


	// Set themes
	// https://www.amcharts.com/docs/v5/concepts/themes/
	root.setThemes([
	  am5themes_Animated.new(root)
	]);


	// Create chart
	// https://www.amcharts.com/docs/v5/charts/xy-chart/
	var chart = root.container.children.push(am5xy.XYChart.new(root, {
	  panX: true,
	  panY: true,
	  wheelX: "panX",
	  wheelY: "zoomX"
	}));

	// Add cursor
	// https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
	var cursor = chart.set("cursor", am5xy.XYCursor.new(root, {}));
	cursor.lineY.set("visible", false);


	// Create axes
	// https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
	var xRenderer = am5xy.AxisRendererX.new(root, { minGridDistance: 30 });
	xRenderer.labels.template.setAll({
	  rotation: -90,
	  centerY: am5.p50,
	  centerX: am5.p100,
	  paddingRight: 15
	});

	var xAxis = chart.xAxes.push(am5xy.CategoryAxis.new(root, {
	  maxDeviation: 0.3,
	  categoryField: "date",
	  renderer: xRenderer,
	  tooltip: am5.Tooltip.new(root, {})
	}));

	var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
	  maxDeviation: 0.3,
	  renderer: am5xy.AxisRendererY.new(root, {})
	}));


	// Create series
	// https://www.amcharts.com/docs/v5/charts/xy-chart/series/
	var series = chart.series.push(am5xy.ColumnSeries.new(root, {
	  name: "Series 1",
	  xAxis: xAxis,
	  yAxis: yAxis,
	  valueYField: "value",
	  sequencedInterpolation: true,
	  categoryXField: "date",
	  tooltip: am5.Tooltip.new(root, {
		labelText:"{valueY} MB"
	  })
	}));

	series.columns.template.setAll({ cornerRadiusTL: 20, cornerRadiusTR: 20 });

	series.columns.template.adapters.add("fill", function (fill, target) {
		if (target.dataItem.get("valueY")<<%=s_limit%>) {
			return am5.color(0xdadada);
		}else if (target.dataItem.get("valueY")>=<%=s_limit%>) {
			return am5.color(0xee4444);
		}
		return fill;
	});

	series.columns.template.adapters.add("stroke", function (fill, target) {
		if (target.dataItem.get("valueY")<<%=s_limit%>) {
			return am5.color(0xdadada);
		}else if (target.dataItem.get("valueY")>=<%=s_limit%>) {
			return am5.color(0xee4444);
		}
		return fill;
	});

	// Set data
	var data = [
	<%For d=1 To Day(DateAdd("d", -1, intnextyear & "-" & intnextmonth & "-01"))%>
		{date: "<%=intmonth & "/" & d & "(" & strWeekday(intyear & "-" & intmonth & "-" & d) & ")"%>", value: <%=cdbl(c_traffic(d-1))%>},
	<%Next%>
	];

	// add ranges
	var limitRange = yAxis.createAxisRange(yAxis.makeDataItem({
	  value: <%=s_limit%>
	}));
	limitRange.get("grid").setAll({
	  forceHidden: false,
	  strokeOpacity: 0.2
	});

	var limitLabel = limitRange.get("label");
	limitLabel.setAll({
	  centerY: am5.p100,
	  centerX: am5.p100,
	  text: "Limit",
	});

	xAxis.data.setAll(data);
	series.data.setAll(data);


	// Make stuff animate on load
	// https://www.amcharts.com/docs/v5/concepts/animations/
	series.appear(1000);
	chart.appear(1000, 100);

	}); // end am5.ready()
	</script>
	<div id="chartdiv" style="position:relative; width:1000px; height: 470px; float:left"></div>

				</div>
			</div>
		</div>
	</div>
</section>
<!-- #include virtual="/site/manage/inc/footer.asp" -->