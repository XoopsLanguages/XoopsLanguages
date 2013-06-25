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

define("_AM_XPETITIONS_XOOPS_PRO",		"http://www.informatux.com/");
define("_AM_XPETITIONS_XOOPS_PRO1",		"Support et mise &agrave; jour disponible sur ");
define("_AM_XPETITIONS_XOOPS_PRO2",		"Solutions et d&eacute;veloppement WEB");
define("_AM_XPETITIONS_XOOPS_PRO3",		"Avez-vous besoin d'aide avec ce module ?");

// * index.php *
define("_AM_XPETITIONS_INDEX_HELP1",		"<b>AIDE</b>");
define("_AM_XPETITIONS_INDEX_HELP2",		"- En cliquant sur le nom d'une p&eacute;tition, vous acc&eacute;der &agrave; la page d'accueil de celle-ci.<br />- La date correspond &agrave; la mise en ligne d'une p&eacute;tition.<br />- Le statut d'une p&eacute;tition poss&egrave;de 3 &eacute;tats :<br />* <b style='color: green;'>Active</b> (La p&eacute;tition peut &ecirc;tre sign&eacute;e si la date n'est pas sup&eacute;rieur &agrave; la date du jour)<br />* <b style='color: orange;'>hors ligne</b> (La p&eacute;tition n'est pas visible et ne peut pas &ecirc;tre sign&eacute;e)<br />* <b style='color: red;'>Archiv&eacute;e</b> (La p&eacute;tition est visible mais ne peut pas &ecirc;tre sign&eacute;e)<br />- Les actions possibles :<br />* Modification (Vous pouvez tout modifier sauf le nom de la table qui recevra les signatures)<br />* Suppression (Cette action supprimera la p&eacute;tition en ligne y compris toutes les signatures enregistr&eacute;es. Si vous souhaitez conserver votre p&eacute;tition mais quelle ne soit plus sign&eacute;e ni accessible, modifiez l'&eacute;tat &agrave 'hors ligne')");
define("_AM_XPETITIONS_INDEX",			"Accueil");
define("_AM_XPETITIONS_CREATION",		"Cr&eacute;ation");
define("_AM_XPETITIONS_MODIFICATION",		"Modification");
define("_AM_XPETITIONS_SIGNATURE",		"Signatures");
define("_AM_XPETITIONS_EMAILS",			"Emails");
define("_AM_XPETITIONS_FIELD",			"Champs");
define("_AM_XPETITIONS_CAPTCHA",		"Captchas");
define("_AM_XPETITIONS_GENERALSET",		"Pr&eacute;f&eacute;rences");
define("_AM_XPETITIONS_GOTOMOD",		"Aller au module");
define("_AM_XPETITIONS_MODULEADMIN",		"ADMIN");
define("_AM_XPETITIONS_HELP",			"Aide");
define("_AM_XPETITIONS_PETITIONS_CREATE",	"P&eacute;titions cr&eacute;&eacute;es : ");
define("_AM_XPETITIONS_PETITIONS_ONLINE",	"P&eacute;titions actives : ");
define("_AM_XPETITIONS_PETITIONS_OFFLINE",	"P&eacute;titions hors ligne : ");
define("_AM_XPETITIONS_PETITIONS_ARCHIVE",	"P&eacute;titions archiv&eacute;es");
define("_AM_XPETITIONS_SIGNATURE_NOVALID",	"Signatures non valid&eacute;es : ");
define("_AM_XPETITIONS_INDEX_SUMMARY",		"Sommaire");
define("_AM_XPETITIONS_CREATE",			"Cr&eacute;ation");
define("_AM_XPETITIONS_CREATE_BUTTON",		"Cr&eacute;er une p&eacute;tition");
define("_AM_XPETITIONS_INDEX_TAB1",		"Id");
define("_AM_XPETITIONS_INDEX_TAB2",		"P&eacute;titions en ligne");
define("_AM_XPETITIONS_INDEX_TAB3",		"Date");
define("_AM_XPETITIONS_INDEX_TAB4",		"Statut");
define("_AM_XPETITIONS_INDEX_TAB5",		"Action");
define("_AM_XPETITIONS_NONE",			"Aucune p&eacute;tition cr&eacute;&eacute;e ou disponible");
define("_AM_XPETITIONS_CHECK1",			"Cr&eacute;ation du r&eacute;pertoire d'upload des p&eacute;titions au format pdf (%s) : %s");
define("_AM_XPETITIONS_CHECK2",			"Droits d'&eacute;criture du r&eacute;pertoire d'upload : %s");
define("_AM_XPETITIONS_CHECK3",			"Droits d'&eacute;criture du r&eacute;pertoire \"csv\" : %s");
define("_AM_XPETITIONS_CHECK4",			"Version de php >= 5.1.0 (cr&eacute;ation des csv) : %s");

