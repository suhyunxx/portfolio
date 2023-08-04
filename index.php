<?php include "inc/common.php" ?>
<body>
    <div class="vis">
        <div class="center">
            <div class="main-txt">
                <div><h1 class="mont-300 slide-up">SUHYUN'S</h1></div>
                <div><h1 class="mont-800 slide-up">PORTFOLIO</h1></div>
            </div>
        </div>
    </div>
    <div class="about">
        <div class="center">
            <div class="top-txt">
                <p class="plus-txt">김수현을 소개합니다.</p>
                <h1 class="big-txt mont-800">ABOUT ME</h1>
            </div>
            <div class="information">
                <ul class="info">
                    <li class="bolder">정보</li>
                    <li>1998.05.19</li>
                    <li>010.9160.1246</li>
                    <li>suhyunk519@naver.com</li>
                </ul>
                <ul class="school">
                    <li class="bolder">학력</li>
                    <li class="flex">
                        <span>2020</span>
                        <span>인덕대학교 정보통신공학과 졸업</span>
                    </li>
                    <li class="flex">
                        <span>2021</span>
                        <span>더조은컴퓨터아트학원<br>UI/UX 디자인(퍼블리싱) 6개월 과정 수료</span>
                    </li>
                </ul>
                <ul class="certificate">
                    <li class="bolder">자격증</li>
                    <li class="flex">
                        <span>2018</span>
                        <span>컴퓨터활용능력 2급</span>
                    </li>
                    <li class="flex">
                        <span>2020</span>
                        <span>컴퓨터활용능력 1급</span>
                    </li>
                    <li class="flex">
                        <span>2020</span>
                        <span>전산회계 2급</span>
                    </li>
                    <li class="flex">
                        <span>2021</span>
                        <span>워드프로세서 단일등급</span>
                    </li>
                    <li class="flex">
                        <span>2021</span>
                        <span>웹디자인기능사</span>
                    </li>
                </ul>
                <ul class="career">
                    <li class="bolder">경력</li>
                    <li class="flex">
                        <span>2022.02 - </span>
                        <span>한커뮤니케이션</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="project">
        <div class="center">
            <div class="top-txt">
                <h1 class="big-txt mont-800">PROJECT</h1>
                <p class="more-btn"><a href="project_list.php" target="_blank">더보기</a></p>
            </div>
            <div class="ani-img">
                <div class="first">
                    <img class="img1" src="../img/test1.png" alt="시안이미지">
                    <img src="../img/test2.png" alt="시안이미지">
                </div>
                <div class="second">
                    <img src="../img/test2.png" alt="시안이미지">
                    <img src="../img/test1.png" alt="시안이미지">
                </div>
            </div>
        </div>
    </div>
    <div class="side_nav vis-1">
        <nav>
            <ul>
                <li class="on"><a href="">HOME</a></li>
                <li><a href="">ABOUT</a></li>
                <li><a href=""  id="tab3">PROJECT</a></li>
            </ul>
        </nav>
    </div>
    <script defer src="<?=dir?>js/aside.js"></script>
</body>
</html>