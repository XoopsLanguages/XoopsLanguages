<?php
// $Id: modinfo.php,v 2.3 2012/02/08 16:20:00 dhcst Exp $
// Thanks Tom (http://www.wf-projects.com), for correcting the Engligh language package

if (defined('NEWBB_MODINFO_DEFINED')) return;
define('NEWBB_MODINO_DEFINED',true);

// Module Info

// The name of this module
define("_MI_NEWBB_NAME", "Forum");

// A brief description of this module
define("_MI_NEWBB_DESC", "Module de Forums pour Xoops");

// Names of blocks for this module (Not all module has blocks)
define("_MI_NEWBB_BLOCK_TOPIC_POST", "Réponses récentes");
define("_MI_NEWBB_BLOCK_TOPIC", "Sujets récents");
define("_MI_NEWBB_BLOCK_POST", "Messages récent");
define("_MI_NEWBB_BLOCK_AUTHOR", "Auteur");
define("_MI_NEWBB_BLOCK_TAG_CLOUD", "Nuage de tags");
define("_MI_NEWBB_BLOCK_TAG_TOP", "Top des étiquettes");

// Names of admin menu items
define("_MI_NEWBB_ADMENU_INDEX", "Index");
define("_MI_NEWBB_ADMENU_CATEGORY", "Catégories");
define("_MI_NEWBB_ADMENU_FORUM", "Forums");
define("_MI_NEWBB_ADMENU_PERMISSION", "Permissions");
define("_MI_NEWBB_ADMENU_BLOCK", "Blocs");
define("_MI_NEWBB_ADMENU_ORDER", "Classer");
define("_MI_NEWBB_ADMENU_SYNC", "Synchroniser les forums");
define("_MI_NEWBB_ADMENU_PRUNE", "Trier");
define("_MI_NEWBB_ADMENU_REPORT", "Rapports");
define("_MI_NEWBB_ADMENU_DIGEST", "Synthèse");
define("_MI_NEWBB_ADMENU_VOTE", "Votes");
define("_MI_NEWBB_ADMENU_TYPE", "Types de sujet");
define("_MI_NEWBB_ADMENU_ABOUT", "À propos");

