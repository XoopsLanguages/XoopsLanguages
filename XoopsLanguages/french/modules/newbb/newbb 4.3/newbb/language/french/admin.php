<?php
// $Id: admin.php,v 1.3 2005/10/19 17:20:33 phppp Exp $

if(defined('NEWBB_ADMIN_DEFINED')) return;
else define('NEWBB_ADMIN_DEFINED',true);

//%%%%%%	File Name  index.php   	%%%%%
define("_AM_NEWBB_FORUMCONF", "Configuration du forum");
define("_AM_NEWBB_ADDAFORUM", "Ajouter un forum");
define("_AM_NEWBB_SYNCFORUM", "Synchroniser les forums");
define("_AM_NEWBB_REORDERFORUM", "Réorganiser");
define("_AM_NEWBB_FORUM_MANAGER", "Forums");
define("_AM_NEWBB_PRUNE_TITLE", "Tris");
define("_AM_NEWBB_CATADMIN", "Catégories");
define("_AM_NEWBB_GENERALSET", "Paramètre du module" );
define("_AM_NEWBB_MODULEADMIN", "Administration : ");
define("_AM_NEWBB_HELP", "Aide");
define("_AM_NEWBB_ABOUT", "À propos");
define("_AM_NEWBB_BOARDSUMMARY", "Statistiques");
define("_AM_NEWBB_PENDING_POSTS_FOR_AUTH", "Messages en attente d'autorisation");
define("_AM_NEWBB_POSTID", "ID du message");
define("_AM_NEWBB_POSTDATE", "Date du message");
define("_AM_NEWBB_POSTER", "Auteur");
define("_AM_NEWBB_TOPICS", "Sujets");
define("_AM_NEWBB_SHORTSUMMARY", "Tableau récapitulatif");
define("_AM_NEWBB_TOTALPOSTS", "Total des messages");
define("_AM_NEWBB_TOTALTOPICS", "Total des sujets");
define("_AM_NEWBB_TOTALVIEWS", "Nombre de vues totales");
define("_AM_NEWBB_BLOCKS", "Blocs");
define("_AM_NEWBB_SUBJECT", "Sujet");
define("_AM_NEWBB_APPROVE", "Message approuvé");
define("_AM_NEWBB_APPROVETEXT", "Contenu de ce message");
define("_AM_NEWBB_POSTAPPROVED", "Ce message a été approuvé");
define("_AM_NEWBB_POSTNOTAPPROVED", "Ce message n'a pas été approuvé");
define("_AM_NEWBB_POSTSAVED", "Message sauvegardé");
define("_AM_NEWBB_POSTNOTSAVED", "Message non sauvegardé");
define("_AM_NEWBB_TOPICAPPROVED", "Le sujet a été approuvé");
define("_AM_NEWBB_TOPICNOTAPPROVED", "Le sujet n'a pas été approuvé");
define("_AM_NEWBB_TOPICID", "ID de la rubrique");
define("_AM_NEWBB_ORPHAN_TOPICS_FOR_AUTH", "Autorisation de sujets non approuvé");
define('_AM_NEWBB_DEL_ONE','Effacer uniquement ce message');
define('_AM_NEWBB_POSTSDELETED','Message sélectionné effacé');
define('_AM_NEWBB_NOAPPROVEPOST','Il n\'y pas de message en attente d\'approbation');
define('_AM_NEWBB_SUBJECTC','Sujet :');
define('_AM_NEWBB_MESSAGEICON','Icône du message :');
define('_AM_NEWBB_MESSAGEC','Message :');
define('_AM_NEWBB_CANCELPOST','Message abandonné');
define('_AM_NEWBB_GOTOMOD','Aller au module');
define('_AM_NEWBB_PREFERENCES','Préférences du module');
define('_AM_NEWBB_POLLMODULE','Module de sondage Xoops');
define('_AM_NEWBB_POLL_OK','Prêt à être utilisé');
define('_AM_NEWBB_GDLIB1','Librairie GD1');
define('_AM_NEWBB_GDLIB2','Librairie GD2');
define('_AM_NEWBB_AUTODETECTED','Auto-détecté : ');
define('_AM_NEWBB_AVAILABLE','Disponible');
define('_AM_NEWBB_NOTAVAILABLE','<font color="red">Non Disponible.</font>');
define('_AM_NEWBB_NOTWRITABLE','<font color="red">Protégé en écriture</font>');
define('_AM_NEWBB_IMAGEMAGICK','ImageMagicK :');
define('_AM_NEWBB_IMAGEMAGICK_NOTSET','Non défini');
define('_AM_NEWBB_ATTACHPATH','Chemin d\'accès pour le stockage des pièces jointes');
define('_AM_NEWBB_THUMBPATH','Chemin des vignettes');
//define('_AM_NEWBB_RSSPATH','Chemin du flux RSS');
define('_AM_NEWBB_REPORT','Postes signalés');
define('_AM_NEWBB_REPORT_PENDING','Rapport en attente');
define('_AM_NEWBB_REPORT_PROCESSED','Rapport traité');
define('_AM_NEWBB_CREATETHEDIR','Créer le dossier qui');
define('_AM_NEWBB_SETMPERM','Définir l\'autorisation');
define('_AM_NEWBB_DIRCREATED','Le répertoire a été créé');
define('_AM_NEWBB_DIRNOTCREATED','Le répertoire ne peut pas être créé');
define('_AM_NEWBB_PERMSET','L\'autorisation a été appliquée');
define('_AM_NEWBB_PERMNOTSET','L\'autorisation n\'a pas été appliquée');
define('_AM_NEWBB_DIGEST','Synthèse des notifications');
define('_AM_NEWBB_DIGEST_PAST','<font color="red">Doit être envoyé dans %d minutes</font>');
define('_AM_NEWBB_DIGEST_NEXT','Doit être envoyé dans %d minutes');
define('_AM_NEWBB_DIGEST_ARCHIVE','Synthèse des archives');
define('_AM_NEWBB_DIGEST_SENT','Synthèse traitée');
define('_AM_NEWBB_DIGEST_FAILED','Synthèse non traitée');

