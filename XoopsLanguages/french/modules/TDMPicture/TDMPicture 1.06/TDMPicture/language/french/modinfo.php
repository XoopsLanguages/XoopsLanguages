<?php
/**
 * ****************************************************************************
 *  - TDMPicture By TDM   - TEAM DEV MODULE FOR XOOPS
 *  - Licence PRO Copyright (c)  (http://www.tdmxoops.net)
 *
 * Cette licence, contient des limitations!!!
 *
 * 1. Vous devez poss&#233;der une permission d'ex&#233;cuter le logiciel, pour n'importe quel usage.
 * 2. Vous ne devez pas l' &#233;tudier,
 * 3. Vous ne devez pas le redistribuer ni en faire des copies,
 * 4. Vous n'avez pas la libert&#233; de l'am&#233;liorer et de rendre publiques les modifications
 *
 * @license     TDMFR PRO license
 * @author		TDMFR ; TEAM DEV MODULE 
 *
 * ****************************************************************************
 */

//Admin menu
define("_MI_TDMPICTURE_ADMENUINDEX","Index");
define("_MI_TDMPICTURE_ADMENUCAT","Gestion des Cat&#233;gories");
define("_MI_TDMPICTURE_ADMENUFILE","Gestion des Images");
define("_MI_TDMPICTURE_ADMENUPERMISSIONS","Gestion des Permissions");
define("_MI_TDMPICTURE_ADMENUABOUT","About");
define("_MI_TDMPICTURE_ADMENUPREF","Pr&#233;rences");
//1.07
define("_MI_TDMPICTURE_ADMENUIMPORT","Import");
define("_MI_TDMPICTURE_ADMENUBATCH","Batch");


