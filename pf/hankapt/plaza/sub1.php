<?php 
require_once $_SERVER["DOCUMENT_ROOT"]."/_core/_lib.php";

// 게시판 정보
$Board['board_id'] = "inquiry_paper";
$Board['board_name'] = "신문 신청";
$Board['table_board'] = "G_Board";

$Board['page_limit'] = 10;
$Board['page_block'] = 10;
$Board['use_file'] = 10;
$Board['use_reply'] = "N";
$Board['use_comment'] = "N";
$Board['use_category'] = "N";

$Board['file_max_size'] = "20M";
$Board['file_check_type'] = "deny";
$Board['file_check_ext'] = "php|phps|html|htm|exe|bat|sql";

$token = new_token($Board['board_id']);

include '../inc/common.php';
?>
<body>
    <?php include "../inc/header.php"; ?> 
    <div class="container">
        <div class="inner">
            <div class="topnavi">
                <ul>
                    <li><a href="../main/index.php"></a></li>
                    <li><span class="lnr lnr-chevron-right"></span></li>
                    <li><a href="sub1.php">참여광장</a></li>
                    <li><span class="lnr lnr-chevron-right"></span></li>
                    <li><a href="#">신문 신청</a></li>
                </ul>
            </div>
            <ul class="leftnavi">
                <li><a href="#">참여광장</a></li>
                <li class="active"><a href="sub1.php">신문 신청</a></li>
                <li><a href="sub2.php">캘린더 신청</a></li>
                <li><a href="sub3.php">회원게시판</a></li>
                <li><a href="sub6.php">설문조사</a></li>
            </ul>
            <?
            include_once "../common/plaza.php";
            ?>
        </div>
    </div>
    <?php include "../inc/footer.php"; ?>
    <script type="text/javascript" src="../js/snb.js"></script>
    <script type="text/javascript" src="../js/snb2.js"></script>
</body>
</html>