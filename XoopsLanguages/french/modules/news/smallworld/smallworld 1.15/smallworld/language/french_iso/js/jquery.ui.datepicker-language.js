/* Localisation fran�aise pour l'extension de l'interface utilisateur jQuery "datepicker" (s�lectionneur de dates).
 Ecrit par Stuart et adapt� par Culex <culex@culex.dk>. Traduit par Cesag (frxoops.org) le 5 Mai 2012 */
jQuery(function(xoops_smallworld){
	xoops_smallworld.datepicker.regional['fr-FR'] = {
		closeText: 'Fermer', closeStatus: 'Fermer sans modifications',
		prevText: '&#x3c;Pr�c�dent', prevStatus: 'Voir le mois dernier',
		prevJumpText: '&#x3c;&#x3c;', prevJumpStatus: '',
		nextText: '&#x3c;Suivant',
		currentText: 'Aujourd\'hui', currentStatus: 'Afficher le mois en cours',
		monthNames: ['Janvier','F�vrier','Mars','Avril','Mai','Juin',
        'Juillet','Ao�t','Septembre','Octobre','Novembre','D�cembre'],
		monthNamesShort: ['Jan','F�v','Mar','Avr','Mai','Juin',
        'Jui','Ao�','Sep','Oct','Nov','D�c'],
		dayNames: ['Dimanche','Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi'],
		dayNamesShort: ['Dim','Lun','Mar','Mer','Jeu','Ven','Sam'],
		dayNamesMin: ['Di','Lu','Ma','Me','Je','Ve','Sa'],
		weekHeader: 'Se',
		dateFormat: 'dd-mm-yyyy',
		firstDay: 1,
		isRTL: false,
		showMonthAfterYear: false,
		yearSuffix: ''};
	xoops_smallworld.datepicker.setDefaults(xoops_smallworld.datepicker.regional['fr-FR']);
});
