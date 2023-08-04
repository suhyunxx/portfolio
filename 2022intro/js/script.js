//isotope api - jquerye
$(function(){

    $('.style').imagesLoaded(function() {
        // init Isotope after all images have loaded
        $('.style').isotope({
            itemSelector: '.style-item',
            layoutMode: 'fitRows',
        });

    });

    $(".tab > li").click(function(e){

        e.preventDefault();

        $(".tab > li").removeClass("on");
        $(this).addClass("on");

        let filterValue = $(this).attr('data-filter');
        $(".style").isotope({filter: filterValue});

    });

});

//contact 폼검증
const userform = document.querySelector("#userform");
const name = document.querySelector("#name");
const phone = document.querySelector("#phone");
const content = document.querySelector("#content");
const checkneed = document.querySelector("#checkneed");

//에러메시지 출력 함수
function success(input)
{
    input.className = "success";
}

function error(input,msg)
{
    input.className = "error";
    input.nextElementSibling.innerHTML = msg;
}

userform.addEventListener("submit",function(e){
    
    var reg=/^[0-9]+$/; //숫자만 입력했는지 검증할 정규표현식
    var inputNum=$("input[name=phone]").val();
    var canSubmit=reg.test(inputNum);

    e.preventDefault();
    
//    성함
    if(name.value === "")
    {
        error(name,"성함이 입력되지 않았습니다.");
    }
    else
    {
        success(name);
    }
    
//    연락처
    if(phone.value === "")
    {
        error(phone,"연락처가 입력되지 않았습니다.");
    }
    else if(canSubmit === false) //숫자만 입력하지 않았을 경우
    {        
        error(phone,"숫자만 입력하세요.");
    }
    else
    {
        success(phone);
    }
    
//    문의내용                      
    if(content.value === "")
    {
        error(content,"문의내용이 입력되지 않았습니다.");
    }
    else
    {
        success(content);
    }
    
    if(checkneed.checked === false)
    {
        error(checkneed,"개인정보수집에 동의해주세요.");
    }
    else
    {
        success(checkneed);
    }
    
    if(name.value !== "" && phone.value !== "" && canSubmit === true && checkneed.checked === true)
    {

        userform.submit();
            
    }
    
});


//타이핑효과
const typingtag = document.querySelector(".typing");
let text = "SUHYUN'S\nPORTFOLIO";
let viewText = "";
let i=0;

let autoTyping = setInterval(typing,300);

function typing(){

    viewText = text[i++];

    if(viewText === "\n")
    {
        typingtag.innerHTML += "<br/>";
    }
    else
    {
        typingtag.innerHTML += viewText;
    }

    if(i > text.length-1)
    {
        clearInterval(autoTyping);

        setTimeout(function(){

            typingtag.innerHTML = "";
            i=0;
            autoTyping = setInterval(typing,300);
        },2000);
    }

};

//클릭하면 해당 컨테이너로 이동
const gnb = document.querySelectorAll(".gnb > li");
const visuals = document.querySelectorAll("#container > div");

for(let i=0; i<gnb.length; i++)
{
    gnb[i].addEventListener("click",(e)=>{

        e.preventDefault();

        let visualOffsettop = visuals[i].offsetTop;
        window.scrollTo
        ({
            top:visualOffsettop,
            left:0,
            behavior:"smooth"
        });
        
    });
}

window.addEventListener("scroll",function(){
    
    for(let j=0; j<gnb.length; j++)
    {
        gnb[j].classList.remove("on");
    }

    let sctop = window.scrollY;
    
    for(let i=0; i<visuals.length; i++)
    {
        if(sctop >= visuals[0].offsetTop && sctop < visuals[1].offsetTop)
        {
           gnb[0].classList.add("on");
        }
        else if(sctop >= visuals[1].offsetTop && sctop < visuals[2].offsetTop)
        {
           gnb[1].classList.add("on");
        }
        else if(sctop >= visuals[2].offsetTop && sctop < visuals[3].offsetTop)
        {
           gnb[2].classList.add("on");
        }
        else if(sctop >= visuals[4].offsetTop)
        {
           gnb[3].classList.add("on");
        }
    }
    
});


//시안 팝업창
const sian = document.querySelectorAll(".sian");
const popup = document.querySelectorAll(".popup");
const closebtn = document.querySelectorAll(".closebtn");


for(let i=0; i<sian.length; i++)
{
    sian[i].addEventListener("click",function(e){
       e.preventDefault();

        popup[i].classList.add("on");
        document.body.style.overflow = "hidden";
    });
}

for(let i=0; i<closebtn.length; i++)
{
    closebtn[i].addEventListener("click",function(e){
       e.preventDefault();

        popup[i].classList.remove("on");
        document.body.style.overflow = "unset";
    });
}
































