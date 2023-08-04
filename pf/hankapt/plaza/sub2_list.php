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
                <div style="position:relative;" class="tableTop">
                    <span class="lightfont" style="position:absolute; top:50%; left:0; transform:translateY(-50%);">총 <span>1</span>건</span>
                    <form>
                        <select class="select">
                            <option value="">전체</option>
                            <option value="">제목</option>
                            <option value="">내용</option>
                            <option value="">작성자</option>
                        </select>
                    </form>
                    <div class="searchSet">
                        <input class="search_bar" type="text">
                        <button class="searchicon"></button>
                    </div>
                    
                </div>
                <table class="refTable">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>제목</th>
                            <th>등록일</th>
                            <th>작성자</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><a  style="display:flex; align-items:center;" href="sub2_lock.php">캘린더신청<img style="padding-left:10px;" src="../img/main/lock.png"></a></td>
                            <td>2021-03-23</td>
                            <td>관리자</td>
                        </tr>
                    </tbody>
                </table>
                <?php include "../inc/pagenation.php"; ?>
            </div>
        </div>
    </div>
    <?php include "../inc/footer.php"; ?>
    <script type="text/javascript" src="../js/snb.js"></script>
    <script type="text/javascript" src="../js/snb2.js"></script>
</body>
</html>