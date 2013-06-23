<?php
/**
 * ****************************************************************************
 *  - TDMMp By TDM   - TEAM DEV MODULE FOR XOOPS
 *  - Licence PRO Copyright (c)  (http://www.tdmxoops.net)
 *
 * Cette licence, contient des limitations!!!
 *
 * 1. Vous devez posséder une permission d'exécuter le logiciel, pour n'importe quel usage.
 * 2. Vous ne devez pas l' étudier,
 * 3. Vous ne devez pas le redistribuer ni en faire des copies,
 * 4. Vous n'avez pas la liberté de l'améliorer et de rendre publiques les modifications
 *
 * @license     TDMFR PRO license
 * @author		TDMFR ; TEAM DEV MODULE 
 *
 * ****************************************************************************
 */
//%%%%%%	File Name readpmsg.php 	%%%%%
define("_PM_DELETED","Votre boîte à été effacé");
define("_PM_PRIVATEMESSAGE","Messages privés");
define("_PM_INBOX","Boîte de réception");
define("_PM_FROM","De");
define("_PM_YOUDONTHAVE","Vous n'avez aucun message privé dans ce dossier...");
define("_PM_YOUDONTHAVECONTACT","Vous n'avez aucun contact privé...");
define("_PM_FROMC","De : ");
define("_PM_SENTC","Envoyé le : "); // The date of message sent
define("_PM_PROFILE","Profil de");

//contact
define("_PM_COM","Envois");
define("_PM_JOINDATE","Membre depuis");
define("_PM_CONTACTLAST","Dernière Connexion");
define("_PM_GROUPES","Groupes");
//define("_PM_AVATAR","Avatar");
//define("_PM_PAR","Par: ");
//define("_PM_CONTACTDELETED","Votre (vos) contact(s) a (ont) &#233;t&#233; effac&#233;(s)");
define("_PM_ETAT","État");
define("_PM_ONLINE","Online");
define("_PM_OFFLINE","Offline");

// %s is a username
define("_PM_PREVIOUS","Message précédent");
define("_PM_NEXT","Message suivant");

//%%%%%%	File Name pmlite.php 	%%%%%
define("_PM_SORRY","Désolé! Vous n'êtes pas un membre enregistré.");
define("_PM_REGISTERNOW","S'enregistrer maintenant!");
define("_PM_GOBACK","Retour");
define("_PM_USERNOEXIST","Le membre sélectionné n'existe pas dans la base de données.");
define("_PM_PLZTRYAGAIN","Veuillez vérifier le nom et réessayez.");
define("_PM_MESSAGEPOSTED","Votre message a été envoyé");
define("_PM_CLICKHERE","Tu peux cliquer ici pour voir tes messages privés");
define("_PM_ORCLOSEWINDOW","Ou clique ici pour fermer la fenêtre maintenant.");
define("_PM_USERWROTE","%s a écrit :");
define("_PM_TO","A : ");
define("_PM_SUBJECTC","Sujet : ");
define("_PM_MESSAGEC","Message : ");
define("_PM_ICONC","Icon : ");
define("_PM_CLEAR","Effacer");
define("_PM_CANCELSEND","Annuler l'envoi");
define("_PM_SUBMIT","Envoyer");
define("_PM_SAVEINOUTBOX","Enregistrer une copie dans le dossier 'messages envoyés' ?");
define("_PM_SAVEDRAFT","Enregistrer comme brouillon ?");

