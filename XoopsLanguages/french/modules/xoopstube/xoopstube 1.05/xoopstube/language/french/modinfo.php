<?php
/**
 * $Id: modinfo.php
 * Module: XoopsTube
 * Language: french
 */

// Module Info
// The name of this module
define("_MI_XTUBE_NAME", "XoopsTube");

// A brief description of this module
define("_MI_XTUBE_DESC", "Module de partage, syndication et publication de vidéos en ligne.");

// Names of blocks for this module (Not all module has blocks)
define("_MI_XTUBE_BNAME1", "Vidéos récentes (t)");
define("_MI_XTUBE_BNAME2", "Vidéos récentes");
define("_MI_XTUBE_BNAME3", "Meilleurs Vidéos (t)");
define("_MI_XTUBE_BNAME4", "Meilleurs Vidéos");
define("_MI_XTUBE_BNAME5", "Vidéos récentes (h)");
define("_MI_XTUBE_BNAME6", "Vidéos aléatoires");
define("_MI_XTUBE_BNAME7", "Vidéos aléatoires (h)");

// Sub menu titles
define("_MI_XTUBE_SMNAME1", "Soumettre");
define("_MI_XTUBE_SMNAME2", "Populaire");
define("_MI_XTUBE_SMNAME3", "Mieux notées");
define("_MI_XTUBE_SMNAME4", "Vidéos récentes");

// Names of admin menu items
define("_MI_XTUBE_BINDEX", "Page principale");
define("_MI_XTUBE_INDEXPAGE", "Gestion de la Page Index");
define("_MI_XTUBE_MCATEGORY", "Gestion des catégories");
define("_MI_XTUBE_MVIDEOS", "Gestion des vidéos");
define("_MI_XTUBE_MUPLOADS", "Envoi d'images");
define("_MI_XTUBE_PERMISSIONS", "Permissions");
define("_MI_XTUBE_BLOCKADMIN", "Paramètres des blocs");
define("_MI_XTUBE_MVOTEDATA", "Votes");

// Title of config items
define('_MI_XTUBE_POPULAR', 'Visites pour être populaire');
define('_MI_XTUBE_POPULARDSC', 'Nombre de visites pour que la vidéo soit considérée comme populaire.');

define("_MI_XTUBE_ICONDISPLAY", "Affichage populaire et nouveau :");
define("_MI_XTUBE_DISPLAYICONDSC", "Sélectionner la façon dont vont être affichés les vidéos populaires et nouvelles");
define("_MI_XTUBE_DISPLAYICON1", "Affichez sous forme d'icône");
define("_MI_XTUBE_DISPLAYICON2", "Affichez sous forme de texte");
define("_MI_XTUBE_DISPLAYICON3", "Aucun affichage");

define("_MI_XTUBE_DAYSNEW", "Délai en jours pour les nouvelles vidéos :");
define("_MI_XTUBE_DAYSNEWDSC", "Nombre de jours pour qu'une vidéo soit considérée comme nouveau après sa publication.");

define("_MI_XTUBE_DAYSUPDATED", "Délai en jour pour les vidéos mises à jour :");
define("_MI_XTUBE_DAYSUPDATEDDSC", "Nombre de jours pendant lesquels une vidéo est considérée comme mise à jour.");

define('_MI_XTUBE_PERPAGE', 'Nombre de vidéos à afficher :');
define('_MI_XTUBE_PERPAGEDSC', 'Nombre de vidéos à afficher dans chaque catégorie.');

define("_MI_XTUBE_ADMINPAGE", "Nombre de vidéos à afficher dans l'admin :");
define("_MI_XTUBE_AMDMINPAGEDSC", "Nombre de vidéos à afficher dans la page d'administration de Module :");

define("_MI_XTUBE_ARTICLESSORT", "Ordre par défaut des vidéos :");
define("_MI_XTUBE_ARTICLESSORTDSC", "Select the default order for the video listings.");

define("_MI_XTUBE_SORTCATS", "Tri des catégories :");
define("_MI_XTUBE_SORTCATSDSC", "Sélectionner la manière dans-laquelle les catégories et les sous-catégories seront triées.");

define('_MI_XTUBE_SUBCATS', 'Sous-catégories :');
define('_MI_XTUBE_SUBCATSDSC', 'Sélectionner Oui pour afficher les Sous-catégories et Non pour les cacher.');

