$(function() {

	// Show/HIde the novel and short story sections
	$('.book-tab').on('click', function(e) {
		var tabId = $(this).attr('id');

		$('.book-tab').removeClass('current');
		$(this).addClass('current');

		$('.book-section').hide();
		$('.' + tabId + '-section').show();
	});

	$('.question').on('click', function(e) {
		e.preventDefault();
		$(this).next('.answer').toggleClass('open');

	});

	var slider = $('.bxslider').bxSlider({
		preloadImages: 'all',
		auto: true,
		speed: 800,
		pause: 8000,
		infiniteLoop: true,
		easing: 'ease',
		controls: false,
		onSliderLoad: function () {
			$('.bx-pager-link').click(function () {
				var i = $(this).data('slide-index');
				slider.goToSlide(i);
				slider.stopAuto();
				slider.startAuto();
				return false;
			});
		},
	}); // End bxSlider fn

});