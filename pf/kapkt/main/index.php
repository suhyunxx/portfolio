<?php include "../inc/common.php" ?>
<body>
    <?php include "../inc/header.php" ?>
    <div class="wrap">
        <div class="visual">
            <div id="slider">
                <div class="view">
                    <div>
                        <div class="slide_inner">
                            <h3 class="slider_text">바로 선 공교육<br>행복한 <span>유아학교</span></h3>
                        </div>
                    </div>
                    <div>2</div>
                    <div>3</div>
                    <div>4</div>
                </div>
                <ul class="pager">
                    <li class="on" data-index="0">1</li>
                    <li data-index="1">2</li>
                    <li data-index="2">3</li>
                </ul>
            </div>
        </div>
        <div style="overflow:hidden;">
            <div class="pic">
            <div class="left">
                <h3>다양한 활동사진을&nbsp;<br>만나보세요!</h3>
                <div class="slide_btn">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                <p><a href="">활동사진 더보기&nbsp;&nbsp;&nbsp;<i class="xi-long-arrow-right"></i></a></p>
            </div>
            <div class="right">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><a href=""><img src="<?=dir?>img/sample.png" alt=""></a></div>
                        <div class="swiper-slide"><a href=""><img src="<?=dir?>img/sample.png" alt=""></a></div>
                        <div class="swiper-slide"><a href=""><img src="<?=dir?>img/sample.png" alt=""></a></div>
                        <div class="swiper-slide"><a href=""><img src="<?=dir?>img/sample.png" alt=""></a></div>
                        <div class="swiper-slide"><a href=""><img src="<?=dir?>img/sample.png" alt=""></a></div>
                        <div class="swiper-slide"><a href=""><img src="<?=dir?>img/sample.png" alt=""></a></div>
                        <div class="swiper-slide"><a href=""><img src="<?=dir?>img/sample.png" alt=""></a></div>
                    </div>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
                <!-- Initialize Swiper -->
                <script>
                    var swiper = new Swiper(".mySwiper", {
                        slidesPerView: "auto",
                        spaceBetween: 30,
                        pagination: {
                            el: ".swiper-pagination",
                            clickable: true,
                        },
                        navigation: {
                            nextEl: ".swiper-button-next",
                            prevEl: ".swiper-button-prev",
                        },
                    });
                </script>
            </div>
        </div>
        </div>
        <div class="reference">
            <div class="main_center">
                <h3>REFERENCE</h3>
                <ul class="list_wrap">
                    <li><a href="">
                        <p>신문자료</p>
                    </a></li>
                    <li><a href="">
                        <p>법령자료</p>
                    </a></li>
                    <li><a href=""><p>교육프로그램</p></a></li>
                    <li><a href=""><p>통계자료</p></a></li>
                </ul>
            </div>
        </div>
        <div class="notice">
            <div class="main_center">
                <div class="top">
                    <h3 class="main_title">국공립유치원의<br>새로운 소식을 확인하세요.</h3>
                    <ul class="menu">
                        <li class="on"><a href="">공지사항</a></li>
                        <li><a href="">유아교육뉴스</a></li>
                        <li><a href="">연합회소식</a></li>
                    </ul>
                </div>
                <div class="contents">
                    <div class="tab_div on">
                        <div class="tab_div_list">
                            <p class="point-blue">공지사항</p>
                            <ul>
                                <li class="notice_title"><a href="">국공립유치원의 새로운 소식을 확인하세요.</a></li>
                                <li class="notice_when">2023.03.16</li>
                            </ul>
                        </div>
                        <div class="tab_div_list">
                            <p class="point-blue">공지사항</p>
                            <ul>
                                <li class="notice_title"><a href="">국공립유치원의 새로운 소식을 확인하세요.</a></li>
                                <li class="notice_when">2023.03.16</li>
                            </ul>
                        </div>
                        <div class="tab_div_list">
                            <p class="point-blue">공지사항</p>
                            <ul>
                                <li class="notice_title"><a href="">국공립유치원의 새로운 소식을 확인하세요.</a></li>
                                <li class="notice_when">2023.03.16</li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab_div">
                        <div class="tab_div_list">
                            <p class="point-blue">유아교육뉴스</p>
                            <ul>
                                <li class="notice_title"><a href="">국공립유치원의 새로운 소식을 확인하세요.</a></li>
                                <li class="notice_when">2023.03.16</li>
                            </ul>
                        </div>
                        <div class="tab_div_list">
                            <p class="point-blue">유아교육뉴스</p>
                            <ul>
                                <li class="notice_title"><a href="">국공립유치원의 새로운 소식을 확인하세요.</a></li>
                                <li class="notice_when">2023.03.16</li>
                            </ul>
                        </div>
                        <div class="tab_div_list">
                            <p class="point-blue">유아교육뉴스</p>
                            <ul>
                                <li class="notice_title"><a href="">국공립유치원의 새로운 소식을 확인하세요.</a></li>
                                <li class="notice_when">2023.03.16</li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab_div">
                        <div class="tab_div_list">
                            <p class="point-blue">연합회소식</p>
                            <ul>
                                <li class="notice_title"><a href="">국공립유치원의 새로운 소식을 확인하세요.</a></li>
                                <li class="notice_when">2023.03.16</li>
                            </ul>
                        </div>
                        <div class="tab_div_list">
                            <p class="point-blue">연합회소식</p>
                            <ul>
                                <li class="notice_title"><a href="">국공립유치원의 새로운 소식을 확인하세요.</a></li>
                                <li class="notice_when">2023.03.16</li>
                            </ul>
                        </div>
                        <div class="tab_div_list">
                            <p class="point-blue">연합회소식</p>
                            <ul>
                                <li class="notice_title"><a href="">국공립유치원의 새로운 소식을 확인하세요.</a></li>
                                <li class="notice_when">2023.03.16</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="banner">
            <div class="main_center">
                <div class="banner_list">
                    <a href="">
                        <p class="icon"><img src="<?=dir?>img/tel.png" alt=""></p>
                        <ul>
                            <li>문의전화</li>
                            <li>02-111-1111</li>
                        </ul>
                    </a>
                </div>
                <div class="banner_list">
                    <a href="">
                        <p class="icon"><img src="<?=dir?>img/mem.png" alt=""></p>
                        <ul>
                            <li>회원게시판</li>
                            <li>바로가기 ></li>
                        </ul>
                    </a>
                </div>
                <div class="banner_list">
                    <a href="">
                        <p class="icon"><img src="<?=dir?>img/map.png" alt=""></p>
                        <ul>
                            <li>전국 기관 찾기</li>
                            <li>국공립유치원, 시도교육청, 유아교육진흥원</li>
                        </ul>
                    </a>
                </div>
            </div>
        </div>
        <div class="banner2">
            <div class="main_center">
                <div class="swiper mySwiper2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><a href=""></a></div>
                        <div class="swiper-slide"><a href=""></a></div>
                        <div class="swiper-slide"><a href=""></a></div>
                        <div class="swiper-slide"><a href=""></a></div>
                        <div class="swiper-slide"><a href=""></a></div>
                        <div class="swiper-slide"><a href=""></a></div>
                    </div>
                </div>
                <div class="slide_btn2">
                    <div class="swiper-button-prev swiper-button-prev2"></div>
                    <div class="swiper-button-next swiper-button-next2"></div>
                </div>
            </div>
            <script>
                var swiper = new Swiper(".mySwiper2", {
                    slidesPerView: "auto",
                    spaceBetween: 30,
                    pagination: {
                        el: ".swiper-pagination",
                        clickable: true,
                    },
                    navigation: {
                        nextEl: ".swiper-button-next2",
                        prevEl: ".swiper-button-prev2",
                    },
                    autoplay: {
                        delay: 2500,
                        disableOnInteraction: false,
                    },
                    
                });
            </script>
        </div>
        <?php include "../inc/footer.php" ?>
    </div>

    <script>
        const slideWrap = document.querySelector("#slider");
        const sliderView = document.querySelector(".view");
        const sliderLast = document.querySelectorAll(".view > div").length;
        const idx = document.querySelectorAll(".pager li");
        const leftBtn = document.querySelector(".left");
        const rightBtn = document.querySelector(".right");

        let sliderNumber = 0; //슬라이더넘버라는 변수에 숫자 0을 담아서 세팅해준다

        //i 변수가 idx변수의 length 객체 값보다 작을 때까지 i 변수값은 증가한다
        for(let i=0; i<idx.length; i++) 
        {
            idx[i].addEventListener("click",(e)=>{ 
                //idx 배열변수에 i 변수를 넣어서 클릭이벤트 함수를 달아준다
                sliderNumber  = e.currentTarget.getAttribute("data-index"); //슬라이드넘버 변수값에 사용자 정의 속성인 data-index 값을 넣어준다
                //함수로 코드 정리할 부분
                slideMove(sliderNumber);
                //함수로 코드 정리할 부분
            });
        }

        //이 함수에 중복되는 코드를 정리하여 리팩토링 할것
        function slideMove(actNumber)
        {
            for(let i=0; i<idx.length; i++){

                idx[i].classList.remove("on");
            }

            idx[actNumber].classList.add("on"); //각각 위에서 받아온 actNumber 변수값의 idx 배열변수에 add 클래스리스트 객체를 달아준다

            sliderView.style.marginLeft = (-100*actNumber)+"%";
        }
        
        
        const menu = document.querySelectorAll(".menu li");
        const contents = document.querySelectorAll(".contents > .tab_div");

        for(let i=0; i<menu.length; i++)
        {
            menu[i].addEventListener("click",(e)=>{

                //탭메뉴 클릭시 버튼 비활성화 및 콘텐츠 전부 사라짐
                for(let j=0; j<menu.length; j++)
                {
                    menu[j].classList.remove("on");
                    contents[j].classList.remove("on");
                }
                e.preventDefault();
                e.currentTarget.classList.add("on");
                contents[i].classList.add("on");

            });
        }

    </script>
</body>

</html>