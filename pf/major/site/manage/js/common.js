$(function () {
	// left menu
	$('#leftMenu .scrollbox.scrollbar-inner').scrollbar();
	
  $('header .menu > ul > li').each(function() {
    $(this).on('mouseenter', function() {
  		$(this).addClass('on');
  	});
  	$(this).on('mouseleave', function() {
  		$(this).removeClass('on');
  	});
  });
  $('#container #leftMenu .scrollbox > ul > li').each(function() {
  	var list = $(this);
	  var btn = list.find('> a');
	  var depth = list.find('> ul');
    btn.on("click", function(e) {
    	e.preventDefault(); //a 태그 막기	
	    if (!depth.is(':visible')) {
	      $('#container #leftMenu .scrollbox > ul > li > ul').stop().slideUp();
	      depth.stop().slideDown();
	      $('#container #leftMenu .scrollbox > ul > li').removeClass('on');
	    	btn.parent().addClass('on');
	    } else {
	    	btn.parent().removeClass('on');
	      $('#container #leftMenu .scrollbox > ul > li > ul').stop().slideUp();
	    };
	  });
	});
	
	//animation
	var $section = $('.ani'),
	bodyScroll, windowHeight;

	function sectionAni(){
		bodyScroll = $(document).scrollTop(),
		windowHeight = $(window).height() / 1.15;

		$section.each(function(){
			if(bodyScroll >= $(this).offset().top + 80 - windowHeight && bodyScroll < $(this).offset().top + $(this).height()){
				$(this).addClass('subOn');
			}else{
			}
		});
	}
	$(function(){
		sectionAni();
	});
	$(window).on('scroll', function(){
		sectionAni();
	});	

});