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

define("SHOW_HIDE_HELP","Afficher/Masquer le texte de l'aide" );

// License
define("LICENSE_NOT_WRITEABLE","La licence est \"%s\" . <br /><span style='color:#ff0000;'>Permettre l'écriture sur le fichier : ../include/license.php</span>");
define("LICENSE_IS_WRITEABLE","La licence est \"%s\"");

// Configuration check page
define("SERVER_API","API du Serveur" );
define("PHP_EXTENSION","Extension \"%s\"" );
define("CHAR_ENCODING","Encodage des caractères (Charset)" );
define("XML_PARSING","Analyse XML" );
define("REQUIREMENTS","Pré-requis" );
define("_PHP_VERSION","Version PHP" );
define("RECOMMENDED_SETTINGS","Paramétrage recommandé" );
define("RECOMMENDED_EXTENSIONS","Extensions recommandées" );
define("SETTING_NAME","Nom du paramètre" );
define("RECOMMENDED","Recommandé" );
define("CURRENT","Actuellement" );
define("RECOMMENDED_EXTENSIONS_MSG","Ces extensions ne sont pas obligatoires pour un usage standard, mais peuvent être nécessaires pour utiliser quelques fonctions spécifiques. Nous recommandons leur installation.");

define("NONE","Aucun" );
define("SUCCESS","Succès" );
define("WARNING","Avertissement" );
define("FAILED","Echec" );

// Titles (main and pages)
define("XOOPS_INSTALL_WIZARD","Assistant d'installation" );

define("LANGUAGE_SELECTION","Langue d'installation" );
define("LANGUAGE_SELECTION_TITLE","Choisissez votre langue");
define("INTRODUCTION","Introduction" );
define("INTRODUCTION_TITLE","Bienvenue dans l'assistant d'installation de XOOPS" );
define("CONFIGURATION_CHECK","Vérification de votre configuration" );
define("CONFIGURATION_CHECK_TITLE","Vérification du paramétrage de votre serveur" );
define("PATHS_SETTINGS","Paramétrage des chemins" );
define("PATHS_SETTINGS_TITLE","Vérification du paramétrage des chemins" );
define("DATABASE_CONNECTION","Connexion à la base de données" );
define("DATABASE_CONNECTION_TITLE","Connexion à la base de données" );
define("DATABASE_CONFIG","Paramétrage de la base de données" );
define("DATABASE_CONFIG_TITLE","Paramétrage de la base de données" );
define("CONFIG_SAVE","Enregistrement de la configuration" );
define("CONFIG_SAVE_TITLE","Enregistrement de la configuration système" );
define("TABLES_CREATION","Création des tables" );
define("TABLES_CREATION_TITLE","Création des tables dans la base de données" );
define("INITIAL_SETTINGS","Paramètres initiaux" );
define("INITIAL_SETTINGS_TITLE","Merci de saisir vos paramètres initiaux" );
define("DATA_INSERTION","Insertion des données" );
define("DATA_INSERTION_TITLE","Enregistrement de vos paramètres dans la base de données" );
define("WELCOME","Bienvenue" );
define("WELCOME_TITLE","Bienvenue sur votre nouveau site sous XOOPS" );


// Settings (labels and help text)
define("XOOPS_PATHS","Racine physique de votre site XOOPS" );
define("XOOPS_URLS","Adresse du site internet" );

define("XOOPS_ROOT_PATH_LABEL","Racine physique de votre site XOOPS" );
define("XOOPS_ROOT_PATH_HELP","Chemin physique de votre site XOOPS sur le serveur SANS l'antislash final" );

define("XOOPS_LIB_PATH_LABEL","Chemin physique de la bibliothèque XOOPS" );
define("XOOPS_LIB_PATH_HELP","Chemin physique de la bibliothèque XOOPS SANS l'antislash final, pour la compatibilité. Placez ce dossier en dehors " . XOOPS_ROOT_PATH_LABEL . " pour le rendre sûr.");
define("XOOPS_DATA_PATH_LABEL","Chemin physique des données de XOOPS" );
define("XOOPS_DATA_PATH_HELP","Chemin physique des données de XOOPS (dossier en écriture) SANS l'antislash final, pour la compatibilité. Placez ce dossier en dehors " . XOOPS_ROOT_PATH_LABEL . " pour le rendre sûr." );

define("XOOPS_URL_LABEL","Adresse avec laquelle on accèdera à votre site  web (URL)" );
define("XOOPS_URL_HELP","Adresse URL principale qui est utilisée pour accéder à votre installation XOOPS" );

define("LEGEND_CONNECTION","Connection au serveur" );
define("LEGEND_DATABASE","Base de données" );

