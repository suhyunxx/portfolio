<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>메뉴 전체보기</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="css/menu.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <script src="js/menu.js"></script>
</head>
<body>
    <?php include "common/header.php"; ?>
    <div id="container">
        <div id="sec1">
            <div class="center">
                <div class="topTitle">
                    <h3>소공동 메뉴</h3>
                    <ul class="best">
                        <li class="on"><a href="#">전체메뉴</a></li>
                        <li><a href="#">인기순</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="sec2">
            <div class="center">
                <div class="left">
                    <ul class="tabmenu">
                        <li class="on" data-filter="*"><a href="#">전체메뉴</a></li>
                        <li data-filter=".new"><a href="#">신메뉴</a></li>
                        <li data-filter=".tofu"><a href="#">순두부 & 직화</a></li>
                        <li data-filter=".set"><a href="#">세트메뉴</a></li>
                        <li data-filter=".one"><a href="#">일품메뉴</a></li>
                        <li data-filter=".hot"><a href="#">뚝배기메뉴</a></li>
                        <li data-filter=".season"><a href="#">계절메뉴</a></li>
                        <li data-filter=".side"><a href="#">사이드메뉴</a></li>
                        <li data-filter=".lunchbox"><a href="#">도시락</a></li>
                    </ul>
                </div>
                <div class="right">
                    <div class="grid">
                        <div class="element-item new">
                            <a href="#">
                                <div class="smallnew"><h5>NEW!</h5></div>
                                <div class="imgWrap"><img src="img/menu1.PNG"/></div>
                                <div class="textWrap">
                                    <h4>차돌직화세트</h4>
                                    <p>30,000원</p>
                                </div>
                            </a>
                        </div>
                        <div class="element-item new">
                            <a href="#">
                            <div class="smallnew"><h5>NEW!</h5></div>
                                <div class="imgWrap"><img src="img/menu2.PNG"/></div>
                                <div class="textWrap">
                                    <h4>순두부 떡갈비 정식</h4>
                                    <p>38,000원</p>
                                </div>
                            </a>
                        </div>
                        <div class="element-item tofu">
                            <a href="#">
                                <div class="imgWrap"><img src="img/menu3.jpg"/></div>
                                <div class="textWrap">
                                    <h4>특해물 순두부</h4>
                                    <p>20,000원</p>
                                </div>
                            </a>
                        </div>
                        <div class="element-item tofu">
                            <a href="#">
                                <div class="imgWrap"><img src="img/menu4.jpg"/></div>
                                <div class="textWrap">
                                    <h4>특버섯 순두부</h4>
                                    <p>20,000원</p>
                                </div>
                            </a>
                        </div>
                        <div class="element-item tofu">
                            <a href="#">
                                <div class="imgWrap"><img src="img/menu5.jpg"/></div>
                                <div class="textWrap">
                                    <h4>스페셜 순두부</h4>
                                    <p>25,000원</p>
                                </div>
                            </a>
                        </div>
                        <div class="element-item tofu">
                            <a href="#">
                                <div class="imgWrap"><img src="img/menu6.jpg"/></div>
                                <div class="textWrap">
                                    <h4>고기부추 짬뽕순두부</h4>
                                    <p>25,000원</p>
                                </div>
                            </a>
                        </div>
                        <div class="element-item tofu">
                            <a href="#">
                                <div class="imgWrap"><img src="img/menu7.PNG"/></div>
                                <div class="textWrap">
                                    <h4>직화구이</h4>
                                    <p>18,000원</p>
                                </div>
                            </a>
                        </div>
                        <div class="element-item set">
                            <a href="#">
                                <div class="imgWrap"><img src="img/menu8.jpg"/></div>
                                <div class="textWrap">
                                    <h4>직화구이 3인세트</h4>
                                    <p>30,000원</p>
                                </div>
                            </a>
                        </div>
                        <div class="element-item set">
                            <a href="#">
                                <div class="imgWrap"><img src="img/menu9.jpg"/></div>
                                <div class="textWrap">
                                    <h4>직화구이 2인세트</h4>
                                    <p>20,000원</p>
                                </div>
                            </a>
                        </div>
                        <div class="element-item set">
                            <a href="#">
                                <div class="imgWrap"><img src="img/menu10.jpg"/></div>
                                <div class="textWrap">
                                    <h4>직화구이 1인세트</h4>
                                    <p>10,000원</p>
                                </div>
                            </a>
                        </div>
                        <div class="element-item set">
                            <a href="#">
                                <div class="imgWrap"><img src="img/menu11.jpg"/></div>
                                <div class="textWrap">
                                    <h4>순두부 보쌈정식 세트</h4>
                                    <p>18,000원</p>
                                </div>
                            </a>
                        </div>
                        <div class="element-item set">
                            <a href="#">
                                <div class="imgWrap"><img src="img/menu12.jpg"/></div>
                                <div class="textWrap">
                                    <h4>순두부 떡갈비 정식</h4>
                                    <p>30,000원</p>
                                </div>
                            </a>
                        </div>
                        <div class="element-item set">
                            <a href="#">
                                <div class="imgWrap"><img src="img/menu13.jpg"/></div>
                                <div class="textWrap">
                                    <h4>안주한상 A세트</h4>
                                    <p>18,000원</p>
                                </div>
                            </a>
                        </div>
                        <div class="element-item set">
                            <a href="#">
                                <div class="imgWrap"><img src="img/menu14.jpg"/></div>
                                <div class="textWrap">
                                    <h4>안주한상 B세트</h4>
                                    <p>30,000원</p>
                                </div>
                            </a>
                        </div>
                        <div class="element-item set">
                            <a href="#">
                                <div class="imgWrap"><img src="img/menu15.jpg"/></div>
                                <div class="textWrap">
                                    <h4>안주한상 C세트</h4>
                                    <p>50,000원</p>
                                </div>
                            </a>
                        </div>
                        <div class="element-item one">
                            <a href="#">
                                <div class="imgWrap"><img src="img/menu16.jpg"/></div>
                                <div class="textWrap">
                                    <h4>두부만두전골</h4>
                                    <p>28,000원</p>
                                </div>
                            </a>
                        </div>
                        <div class="element-item one">
                            <a href="#">
                                <div class="imgWrap"><img src="img/menu17.jpg"/></div>
                                <div class="textWrap">
                                    <h4>파불고기</h4>
                                    <p>32,000원</p>
                                </div>
                            </a>
                        </div>
                        <div class="element-item one">
                            <a href="#">
                                <div class="imgWrap"><img src="img/menu18.jpg"/></div>
                                <div class="textWrap">
                                    <h4>두부김치</h4>
                                    <p>20,000원</p>
                                </div>
                            </a>
                        </div>
                        <div class="element-item one">
                            <a href="#">
                                <div class="imgWrap"><img src="img/menu19.jpg"/></div>
                                <div class="textWrap">
                                    <h4>묵은지등뼈</h4>
                                    <p>50,000원</p>
                                </div>
                            </a>
                        </div>
                        <div class="element-item hot">
                            <a href="#">
                                <div class="imgWrap"><img src="img/menu20.jpg"/></div>
                                <div class="textWrap">
                                    <h4>청국장</h4>
                                    <p>8,000원</p>
                                </div>
                            </a>
                        </div>
                        <div class="element-item hot">
                            <a href="#">
                                <div class="imgWrap"><img src="img/menu21.jpg"/></div>
                                <div class="textWrap">
                                    <h4>콩비지</h4>
                                    <p>8,000원</p>
                                </div>
                            </a>
                        </div>
                        <div class="element-item hot">
                            <a href="#">
                                <div class="imgWrap"><img src="img/menu22.jpg"/></div>
                                <div class="textWrap">
                                    <h4>뚝배기 불고기</h4>
                                    <p>10,000원</p>
                                </div>
                            </a>
                        </div>
                        <div class="element-item hot">
                            <a href="#">
                                <div class="imgWrap"><img src="img/menu23.jpg"/></div>
                                <div class="textWrap">
                                    <h4>직화 알밥</h4>
                                    <p>8,000원</p>
                                </div>
                            </a>
                        </div>
                        <div class="element-item season">
                            <a href="#">
                                <div class="imgWrap"><img src="img/menu24.jpg"/></div>
                                <div class="textWrap">
                                    <h4>직화 물냉면 세트</h4>
                                    <p>12,000원</p>
                                </div>
                            </a>
                        </div>
                        <div class="element-item season">
                            <a href="#">
                                <div class="imgWrap"><img src="img/menu25.jpg"/></div>
                                <div class="textWrap">
                                    <h4>직화 비빔냉면 세트</h4>
                                    <p>12,000원</p>
                                </div>
                            </a>
                        </div>
                        <div class="element-item season">
                            <a href="#">
                                <div class="imgWrap"><img src="img/menu26.jpg"/></div>
                                <div class="textWrap">
                                    <h4>굴순두부</h4>
                                    <p>10,000원</p>
                                </div>
                            </a>
                        </div>
                        <div class="element-item season">
                            <a href="#">
                                <div class="imgWrap"><img src="img/menu27.jpg"/></div>
                                <div class="textWrap">
                                    <h4>들깨순두부</h4>
                                    <p>10,000원</p>
                                </div>
                            </a>
                        </div>
                        <div class="element-item season">
                            <a href="#">
                                <div class="imgWrap"><img src="img/menu28.jpg"/></div>
                                <div class="textWrap">
                                    <h4>냉이바지락순두부</h4>
                                    <p>10,000원</p>
                                </div>
                            </a>
                        </div>
                        <div class="element-item side">
                            <a href="#">
                                <div class="imgWrap"><img src="img/menu29.jpg"/></div>
                                <div class="textWrap">
                                    <h4>왕 계란말이</h4>
                                    <p>4,000원</p>
                                </div>
                            </a>
                        </div>
                        <div class="element-item side">
                            <a href="#">
                                <div class="imgWrap"><img src="img/menu30.jpg"/></div>
                                <div class="textWrap">
                                    <h4>납작군만두</h4>
                                    <p>6,000원</p>
                                </div>
                            </a>
                        </div>
                        <div class="element-item side">
                            <a href="#">
                                <div class="imgWrap"><img src="img/menu31.jpg"/></div>
                                <div class="textWrap">
                                    <h4>메밀전병</h4>
                                    <p>6,000원</p>
                                </div>
                            </a>
                        </div>
                        <div class="element-item side">
                            <a href="#">
                                <div class="imgWrap"><img src="img/menu32.jpg"/></div>
                                <div class="textWrap">
                                    <h4>모듬전</h4>
                                    <p>10,000원</p>
                                </div>
                            </a>
                        </div>
                        <div class="element-item lunchbox">
                            <a href="#">
                                <div class="imgWrap"><img src="img/menu33.jpg"/></div>
                                <div class="textWrap">
                                    <h4>직화 도시락</h4>
                                    <p>8,000원</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "common/footer.php"; ?>
    <script src="js/header.js"></script>

</body>
</html>