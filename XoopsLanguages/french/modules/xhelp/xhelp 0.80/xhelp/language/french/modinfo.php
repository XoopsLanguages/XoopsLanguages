<?php
//$Id: modinfo.php,v 1.29 2005/12/01 15:16:32 eric_juden Exp $
define('_MI_XHELP_NAME','xhelp');
define('_MI_XHELP_DESC','Utilis&eacute; pour stocker des requ&ecirc;tes clients pour les aider dans leur probl&egrave;me');

//Template variables
define('_MI_XHELP_TEMP_ADDTICKET','Mod&egrave;le pour addTicket.php');
define('_MI_XHELP_TEMP_SEARCH','Mod&egrave;le pour search.php');
define('_MI_XHELP_TEMP_STAFF_INDEX','Mod&egrave;le &eacute;quipe pour index.php');
define('_MI_XHELP_TEMP_STAFF_PROFILE','Mod&egrave;le pour profile.php');
define('_MI_XHELP_TEMP_STAFF_TICKETDETAILS','Mod&egrave;le &eacute;quipe pour ticket.php');
define('_MI_XHELP_TEMP_USER_INDEX','Mod&egrave;le utilisateur pour index.php');
define('_MI_XHELP_TEMP_USER_TICKETDETAILS','Mod&egrave;le utilisateur pour ticket.php');
define('_MI_XHELP_TEMP_STAFF_RESPONSE','Mod&egrave;le pour response.php');
define('_MI_XHELP_TEMP_LOOKUP','Mod&egrave;le pour lookup.php');
define('_MI_XHELP_TEMP_STAFFREVIEW','Mod&egrave;le pour staffReview.php');
define('_MI_XHELP_TEMP_EDITTICKET','Mod&egrave;le pour editTicket.php');
define('_MI_XHELP_TEMP_EDITRESPONSE','Mod&egrave;le pour editResponse.php');
define('_MI_XHELP_TEMP_ANNOUNCEMENT','Mod&egrave;le pour annonces');
define('_MI_XHELP_TEMP_STAFF_HEADER','Mod&egrave;le pour staff menu options');
define('_MI_XHELP_TEMP_USER_HEADER','Mod&egrave;le pour les options du menu utilisateur');
define('_MI_XHELP_TEMP_PRINT','Mod&egrave;le pour la page impression des tickets');
define('_MI_XHELP_TEMP_STAFF_ALL','Mod&egrave;le pour l\'&eacute;quipe Voir toutes les pages');
define('_MI_XHELP_TEMP_STAFF_TICKET_TABLE','Mod&egrave;le afficher les tickets de l\'&eacute;quipe');
define('_MI_XHELP_TEMP_SETDEPT','Mod&egrave;le pour le param&egrave;trage de la Page de Département');
define('_MI_XHELP_TEMP_SETPRIORITY','Mod&egrave;le pour le param&egrave;trage de la page de priorit&eacute;s');
define('_MI_XHELP_TEMP_SETOWNER','Mod&egrave;le pour la Page du Propriétaire');
define('_MI_XHELP_TEMP_SETSTATUS','Mod&egrave;le pour la Page de Param&egrave;trage des Etats');
define('_MI_XHELP_TEMP_DELETE','Mod&egrave;le pour la Page de Batch d\'effacement de Ticket');
define('_MI_XHELP_TEMP_BATCHRESPONSE','Mod&egrave;le pour la Page de Batch d\'Ajout de R&eacute;ponse');
define('_MI_XHELP_TEMP_ANON_ADDTICKET','Mod&egrave;le pour la page d\'ajout de ticket des anonymes');
define('_MI_XHELP_TEMP_ERROR','Mod&egrave;le pour la page d\'erreur');
define('_MI_XHELP_TEMP_EDITSEARCH','Mod&egrave;le pour l\&eacute;dition de recherche sauvegard&eacute;e.');
define('_MI_XHELP_TEMP_USER_ALL','Template pour la vue utilisateur de toute les pages');
define('_MI_XHELP_TEMP_ADD_FAQ','Template pour l\'ajout d\'article de faq.');


