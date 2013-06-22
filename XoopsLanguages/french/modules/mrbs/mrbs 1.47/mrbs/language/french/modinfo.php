<?php

$mydirname = basename(dirname(dirname(dirname( __FILE__ ))));
$GLOBALS["MRBS_PREFIX"] = strtoupper($mydirname);

define("_MI_".$GLOBALS["MRBS_PREFIX"]."_MENU_PREFERENCES","Pr&eacute;f&eacute;rences");
define("_MI_".$GLOBALS["MRBS_PREFIX"]."_MENU_PERMISSION","Permissions");
define("_MI_".$GLOBALS["MRBS_PREFIX"]."_MENU_DESC_PERMISSION","Anonymous can only have view rights");
define("_MI_".$GLOBALS["MRBS_PREFIX"]."_MENU_INDEX","Index");
define("_MI_".$GLOBALS["MRBS_PREFIX"]."_MENU_HOW_TO","How to");
define("_MI_".$GLOBALS["MRBS_PREFIX"]."_MENU_ABOUT","A propos");
define("_MI_".$GLOBALS["MRBS_PREFIX"]."_MENU_ROOMS_AREAS","Gestion des salles/zones");
define("_MI_".$GLOBALS["MRBS_PREFIX"]."_MENU_HELP","Aide");
define("_MI_".$GLOBALS["MRBS_PREFIX"]."_MENU_UPDATES","Mises &agrave; jour");

define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_VIEW_BOOKING','View details page');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_CREATE_BOOKING','Create a booking');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MODIFY_BOOKING','Manage bookings');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_FULL_ADMIN','Full admin');

