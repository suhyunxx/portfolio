<?php include "../inc/common.php" ?>
<body>
    <?php include "../inc/sub_quick.php" ?>
    <?php include "../inc/header.php" ?>
    <div class="svis svis05">
        <h5 class="svis_title">신청내역</h5>
    </div>
    <div id="counseling_view" class="content">
        <div class="center">
            <h5 class="sub_title">신청내역</h5>
            <div class="sub_inner">
               <div class="application_list_tab">
                   <ul>
                       <li><a href="application_list.php">대면상담</a></li>
                       <li><a href="application_list2.php">메타버스 상담</a></li>
                       <li class="on"><a href="application_list3.php">서비스 신청</a></li>
                   </ul>
               </div>
               <div class="view_content">
                   <div class="view_table">
                        <p class="table_name">상담받는 이 정보</p>
                        <table>
                            <tr>
                                <th>성명</th>
                                <td>
                                    <span>김수현</span>
                                    <span>/</span>
                                    <span>여</span>
                                </td>
                                <th>생년월일</th>
                                <td>
                                    <span>1111</span>
                                    <span>.</span>
                                    <span>11</span>
                                    <span>.</span>
                                    <span>11</span>
                                </td>
                            </tr>
                            <tr>
                                <th>집전화</th>
                                <td>
                                    <span>042</span>
                                    <span>1111</span>
                                </td>
                                <th>휴대전화</th>
                                <td>
                                    <span>010</span>
                                    <span>11111111</span>
                                </td>
                            </tr>
                            <tr>
                                <th>주소</th>
                                <td colspan="3">
                                    <span>우편번호</span>
                                    <span>도로명주소</span>
                                    <span>지번주소</span>
                                    <span>상세주소</span>
                                    <span>참고항목</span>
                                </td>
                            </tr>
                        </table>
                   </div>
                   <div class="view_table">
                        <p class="table_name">학업중단 유무</p>
                        <table>
                            <tr>
                                <th>학업상태</th>
                                <td>
                                    <span>학교를 그만둘까 고민중이에요.</span>
                                    <span>학력</span>
                                    <span>학년</span>
                                </td>
                            </tr>
                        </table>
                   </div>
                   <div class="view_table">
                        <p class="table_name">상담받고 싶은 내용</p>
                        <table>
                            <tr>
                                <th>호소문제</th>
                                <td>
                                    <span>가족</span>
                                    <span>/</span>
                                    <span>친구</span>
                                </td>
                            </tr>
                            <tr>
                                <th>상담희망일</th>
                                <td>
                                    <span>1. 희망일</span>
                                    <span>월요일</span>
                                    <span>1</span>시
                                    <span>00</span>분<br>
                                    <span>2. 희망일</span>
                                    <span>월요일</span>
                                    <span>1</span>시
                                    <span>00</span>분
                                </td>
                            </tr>
                        </table>
                   </div>
               </div>
                <?php include "../inc/comment.php" ?>
               <div class="_golist">
                   <a href="counseling_list.php">목록</a>
                   <a class="_modify" href="">수정</a>
                   <a class="_delete" href="">신청 취소</a>
                </div>
            </div>
        </div>
    </div>
   
    <?php include "../inc/footer.php" ?>
</body>
</html>