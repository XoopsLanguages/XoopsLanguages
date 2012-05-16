<?php
/**
 * Installer main english strings declaration file
 *
 * @copyright   The XOOPS project http://www.xoops.org/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU General Public License (GPL)
 * @package     installer
 * @since       2.3.0
 * @author      Haruki Setoyama  <haruki@planewave.org>
 * @author      Kazumi Ono <webmaster@myweb.ne.jp>
 * @author      Skalpa Keo <skalpa@xoops.org>
 * @author      Taiwen Jiang <phppp@users.sourceforge.net>
 * @author      dugris <dugris@frxoops.org>
 * @version     $Id$
 */

// _LANGCODE: en
// _CHARSET : iso-8859-1
// Translator: XOOPS Translation Team

define( "SHOW_HIDE_HELP", "Afficher/Masquer le texte de l'aide" );

// License
define("LICENSE_NOT_WRITEABLE", "La licence est \"%s\" . <br /><span style='color:#ff0000;'>Permettre l'�criture sur le fichier : ../include/license.php</span>");
define("LICENSE_IS_WRITEABLE", "La licence est \"%s\"");

// Configuration check page
define( "SERVER_API", "API du Serveur" );
define( "PHP_EXTENSION", "Extension \"%s\"" );
define( "CHAR_ENCODING", "Encodage des caract�res (Charset)" );
define( "XML_PARSING", "Analyse XML" );
define( "REQUIREMENTS", "Pr�-requis" );
define( "_PHP_VERSION", "Version PHP" );
define( "RECOMMENDED_SETTINGS", "Param�trage recommand�" );
define( "RECOMMENDED_EXTENSIONS", "Extensions recommand�es" );
define( "SETTING_NAME", "Nom du param�tre" );
define( "RECOMMENDED", "Recommand�" );
define( "CURRENT", "Actuellement" );
define( "RECOMMENDED_EXTENSIONS_MSG", "Ces extensions ne sont pas obligatoires pour un usage standard, mais peuvent �tre n�cessaires pour utiliser quelques fonctions sp�cifiques. Nous recommandons leur installation.");

define( "NONE", "Aucun" );
define( "SUCCESS", "Succ�s" );
define( "WARNING", "Avertissement" );
define( "FAILED", "Echec" );

// Titles (main and pages)
define( "XOOPS_INSTALL_WIZARD", "Assistant d'installation" );

define( "LANGUAGE_SELECTION", "Langue d'installation" );
define( "LANGUAGE_SELECTION_TITLE", "Choisissez votre langue");
define( "INTRODUCTION", "Introduction" );
define( "INTRODUCTION_TITLE", "Bienvenue dans l'assistant d'installation de XOOPS" );
define( "CONFIGURATION_CHECK", "V�rification de votre configuration" );
define( "CONFIGURATION_CHECK_TITLE", "V�rification du param�trage de votre serveur" );
define( "PATHS_SETTINGS", "Param�trage des chemins" );
define( "PATHS_SETTINGS_TITLE", "V�rification du param�trage des chemins" );
define( "DATABASE_CONNECTION", "Connexion � la base de donn�es" );
define( "DATABASE_CONNECTION_TITLE", "Connexion � la base de donn�es" );
define( "DATABASE_CONFIG", "Param�trage de la base de donn�es" );
define( "DATABASE_CONFIG_TITLE", "Param�trage de la base de donn�es" );
define( "CONFIG_SAVE", "Enregistrement de la configuration" );
define( "CONFIG_SAVE_TITLE", "Enregistrement de la configuration syst�me" );
define( "TABLES_CREATION", "Cr�ation des tables" );
define( "TABLES_CREATION_TITLE", "Cr�ation des tables dans la base de donn�es" );
define( "INITIAL_SETTINGS", "Param�tres initiaux" );
define( "INITIAL_SETTINGS_TITLE", "Merci de saisir vos param�tres initiaux" );
define( "DATA_INSERTION", "Insertion des donn�es" );
define( "DATA_INSERTION_TITLE", "Enregistrement de vos param�tres dans la base de donn�es" );
define( "WELCOME", "Bienvenue" );
define( "WELCOME_TITLE", "Bienvenue sur votre nouveau site sous XOOPS" );