//%%%%%%	File Name viewpmsg.php 	%%%%%
define("_PM_SUBJECT","Objet");
define("_PM_DATE","Date");
define("_PM_NOTREAD","Non lu");
define("_PM_READ","lu");
define("_PM_SEND","Envoyer");
define("_PM_DELETE","Effacer");
define("_PM_TOSAVE","Enregistrer");
define("_PM_TOREAD","Marquer");
define("_PM_TOREADNEWS","Marquer lu");
define("_PM_TOREADNO","Marquer non lu");
define("_PM_UNSAVE","Supprimer l'enregistrement");
define("_PM_EMPTY","Vider la boîte");
define("_PM_REPLY","Réponse");
define("_PM_ADDCONTACT","Ajouté a vos contacts");
define("_PM_PLZREG","S'il vous plaît, enregistrez d'abord pour envoyer les messages privés !");
define("_PM_SAVED_PART","Vous êtes autorisé à %d dans votre boîte de sauvegarde et vous avez déjà sauvegardé %d messages sur la période");
define("_PM_SAVED_ALL","Les messages ont été déplacés");
define("_PM_UNSAVED","Les messages n'ont pu être déplacés");
define("_PM_READ_ALL","Les messages ont été marqués");
define("_PM_UNREAD","Les messages n'ont pu être marqués");
define("_PM_EMPTIED","Votre boîte est pleine vide");
define("_PM_RUSUREEMPTY","Êtes-vous certain de vouloir vider la boîte ?");
define("_PM_RUSUREDELETE","Confirmez-vous la suppression de cette sélection ?");
define("_PM_RUSURESAUV","Confirmez-vous le déplacement de votre(vos) message(s)?");
define("_PM_RUSUREREAD","Confirmez-vous le marquage de votre(vos) message(s)?");

define("_PM_RECEIVE","Reçu");
define("_PM_POST","Posté");
define("_PM_READBOX","Boîte de lecture");
define("_PM_RSAVEBOX","Boîte de réception");
define("_PM_OUTBOX","Boîte d'envois");
define("_PM_SAVEBOX","Sauvegarde");
define("_PM_SENTBOX","Messages envoyés");
define("_PM_PSAVEBOX","Post_SAVEBOX");
define("_PM_SAVE","Enregistrer");
define("_PM_SAVED","Enregistré avec succès");
define("_PM_TOC","De : ");

//WANISYS.NET PM HACK1.5
define("_PM_SORT","Tri");
define("_PM_ORDER","Ordre");
define("_PM_UID","UID du Partenaire");
define("_PM_TIME","Date d'envoi");
define("_PM_ASC","ASC");
define("_PM_DESC","DESC");
define("_PM_LIMIT","Messages privés par page");
define("_PM_BACKTOBOX","Retourner dans la boîte de réception");
define("_PM_SORTSUBMIT","Valider");
define("_PM_PREVIOUSP","Précédent");
define("_PM_NEXTP","Suivant");

define("_PM_MAILNOTIFY","%s-Vous avez un nouveau message privé de %s");
define("_PM_MAILMESSAGE","Bonjour!\nA Un nouveau message privé est arrivé de %s\n\nLe titre du message est\n%s\n\nTu peux visualiser ce message ici\n%s\n\n-----------\nTu as reçu ce message car tu as demandé d'être notifié quand tu reçois un nouveau message privé\n\nTu peux changer tes préférences pour les messages privés\n%s\n\nMerci de ne pas répondre à ce message\n\n---------\nCordialement\n%s\n%s\n%s");

define("_PM_EMAIL","Email");
define("_PM_EMAIL_DESC","Cher %s, voici un message transféré à partir de votre compte à ".$xoopsConfig['sitename']);
define("_PM_EMAIL_FROM","De %s");
define("_PM_EMAIL_TO","A %s");
define("_PM_EMAIL_SUBJECT","[message]%s");
define("_PM_EMAIL_MESSAGE","Contenu du message");

define("_PM_ACTION_DONE","Opération exécutée avec succès");
define("_PM_ACTION_ERROR","Désolé!  l'opération a échouée");
define("_PM_ACTION_MSG","Voir mes messages");
//version 1.2
define("_PM_BYC","par : ");
define("_PM_STYLE","Style : ");
//define("_PM_MASQUEFOLDER","Afficher/Masquer les dossiers");
//define("_PM_MASQUEBOX","Afficher/Masquer la boîte à outils");

//1.3
define("_PM_QUOTE","Citer");

//1.5
define("_PM_MASQUEFOLDER","Masquer les dossiers");
define("_PM_MASQUEBOX","Masquer la boîte à outils");
define("_PM_MASQUEVIEW","Masquer le message");

//1.6
define("_PM_ALERT_POURC","Vous utilisez %s, de l'espace de stockage qui vous est alloué");
define("_PM_ALERT_MSG","Votre messagerie utilise trop d&#39;espace, veuillez svp faire le tri de vos messages. <br />Vous ne pourrez plus utiliser la messagerie priv&#233;e tant que ce tri ne sera pas effectu&#233;<br /> Merci de votre compr&#233;hension");

?>