// admin_forum_manager.php
define("_AM_NEWBB_NAME", "Nom");
define("_AM_NEWBB_CREATEFORUM", "Créer un forum");
define("_AM_NEWBB_EDIT", "Modifier");
define("_AM_NEWBB_CLEAR", "Effacer");
define("_AM_NEWBB_DELETE", "Supprimer");
define("_AM_NEWBB_ADD", "Ajouter");
define("_AM_NEWBB_MOVE", "Déplacer");
define("_AM_NEWBB_ORDER", "Ordonner");
define("_AM_NEWBB_TWDAFAP", "Note : Cela supprimera le forum et tous les messages de ce forum.<br /><br />ATTENTION : Êtes-vous certain de vouloir supprimer ce Forum ?");
define("_AM_NEWBB_FORUMREMOVED", "Forum supprimé.");
define("_AM_NEWBB_CREATENEWFORUM", "Créer un nouveau forum");
define("_AM_NEWBB_EDITTHISFORUM", "Modifier le forum");
define("_AM_NEWBB_SET_FORUMORDER", "Définir la position du Forum :");
define("_AM_NEWBB_ALLOWPOLLS", "Autoriser les sondages");
define("_AM_NEWBB_ATTACHMENT_SIZE" ,"Taille max en Ko :");
define("_AM_NEWBB_ALLOWED_EXTENSIONS", "Extensions autorisées : <span style='font-size: xx-small; font-weight: normal; display: block;'>'*' n'indique aucune limititation.<br /> Extensions délimitées par '|'</span>");
define("_AM_NEWBB_ALLOW_ATTACHMENTS", "Autoriser les pièces jointes :");
define("_AM_NEWBB_ALLOWHTML", "Autoriser le HTML");
define("_AM_NEWBB_YES", "Oui");
define("_AM_NEWBB_NO", "Non");
define("_AM_NEWBB_ALLOWSIGNATURES", "Autoriser les signatures :");
define("_AM_NEWBB_HOTTOPICTHRESHOLD", "Seuil du sujet d'actualité :");
//define("_AM_NEWBB_POSTPERPAGE", "Messages par Page : <span style='font-size: xx-small; font-weight: normal; display: block;'>(Nombre de posts<br /> par sujet qui seront<br /> affichés par page.)</span>");
//define("_AM_NEWBB_TOPICPERFORUM", "Sujets par Forum : <span style='font-size: xx-small; font-weight: normal; display: block;'>(C'est le nombre de sujets<br /> par forum qui seront<br /> affichés par page.)</span>");
//define("_AM_NEWBB_SHOWNAME", "Remplacer le nom d'utlisateur par le nom de famille :");
//define("_AM_NEWBB_SHOWICONSPANEL", "Afficher le panneau d'icônes :");
//define("_AM_NEWBB_SHOWSMILIESPANEL", "Afficher le panneau des émoticônes :");
define("_AM_NEWBB_MODERATOR_REMOVE", "Supprime les modérateurs actuels");
define("_AM_NEWBB_MODERATOR_ADD", "Ajouter des modérateurs");

