/**
 * skip-link-focus-fix.js
 *
 * Helps with accessibility for keyboard only users.
 *
 * Learn more: https://github.com/Automattic/_s/pull/136
 */
(function () {
	var isWebkit = navigator.userAgent.toLowerCase().indexOf('webkit') > -1,
		isOpera = navigator.userAgent.toLowerCase().indexOf('opera') > -1,
		isIE = navigator.userAgent.toLowerCase().indexOf('msie') > -1;

	if ((isWebkit || isOpera || isIE) && document.getElementById && window.addEventListener) {
		window.addEventListener('hashchange', function () {
			var id = location.hash.substring(1),
				element;

			if (!(/^[A-z0-9_-]+$/.test(id))) {
				return;
			}

			element = document.getElementById(id);

			if (element) {
				if (!(/^(?:a|select|input|button|textarea)$/i.test(element.tagName))) {
					element.tabIndex = -1;
				}

				element.focus();
			}
		}, false);
	}
})();

var $ = jQuery;
$(document).ready(function(){
    //$('.how-it-works').on('click touchstart', function(){

   $('.how-it-works').click(function(){
	window.scroll({
		top: 0,
		behavior: 'smooth'
	})
});

   $('.media').click(function(){
	window.scroll({
		top: 370,
		behavior: 'smooth'
	})
});

   $('.video-production').click(function(){
	window.scroll({
		top: 755,
		behavior: 'smooth'
	})
});

   $('.workshop').click(function(){
	window.scroll({
		top: 1890,
		behavior: 'smooth'
	})
});

   $('.arrow-top').click(function(){
	window.scroll({
		top: 0,
		behavior: 'smooth' 
	})
});

   $('.main-carousel').flickity({
		// options
		cellAlign: 'left',
		wrapAround: true,
		contain: true,
		freeScroll: false,
	
		// autoPlay: 1500


	});

$('.page-numbers').on('click', function(){
    $('.page-numbers').find().closest('span').removeClass('selected');
    $(this).addClass('selected');
});

$('.paginate').on('click', 'a', function(){
	$('.current').css("background-color", "white");
});

$('.prev').click(function(){
	$('.current').css("background-color", "white");
	$('.current').prev().css("background-color", "#fbd35d");
});

$('.next').click(function(){
	$('.current').css("background-color", "white");
	$('.current').next().css("background-color", "#fbd35d");
});
});

