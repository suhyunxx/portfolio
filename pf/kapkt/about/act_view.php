<?php include "../inc/common.php" ?>
<body>
    <?php include "../inc/header.php" ?>
    <div class="sub_center">
        <div class="sub_top">
            <h3 class="sub_title">
                <span style="animation-delay: 0s;">활</span>
                <span style="animation-delay: 0.1s;">동</span>
                <span style="animation-delay: 0.2s;">보</span>
                <span style="animation-delay: 0.3s;">고</span>
            </h3>
            <ul class="snb">
                <li><a href="<?=dir?>about/ceo.php">회장 인사말</a></li>
                <li><a href="<?=dir?>about/history.php">연혁</a></li>
                <li><a href="<?=dir?>about/org.php">임원단 구성</a></li>
                <li class="on"><a href="<?=dir?>about/act.php">활동보고</a></li>
                <li><a href="<?=dir?>about/ci.php">연합회 로고, 정관</a></li>
                <li><a href="<?=dir?>about/map.php">찾아오시는 길</a></li>
            </ul>
        </div>
    </div>
    <div class="svis">
        <img class="clip" src="<?=dir?>img/sub/svis1.jpg" alt="연합회 소개 서브비주얼 이미지">
    </div>
    <div class="sub_center">
        <div class="act_view">
            <div class="board_title">
                <h5>활동보고 제목</h5>
                <ul class="view_info">
                    <li><i class="xi-time-o"></i>2023-02-20</li>
                    <li><i class="xi-user-o"></i>관리자</li>
                </ul>
            </div>
            <div class="board_view_cont">
                <p>
                "2년간 전세를 주고 있었던 집을 22일에 계약 연장하기로 약속했는데 이틀 전인 20일 사고가 발생하면서 세입자한테 연장계약 취소 통보를 받았습니다. 7월 말이 만기인데 사고가 난 아파트에 누가 들어오려 할까요. 보증금도 돌려줘야 하는데 당장 어디서 세입자를 구해야 할지 막막합니다."(서울역센트럴자이아파트 111동 00호 소유자 A씨)

                </p>
            </div>
            <div class="btn_normal">
                <a href="<?=dir?>about/act.php">목록</a>
            </div>
        </div>
    </div>

    <?php include "../inc/footer.php" ?>
</body>

</html>