<header>
    <div class="center">
        <h1 class="logo"><a href="<?=dir?>"><img src="<?=dir?>img/logo.png" alt="이룸리온 로고"></a></h1>
        <nav>
            <ul class="gnb">
                <li>
                    <a href="">서비스 안내</a>
                    <ul class="depth2">
                        <li><a href="<?=dir?>service/business.php"><span>서비스 소개</span></a></li>
                        <li><a href="<?=dir?>service/apply1.php"><span>서비스 신청</span></a></li>
<!--                        <li><a href="<?=dir?>service/result.php"><span>서비스 조회</span></a></li>-->
                        <li><a href="<?=dir?>service/vod.php"><span>동영상 서비스 소개</span></a></li>
                    </ul>
                </li>
<!--
                <li>
                    <a href="">커뮤니티</a>
                    <ul class="depth2">
                        <li class="alone"><a href=""><span>공지사항</span></a></li>
                    </ul>
                </li>
-->
            </ul>
        </nav>
        <ul class="util">
            <li><a href="<?=dir?>user/login.php">로그인</a></li>
            <li><a href="<?=dir?>user/join_1.php">회원가입</a></li>
            <li><a href="<?=dir?>user/user_modify.php">마이페이지</a></li>
            <li><a href="<?=dir?>user/dashboard.php">대시보드</a></li>
            <li><a href="javascript:void(0);" onclick="total_menu_open();"><i data-feather="menu"></i></a></li>
        </ul>
    </div>
    
    <div class="total-menu">
        <div class="total-inner">
            <div class="top_bar">
                <a href="javascript:void(0);" class="close" onclick="total_menu_close();"><i class="xi-close-thin"></i></a>
            </div>
            <ul class="menu">
                <li class="menu_1">서비스 안내</li>
                <ul class="menu_2">
                    <li><a href="<?=dir?>service/business.php">서비스 소개</a></li>
                    <li><a href="<?=dir?>service/apply1.php">서비스 신청</a></li>
                    <li><a href="<?=dir?>service/vod.php">무료 동영상 교육 서비스</a></li>
                </ul>
            </ul>
<!--
            <ul class="menu">
                <li class="menu_1">커뮤니티</li>
                <ul class="menu_2">
                    <li><a href="">공지사항</a></li>
                </ul>
            </ul>
-->
            <ul class="total-information">
                <li class="total-logo"><img src="<?=dir?>img/logo.png" alt="이룸리온 로고"></li>
                <li><span class="point">서울사무소</span>서울시 서초구 사평대로 108 3층 (반포동)</li>
                <li><span class="point">대구사무소</span>대구광역시 수성구 알파시티1로 40길 7, 1층A호(대흥동, 대흥)</li>
            </ul>
        </div>
    </div>
    
    
    
</header>