// * petitions.php *
define("_AM_XPETITIONS_TITLE1_ADDFORM",		"Cr&eacute;er une p&eacute;tition");
define("_AM_XPETITIONS_TITLE1_EDITFORM",	"Modifier une p&eacute;tition");
define("_AM_XPETITIONS_NAME_ADDFORM",		"Nom");
define("_AM_XPETITIONS_NAME_ADDFORM_DSC",	"Nom de la table MySQL de la p&eacute;tition (espaces et caract&egrave;res exotiques interdits)<br />Ex : mapetition<br /><span style='color: red;'>Zone non modifiable en mode 'Modification'</span>");
define("_AM_XPETITIONS_TITLE2_ADDFORM",		"Titre");
define("_AM_XPETITIONS_TITLE2_ADDFORM_DSC",	"Titre de la p&eacute;tition visible pour les internautes");
define("_AM_XPETITIONS_DESC_ADDFORM",		"Description");
define("_AM_XPETITIONS_DESC_ADDFORM_DSC",	"Ins&eacute;rez le texte de votre p&eacute;tition en ligne");
define("_AM_XPETITIONS_EMAIL_ADDFORM",		"Email de r&eacute;ponse");
define("_AM_XPETITIONS_EMAIL_ADDFORM_DSC",	"Email visible lors de l'envoi d'un message de confirmation ou de relance.<br />Ex : noreply@petition.com");
define("_AM_XPETITIONS_STATUS_ADDFORM",		"Statut");
define("_AM_XPETITIONS_STATUS_ADDFORM_DSC",	"Etat de la p&eacute;tition");
define("_AM_XPETITIONS_DATE_ADDFORM",		"Date");
define("_AM_XPETITIONS_DATE_ADDFORM_DSC",	"Date de d&eacute;marrage de la p&eacute;tition");
define("_AM_XPETITIONS_FILE_ADDFORM",		"Uploader un fichier");
define("_AM_XPETITIONS_FILE_ADDFORM_DSC",	"Ajouter une p&eacute;tition identique &agrave; celle que les visiteurs peuvent signer en ligne, au format PDF ou DOC, t&eacute;l&eacute;chargeable pour ceux qui ne d&eacute;sirent ou ne peuvent pas signer en ligne (si un fichier est upload&eacute;, un lien appara&icirc;tra directement dans la barre d'outil sur la p&eacute;tition)");
define("_AM_XPETITIONS_BREAK_ADDFORM",		"<b>Uploader une petition au format papier</b>");
define("_AM_XPETITIONS_FILE_SHOW_ADDFORM",	"Fichier enregistr&eacute;");
define("_AM_XPETITIONS_FILE_SHOW_ADDFORM_DSC",	"Pour visualiser le fichier enregistr&eacute;, cliquez sur son nom.<br />Pour le supprimer, cochez la case du fichier et valider le formulaire.<br />Pour le remplacer/mettre &agrave; jour, uploader un nouveau fichier (ATTENTION, cela ne supprimera pas l'ancien fichier du serveur, sauf si vous cochez la case pour le supprimer)");
define("_AM_XPETITIONS_DELETE_FILE_ADDFORM",	"Suppression du fichier");
define("_AM_XPETITIONS_STATUS1",		"active");
define("_AM_XPETITIONS_STATUS2",		"hors ligne");
define("_AM_XPETITIONS_STATUS3",		"archive");
define("_AM_XPETITIONS_SUBMIT",			"Enregistrer");
define("_AM_XPETITIONS_DELETE",			"Supprimer");
define("_AM_XPETITIONS_PREVIEW",		"Visualiser");
define("_AM_XPETITIONS_ERROR_INSERT",		"Erreur lors de l'insertion des donn&eacute;es dans la base !!!");
define("_AM_XPETITIONS_ERROR_UPDATE",		"Erreur lors de la mise &agrave; jour de la base de donn&eacute;es !!!");
define("_AM_XPETITIONS_ERROR_DELETE",		"Erreur lors de la suppression des donn&eacute;es dans la base !!!");
define("_AM_XPETITIONS_ERROR_BLANK",		"Des champs requis ne sont pas remplis !!!");
define("_AM_XPETITIONS_SIGN_DOUBLE",		"Signature d&eacute;j&agrave; pr&eacute;sente dans la base de donn&eacute;es !");
define("_AM_XPETITIONS_VALID_INSERT",		"Cr&eacute;ation dans la base de donn&eacute;es effectu&eacute;e avec succ&egrave;s !");
define("_AM_XPETITIONS_VALID_UPDATE",		"Mise &agrave; jour de la base de donn&eacute;es effectu&eacute;e avec succ&egrave;s !");
define("_AM_XPETITIONS_VALID_DELETE",		"Suppression effectu&eacute;e avec succ&egrave;s !");
define("_AM_XPETITIONS_DELETE_CONFIRM",		"Voulez-vous supprimer cette p&eacute;tition ?<br />Attention, cela supprimera &eacute;galement toutes les signatures enregistr&eacute;es pour celle-ci");
define("_AM_XPETITIONS_DELETE_SIGN",		"Voulez-vous supprimer cette signature ?");
define("_AM_XPETITIONS_ERROR_FILE_UPLOAD",	"Une erreur est survenue dans l'upload du fichier !!!");
// ---------------------------------------------------------------------------------------------
//                                        22/05/09 urbanspaceman mod
// ---------------------------------------------------------------------------------------------
define("_AM_XPETITIONS_WHOVIEW_ADDFORM",	"Qui peut visualiser les signatures de la p&eacute;tition ?");
define("_AM_XPETITIONS_WHOVIEW_ADDFORM_DSC",	"Choisissez le groupe d'utilisateurs qui sera autoris&eacute; &agrave; voir les signatures de la p&eacute;tition");
define("_AM_XPETITIONS_WHOVIEW1",		"Tous");
define("_AM_XPETITIONS_WHOVIEW2",		"Utilisateurs enregistr&eacute;es");
define("_AM_XPETITIONS_WHOVIEW3",		"Administrateurs");
// ---------------------------------------------------------------------------------------------
// ---------------------------------------------------------------------------------------------
// ---------------------------------------------------------------------------------------------


