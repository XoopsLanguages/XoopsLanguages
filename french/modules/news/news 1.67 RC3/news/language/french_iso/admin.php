<?php
// $Id$
// Support Francophone de Xoops (www.frxoops.org)
//%%%%%%        Admin Module Name  Articles         %%%%%
define("_AM_DBUPDATED","Base de donn�es mise � jour avec succ�s !");
define("_AM_CONFIG","Configuration des articles");
define("_AM_AUTOARTICLES","Articles automatis�s");
define("_AM_STORYID","ID de l'article");
define("_AM_TITLE","Titre");
define("_AM_TOPIC","Sujet");
define("_AM_POSTER","Auteur");
define("_AM_PROGRAMMED","Date et heure programm�e");
define("_AM_ACTION","Action");
define("_AM_EDIT","Editer");
define("_AM_DELETE","Effacer");
define("_AM_LAST10ARTS","Les %d derniers articles");
define("_AM_PUBLISHED","Publi� le"); // Published Date
define("_AM_GO","Ok");
define("_AM_EDITARTICLE","Editer l'article");
define("_AM_POSTNEWARTICLE","Poster un nouvel article");
define("_AM_ARTPUBLISHED","Votre article a �t� publi� !"); // mail
define("_AM_HELLO","Bonjour %s,"); // mail
define("_AM_YOURARTPUB","Votre article soumis sur notre site a �t� publi�."); // mail
define("_AM_TITLEC","Titre : "); // mail
define("_AM_URLC","URL : "); // mail
define("_AM_PUBLISHEDC","Publi� le : "); // mail
define("_AM_RUSUREDEL","Etes-vous s�r de vouloir supprimer cet article et tous ses commentaires ?");
define("_AM_YES","Oui");
define("_AM_NO","Non");
define("_AM_INTROTEXT","Texte de l'introduction");
define("_AM_EXTEXT","Suite du texte");
define("_AM_ALLOWEDHTML","HTML autoris� :");
define("_AM_DISAMILEY","D�sactiver les �motic�nes");
define("_AM_DISHTML","D�sactiver le HTML");
define("_AM_APPROVE","Approuver");
define("_AM_MOVETOTOP","D�placer cet article au Top");
define("_AM_CHANGEDATETIME","Changer la date et l'heure de publication");
define("_AM_NOWSETTIME","L'heure est maintenant d�finie � : %s"); // %s is datetime of publish
define("_AM_CURRENTTIME","Actuellement il est : %s");  // %s is the current datetime
define("_AM_SETDATETIME","Param�trer la date et l'heure de publication");
define("_AM_MONTHC","Mois :");
define("_AM_DAYC","Jour :");
define("_AM_YEARC","Ann�e :");
define("_AM_TIMEC","Heure :");
define("_AM_PREVIEW","Pr�visualiser");
define("_AM_SAVE","Sauvegarder");
define("_AM_PUBINHOME","Publier en page d'accueil ?");
define("_AM_ADD","Ajouter");

//%%%%%%        Admin Module Name  Topics         %%%%%

define("_AM_ADDMTOPIC","Ajouter un sujet PRINCIPAL");
define("_AM_TOPICNAME","Nom du sujet");
// Attention, modifi� de 40 � 255 caract�res.
define("_AM_MAX40CHAR","(maxi : 255 caract�res)");
define("_AM_TOPICIMG","Image du sujet");
define("_AM_IMGNAEXLOC","nom de l'image + extension plac� dans %s");
define("_AM_FEXAMPLE","par exemple : games.gif");
define("_AM_ADDSUBTOPIC","Ajouter un sous-sujet");
define("_AM_IN","dans");
define("_AM_MODIFYTOPIC","Modifier le sujet");
define("_AM_MODIFY","Modifier");
define("_AM_PARENTTOPIC","Sujet parent");
define("_AM_SAVECHANGE","Sauvegarder les changements");
define("_AM_DEL","Effacer");
define("_AM_CANCEL","Annuler");
define("_AM_WAYSYWTDTTAL","ATTENTION : Etes-vous s�r de vouloir supprimer ce sujet et tous ses articles et commentaires ?");


// Added in Beta6
define("_AM_TOPICSMNGR","Gestionnaire de sujets");
define("_AM_PEARTICLES","Gestion des articles");
define("_AM_NEWSUB","Nouvelles propositions");
define("_AM_POSTED","Post� le");
define("_AM_GENERALCONF","Configuration g�n�rale");


// Added in RC2
define("_AM_TOPICDISPLAY","Afficher l'image du sujet ?");
define("_AM_TOPICALIGN","Position");
define("_AM_RIGHT","Droite");
define("_AM_LEFT","Gauche");

