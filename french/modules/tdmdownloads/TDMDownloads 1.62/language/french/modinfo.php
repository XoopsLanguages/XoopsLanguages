<?php
/**
 * TDMDownload
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright   Gregory Mage (Aka Mage)
 * @license     GNU GPL 2 (http://www.gnu.org/licenses/old-licenses/gpl-2.0.html)
 * @author      Gregory Mage (Aka Mage)
 */

// Nom du module
define("_MI_TDMDOWNLOADS_NAME","TDMDownloads");

// Description du module
define("_MI_TDMDOWNLOADS_DESC","Crée une section de téléchargements où les utilisateurs peuvent télécharger, soumettre et noter différents fichiers.");

// Bloc
define("_MI_TDMDOWNLOADS_BNAME1","Téléchargements récents");
define("_MI_TDMDOWNLOADS_BNAMEDSC1","Affichage des téléchargements récents");
define("_MI_TDMDOWNLOADS_BNAME2","Haut de page des téléchargements");
define("_MI_TDMDOWNLOADS_BNAMEDSC2","Afficher le haut de la page des téléchargements");
define("_MI_TDMDOWNLOADS_BNAME3","Téléchargements les mieux notés");
define("_MI_TDMDOWNLOADS_BNAMEDSC3","Afficher les téléchargements les mieux notés");
define("_MI_TDMDOWNLOADS_BNAME4","Téléchargements aléatoires");
define("_MI_TDMDOWNLOADS_BNAMEDSC4","Afficher aléatoirement les fichiers téléchargés");
define("_MI_TDMDOWNLOADS_BNAME5","Recherche de téléchargements");
define("_MI_TDMDOWNLOADS_BNAMEDSC5","Formulaire de recherche sur les téléchargements");

// Sous menu
define("_MI_TDMDOWNLOADS_SMNAME1","Proposer");
define("_MI_TDMDOWNLOADS_SMNAME2","Liste des fichiers");

// Menu administration
define("_MI_TDMDOWNLOADS_ADMENU1","Index");
define("_MI_TDMDOWNLOADS_ADMENU2","Gestion des catégories");
define("_MI_TDMDOWNLOADS_ADMENU3","Gestion des téléchargements");
define("_MI_TDMDOWNLOADS_ADMENU4","Téléchargements brisés");
define("_MI_TDMDOWNLOADS_ADMENU5","Téléchargements modifiés");
define("_MI_TDMDOWNLOADS_ADMENU6","Gestion des champs supplémentaires");
define("_MI_TDMDOWNLOADS_ADMENU7","Importer");
define("_MI_TDMDOWNLOADS_ADMENU8","Autorisations");
define("_MI_TDMDOWNLOADS_ADMENU9","À propos");