define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_ADMIN','Nom de l\'administrateur');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_ADMIN_DESC','');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_ADMIN_EMAIL','Email de l\'administrateur');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_ADMIN_EMAIL_DESC','');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_COMPANY','Nom de votre soci&eacute;t&eacute;');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_COMPANY_DESC','');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_COMPANY_LOGO','Logo de votre soci&eacute;t&eacute;');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_COMPANY_LOGO_DESC','Nom du fichier logo<br />
Ce fichier doit se trouver dans le dossier MRBS<br />
Permet d\'utiliser un logo &agrave; la place du nom de la soci&eacute;t&eacute; dans l\'en-t&ecirc;te du module<br />
Laisser vide pour ne pas afficher de logo.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_COMPANY_MORE_INFO','Plus d\'infos sur la soci&eacute;t&eacute;');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_COMPANY_MORE_INFO_DESC','Pour afficher des infos suppl&eacute;mentaire sur votre soci&eacute;t&eacute; ou sur le logo.<br />
Laisser vide pour ne rien afficher.');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_COMPANY_URL','Url du site de la soci&eacute;t&eacute;.');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_COMPANY_URL_DESC','Pour cr&eacute;er un lien sur le nom de votre soci&eacute;t&eacute; dans l\'en-t&ecirc;te.<br />
Laisser vide pour ne rien afficher.');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_URL_BASE','Base de l\'url');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_URL_BASE_DESC','Pour fixer le probl&egrave;me lors de l\'utilisation d\'un proxy.<br />
Si un lien &agrave; l\'int&eacute;rieur de MRBS semble cass&eacute;, alors, sp&eacute;cifier ici l\'adresse vers votre module MRBS.<br />
Il est aussi recommand&eacute; de sp&eacute;cifier cette adresse si vous utilisez les notifications par mail, afin de vous assurer que les url seront affich&eacute;es correctement.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SHOWBOOKER','Afficher la personne ayant r&eacute;serv&eacute; (booker)');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SHOWBOOKER_DESC','Affiche le nom r&eacute;el, le pseudo, les deux ou aucune information (except&eacute; pour l\'admin).<br />
Dans la page de rapport, ou dans le d&eacute;tail de la r&eacute;servation.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SHOWBOOKER_UNAME','Pseudo');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SHOWBOOKER_NAME','Nom r&eacute;el');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SHOWBOOKER_BOTH','Les deux');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SHOWBOOKER_NONE','Aucun');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SHOWPASTMONTH','Afficher le mini-calendrier du mois pass&eacute;');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SHOWPASTMONTH_DESC','Afiche ou masque le mini-calendrier du mois pass&eacute;.');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_ENABLE_PERIODS','P&eacute;riodes');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_ENABLE_PERIODS_DESC','Ce param&egrave;tre permet d\'utiliser soit le intervalles bas&eacute;s sur les heures (D&eacute;sactiver)<br />
soit les p&eacute;riodes d&eacute;finies par l\'utilisateur (Activer).<br />
Si l\'usage des p&eacute;riodes est activ&eacute;, alors la R&eacute;solution, l\'heure de d&eacute;but et de fin (heures et minutes) et le format de l\'heure dans les pages seront ignor&eacute;s.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_ENABLE_PERIODS_TRUE','Activer les p&eacute;riodes');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_ENABLE_PERIODS_FALSE','D&eacute;sactiver les p&eacute;riodes');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_RESOLUTION','R&eacute;solution');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_RESOLUTION_DESC','Dur&eacute;e des intervalles pouvant &ecirc;tre r&eacute;serv&eacute;s, en secondes.<br />
1800 sec = 30 min');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DEFAULT_DURATION','Dur&eacute;e par d&eacute;faut');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DEFAULT_DURATION_DESC','Dur&eacute;e par d&eacute;faut d\'une r&eacute;servation (en secondes).<br />
Non utilis&eacute; si les p&eacute;riodes sont d&eacute;sactiv&eacute;es. Valeur par d&eacute;faut : 3600 seconds, soit 1 heure.');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MORNINGSTARTS','Heure de d&eacute;but de la journ&eacute;e');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MORNINGSTARTS_DESC','Doit &ecirc;tre un entier entre 0 et 23.');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MORNINGSTARTS_MINUTES','Minutes de d&eacute;but de la journ&eacute;e (en compl&eacute;ment de l\'heure ci-dessus)');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MORNINGSTARTS_MINUTES_DESC','Doit &ecirc;tre un entier entre 0 et 59.');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_EVENINGENDS','Derni&egrave;re heure de la journ&eacute;e');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_EVENINGENDS_DESC','Doit &ecirc;tre un entier entre 0 et 23.');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_EVENINGENDS_MINUTES','Derni&egrave;re minute de la journ&eacute;e (en compl&eacute;ment de l\'heure ci-dessus).');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_EVENINGENDS_MINUTES_DESC','Doit &ecirc;tre un entier entre 0 et 59.');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_HIDDEN_DAYS','Jours masqu&eacute;s');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_HIDDEN_DAYS_DESC','Jours de la semaine qui doivent &ecirc;tre masqu&eacute;s &agrave; l\'affichage (s&eacute;par&eacute;s par une virgule)<br />
0 pour Dimanche, 1 pour Lundi, etc.<br />
Par exemple, si vous souhaitez masquer Samedi et Dimanche, indiquer <b>0,6</b><br />
Par d&eacute;faut, les jours masqu&eacute;s sont supprim&eacute;s compl&egrave;tement de l\'affichage par mois et par semaine.<br />
Vous pouvez aussi param&eacute;trer les styles pour les afficher de mani&egrave;re plus fine ou gris&eacute;es en &eacute;ditant les feuilles de styles.<br />
Voir $column_hidden_width dans le fichier mrbs.css.php<br />
Attention : m&ecirc;me si ces jours sont masqu&eacute;s lors de l\'affichage par mois ou semaine, ils peuvent toujours &ecirc;tre s&eacute;lectionn&eacute;s &agrave; partir du formulaire de r&eacute;servation et vous pouvez afficher les r&eacute;servations en visualisant directement le jour, en utilisant le s&eacute;lecteur de date.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DATEFORMAT','Format de date');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DATEFORMAT_DESC','Pour afficher les dates sous la forme "Juil 10" ou "10 Juil".');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DATEFORMAT_0','Ex: Juil 10');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DATEFORMAT_1','Ex: 10 Juil');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_TWENTYFOURHOUR_FORMAT','Format des heures');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_TWENTYFOURHOUR_FORMAT_DESC','Format 12H ou 24H.');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_TWENTYFOURHOUR_FORMAT_0','12H');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_TWENTYFOURHOUR_FORMAT_1','24H');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAX_REP_ENTRYS','R&eacute;p&eacute;tition maximale pour les r&eacute;servations');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAX_REP_ENTRYS_DESC','Nombre max en jours +1');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DEFAULT_REPORT_DAYS','Date de fin de rapport par d&eacute;faut (en jours)');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DEFAULT_REPORT_DAYS_DESC','Lorsque vous affichez la page de rapport, une date limite de fin par d&eacute;faut est s&eacute;lectionn&eacute;e.<br />
Cette option permet de param&eacute;trer cette date limite de fin de recherche.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SEARCHCOUNT','Nombre de r&eacute;sultats par page affich&eacute;s lors d\'une recherche');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SEARCHCOUNT_DESC','');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_REFRESH_RATE','Rafra&icirc;chissement des pages (en secondes)');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_REFRESH_RATE_DESC','0 pour d&eacute;sactiver le rafra&icirc;chissement automatique.');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SIMPLE_TRAILER','Bandeau de navigation (Trailer)');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SIMPLE_TRAILER_DESC','Bandeau complet avec les liens vers les jours, semaines et mois, avant et apr&egrave;s la date courante.<br />
Ou bandeau simple qui contient juste les liens pour le jour/semaine/mois en cours.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SIMPLE_TRAILER_TRUE','Bandeau simple');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SIMPLE_TRAILER_FALSE','Bandeau complet');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_AREA_LIST_FORMAT','Affichage des salles/zones');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_AREA_LIST_FORMAT_DESC','Choix d\'affichage entre une liste simple ou un menu d&eacute;roulant.');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_AREA_LIST_FORMAT_LIST','Liste');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_AREA_LIST_FORMAT_SELECT','Menu d&eacute;roulant');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MONTHLY_VIEW_ENTRIES_DETAILS','Affichage des d&eacute;tails pour la vue mensuelle');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MONTHLY_VIEW_ENTRIES_DETAILS_DESC','Dans la vue mensuelle, les r&eacute;servations peuvent &ecirc;tre affich&eacute;es avec le d&eacute;tail des heures, une br&egrave;ve description ou les deux.<br />
Choisir "Description" pour une br&egrave;ve description, "Heures" pour le d&eacute;tails des heures et "Les deux" pour tout afficher.<br />
Default is "both", but 6 entries per day are shown instead of 12.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MONTHLY_VIEW_ENTRIES_DETAILS_D','Description');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MONTHLY_VIEW_ENTRIES_DETAILS_S','Heures');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MONTHLY_VIEW_ENTRIES_DETAILS_B','Les deux');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_VIEW_WEEK_NUMBER','Num&eacute;rotation des semaines');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_VIEW_WEEK_NUMBER_DESC','Pour afficher les semaines dans le bandeau, sous forme de num&eacute;ro (42) au lieu du premier jour de la semaine (13 Oct), choisissez "Afficher les num&eacute;ros des semaines".');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_VIEW_WEEK_NUMBER_TRUE','Afficher les num&eacute;ros des semaines');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_VIEW_WEEK_NUMBER_FALSE','Masquer les num&eacute;ros des semaines');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_TIMES_RIGHT_SIDE','Afficher l\'heure &agrave; droite');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_TIMES_RIGHT_SIDE_DESC','Pour afficher l\'heure sur la droite (dans la vue par jour/semaine), choisissez "Afficher l\'heure &agrave; droite".');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_TIMES_RIGHT_SIDE_TRUE','Afficher l\'heure &agrave; droite');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_TIMES_RIGHT_SIDE_FALSE','Masquer l\'heure &agrave; droite');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_JAVASCRIPT_CURSOR','Curseur Javascript');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_JAVASCRIPT_CURSOR_DESC','Contr&ocirc;le le curseur dans la vue par jour/semaine/mois.<br />
Par d&eacute;faut, la surbrillance est impl&eacute;ment&eacute;e avec l\'utilisation de CSS :hover pseudo-class.<br />
Pour les anciens navigateurs tels que IE6, ce n\'est pas support&eacute; et MRBS utilisera automatiquement la surbrillance g&eacute;r&eacute;e par JavaScript.<br />
Pour cela, il y a 3 modes diff&eacute;rents : "bgcolor","class" et "hybrid" (Voir le param&egrave;tre suivant).<br />
Si les clients ont de tr&egrave;s anciens navigateurs, alors vous pouvez d&eacute;sactiver la surbrillance g&eacute;r&eacute;e par JavaScript.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_JAVASCRIPT_CURSOR_TRUE','Activer le curseur javascript');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_JAVASCRIPT_CURSOR_FALSE','D&eacute;sactiver le curseur javascript');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_HIGHLIGHT_METHOD','M&eacute;thode de surbrillance');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_HIGHLIGHT_METHOD_DESC','"Hybrid" est recommand&eacute; car il est plus rapide avec les anciens navigateurs tels que IE6<br />
C\'est d\'ailleurs le seul cas o&ugrave; la surbrillance g&eacute;r&eacute;e par JavaScript est utilis&eacute;e.<br />
Le reste du temps, la surbrillance g&eacute;r&eacute;e en CSS est utilis&eacute;e, peu importe que "Curseur Javascript" soit activ&eacute; ou non.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_HIGHLIGHT_METHOD_HYBRID','Hybrid');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_HIGHLIGHT_METHOD_CLASS','Class');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_HIGHLIGHT_METHOD_BGCOLOR','Bgcolor');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SHOW_PLUS_LINK','Lien (+)');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SHOW_PLUS_LINK_DESC','Pour toujours afficher l\'image (+) comme dans MRBS 1.1');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SHOW_PLUS_LINK_TRUE','Afficher (+)');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SHOW_PLUS_LINK_FALSE','Masquer (+)');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DEFAULT_VIEW','Vue de d&eacute;part par d&eacute;faut');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DEFAULT_VIEW_DESC','Mois, semaine ou jour');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DEFAULT_VIEW_DAY','Jour');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DEFAULT_VIEW_WEEK','Semaine');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DEFAULT_VIEW_MONTH','Mois');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DEFAULT_ROOM','Salle par d&eacute;faut');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DEFAULT_ROOM_DESC','D&eacute;finit la salle par d&eacute;faut devant &ecirc;tre affich&eacute;e (utilis&eacute; par index.php)<br />
Les num&eacute;ros des salles sont visibles en regardant l\'URL d\'&eacute;dition ou de suppression dans la page d\'administration.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SESSION','M&eacute;thode d\'Authentification');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SESSION_DESC','Comment r&eacute;cup&eacute;rer et garder l\'ID utilisateur.<br />
"php" convient parfaitement dans la majorit&eacute; des cas.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SESSION_PHP','php');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SESSION_HTTP','http');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_ON_BOOKINGS','Pr&eacute;venir l\'administrateur lors d\'une r&eacute;servation');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_ON_BOOKINGS_DESC','Choisir "Oui" si vous souhaitez &ecirc;tre averti lors des nouvelles r&eacute;servations.');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_ON_BOOKINGS_TRUE','Oui');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_ON_BOOKINGS_FALSE','Non');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_AREA_ADMIN_ON_BOOKINGS','Pr&eacute;venir l\'administrateur de la zone lors d\'une r&eacute;servation');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_AREA_ADMIN_ON_BOOKINGS_DESC','Choisir "Oui" si vous souhaitez que l\'administrateur de la zone soit averti lors des nouvelles r&eacute;servations.<br />
L\'email de l\'administrateur de la zone se param&egrave;tre dans la page d\'administration de la zone.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_AREA_ADMIN_ON_BOOKINGS_TRUE','Oui');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_AREA_ADMIN_ON_BOOKINGS_FALSE','Non');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ROOM_ADMIN_ON_BOOKINGS','Pr&eacute;venir l\'administrateur de la salle lors d\'une r&eacute;servation');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ROOM_ADMIN_ON_BOOKINGS_DESC','Choisir "Oui" si vous souhaitez que l\'administrateur de la salle soit averti lors des nouvelles r&eacute;servations.<br />
L\'email de l\'administrateur de la salle se param&egrave;tre dans la page d\'administration de la salle.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ROOM_ADMIN_ON_BOOKINGS_TRUE','Oui');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ROOM_ADMIN_ON_BOOKINGS_FALSE','Non');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_ON_DELETE','Pr&eacute;venir l\'administrateur lors d\'une suppression de r&eacute;servation');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_ON_DELETE_DESC','Choisir "Oui" si vous souhaitez que l\'administrateur soit averti des suppressions de r&eacute;servations.<br />
L\'email sera envoy&eacute; &agrave; l\'administrateur du module, l\'administrateur de la zone/salle en fonction de param&egrave;tres ci-dessus, ainsi qu\'&agrave; la personne ayant r&eacute;serv&eacute;e si "Mail Booker" est activ&eacute; (voir plus bas).
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_ON_DELETE_TRUE','Oui');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_ON_DELETE_FALSE','Non');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_ALL','Toujours avertir l\'administrateur');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_ALL_DESC','Choisissez "Oui" si vous souhaitez &ecirc;tre inform&eacute;s de chaque changement (notamment en cas de nouvelle r&eacute;servation)<br />
Mais &eacute;galement en cas d\'&eacute;dition de r&eacute;servations existantes. "Non" par d&eacute;faut (seulement en cas de nouvelle r&eacute;servation).
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_ALL_TRUE','Oui');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_ALL_FALSE','Non');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_DETAILS','Indiquer les d&eacute;tails dans les mails de notification');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_DETAILS_DESC','Choisissez "Oui" pour afficher le d&eacute;tail de la r&eacute;servation dans le mail, sinon, seul un lien vers la r&eacute;servation sera envoy&eacute;.<br />
Ne concerne pas les r&eacute;servations supprim&eacute;es.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_DETAILS_TRUE','Oui');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_DETAILS_FALSE','Non');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_BOOKER','Mail booker');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_BOOKER_DESC','Choisisez "Oui" si vous souhaitez que la personne ayant r&eacute;serv&eacute; re&ccedil;oive un r&eacute;capitulatif de sa r&eacute;servation, ainsi que des changements ult&eacute;rieurs.<br />
D&eacute;pend de "Toujours avertir l\'administrateur", voir plus haut.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_BOOKER_TRUE','Oui');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_BOOKER_FALSE','Non');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_BACKEND','M&eacute;thode d\'envoi des mails');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_BACKEND_DESC','Choisissez le mode d\'envoi des mails.<br />
Soit "mail","smtp" ou "sendmail".
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_BACKEND_MAIL','mail');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_BACKEND_SMTP','smtp');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_BACKEND_SENDMAIL','Sendmail');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SENDMAIL_PATH','Chemin pour Sendmail');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SENDMAIL_PATH_DESC','Indiquez le chemin pour le programme Sendmail (utilis&eacute; seulement pour l\'envoi avec "sendmail").');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SENDMAIL_ARGS','Sendmail arguments');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SENDMAIL_ARGS_DESC','Indiquez des param&egrave;tres optionnels pour Sendmail (utilis&eacute; seulement pour l\'envoi avec "sendmail").<br />
Exemple : -t -i
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SMTP_HOST','H&ocirc;te SMTP');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SMTP_HOST_DESC','Indiquez le serveur stmp &agrave; utiliser.<br />
Utilis&eacute; seulement pour l\'envoi avec "smtp".
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SMTP_PORT','Port SMTP');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SMTP_PORT_DESC','Inidiquez le port &agrave; utiliser.<br />
Utilis&eacute; seulement pour l\'envoi avec "smtp".
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SMTP_AUTH','Authentification SMTP');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SMTP_AUTH_DESC','Indiquez si l\'authentification SMTP est n&eacute;cessaire ou pas.');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SMTP_AUTH_TRUE','Oui');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SMTP_AUTH_FALSE','Non');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SMTP_USERNAME','Nom d\'utilisateur SMTP');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SMTP_USERNAME_DESC','Indiquez le nom d\'utilisateur pour l\'authentification SMTP.');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SMTP_PASSWORD','Mot de passe SMTP');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_SMTP_PASSWORD_DESC','Indiquez le mot de passe pour l\'authentification SMTP.');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_LANG','Admin langage');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_ADMIN_LANG_DESC','Indiquez la langue utilis&eacute;e pour les mails (parmi les fichiers lang.*).');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_FROM','Mail de...');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_FROM_DESC','Indiquez l\'adresse utilis&eacute;e pour le champs "De".<br />
Si vide, l\'email de l\'administrateur sera utilis&eacute;.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_RECIPIENTS','Destinataires');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_RECIPIENTS_DESC','Indiquez un ou des destinataires pour les mails.<br />
Vous pouvez d&eacute;finir un ou plusieurs destinataires de cette fa&ccedil;on "john@doe.com,scott@tiger.com".<br />
Si vide, l\'email de l\'administrateur sera utilis&eacute;.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_CC','Copie conforme des mails');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_CC_DESC','Indiquez une adresse mail pour le champs "Copie conforme".<br />
Vous pouvez d&eacute;finir un ou plusieurs destinataires de cette fa&ccedil;on "john@doe.com,scott@tiger.com".
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_UNICODE_ENCODING','Encodage Unicode');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_UNICODE_ENCODING_DESC','UTF-8 par d&eacute;faut (dans les pages et la base de donn&eacute;es).<br />
Si "Non", les textes envoy&eacute;s dans la base de donn&eacute;es utiliseront un encodage diff&eacute;rent, en fonction de la langue de l\'utilisateur');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_UNICODE_ENCODING_0','Ne pas utiliser UTF-8');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_UNICODE_ENCODING_1','Utiliser UTF-8');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DEFAULT_LANGUAGE_TOKENS','Langue par d&eacute;faut');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DEFAULT_LANGUAGE_TOKENS_DESC','Indiquez la langue par d&eacute;faut &agrave; utiliser.<br />
Les fichiers lang.* doivent &ecirc;tre dans le dossier MRBS.<br />
Vous devez mettre le module &agrave; jour si vous ajoutez un nouveau fichier de langue.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DISABLE_AUTOMATIC_LANGUAGE','Changement de langue automatique');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DISABLE_AUTOMATIC_LANGUAGE_DESC',"Activez (ou d&eacute;sactivez) le changement de langue automatique effectu&eacute; par MRBS en fonction des param&egrave;tres de langue du navigateur de l\'utilisateur.<br />
Si 'D&eacute;sactiver' est s&eacute;lectionn&eacute;, la langue utilis&eacute;e sera toujours la langue d&eacute;finie dans le menu d&eacute;roulant ci-dessus.
");
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DISABLE_AUTOMATIC_LANGUAGE_0','Activer');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_DISABLE_AUTOMATIC_LANGUAGE_1','D&eacute;sactiver');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_FAQFILELANG','Fichier de FAQ');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_FAQFILELANG_DESC',"Si votre FAQ est disponible dans votre langue, choisissez-la dans le menu d&eacute;roulant.<br />
Les fichiers de langue pour les FAQ sont dans le dossier MRBS.<br />
Vous devez mettre le module &agrave; jour si vous ajoutez un nouveau fichier de langue.
");
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_THEME','Th&egrave;me');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_THEME_DESC','Choisissez votre th&egrave;me dans le menu d&eacute;roulant.<br />
Les fichiers sont situ&eacute;s dans le dossier "Themes".<br />
Vous devez mettre le module &agrave; jour si vous ajoutez un nouveau th&egrave;me.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_ENTRY_TYPES','Types d\'entr&eacute;es');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_ENTRY_TYPES_DESC','Cr&eacute;ez vos propres types d\'entr&eacute;es.<br />
Utilisez de A &agrave; Z (except&eacute;s E et I qui sont cr&eacute;&eacute;s et r&eacute;serv&eacute;s par d&eacute;faut).<br />
S&eacute;parez les types d\'entr&eacute;es par une virgule.<br />
Editez lang.* dans le dossier "mrbs" pour changer le texte (pr&egrave;s de la ligne 290).<br />
Editez les fichiers *.inc  (pr&egrave;s de la ligne 71) dans le dossier "Themes" pour changer la couleur des cellules.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MONTH_CELL_SCROLLING','D&eacute;filement dans les cellules (vue mensuelle)');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MONTH_CELL_SCROLLING_DESC','Choissez "Oui" si vous voulez utiliser une barre de d&eacute;filement dans les cellules, dans le cas o&ugrave; il y ait trop d\'informations &agrave; afficher.<br />
Choisissez "Non"  si vous voulez que les cellules s\'agrandissent pour contenir toutes les informations.<br />
NOTE 1 : Le scrolling ne fonctionne pas sous IE6, les cellules s\'agrandiront donc toujours sous IE6.<br />
NOTE 2 : Sous IE8 Beta 2, le scrolling ne fonctionne pas non plus, et le contenu des cellules est tronqu&eacute; quand le d&eacute;filement est sur "Oui".
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MONTH_CELL_SCROLLING_TRUE','Oui');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MONTH_CELL_SCROLLING_FALSE','Non');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_PERIODS','P&eacute;riodes');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_PERIODS_DESC','Cr&eacute;ez vos propres p&eacute;riodes.<br />
S&eacute;parez-les avec une virgule.<br />
Editez les fichiers lang.* dans le dossier "mrbs"  pour changer le libell&eacute; (pr&egrave;s de la ligne 298).
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_WEEKSTARTS','D&eacute;but de la semaine');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_WEEKSTARTS_DESC','Jour de d&eacute;but de la semaine: 0 pour for Dimanche, 1 pour Lundi, etc.');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_TIMEZONE','Fuseaux horaires');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_TIMEZONE_DESC','Le fuseau horaire dans lequel se trouve vos salles/zones.<br />
Il est particuli&egrave;rement important de sp&eacute;cifier ce param&egrave;tre si vous utilisez PHP5 sous Linux.<br />
Et c\'est m&ecirc;me indispensable si vous utilisez la m&eacute;thode d\'envoi de mails avec Sendmail.<br />
Si vous ne param&eacute;trez pas cette section, les r&eacute;servations effectu&eacute;es depuis un autre fuseau horaire ne sont pas compens&eacute;es par la DST (heure d\'&eacute;t&eacute;/hiver) correcte.<br />
Lorsque vous mettez &agrave; jour une installation existante, ce param&egrave;tre devrait &ecirc;tre r&eacute;gl&eacute; pour le fuseau horaire dans lequel le serveur web se trouve.<br /><br />
<a href="http://fr.php.net/timezones">Liste des fuseaux support&eacute;s</a>.
');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_WEEKSTARTS_0','Dimanche');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_WEEKSTARTS_1','Lundi');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_WEEKSTARTS_2','Mardi');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_WEEKSTARTS_3','Mercredi');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_WEEKSTARTS_4','Jeudi');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_WEEKSTARTS_5','Vendredi');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_WEEKSTARTS_6','Samedi');

define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_CHARSET','Mail charset');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_MAIL_CHARSET_DESC','Vous pouvez outrepasser le charset utilisé pour les mails si vous utilisez utf-8 pour l\'encodage unicode. Mais attention que les traductions dans les fichiers de langues supportent l\'encodage que vous allez choisir.<br />
Vous pouvez utiliser par exemple : iso-8859-1.
');

define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_USE_LIMIT_TIME_BOOKING','Limit booking ahead');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_USE_LIMIT_TIME_BOOKING_DESC','Use a limit on number of days ahead one can make a booking. Does not apply to full admins');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_USE_LIMIT_TIME_BOOKING_TRUE','Yes');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_USE_LIMIT_TIME_BOOKING_FALSE','No');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_TIME_BOOKING','Number of days ahead a booking can be made');
define('_MI_'.$GLOBALS["MRBS_PREFIX"].'_TIME_BOOKING_DESC','Limit booking ahead must be set to yes');

?>