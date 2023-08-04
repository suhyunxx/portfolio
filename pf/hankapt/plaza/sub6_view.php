<?php include "../inc/common.php"; ?>
<body>
    <?php include "../inc/header.php"; ?>
    <div class="container">
        <div class="inner">
            <div class="topnavi">
                <ul>
                    <li><a href="../main/index.php"></a></li>
                    <li><span class="lnr lnr-chevron-right"></span></li>
                    <li><a href="sub1.php">참여광장</a></li>
                    <li><span class="lnr lnr-chevron-right"></span></li>
                    <li><a href="#">설문조사</a></li>
                </ul>
            </div>
            <ul class="leftnavi">
                <li><a href="#">참여광장</a></li>
                <li><a href="sub1.php">신문신청</a></li>
                <li><a href="sub2.php">캘린더신청</a></li>
                <li><a href="sub3.php">회원게시판</a></li>
                <li class="active"><a href="sub6.php">설문조사</a></li>
            </ul>
            <h4 class="innerTitle innerTitleLeft">설문조사</h4>
            <div class="vote contentLeft">
                <div class="voteview">
                    <form action="">
                        <div class="votetitle"><p><span>Q1</span>새 홈페이지가 만족스럽나요?</p></div>
                        <div class="voteline">
                            <div>
                                <input type="radio" id="vote_yes" name="vote">
                                <label for="vote_yes">예</label>
                            </div>
                            <div class="votebar">
                                <div class="voteresult voteresult1"></div>
                            </div>
                            <p>65표 / 90표</p>
                        </div>
                        <div class="voteline">
                            <div>
                                <input type="radio" id="vote_no" name="vote">
                                <label for="vote_no">아니오</label>
                            </div>
                            <div class="votebar">
                                <div class="voteresult voteresult2"></div>
                            </div>
                            <p>14표 / 90표</p>
                        </div>
                        <div class="voteline">
                            <div>
                                <input type="radio" id="vote_q" name="vote">
                                <label for="vote_q">잘 모르겠다</label>
                            </div>
                            <div class="votebar">
                                <div class="voteresult voteresult3"></div>
                            </div>
                            <p>11표 / 90표</p>
                        </div>
                        <div class="voteviewbtns">
                            <button class="govote">투표하기</button>
                            <button class="govoteList" type="button" onclick="location.href='sub6.php';">목록</button>
                        </div>
                    </form>
                </div>
                <div class="comment">
                    <p>한줄 의견 쓰기</p>
                    <div class="commentwriteWrap">
                        <form>
                            <input type="text" id="newcomment" placeholder="통신예절에 어긋나는 글이나 상업적인 글, 타사이트에 관련된 글은 관리자에 의해 사전 통없이 삭제될 수 있습니다.">
                            <button id="newcommentbtn">등록</button>
                        </form>
                    </div>
                    <div class="commentbot">
                        <div>
                            <p>테스트</p>
                            <div class="commentwhen">
                                <p>2022.01.19</p>
                                <p>오후 12:05</p>
                            </div>
                        </div>
                        <div>
                            <p>테스트</p>
                            <div class="commentwhen">
                                <p>2022.01.19</p>
                                <p>오후 12:05</p>
                            </div>
                        </div>
                        <div>
                            <p>테스트</p>
                            <div class="commentwhen">
                                <p>2022.01.19</p>
                                <p>오후 12:05</p>
                            </div>
                        </div>
                        <div>
                            <p>테스트</p>
                            <div class="commentwhen">
                                <p>2022.01.19</p>
                                <p>오후 12:05</p>
                            </div>
                        </div>
                        <div>
                            <p>테스트</p>
                            <div class="commentwhen">
                                <p>2022.01.19</p>
                                <p>오후 12:05</p>
                            </div>
                        </div>
                    </div>
                    <?php include "../inc/pagenation.php"; ?>
                </div>
            </div>
            
        </div>
    </div>
    <?php include "../inc/footer.php"; ?>
    <script type="text/javascript" src="../js/snb.js"></script>
    <script type="text/javascript" src="../js/snb2.js"></script>
</body>
</html>