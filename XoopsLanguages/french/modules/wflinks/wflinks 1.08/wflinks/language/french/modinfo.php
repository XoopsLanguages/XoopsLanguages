<?php
/**
 * $Id : main.php v 1.00 21 June 2005 John N Exp $
 * Module : WF-links
 * Version : v1.0.3
 * Release Date : 21 June 2005
 * Developer : John N
 * Team : WF-Projects
 * Licence : GNU
 */

// Module Info
// The name of this module
define("_MI_WFL_NAME","WF-links");

// A brief description of this module
define("_MI_WFL_DESC","Cr&eacute;ation d'une section liens dans laquelles les utilisateurs peuvent utiliser/proposer/noter des liens variés.");

// Names of blocks for this module (Not all module has blocks)
define("_MI_WFL_BNAME1","Liens r&eacute;cents");
define("_MI_WFL_BNAME2","Liens les plus consult&eacute;s");

// Sub menu titles
define("_MI_WFL_SMNAME1","Proposer");
define("_MI_WFL_SMNAME2","Populaires");
define("_MI_WFL_SMNAME3","Mieux not&eacute;s");
define("_MI_WFL_SMNAME4","Nouveaux Liens");

// Names of admin menu items
define("_MI_WFL_BINDEX","Index principal");
define("_MI_WFL_INDEXPAGE","Gestion de la page index");
define("_MI_WFL_MCATEGORY","Gestion des cat&eacute;gories");
define("_MI_WFL_MLINKS","Gestion des liens");
define("_MI_WFL_MUPLOADS","Chargement d'images");
define("_MI_WFL_PERMISSIONS","Param&egrave;tres des permissions");
define("_MI_WFL_BLOCKADMIN","Param&egrave;tres des blocs");
define("_MI_WFL_MVOTEDATA","Votes");

// Title of config items
define('_MI_WFL_POPULAR','Nombre de clics pour être populaire');
define('_MI_WFL_POPULARDSC','Nombre de clics pour consid&eacute;rer un lien comme populaire.');

//Display Icons
define("_MI_WFL_ICONDISPLAY","Liens populaires et nouveaux :");
define("_MI_WFL_DISPLAYICONDSC","Choisissez comment afficher les ic&ocirc;nes populaire et nouveau dans les listes de liens.");
define("_MI_WFL_DISPLAYICON1","Afficher une ic&ocirc;ne");
define("_MI_WFL_DISPLAYICON2","Afficher du texte");
define("_MI_WFL_DISPLAYICON3","Ne pas afficher");

define("_MI_WFL_DAYSNEW","Nouveaux liens du jour :");
define("_MI_WFL_DAYSNEWDSC","Nombre de jours pendant lesquels un lien doit &ecirc;tre consid&eacute;r&eacute; comme nouveau.");
define("_MI_WFL_DAYSUPDATED","Mise &agrave; jour de liens :");
define("_MI_WFL_DAYSUPDATEDDSC","Nombre de jours pour qu'un lien soit toujours consid&eacute;r&eacute; comme mis &agrave; jour.");

define('_MI_WFL_PERPAGE','Nombre de liens affich&eacute;s :');
define('_MI_WFL_PERPAGEDSC','Nombre de liens &agrave; afficher pour chaque cat&eacute;gorie.');