// Block variables
define('_MI_XHELP_BNAME1','Mes Tickets Ouverts');
define('_MI_XHELP_BNAME1_DESC','Affiche la liste des tickets ouverts pour l\'utilisateur');
define('_MI_XHELP_BNAME2','Tickets par Département');
define('_MI_XHELP_BNAME2_DESC','Affiche le nombre de tickets ouverts pour chaque département.');
define('_MI_XHELP_BNAME3','Derniers Tickets Vus');
define('_MI_XHELP_BNAME3_DESC','Affiche les tickets qu\'un membre de l\'&eacute;quipe vient de visualiser r&eacute;cemment.');
define('_MI_XHELP_BNAME4','Actions de Ticket');
define('_MI_XHELP_BNAME4_DESC','Montrer toutes les action que le membre du staff peut effectuer sur le ticket');
define('_MI_XHELP_BNAME5','Menu des actions de ticket');
define('_MI_XHELP_BNAME5_DESC','Montrer le menu des actions pour le système de ticket');

// Config variables
define('_MI_XHELP_TITLE','Titre du HelpDesk');
define('_MI_XHELP_TITLE_DSC','Donnez un nom au HelpDesk :');
define('_MI_XHELP_UPLOAD','R&eacute;pertoire de stockage des fichiers');
define('_MI_XHELP_UPLOAD_DSC','Chemin o&ugrave; seront stock&eacute;s les fichiers attach&eacute;s &agrave; un ticket');
define('_MI_XHELP_ALLOW_UPLOAD','Autoriser l\'envoi de fichiers');
define('_MI_XHELP_ALLOW_UPLOAD_DSC','Autoriser les utilisateurs &agrave; ajouter un fichier &agrave; leur demande ?');
define('_MI_XHELP_UPLOAD_SIZE','Taille des fichiers envoy&eacute;s');
define('_MI_XHELP_UPLOAD_SIZE_DSC','Taille Maxi des fichiers envoy&eacute;s (en octets)');
define('_MI_XHELP_UPLOAD_WIDTH','Largeur Maxi');
define('_MI_XHELP_UPLOAD_WIDTH_DSC','Largeur Maxi des fichiers envoy&eacute;s (en pixels)');
define('_MI_XHELP_UPLOAD_HEIGHT','Hauteur Maxi');
define('_MI_XHELP_UPLOAD_HEIGHT_DSC','Hauteur Maxi des fichiers envoy&eacute;s (en pixels)');
define('_MI_XHELP_NUM_TICKET_UPLOADS','Nombre de fichiers max au t&eacute;l&eacute;chargement');
define('_MI_XHELP_NUM_TICKET_UPLOADS_DSC','Ceci est le nombre maximum de fichiers qui peuvent &ecirc;tre t&eacute;l&eacute;charg&eacute;s dans un ticket &agrave; la soumission d\'un ticket (n\'inclus pas le champs customis&eacute; fichier).');
define('_MI_XHELP_ANNOUNCEMENTS','Sujet des annonces');
//define('_MI_XHELP_ANNOUNCEMENTS_DSC','C\'est le sujet des annonces pour xhelp. Mettez &agrave; jour le module xhelp pour voir les nouvelles cat&eacute;gories');
define('_MI_XHELP_ANNOUNCEMENTS_DSC',"ceci est le sujet des actualités qui poussera les annonces pour xhelp. <a href='javascript:openWithSelfMain(\"".XOOPS_URL."/modules/xhelp/install.php?op=updateTopics\", \"xoops_module_install_xhelp\",400, 300);'>Cliquez ici</a> pour mettre &agrave; jour les nouvelles cat&eacute;gories.");
define('_MI_XHELP_ANNOUNCEMENTS_NONE','***D&eacute;sactiver les annonces***');
define('_MI_XHELP_ALLOW_REOPEN','Autoriser la r&eacute;ouverture d\'un Ticket');
define('_MI_XHELP_ALLOW_REOPEN_DSC','Autorise les utilisateurs &agrave; r&eacute;ouvrir un Ticket sold&eacute; ?');
define('_MI_XHELP_STAFF_TC','Nombre de tickets affich&eacute;s pour l\'&eacute;quipe');
define('_MI_XHELP_STAFF_TC_DSC','Combien de tickets doivent &ecirc;tre affich&eacute;s pour chaque département ?');
define('_MI_XHELP_STAFF_ACTIONS','Actions du Staff');
define('_MI_XHELP_STAFF_ACTIONS_DSC','Quel style désirez vou appliquer aux actions du Staff ? Inligne-Style est le style par défaut, Block-Style requiert que vous activiez le blocs des Actions du Staff.');
define('_MI_XHELP_ACTION1','Style en ligne');
define('_MI_XHELP_ACTION2','Style en Bloc');
define('_MI_XHELP_DEFAULT_DEPT','Département par d&eacute;faut');
define('_MI_XHELP_DEFAULT_DEPT_DSC',"Ceci est le département s&eacute;lectionn&eacute; par d&eacute;faut dans la liste &agrave; l'ajout de ticket. <a href='javascript:openWithSelfMain(\"".XOOPS_URL."/modules/xhelp/install.php?op=updateDepts\", \"xoops_module_install_xhelp\",400, 300);'>Cliquez ici</a> pour mettre &agrave; jour les départements.");
define('_MI_XHELP_OVERDUE_TIME','Limite d\'&eacute;x&eacute;cution en temps alou&eacute; au ticket');
define('_MI_XHELP_OVERDUE_TIME_DSC','Ceci d&eacute;termine le temps dont dispose l\'intervenant afin de cloturer le ticket avant qu\'il ne soit trop tard (en heures).');
define('_MI_XHELP_ALLOW_ANON','Autoriser les utilisateurs anonymes &agrave; soumettre des tickets');
define('_MI_XHELP_ALLOW_ANON_DSC','Ceci aloue la cr&eacute;ation de ticket sur votre site &agrave; tout le monde. Lorsque les utilisateurs anonymes soumettent un ticket, ils sont aussitot convi&eacute;s &agrave; cr&eacute;er un compte .');
define('_MI_XHELP_APPLY_VISIBILITY','Appliquer la visibilit&eacute; du département aux membres du staff ?');
define('_MI_XHELP_APPLY_VISIBILITY_DSC','Ceci d&eacute;termine si le staff est limit&eacute; &agrave; quelques d&eacute;partement que ce soit afin de soumettre des tickets. si "oui" est s&eacute;lectionn&eacute;, les membres du staff seront limit&eacute; dans leurs soumission de tickets aux départements qui leurs sont attribu&eacute;s par s&eacute;lection dans les groupes.');
define('_MI_XHELP_DISPLAY_NAME','Montrer le nom d\'utilisateur ou le nom r&eacute;el ?');
define('_MI_XHELP_DISPLAY_NAME_DSC','Ceci autorise l\'affichage des noms r&eacute;els en lieu est place des nom d\'utilisateur comme cela l\'est g&eacute;n&eacute;ralement (Le nom d\'utilisateur sera montr&eacute; s\'il n\'existe pas de nom r&eacute;el).');
define('_MI_XHELP_USERNAME','Nom d\'utilisateur');
define('_MI_XHELP_REALNAME','Nom r&eacute;el');

