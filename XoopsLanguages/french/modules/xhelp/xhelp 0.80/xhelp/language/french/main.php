<?php
//$Id: main.php,v 1.37 2005/12/01 15:16:32 eric_juden Exp $

define('_XHELP_CATEGORY1','Assigner un Propri&eacute;taire');
define('_XHELP_CATEGORY2','Supprimer les r&eacute;ponses');
define('_XHELP_CATEGORY3','Supprimer les tickets');
define('_XHELP_CATEGORY4','Journalisation des utilisateurs\' tickets');
define('_XHELP_CATEGORY5','Modifier les r&eacute;ponses');
define('_XHELP_CATEGORY6','Modifier l\'information du ticket');

define('_XHELP_SEC_TEXT_TICKET_ADD','Ajouter des tickets');
define('_XHELP_SEC_TEXT_TICKET_EDIT','Modifier des tickets');
define('_XHELP_SEC_TEXT_TICKET_DELETE','Effacer des tickets');
define('_XHELP_SEC_TEXT_TICKET_OWNERSHIP','Changer le propri&eacute;taire du ticket');
define('_XHELP_SEC_TEXT_TICKET_STATUS','Changer l\'&eacute;tat du ticket');
define('_XHELP_SEC_TEXT_TICKET_PRIORITY','Changer la priorit&eacute; du ticket');
define('_XHELP_SEC_TEXT_TICKET_LOGUSER','Enregistrer le ticket pour l\'utilisateur');
define('_XHELP_SEC_TEXT_RESPONSE_ADD','Ajouter une r&eacute;ponse');
define('_XHELP_SEC_TEXT_RESPONSE_EDIT','Modifier une r&eacute;ponse');
define('_XHELP_SEC_TEXT_TICKET_MERGE','Fusionner les tickets');
define('_XHELP_SEC_TEXT_FILE_DELETE','Effacer les fichiers attach&eacute;s');
define('_XHELP_SEC_TEXT_FAQ_ADD','Ajout de FAQs');
define('_XHELP_SEC_TEXT_TICKET_TAKE_OWNERSHIP','Donner la propri&eacute;t&eacute; du ticket');

define('_XHELP_JSC_TEXT_DELETE','Etes vous certain de vouloir supprimer ce ticket ?');