// admin_cat_manager.php
define("_AM_NEWBB_SETCATEGORYORDER", "Définir la Position de la catégorie :");
define("_AM_NEWBB_ACTIVE", "Actif");
define("_AM_NEWBB_INACTIVE", "Inactif");
define("_AM_NEWBB_STATE", "Statut :");
define("_AM_NEWBB_CATEGORYDESC", "Description de la catégorie :");
define("_AM_NEWBB_SHOWDESC", "Montrer la description ?");
define("_AM_NEWBB_IMAGE", "Image :");
//define("_AM_NEWBB_SPONSORIMAGE", "Image de la publicité :");
define("_AM_NEWBB_SPONSORLINK", "Lien de la publicité :");
define("_AM_NEWBB_DELCAT", "Effacer la catégorie");
define("_AM_NEWBB_WAYSYWTDTTAL", "Note : Ceci ne supprimera pas les forums présents dans la catégorie, vous devez le faire via la section de modification des Forums.<br /> <br /> ATTENTION : êtes-vous certain de vouloir supprimer cette catégorie ?");

//%%%%%%        File Name  admin_forums.php           %%%%%
define("_AM_NEWBB_FORUMNAME", "Nom du forum :");
define("_AM_NEWBB_FORUMDESCRIPTION", "Description du forum :");
define("_AM_NEWBB_MODERATOR", "Modérateur(s) :");
define("_AM_NEWBB_REMOVE", "Supprimer");
define("_AM_NEWBB_CATEGORY", "Catégorie");
define("_AM_NEWBB_DATABASEERROR", "Erreur de la base de données");
define("_AM_NEWBB_CATEGORYUPDATED", "Catégorie mise à jour.");
define("_AM_NEWBB_EDITCATEGORY", "Modifier la catégorie :");
define("_AM_NEWBB_CATEGORYTITLE", "Titre de la catégorie :");
define("_AM_NEWBB_CATEGORYCREATED", "La catégorie a été créée.");
define("_AM_NEWBB_CREATENEWCATEGORY", "Créer une nouvelle catégorie");
define("_AM_NEWBB_FORUMCREATED", "Le forum a été créé.");
define("_AM_NEWBB_ACCESSLEVEL", "Niveau global d'accès :");
define("_AM_NEWBB_CATEGORY1", "Catégorie");
define("_AM_NEWBB_FORUMUPDATE", "Paramètres du forum mis à jour");
define("_AM_NEWBB_FORUM_ERROR", "ERREUR : erreur des paramètres du forum");
define("_AM_NEWBB_CLICKBELOWSYNC", "En cliquant sur le bouton ci-dessous, cela va synchroniser vos pages des forums et des sujets avec les données correctes dans la base de données. Utilisez cette section chaque fois que vous remarquez des défauts dans la liste des sujets et des forums.");
define("_AM_NEWBB_SYNCHING", "Synchronisation de l'index du forum et des sujets (cela peut prendre un certain temps)");
define("_AM_NEWBB_CATEGORYDELETED", "Catégorie supprimée.");
define("_AM_NEWBB_MOVE2CAT", "Déplacer vers la catégorie :");
define("_AM_NEWBB_MAKE_SUBFORUM_OF", "Faire un sous-forum de :");
define("_AM_NEWBB_MSG_FORUM_MOVED", "Forum déplacé !");
define("_AM_NEWBB_MSG_ERR_FORUM_MOVED", "Impossible de déplacer le forum.");
define("_AM_NEWBB_SELECT", "< Sélectionner >");
define("_AM_NEWBB_MOVETHISFORUM", "Déplacer ce forum");
define("_AM_NEWBB_MERGE", "Fusionner");
define("_AM_NEWBB_MERGETHISFORUM", "Fusionner ce forum");
define("_AM_NEWBB_MERGETO_FORUM", "Fusionner ce forum à :");
define("_AM_NEWBB_MSG_FORUM_MERGED", "Forum fusionné !");
define("_AM_NEWBB_MSG_ERR_FORUM_MERGED", "Échec de la fusion des forums.");

