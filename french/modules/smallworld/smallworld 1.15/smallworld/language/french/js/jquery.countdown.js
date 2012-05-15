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

/* Traduction française de l'extension jQuery "countdown"
   par Cesag (frxoops.org) le 5 Mai 2012. */
(function(xoops_smallworld) {
	xoops_smallworld.countdown.regional['fr'] = {
		labels: ['Années', 'Mois', 'Semaines', 'Jours', 'Heures', 'Minutes', 'Secondes'],
		labels1: ['Année', 'Mois', 'Semaine', 'Jour', 'Heure', 'Minute', 'Seconde'],
		compactLabels: ['a', 'm', 's', 'j'], // Textes compacts pour les compteurs
		whichLabels: null,
		timeSeparator: ':', isRTL: false};
	xoops_smallworld.countdown.setDefaults(xoops_smallworld.countdown.regional['fr']);
})(jQuery);
