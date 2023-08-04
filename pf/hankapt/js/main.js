/////////header
const gnb = document.querySelector(".gnb");
const gnbli = document.querySelectorAll(".gnb > li");
const ham = document.querySelector(".gnb_open_btn");
const depth2 = document.querySelectorAll(".depth2");
const gnbBg = document.querySelector(".gnbBg");
const menuTrigger = document.querySelector('.menu-trigger');
const quick = document.querySelector(".quick");
const quickTop = document.querySelector(".quick .quick_top a");
const footer = document.querySelector("footer");

const headerSet = [gnb, gnbBg];

ham.addEventListener("click", function(e){

    for(let i=0; i<depth2.length; i++)
    {
        depth2[i].classList.toggle('active');
    }
    gnbBg.classList.toggle('active')
    menuTrigger.classList.toggle('active-1');
});

for(let i=0; i<headerSet.length; i++)
{
    headerSet[i].addEventListener("mouseover",function(){
        for(let i=0; i<depth2.length; i++)
        {
            depth2[i].classList.add('active');
            gnbBg.classList.add('active');
        }
        menuTrigger.classList.add('active-1');
    });
}

for(let i=0; i<headerSet.length; i++)
{
    headerSet[i].addEventListener("mouseout",function(){
        for(let i=0; i<depth2.length; i++)
        {
            depth2[i].classList.remove('active');
            gnbBg.classList.remove('active');
        }
        menuTrigger.classList.remove('active-1');
    });
}

// quickTop.addEventListener("click",function(e){

//     e.preventDefault();

//     window.scroll({
//         top:0,
//         left:0,
//         behavior: 'smooth'
//     });
// });

/////////main_tab

var main_tabmenu = document.querySelectorAll(".main_tabmenu > li");
var main_tabList = document.querySelectorAll(".main_tabList > div");

var ex_main_tabmenu = $('.main_tabmenu > li');
var ex_main_tabList = $('.main_tabList > div.mtL');

if(document.currentScript === undefined){
    ex_main_tabmenu.on('click', function(){
        $(this).addClass('active').siblings().removeClass('active');
        var tg = $(this);
        var idx = tg.index();
        ex_main_tabList.eq(idx).addClass('active').siblings().removeClass('active');
    });
}else{
    
    for(let i=0; i<main_tabmenu.length; i++)
    {
        main_tabmenu[i].addEventListener("click",function(e){

            e.preventDefault();

            for(let j=0; j<main_tabmenu.length; j++)
            {
                main_tabmenu[j].classList.remove("active");
                main_tabList[j].classList.remove("active");
    //            main_tabList[j].style.display = "none";
            }

            e.currentTarget.classList.add("active");
            main_tabList[i].classList.add("active");
    //        main_tabList[i].style.display = "block";
        });
    }
}

//const main_tabmenu = document.querySelectorAll(".main_tabmenu > li");
//const main_tabList = document.querySelectorAll(".main_tabList > div");
//
//for(let i=0; i<main_tabmenu.length; i++)
//{
//    main_tabmenu[i].addEventListener("click",function(e){
//
//        e.preventDefault();
//
//        for(let j=0; j<main_tabmenu.length; j++)
//        {
//            main_tabmenu[j].classList.remove("active");
//            main_tabList[j].style.display = "none";
//        }
//
//        e.currentTarget.classList.add("active");
//        main_tabList[i].style.display = "block";
//    });
//}

//var main_tabmenu = document.querySelectorAll(".main_tabmenu > li");
//var main_tabList = document.querySelectorAll(".main_tabList > div");
//
//for(let i=0; i<main_tabmenu.length; i++)
//{
//    main_tabmenu[i].addEventListener("click",function(e){
//
//        e.preventDefault();
//
//        for(let j=0; j<main_tabmenu.length; j++)
//        {
//            main_tabmenu[j].classList.remove("active");
//            main_tabList[j].classList.remove("active");
////            main_tabList[j].style.display = "none";
//        }
//
//        e.currentTarget.classList.add("active");
//        main_tabList[i].classList.add("active");
////        main_tabList[i].style.display = "block";
//    });
//}


////현재 메뉴 active
let gnbarray = document.querySelectorAll(".gnb > li");

//현재 url pathname
// let current = location.pathname.split("/");

// if (current.includes('introduce'))
// {
//     gnbarray[0].classList.add("active");
// }
// else if(current.includes('newnews'))
// {
//     gnbarray[1].classList.add("active");
// }
// else if(current.includes('reference'))
// {
//     gnbarray[2].classList.add("active");
// }
// else if(current.includes('training'))
// {
//     gnbarray[3].classList.add("active");
// }
// else if(current.includes('plaza'))
// {
//     gnbarray[4].classList.add("active");
// }
// else if(current.includes('localnews'))
// {
//     gnbarray[5].classList.add("active");
// }
// else if(current.includes('userjoin'))
// {
//     gnbarray[6].classList.add("active");
// }
// else
// {
//     for(let i=0; i<gnbarray.length; i++)
//     {
//         gnbarray[i].classList.remove("active");
//     }
// }

//개인정보처리방침
const privacypop = document.querySelector("#privacy_pop");
const privacyli = document.querySelector(".privacyli > a");
const privacyclose = document.querySelector("#privacy_pop .close");

privacyli.addEventListener("click",function(e){

    e.preventDefault();

    privacypop.classList.add("on");

});

privacyclose.addEventListener("click",function(e){

    e.preventDefault();

    privacypop.classList.remove("on");

});