define('_XHELP_MESSAGE_ADD_DEPT','Département ajout&eacute; avec succ&egrave;s');
define('_XHELP_MESSAGE_ADD_DEPT_ERROR','Erreur : Département non ajout&eacute;');
define('_XHELP_MESSAGE_UPDATE_DEPT','Département mis &agrave; jour');
define('_XHELP_MESSAGE_UPDATE_DEPT_ERROR','Erreur : Département non mis &agrave; jour');
define('_XHELP_MESSAGE_DEPT_DELETE','Département supprim&eacute;');
define('_XHELP_MESSAGE_DEPT_DELETE_ERROR','Erreur : Département non supprim&eacute;');
define('_XHELP_MESSAGE_ADDSTAFF_ERROR','Erreur : Membre du Département non ajout&eacute;');
define('_XHELP_MESSAGE_ADDSTAFF','Membre du Département ajout&eacute;');
define('_XHELP_MESSAGE_STAFF_DELETE','Membre du Département supprim&eacute;');
define('_XHELP_MESSAGE_STAFF_DELETE_ERROR','Membre du Département non supprim&eacute;');
define('_XHELP_MESSAGE_EDITSTAFF','Profil du Membre du Département mis &agrave; jour');
define('_XHELP_MESSAGE_EDITSTAFF_ERROR','Erreur : Membre du Département non mis &agrave; jour');
define('_XHELP_MESSAGE_EDITSTAFF_NOCLEAR_ERROR','Erreur : p&eacute;c&eacute;dent Département non supprim&eacute;');
define('_XHELP_MESSAGE_DEPT_EXISTS','ce Département existe d&eacute;j&agrave;');
define('_XHELP_MESSAGE_ADDTICKET','Ticket enregistr&eacute;');
define('_XHELP_MESSAGE_ADDTICKET_ERROR','Erreur : Ticket non enregistr&eacute;');
define('_XHELP_MESSAGE_LOGMESSAGE_ERROR','Erreur : Action non enregistr&eacute;e dans la base de donn&eacute;es');
define('_XHELP_MESSAGE_UPDATE_PRIORITY','Priorit&eacute; du Ticket mis &agrave; jour');
define('_XHELP_MESSAGE_UPDATE_PRIORITY_ERROR','Erreur : Priorit&eacute; du Ticket non mise &agrave; jour');
define('_XHELP_MESSAGE_UPDATE_STATUS','Etat du Ticket mis &agrave; jour');
define('_XHELP_MESSAGE_UPDATE_STATUS_ERROR','Erreur : Etat du Ticket non mis &agrave; jour');
define('_XHELP_MESSAGE_UPDATE_DEPARTMENT','Département du Ticket mis &agrave; jour avec succ&egrave;s');
define('_XHELP_MESSAGE_UPDATE_DEPARTMENT_ERROR','Erreur : Le Département du Ticket n\'a pas &eacute;t&eacute; mis &agrave; jour');
define('_XHELP_MESSAGE_CLAIM_OWNER','S\'approprier le ticket');
define('_XHELP_MESSAGE_CLAIM_OWNER_ERROR','Erreur : Appropriation du Ticket non effectu&eacute;e');
define('_XHELP_MESSAGE_ASSIGN_OWNER','Vous avez assign&eacute; un Propri&eacute;taire &agrave; ce Ticket');
define('_XHELP_MESSAGE_ASSIGN_OWNER_ERROR','Erreur : Propri&eacute;taire du Ticket non assign&eacute;');
define('_XHELP_MESSAGE_UPDATE_OWNER','Mise &agrave; jour du Propri&eacute;taire du Ticket.');
define('_XHELP_MESSAGE_ADDFILE','Fichier envoy&eacute; avec succ&egrave;s');
define('_XHELP_MESSAGE_ADDFILE_ERROR','Erreur : Fichier non envoy&eacute;');
define('_XHELP_MESSAGE_ADDRESPONSE','R&eacute;ponse ajout&eacute;e');
define('_XHELP_MESSAGE_ADDRESPONSE_ERROR','Erreur : R&eacute;ponse non ajout&eacute;e');
define('_XHELP_MESSAGE_UPDATE_CALLS_CLOSED_ERROR','Erreur : Cloture de Ticket non mis &agrave; jour');
define('_XHELP_MESSAGE_ALREADY_OWNER','%s est d&eacute;j&agrave; Propri&eacute;taire de ce Ticket');
define('_XHELP_MESSAGE_ALREADY_STATUS','Le Ticket est d&eacute;j&agrave; d&eacute;fini avec cet Etat');
define('_XHELP_MESSAGE_DELETE_TICKET','Ticket supprim&eacute;');
define('_XHELP_MESSAGE_DELETE_TICKET_ERROR','Erreur : Ticket non supprim&eacute;');
define('_XHELP_MESSAGE_ADD_SIGNATURE','Signature ajout&eacute;e');
define('_XHELP_MESSAGE_ADD_SIGNATURE_ERROR','Erreur : Signature non mise &agrave; jour');
define('_XHELP_MESSAGE_RESPONSE_TPL','R&eacute;ponse pr&eacute;d&eacute;finie mise &agrave; jour');
define('_XHELP_MESSAGE_RESPONSE_TPL_ERROR','Erreur : R&eacute;ponse non mise &agrave; jour');
define('_XHELP_MESSAGE_DELETE_RESPONSE_TPL','R&eacute;ponse pr&eacute;d&eacute;finie supprim&eacute;e');
define('_XHELP_MESSAGE_DELETE_RESPONSE_TPL_ERROR','Erreur : R&eacute;ponse pr&eacute;d&eacute;finie non supprim&eacute;e');
define('_XHELP_MESSAGE_ADD_STAFFREVIEW','R&eacute;vision ajout&eacute;e');
define('_XHELP_MESSAGE_ADD_STAFFREVIEW_ERROR','Erreur : R&eacute;vision non ajout&eacute;e');
define('_XHELP_MESSAGE_UPDATE_STAFF_ERROR','Erreur : Profil du Membre non mis &agrave; jour');
define('_XHELP_MESSAGE_UPDATE_SIG_ERROR','Erreur : Signature non mise &agrave; jour');
define('_XHELP_MESSAGE_UPDATE_SIG','Signature mise &agrave; jour');
define('_XHELP_MESSAGE_EDITTICKET','Ticket mis &agrave; jour');
define('_XHELP_MESSAGE_EDITTICKET_ERROR','Erreur : Ticket non mis &agrave; jour');
define('_XHELP_MESSAGE_USER_MOREINFO','Ticket mis &agrave; jour.');
define('_XHELP_MESSAGE_USER_MOREINFO_ERROR','Erreur : Informations non ajout&eacute;e');
define('_XHELP_MESSAGE_USER_NO_INFO','Erreur: Vous ne pouvez plus soumettre aucune autre nouvelle information');
define('_XHELP_MESSAGE_EDITRESPONSE','R&eacute;ponse mise &agrave; jour');
define('_XHELP_MESSAGE_EDITRESPONSE_ERROR','Erreur: R&eacute;ponse non mise &agrave; jour');
define('_XHELP_MESSAGE_NOTIFY_UPDATE','Notifications mise &agrave; jour');
define('_XHELP_MESSAGE_NOTIFY_UPDATE_ERROR','Notifications non mise &agrave; jour');
define('_XHELP_MESSAGE_NO_NOTIFICATIONS','L\utilisateur n\'avait pas de notification');
define('_XHELP_MESSAGE_NO_DEPTS','Erreur : Pas de Département d&eacute;fini. Contacter l\'Administrateur.');
define('_XHELP_MESSAGE_NO_STAFF','Erreur : Pas de Membre dans le Département consern&eacute;. Contacter l\'Administrateur.');
define('_XHELP_MESSAGE_TICKET_REOPEN','Ticket r&eacute;-ouvert.');
define('_XHELP_MESSAGE_TICKET_REOPEN_ERROR','Erreur : Ticket non r&eacute;ouvert.');
define('_XHELP_MESSAGE_TICKET_CLOSE','Ticket clos.');
define('_XHELP_MESSAGE_TICKET_CLOSE_ERROR','Erreur: Ticket non clos.');
define('_XHELP_MESSAGE_NOT_USER','Erreur : vous ne pouvez pas r&eacute;ouvrir un Ticket que vous n\'avez pas soumis.');
define('_XHELP_MESSAGE_NO_TICKETS','Erreur : Pas de Ticket s&eacute;lectionn&eacute;.');
define('_XHELP_MESSAGE_NOOWNER','Pas de Propri&eacute;taire.');
define('_XHELP_MESSAGE_UNKNOWN','Inconnu');
define('_XHELP_MESSAGE_WRONG_MIMETYPE','Erreur : Type de Fichier non autoris&eacute;.');
define('_XHELP_MESSAGE_NO_UID','Erreur : Pas de Num&eacute;ro Utilisateur sp&eacute;cifi&eacute;');
define('_XHELP_MESSAGE_NO_PRIORITY','Erreur : Pas de Priorit&eacute; d&eacute;finie');
define('_XHELP_MESSAGE_FILE_ERROR','Erreur : Impossible de stocker le fichier transmis pour la raison suivante :<br />%s');
define('_XHELP_MESSAGE_UPDATE_EMAIL_ERROR','Erreur : Email non mis &agrave; jour');
define('_XHELP_MESSAGE_TICKET_DELETE_CNFRM','Etes vous certain de vouloir effacer ces tickets ?');
define('_XHELP_MESSAGE_DELETE_TICKETS','Tickets effac&eacute;s avec succ&egrave;s');
define('_XHELP_MESSAGE_DELETE_TICKETS_ERROR','Erreur: les Tickets n\'ont pas &eacute;t&eacute; effac&eacute;s');
define('_XHELP_MESSAGE_VALIDATE_ERROR','Votre ticket contient des erreurs, veuillez le corriger et le resoumettre.');
define('_XHELP_MESSAGE_UNAME_TAKEN',' est d&eacute;j&agrave; en cours d\'utilisation.');
define('_XHELP_MESSAGE_INVALID',' est non valide.');
define('_XHELP_MESSAGE_REQUIRED',' est requis');
define('_XHELP_MESSAGE_LONG',' est trop long.');
define('_XHELP_MESSAGE_SHORT',' est trop court.');
define('_XHELP_MESSAGE_NOT_ENTERED',' n\'est pas enter&eacute;.');
define('_XHELP_MESSAGE_NOT_NUMERIC',' n\'est pas num&eacute;rique.');
define('_XHELP_MESSAGE_RESERVED',' est r&eacute;serv&eacute;.');
define('_XHELP_MESSAGE_NO_SPACES',' ne doit pas contenir d\'espace');
define('_XHELP_MESSAGE_NOT_SAME',' n\'est pas le m&ecirc;me.');
define('_XHELP_MESSAGE_NOT_SUPPLIED',' n\'est pas demand&eacute;.');
define('_XHELP_MESSAGE_CREATE_USER_ERROR','Utilisateur non cr&eacute;&eacute;');
define('_XHELP_MESSAGE_NO_REGISTER','L\'inscription a &eacute;t&eacute; close. Vous n\'êtes pas autoris&eacute; &agrave; suivre un ticket en ce moment.');
define('_XHELP_MESSAGE_NEW_USER_ERR','Erreur: votre compte utilisateur n\'a pas &eacute;t&eacute; cr&eacute;&eacute;.');
define('_XHELP_MESSAGE_EMAIL_USED','Erreur: cette adresse email est d&eacute;ja enregistr&eacute;e.');
define('_XHELP_MESSAGE_DELETE_FILE_ERR','Erreur: le fichier n\'a pas &eacute;t&eacute; effac&eacute;.');
define('_XHELP_MESSAGE_DELETE_SEARCH_ERR','Erreur: la recherche n\'a pas &eacute;t&eacute; &eacute;ffac&eacute;e.');

