//헤더 스크롤 이벤트
const gnb = document.querySelectorAll(".gnb > li");
const m_gnb = document.querySelectorAll(".m_gnb > li");
const sec2 = document.querySelector("#sec2");
const sec3 = document.querySelector("#sec3");
const sec4 = document.querySelector("#sec4");
const sec5 = document.querySelector("#sec5");

const visuals = [sec2,sec3,sec4,sec5]

for(let i=0; i<gnb.length; i++)
{
    gnb[i].addEventListener("click",(e)=>{

        e.preventDefault();

        let visualtop = visuals[i].offsetTop - 180;

        window.scrollTo({
            top:visualtop,
            left:0,
            behavior:"smooth"
        });

    });
}

for(let i=0; i<gnb.length; i++)
{
    m_gnb[i].addEventListener("click",(e)=>{

        e.preventDefault();

        let visualtop = visuals[i].offsetTop - 320;

        window.scrollTo({
            top:visualtop,
            left:0,
            behavior:"smooth"
        });

    });
}


//모바일메뉴
const ham = document.querySelector("#header .ham");
const mobileMenu = document.querySelector("#header .mobile");
const m_close = document.querySelector(".mobile .m_close");
console.log(mobileMenu);

ham.addEventListener("click",(e)=>{

    e.preventDefault();

    mobileMenu.classList.add("on");

});

m_close.addEventListener("click",(e)=>{

    e.preventDefault();

    mobileMenu.classList.remove("on");

});



//sec3 스크롤이벤트
const sec1 = document.querySelector("#sec1");
const scrollMove = document.querySelector(".scrollMove");
const scrollStretch = document.querySelector("#sec3 .contents .center");

let sec1Top = sec1.offsetTop;
let sec4Top = sec4.offsetTop;

//원래 넓이값, left 값을 따로 변수에 넣어줌 -> 한 번 대입이 먼저 되기 때문
let originalwidth = 80;
let posLeft = 20;

//스크롤바의 위치값으로 이동 -> 휠이벤트가 아니라 스크롤이벤트 써도 됨
window.addEventListener("scroll",(e)=>{

    let sctop = window.scrollY;

    if(sctop > sec1Top && sctop < sec4Top)
    {
        //position left 값이 20px씩 이동
        scrollMove.style.left = posLeft + (sctop/5) + "px";
                    
        //width 값이 0.5%씩 늘어남
        scrollStretch.style.width = originalwidth + ((sctop/2)/100) + "%";    
        
    }
    

});

//sec4 탭메뉴
const tab = document.querySelectorAll(".registTab > li");
const viewdiv = document.querySelectorAll(".view > div");

for(let i=0; i<tab.length; i++)
{
    tab[i].addEventListener("click",(e)=>{

        e.preventDefault();

        for(let j=0; j<tab.length; j++)
        {
            viewdiv[j].style.display = "none";
            tab[j].classList.remove("on");
        }
        viewdiv[i].style.display = "block";
        e.currentTarget.classList.add("on");
    });
}

//sec5 탭메뉴
const tab2 = document.querySelectorAll("#sec5 .tab > li");
const sec5show = document.querySelectorAll(".tabs > div");
for(let i=0; i<tab2.length; i++)
{
    tab2[i].addEventListener("click",(e)=>{

        e.preventDefault();

        for(let j=0; j<tab2.length; j++)
        {
            tab2[j].classList.remove("on");
            sec5show[j].style.display = "none";
        }
        tab2[i].classList.add("on");
        sec5show[i].style.display = "block";
    });
}



//팝업창
const popupTab = document.querySelectorAll(".popup > li");
const modalWrap = document.querySelector(".modal");
const modal = document.querySelectorAll(".modal > div");
const closebtn = document.querySelectorAll(".close");

for(let i=0; i<popupTab.length; i++)
{
    popupTab[i].addEventListener("click",(e)=>{

        e.preventDefault();

        for(let j=0; j<popupTab.length; j++)
        {
            modal[j].style.display = "none";
        }
        modalWrap.style.display = "block";
        modal[i].style.display = "block";
    });
}

for(let i=0; i<closebtn.length; i++)
{
    closebtn[i].addEventListener("click",(e)=>{


        e.preventDefault();
        
        modalWrap.style.display = "none";
        modal[i].style.display = "none";
    });
}










