<?php
/**
 * $Id: admin.php
 * Module: XoopsTube
 * Language: french
 */

define("_AM_XTUBE_WARNINSTALL1", "ATTENTION : Le répertoire %s existe sur votre serveur. <br />Merci de le supprimer pour des raisons de sécurité.");
define("_AM_XTUBE_WARNINSTALL2", "ATTENTION : Le ficher %s existe sur votre serveur. <br />Merci de le supprimer pour des raisons de sécurité.");
define("_AM_XTUBE_WARNINSTALL3", "ATTENTION : Le dossier %s n'existe pas sur votre serveur. <br />Sa présence est requise pour le bon fonctionnement du module.");

define("_AM_XTUBE_MODULE_NAME", "XoopsTube");

define("_AM_XTUBE_BMODIFY", "Modifer");
define("_AM_XTUBE_BDELETE", "Effacer");
define("_AM_XTUBE_BCREATE", "Créer");
define("_AM_XTUBE_BADD", "Ajouter");
define("_AM_XTUBE_BAPPROVE", "Approuver");
define("_AM_XTUBE_BIGNORE", "Ignorer");
define("_AM_XTUBE_BCANCEL", "Annuler");
define("_AM_XTUBE_BSAVE", "Sauvgarder");
define("_AM_XTUBE_BRESET", "Recommencer");
define("_AM_XTUBE_BMOVE", "Déplacer la Vidéo");
define("_AM_XTUBE_BUPLOAD", "Envoyer");
define("_AM_XTUBE_BDELETEIMAGE", "Effacer l'image sélectionnée");
define("_AM_XTUBE_BRETURN", "Retour d'où vous venez!");
define("_AM_XTUBE_DBERROR", "Erreur d'accès à la base de données");
// Other Options
define("_AM_XTUBE_TEXTOPTIONS", "Options de texte:");
define("_AM_XTUBE_DISABLEHTML", " Désactiver les tags HTML");
define("_AM_XTUBE_DISABLESMILEY", " Désactiver les smilies");
define("_AM_XTUBE_DISABLEXCODE", " Désactiver les codes Xoops");
define("_AM_XTUBE_DISABLEIMAGES", " Désactiver les images");
define("_AM_XTUBE_DISABLEBREAK", " Utiliser la conversion fin de ligne de XOOPS?");
define("_AM_XTUBE_UPLOADFILE", "Vidéo ajoutée avec succès");
define("_AM_XTUBE_NOMENUITEMS", "Aucun item de menu dans le menu");
// Admin Bread crumb
define("_AM_XTUBE_PREFS", "Préferences");
define("_AM_XTUBE_BUPDATE", "Mise à jour du module");
define("_AM_XTUBE_BINDEX", "Index");
define("_AM_XTUBE_BPERMISSIONS", "Permissions");
// define( "_AM_XTUBE_BLOCKADMIN", "Blocs" );
define("_AM_XTUBE_BLOCKADMIN", "Blocs");
define("_AM_XTUBE_GOMODULE", "Aller au Module");
define("_AM_XTUBE_ABOUT", "A propos");
// Admin Summary
define("_AM_XTUBE_SCATEGORY", "Catégories: ");
define("_AM_XTUBE_SFILES", "Vidéos: ");
define("_AM_XTUBE_SNEWFILESVAL", "Proposées: ");
define("_AM_XTUBE_SMODREQUEST", "Modifiées: ");
define("_AM_XTUBE_SREVIEWS", "Revisées: ");

// Admin Main Menu
define("_AM_XTUBE_MCATEGORY", "Gestion des catégories");
define("_AM_XTUBE_MVIDEOS", "Gestion des vidéos");
define("_AM_XTUBE_MLISTBROKEN", "Liste des vidéos brisées");
define("_AM_XTUBE_MLISTPINGTIMES", "Temps de ping des vidéos");
define("_AM_XTUBE_INDEXPAGE", "Gestion de la Page Index");
define("_AM_XTUBE_MCOMMENTS", "Gestion de commentaires");
define("_AM_XTUBE_MVOTEDATA", "Données de Votes");
define("_AM_XTUBE_MUPLOADS", "Envoi d'images");

// Catgeory defines
define("_AM_XTUBE_CCATEGORY_CREATENEW", "Créer une nouvelle catégorie");
define("_AM_XTUBE_CCATEGORY_MODIFY", "Modifier une catégorie");
define("_AM_XTUBE_CCATEGORY_MOVE", "Déplacer une catégorie");
define("_AM_XTUBE_CCATEGORY_MODIFY_TITLE", "Titre de la catégorie :");
define("_AM_XTUBE_CCATEGORY_MODIFY_FAILED", "Impossible de déplacer la catégorie : La catégorie ne peut être déplacé");
define("_AM_XTUBE_CCATEGORY_MODIFY_FAILEDT", "Impossible de déplacer la Vidéo : Impossible de trouver la catégorie");
define("_AM_XTUBE_CCATEGORY_MODIFY_MOVED", "Vidéo déplacée");
define("_AM_XTUBE_CCATEGORY_CREATED", "Nouvelle catégorie créée et Base de données est mise à jour avec succès");
define("_AM_XTUBE_CCATEGORY_MODIFIED", "Catégorie sélectionnée modifiée et Base de donnée mise à jour");
define("_AM_XTUBE_CCATEGORY_DELETED", "Catégorie sélectionnée effacée et Base de donnée mise à jour");
define("_AM_XTUBE_CCATEGORY_AREUSURE", "ATTENTION: Êtes vous sur(e) de vouloir effacer cette catégorie, y compris ses vidéos et ses commentaires ?");
define("_AM_XTUBE_CCATEGORY_NOEXISTS", "Vous devez créer une catégorie avant d'ajouter une vidéo");
define("_AM_XTUBE_FCATEGORY_GROUPPROMPT", "Permissions d'accès<div style='padding-top: 8px;'><span style='font-weight: normal;'>Sélectionner le(s) groupe(s) d'utilisateurs qui aur(ont)a accès à cette catégorie.</span></div>");
define("_AM_XTUBE_FCATEGORY_SUBGROUPPROMPT", "Permissions de soumettre :<div style='padding-top: 8px;'><span style='font-weight: normal;'>Sélectionner le(s) groupe(s) d'utilisateurs qui aur(ont)a la possibilité de Soumettre des vidéos.</span></div>");
define("_AM_XTUBE_FCATEGORY_MODGROUPPROMPT", "Permissions de modérer :<div style='padding-top: 8px;'><span style='font-weight: normal;'>Sélectionner le(s) groupe(s) d'utilisateurs qui aur(ont)a la possibilité de modérer cette catégorie.</span></div>");