define('_XHELP_MESSAGE_UPLOAD_ALLOWED_ERR','Erreur: Le t&eacute;l&eacute;chargement de fichier n\'est pas activ&eacute; pour le module.');
define('_XHELP_MESSAGE_UPLOAD_ERR','le fichier %s de %s n\'a pas été enregist&eacute; parce que %s.');

define('_XHELP_MESSAGE_NO_ADD_TICKET','Vous ne disposez pas des permissions pour enregistrer des tickets.');
define('_XHELP_MESSAGE_NO_DELETE_TICKET','Vous ne disposez pas des permissions pour effacer des tickets.');
define('_XHELP_MESSAGE_NO_EDIT_TICKET','Vous ne disposez pas des permissions pour &eacute;diter des tickets.');
define('_XHELP_MESSAGE_NO_CHANGE_OWNER','Vous ne disposez pas des permissions pour changer de propri&eacute;taire.');
define('_XHELP_MESSAGE_NO_CHANGE_PRIORITY','Vous ne disposez pas des permissions pour changer de priorit&eacute;.');
define('_XHELP_MESSAGE_NO_CHANGE_STATUS','Vous ne disposez pas des permissions pour changer d\'&eacute;tat.');
define('_XHELP_MESSAGE_NO_ADD_RESPONSE','Vous ne disposez pas des permissions pour ajouter une r&eacute;ponse.');
define('_XHELP_MESSAGE_NO_EDIT_RESPONSE','Vous ne disposez pas des permissions pour &eacute;diter les r&eacute,ponses.');
define('_XHELP_MESSAGE_NO_MERGE','Vous ne disposez pas des permissions pour fusionner les tickets.');
define('_XHELP_MESSAGE_NO_TICKET2','Erreur: vous n\'avez pas sp&eacute;cifi&eacute; le ticket &agrave; fusionner avec.');
define('_XHELP_MESSAGE_ADDED_EMAIL','Email ajout&eacute; avec succ&egrave;s.');
define('_XHELP_MESSAGE_ADDED_EMAIL_ERROR','Erreur: l\'email n\'a pas &eacute;t&eacute; ajout&eacute;.');
define('_XHELP_MESSAGE_NO_EMAIL','Erreur: vous n\'avez pas sp&eacute;cifi&eacute; l\'email &agrave; ajouter.');
define('_XHELP_MESSAGE_ADD_EMAIL','Notifications d\'Email mises &agrave; jour.');
define('_XHELP_MESSAGE_ADD_EMAIL_ERROR','Erreur : Notifications d\'Email non mises &agrave; jour.');
define('_XHELP_MESSAGE_NO_MERGE_TICKET','Vous ne disposez pas des permissions pour supprimer un email');
define('_XHELP_MESSAGE_NO_FILE_DELETE','Vous ne disposez pas des permissions pour effacer des fichiers.');
define('_XHELP_MESSAGE_NO_CUSTFLD_ADDED','Erreur : La valeur du champs customis&eacute; n\'a pas &eacute;t&eacute; sauvegard&eacute;e.');

