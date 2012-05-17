<?php
// $Id$
// Module Info

// The name of this module
define('_MI_NEWS_NAME','Articles');

// A brief description of this module
define('_MI_NEWS_DESC',"Crée une section d'articles, où les utilisateurs peuvent poster des articles/commentaires.");

// Names of blocks for this module (Not all module has blocks)
define('_MI_NEWS_BNAME1',"Sujets d'articles");
define('_MI_NEWS_BNAME3','Article du jour');
define('_MI_NEWS_BNAME4','Top articles');
define('_MI_NEWS_BNAME5','Articles récents');
define('_MI_NEWS_BNAME6','Modération des articles');
define('_MI_NEWS_BNAME7','Navigation dans les sujets');

// Sub menus in main menu block
define('_MI_NEWS_SMNAME1','Proposer un article');
define('_MI_NEWS_SMNAME2','Archives');

// Names of admin menu items
define('_MI_NEWS_ADMENU2', 'Sujets');
define('_MI_NEWS_ADMENU3', 'Articles');
define('_MI_NEWS_GROUPPERMS', 'Permissions');
// Added by Hervé for prune option
define('_MI_NEWS_PRUNENEWS', 'Purge');
// Added by Hervé
define('_MI_NEWS_EXPORT', 'Export');

// Title of config items
define('_MI_STORYHOME', "Combien d'article(s) sur la page principale ?");
define('_MI_NOTIFYSUBMIT', "Notifier par mail d'une nouvelle proposition ?");
define('_MI_DISPLAYNAV', "Afficher la boîte de navigation en haut de chaque page ?");

define('_MI_AUTOAPPROVE',"Approuver automatiquement les nouveaux articles sans l'intervention d'un administrateur ?");
define("_MI_ALLOWEDSUBMITGROUPS", "Groupes pouvant soumettre des articles");
define("_MI_ALLOWEDAPPROVEGROUPS", "Groupes pouvant approuver des articles");
define("_MI_NEWSDISPLAY", "Mise en page des articles");
define("_MI_NAMEDISPLAY","Nom d'auteur à utiliser");
define("_MI_COLUMNMODE","Colonnes");
define("_MI_STORYCOUNTADMIN","Nombre d'articles à afficher dans l'administration : ");
define("_MI_UPLOADFILESIZE", "Taille maximale des fichiers joints en Ko (1048576 = 1 Méga)");
define("_MI_UPLOADGROUPS","Groupes autorisés à joindre des fichiers aux articles");

// Description of each config items
define('_MI_STORYHOMEDSC', '');
define('_MI_NOTIFYSUBMITDSC', '');
define('_MI_DISPLAYNAVDSC', '');
define('_MI_AUTOAPPROVEDSC', '');
define("_MI_ALLOWEDSUBMITGROUPSDESC", "Les groupes sélectionnés seront autorisés à soumettre des articles");
define("_MI_ALLOWEDAPPROVEGROUPSDESC", "Les groupes sélectionnés seront autorisés à approuver les nouveaux articles");
define("_MI_NEWSDISPLAYDESC", "Le mode classique affiche tous les nouveaux articles triés par date de publication. Le mode Articles par sujets groupera les articles par sujet avec le dernier article développé et les autres avec juste le titre");
define('_MI_ADISPLAYNAMEDSC', "Permet de choisir sous quelle forme le nom de l'auteur doit être affiché");
define("_MI_COLUMNMODE_DESC","Choisissez le nombre de colonnes à utiliser pour afficher les articles (cette option n'est utilisable qu'avec le mode d'affichage 'classique')");
define("_MI_STORYCOUNTADMIN_DESC","");
define("_MI_UPLOADFILESIZE_DESC","");
define("_MI_UPLOADGROUPS_DESC","Choisissez les groupes qui peuvent télécharger vers le serveur");


// Name of config item values
define("_MI_NEWSCLASSIC", "Classique");
define("_MI_NEWSBYTOPIC", "Articles par sujets");
define("_MI_DISPLAYNAME1", 'Pseudo');
define("_MI_DISPLAYNAME2", 'Nom complet');
define("_MI_DISPLAYNAME3", 'Aucun');
define("_MI_UPLOAD_GROUP1","Editeurs et Approbateurs");
define("_MI_UPLOAD_GROUP2","Approbateurs uniquement");
define("_MI_UPLOAD_GROUP3","Téléchargement désactivé");