// Settings (labels and help text)
define( "XOOPS_PATHS", "Racine physique de votre site XOOPS" );
define( "XOOPS_URLS", "Adresse du site internet" );

define( "XOOPS_ROOT_PATH_LABEL", "Racine physique de votre site XOOPS" );
define( "XOOPS_ROOT_PATH_HELP", "Chemin physique de votre site XOOPS sur le serveur SANS l'antislash final" );

define( "XOOPS_LIB_PATH_LABEL", "Chemin physique de la biblioth�que XOOPS" );
define( "XOOPS_LIB_PATH_HELP", "Chemin physique de la biblioth�que XOOPS SANS l'antislash final, pour la compatibilit�. Placez ce dossier en dehors " . XOOPS_ROOT_PATH_LABEL . " pour le rendre s�r.");
define( "XOOPS_DATA_PATH_LABEL", "Chemin physique des donn�es de XOOPS" );
define( "XOOPS_DATA_PATH_HELP", "Chemin physique des donn�es de XOOPS (dossier en �criture) SANS l'antislash final, pour la compatibilit�. Placez ce dossier en dehors " . XOOPS_ROOT_PATH_LABEL . " pour le rendre s�r." );

define( "XOOPS_URL_LABEL", "Adresse avec laquelle on acc�dera � votre site  web (URL)" );
define( "XOOPS_URL_HELP", "Adresse URL principale qui est utilis�e pour acc�der � votre installation XOOPS" );

define( "LEGEND_CONNECTION", "Connection au serveur" );
define( "LEGEND_DATABASE", "Base de donn�es" );

define( "DB_HOST_LABEL", "Nom d'h�te du serveur" );
define( "DB_HOST_HELP",  "Nom d'h�te du serveur de base de donn�es. Si vous n'�tes pas s�r, consultez les instructions de votre h�bergeur (FAQ, guide,etc...), <em>localhost</em> fonctionne dans les situations les plus courantes");
define( "DB_USER_LABEL", "Nom d'utilisateur" );
define( "DB_USER_HELP",  "Nom du compte utilisateur qui sera utilis� pour se connecter � la base de donn�es. Il doit poss�der des droits d'administration sur la base de donn�es");
define( "DB_PASS_LABEL", "Mot de passe" );
define( "DB_PASS_HELP",  "Mot de passe associ� au nom du compte utilisateur pour la base de donn�es");
define( "DB_NAME_LABEL", "Nom de la base de donn�es" );
define( "DB_NAME_HELP",  "Indiquez le nom de la base de donn�es sur le serveur. L'assistant essaiera de cr�er la base de donn�es si elle n'existe pas.");
define( "DB_CHARSET_LABEL", "Jeu de caract�res (charset) pour la base de donn�es" );
define( "DB_CHARSET_HELP",  "MySQL inclut le jeu de caract�res qui vous permet de stocker des donn�es en utilisant une vari�t� de jeux de caract�res et d'effectuer des comparaisons selon une vari�t� d'interclassements.");
define( "DB_COLLATION_LABEL", "Interclassement (collation) pour la connexion � la base de donn�es" );
define( "DB_COLLATION_HELP",  "L'interclassement est un ensemble de r�gles pour la comparaison des caract�res dans un jeu de caract�res.");
define( "DB_PREFIX_LABEL", "Pr�fixe des tables" );
define( "DB_PREFIX_HELP",  "Ce pr�fixe sera ajout� � toutes les tables utilis�es par Xoops ou ses modules, pour �viter les conflits de noms dans la base de donn�es. Si vous n'�tes pas s�r, conservez la proposition affich�e");
define( "DB_PCONNECT_LABEL", "Utiliser des connexions persistantes" );
define( "DB_PCONNECT_HELP",  "La valeur par d�faut est 'NON'. Conserver ce choix si vous n'�tes pas s�r.");
define( "DB_DATABASE_LABEL", "Base de donn�es" );

define( "LEGEND_ADMIN_ACCOUNT", "Compte Administrateur" );
define( "ADMIN_LOGIN_LABEL", "Identifiant Administrateur" );
define( "ADMIN_EMAIL_LABEL", "E-mail Administrateur" );
define( "ADMIN_PASS_LABEL", "Mot de passe administrateur" );
define( "ADMIN_CONFIRMPASS_LABEL", "Confirmation du mot de passe" );

