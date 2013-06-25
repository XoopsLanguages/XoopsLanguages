<?php
//$Id: admin.php,v 1.28 2005/12/01 15:16:32 eric_juden Exp $

//Menu choices
define('_AM_XHELP_ADMIN_TITLE','Menu Administration %s');
define('_AM_XHELP_BLOCK_TEXT','Gestion des Blocs');
define('_AM_XHELP_MENU_MANAGE_DEPARTMENTS','Gestion des Départements');
define('_AM_XHELP_MENU_MANAGE_STAFF','Gestion des Equipes');
define('_AM_XHELP_MENU_MODIFY_EMLTPL','Mod&egrave;les des Emails');
define('_AM_XHELP_MENU_MODIFY_TICKET_FIELDS','Modifier les champs des Tickets');
define('_AM_XHELP_MENU_GROUP_PERM','Permissions des Groupes');
define('_AM_XHELP_MENU_MIMETYPES','Gestion des types MIME');
define('_AM_XHELP_MENU_PREFERENCES','Pr&eacute;f&eacute;rences');
define('_AM_XHELP_MENU_ADD_STAFF','Ajouter une Equipe');
define('_AM_XHELP_UPDATE_MODULE','Mise &agrave; Jour du Module');
define('_AM_XHELP_MENU_MANAGE_ROLES','Administation des Roles');
define('_AM_XHELP_TEXT_MANAGE_NOTIFICATIONS','Gestion des notifications');
define('_AM_XHELP_MENU_MANAGE_FAQ','Gestion de FAQ');

define('_AM_XHELP_SEC_TEXT_TICKET_ADD','Ajouter des Tickets');
define('_AM_XHELP_SEC_TEXT_TICKET_EDIT','Modifier des Tickets');
define('_AM_XHELP_SEC_TEXT_TICKET_DELETE','Effacer des Tickets');
define('_AM_XHELP_SEC_TEXT_TICKET_OWNERSHIP','Changer le propri&eacute;taire du Ticket');
define('_AM_XHELP_SEC_TEXT_TICKET_STATUS','Changer l\'Etat du Ticket');
define('_AM_XHELP_SEC_TEXT_TICKET_PRIORITY','Changer la priorit&eacute; du Ticket');
define('_AM_XHELP_SEC_TEXT_TICKET_LOGUSER','Enregistrer le Ticket pour l\'Utilisateur');
define('_AM_XHELP_SEC_TEXT_RESPONSE_ADD','Ajouter une R&eacute;ponse');
define('_AM_XHELP_SEC_TEXT_RESPONSE_EDIT','Modifier une R&eacute;ponse');
define('_AM_XHELP_SEC_TEXT_TICKET_MERGE','Fusionner des Tickets');
define('_AM_XHELP_SEC_TEXT_FILE_DELETE','Effacer les fichiers attach&eacute;s');
define('_AM_XHELP_SEC_TEXT_FAQ_ADD','Ajout de FAQs');
define('_AM_XHELP_SEC_TEXT_TICKET_TAKE_OWNERSHIP','Donner la propri&eacute;t&eacute; du ticket');

// Admin Menu
define('_AM_XHELP_ADMIN_ABOUT','A propos');
define('_AM_XHELP_ADMIN_GOTOMODULE','Aller au Module');

//Permissions
define('_AM_XHELP_GROUP_PERM','Permissions des groupes');
define('_AM_XHELP_GROUP_PERM_TITLE','Modifier les Permissions des Groupes');
define('_AM_XHELP_GROUP_PERM_NAME','Permissions');
define('_AM_XHELP_GROUP_PERM_DESC','S&eacute;lectionnez le(s) service(s) que chaque groupe sera autoris&eacute; &agrave; modifier');

// Messages
define('_AM_XHELP_MESSAGE_STAFF_UPDATE_ERROR','Erreur : &eacute;quipe non mise &agrave; jour');
define('_AM_XHELP_MESSAGE_FILE_READONLY','Ce fichier est en lecture seule. Merci de rendre le r&eacute;pertoire modules/xhelp/language/english/mail_templates ouvert en &eacute;criture');
define('_AM_XHELP_MESSAGE_FILE_UPDATED','Fichier mis &agrave; jour avec succ&egrave;s');
define('_AM_XHELP_MESSAGE_FILE_UPDATED_ERROR','Erreur : fichier non mis &agrave; jour');
define('_AM_XHELP_MESSAGE_ROLE_INSERT','Role ins&eacute;r&eacute; avec succ&egrave;s.');
define('_AM_XHELP_MESSAGE_ROLE_INSERT_ERROR','Erreur: le role n\'a pas &eacute;t&eacute; cr&eacute;&eacute;.');
define('_AM_XHELP_MESSAGE_ROLE_DELETE','Role effac&eacute; avec succ&egrave;s.');
define('_AM_XHELP_MESSAGE_ROLE_DELETE_ERROR','Erreur: n\'a pas &eacute;t&eacute; effac&eacute;.');
define('_AM_XHELP_MESSAGE_ROLE_UPDATE','Role mis &agrave; jour avec succ&egrave;s.');
define('_AM_XHELP_MESSAGE_ROLE_UPDATE_ERROR','Erreur: le role n\'a pas &eacute;t&eacute; mis &agrave; jour.');
define('_AM_XHELP_MESSAGE_DEPT_STORE','Permissions de département enregistr&eacute;s avec succ&egrave;s.');
define('_AM_XHELP_MESSAGE_DEPT_STORE_ERROR','Erreur: les permissions du département n\'ont pas &eacute;t&eacute; enregistr&eacute;es.');
define('_AM_XHELP_MESSAGE_DEF_ROLES','Les roles de permission par d&eacute;faut ont &eacute;t&eacute; ajout&eacute;s avec succ&egrave;s.');
define('_AM_XHELP_MESSAGE_DEF_ROLES_ERROR','Les roles de permissions par d&eacute;faut n\'ont pas &eacute;t&eacute; ajout&eacute;s.');
define('_AM_XHELP_MESSAGE_NO_DEPT','Erreur: pas de département sp&eacute;cifi&eacute;');
define('_AM_XHELP_MESSAGE_NO_DESC','Erreur: Vous n\'avez pas sp&eacute;cifi&eacute; de description.');
define('_AM_MESSAGE_ADD_STATUS_ERR','Erreur: L\'&eacute;tat n\'a pas &eacute;t&eacute; ajout&eacute;.');
define('_AM_MESSAGE_EDIT_STATUS_ERR','Erreur: l\'&eacute:tat n\'a pas &eacute;t&eacute; mis &agrave; jour.');
define('_AM_XHELP_DEL_STATUS_ERR','Erreur: l\'&eacute;tat n\'a pas &eacute;t&eacute; effac&eacute;.');
define('_AM_XHELP_STATUS_HASTICKETS_ERR','Erreur: Veuillez mettre &agrave; jour les tickets utilisant cet &eacute;tat.');
define('_AM_XHELP_MESSAGE_NO_ID','Erreur: le num&eacute;ro n\'a pas &eacute;t&eacute; sp&eacute;cifi&eacute;.');
define('_AM_XHELP_MESSAGE_NO_VALUE','Erreur: la valeur du type mine n\'a pas &eacute;t&eacute; sp&eacute;cifi&eacute;e.');
define('_AM_XHELP_MESSAGE_EDIT_MIME_ERROR','Erreur: le type mine n\'a pas &eacute;t&eacute; mis &agrave; jour.');
define('_AM_XHELP_MESSAGE_DELETE_MIME_ERROR','Erreur: le type mine n\'a pas &eacute;t&eacute; effac&eacute;.');
define('_AM_XHELP_MESSAGE_ADD_MIME_ERROR','Erreur: le type mine n\'a pas &eacute;t&eacute; ajout&eacute;.');