define('_MI_XTUBE_EDITOR', "Editeur utilisé (admin):");
define('_MI_XTUBE_EDITORCHOICE', "Sélectionnez l'éditeur à utiliser du côté admin. Si vous avez une installation « simple » (par exemple vous utilisez seulement XOOPS core, la classe éditeur fournie dans le paquet du noyau standard de Xoops), alors vous pouvez seulement sélectionner DHTML et Compact");
define('_MI_XTUBE_EDITORUSER', "Editeur utilisé (user):");
define('_MI_XTUBE_EDITORCHOICEUSER', "Sélectionnez l'éditeur à utiliser du côté utilisateur. Si vous avez une installation « simple » (par exemple vous utilisez seulement XOOPS core, la classe éditeur fournie dans le paquet du noyau standard de Xoops), alors vous pouvez seulement sélectionner DHTML et Compact");
define("_MI_XTUBE_FORM_DHTML", "DHTML");
define("_MI_XTUBE_FORM_COMPACT", "Compact");
define("_MI_XTUBE_FORM_SPAW", "Editeur Spaw");
define("_MI_XTUBE_FORM_HTMLAREA", "Editeur HtmlArea");
define("_MI_XTUBE_FORM_FCK", "Editeur FCK");
define("_MI_XTUBE_FORM_KOIVI", "Editeur Koivi");
define("_MI_XTUBE_FORM_TINYEDITOR", "Editeur Tiny");

define('_MI_XTUBE_USESHOTS', 'Affichez des copies d\'écran ?');
define('_MI_XTUBE_USESHOTSDSC', 'Choisissez oui pour afficher des copies d\'écran pour chaque vidéo');

define('_MI_XTUBE_USETHUMBS', 'Utiliser des Miniatures :');
define("_MI_XTUBE_USETHUMBSDSC", "Type d'images supportées : JPG, GIF, PNG.<div style='padding-top: 8px;'>XoopsTube utilise des miniatures pour les images. Choisissez 'Non' si votre serveur ne supporte pas cette option.</div>");

define("_MI_XTUBE_IMGUPDATE", "Mise à jour des Miniatures ?");
define("_MI_XTUBE_IMGUPDATEDSC", "Si vous sélectionner la mise à jour des miniatures à chaque page render. Sinon, la première miniature de l'image sera utilisée indépendamment<br /><br />");

define('_MI_XTUBE_SHOTWIDTH', 'Largeur de la capture d\'écran');
define('_MI_XTUBE_SHOTWIDTHDSC', 'Permet de choisir une largeur pour les copies d\'écran');

define('_MI_XTUBE_SHOTHEIGHT', 'Hauteur de la capture d\'écran');
define('_MI_XTUBE_SHOTHEIGHTDSC', 'Permet de choisir une hauteur pour les copies d\'écran');

define('_MI_XTUBE_MAINIMGDIR', 'Répertoire principal d\'images');

define('_MI_XTUBE_CATEGORYIMG', 'Répertoire d\'envoi des catégories d\'images');

define('_MI_XTUBE_DATEFORMAT', 'Horodatage :');
define('_MI_XTUBE_DATEFORMATDSC', 'Horodatage par défaut pour XoopsTube');

define("_MI_XTUBE_TOTALCHARS", "Nombre total des caractères pour les descriptions ?");
define("_MI_XTUBE_TOTALCHARSDSC", "Paramétrez le nombre total des caractères pour les descriptions dans la page Index.");

define("_MI_XTUBE_OTHERVIDEOS", "Afficher d'autres vidéos proposées par le déposant ?");
define("_MI_XTUBE_OTHERVIDEOSDSC", "Sélectionner 'Oui' si d'autres vidéos du déposant doivent êtres affichées.");

define("_MI_XTUBE_SHOWSBOOKMARKS", "Afficher les signets sociaux ?");
define("_MI_XTUBE_SHOWSBOOKMARKSDSC", "Sélectionner 'Oui' si vous voulez afficher les icônes Social Bookmark sous les vidéos.");

define("_MI_XTUBE_USEMETADESCR", "Generateur meta description :");
define("_MI_XTUBE_USEMETADSC", "En activant cette option, les meta description seront basés sur les descriptions des vidéos.");

define("_MI_XTUBE_USERTAGDESCR", "Les utilisateurs peuvent Soumettre des Tags :");
define("_MI_XTUBE_USERTAGDSC", "Sélectionner 'Oui' si vous voulez autoriser les utilisateurs à Soumettre Tags.");

