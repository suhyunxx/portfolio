<?php include "../inc/common.php"; ?>
<body>
    <?php include "../inc/header.php"; ?>
    <div class="container">
        <div class="inner">
            <div class="topnavi">
                <ul>
                    <li><a href="../main/index.php"></a></li>
                    <li><span class="lnr lnr-chevron-right"></span></li>
                    <li><a href="sub1.php">연합회소개</a></li>
                    <li><span class="lnr lnr-chevron-right"></span></li>
                    <li><a href="#">찾아오시는길</a></li>
                </ul>
            </div>
            <ul class="leftnavi">
                <li><a href="#">연합회소개</a></li>
                <li><a href="sub1.php">회장인사말</a></li>
                <li><a href="sub2.php">연혁</a></li>
                <li><a href="sub3.php">임원단구성</a></li>
                <li><a href="sub4.php">연간사업계획</a></li>
                <li><a href="sub5.php">활동보고</a></li>
                <li><a href="sub6.php">연합회로고,정관</a></li>
                <li class="active"><a href="sub8.php">찾아오시는길</a></li>
            </ul>
            <h4 class="innerTitle innerTitleLeft">찾아오시는길</h4>
            <div class="content roughMap contentLeft">
                <div class="maphow">
                    <div id="daumRoughmapContainer1648714197278" class="root_daum_roughmap root_daum_roughmap_landing"></div>
                    <script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>
                    <script charset="UTF-8">
                        new daum.roughmap.Lander({
                            "timestamp" : "1648714197278",
                            "key" : "29ohc",
                            "mapWidth" : "640",
                            "mapHeight" : "360"
                        }).render();
                    </script>
                </div>
                <div class="mapcontext">
                    <div class="add">
                        <h4>주소</h4>
                        <div class="addbot">
                            <p>우)06764&nbsp;&nbsp;&nbsp;서울특별시 서초구 태봉로 114 (우면동 142) 한국교총회관 1층 한국국공립유치원교원연합회</p>
                        </div>
                    </div>
                    <div class="phone">
                        <h4>연락처</h4>
                        <div class="phonebot">
                            <p>전화 02)577-4865, 02) 575-4866</p>
                            <!-- <p class="lightfont">팩스 02-577-4708</p> -->
                        </div>
                    </div>
                    <div class="guide">
                        <h4>교통안내</h4>
                        <div class="guidebot">
                            <div class="guideLeft">
                                <span>지하철</span>
                                <span>버스</span>
                            </div>
                            <div class="guideRight">
                                <p><span style="color:#f2a62b;">3호선 양재역 11번 출구</span> (성남방면) 나오셔서 <span style="color:#a8cd3b;">마을버스 18번 </span>(우면동 교총방면)</p>
                                <p><span style="color:#028ace;">4호선 선바위역 1번 출구</span>로 나오셔서 <span style="color:#a8cd3b;">마을버스 18번</span> (우면동 교총방면) 이용</p>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="cab">
                        <h4>택시</h4>
                        <div class="cabbot">
                            <p class="lightfont">우면동 소재 택시미터기 검사장 옆 (서울시공업시험연구소)</p>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <?php include "../inc/footer.php"; ?>
    <script type="text/javascript" src="../js/snb.js"></script>
    <script type="text/javascript" src="../js/snb2.js"></script>
</body>
</html>