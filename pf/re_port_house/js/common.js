//헤더 서브메뉴
const header = document.querySelector("#header");
const logo = document.querySelector(".logo img");
const gnb = document.querySelector(".gnb");
const subGnb = document.querySelectorAll(".sub_gnb");
const subBg = document.querySelector(".gnb_bg");

const gnbSet = [gnb,subBg];

let depth2Array = [];
let max = 0;

//gnb와 subBg에 마우스 올렸을 때
for(let i=0; i<gnbSet.length; i++)
{
    gnbSet[i].addEventListener("mouseenter",function(){
        gnbmouseUp();
    });
}

//gnb와 subBg에 마우스 내렸을 때
for(let i=0; i<gnbSet.length; i++)
{
    gnbSet[i].addEventListener("mouseleave",function(){
        gnbmouseLeave();
    });
}

//마우스 올렸을 때 subgnb/subBg 나타남, 색 변경, 로고 변경되는 함수
function gnbmouseUp(){

    header.classList.add("on");
    logo.src = "img/orangelogo.png";

    for(let i=0; i<subGnb.length; i++)
    {
        let sublength = subGnb[i].querySelectorAll("li").length;
        let subheight = subGnb[i].querySelector("li").offsetHeight;

        subGnb[i].style.height = sublength * subheight + "px";

        depth2Array[i] = sublength * subheight;

        if(max <= depth2Array[i])
        {
            max = depth2Array[i];
        }

        subBg.style.height = max + "px";
    }
}

//마우스 내리면 원래대로 돌아가는 함수
function gnbmouseLeave() {

    header.classList.remove("on");
    logo.src = "img/rooflogo.png";

    for(let i=0; i<subGnb.length; i++)
    {
        let sublength = subGnb[i].querySelectorAll("li").length;
        let subheight = subGnb[i].querySelector("li").offsetHeight;

        subGnb[i].style.height = "0px";

        depth2Array[i] = sublength * subheight;

        if(max <= depth2Array[i])
        {
            max = depth2Array[i];
        }

        subBg.style.height = "0px";
    }

}

//스크롤 내렸을 때 gnb에 마우스 올리면 주황색 로고, 
//스크롤 올렸을 때 gnb에 마우스 올리면 하얀색 로고
window.addEventListener("scroll",()=>{

    let topsc = window.scrollY;

    if(topsc > 0) //스크롤 내린 상태
    {
        for(let i=0; i<gnbSet.length; i++)
        {   
            gnbSet[i].addEventListener("mouseleave",()=>{ //gnb에 마우스를 올렸다가 내리면
    
                logo.src = "img/orangelogo.png"; //로고가 오렌지색 그대로인 상태
            
            });
        }

        subBg.classList.add("change");
    }
    else
    {
        for(let i=0; i<gnbSet.length; i++)
        {   
            gnbSet[i].addEventListener("mouseleave",()=>{
    
                logo.src = "img/rooflogo.png";
            
            });
        }
        subBg.classList.remove("change");
    }
    
});

//헤더 디자인 변경
window.addEventListener("scroll",()=>{

    let topsc = window.scrollY;

    if(topsc > 0)
    {
        header.classList.add("change");
        logo.src = "img/orangelogo.png";
    }
    else
    {
        header.classList.remove("change");
        logo.src = "img/rooflogo.png";
    }
});

//풋터 스와이퍼

const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 5,
    speed:800,
    autoplay: {
        delay: 2000,
    },
    breakpoints: {
        // when window width is >= 320px
        320: {
            slidesPerView: 1,
            spaceBetween: 0
        },
        640: {
        slidesPerView: 2,
        spaceBetween: 20
        },
        950: {
            slidesPerView: 4,
            spaceBetween: 20
        },
        1200: {
            slidesPerView: 5,
            spaceBetween: 20
        }
    }
      
});