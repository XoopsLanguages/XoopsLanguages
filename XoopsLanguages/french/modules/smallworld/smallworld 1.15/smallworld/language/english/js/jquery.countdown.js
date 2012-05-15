/* http://keith-wood.name/countdown.html
   Countdown for jQuery v1.5.10.
   Written by Keith Wood (kbwood{at}iinet.com.au) January 2008.
   Dual licensed under the GPL (http://dev.jquery.com/browser/trunk/jquery/GPL-LICENSE.txt) and 
   MIT (http://dev.jquery.com/browser/trunk/jquery/MIT-LICENSE.txt) licenses. 
   Please attribute the author if you use it. */
   
    /*
    Check here for your translation
    http://keith-wood.name/countdown.html#l10nPkgs
    */   
(function(xoops_smallworld) {
	xoops_smallworld.countdown.regional[''] = {
		labels: ['Years', 'Months', 'Weeks', 'Days', 'Hours', 'Minutes', 'Seconds'],
		labels1: ['Year', 'Month', 'Week', 'Day', 'Hour', 'Minute', 'Second'],
		compactLabels: ['y', 'm', 'w', 'd','hrs', 'min', 'sec'], // The compact texts for the counters
		whichLabels: null,
		timeSeparator: ':', isRTL: false};
		xoops_smallworld.countdown.setDefaults(xoops_smallworld.countdown.regional['']);
});