// * signature.php *
define("_AM_XPETITIONS_SIGN_TAB",		"SIGNATURES");
define("_AM_XPETITIONS_SIGN_TAB1",		"Id");
define("_AM_XPETITIONS_SIGN_TAB2",		"P&eacute;titions en ligne");
define("_AM_XPETITIONS_SIGN_TAB3",		"Date");
define("_AM_XPETITIONS_SIGN_TAB4",		"Enregistr&eacute;es");
define("_AM_XPETITIONS_SIGN_TAB5",		"Valid&eacute;es");
define("_AM_XPETITIONS_SIGN_TAB6",		"Non valid&eacute;es");
define("_AM_XPETITIONS_SIGN_HELP1",		"<b>AIDE</b>");
define("_AM_XPETITIONS_SIGN_HELP2",		"- En cliquant sur un compteur de la colonne signatures 'Enregistr&eacute;es', vous pouvez visualiser les signatures effectu&eacute;es par les internautes.<br />- En cliquant sur un compteur de la colonne signatures 'Valid&eacute;es, vous pouvez extraire celles-ci dans un fichier tableur (.csv).<br />- En cliquant sur un compteur de la colonne signatures 'Non valid&eacute;es', vous pouvez relancer par email tous ces signataires n'ayant pas confirm&eacute;s leurs signatures en ligne et/ou forcer la validation des signataires par un simple click.<br />- Si vous voulez supprimer des signatures enregistr&eacute;es ou enregistrer manuellement des signatures (re&ccedil;u par p&eacute;tition papier par exemple), cliquez sur le bouton 'Enregistrer / Supprimer des signatures manuellement'.");
define("_AM_XPETITIONS_SIGN_HELP3",		"Vous pouvez modifier le message de relance aux retardataires &agrave; votre guise. Les variables que vous pouvez ins&eacute;rer dans le message sont les suivantes (respectez la m&ecirc;me syntaxe) :<br />{USER_NAME} : Nom du retardataire.<br />{USER_EMAIL} : Email du retardataire.<br />{LINK_URL} : Lien &agrave; cliquer pour que le retardataire valide sa signature.<br />{SITE_NAME} : Nom de votre site.<br />{SITE_URL} : Url de votre site.<br /><br />Vous pouvez forcer la validation des signatures de retardataires en cliquant sur le bouton du m&ecirc;me nom.");
define("_AM_XPETITIONS_SAVE_SIGN",		"Enregistrer / Supprimer des signatures manuellement");
define("_AM_XPETITIONS_DEL_SIGN",		"Supprimer la signature");
define("_AM_XPETITIONS_DEL_TITLE",		"Cliquez sur une p&eacute;tition pour afficher ses signatures");
define("_AM_XPETITIONS_SIGN_DETAIL",		"Signataires enregistr&eacute;es");
define("_AM_XPETITIONS_SIGN_DETAIL1",		"Nom");
define("_AM_XPETITIONS_SIGN_DETAIL2",		"Pr&eacute;nom");
define("_AM_XPETITIONS_SIGN_DETAIL3",		"Pays");
define("_AM_XPETITIONS_SIGN_DETAIL4",		"Email");
define("_AM_XPETITIONS_SIGN_DETAIL5",		"Ville");
define("_AM_XPETITIONS_SIGN_DETAIL6",		"Job");
define("_AM_XPETITIONS_SIGN_DETAIL7",		"Date");
define("_AM_XPETITIONS_SIGN_DETAIL8",		"Valid&eacute;e");
define("_AM_XPETITIONS_SIGN_NONE",		"Aucune signature enregistr&eacute;es");
define("_AM_XPETITIONS_TITLE_LATECOMERFORM",	"Envoi d'emails aux retardataires");
define("_AM_XPETITIONS_MESS_LATECOMER",		"Message &agrave; envoyer aux retardataires.<br /><i>(Voir l'aide pour les variables)</i>");
define("_AM_XPETITIONS_MSG_BUTTON_LATECOMER2",	"Envoi du message aux %s retardataires");
define("_AM_XPETITIONS_MSG_BUTTON_LATECOMER1",	"Envoi du message &agrave; %s retardataire");
define("_AM_XPETITIONS_SUBMIT_LATECOMER",	"Envoyer le message");
define("_AM_XPETITIONS_EMAIL_SEND_LATECOMER",	"Emails envoy&eacute;s avec succ&egrave;s aux retardataires !");
define("_AM_XPETITIONS_LATECOMER_SEND_ERROR",	"Erreur dans l'envoi d'un des emails aux retardataires !!!");
define("_AM_XPETITIONS_SIGN_CSV_LASTNAME",	"NOM");
define("_AM_XPETITIONS_SIGN_CSV_FIRSTNAME",	"PRENOM");
define("_AM_XPETITIONS_SIGN_CSV_EMAIL",		"EMAIL");
define("_AM_XPETITIONS_SIGN_CSV_ADDRESS",	"ADRESSE");
define("_AM_XPETITIONS_SIGN_CSV_ZIP",		"CODE POSTAL");
define("_AM_XPETITIONS_SIGN_CSV_CITY",		"VILLE");
define("_AM_XPETITIONS_SIGN_CSV_COUNTRY",	"PAYS");
define("_AM_XPETITIONS_SIGN_CSV_JOB",		"EMPLOI");
define("_AM_XPETITIONS_SIGN_CSV_DATE",		"DATE");
define("_AM_XPETITIONS_SIGN_CSV_IP",		"ADRESSE IP");
define("_AM_XPETITIONS_SIGN_CSV_INPROGRESS",	"Ecriture du fichier CSV en cours...");
define("_AM_XPETITIONS_SIGN_CSV_SUCCESS",	"Fichier CSV &eacute;crit avec succ&egrave;s !");
define("_AM_XPETITIONS_SIGN_CSV_ERROR",		"Une erreur est survenue lors de l'&eacute;criture du fichier !<br />Est-ce que votre r&eacute;pertoire 'xpetitions/csv/' est ouvert en &eacute;criture ?");
define("_AM_XPETITIONS_SIGN_CSV_TITLE",		"<h1>EXTRACTION DES SIGNATURES (format CSV)</h1>");
define("_AM_XPETITIONS_SIGN_CSV_PETITION",	"<u>Pour la p&eacute;tition :</u> ");
define("_AM_XPETITIONS_SIGN_HELP4",		"<u>Suppression de signatures :</u><br />En cliquant sur une p&eacute;tition, vous affichez les signatures associ&eacute;es. Cliquez sur une signature puis sur 'supprimer la signature' pour enveler la signature de la base de donn&eacute;es.<br /><u>Ajout d'une signature :</u><br />Vous avez la possibilit&eacute; d'ajouter manuellement une signature suite &agrave; une signature retourn&eacute;e sur support papier.");
define("_AM_XPETITIONS_SIGN_SHOW",		"Affichage des signatures");
define("_AM_XPETITIONS_TITLE_DELFORM",		"Suppression de signatures");
define("_AM_XPETITIONS_PETITIONS_DELFORM",	"P&eacute;titions");
define("_AM_XPETITIONS_PETITIONS_DELFORM_DSC",	"Choisissez la p&eacute;tition pour pouvoir acc&eacute;der aux signatures");
define("_AM_XPETITIONS_SIGN_DELFORM",		"Signatures");
define("_AM_XPETITIONS_SIGN_DELFORM_DSC",	"Choisissez la signature &agrave; supprimer");

