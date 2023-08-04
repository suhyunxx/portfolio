<?php include "../inc/common.php" ?>
<body>
    <?php include "../inc/header.php" ?>
<!--
    <div class="svis">
        <div class="w1420">
            <div class="loc-wrap">
                <ul class="loc">
                    <li class="home"><i data-feather="home"></i></li>
                    <li>대시보드</li>
                </ul>
            </div>
            <h5 class="sub-title">대시보드</h5>
        </div>
    </div>
-->
    <div class="container dash_wrap">
        <div class="w1420">
            <div class="dashboard">
                <div class="dash_title_wrap">
                    <div class="company_title">
                        <span class="icon_wrap"><i class="xi-ghost"></i></span>
                        <h5><span class="dash">기업명</span> 대시보드</h5>
                    </div>
                    <div class="_alarm">
                        <a class="alarm" href="#"><i class="xi-bell"></i></a>
                        <p class="ballon">서브아이디 수정이 필요합니다.<br></p>
                    </div>
                    <script>
                        const alarm = document.querySelector(".alarm");
                        const ballon = document.querySelector(".ballon");
                        alarm.addEventListener("click",function(e){
                            e.preventDefault();
                            ballon.classList.toggle("on");
                            
                        })
                    </script>
                </div>
                
                <div class="dash_inner">
                    <div class="left">
                        <div class="left_top">
                            <div class="left2">
                                <div class="list_title">
                                    <span><i class="xi-bell-o"></i></span>
                                    <p>서비스 현황</p>
                                </div>
                                <table>
                                    <colgroup>
                                        <col>
                                        <col width="20%;">
                                    </colgroup>
                                    <tr>
                                        <th>서비스명</th>
                                        <th>서비스 현황</th>
                                    </tr>
                                    <tr>
                                        <td>기업 방문형 IP 교육</td>
                                        <td><a class="ing_btn" href="">맞춤 교안 작성</a></td>
                                    </tr>
                                    <tr>
                                        <td>기업 방문형 IP 상담 및 선행기술조사 </td>
                                        <td><a class="ing_btn" href="">보고서 제공</a></td>
                                    </tr>
                                    <tr>
                                        <td>IP 지원사업 신청 가이드</td>
                                        <td><a class="ing_btn" href="">신청 가이드</a></td>
                                    </tr>
                                    <tr>
                                        <td>특허비용 효율화 진단 서비스</td>
                                        <td><a class="ing_btn" href="">담당자 지정</a></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="right2">
                                <div class="online">
                                    <div class="list_title">
                                        <span><i class="xi-browser-text"></i></span>
                                        <p>온라인 IP 교육</p>
                                    </div>
                                    <a class="online_link go_link" href="<?=dir?>service/vod.php">바로가기</a>
                                </div>
                                <div class="mypage">
                                    <div class="list_title">
                                        <span><i class="xi-user-o"></i></span>
                                        <p>마이페이지</p>
                                    </div>
                                    <a class="mypage_link go_link" href="<?=dir?>user/user_modify.php">바로가기</a>
                                </div>
                            </div>
                        </div>
                        <div class="left_bot">
                            <div class="list_title">
                                <span><i class="xi-touch"></i></span>
                                <p>서비스 신청</p>
                            </div>
                            <ul class="service_list">
                                <li>
                                    <a href="<?=dir?>service/apply1.php">
                                        <div class="icon-wrap"><img src="<?=dir?>img/sub/dashicon1.png" alt="서비스 신청 아이콘"></div>
                                        <p>기업 방문형 IP 교육</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?=dir?>service/apply2.php">
                                        <div class="icon-wrap"><img src="<?=dir?>img/sub/dashicon2.png" alt="서비스 신청 아이콘"></div>
                                        <p>기업 방문형 IP 상담 및 선행기술조사</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?=dir?>service/apply3.php">
                                        <div class="icon-wrap"><img src="<?=dir?>img/sub/dashicon3.png" alt="서비스 신청 아이콘"></div>
                                        <p>IP 지원사업 신청 가이드</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?=dir?>service/apply4.php">
                                        <div class="icon-wrap"><img src="<?=dir?>img/sub/dashicon4.png" alt="서비스 신청 아이콘"></div>
                                        <p>특허비용 효율화 진단 서비스</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="right">
                        <div class="right_top_title">
                            <div class="list_title">
                                <span><i class="xi-search"></i></span>
                                <p>서비스 이력 조회</p>
                            </div>
                            <a href="<?=dir?>service/result.php">더보기</a>
                        </div>
                        <div class="list_wrap">
                            <div class="list">
                                <table>
                                    <colgroup>
                                        <col width="20%;">
                                        <col>
                                    </colgroup>
                                    <tr>
                                        <th>서비스명</th>
                                        <td>기업 방문형 IP 교육</td>
                                    </tr>
                                    <tr>
                                        <th>신청일시</th>
                                        <td>2021-07-29 15:28:47</td>
                                    </tr>
                                    <tr>
                                        <th>접수번호</th>
                                        <td>21-10-10</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="list">
                                <table>
                                    <colgroup>
                                        <col width="20%;">
                                        <col>
                                    </colgroup>
                                    <tr>
                                        <th>서비스명</th>
                                        <td>기업 방문형 IP 상담 및 선행기술조사</td>
                                    </tr>
                                    <tr>
                                        <th>신청일시</th>
                                        <td>2021-07-29 15:28:47</td>
                                    </tr>
                                    <tr>
                                        <th>접수번호</th>
                                        <td>21-10-21</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="list">
                                <table>
                                    <colgroup>
                                        <col width="20%;">
                                        <col>
                                    </colgroup>
                                    <tr>
                                        <th>서비스명</th>
                                        <td>IP 지원사업 신청 가이드</td>
                                    </tr>
                                    <tr>
                                        <th>신청일시</th>
                                        <td>2021-07-29 15:28:47</td>
                                    </tr>
                                    <tr>
                                        <th>접수번호</th>
                                        <td>21-10-30</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="list">
                                <table>
                                    <colgroup>
                                        <col width="20%;">
                                        <col>
                                    </colgroup>
                                    <tr>
                                        <th>서비스명</th>
                                        <td>특허비용 효율화 진단 서비스</td>
                                    </tr>
                                    <tr>
                                        <th>신청일시</th>
                                        <td>2021-07-29 15:28:47</td>
                                    </tr>
                                    <tr>
                                        <th>접수번호</th>
                                        <td>21-10-40</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="list">
                                <table>
                                    <colgroup>
                                        <col width="20%;">
                                        <col>
                                    </colgroup>
                                    <tr>
                                        <th>서비스명</th>
                                        <td>특허비용 효율화 진단 서비스</td>
                                    </tr>
                                    <tr>
                                        <th>신청일시</th>
                                        <td>2021-07-29 15:28:47</td>
                                    </tr>
                                    <tr>
                                        <th>접수번호</th>
                                        <td>21-10-40</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="list">
                                <table>
                                    <colgroup>
                                        <col width="20%;">
                                        <col>
                                    </colgroup>
                                    <tr>
                                        <th>서비스명</th>
                                        <td>특허비용 효율화 진단 서비스</td>
                                    </tr>
                                    <tr>
                                        <th>신청일시</th>
                                        <td>2021-07-29 15:28:47</td>
                                    </tr>
                                    <tr>
                                        <th>접수번호</th>
                                        <td>21-10-40</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="list">
                                <table>
                                    <colgroup>
                                        <col width="20%;">
                                        <col>
                                    </colgroup>
                                    <tr>
                                        <th>서비스명</th>
                                        <td>특허비용 효율화 진단 서비스</td>
                                    </tr>
                                    <tr>
                                        <th>신청일시</th>
                                        <td>2021-07-29 15:28:47</td>
                                    </tr>
                                    <tr>
                                        <th>접수번호</th>
                                        <td>21-10-40</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <?php include "../inc/footer.php" ?>
    </div>
    
</body>

</html>