$(function(){
    // init Isotope
    $('.grid').imagesLoaded(function() {
        // init Isotope after all images have loaded
        $('.grid').isotope({
            itemSelector: '.element-item',
            layoutMode: 'fitRows',
        });

    });


    $(".tabmenu > li").click(function(e){
        e.preventDefault();
        let filterValue = $(this).attr('data-filter');
        $('.grid').isotope({ filter: filterValue });
        $(".tabmenu > li").removeClass("on");
        $(this).addClass("on");
    });


    

});