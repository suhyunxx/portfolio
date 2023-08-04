<!-- #include virtual="/kr/inc/header.asp" -->
<div id="container" class="index2">
    <div class="cont_visual">
        <div class="center">
            <div class="main_pic">
                <div class="swiper main_swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="../img/main/slideimg1.png">
                        </div>
                        <div class="swiper-slide">
                            <img src="../img/main/slideimg2.png">
                        </div>
                        <div class="swiper-slide">
                            <img src="../img/main/slideimg3.png">
                        </div>
                        <div class="swiper-slide">
                            <img src="../img/main/slideimg4.png">
                        </div>
                    </div>
                  </div>
            </div>
            <div class="main_slide_text">
                <div class="swiper text_swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="../img/main/slidetext1.png">
                            <p>고객과 함께하는 메이저위드</p>
                        </div>
                        <div class="swiper-slide">
                            <h5>20년 인증컨설팅<br>경험과 노하우</h5>  
                            <p>Since 2002</p>
                        </div>
                        <div class="swiper-slide">
                            <h5>체계적인 컨설팅<br>프로세스 보유</h5>  
                            <p>외주없는 프리미엄 인증 컨설팅</p> 
                        </div>
                        <div class="swiper-slide">
                            <h5>고객의 미래와<br>함께하는 메이저위드</h5>  
                            <p>고객의 성공을 최우선으로 하는 성공파트너</p> 
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div class="main_prev_next">
                <div class="main_prev">
                    <div class="swiper prev_swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="../img/main/prev1.png"> 
                            </div>
                            <div class="swiper-slide">
                                <img src="../img/main/prev2.png">
                            </div>
                            <div class="swiper-slide">
                                <img src="../img/main/prev3.png">
                            </div>
                            <div class="swiper-slide">
                                <img src="../img/main/prev4.png">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main_next">
                    <div class="swiper next_swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="../img/main/next1.png">
                            </div>
                            <div class="swiper-slide">
                                <img src="../img/main/next2.png">
                            </div>
                            <div class="swiper-slide">
                                <img src="../img/main/next3.png">
                            </div>
                            <div class="swiper-slide">
                                <img src="../img/main/next4.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <aside class="main_side">
                <ul class="lan">
                    <li class="on"><a href="#">KOR</a></li>
                    <li><a href="#">CN</a></li>
                    <li><a href="#">ENG</a></li>
                </ul>
                <ul class="sns">
                    <li class="kakao"><a href="#"><img src="../img/main/SNS_kakao.png"></a></li>
                    <li class="naver"><a href="#"><img src="../img/main/SNS_blog.png"></a></li>
                    <li class="online">
                        <a href="#">
                            <i class="xi-message-o"></i>
                            <p>온라인 문의</p>
                        </a>
                    </li>
                </ul>
            </aside>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
        <!-- Initialize Swiper -->
        <script>
            var MainSwiper = new Swiper(".main_swiper", {
                spaceBetween: 30,
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                navigation: {
                    nextEl: ".next_swiper",
                    prevEl: ".prev_swiper",
                },
            });

            var TextSwiper = new Swiper(".text_swiper", {
                spaceBetween: 30,
                loop: true,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                    
                },
            });

            var NextSwiper = new Swiper(".next_swiper", {
                spaceBetween: 30,
                loop: true,
            });

            var PrevSwiper = new Swiper(".prev_swiper", {
                spaceBetween: 30,
                loop: true,
            });

            MainSwiper.controller.control = TextSwiper;
            TextSwiper.controller.control = NextSwiper;
            NextSwiper.controller.control  = PrevSwiper;
            
        </script>
    </div>
    <div class="container_wrap">
        <div class="main_company">
            <div class="center">
                <div class="top"  data-aos="fade" data-aos-duration="2000">
                    <p class="point_title">COMPANY</p>
                    <div class="top_2">
                        <h3 class="main_ment">메이저위드와 함께하면<br>성공할 수 있습니다.</h3>
                        <div class="title_context">
                            <p>저희는 2002년 설립된 인증 전문 컨설팅 회사로 고객의 경쟁력과<br> 가치를 높이기 위해 오늘도 고민하고 도전하며 실천합니다.</p>
                            <a class="main_viewBtn" href="#"><span class="inner_text">view more</span><p class="inner_circle"><i class="xi-arrow-right"></i></p></a>
                        </div>
                    </div>
                </div>
                <div class="bot">
                    <div class="company_list_wrap">
                        <div class="company_list" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
                            <div class="icon_box"><img src="../img/main/company_icon1.png" alt=""></div>
                            <h5><span class="num_plus num_plus1">21</span><span class="unit">년</span></h5>
                            <p>연차</p>
                            <div class="bg"><img src="../img/main/company_list1.png" alt=""></div>
                        </div>
                        <div class="company_list" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000" data-aos-delay="200">
                            <div class="icon_box"><img src="../img/main/company_icon2.png" alt=""></div>
                            <h5><span class="num_plus num_plus2">32</span><span class="unit">개</span></h5>
                            <p>컨설팅 분야</p>
                            <div class="bg"><img src="../img/main/company_list2.png" alt=""></div>
                        </div>
                        <div class="company_list" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000" data-aos-delay="400">
                            <div class="icon_box"><img src="../img/main/company_icon3.png" alt=""></div>
                            <h5><span class="num_plus num_plus3">700</span>&nbsp;<span class="plus_icon">+</span></h5>
                            <p>컨설팅 실적</p>
                            <div class="bg"><img src="../img/main/company_list3.png" alt=""></div>
                        </div>
                        <div class="company_list" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000" data-aos-delay="600">
                            <div class="icon_box"><img src="../img/main/company_icon4.png" alt=""></div>
                            <h5><span class="num_plus num_plus4">10456</span>&nbsp;<span class="plus_icon">+</span></h5>
                            <p>해외컨설팅 실적</p>
                            <div class="bg"><img src="../img/main/company_list4.png" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="company_bg"><img src="../img/main/bg_circle_left.png" alt=""></div>
        </div>
        <div class="main_animation">
            <div class="center">
                <div class="movetxt_wrap">
                    <h5 class="movetxt movetxt1">WITH</h5><br>
                    <h5 class="movetxt movetxt2">MAJOR</h5><br>
                    <h5 class="movetxt movetxt3">WITH</h5>
                </div>
                <div class="animation_bg"><img src="../img/main/movetxt_bg.png" alt=""></div>
            </div>
        </div>
        <div class="main_consulting">
            <div class="center">
                <div class="consulting_wrap">
                    <div class="left"  data-aos="fade" data-aos-duration="2000">
                        <p class="point_title">CONSULTING</p>
                        <h3 class="main_ment">컨설팅 분야</h3>
                        <div class="title_context">
                            <p>최고의 컨설팅 파트너 메이저위드가 제공하는<br>컨설팅 분야를 소개합니다.</p>
                        </div>
                    </div>
                    <div class="right">
                        <div class="list_wrap" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
                            <div class="consulting_list consulting_list1">
                                <a href="<%=dir%>/kr/sub/part/quality/01.asp">
                                    <div><img src="../img/main/consulting_list1.png" alt=""></div>
                                    <ul class="bot_text">
                                        <li class="list_title">품질인증</li>
                                        <li class="plus_icon"><i class="xi-plus"></i></li>
                                    </ul>
                                </a>
                            </div>
                            <div class="consulting_list" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
                                <a href="<%=dir%>/kr/sub/part/tech/01.asp">
                                    <div><img src="../img/main/consulting_list2.png" alt=""></div>
                                    <ul class="bot_text">
                                        <li class="list_title">조달기술인증</li>
                                        <li class="plus_icon"><i class="xi-plus"></i></li>
                                    </ul>
                                </a>
                            </div>
                            <div class="consulting_list consulting_list3" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
                                <a href="<%=dir%>/kr/sub/part/env/01.asp">
                                    <div><img src="../img/main/consulting_list3.png" alt=""></div>
                                    <ul class="bot_text">
                                        <li  class="list_title">환경인증</li>
                                        <li class="plus_icon"><i class="xi-plus"></i></li>
                                    </ul>
                                </a>
                            </div>
                            <div class="consulting_list" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
                                <a href="<%=dir%>/kr/sub/part/cor/01.asp">
                                    <div><img src="../img/main/consulting_list4.png" alt=""></div>
                                    <ul class="bot_text">
                                        <li  class="list_title">기업인증</li>
                                        <li class="plus_icon"><i class="xi-plus"></i></li>
                                    </ul>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="consulting_bg"><img src="../img/main/consulting_bg.png" alt=""></div>
            </div>
            <!-- <div class="consulting_bg"><img src="../img/main/consulting_bg.png" alt=""></div> -->
        </div>
        <div class="main_review">
            <div class="center">
                <div class="review_wrap">
                    <div class="left" data-aos="fade" data-aos-duration="2000">
                        <p class="point_title">REVIEW</p>
                        <h3 class="main_ment">고객후기</h3>
                        <div class="title_context">
                            <p>메이저위드는 고객이 최고가 되도록 만드는 회사입니다.<br>고객이 최고가 되는 순간까지 함께 하겠습니다.</p>
                        </div>
                        <a class="viewmore" href="#">view more <span><i class="xi-arrow-right"></i></span> </a>
                    </div>
                    <div class="right" data-aos="fade" data-aos-duration="2000" data-aos-delay="200">
                        <div class="reviewslider">
                            <div class="swiper-container mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="#">
                                            <h5>럭키산업(주) KS인증<br> 컨설팅 후기</h5>
                                            <p>빠른 응대와 가려운 곳을 미리 찾아 적극적으로 지원해 주신 점이 좋았습니다.</p>
                                            <span>2022-06-30</span>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#">
                                            <h5>정도기계 KS 인증심사</h5>
                                            <p>KS 심사 항목 33가지를 꼼꼼하게 확인해주
                                                셔서 심사시에 경미한 부적합만 받아</p>
                                            <span>2022-06-30</span>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#">
                                            <h5>선진산업㈜ KS인증<br> 컨설팅 후기</h5>
                                            <p>세심한 부분까지 놓치지않고, 심사일정 뿐
                                                아니라 심사 전,후로도 먼저 연락해주시</p>
                                            <span>2022-06-30</span>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#">
                                            <h5>4럭키산업(주) KS인증 컨설팅 후기</h5>
                                            <p>빠른 응대와 가려운 곳을 미리 찾아 적극적으로 지원해 주신 점이 좋았습니다.</p>
                                            <span>2022-06-30</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="option_bar">
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-pagination"></div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-pagination2"></div>
                                </div>
                                
                                
                                
                                
                            </div>
                            <script>
                                var swiper = new Swiper('.mySwiper', {
                                  slidesPerView: "auto",
                                  centeredSlides: false,
                                  spaceBetween: 30,
                                  autoplay: {
                                    delay: 2500,
                                    disableOnInteraction: false,
                                    },
                                  pagination: {
                                    el: '.swiper-pagination',
                                    type: 'fraction',
                                     formatFractionCurrent: function (number) {
                                        return ('0' + number).slice(-2);
                                    },
                                    formatFractionTotal: function (number) {
                                        return ('0' + number).slice(-2);
                                    },
                                    renderFraction: function (currentClass, totalClass) {
                                        return '<span class="' + currentClass + '"></span>' +
                                            ' &nbsp;&#183&nbsp; ' +
                                            '<span class="' + totalClass + '"></span>';
                                    }
                                    
                                  },
                                  navigation: {
                                    nextEl: '.swiper-button-next',
                                    prevEl: '.swiper-button-prev',
                                  },
                                });

                                // 프로그레스바 연결
                                var swiper = new Swiper('.mySwiper', {
                                    slidesPerView: "auto",
                                  centeredSlides: false,
                                  spaceBetween: 30,
                                  autoplay: {
                                    delay: 2500,
                                    disableOnInteraction: false,
                                    },
                                  pagination: {
                                    el: '.swiper-pagination2',
                                    type: 'progressbar',
                                  },
                                  navigation: {
                                    nextEl: '.swiper-button-next',
                                    prevEl: '.swiper-button-prev',
                                  },
                                });
                              </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main_inquiry">
            <div class="center">
                <div class="inquiry_wrap">
                    <div class="left" data-aos="fade" data-aos-duration="2000">
                        <p class="point_title">ONLINE INQUIRY</p>
                        <h3 class="main_ment">문의사항이<br> 있으신가요?</h3>
                        <div class="title_context">
                            <p>본 견적 코너는 홈페이지 및 외부에 공개되지 않으며,<br>
                                작성 후 영업일 기준으로 2일 이내에 전문 상담원 또는<br>
                                컨설턴트가 답변을 드립니다.
                            </p>
                        </div>
                    </div>
                    <div class="right" data-aos="fade" data-aos-duration="2000" data-aos-delay="200">
                        <form class="online_inquiry_form">
                            <div class="half_wrap">
                                <div class="width_input width_half">
                                    <label>회사/단체명</label>
                                    <input class="company" type="text">
                                </div>
                                <div class="width_input width_half">
                                    <label>성명</label>
                                    <input class="name" type="text">
                                </div>
                            </div>
                            <div class="half_wrap">
                                <div class="width_input width_half">
                                    <label>직책</label>
                                    <input class="job" type="text">
                                </div>
                                <div class="width_input width_half">
                                    <label>전화번호</label>
                                    <input class="tel" type="tel">
                                </div>
                            </div>
                            
                            <div class="width_input">
                                <label>이메일</label>
                                <input class="email" type="text">
                            </div>
                            <div class="width_input_mail">
                                <label>내용</label>
                                <textarea placeholder="문의사항을 작성해주세요."></textarea>
                            </div>
                            <ul class="bot_bar">
                                <li class="inquiry_privacy">
                                    <input type="checkbox"><label>개인정보수집이용 동의</label><a class="privacy_pop" href="#">자세히 보기</a>
                                </li>
                                <li class="inquiry_send"><button type="submit">작성완료<span><i class="xi-send"></i></span></button></li>
                            </ul>
                        </form>
                    </div>
                    <div class="inquiry_bg"><img src="../img/main/inquiry_bg.png" alt=""></div>
                </div>
                <div class="personal_information">
                    <div class="inner">
                        <div class="top">
                            <p>개인정보수집이용</p>
                            <a class="personal_information_close" href="#"><i class="xi-close-thin"></i></a>
                        </div>
                        <div class="content">
                            <p>내용</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main_qna footer_y on">
            <div class="center">
                <div class="qna_wrap">
                    <a class="career_box" href="#">
                        <h5>CAREER</h5>
                        <p>메이저위드(주)와 함께 할 인재를 모집합니다.</p>
                    </a>
                    <a class="qna_box" href="#">
                        <h5>Q&A</h5>
                        <p>메이저위드(주)는 항상 고객의 소리에 귀 기울이고 있습니다.</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
</div>

<script>

</script>
<script src="/js/main.js?v=<%=cacheDate%>"></script>

<!-- #include virtual="/kr/inc/footer.asp" -->