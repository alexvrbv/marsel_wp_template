$( document ).ready(function() {
		
	//Navbar scroll nav
	$('.navbar a[href^="#"], header__order-btn a[href^="#"]').click(function(){
        var linkPath = $(this).attr('href');
        $('html, body').animate({ scrollTop: $(linkPath).offset().top - 0 }, 500);
        return false;
    });

	//Sticky navbar
	$(window).on('scroll load resize', function(event) {
		var scrollValue = $(window).scrollTop();
		if (scrollValue > 60) {
			 $('.navbar').addClass('fixed-top');
		} else {
			$('.navbar').removeClass('fixed-top');
		}
	});	
	
	//Image popup
	$('.img-popup-link').magnificPopup({
		type: 'image',
		gallery:{
			enabled:true,
			tPrev: 'Назад', // title for left button
			tNext: 'Вперед', // title for right button
		}
	});	

	//News swiper
	var mySwiper = new Swiper('.swiper-container', {
		speed: 400,
		spaceBetween: 0,
		pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',			
        paginationClickable: true,
		loop: true,
		slidesPerView: 1,
		centeredSlides: true,
        autoplay: 15000,
		autoplayDisableOnInteraction: false,
        grabCursor: true,
	});
	
});