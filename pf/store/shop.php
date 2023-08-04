<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>국내매장</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="css/shopmap.css">
    <link rel="stylesheet" href="css/shop.css">
    <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=3c7ff8faef4781adc060c0433486171b&libraries=services"></script>
</head>
<body>
    <?php include "common/header.php"; ?>
    <div id="container">
        <div id="sec1">
            <div class="center">
                <div class="topTitle">
                    <h3>국내매장</h3>
                </div>
            </div>
        </div>
        <div id="sec2">
            <div class="center">
                <div class="map_wrap">
                    <div id="map"></div>
                    <div id="menu_wrap" class="bg_white">
                        <div class="option">
                            <div>
                                <form onsubmit="searchPlaces(); return false;">
                                    키워드 : <input type="text" value="소공동뚝배기집" id="keyword" size="15"> 
                                    <button type="submit">검색하기</button> 
                                </form>
                            </div>
                        </div>
                        <hr>
                        <ul id="placesList"></ul>
                        <div id="pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "common/footer.php"; ?>
    <script src="js/header.js"></script>
    <script src="js/shop.js"></script>
</body>
</html>