// Admin Menu variables
define('_MI_XHELP_MENU_BLOCKS','Gestion des Blocs');
define('_MI_XHELP_MENU_MANAGE_DEPARTMENTS','Gestion des Départements');
define('_MI_XHELP_MENU_MANAGE_STAFF','Gestion des Equipes');
define('_MI_XHELP_MENU_MODIFY_EMLTPL','Modifier le mod&egrave;le des Emails');
define('_MI_XHELP_MENU_MODIFY_TICKET_FIELDS','Modifier les champs du Ticket');
define('_MI_XHELP_MENU_GROUP_PERM','Permissions des groupes');
define('_MI_XHELP_MENU_ADD_STAFF','Ajouter une &eacute;quipe');
define('_MI_XHELP_MENU_MIMETYPES','Gestion des types Mime');
define('_MI_XHELP_MENU_CHECK_TABLES','Controle des Tables');
define('_MI_XHELP_MENU_MANAGE_ROLES','Gestion des Roles');
define('_MI_XHELP_MENU_MAIL_EVENTS','Ev&eacute;nements d\'email');
define('_MI_XHELP_MENU_CHECK_EMAIL','Controler les Emails');
define('_MI_XHELP_MENU_MANAGE_FILES','Gestion de fichiers');
define('_MI_XHELP_ADMIN_ABOUT','A propos');
define('_MI_XHELP_TEXT_MANAGE_STATUSES','Gestion des &eacute;tats');
define('_MI_XHELP_TEXT_MANAGE_FIELDS','Gestion des champs personnalisés');
define('_MI_XHELP_TEXT_NOTIFICATIONS','Gestion de Notifications');
define('_MI_XHELP_TEXT_MANAGE_FAQ','Gestion de FAQ');