define("_AM_XPETITIONS_TITLE_ADDFORM",		"Ajout de signatures");
define("_AM_XPETITIONS_FNAME_ADDFORM",		"Pr&eacute;nom du signataire");
define("_AM_XPETITIONS_LNAME_ADDFORM",		"Nom du signataire");
define("_AM_XPETITIONS_ADDRESS_ADDFORM",	"Adresse du signataire");
define("_AM_XPETITIONS_ZIP_ADDFORM",		"Code postal du signataire");
define("_AM_XPETITIONS_CITY_ADDFORM",		"Ville du signataire");
define("_AM_XPETITIONS_COUNTRY_ADDFORM",	"Pays du signataire");
define("_AM_XPETITIONS_JOB_ADDFORM",		"Emploi du signataire");
define("_AM_XPETITIONS_EEMAIL_ADDFORM",		"Email du signataire");
define("_AM_XPETITIONS_DDATE_ADDFORM",		"Date de la signature");
define("_AM_XPETITIONS_PETITIONS_ADDFORM",	"Nom de la p&eacute;tition (table MySQL)");
define("_AM_XPETITIONS_FORCE_SIGN",		"Validation forc&eacute;e des retardataires");
define("_AM_XPETITIONS_FORCE_SIGN_CONFIRM",	"Voulez-vous forcer la validation des signatures non valid&eacute;es pour la p&eacute;tition '%s'");
define("_AM_XPETITIONS_TITLE_SHOW_SIGN",	"Affichage des signatures");
define("_AM_XPETITIONS_SELECT_SHOW",		"Sens de l'affichage des signatures");
define("_AM_XPETITIONS_SELECT_SHOW_DSC",	"Choisissez le sens d'affichage des signataires de vos p&eacute;titions.<br />Soit sous forme de colonnes, soit les unes &agrave; la suite des autres s&eacute;par&eacute;es par des virgules.");
define("_AM_XPETITIONS_SELECT_SHOW1",		"Colonne");
define("_AM_XPETITIONS_SELECT_SHOW2",		"Ligne");
define("_AM_XPETITIONS_SELECT_NBCOL",		"Nombre de colonnes");
define("_AM_XPETITIONS_SELECT_NBCOL_DSC",	"Si vous choisissez l'affichage en colonne, vous pouvez choisir le nombre de colonne pour visualiser vos signataires.");
define("_AM_XPETITIONS_INFOS_SIGN",		"Informations pr&eacute;sentes dans les signatures");
define("_AM_XPETITIONS_INFOS_SIGN_DSC",		"Cochez les informations que vous voulez voir apparaître sur les signatures de vos p&eacute;titions.<br />Si vous d&eacute;cidez de ne pas choisir d'option, alors il n'appara&icirc;tra que le nom et le pr&eacute;nom de vos signataires.<br /><br />Si vous choisissez des options, celles-ci appara&icirc;tront entre les parenth&egrave;ses comme ci-dessous :<br />Patrice BOUTHIER <span style='font-weight: bold;'>(</span><span style='color: red;'>D&eacute;veloppeur web - FRANCE - contact@informatux.com</span><span style='font-weight: bold;'>)</span>");
define("_AM_XPETITIONS_INFOS_SIGN1",		"Emploi");
define("_AM_XPETITIONS_INFOS_SIGN2",		"Pays");
define("_AM_XPETITIONS_INFOS_SIGN3",		"Email");
define("_AM_XPETITIONS_INFOS_SIGN4",		"Ville");
define("_AM_XPETITIONS_INFOS_SIGN5",		"Date");
define("_AM_XPETITIONS_SIGN_HELP5",		"Choisissez ici comment les signatures de vos p&eacute;titions seront affich&eacute;es lorsque les internautes les consulteront sur votre site.<br /><br /><span style='text-decoration: underline;'>Deux choix :</span><br />- Affichage en colonne (choisissez &eacute;galement le nombre de colonnes)<br />- Affichage en ligne (s&eacute;par&eacute;es par des virgules)<br /><br />Choisissez le formatage d'une signature parmi les options disponibles (emploi, pays, email, ville, date).<br />Si vous choisissez des options, elles appara&icirc;tront entre parenth&egrave;ses avec le nom et le pr&eacute;nom du signataire.<br />Si vous ne choisissez pas d'option, seuls le nom et le pr&eacute;nom appara&icirc;tront.");

