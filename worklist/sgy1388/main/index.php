<?php 


// include_once '../inc/pub_config.php';
include '../inc/common.php'; 

?>
<body>
    <script> 
        $(document).ready(function(){ 
            cookiedata = document.cookie; 
            if(cookiedata.indexOf("close=Y")<0){ 
                $("#popup").show(); 
            }else{ 
                $("#popup").hide(); 
            } 
        }); 

        function exit(){ 
            if($("input[name=layer_close]").is(":checked") == true){ 
                setCookie("close","Y",1); 
            } 

            $("#popup").hide(); 
        } 

        function exit2(){ 
            $("#popup").hide(); 
            setCookie("close","Y",1); 
        } 

        function setCookie(cname, cvalue, exdays) { 
            var d = new Date(); 
            d.setTime(d.getTime() + (exdays*24*60*60*1000)); //시간설정 
            var expires = "expires="+d.toUTCString(); var temp = cname + "=" + cvalue + "; " + expires; 
            document.cookie = temp; 
        } 
    </script>
   
    <div class="quick main_quick">
        <ul class="quick_list">
            <li><a href="<?=dir?>center1/counseling.php"><img src="<?=dir?>img/quick1.png" alt=""></a></li>
            <li><a href="<?=dir?>center2/service.php"><img src="<?=dir?>img/quick2.png" alt=""></a></li>
            <li><a href="https://www.facebook.com/sgy1388" target="_blank"><img src="<?=dir?>img/facebook.png" alt=""></a></li>
            <li><a href="https://www.instagram.com/sgydream/" target="_blank"><img src="<?=dir?>img/insta.png" alt=""></a></li>
            <li><a href="#"><img src="<?=dir?>img/quick5.png" alt=""></a></li>
        </ul>
        <div class="move_top"><a href="#"><i class="xi-arrow-up"></i></a></div>
    </div>
    <?php include "../inc/header.php" ?>
    <div class="vis_wrap">
        <div class="swiper mySwiper2">
            <div class="swiper-wrapper">
                <div class="vis vis1 swiper-slide">
                   <div class="inner">
                        <div class="vis_img">
                            <img src="<?=dir?>img/vis_bg1.jpg" alt="">
                            <img class="vis-mobile" src="<?=dir?>img/vis_bg1_mobile.jpg" alt="">
                        </div>
                   </div>
                </div>
                <div class="vis vis2 swiper-slide">
                    <div class="inner">
                        <div class="vis_img">
                            <img src="<?=dir?>img/vis_bg2.jpg" alt="">
                            <img class="vis-mobile" src="<?=dir?>img/vis_bg2_mobile.jpg" alt="">
                        </div>
                   </div>
                </div>
                <div class="vis vis3 swiper-slide">
                    <div class="inner">
                       <div class="vis_img">
                            <img src="<?=dir?>img/vis_bg3.jpg" alt="">
                            <img class="vis-mobile" src="<?=dir?>img/vis_bg3_mobile.jpg" alt="">
                        </div>
                   </div>
                </div>
            </div>
<!--
            <div class="swiper-button-next next2"><i class="xi-angle-right-thin"></i></div>
            <div class="swiper-button-prev prev2"><i class="xi-angle-left-thin"></i></div>