define('_XHELP_ERROR_INV_TICKET','Erreur : Ticket invalide !');
define('_XHELP_ERROR_INV_RESPONSE','Erreur : R&eacute;ponse invalide !');
define('_XHELP_ERROR_NODEPTPERM','Vous ne pouvez pas soumettre une r&eacute;ponse &agrave; ce ticket. Raison : Vous n\'&ecirc;tes pas membre de ce département.');
define('_XHELP_ERROR_INV_STAFF','Erreur : l\'utilsateur n\'est pas un membre du Département.');
define('_XHELP_ERROR_INV_TEMPLATE','Erreur : Mod&egrave;le invalide');
define('_XHELP_ERROR_INV_USER','Erreur : Vous ne disposez pas des permissions pour visualiser ce ticket.');

define('_XHELP_TITLE_ADDTICKET','Cr&eacute;er un Ticket');
define('_XHELP_TITLE_ADDRESPONSE','Ajouter une R&eacute;ponse');
define('_XHELP_TITLE_EDITTICKET','Editer les Info du Ticket');
define('_XHELP_TITLE_EDITRESPONSE','Editer la R&eacute;ponse');
define('_XHELP_TITLE_SEARCH','Rechercher');

define('_XHELP_TEXT_SIZE','Taille :');
define('_XHELP_TEXT_REALNAME','Nom r&eacute;el');
define('_XHELP_TEXT_ID','N°');
define('_XHELP_TEXT_NAME','Nom');
define('_XHELP_TEXT_USER','Utilisateur:');
define('_XHELP_TEXT_USERID','N° d\'Utilisateur :');
define('_XHELP_TEXT_LOOKUP','R&eacute;solution');
define('_XHELP_TEXT_LOOKUP_USER','R&eacute;solution Utilisateur');
define('_XHELP_TEXT_EMAIL','Email :');
define('_XHELP_TEXT_ASSIGNTO','Assign&eacute; &agrave;');
define('_XHELP_TEXT_PRIORITY','Priorit&eacute;');
define('_XHELP_TEXT_STATUS','Etat');
define('_XHELP_TEXT_SUBJECT','Sujet');
define('_XHELP_TEXT_DEPARTMENT','Département');
define('_XHELP_TEXT_OWNER','Propri&eacute;taire');
define('_XHELP_TEXT_CLOSEDBY','Clos par');
define('_XHELP_TEXT_NOTAPPLY','N/A');
define('_XHELP_TEXT_TIMESPENT','Temps Pass&eacute;');
define('_XHELP_TEXT_DESCRIPTION','Description');
define('_XHELP_TEXT_ADDFILE','Ajouter un fichier :');
define('_XHELP_TEXT_FILE','Fichier :');
define('_XHELP_TEXT_RESPONSE','R&eacute;ponse');
define('_XHELP_TEXT_RESPONSES','R&eacute;ponses');
define('_XHELP_TEXT_CLAIMOWNER','Originaire de la r&eacute;clamation :');
define('_XHELP_TEXT_CLAIM_OWNER','S\'approprier la r&eacute;clamation');
define('_XHELP_TEXT_TICKETDETAILS','D&eacute;tails du Ticket');
define('_XHELP_TEXT_MINUTES','minutes');
define('_XHELP_TEXT_SEARCH','Recherche :');
define('_XHELP_TEXT_SEARCHBY','Par :');
define('_XHELP_SEARCH_DESC','Description');
define('_XHELP_SEARCH_SUBJECT','Sujet');
define('_XHELP_TEXT_NUMRESULTS','Nombre de r&eacute;sultats par page:');
define('_XHELP_TEXT_RESULT1','5');
define('_XHELP_TEXT_RESULT2','10');
define('_XHELP_TEXT_RESULT3','25');
define('_XHELP_TEXT_RESULT4','50');
define('_XHELP_TEXT_SEARCH_RESULTS','R&eacute;sultats de la recherche');
define('_XHELP_TEXT_PREDEFINED_RESPONSES','R&eacute;ponses Pr&eacute;-Definies :');
define('_XHELP_TEXT_PREDEFINED0','-- Cr&eacute;er une R&eacute;ponse --');
define('_XHELP_TEXT_NO_USERS','Pas d\'utilisateurs trouv&eacute;');
define('_XHELP_TEXT_SEARCH_AGAIN','Chercher de nouveau');
define('_XHELP_TEXT_LOGGED_BY','Suivi par');
define('_XHELP_TEXT_LOG_TIME','Suivi horaire ');
define('_XHELP_TEXT_OWNERSHIP_DETAILS','D&eacute;tails sur le Propri&eacute;taire');
define('_XHELP_TEXT_ACTIVITY_LOG','Suivi d\'activit&eacute;');
define('_XHELP_TEXT_HELPDESK_TICKET','Ticket de Support:');
define('_XHELP_TEXT_YES','Oui');
define('_XHELP_TEXT_NO','Non');
define('_XHELP_TEXT_ALL_TICKETS','Tous les Tickets');
define('_XHELP_TEXT_HIGH_PRIORITY','Tickets non-assign&eacute;s et de Hautes Priorit&eacute;s ');
define('_XHELP_TEXT_NEW_TICKETS','Nouveaux Tickets');
define('_XHELP_TEXT_MY_TICKETS','Tickets qui me sont assign&eacute;s');
define('_XHELP_TEXT_SUBMITTED_TICKETS','Tickets que j\'ai soumis');
define('_XHELP_TEXT_ANNOUNCEMENTS','Annonces');
define('_XHELP_TEXT_MY_PERFORMANCE','Mes Performances');
define('_XHELP_TEXT_RESPONSE_TIME','Temps moyen de r&eacute;ponse :');
define('_XHELP_TEXT_RATING','Ratio :');
define('_XHELP_TEXT_NUMREVIEWS','Nombre de r&eacute;visions :');
define('_XHELP_TEXT_NUM_TICKETS_CLOSED','Nombres de tickets clos :');
define('_XHELP_TEXT_TEMPLATE_NAME','Nom du mod&egrave;le :');
define('_XHELP_TEXT_MESSAGE','Message :');
define('_XHELP_TEXT_ACTIONS','Actions :');
define('_XHELP_TEXT_ACTIONS2','Actions');
define('_XHELP_TEXT_MY_NOTIFICATIONS','Mes notifications');
define('_XHELP_TEXT_SELECT_ALL','Tous');
define('_XHELP_TEXT_USER_IP','IP utilisateur :');
define('_XHELP_TEXT_OWNERSHIP','Propri&eacute;taire');
define('_XHELP_TEXT_ASSIGN_OWNER','Assigner un propri&eacute;taire');
define('_XHELP_TEXT_TICKET','Ticket');
define('_XHELP_TEXT_USER_RATING','Notation utilisateur :');
define('_XHELP_TEXT_EDIT_RESPONSE','Editer R&eacute;ponse');
define('_XHELP_TEXT_FILE_ADDED','Fichier Ajout&eacute; :');
define('_XHELP_TEXT_ACTION','Action :');
define('_XHELP_TEXT_LAST_TICKETS','Dernier Ticket soumis par :');
define('_XHELP_TEXT_RATE_STAFF','Noter la r&eacute;ponse du Département');
define('_XHELP_TEXT_COMMENTS','Commentaires :');
define('_XHELP_TEXT_MY_OPEN_TICKETS','Mes Tickets Ouverts');
define('_XHELP_TEXT_RATE_RESPONSE','Noter la R&eacute;ponse ?');
define('_XHELP_TEXT_RESPONSE_RATING','Note de R&eacute;ponse :');
define('_XHELP_TEXT_REOPEN_TICKET','Re-ouvrir le Ticket ?');
define('_XHELP_TEXT_MORE_INFO','Un compl&eacute;ment d\'information est requis ?');
define('_XHELP_TEXT_REOPEN_REASON','Raison de la r&eacute;-ouverture (optionnel)');
define('_XHELP_TEXT_MORE_INFO2','Utilisez ce formulaire afin d\'ajouter un compl&eacute;ment d\'information à ce ticket.');
define('_XHELP_TEXT_NO_DEPT','Pas de Département');
define('_XHELP_TEXT_NOT_EMAIL','Adresse Email :');
define('_XHELP_TEXT_LAST_REVIEWS','Derni&egrave;res r&eacute;visions du Département');
define('_XHELP_TEXT_SORT_TICKETS','Trier les Tickets par cette colonne');
define('_XHELP_TEXT_ELAPSED','Ecoul&eacute; :');
define('_XHELP_TEXT_FILTERTICKETS','Filtrer les Tickets :');
define('_XHELP_TEXT_LIMIT','Enregistrements par page');
define('_XHELP_TEXT_SUBMITTEDBY','Soumis par :');
define('_XHELP_TEXT_NO_INCLUDE','Aucun');
define('_XHELP_TEXT_PRIVATE_RESPONSE','R&eacute;ponse priv&eacute;e :');
define('_XHELP_TEXT_PRIVATE','Priv&eacute;');
define('_XHELP_TEXT_CLOSE_TICKET','Fermer le Ticket ?');
define('_XHELP_TEXT_ADD_SIGNATURE','Ajouter une signature aux réponses?');
define('_XHELP_TEXT_LASTUPDATE','Derni&egrave;re mise &agrave; jour:');
define('_XHELP_TEXT_BATCH_ACTIONS','Traitement par lot :');
define('_XHELP_TEXT_BATCH_DEPARTMENT','Changer de Département');
define('_XHELP_TEXT_BATCH_PRIORITY','Changer de Priorit&eacute;');
define('_XHELP_TEXT_BATCH_STATUS','Changer d\'&eacute;tat');
define('_XHELP_TEXT_BATCH_DELETE','Effacer les Tickets');
define('_XHELP_TEXT_BATCH_RESPONSE','R&eacute;pondre');
define('_XHELP_TEXT_BATCH_OWNERSHIP','Prendre/Assigner la Propri&eacute;t&eacute;');
define('_XHELP_TEXT_UPDATE_COMP','Mise &agrave; jour compl&eacute;t&eacute;e!');
define('_XHELP_TEXT_TOPICS_ADDED','Sujets ajout&eacute;s');
define('_XHELP_TEXT_DEPTS_ADDED','Départements ajout&eacute;s');
define('_XHELP_TEXT_CLOSE_WINDOW','Fermer la Fen&ecirc;tre');
define('_XHELP_TEXT_USER_LOOKUP','R&eacute;solution d\'Utilisateur');
define('_XHELP_TEXT_EVENT','Ev&eacute;nements');
define('_XHELP_TEXT_AVAIL_FILETYPES','Types de fichiers valides');
define('_XHELP_USER_REGISTER','Enregistrement d\'Utilisateur');

