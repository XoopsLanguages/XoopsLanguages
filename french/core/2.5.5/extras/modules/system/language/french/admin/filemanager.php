<?php
/**
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * _LANGCODE    fr
 * _CHARSET     UTF-8
 * @version     $Id: filemanager.php 1635 2011-11-26 17:10:47Z kris_fr $
 */
 
//Nav
define("_AM_SYSTEM_FILEMANAGER_NAV_MANAGER","Gestion des fichiers");
define("_AM_SYSTEM_FILEMANAGER_NAV_MAIN","Gestionnaire de fichiers");

//Tips
define('_AM_SYSTEM_FILEMANAGER_NAV_TIPS',"
<ul>
<li>Modifier les permissions des fichiers, leur contenu, ou simplement supprimer un fichier inutilisé depuis l'administration de XOOPS.</li>
</ul>
");

// Main
define("_AM_SYSTEM_FILEMANAGER_DIRECTORY","Dossiers");
define("_AM_SYSTEM_FILEMANAGER_FILES","Fichiers");
define("_AM_SYSTEM_FILEMANAGER_GENERATE","Surcharge régénérée");
define("_AM_SYSTEM_FILEMANAGER_SELECT_THEME","Sélectionnez le thème");
define("_AM_SYSTEM_FILEMANAGER_FORCE_GENERATED","Forcer la régénération de la surcharge");
define("_AM_SYSTEM_FILEMANAGER_NAV_FILE_GENERATED","Fichiers régénérés");
define("_AM_SYSTEM_FILEMANAGER_NOT_CREATED","Aucun fichier créé");
define("_AM_SYSTEM_FILEMANAGER_HOME","Racine");
define("_AM_SYSTEM_FILEMANAGER_SAVE","Enregistrer");
define("_AM_SYSTEM_FILEMANAGER_CANCEL","Annuler");
define("_AM_SYSTEM_FILEMANAGER_RESTORE","Restaurer");
define("_AM_SYSTEM_FILEMANAGER_REFRESH","Rafraîchir");
define("_AM_SYSTEM_FILEMANAGER_UPLOAD","Télécharger un fichier");
define("_AM_SYSTEM_FILEMANAGER_UPLOAD_CHOOSE","Sélectionez un fichier à télécharger");
define("_AM_SYSTEM_FILEMANAGER_ADDDIR","Ajouter un dossier");
define("_AM_SYSTEM_FILEMANAGER_ADDDIR_NAME","Entrez le nom du dossier");
define("_AM_SYSTEM_FILEMANAGER_ADDFILE","Ajouter un nouveau fichier");
define("_AM_SYSTEM_FILEMANAGER_DELDIR","Supprimer le dossier");

define("_AM_SYSTEM_FILEMANAGER_RESTORE_ERROR_FILE_EXISTS","Erreur : Fichier inexistant");
define("_AM_SYSTEM_FILEMANAGER_RESTORE_ERROR_FILE_DELETE","Erreur : Fichier non supprimé");
define("_AM_SYSTEM_FILEMANAGER_RESTORE_ERROR_FILE_RENAME","Erreur : Fichier non renommé");
define("_AM_SYSTEM_FILEMANAGER_BACK","Retour");
define("_AM_SYSTEM_FILEMANAGER_DELETE","Supprimer");
define("_AM_SYSTEM_FILEMANAGER_ERROR","Erreur");
define("_AM_SYSTEM_FILEMANAGER_EDIT","Edition de :");
define("_AM_SYSTEM_FILEMANAGER_EMPTY_FILE","Fichier vide");
define("_AM_SYSTEM_FILEMANAGER_DELDIR_NOTOK","Erreur : En supprimant ce dossier");
define("_AM_SYSTEM_FILEMANAGER_DELDIR_OK","Dossier supprimé");

// Message
define("_AM_SYSTEM_FILEMANAGER_UPLOAD_FILE","Fichier transféré avec succès");
define("_AM_SYSTEM_FILEMANAGER_EXTRACT_FILE","Extration du fichier avec succès");
define("_AM_SYSTEM_FILEMANAGER_EXTRACT_ERROR","Le fichier n'a pas pu être extrait");
define("_AM_SYSTEM_FILEMANAGER_DELETE_FILE","Fichier supprimé avec succès");
define("_AM_SYSTEM_FILEMANAGER_DIR_SUCCESS","Dossier créé avec succès");
define("_AM_SYSTEM_FILEMANAGER_DIR_ERROR","Le dossier n'a pas pu être créé");
define("_AM_SYSTEM_FILEMANAGER_DIR_RYSDEL","Êtes-vous sûr de vouloir supprimer ce dossier ?");
define("_AM_SYSTEM_FILEMANAGER_FILE_SUCCESS","Fichier créé avec succès");
define("_AM_SYSTEM_FILEMANAGER_SUREDEL", "Êtes-vous sûr de vouloir supprimer le fichier \"%s\" ?");
define("_AM_SYSTEM_FILEMANAGER_DIR_SUREDEL", "Êtes-vous sûr de vouloir supprimer le dossier \"%s\" ?<br />Attention : tous les dossiers et fichiers contenus dans celui-ci seront aussi supprimés");

/**
 * @translation     Communauté Francophone des Utilisateurs de Xoops
 * @specification   _LANGCODE: fr
 * @specification   _CHARSET: UTF-8 sans Bom
 *
 * @version         $Id $
 Modification et mise à jour par Cesag le 14 Mai 2012.
**/
?>
