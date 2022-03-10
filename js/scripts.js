(function($){

	jQuery(document).ready(function(){

		jQuery('.main-menu ul li a').click(function(){

			var distc=jQuery(this).attr('href');
			jQuery('html, body').animate({

				'scrollTop'	: jQuery(distc).offset().top

			},2000);

			return false;

		});

		jQuery(window).scroll(function(){
			if(jQuery(window).scrollTop() > 60){
				jQuery('.main-menu').slideDown().addClass('fixed');
			}else{
				jQuery('.main-menu').removeClass('fixed');
			}
		});

	});


}(jQuery));