<?php include "../inc/common.php"; ?>
<body>
    <?php include "../inc/header.php"; ?>
    <div id="svis" style="background-image:url(../img/main/introsub1svisbg.png); background-repeat:no-repeat;">
        <div class="center" >
            <div class="svis_title">
                <h3 class="boldfont">자료실</h3>
            </div>
        </div>
        <div class="snbWrap">
            <div class="center">
                <a class="gohome" href="../main/index.php"><i class="fa-solid fa-house"></i></a>
                <div class="snb">
                    <span class="allpage snblist"><a href="#">자료실<span class="angleicon"><i class="fa-solid fa-angle-down"></i></span></a></span>
                    <?php include "../inc/snb.php"; ?>
                </div>
                <div class="snb2">
                    <span class="currentpage snblist"><a href="#">인기자료 TOP 10<span class="angleicon"><i class="fa-solid fa-angle-down"></i></span></a></span>
                    <ul>
                        <li><a href="sub0_1.php">최신등록자료</a></li>
                        <li><a href="sub0_2.php">인기자료 TOP 10</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="inner">
            <div class="content refsub0 tableWrap">
                <div class="newdataWrap newdataWrap2">
                    <div class="newdataTop"><p><span class="bluebox"><i class="fa-solid fa-caret-right"></i></span>인기자료 TOP 10</p></div>
                    <div style="position:relative; margin-top:40px;" class="tableTop">
                        <span class="lightfont" style="position:absolute; top:50%; left:0; transform:translateY(-50%);">총 <span>100</span>건</span>
                        <form>
                            <select class="select">
                                <option>전체</option>
                                <option>제목</option>
                            </select>
                        </form>
                        <div class="searchSet">
                            <input class="search_bar" type="text">
                            <button class="searchicon"></button>
                        </div>
                    </div>
                    <div class="newdatacontent">
                        <table style="margin-bottom:45px;">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>제목</th>
                                    <th>카테고리</th>
                                    <th>작성자</th>
                                    <th>작성일</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><a href="sub2_view.php">제2회 신규교사연수 - 자유선택활동의 효율적 운영</a></td>
                                    <td>연수교재자료</td>
                                    <td>관리자</td>
                                    <td>2022-03-25</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><a href="#">제2회 신규교사연수 - 자유선택활동의 효율적 운영</a></td>
                                    <td>연수교재자료</td>
                                    <td>관리자</td>
                                    <td>2022-03-25</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td><a href="#">제2회 신규교사연수 - 자유선택활동의 효율적 운영</a></td>
                                    <td>연수교재자료</td>
                                    <td>관리자</td>
                                    <td>2022-03-25</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td><a href="#">제2회 신규교사연수 - 자유선택활동의 효율적 운영</a></td>
                                    <td>연수교재자료</td>
                                    <td>관리자</td>
                                    <td>2022-03-25</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td><a href="#">제2회 신규교사연수 - 자유선택활동의 효율적 운영</a></td>
                                    <td>연수교재자료</td>
                                    <td>관리자</td>
                                    <td>2022-03-25</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td><a href="#">제2회 신규교사연수 - 자유선택활동의 효율적 운영</a></td>
                                    <td>연수교재자료</td>
                                    <td>관리자</td>
                                    <td>2022-03-25</td>
                                </tr>
                                <tr>
                                    <td>7</td>    
                                    <td><a href="#">제2회 신규교사연수 - 자유선택활동의 효율적 운영</a></td>
                                    <td>연수교재자료</td>
                                    <td>관리자</td>
                                    <td>2022-03-25</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td><a href="#">제2회 신규교사연수 - 자유선택활동의 효율적 운영</a></td>
                                    <td>연수교재자료</td>
                                    <td>관리자</td>
                                    <td>2022-03-25</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td><a href="#">제2회 신규교사연수 - 자유선택활동의 효율적 운영</a></td>
                                    <td>연수교재자료</td>
                                    <td>관리자</td>
                                    <td>2022-03-25</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td><a href="#">제2회 신규교사연수 - 자유선택활동의 효율적 운영</a></td>
                                    <td>연수교재자료</td>
                                    <td>관리자</td>
                                    <td>2022-03-25</td>
                                </tr>
                            </tbody>
                        </table>
                        <?php include "../inc/pagenation.php"; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "../inc/footer.php" ?>
    <script type="text/javascript" src="../js/snb2.js"></script>
</body>
</html>