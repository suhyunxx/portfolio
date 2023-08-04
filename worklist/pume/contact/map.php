<?php include "../inc/common.php";?>
<body>
    <? include "../inc/header.php"; ?>
    <div class="svis vis4">
        <div class="sub_center">
            <h1 class="sub_title">
                <span style="animation-delay: 0s;">C</span>
                <span style="animation-delay: 0.1s;">O</span>
                <span style="animation-delay: 0.2s;">N</span>
                <span style="animation-delay: 0.3s;">T</span>
                <span style="animation-delay: 0.4s;">A</span>
                <span style="animation-delay: 0.5s;">C</span>
                <span style="animation-delay: 0.6s;">T&nbsp;</span>
                <span style="animation-delay: 0.7s;">U</span>
                <span style="animation-delay: 0.8s;">S</span>
            </h1>
            <div class="snb">
                <ul>
                    <li class="homebtn"><a href="<?=dir?>"><i class="xi-home"></i></a></li>
                    <li class="snb_select snb1">
                        <a href="">CONTACT US</a>
                        <ul class="snbbox snbbox1">
                            <li><a href="">회사소개</a></li>
                            <li><a href="">운용정보</a></li>
                            <li><a href="<?=dir?>/board/notice.php">공시정보</a></li>
                            <li><a href="<?=dir?>/contact/map.php">CONTACT US</a></li>
                        </ul>
                    </li>
                    <li class="snb_select snb2"> 
                        <a href="">오시는 길</a>
                        <ul class="snbbox snbbox2">
                            <li><a href="<?=dir?>/contact/map.php">오시는 길</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="sub_con">
        <div class="sub_center wrap">
            <h2 class="top_title">오시는 길</h2>
            <div class="map_wrap">
                <div class="map">
                    <!-- * 카카오맵 - 지도퍼가기 -->
                    <!-- 1. 지도 노드 -->
                    <div id="daumRoughmapContainer1689831332614" class="root_daum_roughmap root_daum_roughmap_landing"></div>

                    <script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

                    <!-- 3. 실행 스크립트 -->
                    <script charset="UTF-8">
                        new daum.roughmap.Lander({
                            "timestamp" : "1689831332614",
                            "key" : "2fkb5",
                            "mapWidth" : "100%",
                            "mapHeight" : "560"
                        }).render();
                    </script>
                </div>
                <div class="map_info">
                    <div>
                        <span class="circle000"><i class="xi-maker"></i></span>
                        <p class="address">서울특별시 강남구 봉은사로 214, 7층(역삼동 레드페이스빌딩)</p>
                    </div>
                    <div>
                        <span class="circle000"><i class="xi-call"></i></span>
                        <p>
                            <span class="notobold">TEL</span>
                            <span class="number bar">02-6713-5811</span>
                            <span class="notobold">FAX</span>
                            <span class="number">02-6713-5825</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <? include "../inc/footer.php"; ?>

</body>
</html>