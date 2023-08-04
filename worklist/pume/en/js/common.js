// 페이지 인식 스크립트(제이쿼리)
var pageLocation = String(document.location).split('/');
fileName = pageLocation[pageLocation.length-1];
fileDoc = pageLocation[pageLocation.length-2];

// Activate current nav item
$('.depth2').find('li > a[href="' + 'http://suhyuniiii.dothome.co.kr/worklist/pume/en/' + fileDoc + '/' + fileName + '"]').parent().addClass('on');


var test = $('.depth2').find('li > a[href="' + 'http://suhyuniiii.dothome.co.kr/worklist/pume/en/' + fileDoc + '/' + fileName + '"]').parent();

//햄버거 버튼
$(document).ready(function(){
    $(".hamburger").click(function(){
        $(this).toggleClass("is-active");
    });
});

//헤더
const header = document.querySelector("#header");
const gnb = document.querySelector(".gnb");
const depthbg = document.querySelector(".depthbg");

const gnbset = [gnb,depthbg];

for(let i=0; i<gnbset.length; i++)
{
    gnbset[i].addEventListener("mouseenter",function(){
        header.classList.add("active");
    });
    
    gnbset[i].addEventListener("mouseleave",function(){
        header.classList.remove("active");
    });
}


const ham_btn = document.querySelector(".ham_btn");
const mobile_gnb = document.querySelector(".mobile_gnb");

ham_btn.addEventListener("click",function(e){
    e.preventDefault();
    header.classList.toggle("mobile");
});


//모바일 메뉴
const depth1Li = document.querySelectorAll(".mobile_gnb .inner > ul > li");
const mobile_1 = document.querySelectorAll(".mobile_gnb .inner > ul > li > a");
const mobile_2 = document.querySelectorAll(".mobile_gnb .inner ul.depth2");
const mobile_2_li = document.querySelectorAll(".mobile_gnb .inner ul.depth2 > li");

let count = 0;
let resultHeight = 0;

for(let i=0; i<mobile_1.length; i++)
{
    mobile_1[i].addEventListener("click",function(e){
        e.preventDefault();
        
        for(let j=0; j<mobile_2.length; j++)
        {
            mobile_2[j].style.height = 0 + "px";
        }
        
//        li 갯수, height 값 곱해서 크기만큼만 늘어나게 작업
        let listHeight = document.querySelector(".mobile_gnb .depth2 li").offsetHeight;
        count = depth1Li[i].querySelectorAll(".mobile_gnb .depth2 li").length;
        
        resultHeight = count * listHeight;
        
        mobile_2[i].style.height = resultHeight + "px";
        
    });
}