// Buttons
define( "BUTTON_PREVIOUS", "Pr�c�dent" );
define( "BUTTON_NEXT", "Suivant" );

// Messages
define( "XOOPS_FOUND", "%s trouv� !" );
define( "CHECKING_PERMISSIONS", "Contr�le des permissions sur les dossiers et fichiers ..." );
define( "IS_NOT_WRITABLE", "\"%s\" n'est PAS accessible en �criture." );
define( "IS_WRITABLE", "\"%s\" est accessible en �criture." );

define( "XOOPS_PATH_FOUND", "Chemin trouv� !" );

define( "READY_CREATE_TABLES", "Aucune table de XOOPS est d�tect�e.<br />L'assistant d'installation est maintenant pr�t � cr�er les tables du syst�me XOOPS.<br />Cliquez sur <em>Suivant</em> pour continuer." );
define( "XOOPS_TABLES_FOUND", "Des tables du syst�me XOOPS existent d�j� dans votre base de donn�es.<br />Cliquez sur <em>Suivant</em> pour acc�der � la prochaine �tape." );
define( "XOOPS_TABLES_CREATED", "Les tables du syst�me XOOPS ont �t� cr��es.<br />Cliquez sur <em>Suivant</em> pour acc�der � la prochaine �tape." );
define( "READY_INSERT_DATA", "L'assistant d'installation est maintenant pr�t � ins�rer les donn�es initiales dans votre base de donn�es." );
define( "READY_SAVE_MAINFILE", "L'assistant d'installation est pr�t � sauvegarder vos param�tres de configuration dans le fichier <em>\"xoops_data/data/secure.php\"</em>.<br />Cliquez sur <em>Suivant</em> pour continuer." );
define( "SAVED_MAINFILE", "Param�tres enregistr�s dans le fichier \"xoops_data/data/secure.php\"" );
define( "SAVED_MAINFILE_MSG", "L'installateur a enregistr� les param�tres dans le fichier <em>\"xoops_data/data/secure.php\"</em>.<br />Cliquez <em>Suivant</em> pour acc�der � la prochaine �tape." );
define( "DATA_ALREADY_INSERTED", "Des donn�es correspondantes � une installation de XOOPS ont �t� trouv�es dans votre base de donn�es.<br />Cliquez <em>Suivant</em> pour acc�der � la prochaine �tape." );
define( "DATA_INSERTED", "Les donn�es initiales ont �t� enregistr�es dans la base de donn�es.<br />Cliquez <em>Suivant</em> pour acc�der � la prochaine �tape." );


// %s is database name
define( "DATABASE_CREATED", "La base de donn�es \"%s\" a �t� cr��e !" );
// %s is table name
define( "TABLE_NOT_CREATED", "Impossibilit� de cr�er la table \"%s\"" );
define( "TABLE_CREATED", "Table \"%s\" cr��e." );
define( "ROWS_INSERTED", "%d enregistrements ins�r�s dans la table \"%s\"." );
define( "ROWS_FAILED", "Echec d'insertion de %d enregistrements dans la table \"%s\"." );
define( "TABLE_ALTERED", "Table \"%s\" mise � jour.");
define( "TABLE_NOT_ALTERED", "Echec lors de la mise � jour de la table \"%s\"");
define( "TABLE_DROPPED", "Table \"%s\" supprim�e");
define( "TABLE_NOT_DROPPED", "la suppression de la table \"%s\" a �chou�.");

// Error messages
define ("ERR_COULD_NOT_ACCESS", "Impossibilit� d'acc�der au dossier" );
define( "ERR_NO_XOOPS_FOUND", "Aucune installation de XOOPS a �t� trouv�e dans le dossier sp�cifi�." );
define( "ERR_INVALID_EMAIL", "Adresse email invalide" );
define( "ERR_REQUIRED", "L'information est n�cessaire." );
define( "ERR_PASSWORD_MATCH", "Les deux mots de passe ne concordent pas" );
define( "ERR_NEED_WRITE_ACCESS", "Le serveur doit disposer de droits des permissions en �criture sur les dossiers et fichiers (i.e. --> 'chmod 777' sur un serveur UNIX/LINUX)." );
define( "ERR_NO_DATABASE", "Impossible de proc�der � la cr�ation de la base de donn�es. Contactez l'administrateur du serveur pour obtenir des d�tails suppl�mentaires." );
define( "ERR_NO_DBCONNECTION", "Impossible de se connecter au serveur de la base de donn�es." );
define( "ERR_WRITING_CONSTANT", "Echec d'�criture de la constante \"%s\"" );