// * email.php
define("_AM_XPETITIONS_TITLE_EMAILS",		"Gestion du contenus des emails envoy&eacute;s");
define("_AM_XPETITIONS_MESS_EMAIL_UN",		"Email envoy&eacute; aux retardaires");
define("_AM_XPETITIONS_MESS_EMAIL_UNDSC",	"Vous pouvez ins&eacute;rer des variables dans le corps de votre message (voir l'aide)");
define("_AM_XPETITIONS_SUB_EMAIL_UN",		"Email envoy&eacute; aux retardaires (Sujet)");
define("_AM_XPETITIONS_SUB_EMAIL_UNDSC", 	"Vous pouvez ins&eacute;rer le nom de la p&eacute;tition dans le sujet en mettant {PETITION} et le nom de votre site en mettant {SITE_NAME} (respectez la m&ecirc;me syntaxe)");
define("_AM_XPETITIONS_SUB_EMAIL_TO",		"Email envoy&eacute; aux signataires pour valider leur signature (Sujet)");
define("_AM_XPETITIONS_SUBMIT_EMAILS",		"Modifier les emails");
define("_AM_XPETITIONS_SUB_EMAIL_TODSC",	"Vous pouvez ins&eacute;rer le nom de la p&eacute;tition dans le sujet en mettant {PETITION} et le nom de votre site en mettant {SITENAME}  (respectez la m&ecirc;me syntaxe)");
define("_AM_XPETITIONS_MESS_EMAIL_TO",		"Email envoy&eacute; aux signataires pour valider leur signature");
define("_AM_XPETITIONS_MESS_EMAIL_TODSC",	"Vous pouvez ins&eacute;rer des variables dans le corps de votre message (voir l'aide)");
define("_AM_XPETITIONS_MESS_EMAIL_HELP1",	"<b>Aide</b>");
define("_AM_XPETITIONS_MESS_EMAIL_HELP2",	"<div style='font-weight: normal; text-align: center;'>Vous pouvez ins&eacute;rer les variables suivantes dans le corps de votre message (respectez la m&ecirc;me syntaxe) :</div><br /><table style='text-align: left; width: 100%;' border='0' cellpadding='0' cellspacing='0'><tbody><tr><td style='text-align: center; vertical-align: middle;'><span style='font-weight: bold; text-decoration: underline;'>Email aux retardaires</span></td><td style='text-align: center; vertical-align: middle;'><span style='font-weight: bold; text-decoration: underline;'>Email aux signataires pour validation</span></td></tr><tr><td style='width: 50%; text-align: center; vertical-align: top;'>{PETITION} nom de la p&eacute;tition<br />{USER_NAME} Nom complet du retardataire.<br />{USER_EMAIL} Email du retardataire.<br />{LINK_URL} Lien &agrave; cliquer pour que le retardataire valide sa signature.<br />{SITE_NAME} Nom de votre site.<br />{SITE_URL} Url de votre site.</td><td style='width: 50%; text-align: center; vertical-align: top;'>{PETITION} nom de la p&eacute;tition<br />{PRENOM} pr&eacute;nom du signataire<br />{NOM} nom du signataire<br />{INFOS} informations sur le signataire<br />{VALIDATION} lien de confirmation de signature<br />{SITENAME} nom de votre site<br />{SITESLOGAN} slogan de votre site<br />{SITEURL} url de votre site</td></tr></tbody></table>");
define("_AM_XPETITIONS_MESS_NONE",		"");

