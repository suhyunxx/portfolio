<?php include "../inc/common.php" ?>
<body>
    <?php include "../inc/sub_quick.php" ?>
    <?php include "../inc/header.php" ?>
    <div class="svis svis01">
        <h5 class="svis_title">소개</h5>
    </div>
    <?php include "../inc/snb1.php" ?>
    <div id="map" class="content">
        <div class="center">
            <h5 class="sub_title">오시는 길</h5>
            <div class="sub_inner">
                 <div class="map">
                   <div id="map_content" style="width:100%;height:600px;"></div>
                   <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=eecb415403829366b8239c3243afe321"></script>
                    <script>
                     
                     var mapContainer = document.getElementById('map_content'), // 지도를 표시할 div 
                          mapOption = { 
                                center: new kakao.maps.LatLng(36.35633570189765, 127.36516573018585), // 지도의 중심좌표
                                level: 4 // 지도의 확대 레벨
                            };

                        var map = new kakao.maps.Map(mapContainer, mapOption);

                        var imageSrc = '<?=dir?>img/sub/marker_blue.png', // 마커이미지의 주소입니다    
                            imageSize = new kakao.maps.Size(64, 69), // 마커이미지의 크기입니다
                            imageOption = {offset: new kakao.maps.Point(27, 69)}; // 마커이미지의 옵션입니다. 마커의 좌표와 일치시킬 이미지 안에서의 좌표를 설정합니다.

                        // 마커의 이미지정보를 가지고 있는 마커이미지를 생성합니다
                        var markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize, imageOption),
                            markerPosition = new kakao.maps.LatLng(36.35633570189765, 127.36516573018585); // 마커가 표시될 위치입니다

                        // 마커를 생성합니다
                        var marker = new kakao.maps.Marker({
                          position: markerPosition,
                          image: markerImage // 마커이미지 설정 
                        });

                        // 마커가 지도 위에 표시되도록 설정합니다
                        marker.setMap(map);  

                        // 커스텀 오버레이에 표출될 내용으로 HTML 문자열이나 document element가 가능합니다
                        var content = '<div class="customoverlay">' +
                            '  <a href="http://kko.to/VoGH3T65A7" target="_blank">' +
                            '    <span class="title" style="line-height:18px;">대전서구청소년상담복지센터<br>대전서구학교밖청소년지원센터</span>' +
                            '  </a>' +
                            '</div>';

                        // 커스텀 오버레이가 표시될 위치입니다 
                        var position = new kakao.maps.LatLng(36.35633570189765, 127.36516573018585);  

                        // 커스텀 오버레이를 생성합니다
                        var customOverlay = new kakao.maps.CustomOverlay({
                            map: map,
                            position: position,
                            content: content,
                            yAnchor: 1 
                        });
                     </script>
                 </div>
                 <div class="map_detail">
                     <div>
                         <div class="map_add">
                             <p><span><i class="xi-maker"></i></span>주소</p>
                             <p>대전광역시 서구 월평로 71, 3층 서구청소년상담복지센터, <br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4층 서구학교밖청소년지원센터</p>
                         </div>
                         <div class="map_call">
                             <p><span><i class="xi-call"></i></span>연락처</p>
                             <p>
                                 대전서구청소년상담복지센터<br>
                                 대전서구학교밖청소년지원센터
                             </p>
                             <p>
                                 042-527-3112<br>
                                 042-527-1388
                             </p>
                         </div>
                         <div class="map_bus">
                             <p><span><i class="xi-bus"></i></span>버스</p>
                             <p>
                                 월평중학교<br>
                                 갈마네거리
                             </p>
                             <p>
                                 102, 113번<br>
                                 101, 103, 105, 107, 116, 119번
                             </p>
                         </div>
                         <div class="map_subway">
                             <p><span><i class="xi-subway"></i></span>지하철</p>
                             <p>
                                 1호선 월평역 하차 후 1번 출구 기준 도보 8분 거리(300m)
                             </p>
                         </div>
                     </div>
                    <div class="fast">
                       <a href="http://map.naver.com/index.nhn?slng=127&slat=37.5&stext=출발지명&elng=127.5&elat=37.4&pathType=0&showMap=true&etext=대전서구상담복지센터&menu=route" target="_blank">
                        <p><img src="<?=dir?>img/sub/fast.png" alt=""></p>
                        <p>빠른 길 찾기</p></a>
                    </div>
                 </div>
            </div>
        </div>
    </div>
   
    <?php include "../inc/footer.php" ?>
</body>
</html>