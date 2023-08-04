<?php include "../inc/common.php";?>
<body>
    <? include "../inc/header.php"; ?>
    <div class="svis vis3">
        <div class="sub_center">
            <h1 class="sub_title">
                <span style="animation-delay: 0s;">공</span>
                <span style="animation-delay: 0.1s;">시</span>
                <span style="animation-delay: 0.2s;">정</span>
                <span style="animation-delay: 0.3s;">보</span>
            </h1>
            <div class="snb">
                <ul>
                    <li class="homebtn"><a href="<?=dir?>"><i class="xi-home"></i></a></li>
                    <li class="snb_select snb1">
                        <a href="">공시정보</a>
                        <ul class="snbbox snbbox1">
                            <li><a href="<?=dir?>/company/intro.php">회사소개</a></li>
                            <li><a href="">운용정보</a></li>
                            <li><a href="<?=dir?>/board/notice.php">공시정보</a></li>
                            <li><a href="">CONTACT US</a></li>
                        </ul>
                    </li>
                    <li class="snb_select snb2"> 
                        <a href="">공지사항</a>
                        <ul class="snbbox snbbox2">
                            <li><a href="<?=dir?>/board/notice.php">공지사항</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <div class="sub_con">
        <div class="sub_center wrap">
            <h2 class="top_title">공지사항</h2>
            <div class="notice_wrap">
                <div class="search_bar">
                    <select>
                        <option value="">전체</option>
                        <option value="">제목</option>
                        <option value="">내용</option>
                    </select>
                    <input type="text" placeholder="검색어를 입력해주세요">
                    <button>검색</button>
                </div>
                <div class="board">
                    <table class="board1">
<!--
                        <colgroup>
                            <col width="10%">
                            <col>
                            <col width="10%">
                            <col width="15%">
                        </colgroup>
-->
                        <thead>
                            <tr>
                                <th>번호</th>
                                <th>제목</th>
                                <th>첨부파일</th>
                                <th>작성일</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>10</td>
                                <td class="title"><a class="textleft" href="<?=dir?>/board/notice_view.php">공지사항</a></td>
                                <td><i class="xi-download"></i></td>
                                <td>2023-07-20</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td class="title"><a class="textleft" href="<?=dir?>/board/notice_view.php">공지사항</a></td>
                                <td><i class="xi-download"></i></td>
                                <td>2023-07-20</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td class="title"><a class="textleft" href="<?=dir?>/board/notice_view.php">공지사항</a></td>
                                <td><i class="xi-download"></i></td>
                                <td>2023-07-20</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td class="title"><a class="textleft" href="<?=dir?>/board/notice_view.php">공지사항</a></td>
                                <td><i class="xi-download"></i></td>
                                <td>2023-07-20</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td class="title"><a class="textleft" href="<?=dir?>/board/notice_view.php">공지사항</a></td>
                                <td><i class="xi-download"></i></td>
                                <td>2023-07-20</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td class="title"><a class="textleft" href="<?=dir?>/board/notice_view.php">공지사항</a></td>
                                <td><i class="xi-download"></i></td>
                                <td>2023-07-20</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td class="title"><a class="textleft" href="<?=dir?>/board/notice_view.php">공지사항</a></td>
                                <td><i class="xi-download"></i></td>
                                <td>2023-07-20</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td class="title"><a class="textleft" href="<?=dir?>/board/notice_view.php">공지사항</a></td>
                                <td><i class="xi-download"></i></td>
                                <td>2023-07-20</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td class="title"><a class="textleft" href="<?=dir?>/board/notice_view.php">공지사항</a></td>
                                <td><i class="xi-download"></i></td>
                                <td>2023-07-20</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td class="title"><a class="textleft" href="<?=dir?>/board/notice_view.php">공지사항</a></td>
                                <td><i class="xi-download"></i></td>
                                <td>2023-07-20</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="__paging">
                        <a href="#" class="arr first"><i class="bi bi-chevron-double-left"></i></a>
                        <a href="#" class="arr prev"><i class="bi bi-chevron-left"></i></a>
                        <a href="#" class="num active">1</a>
                        <a href="#" class="num">2</a>
                        <a href="#" class="num">3</a>
                        <a href="#" class="num">4</a>
                        <a href="#" class="num">5</a>
                        <a href="#" class="arr next"><i class="bi bi-chevron-right"></i></a>
                        <a href="#" class="arr last"><i class="bi bi-chevron-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <? include "../inc/footer.php"; ?>

</body>
</html>