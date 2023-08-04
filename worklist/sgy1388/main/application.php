<?php include "../inc/common.php" ?>
<body>
    <?php include "../inc/sub_quick.php" ?>
    <?php include "../inc/header.php" ?>
    <div class="svis svis05">
        <h5 class="svis_title">신청내역</h5>
    </div>
    <div id="lock" class="content">
        <div class="center">
            <h5 class="sub_title">신청내역</h5>
            <div class="sub_inner">
<!--
              <div class="application_tab">
                   <ul>
                       <li class="on"><a href="application.php">회원</a></li>
                       <li><a href="application-non.php">비회원</a></li>
                   </ul>
               </div>
-->
               <form action="">
                   <div class="_lock_area">
                       <p>회원가입 시 설정한 비밀번호를 입력하세요.</p>
                       <p>비밀번호 입력</p>
                       <input type="password">
                       <div class="btn_set">
                           <div class="confirm"><a href="application_list.php">조회</a></div>
                       </div>
                   </div>
               </form>
            </div>
        </div>
    </div>
   
    <?php include "../inc/footer.php" ?>
</body>
</html>