define('_MI_XTUBE_SHOWDISCLAIMER', 'Afficher le disclaimer avant la proposition d\'un utilisateur ?');
define('_MI_XTUBE_SHOWDISCLAIMERDSC', 'Avant qu\'un utilisateur propose une vidéo');

define('_MI_XTUBE_DISCLAIMER', 'Texte du disclaimer:');

define('_MI_XTUBE_SHOWVIDEODISCL', 'Afficher le disclaimer avant de voir la vidéo ?');
define('_MI_XTUBE_SHOWVIDEODISCLDSC', 'Voir les règlements avant de visualiser la vidéo');

define('_MI_XTUBE_VIDEODISCLAIMER', 'Entrer le texte du disclaimer de la vidéo :');

define('_MI_XTUBE_COPYRIGHT', 'Information de droits d\'auteur :');
define('_MI_XTUBE_COPYRIGHTDSC', 'Afficher les droits d\'auteur dans les pages des vidéos.');

define('_MI_XTUBE_CHECKHOST', 'Désactiver les liens directes des vidéos depuis d\'autres sites web ? (leeching)');
define('_MI_XTUBE_REFERERS', 'Liste des sites autorisés <br />Sépares par #');
define("_MI_XTUBE_ANONPOST", "Proposition des utilisateurs anonymes:");
define("_MI_XTUBE_ANONPOSTDSC", "Permettre aux utilisateurs anonymes de proposer et/ou envoyer sur votre site Web ?");
define('_MI_XTUBE_AUTOAPPROVE', 'Approbation automatique des vidéos');
define('_MI_XTUBE_AUTOAPPROVEDSC', 'Choisissez la méthode d\'approbation des vidéos sans modération.');

define('_MI_XTUBE_MAXFILESIZE', 'Taille de l\'envoi (Ko)');
define('_MI_XTUBE_MAXFILESIZEDSC', 'Taille maximum autorisée pour les vidéos envoyées.');
define('_MI_XTUBE_IMGWIDTH', 'Largeur maximum des images envoyées');
define('_MI_XTUBE_IMGWIDTHDSC', 'Largeur maximum des images envoyées pour les vidéos');
define('_MI_XTUBE_IMGHEIGHT', 'Hauteur maximum des images envoyées');
define('_MI_XTUBE_IMGHEIGHTDSC', 'Hauteur maximum des images envoyées pour les vidéos');

define('_MI_XTUBE_UPLOADDIR', 'Répertoire d\'envoi (Sans la barre oblique à la fin)');
define('_MI_XTUBE_ALLOWSUBMISS', 'Soumission des utilisateurs :');
define('_MI_XTUBE_ALLOWSUBMISSDSC', 'Autoriser les utilisateurs à soumettre des vidéos');
define('_MI_XTUBE_ALLOWUPLOADS', 'Envoi des utilisateurs :');
define('_MI_XTUBE_ALLOWUPLOADSDSC', 'Autoriser les utilisateurs à envoyer directement des vidéos sur le site');
define('_MI_XTUBE_SCREENSHOTS', 'Répertoire des copies d\'écran');

define("_MI_XTUBE_SUBMITART", "Soumission des vidéos :");
define("_MI_XTUBE_SUBMITARTDSC", "Sélectionner les groupes autorisés à Soumettre de nouvelles vidéos.");
define("_MI_XTUBE_RATINGGROUPS", "Estimation des vidéos :");
define("_MI_XTUBE_RATINGGROUPSDSC", "Sélectionner les groupes autorisés à estimer des vidéos.");

define("_MI_XTUBE_QUALITY", "Qualité des miniatures :");
define("_MI_XTUBE_QUALITYDSC", "Qualité inférieure : 0 Supérieure: 100");
define("_MI_XTUBE_KEEPASPECT", "Conserver le ratio de l'image");
define("_MI_XTUBE_KEEPASPECTDSC", "");

define("_MI_XTUBE_TITLE", "Titre");
define("_MI_XTUBE_RATING", "Estimation");
define("_MI_XTUBE_WEIGHT", "Position");
define("_MI_XTUBE_POPULARITY", "Popularité");
define("_MI_XTUBE_SUBMITTED2", "Date de soumission");