define("_AM_XTUBE_FCATEGORY_TITLE", "Titre de la catégorie :");
define("_AM_XTUBE_FCATEGORY_WEIGHT", "Ordre de la catégorie :");
define("_AM_XTUBE_FCATEGORY_SUBCATEGORY", "Définir comme sous-catégorie :");
define("_AM_XTUBE_FCATEGORY_CIMAGE", "Séléctionner une image pour la catégorie :");
define("_AM_XTUBE_FCATEGORY_DESCRIPTION", "Description de la catégorie :");
define("_AM_XTUBE_FCATEGORY_SUMMARY", "Sommaire de la catégorie :");
/**
 * Index page Defines
 */
define("_AM_XTUBE_IPAGE_UPDATED", "Page d'index modifiée et Base de données mise à jour avec succès!");
define("_AM_XTUBE_IPAGE_INFORMATION", "Informations de la page Index");
define("_AM_XTUBE_IPAGE_MODIFY", "Modifer la page Index");
define("_AM_XTUBE_IPAGE_CIMAGE", "Sélectionner un image pour la page:");
define("_AM_XTUBE_IPAGE_CTITLE", "Titre de la page :");
define("_AM_XTUBE_IPAGE_CHEADING", "En-tête de page :");
define("_AM_XTUBE_IPAGE_CHEADINGA", "Alignement de l'en-tête de page:");
define("_AM_XTUBE_IPAGE_CFOOTER", "Pied de page :");
define("_AM_XTUBE_IPAGE_CFOOTERA", "Alignement du pied de page:");
define("_AM_XTUBE_IPAGE_CLEFT", "Alignement à Gauche");
define("_AM_XTUBE_IPAGE_CCENTER", "Alignement au Centre");
define("_AM_XTUBE_IPAGE_CRIGHT", "Alignement à Droite");
/**
 * Permissions defines
 */
define("_AM_XTUBE_PERM_MANAGEMENT", "Gestion des permissions");
define("_AM_XTUBE_PERM_PERMSNOTE", "<div><b>NOTE :</b> Même si vous attribuez des permissions, les groupes n'accèderont pas forcement aux catégories si vous ne leur avez pas donné l'accès au module. Allez sur <b>Administration du Système > Groupes</b>, choisir les droits d'accès au module et groupes correspondants.</div>");
define("_AM_XTUBE_PERM_CPERMISSIONS", "Permissions des catégories");
define("_AM_XTUBE_PERM_CSELECTPERMISSIONS", "Sélectionner les catégories auxquelles chaque groupe aura accès");
define("_AM_XTUBE_PERM_CNOCATEGORY", "Aucune permission appliquée : Il n'y a pas encore de catégories");
define("_AM_XTUBE_PERM_FPERMISSIONS", "Permissions des Vidéos");
define("_AM_XTUBE_PERM_FNOFILES", "Aucune permission appliquée : Il n'y a pas encore de Vidéos crées");
define("_AM_XTUBE_PERM_FSELECTPERMISSIONS", "Sélectionner les Vidéos dont les groupes sont autorisés à visualiser");
/**
 * Upload defines
 */
define("_AM_XTUBE_VIDEO_IMAGEUPLOAD", "Image envoyée sur le serveur avec succès");
define("_AM_XTUBE_VIDEO_NOIMAGEEXIST", "ERREUR : Aucune image sélectionnée pour l'envoi. Essayez encore !");
define("_AM_XTUBE_VIDEO_IMAGEEXIST", "L'image existe déjà !");
define("_AM_XTUBE_VIDEO_FILEDELETED", "l'image a été effacée.");
define("_AM_XTUBE_VIDEO_FILEERRORDELETE", "Erreur d'effacement de la vidéo : Vidéo introuvable sur le serveur.");
define("_AM_XTUBE_VIDEO_NOFILEERROR", "Erreur d'effacement de l'image : Aucune image sélectionnée pour l'effacement.");
define("_AM_XTUBE_VIDEO_DELETEFILE", "ATTENTION: Etes-vous sur(e) de vouloir effacer cette image ?");
define("_AM_XTUBE_VIDEO_IMAGEINFO", "Statut du serveur");
define("_AM_XTUBE_VIDEO_SPHPINI", "<b>Informations récupérées du fichier PHP.ini de votre serveur</b>");
define("_AM_XTUBE_VIDEO_SAFEMODESTATUS", "Statut en mode de sauvegarde : ");
define("_AM_XTUBE_VIDEO_REGISTERGLOBALS", "Inscription globale : ");
define("_AM_XTUBE_VIDEO_SERVERUPLOADSTATUS", "Statut du serveur d'envoi : ");
define("_AM_XTUBE_VIDEO_MAXUPLOADSIZE", "Taille maximum d'un envoi autorisée : ");
define("_AM_XTUBE_VIDEO_MAXPOSTSIZE", "Taille maximum d'envois autorisée : ");
define("_AM_XTUBE_VIDEO_SAFEMODEPROBLEMS", " (Ceci peut poser des problèmes)");
define("_AM_XTUBE_VIDEO_GDLIBSTATUS", "Support de la librairie GD : ");
define("_AM_XTUBE_VIDEO_GDLIBVERSION", "Version de la librairie GD : ");
define("_AM_XTUBE_VIDEO_GDON", "<b>Actif</b> (possibilité de Miniatures)");
define("_AM_XTUBE_VIDEO_GDOFF", "<b>Inactif</b> (pas de possibilité de Miniatures)");
define("_AM_XTUBE_VIDEO_OFF", "<b>Arrêt</b>");
define("_AM_XTUBE_VIDEO_ON", "<b>Marche</b>");
define("_AM_XTUBE_VIDEO_CATIMAGE", "Images de la catégories");
define("_AM_XTUBE_VIDEO_SCREENSHOTS", "Copies d'écran");
define("_AM_XTUBE_VIDEO_MAINIMAGEDIR", "Image principale");
define("_AM_XTUBE_VIDEO_FCATIMAGE", "Chemin des images des catégories");
define("_AM_XTUBE_VIDEO_FSCREENSHOTS", "Chemin des copies d'écran");
define("_AM_XTUBE_VIDEO_FMAINIMAGEDIR", "Chemin principal des images");
define("_AM_XTUBE_VIDEO_FUPLOADIMAGETO", "Envoyer une Image: ");
define("_AM_XTUBE_VIDEO_FUPLOADPATH", "Chemin des envois : ");
define("_AM_XTUBE_VIDEO_FUPLOADURL", "Lien de l'envoi : ");
define("_AM_XTUBE_VIDEO_FOLDERSELECTION", "Sélectionner la destination de l'envoi :");
define("_AM_XTUBE_VIDEO_FSHOWSELECTEDIMAGE", "Afficher l'image sélectionnée :");
define("_AM_XTUBE_VIDEO_FUPLOADIMAGE", "Envoyer une nouvelle image pour la destination sélectionnée :");

