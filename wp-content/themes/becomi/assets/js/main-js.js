jQuery(document).ready(function($) {
	var windowWidth = window.innerWidth;
	// Menu fixo 
	jQuery(window).scroll(function () {
		if (jQuery(this).scrollTop() > 200) {
	    	$("#menu").addClass("menu-fixo");
	    } else {
	    	$("#menu").removeClass("menu-fixo");
	    }  
	});
	
	/*Scroll das Section*/
		$(".scroll").click(function(event){        
	        event.preventDefault();
	        $('html,body').animate({scrollTop:$(this.hash).offset().top}, 800);
		});

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

	var swiper = new Swiper('.clientes-destaque', {
		slidesPerView: 6,
		spaceBetween: 30,		
		speed: 2000,
		loop: true,		
		navigation: {
			nextEl: '.swiper-button-next4',
			prevEl: '.swiper-button-prev4',
		},		
		breakpoints: {
			1200: {
				slidesPerView: 3,
				spaceBetween: 10,
			},
			768: {
				slidesPerView: 2,
				spaceBetween: 20,
			},
			640: {
				slidesPerView: 1,
				spaceBetween: 10,
			},
			425: {
				slidesPerView: 1,
				spaceBetween: 10,
			}
		},
		autoplay: {
			delay: 3000,
		},
	});

	// Galeria dos Deluxe
		var swiper = new Swiper('.galeria-deluxe', {
		loop: true,
		effect: 'fade',
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		autoplay: {
			delay: 5000,
		},   
	});	
	

  var veri = 1;
	var trigger = document.getElementById('menu-trigger1').addEventListener("click",function(){
		var menu = document.getElementById('menu-hidde1');
		if (veri == 1) {
			menu.style.display = "block";
			veri = 0;
		}else{
			menu.style.display = "none";
			veri = 1;
		}
	})    

	var veri = 1;
	var trigger = document.getElementById('menu-trigger2').addEventListener("click",function(){
		var menu = document.getElementById('menu-hidde2');
		if (veri == 1) {
			menu.style.display = "block";
			veri = 0;
		}else{
			menu.style.display = "none";
			veri = 1;
		}
	})    
});