define("_AM_EXPARTS","Articles expir�s");
define("_AM_EXPIRED","Expir�");
define("_AM_CHANGEEXPDATETIME","Changer la date et l'heure d'expiration");
define("_AM_SETEXPDATETIME","Param�trer la date et l'heure d'expiration");
define("_AM_NOWSETEXPTIME","L'heure est maintenant d�finie � : %s");

// Added in RC3
define("_AM_ERRORTOPICNAME", "Vous devez entrer un nom de sujet !");
define("_AM_EMPTYNODELETE", "Rien � supprimer !");

// Added 240304 (Mithrandir)
define('_AM_GROUPPERM', "Permissions des groupes");
define('_AM_SELFILE','S�lectionnez un fichier');

// Added by Herv�
define('_AM_UPLOAD_DBERROR_SAVE',"Erreur pendant le rattachement d'un fichier � un article");
define('_AM_UPLOAD_ERROR',"Erreur pendant le t�l�chargement du fichier vers le serveur");
define('_AM_UPLOAD_ATTACHFILE',"Fichier(s) attach�(s)");
define('_AM_APPROVEFORM', "Permission d'approuver");
define('_AM_SUBMITFORM', "Permission de soumettre");
define('_AM_VIEWFORM', "Permission de consulter");
define('_AM_APPROVEFORM_DESC', "Choisissez les groupes qui peuvent approuver les articles pour les sujets affich�s");
define('_AM_SUBMITFORM_DESC', "Choisissez les groupes qui peuvent soumettre des articles pour les sujets affich�s");
define('_AM_VIEWFORM_DESC', "Choisissez les groupes qui peuvent visualiser les sujets affich�s");
define('_AM_DELETE_SELFILES', "Supprimer les fichiers s�lectionn�s");
define('_AM_TOPIC_PICTURE', "T�l�charger l'image du sujet");
define('_AM_UPLOAD_WARNING', "<b>Attention, n'oubliez pas d'appliquer les permissions d'�criture au r�pertoire suivant : %s </b>");

define('_AM_NEWS_UPGRADECOMPLETE', "Mise � jour termin�e");
define('_AM_NEWS_UPDATEMODULE', "Mise � jour des th�mes des modules et des blocs");
define('_AM_NEWS_UPGRADEFAILED', "La mise � jour a �chou�e");
define('_AM_NEWS_UPGRADE', "Mise � jour");
define('_AM_ADD_TOPIC', "Ajouter un sujet");
define('_AM_ADD_TOPIC_ERROR',"Erreur, ce sujet existe d�ja !");
define('_AM_ADD_TOPIC_ERROR1',"ERREUR : Impossible de selectionner ce sujet comme sujet parent !");
define('_AM_SUB_MENU',"Publier ce sujet comme un sous-menu");
define('_AM_SUB_MENU_YESNO',"Sous-menu ?");
define('_AM_HITS', "Hits");
define('_AM_CREATED', "Cr��");