define("DB_HOST_LABEL","Nom d'hôte du serveur" );
define("DB_HOST_HELP",  "Nom d'hôte du serveur de base de données. Si vous n'êtes pas sûr, consultez les instructions de votre hébergeur (FAQ, guide,etc...), <em>localhost</em> fonctionne dans les situations les plus courantes");
define("DB_USER_LABEL","Nom d'utilisateur" );
define("DB_USER_HELP",  "Nom du compte utilisateur qui sera utilisé pour se connecter à la base de données. Il doit posséder des droits d'administration sur la base de données");
define("DB_PASS_LABEL","Mot de passe" );
define("DB_PASS_HELP",  "Mot de passe associé au nom du compte utilisateur pour la base de données");
define("DB_NAME_LABEL","Nom de la base de données" );
define("DB_NAME_HELP",  "Indiquez le nom de la base de données sur le serveur. L'assistant essaiera de créer la base de données si elle n'existe pas.");
define("DB_CHARSET_LABEL","Jeu de caractères (charset) pour la base de données" );
define("DB_CHARSET_HELP",  "MySQL inclut le jeu de caractères qui vous permet de stocker des données en utilisant une variété de jeux de caractères et d'effectuer des comparaisons selon une variété d'interclassements.");
define("DB_COLLATION_LABEL","Interclassement (collation) pour la connexion à la base de données" );
define("DB_COLLATION_HELP",  "L'interclassement est un ensemble de règles pour la comparaison des caractères dans un jeu de caractères.");
define("DB_PREFIX_LABEL","Préfixe des tables" );
define("DB_PREFIX_HELP",  "Ce préfixe sera ajouté à toutes les tables utilisées par Xoops ou ses modules, pour éviter les conflits de noms dans la base de données. Si vous n'êtes pas sûr, conservez la proposition affichée");
define("DB_PCONNECT_LABEL","Utiliser des connexions persistantes" );
define("DB_PCONNECT_HELP",  "La valeur par défaut est 'NON'. Conserver ce choix si vous n'êtes pas sûr.");
define("DB_DATABASE_LABEL","Base de données" );

define("LEGEND_ADMIN_ACCOUNT","Compte Administrateur" );
define("ADMIN_LOGIN_LABEL","Identifiant Administrateur" );
define("ADMIN_EMAIL_LABEL","E-mail Administrateur" );
define("ADMIN_PASS_LABEL","Mot de passe administrateur" );
define("ADMIN_CONFIRMPASS_LABEL","Confirmation du mot de passe" );

// Buttons
define("BUTTON_PREVIOUS","Précédent" );
define("BUTTON_NEXT","Suivant" );

// Messages
define("XOOPS_FOUND","%s trouvé !" );
define("CHECKING_PERMISSIONS","Contrôle des permissions sur les dossiers et fichiers ..." );
define("IS_NOT_WRITABLE","\"%s\" n'est PAS accessible en écriture." );
define("IS_WRITABLE","\"%s\" est accessible en écriture." );

define("XOOPS_PATH_FOUND","Chemin trouvé !" );

define("READY_CREATE_TABLES","Aucune table de XOOPS est détectée.<br />L'assistant d'installation est maintenant prêt à créer les tables du système XOOPS.<br />Cliquez sur <em>Suivant</em> pour continuer." );
define("XOOPS_TABLES_FOUND","Des tables du système XOOPS existent déjà dans votre base de données.<br />Cliquez sur <em>Suivant</em> pour accéder à la prochaine étape." );
define("XOOPS_TABLES_CREATED","Les tables du système XOOPS ont été créées.<br />Cliquez sur <em>Suivant</em> pour accéder à la prochaine étape." );
define("READY_INSERT_DATA","L'assistant d'installation est maintenant prêt à insérer les données initiales dans votre base de données." );
define("READY_SAVE_MAINFILE","L'assistant d'installation est prêt à sauvegarder vos paramètres de configuration dans le fichier <em>\"xoops_data/data/secure.php\"</em>.<br />Cliquez sur <em>Suivant</em> pour continuer." );
define("SAVED_MAINFILE","Paramètres enregistrés dans le fichier \"xoops_data/data/secure.php\"" );
define("SAVED_MAINFILE_MSG","L'installateur a enregistré les paramètres dans le fichier <em>\"xoops_data/data/secure.php\"</em>.<br />Cliquez <em>Suivant</em> pour accéder à la prochaine étape." );
define("DATA_ALREADY_INSERTED","Des données correspondantes à une installation de XOOPS ont été trouvées dans votre base de données.<br />Cliquez <em>Suivant</em> pour accéder à la prochaine étape." );
define("DATA_INSERTED","Les données initiales ont été enregistrées dans la base de données.<br />Cliquez <em>Suivant</em> pour accéder à la prochaine étape." );


// %s is database name
define("DATABASE_CREATED","La base de données \"%s\" a été créée !" );
// %s is table name
define("TABLE_NOT_CREATED","Impossibilité de créer la table \"%s\"" );
define("TABLE_CREATED","Table \"%s\" créée." );
define("ROWS_INSERTED","%d enregistrements insérés dans la table \"%s\"." );
define("ROWS_FAILED","Echec d'insertion de %d enregistrements dans la table \"%s\"." );
define("TABLE_ALTERED","Table \"%s\" mise à jour.");
define("TABLE_NOT_ALTERED","Echec lors de la mise à jour de la table \"%s\"");
define("TABLE_DROPPED","Table \"%s\" supprimée");
define("TABLE_NOT_DROPPED","la suppression de la table \"%s\" a échoué.");

