/////////snb
const allpage = document.querySelector("#svis .snbWrap .center .snb .allpage");
const listpage = document.querySelector("#svis .snbWrap .center .snb ul");
const angleicon1 = document.querySelector("#svis .snbWrap .center .snb .angleicon i");
const snbSet = [allpage, listpage];

for(let i=0; i<snbSet.length; i++)
{
    snbSet[i].addEventListener("mouseover",function(){
        listpage.style.display = "block";
        angleicon1.classList.add("active");
    });
}

for(let i=0; i<snbSet.length; i++)
{
    snbSet[i].addEventListener("mouseout",function(){
        listpage.style.display = "none";
        angleicon1.classList.remove("active");
    });
}
