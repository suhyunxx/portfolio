//aos 시작구문
AOS.init();


const visuals = document.querySelectorAll("#container > div");
const sider = document.querySelectorAll(".sider > li");

let movePoint = 0;

//////////윈도우에 달린 스크롤기능 함수로 묶어줌
window.addEventListener("scroll",secScroll);

//////////스크롤 기능 함수
function secScroll()
{
    for(let i=0; i<sider.length; i++)
    {
        sider[i].classList.remove("on");
    }

    let scTop = window.scrollY; //스크롤바 위치값
    //스크롤바 위치값 소숫점 정리
    //소숫점 올림처리
    scTop = Math.ceil(scTop);

    //해당 구역에서 sider 색상 변경
    if(scTop >= visuals[0].offsetTop && scTop < visuals[1].offsetTop)
    {
        sider[0].classList.add("on");
    }
    else if(scTop >= visuals[1].offsetTop && scTop < visuals[2].offsetTop)
    {
        sider[1].classList.add("on");
    }
    else if(scTop >= visuals[2].offsetTop && scTop < visuals[3].offsetTop)
    {
        sider[2].classList.add("on");
    }
    else if(scTop >= visuals[3].offsetTop)
    {
        sider[3].classList.add("on");
    }

}


//버튼을 클릭하면 버튼과 해당하는 순번인 visual의 offsetTop 값으로 스크롤바가 움직임
for(let i=0; i<sider.length; i++)
{
    sider[i].addEventListener("click",(e)=>{

        e.preventDefault(); //a태그 기본기능 중지

        let visualOffset = visuals[i].offsetTop; //visual의 시작 위치값

        window.scrollTo({
            top:visualOffset,
            left:0,
            behavior:"smooth"

        });

    });
}

const footer = document.querySelector("#footer");
let wheeIndex = 0; 

/////////////컨테이너들한테 달린 휠기능 함수로 묶어줌
//휠 올리고 내렸을 때 스크롤이 현재 화면의 이전, 다음 화면의 offsetTop 값으로 이동
for(let i=0; i<visuals.length; i++)
{
    visuals[i].addEventListener("wheel",wheelScroll); 
}

//////////휠기능 함수
function wheelScroll(e)
{
    wheeIndex = e.currentTarget.getAttribute("data-wheel"); //각 visual에 달아놓은 data-wheel 값 가져오기

    e.preventDefault(); //휠 기본기능 중지

    if(e.wheelDelta > 0) //휠을 올렸을 때
    {
        //풋터에서 휠을 올리면 마지막 구역의 시작 위치로 올라간다
        if(movePoint == footer.offsetTop) //movePoint 값이 풋터의 시작위치 값이면
        {
            movePoint = visuals[wheeIndex].offsetTop; //visual의 마지막 구역인 visuals[3] 시작 위치 값으로 이동
        }   

        else if(movePoint == visuals[0].offsetTop) //휠한 구역이 visual[0]일 때 해당 구역 그대로(이전 visual이 없기 때문에 오류 잡기 위한 코드)
        {  
           movePoint = visuals[wheeIndex].offsetTop; 
        }

        else
        {
            movePoint = e.currentTarget.previousElementSibling.offsetTop; //현재 휠한 구역의 이전 visual의 시작 위치 값으로 이동
        }
        

    }
    else if(e.wheelDelta < 0) //휠을 내렸을 때
    {
        //마지막 구역에서 휠을 내리면 풋터 시작하는 위치로 내려간다.
        
        if(wheeIndex == 3) //현재 휠한 구역이 visual의 마지막 구역이면
        {
            movePoint = footer.offsetTop; //풋터의 시작 위치 값으로 이동
        }
        else
        {
            movePoint = e.currentTarget.nextElementSibling.offsetTop; //현재 휠한 구역의 다음 visual 시작 위치 값으로 이동
        }
       
    }

    window.scrollTo({
        top:movePoint, //movePoint 로 이동
        left:0,
        behavior:"smooth"
    });
}


//화면 크기가 640 이하일 때는 스크롤과 휠 이벤트 기능이 제거
//화면 크기가 641 이상일 때는 스크롤과 휠 이벤트 기능이 다시 동작

//화면크기가 바뀌었을 때 640이하에서는 스크롤,휠 제거
                       //641이상부터는 스크롤,휠 추가
window.addEventListener("resize",()=>{
   screenCheck(); //secreenCheck 함수
});

//화면이 로드되었을 때 창 크기가 640이하에서는 스크롤, 휠 제거
                              // 641이상부터는 스크롤, 휠 추가
window.addEventListener("load",()=>{
    screenCheck();
});

const siderWrap = document.querySelector(".sider");

//중복되는 코드들 함수로 묶어줌
function screenCheck()
{
    //matchMedia는 true/false
    if(matchMedia("screen and (max-width: 640px)").matches) { //화면이 640 이하일 때

        window.removeEventListener("scroll",secScroll); //스크롤함수 제거
    
        //각 visual에 달린 이벤트니까 반복문으로 제거
        for(let i=0; i<visuals.length; i++)
        {
            visuals[i].removeEventListener("wheel",wheelScroll); //휠함수 제거
        }

        //640 이하일 때 페이저 버튼 사라짐
        siderWrap.style.display = "none";
    
    } 
    else { //화면이 641 이상일 때

        window.addEventListener("scroll",secScroll); //스크롤함수 추가
    
        //각 visual에 달린 이벤트니까 반복문으로 추가
        for(let i=0; i<visuals.length; i++)
        {
            visuals[i].addEventListener("wheel",wheelScroll); //휠함수 추가
        }

        //641 이상일 때 페이저 버튼 보이게
        siderWrap.style.display = "block";
    }
}
