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

/* Danish initialisation for the jQuery countdown extension
   Written by Buch (admin@buch90.dk). */
(function(xoops_smallworld) {
	xoops_smallworld.countdown.regional['da'] = {
		labels: ['År', 'Måneder', 'Uger', 'Dage', 'Timer', 'Minutter', 'Sekunder'],
		labels1: ['År', 'Månad', 'Uge', 'Dag', 'Time', 'Minut', 'Sekund'],
		compactLabels: ['Å', 'M', 'U', 'D'],
		whichLabels: null,
		timeSeparator: ':', isRTL: false};
	xoops_smallworld.countdown.setDefaults(xoops_smallworld.countdown.regional['da']);
})(jQuery);

