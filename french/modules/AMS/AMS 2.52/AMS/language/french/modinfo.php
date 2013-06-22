<?php
// $Id$
// Module Info

// The name of this module
define("_AMS_MI_NEWS_NAME","Articles");

// A brief description of this module
define("_AMS_MI_NEWS_DESC","Cr&#233;e une section d&#39;articles, o&#249; les utilisateurs peuvent poster des articles/commentaires.");

// Names of blocks for this module (Not all module has blocks)
define("_AMS_MI_NEWS_BNAME1","Sujets d&#39;articles");
define("_AMS_MI_NEWS_BNAME3","Article du jour");
define("_AMS_MI_NEWS_BNAME4","Top articles");
define("_AMS_MI_NEWS_BNAME5","Articles r&#233;cents");
define("_AMS_MI_NEWS_BNAME6","Mod&#233;ration des articles");
define("_AMS_MI_NEWS_BNAME7","Navigation dans les sujets");
define("_AMS_MI_NEWS_BNAME8","Auteurs les plus actifs");
define("_AMS_MI_NEWS_BNAME9","Auteurs les plus lus");
define("_AMS_MI_NEWS_BNAME10","Auteurs les mieux not&#233;s");
define("_AMS_MI_NEWS_BNAME11","Articles les mieux not&#233;s");
define("_AMS_MI_NEWS_BNAME12","AMS Spotlight");

// Sub menus in main menu block
define("_AMS_MI_NEWS_SMNAME1","Proposer un article");
define("_AMS_MI_NEWS_SMNAME2","Archives");

// Names of admin menu items
define("_AMS_MI_NEWS_ADMENU2","Sujets");
define("_AMS_MI_NEWS_ADMENU3","Articles");
define("_AMS_MI_NEWS_GROUPPERMS","Permissions");

// Title of config items
define("_AMS_MI_STORYHOME","Combien d&#39;article(s) sur la page principale ?");
define("_AMS_MI_STORYCOUNTTOPIC","S&#233;lectionnez le nombre d&#39;articles &#224; afficher sur un sujet");
define("_AMS_MI_NOTIFYSUBMIT","Notifier par mail d&#39;une nouvelle proposition ?");
define("_AMS_MI_DISPLAYNAV","Afficher la bo&#238;te de navigation en haut de chaque page ?");
define("_AMS_MI_AUTOAPPROVE","Approuver automatiquement les nouveaux articles sans l&#39;intervention d&#39;un administrateur ?");
define("_AMS_MI_ALLOWEDSUBMITGROUPS","Groupes pouvant soumettre des articles");
define("_AMS_MI_ALLOWEDAPPROVEGROUPS","Groupes pouvant approuver des articles");
define("_AMS_MI_NEWSDISPLAY","Mise en page des articles");
define("_AMS_MI_NAMEDISPLAY","Nom d&#39;auteur &#224; utiliser");
define("_AMS_MI_COLUMNMODE","Colonnes");
define("_AMS_MI_STORYCOUNTADMIN","Nombre d&#39;articles &#224; afficher dans l&#39;administration : ");
define("_AMS_MI_UPLOADFILESIZE","Taille maximale des fichiers joints en Ko (1048576 = 1 M&#233;ga)");
define("_AMS_MI_UPLOADGROUPS","Groupes autoris&#233;s &#224; joindre des fichiers aux articles");
define("_AMS_MI_MAXITEMS","Maximum d&#39;articles");
define("_AMS_MI_MAXITEMDESC","");


// Description of each config itemsCe controle
define("_AMS_MI_STORYHOMEDSC","");
define("_AMS_MI_NOTIFYSUBMITDSC","");
define("_AMS_MI_DISPLAYNAVDSC","");
define("_AMS_MI_AUTOAPPROVEDSC","");
define("_AMS_MI_ALLOWEDSUBMITGROUPSDESC","Les groupes s&#233;lectionn&#233;s seront autoris&#233;s &#224; soumettre des articles");
define("_AMS_MI_ALLOWEDAPPROVEGROUPSDESC","Les groupes s&#233;lectionn&#233;s seront autoris&#233;s &#224; approuver les nouveaux articles");
define("_AMS_MI_NEWSDISPLAYDESC","Le mode &#34;Classique&#34; affiche tous les nouveaux articles tri&#233;s par date de publication. Le mode &#34;Articles par sujets&#34; groupera les articles par sujet avec le dernier article d&#233;velopp&#233; et les autres avec juste le titre");
define("_AMS_MI_ADISPLAYNAMEDSC","Permet de choisir sous quelle forme le nom de l&#39;auteur doit &#234;tre affich&#233;");
define("_AMS_MI_COLUMNMODE_DESC","Choisissez le nombre de colonnes &#224; utiliser pour afficher les articles (cette option n&#39;est utilisable qu&#39;avec le mode d&#39;affichage &#34;classique&#34;");
define("_AMS_MI_STORYCOUNTADMIN_DESC","");
define("_AMS_MI_STORYCOUNTTOPIC_DESC","");
define("_AMS_MI_UPLOADFILESIZE_DESC","");
define("_AMS_MI_UPLOADGROUPS_DESC","Choisissez les groupes qui peuvent t&#233;l&#233;charger vers le serveur");