-->
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script>
      var swiper = new Swiper(".mySwiper2", {
        slidesPerView: 1,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        spaceBetween: 30,
        loop: true,
        navigation: {
          nextEl: ".next2",
          prevEl: ".prev2",
        },
      });
    </script>
    
    <div class="work_quick" >
        <div class="center">
            <div class="work_txt">
                <h5>주요사업</h5>
                <p>주요사업을 한눈에 만나보세요.</p>
            </div>
            <div class="work_list_wrap">
                <div class="work_list">
                   <a href="#">
                       <div class="work_icon"><img src="<?=dir?>img/work_icon1.png" alt=""></div>
                        <p>개인상담</p>
                   </a>
                </div>
                <div class="work_list">
                   <a href="#">
                       <div class="work_icon"><img src="<?=dir?>img/work_icon2.png" alt=""></div>
                        <p>전화상담</p>
                   </a>
                </div>
                <div class="work_list">
                   <a href="<?=dir?>center1/meta.php">
                       <div class="work_icon"><img src="<?=dir?>img/work_icon3.png" alt=""></div>
                        <p>메타버스상담</p>
                   </a>
                </div>
                <div class="work_list">
                   <a href="<?=dir?>noti/program.php">
                       <div class="work_icon"><img src="<?=dir?>img/work_icon4.png" alt=""></div>
                        <p>프로그램 신청</p>
                   </a>
                </div>
                <div class="work_list">
                   <a href="#">
                       <div class="work_icon"><img src="<?=dir?>img/work_icon5.png" alt=""></div>
                        <p>꿈드림</p>
                   </a>
                </div>
            </div>
            
        </div>
    </div>
    <div class="gallery">
        <div class="center">
            <div class="program" data-aos="fade-up" data-aos-duration="3000">
                <div class="main_txt">
                    <h5>프로그램</h5>
                    <a href="<?=dir?>noti/program.php"><i class="xi-plus"></i></a>
                </div>
                <div class="pic">
                    <div>
                        <a href="">
                            <span class="img_wrap">
                                <img src="<?=dir?>img/img_test.jpg" alt="">
                                <span class="_ing">모집중</span>
                            </span>
                            <div class="detail">
                                <p class="article_title"><span class="_common_icon _youth_counseling">청소년 상담</span><span>11월 미디어 부모교육11월 미디어 부모교육</span></p>
                                <div class="event">
                                    <p><span class="_b">행사일정</span><span>2022.11.18 ~ 2022.11.18</span></p>
                                    <p><span class="_b">신청기간</span><span>2022.11.18 ~ 2022.11.18</span></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="">
                            <span class="img_wrap">
                                <img src="<?=dir?>img/img_test.jpg" alt="">
                                <span class="_ed">모집완료</span>
                            </span>
                            <div class="detail">
                                <p class="article_title"><span class="_common_icon _youth_counseling">청소년 상담</span><span>11월 미디어 부모교육</span></p>
                                <div class="event">
                                    <p><span class="_b">행사일정</span><span>2022.11.18 ~ 2022.11.18</span></p>
                                    <p><span class="_b">신청기간</span><span>2022.11.18 ~ 2022.11.18</span></p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-duration="3000" data-aos-delay="500">
                <div class="main_txt">
                    <h5>활동사진</h5>
                    <a href="https://hansgy1388.cafe24.com/center1/gallery1.php"><i class="xi-plus"></i></a>
                </div>
                <div class="pic">
                    <div>
                        <a href="/center1/gallery1.php?at=view&amp;idx=4318">
                            <span class="img_wrap"><img src="<?=dir?>img/img_test.jpg" alt=""></span>

                            <div class="detail">
                                <p class="act_title">대전서구청소년상담복지센터</p>
                                <p class="article_title"><span class="_common_icon _youth_counseling">청소년 상담</span><span>2022년 청소년안전망 활동보고대회</span></p>
                                <div>
                                    <p class="when">2023-01-03</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    1                        <div>
                    <a href="">
                        <span class="img_wrap"><img src="<?=dir?>img/img_test.jpg" alt=""></span>
                        <div class="detail">
                            <p class="act_title">대전서구학교밖청소년지원센터</p>
                            <p class="article_title"><span class="_common_icon _dream">꿈드림</span><span>청소년 체험활동 '방탈출 카페'</span></p>
                            <div>
                                <p class="when">2023-01-02</p>
                            </div>
                        </div>
                    </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    
    <div class="board" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="300">
        <div class="center">
            <div class="title_list">
                <h5>알림마당</h5>
                <ul class="tab_menu">
                    <li class="on"><a href="#">공지사항</a></li>
                    <li><a href="#">채용공고</a></li>
                    <li><a href="#">센터소식</a></li>
                </ul>
            </div>
            <div class="tab_wrap">
