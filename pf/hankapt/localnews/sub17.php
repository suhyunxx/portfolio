<?php 
// 게시판 정보
$Board['board_id'] = "local17";
$Board['board_name'] = "충북";
$Board['table_board'] = "G_Board";
$Board['table_attach'] = "G_Board_Attach";
$Board['comment_table'] = "G_Board_Comment";

$Board['page_limit'] = 10;
$Board['page_block'] = 10;
$Board['use_file'] = 10;
$Board['use_reply'] = "N";
$Board['use_comment'] = "N";
$Board['use_category'] = "N";

$Board['file_max_size'] = "20M";
$Board['file_check_type'] = "deny";
$Board['file_check_ext'] = "php|phps|html|htm|exe|bat|sql";

include "../inc/common.php"; 

if (!$_SESSION['_MEMBER_']['ID']) {
    locationReplace("/inc/logincommon.php?return_url=".$_SERVER['PHP_SELF'],"정회원만 열람 가능합니다.");
}

$MemberView = "select * from G_Member where m_id = '$MemberID'";
$Value = $db -> SelectOne($MemberView);

if($Value['m_level'] >= "5" ){
    locationReplace("/main/index.php","정회원만 열람 가능합니다.");
}

if ($_GET['at'] == "download") {
    download();
    exit;
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
                    <li><a href="sub1.php">지역소식</a></li>
                    <li><span class="lnr lnr-chevron-right"></span></li>
                    <li><a href="#">충북</a></li>
                </ul>
            </div>
            <h4 class="innerTitle">지역소식</h4>
            <div class="content localnewsmap">
                <div class="left">
                    <p class="lightfont">아래의 목록에서 원하시는 지역을 클릭하세요.<br>해당 지역의 소식을 리스트 형식으로 보실 수 있습니다.</p>
                    <div class="localList">
                        <div class="local1"><a href="sub1.php">강원</a></div>
                        <div class="local2"><a href="sub2.php">경기</a></div>
                        <div class="local3"><a href="sub3.php">경남</a></div>
                        <div class="local4"><a href="sub4.php">경북</a></div>
                        <div class="local5"><a href="sub5.php">광주</a></div>
                        <div class="local6"><a href="sub6.php">대구</a></div>
                        <div class="local7"><a href="sub7.php">대전</a></div>
                        <div class="local8"><a href="sub8.php">부산</a></div>
                        <div class="local9"><a href="sub9.php">서울</a></div>
                        <div class="local10"><a href="sub10.php">세종</a></div>
                        <div class="local11"><a href="sub11.php">울산</a></div>
                        <div class="local12"><a href="sub12.php">인천</a></div>
                        <div class="local13"><a href="sub13.php">전남</a></div>
                        <div class="local14"><a href="sub14.php">전북</a></div>
                        <div class="local15"><a href="sub15.php">제주</a></div>
                        <div class="local16"><a href="sub16.php">충남</a></div>
                        <div class="local17 active"><a href="sub17.php">충북</a></div>
                    </div>
                </div>
                <div class="right">
                    <div class="localimg17"><img src="../img/main/map_img_11.png" alt="충북"></div>
                </div>
            </div>
            <div class="content tableWrap" style="margin-top:70px;">
                <?
                // 게시판 로드
                include_once "../common/local.php";
                ?>
            </div>
        </div>
    </div>
    <?php include "../inc/footer.php"; ?>
    <script type="text/javascript" src="../js/snb.js"></script>
    <script type="text/javascript" src="../js/snb2.js"></script>
    <!-- <script type="text/javascript" src="../js/localnews.js"></script> -->
</body>
</html>