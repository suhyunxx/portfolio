<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>쇼룸 안내</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/guidemap.css">
    <link rel="stylesheet" href="css/footer.css">

    <script src="js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=3c7ff8faef4781adc060c0433486171b"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script defer src="js/common.js"></script>
    <script defer src="js/mobile.js"></script>
    <script defer src="js/guidemap.js"></script>
</head>
<body>
    <?php include "common/header.php"; ?>
    <div id="container">
        <div class="sec1">
            <div class="center">
                <div class="main_title">
                    <h4>쇼룸 안내</h4>
                    <p>가장 가까운 지점을 찾아보세요.</p>
                </div>
            </div>
        </div>
        <div class="sec2">
            <div class="center">
                <div class="title">
                    <h4>지점 안내</h4>
                </div>
                <div class="placeList first">
                    <div class="subtitle">
                        <h5>홍대 지점</h5>
                    </div>
                    <div class="mapList">
                        <div id="map"></div>
                        <div class="information">
                            <h5>서울시 마포구 서교동 333-33 1층~3층</h5>
                            <h5>02-3333-3333</h5>
                            <h5>매일 9:00 - 20:00, 공휴일 휴무</h5>
                            <h5>건물 지하주차장 주차 가능</h5>
                        </div>
                    </div>
                </div>
                <div class="placeList">
                    <div class="subtitle">
                        <h5>강남 지점</h5>
                    </div>
                    <div class="mapList">
                        <div id="map2"></div>
                        <div class="information">
                            <h5>서울시 강남구 역삼동 강남대로 1111 1층~4층</h5>
                            <h5>02-1225-3325</h5>
                            <h5>매일 10:00 - 22:00, 공휴일 휴무</h5>
                            <h5>건물 지하주차장 주차 가능</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "common/footer.php"; ?>
</body>
</html>