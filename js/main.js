$(document).ready(function() {

	var preloader = $('#preloader');
	preloader.hide();


	$('.main-slider').slick({
		autoplay: true,
		autoplaySpeed: 5000
	});

	$('.header__wrapper__slider').slick({
		autoplay: true,
		autoplaySpeed: 5000
	});

	$('.gallery__slider').slick({
		autoplay:true,
		autoplaySpeed:5000,
		slidesToShow:3,
		slidesToScroll:1,
		easing:'ease',
		responsive: [
			{
			  breakpoint: 768,
			  settings: {
				slidesToShow: 2,
				slidesToScroll:1
			  }
			},
			{
			  breakpoint: 576,
			  settings: {
				slidesToShow: 1,
				slidesToScroll:1
			  }
			}

		  ]

	})




	// Opera 8.0+
	var isOpera = (!!window.opr && !!opr.addons) || !!window.opera || navigator.userAgent.indexOf(' OPR/') >= 0;

	// Firefox 1.0+
	var isFirefox = typeof InstallTrigger !== 'undefined';

	// Safari 3.0+ "[object HTMLElementConstructor]" 
	var isSafari = /constructor/i.test(window.HTMLElement) || (function (p) { return p.toString() === "[object SafariRemoteNotification]"; })(!window['safari'] || (typeof safari !== 'undefined' && safari.pushNotification));

	// Internet Explorer 6-11
	var isIE = /*@cc_on!@*/false || !!document.documentMode;

	// Edge 20+
	var isEdge = !isIE && !!window.StyleMedia;

	// Chrome 1 - 79
	var isChrome = !!window.chrome && (!!window.chrome.webstore || !!window.chrome.runtime);

	// Edge (based on chromium) detection
	var isEdgeChromium = isChrome && (navigator.userAgent.indexOf("Edg") != -1);

	// Blink engine detection
	var isBlink = (isChrome || isOpera) && !!window.CSS;



	if(isIE) {
		
		document.querySelector('header').style.display="none";
		document.querySelector('footer').style.display="none";
		document.querySelector('html').style.overflowY="hidden"
		let b = document.querySelectorAll('section');

		b.forEach(function(item){
			item.style.display="none";
		})

		document.getElementById('stub').style.display="flex";
		
	}

	
});



function toggle() {
	var blur = document.getElementById('header');
	blur.classList.toggle('active');

	var popup = document.getElementById('popup');
	popup.classList.toggle('active');
}


function count (v) {
	var cnt = v.length;
	document.getElementById('word-counter').innerHTML = cnt;
}


$('#cell1').mousemove(function() {
	this.$('img').hide();
	this.$('p').show();
})

$('#cell2').mousemove(function() {
	this.$('img').hide();
	this.$('p').show();
})


$('#cell3').mousemove(function() {
	this.$('img').hide();
	this.$('p').show();
})

