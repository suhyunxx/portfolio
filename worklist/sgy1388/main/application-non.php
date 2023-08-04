<?php include "../inc/common.php" ?>
<body>
    <?php include "../inc/sub_quick.php" ?>
    <?php include "../inc/header.php" ?>
    <div class="svis svis05">
        <h5 class="svis_title">신청내역</h5>
    </div>
    <div id="application-non" class="content">
        <div class="center">
            <h5 class="sub_title">신청내역</h5>
            <div class="sub_inner">
               <form action="">
                   <div class="non_area">
                       <p class="top_ment">신청 시 입력한 정보를 입력해주세요.</p>
                       <p class="inputline">
                           <label for="">신청메뉴</label>
                           <span>
                               <input type="radio" id="menu" name="menu"><label for="menu">대면상담</label>
                               <input type="radio" id="menu2" name="menu"><label for="menu2">프로그램 신청</label>
                           </span>
                       </p>
                       <p class="inputline">
                           <label for="">상담받는 이 성명</label>
                           <input type="text" placeholder="상담받는 이 성명 입력">
                       </p>
                        <p class="inputline">
                            <label for="">휴대폰 번호</label>
                           <input type="text" placeholder="숫자만 입력">
                        </p>
                        <p class="inputline">
                            <label for="">비밀번호 입력</label>
                           <input type="password" placeholder="비밀번호 입력">
                        </p>
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