define('_MI_WFL_USESHOTS','Utiliser les copies d\'&eacute;cran ?');
define('_MI_WFL_USESHOTSDSC','S&eacute;lectionnez Oui pour afficher les copies d\'&eacute;cran pour chaque lien');
define('_MI_WFL_SHOTWIDTH','Largeur en pixels');
define('_MI_WFL_SHOTWIDTHDSC','Largeur de la copie d\'&eacute;cran');
define('_MI_WFL_SHOTHEIGHT','Hauteur en pixels');
define('_MI_WFL_SHOTHEIGHTDSC','Hauteur de la copie d\'&eacute;cran');
define('_MI_WFL_CHECKHOST','D&eacute;sactiver les liens directs? (leeching)');
define('_MI_WFL_REFERERS','Ces sites peuvent faire un lien direct vers vos liens<br />S&eacute;par&eacute;s par #');
define("_MI_WFL_ANONPOST","Soumission d'utilisateurs anonymes :");
define("_MI_WFL_ANONPOSTDSC","Autoriser l'envoi de lien de la part d\'utilisateurs anonymes?");
define('_MI_WFL_AUTOAPPROVE','Approuver automatiquement les liens envoy&eacute;s');
define('_MI_WFL_AUTOAPPROVEDSC','S&eacute;lectionnez si vous autorisez la proposition de nouveaux liens sans votre approbation.');

define('_MI_WFL_MAXFILESIZE','Taille du t&eacute;l&eacute;chargement (KB)');
define('_MI_WFL_MAXFILESIZEDSC','Taille maximale autoris&eacute;e de l\'image.');
define('_MI_WFL_IMGWIDTH','Largeur de l\'image t&eacute;l&eacute;charg&eacute;e');
define('_MI_WFL_IMGWIDTHDSC','Largeur maximale de l\'image autoris&eacute;e');
define('_MI_WFL_IMGHEIGHT','Hauteur de l\'image t&eacute;l&eacute;charg&eacute;e');
define('_MI_WFL_IMGHEIGHTDSC','Hauteur maximale de l\'image autoris&eacute;e');

define('_MI_WFL_UPLOADDIR','R&eacute;pertoire de t&egrave;l&egrave;chargement (sans le slash &agrave; la fin)');
define('_MI_WFL_ALLOWSUBMISS','Soumissions d\'utilisateur :');
define('_MI_WFL_ALLOWSUBMISSDSC','Autorise les utilisateurs &agrave; soumettre de nouveaux liens');
define('_MI_WFL_ALLOWUPLOADS','Chargement des utilisateurs :');
define('_MI_WFL_ALLOWUPLOADSDSC','Autorise les utilisateurs &agrave; envoyer des liens directement sur votre site web');
define('_MI_WFL_SCREENSHOTS','R&eacute;pertoire des copies d\'&eacute;cran');
define('_MI_WFL_CATEGORYIMG','R&eacute;pertoire des images des cat&eacute;gorie');
define('_MI_WFL_MAINIMGDIR','R&eacute;pertoire des images principales');
define('_MI_WFL_USETHUMBS','Miniatures :');
define("_MI_WFL_USETHUMBSDSC","Extensions support&eacute;es : JPG, GIF, PNG.<div style='padding-top : 8px;'>Les liens utiliseront des miniatures comme images. Param&eacute;trez sur Non pour utiliser l'image originale si le serveur ne supporte pas cette option.</div>");
define('_MI_WFL_DATEFORMAT','Choisissez le format de la date :');
define('_MI_WFL_DATEFORMATDSC','Choisissez le format de la date par d&eacute;faut utilis&eacute;');
define('_MI_WFL_SHOWDISCLAIMER','Afficher le texte d\'avertissement avant la proposition d\'un utilisateur ?');
define('_MI_WFL_SHOWDISCLAIMERDSC','');
define('_MI_WFL_SHOWLINKDISCL','Affichez l\'avertissement &agrave; l\'utilisateur avant d\'ouvrir un lien ?');
define('_MI_WFL_SHOWLINKDISCLDSC','');
define('_MI_WFL_DISCLAIMER','Entrez le texte de l\'avertissement au moment de la proposition :');
define('_MI_WFL_LINKDISCLAIMER','Entrez le texte de l\'avertissement au moment d\'ouvrir un lien :');
define('_MI_WFL_SUBCATS','Sous-cat&eacute;gories :');
define("_MI_WFL_SUBMITART","Soumission de lien :");
define("_MI_WFL_SUBMITARTDSC","S&eacute;lectionnez les groupes qui peuvent soumettre de nouveaux liens.");
define("_MI_WFL_RATINGGROUPS","Evaluation du lien :");
define("_MI_WFL_RATINGGROUPSDSC","S&eacute;lectionnez les groupes qui peuvent &eacute;valuer un lien.");
define("_MI_WFL_IMGUPDATE","Mettre &agrave; jour les miniatures ?");
define("_MI_WFL_IMGUPDATEDSC","Si le format miniature est choisi les images seront mises &agrave; jour &agrave chaque chargement de page, autrement la premi&egrave;re miniature sera conserv&eacute;e. <br /><br />");
define("_MI_WFL_QUALITY","Qualit&eacute; des miniatures :");
define("_MI_WFL_QUALITYDSC","Qualit&eacute; basse : 0 sup&eacute;rieure : 100");
define("_MI_WFL_KEEPASPECT","Conserver les proportions ?");
define("_MI_WFL_KEEPASPECTDSC","");
define("_MI_WFL_ADMINPAGE","Nombre de liens partie admin :");
define("_MI_WFL_AMDMINPAGEDSC","Nombre de nouveaux liens &agrave; afficher dans l'espace d'administration du module.");
define("_MI_WFL_ARTICLESSORT","Tri par d&eacute;faut");
define("_MI_WFL_ARTICLESSORTDSC","Choisissez l'ordre par d&eacute;faut pour lister les liens.");
define("_MI_WFL_TITLE","Titre");
define("_MI_WFL_RATING","Estimation");
define("_MI_WFL_WEIGHT","poids");
define("_MI_WFL_POPULARITY","Populaire");
define("_MI_WFL_SUBMITTED2","Date de soumission");
define('_MI_WFL_COPYRIGHT','Ajoutez le Copyright &agrave; la page d&eacute;taill&eacute;e du lien ? :');
define('_MI_WFL_COPYRIGHTDSC','');
// Description of each config items
define('_MI_WFL_SUBCATSDSC','Choisissez Oui pour afficher les sous-cat&eacute;gories. En choisissant Non, les sous-cat&eacute;gories seront cach&eacute;es');

