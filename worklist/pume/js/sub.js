//서브페이지 snb
const snb1 = document.querySelector(".snb1");
const snb2 = document.querySelector(".snb2");
const snbbox1 = document.querySelector(".snbbox1");
const snbbox2 = document.querySelector(".snbbox2");

let count2 = 0;
let resultheight2 = 0;
let num1 = 0;
let num2 = 0;


//클릭할 때마다 snb1, snb2 넘버를 각각 세기 위해 클릭이벤트를 각각 걸어줌(num1, num2)

snb1.addEventListener("click",function(e){

    e.preventDefault();

    num1+=1;

    if(num1%2 == 1) //처음클릭했을 때
    {
        snbshow();

        snbbox1.style.height = resultheight2 + 20 + "px";
        snb1.classList.add("on");
    }
    else //다시 클릭했을 때
    {
        snbbox1.style.height = 0 + "px";
        snb1.classList.remove("on");
    }

});

snb2.addEventListener("click",function(e){

    e.preventDefault();

    num2+=1;

    if(num2%2 == 1) //클릭했을 때
    {
        snbshow2();

        snbbox2.style.height = resultheight2 + 20 + "px";
        snb2.classList.add("on");
    }
    else //다시 클릭했을 때
    {
        snbbox2.style.height = 0 + "px";
        snb2.classList.remove("on");
    }

});


function snbshow(){

    let listheight = document.querySelector(".snbbox > li").offsetHeight;
    count2 = snb1.querySelectorAll(".snbbox li").length;

    resultheight2 = count2 * listheight;

}

function snbshow2(){

    let listheight = document.querySelector(".snbbox > li").offsetHeight;
    count2 = snb2.querySelectorAll(".snbbox li").length;

    resultheight2 = count2 * listheight;

}



// 페이지 인식 스크립트(snb)
var pageLocation2 = String(document.location).split('/');
fileName2 = pageLocation[pageLocation.length-1];
fileDoc2 = pageLocation[pageLocation.length-2];

//snbbox1 active
const rla = document.querySelectorAll(".snbbox1 > li");

let status1 = pageLocation2.indexOf('company');
let status2 = pageLocation2.indexOf('operation');
let status3 = pageLocation2.indexOf('board');
let status4 = pageLocation2.indexOf('contact');

if(status1 != -1)
{
    for(let i=0; i<rla.length; i++)
    {
        rla[0].classList.add("on");
    }
    
}

if(status2 != -1)
{
    for(let i=0; i<rla.length; i++)
    {
        rla[1].classList.add("on");
    }

}

if(status3 != -1)
{
    for(let i=0; i<rla.length; i++)
    {
        rla[2].classList.add("on");
    }

}


if(status4 != -1)
{
    for(let i=0; i<rla.length; i++)
    {
        rla[3].classList.add("on");
    }

}

// Activate current nav item
$('.snbbox2').find('li > a[href="' + 'http://suhyuniiii.dothome.co.kr/worklist/pume/' + fileDoc2 + '/' + fileName2 + '"]').parent().addClass('on');

var test = $('.snbbox2').find('li > a[href="' + 'http://suhyuniiii.dothome.co.kr/worklist/pume/' + fileDoc2 + '/' + fileName2 + '"]').parent();