// Text for notifications
define('_MI_XTUBE_GLOBAL_NOTIFY', 'Global');
define('_MI_XTUBE_GLOBAL_NOTIFYDSC', 'Options de notification globales des vidéos.');
define('_MI_XTUBE_CATEGORY_NOTIFY', 'Categorie');
define('_MI_XTUBE_CATEGORY_NOTIFYDSC', 'Options de notification qui s\'appliquent aux vidéos de la catégorie courante.');
define('_MI_XTUBE_VIDEO_NOTIFY', 'Vidéo');
define('_MI_XTUBE_FILE_NOTIFYDSC', 'Options de notification qui s\'appliquent à la vidéo courante.');
define('_MI_XTUBE_GLOBAL_NEWCATEGORY_NOTIFY', 'Nouvelle catégorie');
define('_MI_XTUBE_GLOBAL_NEWCATEGORY_NOTIFYCAP', 'Notifiez-moi quand une catégorie de fichiers est créée.');
define('_MI_XTUBE_GLOBAL_NEWCATEGORY_NOTIFYDSC', 'Recevoir une notification quand une catégorie de fichiers est créée');
define('_MI_XTUBE_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notification : Nouvelle catégorie de vidéos');

define('_MI_XTUBE_GLOBAL_VIDEOMODIFY_NOTIFY', 'Demande de modifications');
define('_MI_XTUBE_GLOBAL_VIDEOMODIFY_NOTIFYCAP', 'Notifiez-moi de toute demande de modification de vidéos');
define('_MI_XTUBE_GLOBAL_VIDEOMODIFY_NOTIFYDSC', 'Recevoir une notification quand une modification de vidéos est demandée.');
define('_MI_XTUBE_GLOBAL_VIDEOMODIFY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notification : Demande de modification de vidéos');

define('_MI_XTUBE_GLOBAL_VIDEOBROKEN_NOTIFY', 'Vidéos brisées');
define('_MI_XTUBE_GLOBAL_VIDEOBROKEN_NOTIFYCAP', 'Notifiez-moi de tout rapport de vidéo brisée');
define('_MI_XTUBE_GLOBAL_VIDEOBROKEN_NOTIFYDSC', 'Recevoir une notication quand un rapport de vidéo brisée est rapporté.');
define('_MI_XTUBE_GLOBAL_VIDEOBROKEN_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notification : Vidéo brisée signalé');

define('_MI_XTUBE_GLOBAL_VIDEOSUBMIT_NOTIFY', 'Vidéos soumises');
define('_MI_XTUBE_GLOBAL_VIDEOSUBMIT_NOTIFYCAP', 'Notifiez-moi des nouvelles soumissions de vidéo (en attente d\'approbation).');
define('_MI_XTUBE_GLOBAL_VIDEOSUBMIT_NOTIFYDSC', 'Recevoir une notification des nouvelles vidéos soumises (en attente d\'approbation).');
define('_MI_XTUBE_GLOBAL_VIDEOSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notification : Nouvelle vidéo soumise');

define('_MI_XTUBE_GLOBAL_NEWVIDEO_NOTIFY', 'Nouvelles vidéos');
define('_MI_XTUBE_GLOBAL_NEWVIDEO_NOTIFYCAP', 'Notifiez-moi dès qu\'une nouvelle vidéo est publiée.');
define('_MI_XTUBE_GLOBAL_NEWVIDEO_NOTIFYDSC', 'Recevoir une notifaction quand une nouvelle vidéo est publiée.');
define('_MI_XTUBE_GLOBAL_NEWVIDEO_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notification : Nouvelle vidéo');

define('_MI_XTUBE_CATEGORY_FILESUBMIT_NOTIFY', 'Vidéos soumises');
define('_MI_XTUBE_CATEGORY_FILESUBMIT_NOTIFYCAP', 'Notifiez-moi dès qu\'une nouvelle vidéo est publiée (en attente d\'approbation) dans cette catégorie.');
define('_MI_XTUBE_CATEGORY_FILESUBMIT_NOTIFYDSC', 'Recevoir une notifaction quand une nouvelle vidéo est publiée (en attente d\'approbation) dans cette catégorie.');
define('_MI_XTUBE_CATEGORY_FILESUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notification : Nouvelle vidéo publié dans cette catégorie');

define('_MI_XTUBE_CATEGORY_NEWVIDEO_NOTIFY', 'Nouvelles vidéos');
define('_MI_XTUBE_CATEGORY_NEWVIDEO_NOTIFYCAP', 'Notifiez-moi dès qu\'une nouvelle vidéo est publiée dans cette catégorie.');
define('_MI_XTUBE_CATEGORY_NEWVIDEO_NOTIFYDSC', 'Recevoir une notifaction quand une nouvelle vidéo est publiée dans cette catégorie.');
define('_MI_XTUBE_CATEGORY_NEWVIDEO_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notification : Nouvelle vidéo dans cette catégorie');

