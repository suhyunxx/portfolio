<?php 
    $req['idx'] = $_GET['idx'];

    $Value = $db -> SelectOne("select * from ".$Board['table_board']." where wr_id = '".$req['idx']."'");
	if(!$Value) locationReplace($Board['Link']);

//    echo "select * from ".$Board['table_board']." where wr_id = '".$req['idx']."'";

    include "../inc/common.php";
?>
<body>
    <?php include "../inc/sub_quick.php" ?>
    <?php include "../inc/header.php" ?>
    <div class="svis svis02">
        <h5 class="svis_title">대전서구청소년상담복지센터</h5>
    </div>
    <?php include "../inc/snb1.php" ?>
    <div id="gallery1_view" class="content">
        <div class="center">
            <h5 class="sub_title">활동사진</h5>
            <div class="sub_inner">
               <div class="view_top">
                   <h5 class="title"><?=$Value['wr_subject']?></h5>
                   <ul class="txt_wrap">
                       <li>작성자&nbsp;&nbsp;<span><?=$Value['wr_name']?></span></li>
                       <li>작성일&nbsp;&nbsp;<span><?=substr($Value['wr_datetime'],0,10)?></span></li>
                       <li>조회수&nbsp;&nbsp;<span><?=$Value['wr_hit']?></span></li>
                   </ul>
               </div>
               <!-- <ul class="upload_file">
                   <li class="title">첨부파일</li>
                   <li>
                       <ul class="file">
                           <li><a href="">첨부파일.zip</a></li>
                           <li><a href="">첨부파일.zip</a></li>
                           <li><a href="">첨부파일.zip</a></li>
                       </ul>
                   </li>
               </ul> -->
               <div class="view_content">
                <?=$Value['wr_content']?>
               </div>
               <!-- <div class="list_view">
                   <div class="prev">
                       <p>이전글</p>
                       <p><a href="">이전글입니다.</a></p>
                   </div>
                   <div class="next">
                       <p>다음글</p>
                       <p><a href="">다음글입니다.</a></p>
                   </div>
               </div> -->
               <div class="_golist"><a href="gallery1.php">목록</a></div>
            </div>
        </div>
    </div>
   
    <?php include "../inc/footer.php" ?>
</body>
</html>