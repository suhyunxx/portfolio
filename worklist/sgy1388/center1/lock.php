<?php include "../inc/common.php" ?>
<body>
    <?php include "../inc/sub_quick.php" ?>
    <?php include "../inc/header.php" ?>
    <div class="svis svis05">
        <h5 class="svis_title">비밀번호 확인</h5>
    </div>
    <?php include "../inc/snb1.php" ?>
    <div id="lock" class="content">
        <div class="center">
            <h5 class="sub_title">비밀번호 확인</h5>
            <div class="sub_inner">
               <form action="">
                   <div class="_lock_area">
                       <p>작성자와 관리자만 열람하실 수 있습니다. <br>본인이라면 비밀번호를 입력하세요.</p>
                       <p>비밀번호 입력</p>
                       <input type="password">
                       <div class="btn_set">
                           <div class="confirm"><a href="closed_consult_view.php">확인</a></div>
                           <div class="reset"><a href="">취소</a></div>
                       </div>
                   </div>
               </form>
               
               
            </div>
        </div>
    </div>
   
    <?php include "../inc/footer.php" ?>
</body>
</html>