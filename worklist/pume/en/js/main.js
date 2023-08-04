const items = document.querySelectorAll('.item');

const expand = (item, i) => {
    items.forEach((it, ind) => {
        if (i === ind) return;
        it.clicked = false;
    });
    gsap.to(items, {
        width: item.clicked ? '12vw' : '12vw',
        duration: 2,
        ease: 'elastic(1, .6)' });

    item.clicked = !item.clicked;
    gsap.to(item, {
        width: item.clicked ? '52vw' : '12vw',
        duration: 2.5,
        ease: 'elastic(1, .3)' });

};

items.forEach((item, i) => {
    item.clicked = false;
    item.addEventListener('click', () => expand(item, i));
});


for(let i=0; i<items.length; i++)
{
    items[i].addEventListener("click",function(e){
        
        for(let j=0; j<items.length; j++)
        {
            items[j].classList.remove("active");
        }
        
        items[i].classList.add("active");
    })
}

