<?php include "../inc/common.php"; ?>
<body>
    <?php include "../inc/header.php"; ?>
    <div class="container">
        <div class="inner">
            <div class="topnavi" style="margin-bottom:50px;">
                <ul>
                    <li><a href="../main/index.php"></a></li>
                    <li><span class="lnr lnr-chevron-right"></span></li>
                    <li><a href="sub1.php">참여광장</a></li>
                    <li><span class="lnr lnr-chevron-right"></span></li>
                    <li><a href="#">캘린더신청</a></li>
                </ul>
            </div>
            <ul class="leftnavi">
                <li><a href="#">참여광장</a></li>
                <li><a href="sub1.php">신문신청</a></li>
                <li class="active"><a href="sub2.php">캘린더신청</a></li>
                <li><a href="sub3.php">회원게시판</a></li>
                <li><a href="sub6.php">설문조사</a></li>
            </ul>
            <div class="content tableWrap contentLeft">
                <div class="lock">
                    <p>비밀글입니다. 비밀번호를 입력해주세요.</p>
                    <form action="">
                        <input type="text">
                        <a href="sub2_list_view.php" class="submit">확인</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include "../inc/footer.php"; ?>
    <script type="text/javascript" src="../js/snb.js"></script>
    <script type="text/javascript" src="../js/snb2.js"></script>
</body>
</html>