// Buttons
define('_AM_XHELP_BUTTON_DELETE','Supprimer');
define('_AM_XHELP_BUTTON_EDIT','Editer');
define('_AM_XHELP_BUTTON_SUBMIT','Valider');
define('_AM_XHELP_BUTTON_RESET','RAZ');
define('_AM_XHELP_BUTTON_ADDSTAFF','Ajouter membre');
define('_AM_XHELP_BUTTON_UPDATESTAFF','Mise &agrave; jour de l\'&eacute;quipe');
define('_AM_XHELP_BUTTON_CANCEL','Annuler');
define('_AM_XHELP_BUTTON_UPDATE','Mise &agrave; jour');
define('_AM_XHELP_BUTTON_CREATE_ROLE','Cr&eacute;er un nouveau role');
define('_AM_XHELP_BUTTON_CLEAR_PERMS','Nettoyer les Permissions');
//define('_AM_XHELP_BUTTON_ADD_DEPT','Ajout de Département');

define('_AM_XHELP_EDIT_DEPARTMENT','Editer le Département');
define('_AM_XHELP_EXISTING_DEPARTMENTS','Départements existants :');
define('_AM_XHELP_MANAGE_DEPARTMENTS','Gestion des Départements');
define('_AM_XHELP_MANAGE_STAFF','Gestion des Equipes');
define('_AM_XHELP_EXISTING_STAFF','Membres actuels de l\'&eacute;quipe :');
define('_AM_XHELP_ADD_STAFF','Ajouter un membre &agrave; l\'&eacute;quipe');
define('_AM_XHELP_EDIT_STAFF','Editer les membres de l\'&eacute;quipe');
define('_AM_XHELP_INDEX','Index');
define('_AM_XHELP_DEPARTMENT_SERVERS','Boite aux Lettres de Département');
define('_AM_XHELP_DEPARTMENT_SERVERS_EMAIL','Addresse Email');
define('_AM_XHELP_DEPARTMENT_SERVERS_TYPE','Type de Boite aux Lettres');
define('_AM_XHELP_DEPARTMENT_SERVERS_PRIORITY','Priorit&eacute; par d&eacute;faut du Ticket');
define('_AM_XHELP_DEPARTMENT_SERVERS_SERVERNAME','Serveur');
define('_AM_XHELP_DEPARTMENT_SERVERS_PORT','Port');
define('_AM_XHELP_DEPARTMENT_SERVERS_ACTION','Actions');
define('_AM_XHELP_DEPARTMENT_ADD_SERVER','Ajouter une Boite aux Lettres au moniteur');
define('_AM_XHELP_DEPARTMENT_SERVER_USERNAME','Nom d\'Utilisateur');
define('_AM_XHELP_DEPARTMENT_SERVER_PASSWORD','Mot de Passe');
define('_AM_XHELP_DEPARTMENT_SERVER_EMAILADDRESS','R&eacute;pondre à l\'Adresse Email');
define('_AM_XHELP_DEPARTMENT_NO_ID','Ne peut pas trouver le  N° de Département. Abandon.');
define('_AM_XHELP_DEPARTMENT_SERVER_SAVED','Ajouter une Boite aux Lettres au Département.');
define('_AM_XHELP_DEPARTMENT_SERVER_ERROR','Erreur lors de la Sauvegarde de la Boite aux Lettres du Département.');
define('_AM_XHELP_DEPARTMENT_SERVER_NO_ID','La Boite aux Lettres du Département n\'a pas &eacte;t&eacute; sp&eacute;cifi&eacute;e.');
define('_AM_XHELP_DEPARTMENT_SERVER_DELETED','Boite aux Lettres du Département Effac&eacute;e.');
define('_AM_XHELP_DEPARTMENT_SERVER_DELETE_ERROR','Erreur lors de l\'effacement de la Boite aux Lettres du Département.');
define('_AM_XHELP_STAFF_ERROR_DEPTARTMENTS','Vous devez assigner un utilisateur &agrave; 1 ou plusieurs départements avant de sauvegarder');
define('_AM_XHELP_STAFF_ERROR_ROLES','Vous devez assigner un utilisateur &agrave; 1 ou plusieurs roles avant de sauvegarder');
define('_AM_XHELP_STAFF_ERROR_USERS','Vous devez assigner un utilisateur &agrave; devenir membre de l\'&eacute;quipe.');
define('_AM_XHELP_STAFF_EXISTS','Erreur : cet utilisateur est d&eacute;j&agrave; membre de l\'&eacute;quipe.');

