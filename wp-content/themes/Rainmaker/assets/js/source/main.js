(function($) {

	$(document).on('click', 'a[href^="#"]', function (event) {
	    event.preventDefault();

	    $('html, body').animate({
	        scrollTop: $($.attr(this, 'href')).offset().top
	    }, 500);
	});


	$(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 3) {
        $("#masthead").addClass("alt");
    } else {
        $("#masthead").removeClass("alt");
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
