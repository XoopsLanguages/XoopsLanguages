/**
 * jQuery Stepy - A Wizard Plugin - http://wbotelhos.com/stepy
 * ---------------------------------------------------------------------------------
 *
 * jQuery Stepy is a plugin based on FormToWizard that generates a customizable wizard.
 * 
 * Licensed under The MIT License
 * 
 * @version			0.5.1
 * @since			07.03.2010
 * @author			Washington Botelho dos Santos
 * @documentation	http://wbotelhos.com/raty
 * @twitter			http://twitter.com/wbotelhos
 * @license			http://opensource.org/licenses/mit-license.php MIT
 * @package			jQuery Plugins
 * 
 * Usage with default values:
 * ---------------------------------------------------------------------------------
 * xoops_smallworld('#stepy').stepy();
 *
 *	<form id="stepy">
 *		<fieldset title="Step 1">
 *			<legend>description one</legend>
 *			<!-- input fields -->
 *		</fieldset>
 *
 *		<fieldset title="Step 2">
 *			<legend>description one</legend>
 *			<!-- input fields -->
 *		</fieldset>
 *
 *		// and so on..
 *
 *		<input type="submit" class="finish" value="Finish!"/>
 *	</form>
 *
 */

;(function(xoops_smallworld) {

	xoops_smallworld.fn.stepy = function(settings) {

		if (this.length == 0) {
			//debug('Selector invalid or missing!');
			return;
		} else if (this.length > 1) {
			return this.each(function() {
				xoops_smallworld.fn.stepy.apply(xoops_smallworld(this), [settings]);
			});
		}

		var opt								= xoops_smallworld.extend({}, xoops_smallworld.fn.stepy.defaults, settings),
			xoops_smallworldthis			= xoops_smallworld(this),
			id								= this.attr('id'),
			xoops_smallworldsteps			= xoops_smallworldthis.children('fieldset'),
			size							= xoops_smallworldsteps.size(),
			xoops_smallworldtitlesWrapper	= xoops_smallworld('<ul/>', { id: id + '-titles', 'class': 'stepy-titles' }),
			description						= '',
			title							= '',
			xoops_smallworldlegend			= false,
			hasLegend						= true,
			isForm							= xoops_smallworldthis.is('form'),
			onSubmit						= '',
			step;

		if (opt.titleTarget) {
			xoops_smallworld(opt.titleTarget).html(xoops_smallworldtitlesWrapper);
		} else {
			xoops_smallworldtitlesWrapper.insertBefore(xoops_smallworldthis);
		}

		if (id === undefined) {
			id = 'stepy-' + xoops_smallworldthis.index();
			xoops_smallworldthis.attr('id', id); 
		}

		xoops_smallworldthis.data('options', opt);

        if (opt.validate) {
        	xoops_smallworldthis.append('<div class="stepy-error"/>');
        }

        xoops_smallworldsteps.each(function(index) {
        	step = xoops_smallworld(this);

        	step
        	.attr('id', id + '-step-' + index)
        	.addClass('step')
        	.append('<p id="' + id + '-buttons-' + index + '" class="' + id + '-buttons"/>');

        	title = (step.attr('title') != '' ) ? step.attr('title') : '--';
			
			// Culex hack to prevent titles being undefined
			if (title == undefined) {
				title = '';
			}

        	xoops_smallworldlegend = step.children('legend');

        	if (!opt.legend) {
        		xoops_smallworldlegend.hide();
        	}

        	description = '';

        	if (opt.description) {
        		if (xoops_smallworldlegend.length) {
        			description = '<span>' + xoops_smallworldlegend.html() + '</span>';
        		} else {
        			debug(id + ': the legend element of the step ' + (index + 1) + ' is required to set the description!');
        			hasLegend = false;
        		}
        	}

        	xoops_smallworldtitlesWrapper.append('<li id="' + id + '-title-' + index + '">' + title  + description + '</li>');
			xoops_smallworld('fieldset:visible').find('input,select').each(function() {
				xoops_smallworld(this).blur();
			});
        	if (index == 0) {
        		if (size > 1) {
        			createNextButton(index);
        		}
        	} else {
        		createBackButton(index);
        		step.hide();

        		if (index < size - 1) {
	        		createNextButton(index);
	        	}
        	}
        });

        var xoops_smallworldtitles	= xoops_smallworldtitlesWrapper.children(),
        	finish	= xoops_smallworldthis.children('.smallworld_finish');

        xoops_smallworldtitles.first().addClass('current-step');

		if (opt.finishButton) {
	        if (finish.length) {
	        	if (opt.finish && isForm) {
	        		onSubmit = xoops_smallworldthis.attr('onsubmit');
	        		xoops_smallworldthis.attr('onsubmit', 'return false;');
	        	}

        		finish.click(function(evt) {
        			var isSubmit = finish.attr('type') == 'submit';

    				if (opt.finish && isStopCallback(opt.finish, size - 1)) {
   						evt.preventDefault();
    				} else {
    					if (isForm) {
    						if (onSubmit) {
    							xoops_smallworldthis.attr('onsubmit', onSubmit);
    						} else {
    							xoops_smallworldthis.removeAttr('onsubmit');
    						}

    						if (!isSubmit && (!opt.validate || validate(xoops_smallworldthis, size - 1, opt))) {
    							xoops_smallworldthis.submit();
    						}
    					}
    				}
        		});

        		if (size > 1) {
        			finish.hide();
                }

        		finish.appendTo(xoops_smallworldthis.find('p:last'));
	        } else {
	        	//debug(id + ': element with class name "finish" missing!');
	        }
        }

        if (opt.titleClick) {
        	xoops_smallworldtitles.click(function() {
        		var	currentArray	= xoops_smallworldtitlesWrapper.children('.current-step').attr('id').split('-'),
	        		current			= parseInt(currentArray[currentArray.length - 1]),
	        		clicked			= xoops_smallworld(this).index(),
        			maxStep			= clicked;

				if (clicked > current) {
					if (opt.next && isStopCallback(opt.next, clicked)) {
						return;
					}

					maxStep = getMaxStep(xoops_smallworldthis, opt, clicked);
				} else if (clicked < current) {
					if (opt.back && isStopCallback(opt.back, clicked)) {
						return;
					}
				}

				var isBlocked = (maxStep <= clicked);

				if (clicked != current) {
					selectStep(xoops_smallworldthis, maxStep, isBlocked);

			        if (opt.finishButton && maxStep + 1 == size) {
	                	finish.show();
	                }
				}
        	});
    	} else {
    		xoops_smallworldtitles.css('cursor', 'default');
    	}

        xoops_smallworldsteps.delegate('input[type="text"], input[type="password"]', 'keypress', function(evt) {
        	var key = (evt.keyCode ? evt.keyCode : evt.which);

        	if (key == 13) {
        		evt.preventDefault();

        		var buttons = xoops_smallworld(this).parent().children('p.' + id + '-buttons');

        		if (buttons.length) {
        			var next = buttons.children('a.button-next');

        			if (next.length) {
        				next.click();
        			} else {
	        			var finish = buttons.children('input.smallworld_finish');

	        			if (finish.length) {
	        				finish.click();
	        			}
        			}
        		}
        	}
        });

        function isStopCallback(callback, clicked) {
        	var isValid = callback.apply(xoops_smallworldthis, [clicked + 1]);

        	return !(isValid || isValid === undefined);
        };

        function createBackButton(index) {
        	xoops_smallworld('<a/>', {
        		id:			id + '-back-' + index,
        		href:		'javascript:void(0);',
        		'class':	'button-back',
        		html:		opt.backLabel
        	}).click(function() {
        		if (!opt.back || !isStopCallback(opt.back, index - 1)) {
	                selectStep(xoops_smallworldthis, index - 1, false);

	                if (index + 1 == size) {
	                	finish.hide();
	                }
        		}
            })
            .appendTo(xoops_smallworld('p#' + id + '-buttons-' + index));
        };

        function createNextButton(index) {
        	xoops_smallworld('<a/>', {
        		id:			id + '-next-' + index,
        		href:		'javascript:void(0);',
        		'class':	'button-next',
        		html:		opt.nextLabel
        	}).click(function() {
        		if (!opt.next || !isStopCallback(opt.next, index + 1)) {
	        		var maxStep		= getMaxStep(xoops_smallworldthis, opt, index + 1),
	        			isBlocked	= (maxStep <= index);

					selectStep(xoops_smallworldthis, maxStep, isBlocked);
	
			        if (opt.finishButton && maxStep + 1 == size) {
	                	finish.show();
	                }
        		}
            })
            .appendTo(xoops_smallworld('p#' + id + '-buttons-' + index));
        };

        function getMaxStep(context, opt, clicked) { // TODO: give support of validation from public function. .data().
        	var maxStep = clicked,
        		isValid = true;

        	if (opt.validate) {
	        	for (var i = 0; i < clicked; i++) {
					isValid &= validate(xoops_smallworldthis, i, opt);

					if (opt.block && !isValid) {
						maxStep = i;
						break;
					}
				}
        	}

        	return maxStep;
        };

		return xoops_smallworldthis;
	};

	function selectStep(context, index, isBlocked) {
		var id		= context.attr('id'),
			xoops_smallworldsteps	= context.children('fieldset'),
			size	= xoops_smallworldsteps.size(),
			xoops_smallworldtitles	= xoops_smallworld('ul#' + id + '-titles').children(),
			step;

		if (index > size - 1) {
			index = size - 1;
		}

		xoops_smallworldsteps.hide().eq(index).show();

		xoops_smallworldtitles.removeClass('current-step').eq(index).addClass('current-step');

        if (context.is('form')) {
        	var firstField = xoops_smallworldsteps.eq(index).find(':input:visible:enabled:first');

        	if (!isBlocked) {
        		firstField.focus();
        	}
        }
			// Culex hack to activate all validations steps that are in the visible(active step)
			// Bypassing the original jquery Validation idea
			xoops_smallworld('fieldset:visible').find('input,select,textarea').each(function() {
				xoops_smallworld(this).blur();
			});	
			xoops_smallworld('fieldset:visible').find('input[name="emailtype[]"]').each(function() {
				xoops_smallworld(this).blur();
			});				
	};

	function validate(context, index, opt) {
		if (!context.is('form')) {
			return true;
		}

		var id		= context.attr('id'),
			isValid	= true,
			xoops_smallworldstep	= context.children('fieldset').eq(index),
			xoops_smallworldtitle	= xoops_smallworld('ul#' + id + '-titles').children().eq(index);

		xoops_smallworld(xoops_smallworldstep.find(':input').get().reverse()).each(function() {
			isValid &= context.validate().element(xoops_smallworld(this));

			if (isValid === undefined) {
				isValid = true;
			}

			if (isValid) {
				if (opt.errorImage) {
					xoops_smallworldtitle.removeClass('error-image');
				}
			} else {
				if (opt.block) {
					selectStep(context, index, true);
				}

				if (opt.errorImage) {
					xoops_smallworldtitle.addClass('error-image');
				}

				context.validate().focusInvalid();
			}
		});

		return isValid;
	};

    xoops_smallworld.fn.stepy.step = function(index, idOrClass) {
    	var context = getContext(index, idOrClass, 'step');

		if (idOrClass.indexOf('.') >= 0) {
			return;
		}

		selectStep(context, index - 1, false);

		xoops_smallworld.fn.stepy;
	};

    function getContext(value, idOrClass, name) {
		var context = undefined;

		if (idOrClass == undefined) {
			debug('Specify an ID or class to be the target of the action.');
			return;
		}

		if (idOrClass) {
			if (idOrClass.indexOf('.') >= 0) {
				var idEach;

				return xoops_smallworld(idOrClass).each(function() {
					idEach = '#' + xoops_smallworld(this).attr('id');

					if (name == 'step') {
						xoops_smallworld.fn.stepy.step(value, idEach);
					}
				});
			}

			context = xoops_smallworld(idOrClass);

			if (!context.length) {
				debug('"' + idOrClass + '" is a invalid identifier for the public funtion xoops_smallworld.fn.stepy.' + name + '().');
				return;
			}
		}

		return context;
	};

    function debug(message) {
		if (window.console && window.console.log) {
			window.console.log(message);
		}
	};

	xoops_smallworld.fn.stepy.defaults = {
		back:			null,
		backLabel:		'&lt; Back',
		block:			false,
		description:	true,
		errorImage:		false,
		finish:			null,
		finishButton:	true,
		legend:			true,
		next:			null,
		nextLabel:		'Next &gt;',
		titleClick:		false,
		titleTarget:	'',
		validate:		false
	};

})(jQuery);