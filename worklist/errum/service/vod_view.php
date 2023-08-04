<?php include "../inc/common.php" ?>
<body>
    <?php include "../inc/header.php" ?>
    <div class="svis">
        <div class="w1420">
            <div class="loc-wrap">
                <ul class="loc">
                    <li class="home"><i data-feather="home"></i></li>
                    <li>서비스 안내</li>
                    <li>동영상 서비스 소개</li>
                </ul>
            </div>
            <h5 class="sub-title">동영상 서비스 소개</h5>
        </div>
    </div>
    <div class="container">
        <div class="vod_wrap">
            <form action="">
                <div class="w1420">
                    <div class="vod_view">
                        <div class="top">
                            <h3 class="vod_tit">동영상제목3</h3>
                            <div class="info">
                                <ul>
                                    <li>
                                        <span>구분</span><span>지재권 기초</span>
                                    </li>
                                    <li>
                                        <span>작성일</span><span>2022-05-05</span>
                                    </li>
                                    <li>
                                        <span>조회수</span><span>0</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="con">
<!--                            <iframe width="560" height="315" src="//www.youtube.com/embed/xdB-PGmKdXo?rel=0" frameborder="0" allowfullscreen=""></iframe>-->
                            <video src="<?=dir?>video/sample.mp4" controls playsinline></video>
                        </div>
                        <div class="list_btn btn-main"><a href="<?=dir?>service/vod.php">목록</a></div>
                    </div>
                    
                </div>
            </form>


        </div>
    </div>
    <?php include "../inc/footer.php" ?>
</body>

</html>