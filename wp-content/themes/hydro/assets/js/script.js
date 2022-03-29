(function($){
	/* Sliders */
	var swiper = new Swiper('.bullsbrook-slider .swiper-container', {
		lazy: true,
		loop: true,
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
		},
		autoplay: {
			delay: 7000,
			disableOnInteraction: false,
		},
		autoHeight: true,
	});
	
	/* Parrallaxes */
	var timer;
		$(window).bind('resize', function() {
		clearTimeout(timer);
		timer = setTimeout(function(){ $(window).resize(); }, 250);
	});

	
	/* Header */
	// $("header").clone().addClass('fixed').insertAfter("header");

	$('.fixed .showmenu').click(function(){
		// alert('a');
		var parent = $(this).parent().parent().parent().parent().parent();
		var child = parent.find('.top-menu #navbar-bullsbrook');
		child.toggleClass('show');
	});

	var sticky = $('.header-banner').height();
	window.onscroll = function(){
		if (window.pageYOffset >= sticky) {
			$("header.fixed").addClass('navbar-fixed-top');
		} else{
			$("header.fixed").removeClass('navbar-fixed-top');
		}
	};

	/* Mobile Superfish */
	$('.top-menu .menu .menu-item-has-children').append('<div class="mobnav-subarrow d-inline-block d-lg-none"><span class="fa fa-caret-down"></span></div>').find('ul').addClass('collapse');

	$('.mobnav-subarrow').click(function(){
		$('.fa', this).toggleClass("fa-caret-down").toggleClass("fa-caret-up");
		// $(this).siblings('ul').toggleClass('menu-show');
		$(this).siblings('ul').collapse('toggle');
	});

	$('.navbar-toggler').on('click', function(){
	    $('#custom-navbar').toggleClass('show');
	});

})(jQuery)
