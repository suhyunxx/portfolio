<?php include "../inc/common.php";?>
<body>
    <? include "../inc/header.php"; ?>
    <div class="svis vis1">
        <div class="sub_center">
            <h1 class="sub_title">
                <span style="animation-delay: 0s;">회</span>
                <span style="animation-delay: 0.1s;">사</span>
                <span style="animation-delay: 0.2s;">소</span>
                <span style="animation-delay: 0.3s;">개</span>
            </h1>
            <div class="snb">
                <ul>
                    <li class="homebtn"><a href="<?=dir?>"><i class="xi-home"></i></a></li>
                    <li class="snb_select snb1">
                        <a href="">회사소개</a>
                        <ul class="snbbox snbbox1">
                            <li><a href="<?=dir?>/company/intro.php">회사소개</a></li>
                            <li><a href="">운용정보</a></li>
                            <li><a href="<?=dir?>/board/notice.php">공시정보</a></li>
                            <li><a href="<?=dir?>/contact/map.php">CONTACT US</a></li>
                        </ul>
                    </li>
                    <li class="snb_select snb2"> 
                        <a href="">기업개요</a>
                        <ul class="snbbox snbbox2">
                            <li><a href="<?=dir?>/company/overview.php">기업개요</a></li>
                            <li><a href="">인사말</a></li>
                            <li><a href="<?=dir?>/company/org.php">조직도</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <div class="sub_con">
        <div class="sub_center wrap">
            <h2 class="top_title">기업개요</h2>
            <div class="overview">
                <h3>품에자산운용은 <span class="notobold">믿음과 만족을 드리는 </span>자산운용사입니다.</h3>
                <p>누구보다도 고객님의 마음을 잘 이해하고 소통하면서  투자에 대한 믿음과 만족을 드리는 자산운용사가 될 수 있도록 노력하겠습니다. <br>
                    저금리, 저성장시대에 안정적이고 수익성 높은 투자자산을 지속적으로 제공하여 고객님의 자산증대에 기여하겠습니다. </p>
                <table class="overview_table">
                    <tr>
                        <th>상호</th>
                        <td>주식회사 품에자산운용</td>
                        <th>대표이사</th>
                        <td>서두호</td>
                    </tr>
                    <tr>
                        <th>설립일</th>
                        <td>2017년 7월 18일</td>
                        <th>자본금</th>
                        <td>28억</td>
                    </tr>
                    <tr>
                        <th>회사주소</th>
                        <td>서울특별시 강남구 봉은사로 214, 7층(역삼동 레드페이스 빌딩)</td>
                        <th>영위업무</th>
                        <td>일반사모집합투자업</td>
                    </tr>
                    <tr>
                        <th>전화</th>
                        <td>02-6713-5811</td>
                    </tr>
                </table>
            </div>
            
        </div>
    </div>
    <? include "../inc/footer.php"; ?>

</body>
</html>