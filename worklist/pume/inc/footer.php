<footer>
    <div class="banner">
       <div class="sub_center">
<!--
           <ul class="banner_list">
               <li><a href="https://www.fss.or.kr/" target="_blank"><img src="<?=dir?>/img/banner/banner1.png" alt="금융감독원"></a></li>
               <li><a href="https://www.kofia.or.kr/" target="_blank"><img src="<?=dir?>/img/banner/banner2.png" alt="금융투자협회"></a></li>
               <li><a href="http://fund.kofia.or.kr/" target="_blank"><img src="<?=dir?>/img/banner/banner3.png" alt="펀드정보 원클릭 시스템"></a></li>
               <li><a href="https://www.fsc.go.kr/" target="_blank"><img src="<?=dir?>/img/banner/banner4.png" alt="금융위원회"></a></li>
               <li><a href="https://fine.fss.or.kr/" target="_blank"><img src="<?=dir?>/img/banner/banner5.png" alt="파인 금융소비자 정보포털"></a></li>
           </ul>
-->
       </div>
       <div class="banner_wrap">
           <div class="sub_center">
               <div class="swiper mySwiper">
                   <div class="swiper-wrapper banner_list">
                       <div class="swiper-slide"><a href="https://www.fss.or.kr/" target="_blank"><img src="<?=dir?>/img/banner/banner1.png" alt="금융감독원"></a></div>
                       <div class="swiper-slide"><a href="https://www.kofia.or.kr/" target="_blank"><img src="<?=dir?>/img/banner/banner2.png" alt="금융투자협회"></a></div>
                       <div class="swiper-slide"><a href="http://fund.kofia.or.kr/" target="_blank"><img src="<?=dir?>/img/banner/banner3.png" alt="펀드정보 원클릭 시스템"></a></div>
                       <div class="swiper-slide"><a href="https://www.fsc.go.kr/" target="_blank"><img src="<?=dir?>/img/banner/banner4.png" alt="금융위원회"></a></div>
                       <div class="swiper-slide"><a href="https://fine.fss.or.kr/" target="_blank"><img src="<?=dir?>/img/banner/banner5.png" alt="파인 금융소비자 정보포털"></a></div>

                   </div>
               </div>
               
           </div>
       </div>
        

        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: 5,
                spaceBetween: 10,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },
                breakpoints: {
                    300: {
                        slidesPerView: 2,
                        spaceBetween: 30,
                    },
                    500: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    640: {
                        slidesPerView: 3,
                        spaceBetween: 20,
                    },
                    1024: {
                        slidesPerView: 5,
                        spaceBetween: 30,
                    },
                },
               
            });
        </script>
        
    </div>
    <div class="foot">
       <div class="sub_center">
           <h1 class="flogo"><a href=""><img src="<?=dir?>/img/logo.png" alt="풋터로고"></a></h1>
           <address>
               <b>주소 : </b>서울시 강남구 봉은사로 214, 레드페이스빌딩 7층<br>
               <b>Tel : </b>02-6713-5811<b class="foot_fax">Fax : </b>02-6713-5825
           </address>
           <p class="copy">Copyright(c) PumE Asset Management Co.,Ltd.</p>
           <div class="moveTop"><a href=""><i class="xi-arrow-up"></i></a></div>
       </div>
    </div>
    <script>
        const moveTop = document.querySelector(".moveTop > a");
        
        moveTop.addEventListener("click",function(e){
            e.preventDefault();
            
            window.scrollTo(
                {
                    top:0,
                    left:0,
                    behavior:'smooth'
                }
            );
        })
    
    </script>
</footer>