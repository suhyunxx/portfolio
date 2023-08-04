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
                    <li><a href="#">신문신청</a></li>
                </ul>
            </div>
            <ul class="leftnavi">
                <li><a href="#">참여광장</a></li>
                <li class="active"><a href="sub1.php">신문신청</a></li>
                <li><a href="sub2.php">캘린더신청</a></li>
                <li><a href="sub3.php">회원게시판</a></li>
                <li><a href="sub6.php">설문조사</a></li>
            </ul>
            <form>
                <div class="content newssubsWrap contentLeft">
                    <div class="newssubs1 newscommon">
                        <div class="detail leftDetail">
                            <div>
                                <div class="pbox"><p>제목</p></div>
                                <div class="inputWrap">
                                    <p>신문신청</p>
                                </div>
                            </div>
                            <div>
                                <div class="pbox"><p>유치원명</p></div>
                                <div class="inputWrap">
                                    <p>한국국공립유치원</p>
                                </div>
                            </div>
                            <div style="height:120px;">
                                <div class="pbox"><p>유치원주소</p></div>
                                <div class="inputWrap">
                                    <p style="line-height:20px;">서울특별시 서초구 태봉로 114 (우면동 142) 한국교총회관 1층 한국국공립유치원교원연합회</p>
                                </div>
                            </div>
                            
                        </div>
                        <div class="detail rightDetail">
                            <div>
                                <div class="pbox"><p>성명</p></div>
                                <div class="inputWrap">
                                    <p>성명</p>
                                </div>
                            </div>
                            <div>
                                <div class="pbox"><p>유치원전화번호</p></div>
                                <div class="inputWrap">
                                    <p>02-1111-1111</p>
                                </div>
                            </div>
                            <div>
                                <div class="pbox"><p>휴대폰</p></div>
                                <div class="inputWrap">
                                    <p>010-0000-0000</p>
                                </div>
                            </div>
                            <div>
                                <div class="pbox"><p>이메일</p></div>
                                <div class="inputWrap">
                                    <p>test@naver.com</p>
                                </div>
                            </div>
                            
                        </div> 
                        
                    </div>
                    <div class="noflex">
                        <div style="height:140px;">
                            <div class="pbox"><p>내용</p></div>
                            <div class="inputWrap">
                                <p>내용</p>

                            </div>
                        </div>
                    </div>
                    <div class="newsbtnset">
                        <a href="sub1_list.php" class="viewlist">목록</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    <?php include "../inc/footer.php"; ?>
    <script type="text/javascript" src="../js/snb.js"></script>
    <script type="text/javascript" src="../js/snb2.js"></script>
</body>
</html>