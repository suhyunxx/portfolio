<?php include "../inc/common.php";?>
<body>
    <? include "../inc/header.php"; ?>
    <div class="svis vis1">
        <div class="sub_center">
            <h1 class="sub_title">
                <span style="animation-delay: 0s;">회</span>
                <span style="animation-delay: 0.1s;">사</span>
                <span style="animation-delay: 0.2s;">소</span>
                <span style="animation-delay: 0.3s;">개</span>
            </h1>
            <div class="snb">
                <ul>
                    <li class="homebtn"><a href="<?=dir?>"><i class="xi-home"></i></a></li>
                    <li class="snb_select snb1">
                        <a href="">회사소개</a>
                        <ul class="snbbox snbbox1">
                            <li><a href="<?=dir?>/company/overview.php">회사소개</a></li>
                            <li><a href="<?=dir?>/operation/philosophy.php">운용정보</a></li>
                            <li><a href="<?=dir?>/board/notice.php">공시정보</a></li>
                            <li><a href="<?=dir?>/contact/map.php">CONTACT US</a></li>
                        </ul>
                    </li>
                    <li class="snb_select snb2"> 
                        <a href="">조직도</a>
                        <ul class="snbbox snbbox2">
                            <li><a href="<?=dir?>/company/overview.php">기업개요</a></li>
                            <li><a href="<?=dir?>/company/greeting.php">인사말</a></li>
                            <li><a href="<?=dir?>/company/org.php">조직도</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <div class="sub_con">
        <div class="sub_center">
            <h2 class="top_title">조직도</h2>
        </div>

        <div class="org2">
            <div class="org_01">
                <div class="box">
                    <div class="tit">
                        <span>이사회</span>
                    </div>
                </div>
            </div>
            <div class="org_02">
                <div class="box">
                    <div class="tit">
                        <span>대표이사</span>
                    </div>
                </div>
            </div>
            <div class="org_03">
                <div class="org_03_01">
                    <div class="box">
                        <div class="tit point-right">
                            <span>리스크관리위원회</span>
                        </div>
                    </div>
                    <div class="box">
                        <div class="tit point-right">
                            <span>투자심의위원회</span>
                        </div>
                    </div>
                    <div class="box">
                        <div class="tit point-right">
                            <span>집합투자재산평가위원회</span>
                        </div>
                    </div>
                    <div class="box">
                        <div class="tit point-right">
                            <span>인사위원회</span>
                        </div>
                    </div>
                </div>
                <div class="org_03_01">
                    <div class="box">
                        <div class="tit point-left">
                            <span>감사</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="org_04">
                <div class="box">
                    <div class="tit point-top">
                        <span>운용본부</span>
                    </div>
                    <div class="org_04_01">
                        <div class="cont">
                            <div class="tit point-top">
                                <span>운용팀</span>
                            </div>
                        </div>
                        <div class="cont">
                            <div class="tit point-top">
                                <span>운용지원팀</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="tit point-top">
                        <span>경영관리본부</span>
                    </div>
                    <div class="org_04_02">
                        <div class="cont">
                            <div class="tit point-top">
                                <span>경영관리팀</span>
                            </div>
                        </div>
                        <div class="cont">
                            <div class="tit point-top">
                                <span>리스크관리팀</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="tit point-top">
                        <span>준법감시인</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <? include "../inc/footer.php"; ?>

</body>
</html>