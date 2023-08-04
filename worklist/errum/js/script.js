feather.replace()
AOS.init();
const depth1Li = document.querySelectorAll(".gnb > li");
const depth2 = document.querySelectorAll(".depth2");


for(let i=0; i<depth1Li.length; i++)
{
    depth1Li[i].addEventListener("mouseenter",function(e){

        depth2[i].classList.add("on");

    });

    depth1Li[i].addEventListener("mouseleave",function(){

        depth2[i].classList.remove("on");

    });
}

function total_menu_open(){
    
    let total_close = document.querySelector(".close");
    let total_menu = document.querySelector(".total-menu");
    let total_open = document.querySelector(".total-open");
    
    total_menu.style.display="block";
    
}

function total_menu_close(){

    let total_close = document.querySelector(".close");
    let total_menu = document.querySelector(".total-menu");
    let total_open = document.querySelector(".total-open");

    total_menu.style.display="none";
}