// Text for notifications

define('_MI_NEWS_GLOBAL_NOTIFY', 'Globale');
define('_MI_NEWS_GLOBAL_NOTIFYDSC', 'Options de notification globale des articles.');

define('_MI_NEWS_STORY_NOTIFY', 'Articles');
define('_MI_NEWS_STORY_NOTIFYDSC', 'Options de notification s\'appliquant à l\'article actuel.');

define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFY', 'Nouveau sujet');
define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYCAP', 'Notifiez-moi quand un nouveau sujet est créé.');
define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYDSC', 'Recevoir une notification quand un nouveau sujet est créé.');
define('_MI_NEWS_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} notification automatique : Nouvel article');

define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFY', 'Nouvel article proposé');
define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYCAP', 'Notifiez-moi lorsqu\'un nouvel article est proposé (attente d\'être approuvé).');
define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYDSC', 'Recevoir une notification lorsqu\'un nouvel article est proposé (attente d\'être approuvé).');
define('_MI_NEWS_GLOBAL_STORYSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} notification automatique : Nouvel article proposé');

define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFY', 'Nouvel article');
define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYCAP', 'Notifiez-moi quand un nouvel article est posté.');
define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYDSC', 'Recevoir une notification quand un nouvel article est posté.');
define('_MI_NEWS_GLOBAL_NEWSTORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} notification automatique : Nouvel article');

define('_MI_NEWS_STORY_APPROVE_NOTIFY', 'Article approuvé');
define('_MI_NEWS_STORY_APPROVE_NOTIFYCAP', 'Notifiez-moi quand cet article est approuvé.');
define('_MI_NEWS_STORY_APPROVE_NOTIFYDSC', 'Recevoir une notification quand cet article est approuvé.');
define('_MI_NEWS_STORY_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} notification automatique : Article approuvé');

define('_MI_RESTRICTINDEX', "Restreindre les sujets sur la page d'index ?");
define('_MI_RESTRICTINDEXDSC', "Si l'option est à Oui, les utilisateurs ne verront que les articles pour lesquels ils ont les permissions de lecture");

define('_MI_NEWSBYTHISAUTHOR', 'Articles du même auteur');
define('_MI_NEWSBYTHISAUTHORDSC', "Si vous mettez cette option à OUI, alors un lien 'Articles du même auteur' sera affiché");