// Name of config item values
define("_AMS_MI_NEWSCLASSIC","Classique");
define("_AMS_MI_NEWSBYTOPIC","Articles par sujets");
define("_AMS_MI_DISPLAYNAME1","Pseudo");
define("_AMS_MI_DISPLAYNAME2","Nom complet");
define("_AMS_MI_DISPLAYNAME3","Aucun");
define("_AMS_MI_UPLOAD_GROUP1","Editeurs et Approbateurs");
define("_AMS_MI_UPLOAD_GROUP2","Approbateurs uniquement");
define("_AMS_MI_UPLOAD_GROUP3","T&#233;l&#233;chargement d&#233;sactiv&#233;");
define("_AMS_MI_INDEX_NAME","Nom de l&#39;Index");
define("_AMS_MI_INDEX_DESC","Il sera affich&#233; dans en partie sup&#233;rieure du sujet et de l&#39;article");

// Text for notifications

define("_AMS_MI_NEWS_GLOBAL_NOTIFY","Globale");
define("_AMS_MI_NEWS_GLOBAL_NOTIFYDSC","Options de notification globale des articles.");

define("_AMS_MI_NEWS_STORY_NOTIFY","Articles");
define("_AMS_MI_NEWS_STORY_NOTIFYDSC","Options de notification s&#39;appliquant &#224; l&#39;article actuel");

define("_AMS_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFY","Nouveau sujet");
define("_AMS_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYCAP","Notifiez-moi quand un nouveau sujet est cr&#233;&#233;.");
define("_AMS_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYDSC","Recevoir une notification quand un nouveau sujet est cr&#233;&#233;.");
define("_AMS_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} notification automatique : Nouvel article");

define("_AMS_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFY","Nouvel article propos&#233;");
define("_AMS_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYCAP","Notifiez-moi lorsqu&#39;un nouvel article est propos&#233; (attente d&#39;&#234;tre approuv&#233;).");
define("_AMS_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYDSC","Recevoir une notification lorsqu&#39;un nouvel article est propos&#233; (attente d&#39;&#234;tre approuv&#233;).");
define("_AMS_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} notification automatique : Nouvel article propos&#233;");

define("_AMS_MI_NEWS_GLOBAL_NEWSTORY_NOTIFY","Nouvel article");
define("_AMS_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYCAP","Notifiez-moi quand un nouvel article est post&#233;.");
define("_AMS_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYDSC","Recevoir une notification quand un nouvel article est post&#233;.");
define("_AMS_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} notification automatique : Nouvel article");

define("_AMS_MI_NEWS_STORY_APPROVE_NOTIFY","Article approuv&#233;");
define("_AMS_MI_NEWS_STORY_APPROVE_NOTIFYCAP","Notifiez-moi quand cet article est approuv&#233;.");
define("_AMS_MI_NEWS_STORY_APPROVE_NOTIFYDSC","Recevoir une notification quand cet article est approuv&#233;.");
define("_AMS_MI_NEWS_STORY_APPROVE_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} notification automatique : Article approuv&#233;");

define("_AMS_MI_RESTRICTINDEX","Restreindre les sujets sur la page d&#39;index ?");
define("_AMS_MI_RESTRICTINDEXDSC","Si l&#39;option est &#224; Oui, les utilisateurs ne verront que les articles pour lesquels ils ont les permissions de lecture");

define("_AMS_MI_ANONYMOUS_VOTE","Activer le vote des Anonymes");
define("_AMS_MI_ANONYMOUS_VOTE_DESC","Si Oui, les utilisateurs anonymes peuvent voter");

define("_AMS_MI_AUDIENCE","Audience");

define("_AMS_MI_SPOTLIGHT","Spotlight");
define("_AMS_MI_SPOTLIGHT_ITEMS","Spotlight Article Candidats");
define("_AMS_MI_SPOTLIGHT_ITEMS_DESC","C&#39;est le nombre d&#39;articles qui seront inscrites sous le feu des projecteurs en tant que page de configuration de choix pour l&#39;article en lumi&#232;re");

define("_AMS_MI_EDITOR","Editeur par d&#233;faut");
define("_AMS_MI_EDITOR_DESC","");
define("_AMS_MI_EDITOR_DEFAULT","Xoops Default");
define("_AMS_MI_EDITOR_DHTML","DHTML");
define("_AMS_MI_EDITOR_HTMLAREA","HtmlArea Editor");
define("_AMS_MI_EDITOR_FCK","FCK WYSIWYG Editor");
define("_AMS_MI_EDITOR_KOIVI","Koivi WYSIWYG Editor");
define("_AMS_MI_EDITOR_TINYMCE","TinyMCE WYSIWYG Editor");

define("_AMS_MI_EDITOR_USER_CHOICE","Choix des &#233;diteurs disponibles");
define("_AMS_MI_EDITOR_USER_CHOICE_DESC","");

define("_AMS_MI_EDITOR_CHOICE","Editeurs");
define("_AMS_MI_EDITOR_CHOICE_DESC","Choix des &#233;diteurs permis aux utilisateurs");

define("_AMS_MI_SPOTLIGHT_TEMPLATE","Spotlight Templates");
define("_AMS_MI_SPOTLIGHT_TEMPLATE_DESC","quel template pour le spotlight block");

define("_AMS_MI_ABOUT","Au sujet de...");
define("_AMS_MI_MIME_TYPES","Types MIME");


/**
 * @translation     AFUX (Association Francophone des Utilisateurs de Xoops) (http://www.afux.org/)
 * @specification   _LANGCODE: fr
 * @specification   _CHARSET: UTF-8
 *
 * @Translator      Lasco
 *
 * @version         $Id
**/
?>