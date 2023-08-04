<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>오시는 길</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="css/brandmap.css">
</head>
<body>
    <?php include "common/header.php"; ?>
    <div id="container">
        <div id="sec1">
            <div class="center">
                <div class="topTitle">
                    <h3>본사 오시는 길</h3>
                </div>
            </div>
        </div>
        <div id="sec2">
            <div class="center">
                <div id="map"></div>
                <div class="addr">
                    <h4 class="shopname">(주)오백미라클</h4>
                    <h4 class="shopaddr">서울특별시 마포구 월드컵북로4길 77 에이엔티빌딩 3층</h4>
                    <div class="infor">
                        <h4>TEL : 02-702-1962</h4>
                        <h4>EMAIL : miracle@500mrc.co.kr</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "common/footer.php"; ?>
    <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=3c7ff8faef4781adc060c0433486171b"></script>
    <script src="js/header.js"></script>
    <script src="js/brandmap.js"></script>
</body>
</html>