define('_MI_NEWS_PREVNEX_LINK','Afficher les liens vers les articles précédents et suivants ?');
define("_MI_NEWS_PREVNEX_LINK_DESC","Si cette option est activée, deux nouveaux liens seront visibles en bas de chaque article. Ces liens seront utiles pour lire l'article précédent et suivant en fonction de la date de publication");
define('_MI_NEWS_SUMMARY_SHOW','Afficher la table de sommaire ?');
define('_MI_NEWS_SUMMARY_SHOW_DESC','Quand vous utilisez cette option, une table sommaire contenant les liens vers tous les articles récents publiés sur le même thème sera visible en bas de chaque article');
define('_MI_NEWS_AUTHOR_EDIT',"Permettre aux auteurs d'éditer leurs articles ?");
define('_MI_NEWS_AUTHOR_EDIT_DESC','Avec cette option, les auteurs pourront eux-même éditer leurs contributions.');
define('_MI_NEWS_RATE_NEWS','Permettre aux utilisateurs de noter les articles ?');
define('_MI_NEWS_TOPICS_RSS','Activer le flux RSS par sujet?');
define('_MI_NEWS_TOPICS_RSS_DESC',"Si vous positionnez cette option sur 'Oui', alors les articles pour ce sujet seront disponibles sous la forme d'un flux RSS");
define('_MI_NEWS_DATEFORMAT', "Format de Date");
define('_MI_NEWS_DATEFORMAT_DESC',"S'il vous plaît se référer à la documentation de PHP (http://fr.php.net/manual/en/function.date.php) pour plus d'informations sur la façon de sélectionner le format. Notez que si vous ne tapez rien le format de date par défaut sera utilisé");
define('_MI_NEWS_META_DATA', "Permettre la saisie des données meta (keywords et description) ?");
define('_MI_NEWS_META_DATA_DESC', "Si vous positionnez cette option sur 'Oui', alors les approbateurs pourront entrer les données meta suivantes : keywords et description");
define('_MI_NEWS_BNAME8','Articles Aléatoires');
define('_MI_NEWS_NEWSLETTER','Bulletin d'information');
define('_MI_NEWS_STATS','Statistiques');
define("_MI_NEWS_FORM_OPTIONS","Option de formulaire");
define("_MI_NEWS_FORM_COMPACT","Compact");
define("_MI_NEWS_FORM_DHTML","DHTML");
define("_MI_NEWS_FORM_SPAW","Éditeur Spaw");
define("_MI_NEWS_FORM_HTMLAREA","Éditeur HtmlArea");
define("_MI_NEWS_FORM_FCK","Éditeur FCK");
define("_MI_NEWS_FORM_KOIVI","Éditeur Koivi");
define("_MI_NEWS_FORM_OPTIONS_DESC","Sélectionnez l'éditeur à utiliser. Si vous avez une installation 'simple' (i.e vous utilisez seulement l'éditeur xoops fourni en standard), alors vous ne pouvez que sélectionner DHTML et Compact");
define("_MI_NEWS_KEYWORDS_HIGH","Activer le surlignage des mots clefs de recherche ?");
define("_MI_NEWS_KEYWORDS_HIGH_DESC","Si vous utilisez cette option, alors les mots clefs saisis dans le champ de Recherche seront surlignés dans les articles");
define("_MI_NEWS_HIGH_COLOR","Couleur utilisée pour le surlignage des mots de recherche ?");
define("_MI_NEWS_HIGH_COLOR_DES","Utilisez cette option seulement si vous avez choisi Oui à l'option précédente");
define("_MI_NEWS_INFOTIPS","Nombre de caractères pris en compte dans les infobulles");
define("_MI_NEWS_INFOTIPS_DES","Si vous utilisez cette option, les liens relatifs à des articles contiendront une infobulle reprennant les premiers (n) caractères de chaque article. Si vous paramétrez cette valeur à 0, alors l'infobulle sera vide");
define("_MI_NEWS_SITE_NAVBAR","Utiliser la barre de navigation Mozilla et Opera ?");
define("_MI_NEWS_SITE_NAVBAR_DESC","Si vous positionnez cette option à Oui, alors les visiteurs de votre site pourront utiliser la barre de navigation de site pour se déplacer entre vos articles.");
define("_MI_NEWS_TABS_SKIN","Sélectionnez l'apparence à utiliser dans les onglets");
define("_MI_NEWS_TABS_SKIN_DESC","Cet habillage sera utilisé dans tous les blocs qui utilisent des onglets");
define("_MI_NEWS_SKIN_1","Style barre");
define("_MI_NEWS_SKIN_2","Incliné");
define("_MI_NEWS_SKIN_3","Classique");
define("_MI_NEWS_SKIN_4","Dossiers");
define("_MI_NEWS_SKIN_5","MacOs");
define("_MI_NEWS_SKIN_6","Plat");
define("_MI_NEWS_SKIN_7","Arrondi");
define("_MI_NEWS_SKIN_8","Style ZDnet");

// Added in version 1.50
define('_MI_NEWS_BNAME9','Archives');
define("_MI_NEWS_FORM_TINYEDITOR","Éditeur TinyEditor");
define("_MI_NEWS_FOOTNOTES","Voir les liens sur les versions imprimables ?");
define("_MI_NEWS_DUBLINCORE","Activer les métadonnées Dublin Core ?");
define("_MI_NEWS_DUBLINCORE_DSC","Pour plus d'informations, <a href='http://fr.wikipedia.org/wiki/Dublin_Core' rel='external'>consultez ce lien</a>");
define("_MI_NEWS_BOOKMARK_ME","Afficher un bloc 'Ajouter cette page sur ces sites' ?");
define("_MI_NEWS_BOOKMARK_ME_DSC","Ce bloc sera visible sur la page des articles");
define("_MI_NEWS_FF_MICROFORMAT","Activer les 'microrésumés' de Firefox 2 ?");
define("_MI_NEWS_FF_MICROFORMAT_DSC","Pour plus d'informations, voir <a href='https://developer.mozilla.org/fr/Création_d'un_générateur_de_microrésumé' rel='external'>cette page</a>");
define("_MI_NEWS_WHOS_WHO","Annuaire des auteurs");
define("_MI_NEWS_METAGEN","Metagen");
define("_MI_NEWS_TOPICS_DIRECTORY","Répertoire des sujets");
define("_MI_NEWS_ADVERTISEMENT","Publicité");
define("_MI_NEWS_ADV_DESCR","Entrez un texte ou du code javascript à afficher dans vos articles");
define("_MI_NEWS_MIME_TYPES","Entrez les types mime autorisés pour le téléchargement des pièces jointes dans les articles (séparez les par un retour à la ligne)");
define("_MI_NEWS_ENHANCED_PAGENAV","Utiliser le séparateur de pages amélioré ?");
define("_MI_NEWS_ENHANCED_PAGENAV_DSC","Avec cette option vous pouvez séparer vos pages avec quelque chose comme cela [pagrebreak:Titre page], les liens vers les pages sont remplacés par une liste déroulante et vous pouvez utiliser [summary] pour créer un sommaire automatique des pages");

// Added in version 1.54
define('_MI_NEWS_CATEGORY_NOTIFY','Catégorie');
define('_MI_NEWS_CATEGORY_NOTIFYDSC',"Options de notification pour la catégorie en cours");

define('_MI_NEWS_CATEGORY_STORYPOSTED_NOTIFY', "Nouvel article publié");
define('_MI_NEWS_CATEGORY_STORYPOSTED_NOTIFYCAP', "Notifiez-moi lorsqu'un nouvel article est publié dans cette catégorie.");
define('_MI_NEWS_CATEGORY_STORYPOSTED_NOTIFYDSC', "Recevoir une notification lorsqu'un article est publié dans cette catégorie.");
define('_MI_NEWS_CATEGORY_STORYPOSTED_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} notification automatique : Nouvel article');

// Added in version 1.63
define('_MI_NEWS_TAGS', "Utiliser le système de tags ?");
define('_MI_NEWS_TAGS_DSC', "Ceci est basé sur le module Xoops 'Tag' de phppp");
define("_MI_NEWS_BNAME10", "Nuage de Tags");
define("_MI_NEWS_BNAME11", "Top Tags");
define("_MI_NEWS_INTRO_TEXT", "Texte d'introduction à afficher sur la page de soumission d'un article");
define("_MI_NEWS_IMAGE_MAX_WIDTH", "Largeur maximale de l'image lorsqu'elle est redimensionnée");
define("_MI_NEWS_IMAGE_MAX_HEIGHT", "Hauteur maximale de l'image lorsqu'elle est redimensionnée");

//Added in 1.67
define("_MI_NEWS_HELP","Aide");
define("_MI_NEWS_ABOUT","A propos");
define("_MI_NEWS_HOME","Accueil");
define("_MI_NEWS_UPGRADE","Mise à jour");
define("_MI_NEWS_DESCRIPTION","Avec ce module Xoops, vous pouvez créer un nombre illimité d'articles sur votre site. <br /> <br />
Vous pouvez créer tous les articles que vous voulez et les organiser dans les sujets. <br /> <br />Avec une gestion des autorisations très puissant, vous pouvez créer des groupes autorisés à soumettre des articles et un groupe autorisé à les approuver et de décider qui peut voir quoi. ");

define("_MI_NEWS_SHARE_ME","Afficher les icônes partagées ?");
define("_MI_NEWS_SHARE_ME_DSC","Partager les icônes sur Facebook, Twitter, Google Buzz");
define("_MI_NEWS_SHOWICONS","Afficher les icônes des articles ?");
define("_MI_NEWS_SHOWICONS_DSC","Afficher les icônes d'impression, du PDF et du courrier électronique en bas de chaque article");
//1.67
define("_MI_NEWS_FACEBOOKCOMMENTS","Utiliser les commentaires Facebook ?");
define("_MI_NEWS_FACEBOOKCOMMENTS_DSC","Laisser vos utilisateurs utiliser Facebook pour ajouter des commentaires à vos articles");
/**
 * @translation     Communauté Francophone des Utilisateurs de Xoops
 * @specification   _LANGCODE: fr
 * @specification   _CHARSET: UTF-8 sans Bom
 * Mis à jour par Cesag le 16 Mai 2012
 * @version         $Id $
**/

?>