//Preferences
define("_MI_TDMPICTURE_UPLOAD_PATH","Répertoire upload: TDMPicture");
define("_MI_TDMPICTURE_UPLOAD_THUMB","Répertoire upload miniature: TDMPicture");
define("_MI_TDMPICTURE_UPLOAD_DESC","Le premier et dernier caractère doit être «/».<br />
L'autorisation de ce répertoire doit etre de 777 ou 707 dans unix.");
define("_MI_TDMPICTURE_MYALBUM_PATH","Répertoire upload: Myalbum");
define("_MI_TDMPICTURE_MYALBUM_THUMB","Répertoire upload miniature: Myalbum");
define("_MI_TDMPICTURE_EXTGALLERY_PATH","Répertoire upload: Extgallery");
define("_MI_TDMPICTURE_EXTGALLERY_THUMB","Répertoire upload miniature: Extgallery");

define("_MI_TDMPICTURE_MIMEMAX","Taille maxi des fichiers pour l'upload");
define("_MI_TDMPICTURE_MIMETYPE","Extension autoriser s&#233;parer par | ");
define("_MI_TDMPICTURE_EDITOR","Editeur");
define("_MI_TDMPICTURE_FAVOURITE","Nombre de point pour être Favoris");
define("_MI_TDMPICTURE_UPMAX","Nombre maximum d'upload simultan&#233;s");
define("_MI_TDMPICTURE_LAST","Nombre maximum de nouveaux fichier ? afficher sur l'index");
define("_MI_TDMPICTURE_WIDTH","Largeur maximum de l'image dans le detail");
define("_MI_TDMPICTURE_HEIGTH","Hauteur maximum de l'image dans le detail");
define("_MI_TDMPICTURE_THUMB_WIDTH","Miniature : Largeur maximum de l'image");
define("_MI_TDMPICTURE_THUMB_HEIGTH","Miniature : Hauteur maximum de l'image");
define("_MI_TDMPICTURE_THUMB_QUALITY","Miniature : Qualit&#233; de l'image");
define("_MI_TDMPICTURE_PAGE","Nombre maximum de fichier par page ?");
define("_MI_TDMPICTURE_DESCRIPTION","META : Description des pages sans information, pour le reste des pages cela seras automatique");
define("_MI_TDMPICTURE_KEYWORDS","META : Mots clef des pages sans information, s&#233;parer les mots par un espace, pour le reste des pages cela seras automatique");
define("_MI_TDMPICTURE_SLIDE_WIDTH","Slideshow : Largeur du slide");
define("_MI_TDMPICTURE_SLIDE_HEIGTH","Slideshow : Hauteur du slide");
define("_MI_TDMPICTURE_CAT_WIDTH","Catégorie : Largeur de l'image");
define("_MI_TDMPICTURE_CAT_HEIGTH","Catégorie : Hauteur de l'image");
define("_MI_TDMPICTURE_DISPLAY","Visualisation par defaut");
//block
define("_AM_TDMPICTURE_BLOCK_DATE","Fichier récents");
define("_AM_TDMPICTURE_BLOCK_HITS","Fichier les plus affichés");
define("_AM_TDMPICTURE_BLOCK_COUNTS","Fichier populaire");
define("_AM_TDMPICTURE_BLOCK_DL","Fichiers les plus téléchargés");
define("_AM_TDMPICTURE_BLOCK_COMMENTS","Fichiers les plus commentés");
define("_AM_TDMPICTURE_BLOCK_RANDS","Fichier aléatoire");
define("_AM_TDMPICTURE_ALL","tous les fichiers");
//version 1.3
//define("_MI_TDMPICTURE_FULL_WIDTH","Largeur maximum de l'image réel");
//define("_MI_TDMPICTURE_FULL_HEIGTH","Hauteur maximum de l'image réel");
//define("_MI_TDMPICTURE_JAVA_WIDTH","Largeur de l'applet java (upload)");
//define("_MI_TDMPICTURE_JAVA_HEIGTH","Hauteur de l'applet java (upload)");
//define("_MI_TDMPICTURE_CAT_CEL","Cat&#233;gorie : Nombre de colonne");
//define("_MI_TDMPICTURE_CAT_DISPLAY","Cat&#233;gorie : Style des catégories");
//define("_MI_TDMPICTURE_CAT_DISPLAY_TEXT","texte");
//define("_MI_TDMPICTURE_CAT_DISPLAY_IMG","Image");
//define("_MI_TDMPICTURE_CAT_SOUSCEL","Cat&#233;gorie : Nombre de sous-catégorie");
define("_MI_TDMPICTURE_VIEWMYALBUM","Voir mon album");
define("_MI_TDMPICTURE_VIEWALBUM","Liste des albums");
define("_MI_TDMPICTURE_UPLOAD","Uploader");
define("_MI_TDMPICTURE_SOCIAL","Afficher social bar?");
define("_MI_TDMPICTURE_RSS","Afficher RSS?");
define("_MI_TDMPICTURE_PDF","Afficher PDF?");
//define("_MI_TDMPICTURE_THUMB_DECO","Miniature : Décoration de l'image");

//version 1.5
//define("_MI_TDMPICTURE_CAT_CEL","Affichage catégorie : Nombre de colonne");
define("_MI_TDMPICTURE_CAT_DISPLAY","Catégorie: Afficher les sous-catégorie");
//define("_MI_TDMPICTURE_CAT_DISPLAY_BLOCK","Block");
define("_MI_TDMPICTURE_CAT_SELECT","Catégorie: Afficher les Select");
//define("_MI_TDMPICTURE_CAT_DISPLAY_ALL","Les deux");
//define("_MI_TDMPICTURE_CAT_DISPLAY_SUBIMG","Catégorie et sous-catégorie (avec image)");
//define("_MI_TDMPICTURE_CAT_DISPLAY_IMG","Image");
//define("_MI_TDMPICTURE_CAT_DISPLAY_NONE","Non");
//define("_MI_TDMPICTURE_CAT_SOUSCEL","Affichage catégorie : Nombre de sous-catégorie");

define("_MI_TDMPICTURE_THUMB_STYLE","Miniature : centrage thumb");
define("_MI_TDMPICTURE_THUMB_STYLE_CENTER","Centrer (carrer sur centre largeur");
define("_MI_TDMPICTURE_THUMB_STYLE_HW","Limite sur largeur*Hauteur");
define("_MI_TDMPICTURE_THUMB_STYLE_H","Limite sur Hauteur");
define("_MI_TDMPICTURE_THUMB_STYLE_W","Limite sur largeur");

define("_MI_TDMPICTURE_CAT","Proposer album");
define("_MI_TDMPICTURE_SIZE","Taille de redimention");
define("_MI_TDMPICTURE_SIZEDESC","Taille autoriser sous la forme (largeurxhauteur) s&#233;parer par | ");
?>