// Text for notifications
define('_MI_WFL_GLOBAL_NOTIFY','G&eacute;n&eacute;ral');
define('_MI_WFL_GLOBAL_NOTIFYDSC','Option de notification g&eacute;n&eacute;rale.');
define('_MI_WFL_CATEGORY_NOTIFY','Cat&eacute;gorie');
define('_MI_WFL_CATEGORY_NOTIFYDSC','Option de notification uniquement appliqu&eacute;e sur sur la cat&eacute;gorie en cous.');
define('_MI_WFL_LINK_NOTIFY','Liens');
define('_MI_WFL_FILE_NOTIFYDSC','Option de notification uniquement appliqu&eacute;e sur le lien courant.');
define('_MI_WFL_GLOBAL_NEWCATEGORY_NOTIFY','Nouvelle cat&eacute;gorie');
define('_MI_WFL_GLOBAL_NEWCATEGORY_NOTIFYCAP','Notifiez-moi quand une nouvelle cat&eacute;gorie de liens est cr&eacute;&eacute;e.');
define('_MI_WFL_GLOBAL_NEWCATEGORY_NOTIFYDSC','Recevoir une notification quand une nouvelle cat&eacute;gorie de liens est cr&eacute;&eacute;e.');
define('_MI_WFL_GLOBAL_NEWCATEGORY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notification  : Nouvelle cat&eacute;gorie de liens');                              

define('_MI_WFL_GLOBAL_LINKMODIFY_NOTIFY','Requ&ecirc;te de modification de lien');
define('_MI_WFL_GLOBAL_LINKMODIFY_NOTIFYCAP','Notifiez-moi pour chaque demande de modification de lien.');
define('_MI_WFL_GLOBAL_LINKMODIFY_NOTIFYDSC','Recevoir une notification pour toute requ&ecirc;te de modification de lien est envoy&eacute;e.');
define('_MI_WFL_GLOBAL_LINKMODIFY_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notification  : Requ&ecirc;te de modification de lien');

