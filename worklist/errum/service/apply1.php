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
                    <li class="on"><a href="<?=dir?>service/apply1.php">기업 방문형 IP 교육</a></li>
                    <li><a href="<?=dir?>service/apply2.php">기업 방문형 IP 상담 <br>및 선행기술조사</a></li>
                    <li><a href="<?=dir?>service/apply3.php">IP지원사업 신청 가이드</a></li>
                    <li><a href="<?=dir?>service/apply4.php">특허비용 효율화 진단 서비스</a></li>
                </ul>
                <div class="apply_wrap">
                    <div class="w1420">
                        <p class="apply-title">기업 방문형 IP 교육 무료 제공 서비스 신청서</p>
                        <table class="apply-table">
                            <colgroup>
                                <col width="15%;">
                                <col>
                            </colgroup>
                            <tr>
                                <th>신청분야</th>
                                <td class="label-wrap">
                                    <label><input type="radio" name="apply_1_radio" value="지재권 개요, 특허 제도 및 절차">지재권 개요, 특허 제도 및 절차</label><br>
                                    <label><input type="radio" name="apply_1_radio" value="특허 명세서의 이해">특허 명세서의 이해</label><br>
                                    <label><input type="radio" name="apply_1_radio" value="선행특허조사 및 특허정보의 활용">선행특허조사 및 특허정보의 활용</label><br>
                                    <label><input type="radio" name="apply_1_radio" value="특허맵 분석 및 IP-R&D">특허맵 분석 및 IP-R&amp;D</label><br>
                                    <label><input type="radio" name="apply_1_radio" value="특허 침해 분석 및 대응 전략 수립">특허 침해 분석 및 대응 전략 수립</label><br>
                                    <label><input type="radio" name="apply_1_radio" value="IP 창출">IP 창출</label><br>
                                    <label><input type="radio" name="apply_1_radio" value="IP 포트폴리오 구축">IP 포트폴리오 구축</label><br>
                                    <label><input type="radio" name="apply_1_radio" value="IP 라이센싱">IP 라이센싱</label><br>
                                    <label><input type="radio" name="apply_1_radio" value="디자인 제도 및 전략">디자인 제도 및 전략</label><br>
                                    <label><input type="radio" name="apply_1_radio" value="상표 제도 및 전략">상표 제도 및 전략</label>							
                                </td>
                            </tr>
                            <tr>
                                <th>방문희망날짜</th>
                                <td>
                                    <input type="date" >
                                </td>
                            </tr>
                            <tr>
                                <th>요청 사항</th>
                                <td>
                                    <textarea placeholder="자유 기술 형태"></textarea>
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