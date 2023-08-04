<?php 
// 게시판 정보
$Board['board_id'] = "training2";
$Board['board_name'] = "직무연수";
$Board['table_board'] = "G_Info";
$Board['table_attach'] = "G_Info_Attach";
$Board['comment_table'] = "G_Info_Comment";

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
?><body>
    <?php include "../inc/header.php"; ?>
    <div class="container">
        <div class="inner">
            <div class="topnavi">
                <ul>
                    <li><a href="../main/index.php"></a></li>
                    <li><span class="lnr lnr-chevron-right"></span></li>
                    <li><a href="sub1.php">연수</a></li>
                    <li><span class="lnr lnr-chevron-right"></span></li>
                    <li><a href="#">직무연수</a></li>
                </ul>
            </div>
            <ul class="leftnavi">
                <li><a href="#">연수</a></li>
                <li><a href="sub1.php">신규교사연수</a></li>
                <li class="active"><a href="sub2.php">직무연수</a></li>
                <li><a href="sub3.php">시군회장단연수</a></li>
                <li><a href="sub5.php">연수후기</a></li>
            </ul>
            <?
            // 게시판 로드
            include_once "../common/training.php";
            ?>
        </div>
    </div>
    <?php include "../inc/footer.php"; ?>
    <script type="text/javascript" src="../js/snb.js"></script>
    <script type="text/javascript" src="../js/snb2.js"></script>
</body>
</html>