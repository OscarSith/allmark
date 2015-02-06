require.config({
	baseUrl: '/okaperu/allmark/',
	paths: {
		'jquery': 'bower_components/jquery/dist/jquery.min',
		'bootstrapValidation': 'js/dev/jqBootstrapValidation',
		'bootstrap': 'js/dev/bootstrap.min',
		'slick': 'bower_components/slick.js/slick/slick.min'
	},
	shim: {
		'bootstrap': ['jquery'],
		'slick': ['jquery']
	}
});

require([
	'jquery',
	'bootstrap',
	'slick',
	'js/dev/jquery.easing',
	'js/dev/contact_me'
], function() {
	$('a.page-scroll').bind('click', function(event) {
	    var $anchor = $(this);
	    $('html, body').stop().animate({
	        scrollTop: $($anchor.attr('href')).offset().top
	    }, 1500, 'easeInOutExpo');
	    event.preventDefault();
	});

	$('.navbar-collapse ul li a').click(function() {
		$('.navbar-toggle:visible').click();
	});

	$('.slider').slick({
		lazyLoad: 'ondemand',
		slidesToShow: 4,
		slidesToScroll: 1,
		autoplay: true,
		arrows: false,
		responsive: [{
			breakpoint: 970,
			settings: {
				slidesToShow: 3,
				infinite: true,
			}
		},
		{
			breakpoint: 690,
			settings: {
				slidesToShow: 2,
			}
		},
		{
			breakpoint: 480,
			settings: {
				slidesToShow: 1,
			}
		}]
	});
});