<?php include "../inc/common.php" ?>
<body>
    <?php include "../inc/header.php" ?>
    <div class="sub_center">
        <div class="sub_top">
            <h3 class="sub_title">
                <span style="animation-delay: 0s;">찾</span>
                <span style="animation-delay: 0.1s;">아</span>
                <span style="animation-delay: 0.2s;">오</span>
                <span style="animation-delay: 0.3s;">시</span>
                <span style="animation-delay: 0.4s;">는&nbsp;</span>
                <span style="animation-delay: 0.5s;">길</span>
            </h3>
            <ul class="snb">
                <li><a href="<?=dir?>about/ceo.php">회장 인사말</a></li>
                <li><a href="<?=dir?>about/history.php">연혁</a></li>
                <li><a href="<?=dir?>about/org.php">임원단 구성</a></li>
                <li><a href="<?=dir?>about/act.php">활동보고</a></li>
                <li><a href="<?=dir?>about/ci.php">연합회 로고, 정관</a></li>
                <li class="on"><a href="<?=dir?>about/map.php">찾아오시는 길</a></li>
            </ul>
        </div>
    </div>
    <div class="svis">
        <img class="clip" src="<?=dir?>img/sub/svis1.jpg" alt="연합회 소개 서브비주얼 이미지">
    </div>
    <div class="sub_center">
        <div class="map">
            <div id="map" style="width:500px;height:400px;"></div>
            <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=e662f330c1bfcf584b2b5961f52f2511"></script>
            <script>
                var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
                    mapOption = { 
                        center: new kakao.maps.LatLng(33.450701, 126.570667), // 지도의 중심좌표
                        level: 3 // 지도의 확대 레벨
                    };

                var map = new kakao.maps.Map(mapContainer, mapOption); // 지도를 생성합니다

                // 일반 지도와 스카이뷰로 지도 타입을 전환할 수 있는 지도타입 컨트롤을 생성합니다
                var mapTypeControl = new kakao.maps.MapTypeControl();

                // 지도에 컨트롤을 추가해야 지도위에 표시됩니다
                // kakao.maps.ControlPosition은 컨트롤이 표시될 위치를 정의하는데 TOPRIGHT는 오른쪽 위를 의미합니다
                map.addControl(mapTypeControl, kakao.maps.ControlPosition.TOPRIGHT);
                
                // 마우스 휠과 모바일 터치를 이용한 지도 확대, 축소를 막는다
                map.setZoomable(false); 

                // 지도 확대 축소를 제어할 수 있는  줌 컨트롤을 생성합니다
                var zoomControl = new kakao.maps.ZoomControl();
                map.addControl(zoomControl, kakao.maps.ControlPosition.RIGHT);
            </script>
        </div>
        <div class="map_info">
            <h5>한국국공립유치원교원연합회</h5>
            <div>
                <div class="map_list">
                    <p>주소</p>
                    <p>서울특별시 서초구 태봉로 114 (우면동 142) 한국교총회관 1층</p>
                </div>
                <div class="map_list">
                    <p>연락처</p>
                    <p>02)577-4865, 02) 575-4866</p>
                </div>
                <div class="map_list">
                    <p>교통안내</p>
                    <p>
                        <span class="sub_3 subway">3호선</span>11번 출구 > 마을버스 18번 (우면동 교총방면) <br><br>
                        <span class="sub_4 subway">4호선</span>1번 출구 > 마을버스 18번 (우면동 교총방면)
                    </p>
                </div>
            </div>
        </div>
    </div>
    <?php include "../inc/footer.php" ?>
</body>

</html>