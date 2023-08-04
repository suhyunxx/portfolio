<?php include "../inc/common.php" ?>
<body>
    <?php include "../inc/sub_quick.php" ?>
    <?php include "../inc/header.php" ?>
    <div class="svis svis05">
        <h5 class="svis_title">전체검색</h5>
    </div>
<!--    snb 주석처리-->
    <div id="total_search" class="content">
        <div class="center">
            <h5 class="sub_title">전체검색</h5>
            <div class="sub_inner">
                <form action="">
                   <div class="total_input">
                       <input class="total_search" type="text" placeholder="검색어를 입력해주세요.">
                       <button><i class="xi-search"></i></button>
                   </div>
                    <div class="result_wrap">
                        <ul class="result_tab">
                            <li class="result_tab on"><a href="">전체<span>(3)</span></a></li>
                            <li><a href="">활동사진<span>(2)</span></a></li>
                            <li><a href="">비공개상담<span>(1)</span></a></li>
                            <li>* 검색결과 <span>'761'</span>건</li>
                        </ul>
                        <div class="result_list">
                            <h5 class="s_board_title">활동사진<span>(2)</span></h5>
                            <div class="slist">
                                <a href="">
                                    <p>게시글 제목</p>
                                    <ul>
                                        <li>관리자</li>
                                        <li>2020.01.20</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="slist">
                                <a href="">
                                    <p>게시글 제목</p>
                                    <ul>
                                        <li>관리자</li>
                                        <li>2020.01.20</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="more"><a href=""><span>게시판 제목</span>&nbsp;결과 더보기 ></a></div>
                        </div>
                        <div class="result_list">
                            <h5 class="s_board_title">비공개상담<span>(2)</span></h5>
                            <div class="slist">
                                <a href="">
                                    <p>게시글 제목</p>
                                    <ul>
                                        <li>관리자</li>
                                        <li>2020.01.20</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="more"><a href=""><span>게시판 제목</span>&nbsp;결과 더보기 ></a></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include "../inc/footer.php" ?>
</body>
</html>