//config options
define("_MI_DO_DEBUG", "Mode débug");
define("_MI_DO_DEBUG_DESC", "Afficher les messages d'erreur");
define("_MI_DO_REWRITE","Réécriture d'URL activée");
define("_MI_DO_REWRITE_DESC","Pour activer la réécriture d'URL, vous devez activer le mod_rewrite et le .htaccess. Consultez le readme.htacces.");
define("_MI_IMG_SET", "Lot d'images");
define("_MI_IMG_SET_DESC", "Sélectionner le lot d'images à utiliser");
define("_MI_THEMESET", "Ensemble de thèmes");
define("_MI_THEMESET_DESC", "Module-wide, select '"._NONE."' will use site-wide theme");
define("_MI_DIR_ATTACHMENT", "Chemin d'accès physique des pièces jointes.");
define("_MI_DIR_ATTACHMENT_DESC", "Le chemin d'accès physique doit être définie dès votre racine de xoops et non avant, par exemple vous pouvez avoir des pièces jointes téléchargées dans 'www.votresite.com/uploads/newbb' le chemin à entrer sera alors '/uploads/newbb' Ne jamais mettre la barre oblique de fin « / » Le chemin des vignettes sera '/uploads/newbb/thumbs'");
define("_MI_PATH_MAGICK", "Chemin d'accès pour ImageMagick");
define("_MI_PATH_MAGICK_DESC", "Habituellement, c'est '/usr/bin/X11'. Laisser vide si vous n'avez pas installé ImageMagicK ou pour utiliser la détection.");
define("_MI_SUBFORUM_DISPLAY", "Mode d'affichage des sous-forums sur la page d'index");
define("_MI_SUBFORUM_DISPLAY_DESC", "");
define("_MI_SUBFORUM_EXPAND", "Développer");
define("_MI_SUBFORUM_COLLAPSE", "Réduire");
define("_MI_SUBFORUM_HIDDEN", "Cacher");
define("_MI_POST_EXCERPT", "Extrait des messages du forum");
define("_MI_POST_EXCERPT_DESC", "Longueur de l'extrait des message par survol de la souris sur. 0 pour ne pas mettre d'extrait.");
define("_MI_PATH_NETPBM", "Chemin d'accès pour Netpbm");
define("_MI_PATH_NETPBM_DESC", "Habituellement, c'est '/usr/bin'.  Laisser vide si vous n'avez pas installé Netpbm ou pour utiliser la détection.");
define("_MI_IMAGELIB", "Sélectionnez la bibliothèque d'images à utiliser");
define("_MI_IMAGELIB_DESC", "Sélectionnez quelle bibliothèque d'images utiliser pour créer des vignettes. Laissez AUTO pour un choix automatique.");
define("_MI_MAX_IMG_WIDTH", "Largeur maximale de l'image");
define("_MI_MAX_IMG_WIDTH_DESC", "Définit la limite maximale autorisée pour la <strong>Largeur</strong> d'une image téléchargée. Autrement, une vignette sera utilisée.<br >Mettre 0 si vous ne souhaitez pas créer de vignettes.");
define("_MI_MAX_IMG_HEIGHT","Hauteur maximale d'une image");
define("_MI_MAX_IMG_HEIGHT_DESC", "Définit la limite maximale autorisée de la hauteur d'une image téléchargée.");
define("_MI_MAX_IMAGE_WIDTH", "Largeur maximale de l'image pour la création d'une miniature");
define("_MI_MAX_IMAGE_WIDTH_DESC", "Définit la largeur maximale d'une image téléchargée pour créer une vignette. <br>Une image dont la largeur sera plus grande que la valeur entrée, n'utilisera pas de vignette.");
define("_MI_MAX_IMAGE_HEIGHT", "Hauteur maximale de l'image pour la création d'une miniature");
define("_MI_MAX_IMAGE_HEIGHT_DESC", "Définit la hauteur maximale d'une image téléchargée pour créer une vignette. <br>Une image avec une hauteur plus grande que la valeur entrée, n'utilisera pas de vignette.");
define("_MI_SHOW_DIS", "Montrer le règlement");
define("_MI_DISCLAIMER", "Règlement");
define("_MI_DISCLAIMER_DESC", "Entrez votre clause de non-responsabilité qui sera affichée avec l'option sélectionnée ci-dessus.");
define("_MI_DISCLAIMER_TEXT", "Le forum contient de nombreux messages avec beaucoup d'informations utiles.<br /> <br />Afin de réduire le nombre de doublons, nous vous demandons d'utiliser la recherche du forum avant de poster vos questions ici.");
define("_MI_NONE", "Aucun");
define("_MI_POST", "Message");
define("_MI_REPLY", "Réponse");
define("_MI_OP_BOTH", "Les deux");
define("_MI_WOL_ENABLE", "Afficher le \"Qui est en ligne\"");
define("_MI_WOL_ENABLE_DESC", "Afficher le bloc \"Qui est en ligne\" sous la page d'accueil du forum et sur les pages du forum");
define("_MI_NULL", "Désactiver");
define("_MI_TEXT", "texte");
define("_MI_GRAPHIC", "graphique");
define("_MI_USERLEVEL", "Niveaux HP/MP/EXP");
define("_MI_USERLEVEL_DESC", "<strong>HP</strong>  est déterminé par votre moyenne de contributions par jour.<br /><strong>MP</strong>  est déterminé par votre nombre de contributions depuis votre date d'inscription.<br /><strong>EXP</strong> grimpe à chaque fois que vous contribuez, et chaque fois que vous atteignez 100%, vous gagnez un niveau et l'EXP redescend de nouveau à 0.");
define("_MI_RSS_ENABLE", "Activer le flux RSS");
define("_MI_RSS_ENABLE_DESC", "Activer le flux RSS et définissez le nombre d'item à afficher et la longueur de la description");
define("_MI_RSS_MAX_ITEMS", "Nombre d'items maximum du flx RSS");
define("_MI_RSS_MAX_DESCRIPTION", "Longueur maximale de la description dans le flux RSS");
define("_MI_RSS_UTF8", "Le flux RSS est encodé en UTF-8");
define("_MI_RSS_UTF8_DESCRIPTION", "'UTF-8' will be used if enabled otherwise '"._CHARSET."' will be used.");
define("_MI_RSS_CACHETIME", "Durée du cache du flux RSS");
define("_MI_RSS_CACHETIME_DESCRIPTION", "Temps de cache pour rafraichir le fil RSS, en minutes.");
define("_MI_MEDIA_ENABLE", "Activer les fonctionnalités des médias");
define("_MI_MEDIA_ENABLE_DESC", "Afficher les images attachées directement dans le message.");
define("_MI_USERBAR_ENABLE", "Activer la barre d'utilisateurs");
define("_MI_USERBAR_ENABLE_DESC", "Activer la barre d'utilisateurs étendue : Profil, PM, ICQ, MSN, etc...");
define("_MI_GROUPBAR_ENABLE", "Activer la barre des groupes");
define("_MI_GROUPBAR_ENABLE_DESC", "Afficher les groupes de l'utilisateur dans le champ d'information des messages.");
define("_MI_RATING_ENABLE", "Activer la fonction de notation");
define("_MI_RATING_ENABLE_DESC", "Autoriser le vote des rubriques");
define("_MI_VIEWMODE", "Mode d'affichage des discussions");
define("_MI_VIEWMODE_DESC", "Pour remplacer les paramètres généraux de mode d'affichage dans les discussions, entrez la valeur None afin de désactiver la fonctionnalité");
define("_MI_COMPACT", "Compact");
define("_MI_MENUMODE", "Mode de Menu par défaut");
define("_MI_MENUMODE_DESC", "« SELECT » - sélection des options, « HOVER » - peut ralentir IE, « CLICK » - nécessite JAVASCRIPT");
define("_MI_REPORTMOD_ENABLE", "Signaler un message");
define("_MI_REPORTMOD_ENABLE_DESC", "L'utilisateur peut signaler les messages au(x) Modérateur(s), ce qui leur permet de prendre des mesures");
define("_MI_SHOW_JUMPBOX", "Afficher la boîte d'accès direct");
define("_MI_JUMPBOXDESC", "Si activé, un menu déroulant permettra aux utilisateurs de passer à un autre forum, à partir d'un forum ou d'un sujet");
define("_MI_SHOW_PERMISSIONTABLE", "Afficher la table des permissions");
define("_MI_SHOW_PERMISSIONTABLE_DESC", "OUI affichera les droits de l'utilisateur");
define("_MI_EMAIL_DIGEST", "Synthèse des messages provenant des courriers électroniques");
define("_MI_EMAIL_DIGEST_DESC", "Définir le délai pour l'envoi des synthèses des messages aux utilisateurs");
define("_MI_NEWBB_EMAIL_NONE", "Pas d'email");
define("_MI_NEWBB_EMAIL_DAILY", "Journalier");
define("_MI_NEWBB_EMAIL_WEEKLY", "Hebdomadaire");
define("_MI_SHOW_IP", "Afficher les IP des utlisateurs");
define("_MI_SHOW_IP_DESC", "Le paramétrage OUI affichera les IP aux modérateurs");
define("_MI_ENABLE_KARMA", "Activer les exigences de cote");
define("_MI_ENABLE_KARMA_DESC", "Cela permet aux utilisateurs de définir une exigence de cote pour les autres utilisateurs qui lisent leurs messages");
define("_MI_KARMA_OPTIONS", "Option de cote pour les messages");
define("_MI_KARMA_OPTIONS_DESC", "Utiliser les ',' comme délimiteur pour plusieurs options.");
define("_MI_SINCE_OPTIONS", "Option « Since » pour « viewform » et « search »");
define("_MI_SINCE_OPTIONS_DESC", "Valeur positive pour les jours et une valeur négative pour les heures. Utiliser ',' comme délimiteur pour plusieurs options.");
define("_MI_SINCE_DEFAULT", "Valeur par défaut « Since »");
define("_MI_SINCE_DEFAULT_DESC", "Si la valeur par défaut n'est pas spécifiée par les utilisateurs, le 0 sera affiché au départ");
define("_MI_MODERATOR_HTML", "Autoriser le HTML pour les modérateurs");
define("_MI_MODERATOR_HTML_DESC", "ette option autorise uniquement les modérateurs à utiliser le HTML dans les messages");
define("_MI_USER_ANONYMOUS", "Autoriser les utilisateurs enregistrés à poster anonymement");
define("_MI_USER_ANONYMOUS_DESC", "Cela permettra à l'utilisateur connecté de poster anonymement");
define("_MI_ANONYMOUS_PRE", "Préfixe pour les utilisateurs anonymes");
define("_MI_ANONYMOUS_PRE_DESC", "Cela ajoutera un préfixe au nom de l'utilisateur anonyme durant sa soumission");
define("_MI_REQUIRE_REPLY", "Active l'obligation de répondre avant de lire un message");
define("_MI_REQUIRE_REPLY_DESC", "Cette fonction force les lecteurs à répondre au premier message avant de pouvoir lire la suite");
define("_MI_EDIT_TIMELIMIT", "Durée limite d'édition de messages");
define("_MI_EDIT_TIMELIMIT_DESC", "Définit une limite de temps pour permettre à l'utilisateur de modifier son propre poste. En minutes, 0 pour aucune limite");
define("_MI_DELETE_TIMELIMIT", "Durée limite de suppression de messages");
define("_MI_DELETE_TIMELIMIT_DESC", "Indiquer une durée limite permettant aux utilisateurs de de supprimer leurs propres messages. En minutes, 0 pour aucune limite de temps.");
define("_MI_POST_TIMELIMIT", "Délai pour écrire entre chaque message");
define("_MI_POST_TIMELIMIT_DESC", "Définir un délai pour écrire entre chaque message. En secondes, 0 pour aucune limite");
define("_MI_RECORDEDIT_TIMELIMIT", "Délai pour enregistrer les informations de modification");
define("_MI_RECORDEDIT_TIMELIMIT_DESC", "Définit un délai pour renoncer à enregistrer les informations de modification. En minutes, 0 pour aucune limite");
define("_MI_SHOW_REALNAME", "Afficher le nom réel");
define("_MI_SHOW_REALNAME_DESC", "Remplcer le nom d'utlisateur par le nom réel");
define("_MI_CACHE_ENABLE", "Activer le cache");
define("_MI_CACHE_ENABLE_DESC", "Stock des résultats intermédiaires dans la session pour enregistrer des requêtes");
define("_MI_QUICKREPLY_ENABLE", "Activer les réponses rapides");
define("_MI_QUICKREPLY_ENABLE_DESC", "Cela activera le formulaire de réponse rapide");
define("_MI_POSTSPERPAGE", "Nombre de messages par page");
define("_MI_POSTSPERPAGE_DESC", "Nombre maximal de messages qui seront affichés par page");
define("_MI_POSTSFORTHREAD", "Messages maximum pour le mode d'affichage des discussions");
define("_MI_POSTSFORTHREAD_DESC", "Le mode plat sera utilisé si le nombre de messages dépasse ce nombre");
define("_MI_TOPICSPERPAGE", "Sujets par page");
define("_MI_TOPICSPERPAGE_DESC", "Nombre maximum de sujets qui seront affichés par page");
define("_MI_IMG_TYPE", "Type d'image");
define("_MI_IMG_TYPE_DESC", "Sélectionnez le type d'images des boutons du forum.<br />- png : pour les serveurs à grande vitesse<br />- gif : à vitesse normale<br />- auto : gif pour IE et png pour les autres navigateurs");
define("_MI_PNGFORIE_ENABLE", "Activer le hack pour les PNG");
define("_MI_PNGFORIE_ENABLE_DESC", "Hack qui permet les attributs de transparence du png avec IE");
define("_MI_FORM_OPTIONS", "Options des éditeurs");
define("_MI_FORM_OPTIONS_DESC", "Options des éditeurs que les utilisateurs peuvent utiliser pour créer/modifier/répondre");
define("_MI_FORM_COMPACT", "Compact");
define("_MI_FORM_DHTML", "DHTML");
define("_MI_MAGICK", "ImageMagick");
define("_MI_NETPBM", "Netpbm");
define("_MI_GD1", "GD1 Library");
define("_MI_GD2", "GD2 Library");
define("_MI_AUTO", "AUTO");
define("_MI_WELCOMEFORUM", "Forum de bienvenue pour les nouveaux utilisateurs");
define("_MI_WELCOMEFORUM_DESC", "Un message de profil sera publié lorsque l'utilisateur visite le module de Forum pour la première fois");
define("_MI_PERMCHECK_ONDISPLAY", "Vérifier les autorisations");
define("_MI_PERMCHECK_ONDISPLAY_DESC", "Vérifie les autorisations pour modifier la page affichée");
define("_MI_USERMODERATE", "Activer la modération de l'utilisateur");
define("_MI_USERMODERATE_DESC", "");

