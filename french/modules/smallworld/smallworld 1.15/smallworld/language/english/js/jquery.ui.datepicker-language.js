/* English/UK initialisation for the jQuery UI date picker plugin. */
/* Written by Stuart. */
jQuery(function(xoops_smallworld){
	xoops_smallworld.datepicker.regional['en-GB'] = {
		closeText: 'Done', closeStatus: 'Close without changes',
		prevText: 'Prev', prevStatus: 'Show previous month',
        prevJumpText: '&#x3c;&#x3c;', prevJumpStatus: '',
		nextText: 'Next', currentStatus: 'Show actual month',
		currentText: 'Today',
		monthNames: ['January','February','March','April','May','June',
		'July','August','September','October','November','December'],
		monthNamesShort: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
		'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
		dayNames: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
		dayNamesShort: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
		dayNamesMin: ['Su','Mo','Tu','We','Th','Fr','Sa'],
		weekHeader: 'Wk',
		dateFormat: 'dd/mm/yy',
		firstDay: 1,
		isRTL: false,
		showMonthAfterYear: false,
		yearSuffix: ''};
	xoops_smallworld.datepicker.setDefaults(xoops_smallworld.datepicker.regional['en-GB']);
});