define('_XHELP_TEXT_SETDEPT','Choisir un Département :');
define('_XHELP_TEXT_SETPRIORITY','Param&egrave;trage de la priorit&eacute; du Ticket :');
define('_XHELP_TEXT_SETOWNER','Choisir un Propri&eacute;taire :');
define('_XHELP_TEXT_SETSTATUS','Param&egrave;trage de l\'Etat du Ticket:');
define('_XHELP_TEXT_MERGE_TICKET','Fusionner les Tickets');
define('_XHELP_TEXT_MERGE_TITLE','Entrer le n° de ticket avec lequel vous voulez fusionner.');
define('_XHELP_TEXT_EMAIL_NOTIFICATION','Notification d\'email:');
define('_XHELP_TEXT_EMAIL_NOTIFICATION_TITLE','Ajouter une adresse email afin d\'&ecirc;tre notifi&eacute; des mises &agrave; jour de tickets.');
define('_XHELP_TEXT_RECEIVE_NOTIFICATIONS','Recevoir les Notifications:');
define('_XHELP_TEXT_EMAIL_SUPPRESS','les Emails sont supprim&eacute;s. Cliquez pour envoyer les notifications d\'Email.');
define('_XHELP_TEXT_EMAIL_NOT_SUPPRESS','les Emails ont &eacute;t&eacute; supprim&eacute;s. Cliquez pour les supprimer.');
define('_XHELP_TEXT_TICKET_NOTIFICATIONS','Notifications de Tickets');
define('_XHELP_TEXT_STATE','Etats:');
define('_XHELP_TEXT_BY_STATUS','par &eacute;tats:');
define('_XHELP_TEXT_BY_STATE','par &eacute;tats pr&eacute;d&eacute;finis :');
define('_XHELP_TEXT_SEARCH_OR','-- OU --');
define('_XHELP_TEXT_VIEW1','vue classique');
define('_XHELP_TEXT_VIEW2','vue avanc&eacute;e');
define('_XHELP_TEXT_SAVE_SEARCH','Sauvegarder la recherche ?');
define('_XHELP_TEXT_SEARCH_NAME','Nom de recherche:');
define('_XHELP_TEXT_SAVED_SEARCHES','Recherches sauvegard&eacute;es pr&eacute;vues');
define('_XHELP_TEXT_SWITCH_TO','Permuter vers ');
define('_XHELP_TEXT_ADDITIONAL_INFO','Information additionnelle');

