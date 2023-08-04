<?php include "../inc/common.php" ?>
<body>
    <div class="sub_wrap sub_wrap_view">
        <div class="sub_top">
            <div class="center">
                <p class="kor bold">피엘바이오</p>
                <h1 class="mont-800">Plbio</h1>
                <ul class="detail">
                    <li>
                        <span class="bold">기여도</span>
                        <span class="color_777">디자인 100%, 퍼블리싱 100%</span>
                    </li>
                    <li>
                        <span class="bold">작업기간</span>
                        <span class="color_777">2022.12.08 - 2022.12.09</span>
                    </li>
                    <li class="site_move"><a href="<?=dir?>worklist/plbio" target="_blank">사이트 바로가기</a></li>
                </ul>
            </div>
        </div>
        <div class="view_content">
            <div class="center">
                <div class="img_wrap"><img src="<?=dir?>img/full/plbio_full.png" alt=""></div>
                <p class="content_txt">
                    원페이지 웹사이트 작업물.<br>
                    svg 애니메이션을 위해 코드펜 소스를 참고하여 일러스트 작업.
                </p>

                <div class="code">
                    <p class="bolder">JAVASCRIPT</p>
                    <div>
                        <pre class="prettyprint"><xmp>
    <script> 
    window.addEventListener("scroll",function(){

        let sctop = window.scrollY;

        if(sctop >= visheight)
        {
            header.classList.add("on");

        }
        else if(sctop < visheight)
        {
            header.classList.remove("on");
        }

    });

    let num=0;

    mobile_btn.addEventListener("click",function(e){
        e.preventDefault();
        mobile_menu.classList.toggle("on");

        console.log(num);
        num+=1;

        if(num%2 == 1) //클릭했을 때
        {
            header.classList.add("on");
        }
        else
        {
            header.classList.remove("on");
        }


    });

  
   //for 구문 생략
   
    gnb_li[i].addEventListener("click",function(e){

        e.preventDefault();

        window.scrollTo(
        {
            top:divarray[i].offsetTop,
            left:0,
            behavior : "smooth"
        });
    });

     mgnb_li_a[i].addEventListener("click",function(e){

        e.preventDefault();

        window.scrollTo(
        {
            top:divarray[i].offsetTop,
            left:0,
            behavior : "smooth"
        });
    });
    
    
    window.addEventListener("scroll",function(){

        for(let i=0; i<gnb_li_a.length; i++)
        {
            gnb_li_a[i].classList.remove("on");
        }

        let sctop = window.scrollY;
        console.log(sctop);
        if(sctop >= divarray[0].offsetTop && sctop < divarray[1].offsetTop)
        {
            gnb_li_a[0].classList.add("on");
        }
        else if(sctop >= divarray[1].offsetTop && sctop < maptop-50)
        {
            gnb_li_a[1].classList.add("on");

        }
        else if(sctop >= maptop-50)
        {
            gnb_li_a[2].classList.add("on");

        }

    });
</script>   
</xmp></pre>
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