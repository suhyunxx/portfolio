<?php 
// 게시판 정보
$Board['board_id'] = "pds7";
$Board['board_name'] = "기타자료";
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
                    <li><a href="sub1.php">자료실</a></li>
                    <li><span class="lnr lnr-chevron-right"></span></li>
                    <li><a href="#">기타자료</a></li>
                </ul>
            </div>
            <ul class="leftnavi">
                <li><a href="#">자료실</a></li>
                <li><a href="sub1.php" style="padding:0 7px;">교육프로그램 및 매뉴얼</a></li>
                <li class="active"><a href="sub7.php">기타자료</a></li>
                <li><a href="sub2.php">연수교재자료</a></li>
                <li><a href="sub3.php">신문,회보자료</a></li>
<!--                <li><a href="sub4.php">서식자료</a></li>-->
                <li><a href="sub5.php">법령자료</a></li>
                <li><a href="sub6.php">통계자료</a></li>
            </ul>
            <?
            // 게시판 로드
            include_once "../common/board.php";
            ?>
        </div>
    </div>
    <?php include "../inc/footer.php"; ?>
    <script type="text/javascript" src="../js/snb.js"></script>
    <script type="text/javascript" src="../js/snb2.js"></script>
</body>
</html>