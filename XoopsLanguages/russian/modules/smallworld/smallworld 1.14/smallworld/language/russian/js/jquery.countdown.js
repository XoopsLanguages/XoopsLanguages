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
	xoops_smallworld.countdown.regional['ru'] = {
		labels: ['Лет', 'Месяцев', 'Недель', 'Дней', 'Часов', 'Минут', 'Секунд'],
		labels1: ['Год', 'Месяц', 'Неделя', 'День', 'Час', 'Минута', 'Секунда'],
		compactLabels: ['г', 'м', 'н', 'д','час', 'мин', 'сек'], // The compact texts for the counters
		whichLabels: null,
		timeSeparator: ':', isRTL: false};
		xoops_smallworld.countdown.setDefaults(xoops_smallworld.countdown.regional['ru']);
})(jQuery);
