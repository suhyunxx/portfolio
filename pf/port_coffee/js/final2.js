//슬라이더
//슬라이더 변수
const view = document.querySelector(".view");
const leftBtn = document.querySelector(".leftBtn");
const rightBtn = document.querySelector(".rightBtn");

//재생, 멈춤버튼
const stop = document.querySelector(".stop");
const play = document.querySelector(".play");

let slideNumber = 0;

//동그라미 변수
const pager = document.querySelectorAll(".pager li");

//왼쪽버튼 클릭했을 때
leftBtn.addEventListener("click",()=>{

    if(slideNumber==0)
    {
        slideNumber = 3;
        
    }
    else
    {
        slideNumber--;
    }
    
    view.style.marginLeft = -100*slideNumber + "%";

    for (i=0; i<pager.length; i++)
    {
        pager[i].classList.remove("on");
    }
    pager[slideNumber].classList.add("on");

});
//오른쪽 버튼 클릭했을 때
rightBtn.addEventListener("click",()=>{

    if(slideNumber == pager.length-1)
    {
        slideNumber = 0;
    }
    else
    {
        slideNumber++;
    }

    for(i=0; i<pager.length; i++)
    {
        pager[i].classList.remove("on");
    }
    pager[slideNumber].classList.add("on");
    view.style.marginLeft = -100 * slideNumber + "%";

});

//슬라이더 자동재생
let autoPlay = setInterval(() => {
    
    if(slideNumber == pager.length-1)
    {
        slideNumber = 0;
    }
    else
    {
        slideNumber++;
    }
    for(i=0; i<pager.length; i++)
    {
        pager[i].classList.remove("on");
    }
    pager[slideNumber].classList.add("on");
    view.style.marginLeft = -100 * slideNumber + "%";

}, 3000);

//멈춤버튼 클릭하면 자동재생 멈춤
stop.addEventListener("click",()=>{

    stop.style.display = "none";
    play.style.display = "block";
    clearInterval(autoPlay);

});

//재생버튼 클릭하면 다시 자동재생
play.addEventListener("click",()=>{

    stop.style.display = "block";
    play.style.display = "none";

    autoPlay = setInterval(() => {
        
        if(slideNumber == pager.length-1)
        {
            slideNumber = 0;
        }
        else
        {
            slideNumber++;
        }
        for(let i=0; i<pager.length; i++)
        {
            pager[i].classList.remove("on");
        }
        pager[slideNumber].classList.add("on");
        view.style.marginLeft = -100*slideNumber+"%";

    }, 3000);

});

//선택한 pager 배경색상 바뀌게
for(let i=0; i<pager.length; i++)
{
    pager[i].addEventListener("click",(e)=>{

        for(let j=0; j<pager.length; j++)
        {
            pager[j].classList.remove("on");
        }
        e.currentTarget.classList.add("on");
        
        slideNumber = e.currentTarget.getAttribute("data-index");
        view.style.marginLeft = -100 * slideNumber + "%";
    });
}

//tab메뉴

//탭메뉴 변수
const tabList = document.querySelectorAll(".tabSet > div");
const tabmenuList = document.querySelectorAll(".menu li");

for(let i=0; i<tabmenuList.length; i++)
{
    tabmenuList[i].addEventListener("click",(e)=>{

        e.preventDefault();

        for(let j=0; j<tabmenuList.length; j++)
        {
            tabmenuList[j].classList.remove("on");
            tabList[j].style.display = "none";
        }

        e.currentTarget.classList.add("on");
        tabList[i].style.display = "block";

    });
    
}








