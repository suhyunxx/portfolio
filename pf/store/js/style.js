//aos 시작구문
AOS.init();
//슬라이더
//버튼 누르면 슬라이드 넘어가는 기능
const pager = document.querySelectorAll(".pager > li");
const view = document.querySelector(".view");
const stopbtn = document.querySelector(".stop");
const playbtn = document.querySelector(".play");


for(let i=0; i<pager.length; i++)
{
    pager[i].addEventListener("click",(e)=>{

        e.preventDefault();
        
        let pagerIndex = pager[i].getAttribute("data-index");
        console.log(pagerIndex);

        for(let j=0; j<pager.length; j++)
        {
            pager[j].classList.remove("on");
        }
        e.currentTarget.classList.add("on");
        view.style.marginLeft = -pagerIndex * 100 + "%";
        
    });
}

let pagerIndex = 0;

//슬라이드 자동재생
let autoplay = setInterval(() => {

    

    if(pagerIndex == pager.length-1)
    {
        pagerIndex = 0;
    }
    else
    {
        pagerIndex++;
    }
    for(let j=0; j<pager.length; j++)
    {
        pager[j].classList.remove("on");
    }
    pager[pagerIndex].classList.add("on");
    view.style.marginLeft = -pagerIndex * 100 + "%";
    
}, 3000);

stopbtn.addEventListener("click",()=>{

    stopbtn.style.display = "none";
    playbtn.style.display = "block";
    clearInterval(autoplay);
});

playbtn.addEventListener("click",()=>{

    stopbtn.style.display = "block";
    playbtn.style.display = "none";

    autoplay = setInterval(() => {

    

        if(pagerIndex == pager.length-1)
        {
            pagerIndex = 0;
        }
        else
        {
            pagerIndex++;
        }
        for(let j=0; j<pager.length; j++)
        {
            pager[j].classList.remove("on");
        }
        pager[pagerIndex].classList.add("on");
        view.style.marginLeft = -pagerIndex * 100 + "%";
        
    }, 3000);
    
});