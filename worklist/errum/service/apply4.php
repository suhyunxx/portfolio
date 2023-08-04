<?php include "../inc/common.php" ?>
<body>
    <?php include "../inc/header.php" ?>
    <div class="svis">
        <div class="w1420">
            <div class="loc-wrap">
                <ul class="loc">
                    <li class="home"><i data-feather="home"></i></li>
                    <li>서비스 안내</li>
                    <li>서비스 신청</li>
                </ul>
            </div>
            <h5 class="sub-title">서비스 신청</h5>
        </div>
    </div>
    <div class="container">
        <div class="apply">
            <form action="">
                <ul class="apply-tab w1420">
                <li><a href="<?=dir?>service/apply1.php">기업 방문형 IP 교육</a></li>
                <li><a href="<?=dir?>service/apply2.php">기업 방문형 IP 상담<br>및 선행기술조사</a></li>
                    <li><a href="<?=dir?>service/apply3.php">IP지원사업 신청 가이드</a></li>
                <li class="on"><a href="<?=dir?>service/apply4.php">특허비용 효율화 진단 서비스</a></li>
            </ul>
                <div class="apply_wrap">
                <div class="w1420">
                    <p class="apply-title">특허비용 효율화 진단 서비스 신청서</p>
                    <table class="apply-table">
                        <colgroup>
                            <col width="15%;">
                            <col>
                        </colgroup>
                        <tr>
                            <th>내용</th>
                            <td>
                                <textarea placeholder="상담에 필요한 IP 이슈 기재"></textarea>					
                            </td>
                        </tr>
                        <tr>
                            <th>방문희망날짜</th>
                            <td>
                                <input type="date" >
                            </td>
                        </tr>
                        <tr>
                            <th>신청 예시</th>
                            <td>
                                <p class="example_txt point">
                                    본 사는 반도체 공정장비를 생산/판매하고 있습니다. 현재 100여건의 특허를 출원하였고, 80건의 특허가 등록유지중에 있어 특허 유지를 위한 연차료가 발생하고 있습니다. <br>
                                    이에 특허비용을 줄일 수 있는 방법이 없는지 확인하고, 어떤 절차 및 방법으로 진행하면 좋을지 상담 받고 싶습니다.
                                </p>
                            </td>
                        </tr>
                    </table>
                    <p class="apply-txt">* 해당 서비스는 연 1회 제공됩니다.</p>
                    <div class="btn_set">
                        <div class="btn_black"><a href="">신청하기</a></div>
                        <div class="btn_border"><a href="<?=dir?>">취소</a></div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
    <?php include "../inc/footer.php" ?>
</body>

</html>