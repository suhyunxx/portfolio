<?php include "../inc/common.php" ?>
<body>
    <?php include "../inc/header.php" ?>
    <div class="svis">
        <div class="w1420">
            <div class="loc-wrap">
                <ul class="loc">
                    <li class="home"><i data-feather="home"></i></li>
                    <li>서비스 안내</li>
                    <li>동영상 서비스 소개</li>
                </ul>
            </div>
            <h5 class="sub-title">동영상 서비스 소개</h5>
        </div>
    </div>
    <div class="container">
        <div class="vod_wrap">
            <form action="">
                <div class="w1420">
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
                    <div class="board">
                        <table class="board1 vod">
                            <colgroup>
                                <col width="5%">
                                <col width="10%">
                                <col width="7%">
                                <col>
                                <col width="15%">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th>번호</th>
                                    <th>구분</th>
                                    <th>연도</th>
                                    <th>제목</th>
                                    <th>등록일</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>10</td>
                                    <td>지재권 기초</td>
                                    <td>2023</td>
                                    <td><a class="textleft" href="<?=dir?>service/vod_view.php">동영상 제목</a></td>
                                    <td>2017-04-20</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>선행특허조사</td>
                                    <td>2023</td>
                                    <td><a class="textleft"  href="<?=dir?>service/vod_view.php">동영상 제목</a></td>
                                    <td>2017-04-20 </td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>특허침해분석</td>
                                    <td>2023</td>
                                    <td><a class="textleft"  href="<?=dir?>service/vod_view.php">동영상 제목</a></td>
                                    <td>2017-04-20 </td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>IP 창출</td>
                                    <td>2023</td>
                                    <td><a class="textleft"  href="<?=dir?>service/vod_view.php">동영상 제목</a></td>
                                    <td>2017-04-20 </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>IP 경영</td>
                                    <td>2023</td>
                                    <td><a class="textleft"  href="<?=dir?>service/vod_view.php">동영상 제목</a></td>
                                    <td>2017-04-20 </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>IP 라이센싱</td>
                                    <td>2023</td>
                                    <td><a class="textleft"  href="<?=dir?>service/vod_view.php">동영상 제목</a></td>
                                    <td>2017-04-20 </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>디자인전략</td>
                                    <td>2023</td>
                                    <td><a class="textleft"  href="<?=dir?>service/vod_view.php">동영상 제목</a></td>
                                    <td>2017-04-20 </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>상표전략</td>
                                    <td>2023</td>
                                    <td><a class="textleft"  href="<?=dir?>service/vod_view.php">동영상 제목</a></td>
                                    <td>2017-04-20 </td>
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