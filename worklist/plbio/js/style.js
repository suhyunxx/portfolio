AOS.init();

const header = document.querySelector("header");
const vis = document.querySelector(".vis");

const mobile_btn = document.querySelector(".mobile_btn");
const mobile_menu = document.querySelector(".mobile_menu");

let visheight = vis.offsetHeight;

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


})

const gnb_li = document.querySelectorAll(".gnb > li");
const gnb_li_a = document.querySelectorAll(".gnb > li > a");

const mgnb_li_a = document.querySelectorAll(".mobile_menu > ul > li");

const vision = document.querySelector(".vision");
const tech = document.querySelector(".tech");
const map = document.querySelector(".map");

let divarray = [vision,tech,map];

for(let i=0; i<gnb_li.length; i++)
{
    gnb_li[i].addEventListener("click",function(e){
        
        e.preventDefault();
       
        window.scrollTo(
        {
            top:divarray[i].offsetTop,
            left:0,
            behavior : "smooth"
        });
    });
}

for(let i=0; i<mgnb_li_a.length; i++)
{
    mgnb_li_a[i].addEventListener("click",function(e){
        
        e.preventDefault();
       
        window.scrollTo(
        {
            top:divarray[i].offsetTop,
            left:0,
            behavior : "smooth"
        });
    });
}

let visiontop = vision.offsetTop;
let techtop = vision.offsetTop;
let maptop = map.offsetTop-50;
console.log(maptop);

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