<!--                공지사항-->
                <div class="tab_list on">
                    <div class="list">
                        <a href="#">
                            <p class="top_txt">
                                <span class="_common_icon _youth_counseling">청소년 상담</span><span>2023-01-05</span>
                            </p>
                            <p class="article_title">2023년 전문자원상담사 모집 계획</p>
                            <p class="content">
                                대전광역시 서구청소년상담복지센터 인터넷사업 전담인력
                                채용계획을 다음과 같이 공고하오니 많은 응모를 바랍니다.바랍니다.바랍니다.
                            </p>
                            <p class="view_more">View More +</p>
                        </a>
                    </div>
                    <div class="list">
                        <a href="#">
                            <p class="top_txt">
                                <span class="_common_icon _youth_counseling">청소년 상담</span><span>2023-01-05</span>
                            </p>
                            <p class="article_title">2023년 전문자원상담사 모집 계획</p>
                            <p class="content">
                                대전광역시 서구청소년상담복지센터 인터넷사업 전담인력
                                채용계획을 다음과 같이 공고하오니 많은 응모를 바랍니다.
                            </p>
                            <p class="view_more">View More +</p>
                        </a>
                    </div>
                    <div class="list">
                        <a href="#">
                            <p class="top_txt">
                                <span class="_common_icon _youth_counseling">청소년 상담</span><span>2023-01-05</span>
                            </p>
                            <p class="article_title">2023년 전문자원상담사 모집 계획</p>
                            <p class="content">
                                대전광역시 서구청소년상담복지센터 인터넷사업 전담인력
                                채용계획을 다음과 같이 공고하오니 많은 응모를 바랍니다.
                            </p>
                            <p class="view_more">View More +</p>
                        </a>
                    </div>
                </div>
<!--                채용공고-->
                <div class="tab_list">
                    <div class="list">
                        <a href="#">
                            <p class="top_txt">
                                <span>2023-01-05</span>
                            </p>
                            <p class="article_title">2023년 채용공고</p>
                            <p class="content">
                                대전광역시 서구청소년상담복지센터 인터넷사업 전담인력
                                채용계획을 다음과 같이 공고하오니 많은 응모를 바랍니다.
                            </p>
                            <p class="view_more">View More +</p>
                        </a>
                    </div>
                    <div class="list">
                        <a href="#">
                            <p class="top_txt">
                                <span>2023-01-05</span>
                            </p>
                            <p class="article_title">2023년 전문자원상담사 모집 계획</p>
                            <p class="content">
                                대전광역시 서구청소년상담복지센터 인터넷사업 전담인력
                                채용계획을 다음과 같이 공고하오니 많은 응모를 바랍니다.
                            </p>
                            <p class="view_more">View More +</p>
                        </a>
                    </div>
                    <div class="list">
                        <a href="#">
                            <p class="top_txt">
                                <span>2023-01-05</span>
                            </p>
                            <p class="article_title">2023년 전문자원상담사 모집 계획</p>
                            <p class="content">
                                대전광역시 서구청소년상담복지센터 인터넷사업 전담인력
                                채용계획을 다음과 같이 공고하오니 많은 응모를 바랍니다.
                            </p>
                            <p class="view_more">View More +</p>
                        </a>
                    </div>
                </div>
<!--                센터소식-->
                <div class="tab_list">
                    <div class="list">
                        <a href="#">
                            <p class="top_txt">
                                <span class="_common_icon _youth_counseling">청소년 상담</span><span>2023-01-05</span>
                            </p>
                            <p class="article_title">센터소식</p>
                            <p class="content">
                                대전광역시 서구청소년상담복지센터 인터넷사업 전담인력
                                채용계획을 다음과 같이 공고하오니 많은 응모를 바랍니다.
                            </p>
                            <p class="view_more">View More +</p>
                        </a>
                    </div>
                    <div class="list">
                        <a href="#">
                            <p class="top_txt">
                                <span class="_common_icon _youth_counseling">청소년 상담</span><span>2023-01-05</span>
                            </p>
                            <p class="article_title">2023년 전문자원상담사 모집 계획</p>
                            <p class="content">
                                대전광역시 서구청소년상담복지센터 인터넷사업 전담인력
                                채용계획을 다음과 같이 공고하오니 많은 응모를 바랍니다.
                            </p>
                            <p class="view_more">View More +</p>
                        </a>
                    </div>
                    <div class="list">
                        <a href="#">
                            <p class="top_txt">
                                <span class="_common_icon _youth_counseling">청소년 상담</span><span>2023-01-05</span>
                            </p>
                            <p class="article_title">2023년 전문자원상담사 모집 계획</p>
                            <p class="content">
                                대전광역시 서구청소년상담복지센터 인터넷사업 전담인력
                                채용계획을 다음과 같이 공고하오니 많은 응모를 바랍니다.
                            </p>
                            <p class="view_more">View More +</p>
                        </a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
    
    
    
    <?php include "../inc/footer.php" ?>
</body>
</html>