define('_AM_XHELP_MBOX_POP3','POP3');
define('_AM_XHELP_MBOX_IMAP','IMAP');

define('_AM_XHELP_TEXT_ADD_DEPT','Ajouter un Département :');
define('_AM_XHELP_TEXT_EDIT_DEPT','Editer le Nom du Département :');
define('_AM_XHELP_TEXT_EDIT','Editer');
define('_AM_XHELP_TEXT_DELETE','Supprimer');
define('_AM_XHELP_TEXT_SELECTUSER','S&eacute;lectionner le pseudo :');
define('_AM_XHELP_TEXT_DEPARTMENTS','Départements :');
define('_AM_XHELP_TEXT_USER','Pseudo :');
define('_AM_XHELP_TEXT_ALL_DEPTS','Tous');
define('_AM_XHELP_TEXT_NO_DEPTS','Aucun');
define('_AM_XHELP_TEXT_MAKE_DEPTS','Vous devez ajouter un Département avant de cr&eacute;er une &eacute;quipe !');
define('_AM_XHELP_LINK_ADD_DEPT','Ajouter des Départements');
define('_AM_XHELP_TEXT_TOP_CLOSERS','Top Cl&ocirc;tureurs');
define('_AM_XHELP_TEXT_WORST_CLOSERS','Pires Cl&ocirc;tureurs');
define('_AM_XHELP_TEXT_HIGH_PRIORITY','Ouvrir un ticket &agrave; Haute priorit&eacute;');
define('_AM_XHELP_TEXT_NO_OWNER','Pas de propri&eacute;taire');
define('_AM_XHELP_TEXT_NO_DEPT','Pas de département');
define('_AM_XHELP_TEXT_RESPONSE_TIME','Temps de r&eacute;ponse le plus rapide');
define('_AM_XHELP_TEXT_RESPONSE_TIME_SLOW','Temps de r&eacute;ponse le plus long');
define('_AM_XHELP_TEXT_PRIORITY','Priorit&eacute; :');
define('_AM_XHELP_TEXT_ELAPSED','Ecoul&eacute; :');
define('_AM_XHELP_TEXT_STATUS','Statuts :');
define('_AM_XHELP_TEXT_SUBJECT','Sujet :');
define('_AM_XHELP_TEXT_DEPARTMENT','Département :');
define('_AM_XHELP_TEXT_OWNER','Propri&eacute;taire :');
define('_AM_XHELP_TEXT_LAST_UPDATED','Derni&egrave;re MAJ :');
define('_AM_XHELP_TEXT_LOGGED_BY','Enregist&eacute; Par :');
define('_AM_XHELP_TEXT_EXISTING_ROLES','Roles existants');
define('_AM_XHELP_TEXT_NO_ROLES','Pas de roles trouvés');
define('_AM_XHELP_TEXT_ROLES','Roles:');
define('_AM_XHELP_TEXT_CREATE_ROLE','Cr&eacute;er un nouveau Role');
define('_AM_XHELP_TEXT_EDIT_ROLE','Editer un Role');
define('_AM_XHELP_TEXT_NAME','Nom:');
define('_AM_XHELP_TEXT_PERMISSIONS','Permissions:');
define('_AM_XHELP_TEXT_SELECT_ALL','Selectionner Tous');
define('_AM_XHELP_TEXT_DEPT_PERMS','Personnaliser les Permissions du Département');
define('_AM_XHELP_TEXT_CUSTOMIZE','Personnaliser');
define('_AM_XHELP_TEXT_ACTIONS','Actions:');
define('_AM_XHELP_TEXT_ID','N°:');
define('_AM_XHELP_TEXT_LOOKUP_USER','R&eacute;solution d\'Utilisateur');
define('_AM_XHELP_TEXT_BY','De');
define('_AM_XHELP_TEXT_ASCENDING','Croissant');
define('_AM_XHELP_TEXT_DESCENDING','D&eacute;croissant');
define('_AM_XHELP_TEXT_SORT_BY','trier par :');
define('_AM_XHELP_TEXT_ORDER_BY','Ordonner par :');
define('_AM_XHELP_TEXT_NUMBER_PER_PAGE','Nombre par Page:');
define('_AM_XHELP_TEXT_SEARCH_MIME','Recherche de type mine');
define('_AM_XHELP_TEXT_SEARCH_BY','Recherche par :');
define('_AM_XHELP_TEXT_SEARCH_TEXT','Recherche de texte :');
define('_AM_XHELP_TEXT_GO_BACK_SEARCH','Retour &agrave; la recherche');
define('_AM_XHELP_TEXT_FIND_USERS','Trouver des utilisateurs');

define('_AM_XHELP_SEARCH_BEGINEGINDATE','Date de d&eacute;but :');
define('_AM_XHELP_SEARCH_ENDDATE','Date de cloture :');

define('_AM_XHELP_TEXT_ADD_STATUS','Ajouter un &eacute;tat');
define('_AM_XHELP_TEXT_STATE','Etat :');
define('_AM_XHELP_TEXT_MANAGE_STATUSES','Gestion des Statuts');
define('_AM_XHELP_TEXT_EDIT_STATUS','Editer les Statuts');

