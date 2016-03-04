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

		if ($(this).next('.answer').hasClass('open')) {
			$('.answer').removeClass('open');
		} else {
			$('.answer').removeClass('open');
			$(this).next('.answer').addClass('open');
		}

	});

	// Remove any empty <p> elements.
	$('p').each(function() {
		var $this = $(this);
		if($this.html().replace(/\s|&nbsp;/g, '').length == 0) {
			$this.remove();
		}
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