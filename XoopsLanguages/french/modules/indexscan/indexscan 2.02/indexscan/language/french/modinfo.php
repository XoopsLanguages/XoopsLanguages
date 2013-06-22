<?php

// English language file for indexscan

define("_MI_INDEXSCAN_MAIN","Accueil");
define("_MI_INDEXSCAN_SCANNOW","Scanner maintenant");
define("_MI_INDEXSCAN_CREATEINDEX","Création de fichier 'index.htlm'");
define("_MI_INDEXSCAN_HELP","Aide");
define("_MI_INDEXSCAN_SETTINGS","Préférences");
define("_MI_INDEXSCAN_MODULE_NAME","Indexscan");
define("_MI_INDEXSCAN_MODULE_DESC","Scanne votre Xoops pour repérer les fichiers<br /> index absents. Si n'existe pas, le module peut les créer.");
define("_MI_INDEXSCAN_EXEP1","Dossier à ne pas scanner 01");
define("_MI_INDEXSCAN_EXEP1_DESC","S'il y a des dossiers que vous ne désirez pas scanner (Par exemple : <strong>uploads</strong>)<br /> vous devez inscrire son nom ici");
define("_MI_INDEXSCAN_EXEP2","Dossier à ne pas scanner 02");
define("_MI_INDEXSCAN_EXEP2_DESC","");
define("_MI_INDEXSCAN_EXEP3","Dossier à ne pas scanner 03");
define("_MI_INDEXSCAN_EXEP3_DESC","");
define("_MI_INDEXSCAN_EXEP4","Dossier à ne pas scanner 04");
define("_MI_INDEXSCAN_EXEP4_DESC","");

//Added in 2.02
define("_MI_INDEXSCAN_ROOTORSUB","Racine ou sous-répertoire d'installation");
define("_MI_INDEXSCAN_ROOTORSUB_DESC","Inscrire ici à partir d'où vous voulez démarrer le scan<br/>'../../../' si votre site Web est comme ceci 'www.myspace.com/mainfile,php'<br/>'../../../../' ou s'il est comme cela www.websted.dk/htdocs/mainfile.com");

//Added in 2.03 
define("_MI_INDEXSCAN_ILLEGALFILETYPES","Sauter ces types de fichiers."); 
define("_MI_INDEXSCAN_ILLEGALFILETYPES_DESC","Ajoutez les fichiers que vous souhaitez sauter dans 'fichiers analysés'.<br/>Ces fichiers sont considérés comme 'sains'<br/>si ils sont également répertoriés dans le fichier 'admin/filecheck.txt'."); 
define("_MI_INDEXSCAN_FROMBACKUP","Créer une archive au format zip"); 
define("_MI_INDEXSCAN_FROMBACKUP_DESC","Créer une archive au format zip de la même structure de dossiers que votre ftp pour folder2backup.<br/>Le fichier zip ne contient que les dossiers où les fichiers 'index' étaient absent.<br/>Le nom de l'archive est le nom du dossier dans votre répertoire 'folder2backup', par exemple 'testing'.<br/>Vous pouvez supprimer 'testing', ce dossier est uniquement un exemple.");
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