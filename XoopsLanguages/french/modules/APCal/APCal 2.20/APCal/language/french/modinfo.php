<?php

if( defined( 'FOR_XOOPS_LANG_CHECKER' ) || ! defined( '_MI_APCAL_APCALLOADED' ) ) {

define( '_MI_APCAL_APCALLOADED' , 1 ) ;

// Module Info

// The name of this module
define("_MI_APCAL_NAME", "APCal");

// A brief description of this module
define("_MI_APCAL_DESC", "Module Gestion d'un Calendrier avec Ev&egrave;nemens Programm&eacute;s");

// Appended by Xoops Language Checker -GIJOE- in 2005-01-08 04:36:49
define('_MI_APCAL_DEFAULTLOCALE','france');

// Names of blocks for this module (Not all module has blocks)
define("_MI_APCAL_BNAME_MINICAL", "Mini Calendrier");
define("_MI_APCAL_BNAME_MINICAL_DESC", "Affiche le bloc mini calendrier");
define('_MI_APCAL_BNAME_MINICALEX','MiniCalendarEx');
define('_MI_APCAL_BNAME_MINICALEX_DESC','Mini Calendrier Extensible &agrave; syst&egrave;me de plugin');
define("_MI_APCAL_BNAME_MONTHCAL", "Calendrier Mensuel");
define("_MI_APCAL_BNAME_MONTHCAL_DESC", "Affichage complet du calendrier mensuel");
define("_MI_APCAL_BNAME_TODAYS", "Ev&egrave;nements aujourd'hui");
define("_MI_APCAL_BNAME_TODAYS_DESC", "Affiche les &eacute;v&egrave;nements du jour");
define("_MI_APCAL_BNAME_THEDAYS", "Ev&egrave;nements du %s");
define("_MI_APCAL_BNAME_THEDAYS_DESC", "Affiche les &eacute;v&egrave;nements du jour indiqu&eacute;");
define("_MI_APCAL_BNAME_COMING", "Ev&egrave;nements &agrave; venir");
define("_MI_APCAL_BNAME_COMING_DESC", "Affiche les &eacute;v&egrave;nnements &agrave; venir");
define("_MI_APCAL_BNAME_AFTER", "Ev&egrave;nements apr&egrave;s le %s");
define("_MI_APCAL_BNAME_AFTER_DESC", "Affiche les &eacute;v&egrave;nements apr&egrave;s la date indiqu&eacute;e");
define("_MI_APCAL_BNAME_NEW", "Ev&egrave;nements nouvellement post&eacute;s");
define("_MI_APCAL_BNAME_NEW_DESC", "Affiche les &eacute;v&eacute;nements tri&eacute;s de fa&ccedil;on, plus r&eacute;cent en premier");
define("_MI_APCAL_BNAME_MAP", 'Carte des &eacute;v&egrave;nements du mois courant');
define("_MI_APCAL_BNAME_MAP_DESC", '');

// Names of submenu
define("_MI_APCAL_SM_SUBMIT","Soumettre");

//define("_MI_APCAL_ADMENU1","");

// Title of config items
define("_MI_APCAL_USERS_AUTHORITY", "Droits Utilisateurs");
define("_MI_APCAL_GUESTS_AUTHORITY", "Droits Invit&eacute;s");
define("_MI_APCAL_DEFAULT_VIEW", "Vue par d&eacute;faut au centre");
define("_MI_APCAL_MINICAL_TARGET", "La page s'affiche au centre quand la date du mini calendrier est cliqu&eacute;e");
define("_MI_APCAL_COMING_NUMROWS", "Le nombre d'&eacute;v&eacute;nements dans le bloc des &eacute;v&eacute;nements &agrave; venir");
define("_MI_APCAL_SKINFOLDER", "Nom des chemins de skin");
define("_MI_APCAL_LOCALE", "Afficher les f&ecirc;tes sp&eacute;ciales pour le pays suivant:");
define("_MI_APCAL_SUNDAYCOLOR", "Couleur du Dimanche");
define("_MI_APCAL_WEEKDAYCOLOR", "Couleur des jours de la semaine");
define("_MI_APCAL_SATURDAYCOLOR", "Couleur du Samedi");
define("_MI_APCAL_HOLIDAYCOLOR", "Couleur des vacances");
define("_MI_APCAL_TARGETDAYCOLOR", "Couleur du jour s&eacute;lectionn&eacute;");
define("_MI_APCAL_SUNDAYBGCOLOR", "Couleur de fond du Dimanche");
define("_MI_APCAL_WEEKDAYBGCOLOR", "Couleur de fond des jours de la semaine");
define("_MI_APCAL_SATURDAYBGCOLOR", "Couleur de fond du Samedi");
define("_MI_APCAL_HOLIDAYBGCOLOR", "Couleur de fond des vacances");
define("_MI_APCAL_TARGETDAYBGCOLOR", "Couleur de fond du jour s&eacute;lectionn&eacute;");
define("_MI_APCAL_CALHEADCOLOR", "Couleur de l'ent&ecirc;te du calendrier");
define("_MI_APCAL_CALHEADBGCOLOR", "Couleur de fond de l'ent&ecirc;te du calendrier");
define("_MI_APCAL_CALFRAMECSS", "Style du cadre du calendrier");
define("_MI_APCAL_CANOUTPUTICS", "Permission d'extraire des fichiers ics");
define("_MI_APCAL_MAXRRULEEXTRACT", "Limite sup&eacute;rieure d'extraction des &eacute;v&egrave;nements par p&eacute;riodicit&eacute;.(compteur)");
define("_MI_APCAL_WEEKSTARTFROM", "Jour de d&eacute;but de la semaine");
define("_MI_APCAL_WEEKNUMBERING", "Nombre de r&egrave;gles pour les semaines");
define("_MI_APCAL_DAYSTARTFROM", "Bordure pour s&eacute;parer les jours");
define('_MI_APCAL_TIMEZONE_USING','Fuseau Horaire Serveur');
define('_MI_APCAL_USE24HOUR','Journ&eacute;e de 24heures (et non pas de 12 heures)');
define("_MI_APCAL_NAMEORUNAME" , "Affichage du Nom de l'auteur de l'&eacute;v&egrave;nement" ) ;

define("_MI_APCAL_GMLAT" , "Latitude par d&eacute;faut de la carte \"Google Maps\"" ) ;
define("_MI_APCAL_GMLNG" , "Longitude par d&eacute;faut de la carte \"Google Maps\"" ) ;
define("_MI_APCAL_GMZOOM" , "Niveau de zoom par d&eacute;faut de la carte \"Google Maps\"" ) ;
define("_MI_APCAL_GMHEIGHT" , "Hauteur de la carte \"Google Maps\"" ) ;
define("_MI_APCAL_USEURLREWRITE" , "Utiliser la r&eacute;&eacute;criture d'URL" ) ;
define("_MI_APCAL_WIDERWEEKEND" , "Colonnes plus large dans la vue mensuelle pour:" ) ;
define('_MI_APCAL_GETTHMCOLOR', 'Fichier css principal dans le r&eacute;pertoire de votre th&egrave;me');
define('_MI_APCAL_THMORDEFAULT', 'Couleurs de votre:');
define('_MI_APCAL_ENABLECALMAP', 'Afficher la carte Google dans la vue calendrier');
define('_MI_APCAL_ENABLEEVENTMAP', 'Afficher la carte Google dans la vue d\'un &eacute;v&eacute;nement');
define('_MI_APCAL_ENABLESHARING', 'Autoriser vos usagers &agrave; partager votre calendrier sur leur site');
define('_MI_APCAL_EVENTNAVENABLED', 'Afficher le menu de navigation lors de la visualisation d\'un &eacute;v&eacute;nement');
define('_MI_APCAL_DISPLAYCATTITLE', 'Afficher le nom de la cat&eacute;gorie comme titre de module sur la page');
define('_MI_APCAL_ENABLESOCIAL', 'Afficher les liens vers les r&eacute;seaux sociaux');
define('_MI_APCAL_ENABLETELLAFRIEND', 'Activer le formulaire d\'envoie de courriel "Envoyer &agrave; un ami"');
define('_MI_APCAL_ENABLETELLAFRIEND_DESC', '');
define('_MI_APCAL_NBPICS', 'Nombre maximal d\'images permises (0 pour ne pas en afficher)');
define('_MI_APCAL_PICSWIDTH', 'Largeur maximale des images lors de la visualisation d\'un &eacute;v&eacute;nement');
define('_MI_APCAL_PICSHEIGHT', 'Hauteur maximale des images lors de la visualisation d\'un &eacute;v&eacute;nement');
define('_MI_APCAL_SHOWPICMONTHLY', 'Afficher l\'image principale des &eacute;v&eacute;nements dans la vue mensuelle');
define('_MI_APCAL_SHOWPICWEEKLY', 'Afficher l\'image principale des &eacute;v&eacute;nements dans la vue hebdomadaire');
define('_MI_APCAL_SHOWPICDAILY', 'Afficher l\'image principale des &eacute;v&eacute;nements dans la vue quotidienne');
define('_MI_APCAL_SHOWPICLIST', 'Afficher l\'image principale des &eacute;v&eacute;nements dans la vue en liste');
define('_MI_APCAL_EVENTBGCOLOR', 'Couleur de fond de la ligne d\'&eacute;v&eacute;nement');
define('_MI_APCAL_EVENTCOLOR', 'Coleur de la ligne d\'&eacute;v&eacute;nement');
define('_MI_APCAL_ALLCATSCOLOR', 'Couleur de la cat&eacute;gorie par d&eacute;faut');
define('_MI_APCAL_DISPLAYTIMEZONE', 'Afficher les d&eacute;calages horaire lorsqu\'une heure est affich&eacute;e');
define('_MI_APCAL_ICSNEWCAL', 'Cr&eacute;er un nouveau calendrier pour l\'exportation en ical');
define('_MI_APCAL_ENABLEREGISTRATION', 'Autoriser l\'inscription &agrave; un &eacute;v&eacute;nement');

define('_MI_APCAL_USERS', 'Utilisateurs');
define('_MI_APCAL_COLORS', 'Couleurs');
define('_MI_APCAL_SETTINGS', 'Param&egrave;tres g&eacute;n&eacute;raux');
define('_MI_APCAL_CALSETTINGS', 'Param&egrave;tres du calendrier');
define('_MI_APCAL_CALDISPLAY', 'Affichage des calendriers');
define('_MI_APCAL_EVENTS', '&eacute;v&eacute;nements');
define('_MI_APCAL_PICTURES', 'Images');
define('_MI_APCAL_MAP', 'Google Map');
define('_MI_APCAL_COMMENTSNOT', 'Commentaires et Notifications');

// Description of each config items
define("_MI_APCAL_EDITBYGUESTDSC", "Autoriser les invit&eacute;s &agrave; ajouter des &eacute;v&egrave;nements");
define("_MI_APCAL_LOCALEDESC", "N.B.: Les f&ecirc;tes sont perp&eacute;tuelles uniquement pour les USA, le Canada, le Canada-fr et la France. Pour tous autre pays, vous devez effectuer les modifications manuellement.");
define("_MI_APCAL_DESCNAMEORUNAME" , "S&eacute;lectionner quel 'nom' sera affich&eacute;" ) ;
define("_MI_APCAL_DESCUSEURLREWRITE" , "<b>Afin que cette option fonctionne, copiez /modules/APCal/doc/.htaccess vers /modules/APCal/.</b><br /><br />N.B.: Si vous n'avez pas le module apache \"mod_rewrite\" sur votre serveur, il est possible que cette option ne fonctionne pas. Veuillez contacter votre administrateur syst&egrave;me pour plus de d&eacute;tails." ) ;
define("_MI_APCAL_WIDERWEEKENDDESC" , "Maintenez enfonc&eacute; la touche \"Ctrl\" lorsque vous cliquez sur un jour pour en s&eacute;lectionner plus d'un." ) ;
define('_MI_APCAL_THMORDEFAULTDESC', 'Th&egrave;me: Entrez le nom de votre fichier css dans le champ suivant. (Recommand&eacute;)<br />Personnalisation: Remplissez les 13 champs suivants.<br />D&eacute;faut: Utiliser les couleurs par d&eacute;faut.');

// Options of each config items
define('_MI_APCAL_OPT_THM', 'Th&egrave;me');
define('_MI_APCAL_OPT_CUSTOM', 'Personnalisation');
define('_MI_APCAL_OPT_DEFAULT', 'D&eacute;faut');
define("_MI_APCAL_OPT_AUTH_NONE", "ne peut pas ajouter");
define("_MI_APCAL_OPT_AUTH_WAIT", "peut ajouter mais sera mod&eacute;r&eacute;");
define("_MI_APCAL_OPT_AUTH_POST", "peut ajouter sans mod&eacute;ration");
define("_MI_APCAL_OPT_AUTH_BYGROUP", "sp&eacute;cifi&eacute; dans les permissions de groupes");
define("_MI_APCAL_OPT_MINI_PHPSELF", "page courante");
define("_MI_APCAL_OPT_MINI_MONTHLY", "calendrier mensuel");
define("_MI_APCAL_OPT_MINI_WEEKLY", "calendrier hebdomadaire");
define("_MI_APCAL_OPT_MINI_DAILY", "calendrier journalier");
define("_MI_APCAL_OPT_MINI_LIST", "Liste d'&eacute;v&egrave;nements");
define("_MI_APCAL_OPT_CANOUTPUTICS", "peut extraire");
define("_MI_APCAL_OPT_CANNOTOUTPUTICS", "ne peut pas extraire");
define("_MI_APCAL_OPT_STARTFROMSUN", "Dimanche");
define("_MI_APCAL_OPT_STARTFROMMON", "Lundi");
define("_MI_APCAL_OPT_WEEKNOEACHMONTH", "Pour chaque mois");
define("_MI_APCAL_OPT_WEEKNOWHOLEYEAR", "Par ann&eacute;e enti&egrave;re");
define("_MI_APCAL_OPT_USENAME" , "Nom r&eacute;el" ) ;
define("_MI_APCAL_OPT_USEUNAME" , "Nom de Login" ) ;
define('_MI_APCAL_OPT_TZ_USEXOOPS','Valeur param&eacute;tr&eacute;e dans la configuration XOOPS');
define('_MI_APCAL_OPT_TZ_USEWINTER','Valeur donn&eacute;e par le serveur = heure d\'hiver (recommand&eacute;)');
define('_MI_APCAL_OPT_TZ_USESUMMER','Valeur donn&eacute;e par le serveur = heure d\'&eacute;t&eacute;');
define("_MI_APCAL_OPT_NONE", "Aucun");
define('_MI_APCAL_SUNDAY', 'Dimanche');
define('_MI_APCAL_MONDAY', 'Lundi');
define('_MI_APCAL_TUESDAY', 'Mardi');
define('_MI_APCAL_WEDNESDAY', 'Mercredi');
define('_MI_APCAL_THURSDAY', 'Jeudi');
define('_MI_APCAL_FRIDAY', 'Vendredi');
define('_MI_APCAL_SATURDAY', 'Samedi');

// Admin Menus
define('_MI_APCAL_INDEX', 'Index');
define("_MI_APCAL_ADMENU0", "Validation d'Ev&egrave;nements");
define("_MI_APCAL_ADMENU1", "Gestionnaire d'Ev&egrave;nements");
define("_MI_APCAL_ADMENU_CAT", "Gestionnaire de Cat&eacute;gories");
define("_MI_APCAL_ADMENU_CAT2GROUP", "Permissions des Cat&eacute;gories");
define("_MI_APCAL_ADMENU2", "Permissions Globales");
define("_MI_APCAL_ADMENU_TM", "Maintenance des Tables");
define('_MI_APCAL_ADMENU_PLUGINS','Gestionnaire de Plugins');
define("_MI_APCAL_ADMENU_ICAL", "Imports iCalendar");
define('_MI_APCAL_ADMENU_MYTPLSADMIN','Templates');
define('_MI_APCAL_ADMENU_MYBLOCKSADMIN','Administration des Blocs&Groupes');

// Text for notifications
define('_MI_APCAL_GLOBAL_NOTIFY', 'Globale');
define('_MI_APCAL_GLOBAL_NOTIFYDSC', 'Options de notifications globales de APCal.');
define('_MI_APCAL_CATEGORY_NOTIFY', 'Cat&eacute;gorie');
define('_MI_APCAL_CATEGORY_NOTIFYDSC', 'Options de notifications s\'appliquant &agrave; cette categorie.');
define('_MI_APCAL_EVENT_NOTIFY', 'Ev&egrave;nement');
define('_MI_APCAL_EVENT_NOTIFYDSC', 'Options de notifications s\'appliquant &agrave; cet &eacute;v&egrave;nement.');

define('_MI_APCAL_GLOBAL_NEWEVENT_NOTIFY', 'Nouvel Ev&egrave;nement');
define('_MI_APCAL_GLOBAL_NEWEVENT_NOTIFYCAP', 'Notifiez-moi quand un nouvel &eacute;v&egrave;nement est cr&eacute;&eacute;.');
define('_MI_APCAL_GLOBAL_NEWEVENT_NOTIFYDSC', 'Recevoir une notification quand un nouvel &eacute;v&egrave;nement est cr&eacute;&eacute;.');
define('_MI_APCAL_GLOBAL_NEWEVENT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Notification automatique : Nouvel &eacute;v&egrave;nement');

define('_MI_APCAL_CATEGORY_NEWEVENT_NOTIFY', 'Nouvel &eacute;v&egrave;nement dans la cat&eacute;gorie');
define('_MI_APCAL_CATEGORY_NEWEVENT_NOTIFYCAP', 'Notifiez moi quand un nouvel &eacute;v&egrave;nement est cr&eacute;&eacute; dans la Cat&eacute;gorie.');
define('_MI_APCAL_CATEGORY_NEWEVENT_NOTIFYDSC', 'Recevoir une notification quand un nouvel &eacute;v&egrave;nement est cr&eacute;&eacute; dans la Cat&eacute;gorie.');
define('_MI_APCAL_CATEGORY_NEWEVENT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Notification automatique : Nouvel &eacute;v&egrave;nement dans {CATEGORY_TITLE}');

}

?>