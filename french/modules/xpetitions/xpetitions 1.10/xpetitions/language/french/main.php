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

// ENCODAGE DU FICHIER ISO-8859-1
// index
define("_MD_XPETITIONS_INDEX",			"P&eacute;titions en ligne");
define("_MD_XPETITIONS_SIGNATURES",		"signatures");
define("_MD_XPETITIONS_ARCHIVE",		"P&eacute;tition archiv&eacute;e");
define("_MD_XPETITIONS_HOME_NAV",		"Accueil");
define("_MD_XPETITIONS_HOME_NAV_SIGN",		"Signer la p&eacute;tition");
define("_MD_XPETITIONS_HOME_NAV_SIGN_RECORDED",	"Signature enregistr&eacute;e");
define("_MD_XPETITIONS_HOME_NAV_PRESIGNED",	"Signature &agrave; valider");
define("_MD_XPETITIONS_HOME_NAV_SIGN_VALID",	"Signature valid&eacute;e");
define("_MD_XPETITIONS_HOME_NAV_FRIEND",	"Pr&eacute;venir un ami");
define("_MD_XPETITIONS_HOME_NAV_VALID",		"Validation de votre signature");
define("_MD_XPETITIONS_HOME_NAV_ALLSIGNS",	"Voir les signatures");
define("_MD_XPETITIONS_HOME_TAB1",		"P&eacute;titions en ligne");
define("_MD_XPETITIONS_HOME_TAB2",		"P&eacute;titions archiv&eacute;es");
define("_MD_XPETITIONS_NO_ACTIVE",		"Aucune p&eacute;tition en ligne &agrave; signer.");
define("_MD_XPETITIONS_NO_ARCHIVE",		"Aucune p&eacute;tition archiv&eacute;e.");
define("_MD_XPETITIONS_NO_DETAIL",		"Aucun d&eacute;tail disponible sur cette p&eacute;tition");
define("_MD_XPETITIONS_OFFLINE",		"P&eacute;tition d&eacute;sactiv&eacute;e");

// formulaire de signature d'une pétition
define("_MD_XPETITIONS_TITLE_SIGNFORM",		"<br />Remplissez le formulaire pour signer en ligne la p&eacute;tition.<br />Une confirmation par %s vous sera demand&eacute;e pour valider votre signature.<br />Les champs marqu&eacute;s par un * sont obligatoires.<br /><br />");
define("_MD_XPETITIONS_TITLE_SIGNFORM1",	"email");
define("_MD_XPETITIONS_TITLE_SIGNFORM2",	"double click");
define("_MD_XPETITIONS_FNAME_SIGNFORM",		"Nom");
define("_MD_XPETITIONS_LNAME_SIGNFORM",		"Pr&eacute;nom");
define("_MD_XPETITIONS_ADDRESS_SIGNFORM",	"Adresse");
define("_MD_XPETITIONS_ZIP_SIGNFORM",		"Code postal");
define("_MD_XPETITIONS_CITY_SIGNFORM",		"Ville");
define("_MD_XPETITIONS_COUNTRY_SIGNFORM",	"Pays");
define("_MD_XPETITIONS_JOB_SIGNFORM",		"Profession");
define("_MD_XPETITIONS_EMAIL_SIGNFORM",		"Email");
define("_MD_XPETITIONS_SUBMIT",			"Signez la p&eacute;tition");
define("_MD_XPETITIONS_CAPTCHA",		"Saisissez le texte pr&eacute;sent dans l'image.<br />Respectez les caract&egrave;res majuscules et minuscules.<br />Si vous n'arrivez pas &agrave; lire le texte, vous pouvez le changer en cliquant sur l'image.");
define("_MD_XPETITIONS_CAPTCHA_DSC",		"V&eacute;rification anti-spam");
// ---------------------------------------------------------------------------------------------
//                                        22/05/09 urbanspaceman mod
// ---------------------------------------------------------------------------------------------
define("_MD_XPETITIONS_WHOVIEW1",		"Les signatures de la p&eacute;tition sont publiques");
define("_MD_XPETITIONS_WHOVIEW2",		"Les signatures de la p&eacute;tition sont visibles par les utilisateurs enregistr&eacute;s uniquement");
define("_MD_XPETITIONS_WHOVIEW3",		"Les signatures de la p&eacute;tition sont visibles par les administrateurs du site uniquement");
// ---------------------------------------------------------------------------------------------
// ---------------------------------------------------------------------------------------------
// ---------------------------------------------------------------------------------------------