define( "ERR_COPY_MAINFILE", "Impossible de copier le(s) fichier(s) de distribution mainfile.php et/ou xoops_data/data/secure.php" );
define( "ERR_WRITE_MAINFILE", "Impossible d'�crire dans le(s) fichier(s) mainfile.php ou/et xoops_data/data/secure.php. Veuillez v�rifier les permissions en �criture pour ce(s) fichier(s) et recommencez.");
define( "ERR_READ_MAINFILE", "Impossible d'ouvrir en lecture le(s) fichier(s) mainfile.php ou/et xoops_data/data/secure.php" );

define( "ERR_INVALID_DBCHARSET", "Le jeu de caract�res (charset) <em>%s</em> n'est pas support�." );
define( "ERR_INVALID_DBCOLLATION", "L'interclassement (collation) <em>%s</em> n'est pas support�." );
define( "ERR_CHARSET_NOT_SET", "Le jeu de caract�res (charset) par d�faut n'est pas configur� pour la base de donn�e de XOOPS." );


define("_INSTALL_CHARSET","UTF-8");

define( "SUPPORT", "Supports");

define( "LOGIN", "Authentification");
define( "LOGIN_TITLE", "Authentification");
define( "USER_LOGIN", "Connexion Administrateur" );
define( "USERNAME", "Identifiant :");
define( "PASSWORD", "Mot de passe :");

define( "ICONV_CONVERSION", "Conversion du jeu de caract�re (charset)");
define( "ZLIB_COMPRESSION", "Compression Zlib");
define( "IMAGE_FUNCTIONS", "Fonctions Image");
define( "IMAGE_METAS", "Meta Data Image (exif)");
//define( "FILTER_FUNCTIONS", "Fonctions de filtre");

define( "ADMIN_EXIST", "Le compte Administrateur existe d�j�.<br />Pressez <strong>Suivant</strong> pour aller � l'�tape suivante.");

define( "CONFIG_SITE", "Configuration du Site" );
define( "CONFIG_SITE_TITLE", "Configuration du Site" );
define( "MODULES", "Installation des Modules" );
define( "MODULES_TITLE", "Installation des Modules" );
define( "THEME", "Choix du th�me graphique" );
define( "THEME_TITLE", "Choix du th�me par d�faut" );

define( "INSTALLED_MODULES", "Les modules suivants ont �t� install�s.<br />Pressez <strong>Suivant</strong> pour aller � l'�tape suivante.");
define( "NO_MODULES_FOUND", "Aucun module trouv�.<br />Pressez <strong>Suivant</strong> pour aller � l'�tape suivante.");
define( "NO_INSTALLED_MODULES", "Aucun module install�.<br />Pressez <strong>Suivant</strong> pour aller � l'�tape suivante.");

define( "THEME_NO_SCREENSHOT", "Aucune vignette trouv�e");

define( "IS_VALOR", " => ");

// password message
define( "PASSWORD_LABEL", "Qualit� du mot de passe : ");
define( "PASSWORD_DESC", "Mot de passe absent");
define( "PASSWORD_GENERATOR", "G�n�rateur de mot de passe");
define( "PASSWORD_GENERATE", "G�n�rez");
define( "PASSWORD_COPY", "Copier");

define( "PASSWORD_VERY_WEAK", "Tr�s facile");
define( "PASSWORD_WEAK", "Facile");
define( "PASSWORD_BETTER", "Simple");
define( "PASSWORD_MEDIUM", "Moyen");
define( "PASSWORD_STRONG", "Bon");
define( "PASSWORD_STRONGEST", "Tr�s bon");

/**
 * @translation     Communaut� Francophone des Utilisateurs de Xoops
 * @specification   _LANGCODE: fr
 * @specification   _CHARSET: iso-8859-1
 *
 * @Translator      kris [http://www.xoofoo.org)
 *
 * @version         $Id $
 Modification et mise � jour par Cesag le 14 Mai 2012.
**/
?>