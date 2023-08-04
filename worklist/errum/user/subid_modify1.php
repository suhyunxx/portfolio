<?php include "../inc/common.php" ?>
<body>
    <?php include "../inc/header.php" ?>
    <div class="svis">
        <div class="w1420">
            <div class="loc-wrap">
                <ul class="loc">
                    <li class="home"><i data-feather="home"></i></li>
                    <li>마이페이지</li>
                </ul>
            </div>
            <h5 class="sub-title">마이페이지</h5>
        </div>
    </div>
    <div class="container">
        <div class="user_modify">
            <ul class="user-tab w1420">
                <li><a href="<?=dir?>user/user_modify.php">회원 정보 수정</a></li>
                <li><a href="<?=dir?>user/subid.php">서브 아이디 신청</a></li>
                <li class="on"><a href="<?=dir?>user/subid_modify1.php">서브 아이디 생성 현황 및 정보 수정</a></li>
            </ul>
            <div class="w1420">
                <p class="subid-modify-title">서브 아이디 생성 현황 및 정보 수정</p>
                <table class="subid_modify_top">
                    <colgroup>
                        <col width="30%">
                        <col >
                    </colgroup>
                    <tr>
                        <th>기업명</th>
                        <td>기업명</td>
                    </tr>
                    <tr>
                        <th>대표 아이디</th>
                        <td>대표 아이디</td>
                    </tr>
                </table>
                <table class="subid_modify_bot">
                    <colgroup>
                        <col width="10%">
                        <col>
                        <col>
                        <col width="10%">
                        <col width="13%">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>번호</th>
                            <th>서브아이디</th>
                            <th>이용자명</th>
                            <th>서브아이디 승인여부</th>
                            <th>정보수정</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>승인</td>
                            <td><a class="modify_small_btn" href="<?=dir?>user/subid_modify2.php">정보수정</a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>-</td>
                            <td>-</td>
                            <td>미승인</td>
                            <td><a class="modify_small_btn" href="<?=dir?>user/subid_modify2.php">정보수정</a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>-</td>
                            <td>-</td>
                            <td>반려<br>수정 필요</td>
                            <td><a class="modify_small_btn" href="<?=dir?>user/subid_modify2.php">정보수정</a></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>-</td>
                            <td>-</td>
                            <td>미승인</td>
                            <td><a class="modify_small_btn" href="<?=dir?>user/subid_modify2.php">정보수정</a></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>-</td>
                            <td>-</td>
                            <td>승인</td>
                            <td><a class="modify_small_btn" href="<?=dir?>user/subid_modify2.php">정보수정</a></td>
                        </tr>
                    </tbody>
                </table>
                <?php include "../inc/paging.php" ?>
            </div>
        </div>
    </div>
    <?php include "../inc/footer.php" ?>
</body>

</html>