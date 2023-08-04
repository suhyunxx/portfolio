const localList = document.querySelectorAll(".localList > div");
const localimg = document.querySelectorAll(".right > div");
const tableList = document.querySelectorAll(".tableList .localTable");

for(let i=0; i<localList.length; i++)
{
    localList[i].addEventListener("click",function(e){

        e.preventDefault();

        for(let j=0; j<localList.length; j++)
        {
            localList[j].classList.remove("active");
            localimg[j].style.display = "none";
            tableList[j].style.display = "none";
        }
        localList[i].classList.add("active");
        localimg[i].style.display = "block";
        tableList[i].style.display = "table";
    });
}