define('_XHELP_ROLE_NAME1','Gestionnaire de Ticket');
define('_XHELP_ROLE_NAME2','Intervenant de Support');
define('_XHELP_ROLE_NAME3','Simple Consultant');
define('_XHELP_ROLE_DSC1','Peuvent faire tout et n\'importe quoi');
define('_XHELP_ROLE_DSC2','Enregistre des tickets et des r&eacute;ponses, change l\'&eacute;tat ou la priorit&eacute;, et enregistre des tickets pour les utilisateurs');
define('_XHELP_ROLE_DSC3','ne peut faire aucun changement');
define('_XHELP_ROLE_VAL1', 2047);
define('_XHELP_ROLE_VAL2','241');
define('_XHELP_ROLE_VAL3','0');



// Ticket.php - Actions
define('_XHELP_TEXT_SELECTED','Avec les tickets sélectionnés :');
define('_XHELP_TEXT_ADD_RESPONSE','Ajouter une R&eacute;ponse');
define('_XHELP_TEXT_EDIT_TICKET','Editer le Ticket');
define('_XHELP_TEXT_DELETE_TICKET','Supprimer le Ticket');
define('_XHELP_TEXT_PRINT_TICKET','Imprimer le Ticket');
define('_XHELP_TEXT_UPDATE_PRIORITY','Mettre &agrave; jour la Priorit&eacute;');
define('_XHELP_TEXT_UPDATE_STATUS','Mettre &agrave; jour l\'&eacute;tat');

define('_XHELP_PIC_ALT_USER_AVATAR','Avatar utilisateur');

// Index.php - Auto Refresh Page vars
define('_XHELP_TEXT_AUTO_REFRESH0','Pas d\'auto rafraîchissement');
define('_XHELP_TEXT_AUTO_REFRESH1','Toutes les minutes');
define('_XHELP_TEXT_AUTO_REFRESH2','Toutes les 5 minutes');
define('_XHELP_TEXT_AUTO_REFRESH3','Toutes les 10 minutes');
define('_XHELP_TEXT_AUTO_REFRESH4','Toutes les 30 minutes');
define('_XHELP_AUTO_REFRESH0', 0);          // Change these to
define('_XHELP_AUTO_REFRESH1', 60);         // adjust the values
define('_XHELP_AUTO_REFRESH2', 300);        // in the select box
define('_XHELP_AUTO_REFRESH3', 600);
define('_XHELP_AUTO_REFRESH4', 1800);

define('_XHELP_MENU_MAIN','Sommaire');
define('_XHELP_MENU_LOG_TICKET','Cr&eacute;er un Ticket');
define('_XHELP_MENU_MY_PROFILE','Mon Profil');
define('_XHELP_MENU_ALL_TICKETS','Voir Tous les Tickets');
define('_XHELP_MENU_SEARCH','Rechercher');

define('_XHELP_SEARCH_EMAIL','Email');
define('_XHELP_SEARCH_USERNAME','Nom d\'Utilisateur');
define('_XHELP_SEARCH_UID','N° d\'Utilisateur');

define('_XHELP_BUTTON_ADDRESPONSE','Ajouter une R&eacute;ponse');
define('_XHELP_BUTTON_ADDTICKET','Ajouter un Ticket');
define('_XHELP_BUTTON_EDITTICKET','Editer un Ticket');
define('_XHELP_BUTTON_RESET','Nettoyer');
define('_XHELP_BUTTON_EDITRESPONSE','Mettre &agrave; jour la R&eacute;ponse');
define('_XHELP_BUTTON_SEARCH','Recherche');
define('_XHELP_BUTTON_LOG_USER','Enregistrer pour l\'utilisateur');
define('_XHELP_BUTTON_FIND_USER','Rechercher un utilisateur');
define('_XHELP_BUTTON_SUBMIT','Envoyer');
define('_XHELP_BUTTON_DELETE','Supprimer');
define('_XHELP_BUTTON_UPDATE','Mise &agrave; Jour');
define('_XHELP_BUTTON_UPDATE_PRIORITY','Mettre &agrave; jour la Priorit&eacute;');
define('_XHELP_BUTTON_UPDATE_STATUS','Mettre &agrave; jour l\'&eacute;tat');
define('_XHELP_BUTTON_ADD_INFO','Ajouter des Info');
define('_XHELP_BUTTON_SET','D&eacute;finir');
define('_XHELP_BUTTON_ADD_EMAIL','Ajouter une adresse Email');
define('_XHELP_BUTTON_RUN','Go');

