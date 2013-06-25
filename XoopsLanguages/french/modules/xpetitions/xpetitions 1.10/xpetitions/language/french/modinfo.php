<?php
/* ******************************************* */
/*                INFORMATUX                   */
/*         http://www.informatux.com/          */
/*       SOLUTIONS AND WEB DEVELOPMENT         */
/*             Patrice BOUTHIER                */
/*                   2008                      */
/* ------------------------------------------- */
/*    XOOPS - PHP Content Management System    */
/*         Copyright (c) 2000 XOOPS.org        */
/*            <http://www.xoops.org/>          */
/* ******************************************* */

// Le nom du module
define('_MI_XPETITIONS_NAME', 			'Xpetitions');

// Une brève description du module
define('_MI_XPETITIONS_DESC',			'P&eacute;titions en ligne');

// Menu
define('_MI_XPETITIONS_MENU1',			'Accueil');
define('_MI_XPETITIONS_MENU2',			'Cr&eacute;ation');
define('_MI_XPETITIONS_MENU3',			'Modification');
define('_MI_XPETITIONS_MENU4',			'Gestion des signatures');
define('_MI_XPETITIONS_MENU5',			'Gestion des emails');
define('_MI_XPETITIONS_MENU6',			'Gestion des champs');
define('_MI_XPETITIONS_MENU7',			'Gestion des captchas');

// Préférences du module
define('_MI_XPETITIONS_NAVIGATION',		'Barre de navigation');
define('_MI_XPETITIONS_NAVIGATION_DSC',		'Cette option permet aux visiteurs de votre site d\'utiliser une barre de navigation pour se d&eacute;placer dans le module entre vos diff&eacute;rentes p&eacute;titions');
define('_MI_XPETITIONS_UPLOAD_SIZE',		'Taille d\'upload maximum de la p&eacute;tition papier');
define('_MI_XPETITIONS_UPLOAD_SIZE_DSC',	'Taille maximum en octets des fichiers joints (p&eacute;titions papier) &agrave; vos p&eacute;titions en ligne');
define('_MI_XPETITIONS_ADMIN_PAGE',		'Nombre de p&eacute;titions affich&eacute;es');
define('_MI_XPETITIONS_ADMIN_PAGE_DSC',		'Nombre de p&eacute;titions affich&eacute;es par page c&ocirc;t&eacute; Admin');
define('_MI_XPETITIONS_INDEX_PAGE',		'Nombre de p&eacute;titions affich&eacute;es');
define('_MI_XPETITIONS_INDEX_PAGE_DSC',		'Nombre de p&eacute;titions affich&eacute;es par page c&ocirc;t&eacute; Visiteurs');
define('_MI_XPETITIONS_ADMIN_SIGN_PAGE',	'Nombre de signatures affich&eacute;es');
define('_MI_XPETITIONS_ADMIN_SIGN_PAGE_DSC',	'Nombre de signatures affich&eacute;es par pages c&ocirc;t&eacute; Admin');
define('_MI_XPETITIONS_INDEX_SIGNS',		'Afficher le nombre de signatures par p&eacute;titions');
define('_MI_XPETITIONS_INDEX_SIGNS_DSC',	'Cette option vous permet d\'afficher ou non le nombre de signatures valid&eacute;es par les signataires de vos p&eacute;titions sur la page d\'accueil du module c&ocirc;t&eacute; Visiteurs. Le d&eacute;compte n\'appara&icirc;t que s\'il y a au moins une signature');
define('_MI_XPETITIONS_INDEX_ARCHI',		'Afficher les p&eacute;titions archiv&eacute;es sur la page d\'accueil');
define('_MI_XPETITIONS_INDEX_ARCHI_DSC',	'Cette option vous permet d\'afficher ou non les p&eacute;titions dont vous avez chang&eacute; le statut en "Archives" c&ocirc;t&eacute; visiteurs.<br />N.B. : Les p&eacute;titions aux statuts "Archives" ne peuvent plus &ecirc;tre sign&eacute;es');
define('_MI_XPETITIONS_SIGN_TITLE',		'Intitul&eacute; pour signer la p&eacute;tition');
define('_MI_XPETITIONS_SIGN_TITLE_DSC',		'Texte du lien qui permettra &agrave; vos visiteurs d\'acc&eacute;der au formulaire de signature en ligne');
define('_MI_XPETITIONS_SIGN_DOWNL',		'Intitul&eacute; pour t&eacute;l&eacute;charger la p&eacute;tition papier');
define('_MI_XPETITIONS_SIGN_DOWNL_DSC',		'Texte du lien qui permettra &agrave; vos visiteurs de t&eacute;l&eacute;charger la version papier de votre p&eacute;tition en ligne.<br />Si vous n\'avez pas inclus de version papier dans vos p&eacute;titions, ce lien n\'appara&icirc;tra pas');
define('_MI_XPETITIONS_SIGN_FRIEND',		'Intitul&eacute; pour envoyer &agrave; un ami');
define('_MI_XPETITIONS_SIGN_FRIEND_DSC',	'Texte du lien qui permettra &agrave; vos visiteurs de pr&eacute;venir un ami par email de votre p&eacute;tition &agrave; signer');
define('_MI_XPETITIONS_SIGN_SHOW',		'Intitul&eacute; pour voir les signatures');
define('_MI_XPETITIONS_SIGN_SHOW_DSC',		'Texte du lien qui permettra de voir les signatures enregistr&eacute;es par les internautes sur vos p&eacute;titions en ligne');
define('_MI_XPETITIONS_SEND_FRIEN',		'Afficher le lien pour envoyer un message &agrave; un ami');
define('_MI_XPETITIONS_SEND_FRIEN_DSC',		'Cette option permet d\'afficher ou non le lien "envoyer/pr&eacute;venir un ami" dans les p&eacute;titions');
define('_MI_XPETITIONS_PATH_UPLOAD',		'Chemin physique pour l\'upload des p&eacute;titions papier');
define('_MI_XPETITIONS_PATH_UPLOAD_DSC',	'Le chemin physique doit &ecirc;tre param&eacute;tr&eacute; &agrave; la racine de xoops et pas avant.<br />Exemple : Les fichiers attach&eacute;s &agrave; t&eacute;l&eacute;charg&eacute;s doivent se trouver &agrave; http://www.votresite.com/uploads/xpetitions.<br />Alors le chemin &agrave; saisir sera alors \'/upload/xpetitions\' sans inclure le \'/\' final.<br />N\'oubliez pas de modifier les droits du r&eacute;pertoire en 777 (rwxrwxrwx).');
define('_MI_XPETITIONS_CAPTCHA_IMG',		'V&eacute;rification anti-spam');
define('_MI_XPETITIONS_CAPTCHA_IMG_DSC',	'Vous pouvez choisir d\'int&eacute;grer une image captcha dans vos formulaires de signatures en ligne &agrave; toutes vos p&eacute;titions pour &eacute;viter de recevoir des spams');
define('_MI_SSECTION_WYSIWYG', 			'Type d\'&eacute;diteur');
define('_MI_SSECTION_WYSIWYGDSC',		'S&eacute;lectionner le type d\'&eacute;diteur que vous d&eacute;sirez utiliser pour vos p&eacute;titions. Veuillez noter que tout autre &eacute;diteur que XoopsEditor doit &ecirc;tre install&eacute; sur votre site.');
define('_MI_XPETITIONS_VALID_METHOD',		'Type de validation du formulaire de signature');
define('_MI_XPETITIONS_VALID_METHODSC',		'Le formulaire de validation des signatures peut &ecirc;tre valider de deux fa&ccedil;ons :<br />1. Email : Par email envoy&eacute; au signataire (retour de confirmation par lien avec cl&eacute; dans l\'email)<br />2. Auto : Automatiquement sur le site par double clic sans envoi d\'email');