//NOTIFICATION vars
define('_MI_XHELP_DEPT_NOTIFY','Département');
define('_MI_XHELP_DEPT_NOTIFYDSC','Options de Notification s\'appliquant &agrave; un département');

define('_MI_XHELP_TICKET_NOTIFY','Ticket');
define('_MI_XHELP_TICKET_NOTIFYDSC','Option de Notification applicable pour le ticket actuel');

define('_MI_XHELP_DEPT_NEWTICKET_NOTIFY','Sect : Nouveau Ticket');
define('_MI_XHELP_DEPT_NEWTICKET_NOTIFYCAP','Me pr&eacute;venir lors de la cr&eacute;ation d\'un nouveau ticket');
define('_MI_XHELP_DEPT_NEWTICKET_NOTIFYDSC','Recevoir une notification quand un nouveau ticket est cr&eacute;&eacute;');
define('_MI_XHELP_DEPT_NEWTICKET_NOTIFYSBJ','{X_MODULE} Ticket créé - id {TICKET_ID}');
define('_MI_XHELP_DEPT_NEWTICKET_NOTIFYTPL','dept_newticket_notify.tpl');

define('_MI_XHELP_DEPT_REMOVEDTICKET_NOTIFY','Sect : Suppression Ticket');
define('_MI_XHELP_DEPT_REMOVEDTICKET_NOTIFYCAP','Me pr&eacute;venir lors de la suppression d\'un ticket');
define('_MI_XHELP_DEPT_REMOVEDTICKET_NOTIFYDSC','Recevoir une notification quand un ticket est supprim&eacute;');
define('_MI_XHELP_DEPT_REMOVEDTICKET_NOTIFYSBJ','{X_MODULE} Ticket supprimé - id {TICKET_ID}');
define('_MI_XHELP_DEPT_REMOVEDTICKET_NOTIFYTPL','dept_removedticket_notify.tpl');

define('_MI_XHELP_DEPT_MODIFIEDTICKET_NOTIFY','Sect : Modification Ticket');
define('_MI_XHELP_DEPT_MODIFIEDTICKET_NOTIFYCAP','Me pr&eacute;venir lors de la modification d\'un ticket');
define('_MI_XHELP_DEPT_MODIFIEDTICKET_NOTIFYDSC','Recevoir une notification quand un ticket est modifi&eacute;');
define('_MI_XHELP_DEPT_MODIFIEDTICKET_NOTIFYSBJ','{X_MODULE} Ticket modifié - id {TICKET_ID}');
define('_MI_XHELP_DEPT_MODIFIEDTICKET_NOTIFYTPL','dept_modifiedticket_notify.tpl');

define('_MI_XHELP_DEPT_NEWRESPONSE_NOTIFY','Sect : Nouvelle r&eacute;ponse');
define('_MI_XHELP_DEPT_NEWRESPONSE_NOTIFYCAP','Me pr&eacute;venir lorsqu\'une r&eacute;ponse est apport&eacute;e');
define('_MI_XHELP_DEPT_NEWRESPONSE_NOTIFYDSC','Recevoir une notification quand une r&eacute;ponse est apport&eacute;e');
define('_MI_XHELP_DEPT_NEWRESPONSE_NOTIFYSBJ','{X_MODULE} Réponse apportée au Ticket - id {TICKET_ID}');
define('_MI_XHELP_DEPT_NEWRESPONSE_NOTIFYTPL','dept_newresponse_notify.tpl');

