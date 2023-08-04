const currentpage = document.querySelector("#svis .snbWrap .center .currentpage");
const listpage2 = document.querySelector("#svis .snbWrap .center .snb2 ul");
const angleicon2 = document.querySelector("#svis .snbWrap .center .snb2 .angleicon i");

const snb2Set = [currentpage, listpage2];


for(let i=0; i<snb2Set.length; i++)
{
    snb2Set[i].addEventListener("mouseover",function(){
        listpage2.style.display = "block";
        angleicon2.classList.add("active");
    });
}

for(let i=0; i<snb2Set.length; i++)
{
    snb2Set[i].addEventListener("mouseout",function(){
        listpage2.style.display = "none";
        angleicon2.classList.remove("active");
    });
}
