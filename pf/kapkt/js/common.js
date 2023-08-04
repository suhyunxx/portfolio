//헤더 gnb 스크립트
const header = document.querySelector("header");
const gnb = document.querySelector(".gnb");
const depth2 = document.querySelectorAll(".depth2");
const bg = document.querySelector(".bg");

let gnbSet = [gnb, bg];

for(let i=0; i<gnbSet.length; i++)
{
    gnbSet[i].addEventListener("mouseover",function(){
        header.classList.add("on");
        bg.style.height = "384px";
        for(let i=0; i<depth2.length; i++)
        {
            depth2[i].style.display = "block";
        }
    });

    gnbSet[i].addEventListener("mouseout",function(){
        header.classList.remove("on");
        bg.style.height = "0";
        for(let i=0; i<depth2.length; i++)
        {
            depth2[i].style.display = "none";
        }
    });
}

function yearselect(){
    const year_all = document.querySelector(".year-all");
    year_all.classList.toggle("visible");
}

// function yearon(){
//     const year_current = document.querySelector(".year-select > a");
//     const year_all = document.querySelector(".year-all");
//     const year_list = document.querySelector(".year-all > li > a");
    
//     year_current.innerHTML = year_list.innerHTML();
    
// }

const history_tab = document.querySelectorAll(".history-tab");
const year_all = document.querySelector(".year-all");
const year_current = document.querySelector(".year-select > a");
const year_list = document.querySelectorAll(".year-all > li > a");

for(let i=0; i<year_list.length; i++)
{
    year_list[i].addEventListener("click",function(e){

        e.preventDefault();
        year_current.innerHTML = year_list[i].innerHTML;
        year_all.classList.remove("visible");

        for(let i=0; i<history_tab.length; i++)
        {
            history_tab[i].style.display = "none";
        }
        history_tab[i].style.display = "block";
    })

    

}


var para = document.location.href.split("#").reverse()[0]; 
//a태그로 넘긴 주소창의 tab3 파라미터값 가져오기

if(para === "tab3")
{
    year_current.innerHTML = year_list[2].innerHTML;

    for(let i=0; i<history_tab.length; i++)
        {
            history_tab[i].style.display = "none";
        }
    history_tab[2].style.display = "block";
}


// 페이지 인식 스크립트(제이쿼리)
var pageLocation = String(document.location).split('/');
fileName = pageLocation[pageLocation.length-1];
fileDoc = pageLocation[pageLocation.length-2];

console.log(fileName);
console.log(fileDoc);

// Activate current nav item
$('.depth2').find('li > a[href="' + 'http://suhyuniiii.dothome.co.kr/pf/kapkt/' + fileDoc + '/' + fileName + '"]').parent().addClass('on');

var test = $('.depth2').find('li > a[href="' + 'http://suhyuniiii.dothome.co.kr/pf/kapkt/' + fileDoc + '/' + fileName + '"]').parent();
console.log(test);


