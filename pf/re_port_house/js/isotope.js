$(function(){

    $('.style').imagesLoaded(function() {
        // init Isotope after all images have loaded
        $('.style').isotope({
            itemSelector: '.style_item',
            layoutMode: 'fitRows',
        });

    });

    $(".tab > li").click(function(e){

        e.preventDefault();

        $(".tab > li").removeClass("on");
        $(this).addClass("on");

        let filterValue = $(this).attr('data-filter');
        $(".style").isotope({filter: filterValue});

    });

});