// Error messages
define("ERR_COULD_NOT_ACCESS","Impossibilité d'accéder au dossier" );
define("ERR_NO_XOOPS_FOUND","Aucune installation de XOOPS a été trouvée dans le dossier spécifié." );
define("ERR_INVALID_EMAIL","Adresse email invalide" );
define("ERR_REQUIRED","L'information est nécessaire." );
define("ERR_PASSWORD_MATCH","Les deux mots de passe ne concordent pas" );
define("ERR_NEED_WRITE_ACCESS","Le serveur doit disposer de droits des permissions en écriture sur les dossiers et fichiers (i.e. --> 'chmod 777' sur un serveur UNIX/LINUX)." );
define("ERR_NO_DATABASE","Impossible de procéder à la création de la base de données. Contactez l'administrateur du serveur pour obtenir des détails supplémentaires." );
define("ERR_NO_DBCONNECTION","Impossible de se connecter au serveur de la base de données." );
define("ERR_WRITING_CONSTANT","Echec d'écriture de la constante \"%s\"" );

define("ERR_COPY_MAINFILE","Impossible de copier le(s) fichier(s) de distribution mainfile.php et/ou xoops_data/data/secure.php" );
define("ERR_WRITE_MAINFILE","Impossible d'écrire dans le(s) fichier(s) mainfile.php ou/et xoops_data/data/secure.php. Veuillez vérifier les permissions en écriture pour ce(s) fichier(s) et recommencez.");
define("ERR_READ_MAINFILE","Impossible d'ouvrir en lecture le(s) fichier(s) mainfile.php ou/et xoops_data/data/secure.php" );

define("ERR_INVALID_DBCHARSET","Le jeu de caractères (charset) <em>%s</em> n'est pas supporté." );
define("ERR_INVALID_DBCOLLATION","L'interclassement (collation) <em>%s</em> n'est pas supporté." );
define("ERR_CHARSET_NOT_SET","Le jeu de caractères (charset) par défaut n'est pas configuré pour la base de donnée de XOOPS." );


define("_INSTALL_CHARSET","UTF-8");

define("SUPPORT","Supports");

define("LOGIN","Authentification");
define("LOGIN_TITLE","Authentification");
define("USER_LOGIN","Connexion Administrateur" );
define("USERNAME","Identifiant :");
define("PASSWORD","Mot de passe :");

define("ICONV_CONVERSION","Conversion du jeu de caractère (charset)");
define("ZLIB_COMPRESSION","Compression Zlib");
define("IMAGE_FUNCTIONS","Fonctions Image");
define("IMAGE_METAS","Meta Data Image (exif)");
//define("FILTER_FUNCTIONS","Fonctions de filtre");

define("ADMIN_EXIST","Le compte Administrateur existe déjà.<br />Pressez <strong>Suivant</strong> pour aller à l'étape suivante.");

define("CONFIG_SITE","Configuration du Site" );
define("CONFIG_SITE_TITLE","Configuration du Site" );
define("MODULES","Installation des Modules" );
define("MODULES_TITLE","Installation des Modules" );
define("THEME","Choix du thème graphique" );
define("THEME_TITLE","Choix du thème par défaut" );

define("INSTALLED_MODULES","Les modules suivants ont été installés.<br />Pressez <strong>Suivant</strong> pour aller à l'étape suivante.");
define("NO_MODULES_FOUND","Aucun module trouvé.<br />Pressez <strong>Suivant</strong> pour aller à l'étape suivante.");
define("NO_INSTALLED_MODULES","Aucun module installé.<br />Pressez <strong>Suivant</strong> pour aller à l'étape suivante.");

define("THEME_NO_SCREENSHOT","Aucune vignette trouvée");

define("IS_VALOR"," => ");

// password message
define("PASSWORD_LABEL","Qualité du mot de passe : ");
define("PASSWORD_DESC","Mot de passe absent");
define("PASSWORD_GENERATOR","Générateur de mot de passe");
define("PASSWORD_GENERATE","Générez");
define("PASSWORD_COPY","Copier");

define("PASSWORD_VERY_WEAK","Très facile");
define("PASSWORD_WEAK","Facile");
define("PASSWORD_BETTER","Simple");
define("PASSWORD_MEDIUM","Moyen");
define("PASSWORD_STRONG","Bon");
define("PASSWORD_STRONGEST","Très bon");

/**
 * @translation     Communauté Francophone des Utilisateurs de Xoops
 * @specification   _LANGCODE: fr
 * @specification   _CHARSET: iso-8859-1
 *
 * @Translator      kris [http://www.xoofoo.org)
 *
 * @version         $Id $
 Modification et mise à jour par Cesag le 14 Mai 2012.
**/
?>