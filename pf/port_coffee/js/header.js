//gnb
const gnb = document.querySelector(".gnb");
const subMenu = document.querySelectorAll(".sub-menu");
const menuBg = document.querySelector(".menu-bg");

//중복을 없애기 위한 배열변수
//메뉴Bg에도 마우스를 올리고 내렸을 때 나타나고 사라져야함
const gnbSet = [gnb,menuBg];

for(let i=0; i<gnbSet.length; i++)
{
    gnbSet[i].addEventListener("mouseenter",function(){

        for(let j=0; j<subMenu.length; j++)
        {
            let subLength = subMenu[j].querySelectorAll("li").length;
            let subHeight = subMenu[j].querySelector("li").offsetHeight;
    
            subMenu[j].style.height = subLength * subHeight + "px";
            menuBg.style.height = "250px";
        }

        menuBg.classList.add("on");
    });

    gnbSet[i].addEventListener("mouseleave",function(){

        for(let j=0; j<subMenu.length; j++)
        {
            let subLength = subMenu[j].querySelectorAll("li").length;
            let subHeight = subMenu[j].querySelector("li").offsetHeight;
    
            subMenu[j].style.height = "0px";
            menuBg.style.height = "0px";
        }
        menuBg.classList.remove("on");
    });
}

//스크롤이벤트
const header = document.querySelector("header");
const loginWrap = document.querySelector(".loginWrap");
const chTop = document.querySelector(".ch_top");
const img = document.querySelector("header .logo img");

window.addEventListener("scroll",()=>{

    let scTop = window.scrollY;

    if(scTop>80)
    {
        header.classList.add("on");
        loginWrap.classList.add("on"); //스크롤 내리면 loginWrap 안 보이게 구성
    }
    else
    {
        header.classList.remove("on");
        loginWrap.classList.remove("on");
    }

    if(scTop > 0)
    {
        chTop.style.display = "block";
    }
    else
    {
        chTop.style.display = "none";
    }

    chTop.addEventListener("click",()=>{

        window.scrollTo({

            top:0,
            left:0,
            behavior:"smooth"

        });

    });

});

//모바일메뉴 변수
const open = document.querySelector(".m-btn");
const close = document.querySelector(".close");
const menu = document.querySelector(".m-menu");
//모바일메뉴 버튼 클릭하면 나오게
open.addEventListener("click",(e)=>{

    e.preventDefault();
    menu.style.left = "0%";

});
close.addEventListener("click", (e)=>{

    e.preventDefault();
    menu.style.left = "-100%";
});

//모바일메뉴 뎁스2 클릭하면 나오게
const mGnb = document.querySelectorAll(".m-menu .m-list .m-gnb div");
const depth2 = document.querySelectorAll(".depth2");

for(let i=0; i<mGnb.length; i++)
{
    mGnb[i].addEventListener("click",()=>{

        if(mGnb[i].classList.contains("on")) //펼쳐져있는경우
        {
            mGnb[i].classList.remove("on");//화살표 표시 돌리기
            mGnb[i].style.height = mGnb[i].offsetHeight - depth2[i].offsetHeight + "px"; //depth1 높이에서 depth2 높이를 빼기
        }
        else //접혀있는경우
        {
            const openGnb = document.querySelectorAll(".m-menu .m-list .m-gnb div.on"); //펼쳐져있는 gnb 변수설정
            for(let j=0; j<openGnb.length; j++) //펼쳐져 있는 gnb 모두 접기
            {
                openGnb[j].classList.remove("on");
                openGnb[j].style.height = mGnb[i].offsetHeight + "px"; //접혀있는 다른 gnb 의 값으로 대체 (40px)
            } 

            mGnb[i].classList.add("on");
            mGnb[i].style.height = mGnb[i].offsetHeight + depth2[i].offsetHeight + "px"; //depth1 높이에서 depth2 높이 더하기
        }

    });
}