//%%%%%%        File Name  admin_forum_reorder.php           %%%%%
define("_AM_NEWBB_REORDERID", "ID");
define("_AM_NEWBB_REORDERTITLE", "Titre");
define("_AM_NEWBB_REORDERWEIGHT", "Position");
define("_AM_NEWBB_SETFORUMORDER", "Définir l'ordre du tableau");
define("_AM_NEWBB_BOARDREORDER", "Le tableau a été réordonné suivant vos spécifications");

// admin_permission.php
define("_AM_NEWBB_PERMISSIONS_TO_THIS_FORUM", "Autorisations du sujet pour ce Forum.");
define("_AM_NEWBB_CAT_ACCESS", "Accès à la catégorie");
define("_AM_NEWBB_CAN_ACCESS", "Peut accéder au forum");
define("_AM_NEWBB_CAN_VIEW", "Peut afficher le contenu de la rubrique");
define("_AM_NEWBB_CAN_POST", "Peut débuter de nouveaux sujets");
define("_AM_NEWBB_CAN_REPLY", "Peut répondre");
define("_AM_NEWBB_CAN_EDIT", "Peut modifier son propre message");
define("_AM_NEWBB_CAN_DELETE", "Peut effacer son propre message");
define("_AM_NEWBB_CAN_ADDPOLL", "Peut ajouter un sondage");
define("_AM_NEWBB_CAN_VOTE", "Peut voter");
define("_AM_NEWBB_CAN_ATTACH", "Peut utiliser la pièce jointe");
define("_AM_NEWBB_CAN_NOAPPROVE", "Peut poster sans approbation");
define("_AM_NEWBB_CAN_TYPE", "Peut utiliser le type de sujet");
define("_AM_NEWBB_CAN_HTML", "Peut utiliser le langage HTML");
define("_AM_NEWBB_CAN_SIGNATURE", "Peut utiliser la signature");
define("_AM_NEWBB_ACTION", "Action");
define("_AM_NEWBB_PERM_TEMPLATE", "Définir le modèle d'autorisations par défaut");
define("_AM_NEWBB_PERM_TEMPLATE_DESC", "Modifier le modèle d'autorisations suivant afin qu'il puisse être appliqué à un forum ou à plusieurs forums");
define("_AM_NEWBB_PERM_FORUMS", "Sélectionner les forums");
define("_AM_NEWBB_PERM_TEMPLATE_CREATED", "Le modèle d'autorisations a été créé.");
define("_AM_NEWBB_PERM_TEMPLATE_ERROR", "Erreur rencontrée lors de la création du modèle d'autorisations");
define("_AM_NEWBB_PERM_TEMPLATEAPP", "Appliquer les autorisations par défaut");
define("_AM_NEWBB_PERM_TEMPLATE_APPLIED", "Les autorisations par défaut ont été appliquées aux forums");
define("_AM_NEWBB_PERM_ACTION", "Outils de gestion des autorisations");
define("_AM_NEWBB_PERM_SETBYGROUP", "Définir les autorisations directement par groupe");

