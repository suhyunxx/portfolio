const tab_menu = document.querySelectorAll(".tab_menu > li");
const tab_list = document.querySelectorAll(".tab_list")


for(let i=0; i<tab_menu.length; i++)
{
    tab_menu[i].addEventListener("click",function(e){
        
        e.preventDefault();
       
        for(let j=0; j<tab_list.length; j++)
        {
            tab_menu[j].classList.remove("on");
            tab_list[j].classList.remove("on");
        }
        tab_menu[i].classList.add("on");
        tab_list[i].classList.add("on");
        
    });
}







