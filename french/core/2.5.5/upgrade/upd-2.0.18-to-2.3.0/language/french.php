<?php
// $Id$
// _LANGCODE: fr
// _CHARSET : UTF-8 sans BOM
// Traduction faite par Cesag le 15 Mai 2012.

define("LEGEND_XOOPS_PATHS","Chemins d'accès physiques de XOOPS" );
define("LEGEND_DATABASE","Jeu de caractères de la base de données" );

define("XOOPS_LIB_PATH_LABEL","Répertoire des bibliothèques de XOOPS" );
define("XOOPS_LIB_PATH_HELP","Chemin d'accès physique au répertoire de bibliothèque XOOPS sans la barre oblique (slash), pour assurer la compatibilité. Mettez le dossier hors de " . XOOPS_ROOT_PATH . " pour le sécuriser. " );
define("XOOPS_DATA_PATH_LABEL","XOOPS datafiles directory" );
define("XOOPS_DATA_PATH_HELP","Chemin d'accès physique aux fichiers de données XOOPS (ouverts en écriture : CHMOD 777 pour linux), sans slash, pour assurer la compatibilité. Mettez le dossier hors de " . XOOPS_ROOT_PATH . " pour le sécuriser. " );

define("DB_COLLATION_LABEL","Jeu de caractères de base de données et compilation" );
define("DB_COLLATION_HELP",  "MySQL 4.12 supporte le jeu de caractères personnalisés et la compilation. Cependant c'est plus complexe que prévu, alors ne faire aucun changement sauf si vous n'êtes pas sûr de votre choix.");
define("DB_COLLATION_NOCHANGE",  "Ne pas modifier");

define("XOOPS_PATH_FOUND","Chemin d'accès trouvé." );
define("ERR_COULD_NOT_ACCESS","Impossible d'accéder au dossier spécifié. Vérifiez qu'il existe et qu'il est ouvert en écriture sur le serveur." );
define("CHECKING_PERMISSIONS","Vérification des autorisations des fichiers et des dossiers..." );
define("ERR_NEED_WRITE_ACCESS","Le serveur doit recevoir un accès en écriture pour les fichiers et les dossiers suivants<br />(i.e. <em>chmod 777</em> sur un serveur UNIX/LINUX)" );
define("IS_NOT_WRITABLE","%s n'est pas ouvert en écriture." );
define("IS_WRITABLE","%s est ouvert en écriture." );
define("ERR_COULD_NOT_WRITE_MAINFILE","Erreur d'écriture de contenu dans le fichier mainfile.php, modifiez le fichier mainfile.php manuellement." );

?>