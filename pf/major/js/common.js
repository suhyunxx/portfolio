$(document).ready(function(){

/*
	// gnb복사 lnb 붙여넣기
	for (var i = 1; i < 5; i++) {
		$(".gnb .menu"+i).clone().appendTo("#lnb .depth2.sm"+ i);
	};	
*/
    AOS.init();

    const depth1Li = document.querySelectorAll(".gnb > li");
    const depth2 = document.querySelectorAll(".depth2");

    let count = 0;
    let resultHeight = 0;
    let depth2Arr = [];
    let maxCheck = 0;

    for(let i=0; i<depth1Li.length; i++)
    {
        depth1Li[i].addEventListener("mouseenter",function(e){
                
                let listHeight = document.querySelector(".depth2 li").offsetHeight;
                count = depth1Li[i].querySelectorAll(".depth2 li").length;
                resultHeight = count * listHeight;
                depth2Arr[i] = resultHeight;
                depth2[i].style.height = depth2Arr[i] + "px";
        
                if(maxCheck <= depth2Arr[i]) 
                {
                    maxCheck = depth2Arr[i];
                }
        
        });

        depth1Li[i].addEventListener("mouseleave",function(){

            depth2[i].style.height = 0 + "px";

        });
    }

    const movetop = document.querySelector(".movetop");

    movetop.addEventListener("click",function(e){

        e.preventDefault();

        window.scroll({
            top:0,
            left:0,
            behavior: 'smooth'
        });
    });

    const side_btn = document.querySelector(".side_btn");
    const side_barimg = document.querySelector(".side_btn a > img");
    const total_menu = document.querySelector("#total_menu");
    const right_banner = document.querySelector(".main_side");
    let num = 0;

    side_btn.addEventListener("click",function(e){

        e.preventDefault();

        total_menu.classList.toggle("on");
        side_btn.classList.toggle("on");

        num+=1;
        console.log(num);

        if(num%2 == 1) //클릭했을 때
        {
            side_barimg.src = "/img/common/hbg_on.png";
        }
        else
        {
            side_barimg.src = "/img/common/hbg.png";
        }
        
    });


        //footer 메인페이지, 컨설팅 분야에서만 위로
        const footer_y = document.querySelector(".footer_y");

        const footer = document.querySelector(".footer");
        let class_name = footer_y.classList.contains("on");
        let class_name2 = footer_y.classList.contains("on2");
    
        if(class_name == true)
        {
            footer.classList.add("up");
        }
        else if(class_name2 == true)
        {
            footer.classList.add("up2");
        }
        else
        {
            footer.classList.remove("up");
        }
    






});