define('_MI_WFL_GLOBAL_LINKBROKEN_NOTIFY','Envoie d\'un lien bris&eacute;');
define('_MI_WFL_GLOBAL_LINKBROKEN_NOTIFYCAP','Notifiez-moi pour tout rapport de lien bris&eacute;.');
define('_MI_WFL_GLOBAL_LINKBROKEN_NOTIFYDSC','Recevoir une notification quand un rapport de lien bris&eacute; est envoy&eacute;.');
define('_MI_WFL_GLOBAL_LINKBROKEN_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notification  : Lien bris&eacute; rapport&eacute;');

define('_MI_WFL_GLOBAL_LINKSUBMIT_NOTIFY','Lien envoy&eacute;');
define('_MI_WFL_GLOBAL_LINKSUBMIT_NOTIFYCAP','Notifiez-moi lorsqu\'un nouveau lien est propos&eacute; (attente d\'&ecirc;tre approuv&eacute;).');
define('_MI_WFL_GLOBAL_LINKSUBMIT_NOTIFYDSC','Recevoir une notification quand un ou plusieurs liens sont envoy&eacute;s (en attente de validation).');
define('_MI_WFL_GLOBAL_LINKSUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notification  : Nouveau lien envoy&eacute;');

define('_MI_WFL_GLOBAL_NEWLINK_NOTIFY','Nouveau lien');
define('_MI_WFL_GLOBAL_NEWLINK_NOTIFYCAP','Notifiez-moi quand un nouveau lien est post&eacute;.');
define('_MI_WFL_GLOBAL_NEWLINK_NOTIFYDSC','Recevoir une notification quand un nouveau lien est post&eacute;.');
define('_MI_WFL_GLOBAL_NEWLINK_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notification  : Nouveau lien');

define('_MI_WFL_CATEGORY_FILESUBMIT_NOTIFY','Lien envoy&eacute;');
define('_MI_WFL_CATEGORY_FILESUBMIT_NOTIFYCAP','Notifiez-moi lorsqu\'un nouveau lien est propos&eacute; (attente d\'&ecirc;tre approuv&eacute;) dans la cat&eacute;gorie actuelle.');   
define('_MI_WFL_CATEGORY_FILESUBMIT_NOTIFYDSC','Recevoir une notification quand un nouveau lien est envoy&eacute; (en attente de validation) dans la cat&eacute;gorie en cours.');      
define('_MI_WFL_CATEGORY_FILESUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notification  : Nouveau lien envoy&eacute; dans la cat&eacute;gorie'); 

define('_MI_WFL_CATEGORY_NEWLINK_NOTIFY','Nouveau lien');
define('_MI_WFL_CATEGORY_NEWLINK_NOTIFYCAP','Notifiez-moi lorsqu\'un nouveau lien est post&eacute; dans la cat&eacute;gorie actuelle.');   
define('_MI_WFL_CATEGORY_NEWLINK_NOTIFYDSC','Recevoir une notification quand un nouveau lien est post&eacute; dans la cat&eacute;gorie courante.');      
define('_MI_WFL_CATEGORY_NEWLINK_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notification  : Nouveau lien sans la cat&eacute;gorie'); 

define('_MI_WFL_LINK_APPROVE_NOTIFY','Lien approuv&eacute;');
define('_MI_WFL_LINK_APPROVE_NOTIFYCAP','Notifiez-moi quand un lien est approuv&eacute;.');
define('_MI_WFL_LINK_APPROVE_NOTIFYDSC','Recevoir une notification quand un lien est approuv&eacute;.');
define('_MI_WFL_LINK_APPROVE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} auto-notification  : Lien approuv&eacute;');