define('_AM_XHELP_TEXT_NO_RECORDS','Aucun enregistrement trouv&eacute;');
define('_AM_XHELP_TEXT_MAIL_EVENTS','Ev&eacute;nements d\'emails');
define('_AM_XHELP_TEXT_MAILBOX','Boite aux lettres :');
define('_AM_XHELP_TEXT_EVENT_CLASS','Classe d\'&eacute;v&eacute;nement :');
define('_AM_XHELP_TEXT_TIME','Heure :');
define('_AM_XHELP_NO_EVENTS','aucun &eacute;v&eacute;nement trouv&eacute;');
define('_AM_XHELP_SEARCH_EVENTS','Recherche d\'&eacute;v&egrave;nements d\'Email');
define('_AM_XHELP_BUTTON_SEARCH','Recherche');
define('_AM_XHELP_BUTTON_TEST','Test');
define('_AM_XHELP_POSITION','Position');
define('_AM_XHELP_TEXT_MANAGE_FILES','Gestion des fichiers');
define('_AM_XHELP_TEXT_TICKETID','N° de Ticket:');
define('_AM_XHELP_TEXT_FILENAME','Nom de fichier :');
define('_AM_XHELP_TEXT_MIMETYPE','Type Mine :');
define('_AM_XHELP_TEXT_TOTAL_USED_SPACE','Total de l\'Espace utilis&eacute;');
define('_AM_XHELP_TEXT_SIZE','Taille :');
define('_AM_XHELP_TEXT_DELETE_RESOLVED','Effacer les attachements des tickets r&eacute;solus ?');
define('_AM_XHELP_TEXT_NO_FILES','Aucun fichier trouv&eacute;');
define('_AM_XHELP_TEXT_RESOLVED_ATTACH','Attachements des r&eacute;solus :');
define('_AM_XHELP_TEXT_ALL_ATTACH','Tous les attachements :');
define('_AM_XHELP_TEXT_MAINTENANCE','Taches de Maintenance');
define('_AM_XHELP_TEXT_ORPHANED','Supprimer les enregistrements de travaux orphelins dans la table xhelp_staff ?');
define('_AM_XHELP_TEXT_DELETE_STAFF_DEPT','Supprimer le membre de l\&eacute;quipe du département');
define('_AM_XHELP_MSG_NO_DEPTID','Erreur: aucun département sp&eacute;cifi&eacute;.');
define('_AM_XHELP_MSG_NO_UID','Erreur: aucun utilisateur sp&eacute;cifi&eacute;.');
define('_AM_XHELP_MSG_REMOVE_STAFF_DEPT_ERR','Erreur: le membre de l\'&eacte;quipe n\'a pas &eacute;t&eacute; suprim&eacute;.');
define('_AM_XHELP_TEXT_DEFAULT','D&eacute;faut');
define('_AM_XHELP_TEXT_MAKE_DEFAULT_DEPT','Faire de ce d&eacute;partement celui par d&eacute;faut');
define('_AM_XHELP_TEXT_DEFAULT_DEPT','D&eacute;partement par d&eacute;faut');
define('_AM_XHELP_MSG_CHANGED_DEFAULT_DEPT','Mise &agrave; jour du d&eacute;partement par d&eacute;faut.');

