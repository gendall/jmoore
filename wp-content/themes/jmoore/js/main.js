$(function() {

	// Open/Close the Mobile Navigation.
	$('.toggle-mobile-nav, .overlay').click( function() {
		$('body').toggleClass('no-overflow');
		$(this).add('.nav').toggleClass('open');
		$('.overlay').fadeToggle('fast');
	});

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
			$('.question, .answer').removeClass('open');
		} else {
			$('.question, .answer').removeClass('open');
			$(this).addClass('open').next('.answer').addClass('open');
		}

	});

	// If no featured image is set, make post summary go full-width.
	var $blogPage = $('body.page-template-page-blog');
	var $ahoyPage = $('body.page-template-page-ahoy');
	if ( $blogPage || $ahoyPage ) {

		$('article').each(function() {
			var that = $(this);
			var $mediaContainer = that.children('.media-container');
			if ( $mediaContainer.length === 0 ) {
				that.children('.summary').addClass('full-width');
			}
		});
	}
 
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