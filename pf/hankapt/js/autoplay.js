const autostop = document.querySelector(".autostop");
const autoplay = document.querySelector(".autoplay");

autostop.addEventListener("click",function(){
    swiper.autoplay.stop();
    autoplay.style.display = "block";
    autostop.style.display = "none";
});
autoplay.addEventListener("click",function(){
    swiper.autoplay.start();
    autoplay.style.display = "none";
    autostop.style.display = "block";
});