define('_AM_TOPIC_DESCR', "Description du sujet");
define('_AM_USERS_LIST', "Liste des utilisateurs");
define('_AM_PUBLISH_FRONTPAGE', "Publier en premi�re page ?");
define('_AM_NEWS_UPGRADEFAILED1', "Impossible de cr�er la table 'stories_files'");
define('_AM_NEWS_UPGRADEFAILED2', "Impossible de modifier la longueur du titre du sujet");
define('_AM_NEWS_UPGRADEFAILED21', "Impossible d'ajouter les nouveaux champs dans la table 'topics'");
define('_AM_NEWS_UPGRADEFAILED3', "Impossible de cr�er la table 'stories_votedata'");
define('_AM_NEWS_UPGRADEFAILED4', "Impossible de cr�er les deux champs 'rating' and 'votes' dans la table 'story'");
define('_AM_NEWS_UPGRADEFAILED0', "Veuillez noter les messages et tenter de corriger les probl�mes avec phpMyadmin et le fichier de d�finition de sql disponible dans le dossier � sql � du module news");
define('_AM_NEWS_UPGR_ACCESS_ERROR',"Erreur pour utiliser le script de mise � jour, vous devez �tre administrateur du module");
define('_AM_NEWS_PRUNE_BEFORE',"Purger les articles qui ont �t� publi�s avant le");
define('_AM_NEWS_PRUNE_EXPIREDONLY',"Supprimer seulement les articles qui sont expir�s");
define('_AM_NEWS_PRUNE_CONFIRM',"Attention, vous �tes sur le point de supprimer d�finitivement les articles qui ont �t� publi�s avant le %s (cette action ne peut �tre annul�e). Cela repr�sente %s articles.<br />En �tes-vous certain(e) ?");
define('_AM_NEWS_PRUNE_TOPICS',"Se limiter aux sujets suivants");
define('_AM_NEWS_PRUNENEWS', "Purger les articles");
define('_AM_NEWS_EXPORT_NEWS', "Exporter les articles en XML");
define('_AM_NEWS_EXPORT_NOTHING', "D�sol�, il n'y a rien � exporter, merci de v�rifier vos crit�res");
define('_AM_NEWS_PRUNE_DELETED', "%d articles ont �t� supprim�s");
define('_AM_NEWS_PERM_WARNING', "<h2>Attention, il y a 3 formulaires, donc vous devez valider trois boutons</h2>");
define('_AM_NEWS_EXPORT_BETWEEN', "Exporter les articles publi�s entre le");
define('_AM_NEWS_EXPORT_AND', " et ");
define('_AM_NEWS_EXPORT_PRUNE_DSC', "Si vous ne s�lectionnez rien, alors tous les sujets seront utilis�s<br/> sinon, seuls les sujets selectionn�s seront utilis�s");
define('_AM_NEWS_EXPORT_INCTOPICS', "Inclure la description des sujets ?");
define('_AM_NEWS_EXPORT_ERROR', "Erreur pendant la cr�ation du fichier %s. Op�ration annul�e.");
define('_AM_NEWS_EXPORT_READY', "L'export du fichier au format xml est disponible pour t�l�chargement. <br /><a rel='external' href='%s'>Cliquez sur ce lien pour le t�l�charger</a>.<br />N'oubliez pas <a href='%s'>de le supprimer </a> une fois que vous avez termin�.");
define('_AM_NEWS_RSS_URL', "URL du flux RSS");
define('_AM_NEWS_NEWSLETTER', "Bulletin d'information");
define('_AM_NEWS_NEWSLETTER_BETWEEN', "S�lectionner les articles publi�s entre le");
define('_AM_NEWS_NEWSLETTER_READY', "Votre Bulletin d'information est disponible au t�l�chargement. <br /><a rel='external' href='%s'>Cliquez sur ce lien pour le t�l�charger</a>.<br />N'oubliez pas de <a href='%s'>le supprimer</a> une fois que vous avez termin�.");
define('_AM_NEWS_DELETED_OK',"Fichier supprim� avec succ�s");
define('_AM_NEWS_DELETED_PB',"Un probl�me a �t� rencontr� pendant la suppression du fichier");
define('_AM_NEWS_STATS0',"Statistiques des sujets");
define('_AM_NEWS_STATS',"Statistiques");
define('_AM_NEWS_STATS1',"Auteurs");
define('_AM_NEWS_STATS2',"Total");
define('_AM_NEWS_STATS3',"Statistiques des articles");
define('_AM_NEWS_STATS4',"Articles les plus lus");
define('_AM_NEWS_STATS5',"Articles les moins lus");
define('_AM_NEWS_STATS6',"Articles les mieux cot�s");
define('_AM_NEWS_STATS7',"Auteurs les plus lus");
define('_AM_NEWS_STATS8',"Auteurs les mieux cot�s");
define('_AM_NEWS_STATS9',"Meilleurs contributeurs");
define('_AM_NEWS_STATS10',"Statistiques par Auteurs");
define('_AM_NEWS_STATS11',"Nombre d'articles");
define('_AM_NEWS_HELP',"Aide");
define("_AM_NEWS_MODULEADMIN"," - Administration");
define("_AM_NEWS_GENERALSET", "Options du module" );
define('_AM_NEWS_GOTOMOD','Aller au module');
define('_AM_NEWS_NOTHING',"D�sol� mais il n'y a rien � t�l�charger, v�rifiez vos crit�res");
define('_AM_NEWS_NOTHING_PRUNE',"D�sol�, mais il n'y a rien � purger, v�rifiez vos crit�res");
define('_AM_NEWS_TOPIC_COLOR',"Couleur du sujet");
define('_AM_NEWS_COLOR',"Couleur");
define('_AM_NEWS_REMOVE_BR',"Convertir les balises html &lt;br /&gt; en un retour � la ligne ?");
// Added in 1.3 RC2
define('_AM_NEWS_PLEASE_UPGRADE',"<a href='upgrade.php'><font color='#FF0000'>Veuillez mettre � jour le module s'il vous plait</font></a>");

