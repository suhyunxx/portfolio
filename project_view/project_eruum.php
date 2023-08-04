<?php include "../inc/common.php" ?>
<body>
    <div class="sub_wrap sub_wrap_view">
        <div class="sub_top">
            <div class="center">
                <p class="kor bold">이룸리온 중견련</p>
                <h1 class="mont-800">Eruum Leeon</h1>
                <ul class="detail">
                    <li>
                        <span class="bold">기여도</span>
                        <span class="color_777">디자인 100%, 퍼블리싱 100%</span>
                    </li>
                    <li>
                        <span class="bold">작업기간</span>
                        <span class="color_777">2023.03.03 - 2023.3.23</span>
                    </li>
                    <li class="site_move"><a href="<?=dir?>worklist/errum" target="_blank">사이트 바로가기</a></li>
                </ul>
            </div>
        </div>
        <div class="view_content">
            <div class="center">
                <div class="img_wrap"><img src="<?=dir?>img/full/eruum_full.png" alt=""></div>
                <p class="content_txt">
                    관리자페이지가 복잡했던 작업물.<br>
                    고객사측 담당자와 자주 소통하며 의사소통역량을 키울 수 있었던 프로젝트.
                </p>

<!--
                <div class="code">
                    <p class="bolder">JAVASCRIPT</p>
                    <div>
                        <pre class="prettyprint">
                        <xmp>
<script>
for (let i = 0; i < bs_tab_li.length; i++) {
    bs_tab_li[i].addEventListener("click", function(e) {
        e.preventDefault();
        for (j = 0; j < bs_tab_li.length; j++) {
            bs_tab_li[j].classList.remove("on");
            bs_tab[j].classList.remove("on");
        }
        bs_tab_li[i].classList.add("on");
        bs_tab[i].classList.add("on");
    });

}
</script>
                        </xmp>
</pre>
                    </div>
                </div>
-->

            </div>
        </div>
        <div class="quick_back">
            <a href="<?=dir?>project_list.php">
                <div class="back"><i class="xi-arrow-left"></i></div>
                <p class="bolder">돌아가기</p>
            </a>
        </div>
    </div>
</body>
</html>