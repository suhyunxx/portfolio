//헤더 서브메뉴
const header = document.querySelector("#header");
const logo = document.querySelector(".logo img");
const gnb = document.querySelector(".gnb");
const subGnb = document.querySelectorAll(".sub_gnb");
const subBg = document.querySelector(".gnb_bg");

const gnbSet = [gnb,subBg];


for(let i=0; i<gnbSet.length; i++)
{
    //gnb에 마우스 올리면 주황색 로고
    gnbSet[i].addEventListener("mouseenter",()=>{

        header.classList.add("on");
        logo.src = "img/orangelogo.png";

        for(let j=0; j<subGnb.length; j++){
            subGnb[j].classList.add("on");    
        }   
       
        subBg.classList.add("on");

    });
}
for(let i=0; i<gnbSet.length; i++)
{
    //gnb에 마우스 내리면 하얀색 로고
   gnbSet[i].addEventListener("mouseleave",()=>{

        header.classList.remove("on");
        logo.src = "img/rooflogo.png";
        
        for(let j=0; j<subGnb.length; j++)
        {
            subGnb[j].classList.remove("on");    
        }   
    
        subBg.classList.remove("on");

   });
}



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