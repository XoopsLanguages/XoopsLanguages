<?php
/**
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * _LANGCODE    fr
 * _CHARSET     iso-8859-1
 * @version     $Id: filemanager.php 1635 2011-11-26 17:10:47Z kris_fr $
 */
 
//Nav
define("_AM_SYSTEM_FILEMANAGER_NAV_MANAGER","Gestion des fichiers");
define("_AM_SYSTEM_FILEMANAGER_NAV_MAIN","Gestionnaire de fichiers");

//Tips
define('_AM_SYSTEM_FILEMANAGER_NAV_TIPS',"
<ul>
<li>Modifier les permissions des fichiers, leur contenu, ou simplement supprimer un fichier inutilis� depuis l'administration de XOOPS.</li>
</ul>
");

// Main
define("_AM_SYSTEM_FILEMANAGER_DIRECTORY","Dossiers");
define("_AM_SYSTEM_FILEMANAGER_FILES","Fichiers");
define("_AM_SYSTEM_FILEMANAGER_GENERATE","Surcharge r�g�n�r�e");
define("_AM_SYSTEM_FILEMANAGER_SELECT_THEME","S�lectionnez le th�me");
define("_AM_SYSTEM_FILEMANAGER_FORCE_GENERATED","Forcer la r�g�n�ration de la surcharge");
define("_AM_SYSTEM_FILEMANAGER_NAV_FILE_GENERATED","Fichiers r�g�n�r�s");
define("_AM_SYSTEM_FILEMANAGER_NOT_CREATED","Aucun fichier cr��");
define("_AM_SYSTEM_FILEMANAGER_HOME","Racine");
define("_AM_SYSTEM_FILEMANAGER_SAVE","Enregistrer");
define("_AM_SYSTEM_FILEMANAGER_CANCEL","Annuler");
define("_AM_SYSTEM_FILEMANAGER_RESTORE","Restaurer");
define("_AM_SYSTEM_FILEMANAGER_REFRESH","Rafra�chir");
define("_AM_SYSTEM_FILEMANAGER_UPLOAD","T�l�charger un fichier");
define("_AM_SYSTEM_FILEMANAGER_UPLOAD_CHOOSE","S�lectionez un fichier � t�l�charger");
define("_AM_SYSTEM_FILEMANAGER_ADDDIR","Ajouter un dossier");
define("_AM_SYSTEM_FILEMANAGER_ADDDIR_NAME","Entrez le nom du dossier");
define("_AM_SYSTEM_FILEMANAGER_ADDFILE","Ajouter un nouveau fichier");
define("_AM_SYSTEM_FILEMANAGER_DELDIR","Supprimer le dossier");

define("_AM_SYSTEM_FILEMANAGER_RESTORE_ERROR_FILE_EXISTS","Erreur : Fichier inexistant");
define("_AM_SYSTEM_FILEMANAGER_RESTORE_ERROR_FILE_DELETE","Erreur : Fichier non supprim�");
define("_AM_SYSTEM_FILEMANAGER_RESTORE_ERROR_FILE_RENAME","Erreur : Fichier non renomm�");
define("_AM_SYSTEM_FILEMANAGER_BACK","Retour");
define("_AM_SYSTEM_FILEMANAGER_DELETE","Supprimer");
define("_AM_SYSTEM_FILEMANAGER_ERROR","Erreur");
define("_AM_SYSTEM_FILEMANAGER_EDIT","Edition de :");
define("_AM_SYSTEM_FILEMANAGER_EMPTY_FILE","Fichier vide");
define("_AM_SYSTEM_FILEMANAGER_DELDIR_NOTOK","Erreur : En supprimant ce dossier");
define("_AM_SYSTEM_FILEMANAGER_DELDIR_OK","Dossier supprim�");

// Message
define("_AM_SYSTEM_FILEMANAGER_UPLOAD_FILE","Fichier transf�r� avec succ�s");
define("_AM_SYSTEM_FILEMANAGER_EXTRACT_FILE","Extration du fichier avec succ�s");
define("_AM_SYSTEM_FILEMANAGER_EXTRACT_ERROR","Le fichier n'a pas pu �tre extrait");
define("_AM_SYSTEM_FILEMANAGER_DELETE_FILE","Fichier supprim� avec succ�s");
define("_AM_SYSTEM_FILEMANAGER_DIR_SUCCESS","Dossier cr�� avec succ�s");
define("_AM_SYSTEM_FILEMANAGER_DIR_ERROR","Le dossier n'a pas pu �tre cr��");
define("_AM_SYSTEM_FILEMANAGER_DIR_RYSDEL","�tes-vous s�r de vouloir supprimer ce dossier ?");
define("_AM_SYSTEM_FILEMANAGER_FILE_SUCCESS","Fichier cr�� avec succ�s");
define("_AM_SYSTEM_FILEMANAGER_SUREDEL", "�tes-vous s�r de vouloir supprimer le fichier \"%s\" ?");
define("_AM_SYSTEM_FILEMANAGER_DIR_SUREDEL", "�tes-vous s�r de vouloir supprimer le dossier \"%s\" ?<br />Attention : tous les dossiers et fichiers contenus dans celui-ci seront aussi supprim�s");

/**
 * @translation     Communaut� Francophone des Utilisateurs de Xoops
 * @specification   _LANGCODE: fr
 * @specification   _CHARSET: iso-8859-1
 *
 * @version         $Id $
 Modification et mise � jour par Cesag le 14 Mai 2012.
**/
?>