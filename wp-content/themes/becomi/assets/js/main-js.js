jQuery(document).ready(function($) {
	var windowWidth = window.innerWidth;
	// Banner da pagina home
		var swiper = new Swiper('.banner-home', {
			speed: 2000,
			parallax: true,
			loop: true,
			spaceBetween: 30,
			effect: 'fade',
			pagination: {
				el: '.swiper-pagination',
				clickable: true,

			},
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
			autoplay: {
				delay: 5000,
			},    
	    });
		
	$('.input2').each(function(){
		$(this).on('blur', function(){
			if($(this).val().trim() != "") {
				$(this).addClass('has-val');
			}
			else {
				$(this).removeClass('has-val');
			}
		})    
	})
});