define('_MI_WFL_AUTHOR_INFO',"Information sur le développeur");
define('_MI_WFL_AUTHOR_NAME',"Développeur");
define('_MI_WFL_AUTHOR_DEVTEAM',"Equipe de développement");
define('_MI_WFL_AUTHOR_WEBSITE',"Site de développement");
define('_MI_WFL_AUTHOR_EMAIL',"E-mail du développeur");
define('_MI_WFL_AUTHOR_CREDITS',"Crédits");
define('_MI_WFL_MODULE_INFO',"Informations sur le développement du module");
define('_MI_WFL_MODULE_STATUS',"Statut du développement");
define('_MI_WFL_MODULE_DEMO',"Site de démonstration");
define('_MI_WFL_MODULE_SUPPORT',"Site officiel du support");
define('_MI_WFL_MODULE_BUG',"Signaler un bug concernant ce module");
define('_MI_WFL_MODULE_FEATURE',"Suggérer une nouvelle fonction pour ce module");
define('_MI_WFL_MODULE_DISCLAIMER',"Avertissement");
define('_MI_WFL_RELEASE',"Date de pubmlication : ");

define('_MI_WFL_MODULE_MAILLIST',"WF-Project Mailing Lists");
define('_MI_WFL_MODULE_MAILANNOUNCEMENTS',"Mailing List : Annonces ");
define('_MI_WFL_MODULE_MAILBUGS',"Bug Mailing List");
define('_MI_WFL_MODULE_MAILFEATURES',"Mailing List : Fonctions ");
define('_MI_WFL_MODULE_MAILANNOUNCEMENTSDSC',"Obtenir les dernières nouvelles de la part de WF-Project.");
define('_MI_WFL_MODULE_MAILBUGSDSC',"Mailing list : Bug Tracking et soumission");
define('_MI_WFL_MODULE_MAILFEATURESDSC',"Mailing list : demande de nouvelles fonctions.");