// * field.php
define("_AM_XPETITIONS_FIELD_HELP1",		"<b>Aide</b>");
define("_AM_XPETITIONS_FIELD_HELP2",		"G&eacute;rer le formulaire de signatures des p&eacute;titions.<br /><br />Vous pouvez afficher ou non les champs du formulaire et les rendre ou non obligatoire.<br /><br />Si vous cochez un champs 'obligatoire' et qu'il n'est pas coch&eacute; 'visible', celui-ci n'apparaitra pas dans le formulaire et son caract&egrave;re d'obligation ne sera pas pris en compte.<br />Il faut d'abord qu'un champs soit 'visible' pour que le param&egrave;tre 'obligatoire' soit accessible.");
define("_AM_XPETITIONS_TITLE_FIELDS",		"Gestion des champs du formulaire de signature des p&eacute;titions");
define("_AM_XPETITIONS_FIELD_VISIBLE",		"Visible&nbsp;&nbsp;");
define("_AM_XPETITIONS_FIELD_OBLIGATORY",	"Requis");
define("_AM_XPETITIONS_FIELD_1",		"Champs Nom");
define("_AM_XPETITIONS_FIELD_2",		"Champs Pr&eacute;nom");
define("_AM_XPETITIONS_FIELD_3",		"Champs Adresse");
define("_AM_XPETITIONS_FIELD_4",		"Champs Code postal");
define("_AM_XPETITIONS_FIELD_5",		"Champs Ville");
define("_AM_XPETITIONS_FIELD_6",		"Champs Pays");
define("_AM_XPETITIONS_FIELD_7",		"Champs Profession");
define("_AM_XPETITIONS_FIELD_8",		"Champs Email");
define("_AM_XPETITIONS_SUBMIT_FIELDS",		"Enregistrer");
define("_AM_XPETITIONS_FIELD_NONE",		"");

