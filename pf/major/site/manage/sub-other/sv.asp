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
		<h3 class="title">ServerVariables</h3>
		<div class="location">
			<i class="xi-home"></i> <span>기타 설정</span> <strong>ServerVariables</strong>
		</dl>
	</div>
	
	<div id="sub-cont">
		<div class="box-type ani-box0 ani">
			<div class="box">
				<div class="sub-cont">

					<!-- tb_info -->
					<div class="tb_info">
						<table>
							<colgroup>
								<col width="25%" />
								<col width="" />
							</colgroup>
							<% For Each a_key in Request.ServerVariables %>
								<tr>
									<th class="title bdr bdt"><%=a_key%></th>
									<td class="bdt">
									<% 
										if Request.ServerVariables(a_key) = "" Then
											Response.Write " " 
										else 
											Response.Write Request.ServerVariables(a_key)
										end if
									%>
									</td>
								</tr>
							<% Next %>
						</table>
					</div>
					<!-- tb_info -->

				</div>
			</div>
		</div>
	</div>
</section>
<!-- #include virtual="/site/manage/inc/footer.asp" -->