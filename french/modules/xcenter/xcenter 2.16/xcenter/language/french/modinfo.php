<?php

/*
Module: Xcenter

Version: 2.01

Description: Multilingual Content Module with tags and lists with search functions

Author: Written by Simon Roberts aka. Wishcraft (simon@chronolabs.coop)

Owner: Chronolabs

License: See /docs - GPL 2.0
*/


	// XOOPS VERSION
	
	// DO NOT CHANGE - HEADER INFORMATION
	define('_XTR_MODULENAME', 'Contenu du module');
	define('_XTR_VERSION', 2.16);
	define('_XTR_AUTHOR', 'Écrit par Simon Roberts alias Wishcraft');
	define('_XTR_OWNER', 'Chronolabs');
	define('_XTR_CONTACT', 'Toutes les demandes de renseignements concernant le module peuvent être envoyées à simon@chronolabs.coop');
	define('_XTR_DESCRIPTION', 'Module avancé de contenu multilingue');
	define('_XTR_LICENSE', 'GPL 2.0 - voir le fichier /docs/LICENCE');
	define('_XTR_OFFICIAL', true);
	define('_XTR_LOGOIMAGE', 'images/xcenter_slogo.png');
	define('_XTR_DIRNAME', 'xcenter');
	define('_XTR_SQLFILE_MYSQL', 'sql/mysql.sql');

	// MAINTENANCE ACtioNS
	define('_XTR_INSTALL', 'include/install.php');
	define('_XTR_UNINSTALL', 'include/uninstall.php');
	define('_XTR_UPDATE', 'include/update.php');		
	
	// MENUs
	define('_XTR_XCENTER_ADMENU1', 'Gestion du contenu');
	define('_XTR_XCENTER_ADMENU2', 'Ajouter du contenu');
	define('_XTR_XCENTER_ADMENU3', 'Gérer les catégories');
	define('_XTR_XCENTER_ADMENU4', 'Ajouter une catégorie');
	define('_XTR_XCENTER_ADMENU5', 'Gérer les blocs pouvant être hérités');
	define('_XTR_XCENTER_ADMENU6', 'Ajoutez le bloc pouvant être hérité');	
	define('_XTR_XCENTER_ADMENU7', 'Autorisations');

	// MENU ICONS?IMAGES
	define('_XTR_XCENTER_ADMENU1_ICON', 'images/manage.xcenter.png');
	define('_XTR_XCENTER_ADMENU2_ICON', 'images/add.xcenter.png');
	define('_XTR_XCENTER_ADMENU3_ICON', 'images/manage.categories.png');
	define('_XTR_XCENTER_ADMENU4_ICON', 'images/add.category.png');
	define('_XTR_XCENTER_ADMENU5_ICON', 'images/manage.inheritable.blocks.png');
	define('_XTR_XCENTER_ADMENU6_ICON', 'images/add.inheritable.block.png');	
	define('_XTR_XCENTER_ADMENU7_ICON', 'images/permissions.png');

	//MYSQL TABLES WITHOUT PREFIX // DO NOT CHANGE
	define('_XTR_TABLE_XCENTER', 'xcenter_xcenter');
	define('_XTR_TABLE_CATEGORY', 'xcenter_categories');
	define('_XTR_TABLE_TEXT', 'xcenter_text');
	define('_XTR_TABLE_BLOCK', 'xcenter_blocks');

	//SEARCH SETTINGS // DO NOT CHANGE
	define('_XTR_HASSEARCH', false);
	define('_XTR_SEARCH_FILE', 'include/search.inc.php');
	define('_XTR_SEARCH_FUNCTION', 'xcenter_search');
	
	//COMMENT SETTINGS // DO NOT CHANGE
	define('_XTR_HASCOMMENT', true);
	define('_XTR_COMMENT_ITEM', 'storyid');
	define('_XTR_COMMENT_PAGE', 'index.php');
	
	//MAIN PAGES SETTING // DO NOT CHANGE
	define('_XTR_HASMAIN', true);
	define('_XTR_USESMARTY', true);
	
	//TEMPLATE SETTINGS // DO NOT CHANGE
	define('_XTR_TEMPLATE_INDEX', 'xcenter_index.html');
	define('_XTR_TEMPLATE_INDEX_DESC', 'Index File for Xcenter');
	define('_XTR_TEMPLATE_BREADCRUMB', 'xcenter_breadcrumb.html');
	define('_XTR_TEMPLATE_BREADCRUMB_DESC', 'Fil d\'Ariane pour le fichier Index de Xcenter');
	define('_XTR_TEMPLATE_CPANEL_ADDEDITPAGE', 'xcenter_cpanel_addeditpage.html');
	define('_XTR_TEMPLATE_CPANEL_ADDEDITPAGE_DESC', 'Modifications XCenter Cpanel pour Xcenter');
	define('_XTR_TEMPLATE_CPANEL_ADDEDITCATEGORY', 'xcenter_cpanel_addeditcategory.html');
	define('_XTR_TEMPLATE_CPANEL_ADDEDITCATEGORY_DESC', 'Modifications XCenter Cpanel pour les catégories');
	define('_XTR_TEMPLATE_CPANEL_ADDEDITBLOCK', 'xcenter_cpanel_addeditblock.html');
	define('_XTR_TEMPLATE_CPANEL_ADDEDITBLOCK_DESC', 'Modifications XCenter Cpanel pour les blocs');	
	define('_XTR_TEMPLATE_INDEX_ADDEDITPAGE', 'xcenter_index_addeditpage.html');
	define('_XTR_TEMPLATE_INDEX_ADDEDITPAGE_DESC', 'Modifications XCenter Index pour Xcenter');
	define('_XTR_TEMPLATE_INDEX_ADDEDITCATEGORY', 'xcenter_index_addeditcategory.html');
	define('_XTR_TEMPLATE_INDEX_ADDEDITCATEGORY_DESC', 'Modifications XCenter Index pour les catégories');
	define('_XTR_TEMPLATE_INDEX_ADDEDITBLOCK', 'xcenter_index_addeditblock.html');
	define('_XTR_TEMPLATE_INDEX_ADDEDITBLOCK_DESC', 'Modifications XCenter Cpanel pour les blocs');
	define('_XTR_TEMPLATE_CPANEL_JSON_ADDEDITPAGE', 'xcenter_cpanel_json_addeditpage.html');
	define('_XTR_TEMPLATE_CPANEL_JSON_ADDEDITPAGE_DESC', 'Modifications XCenter Cpanel pour le json de Xcenter');
	define('_XTR_TEMPLATE_CPANEL_JSON_ADDEDITCATEGORY', 'xcenter_cpanel_json_addeditcategory.html');
	define('_XTR_TEMPLATE_CPANEL_JSON_ADDEDITCATEGORY_DESC', 'Modifications XCenter Cpanel pour le json des catégories');
	define('_XTR_TEMPLATE_CPANEL_JSON_ADDEDITBLOCK', 'xcenter_cpanel_json_addeditblock.html');
	define('_XTR_TEMPLATE_CPANEL_JSON_ADDEDITBLOCK_DESC', 'Modifications XCenter Cpanel pour le json des blocs');	
	define('_XTR_TEMPLATE_INDEX_JSON_ADDEDITPAGE', 'xcenter_index_json_addeditpage.html');
	define('_XTR_TEMPLATE_INDEX_JSON_ADDEDITPAGE_DESC', 'Modifications XCenter Index pour le json de Xcenter');
	define('_XTR_TEMPLATE_INDEX_JSON_ADDEDITCATEGORY', 'xcenter_index_json_addeditcategory.html');
	define('_XTR_TEMPLATE_INDEX_JSON_ADDEDITCATEGORY_DESC', 'Modifications XCenter Index pour le json des catégories');
	define('_XTR_TEMPLATE_INDEX_JSON_ADDEDITBLOCK', 'xcenter_index_json_addeditblock.html');
	define('_XTR_TEMPLATE_INDEX_JSON_ADDEDITBLOCK_DESC', 'Modifications XCenter Index pour le json des blocs');		
	define('_XTR_TEMPLATE_INDEX_MANAGE', 'xcenter_index_manage.html');
	define('_XTR_TEMPLATE_INDEX_MANAGE_DESC', 'Modèle du gestionnaire Xcenter - affichage de listes');	
	define('_XTR_TEMPLATE_INDEX_PASSWORD', 'xcenter_index_password.html');
	define('_XTR_TEMPLATE_INDEX_PASSWORD_DESC', 'Modèle pour l\'invite de mot de passe de Xcenter');	
	
	//CLASS NAMES // DO NOT CHANGE
	define('_XTR_CLASS_XCENTER', 'xcenter');
	define('_XTR_CLASS_CATEGORY', 'catégorie');
	define('_XTR_CLASS_TEXT', 'texte');
	define('_XTR_CLASS_BLOCK', 'bloc');
	define('_XTR_CLASS_XLANGUAGE_EXT', 'xlanguage_ext');
	
	//FUNCTIOnAL PAGE OpERATORs -- DO NOT CHANGE
	define('_XTR_URL_OP_SAVE', 'enregistrer');
	define('_XTR_URL_OP_EDIT', 'modifier');
	define('_XTR_URL_OP_ADD', 'ajouter');
	define('_XTR_URL_OP_DELETE', 'supprimer');
	define('_XTR_URL_OP_COPY', 'copier');
	define('_XTR_URL_OP_MANAGE', 'gérer');
	define('_XTR_URL_OP_PERMISSIONS', 'autorisations');
	define('_XTR_URL_FORM_XCENTER', 'xcenter');
	define('_XTR_URL_FORM_CATEGORY', 'catégorie');
	define('_XTR_URL_FORM_BLOCK', 'bloc');
	define('_XTR_URL_FCT_CATEGORIES', 'catégories');
	define('_XTR_URL_FCT_XCENTER', 'xcenter');
	define('_XTR_URL_FCT_CATEGORY', 'catégorie');
	define('_XTR_URL_FCT_BLOCK', 'bloc');
	define('_XTR_URL_FCT_BLOCKS', 'blocs');
	define('_XTR_URL_FCT_PAGES', 'pages');
	define('_XTR_URL_FCT_TEMPLATE', 'modèle');
	
	//ENUMERATORS // DO NOT CHANGE
	define('_XTR_ENUM_TYPE_BLOCK', 'bloc');
	define('_XTR_ENUM_TYPE_CATEGORY', 'catégorie');
	define('_XTR_ENUM_TYPE_XCENTER', 'xcenter');
	
	// PATHs // DO NOT CHANGE
	define('_XTR_PATH_PHP_GROUPPERMS', '/class/xoopsform/grouppermform.php');
	define('_XTR_PATH_PHP_TEMPLATE', '/class/template.php');
	define('_XTR_PATH_PHP_FORMLOADER', '/class/xoopsformloader.php');
	define('_XTR_PATH_PHP_FORM_TAG', '/modules/tag/include/formtag.php');
	define('_XTR_PATH_PHP_HEADER', '/header.php');
	define('_XTR_PATH_PHP_FOOTER', '/footer.php');
	define('_XTR_PATH_PHP_COMMENTVIEW', '/include/comment_view.php');
	define('_XTR_PATH_MODULE_ROOT', '/modules/'._XTR_DIRNAME.'/index.php');
	define('_XTR_PATH_PHP_FPDF', '/modules/'._XTR_DIRNAME.'/include/fpdf/fpdf.inc.php');
	define('_XTR_PATH_PHP_JSON', '/modules/'._XTR_DIRNAME.'/include/JSON.php');
	define('_XTR_PATH_PREDEFINED_HTML', '/modules/'._XTR_DIRNAME.'/templates/predefined/xcenter/');
	define('_XTR_PATH_PREDEFINED_RSS', '/modules/'._XTR_DIRNAME.'/templates/predefined/rss/');
	define('_XTR_PATH_CSS_INDEX', '/modules/'._XTR_DIRNAME.'/templates/css/xcenter.css');
	define('_XTR_PATH_CSS_PRINT', '/modules/'._XTR_DIRNAME.'/templates/css/print.css');	
	define('_XTR_PATH_JS_CORE', '/modules/'._XTR_DIRNAME.'/templates/js/core.js');
	define('_XTR_PATH_JS_JQUERY', '/browse.php?Frameworks/jquery/jquery.js');
	define('_XTR_PATH_PHP_FUNCTIONS', '/modules/'._XTR_DIRNAME.'/include/functions.php');
	define('_XTR_PATH_PHP_FORMOBJECTS', '/modules/'._XTR_DIRNAME.'/include/formobjects.xcenter.php');
	define('_XTR_PATH_PHP_FORMS', '/modules/'._XTR_DIRNAME.'/include/forms.xcenter.php');
	define('_XTR_PATH_PHP_FORM_LANGUAGES', '/modules/'._XTR_DIRNAME.'/include/formselectlanguages.php');
	define('_XTR_PATH_PHP_FORM_CATEGORIES', '/modules/'._XTR_DIRNAME.'/include/formselectcategories.php');
	define('_XTR_PATH_PHP_FORM_PAGES', '/modules/'._XTR_DIRNAME.'/include/formselectpages.php');
	define('_XTR_PATH_PHP_FORM_BLOCKS', '/modules/'._XTR_DIRNAME.'/include/formselectblocks.php');
	define('_XTR_PATH_PHP_FORM_HTMLTEMPLATES', '/modules/'._XTR_DIRNAME.'/include/formselecttemplates.php');
	
	// PERMiSSION OPTIONS // DO NOT CHANGE
	define('_XTR_PERM_VIEW_CATEGORY', 'Affichage des autorisations des catégories');
	define('_XTR_PERM_VIEW_XCENTER', 'Affichage des autorisations du contenu');
	define('_XTR_PERM_VIEW_BLOCK', 'Affichage des autorisations des blocs');
	define('_XTR_PERM_EDIT_CATEGORY', 'Modification des autorisations des catégories');
	define('_XTR_PERM_EDIT_XCENTER', 'Modification des autorisations du contenu');
	define('_XTR_PERM_EDIT_BLOCK', 'Modification des autorisations des blocs');
	define('_XTR_PERM_ADD_CATEGORY', 'Ajout des autorisations des catégories');
	define('_XTR_PERM_ADD_XCENTER', 'Ajout des autorisations du contenu');
	define('_XTR_PERM_ADD_BLOCK', 'Ajout des autorisations des blocs');
	define('_XTR_PERM_DEFAULT_TEMPLATE', 'Autorisations par défaut');

	// PERMISSION TYPES & MODES // DO NOT CHANGE
	define('_XTR_PERM_MODE_VIEW', 'voir');
	define('_XTR_PERM_MODE_EDIT', 'modifier');
	define('_XTR_PERM_MODE_ADD', 'ajouter');
	define('_XTR_PERM_MODE_COPY', 'copier');
	define('_XTR_PERM_MODE_DELETE', 'supprimer');
	define('_XTR_PERM_MODE_ALL', 'tout');
	define('_XTR_PERM_TYPE_CATEGORY', '_category');
	define('_XTR_PERM_TYPE_XCENTER', '_xcenter');
	define('_XTR_PERM_TYPE_BLOCK', '_block');
	define('_XTR_PERM_TYPE_TEMPLATE', '_default');
	
	// PERMISSION TEMPLATES // DO NOT CHANGE
	define('_XTR_PERM_TEMPLATE_ADD_XCENTER', 1);
	define('_XTR_PERM_TEMPLATE_ADD_CATEGORY', 2);
	define('_XTR_PERM_TEMPLATE_ADD_BLOCK', 3);
	define('_XTR_PERM_TEMPLATE_EDIT_XCENTER', 4);
	define('_XTR_PERM_TEMPLATE_EDIT_CATEGORY', 5);
	define('_XTR_PERM_TEMPLATE_EDIT_BLOCK', 6);
	define('_XTR_PERM_TEMPLATE_VIEW_XCENTER', 7);
	define('_XTR_PERM_TEMPLATE_VIEW_CATEGORY', 8);
	define('_XTR_PERM_TEMPLATE_VIEW_BLOCK', 9);
	define('_XTR_PERM_TEMPLATE_COPY_XCENTER', 10);
	define('_XTR_PERM_TEMPLATE_COPY_CATEGORY', 11);
	define('_XTR_PERM_TEMPLATE_COPY_BLOCK', 12);
	define('_XTR_PERM_TEMPLATE_DELETE_XCENTER', 13);
	define('_XTR_PERM_TEMPLATE_DELETE_CATEGORY', 14);
	define('_XTR_PERM_TEMPLATE_DELETE_BLOCK', 15);
	define('_XTR_PERM_TEMPLATE_PERMISSIONS', 16);
	define('_XTR_PERM_TEMPLATE_MANAGE_XCENTER', 17);
	define('_XTR_PERM_TEMPLATE_MANAGE_CATEGORY', 18);
	define('_XTR_PERM_TEMPLATE_MANAGE_BLOCK', 19);
	
	// PERMISSION TEMPLATES desCRIPTIons
	define('_XTR_PERM_TEMPLATE_ADD_XCENTER_DESC', 'Ajouter du contenu'); 
	define('_XTR_PERM_TEMPLATE_ADD_CATEGORY_DESC', 'Ajouter une catégorie');
	define('_XTR_PERM_TEMPLATE_ADD_BLOCK_DESC', 'Ajouter un bloc');
	define('_XTR_PERM_TEMPLATE_EDIT_XCENTER_DESC', 'Modifier le contenu');
	define('_XTR_PERM_TEMPLATE_EDIT_CATEGORY_DESC', 'Modifier la catégorie');
	define('_XTR_PERM_TEMPLATE_EDIT_BLOCK_DESC', 'Modifier les blocs');
	define('_XTR_PERM_TEMPLATE_VIEW_XCENTER_DESC', 'Afficher le contenu');
	define('_XTR_PERM_TEMPLATE_VIEW_CATEGORY_DESC', 'Afficher la catégorie');
	define('_XTR_PERM_TEMPLATE_VIEW_BLOCK_DESC', 'Voir le bloc');
	define('_XTR_PERM_TEMPLATE_COPY_XCENTER_DESC', 'Copier le contenu');
	define('_XTR_PERM_TEMPLATE_COPY_CATEGORY_DESC', 'Copier la catégorie');
	define('_XTR_PERM_TEMPLATE_COPY_BLOCK_DESC', 'Copier le bloc');
	define('_XTR_PERM_TEMPLATE_DELETE_XCENTER_DESC', 'Supprimer le contenu');
	define('_XTR_PERM_TEMPLATE_DELETE_CATEGORY_DESC', 'Supprimer la catégorie');
	define('_XTR_PERM_TEMPLATE_DELETE_BLOCK_DESC', 'Supprimer le bloc');
	define('_XTR_PERM_TEMPLATE_PERMISSIONS_DESC', 'Accès et modification des autorisations');
	define('_XTR_PERM_TEMPLATE_MANAGE_XCENTER_DESC', 'Gestion du contenu');
	define('_XTR_PERM_TEMPLATE_MANAGE_CATEGORY_DESC', 'Gestion des catégories');
	define('_XTR_PERM_TEMPLATE_MANAGE_BLOCK_DESC', 'Gestion des blocs');
	
	//PERMISSIOn TITLES
	define('_XTR_PERMISSIONS_CATEGORY', 'Autorisations pour les catégories');
	define('_XTR_PERMISSIONS_XCENTER', 'Autorisations pour le contenu');
	define('_XTR_PERMISSIONS_BLOCKS', 'Autorisations pour les blocs');
	define('_XTR_PERMISSIONS_DEFAULT', 'Autorisations par défaut');
	
	// LANGUAGE DESCRIPTIONS
	define('_XTR_USEJSON', 'Utiliser JSON sécurisé pour les formulaires ?');
	define('_XTR_USEJSON_DESC', 'L\'activation de cette option utilisera la méthode JQuery et JSON sécurisé pour le chargement des formulaires, attention, tous les éditeurs ne fonctionnent pas avec !');
	define('_XTR_WRITENBY', 'Afficher : Écrit par');
	define('_XTR_WRITENBY_DESC', 'Cela affichera l\'auteur de l\'article et le contenu.');
	define('_XTR_SECURITY', 'Type de sécurité');
	define('_XTR_SECURITY_DESC', 'Type de complexité de la sécurité que vous souhaitez utiliser !');
	define('_XTR_MUlTILINGUAL', 'Documents Multilingues');
	define('_XTR_SUPPORTTAGS', 'Soutien du module Tag');
	define('_XTR_SUPPORTTAGS_DESC', 'Soutien du module Tag (2.3 ou supérieur)<br/><a href="http://sourceforge.net/projects/xoops/files/XOOPS%20Module%20Repository/XOOPS%20tag%202.30%20RC/">Télécharger le module Tag</a>');
	define('_XTR_MUlTILINGUAL_DESC', 'Permet de spécifier plusieurs langues par page');
	define('_XTR_XCENTER_NAME', 'Contenu multilingue');
	define('_XTR_XCENTER_DIRNAME', 'xcenter');
	define('_XTR_EDITORS', 'Éditeur !');
	define('_XTR_EDITORS_DESC', 'Éditeur à utiliser pour l\'édition de texte !');
	define('_XTR_RSSICON', 'Activer l\'icône RSS');
	define('_XTR_RSSICON_DESC', 'Permet l\'accès RSS');	
	define('_XTR_PRINTICON', 'Activer l\'icône Imprimer');
	define('_XTR_PRINTICON_DESC', 'Active l\'impression');	
	define('_XTR_ADDTHIS', 'Activer les Réseaux sociaux');
	define('_XTR_ADDTHISICON_DESC', 'Permet la création de Réseaux sociaux');	
	define('_XTR_ADDTHISCODE', 'Code du Réseau social');
	define('_XTR_ADDTHISCODE_DESC', 'Code pour le partage des réseaux <a href="http://www.addthis.com">L\'obtenir ici</a>');	
	define('_XTR_PDFICON', 'Activer le PDF ?');
	define('_XTR_PDFICON_DESC', 'Permet les fonctions PDF');	
	define('_XTR_BREADCRUMB', 'Activer le fil d\'Ariane ?');
	define('_XTR_BREADCRUMB_DESC', 'Permets l\'aide à la navigation');	
	define('_XTR_HTACCESS', 'Activer le HTACCESS SEO');
	define('_XTR_HTACCESS_DESC', 'Cela permet le SEO');
	define('_XTR_BASEURL', 'Lien de base pour le SEO');
	define('_XTR_BASEURL_DESC', 'Lien de base pour le SEO');
	define('_XTR_ENDOFURL', 'Fin du lien');
	define('_XTR_ENDOFURL_DESC', 'Extension de fichier pour les fichiers HTML');
	define('_XTR_ENDOFURLRSS', 'Fin du lien');
	define('_XTR_ENDOFURLRSS_DESC', 'Extension de fichier des pages RSS');
	define('_XTR_ENDOFURLPDF', 'Fin du lien');
	define('_XTR_ENDOFURLPDF_DESC', 'Extension de fichier pour les fichiers Adobe Acrobat (PDF)');
	define('_XTR_FORCECPANELJQUERY', 'Forcer JQuery sur le panneau de contrôle');
	define('_XTR_FORCECPANELJQUERY_DESC', 'Force la copie d\'exécution installée de JQuery !');
	define('_XTR_FORCEJQUERY', 'Forcer JQuery sur les contenus des pages');
	define('_XTR_FORCEJQUERY_DESC', 'Force la copie d\'exécution installée de JQuery !');

	//SECURITY TYPES
	define('_XTR_SECURITY_BASIC', 'Base');
	define('_XTR_SECURITY_INTERMEDIATE', 'Intermédiaire');
	define('_XTR_SECURITY_ADVANCED', 'Avancée');
	define('_XTR_SECURITY_BASIC_DESC', 'Autorisations de base');
	define('_XTR_SECURITY_INTERMEDIATE_DESC', 'Autorisations intermédiaires');
	define('_XTR_SECURITY_ADVANCED_DESC', 'Autorisations avancées');
	
	// Version 2.16
	//FUNCTIOnAL PAGE OpERATORs -- DO NOT CHANGE
	define('_XTR_URL_OP_DASHBOARD', 'Tableau de bord');
	define('_XTR_URL_OP_ABOUT', 'À propos');
	
	//ADMINISTRATION SETTINGS // DO NOT CHANGE
	define('_XTR_HASADMIN', true);
	define('_XTR_ADMIN_INDEX', 'admin/index.php?op='._XTR_URL_OP_DASHBOARD);
	define('_XTR_ADMIN_MENU', 'admin/menu.php');
	define('_XTR_SYSTEM_MENU', true);

	// MENUs
	define('_XTR_XCENTER_ADMENU0', 'Tableau de bord');
	define('_XTR_XCENTER_ADMENU8', 'À propos de XCenter');
	
	// MENU ICONS?IMAGES
	define('_XTR_XCENTER_ADMENU0_ICON', '../../Frameworks/moduleclasses/icons/32/home.png');
	define('_XTR_XCENTER_ADMENU8_ICON', '../../Frameworks/moduleclasses/icons/32/about.png');
	// Traduction par Cesag pour frxoops.org le 17 Juin 2012
?>