define('_MI_XHELP_DEPT_MODIFIEDRESPONSE_NOTIFY','Sect : R&eacute;ponse modifi&eacute;e');
define('_MI_XHELP_DEPT_MODIFIEDRESPONSE_NOTIFYCAP','Me pr&eacute;venir lorsqu\'une r&eacute;ponse est modifi&eacute;e');
define('_MI_XHELP_DEPT_MODIFIEDRESPONSE_NOTIFYDSC','Recevoir une notification quand une r&eacute;ponse est modifi&eacute;e');
define('_MI_XHELP_DEPT_MODIFIEDRESPONSE_NOTIFYSBJ','{X_MODULE} Ticket Réponse modifiée - id {TICKET_ID}');
define('_MI_XHELP_DEPT_MODIFIEDRESPONSE_NOTIFYTPL','dept_modifiedresponse_notify.tpl');

define('_MI_XHELP_DEPT_CHANGEDSTATUS_NOTIFY','Sect : Changement d\'Etat d\'un Ticket');
define('_MI_XHELP_DEPT_CHANGEDSTATUS_NOTIFYCAP','Me pr&eacute;venir lorsque L\'Etat du ticket est modifi&eacute;');
define('_MI_XHELP_DEPT_CHANGEDSTATUS_NOTIFYDSC','Recevoir une notification lorsque L\'Etat du ticket est modifi&eacute;');
define('_MI_XHELP_DEPT_CHANGEDSTATUS_NOTIFYSBJ','{X_MODULE} Changement d\'Etat d\'un Ticket - id {TICKET_ID}');
define('_MI_XHELP_DEPT_CHANGEDSTATUS_NOTIFYTPL','dept_changedstatus_notify.tpl');

define('_MI_XHELP_DEPT_CHANGEDPRIORITY_NOTIFY','Sect : Changement de Priorit&eacute; d\'un Ticket');
define('_MI_XHELP_DEPT_CHANGEDPRIORITY_NOTIFYCAP','Me pr&eacute;venir lorsque la priorit&eacute; d\'un ticket est modifi&eacute;e');
define('_MI_XHELP_DEPT_CHANGEDPRIORITY_NOTIFYDSC','Recevoir une notification lorsque la priorit&eacute; d\'un ticket est modifi&eacute;e');
define('_MI_XHELP_DEPT_CHANGEDPRIORITY_NOTIFYSBJ','{X_MODULE} Changement de priorité d\'un Ticket - id {TICKET_ID}');
define('_MI_XHELP_DEPT_CHANGEDPRIORITY_NOTIFYTPL','dept_changedpriority_notify.tpl');

define('_MI_XHELP_DEPT_NEWOWNER_NOTIFY','Sect : Nouveau responsable de Ticket');
define('_MI_XHELP_DEPT_NEWOWNER_NOTIFYCAP','Me pr&eacute;venir lorsque le responsable d\'un ticket est modifi&eacute;');
define('_MI_XHELP_DEPT_NEWOWNER_NOTIFYDSC','Recevoir une notification lorsque le responsable dun ticket est modifi&eacute;');
define('_MI_XHELP_DEPT_NEWOWNER_NOTIFYSBJ','{X_MODULE} Responsable de Ticket modifié - id {TICKET_ID}');
define('_MI_XHELP_DEPT_NEWOWNER_NOTIFYTPL','dept_newowner_notify.tpl');

define('_MI_XHELP_TICKET_REMOVEDTICKET_NOTIFY','Ticket : Supprim&eacute;');
define('_MI_XHELP_TICKET_REMOVEDTICKET_NOTIFYCAP','Me pr&eacute;venir lorsque ce ticket est supprim&eacute;');
define('_MI_XHELP_TICKET_REMOVEDTICKET_NOTIFYDSC','Recevoir une notification lorsque ce ticket est supprim&eacute;');
define('_MI_XHELP_TICKET_REMOVEDTICKET_NOTIFYSBJ','{X_MODULE} Ticket Supprimé - id {TICKET_ID}');
define('_MI_XHELP_TICKET_REMOVEDTICKET_NOTIFYTPL','ticket_removedticket_notify.tpl');

