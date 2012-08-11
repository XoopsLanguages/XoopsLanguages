<?php
// $Id$
// Support Francophone de Xoops (www.frxoops.org)
//%%%%%%        Admin Module Name  Articles         %%%%%
define("_AM_DBUPDATED","Base de données mise à jour avec succès !");
define("_AM_CONFIG","Configuration des articles");
define("_AM_AUTOARTICLES","Articles automatisés");
define("_AM_STORYID","ID de l'article");
define("_AM_TITLE","Titre");
define("_AM_TOPIC","Sujet");
define("_AM_POSTER","Auteur");
define("_AM_PROGRAMMED","Date et heure programmée");
define("_AM_ACTION","Action");
define("_AM_EDIT","Editer");
define("_AM_DELETE","Effacer");
define("_AM_LAST10ARTS","Les %d derniers articles");
define("_AM_PUBLISHED","Publié le"); // Published Date
define("_AM_GO","Ok");
define("_AM_EDITARTICLE","Editer l'article");
define("_AM_POSTNEWARTICLE","Poster un nouvel article");
define("_AM_ARTPUBLISHED","Votre article a été publié !"); // mail
define("_AM_HELLO","Bonjour %s,"); // mail
define("_AM_YOURARTPUB","Votre article soumis sur notre site a été publié."); // mail
define("_AM_TITLEC","Titre : "); // mail
define("_AM_URLC","URL : "); // mail
define("_AM_PUBLISHEDC","Publié le : "); // mail
define("_AM_RUSUREDEL","Etes-vous sûr de vouloir supprimer cet article et tous ses commentaires ?");
define("_AM_YES","Oui");
define("_AM_NO","Non");
define("_AM_INTROTEXT","Texte de l'introduction");
define("_AM_EXTEXT","Suite du texte");
define("_AM_ALLOWEDHTML","HTML autorisé :");
define("_AM_DISAMILEY","Désactiver les émoticônes");
define("_AM_DISHTML","Désactiver le HTML");
define("_AM_APPROVE","Approuver");
define("_AM_MOVETOTOP","Déplacer cet article au Top");
define("_AM_CHANGEDATETIME","Changer la date et l'heure de publication");
define("_AM_NOWSETTIME","L'heure est maintenant définie à : %s"); // %s is datetime of publish
define("_AM_CURRENTTIME","Actuellement il est : %s");  // %s is the current datetime
define("_AM_SETDATETIME","Paramétrer la date et l'heure de publication");
define("_AM_MONTHC","Mois :");
define("_AM_DAYC","Jour :");
define("_AM_YEARC","Année :");
define("_AM_TIMEC","Heure :");
define("_AM_PREVIEW","Prévisualiser");
define("_AM_SAVE","Sauvegarder");
define("_AM_PUBINHOME","Publier en page d'accueil ?");
define("_AM_ADD","Ajouter");

//%%%%%%        Admin Module Name  Topics         %%%%%

define("_AM_ADDMTOPIC","Ajouter un sujet PRINCIPAL");
define("_AM_TOPICNAME","Nom du sujet");
// Attention, modifié de 40 à 255 caractères.
define("_AM_MAX40CHAR","(maxi : 255 caractères)");
define("_AM_TOPICIMG","Image du sujet");
define("_AM_IMGNAEXLOC","nom de l'image + extension placé dans %s");
define("_AM_FEXAMPLE","par exemple : games.gif");
define("_AM_ADDSUBTOPIC","Ajouter un sous-sujet");
define("_AM_IN","dans");
define("_AM_MODIFYTOPIC","Modifier le sujet");
define("_AM_MODIFY","Modifier");
define("_AM_PARENTTOPIC","Sujet parent");
define("_AM_SAVECHANGE","Sauvegarder les changements");
define("_AM_DEL","Effacer");
define("_AM_CANCEL","Annuler");
define("_AM_WAYSYWTDTTAL","ATTENTION : Etes-vous sûr de vouloir supprimer ce sujet et tous ses articles et commentaires ?");


// Added in Beta6
define("_AM_TOPICSMNGR","Gestionnaire de sujets");
define("_AM_PEARTICLES","Gestion des articles");
define("_AM_NEWSUB","Nouvelles propositions");
define("_AM_POSTED","Posté le");
define("_AM_GENERALCONF","Configuration générale");


// Added in RC2
define("_AM_TOPICDISPLAY","Afficher l'image du sujet ?");
define("_AM_TOPICALIGN","Position");
define("_AM_RIGHT","Droite");
define("_AM_LEFT","Gauche");

