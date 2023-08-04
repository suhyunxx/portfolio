<?php include "../inc/common.php" ?>
<body>
    <?php include "../inc/header.php" ?>
    <div class="svis">
        <div class="w1420">
            <div class="loc-wrap">
                <ul class="loc">
                    <li class="home"><i data-feather="home"></i></li>
                    <li>대시보드</li>
                    <li>서비스 조회</li>
                </ul>
            </div>
            <h5 class="sub-title">서비스 조회</h5>
        </div>
    </div>
    <div class="container">
        <div class="apply_result">
            <form action="">
            <div class="w1420">
                <div class="search_bar">
                    <select>
                        <option value="">전체</option>
                        <option value="">수행년도</option>
                        <option value="">서비스 모듈</option>
                        <option value="">담당자</option>
                        <option value="">신청일</option>
                        <option value="">종료일</option>
                        <option value="">진행상황</option>
                    </select>
                    <input type="text" placeholder="검색어를 입력해주세요">
                    <button>검색</button>
                </div>
                <div class="board">
                    <table class="board1 tablewidth">
                        <colgroup>
                            <col width="8%">
                            <col width="8%">
                            <col>
                            <col>
                            <col>
                            <col>
                            <col>
                            <col width="8%">
                        </colgroup>
                        <thead>
                            <tr>
                                <th>연번</th>
                                <th>수행년도</th>
                                <th>서비스 모듈</th>
                                <th>담당자</th>
                                <th>신청일</th>
                                <th>종료일</th>
                                <th>진행상황</th>
                                <th>결과물</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>10</td>
                                <td>2023</td>
                                <td><a class="textleft" href="<?=dir?>service/result_view1.php">기업 방문형 IP 교육</a></td>
                                <td>홍길동 변리사</td>
                                <td>2023-05-05</td>
                                <td>2023-05-05</td>
                                <td>담당자 지정</td>
                                <td><span><a href=""><i class="xi-download"></i></a></span></td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>2023</td>
                                <td><a class="textleft" href="<?=dir?>service/result_view2.php">기업 방문형 IP 상담 및 선행기술조사</a></td>
                                <td>홍길동 변리사</td>
                                <td>2023-05-05</td>
                                <td>2023-05-05</td>
                                <td>담당자 지정</td>
                                <td><span><a href=""><i class="xi-download"></i></a></span></td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>2023</td>
                                <td><a class="textleft" href="<?=dir?>service/result_view3.php">IP 지원사업 신청 가이드</a></td>
                                <td>홍길동 변리사</td>
                                <td>2023-05-05</td>
                                <td>2023-05-05</td>
                                <td>담당자 지정</td>
                                <td><span><a href=""><i class="xi-download"></i></a></span></td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>2023</td>
                                <td><a class="textleft" href="<?=dir?>service/result_view4.php">특허비용 효율화 진단 서비스</a></td>
                                <td>홍길동 변리사</td>
                                <td>2023-05-05</td>
                                <td>2023-05-05</td>
                                <td>담당자 지정</td>
                                <td><span><a href=""><i class="xi-download"></i></a></span></td>
                            </tr>
                        </tbody>
                    </table>
                    <?php include "../inc/paging.php" ?>
                </div>
            </div>
            </form>
            

        </div>
    </div>
    <?php include "../inc/footer.php" ?>
</body>

</html>