define('_MI_XHELP_TICKET_MODIFIEDTICKET_NOTIFY','Ticket : Modifi&eacute;');
define('_MI_XHELP_TICKET_MODIFIEDTICKET_NOTIFYCAP','Me pr&eacute;venir lorsque ce ticket est modifi&eacute;');
define('_MI_XHELP_TICKET_MODIFIEDTICKET_NOTIFYDSC','Recevoir une notification lorsque ce ticket est modifi&eacute;');
define('_MI_XHELP_TICKET_MODIFIEDTICKET_NOTIFYSBJ','{X_MODULE} Ticket modifié - id {TICKET_ID}');
define('_MI_XHELP_TICKET_MODIFIEDTICKET_NOTIFYTPL','ticket_modifiedticket_notify.tpl');

define('_MI_XHELP_TICKET_NEWRESPONSE_NOTIFY','Ticket : Nouvelle R&eacute;ponse');
define('_MI_XHELP_TICKET_NEWRESPONSE_NOTIFYCAP','Me pr&eacute;venir lorsqu\'une r&eacute;ponse est cr&eacute;&eacute;e pour ce ticket');
define('_MI_XHELP_TICKET_NEWRESPONSE_NOTIFYDSC','Recevoir une notification lorsqu\'une r&eacute;ponse est cr&eacute;&eacute;e pour ce ticket');
define('_MI_XHELP_TICKET_NEWRESPONSE_NOTIFYSBJ','{X_MODULE} Réponse créée pour ce Ticket - id {TICKET_ID}');
define('_MI_XHELP_TICKET_NEWRESPONSE_NOTIFYTPL','ticket_newresponse_notify.tpl');

define('_MI_XHELP_TICKET_MODIFIEDRESPONSE_NOTIFY','Ticket : R&eacute;ponse Modifi&eacute;e');
define('_MI_XHELP_TICKET_MODIFIEDRESPONSE_NOTIFYCAP','Me pr&eacute;venir lorsqu\'une r&eacute;ponse est modifi&eacute;e pour ce ticket');
define('_MI_XHELP_TICKET_MODIFIEDRESPONSE_NOTIFYDSC','Recevoir une notification lorsqu\'une r&eacute;ponse est modifi&eacute;e pour ce ticket');
define('_MI_XHELP_TICKET_MODIFIEDRESPONSE_NOTIFYSBJ','{X_MODULE} Réponse à ce Ticket modifiée - id {TICKET_ID}');
define('_MI_XHELP_TICKET_MODIFIEDRESPONSE_NOTIFYTPL','ticket_modifiedresponse_notify.tpl');

define('_MI_XHELP_TICKET_CHANGEDSTATUS_NOTIFY','Ticket : Changement d\'Etat');
define('_MI_XHELP_TICKET_CHANGEDSTATUS_NOTIFYCAP','Me pr&eacute;venir lorsque l\'Etat de ce ticket est modifi&eacute;');
define('_MI_XHELP_TICKET_CHANGEDSTATUS_NOTIFYDSC','Recevoir une notification lorsque l\'Etat de ce ticket est modifi&eacute;');
define('_MI_XHELP_TICKET_CHANGEDSTATUS_NOTIFYSBJ','{X_MODULE} Etat de Ticket modifié - id {TICKET_ID}');
define('_MI_XHELP_TICKET_CHANGEDSTATUS_NOTIFYTPL','ticket_changedstatus_notify.tpl');

define('_MI_XHELP_TICKET_CHANGEDPRIORITY_NOTIFY','Ticket : Changement de Priorit&eacute;');
define('_MI_XHELP_TICKET_CHANGEDPRIORITY_NOTIFYCAP','Me pr&eacute;venir lorsque la priorit&eacute; de ce ticket est modifi&eacute;e');
define('_MI_XHELP_TICKET_CHANGEDPRIORITY_NOTIFYDSC','Recevoir une notification lorsque la priorit&eacute; de ce ticket est modifi&eacute;e');
define('_MI_XHELP_TICKET_CHANGEDPRIORITY_NOTIFYSBJ','{X_MODULE} Priorité du Ticket modifié - id {TICKET_ID}');
define('_MI_XHELP_TICKET_CHANGEDPRIORITY_NOTIFYTPL','ticket_changedpriority_notify.tpl');