// Mimetypes
define("_AM_XHELP_MIME_ID","N°");
define("_AM_XHELP_MIME_EXT","EXT");
define("_AM_XHELP_MIME_NAME","Type d'Application");
define("_AM_XHELP_MIME_ADMIN","Admin");
define("_AM_XHELP_MIME_USER","Utilisateur");
// Mimetype Form
define("_AM_XHELP_MIME_CREATEF","Cr&eacute;er type Mime");
define("_AM_XHELP_MIME_MODIFYF","Modifier type Mime");
define("_AM_XHELP_MIME_EXTF","Extension fichier :");
define("_AM_XHELP_MIME_NAMEF","Type d'application :<div style='padding-top: 8px;'><span style='font-weight: normal;'>Entrer l'application associ&eacute;e &agrave; cette extension.</span></div>");
define("_AM_XHELP_MIME_TYPEF","Types Mime :<div style='padding-top: 8px;'><span style='font-weight: normal;'>Entrer chaque type mime associ&eacute; avec l'extension. Chaque type mime doit &ecirc;tre s&eacute;par&eacute; avec un espace.</span></div>");
define("_AM_XHELP_MIME_ADMINF","Types Mime autoris&eacute;s pour l'Admin");
define("_AM_XHELP_MIME_ADMINFINFO","<b>Types Mime autoris&eacute;s pour l'envoi de fichier par l'admin :</b>");
define("_AM_XHELP_MIME_USERF","Types Mime autoris&eacute;s pour les utilisateurs");
define("_AM_XHELP_MIME_USERFINFO","<b>Types Mime autoris&eacute;s pour l'envoi de fichier par les utilisateurs :</b>");
define("_AM_XHELP_MIME_NOMIMEINFO","Pas de type Mime s&eacute;lectionn&eacute;.");
define("_AM_XHELP_MIME_FINDMIMETYPE","Trouver un nouveau type Mime :");
define("_AM_XHELP_MIME_EXTFIND","Recherche Extension de fichier :<div style='padding-top: 8px;'><span style='font-weight: normal;'>Entrer l'extension recherch&eacute;e.</span></div>");
define("_AM_XHELP_MIME_INFOTEXT","<ul><li>Nouveau type Mime a cr&eacute;er, &eacute;diter ou supprimer via ce formulaire.</li>
	<li>Rechercher de nouveaux types mime via un site web externe.</li> 
	<li>Voir les types mime pour envoi de fichier des admins et des utilisateurs.</li> 
	<li>Changer le statut d'envoi d'un type mime.</li></ul> 
	");

// Mimetype Buttons
define("_AM_XHELP_MIME_CREATE","Cr&eacute;er");
define("_AM_XHELP_MIME_CLEAR","RAZ");
define("_AM_XHELP_MIME_CANCEL","Annuler");
define("_AM_XHELP_MIME_MODIFY","Modifier");
define("_AM_XHELP_MIME_DELETE","Supprimer");
define("_AM_XHELP_MIME_FINDIT","R&eacute;cuperer Extension !");
// Mimetype Database
define("_AM_XHELP_MIME_DELETETHIS","Supprimer le type mime s&eacute;lectionn&eacute; ?");
define("_AM_XHELP_MIME_MIMEDELETED","type Mime %s effac&eacute;");
define("_AM_XHELP_MIME_CREATED","Information du type mime Cr&eacute;&eacute;e");
define("_AM_XHELP_MIME_MODIFIED","Information du type mime Modifi&eacute;e");

define("_AM_XHELP_MINDEX_ACTION","Action");
define("_AM_XHELP_MINDEX_PAGE","<b>Page :<b> ");

//image admin icon
define("_AM_XHELP_ICO_EDIT","Editer cet &eacute;l&eacute;ment");
define("_AM_XHELP_ICO_DELETE","Supprimer cet &eacute;l&eacute;ment");
define("_AM_XHELP_ICO_ONLINE","En ligne");
define("_AM_XHELP_ICO_OFFLINE","Hors ligne");
define("_AM_XHELP_ICO_APPROVED","Approuv&eacute;");
define("_AM_XHELP_ICO_NOTAPPROVED","Non Approuv&eacute;");

define("_AM_XHELP_ICO_LINK","Lien relatif");
define("_AM_XHELP_ICO_URL","Ajouter une URL");
define("_AM_XHELP_ICO_ADD","Ajouter");
define("_AM_XHELP_ICO_APPROVE","Approuver");
define("_AM_XHELP_ICO_STATS","Stats");

define("_AM_XHELP_ICO_IGNORE","Ignorer");
define("_AM_XHELP_ICO_ACK","Rapport de rompus accept&eacute;");
define("_AM_XHELP_ICO_REPORT","Accepter le rapport des rompus?");
define("_AM_XHELP_ICO_CONFIRM","Rapport de rompu confirm&eacute;");
define("_AM_XHELP_ICO_CONBROKEN","Confirmer le rapport de rompus?");

define("_AM_XHELP_UPLOADFILE","Fichier transmis correctement");
define('_AM_XHELP_TEXT_TICKET_INFO','Information Ticket');
define('_AM_XHELP_TEXT_OPEN_TICKETS','Tickets ouverts');
define('_AM_XHELP_TEXT_HOLD_TICKETS','Tickets en cours');
define('_AM_XHELP_TEXT_CLOSED_TICKETS','Tickets ferm&eacute;s');
define('_AM_XHELP_TEXT_TOTAL_TICKETS','Total Tickets');

define('_AM_XHELP_TEXT_TEMPLATE_NAME','Nom du mod&egrave;le :');
define('_AM_XHELP_TEXT_DESCRIPTION','Description :');
define('_AM_XHELP_TEXT_PATH','Chemin :');
define('_AM_XHELP_TEXT_GENERAL_TAGS','Tags G&eacute;n&eacute;raux');
define('_AM_XHELP_TEXT_GENERAL_TAGS1','X_SITEURL - URL du site');
define('_AM_XHELP_TEXT_GENERAL_TAGS2','X_SITENAME - nom du site');
define('_AM_XHELP_TEXT_GENERAL_TAGS3','X_ADMINMAIL - adresse mail de l\'administrateur');
define('_AM_XHELP_TEXT_GENERAL_TAGS4','X_MODULE - nom du module');
define('_AM_XHELP_TEXT_GENERAL_TAGS5','X_MODULE_URL - lien vers la page index du module');
define('_AM_XHELP_TEXT_TAGS_NO_MODIFY','Ne pas modifier les autres tags que ceux list&eacute;s !');

define('_AM_XHELP_CURRENTVER','Version Courante: <span class="currentVer">%s</span>');
define('_AM_XHELP_DBVER','Version de Base de Donn&eacute;es : <span class="dbVer">%s</span>');
define('_AM_XHELP_DB_NOUPDATE','Votre Base de Données est à jour. Aucune mis à jour n\'est nécéssaire.');
define('_AM_XHELP_DB_NEEDUPDATE','Votre Base de Donn&eacute;es est p&eacute;rim&eacute;e. Veuillez mettre &agrave; jour les tables de votre Base de Donn&eacute;es !');
define('_AM_XHELP_UPDATE_NOW','Mettre &agrave; jour maintenant !');
define('_AM_XHELP_DB_NEEDINSTALL','Votre Base de Donn&eacute;es n\'est pas synchronis&eacute;e avec la version install&eacute;e. Veuillez installer la m&ecirc;me version que celle de la Base de Donn&eacute;es');
define('_AM_XHELP_VERSION_ERR','Incapacit&eacute; de d&eacute;terminer la version pr&eacute;vue.');
define('_AM_XHELP_MSG_MODIFYTABLE','Table %s modifi&eacute;e');
define('_AM_XHELP_MSG_MODIFYTABLE_ERR','Erreur lors de la modification de la table %s');
define('_AM_XHELP_MSG_ADDTABLE','Table %s ajout&eacute;e');
define('_AM_XHELP_MSG_ADDTABLE_ERR','Erreur lors de l\'ajout de la table %s');
define('_AM_XHELP_MSG_UPDATESTAFF','Equipe #%s mis &agrave; jour');
define('_AM_XHELP_MSG_UPDATESTAFF_ERR','Erreur lors de la mise &agrave; jour de l\'&eacute;quipe #%s');
define('_AM_XHELP_UPDATE_DB','Mise &agrave; jour de la Base de Donn&eacute;es :');
define('_AM_XHELP_UPDATE_TO','Mise &agrave; jour vers la version %s:');
define('_AM_XHELP_UPDATE_OK','Mise &agrave; jour vers la version %s r&eacute;ussie');
define('_AM_XHELP_UPDATE_ERR','Erreurs lors de la mise &agrave; jour vers la version %s');
define('_AM_XHELP_MSG_UPD_PERMS','Permissions du Staff #%s ajout&eacute;s pour le département #%s.');
define('_AM_XHELP_MSG_REMOVE_TABLE','la Table %s a &eacute;t&eacute; effac&eacute;e de votre base de données.');
define('_AM_XHELP_MSG_GLOBAL_PERMS','l\'&eacute;quipe #%s dispose des permissions globales.');
define('_AM_XHELP_MSG_NOT_REMOVE_TABLE','Erreur: la table %s n\'a pas &eacute;t&eacute; effac&eacute;e de votre base de donn&eacute;es.');
define('_AM_XHELP_MSG_RENAME_TABLE','la Table %s a &eacte;t&eacute; renomm&eacute;e en %s.');
define('_AM_XHELP_MSG_RENAME_TABLE_ERR','Erreur: la table %s n\'a pas &eacute;t&eacute; renomm&eacute;e.');
define('_AM_XHELP_MSG_UPDATE_ROLE','le role de permissions %s a &eacute;t&eacute; mis à jour.');
define('_AM_XHELP_MSG_UPDATE_ROLE_ERR','Erreur: le role de permissions %s n\'a pas &eacte;t&eacute; mis &agrave; jour.');
define('_AM_XHELP_MSG_DEPT_DEL_CFRM','Etes vous certain de vouloir effacer ce Département #%u?');
define('_AM_XHELP_MSG_STAFF_DEL_CFRM','Etes vous certain de vouloir effacer cette &ecute;quipe #%u?');
define('_AM_XHELP_MSG_DEPT_MBOX_DEL_CFRM','Ets vous certain de d&eacute;sirer effacer cette boite aux lettres %s?');
define('_AM_XHELP_MSG_ADD_STATUS_ERR','Erreur: L\'&eacute;tat \'%s\' n\'a pas &eacute;t&eacute; ajout&eacute;.');
define('_AM_XHELP_MSG_ADD_STATUS','L\'&eacute;tat \'%s\' a &eacute;t&eacute; ajout&eacute;.');
define('_AM_XHELP_MSG_CHANGED_STATUS','Tickets mis &agrave; jour avec le nouvel &eacute;tat.');
define('_AM_XHELP_MSG_CHANGED_STATUS_ERR','Erreur: &eacute;tat de ticket non mis &agrave; jour.');
define('_AM_XHELP_MSG_DELETE_RESOLVED','Etes vous certain de vouloir d&eacute;sirer supprimer les attachements des tickets r&eacute;solus ?');
define('_AM_XHELP_MSG_DELETE_FILE','Etes vous certain de d&eacute;sirer effacer cette pi&egrave;ce attach&eacute;e ?');
define('_AM_XHELP_MSG_ADD_CONFIG_ERR','Erreur: la valeur de configuration pour le département n\'a pa &eacute;t&eacute; sauvegard&eacute;e');
define('_AM_XHELP_MSG_UPDATE_CONFIG_ERR','Erreur: la valeur de configuration pour le département n\'a pas &eacute;t&eacute; mis &agrave; jour');
define('_AM_XHELP_MSG_CLEAR_ORPHANED_ERR','Vos enregistrement de travaux ont &eacute;t&eacute; mis &agrave; jour.');
define('_AM_XHELP_MSG_UPDATE_SEARCH','La recherche sauvegard&eacute;e #%u a &eacute;t&eacute; mise &agrave; jour.');
define('_AM_XHELP_MSG_UPDATE_SEARCH_ERR','Erreur : la recherche sauvegard&eacute;e #%u n\'a pas &eacute;t&eacute; mise &agrave; jour.');

define('_AM_XHELP_TEXT_CONTRIB_INFO','Informations sur les contributeurs');
define('_AM_XHELP_TEXT_DEVELOPERS','D&eacute;velopeurs:');
define('_AM_XHELP_TEXT_TRANSLATORS','Traducteurs:');
define('_AM_XHELP_TEXT_TESTERS','Testeurs:');
define('_AM_XHELP_TEXT_DOCUMENTER','Documentateurs:');
define('_AM_XHELP_TEXT_CODE','Code:');
define('_AM_XHELP_TEXT_MODULE_DEVELOPMENT','Informtions de D&eacute;velopment du Module');
define('_AM_XHELP_TEXT_DEMO_SITE','Site de d&eacute;mo :');
define('_AM_XHELP_DEMO_SITE','Site de d&eacute;mo 3Dev');
define('_AM_XHELP_TEXT_OFFICIAL_SITE','Site de support officiel :');
define('_AM_XHELP_OFFICIAL_SITE','3Dev.org');
define('_AM_XHELP_TEXT_REPORT_BUG','Vous avez rencontr&eacute, un bug?');
define('_AM_XHELP_REPORT_BUG','Rapporter un Bug');
define('_AM_XHELP_TEXT_NEW_FEATURE','Vous d&eacute;sirez une fonction ?');
define('_AM_XHELP_NEW_FEATURE','Nouvelle fonction');
define('_AM_XHELP_TEXT_QUESTIONS','Questions ?');
define('_AM_XHELP_QUESTIONS','Poser une question aux d&eacute;veloppeurs du module');
define('_AM_XHELP_TEXT_RELEASE_DATE','Date de mise &agrave; disposition :');
define('_AM_XHELP_TEXT_DISCLAIMER','Avertissement');
define('_AM_XHELP_DISCLAIMER','Attention: Ce module est &agrave; l\'&eacute;tape b&eacute;ta. Il ne doit pas &ecirc;tre utilis&eacute; sur un site de production. Les d&eacute;veloppeurs ne peuvent &ecirc;tre tenu responsable en aucune sorte des troubles pouvant &ecirc;tre occasionn&eacute; par l\'utilisation de ce module.');
define('_AM_XHELP_TEXT_CHANGELOG','Journal de modifications');
define('_AM_XHELP_TEXT_EDIT_DEPT_PERMS','Visibilit&eacute, de département :');

define('_AM_XHELP_PATH_CONFIG',"Configuration du r&eacute;pertoire du module");
define('_AM_XHELP_PATH_TICKETATTACH','Pi&egrave;ces jointes de Ticket');
define('_AM_XHELP_PATH_EMAILTPL','Mod&eacute;le d\'Email');
define('_AM_XHELP_TEXT_CREATETHEDIR','Cr&eacute;ation du dossier');
define('_AM_XHELP_TEXT_SETPERM','Param&egrave;trages des Permissions');

define('_AM_XHELP_PATH_AVAILABLE',"<span style='font-weight: bold; color: green;'>Valide</span>");
define('_AM_XHELP_PATH_NOTAVAILABLE',"<span style='font-weight: bold; color: red;'>Non valide</span>");
define('_AM_XHELP_PATH_NOTWRITABLE',"<span style='font-weight: bold; color: red;'>Non ouvert en &eacute;criture</span>");
define('_AM_XHELP_PATH_CREATED',"Dossier cr&eacute;&eacute; avec succ&egrave;s");
define('_AM_XHELP_PATH_NOTCREATED',"Le dossier n\'a pas &eacute;t&eacute; cr&eacute;&eacute;");
define('_AM_XHELP_PATH_PERMSET','Permissions de dossiers param&eacute;tr&eacute;es avec succ&eagrave;s.');
define('_AM_XHELP_PATH_NOTPERMSET','Les permissions de dossier n\'ont pas pu &ecirc;tre param&eacute;tr&eacute;es.');
define('_AM_XHELP_MESSAGE_ACTIVATE','Activer');
define('_AM_XHELP_MESSAGE_DEACTIVATE','D&eacute;sactiver');
define('_AM_XHELP_TEXT_ACTIVE','Actif');
define('_AM_XHELP_TEXT_INACTIVE','En-Activit&eacute;');
define('_AM_XHELP_TEXT_ACTIVITY','Activit&eacute;');
define('_AM_XHELP_DEPARTMENT_EDIT_SERVER','Mise &agrave; jour de la boite aux lettres du département');

define('_AM_XHELP_TEXT_MANAGE_FIELDS','Gestion de champs personnalisés');
define('_AM_XHELP_ADD_FIELD','Ajouter un champs personnaliser');
define('_AM_XHELP_EDIT_FIELD','Modification du champ personnalisé');
define('_AM_XHELP_TEXT_NAME_DESC','Nom qui sera montr&eacute; à chacun lorsqu\'il remplira les informations du ticket.');
define('_AM_XHELP_TEXT_FIELDNAME','Nom du champs :');
define('_AM_XHELP_TEXT_FIELDNAME_DESC','Utilis&eacute; dans le code pour le nom de l\'&eacute;l&eacute;ment.');
define('_AM_XHELP_TEXT_DESCRIPTION_DESC','Tout texte pouvant clarifier la fonction du champ (La m&ecirc;me chose ce texte est donn&eacute; sur cette page.)');
define('_AM_XHELP_TEXT_CONTROLTYPE','Type de contr&ocirc;le :');
define('_AM_XHELP_TEXT_CONTROLTYPE_DESC','Le type de contr&ocirc;le HTML rendu dans le champs customis&eacute;.');
define('_AM_XHELP_TEXT_DEPT_DESC','Dans quel d&eacute;partement d&eacute;sirez vous montrer ce champ ?');
define('_AM_XHELP_TEXT_REQUIRED','Requis :');
define('_AM_XHELP_TEXT_REQUIRED_DESC','Ce champs devra t\'il &ecirc;tre requis &agrave; l\'ajout de tichet ?');
define('_AM_XHELP_TEXT_DATATYPE','Type de donn&eacute;es :');
define('_AM_XHELP_TEXT_DATATYPE_DESC','De quel type de donn&eacute;es est ce champ ?');
define('_AM_XHELP_TEXT_VALIDATION','Validation:');
define('_AM_XHELP_TEXT_VALIDATION_DESC','Utilisatez une expression r&eacute;guliaire afin de valider les donn&eacute;es entr&eacute;es par les utilisateurs.');
define('_AM_XHELP_TEXT_WEIGHT','Poid :');
define('_AM_XHELP_TEXT_WEIGHT_DESC','Utilisation des champs customis&eacute;s de mani&egrave;re ordonn&eacute;.');
define('_AM_XHELP_TEXT_FIELDVALUES','Liste des valeurs de champs :');
define('_AM_XHELP_TEXT_FIELDVALUES_DESC','*** Placeholder: requiert une description texte');
define('_AM_XHELP_TEXT_DEFAULTVALUE','Valeur par d&eacute;faut :');
define('_AM_XHELP_TEXT_DEFAULTVALUE_DESC','Valeur par d&eacute;faut propos&eacute;e dans le champs customis&eacute;.<br />Pour un champ customis&eacute; qui aurait plus d\'une valeur, utilisez la cl&eacute; de l\'&eacute;l&eacute;ment.');
define('_AM_XHELP_TEXT_LENGTH','Longueur :');
define('_AM_XHELP_TEXT_LENGTH_DESC','Longueur du champ customis&eacute;.');

define('_AM_XHELP_TEXT_REGEX_CUSTOM','Personnalisation');
define('_AM_XHELP_TEXT_REGEX_USPHONE','Num&eacute;ro de t&eacute;l&eacute;phone');
define('_AM_XHELP_TEXT_REGEX_USZIP','code postal');
define('_AM_XHELP_TEXT_REGEX_EMAIL','Adresse Email');

define('_XHELP_CONTROL_DESC_TXTBOX','Bo&icirc;te texte');
define('_XHELP_CONTROL_DESC_TXTAREA','Bo&icirc;te texte multi-lignes');
define('_XHELP_CONTROL_DESC_SELECT','Bo&icirc;te de s&eacute;lection');
define('_XHELP_CONTROL_DESC_MULTISELECT','Bo&icirc;te de multi s&eacute;lection');
define('_XHELP_CONTROL_DESC_YESNO','Oui / Non');
define('_XHELP_CONTROL_DESC_CHECKBOX','Bo&icirc;te &agrave; cocher');
define('_XHELP_CONTROL_DESC_RADIOBOX','Bo&icirc;te radio');
define('_XHELP_CONTROL_DESC_DATETIME','Date+Heure');
define('_XHELP_CONTROL_DESC_FILE','Fichier');

define('_XHELP_DATATYPE_TEXT','Texte');
define('_XHELP_DATATYPE_NUMBER_INT','Nombre (Entier)');
define('_XHELP_DATATYPE_NUMBER_DEC','Nombre (D&eacute;cimal)');

define('_AM_XHELP_MSG_FIELD_DEL_CFRM','Etes vous certain de d&eacute;sirer effacer ce champs #%u?');
define('_AM_XHELP_VALID_ERR_CONTROLTYPE','Type de contr&ocirc;le s&eacute;lectionn&eacute; invalide.');
define('_AM_XHELP_TEXT_SESSION_RESET','Nettoyer les erreurs');
define('_AM_XHELP_VALID_ERR_NAME','Nom non param&eacute;tr&eacute;');
define('_AM_XHELP_VALID_ERR_FIELDNAME','Nom de champ non param&eacute;tr&eacute;');
define('_AM_XHELP_VALID_ERR_FIELDNAME_UNIQUE','le nom de champ doit &ecirc;tre unique');
define('_AM_XHELP_VALID_ERR_LENGTH','la longueur doit &ecirc;tre un nombre dont la valeur est comprise entre %u et %u');
define('_AM_XHELP_VALID_ERR_DEFAULTVALUE','la valeur par d&eacute;faut doit &ecicrc;tre dans la liste d\'options');
define('_AM_XHELP_VALID_ERR_VALUE_LENGTH','La valeur "%s" est plus grande que la valeur du champ, %u caract&egrave;res');
define('_AM_XHELP_VALID_ERR_VALUE','Vous devez fournir un param&egrage;trage de valeur pour ce champ');
define('_AM_XHELP_MSG_FIELD_ADD_OK','Champ ajouté avec succ&egrave;s');
define('_AM_XHELP_MSG_FIELD_ADD_ERR','des erreurs sont apparues &agrave; l\'ajout du champ');
define('_AM_XHELP_MSG_FIELD_UPD_OK','Champ mis &agrave; jour avec succ&egrave;s');
define('_AM_XHELP_MSG_FIELD_UPD_ERR','Des erreurs sont apparues &agrave; la mise &agrave; jour du champ');
define('_AM_XHELP_MSG_SUBMISSION_ERR','Votre soumission contient des erreurs.  Veuillez les corriger et soumettre de nouveau');
define('_AM_XHELP_MSG_NEED_UID','Erreur: vous devez s&eacute;lectionner un utilisateur en premier.');

define('_AM_XHELP_TEXT_DEFAULT_STATUS','Statuts par d&eacute;faut');

define('_AM_XHELP_VALID_ERR_MIME_EXT','Extension de fichier non param&egrave;tr&eacute;e');
define('_AM_XHELP_VALID_ERR_MIME_NAME','Application Type/Nom non param&egrave;tr&eacute;s');
define('_AM_XHELP_VALID_ERR_MIME_TYPES','Types Mine non param&egrave;tr&eacute;');

define('_AM_XHELP_TEXT_NOTIF_NAME','Nom de Notification');
define('_AM_XHELP_TEXT_SUBSCRIBED_MEMBERS','Membres souscrits');

define('_AM_XHELP_NOTIF_NEW_TICKET','Cr&eacute;ation de ticket');
define('_AM_XHELP_NOTIF_DEL_TICKET','Effacement de ticket');
define('_AM_XHELP_NOTIF_MOD_TICKET','Modification de ticket');
define('_AM_XHELP_NOTIF_NEW_RESPONSE','Ajout de r&eacute;ponse');
define('_AM_XHELP_NOTIF_MOD_RESPONSE','Modification de r&eacute;ponse');
define('_AM_XHELP_NOTIF_MOD_STATUS','Modification d\'&eacute;tat');
define('_AM_XHELP_NOTIF_MOD_PRIORITY','Modification de priorit&eacute;');
define('_AM_XHELP_NOTIF_MOD_OWNER','Modification de propri&eacute;taire');
define('_AM_XHELP_NOTIF_CLOSE_TICKET','Cloture du ticket');
define('_AM_XHELP_NOTIF_MERGE_TICKET','Fusion de tickets');

//Used for Manage Notifications page
define('_AM_XHELP_STAFF_SETTING1','Toutes les &eacute;quipes');
define('_AM_XHELP_STAFF_SETTING2','Equipe du département');
define('_AM_XHELP_STAFF_SETTING3','Propri&eacute;taire du ticket');
define('_AM_XHELP_STAFF_SETTING4','Notification d&eacute;sactiv&eacute;e');
define('_AM_XHELP_USER_SETTING1','Notification activ&eacute;');
define('_AM_XHELP_USER_SETTING2','Notification d&eacute;sactiv&eacute;e');
define('_AM_XHELP_TEXT_SUBMITTER','&eacute;m&eacute;teur');
define('_AM_XHELP_TEXT_NOTIF_STAFF','Notification de l\'&eacute;quipe');
define('_AM_XHELP_TEXT_NOTIF_USER','Notification de l\'utilisateur');
define('_AM_XHELP_TEXT_ASSOC_TPL','Mod&egrave;les associ&eacute;s');
define('_AM_XHELP_TEXT_AND','et');

define('_AM_XHELP_TEXT_VERSION','Version');
define('_AM_XHELP_TEXT_PLUGIN_VERSION','Version de plugin');
define('_AM_XHELP_TEXT_TESTED_VERSIONS','Versions test&eacute;es');
define('_AM_XHELP_TEXT_AUTHOR','Auteur');
define('_AM_XHELP_MESSAGE_NO_NAME','Erreur : aucun nom de module n\'est sp&eacute;cifi&eacute;.');
define('_AM_XHELP_MSG_INSTALL_MODULE','Erreur : Veuillez vous assurer que le module est intall&eacute;.');
define('_AM_XHELP_TEXT_STAFF','Equipe');
?>