<?php 
// 게시판 정보
$Board['board_id'] = "photo";
$Board['board_name'] = "사진게시판";
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

if ($_GET['at'] == "download") {
    download();
    exit;
}
?>
<body>
    <?php include "../inc/header.php"; ?>
    <div id="svis" style="background-image:url(../img/main/introsub1svisbg.png); background-repeat:no-repeat;">
        <div class="center" >
            <div class="svis_title">
                <h3 class="boldfont">참여광장</h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="inner">
            <?
            // 게시판 로드
            include_once "../common/gallery.php";
            ?>
        </div>
    </div>
    <?php include "../inc/footer.php"; ?>
    <script type="text/javascript" src="../js/snb.js"></script>
    <script type="text/javascript" src="../js/snb2.js"></script>
</body>
</html>