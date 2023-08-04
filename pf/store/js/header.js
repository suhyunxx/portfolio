const header = document.querySelector("#header");
const gnbWrap = document.querySelector(".gnbWrap");
const depth1Li = document.querySelectorAll(".gnb > li");
const depth2 = document.querySelectorAll(".depth2");
const gnbBg = document.querySelector(".depthBg");

let listHeight = document.querySelector(".depth2 li").offsetHeight;
let count = 0;
let resultHeight = 0;
let depth2Arr = [];
let maxCheck = 0;
let paddingB = 20

for(let i=0; i<depth1Li.length; i++)
{
    depth1Li[i].addEventListener("mouseenter",function(){

        
        count = depth1Li[i].querySelectorAll(".depth2 li").length;

        resultHeight = count * listHeight;
        
        depth2[i].style.height = resultHeight + "px";
    
        
        header.classList.add("on");
        
    });
}

for(let i=0; i<depth1Li.length; i++)
{
    depth1Li[i].addEventListener("mouseleave",function(){

        
        depth2[i].style.height = "0px";
    
        
        header.classList.remove("on");
        
    });
}

//모바일메뉴
const mgnbList = document.querySelectorAll(".m_gnb > li");
const mDepth2 = document.querySelectorAll(".m_depth2");
let mlistlength = 0
let mlistHeight = document.querySelector(".m_depth2 > li").offsetHeight;

for(let i=0; i<mgnbList.length; i++)
{
    mgnbList[i].addEventListener("click",function(){

        if(mgnbList[i].classList.contains("on"))
        {
            mgnbList[i].classList.remove("on");
            mDepth2[i].style.height = "0px";
        }
        else 
        {
            //펼쳐져있는 상태에서 다른 메뉴 누르면 들어가게
            const openList = document.querySelectorAll(".m_gnb > li.on");

            for(let i=0; i<openList.length; i++)
            {
                openList[i].querySelector(".m_depth2").style.height = "0px";
                openList[i].classList.remove("on");
            }
            
            mgnbList[i].classList.add("on");
            mlistlength = mgnbList[i].querySelectorAll(".m_depth2 > li").length;
            let result = mlistlength * mlistHeight;
            mDepth2[i].style.height = result + "px";

            
        }

    });
    
}

const ham = document.querySelector(".ham");
const closebtn = document.querySelector(".close");
const mobile = document.querySelector(".mobileMenu");

ham.addEventListener("click",function(){

    mobile.style.left = "0";

});

closebtn.addEventListener("click",function(e){
    e.preventDefault();

    mobile.style.left = "-100%";
})



