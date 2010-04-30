/* French initialisation for the jQuery UI date picker plugin. */
/* Written by Keith Wood (kbwood@virginbroadband.com.au) and Stéphane Nahmani (sholby@sholby.net). */
jQuery(function($){
	$.datepicker.regional['fa'] = {
		dateFormat: 'yy-mm-dd', firstDay: 6,
		isRTL: true};
	$.datepicker.setDefaults($.datepicker.regional['fa']);
});