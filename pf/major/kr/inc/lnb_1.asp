<li class="home"><a href="../index.asp"><i class="xi-home copy"></i></a></li>
<li class="_location">
    <a href="">회사소개<img src="<%=dir%>/img/sub/arrow_down.png" alt=""></a>
    <ul class="lnb_depth2">
        <li><a href="#">컨설팅 분야</a></li>
        <li><a href="#">컨설팅실적&후기</a></li>
        <li><a href="#">고객지원</a></li>
    </ul>
</li>
<li class="_location">
    <a href="">메이저위드 소개<img src="<%=dir%>/img/sub/arrow_down.png" alt="">
        <ul class="lnb_depth2">
            <li><a href="#">컨설턴트 프로필</a></li>
            <li><a href="#">채용안내</a></li>
            <li><a href="#">오시는 길</a></li>
        </ul>
    </a>
</li>
<li class="_location">
    <a class="" href="">인사말<img src="<%=dir%>/img/sub/arrow_down.png" alt=""></a>
    <ul class="lnb_depth2">
        <li class="_location_move"><a href="#">연혁</a></li>
        <li class="_location_move"><a href="#">차별성</a></li>
        <li class="_location_move"><a href="#">조직도</a></li>
    </ul>
</li>

<script>
    const _location = document.querySelectorAll("._location");
    const arrowimg = document.querySelectorAll("._location > a > img");
    const lnb_depth2 = document.querySelectorAll(".lnb_depth2");

    let num = 0;

    for(let i=0; i<_location.length; i++)
    {
        _location[i].addEventListener("click",function(e){
            e.preventDefault();
            _location[i].classList.toggle("on");
            lnb_depth2[i].classList.toggle("on");

            num+=1;

            console.log(arrowimg);

            if(num%2 == 1) //클릭했을 때
            {
                arrowimg[i].src = "/img/sub/arrow_up.png";
            }
            else
            {
                arrowimg[i].src = "/img/sub/arrow_down.png";
            }

        });
    }
</script>