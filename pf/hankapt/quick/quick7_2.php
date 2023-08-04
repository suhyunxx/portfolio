<?php 
// 게시판 정보
$Board['board_id'] = "data2";
$Board['board_name'] = "시도교육청 찾기";
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

include '../inc/common.php';

$local = $_GET["local"];
if (!$local) $local = 1;

$local_arr = Array(
"1"=>"서울",
"2"=>"부산",
"3"=>"대구",
"4"=>"인천",
"5"=>"광주",
"6"=>"대전",
"7"=>"울산",
"8"=>"세종",
"9"=>"경기",
"10"=>"강원",
"11"=>"충북",
"12"=>"충남",
"13"=>"전북",
"14"=>"전남",
"15"=>"경북",
"16"=>"경남",
"17"=>"제주"
);

$Category = $local-1;
$local_name = $local_arr[$local];


if ($_SERVER["SCRIPT_NAME"] == "/quick/quick7_1.php") {
    $title_name = "유치원명";
} else if ($_SERVER["SCRIPT_NAME"] == "/quick/quick7_2.php") {
    $title_name = "교육청명";
} else if ($_SERVER["SCRIPT_NAME"] == "/quick/quick7_3.php") {
    $title_name = "진흥원명";
}
?>
<style>
.container .inner .localnewsmap .quicksearch > div {display:block;}
/*드래그방지*/
body{
    -webkit-user-select:none;
    -moz-user-select:none;
    -ms-user-select:none;
    user-select:none
}  


</style>
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
                    <li><a href="#">시도교육청 찾기</a></li>
                </ul>
            </div>
            <ul class="leftnavi">
                <li><a href="#">찾아보기</a></li>
                <li><a href="quick7_1.php">유치원 찾기</a></li>
                <li class="active"><a href="quick7_2.php">시도교육청 찾기</a></li>
                <li><a href="quick7_3.php" style="line-height:24px;">유아교육진흥원 찾기</a></li>
            </ul>
            <h4 class="innerTitle innerTitleLeft" style="margin-bottom:30px;">시도교육청 찾기</h4>
            <div class="content localnewsmap contentLeft">
                <div class="left">
                    <p class="lightfont">
                    <span style="padding-left:9px;">아래의 목록에서 원하시는 지역을 클릭하세요.<br></span><span style="padding-left:9px;">해당 지역의 유치원 정보를 리스트 형식으로 보실 수 있습니다.</span></p>
                    <div class="localList">
                    <?
                    foreach ($local_arr as $key => $val) {
                        if ($key == $local) $class_a = "active"; else $class_a = "";
                    ?>
                        <div class="local<?=$key?> <?=$class_a?>"><a href="<?=$_SERVER["SCRIPT_NAME"]?>?local=<?=$key?>"><?=$val?></a></div>
                    <?
                    }
                    ?>
                    </div>
                </div>
                <div class="right quicksearch">
                    <div class="localimg<?=$local?>"><img src="../img/main/map_img_<?=$local?>.png" alt="<?=$local_name?>"></div>
                </div>
            </div>
            <?
            // 게시판 로드
            include_once "../common/data.php";
            ?>
        </div>
    </div>
    <?php include "../inc/footer.php"; ?>
    <script type="text/javascript" src="../js/snb.js"></script>
</body>
</html>