// * captcha.php
define("_AM_XPETITIONS_TITLE_CAPTCHA",		"Choisissez votre captcha");
define("_AM_XPETITIONS_CAPTCHA_SAMPLES",	" parmi ceux disponibles et visibles par votre serveur");
define("_AM_XPETITIONS_STATUS_CAPTCHA",		"Etat de la v&eacute;rification anti-spam (modifier vos %s) : ");
define("_AM_XPETITIONS_CAPTCHA_SUBMIT",		"Valider votre captcha");
define("_AM_XPETITIONS_CAPTCHA_HELP1",		"<b>AIDE</b>");
define("_AM_XPETITIONS_CAPTCHA_HELP2",		"Choisissez le CAPTCHA adapt&eacute; &agrave; votre serveur ou bien &agrave; votre envie.<br />Si l'&eacute;tat de la v&eacute;rification anti-spam est &agrave; <span style='color: red;'>NON</span>, alors le choix du captcha ne sera pas visible dans vos formulaires.");
define("_AM_XPETITIONS_CAPTCHA_CHOICE",		"Quel captcha voulez-vous utiliser ?");
define("_AM_XPETITIONS_CAPTCHA_CHOICE1",	"Choix 1 : Captcha (K.OHWADA)");
define("_AM_XPETITIONS_CAPTCHA_CHOICE1A",	"Choix 1");
define("_AM_XPETITIONS_CAPTCHA_CHOICE1_DSC",	"Pour modifier les pr&eacute;f&eacute;rences des images CAPTCHA affich&eacute;es dans vos formulaires, modifiez le fichier /xpetitions/class/captcha_x/captcha_x.ini .<br />Les explications des diff&eacute;rentes options se trouvent dans le fichier.");
define("_AM_XPETITIONS_CAPTCHA_CHOICE2",	"Choix 2 : Captcha (JPGRAPH)");
define("_AM_XPETITIONS_CAPTCHA_CHOICE2A",	"Choix 2");
define("_AM_XPETITIONS_CAPTCHA_CHOICE2_DSC",	"Pour modifier les pr&eacute;f&eacute;rences des images CAPTCHA affich&eacute;es dans vos formulaires, modifiez le fichier /xpetitions/generate.php .<br />La seule option disponible est le nombre de caract&egrave;res pr&eacute;sent dans l'image CAPTCHA.");
define("_AM_XPETITIONS_CAPTCHA_CHOICE3",	"Choix 3 : Captcha (TEXTE)");
define("_AM_XPETITIONS_CAPTCHA_CHOICE3A",	"Choix 3");
define("_AM_XPETITIONS_CAPTCHA_CHOICE3_DSC",	"Aucun r&eacute;glage n'est n&eacute;cessaire.<br />Les questions sont al&eacute;atoires, rafra&icirc;chissez la page pour voir d'autres questions.");


