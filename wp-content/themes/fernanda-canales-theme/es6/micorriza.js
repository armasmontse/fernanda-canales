const $ = jQuery;
const w = $(window);

// Navbar sticky al hacer scroll
const sticky = $('.archive__box.header');
const navbar = $('.navbar__sidebar');
var stickyHeight;
var navbarHeight;

//Menu
const menu = $('#header__navbar__JS');
const wrapper = $('.archive__wrapper');
const btnCerrar = $('.header__menu_JS');
const btnCerrarOpen = $('.open');
const btnCerrarClose = $('.close');
var open = false;

var navbarOpen = $('.header__navbar.show');


function loadSticky() {
    stickyHeight = sticky.height();
    navbarHeight = navbar.height();
}

//Desktop sticky menu
function makeSticky() {
     if (sticky.lenght != 0) {
          if (w.scrollTop() > (stickyHeight - 20)) {
               navbar.addClass('navbar__fixed');
          }else {
               navbar.removeClass('navbar__fixed');
          }
     }

}

//Movil sticky menu
function makeStickymovil() {
	if (sticky.lenght != 0) {
		if (w.scrollTop() > (stickyHeight)) {
		     navbar.addClass('navbar__fixed');
			$('.archive__box.content').addClass('margTop20');

		}else {
		     navbar.removeClass('navbar__fixed');
			$('.archive__box.content').removeClass('margTop20');
		}
	}

}

//Movil Abierto
function makeStickymovilOpen() {

	if (sticky.lenght != 0) {
		if (w.scrollTop() > (stickyHeight + 30)) {
		     navbar.addClass('navbar__fixed');
			// $('.archive__box.content').addClass('margTop20');

		}else {
		     navbar.removeClass('navbar__fixed');
			// $('.archive__box.content').removeClass('margTop20');
		}
	}

}

$(document).ready(function() {

    loadSticky();

	// S l i d e r   H o m e - N o   b o r r a r
	new Swiper('.swiper-container', {
		slidesPerView: 1,
		loop: true,
		spaceBetween: 30,
		centeredSlides: true,
		effect: 'fade',
		autoplay: {
			delay: 2000,
			disableOnInteraction: false,
		}
	});


	btnCerrar.on('click', function() {

		if(open) {
			menu.removeClass('show');
			wrapper.addClass('wrapper-min');
			btnCerrarOpen.addClass('view');
			btnCerrarClose.removeClass('view');
			open = false;
		}else {
			menu.addClass('show');
			wrapper.removeClass('wrapper-min');
			btnCerrarOpen.removeClass('view');
			btnCerrarClose.addClass('view');
			open = true;
		}

	});
})


w.load(function() {

	const gallery = $('.slider');

    gallery.slick({
		autoplay: false,
		autoplaySpeed: 1000,
		dots: false,
		arrows: true,
	});

	gallery.on('swipe', function(){
        let currentSlide = gallery.slick('slickCurrentSlide');
        $('#currentSlide').text(currentSlide + 1);
    });

})

w.resize(function() {
    loadSticky();
})

w.scroll(function() {

	function navfix_responsive(breakSm) {
		if (!breakSm.matches) {
			makeSticky();
		} else {
			//nav movil
			makeStickymovil();
			//Cerrar menu al hacer scroll en movil
			menu.removeClass('show');
			wrapper.addClass('wrapper-min');
			btnCerrarOpen.addClass('view');
			btnCerrarClose.removeClass('view');
			open = false;
		}
	}

    var breakSm = window.matchMedia("(max-width: 610px)")
    navfix_responsive(breakSm)
    breakSm.addListener(navfix_responsive)
})
