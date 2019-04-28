$(function() {

	$(window).scroll(function(){
		if($(window).scrollTop() > 500){  //$(window).height()
			$('.menu-bottom').addClass('fix');
		}
		else {
			$('.menu-bottom').removeClass('fix');
		}
	});

});

$(window).on('load',function () {
    $('.preloader').delay(500).fadeOut('slow');
});