define('_XHELP_PRIORITY1', 1);
define('_XHELP_PRIORITY2', 2);
define('_XHELP_PRIORITY3', 3);
define('_XHELP_PRIORITY4', 4);
define('_XHELP_PRIORITY5', 5);

define('_XHELP_TEXT_PRIORITY1','Tr&egrave;s Haute');
define('_XHELP_TEXT_PRIORITY2','Haute');
define('_XHELP_TEXT_PRIORITY3','Moyennement-Haute');
define('_XHELP_TEXT_PRIORITY4','Moyennement-Basse');
define('_XHELP_TEXT_PRIORITY5','Basse');

define('_XHELP_STATUS0','OUVERT');
define('_XHELP_STATUS1','EN ATTENTE');
define('_XHELP_STATUS2','CLOS');

define('_XHELP_STATE1','Non R&eacute;solu');
define('_XHELP_STATE2','R&eacute;solu');
define('_XHELP_NUM_STATE1', 1);
define('_XHELP_NUM_STATE2', 2);

define('_XHELP_RATING0','aucune note');
define('_XHELP_RATING1','mauvais');
define('_XHELP_RATING2','en dessous de la moyenne');
define('_XHELP_RATING3','moyen');
define('_XHELP_RATING4','au dessus de la moyenne');
define('_XHELP_RATING5','Excellent');

// Log Messages
define('_XHELP_LOG_ADDTICKET','Ticket cr&eacute;&eacute;');
define('_XHELP_LOG_ADDTICKET_FORUSER','Ticket cr&eacute;&eacute; pour %s par %s');
define('_XHELP_LOG_EDITTICKET','Edition d\'information de Ticket');
define('_XHELP_LOG_UPDATE_PRIORITY','Priorit&eacute; mise &agrave; jour de :%u &agrave; :%u');
define('_XHELP_LOG_UPDATE_STATUS','Etat mis &agrave; jour de  %s &agrave; %s');
define('_XHELP_LOG_CLAIM_OWNERSHIP','Propri&eacute;t&eacute; r&eacute;clam&eacute;e');
define('_XHELP_LOG_ASSIGN_OWNERSHIP','Propri&eacute;taire assign&eacute;e &agrave; %s');
define('_XHELP_LOG_ADDRESPONSE','R&eacute;ponse ajout&eacute;e');
define('_XHELP_LOG_USER_MOREINFO','Ajout d\'informations compl&eacute;mentaires');
define('_XHELP_LOG_EDIT_RESPONSE','R&eacute;ponse # %s &eacute;dit&eacute;e');
define('_XHELP_LOG_REOPEN_TICKET','Ticket re-ouvert');
define('_XHELP_LOG_CLOSE_TICKET','Ticket clos');
define('_XHELP_LOG_ADDRATING','Notation de R&eacute;ponse %u');
define('_XHELP_LOG_SETDEPT','Assign&eacute; au Département %s');
define('_XHELP_LOG_MERGETICKETS','Fusionner le ticket %s avec %s');
define('_XHELP_LOG_DELETEFILE','Fichier %s effac&eacute;');

// Error checking for no records in DB
define('_XHELP_NO_TICKETS_ERROR','Pas de Ticket trouv&eacute;');
define('_XHELP_NO_RESPONSES_ERROR','Pas de r&eacute;ponse trouv&eacute;e');
define('_XHELP_NO_MAILBOX_ERROR','Bo&icirc;te aux lettres invalide');
define('_XHELP_NO_FILES_ERROR','Pas de fichier trouv&eacute;');

define('_XHELP_SIG_SPACER','<br /><br />-------------------------------<br />');
define('_XHELP_COMMMENTS','Commentaires ?');
define("_XHELP_ANNOUNCE_READMORE","Lire la suite...");
define("_XHELP_ANNOUNCE_ONECOMMENT","1 commentaire");
define("_XHELP_ANNOUNCE_NUMCOMMENTS","%s commentaires");
define("_XHELP_TICKET_MD5SIGNATURE","Cl&eacute; de Support :");


define('_XHELP_NO_OWNER','Pas de Propri&eacute;taire');
define('_XHELP_RESPONSE_EDIT','R&eacute;ponse modifi&eacute;e par %s le %s');

define('_XHELP_TIME_SECS','secondes');
define('_XHELP_TIME_MINS','minutes');
define('_XHELP_TIME_HOURS','heures');
define('_XHELP_TIME_DAYS','jours');
define('_XHELP_TIME_WEEKS','semaines');
define('_XHELP_TIME_YEARS','ann&eacute;es');

define('_XHELP_TIME_SEC','seconde');
define('_XHELP_TIME_MIN','minute');
define('_XHELP_TIME_HOUR','heure');
define('_XHELP_TIME_DAY','jour');
define('_XHELP_TIME_WEEK','semaine');
define('_XHELP_TIME_YEAR','ann&eacute;e');

define('_XHELP_MAILEVENT_CLASS0','0');     // Connection message
define('_XHELP_MAILEVENT_CLASS1','1');     // Parse message
define('_XHELP_MAILEVENT_CLASS2','2');     // Storage message
define('_XHELP_MAILEVENT_CLASS3','3');     // General message