// admin_forum_prune.php
define ("_AM_NEWBB_PRUNE_RESULTS_TITLE", "Résultats du tri");
define ("_AM_NEWBB_PRUNE_RESULTS_TOPICS", "Sujets triés");
define ("_AM_NEWBB_PRUNE_RESULTS_POSTS", "Messages triés");
define ("_AM_NEWBB_PRUNE_RESULTS_FORUMS", "Forums triés");
define ("_AM_NEWBB_PRUNE_STORE", "Enregistrer les messages dans ce forum au lieu de les supprimer");
define ("_AM_NEWBB_PRUNE_ARCHIVE", "Faire une copie des messages dans les Archives");
define ("_AM_NEWBB_PRUNE_FORUMSELERROR", "Vous avez oublié de sélectionner le(s) forum(s) à trier");
define ("_AM_NEWBB_PRUNE_DAYS", "Supprimer les sujets sans réponses dans :");
define ("_AM_NEWBB_PRUNE_FORUMS", "Forum(s) à trier");
define ("_AM_NEWBB_PRUNE_STICKY", "Garder les sujets agrafés");
define ("_AM_NEWBB_PRUNE_DIGEST", "Garder les sujets résumés");
define ("_AM_NEWBB_PRUNE_LOCK", "Garder les sujets fermés");
define ("_AM_NEWBB_PRUNE_HOT", "Garder les sujets qui ont plus que ce nombre de réponses :");
define ("_AM_NEWBB_PRUNE_SUBMIT", "Ok");
define ("_AM_NEWBB_PRUNE_RESET", "Réinitialiser");
define ("_AM_NEWBB_PRUNE_YES", "Oui");
define ("_AM_NEWBB_PRUNE_NO", "Non");
define ("_AM_NEWBB_PRUNE_WEEK", "Une semaine");
define ("_AM_NEWBB_PRUNE_2WEEKS", "Deux semaines");
define ("_AM_NEWBB_PRUNE_MONTH", "Un mois");
define ("_AM_NEWBB_PRUNE_2MONTH", "Deux mois");
define ("_AM_NEWBB_PRUNE_4MONTH", "Quatre mois");
define ("_AM_NEWBB_PRUNE_YEAR", "Un an");
define ("_AM_NEWBB_PRUNE_2YEARS", "2 ans");

