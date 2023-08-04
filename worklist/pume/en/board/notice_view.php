<?php include "../inc/common.php";?>
<body>
    <? include "../inc/header.php"; ?>
    <div class="svis vis3">
        <div class="sub_center">
            <h1 class="sub_title">
                <span style="animation-delay: 0s;">공</span>
                <span style="animation-delay: 0.1s;">시</span>
                <span style="animation-delay: 0.2s;">정</span>
                <span style="animation-delay: 0.3s;">보</span>
            </h1>
            <div class="snb">
                <ul>
                    <li class="homebtn"><a href="<?=dir?>"><i class="xi-home"></i></a></li>
                    <li class="snb_select snb1">
                        <a href="">공시정보</a>
                        <ul class="snbbox snbbox1">
                            <li><a href="<?=dir?>/company/intro.php">회사소개</a></li>
                            <li><a href="">운용정보</a></li>
                            <li><a href="<?=dir?>/board/notice.php">공시정보</a></li>
                            <li><a href="">CONTACT US</a></li>
                        </ul>
                    </li>
                    <li class="snb_select snb2"> 
                        <a href="">공지사항</a>
                        <ul class="snbbox snbbox2">
                            <li><a href="<?=dir?>/board/notice_view.php">공지사항</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <div class="sub_con">
        <div class="sub_center wrap">
            <h2 class="top_title">공지사항</h2>
            <div class="notice_view_wrap">
                <div class="board_title">
                    <h5>공지사항 제목</h5>
                    <ul class="view_info">
                        <li><i class="xi-time-o"></i>2023-07-20</li>
                    </ul>
                </div>
                <div class="board_view_cont">
                    <p>
                        갈비뼈가 드러날 정도로 말랐던 수사자가 청주동물원으로 옮겨진 후 '바람이'라는 새로운 이름과 함께 근황이 공개됐다. <br>

                        청주동물원은 19일 공식 인스타그램에 "바람이가 온 지 2주가 지났다"며 사진과 영상을 올렸다.

                        동물원에 따르면 바람이는 더운 날씨에도 식욕이 줄어들지 않고 4㎏의 소고기와 닭고기를 한 자리에서 다 먹는다고 한다.

                        공개된 사진과 영상 속 바람이는 부쩍 살이 올라 건강해진 모습이다. 사육사가 우리 안으로 먹이를 던져주자 꼬리를 흔들기도 했다.

                    </p>
                    <img src="<?=dir?>/img/sub/svis3.png" alt="테스트">
                </div>
                <div class="upload_file">
                    <p class="txt">첨부파일</p>
                    <ul class="file">
                        <li><a href="">첨부파일.zip</a></li>
                        <li><a href="">첨부파일.zip</a></li>
                    </ul>
                </div>
                <div class="prevnext">
                    <div class="prev">
                        <p class="txt">이전글</p>
                        <p class="list"><a href="">이전글입니다.</a></p>
                    </div>
                    <div class="next">
                        <p class="txt">다음글</p>
                        <p class="list"><a href="">다음글입니다.</a></p>
                    </div>
                </div>
                <div class="btn_normal">
                    <a href="<?=dir?>/board/notice.php">목록</a>
                </div>
                
            </div>
        </div>
    </div>
    <? include "../inc/footer.php"; ?>

</body>
</html>