define("_AM_EXPARTS","Articles expirés");
define("_AM_EXPIRED","Expiré");
define("_AM_CHANGEEXPDATETIME","Changer la date et l'heure d'expiration");
define("_AM_SETEXPDATETIME","Paramétrer la date et l'heure d'expiration");
define("_AM_NOWSETEXPTIME","L'heure est maintenant définie à : %s");

// Added in RC3
define("_AM_ERRORTOPICNAME","Vous devez entrer un nom de sujet !");
define("_AM_EMPTYNODELETE","Rien à supprimer !");

// Added 240304 (Mithrandir)
define('_AM_GROUPPERM',"Permissions des groupes");
define('_AM_SELFILE','Sélectionnez un fichier');

// Added by Hervé
define('_AM_UPLOAD_DBERROR_SAVE',"Erreur pendant le rattachement d'un fichier à un article");
define('_AM_UPLOAD_ERROR',"Erreur pendant le téléchargement du fichier vers le serveur");
define('_AM_UPLOAD_ATTACHFILE',"Fichier(s) attaché(s)");
define('_AM_APPROVEFORM',"Permission d'approuver");
define('_AM_SUBMITFORM',"Permission de soumettre");
define('_AM_VIEWFORM',"Permission de consulter");
define('_AM_APPROVEFORM_DESC',"Choisissez les groupes qui peuvent approuver les articles pour les sujets affichés");
define('_AM_SUBMITFORM_DESC',"Choisissez les groupes qui peuvent soumettre des articles pour les sujets affichés");
define('_AM_VIEWFORM_DESC',"Choisissez les groupes qui peuvent visualiser les sujets affichés");
define('_AM_DELETE_SELFILES',"Supprimer les fichiers sélectionnés");
define('_AM_TOPIC_PICTURE',"Télécharger l'image du sujet");
define('_AM_UPLOAD_WARNING',"<b>Attention, n'oubliez pas d'appliquer les permissions d'écriture au répertoire suivant : %s </b>");

define('_AM_NEWS_UPGRADECOMPLETE',"Mise à jour terminée");
define('_AM_NEWS_UPDATEMODULE',"Mise à jour des thèmes des modules et des blocs");
define('_AM_NEWS_UPGRADEFAILED',"La mise à jour a échouée");
define('_AM_NEWS_UPGRADE',"Mise à jour");
define('_AM_ADD_TOPIC',"Ajouter un sujet");
define('_AM_ADD_TOPIC_ERROR',"Erreur, ce sujet existe déja !");
define('_AM_ADD_TOPIC_ERROR1',"ERREUR : Impossible de selectionner ce sujet comme sujet parent !");
define('_AM_SUB_MENU',"Publier ce sujet comme un sous-menu");
define('_AM_SUB_MENU_YESNO',"Sous-menu ?");
define('_AM_HITS',"Hits");
define('_AM_CREATED',"Créé");