define('_MI_XHELP_TICKET_NEWOWNER_NOTIFY','Ticket : Nouveau Responsable');
define('_MI_XHELP_TICKET_NEWOWNER_NOTIFYCAP','Me prevenir lorsque le responsable change pour ce ticket');
define('_MI_XHELP_TICKET_NEWOWNER_NOTIFYDSC','Recevoir une notification lorsque le reponsable de ce ticket est chang&eacute;');
define('_MI_XHELP_TICKET_NEWOWNER_NOTIFYSBJ','{X_MODULE} Changement de proprétaire du Ticket - id {TICKET_ID}');
define('_MI_XHELP_TICKET_NEWOWNER_NOTIFYTPL','ticket_newowner_notify.tpl');

define('_MI_XHELP_TICKET_NEWTICKET_NOTIFY','Ticket: Nouveau Ticket');
define('_MI_XHELP_TICKET_NEWTICKET_NOTIFYCAP','Confirmer quand un nouveau ticket est cr&eacute;&eacute;');
define('_MI_XHELP_TICKET_NEWTICKET_NOTIFYDSC','Recevoir une notification quand un nouveau ticket est cr&eacute;&eacute;');
define('_MI_XHELP_TICKET_NEWTICKET_NOTIFYSBJ','{X_MODULE} Ticket créé - id {TICKET_ID}');
define('_MI_XHELP_TICKET_NEWTICKET_NOTIFYTPL','ticket_newticket_notify.tpl');

define('_MI_XHELP_DEPT_CLOSETICKET_NOTIFY','Sect : Fermeture de Ticket');
define('_MI_XHELP_DEPT_CLOSETICKET_NOTIFYCAP','Me pr&eacute;venir quand un ticket est clos');
define('_MI_XHELP_DEPT_CLOSETICKET_NOTIFYDSC','Recevoir une notification quand un ticket est clos');
define('_MI_XHELP_DEPT_CLOSETICKET_NOTIFYSBJ','{X_MODULE} Ticket clos - id {TICKET_ID}');
define('_MI_XHELP_DEPT_CLOSETICKET_NOTIFYTPL','dept_closeticket_notify.tpl');

define('_MI_XHELP_TICKET_CLOSETICKET_NOTIFY','Ticket: Fermeture de Ticket');
define('_MI_XHELP_TICKET_CLOSETICKET_NOTIFYCAP','Confirmer quand un Ticket est clos');
define('_MI_XHELP_TICKET_CLOSETICKET_NOTIFYDSC','Recevoir une notification quand un Ticket est clos');
define('_MI_XHELP_TICKET_CLOSETICKET_NOTIFYSBJ','{X_MODULE} Ticket clos - id {TICKET_ID}');
define('_MI_XHELP_TICKET_CLOSETICKET_NOTIFYTPL','ticket_closeticket_notify.tpl');

define('_MI_XHELP_TICKET_NEWUSER_NOTIFY','Ticket: Nouvel Utilisateur cr&eacute;&eacute; &agrave; partir d\'une soumission d\'Email');
define('_MI_XHELP_TICKET_NEWUSER_NOTIFYCAP','Notifie l\'Utilisateur qu\'un nouveau compte a &eacte;t&eacute; cr&eacte;&eacute;');
define('_MI_XHELP_TICKET_NEWUSER_NOTIFYDSC','Recevoir une notification quand un nouveau utilisateur est cr&eacute;&eacute; &agrave; partir d\'une soumission d\'Email');
define('_MI_XHELP_TICKET_NEWUSER_NOTIFYSBJ','{X_MODULE} Nouvel Utilisateur créé');
define('_MI_XHELP_TICKET_NEWUSER_NOTIFYTPL','ticket_new_user_byemail.tpl');

define('_MI_XHELP_TICKET_NEWUSER_ACT1_NOTIFY','Ticket: Nouveau Utiliteur cr&eacute;&eacute;');
define('_MI_XHELP_TICKET_NEWUSER_ACT1_NOTIFYCAP','Notifie l\'Utilisateur lorsqu\'un nouveau compte vient d\'&ecirc;tre cr&eacute;&eacute;');
define('_MI_XHELP_TICKET_NEWUSER_ACT1_NOTIFYDSC','Recevoir une notification quand un nouveau utilisateur est cr&eacute;&eacute; par un email de sousmission (Auto Activation)');
define('_MI_XHELP_TICKET_NEWUSER_ACT1_NOTIFYSBJ','{X_MODULE} Nouveau Utilisateur créé');
define('_MI_XHELP_TICKET_NEWUSER_ACT1_NOTIFYTPL','ticket_new_user_activation1.tpl');