define('_XHELP_MAILEVENT_DESC0','Ne peut se connecter au serveur.');
define('_XHELP_MAILEVENT_DESC1','Ne peut parser le message.');
define('_XHELP_MAILEVENT_DESC2','Ne peut enregistrer le message.');
define('_XHELP_MAILEVENT_DESC3','');
define('_XHELP_MBOX_ERR_LOGIN','Echec de connexion au serveur de messagerie : identifiant/mot de passe invalides');
define('_XHELP_MBOX_INV_BOXTYPE','le type de bo&icirc;te aux lettres sp&eacute;cifi&eacute; n\'est pas support&eacute;');

define('_XHELP_MAIL_CLASS0','Connection');
define('_XHELP_MAIL_CLASS1','Parsing');
define('_XHELP_MAIL_CLASS2','Enregistrement');
define('_XHELP_MAIL_CLASS3','G&eacute;n&eacute;ral');

define('_XHELP_GROUP_PERM_DEPT','xhelp_dept');
define('_XHELP_MISMATCH_EMAIL','%s a &eactue;t&eacute; notifi&eacute; que son message n\'a pas &eacte;t&eacute; sauvegard&eacute;. La cl&eacute; de support concorde, mais le message aurait du &ecicr;tre envoy&eacute; de %s pour le fait.');
define('_XHELP_MESSAGE_MERGE','Fusion compl&egrave;t&eacute;e avec succ&egrave;s.');
define('_XHELP_MESSAGE_MERGE_ERROR','Erreur: la fusion n\'a pas &eacute;t&eacute; compl&egrave;t&eacute;e.');
define('_XHELP_RESPONSE_NO_TICKET','Aucun ticket trouv&eacute; pour la r&eacute;ponse du ticket');
define('_XHELP_MESSAGE_NO_ANON','Le Message de %s a &eacute;t&eacute; bloqu&eacute;, la soumission a ticket par les anonymes est d&eacute;sactiv&eacute;e');
define('_XHELP_MESSAGE_EMAIL_DEPT_MBOX','Le Message de %s a &eacute;t&eacute; bloqu&eacute;, l\'exp&eacute;diteur est une bo&icirc;te email de département');

define('_XHELP_SIZE_BYTES','Bytes');
define('_XHELP_SIZE_KB','KB');
define('_XHELP_SIZE_MB','MB');
define('_XHELP_SIZE_GB','GB');
define('_XHELP_SIZE_TB','TB');

define('_XHELP_TEXT_USER_NOT_ACTIVATED','L\'utilisateur n\'a pas terminé le processus d\'activation.');

define('_XHELP_TEXT_ADMIN_DISABLED','<em>[D&eacute;sactiv&eacute; par l\'Administrateur]</em>');

define('_XHELP_TEXT_CURRENT_NOTIFICATION','Methode de notification courante');
define('_XHELP_NOTIFY_METHOD1','Message Priv&eacute;');
define('_XHELP_NOTIFY_METHOD2','Email');

define('_XHELP_TEXT_TICKET_LISTS','Liste de Tickets');
define('_XHELP_TEXT_LIST_NAME','Nom de Liste');
define('_XHELP_TEXT_CREATE_NEW_LIST','Cr&eacute;ation d\'une nouvelle liste');
define('_XHELP_TEXT_NO_RECORDS','Aucun enregistrement trouv&eacute;');
define('_XHELP_TEXT_EDIT','Edition');
define('_XHELP_TEXT_DELETE','Effacement');
define('_XHELP_TEXT_CREATE_SAVED_SEARCH','Cr&eacute;tion de recherche sauvegard&eacute;');
define('_XHELP_MSG_ADD_TICKETLIST_ERR','Erreur : Liste de tickets non cr&eacute;&eacute;e.');
define('_XHELP_MSG_DEL_TICKETLIST_ERR','Erreur : Liste de tickets non effac&eacute;e.');
define('_XHELP_MSG_NO_ID','Erreur : Vous n\'avez pas sp&eacute;cifi&eacute; de n°.');
define('_XHELP_TEXT_VIEW_MORE_TICKETS','Visualisation de plus de tickets');
define('_XHELP_MSG_NO_EDIT_SEARCH','Erreur : Vous n\&ecirce;tes pas authoris&eacute; &agrave; modifier cette recherche.');
define('_XHELP_MSG_NO_DEL_SEARCH','Erreur : vous n\'&ecirc;tes pas autoris&eacute; &agrave; effacer cette recherche.');

define('_XHELP_TEXT_PROBLEM','Probl&egrave;eme');
define('_XHELP_TEXT_SOLUTION','Solution');
define('_XHELP_TEXT_PREVIEW','Pr&eacute;visualisation');
define('_XHELP_TEXT_SUBMIT','Soumission');
define('_XHELP_TEXT_ADD_FAQ','Ajout de FAQ');
define('_XHELP_TEXT_CATEGORIES','Cat&eacute;gories');
define('_XHELP_TEXT_FAQ','FAQ');
define('_XHELP_MESSAGE_NO_ADD_FAQ','Erreur : Vous ne disposez pas des permissions pour ajouter une faq');
define('_XHELP_MESSAGE_NO_FAQ','Erreur: aucune Faq / application de base de connaissances configu&eacute;e');
define('_XHELP_MESSAGE_ERR_ADD_FAQ','Erreur: la faq n\'a pas &eacute;t&eacute; ajout&eacute;e.');
define('_XHELP_MESSAGE_ADD_FAQ','Faq ajout&eacute;e avec succ&egrave;s.');
define('_XHELP_TEXT_ADD_STAFF','Ajout d\'intervenant');
define('_XHELP_TEXT_USER_SAID','%s dit :');
?>