define('_AM_TOPIC_DESCR',"Description du sujet");
define('_AM_USERS_LIST',"Liste des utilisateurs");
define('_AM_PUBLISH_FRONTPAGE',"Publier en première page ?");
define('_AM_NEWS_UPGRADEFAILED1',"Impossible de créer la table 'stories_files'");
define('_AM_NEWS_UPGRADEFAILED2',"Impossible de modifier la longueur du titre du sujet");
define('_AM_NEWS_UPGRADEFAILED21',"Impossible d'ajouter les nouveaux champs dans la table 'topics'");
define('_AM_NEWS_UPGRADEFAILED3',"Impossible de créer la table 'stories_votedata'");
define('_AM_NEWS_UPGRADEFAILED4',"Impossible de créer les deux champs 'rating' and 'votes' dans la table 'story'");
define('_AM_NEWS_UPGRADEFAILED0',"Veuillez noter les messages et tenter de corriger les problèmes avec phpMyadmin et le fichier de définition de sql disponible dans le dossier « sql » du module news");
define('_AM_NEWS_UPGR_ACCESS_ERROR',"Erreur pour utiliser le script de mise à jour, vous devez être administrateur du module");
define('_AM_NEWS_PRUNE_BEFORE',"Purger les articles qui ont été publiés avant le");
define('_AM_NEWS_PRUNE_EXPIREDONLY',"Supprimer seulement les articles qui sont expirés");
define('_AM_NEWS_PRUNE_CONFIRM',"Attention, vous êtes sur le point de supprimer définitivement les articles qui ont été publiés avant le %s (cette action ne peut être annulée). Cela représente %s articles.<br />En êtes-vous certain(e) ?");
define('_AM_NEWS_PRUNE_TOPICS',"Se limiter aux sujets suivants");
define('_AM_NEWS_PRUNENEWS',"Purger les articles");
define('_AM_NEWS_EXPORT_NEWS',"Exporter les articles en XML");
define('_AM_NEWS_EXPORT_NOTHING',"Désolé, il n'y a rien à exporter, merci de vérifier vos critères");
define('_AM_NEWS_PRUNE_DELETED',"%d articles ont été supprimés");
define('_AM_NEWS_PERM_WARNING',"<h2>Attention, il y a 3 formulaires, donc vous devez valider trois boutons</h2>");
define('_AM_NEWS_EXPORT_BETWEEN',"Exporter les articles publiés entre le");
define('_AM_NEWS_EXPORT_AND'," et ");
define('_AM_NEWS_EXPORT_PRUNE_DSC',"Si vous ne sélectionnez rien, alors tous les sujets seront utilisés<br/> sinon, seuls les sujets selectionnés seront utilisés");
define('_AM_NEWS_EXPORT_INCTOPICS',"Inclure la description des sujets ?");
define('_AM_NEWS_EXPORT_ERROR',"Erreur pendant la création du fichier %s. Opération annulée.");
define('_AM_NEWS_EXPORT_READY',"L'export du fichier au format xml est disponible pour téléchargement. <br /><a rel='external' href='%s'>Cliquez sur ce lien pour le télécharger</a>.<br />N'oubliez pas <a href='%s'>de le supprimer </a> une fois que vous avez terminé.");
define('_AM_NEWS_RSS_URL',"URL du flux RSS");
define('_AM_NEWS_NEWSLETTER',"Bulletin d'information");
define('_AM_NEWS_NEWSLETTER_BETWEEN',"Sélectionner les articles publiés entre le");
define('_AM_NEWS_NEWSLETTER_READY',"Votre Bulletin d'information est disponible au téléchargement. <br /><a rel='external' href='%s'>Cliquez sur ce lien pour le télécharger</a>.<br />N'oubliez pas de <a href='%s'>le supprimer</a> une fois que vous avez terminé.");
define('_AM_NEWS_DELETED_OK',"Fichier supprimé avec succès");
define('_AM_NEWS_DELETED_PB',"Un problème a été rencontré pendant la suppression du fichier");
define('_AM_NEWS_STATS0',"Statistiques des sujets");
define('_AM_NEWS_STATS',"Statistiques");
define('_AM_NEWS_STATS1',"Auteurs");
define('_AM_NEWS_STATS2',"Total");
define('_AM_NEWS_STATS3',"Statistiques des articles");
define('_AM_NEWS_STATS4',"Articles les plus lus");
define('_AM_NEWS_STATS5',"Articles les moins lus");
define('_AM_NEWS_STATS6',"Articles les mieux cotés");
define('_AM_NEWS_STATS7',"Auteurs les plus lus");
define('_AM_NEWS_STATS8',"Auteurs les mieux cotés");
define('_AM_NEWS_STATS9',"Meilleurs contributeurs");
define('_AM_NEWS_STATS10',"Statistiques par Auteurs");
define('_AM_NEWS_STATS11',"Nombre d'articles");
define('_AM_NEWS_HELP',"Aide");
define("_AM_NEWS_MODULEADMIN"," - Administration");
define("_AM_NEWS_GENERALSET","Options du module" );
define('_AM_NEWS_GOTOMOD','Aller au module');
define('_AM_NEWS_NOTHING',"Désolé mais il n'y a rien à télécharger, vérifiez vos critères");
define('_AM_NEWS_NOTHING_PRUNE',"Désolé, mais il n'y a rien à purger, vérifiez vos critères");
define('_AM_NEWS_TOPIC_COLOR',"Couleur du sujet");
define('_AM_NEWS_COLOR',"Couleur");
define('_AM_NEWS_REMOVE_BR',"Convertir les balises html &lt;br /&gt; en un retour à la ligne ?");
// Added in 1.3 RC2
define('_AM_NEWS_PLEASE_UPGRADE',"<a href='upgrade.php'><font color='#FF0000'>Veuillez mettre à jour le module s'il vous plait</font></a>");

