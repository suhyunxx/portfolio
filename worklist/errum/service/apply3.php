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
                <li class="on"><a href="<?=dir?>service/apply3.php">IP 지원사업 신청 가이드</a></li>
                <li><a href="<?=dir?>service/apply4.php">특허비용 효율화 진단 서비스</a></li>
            </ul>
                <div class="apply_wrap">
                <div class="w1420">
                    <p class="apply-title">IP 지원사업 신청 가이드 무료 서비스 신청서</p>
                    <table class="apply-table">
                        <colgroup>
                            <col width="15%;">
                            <col>
                            <col>
                            <col>
                        </colgroup>
                        <tr>
                            <th>주관기관</th>
                            <td>
                                <select>
                                    <option value="">기관선택</option>
                                    <option value="한국특허전략개발원">한국특허전략개발원</option>
                                    <option value="한국지식재산보호원">한국지식재산보호원</option>
                                    <option value="지역지식재산센터">지역지식재산센터</option>
                                    <option value="기타">기타</option>
                                </select>					
                            </td>
                        </tr>
                        <tr>
                            <th>방문희망날짜</th>
                            <td>
                                <input type="date" >
                            </td>
                        </tr>
                        <tr>
                            <th>내용</th>
                            <td>
                                <textarea placeholder=""></textarea>					
                            </td>
                        </tr>
                        <tr>
                            <th>신청 예시</th>
                            <td>
                                <p class="example_txt point">
                                    예시1) 이번 달에 공고된 한국특허전략개발원의 지재권 연계 연구개발 전략가이드 사업을 신청하고 싶습니다.<br> 신청시에 준비해야할 내용 및 관련 샘플과 선정율을 높이기 위한 안내 요청 드립니다.
                                    (한국특허전략개발원으로 선택하여 신청)
                                    <br><br>
                                    예시2) 하반기에 미국에 출시 예정인 제품이 있습니다. 해당 제품에 대한 특허 침해 분석 등이 되어 있지 않은데,<br> 이러한 니즈에 대해 현재 신청할만한 사업을 소개해 주시고, 신청 가이드까지 요청드립니다.
                                    (기타로 선택하여 신청)
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