/* http://keith-wood.name/datepick.html
   Danish localisation for jQuery Datepicker.
   Written by Culex <culex@culex.dk> */
jQuery(function(xoops_smallworld){
	xoops_smallworld.datepicker.regional['da-DK'] = {
		closeText: 'Luk', closeStatus: 'Luk uden ændringer',
		prevText: '&#x3c;Forrige', prevStatus: 'Vis forrige måned',
		prevJumpText: '&#x3c;&#x3c;', prevJumpStatus: '',
		currentText: 'Idag', currentStatus: 'Vis aktuel måned',
		monthNames: ['Januar','Februar','Marts','April','Maj','Juni',
        'Juli','August','September','Oktober','November','December'],
		monthNamesShort: ['Jan','Feb','Mar','Apr','Maj','Jun',
        'Jul','Aug','Sep','Okt','Nov','Dec'],
		dayNames: ['Søndag','Mandag','Tirsdag','Onsdag','Torsdag','Fredag','Lørdag'],
		dayNamesShort: ['Søn','Man','Tir','Ons','Tor','Fre','Lør'],
		dayNamesMin: ['Sø','Ma','Ti','On','To','Fr','Lø'],
		weekHeader: 'Ug',
		dateFormat: 'dd-mm-yyyy',
		firstDay: 1,
		isRTL: false,
		showMonthAfterYear: false,
		yearSuffix: ''};
	xoops_smallworld.datepicker.setDefaults(xoops_smallworld.datepicker.regional['da-DK']);
});
