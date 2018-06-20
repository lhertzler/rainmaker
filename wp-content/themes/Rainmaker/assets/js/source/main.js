(function($) {


	$(window).scroll(function() {
		var scroll = $(window).scrollTop();
		if (scroll >= 150) {
			$(".logo").addClass("scale");
		} else {
			$(".logo").removeClass("scale");
		}
	});

	$('.slide-trigger').on("click", function() {
			$('.slide-menu').addClass('show');
			$('.site-content, #masthead').addClass('fade');
	});

	$('.close').on("click", function() {
			$('.slide-menu').removeClass('show');
			$('.site-content, #masthead').removeClass('fade');
	});

})(jQuery);
