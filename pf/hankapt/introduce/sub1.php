<?php include "../inc/common.php"; ?>
<body>
    <?php include "../inc/header.php"; ?>
    <div class="container">
        <div class="inner">
            <div class="topnavi">
                <ul>
                    <li><a href="../main/index.php"></a></li>
                    <li><span class="lnr lnr-chevron-right"></span></li>
                    <li><a href="sub1.php">연합회소개</a></li>
                    <li><span class="lnr lnr-chevron-right"></span></li>
                    <li><a href="#">회장인사말</a></li>
                </ul>
            </div>
            <ul class="leftnavi">
                <li><a href="#">연합회소개</a></li>
                <li class="active"><a href="sub1.php">회장인사말</a></li>
                <li><a href="sub2.php">연혁</a></li>
                <li><a href="sub3.php">임원단구성</a></li>
                <li><a href="sub4.php">연간사업계획</a></li>
                <li><a href="sub5.php">활동보고</a></li>
                <li><a href="sub6.php">연합회로고,정관</a></li>
                <li><a href="sub8.php">찾아오시는길</a></li>
            </ul>
            <h4 class="innerTitle innerTitleLeft">회장인사말</h4>
            <div class="content greeting contentLeft">
                <h3 class="greeting1 boldfont">"바로 선 공교육 행복한 유아학교"<br/>우리 연합회가 만들어 가겠습니다!</h3>
                <p class="greeting2">안녕하십니까.<br>한국국공립 유치원 교원연합회 제 14대회장 이경미 입니다.</p>
                <p class="greeting3"> 우리 한국국공립유치원교원연합회는<br>
                    그동안 국공립유치원 교원의 권익신장은 물론 유아교육의 질 제고에 노력함으로써<br>
                    국공립유치원 교육에 학부모들의 신뢰를 증대시키고,<br> 
                    유아교육이 기초교육으로 자리 매김하는 데 크게 기여해 왔습니다.</p>
                <p class="greeting4">
                    앞으로도 우리 한국국공립유치원교원연합회는<br> 
                    유아교육의 당면현안 해결을 위해 노력하고 국공립유치원 발전을 위한 비전을 제시하며<br> 
                    유아교육 발전을 위해 보다 주도적인 역할을 수행해 나갈 것입니다.

                </p>
                <p class="greeting5">
                    <span class="fw500">유아</span>에게 <span class="fw500">행복</span>과 <span class="fw500">사랑</span>을 <span class="fw500">학부모</span>에게 <span class="fw500">감동</span>과 <span class="fw500">만족</span>을 <span class="fw500">교사</span>에게 <span class="fw500">전문성</span>과 <span class="fw500">보람</span>을 주는<br>
                    <span class="fcblue">바로 선 공교육 행복한 유치원</span><span class="fw500" style="font-size:19px;">으로 거듭날 수 있도록</span> 우리 연합회가 최선을 다하겠습니다.
                </p>
                <p class="greeting6">
                    국공립유치원 교원 여러분 모두의 깊은 관심과 적극적인 참여가<br>
                    우리나라 유아교육의 비약적인 발전을 가져올 것으로 확신하며<br>
                    지속적인 성원과 관심을 부탁드립니다.

                </p>
                <p class="greeting7">감사합니다.</p>
                
                <div class="president">
                    <img src="../img/main/president14.png" alt="한국국공립유치원교원연합회 회장 이경미">
                    <p>한국국공립유치원교원연합회 <span class="fw500">회장</span> <span class="fcblue">이</span><span class="fcblue">경</span><span class="fcblue">미</span></p>
                    <a href="" class="allpresident">역대 회장 보기</a>
                </div>
            </div>
        </div>
    </div>

    <!----- 역대회장보기 팝업창 ----->
    <div class="popupWrap" style="z-index:90; display:none; width:100%; height:100%; background-color:rgba(0,0,0,0.3); position:fixed; top:50%; left:50%; transform:translate(-50%,-50%); ">
        <div class="popupLayer" style="width:550px; height:550px; overflow:auto; font-family: 'Noto Sans KR', sans-serif;position:fixed; top:40%; left:50%; transform:translate(-50%,-50%);padding:30px; background-color:#fff; border:1px solid #c5c5c5;">
            <div class="popuptitle">
                <h4>역대 회장</h4>
                <div class="presidentclose"><a href=""><i class="fa-solid fa-xmark"></i></a></div>
            </div>
            <div class="line">
                <div class="numpresident">제 1대</div>
                <div class="presidentSet">
                    <p><strong>전선희</strong><br>1996.7.13 ~ 1998.7.10</p>
                    <div class="imgwrap">
                        <img src="../img/main/president1.png" alt="한국국공립유치원교원연합회 제 1대 회장 전선희">
                    </div>
                </div>
            </div>
            <div class="line">
                <div class="numpresident">제 2대 ~ 7대</div>
                <div class="presidentSet">
                    <p><strong>정혜손</strong><br>1998.7.11 ~ 2011.2.28</p>
                    <div class="imgwrap">
                        <img src="../img/main/president2-7.png" alt="한국국공립유치원교원연합회 제 2대 ~ 7대 회장 정혜손">
                    </div>
                </div>
            </div>
            <div class="line">
                <div class="numpresident">제 8대 ~ 9대</div>
                <div class="presidentSet">
                    <p><strong>전호숙</strong><br>2011.3.1 ~ 2015.2.28</p>
                    <div class="imgwrap">
                        <img src="../img/main/president8-9.png" alt="한국국공립유치원교원연합회 제 8대 ~ 9대 회장 전호숙">
                    </div>
                </div>
            </div>
            <div class="line">
                <div class="numpresident">제 10대</div>
                <div class="presidentSet">
                    <p><strong>신상인</strong><br>2015.3.1 ~ 2017.2.28</p>
                    <div class="imgwrap">
                        <img src="../img/main/president10.png" alt="한국국공립유치원교원연합회 제 10대 회장 신상인">
                    </div>
                </div>
            </div>
            <div class="line">
                <div class="numpresident">제 11대 ~ 12대</div>
                <div class="presidentSet">
                    <p><strong>엄미선</strong><br>2017.3.1 ~ 2020.2.29</p>
                    <div class="imgwrap">
                        <img src="../img/main/president11-12.png" alt="한국국공립유치원교원연합회 제 11대 ~ 12대 회장 엄미선">
                    </div>
                </div>
            </div>
            <div class="line">
                <div class="numpresident">제 13대</div>
                <div class="presidentSet">
                    <p><strong>우영혜</strong><br>2020.3.1 ~ 2022.2.28</p>
                    <div class="imgwrap">
                        <img src="../img/main/president13.jpg" alt="한국국공립유치원교원연합회 제 13대 회장 우영혜">
                    </div>
                </div>
            </div>
            <div class="line">
                <div class="numpresident">제 14대</div>
                <div class="presidentSet">
                    <p><strong>이경미</strong><br>2022.3.1 ~ 현재</p>
                    <div class="imgwrap">
                        <img src="../img/main/president14.png" alt="한국국공립유치원교원연합회 제 14대 회장 이경미">
                    </div>
                </div>
            </div>
            <!-- <div class="presidentup"><a href=""><i class="fa-solid fa-angle-up"></i></a></div> -->
            
        </div>
        
    </div>
    

    <?php include "../inc/footer.php"; ?>
    <script type="text/javascript" src="../js/snb.js"></script>
    <script type="text/javascript" src="../js/snb2.js"></script>

    <!----- 역대회장보기 팝업창 스크립트 ----->
    <script>
        const popupWrap = document.querySelector(".popupWrap");
        const allpresident = document.querySelector(".allpresident");
        const presidentclose = document.querySelector(".presidentclose");
        const presidentup = document.querySelector(".presidentup");

        allpresident.addEventListener("click",function(e){
            e.preventDefault();
            popupWrap.style.display = "block";
        })

        presidentclose.addEventListener("click",function(e){
            e.preventDefault();
            popupWrap.style.display = "none";
        })

        

        presidentup.addEventListener("click",function(e){
            e.preventDefault();

            window.scroll({
                top:0,
                left:0,
                behavior: 'smooth'
            });
                
        });

    </script>
</body>
</html>