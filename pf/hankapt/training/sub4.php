<?php include "../inc/common.php"; ?>
<?
if (!$_SESSION['_MEMBER_']['ID']) {
    locationReplace("/inc/logincommon.php?return_url=".$_SERVER['PHP_SELF'],"정회원만 열람 가능합니다.");
}
?>
<body>
    <?php include "../inc/header.php"; ?>
    <div id="svis" style="background-image:url(../img/main/introsub1svisbg.png); background-repeat:no-repeat;">
        <div class="center" >
            <div class="svis_title">
                <h3 class="boldfont">연수</h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="inner">
            <h4 class="innerTitle">신구임원연수</h4>
            <div class="content tableWrap">
                <div class="tableTop">
                    <form>
                        <select class="select">
                            <option value="">전체</option>
                            <option value="">연수명</option>
                            <option value="">연수기간</option>
                            <option value="">연수시간/학점</option>
                        </select>
                    </form>
                    <div class="searchSet">
                        <input class="search_bar" type="text">
                        <button class="searchicon"></button>
                    </div>
                </div>
                
                <table class="newteacher">
                    <thead>
                        <tr>
                            <th>연수명</th>
                            <th>연수일시</th>
                            <th>연수장소</th>
                            <th>연수대상</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="sub4_view.php">2019 신구임원연수(신구임원)</a></td>
                            <td>2018-01-22<br>~ 2018-01-23</td>
                            <td>대구율빛유치원 외</td>
                            <td>신구임원연수</td>
                        </tr>
                        <tr>
                            <td><a href="sub4_view.php">2019 신구임원연수(신구임원)</a></td>
                            <td>2018-01-22<br>~ 2018-01-23</td>
                            <td>대구율빛유치원 외</td>
                            <td>신구임원연수</td>
                        </tr>
                        <tr>
                            <td><a href="sub4_view.php">2019 신구임원연수(신구임원)</a></td>
                            <td>2018-01-22<br>~ 2018-01-23</td>
                            <td>대구율빛유치원 외</td>
                            <td>신구임원연수</td>
                        </tr>
                        <tr>
                            <td><a href="sub4_view.php">2019 신구임원연수(신구임원)</a></td>
                            <td>2018-01-22<br>~ 2018-01-23</td>
                            <td>대구율빛유치원 외</td>
                            <td>신구임원연수</td>
                        </tr>
                        <tr>
                            <td><a href="sub4_view.php">2019 신구임원연수(신구임원)</a></td>
                            <td>2018-01-22<br>~ 2018-01-23</td>
                            <td>대구율빛유치원 외</td>
                            <td>신구임원연수</td>
                        </tr>
                        <tr>
                            <td><a href="sub4_view.php">2019 신구임원연수(신구임원)</a></td>
                            <td>2018-01-22<br>~ 2018-01-23</td>
                            <td>대구율빛유치원 외</td>
                            <td>신구임원연수</td>
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