// xoops version
define("_MI_XPETITIONS_INDEX",			"Template index du module");
define("_MI_XPETITIONS_HEADER",			"Template ent&ecirc;te de page de l'index du module");
define("_MI_XPETITIONS_FOOTER",			"Template pied de page de l'index du module");
define("_MI_XPETITIONS_DISPLAY_INDEX",		"Template index de la page d'une p&eacute;tition");
define("_MI_XPETITIONS_DISPLAY_FORM",		"Template du formulaire de signature en ligne d'une p&eacute;tition");
define("_MI_XPETITIONS_DISPLAY_TOOLBAR",	"Template de la barre outil de chaque p&eacute;tition");
define("_MI_XPETITIONS_DISPLAY_SIGNS",		"Template enregistrement d'une signature");
define("_MI_XPETITIONS_DISPLAY_FRIEND",		"Template pr&eacute;venir un ami");
define("_MI_XPETITIONS_DISPLAY_ALLSIGNS",	"Template affichage des signatures valid&eacute;es");
define("_MI_XPETITIONS_DISPLAY_FRIEND_SEND",	"Template pr&eacute;venir un ami - envoi du mail");
define("_MI_XPETITIONS_DISPLAY_VALID",		"Template validation d'une signature");
define("_MI_XPETITIONS_DISPLAY_PRESIGN",	"Template pr&eacute;signature avant validation automatique");
define("_MI_XPETITIONS_DISPLAY_VALID_PRESIGN",	"Template validation d'une pr&eacute;signature");

// blocks
define("_MI_XPETITIONS_BNAME1",			"Derni&egrave;res signatures");
define("_MI_XPETITIONS_BNAME2",			"Mes p&eacute;titions actives");
define("_MI_XPETITIONS_BNAME3",			"Mes p&eacute;titions archiv&eacute;es");

//1.10 RC1
define('_MI_XPETITIONS_SIGN_FRIEND_DEFAULT','Prévenir un ami');
define('_MI_XPETITIONS_SIGN_SHOW_DEFAULT','Voir les signatures');
define('_MI_XPETITIONS_SIGN_TITLE_DEFAULT','Je signe!');
define('_MI_XPETITIONS_SIGN_DOWNL_DEFAULT','Télécharger une version imprimable de la pétition');
define('_MI_XPETITIONS_EDITOR_OPTIONS','Select Editor');