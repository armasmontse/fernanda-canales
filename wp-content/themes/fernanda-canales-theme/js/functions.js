/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;
/******/
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			exports: {},
/******/ 			id: moduleId,
/******/ 			loaded: false
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.loaded = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "./js/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports) {

	'use strict';
	
	var $ = jQuery;
	var w = $(window);
	
	// Navbar sticky al hacer scroll
	var sticky = $('.archive__box.header');
	var navbar = $('.navbar__sidebar');
	var stickyHeight;
	var navbarHeight;
	
	//Menu
	var menu = $('#header__navbar__JS');
	var wrapper = $('.archive__wrapper');
	var btnCerrar = $('.header__menu_JS');
	var btnCerrarOpen = $('.open');
	var btnCerrarClose = $('.close');
	var open = false;
	
	var navbarOpen = $('.header__navbar.show');
	
	function loadSticky() {
		stickyHeight = sticky.height();
		navbarHeight = navbar.height();
	}
	
	//Desktop sticky menu
	function makeSticky() {
		if (sticky.lenght != 0) {
			if (w.scrollTop() > stickyHeight - 20) {
				navbar.addClass('navbar__fixed');
			} else {
				navbar.removeClass('navbar__fixed');
			}
		}
	}
	
	//Movil sticky menu
	function makeStickymovil() {
		if (sticky.lenght != 0) {
			if (w.scrollTop() > stickyHeight) {
				navbar.addClass('navbar__fixed');
				$('.archive__box.content').addClass('margTop20');
			} else {
				navbar.removeClass('navbar__fixed');
				$('.archive__box.content').removeClass('margTop20');
			}
		}
	}
	
	//Movil Abierto
	function makeStickymovilOpen() {
	
		if (sticky.lenght != 0) {
			if (w.scrollTop() > stickyHeight + 30) {
				navbar.addClass('navbar__fixed');
				// $('.archive__box.content').addClass('margTop20');
			} else {
				navbar.removeClass('navbar__fixed');
				// $('.archive__box.content').removeClass('margTop20');
			}
		}
	}
	
	$(document).ready(function () {
	
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
				disableOnInteraction: false
			}
		});
	
		btnCerrar.on('click', function () {
	
			if (open) {
				menu.removeClass('show');
				wrapper.addClass('wrapper-min');
				btnCerrarOpen.addClass('view');
				btnCerrarClose.removeClass('view');
				open = false;
			} else {
				menu.addClass('show');
				wrapper.removeClass('wrapper-min');
				btnCerrarOpen.removeClass('view');
				btnCerrarClose.addClass('view');
				open = true;
			}
		});
	});
	
	w.load(function () {
	
		var gallery = $('.slider');
	
		gallery.slick({
			autoplay: false,
			autoplaySpeed: 1000,
			dots: false,
			arrows: true
		});
	
		gallery.on('swipe', function () {
			var currentSlide = gallery.slick('slickCurrentSlide');
			$('#currentSlide').text(currentSlide + 1);
		});
	});
	
	w.resize(function () {
		loadSticky();
	});
	
	w.scroll(function () {
	
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
	
		var breakSm = window.matchMedia("(max-width: 610px)");
		navfix_responsive(breakSm);
		breakSm.addListener(navfix_responsive);
	});

/***/ })
/******/ ]);
//# sourceMappingURL=functions.js.map