// Préférences
define("_MI_TDMDOWNLOADS_PREFERENCE_BREAK_GENERAL","Général");
define("_MI_TDMDOWNLOADS_POPULAR","Nombre de visites pour les éléments téléchargeables, à marquer comme populaire.");
define("_MI_TDMDOWNLOADS_AUTO_SUMMARY","Résumé automatique ?");
define("_MI_TDMDOWNLOADS_SHOW_UPDATED","Montrer les images « mises à jour » et  les « nouvelles » images ?");
define("_MI_TDMDOWNLOADS_USESHOTS","Utiliser le logo ?");
define("_MI_TDMDOWNLOADS_IMGFLOAT","Image flottante");
define("_MI_TDMDOWNLOADS_IMGFLOAT_LEFT","Gauche");
define("_MI_TDMDOWNLOADS_IMGFLOAT_RIGHT","Droite");
define("_MI_TDMDOWNLOADS_SHOTWIDTH","Hauteur du logo");
define("_MI_TDMDOWNLOADS_PLATEFORM","Plateformes");
define("_MI_TDMDOWNLOADS_PLATEFORM_DSC","Entrez les plateformes autorisés, séparées par un |");
define("_MI_TDMDOWNLOADS_USETELLAFRIEND","Utiliser le module « Tellafriend » avec le lien dites-le à un ami ?");
define("_MI_TDMDOWNLOADS_USETELLAFRIENDDSC","Vous devez installer le module « Tellafriend » afin d'utiliser cette option");
define("_MI_TDMDOWNLOADS_USETAG","Utiliser le module « TAG » pour générer des étiquettes");
define("_MI_TDMDOWNLOADS_USETAGDSC","Vous devez installer le module « TAG » afin d'utiliser cette option");
define("_MI_TDMDOWNLOADS_FORM_OPTIONS","Éditeur");
define("_MI_TDMDOWNLOADS_PREFERENCE_BREAK_USER","Utilisateur");
define("_MI_TDMDOWNLOADS_PERPAGE","Nombre d'éléments par page");
define("_MI_TDMDOWNLOADS_NBDOWCOL","Cette option vous permet de choisir le nombre de colonnes des téléchargements");
define("_MI_TDMDOWNLOADS_NEWDLS","Nombre de nouveaux fichiers dans la Page d'accueil");
define("_MI_TDMDOWNLOADS_TOPORDER","Comment afficher les éléments sur la page d'index ?");
define("_MI_TDMDOWNLOADS_TOPORDER1","Date (DESC)");
define("_MI_TDMDOWNLOADS_TOPORDER2","Date (ASC)");
define("_MI_TDMDOWNLOADS_TOPORDER3","Visites (DESC)");
define("_MI_TDMDOWNLOADS_TOPORDER4","Visites (ASC)");
define("_MI_TDMDOWNLOADS_TOPORDER5","Votes (DESC)");
define("_MI_TDMDOWNLOADS_TOPORDER6","Votes (ASC)");
define("_MI_TDMDOWNLOADS_TOPORDER7","Titre (DESC)");
define("_MI_TDMDOWNLOADS_TOPORDER8","Titre (ASC)");
define("_MI_TDMDOWNLOADS_PERPAGELISTE","Téléchargements affichés sur la liste des fichiers");
define("_MI_TDMDOWNLOADS_SEARCHORDER","Comment afficher les éléments dans la liste de fichiers ?");
define("_MI_TDMDOWNLOADS_SUBCATPARENT","Nombre de sous-catégories à afficher dans la catégorie principale");
define("_MI_TDMDOWNLOADS_NBCATCOL","Cette option vous permet de choisir le nombre de colonnes des catégories");
define("_MI_TDMDOWNLOADS_BLDATE","Afficher les téléchargements récents et les catégories en page d'accueil (résumé) ?");
define("_MI_TDMDOWNLOADS_BLPOP","Afficher les téléchargements populaires et les catégories en page d'accueil (résumé) ?");
define("_MI_TDMDOWNLOADS_BLRATING","Afficher les téléchargements  les mieux notés et les catégories en page d'accueil (résumé) ?");
define("_MI_TDMDOWNLOADS_NBBL","Nombre de téléchargements à afficher dans le résumé ?");
define("_MI_TDMDOWNLOADS_LONGBL","Longueur de titre dans le résumé");
define("_MI_TDMDOWNLOADS_BOOKMARK","Marquer");
define("_MI_TDMDOWNLOADS_BOOKMARK_DSC","Afficher/masquer les icônes de marquage");
define("_MI_TDMDOWNLOADS_SOCIAL","Réseaux sociaux");
define("_MI_TDMDOWNLOADS_SOCIAL_DSC","Afficher/masquer les icônes de réseau social");
define("_MI_TDMDOWNLOADS_DOWNLOADFLOAT","Page de téléchargement flottante");
define("_MI_TDMDOWNLOADS_DOWNLOADFLOAT_DSC","<ul> <li>De gauche à droite : Montrez la description des téléchargements du côté gauche et la colonne d'informations du côté droit </li> <li> De droite à gauche : Montrez la description des téléchargements du côté droit et la colonne d'informations du côté gauche </li> </ul>");
define("_MI_TDMDOWNLOADS_DOWNLOADFLOAT_LTR","De gauche à droite");
define("_MI_TDMDOWNLOADS_DOWNLOADFLOAT_RTL","De droite à gauche");
define("_MI_TDMDOWNLOADS_PREFERENCE_BREAK_ADMIN","Administration");
define("_MI_TDMDOWNLOADS_PERPAGEADMIN","Nombre d'éléments par page dans l'administration");
define("_MI_TDMDOWNLOADS_PREFERENCE_BREAK_DOWNLOADS","Téléchargements");
define("_MI_TDMDOWNLOADS_PERMISSIONDOWNLOAD","Sélectionnez le type de permission pour les « Permissions des téléchargements »");
define("_MI_TDMDOWNLOADS_PERMISSIONDOWNLOAD1","Permissions par catégorie");
define("_MI_TDMDOWNLOADS_PERMISSIONDOWNLOAD2","Permissions par fichier");
define("_MI_TDMDOWNLOADS_DOWNLOAD_NAME","Renommer les fichiers téléchargés ?");
define("_MI_TDMDOWNLOADS_DOWNLOAD_NAMEDSC","Si l'option est Non et que vous avez téléchargé un fichier avec un nom qui existe déjà sur le serveur, elle sera remplacée.");
define("_MI_TDMDOWNLOADS_DOWNLOAD_PREFIX","Préfixe des fichiers téléchargés");
define("_MI_TDMDOWNLOADS_DOWNLOAD_PREFIXDSC","Valide uniquement si l'option pour renommer les fichiers téléchargés est Oui");
define("_MI_TDMDOWNLOADS_MAXUPLOAD_SIZE","Taille maximum des fichiers de téléchargement");
define("_MI_TDMDOWNLOADS_MIMETYPE","Types mime autorisés ");
define("_MI_TDMDOWNLOADS_MIMETYPE_DSC","Entrer les types mime autorisés, séparés par un |");
define("_MI_TDMDOWNLOADS_CHECKHOST","Interdire le téléchargement direct par des liens externes (leeching) ?");
define("_MI_TDMDOWNLOADS_REFERERS","Ces sites peuvent vous lier directement vers vos fichiers. Séparer par un  |");
define("_MI_TDMDOWNLOADS_DOWNLIMIT","Limite de téléchargement");
define("_MI_TDMDOWNLOADS_DOWNLIMITDSC","Utiliser l'option de limite de téléchargement");
define("_MI_TDMDOWNLOADS_LIMITGLOBAL","Nombre de téléchargements en 24 heures");
define("_MI_TDMDOWNLOADS_LIMITGLOBALDSC","Nombre de téléchargements pour chaque utilisateur dans les 24 heures. Sélectionnez 0 pour illimités.");
define("_MI_TDMDOWNLOADS_LIMITLID","Nombre de téléchargements de chaque fichier en 24 heures");
define("_MI_TDMDOWNLOADS_LIMITLIDDSC","Nombre de téléchargements de chaque fichier en 24 heures par chaque utilisateur. Sélectionnez 0 pour illimités.");
define("_MI_TDMDOWNLOADS_PREFERENCE_BREAK_PAYPAL","PayPal");
define("_MI_TDMDOWNLOADS_USEPAYPAL","Utilisez le bouton « Faire un don » de Paypal ");
define("_MI_TDMDOWNLOADS_CURRENCYPAYPAL","Monnaie du don");
define("_MI_TDMDOWNLOADS_IMAGEPAYPAL","Image pour le bouton « Faire un don »");
define("_MI_TDMDOWNLOADS_IMAGEPAYPALDSC","Veuillez entrer l'adresse de l'image");
define("_MI_TDMDOWNLOADS_PREFERENCE_BREAK_RSS","RSS");
define("_MI_TDMDOWNLOADS_PERPAGERSS","Nombre de téléchargements à afficher dans les flux RSS");
define("_MI_TDMDOWNLOADS_PERPAGERSSDSCC","Nombre de téléchargements affichés sur les pages RSS");
define("_MI_TDMDOWNLOADS_TIMECACHERSS","Temps du cache RSS");
define("_MI_TDMDOWNLOADS_TIMECACHERSSDSC","Temps de cache pour les pages RSS en minutes");
define("_MI_TDMDOWNLOADS_LOGORSS","Logo du site pour les pages RSS");
define("_MI_TDMDOWNLOADS_PREFERENCE_BREAK_COMNOTI","Commentaires et avis");

