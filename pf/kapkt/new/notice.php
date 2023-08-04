<?php include "../inc/common.php" ?>
<body>
    <?php include "../inc/header.php" ?>
    <div class="sub_center">
        <div class="sub_top">
            <h3 class="sub_title">
                <span style="animation-delay: 0s;">공</span>
                <span style="animation-delay: 0.1s;">지</span>
                <span style="animation-delay: 0.2s;">사</span>
                <span style="animation-delay: 0.3s;">항</span>
            </h3>
            <ul class="snb">
                <li class="on"><a href="<?=dir?>new/notice.php">공지사항</a></li>
                <li><a href="<?=dir?>new/kin.php">유아교육뉴스</a></li>
                <li><a href="<?=dir?>new/group.php">연합회소식</a></li>
                <li><a href="<?=dir?>new/gallery.php">활동사진</a></li>
            </ul>
        </div>
    </div>
    <div class="svis">
        <img class="clip" src="<?=dir?>img/sub/svis2.jpg" alt="새소식 서브비주얼 이미지">
    </div>
    <div class="sub_center">
        <div class="search_bar">
            <select>
                <option value="">전체</option>
                <option value="">구분</option>
                <option value="">연도</option>
                <option value="">제목</option>
                <option value="">등록일</option>
            </select>
            <input type="text" placeholder="검색어를 입력해주세요">
            <button>검색</button>
        </div>
        <div class="board act_board">
            <table class="board1">
                <colgroup>
                    <col width="5%">
                    <col>
                    <col width="15%">
                    <col width="15%">
                </colgroup>
                <thead>
                    <tr>
                        <th>번호</th>
                        <th>제목</th>
                        <th>등록일</th>
                        <th>작성자</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>10</td>
                        <td><a class="textleft" href="<?=dir?>new/notice_view.php">공지사항</a></td>
                        <td>2023-01-08</td>
                        <td>관리자</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td><a class="textleft" href="<?=dir?>new/notice_view.php">공지사항</a></td>
                        <td>2023-01-08</td>
                        <td>관리자</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td><a class="textleft" href="<?=dir?>new/notice_view.php">공지사항</a></td>
                        <td>2023-01-08</td>
                        <td>관리자</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td><a class="textleft" href="<?=dir?>new/notice_view.php">공지사항</a></td>
                        <td>2023-01-08</td>
                        <td>관리자</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td><a class="textleft" href="<?=dir?>new/notice_view.php">공지사항</a></td>
                        <td>2023-01-08</td>
                        <td>관리자</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td><a class="textleft" href="<?=dir?>new/notice_view.php">공지사항</a></td>
                        <td>2023-01-08</td>
                        <td>관리자</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td><a class="textleft" href="<?=dir?>new/notice_view.php">공지사항</a></td>
                        <td>2023-01-08</td>
                        <td>관리자</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td><a class="textleft" href="<?=dir?>new/notice_view.php">공지사항</a></td>
                        <td>2023-01-08</td>
                        <td>관리자</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td><a class="textleft" href="<?=dir?>new/notice_view.php">공지사항</a></td>
                        <td>2023-01-08</td>
                        <td>관리자</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td><a class="textleft" href="<?=dir?>new/notice_view.php">공지사항</a></td>
                        <td>2023-01-08</td>
                        <td>관리자</td>
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

    <?php include "../inc/footer.php" ?>
</body>

</html>