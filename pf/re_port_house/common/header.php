<?php
    session_start();
?>

<div id="header">
        <div class="center">
            <h1 class="logo"><a href="index.php"><img src="img/rooflogo.png"/></a></h1>
            <ul class="gnb">
                <li>
                    <a href="#">브랜드</a>
                    <ul class="sub_gnb">
                        <li><a href="#">브랜드 소개</a></li>
                        <li><a href="#">친환경</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">제품</a>
                    <ul class="sub_gnb">
                        <li><a href="#">키친/붙박이장</a></li>
                        <li><a href="#">몰딩/월/마루</a></li>
                        <li><a href="#">중문/도어</a></li>
                        <li><a href="#">바스/타일</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">인테리어 솔루션</a>
                    <ul class="sub_gnb">
                        <li><a href="start_in.php">인테리어 시작하기</a></li>
                        <li><a href="propose_style.php">인테리어 스타일 제안</a></li>
                        <li><a href="remodeling.php">리모델링 사례</a></li>
                    </ul>
                </li>
                <li>
                    <a href="guidemap.php">쇼룸 안내</a>
                    <ul class="sub_gnb">
                        <li><a href="guidemap.php">지점 안내</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="right_util">
                <?php 
                    if(isset($_SESSION['username'])) {
                ?>
                    <li class="logintext"><a href="#"><?php echo $_SESSION['username']; ?>님 반갑습니다</a></li>
                    <li><a href="logout.php">LOGOUT</a></li>
                <?php } else { ?>
                    <li><a href="login.php">LOGIN</a></li>
                    <li><a href="join.php">JOIN</a></li>
                <?php } ?>
            </ul>
            <a class="ham" href="#"><i class="fas fa-bars"></i></a>
            <div class="mobile">
                <div class="close"><a href="#"><i class="fas fa-times"></i></a></div>
                <ul class="m_right_util">
                    <li><a href="login.php">LOGIN</a></li>
                    <li><a href="#">MY PAGE</a></li>
                </ul>
                <div class="mobile_title"><h4>MENU</h4></div>
                <ul class="m_gnb">
                    <li>
                        <a href="#">브랜드</a>
                        <ul class="m_sub_gnb">
                            <li><a href="#">브랜드 소개</a></li>
                            <li><a href="#">친환경</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">제품</a>
                        <ul class="m_sub_gnb">
                            <li><a href="#">키친/붙박이장</a></li>
                            <li><a href="#">몰딩/월/마루</a></li>
                            <li><a href="#">중문/도어</a></li>
                            <li><a href="#">바스/타일</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">인테리어 솔루션</a>
                        <ul class="m_sub_gnb">
                            <li><a href="start_in.php">인테리어 시작하기</a></li>
                            <li><a href="propose_style.php">인테리어 스타일 제안</a></li>
                            <li><a href="remodeling.php">리모델링 사례</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">쇼룸 안내</a>
                        <ul class="m_sub_gnb">
                            <li><a href="guidemap.php">지점 안내</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="guide">
                    <div class="topText">
                        <h4><a href="#">공지사항</a></h4>
                        <h4><a href="#">Q&A</a></h4>
                        <h4><a href="#">REVIEW</a></h4>
                        <h4><a href="#">채용공고</a></h4>
                    </div> 
                </div>
                <div class="searchWrap">
                    <form>
                        <input class="searchText" type="text" maxlength="10" id="search" name="search">
                        <button class="searchBtn" type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <ul class="m-sns">
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-google"></i></a></li>
                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="gnb_bg"></div>
    </div>