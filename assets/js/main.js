$(document).ready( function () {
	$('#mobile-menu-toggle').click(function() {
		if ($('header').hasClass('open')) {
			$('header').removeClass('open');
			$('header').animate({'max-height': '95px'}, 300);
		} else {
			$('header').addClass('open');
			$('header').animate({'max-height': '500px'}, 500);
		}
	});
	if(window.outerWidth <= 736) {
		jQuery('#home-description').fitText(1.2);
		jQuery('#about-text').fitText(1.6);
		jQuery('#ailments-description').fitText(1.6);
		jQuery('#contact-description').fitText(1.4);
	} else {
		jQuery('#home-description').fitText(2);
		jQuery('#about-text').fitText(2.4);
		jQuery('#ailments-description').fitText(2.2);
		jQuery('#contact-description').fitText(2);
	}
	slider();
});

function slider() {
	var sliderTimer = setInterval( function() {
		index = $('#slider-wrapper').attr('current-position');
		if (index >= $('.slider-image').length - 1) {
			index = 0;
			moveslider(index);
		} else {
			index ++;
			moveslider(index);
		}
	}, 7000);

	$('.slider-nav-button').click( function() {
		var index = $(this).attr('index');
		moveslider(index);
		clearInterval(sliderTimer);
		setTimeout( function() {
			sliderTimer = setInterval( function() {
				index = $('#slider-wrapper').attr('current-position');
				if (index >= $('.slider-image').length - 1) {
					index = 0;
					moveslider(index);
				} else {
					index ++;
					moveslider(index);
				}
			}, 7000);
		})
	});
}

function moveslider(index) {

	var currentPosition = $('#slider-wrapper').attr('current-position');
	
	if (currentPosition != index) {
		var newImage = $('.slider-image').eq(index);
		newImage.css({'z-index' : 1});
		var oldImage = $('.slider-image').eq(currentPosition);
		oldImage.addClass('fadeout');
		$('.slider-nav-button').removeClass('current');
		$('.slider-nav-button').eq(index).addClass('current');
		setTimeout( function() {
			oldImage.css({'z-index' : 0});
			oldImage.removeClass('fadeout');
			newImage.css({'z-index' : 2});
		}, 800);

		$('#slider-wrapper').attr('current-Position', index);
	}
}