define('_MI_XHELP_TICKET_NEWUSER_ACT2_NOTIFY','Ticket: Nouveau Utilisateur cr&eacute;&eacute;');
define('_MI_XHELP_TICKET_NEWUSER_ACT2_NOTIFYCAP','Notifie l\'Utilisateur lorsqu\'un nouveau compte vient d\'&ecirc;tre cr&eacute;&eacute;');
define('_MI_XHELP_TICKET_NEWUSER_ACT2_NOTIFYDSC','Recevoir une notification quand un nouveau utilisateur est cr&eacute;&eacute; par un email de sousmission (Requiert une Activation d\'Admin)');
define('_MI_XHELP_TICKET_NEWUSER_ACT2_NOTIFYSBJ','{X_MODULE} Nouvel Utilisateur créé');
define('_MI_XHELP_TICKET_NEWUSER_ACT2_NOTIFYTPL','ticket_new_user_activation2.tpl');

define('_MI_XHELP_TICKET_EMAIL_ERROR_NOTIFY','Ticket: Erreur d\'Email');
define('_MI_XHELP_TICKET_EMAIL_ERROR_NOTIFYCAP','Notifie l\'Utilisateur lorsque son email n\'est pas enregistr&eacute;');
define('_MI_XHELP_TICKET_EMAIL_ERROR_NOTIFYDSC','Recevoir une notification quand l\'email de soumission n\'est pas enregistr&eacute;e');
define('_MI_XHELP_TICKET_EMAIL_ERROR_NOTIFYSBJ','RE: {TICKET_SUBJECT}');
define('_MI_XHELP_TICKET_EMAIL_ERROR_NOTIFYTPL','ticket_email_error.tpl');

define('_MI_XHELP_DEPT_MERGE_TICKET_NOTIFY','Sect : Fusion de Tickets');
define('_MI_XHELP_DEPT_MERGE_TICKET_NOTIFYCAP','Notifier moi lorsque des tickets sont fusionn&eacute;s');
define('_MI_XHELP_DEPT_MERGE_TICKET_NOTIFYDSC','recevoir une notification lorsque les tickets sont fusionn&eacute;s');
define('_MI_XHELP_DEPT_MERGE_TICKET_NOTIFYSBJ','{X_MODULE} Tickets fusionnés');
define('_MI_XHELP_DEPT_MERGE_TICKET_NOTIFYTPL','dept_mergeticket_notify.tpl');

define('_MI_XHELP_TICKET_MERGE_TICKET_NOTIFY','Ticket: Fusion de Tickets');
define('_MI_XHELP_TICKET_MERGE_TICKET_NOTIFYCAP','Notifier moi lorsque des tickets sont fusionn&eacute;s');
define('_MI_XHELP_TICKET_MERGE_TICKET_NOTIFYDSC','Revevoir une notification lorsque des tickets sont fusionn&eacute;s');
define('_MI_XHELP_TICKET_MERGE_TICKET_NOTIFYSBJ','{X_MODULE} Tickets fusionnés');
define('_MI_XHELP_TICKET_MERGE_TICKET_NOTIFYTPL','ticket_mergeticket_notify.tpl');

define('_MI_XHELP_TICKET_NEWTICKET_EMAIL_NOTIFY','Utilisateur : Nouveau ticket par Email');
define('_MI_XHELP_TICKET_NEWTICKET_EMAIL_NOTIFYCAP','Confirmation de la cr&eacute;ation d\'un nouveau ticket par email');
define('_MI_XHELP_TICKET_NEWTICKET_EMAIL_NOTIFYDSC','Recevoir une notification lorsqu\'un nouveau ticket est cr&eacute;&eacute; par email');
define('_MI_XHELP_TICKET_NEWTICKET_EMAIL_NOTIFYSBJ','RE: {TICKET_SUBJECT} {TICKET_SUPPORT_KEY}');
define('_MI_XHELP_TICKET_NEWTICKET_EMAIL_NOTIFYTPL','ticket_newticket_byemail_notify.tpl');

// Be sure to add new mail_templates to array in admin/index.php - modifyEmlTpl()
?>