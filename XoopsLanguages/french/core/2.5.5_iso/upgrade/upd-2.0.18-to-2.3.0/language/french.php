<?php
// $Id$
// _LANGCODE: fr
// _CHARSET : iso-8859-1
// Traduction faite par Cesag le 15 Mai 2012.

define( "LEGEND_XOOPS_PATHS", "Chemins d'acc�s physiques de XOOPS" );
define( "LEGEND_DATABASE", "Jeu de caract�res de la base de donn�es" );

define( "XOOPS_LIB_PATH_LABEL", "R�pertoire des biblioth�ques de XOOPS" );
define( "XOOPS_LIB_PATH_HELP", "Chemin d'acc�s physique au r�pertoire de biblioth�que XOOPS sans la barre oblique (slash), pour assurer la compatibilit�. Mettez le dossier hors de " . XOOPS_ROOT_PATH . " pour le s�curiser. " );
define( "XOOPS_DATA_PATH_LABEL", "XOOPS datafiles directory" );
define( "XOOPS_DATA_PATH_HELP", "Chemin d'acc�s physique aux fichiers de donn�es XOOPS (ouverts en �criture : CHMOD 777 pour linux), sans slash, pour assurer la compatibilit�. Mettez le dossier hors de " . XOOPS_ROOT_PATH . " pour le s�curiser. " );

define( "DB_COLLATION_LABEL", "Jeu de caract�res de base de donn�es et compilation" );
define( "DB_COLLATION_HELP",  "MySQL 4.12 supporte le jeu de caract�res personnalis�s et la compilation. Cependant c'est plus complexe que pr�vu, alors ne faire aucun changement sauf si vous n'�tes pas s�r de votre choix.");
define( "DB_COLLATION_NOCHANGE",  "Ne pas modifier");

define( "XOOPS_PATH_FOUND", "Chemin d'acc�s trouv�." );
define( "ERR_COULD_NOT_ACCESS", "Impossible d'acc�der au dossier sp�cifi�. V�rifiez qu'il existe et qu'il est ouvert en �criture sur le serveur." );
define( "CHECKING_PERMISSIONS", "V�rification des autorisations des fichiers et des dossiers..." );
define( "ERR_NEED_WRITE_ACCESS", "Le serveur doit recevoir un acc�s en �criture pour les fichiers et les dossiers suivants<br />(i.e. <em>chmod 777</em> sur un serveur UNIX/LINUX)" );
define( "IS_NOT_WRITABLE", "%s n'est pas ouvert en �criture." );
define( "IS_WRITABLE", "%s est ouvert en �criture." );
define( "ERR_COULD_NOT_WRITE_MAINFILE", "Erreur d'�criture de contenu dans le fichier mainfile.php, modifiez le fichier mainfile.php manuellement." );

?>