define('_MI_XTUBE_VIDEO_APPROVE_NOTIFY', 'Vidéo approuvée');
define('_MI_XTUBE_VIDEO_APPROVE_NOTIFYCAP', 'Notifiez-moi dès que cette vidéo est approuvée.');
define('_MI_XTUBE_VIDEO_APPROVE_NOTIFYDSC', 'Recevoir une notication dès que cette vidéo est approuvée.');
define('_MI_XTUBE_VIDEO_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notification : Vidéo approuvée');

define('_MI_XTUBE_AUTHOR_INFO', "Informations sur le développeur");
define('_MI_XTUBE_AUTHOR_NAME', "Développeur");
define('_MI_XTUBE_AUTHOR_DEVTEAM', "Equipe de développement");
define('_MI_XTUBE_AUTHOR_WEBSITE', "Site internet du développeur");
define('_MI_XTUBE_AUTHOR_EMAIL', "Courrier électronique du développeur");
define('_MI_XTUBE_AUTHOR_CREDITS', "Remerciements");
define('_MI_XTUBE_MODULE_INFO', "Informations sur le développement du module");
define('_MI_XTUBE_MODULE_STATUS', "Statut du développement");
define('_MI_XTUBE_MODULE_DEMO', "Site de démonstration");
define('_MI_XTUBE_MODULE_SUPPORT', "Site officiel de support");
define('_MI_XTUBE_MODULE_BUG', "Rapporter un bogue pour ce module");
define('_MI_XTUBE_MODULE_FEATURE', "Suggérez une nouvelle fonction pour ce module");
define('_MI_XTUBE_MODULE_DISCLAIMER', "Clause de non-responsabilité");
define('_MI_XTUBE_RELEASE', "Date de mise à jour: ");

define('_MI_XTUBE_MODULE_MAILLIST', "Liste de diffusion de WF-Project");
define('_MI_XTUBE_MODULE_MAILANNOUNCEMENTS', "Liste de diffusion des annonces");
define('_MI_XTUBE_MODULE_MAILBUGS', "Liste de diffusion des bugs");
define('_MI_XTUBE_MODULE_MAILFEATURES', "Liste de fonctionnalités");
define('_MI_XTUBE_MODULE_MAILANNOUNCEMENTSDSC', "Obtenir les dernières annonces de WF-Project.");
define('_MI_XTUBE_MODULE_MAILBUGSDSC', "Suivi des bogues et soummission des listes de diffusion");
define('_MI_XTUBE_MODULE_MAILFEATURESDSC', "Demande de liste de diffusion des nouvelles fonctionnalités.");