// Notifications
define("_MI_TDMDOWNLOADS_GLOBAL_NOTIFY","Global");
define("_MI_TDMDOWNLOADS_GLOBAL_NOTIFYDSC","Options de notification globales pour les téléchargements .");
define("_MI_TDMDOWNLOADS_CATEGORY_NOTIFY","Catégorie");
define("_MI_TDMDOWNLOADS_CATEGORY_NOTIFYDSC","Options de notification qui s'appliquent à la catégorie du fichier actuel.");
define("_MI_TDMDOWNLOADS_FILE_NOTIFY","Fichier");
define("_MI_TDMDOWNLOADS_FILE_NOTIFYDSC","Options de notification qui s'applique au fichier en cours.");
define("_MI_TDMDOWNLOADS_GLOBAL_NEWCATEGORY_NOTIFY","Nouvelle catégorie");
define("_MI_TDMDOWNLOADS_GLOBAL_NEWCATEGORY_NOTIFYCAP","M'avertir quand une nouvelle catégorie de fichiers est créée.");
define("_MI_TDMDOWNLOADS_GLOBAL_NEWCATEGORY_NOTIFYDSC","Recevoir une notification lorsqu'une nouvelle catégorie de fichiers est créée.");
define("_MI_TDMDOWNLOADS_GLOBAL_NEWCATEGORY_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} notification automatique : nouvelle catégorie de fichier");
define("_MI_TDMDOWNLOADS_GLOBAL_FILEMODIFY_NOTIFY","Modifier le fichier demandé");
define("_MI_TDMDOWNLOADS_GLOBAL_FILEMODIFY_NOTIFYCAP","Me notifier lors d'une demande de modification de fichier.");
define("_MI_TDMDOWNLOADS_GLOBAL_FILEMODIFY_NOTIFYDSC","Recevoir une notification lorsqu'une demande de modification de fichier est soumise.");
define("_MI_TDMDOWNLOADS_GLOBAL_FILEMODIFY_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} notification automatique : demande de Modification de fichier");
define("_MI_TDMDOWNLOADS_GLOBAL_FILEBROKEN_NOTIFY","Fichier brisé soumis");
define("_MI_TDMDOWNLOADS_GLOBAL_FILEBROKEN_NOTIFYCAP","Me notifier lors d'un rapport de fichier brisé.");
define("_MI_TDMDOWNLOADS_GLOBAL_FILEBROKEN_NOTIFYDSC","Recevoir une notification quand un rapport de fichier brisé est soumis.");
define("_MI_TDMDOWNLOADS_GLOBAL_FILEBROKEN_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} notification automatique : signalement de fichier brisé");
define("_MI_TDMDOWNLOADS_GLOBAL_FILESUBMIT_NOTIFY","Fichier soumis");
define("_MI_TDMDOWNLOADS_GLOBAL_FILESUBMIT_NOTIFYCAP","Me prévenir lorsqu'un nouveau fichier est soumis (en attente d'approbation).");
define("_MI_TDMDOWNLOADS_GLOBAL_FILESUBMIT_NOTIFYDSC","Recevoir une notification lorsqu'un nouveau fichier est soumis (en attente d'approbation).");
define("_MI_TDMDOWNLOADS_GLOBAL_FILESUBMIT_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} notification automatique : nouveau fichier soumis");
define("_MI_TDMDOWNLOADS_GLOBAL_NEWFILE_NOTIFY","Nouveau fichier");
define("_MI_TDMDOWNLOADS_GLOBAL_NEWFILE_NOTIFYCAP","M'avertir quand un nouveau fichier est affiché.");
define("_MI_TDMDOWNLOADS_GLOBAL_NEWFILE_NOTIFYDSC","Recevoir une notification lorsqu'un nouveau fichier est affiché.");
define("_MI_TDMDOWNLOADS_GLOBAL_NEWFILE_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} notification automatique : nouveau fichier");
define("_MI_TDMDOWNLOADS_CATEGORY_FILESUBMIT_NOTIFY","Fichier soumis");
define("_MI_TDMDOWNLOADS_CATEGORY_FILESUBMIT_NOTIFYCAP","Me prévenir lorsqu'un nouveau fichier est soumis (en attente d'approbation) dans la catégorie actuelle.");
define("_MI_TDMDOWNLOADS_CATEGORY_FILESUBMIT_NOTIFYDSC","Recevoir une notification lorsqu'un nouveau fichier est soumis (en attente d'approbation) dans la catégorie actuelle.");
define("_MI_TDMDOWNLOADS_CATEGORY_FILESUBMIT_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} notification automatique : nouveau fichier présenté dans la catégorie");
define("_MI_TDMDOWNLOADS_CATEGORY_NEWFILE_NOTIFY","Nouveau fichier");
define("_MI_TDMDOWNLOADS_CATEGORY_NEWFILE_NOTIFYCAP","M'avertir quand un nouveau fichier est affecté à la catégorie actuelle.");
define("_MI_TDMDOWNLOADS_CATEGORY_NEWFILE_NOTIFYDSC","Recevoir une notification lorsqu'un nouveau fichier est affecté à la catégorie actuelle.");
define("_MI_TDMDOWNLOADS_CATEGORY_NEWFILE_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} Nouveau fichier dans la catégorie");
define("_MI_TDMDOWNLOADS_FILE_APPROVE_NOTIFY","Fichier approuvé");
define("_MI_TDMDOWNLOADS_FILE_APPROVE_NOTIFYCAP","M'avertir quand ce fichier est approuvé.");
define("_MI_TDMDOWNLOADS_FILE_APPROVE_NOTIFYDSC","Recevoir une notification lorsque ce fichier est approuvé.");
define("_MI_TDMDOWNLOADS_FILE_APPROVE_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} notification automatique : fichier approuvé");

//1.62
define("_MI_TDMDOWNLOADS_SHOW_LATEST_FILES","Afficher les fichiers les plus récents");
define("_MI_TDMDOWNLOADS_SHOW_LATEST_FILES_DSC","Cela montrera les fichiers les plus récents, côté utilisateur");
// Traduction par Cesag pour frxoops.org le 10 Juillet 2012
?>