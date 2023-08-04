<?php include "../inc/common.php" ?>
<body>
    <?php include "../inc/sub_quick.php" ?>
    <?php include "../inc/header.php" ?>
    <div class="svis svis02">
        <h5 class="svis_title">대전서구청소년상담복지센터</h5>
    </div>
    <?php include "../inc/snb1.php" ?>
    <div id="counseling" class="content meta_wrap">
        <div class="center">
            <h5 class="sub_title">상담신청</h5>
            <div class="sub_inner">
               <div class="counseling_tab">
                   <ul>
                       <li><a href="counseling.php">대면상담</a></li>
                       <li class="on"><a href="meta.php">메타버스 상담</a></li>
                   </ul>
               </div>
               <div class="content">
                  <div class="meta">
                      <div class="line">
                           <p class="top_ment">메타버스 상담이란?</p>
                           <p class="ment">
                               온라인 상담과 심리치료의 한계와 단점을 극복한 새로운 방식의 상담과 교육적 환경구축을 위한 획기적 상담치료 방식입니다.
                           </p>
                       </div>
                       <div class="line">
                           <p class="top_ment">메타버스(Metaverse)란?</p>
                           <p class="ment">
                               ‘가상’, ‘초월’ 등을 뜻하는 ‘메타(Meta)’와 우주를 뜻하는 ‘유니버스(Universe)’의 합성어로, 현실 세계와 같은 사회, 경제, 문화 활동이 이루어지는 3차원의 가상 세계를 가리키며, 아바타를 활용해 게임이나 가상현실을 즐기는데 그치지 않고 실제 현실과 같은 사회문화적 활동을 할 수있다는 특징이 있습니다.
                           </p>
                       </div>
                       <div class="line">
                            <p class="top_ment">메타버스 심리상담의 장점은 무엇인가요? </p>
                           <p class="ment">
                               내담자들은 집이나 편안한 공간에서 메타버스에 접속하여 상담받을 수 있습니다. 자신의 얼굴이나 정보가 공개될 부담이 없으며, 실시간으로 표정을 따라하는 아바타 덕분에 상담에 더욱 몰입할 수 있습니다.
                           </p>
                       </div>
                       <div class="youtube_wrap">
                           <div class="youtube1 youtube_link">
                               <a href="">
                                   <img class="thumb" src="<?=dir?>img/sub/youtube1_thumb.jpg" alt="">
                                   <i class="xi-play-circle black"></i>
                               </a>
                               <p class="meta_btn">메타버스 심리상담이란?</p>
                           </div>
                           <div class="youtube2 youtube_link">
                               <a href="">
                                   <img class="thumb" src="<?=dir?>img/sub/youtube2_thumb.jpg" alt="">
                                   <i class="xi-play-circle white"></i>
                               </a>
                               <p class="meta_btn">메타포레스트 소개영상</p>
                           </div>
                       </div>
                       <div class="btn_set">
                            <div class="confirm"><a href="">신청하기</a></div>
                       </div>
                       <div class="meta_bg"><img src="<?=dir?>img/sub/meta_bg.png" alt=""></div>
                  </div>
               </div>
            </div>
            <div class="youtube_pop">
                <div class="youtube_play">
                    <p class="close"><a href=""><i class="xi-close"></i></a></p>
                    <iframe width="800" height="500" src="https://www.youtube.com/embed/iC-hALFsE9M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
            <div class="youtube_pop">
                <div class="youtube_play">
                    <p class="close"><a href=""><i class="xi-close"></i></a></p>
                    <iframe width="800" height="500" src="https://www.youtube.com/embed/xJSLyi2yGwA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
            <script>
                const youtube_tab = document.querySelectorAll(".youtube_wrap > div > a");
                const youtube_pop = document.querySelectorAll(".youtube_pop");
                const close = document.querySelectorAll(".youtube_pop .close > a");
                for(let i=0; i<youtube_tab.length; i++)
                {
                    youtube_tab[i].addEventListener("click",function(e){
                        
                        e.preventDefault();
                       youtube_pop[i].style.display = "block"; 
                    });
                    
                    
                }
                
                for(let i=0; i<close.length; i++)
                {
                    close[i].addEventListener("click",function(e){
                        
                       e.preventDefault();
                    
                        for(let i=0; i<youtube_pop.length; i++)
                        {
                            youtube_pop[i].style.display = "none";
                        }
                    });
                    
                }
                
                

                
                
                
                
                
                
                
                
                
                
                
            </script>
        </div>
    </div>
   
    <?php include "../inc/footer.php" ?>
</body>
</html>