define('_MI_XTUBE_WARNINGTEXT', "LE LOGICIEL EST FOURNI PAR MCDONALD « TEL QUEL » ET « AVEC TOUTES SES FAILLES. »
MCDONALD NE FAIT AUCUNE REPRÉSENTATION OU GARANTIES DE QUELQUE MANIERE QUE CE SOIT CONCERNANT
LA QUALITÉ, LA SÉCURITÉ OU LA PERTINENCE DU LOGICIEL, SOIT EXPRESS OU
IMPLICITE, INCLUANT SANS LIMITATION TOUTE LES GARANTIES D'IMPLICITES
QUALITÉ MARCHANDE, D'ADÉQUATION À UN USAGE PARTICULIER OU DE NON-CONTREFAÇON.
DE PLUS, MCDONALD NE FAIT AUCUNE REPRÉSENTATION OU GARANTIE QUANT À LA VÉRITÉ,
L'EXACTITUDE OU L'EXHAUSTIVITÉ DES DÉCLARATIONS, INFORMATIONS OU MATÉRIAUX
CONCERNANT LE LOGICIEL QUI EST CONTENU SUR LE SITE INTERNET MARCHAND  DE  MCDONALD. POUR AUCUN
ÉVÉNEMENT MCDONALD NE SERA TENU RESPONSABLE, QU'IL SOIT INDIRECT, PUNITIF, SPÉCIAL,
ACCESSOIRE OU INDIRECT, MAIS ILS PEUVENT SURVENIR, ET MÊME SI
MCDONALD A ÉTÉ PRÉALABLEMENT AVISÉ DE LA POSSIBILITÉ DE TELS DOMMAGES ET INTÉRÊTS...");

define('_MI_XTUBE_AUTHOR_CREDITSTEXT', "L'équipe WF-Projects.");
define('_MI_XTUBE_AUTHOR_BUGFIXES', "Historique des bugs corrigés");

// version 1.02
define("_MI_XTUBE_FORM_TINYMCE", "TinyMCE");
define("_MI_XTUBE_FORM_DHTMLEXT", "DHTML étendu");

// Version 1.03
define('_MI_XTUBE_DATEFORMATADMIN', 'Administration de l\'horodatage :');
define('_MI_XTUBE_DATEFORMATADMINDSC', 'Administration par défaut de l\'horodatage pour XoopsTube');

// Version 1.04 RC-1
define('_MI_XTUBE_VIDEODIR', 'Répertoire de téléchargement des vidéos :');
define('_MI_XTUBE_VIDEODIRDSC', 'Définir le répertoire pour les fichiers vidéos de XoopsTube');
define('_MI_XTUBE_VIDEOIMGDIR', 'Répertoire de téléchargement des captures d\'écran des vidéos :');
define('_MI_XTUBE_VIDEOIMGDIRDSC', 'Définir le répertoire des captures d\'écran des vidéos de XoopsTube');
define('_MI_XTUBE_FLVPLAYER_CREDITS', 'Lecteur FLV');
define('_MI_XTUBE_FLVPLAYER_CREDITDSC', 'JW FLV Media Player par LongTail Video (Jeroen Wijering)');
define('_MI_XTUBE_VUPLOADS', 'Téléchargement vidéo');
define('_MI_XTUBE_CATEGORYIMGDSC', '');
define('_MI_XTUBE_MAINIMGDIRDSC', '');
define('_MI_XTUBE_BNAME8', 'Statistiques des parrains de XoopsTube');
define('_MI_XTUBE_ICONS_CREDITS', "Icônes");

// Version 1.04 RC-2
define('_MI_XTUBE_MODULE_MANUAL', 'Guide');
define('_MI_XTUBE_MODULE_MANUALWIKI', 'Guide du wiki');
define('_MI_XTUBE_MODULE_REQUESTNEWFEATURE', 'Demander une nouvelle fonctionnalité');
define('_MI_XTUBE_MODULE_SUBMITBUG', 'Soumettre un bogue');
define("_MI_XTUBE_BNAME9", "Nuage de mots XoopsTube");
define("_MI_XTUBE_BNAME10", "Les meilleurs mots XoopsTube");
define('_MI_XTUBE_FLVPLAYER_MANUAL', 'Manuel du lecteur FLV');
define('_MI_XTUBE_FLVPLAYER_WIKI', 'Wiki du lecteur JW');

// Version 1.05 RC-1
define("_MI_XTUBE_CATCOLUMNS", "Sélectionnez le nombre de colonnes de la catégorie :");
define("_MI_XTUBE_CATCOLUMNSDSC", "Choisir la quantité de colonnes, la valeur par défaut est 2");
define("_MI_XTUBE_RATINGDISPLAY", "Afficher les caractéristiques de la cote ?");
define("_MI_XTUBE_RATINGDISPLAYDSC", "Selectionnez <em>Oui</em> pour afficher les caractéristiques de la cote. Selectionnez <em>Non</em> Si vous ne souhaitez pas afficher les caractéristiques de la cote.");
define("_MI_XTUBE_AUTOPLAY", "Lecture automatique de la vidéo");
define("_MI_XTUBE_AUTOPLAYDSC", "Selectionnez <em>Oui</em> pour voir les clips vidéo jouer automatiquement.");
define('_MI_XTUBE_VERSION', 'Version');
define('_MI_XTUBE_LICENSE', 'License');
define('_MI_XTUBE_LICENSEDSC', 'Licence publique générale GNU (GPL) - ci-joint une copie de la licence GNU (license.txt).');

define('_MI_XTUBE_ADD_VIDEO', 'Ajouter une vidéo');
define('_MI_XTUBE_ADD_CATEGORY', 'Ajouter une catégorie');

// Admin Summary
define("_MI_XTUBE_SCATEGORY", "Catégorie");
define("_MI_XTUBE_SFILES", "Vidéos");
define("_MI_XTUBE_SNEWFILESVAL", "Soumis");
define("_MI_XTUBE_SMODREQUEST", "Modifié");
define("_MI_XTUBE_SREVIEWS", "Révisions : ");
define("_MI_XTUBE_SBROKENSUBMIT", "Brisé");
// Traduction faite par Cesag pour frxoops.org le 04 Juin 2012.
?>