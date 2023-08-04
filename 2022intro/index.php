<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>김수현 포트폴리오</title>
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <!--구글폰트-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Knewave&display=swap" rel="stylesheet">
   <!--구글폰트 끝-->
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script defer src="js/script.js"></script>
</head>
<body>
    <header>
       <div class="center">
           <h1 class="logo"><a class="knewave">suhyun</a></h1>
           <nav>
               <ul class="gnb">
                   <li class="on"><a href="#">HOME</a></li>
                   <li><a href="#">ABOUT</a></li>
                   <li><a href="#">PORTFOLIO</a></li>
                   <li><a href="#">CONTACT</a></li>
               </ul>
           </nav>
       </div>
    </header>
    <div id="container">
        <div class="vis">
            <div class="center">
               <div class="main_text">
                   <h5 class="typing"></h5>
               </div>
            </div>
            <div class="bg bg_y1"><img src="img/YELLOW.png" alt="노란색 배경이미지"></div>
            <div class="bg bg_g1"><img src="img/GREEN2.png" alt="카키색 배경이미지"></div>
        </div>
        <div class="about">
            <div class="center">
                <div class="top">
                    <div class="pic"></div>
                    <div>
                        <ul class="information">
                            <li><span class="fw700">김수현</span>&nbsp;&nbsp;&nbsp;<span>1998.05.19</span></li>
                            <li>인덕대학교 정보통신공학과</li>
                            <li>suhyunk519@naver.com</li>
                        </ul>
                        <div class="skillWrap">
                            <ul class="license">
                                <li class="fw700">LICENSE</li>
                                <li>컴퓨터활용능력 2급/1급</li>
                                <li>전산회계 2급</li>
                                <li>워드프로세서 단일등급</li>
                                <li>웹디자인기능사</li>
                            </ul>
                            <ul class="skill">
                                <li class="fw700">SKILL</li>
                                <li>HTML, CSS, JAVASCRIPT</li>
                                <li>PHOTOSHOP</li>
                                <li>한글, MS WORD, EXEL,</li>
                                <li>ACCESS, POWERPOINT</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="bot">
                    <ul class="eduWrap">
                        <li class="fw700">EDUCATION</li>
                        <li>2021. 07 ~ 2021. 12</li>
                        <li>더조은 컴퓨터 아트 학원 UI/UX 웹디자인(웹퍼블리셔) 과정 이수</li>
                    </ul>
                    <ul>
                        <li class="fw700">CAREER</li>
                        <li>2022. 02 ~ </li>
                        <li>한커뮤니케이션(웹에이전시) 퍼블리셔</li>
                    </ul>
                </div>
            </div>
            <div class="bg bg_line"><img src="img/LINE2.png" alt="선 배경이미지"></div>
        </div>
        <div class="portfolio">
           <div class="center">
               <ul class="tab">
                   <li class="on" data-filter="*"><a href="#">ALL</a></li>
                   <li data-filter=".pc"><a href="#">PC</a></li>
                   <li data-filter=".responsive"><a href="#">RESPONSIVE</a></li>
                   <li data-filter=".design"><a href="#">DESIGN</a></li>
               </ul>
               <div class="style">
                   <div class="style-item pc">
                       <div class="sian">
                          <a href="#">
                             <img src="img/kapkt.PNG">
                          </a>

                        </div>
                       <ul>
                           <li class="list_title">한국국공립유치원교원연합회</li>
                           <li>퍼블리싱 100%</li>
                       </ul>
                    </div>
                   <div class="style-item responsive">
                        <div class="sian">
                          <a href="#"><img src="img/jbam.jpg"></a>
                        </div>
                       <ul>
                           <li class="list_title">JBAM</li>
                           <li>디자인 90%, 퍼블리싱 100%</li>
                       </ul>
                    </div>
                   <div class="style-item responsive">
                       <div class="sian"><a href="#"><img src="img/kwan.jpeg"></a></div>
                       <ul>
                           <li class="list_title">관현사</li>
                           <li>디자인 100%, 퍼블리싱 100%</li>
                       </ul>
                   </div>
                   <div class="style-item design responsive">
                       <div class="sian"><a href="#"><img src="img/visual_C.jpg"></a></div>
                       <ul>
                           <li class="list_title">이노뎁</li>
                           <li>디자인 100%, 퍼블리싱 100%</li>
                       </ul>
                   </div>
                   <div class="style-item design">
                       <div class="sian"><a href="#"><img src="img/test.PNG"></a></div>
                       <ul>
                           <li class="list_title">세무법인나은</li>
                           <li>디자인 100%, 퍼블리싱 100%</li>
                       </ul>
                   </div>
                   <div class="style-item pc">
                       <div class="sian"><a href="#"><img src="img/test.PNG"></a></div>
                       <ul>
                           <li class="list_title">포트폴리오 제목</li>
                           <li>디자인 100%, 퍼블리싱 100%</li>
                       </ul>
                   </div>
               </div>
           </div>
        </div>
        <div class="contact">
            <div class="center">
                <form id="userform" action="db_insert.php" method="post">
                    <div class="labelset">
                       <label for="name">성함</label>
                       <input id="name" name="name" placeholder="성함을 입력해 주세요.">
                       <p class="error_msg">입력되지 않았습니다.</p>
                    </div>
                    <div class="labelset">
                       <label for="phone">연락처</label>
                       <input id="phone" name="phone" placeholder="숫자만 입력해 주세요.">
                       <p class="error_msg">입력되지 않았습니다.</p>
                    </div>
                    <div class="labelset">
                       <label for="content">문의내용</label>
                       <textarea id="content" name="content" placeholder="문의내용을 입력해 주세요."></textarea>
                       <p class="error_msg">입력되지 않았습니다.</p>
                    </div>
                    <label for="checkneed" class="labelagree">개인정보 수집 동의</label>
                    <input id="checkneed" name="checkneed" type="checkbox">
                    <p class="checklist">수집항목 : 성함, 연락처, 문의내용<br>목적 : 문의요청에 대한 회신</p>
                    <p class="error_msg">입력되지 않았습니다.</p>
                    <div class="submitBtn"><button type="submit">메일 전송</button></div>
                </form>
            </div>
            <div class="bg bg_g2"><img src="img/GREEN.png" alt="카키색 배경이미지"></div>
        </div>
        <div class="popup popup1">
            <div class="center">
                <ul class="closeWrap">
                    <li><a class="closebtn" href="#"><span class="lnr lnr-cross"></span></a></li>
                </ul>
                <div class="content">
                   <p class="hptitle">한국국공립유치원교원연합회</p>
                   <p class="forpc">pc</p>
                   <p class="period">작업기간 : 22.09 ~ 22.09</p>
                    <div class="popupImg">
                        <img src="img/popup1.JPG" alt="한국국공립유치원교원연합회">
                    </div>
                    <p class="gosite"><a href="https://www.kapkt.info" target="_blank">보러가기</a></p>
                </div>
            </div>
        </div>
        <div class="popup popup2">
            <div class="center">
                <ul class="closeWrap">
                    <li><a class="closebtn" href="#"><span class="lnr lnr-cross"></span></a></li>
                </ul>
                <div class="content">
                   <p class="hptitle">JBAM</p>
                   <p class="forpc">pc</p>
                   <p class="period">작업기간 : 22.09 ~ 22.09</p>
                   <p class="context">그누보드를 사용한 홈페이지로</p>
                    <div class="popupImg">
                        <img src="img/jbam.jpg" alt="JBAM">
                    </div>
                    <p class="gosite"><a href="https://www.jbam.kr/" target="_blank">보러가기</a></p>
                </div>
            </div>
        </div>
        <div class="popup popup3">
            <div class="center">
                <ul class="closeWrap">
                    <li><a class="closebtn" href="#"><span class="lnr lnr-cross"></span></a></li>
                </ul>
                <div class="content">
                   <p class="hptitle">관현사</p>
                   <p class="forpc">pc</p>
                   <p class="period">작업기간 : 22.09 ~ 22.09</p>
                   <p class="context">그누보드를 사용한 홈페이지로</p>
                    <div class="popupImg">
                        <img src="img/kwan.jpeg" alt="kwan">
                    </div>
                    <p class="gosite"><a href="http://www.kwanhyeonsa.com/" target="_blank">보러가기</a></p>
                </div>
            </div>
        </div>
        <div class="popup popup4">
            <div class="center">
                <ul class="closeWrap">
                    <li><a class="closebtn" href="#"><span class="lnr lnr-cross"></span></a></li>
                </ul>
                <div class="content">
                   <p class="hptitle">이노뎁</p>
                   <p class="forpc">pc</p>
                   <p class="period">작업기간 : 22.09 ~ 22.09</p>
                   <p class="context">메인비주얼 디자인</p>
                   <p class="context"></p>
                    <div class="popupImg innodep_sian">
                        <p>시안 A</p>
                        <img src="img/visual_C.jpg" alt="innodep">
                        <p>시안 B</p>
                        <img src="img/visual_B.jpg" alt="innodep">
                        <p>시안 C</p>
                        <img src="img/visual_A.jpg" alt="innodep">
                    </div>
                    <p class="gosite"><a href="https://innodep.co.kr/" target="_blank">보러가기</a></p>
                </div>
            </div>
        </div>
        <div class="popup popup5">
            <div class="center">
                <ul class="closeWrap">
                    <li><a class="closebtn" href="#"><span class="lnr lnr-cross"></span></a></li>
                </ul>
                <div class="content">
                   <p class="hptitle">세무법인나은</p>
                   <p class="forpc">pc</p>
                   <p class="period">작업기간 : 22.09 ~ 22.09</p>
                   <p class="context">그누보드를 사용한 홈페이지로</p>
                    <div class="popupImg">
                        <img src="img/jbam.jpg" alt="JBAM">
                    </div>
                    <p class="gosite"><a href="https://www.jbam.kr/" target="_blank">보러가기</a></p>
                </div>
            </div>
        </div>
        <div class="popup popup6">
            <div class="center">
                <ul class="closeWrap">
                    <li><a class="closebtn" href="#"><span class="lnr lnr-cross"></span></a></li>
                </ul>
                <div class="content">

                </div>
            </div>
        </div>
    </div>
<!--detail popup-->

</body>
</html>