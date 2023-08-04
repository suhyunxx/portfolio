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
                    <div class="result_view_wrap">
                        <p class="result_title">서비스 신청 내용</p>
                        <table class="board_view1">
                            <colgroup>
                                <col width="15%">
                                <col>
                                <col width="15%">
                                <col width="15%">
                                <col width="15%">
                                <col width="15%">
                            </colgroup>
                            <tr>
                                <th>신청서비스</th>
                                <td>기업 방문형 IP 상담 및 선행기술조사</td>
                                <th>방문희망날짜</th>
                                <td>-</td>
                                <th>방문날짜</th>
                                <td>-</td>
                            </tr>
                            <tr>
                                <th>결과물</th>
                                <td class="textleft" colspan="5">
                                    <p><a href="">첨부파일.pdf</a></p>
                                    <p><a href="">첨부파일.pdf</a></p>
                                </td>
                            </tr>
                            <tr>
                                <th>내용</th>
                                <td class="textleft content" colspan="5">
                                    <p>30년 된 낡은 지갑을 들고 다니는 김태수(78) 씨. 동대문시장에서 원단 사업으로 큰돈을 번 그가 현금 500억원을 기부하겠다고 밝혀 세상을 놀라게 하고 있다. 지난 2월, 1억원 이상 개인기부자들 모임 아너소사이어티 회원이 된 그는 사랑의열매 사회복지공동모금회, 국방부, 카이스트 등에 기부하겠다는 뜻을 밝혔다.</p>
                                </td>
                            </tr>
                            <tr>
                                <th>서비스 실무 담당자</th>
                                <td>홍길동</td>
                                <th>예상 종료일</th>
                                <td>-</td>
                                <th>종료일</th>
                                <td>-</td>
                            </tr>
                        </table>
                    </div>
                    <div class="result_process">
                        <p class="result_title">서비스 진행 현황</p>
                        <ul class="bs-step step-4">
                            <li class="activeborder">
                                <a href="">
                                    <span class="point">STEP 01</span>
                                    <p>서비스 신청</p>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="point">STEP 02</span>
                                    <p>담당자 지정</p>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="point">STEP 03</span>
                                    <p>방문형
                                        IP상담 진행</p>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="point">STEP 04</span>
                                    <p>보고서 제공</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="btn_set">
                        <div class="btn_border"><a href="<?=dir?>">신청 취소</a></div>
                        <div class="btn_black"><a href="<?=dir?>service/result.php">목록</a></div>
                        <div class="btn_ddd"><a href="">수정</a></div>
                    </div>
                </div>
            </form>


        </div>
    </div>
    <?php include "../inc/footer.php" ?>
</body>

</html>