/* Localisation française pour l'extension de l'interface utilisateur jQuery "datepicker" (sélectionneur de dates).
 Ecrit par Stuart et adapté par Culex <culex@culex.dk>. Traduit par Cesag (frxoops.org) le 5 Mai 2012 */
jQuery(function(xoops_smallworld){
	xoops_smallworld.datepicker.regional['fr-FR'] = {
		closeText: 'Fermer', closeStatus: 'Fermer sans modifications',
		prevText: '&#x3c;Précédent', prevStatus: 'Voir le mois dernier',
		prevJumpText: '&#x3c;&#x3c;', prevJumpStatus: '',
		nextText: '&#x3c;Suivant',
		currentText: 'Aujourd\'hui', currentStatus: 'Afficher le mois en cours',
		monthNames: ['Janvier','Février','Mars','Avril','Mai','Juin',
        'Juillet','Août','Septembre','Octobre','Novembre','Décembre'],
		monthNamesShort: ['Jan','Fév','Mar','Avr','Mai','Juin',
        'Jui','Aoû','Sep','Oct','Nov','Déc'],
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