// Main Index defines
define("_AM_XTUBE_MINDEX_VIDEOSUMMARY", "Sommaire du module");
define("_AM_XTUBE_MINDEX_PUBLISHEDVIDEO", "Vidéos publiées :");
define("_AM_XTUBE_MINDEX_AUTOPUBLISHEDVIDEO", "Vidéos auto-publiées :");
define("_AM_XTUBE_MINDEX_AUTOEXPIRE", "Vidéos avec auto-expiration");
define("_AM_XTUBE_MINDEX_EXPIRED", "Vidéos expirées :");
define("_AM_XTUBE_MINDEX_OFFLINEVIDEO", "Vidéos Hors-ligne:");
define("_AM_XTUBE_MINDEX_ID", "ID");
define("_AM_XTUBE_MINDEX_TITLE", "Titre de la Vidéo");
define("_AM_XTUBE_MINDEX_POSTER", "Proposée par");
define("_AM_XTUBE_MINDEX_ONLINE", "Etat");
define("_AM_XTUBE_MINDEX_ONLINESTATUS", "Staut En-ligne");
define("_AM_XTUBE_MINDEX_PUBLISH", "Date de publication");
define("_AM_XTUBE_MINDEX_PUBLISHED", "Publiée");
define("_AM_XTUBE_MINDEX_EXPIRE", "Date d'expiration");
define("_AM_XTUBE_MINDEX_NOTSET", "Date non réglée");
define("_AM_XTUBE_MINDEX_SUBMITTED", "Date de soumission");

define("_AM_XTUBE_MINDEX_ACTION", "Action");
define("_AM_XTUBE_MINDEX_NOVIDEOSFOUND", "INFORMATION: Aucune Vidéo avec ce critère à afficher");
define("_AM_XTUBE_MINDEX_PAGE", "<b>Page:<b> ");
define('_AM_XTUBE_MINDEX_PAGEINFOTXT', '<ul><li>Accueil XoopsTube.</li><li>Vous pouvez facilement modifier le logo, les textes de l\'entête et du pied de page, de l\'index afin d\'avoir un look plus aproprié</li></ul><br /><br />Note : Le logo choisi sera utilisé pour toutes les pages du module.');
define("_AM_XTUBE_MINDEX_RESPONSE", "Temps de Réponse");
// Submitted Links
define("_AM_XTUBE_SUB_SUBMITTEDFILES", "Vidéos soumises");
define("_AM_XTUBE_SUB_FILESWAITINGINFO", "Information sur les Vidéos en attente");
define("_AM_XTUBE_SUB_FILESWAITINGVALIDATION", "Vidéos en attente de validation : ");
define("_AM_XTUBE_SUB_APPROVEWAITINGFILE", "<b>Approuver</b> les nouvelles vidéos sans validation.");
define("_AM_XTUBE_SUB_EDITWAITINGFILE", "<b>Modifer</b> les nouvelles vidéos puis les valider.");
define("_AM_XTUBE_SUB_DELETEWAITINGFILE", "<b>Effacer</b> les nouvelles vidéos.");
define("_AM_XTUBE_SUB_NOFILESWAITING", "Aucune Vidéo avec ce critère à afficher");
define("_AM_XTUBE_SUB_NEWFILECREATED", "Nouvelle Vidéo ajoutée et base de données mise à jour");
// Vote Information
define("_AM_XTUBE_VOTE_RATINGINFOMATION", "Information de vote");
define("_AM_XTUBE_VOTE_TOTALVOTES", "Total des votes : ");
define("_AM_XTUBE_VOTE_REGUSERVOTES", "Votes des utilisateurs enregistrés : %s");
define("_AM_XTUBE_VOTE_ANONUSERVOTES", "Votes des utilisateurs anonymes : %s");
define("_AM_XTUBE_VOTE_USER", "Utilisateurs");
define("_AM_XTUBE_VOTE_IP", "Adresse IP");
define("_AM_XTUBE_VOTE_DATE", "Soumis");
define("_AM_XTUBE_VOTE_RATING", "Estimation");
define("_AM_XTUBE_VOTE_NOREGVOTES", "Pas de vote d'utilisateur enregistré");
define("_AM_XTUBE_VOTE_NOUNREGVOTES", "Pas de votes d'utilisateurs anonymes");
define("_AM_XTUBE_VOTE_VOTEDELETED", "Données de votes effacées.");
define("_AM_XTUBE_VOTE_ID", "ID");
define("_AM_XTUBE_VOTE_FILETITLE", "Titre de la Vidéo");
define("_AM_XTUBE_VOTE_DISPLAYVOTES", "Données de vote");
define("_AM_XTUBE_VOTE_NOVOTES", "Pas de votes d'utilisateurs à afficher");
define("_AM_XTUBE_VOTE_DELETE", "Pas de votes d'utilisateurs à afficher");
define("_AM_XTUBE_VOTE_DELETEDSC", "<b>Effacement</b> du vote de la base de donnée");
define("_AM_XTUBE_VOTEDELETED", "Vote sélectionné effacé et base de donnée mise à jour");