// formulaire de pré-signature d'une pétition
define('_MD_XPETITIONS_SIGN_PRESIGNED',		'Vous avez demand&eacute; &agrave;&nbsp;signer notre p&eacute;tition en ligne et nous vous en remercions.<br />
<br />Votre signature sera enregistr&eacute;e dans notre base de donn&eacute;es&nbsp;en cliquant sur le bouton suivant. Apr&egrave;s cela, vous serez pris en compte parmi les signataires.<br /><br />');
define('_MD_XPETITIONS_PRESIGN_VALUE',		'Valider votre signature');

// formulaire pour prévenir un ami
define("_MD_XPETITIONS_TITLE_FRIENDFORM",	"<br />Remplissez le formulaire pour pr&eacute;venir un ami qu'il peut signer la p&eacute;tition.<br />Un email sera envoy&eacute; &agrave; celui-ci avec un lien jusqu'&agrave; la p&eacute;tition.<br />Tous les champs sont obligatoires.<br /><br />");
define("_MD_XPETITIONS_YNAME_FRIENDFORM",	"Nom de votre ami");
define("_MD_XPETITIONS_FNAME_FRIENDFORM",	"Votre nom");
define("_MD_XPETITIONS_FEMAIL_FRIENDFORM",	"Adresse email de votre ami");
define("_MD_XPETITIONS_SUBMIT_FRIEND",		"Pr&eacute;venir votre ami");
define("_MD_XPETITIONS_EMAIL_FORMAT_FRIENDFORM","Email envoy&eacute; &agrave; :");
define("_MD_XPETITIONS_EMAIL_FORMAT_DSC",	"<span style='font-weight: bold;' id='contact'></span>");
define("_MD_XPETITIONS_EMAIL_FRIENDFORM",	"Bonjour <span style='font-weight: bold;' id='your_name'></span>,<br /><br />Ce message vous est transmis par <span style='font-weight: bold;' id='friend_name'></span> depuis le site de <span style='font-weight: bold;'>%s</span>.<br />Vous pouvez signer la p&eacute;tition en ligne (<span style='font-weight: bold;'>%s</span>) &agrave; cette adresse :<br /><span style='font-weight: bold;'>%s</span><br /><br />Merci<br />A bient&ocirc;t<br />");
define("_MD_XPETITIONS_EMAIL_FRIENDFORM_SEND",	"Bonjour %s,\n\nCe message vous est transmis par %s depuis le site de %s.\nVous pouvez signer la petition en ligne (%s) a cette adresse :\n%s\n\nMerci\nA bientot\n\n%s\n%s\n%s");
define("_MD_XPETITIONS_EMAIL_SEND",		"L'email a &eacute;t&eacute; envoy&eacute; &agrave; votre ami.<br />Nous vous remercions de l'inter&ecirc;t que vous portez &agrave; notre site.");
define("_MD_XPETITIONS_SUBJECT_EMAIL",		"Pétition du site %s");

// enregistrement d'une signature
define("_MD_XPETITIONS_SIGN_RECORDED",		"Merci d'avoir sign&eacute; notre p&eacute;tition en ligne.<br /><br />Votre signature est enregistr&eacute;e dans notre base de donn&eacute;es maintenant. Vous devez n&eacute;anmoins valider celle-ci en cliquant sur le lien de l'email que nous venons de vous envoyer.<br />Apr&egrave;s cela, vous serez pris en compte parmi les signataires.");
define("_MD_XPETITIONS_SIGN_VALID",		"La validation de votre signature vient d'&ecirc;tre effectu&eacute;e dans notre base de donn&eacute;es.<br />Vous allez donc appara&icirc;tre d&egrave;s maintenant, dans la liste des signatures de la p&eacute;tition.<br />Nous vous remercions de l'inter&ecirc;t que vous nous portez.");
define("_MD_XPETITIONS_SIGN_ERROR",		"Une erreur est survenu lors de l'enregistrement de votre signature dans notre base de donn&eacute;es.<br />Il s'agit peut &ecirc;tre d'une erreur de communication avec celle-ci.<br />Recommencez ult&eacute;rieurement. Si le probl&egrave;me persiste, contactez-nous par email pour nous en informer.<br /><br />Merci de votre compr&eacute;hension.");

// signature en double
define("_MD_XPETITIONS_SIGN_DOUBLE",		"Votre nom, pr&eacute;nom et adresse email correspondent &agrave; une signature d&eacute;j&agrave; enregistr&eacute;e dans notre base de donn&eacute;es.<br />Peut &ecirc;tre qu'il s'agit d'une erreur de saisie et dans ce cas, nous vous invitons &agrave; saisir &agrave; nouveau vos informations dans le formulaire de signature en ligne.<br />Sinon, vous &ecirc;tes d&eacute;j&agrave; enregistr&eacute;.<br /><a href='javascript:history.go(-1)'>Retour au formulaire</a>");

// voir toutes les signatures
define("_MD_XPETITIONS_TITLE_ALLSIGNS",		"Listes des signataires :<br /><br />");
define("_MD_XPETITIONS_CPT_ALLSIGNS",		"signatures enregistr&eacute;es");
define("_MD_XPETITIONS_ALL_ALLSIGNS",		"Toutes");
define("_MD_XPETITIONS_ALLSIGNS_CHOOSE",	"Choisissez une lettre de l'alphabet.");
define("_MD_XPETITIONS_ALLSIGNS_NOLETTER",	"Aucun signataire commen&ccedil;ant par la lettre %s.");
define("_MD_XPETITIONS_ALLSIGNS_NOLETTER_ALL",	"Aucun signataire.");
define("_MD_XPETITIONS_ALLSIGNS_LETTER",	"Signataires commen&ccedil;ant par la lettre %s (%s signatures) :");
define("_MD_XPETITIONS_ALLSIGNS_LETTER_ALL",	"Tous les signataires de la p&eacute;tition :");

// email message
define("_MD_XPETITIONS_SUBJECT_EMAIL_SIGN1",	"Signature de la pétition '%s'");

// message
define("_MD_XPETITIONS_ERROR_BLANK",		"Des champs requis ne sont pas remplis !!!");
define("_MD_XPETITIONS_CAPTCHA_ERROR",		"Le code de v&eacute;rification anti-spam est incorrect, veuillez recommencer !");
define("_MD_XPETITIONS_ERROR_INSERT",		"Erreur lors de l'insertion des donn&eacute;es dans notre base !!!");
define("_MD_XPETITIONS_ERROR_EMAIL",		"Merci de verifier votre adresse e-mail. Son format ne correspond pas &agrave; une adresse e-mail valide.");
define("_MD_XPETITIONS_EMAIL_SEND_ERROR",	"Une erreur est survenue lors de l'envoi de l'email.<br />R&eacute;essayer plus tard.");
define("_MD_XPETITIONS_FORM_REQUIRED",		"&nbsp;&nbsp;* Requis");
define("_MD_XPETITIONS_ERROR_BLANK_ADDRESS",	"Le champs 'Adresse' n'est pas rempli !!!");
define("_MD_XPETITIONS_ERROR_BLANK_ZIP",	"Le champs 'Code postal' n'est pas rempli !!!");
define("_MD_XPETITIONS_ERROR_BLANK_CITY",	"Le champs 'Ville' n'est pas rempli !!!");
define("_MD_XPETITIONS_ERROR_BLANK_COUNTRY",	"Le champs 'Pays' n'est pas rempli !!!");
define("_MD_XPETITIONS_ERROR_BLANK_JOB",	"Le champs 'Profession' n'est pas rempli !!!");

// Captcha Text
define("_MD_XPETITIONS_CAPTCHA_STRING",		"abcdefghijklmnopqrstuvwxyz");
define("_MD_XPETITIONS_CAPTCHA_TXT_1",		"quelle lettre se trouve entre");
define("_MD_XPETITIONS_CAPTCHA_TXT_2",		"Combien font");
define("_MD_XPETITIONS_CAPTCHA_TXT_3",		"Quel est");
define("_MD_XPETITIONS_CAPTCHA_TXT_4",		"caract&egrave;re dans");
define("_MD_XPETITIONS_CAPTCHA_TXT_5",		"");
define("_MD_XPETITIONS_CAPTCHA_TXT_LESS",	"moins");
define("_MD_XPETITIONS_CAPTCHA_TXT_MORE",	"plus");
define("_MD_XPETITIONS_CAPTCHA_TXT_TIMES",	"fois");
define("_MD_XPETITIONS_CAPTCHA_TXT_IN",		"Dans");
define("_MD_XPETITIONS_CAPTCHA_TXT_AND",	"et");
define("_MD_XPETITIONS_CAPTCHA_TXT_THE",	"le");
define("_MD_XPETITIONS_CAPTCHA_TXT_THEFIRST",	"le premier");
define("_MD_XPETITIONS_CAPTCHA_TXT_THESECOND",	"le second");
define("_MD_XPETITIONS_CAPTCHA_TXT_THELAST",	"le dernier");
define("_MD_XPETITIONS_CAPTCHA_TXT_THELASTFRONT","l'avant dernier");
define("_MD_XPETITIONS_CAPTCHA_TXT_ZERO",	"zero");
define("_MD_XPETITIONS_CAPTCHA_TXT_ONE",	"un");
define("_MD_XPETITIONS_CAPTCHA_TXT_TWO",	"deux");
define("_MD_XPETITIONS_CAPTCHA_TXT_THREE",	"trois");
define("_MD_XPETITIONS_CAPTCHA_TXT_FOUR",	"quatre");
define("_MD_XPETITIONS_CAPTCHA_TXT_FIVE",	"cinp");
define("_MD_XPETITIONS_CAPTCHA_TXT_SIX",	"six");
define("_MD_XPETITIONS_CAPTCHA_TXT_SEVEN",	"sept");
define("_MD_XPETITIONS_CAPTCHA_TXT_EIGHT",	"huit");
define("_MD_XPETITIONS_CAPTCHA_TXT_NINE",	"neuf");
define("_MD_XPETITIONS_CAPTCHA_TXT_TEN",	"dix");

?>