define('_MI_WFL_WARNINGTEXT',"THE SOFTWARE IS PROVIDED BY WF-PROJECTS \"AS IS\" AND \"WITH ALL FAULTS.\"
WF-PROJECTS MAKES NO REPRESENTATIONS OR WARRANTIES OF ANY KIND CONCERNING
THE QUALITY, SAFETY OR SUITABILITY OF THE SOFTWARE, EITHER EXPRESS OR
IMPLIED, INCLUDING WITHOUT LIMITATION ANY IMPLIED WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, OR NON-INFRINGEMENT.
FURTHER, WF-PROJECTS MAKES NO REPRESENTATIONS OR WARRANTIES AS TO THE TRUTH,
ACCURACY OR COMPLETENESS OF ANY STATEMENTS, INFORMATION OR MATERIALS
CONCERNING THE SOFTWARE THAT IS CONTAINED IN WF-Project WEBSITE. IN NO
EVENT WILL WF-PROJECTS BE LIABLE FOR ANY INDIRECT, PUNITIVE, SPECIAL,
INCIDENTAL OR CONSEQUENTIAL DAMAGES HOWEVER THEY MAY ARISE AND EVEN IF
WF-PROJECT HAS BEEN PREVIOUSLY ADVISED OF THE POSSIBILITY OF SUCH DAMAGES..");

define('_MI_WFL_AUTHOR_CREDITSTEXT',"L'équipe de WF-Projects tient à remercier les personnes suivantes pour leur concours.<br /></br />EdStacey, maumed, banned, krobi, Pnooka, MarcoFr, cosmodrum, placebo333");
define('_MI_WFL_AUTHOR_BUGFIXES',"Historique des correction de bugs");

define('_MI_WFL_COPYRIGHTIMAGE',"Sauf indication contraire, ce module (WF-Links) et ses images ont le copyright de l'équipe WF-Projets .<br /><br />Vous avez la permission de copier, modifier et changer WF-Links en fonction de vos exigences personnelles. Vous acceptez de ne pas modifier, d'adapter et de redistribuer le code source du Logiciel sans l'autorisation expresse de la WF-Projets équipe.");

define('_MI_WFL_SELECTFORUM',"S&eacute;lectionnez un forum :");
define('_MI_WFL_SELECTFORUMDSC',"S&eacute;lectionnez le forum que vous avez install&eacute; et qui sera utilis&eacute; par WF-Links.");

define('_MI_WFL_DISPLAYFORUM1',"Newbb (tous)");
define('_MI_WFL_DISPLAYFORUM2',"Forum IPB");
define('_MI_WFL_DISPLAYFORUM3',"Module PHPBB2");


// added by McDonald
define("_MI_WFL_COUNTRY","Pays :");
define('_MI_WFL_EDITOR',"Editeur à utiliser :");
define('_MI_WFL_EDITORCHOICE',"Sélectionner l'éditeur à utiliser. Si vous ne disposez d'aucun éditeur (hormis celui fourni en standard avec le core de Xoops), vos choix se limitent à DHTML ou Compact");
define("_MI_WFL_FORM_DHTML","DHTML");
define("_MI_WFL_FORM_COMPACT","Compact");
define("_MI_WFL_FORM_SPAW","Spaw Editor");
define("_MI_WFL_FORM_HTMLAREA","HtmlArea Editor");
define("_MI_WFL_FORM_FCK","FCK Editor");
define("_MI_WFL_FORM_KOIVI","Koivi Editor");
define("_MI_WFL_FORM_INBETWEEN","Inbetween");
define("_MI_WFL_FORM_TINYEDITOR","Tinyeditor");
define("_MI_WFL_FORM_TINYMCE","TinyMCE");
define("_MI_WFL_FORM_DHTMLEXT","DHTML Extended");
define("_MI_WFL_SORTCATS","Ordonner les Catégories par :");
define("_MI_WFL_SORTCATSDSC","Sélectionner la manière de classer les Catégories et sous-catégories.");
define("_MI_WFL_KEYLENGTH","Saisir le nombre maximum de caractères autorisés pour les mots clés :");
define("_MI_WFL_KEYLENGTHDSC","Par défaut : 255 caractères");
define("_MI_WFL_OTHERLINKS","Afficher les liens soumis par le même auteur ?");
define("_MI_WFL_OTHERLINKSDSC","Choisir si les liens soumis par le même utilisateur doivent être affichés sur la page.");
define("_MI_WFL_TOTALCHARS","Indiquer le nombre de caractères autorisés pour les descriptions");
define("_MI_WFL_TOTALCHARSDSC","Indiquer le nombre de caractères autorisés pour les descriptions en mode Vue par catégories.");
define("_MI_WFL_QUICKVIEW","Options Vue rapide.");
define("_MI_WFL_QUICKVIEWDSC","Activer / désactiver l'option de Vue rapide.");
define('_MI_WFL_ICONS_CREDITS',"Icônes par");
define("_MI_WFL_SHOWSBOOKMARKS","Afficher les liens Social Bookmarks ?");
define("_MI_WFL_SHOWSBOOKMARKSDSC","Choisir d'afficher / masquer les icônes des liens sociaux sous les liens.");
define("_MI_WFL_SHOWPAGERANK","Afficher le PageRank du lien ?");
define("_MI_WFL_SHOWPAGERANKSDSC","Choisir d'afficher / masquer l'icône de PageRank pour chaque lien.");
define("_MI_WFL_USERTAGDESCR","Les utilisateur peuvent-ils soumettre des Tags ?");
define("_MI_WFL_USERTAGDSC","Choisir d'autoriser / interdire la soumission de tags.");

// Version 1.05 RC5
define('_MI_WFL_DATEFORMATADMIN','Date et heure :');
define('_MI_WFL_DATEFORMATADMINDSC','Date et heure par d&eacute;faut pour administer WF-Links<br />Voir <a href="http://jp.php.net/manual/en/function.date.php" target="_blank">PHP manual</a>');
define("_MI_WFL_USEADDRESSDESCR","Utiliser les options d'adresse et de carte ?");
define("_MI_WFL_USEADDRESSDSC","Sélectionner Oui pour utiliser les options d'adresse et de carte.");
define("_MI_WFL_HEADERPRINT","[OPTIONS D'IMPRESSION] Imprimer l'entête de page");
define("_MI_WFL_HEADERPRINTDSC","Entête qui sera imprimé pour chaque lien");
define("_MI_WFL_LOGOURLPRINT","[OPTIONS D'IMPRESSION] Url du logo à imprimer");
define("_MI_WFL_LOGOURLDSCPRINT","Url du logo qui sera imprimer dans l'entête de page.");
define("_MI_WFL_FOOTERPRINT","[OPTIONS D'IMPRESSION] Imprimer le pied de page");
define("_MI_WFL_FOOTERPRINTDSC","Pied de page qui sera imprimé pour chaque lien");
define("_MI_WFL_BNAME3","Statistique des sponsors de WF-Links");
define("_MI_WFL_VCARD_CREDITS","vCard script par");

// Version 1.05 RC6
define("_MI_WFL_FLAGIMG","Dossier contenant les drapeaux de Pays");
define("_MI_WFL_FLAGIMGDSC","Saisir l'url sans / (slash) à la fin");
define("_MI_WFL_CATEGORYIMGDSC","Saisir l'url sans / (slash) à la fin");
define("_MI_WFL_SCREENSHOTSDSC","Saisir l'url sans / (slash) à la fin");
define("_MI_WFL_MAINIMGDIRDSC","Saisir l'url sans / (slash) à la fin");
define("_MI_WFL_USEAUTOSCRSHOT","Utiliser la génération automatique des captures d'écran");
define("_MI_WFL_USEAUTOSCRSHOTDSC","Cette option vous permettra d'obtenir automatiquement une capture d'écran du site. Selon les sites, des dysfonctionnements peuvent être rencontrés avec cette option.");
define("_MI_WFL_MOZSHOT_CREDITS","Génération automatique des captures d'écran par");
define("_MI_WFL_MOZSHOT_CREDITSTXT", '<a href="http://mozshot.nemui.org" target=_blank>Mozshot</a> (all source code provided under <a href="http://www.ruby-lang.org/en/" target=_blank>Ruby</a> lisence)');

// Version 1.06 RC-1
define("_MI_WFL_BNAME4","Nuage de Tags WF-Links");
define("_MI_WFL_BNAME5","Top Tags WF-Links");

// Version 1.06 RC-3
define('_MI_WFL_DISPLAYFORUM4',"Newbbex");
define("_MI_WFL_TITLE_A","Titre (A)");
define("_MI_WFL_TITLE_D","Titre (D)");
define("_MI_WFL_RATING_A","Estimation (A)");
define("_MI_WFL_RATING_D","Estimation (D)");
define("_MI_WFL_SUBMITTED_A","Date de soumission (A)");
define("_MI_WFL_SUBMITTED_D","Date de soumission (D)");
define("_MI_WFL_POPULARITY_A","Populaire (A)");
define("_MI_WFL_POPULARITY_D","Populaire (D)");
define("_MI_WFL_COUNTRY_A","Pay (A)");
define("_MI_WFL_COUNTRY_D","Pay (D)");

// Version 1.08

// Admin Summary
//define("_MI_WFL_SCATEGORY","Category");
define("_MI_WFL_SNEWFILESVAL","Submitted");
define("_MI_WFL_SMODREQUEST","Modified");
//define("_MI_WFL_SREVIEWS","Reviews: ");
define("_MI_WFL_SBROKENSUBMIT","Broken");
define("_MI_WFL_DOCUMENTATION","Docs");

define('_MI_WFL_ADD_LINK','Add Link');
define('_MI_WFL_ADD_CATEGORY','Add Category');