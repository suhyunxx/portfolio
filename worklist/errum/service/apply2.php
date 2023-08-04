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
                <li class="on"><a href="<?=dir?>service/apply2.php">기업 방문형 IP 상담<br>및 선행기술조사</a></li>
                    <li><a href="<?=dir?>service/apply3.php">IP지원사업 신청 가이드</a></li>
                <li><a href="<?=dir?>service/apply4.php">특허비용 효율화 진단 서비스</a></li>
            </ul>
                <div class="apply_wrap">
                <div class="w1420">
                    <p class="apply-title">기업 방문형 IP 상담 및 선행기술조사 무료 제공 서비스 신청서</p>
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
                            <th rowspan="2">신청 예시</th>
                            <td>
                                <p class="example_txt point">경쟁사의 제품을 벤치마킹하고 있습니다.<br>
                                    이에 해당 경쟁사의 특허 침해 우려가 없는지 확인하고, 회피 설계 등의 절차를 진행해야 할 것 같은데,<br>
                                    어떤 절차 및 방법으로 진행하며, 어느 정도의 비용과 시간이 소요되는지 등 상담 받고 싶습니다.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a class="point" href="<?=dir?>service/file/중견련 회원사 선행기술조사 서비스 보고서 샘플.pdf" download="중견련 회원사 선행기술조사 서비스 보고서 샘플.pdf">선행특허조사 보고서 샘플 다운로드</a>
                            </td>
                        </tr>
                    </table>
                    <p class="apply-txt">* 해당 서비스는 연 2회 제공됩니다.</p>
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