define("_AM_XTUBE_VOTE_USERAVG", "Estimation moyenne d'utilisateurs");
define("_AM_XTUBE_VOTE_TOTALRATE", "Total de Votes");
define("_AM_XTUBE_VOTE_MAXRATE", "Votes Max");
define("_AM_XTUBE_VOTE_MINRATE", "Votes Min");
define("_AM_XTUBE_VOTE_MOSTVOTEDTITLE", "La plus votée");
define("_AM_XTUBE_VOTE_LEASTVOTEDTITLE", "La moins votée");
define("_AM_XTUBE_VOTE_MOSTVOTERSUID", "Votants les plus actifs");
define("_AM_XTUBE_VOTE_REGISTERED", "Votes des utilisateurs enregistrés");
define("_AM_XTUBE_VOTE_NONREGISTERED", "Votes des utilisateurs anonymes");
// Modifications
define("_AM_XTUBE_MOD_TOTMODREQUESTS", "Total des demandes de modification : ");
define("_AM_XTUBE_MOD_MODREQUESTS", "Vidéos modifiées");
define("_AM_XTUBE_MOD_MODREQUESTSINFO", "Information des Vidéos modifiées");
define("_AM_XTUBE_MOD_MODID", "ID");
define("_AM_XTUBE_MOD_MODTITLE", "Titre");
define("_AM_XTUBE_MOD_MODPOSTER", "Proposition d'origine par : ");
define("_AM_XTUBE_MOD_DATE", "Soumis");
define("_AM_XTUBE_MOD_NOMODREQUEST", "Il n'y a aucune demande de modification avec ce critère");
define("_AM_XTUBE_MOD_TITLE", "Titre de la Vidéo: ");
define("_AM_XTUBE_MOD_LID", "ID de la Vidéo: ");
define("_AM_XTUBE_MOD_CID", "Catégorie : ");
define("_AM_XTUBE_MOD_URL", "Lien de la Vidéo : ");
define("_AM_XTUBE_MOD_PUBLISHER", "Auteur : ");
define("_AM_XTUBE_MOD_SCREENSHOT", "Capture d'écran: ");
define("_AM_XTUBE_MOD_DESCRIPTION", "Description : ");
define("_AM_XTUBE_MOD_MODIFYSUBMITTER", "Proposée par : ");
define("_AM_XTUBE_MOD_MODIFYSUBMIT", "Proposée par");
define("_AM_XTUBE_MOD_PROPOSED", "Détails de la Vidéo proposée");
define("_AM_XTUBE_MOD_ORIGINAL", "Détails originaux de la Vidéo");
define("_AM_XTUBE_MOD_REQDELETED", "Modification demandée effacée de la base de donnée");
define("_AM_XTUBE_MOD_REQUPDATED", "Vidéo sélectionnée modifiée et Base de donnée mise à jour.");
define('_AM_XTUBE_MOD_VIEW', 'Voir');
// Video management
define("_AM_XTUBE_VIDEO_ID", "ID de la Vidéo : ");
define("_AM_XTUBE_VIDEO_IP", "Adresse IP de la proposition : ");
define("_AM_XTUBE_VIDEO_ALLOWEDAMIME", "<div style='padding-top: 4px; padding-bottom: 4px;'><b>Extension de la Vidéo autorisée par l'administrateur</b> :</div>");
define("_AM_XTUBE_VIDEO_MODIFYFILE", "Modifier les informations de la Vidéo");
define("_AM_XTUBE_VIDEO_CREATENEWFILE", "Créer une nouvelle Vidéo");
define("_AM_XTUBE_VIDEO_TITLE", "Titre de la Vidéo : ");
define("_AM_XTUBE_VIDEO_DLVIDID", "Id-Code de la Vidéo : ");
define("_AM_XTUBE_VIDEO_DLVIDID_NOTE", "
<small><b>YouTube:</b> http://www.youtube.com/watch?v=<font color=#FF0000>IsOtq-qCqZ4</font><br />
<b>MetaCafe:</b> http://www.metacafe.com/watch/<font color=#FF0000>191543/sperm_whale_encounters_underwater_robot</font>/<br />
<b>SPIKE/ifilm:</b> http://www.ifilm.com/video/<font color=#FF0000>2718605</font><br />
<b>Photobucket:</b> http://i39.photobucket.com/albums/<font color=#FF0000>e168/vailtom/th_BigSquid</font>.jpg<br />
<b>Google Video:</b> http://video.google.com/videoplay?docid=<font color=#FF0000>4761076111111865377</font>&q=rov&total=913&start=...<br />
<b>MySpace TV:</b> http://vids.myspace.com/index.cfm?fuseaction=vids.individual&videoid=<font color=#FF0000>13171141</font><br />
<b>DailyMotion:</b> http://www.dailymotion.com/video/<font color=#FF0000>x40bhg</font>_blondesecretary_fun<br />
<b>Blip.tv </b>embed code<b>:</b> http://blip.tv/play/<font color=#FF0000>Abe6EwA</font> ...<br />
<b>ClipFish:</b> http://www.clipfish.de/player.php?videoid=<font color=#FF0000>MTg1NTYyfDM1Ng</font>%3D%3D<br />
<b>LiveLeak:</b> http://www.liveleak.com/view?i=<font color=#FF0000>a59_1205566630</font><br />
<b>Maktoob:</b> file=http://<font color=#FF0000>m003.maktoob.com/files/23/42/95531c25b690e48a3d69966b6a33b8d2/video/131102</font>.flv (from embed-code)<br />
<b>Veoh:</b> http://www.veoh.com/videos/<font color=#FF0000>v15069875yApCz7r3</font>?jsonParams=...<br />
<b>Vimeo:</b> http://www.vimeo.com/<font color=#FF0000>2246499</font><br />
<b>Megavideo:</b> http://www.megavideo.com/?v=<font color=#FF0000>J6YSRE0T</font><br />
<b>Viddler:</b> http://www.viddler.com/player/<font color=#FF0000>d32d2b94</font>/ (voir le code incorporé)<br />
<b>XoopsTube: </b><font color=#FF0000>Prendre en charge à partir du menu de sélection ci-dessus</font></small>");
define("_AM_XTUBE_VIDEO_PICURL", "Lien de l'image : ");
define("_AM_XTUBE_VIDEO_PICURLNOTE", "<small>Lien de l'image quand Google Video, MySpace TV, DailyMotion, Blip.tv, ClipFish, LiveLeak, Veoh, Vimeo, Megavideo, Viddler ou Maktoob est la source.</small>");
define("_AM_XTUBE_VIDEO_DESCRIPTION", "Description : ");
define("_AM_XTUBE_VIDEO_CATEGORY", "Catégorie : ");
define("_AM_XTUBE_VIDEO_FILESSTATUS", " Mettre la Vidéo Hors-ligne ?<br /><br /><span style='font-weight: normal;'>La vidéo ne sera plus visible par les utilisateurs.</span>");
define("_AM_XTUBE_VIDEO_SETASUPDATED", " Mettre la Vidéo en statut Mise à Jour ?<br /><br /><span style='font-weight: normal;'>La vidéo affichera l'icône MIS A JOUR</span>");
define("_AM_XTUBE_VIDEO_SHOTIMAGE", "Capture d'écran : ");
define("_AM_XTUBE_VIDEO_DISCUSSINFORUM", "Ajouter une discussion dans les forums ?");
define("_AM_XTUBE_VIDEO_PUBLISHDATE", "Date de publication :");
define("_AM_XTUBE_VIDEO_EXPIREDATE", "Date d'expiration :");
define("_AM_XTUBE_VIDEO_CLEARPUBLISHDATE", "<br /><br />Retirer la date de publication :");
define("_AM_XTUBE_VIDEO_CLEAREXPIREDATE", "<br /><br />Retirer la date d'expiration :");
define("_AM_XTUBE_VIDEO_PUBLISHDATESET", " Date de publication : ");
define("_AM_XTUBE_VIDEO_SETDATETIMEPUBLISH", " Ajouter la date/heure de publication");
define("_AM_XTUBE_VIDEO_SETDATETIMEEXPIRE", " Ajouter la date/heure d'expiration");
define("_AM_XTUBE_VIDEO_SETPUBLISHDATE", "<b>Date de publication : </b>");
define("_AM_XTUBE_VIDEO_SETNEWPUBLISHDATE", "<b>Mettre une nouvelle date de publication : </b><br />Publiée:");
define("_AM_XTUBE_VIDEO_SETPUBDATESETS", "<b>Mettre la date de publication :</b><br />Publié à cette date :");
define("_AM_XTUBE_VIDEO_EXPIREDATESET", " Date d'expiration : ");
define("_AM_XTUBE_VIDEO_SETEXPIREDATE", "<b>Mettre la date d'expiration : </b>");
define("_AM_XTUBE_VIDEO_DELEDITMESS", "Effacer le rapport des Vidéos brisées ?<br /><br /><span style='font-weight: normal;'>Si vous choisissez <b>OUI</b> le rapport sera automatiquement effacé et vous confirmez que la vidéo fontionne à nouveau.</span>");
define("_AM_XTUBE_VIDEO_MUSTBEVALID", "La capture d'écran doit être une image valide placée dans le répertoire (ex. shot.gif). Laissez le champ vide si il n'y a pas de capture d'écran.");
define("_AM_XTUBE_VIDEO_EDITAPPROVE", "Approuver la Vidéo :");
define("_AM_XTUBE_VIDEO_NEWFILEUPLOAD", "Nouvelle vidéo ajoutée et base donnée mise à jour avec succès");
define("_AM_XTUBE_VIDEO_FILEMODIFIEDUPDATE", "Vidéo sélectionnée modifiée et base donnée mise à jour avec succès");
define("_AM_XTUBE_VIDEO_REALLYDELETEDTHIS", "Voulez-vous vraiment supprimer la vidéo sélectionnée ?");
define("_AM_XTUBE_VIDEO_FILEWASDELETED", "La vidéo %s a été retirée de la base de données avec succès !");
define("_AM_XTUBE_VIDEO_FILEAPPROVED", "Vidéo approuvée et base données mise à jour avec succès");
define("_AM_XTUBE_VIDEO_CREATENEWSSTORY", "<b>Soumettre la vidéo comme nouvelle ?</b>");
define("_AM_XTUBE_VIDEO_SUBMITNEWS", "Soumettre la vidéo comme un article dans les nouvelles ?");
define("_AM_XTUBE_VIDEO_NEWSCATEGORY", "Sélectionner la catégorie de nouvelles à soumettre :");
define("_AM_XTUBE_VIDEO_NEWSTITLE", "Titre de la nouvelle :<div style='padding-top: 4px; padding-bottom: 4px;'><span style='font-weight: normal;'>Laisser le champs vide pour utiliser le nom de la Vidéo comme titre</span></div>");
define("_AM_XTUBE_VIDEO_PUBLISHER", "Auteur : ");

/**
 * Broken links defines
 */
define("_AM_XTUBE_SBROKENSUBMIT", "Vidéos brisées: ");
define("_AM_XTUBE_BROKEN_FILE", "Rapport des vidéos brisées");
define("_AM_XTUBE_BROKEN_FILEIGNORED", "Rapport de vidéo brisée ignoré et base de donnée mise à jour avec succès !");
define("_AM_XTUBE_BROKEN_NOWACK", "Le statut à été constaté, modifié et la base de données mise à jour avec succès !");
define("_AM_XTUBE_BROKEN_NOWCON", "Statut modifié et base de données mise à jour");
define("_AM_XTUBE_BROKEN_REPORTINFO", "Informations sur le rapport des vidéos brisées");
define("_AM_XTUBE_BROKEN_REPORTSNO", "Rapport des vidéos brisées en attente :");
define("_AM_XTUBE_BROKEN_IGNOREDESC", "<b>Ignorer</b> le rapport et l'effacer seulement");
define("_AM_XTUBE_BROKEN_DELETEDESC", "<b>Effacer</b> le rapport et la vidéo brisée.");
define("_AM_XTUBE_BROKEN_EDITDESC", "<b>Modifier</b> la vidéo pour corriger le problème.");
define("_AM_XTUBE_BROKEN_ACKDESC", "<b>Connu</b> Placer le rapport comme connu.");
define("_AM_XTUBE_BROKEN_CONFIRMDESC", "<b>Confirmé</b> Paramétrer le rapport comme connu.");
define("_AM_XTUBE_BROKEN_ACKNOWLEDGED", "Connu");
define("_AM_XTUBE_BROKEN_DCONFIRMED", "Confirmé");

define("_AM_XTUBE_BROKEN_ID", "ID");
define("_AM_XTUBE_BROKEN_TITLE", "Titre");
define("_AM_XTUBE_BROKEN_REPORTER", "Rapporteur");
define("_AM_XTUBE_BROKEN_FILESUBMITTER", "Proposée par");
define("_AM_XTUBE_BROKEN_DATESUBMITTED", "Date de soumission");
define("_AM_XTUBE_BROKEN_ACTION", "Action");
define("_AM_XTUBE_BROKEN_NOFILEMATCH", "Aucun rapport d'une vidéo brisée avec ce critère");
define("_AM_XTUBE_BROKENFILEDELETED", "Vidéo retirée de la base de données et le rapport a été effacé");
define("_AM_XTUBE_BROKEN_VIDSOURCE", "Source de la vidéo");
/**
 * About defines
 */
define("_AM_XTUBE_BY", "par");
// block defines
define("_AM_XTUBE_BADMIN", "Administration des blocs");
define("_AM_XTUBE_BLKDESC", "Description");
define("_AM_XTUBE_TITLE", "Titre");
define("_AM_XTUBE_SIDE", "Alignement");
define("_AM_XTUBE_WEIGHT", "Position");
define("_AM_XTUBE_VISIBLE", "Visible");
define("_AM_XTUBE_ACTION", "Action");
define("_AM_XTUBE_SBLEFT", "Gauche");
define("_AM_XTUBE_SBRIGHT", "Droite");
define("_AM_XTUBE_CBLEFT", "Centre gauche");
define("_AM_XTUBE_CBRIGHT", "Centre droit");
define("_AM_XTUBE_CBCENTER", "Centre milieu");
define("_AM_XTUBE_ACTIVERIGHTS", "Droits Actifs");
define("_AM_XTUBE_ACCESSRIGHTS", "Droits d'accès");
// image admin icon
define("_AM_XTUBE_ICO_EDIT", "Modifier cette vidéo");
define("_AM_XTUBE_ICO_DELETE", "Effacer cette vidéo");
define("_AM_XTUBE_ICO_RESOURCE", "Modifier cette ressource");

define("_AM_XTUBE_ICO_ONLINE", "En ligne");
define("_AM_XTUBE_ICO_OFFLINE", "Hors ligne");
define("_AM_XTUBE_ICO_APPROVED", "Approuvée");
define("_AM_XTUBE_ICO_NOTAPPROVED", "Non approuvée");

define("_AM_XTUBE_ICO_VIDEO", "Lien relatif à la vidéo");
define("_AM_XTUBE_ICO_URL", "Ajouter un lien relatif");
define("_AM_XTUBE_ICO_ADD", "Ajouter");
define("_AM_XTUBE_ICO_APPROVE", "Approuver");
define("_AM_XTUBE_ICO_STATS", "États");
define("_AM_XTUBE_ICO_VIEW", "Voir cette vidéo");

define("_AM_XTUBE_ICO_IGNORE", "Ignorer");
define("_AM_XTUBE_ICO_ACK", "Rapport de vidéo brisée connu");
define("_AM_XTUBE_ICO_REPORT", "Rapport de vidéo brisée connu ?");
define("_AM_XTUBE_ICO_CONFIRM", "Rapport de vidéo brisée confirmé");
define("_AM_XTUBE_ICO_CONBROKEN", "Confirmer le rapport de vidéo brisée connu ?");
define("_AM_XTUBE_ICO_RES", "Modifier les sources/liens de cette Vidéo");
define("_AM_XTUBE_MOD_URLRATING", "Cote du contenu internet");
// Alternate category
define("_AM_XTUBE_ALTCAT_CREATEF", "Ajouter une catégorie alternative");
define("_AM_XTUBE_MALTCAT", "Gestion des catégories alternatives");
define("_AM_XTUBE_ALTCAT_MODIFYF", "Gestion des catégories alternatives");
define("_AM_XTUBE_ALTCAT_INFOTEXT", "<ul><li>Les catégories alternatives peuvent-être ajoutées ou effacées facilement via ce formulaire.</li></ul>");
define('_AM_XTUBE_ALTCAT_CREATED', 'La catégorie alternative a été bien créée');

define("_AM_XTUBE_MRESOURCES", "Gestion de ressources");
define("_AM_XTUBE_RES_CREATED", "Gestion de ressources");
define("_AM_XTUBE_RES_ID", "ID");
define("_AM_XTUBE_RES_DESC", "Description");
define("_AM_XTUBE_RES_NAME", "Nom de la ressource");
define("_AM_XTUBE_RES_TYPE", "Type de la ressource");
define("_AM_XTUBE_RES_USER", "Utilisateur");
define("_AM_XTUBE_RES_CREATEF", "Ajouter une ressource");
define("_AM_XTUBE_RES_MODIFYF", "Modifier une ressource");
define("_AM_XTUBE_RES_NAMEF", "Nom de la ressource :");
define("_AM_XTUBE_RES_DESCF", "Description de la ressource:");
define("_AM_XTUBE_RES_URLF", "Lien de la ressource :");
define("_AM_XTUBE_RES_ITEMIDF", "Item ID de la ressource :");
define("_AM_XTUBE_RES_INFOTEXT", "<ul><li>De nouvelles ressources peuvent-être ajoutées, modifiées ou effacées facilement via ce formulaire.</li>
	<li>Liste de toutes les ressources liées à une vidéo</li>
	<li>Modifier le nom et la description de la ressource</li></ul>
	");
define("_AM_XTUBE_LISTBROKEN", "Affiche les vidéos qui sont peut-être brisées. NB : Ces résultats peuvent ne pas être exacts et doivent être pris comme une indication approximative.<br /><br />Veuillez vérifier que la vidéo existe bien avant d'entreprendre toute action.<br /><br />");
define("_AM_XTUBE_PINGTIMES", "Affiche les premières estimations du temps de réponse de chaque vidéo.<br /><br />NB : Ces résultats peuvent ne pas être exacts et doivent être pris comme une indication approximative.<br /><br />");

define("_AM_XTUBE_NO_FORUM", "Aucun forum sélectionné");

define("_AM_XTUBE_PERM_RATEPERMISSIONS", "Permissions d'estimer");
define("_AM_XTUBE_PERM_RATEPERMISSIONS_TEXT", "Sélectionnez les groupes qui peuvent estimer des vidéos pour les catégories affichées.");

define("_AM_XTUBE_PERM_AUTOPERMISSIONS", "Permissions d'approuver");
define("_AM_XTUBE_PERM_AUTOPERMISSIONS_TEXT", "Sélectionnez les groupes dont leurs vidéos seront automatiquement approuvées sans l'intervention de l'administrateur.");

define("_AM_XTUBE_PERM_SPERMISSIONS", "Permissions de Soumettre");
define("_AM_XTUBE_PERM_SPERMISSIONS_TEXT", "Sélectionnez les groupes qui peuvent proposer des vidéos pour les catégories affichées.");

define("_AM_XTUBE_PERM_APERMISSIONS", "Permissions de modérer");
define("_AM_XTUBE_PERM_APERMISSIONS_TEXT", "Sélectionnez les groupes qui auront les privilièges de modérer pour les catégories affichées.");

define("_AM_XTUBE_TIME", "Durée:");
define("_AM_XTUBE_KEYWORDS", "Mots clés :");
define("_AM_XTUBE_KEYWORDS_NOTE", "<small><i>Les mots clés doivent être séparés par des virgules (mot clé1, mot clé2).</i></small>");
define("_AM_XTUBE_VIDEO_META_DESCRIPTION", "Meta Description");
define("_AM_XTUBE_VIDEO_META_DESCRIPTION_DSC", "Dans le cadre d'améliorer votre réferencement, vous pouvez utiliser des meta descriptions significatives pour cette vidéo. Si vous laissez ce champ vide en créant une catégorie, il deviendra automatiquement populaire avec le champs récapitulatif de cette vidéo.");

define("_AM_XTUBE_VIDSOURCE", "Source de la vidéo:");
define("_AM_XTUBE_VIDSOURCE2", "Source de la vidéo");
define("_AM_XTUBE_YOUTUBE", "YouTube");
define("_AM_XTUBE_METACAFE", "MetaCafe");
define("_AM_XTUBE_IFILM", "Spike");
define("_AM_XTUBE_GOOGLEVIDEO", "Google Video");
define("_AM_XTUBE_MYSPAVETV", "MySpace TV");
define("_AM_XTUBE_PHOTOBUCKET", "Photobucket");
define("_AM_XTUBE_DAILYMOTION", "DailyMotion");

// Version 1.04 RC-1
define("_AM_XTUBE_BLIPTV", "Blip.tv");
define("_AM_XTUBE_XOOPSTUBE", "XoopsTube");
define("_AM_XTUBE_ICO_EXPIRE", "Expiré");
define("_AM_XTUBE_MXOOPSTUBE", "Ajouter le Clip de XoopsTube");
define("_AM_XTUBE_VIDEO_CATVIDEOIMG", "Images des vidéos");
define("_AM_XTUBE_VIDEO_FCATVIDEOIMG", "Chemin des images des vidéos");
define("_AM_XTUBE_VUPLOAD_VIDEOEXIST", "La vidéo existe déjà");
define("_AM_XTUBE_VUPLOAD_VIDEOUPLOAD", "Vidéo téléchargée");
define("_AM_XTUBE_VUPLOAD_NOVIDEOEXIST", "Aucune vidéo n'existe");
define("_AM_XTUBE_VUPLOAD_FILEDELETED", "Vidéo supprimée");
define("_AM_XTUBE_VUPLOAD_FILEERRORDELETE", "Erreur");
define("_AM_XTUBE_VUPLOAD_NOFILEERROR", "Aucun fichier");
define("_AM_XTUBE_VUPLOAD_DELETEFILE", "Supprimer le fichier vidéo");
define("_AM_XTUBE_VUPLOAD_CATVIDEO", "Fichiers vidéo");
define("_AM_XTUBE_VUPLOAD_FCATVIDEO", "Répertoire de téléchargement vidéo");
define("_AM_XTUBE_VUPLOADS", "Téléchargement vidéo");
define("_AM_XTUBE_VUPLOAD_FUPLOADPATH", "Chemin d'accès du téléchargement vidéo :");
define("_AM_XTUBE_VUPLOAD_FUPLOADURL", "Lien du téléchargement vidéo :");
define("_AM_XTUBE_VUPLOAD_FUPLOADVIDEOTO", "Télécharger une vidéo : ");
define("_AM_XTUBE_VUPLOAD_FOLDERSELECTION", "Sélectionnez la destination du téléchargement");
define("_AM_XTUBE_VUPLOAD_FUPLOADVIDEO", "Vidéo à télécharger");
define("_AM_XTUBE_VUPLOAD_FSHOWSELECTEDFILE", "Sélectionnez un fichier vidéo");
define("_AM_XTUBE_VUPLOAD_FSHOWSELECTEDFILEDSC", "Le fichier vidéo doit être de type FLV");
define("_AM_XTUBE_BDELETEVIDEO", "Supprimer la vidéo");
define("_AM_XTUBE_NOVIDEO", "Il n'y a pas de vidéo à afficher");
define("_AM_XTUBE_NOIMAGE", "Il n'y a pas d'image à afficher");
define("_AM_XTUBE_NOSELECT", "Pas de sélection");
define("_AM_XTUBE_NOFILESELECT", "Aucun fichier sélectionné");
define("_AM_XTUBE_XOOPSTUBEVIDEO", "Fichier vidéo XoopsTube :");
define("_AM_XTUBE_WARNINSTALL4", "<b>Avertissement : </b> <u>le dossier</u> %s n'est pas accessible en écriture. <br /> Ce dossier doit être accessible en écriture (CHMOD 777) pour XoopsTube.");
define("_AM_XTUBE_CATSPONSOR", "Sélectionnez la catégorie parrain :");
define("_AM_XTUBE_CATSPONSORDSC", "Si vous sélectionnez un Client, l'ID de la bannière de ce formulaire ne sera pas enregistrée !");
define("_AM_XTUBE_BANNER", "Bannière");
define("_AM_XTUBE_FBANNER", "Bannière");
define("_AM_XTUBE_BANNERID", "Sélectionnez l'ID de la bannière :");
define("_AM_XTUBE_BANNERIDDSC", "Si vous avez sélectionné un Client dans le formulaire ci-dessus l'ID de la bannière ne sera pas enregistrée !");
// Uploader class
define("_AM_XTUBE_READWRITEERROR", "Vous n'avez pas encore choisi de fichier à télécharger, ou le serveur n'est pas suffisamment ouvert en écriture pour télécharger ce fichier !");
define("_AM_XTUBE_INVALIDFILESIZE", "Taille de fichier non valide");
define("_AM_XTUBE_FILENAMEEMPTY", "Le nom du fichier est vide");
define("_AM_XTUBE_NOFILEUPLOAD", "Aucun fichier téléchargé, c'est une erreur");
define("_AM_XTUBE_UPLOADERRORZERO", "Il y a eut un problème avec votre téléchargement. Erreur : 0");
define("_AM_XTUBE_UPLOADERRORONE", "Le fichier que vous essayez de télécharger est trop grand. Erreur : 1 ");
define("_AM_XTUBE_UPLOADERRORTWO", "Le fichier que vous essayez de télécharger est trop grand. Erreur : 2");
define("_AM_XTUBE_UPLOADERRORTHREE", "Le fichier que vous essayez de télécharger n'a été que partiellement téléchargé. Erreur : 3");
define("_AM_XTUBE_UPLOADERRORFOUR", "Aucun fichier sélectionné pour le téléchargement. Erreur : 4");
define("_AM_XTUBE_UPLOADERRORFIVE", "Aucun fichier sélectionné pour le téléchargement. Erreur : 5");
define("_AM_XTUBE_NOUPLOADDIR", "Répertoire de téléchargement non défini");
define("_AM_XTUBE_FAILOPENDIR", "Échec d'ouverture du répertoire : ");
define("_AM_XTUBE_FAILOPENDIRWRITEPERM", "Échec d'ouverture du répertoire avec cette autorisation d'écriture :");
define("_AM_XTUBE_FILESIZEMAXSIZE", "Taille du fichier : %u. Taille maximale autorisée : %u");
define("_AM_XTUBE_FILESIZEMAXWIDTH", "Largeur du fichier : %u. Largeur maximale autorisée : %u");
define("_AM_XTUBE_FILESIZEMAXHEIGHT", "Taille du fichier : %u. Hauteur maximale autorisée : %u");
define("_AM_XTUBE_MIMENOTALLOW", "Type MIME non autorisé : ");
define("_AM_XTUBE_FAILEDUPLOADING", "Échec de téléchargement du fichier : ");
define("_AM_XTUBE_ALREADYEXISTTRYAGAIN", " Le fichier existe déjà sur le serveur. Veuillez le renommer et essayez à nouveau.<br />");
define("_AM_XTUBE_ERRORSRETURNUPLOAD", "<h4>Erreurs renvoyées pendant le téléchargement</h4>");
define("_AM_XTUBE_DOESNOTEXIST", " n'existe pas !");

// Version 1.04 RC-2
define("_AM_XTUBE_CLIPFISH", "ClipFish");
define("_AM_XTUBE_LIVELEAK", "LiveLeak");
define('_AM_XTUBE_MAKTOOB', 'Maktoob');
define('_AM_XTUBE_VEOH', 'Veoh');
define("_AM_XTUBE_FILE", "Fichier ");
define("_AM_XTUBE_INFORMATION", "Informations sur la vidéo");
define("_AM_XTUBE_VIDEO_DLVIDIDDSC", "Prendre en charge la partie rouge tel qu'indiqué dans les exemples ci-dessous");
define("_AM_XTUBE_VIDEO_VIEWS", "Visites : ");
define("_AM_XTUBE_ERROR_CATISCAT", "Vous ne pouvez pas définir une catégorie comme une sous-catégorie d'elle-même !");

// Version 1.04 RC-3
define("_AM_XTUBE_MOD_VIDID", "Code d'identification vidéo : ");
define("_AM_XTUBE_MOD_VIDSOURCE", "Source de la vidéo : ");
define("_AM_XTUBE_MOD_TIME", "Temps : ");
define("_AM_XTUBE_MOD_KEYWORDS", "Mots clés : ");
define("_AM_XTUBE_MOD_ITEM_TAG", "Tags : ");
define("_AM_XTUBE_MOD_PICURL", "Lien de l'image : ");
define("_AM_XTUBE_IPAGE_SHOWLATEST", "Afficher les dernières listes ?");
define("_AM_XTUBE_IPAGE_LATESTTOTAL", "Vous souhaitez afficher combien de vidéos ?");
define("_AM_XTUBE_IPAGE_LATESTTOTAL_DSC", "0 Désactive cette option.");

// Version 1.05 RC-1
define('_AM_XTUBE_VIMEO', 'Vimeo');
define('_AM_XTUBE_MEGAVIDEO', 'Megavideo');
define('_AM_XTUBE_VIDDLER', 'Viddler');
define('_AM_XTUBE_CATTITLE', 'Catégorie');
// Traduction faite par Cesag pour frxoops.org le 04 Juin 2012.
?>