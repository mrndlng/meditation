(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// Mobile Menu Toggle
		$('.nav__toggle').on('click', function(){
			// Toggle --open
			$('.nav__toggle').toggleClass('--open');
		});		

	});

	
})(jQuery, this);
