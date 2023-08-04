<?php include "../inc/common.php" ?>
<body>
    <div class="sub_wrap sub_wrap_view">
        <div class="sub_top">
            <div class="center">
                <p class="kor bold">대전서구청소년상담복지센터</p>
                <h1 class="mont-800">sgy1388</h1>
                <ul class="detail">
                    <li>
                        <span class="bold">기여도</span>
                        <span class="color_777">디자인 100%, 퍼블리싱 100%</span>
                    </li>
                    <li>
                        <span class="bold">작업기간</span>
                        <span class="color_777">2022.12.26 - 2023.01.19</span>
                    </li>
                    <li class="site_move"><a href="<?=dir?>worklist/sgy1388" target="_blank">사이트 바로가기</a></li>
                </ul>
            </div>
        </div>
        <div class="view_content">
            <div class="center">
                <div class="img_wrap"><img src="<?=dir?>img/full/sgy1388_full.png" alt=""></div>
                <p class="content_txt">
                    
                    제한된 조건으로 디자인이 어려웠던 작업물.<br>
                    <br>
                    기존 홈페이지에 들어가는 기능이 많아, 개발자와 자주 소통하며 작업했던 프로젝트이지만,<br>
                    작업일정이 겹쳐 개발에 들어가지 못해 아쉬움이 많이 남은 작업물.
                </p>

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