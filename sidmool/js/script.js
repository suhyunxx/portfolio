//        gnb
        const depth1li = document.querySelectorAll(".gnb > li");
        const depth2 = document.querySelectorAll(".depth2");
        const depth2li = document.querySelectorAll(".depth2 > li");
        const depth3 = document.querySelectorAll(".depth3");
        
        for(let i=0; i<depth1li.length; i++)
            {
                depth1li[i].addEventListener("mouseenter",function(){
                    depth2[i].style.display = "block";
                })
                depth1li[i].addEventListener("mouseleave",function(){
                    depth2[i].style.display = "none";
                })
            }
        for(let j=0; j<depth2li.length; j++)
            {
                depth2li[j].addEventListener("mouseenter",function(e){
                   depth3[j].style.display = "block";
                   let parent1 = depth2li[j].parentNode;
                   parent1.style.boxShadow = "rgb(0,0,0,0.1) -7px 4px 11px -1px, rgb(0,0,0,0.06) -6px 7px 10px -1px;";
                
                });
                depth2li[j].addEventListener("mouseleave",function(){
                   depth3[j].style.display = "none"; 
                });
            }
        
        const tabBtn = document.querySelectorAll(".tabBtn > li");
        const tab = document.querySelectorAll(".tab > div");
        
        for(let i=0; i<tabBtn.length; i++)
            {
                tabBtn[i].addEventListener("click",function(e){
                    e.preventDefault();
                    for(let j=0; j<tabBtn.length; j++)
                        {
                            tabBtn[j].classList.remove("on");
                            tab[j].classList.remove("on");
                        }
                    tabBtn[i].classList.add("on");
                    tab[i].classList.add("on");
                })
            }
        
//        slider
        const view = document.querySelector(".review .slider .view");
        const slidelength = document.querySelectorAll(".review .slider .view > div").length;
        
        const left = document.querySelector(".nextprevbtn .left");
        const right = document.querySelector(".nextprevbtn .right");
        
        let slideNumber = 0;

        
        
        left.addEventListener("click",function(e){
            e.preventDefault();
            
            slideNumber == 0 ? slideNumber = slidelength - 1 : slideNumber--;
            console.log(slideNumber);
            view.style.marginLeft = (-100 * slideNumber) + "%";
            
        });
        
        right.addEventListener("click",function(e){
            e.preventDefault();
            
            slideNumber == slidelength - 1 ? slideNumber =  sliderNumber = 0 : slideNumber++;
            
            view.style.marginLeft = (-100 * slideNumber) + "%";
            
        });
        
        
        