// RMV-NOTIFY
// Notification event descriptions and mail templates

define ('_MI_NEWBB_THREAD_NOTIFY', 'Discussion');
define ('_MI_NEWBB_THREAD_NOTIFYDSC', 'Options de notification qui s\'appliquent à la discussion en cours.');
define ('_MI_NEWBB_FORUM_NOTIFY', 'Forum');
define ('_MI_NEWBB_FORUM_NOTIFYDSC', 'Options de notification qui s\'appliquent au forum en cours.');
define ('_MI_NEWBB_GLOBAL_NOTIFY', 'Global');
define ('_MI_NEWBB_GLOBAL_NOTIFYDSC', 'Options de notification du forum global.');
define ('_MI_NEWBB_THREAD_NEWPOST_NOTIFY', 'Nouveau message');
define ('_MI_NEWBB_THREAD_NEWPOST_NOTIFYCAP', 'Avertissez-moi des nouveaux messages dans la discussion actuelle.');
define ('_MI_NEWBB_THREAD_NEWPOST_NOTIFYDSC', 'Recevoir une notification lorsqu\'un nouveau message est affiché dans la discussion actuelle.');
define ('_MI_NEWBB_THREAD_NEWPOST_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} notification automatique : Nouveau message dans la discussion');
define ('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFY', 'Nouvelle discussion');
define ('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFYCAP', 'Avertissez-moi des nouveaux sujets dans le forum actuel.');
define ('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFYDSC', 'Recevoir une notification lorsqu\'une nouvelle discussion est démarrée dans le forum actuel.');
define ('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} notification automatique : Nouvelle discussion dans le forum');
define ('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFY', 'Nouveau Forum');
define ('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFYCAP', 'M\'avertir quand un nouveau forum est créé.');
define ('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFYDSC', 'Recevoir une notification lorsqu\'un nouveau forum est créé.');
define ('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} notification automatique : Nouveau forum');
define ('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFY', 'Nouveau message global');
define ('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFYCAP', 'Avertissez-moi des tout nouveaux messages.');
define ('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFYDSC', 'Recevoir une notification lorsqu\'un nouveau message est affiché.');
define ('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} notification automatique : Nouveau message');
define ('_MI_NEWBB_FORUM_NEWPOST_NOTIFY', 'Nouveau message du forum');
define ('_MI_NEWBB_FORUM_NEWPOST_NOTIFYCAP', 'Avertissez-moi des tout nouveaux postes dans le forum actuel.');
define ('_MI_NEWBB_FORUM_NEWPOST_NOTIFYDSC', 'Recevoir une notification lorsqu\'un nouveau message est posté dans le forum actuel.');
define ('_MI_NEWBB_FORUM_NEWPOST_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} notification automatique : Nouveau message dans le forum');
define ('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFY', 'Nouveau message (Texte intégral)');
define ('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFYCAP', 'Avertissez-moi des tout nouveaux messages (inclure le texte du message en entier).');
define ('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFYDSC', 'Recevoir une notification du texte intégral lorsqu\'un nouveau message est affiché.');
define ('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} notification automatique : Nouveau message (Texte intégral)');
define ('_MI_NEWBB_GLOBAL_DIGEST_NOTIFY', 'Synthèse');
define ('_MI_NEWBB_GLOBAL_DIGEST_NOTIFYCAP', 'Avertissez-moi des messages résumés.');
define ('_MI_NEWBB_GLOBAL_DIGEST_NOTIFYDSC', 'Recevoir une notification des résumés.');
define ('_MI_NEWBB_GLOBAL_DIGEST_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} notification automatique : message résumé');

