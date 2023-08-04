const loc1 = document.querySelector(".loc1 > a");
const loc2 = document.querySelector(".loc2 > a");
const loc1_list = document.querySelector(".loc1_list");
const loc2_list = document.querySelector(".loc2_list");

let locArray = [loc1,loc2];
let loclistArray = [loc1_list,loc2_list];

let num1 = 0;
let num2 = 0;

//loc2_list.style.cssText = "display:block; opacity:1;";
loc1.addEventListener("click",function(e){
    e.preventDefault();

    loc1_list.classList.toggle("on");
    
    if(loc2_list.classList.contains("on") == true)
    {
        loc2_list.classList.remove("on");
    }

})

loc2.addEventListener("click",function(e){
    e.preventDefault();

    loc2_list.classList.toggle("on");

    if(loc1_list.classList.contains("on") == true)
    {
        loc1_list.classList.remove("on");
    }

})