// Added in version 1.50
define('_AM_NEWS_NEWSLETTER_HEADER',"Entête");
define('_AM_NEWS_NEWSLETTER_FOOTER',"Pied de page");
define('_AM_NEWS_NEWSLETTER_HTML_TAGS',"Supprimer les balises html ?");
define('_AM_NEWS_VERIFY_TABLES',"Maintenir les tables");
define('_AM_NEWS_METAGEN',"Metagen");
define('_AM_NEWS_METAGEN_DESC',"Le Metagen est un système qui peut vous aider à avoir des pages mieux indexées par les moteurs de recherche.<br />Sauf si vous entrez vous-même les meta keywords et meta desriptions, le module les génèrera automatiquement pour chaque article.");
define('_AM_NEWS_BLACKLIST',"Liste noire");
define('_AM_NEWS_BLACKLIST_DESC',"Les mots contenus dans cette liste<br />ne seront pas utilisés lors de la création des meta keywords");
define('_AM_NEWS_BLACKLIST_ADD',"Ajouter");
define('_AM_NEWS_BLACKLIST_ADD_DSC',"Entrez des mots à ajouter dans la liste<br />(un mot par ligne)");
define('_AM_NEWS_META_KEYWORDS_CNT',"Nombre maximal de meta mots clés à générer");
define('_AM_NEWS_META_KEYWORDS_ORDER',"Ordre des mots clés");
define('_AM_NEWS_META_KEYWORDS_INTEXT',"Ordre d'apparition dans le texte");
define('_AM_NEWS_META_KEYWORDS_FREQ1',"Ordre de fréquence des mots");
define('_AM_NEWS_META_KEYWORDS_FREQ2',"Ordre inverse de la fréquence des mots");

// Added in version 1.67
// About.php
define('_AM_NEWS_ABOUT_RELEASEDATE',"Sorti : ");
define('_AM_NEWS_ABOUT_UPDATEDATE',"Mise à jour : ");
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
define("_AM_NEWS_CONFIG_CHECK","Vérification de la configuration");
define("_AM_NEWS_CONFIG_PHP","Version minimum de PHP requise: %s (votre version actuelle est la %s)");
define("_AM_NEWS_CONFIG_XOOPS","Version minimum de XOOPS requise:  %s (votre version actuelle est la %s)"); 


define("_AM_NEWS_STATISTICS","Statistiques des articles");
define("_AM_NEWS_THEREARE_STORIES","Il y a <span class='red bold'>%s</span> Articles dans la base de données");
define("_AM_NEWS_THEREARE_STORIES_ONLINE","Il y a <span class='red bold'>%s</span> Articles publiés à l'accueil");
define("_AM_NEWS_THEREARE_STORIES_FILES","Il y a  <span class='red bold'>%s</span> Fichiers d'articles dans la base de données");
define("_AM_NEWS_THEREARE_STORIES_FILES_ONLINE","Il y a <span class='red bold'>%s</span> Fichiers d'articles en ligne");
define("_AM_NEWS_THEREARE_TOPICS","Il y a <span class='red bold'>%s</span> Catégories dans la base de données");
define("_AM_NEWS_THEREARE_TOPICS_ONLINE","Il y a <span class='red bold'>%s</span> Catégories visibles dans le Menu");
define("_AM_NEWS_THEREARE_STORIES_VOTEDATA","Il y a <span class='red bold'>%s</span> Articles visionnés");
define("_AM_NEWS_THEREARE_STORIES_IMPORTED","Il y a <span class='red bold'>%s</span> Articles importés");
define("_AM_NEWS_THEREARE_STORIES_EXPORTED","Il y a <span class='red bold'>%s</span> Articles exportés");
define("_AM_NEWS_THEREARE_STORIES_EXPIRED","Il y a <span class='red bold'>%s</span> Articles expirés");
define("_AM_NEWS_THEREARE_STORIES_EXPIRED_SOON","Il y a <span class='red bold'>%s</span> Articles qui vont expirer bientôt");
define("_AM_NEWS_THEREARE_STORIES_APPROVED","Il y a <span class='red bold'>%s</span> Articles approuvées");
define("_AM_NEWS_THEREARE_STORIES_NEED_APPROVAL","Il y a <span class='red bold'>%s</span> Articles qui sont en attente d'approbation");
/**
 * @translation     Communauté Francophone des Utilisateurs de Xoops
 * @specification   _LANGCODE: fr
 * @specification   _CHARSET: UTF-8 sans Bom
 * Mis à jour par Cesag le 17 juin 2012
 * @version         $Id $
**/