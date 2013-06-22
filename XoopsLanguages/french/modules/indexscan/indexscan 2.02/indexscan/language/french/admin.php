<?php
//%%%%%%		French language file for index scan / admin 		%%%%%
define("_AM_INDEXSCAN_NOW","Scanner pour repérer les fichiers index absents");
define("_AM_INDEXSCAN_CREATE","Créer un fichier index où ils sont absents");
define("_AM_INDEXSCAN_HELP","Aide");
define("_AM_INDEXSCAN_CONFIG","Configuration");
define("_AM_INDEXSCAN_HEADER","Ces dossiers ne possèdent pas de fichiers index");
define("_AM_INDEXSCAN_NOTFOUND","Fichiers index <strong>non</strong> trouvés<br />\n");
define("_AM_INDEXSCAN_FOUNDMISSING","<strong>Absence</strong> de  fichiers index trouvée\n");
define("_AM_INDEXSCAN_MAKINGHEADER","Création des fichiers index.html absents");
define("_AM_INDEXSCAN_CREATED","index.html créé");
define("_AM_INDEXSCAN_CREATEDINDEXFILES","Fichier index créé");

// Added in 1.01
define("_AM_INDEXSCAN_CHECKFORFILES","<tr class='header txtcenter'><h2>Recherche de fichiers avec injection d'IFRAME</h2><p class='txtcenter'>Bien que toutes les utilisations d'frame ne consiste pas en injections.<br />Vérifiez le code dans les fichiers trouvés avant de les supprimer.</p></tr><hr>");
define("_AM_INDEXSCAN_UNABLETOREADFILE","Impossible d'ouvrir le fichier");
define("_AM_INDEXSCAN_INFECTED","!! Mot IFRAME non trouvé !!");
define("_AM_INDEXSCAN_CLEAN","OK");
define("_AM_INDEXSCAN_INJECTIONSCAN","Scanner des infections d'iframe");

//added in 2.00
define("_AM_INDEXSCAN_SCANNING4MISS","<br />Recherche des fichiers index absents.<br />Attendez SVP.");
define("_AM_INDEXSCAN_CREATINGMISS","<br />Création des fichiers index manquants.<br />Attendez SVP.");
define("_AM_INDEXSCAN_SCANNING4IFRAME","<br />Recherche d'Iframe et code javascript inséré.<br />Attendez SVP.");
define("_AM_INDEXSCAN_FINISDINJECTIONS"," fichier(s) contenant le mot 'iframe' ou 'fromCharCode' indiquant la présence d'Iframe(s) ou de javascript(s) inséré(s).<br />Vérifiez si c'est bien le cas en cliquant sur la barre rouge pour voir le code source, avant de prendre toute action corrective.<br /><br />Nombre total de fichiers scannés :");

// Added in 2.01
define("_AM_INDEXSCAN_NOTVERIFY"," : Le checksum de ce fichier est différent de l'original !");
define("_AM_INDEXSCAN_VERIFIED","Le checksum pour le fichier admin/index.php est vérifié.");

// Added in 2.03
define("_AM_INDEXSCAN_CHECKILLEGALFILES","Vérifiez les fichiers"); 
define("_AM_INDEXSCAN_SCANNING4ILLEGALFILES","Analyse des fichiers web"); 
define("_AM_INDEXSCAN_MAYBEOK","Semble être OK"); 
define("_AM_INDEXSCAN_NOTINXOOPSINSTALL","Fichier(s) non 'Xoops'"); 
define("_AM_INDEXSCAN_FINISDILLEGAL"," fichiers trouvés qui ne sont pas de Xoops. Total des fichiers scannés : "); 
define("_AM_INDEXSCAN_ILLEGAL_DESC","Le(s) fichier(s) trouvé(s) ne semble(nt) pas être des fichiers Xoops, vérification réalisée par rapport au fichier checkfile.txt dans le dossier 'admin', et par rapport aux types de fichiers définis comme autorisés dans la configuration.<br/>Cela peut être des fichiers temporaires indésirables, thumbs.db ou des fichiers d'infos.<br/>S'ils ne sont pas ou plus nécessaires, vous pouvez les ajouter automatiquement dans configuration, ils seront supprimés lors de la prochaine analyse."); 
define("_AM_INDEXSCAN_REALLYDELETE","Etes-vous sûr ?, fichier(s) effacé(s): "); 
define("_AM_INDEXSCAN_CREATEZIP","Créer une archive zip à télécharger"); 
define("_AM_INDEXSCAN_CREATINGZIP","Création d'une sauvegarde au format zip de la totalité des dossiers<br/> y compris les fichiers index.<br/>"); 
define("_AM_INDEXSCAN_BACKEDUPDELETEDFROMBACKUP","Supprimer les fichiers dans le répertoire de sauvegarde, sauf les fichiers index.html"); 
define("_AM_INDEXSCAN_BACKEDUP2","Dossier(s) sauvegardé(s).: "); 
define("_AM_INDEXSCAN_DOWNLOADZIP","Télécharger les fichiers index archivés au format zip"); 
define("_AM_INDEXSCAN_CREATINGZIPFORDOWNLOAD","Création d'une fichier au format zip à télécharger"); 
define("_AM_INDEXSCAN_CREATEDINDEXINBACKUP","Création d'un fichier index dans le répertoire des sauvegardes"); 
define("_AM_INDEXSCAN_CLEANUPDONE","Nettoyage réalisé ... !"); 
define("_AM_INDEXSCAN_FILESARECOPIED"," Fichiers ont été copiés dans le répertoire de sauvegarde"); 
define("_AM_INDEXSCAN_FILESDELETED"," Fichiers ont été effacés du répertoire de sauvegarde"); 
define("_AM_INDEXSCAN_FILESCREATED"," Fichiers index.html ont été créés dans le répertoire de sauvegarde");

/**
 * @translation     AFUX (Association Francophone des Utilisateurs de Xoops) (http://www.afux.org/)
 * @specification   _LANGCODE: fr
 * @specification   _CHARSET: UTF-8
 *
 * @Translator      Kris (kris@afux.org)
 *
 * @version         $Id
**/
?>