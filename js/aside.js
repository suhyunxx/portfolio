
const side_nav = document.querySelector(".side_nav");
const about = document.querySelector(".about");
const project = document.querySelector(".project");
const side_nav_li = document.querySelectorAll(".side_nav ul > li");

window.addEventListener("scroll",function(){
    
    let sctop = window.scrollY;
    let aboutTop = about.offsetTop;
    let projectTop = project.offsetTop;
    
    for(let i=0; i<side_nav_li.length; i++)
    {
        side_nav_li[i].classList.remove("on");
    }
    
    if(sctop >= 0 && sctop < aboutTop)
    {
        side_nav.classList.add("vis-1");
        side_nav_li[0].classList.add("on");
    }
    else if(sctop >= aboutTop)
    {
        side_nav.classList.remove("vis-1");
    }
    
    if(sctop >= aboutTop && sctop < projectTop)
    {
        side_nav_li[1].classList.add("on");
    }
    
    else if(sctop >= projectTop)
    {
        side_nav_li[2].classList.add("on");    
    }

    
});
        
    
const vis = document.querySelector(".vis");

let arr = [vis,about,project];
for(let i=0; i<side_nav_li.length; i++)
{
    side_nav_li[i].addEventListener("click",function(e){

        e.preventDefault();
        console.log(arr[i].offsetTop);

        window.scrollTo({
            top: arr[i].offsetTop, 
            left:0, 
            behavior:'smooth'
        })
        
    });
}



//
////배열 변수
//let array = [];
//
//for(let i=0; i<aside_menu.length; i++)
//    {
////배열에 home, project, contact만 넣어주기(첫번째 li 제외)
//        array[i] = aside_menu[i];
//    }
////도메인 주소 뒤 "/..." 변수에 담아줌
//let location_ = window.location.pathname;
//
//if(location_ == "/index.php")
//    {
//        array[0].classList.add("on");
//    }
//else if(location_ == "/project_list.php" || location_ == "/project_view.php")
//    {
//        for(let i=0; i<aside_menu.length; i++)
//            {
//                array[i].classList.remove("on");
//            }
//        array[1].classList.add("on");
//    }