<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOUSEIN</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/isotope.js"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script defer src="js/common.js"></script>
    <script src="js/mobile.js"></script>
    <script defer src="js/style.js"></script>
</head>
<body>
    <?php include "common/header.php"; ?>
    <div id="container">
        <div class="visual_banner1" data-wheel="0">
            <div class="center">
                <div class="main_banner">
                    <p data-aos="fade-down" data-aos-easing="ease-out" data-aos-duration="1200">264만건의 시공, 98%의 만족도</p>
                    <h4 data-aos="fade-down" data-aos-easing="ease-out" data-aos-duration="1500" data-aos-delay="1000">시공 No.1 하우스 인테리어</h4>
                    <form>
                        <div class="main_search">
                            <input type="text">
                            <button type="button">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="visual_banner2" data-wheel="1">
            <div class="center">
                <div class="title">
                    <h4>우리집 시공 전문가, 하우스 인테리어</h4>
                    <h5>화려한 인테리어, 비용 부담으로 포기하셨다면 하우스 인테리어와 함께 시작해보세요!</h5>
                </div>
                <div class="listwrap">
                    <div class="list" data-aos="fade-up" data-aos-easing="ease-out" data-aos-duration="2000">
                        <h3>띵동방문</h3>
                        <h4>시공전문가의 무료 실측/상담</h4>
                        <p>시공이 가능할지 혼자 고민하지 마세요.</p>
                        <p>가능하신 시간에 방문합니다.</p>
                    </div>
                    <div class="list" data-aos="fade-up" data-aos-easing="ease-out" data-aos-duration="2000" data-aos-delay="200">
                        <h3>하실장님</h3>
                        <h4>안심하고 진행할 수 있는 전담 시공제</h4>
                        <p>고객님과 약속한 결과물이 나올 수 있도록</p>
                        <p>담당하실장님이 책임집니다.</p>
                    </div>
                    <div class="list" data-aos="fade-up" data-aos-easing="ease-out" data-aos-duration="2000" data-aos-delay="400">
                        <h3>2년보증</h3>
                        <h4>하자 발생시 최대 2년 무상 A/S</h4>
                        <p>시공 후에도 하자 걱정마세요. 바로 해결해 드립니다.</p>
                        <p>(공사별 보증기간 참조)</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="visual_banner3" data-wheel="2">
            <div class="center">
                <div class="title">
                    <h4>스타일별 베스트 시공사례</h4>
                    <h5>고객님들의 인테리어 공간을 구경해 보세요!</h5>
                </div>
                <ul class="tab">
                    <li class="on" data-filter="*"><a href="#">ALL</a></li>
                    <li data-filter=".modern"><a href="#">MODERN</a></li>
                    <li data-filter=".natural"><a href="#">NATURAL</a></li>
                    <li data-filter=".soft"><a href="#">SOFT</a></li>
                    <li data-filter=".minimal"><a href="#">MINIMAL</a></li>
                </ul>
                <div class="style">
                    <div class="style_item soft"><img src="img/soft4.jpg"></div>
                    <div class="style_item minimal"><img src="img/minimal1.jpg"></div>
                    <div class="style_item natural"><img src="img/natural.jpg"></div>
                    <div class="style_item modern"><img src="img/modern4.jpg"></div>
                    <div class="style_item natural style5"><img src="img/natural4.jpg"></div>
                    <div class="style_item modern style6"><img src="img/modern3.jpg"></div>
                    <div class="style_item soft style7"><img src="img/soft2.jpg"></div>
                    <div class="style_item minimal style8"><img src="img/minimal2.jpg"></div>
                </div>
            </div>
        </div>
        <div class="visual_banner4" data-wheel="3">
            <div class="center">
                <div class="title">
                    <h4>시공과정을 직접 관리합니다.</h4>
                    <h5>하우스 인테리어에서 진행하는 모든 시공과정은 실장님과 함께합니다.</h5>
                </div>
                <div class="listwrap">
                    <div class="list" data-aos="fade-up" data-aos-easing="ease-out" data-aos-duration="2000">
                        <h3>현장 방문실측</h3>
                        <h4>실측 진행시 시공 방법과 범위등에 대해
                            설명 드리며 궁금하신 내용등에 대해서도
                            상담해 드립니다.
                        </h4>
                    </div>
                    <div class="list" data-aos="fade-up" data-aos-easing="ease-out" data-aos-duration="2000" data-aos-delay="200">
                        <h3>각 공정별 시공</h3>
                        <h4>각 공정별 시공시 꾸실장님이 진행상황
                            등을 안내해 드리며 문제가 생기는 경우
                            꾸실장님을 통해 해결할 수 있습니다.
                        </h4>
                    </div>
                    <div class="list" data-aos="fade-up" data-aos-easing="ease-out" data-aos-duration="2000" data-aos-delay="400">
                        <h3>시공 후 A/S</h3>
                        <h4>시공완료 후 A/S가 필요한 경우
                            담당 꾸실장님에게 전달하시면 담당
                            꾸실장님이 책임지고 처리해 드립니다.
                        </h4>
                    </div>
                </div>
                <div class="bot_text">
                    <div>
                        <span><i class="fas fa-exclamation"></i></span>
                        <p>실측부터 A/S까지 전담 하실장님이 진행해 드립니다. (시공중 담당자 변경으로 인한 혼란을 최대한 줄여드립니다.)</p>
                    </div>
                    <div>
                        <span><i class="fas fa-exclamation"></i></span>
                        <p>시공중 궁금한 점이나 문제가 생겼다면 전담 하실장님이 친절하게 상담해드립니다.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <ul class="sider">
        <li class="on"><a href="#"></a></li>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
    </ul>
    <?php include "common/footer.php"; ?>
</body>
</html>