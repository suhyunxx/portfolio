AOS.init();

const header = document.querySelector("#header");
const gnb = document.querySelector(".gnb");
const subGnb = document.querySelectorAll(".depth2");
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

//마우스 올렸을 때 subgnb/subBg 나타남
function gnbmouseUp(){

    header.classList.add("on");
//    logo.src = "img/orangelogo.png";

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

        subBg.style.height = max + 30 + "px";
    }
}

//마우스 내리면 원래대로 돌아가는 함수
function gnbmouseLeave() {

    header.classList.remove("on");
//    logo.src = "img/rooflogo.png";

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

//퀵메뉴
const move_top = document.querySelector(".move_top");

move_top.addEventListener("click",function(e){
    e.preventDefault();
   
    window.scrollTo({
      top: 0,
      left: 0,
      behavior: 'smooth'
    });
    
});


//모바일메뉴
const mobile_menu = document.querySelector("#mobile_menu");
const mobile_menu_close = document.querySelector(".mobile_menu_close");
const ham = document.querySelector(".ham");

ham.addEventListener("click",function(){
   mobile_menu.classList.add("on"); 
});

mobile_menu_close.addEventListener("click",function(){
   mobile_menu.classList.remove("on"); 
});

const mgnb_li = document.querySelectorAll(".mgnb > li");
const mgnb_list = document.querySelectorAll(".mgnb_list > ul");

for(let i=0; mgnb_li.length; i++)
{
    mgnb_li[i].addEventListener("click",function(){
        for(let j=0; j<mgnb_li.length; j++)
        {
            mgnb_list[j].classList.remove("on");
            mgnb_li[j].classList.remove("on");
        }
    mgnb_list[i].classList.add("on");
        mgnb_li[i].classList.add("on");
    });
}






