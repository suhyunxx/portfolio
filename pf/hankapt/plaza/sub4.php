<?php include "../inc/common.php"; ?>
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
            <h4 class="innerTitle">자유게시판</h4>
            <div class="content tableWrap">
                <div style="position:relative;" class="tableTop">
                    <span class="lightfont" style="position:absolute; top:50%; left:0; transform:translateY(-50%);">총 <span>100</span>건</span>
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
                            <th>첨부파일</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>10</td>
                            <td><a href="sub4_view.php">테스트</a></td>
                            <td>2021-03-23</td>
                            <td>관리자</td>
                            <td><img src="../img/main/file.png" alt="file"></td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td><a href="sub4_view.php">테스트</a></td>
                            <td>2021-03-23</td>
                            <td>관리자</td>
                            <td><img src="../img/main/file.png" alt="file"></td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td><a href="sub4_view.php">테스트</a></td>
                            <td>2021-03-23</td>
                            <td>관리자</td>
                            <td><img src="../img/main/file.png" alt="file"></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td><a href="sub4_view.php">테스트</a></td>
                            <td>2021-03-23</td>
                            <td>관리자</td>
                            <td><img src="../img/main/file.png" alt="file"></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td><a href="sub4_view.php">테스트</a></td>
                            <td>2021-03-23</td>
                            <td>관리자</td>
                            <td><img src="../img/main/file.png" alt="file"></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td><a href="sub4_view.php">테스트</a></td>
                            <td>2021-03-23</td>
                            <td>관리자</td>
                            <td><img src="../img/main/file.png" alt="file"></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td><a href="sub4_view.php">테스트</a></td>
                            <td>2021-03-23</td>
                            <td>관리자</td>
                            <td><img src="../img/main/file.png" alt="file"></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><a href="sub4_view.php">테스트</a></td>
                            <td>2021-03-23</td>
                            <td>관리자</td>
                            <td><img src="../img/main/file.png" alt="file"></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><a href="sub4_view.php">테스트</a></td>
                            <td>2021-03-23</td>
                            <td>관리자</td>
                            <td><img src="../img/main/file.png" alt="file"></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><a href="sub4_view.php">테스트</a></td>
                            <td>2021-03-23</td>
                            <td>관리자</td>
                            <td><img src="../img/main/file.png" alt="file"></td>
                        </tr>
                        <tr style="border-bottom:none;">
                            <td colspan="5" style="text-align:right;"><a href="sub4_write.php" style="margin-right:20px; display:inline-block; width:80px; line-height:30px; margin-top:20px; color:#fff; background-color:#0072b8; border-radius:15px; text-align:center;">글쓰기</a></td>
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