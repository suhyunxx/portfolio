<?php include "../inc/common.php"; ?>
<?
if (!$_SESSION['_MEMBER_']['ID']) {
    locationReplace("/inc/logincommon.php?return_url=".$_SERVER['PHP_SELF'],"정회원만 열람 가능합니다.");
}

$MemberView = "select * from G_Member where m_id = '$MemberID'";
$Value = $db -> SelectOne($MemberView);

if($Value['m_level'] >= "5" ){
    locationReplace("/main/index.php","정회원만 열람 가능합니다.");
}
?>
<body>
    <?php include "../inc/header.php"; ?>
    <div class="container">
        <div class="inner">
            <div class="topnavi">
                <ul>
                    <li><a href="../main/index.php"></a></li>
                    <li><span class="lnr lnr-chevron-right"></span></li>
                    <li><a href="sub1.php">연합회소개</a></li>
                    <li><span class="lnr lnr-chevron-right"></span></li>
                    <li><a href="#">연합회로고,정관</a></li>
                </ul>
            </div>
            <ul class="leftnavi">
                <li><a href="#">연합회소개</a></li>
                <li><a href="sub1.php">회장인사말</a></li>
                <li><a href="sub2.php">연혁</a></li>
                <li><a href="sub3.php">임원단구성</a></li>
                <li><a href="sub4.php">연간사업계획</a></li>
                <li><a href="sub5.php">활동보고</a></li>
                <li class="active"><a href="sub6.php">연합회로고,정관</a></li>
                <li><a href="sub8.php">찾아오시는길</a></li>
            </ul>
            <h4 class="innerTitle innerTitleLeft">연합회로고,정관</h4>
            <div class="content corlogo contentLeft">
                <div class="meaning">
                    <div class="meanleft" style="display:flex; align-items:center; justify-content:center;">
                        <img src="../img/main/logo1.png" alt="연합회 로고">
                    </div>
                    <div class="meanright">
                        <h5>KAPKT Symbol Mark 의미</h5>
                        <p>
                        푸른 타원은 세계와 우주를, 그 색인 블루는 평화를 뜻합니다.<br>
                        연합회 명칭인 KAPKT의 글자 가운데<br>
                        <span style="color:#f2a62b;">A의 색</span>은 사랑,<br>
                        <span style="color:#43c2eb;">P의 색</span>은 평화,<br>
                        <span style="color:#a8cd3b;">T의 색</span>은 새싹의 희망을 의미하고<br> 
                        전체 글자 구성의 조화는 단결을 나타냅니다.
                        </p>
                        <div class="btnsWrap">
                            <div class="btns"><a href="logo1.png" download="logo1.png">png 파일 다운로드</a></div>
                            <div class="btns"><a href="kapkt Symbol Mark.ai" download="kapkt Symbol Mark.ai">AI 파일 다운로드</a></div>
                        </div>
                        
                    </div>
                </div>
                <div class="sig logocommon">
                    <h5>시그니처 조합형</h5>
                    <div class="checkbox">
                        <div class="logowrap">
                            <div><img src="../img/main/sig1.png" alt="시그니처 조합형 국문"></div>
                            <div><img src="../img/main/sig2.png" alt="시그니처 조합형 영문"></div>
                        </div>
                        <div class="btnsWrap">
                            <div class="btns"><a href="시그니처 조합형.zip" download="시그니처 조합형.zip">png 파일 다운로드</a></div>
                            <div class="btns"><a href="sig.ai" download="sig.ai">AI 파일 다운로드</a></div>
                        </div>
                    </div>
                </div>
                <div class="ko logocommon">
                    <h5>국문 좌우조합형</h5>
                    <div class="checkbox">
                        <div class="logowrap">
                            <img src="../img/main/kologo1.png" alt="국문 좌우조합형">
                        </div>
                        <div class="btnsWrap">
                            <div class="btns"><a href="kologo1.png" download="kologo1.png">png 파일 다운로드</a></div>
                            <div class="btns"><a href="kologo1.ai">AI 파일 다운로드</a></div>
                        </div>
                    </div>
                </div>
                <!-- <div class="sig logocommon" style="padding-bottom:100px; border-bottom:1px solid #c5c5c5;">
                    <h5>영문 좌우조합형</h5>
                    <div class="checkbox">
                        <div class="btnsWrap">
                            <div class="btns"><a href="#"></a></div>
                            <div class="btns"><a href="#"></a></div>
                        </div>
                    </div>
                </div> -->
                <div class="corlogobot">
                    <h5>정관</h5>
                    <div class="corlogobotText">
                        <p>2022.04.16 개정된 연합회 정관입니다.</p>
                        <a href="20220416-정관(교재용).hwp" download="20220416-정관(교재용).hwp">첨부파일 다운받기</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <?php include "../inc/footer.php"; ?>
    <script type="text/javascript" src="../js/snb.js"></script>
    <script type="text/javascript" src="../js/snb2.js"></script>
</body>
</html>