// * about.php *
define("_AM_XPETITIONS_ABOUT",			"A propos");

define("_AM_XPETITIONS_UPDATE",			"Modifier");
define("_AM_XPETITIONS_CANCEL",			"Supprimer");

//1.11
define("_AM_XPETITIONS_EMAIL_NOTCONFIRMED_SUBJECT",'Pétition {PETITION} du site {SITE_NAME}');
define("_AM_XPETITIONS_EMAIL_NOTCONFIRMED_BODY",'Bonjour {USER_NAME},\r\n\r\n Vous avez récemment signé notre pétition en ligne "{PETITION}", mais vous avez omis de valider votre signature.\r\n\r\nNous vous offrons la possibilité de pouvoir le faire en cliquant sur ce lien: \r\n{LINK_URL}\r\n\r\nMerci de votre participation.\r\nL "administrateur.\r\n{SITE_NAME}\r\n{SITE_URL}');
define("_AM_XPETITIONS_EMAIL_SIGNED_SUBJECT",'Signature de la pétition "{PETITION}" du site "{SITENAME}"');
define("_AM_XPETITIONS_EMAIL_SIGNED_BODY",'Vous avez demandé à signer la pétition {PETITION} au nom de {PRENOM} {NOM} ({INFOS}).\r\n\r\nPour éviter toute mauvaise plaisanterie, nous vous demandons de confirmer votre signature.\r\nVotre signature ne sera validée qu"une fois cette opération effectuée.\r\n\r\nPour confirmer votre signature, il vous suffit de cliquer sur le lien ci-dessous :\r\n{VALIDATION}\r\n\r\nSi vous souhaitez ne pas confirmer cette signature, il vous suffit de ne pas répondre, les informations seront supprimées de notre base de données.\r\n\r\nCordialement,\r\n\r\n{SITENAME}\r\n{SITESLOGAN}\r\n{SITEURL}');