<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>오시는 길</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/map.css">
    <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=3c7ff8faef4781adc060c0433486171b"></script>
    <script defer src="js/header.js"></script>
    <script defer src="js/map.js"></script>
</head>
<body>
    <?php include "common/header.php"; ?>
    <div id="container">
        <div class="center">
            <div class="topText">
                <h4>COFFEE & ROASTER 오시는 길</h4>
            </div>
            <div id="map"></div>
            <div class="guide">
                <div class="topText">
                    <h4>COFFEE & ROASTER 영업시간 안내</h4>
                </div>
                <div class="when">
                    <h6>월/금 10:00 - 22:00</h6>
                    <h6>화/수/목 9:00 - 20:00</h6>
                    <h6>토/일 10:00 - 24:00</h6>
                    <h6>연중무휴</h6>
                </div>
                <div class="where">
                    <h6>
                        <span>주소</span>
                        제주특별자치도 서귀포시
                        특별자치도, 안덕면 녹차분재로 218 KR 
                        제주항공우주박물관 4층
                    </h6>
                    <h6><span>전화번호</span>064-222-2222</h6>
                </div>
            </div>
        </div>
    </div>
    <?php include "common/footer.php"; ?> 
</body>
</html>