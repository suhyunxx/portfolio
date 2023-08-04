<?php include "../inc/common.php" ?>
<body>
    <?php include "../inc/sub_quick.php" ?>
    <?php include "../inc/header.php" ?>
    <div class="svis svis04">
        <h5 class="svis_title">알림마당</h5>
    </div>
    <?php include "../inc/snb1.php" ?>
    <div id="notice" class="content">
        <div class="center">
<!--            <h5 class="sub_title">비공개상담</h5>-->
            <div class="sub_inner">
              <div class="noti_tab">
                   <ul>
                       <li><a href="<?=dir?>noti/notice.php">공지사항</a></li>
                       <li><a href="<?=dir?>noti/program.php">프로그램</a></li>
                       <li class="on"><a href="<?=dir?>noti/recruit.php">채용공고</a></li>
                       <li><a href="<?=dir?>noti/news.php">센터소식</a></li>
                   </ul>
               </div>
               <div class="view_top">
                   <h5 class="title">공지사항</h5>
                   <ul class="txt_wrap">
                       <li>작성자&nbsp;&nbsp;<span>관리자</span></li>
                       <li>작성일&nbsp;&nbsp;<span>2022-22-22</span></li>
                       <li>조회수&nbsp;&nbsp;<span>1</span></li>
                   </ul>
               </div>
               <ul class="upload_file">
                   <li class="title">첨부파일</li>
                   <li>
                       <ul class="file">
                           <li><a href="">첨부파일.zip</a></li>
                           <li><a href="">첨부파일.zip</a></li>
                           <li><a href="">첨부파일.zip</a></li>
                       </ul>
                   </li>
               </ul>
               <div class="view_content">
                   내용입니다.
               </div>
               <div class="list_view">
                   <div class="prev">
                       <p>이전글</p>
                       <p><a href="">이전글입니다.</a></p>
                   </div>
                   <div class="next">
                       <p>다음글</p>
                       <p><a href="">다음글입니다.</a></p>
                   </div>
               </div>
               <div class="_golist">
                   <a href="recruit.php">목록</a>
<!--
                   <a class="_modify" href="closed_consult.php">수정</a>
                   <a class="_delete" href="closed_consult.php">삭제</a>
-->
                </div>
            </div>
        </div>
    </div>
   
    <?php include "../inc/footer.php" ?>
</body>
</html>