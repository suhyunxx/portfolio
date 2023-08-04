$(function(){

    $(".ham").click(function(e){

        e.preventDefault();

        $(".mobile").css("left","0");

    });

    $(".mobile .close").click(function(e){

        e.preventDefault();

        $(".mobile").css("left","-100%");

    });

    $(".m_gnb > li").click(function(){

        //$(this).children(".m_sub_gnb").stop().slideToggle(700);
        // 누른 li태그의 높이값만 늘어났다가 줄어들었다가 함 다른 태그들 안 접어짐

    
        //$(this).children(".m_sub_gnb").stop().slideToggle(700);

        $(this).siblings().children(".m_sub_gnb").stop().slideUp(700);
        //펼쳐진 다른 서브메뉴들은 접어준다.

        $(this).children(".m_sub_gnb").stop().slideToggle(700);

        $(this).toggleClass("on");
        $(this).siblings().removeClass("on");

        
    });
    

    
});