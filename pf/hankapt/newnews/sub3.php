<?php 
// 게시판 정보
$Board['board_id'] = "kidsnews";
$Board['board_name'] = "유아교육뉴스";
$Board['table_board'] = "G_Notice";
$Board['table_attach'] = "G_Notice_Attach";
$Board['comment_table'] = "G_Notice_Comment";

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
                    <li><a href="sub1.php">새소식</a></li>
                    <li><span class="lnr lnr-chevron-right"></span></li>
                    <li><a href="#">유아교육뉴스</a></li>
                </ul>
            </div>
            <ul class="leftnavi">
                <li><a href="#">새소식</a></li>
                <li><a href="sub1.php">공지사항</a></li>
                <li class="active"><a href="sub3.php">유아교육뉴스</a></li>
                <li><a href="sub4.php">연합회소식</a></li>
                <li><a href="sub5.php">연합회활동사진</a></li>
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