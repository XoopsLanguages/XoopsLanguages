/**
 * jQuery Opacity Rollover plugin
 *
 * Copyright (c) 2009 Trent Foley (http://trentacular.com)
 * Licensed under the MIT License:
 *   http://www.opensource.org/licenses/mit-license.php
 */
;(function(xoops_smallworld) {
	var defaults = {
		mouseOutOpacity:   0.67,
		mouseOverOpacity:  1.0,
		fadeSpeed:         'fast',
		exemptionSelector: '.selected'
	};

	xoops_smallworld.fn.opacityrollover = function(settings) {
		// Initialize the effect
		xoops_smallworld.extend(this, defaults, settings);

		var config = this;

		function fadeTo(element, opacity) {
			var xoops_smallworldtarget = xoops_smallworld(element);
			
			if (config.exemptionSelector)
				xoops_smallworldtarget = xoops_smallworldtarget.not(config.exemptionSelector);	
			
			xoops_smallworldtarget.fadeTo(config.fadeSpeed, opacity);
		}

		this.css('opacity', this.mouseOutOpacity)
			.hover(
				function () {
					fadeTo(this, config.mouseOverOpacity);
				},
				function () {
					fadeTo(this, config.mouseOutOpacity);
				});

		return this;
	};
})(jQuery);