// FOR installation
define("_MI_NEWBB_INSTALL_CAT_TITLE", "Catégorie de test");
define("_MI_NEWBB_INSTALL_CAT_DESC", "Catégorie pour tester.");
define("_MI_NEWBB_INSTALL_FORUM_NAME", "Forum de test");
define("_MI_NEWBB_INSTALL_FORUM_DESC", "Forum pour tester.");
define("_MI_NEWBB_INSTALL_POST_SUBJECT", "Félicitations ! Le forum fonctionne.");
define("_MI_NEWBB_INSTALL_POST_TEXT", "
	Bienvenue sur le forum du site ".(htmlspecialchars($GLOBALS["xoopsConfig"]['sitename'], ENT_QUOTES)).".
	N'hésitez pas à vous inscrire et vous connecter pour commencer vos sujets.
	
	Si vous avez des questions concernant l'utilisation de NewBB, veuillez visiter votre site de soutien local ou [url=http://www.simple-xoops.de/forum/]le site du module NewBB[/url].
	");
define("_MI_NEWBB_ADMENU_GROUPMOD", "Groupe modérateur");
define("_MI_SUBJECT_PREFIX", "Ajouter un préfixe au sujet de la rubrique");
define("_MI_SUBJECT_PREFIX_DESC", "Définit un préfixe, comme [résolu] au début du sujet. Pour plus d'options, veuillez utiliser une « , » comme séparateur. AUCUN : pas de préfixe.");
define("_MI_SUBJECT_PREFIX_DEFAULT", '<font color="#00CC00"> [résolu] </ font> <font color="#00CC00"> [fait] </ font> <font color="#FF0000"> [demande] </ font> , <font color="#FF0000"> [rapport de bogue] </ font> <font color="#FF0000"> [non résolu] </ font>');
define("_MI_SUBJECT_PREFIX_LEVEL", "Autoriser l'utilisation des préfixes");
define("_MI_SUBJECT_PREFIX_LEVEL_DESC", "Choisir les groupes autorisés à utiliser les préfixes.");
define("_MI_SPL_DISABLE", 'désactivé');
define("_MI_SPL_ANYONE", 'chaque');
define("_MI_SPL_MEMBER", 'Membres');
define("_MI_SPL_MODERATOR", 'modérateurs');
define("_MI_SPL_ADMIN", 'administrateurs');
define("_MI_STATISTIK_ENABLE","activer les statistiques");
define("_MI_STATISTIK_ENABLE_DESC","");

//4.05
define('_MI_SHOW_INFOBOX', 'Montrer la boîte d\'informations');
define('_MI_SHOW_INFOBOX_DESC', 'La boîte d\'informations contient des informations sur l\'utilisateur (date d\'inscription, nombre de messages,...)');
define('_MI_NEWBB_INFOBOX_NONE', 'Non');
define('_MI_NEWBB_INFOBOX_HIDDEN', 'Oui, caché');
define('_MI_NEWBB_INFOBOX_SHOW', 'Oui, étendu');
define('_MI_SHOW_SOCIALLINKS', "Afficher les liens sociaux");
define('_MI_SHOW_SOCIALLINKS_DESC', "Afficher les liens sociaux à la fin de chaque message");

//4.2
define("_MI_PAGENAV_DISPLAY","affichage de la navigation");
define("_MI_PAGENAV_DISPLAY_DESC","Indique le numéro de page dans le mode matériel correspondant");
define("_MI_PAGENAV_ZAHL","en tant que nombres");
define("_MI_PAGENAV_BILD","en tant que petites images");
define("_MI_PAGENAV_SELECT","en tant que boîte de sélection");
define("_MI_ADVERTISING","Afficher la publicité");
define("_MI_ADVERTISING_DESC","Affiche une pause commerciale après la seconde discussion");
define("_MI_USERATTACH_ENABLE","Affiche les pièces jointes uniquement pour les utilisateurs enregistrés");
define("_MI_USERATTACH_DESC","Ne montre les pièces jointes du forum qu'après la connexion.");
?>