// About.php constants
define('_AM_NEWBB_AUTHOR_INFO', "Information sur l'auteur");
define('_AM_NEWBB_AUTHOR_NAME', "Auteur");
define('_AM_NEWBB_AUTHOR_WEBSITE', "Site internet de l'auteur");
define('_AM_NEWBB_AUTHOR_EMAIL', "Adresse de messagerie de l'auteur");
define('_AM_NEWBB_AUTHOR_CREDITS', "Remerciements");
define('_AM_NEWBB_MODULE_INFO', "Informations sur le développement du module");
define('_AM_NEWBB_MODULE_STATUS', "Statut");
define('_AM_NEWBB_MODULE_DEMO', "Site de démonstration");
define('_AM_NEWBB_MODULE_SUPPORT', "Site officel de support");
define('_AM_NEWBB_MODULE_BUG', "Signaler un bogue pour ce module");
define('_AM_NEWBB_MODULE_FEATURE', "Suggérer une nouvelle fonctionnalité pour ce module");
define('_AM_NEWBB_MODULE_DISCLAIMER', "Avis de non-responsabilité");
define('_AM_NEWBB_AUTHOR_WORD', "Mot de l'auteur");
define('_AM_NEWBB_BY','Par');
define('_AM_NEWBB_AUTHOR_WORD_EXTRA', "
");

// admin_report.php
define("_AM_NEWBB_REPORTADMIN", "Gestionnaire des messages dénoncés");
define("_AM_NEWBB_PROCESSEDREPORT", "Afficher les messages dénoncés traités");
define("_AM_NEWBB_PROCESSREPORT", "Voir les nouveaux messages dénoncés.");
define("_AM_NEWBB_REPORTTITLE", "Titre du message dénoncé");
define("_AM_NEWBB_REPORTEXTRA", "Extra");
define("_AM_NEWBB_REPORTPOST", "Message dénoncé");
define("_AM_NEWBB_REPORTTEXT", "Texte dénoncé");
define("_AM_NEWBB_REPORTMEMO", "Rappel du processus");

// admin_report.php
define("_AM_NEWBB_DIGESTADMIN", "Gestionnaire de la synthèse");
define("_AM_NEWBB_DIGESTCONTENT", "Contenu de la synthèse");

// admin_votedata.php
define("_AM_NEWBB_VOTE_RATINGINFOMATION", "Information sur les votes");
define("_AM_NEWBB_VOTE_TOTALVOTES", "Total des votes : ");
define("_AM_NEWBB_VOTE_REGUSERVOTES", "Votes des utilisateurs enregistrés : %s");
define("_AM_NEWBB_VOTE_ANONUSERVOTES", "Votes des utilisateurs anonymes : %s");
define("_AM_NEWBB_VOTE_USER", "Utilisateur");
define("_AM_NEWBB_VOTE_IP", "Adresse IP");
define("_AM_NEWBB_VOTE_USERAVG", "Note moyenne des utilisateurs");
define("_AM_NEWBB_VOTE_TOTALRATE", "Cote totale");
define("_AM_NEWBB_VOTE_DATE", "Soumis");
define("_AM_NEWBB_VOTE_RATING", "Cote");
define("_AM_NEWBB_VOTE_NOREGVOTES", "Aucun vote d'utilisateur enregistré");
define("_AM_NEWBB_VOTE_NOUNREGVOTES", "Aucun vote d'utilisateur anonyme");
define("_AM_NEWBB_VOTEDELETED", "Données des votes supprimées.");
define("_AM_NEWBB_VOTE_ID", "ID");
define("_AM_NEWBB_VOTE_FILETITLE", "Titre du sujet");
define("_AM_NEWBB_VOTE_DISPLAYVOTES", "Informations sur les données des votes");
define("_AM_NEWBB_VOTE_NOVOTES", "Aucun vote d'utilisateur à afficher");
define("_AM_NEWBB_VOTE_DELETE", "Aucun vote d'utilisateur à supprimer");
define("_AM_NEWBB_VOTE_DELETEDSC", "<strong>Supprime</strong> de la base de données, l'information du vote choisi.");

// admin_type_manager.php
define("_AM_NEWBB_TYPE_ADD", "Ajouter des types");
define("_AM_NEWBB_TYPE_TEMPLATE", "Modèle du type");
define("_AM_NEWBB_TYPE_TEMPLATE_APPLY", "Appliquer le modèle");
define("_AM_NEWBB_TYPE_FORUM", "Type pour chaque forum");
define("_AM_NEWBB_TYPE_NAME", "Nom du type");
define("_AM_NEWBB_TYPE_COLOR", "Couleur");
define("_AM_NEWBB_TYPE_DESCRIPTION", "Description");
define("_AM_NEWBB_TYPE_ORDER", "Organiser");
define("_AM_NEWBB_TYPE_LIST", "Liste du type");
define("_AM_NEWBB_TODEL_TYPE", "Êtes-vous sûr de vouloir supprimer les types : [%s] ?");
define("_AM_NEWBB_TYPE_EDITFORUM_DESC", "Les informations n'ont pas été sauvegardées. Vous devez les soumettre pour les enregistrer.");
define("_AM_NEWBB_TYPE_ORDER_DESC", "Pour activer un type de forum, une valeur supérieure à 0 est nécessaire pour « type_order » ; En d'autres termes, un type sera inactif pour un forum si « type_order » est définie sur 0.");

// admin_synchronization.php
define("_AM_NEWBB_SYNC_TYPE_FORUM", "Données du Forum");
define("_AM_NEWBB_SYNC_TYPE_TOPIC", "Données de la rubrique");
define("_AM_NEWBB_SYNC_TYPE_POST", "Données du message");
define("_AM_NEWBB_SYNC_TYPE_USER", "Données de l'utilisateur");
define("_AM_NEWBB_SYNC_TYPE_STATS", "Info des statistiques");
define("_AM_NEWBB_SYNC_TYPE_MISC", "DIVERS");
define("_AM_NEWBB_SYNC_ITEMS", "Articles pour chaque boucle : ");
define("_AM_NEWBB_ALLOW_SUBJECT_PREFIX", "Autoriser les préfixes dans les sujets ?");
define("_AM_NEWBB_ALLOW_SUBJECT_PREFIX_DESC", "Autorise les préfixes qui sont ajoutés aux noms des rubriques.");
define("_AM_NEWBB_GROUPMOD_TITLE","ajouter des modérateurs par groupe");
define("_AM_NEWBB_GROUPMOD_TITLEDESC","Vous permet d'entrer un groupe destiné aux modérateurs");
define("_AM_NEWBB_GROUPMOD_ALLFORUMS","Tous les forum");
define("_AM_NEWBB_GROUPMOD_ADDMOD","Les modérateurs ont été enregistrés.");
define("_AM_NEWBB_GROUPMOD_ERRMOD","Vous avez une erreur !");
?>