// Added in version 1.50
define('_AM_NEWS_NEWSLETTER_HEADER', "Ent�te");
define('_AM_NEWS_NEWSLETTER_FOOTER', "Pied de page");
define('_AM_NEWS_NEWSLETTER_HTML_TAGS', "Supprimer les balises html ?");
define('_AM_NEWS_VERIFY_TABLES',"Maintenir les tables");
define('_AM_NEWS_METAGEN',"Metagen");
define('_AM_NEWS_METAGEN_DESC',"Le Metagen est un syst�me qui peut vous aider � avoir des pages mieux index�es par les moteurs de recherche.<br />Sauf si vous entrez vous-m�me les meta keywords et meta desriptions, le module les g�n�rera automatiquement pour chaque article.");
define('_AM_NEWS_BLACKLIST',"Liste noire");
define('_AM_NEWS_BLACKLIST_DESC',"Les mots contenus dans cette liste<br />ne seront pas utilis�s lors de la cr�ation des meta keywords");
define('_AM_NEWS_BLACKLIST_ADD',"Ajouter");
define('_AM_NEWS_BLACKLIST_ADD_DSC',"Entrez des mots � ajouter dans la liste<br />(un mot par ligne)");
define('_AM_NEWS_META_KEYWORDS_CNT',"Nombre maximal de meta mots cl�s � g�n�rer");
define('_AM_NEWS_META_KEYWORDS_ORDER',"Ordre des mots cl�s");
define('_AM_NEWS_META_KEYWORDS_INTEXT',"Ordre d'apparition dans le texte");
define('_AM_NEWS_META_KEYWORDS_FREQ1',"Ordre de fr�quence des mots");
define('_AM_NEWS_META_KEYWORDS_FREQ2',"Ordre inverse de la fr�quence des mots");

// Added in version 1.67
// About.php
define('_AM_NEWS_ABOUT_RELEASEDATE',"Sorti : ");
define('_AM_NEWS_ABOUT_UPDATEDATE',"Mise � jour : ");
define('_AM_NEWS_ABOUT_AUTHOR',"Auteur : ");
define('_AM_NEWS_ABOUT_CREDITS',"Remerciements : ");
define('_AM_NEWS_ABOUT_LICENSE',"Licence : ");
define('_AM_NEWS_ABOUT_MODULE_STATUS',"Statut : ");
define('_AM_NEWS_ABOUT_WEBSITE',"Site internet : ");
define('_AM_NEWS_ABOUT_AUTHOR_NAME',"Nom de l'auteur: ");
define('_AM_NEWS_ABOUT_CHANGELOG',"Journal des modifications");
define('_AM_NEWS_ABOUT_MODULE_INFO',"Informations sur le module");
define('_AM_NEWS_ABOUT_AUTHOR_INFO',"Informations sur l'auteur");
define('_AM_NEWS_ABOUT_DESCRIPTION',"Description : ");
// Configuration check
define("_AM_NEWS_CONFIG_CHECK","V�rification de la configuration");
define("_AM_NEWS_CONFIG_PHP","Version minimum de PHP requise: %s (votre version actuelle est la %s)");
define("_AM_NEWS_CONFIG_XOOPS","Version minimum de XOOPS requise:  %s (votre version actuelle est la %s)"); 


define ("_AM_NEWS_STATISTICS", "Statistiques des articles");
define ("_AM_NEWS_THEREARE_STORIES", "Il y a <span class='red bold'>%s</span> Articles dans la base de donn�es");
define ("_AM_NEWS_THEREARE_STORIES_ONLINE", "Il y a <span class='red bold'>%s</span> Articles en ligne");
define ("_AM_NEWS_THEREARE_STORIES_FILES", "Il y a  <span class='red bold'>%s</span> Fichiers d'articles dans la base de donn�es");
define ("_AM_NEWS_THEREARE_STORIES_FILES_ONLINE", "Il y a <span class='red bold'>%s</span> Fichiers d'articles en ligne");
define ("_AM_NEWS_THEREARE_TOPICS", "Il y a <span class='red bold'>%s</span> Cat�gories dans la base de donn�es");
define ("_AM_NEWS_THEREARE_TOPICS_ONLINE", "Il y a <span class='red bold'>%s</span> Cat�gories en ligne");
define ("_AM_NEWS_THEREARE_STORIES_VOTEDATA", "Il y a <span class='red bold'>%s</span> Articles visionn�s");
define ("_AM_NEWS_THEREARE_STORIES_IMPORTED", "Il y a <span class='red bold'>%s</span> Articles import�s");
define ("_AM_NEWS_THEREARE_STORIES_EXPORTED", "Il y a <span class='red bold'>%s</span> Articles export�s");

define("_AM_NEWS_NOPERMSSET","L'autorisation ne peut �tre donn�e : il n'y a aucun sujet cr�� encore! Veuillez d'abord cr�er un sujet.");

/**
 * @translation     Communaut� Francophone des Utilisateurs de Xoops
 * @specification   _LANGCODE: fr
 * @specification   _CHARSET: iso-8859-1
 * Mis � jour par Cesag le 16 Mai 2012
 * @version         $Id $
**/

?>